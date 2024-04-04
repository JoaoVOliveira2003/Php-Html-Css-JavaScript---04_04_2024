<?php
echo "Alo Mundo - João - DIA02 ";
require_once("fpdf186/fpdf.php");

class FDF extends FPDF
{
    function Header()
    {
        $image1 = 'download.png';
        $this->Image($image1, 15, 1, 25, 25); 
        $this->SetFont('Arial', 'B', 16);
        $this->Text(40, 7, "IFPR Campus Colombo - Nome de Voces");
        $this->Text(40, 15, "Tads2023 - 2 Ano");
        $this->Text(40, 23, "Desenvolvimento Web II");    
    }
    
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont("Arial", "I", 8);
        $this->Cell(0, 10, "Pag " . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new FDF("P", "mm", "A4");
$pdf->AddPage();

$pdf->SetXY(10, 24);
$pdf->SetFont("Arial", "B", 8);

// Cabeçalho
$pdf->SetXY(10, 24);
$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(30, 10, "ID");
$pdf->Cell(50, 10, "Nome");
$pdf->Cell(50, 10, utf8_decode("Endereço"));
$pdf->Cell(50, 10, "Cidade");
$pdf->Cell(2, 10, "Uf");    

include "inc_dbConexao.php";


//vc faz o que quer fazer aqu
$sql = "SELECT * FROM tabaluno ";
$sql = $sql."where cidade like '%C%' ";



$rs = mysqli_query($conexao, $sql);
$pdf->SetXY(10, 30);
$linhaaux = 1;

while ($reg = mysqli_fetch_array($rs))
{
    $id = $reg["id"];
    $nome = $reg["nome"];
    $endereco = $reg["endereco"];
    $cidade = $reg["cidade"];
    $uf = $reg["uf"];
    $pdf->SetXY(10, 30 + ($linhaaux * 6));
    $pdf->SetFont("Arial", "B", 8);
    $pdf->Cell(30, 5, $id);
    $pdf->Cell(50, 5, $nome);
    $pdf->Cell(50, 5, $endereco);
    $pdf->Cell(50, 5, $cidade);
    $pdf->Cell(2, 5, $uf);
    $linhaaux++;
    if ($linhaaux % 40 == 0)
    {
        $linhaaux = 1;
        $pdf->AddPage();
    }
}

$pdf->Close();
$arquivosaida = "relatorio.pdf";
$pdf->Output('F', $arquivosaida);
echo "<br><a href='$arquivosaida' target='_blank'>Listagem</a>";
?>

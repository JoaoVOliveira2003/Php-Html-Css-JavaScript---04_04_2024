<?php
require_once("fpdf186/fpdf.php");

class FDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Text(90, 10, "Relatorio de Venda");
        $this->Text(90, 15, "Texas Motors");

        // Adiciona a imagem no cabeçalho
        $image1 = 'imag/logotexas.png';
        $this->Image($image1, 50, 1, 25, 25);

        // Cabeçalho das colunas
        $this->SetFont("Arial", "B", 8);
        $this->SetXY(10, 30); // Posição da tabela
        $this->Cell(25, 8, "Modelo", 1, 0, 'C');
        $this->Cell(45, 8, "Ano", 1, 0, 'C');
        $this->Cell(40, 8, "Cor", 1, 0, 'C');
        $this->Cell(60, 8, "Marca", 1, 1, 'C');
    }
   
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont("Arial", "I", 8);
        $this->Cell(0, 10, "Pag " . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new FDF("P", "mm", "A4");

// Adiciona uma página antes de começar a adicionar os dados
$pdf->AddPage();

// Conexão com o banco de dados
include "conecta.php";

$sql = "SELECT * FROM MOTO";
$rs = mysqli_query($conexao, $sql);

$pdf->SetFont("Arial", '', 8);

while ($reg = mysqli_fetch_array($rs))
{
    $modelo = $reg["MODELO"];
    $ano = $reg["ANO"];
    $cor = $reg["COR"];
    $marca = $reg["MARCA"];

    $pdf->Cell(25, 8, $modelo, 1, 0, 'C');
    $pdf->Cell(45, 8, $ano, 1, 0, 'C');
    $pdf->Cell(40, 8, $cor, 1, 0, 'C');
    $pdf->Cell(60, 8, $marca, 1, 1, 'C');
}

$pdf->Close();
$arquivosaida = "relatorio.pdf";
$pdf->Output('F', $arquivosaida);

// Exibe o link para download do PDF com o estilo da classe "button"
echo "<div class='button'> <a href='$arquivosaida' target='_blank'><button>Baixar relatório em PDF</button></a></div>";
?>

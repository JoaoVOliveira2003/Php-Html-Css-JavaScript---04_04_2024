<?php
	echo "Alo Mundo tads2023";
	require_once("fpdf186/fpdf.php");
	class PDF extends FPDF
	{
		function Header()
		{
			$image1 = 'img\logo-ifpr.jpg';
			$this->Image($image1,15,1,25,25);
			$this->SetFont('Arial','B',16);
			$this->Text(40,7,"IFPR Campus Colombo - Nome de Voces");
			$this->Text(40,15,"Tads2023 - 2 Ano");
			$this->Text(40,23,"Desenvolvimento Web II");
		}
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
		}
		
	}
	$pdf = new PDF("P","mm","A4");
	$pdf->AddPage();

	
	// Cabeçalho
	$pdf->SetXY(10,24);
	$pdf->SetFont("Arial","B",8);
	
	$pdf->cell(30,5,"Sequencia");
	$pdf->cell(50,5,"Nome");
	$pdf->cell(50,5,"Endereco");
	$pdf->cell(50,5,"Cidade");
	$pdf->cell(2,5,"UF");
	
	include "inc_dbConexao.php";
        // Recupera dados do Registro
    $sql = "Select * From tabaluno ";
    $rs = mysqli_query($conexao,$sql);
	$pdf->SetXY(10,30);
    $linhaaux = 1;
	while ($reg=mysqli_fetch_array($rs))
    {
        $id = $reg["id"];
        $nome = $reg["Nome"];
        $endereco = $reg["Endereco"];
        $cidade = $reg["Cidade"];
        $uf = $reg["Uf"];
		$pdf->SetXY(10,30+($linhaaux*6));
		$pdf->SetFont("Arial","B",8);
		$pdf->cell(30,5,$id);
		$pdf->cell(50,5,$nome);
		$pdf->cell(50,5,$endereco);
		$pdf->cell(50,5,$cidade);
		$pdf->cell(2,5,$uf);
		$linhaaux++;
		if($linhaaux%40==0)
		{
			 $linhaaux = 1;
			 $pdf->AddPage();
//			 $pdf->SetXY(10,30);
		}
	}
	$pdf->Close();
	mysqli_free_result($rs);
    mysqli_close($conexao);
	$arquivosaida = "relatorio.pdf";
	$pdf->Output('F',$arquivosaida);
	echo "<br><a href=$arquivosaida>Listagem</a>";
	
?>
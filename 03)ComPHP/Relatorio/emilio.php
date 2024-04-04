<?php
	echo "Alo Mundo tads2023 - João Vitor de Oliveira";
	require_once("fpdf186/fpdf.php");
	$pdf = new FPDF("P","mm","A4");
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Text(40,7,"IFPR Campus Colombo - Nome de Voces");
	$pdf->Text(40,15,"Tads2023 - 2 Ano");
	$pdf->Text(40,23,"Desenvolvimento Web II");
	// Cabeçalho
	$pdf->SetXY(10,24);
	$pdf->SetFont("Arial","B",8);
	$pdf->cell(35,5,"Sequencia");
	$pdf->cell(35,5,"Nome");
	$pdf->cell(35,5,"Sexo");
	$pdf->cell(35,5,"Data Nascimento");
	$pdf->cell(35,5,"Disciplina");
	

   
    $linhaaux = 1;
    for($x=1;$x<=80;$x++)
	{		
		$pdf->SetXY(10,30+($linhaaux*6));
		$pdf->SetFont("Arial","B",8);
		$pdf->cell(40,5,"3");
		$pdf->cell(40,5,"Joao Oliveira");
		$pdf->cell(40,5,"M");
		$pdf->cell(40,5,"02/05/2003");
		$pdf->cell(40,5,"Desenvolvimento Web");
		$linhaaux ++;
		if($x%40==0)
		{
			$linhaaux = 1;
			$pdf->AddPage();
		}
	}
	
	$pdf->Close();
	$arquivosaida = "relatorio.pdf";
	$pdf->Output('F',$arquivosaida);
	echo "<br><a href=$arquivosaida target='_blank' >Listagem</a>";
	
?>
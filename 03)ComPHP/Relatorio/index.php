<?php
    echo "Alo Mundo  - João ";
    require_once("fpdf186/fpdf.php");

    class FDF extends FPDF
    {
        function Header()
        {
            $image1='download.png';
            $this->  Image($image1,15,1,25,25); 
            $this->SetFont('Arial','B',16);
            $this->Text(40,7,"IFPR Campus Colombo - Nome de Voces");
            $this->Text(40,15,"Tads2023 - 2 Ano");
            $this->Text(40,23,"Desenvolvimento Web II");    
    
             // Cabeçalho
             $this->SetXY(10,24);
             $this->SetFont("Arial","B",8);
             $this->Cell(35,5,"Sequencia");
             $this->Cell(35,5,"Nome");
             $this->Cell(35,5,"Sexo");
             $this->Cell(35,5,"Data Nascimento");
             $this->Cell(35,5,"Disciplina");    
        }
        
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont("Arial","I",8);
            $this->Cell(0,10,"Pag ".$this->PageNo(),0,0,'C');
        }
    }

    $pdf = new FDF("P","mm","A4");
    $pdf->AddPage();
    
    

    $aux = 1;
    for($x = 1; $x <= 79; $x++)
    {       
        $pdf->SetXY(10,30+($aux*6));
        $pdf->SetFont("Arial","B",8);
        $pdf->Cell(40,5,$x+1);
        $pdf->Cell(40,5,"Joao Oliveira");
        $pdf->Cell(40,5,"M");
        $pdf->Cell(40,5,"02/05/2003");
        $pdf->Cell(40,5,"Desenvolvimento Web");
        $aux++;
        if($x % 40 == 0)
        {
            $aux = 1;
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',16);
        }
    }

    $pdf->Close();
    $arquivosaida = "relatorio.pdf";
    $pdf->Output('F',$arquivosaida);
    echo "<br><a href='$arquivosaida' target='_blank'>Listagem</a>";
?>

<?php

include_once('fpdf/fpdf.php');

$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'hrdc1');
$sql = "SELECT * from batchwise_nomination";
$data1 = mysqli_query($conn,$sql);

class myPDF extends FPDF{
    function header(){
        
        
        $this->SetFont('arial','b','14');
        $this->Cell(276,10,'Patricipant details',1,1,'C',false);
        $this->Ln();
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('arial','','8');
    }
    function headerTable(){
        $this->SetFont('Times','B','12');
		
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(39,10,'Name of Participant',1,'L',false);
		$this->SetXY($xPos + 39 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(45,10,'Functional Department',1,'L',false);
		$this->SetXY($xPos + 45 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(25,10,'Event Name',1,'L',false);
		$this->SetXY($xPos + 25 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(31,10,'Subevent Name',1,'L',false);
		$this->SetXY($xPos + 31 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(26,10,'Employee ID',1,'L',false);
		$this->SetXY($xPos + 26 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(23,10,'Mobile N0.',1,'L',false);
		$this->SetXY($xPos + 23 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(45,10,'Email Id',1,'L',false);
		$this->SetXY($xPos + 45 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(10,10,'Batch',1,'L',false);
		$this->SetXY($xPos + 10 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(17,10,'Slot',1,'L',false);
		$this->SetXY($xPos + 17 , $yPos);
		$xPos=$this->GetX();
	    $yPos=$this->GetY();
        $this->MultiCell(0,10,'Authority',1,'L',false);
		$this->SetXY($xPos + 0 , $yPos);
        $this->Ln();
    }
    function viewTable($db){
        
    }
}


$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->SetFont('Times','',12);
        while($row = mysqli_fetch_assoc($data1)){
            $pdf->Cell(39,10,$row['Name of Participant'],1,'L',false);
            $pdf->Cell(45,10,$row['Functional Department'],1,'L',false);
            $pdf->Cell(25,10,$row['Event Name'],1,'L',false);
            $pdf->Cell(31,10,$row['Subevent Name'],1,'L',false);
            $pdf->Cell(26,10,$row['Employee ID'],1,'L',false);
            $pdf->Cell(23,10,$row['Mobile Number'],1,'L',false);
            $pdf->Cell(45,10,$row['Email Id'],1,'L',false);
            $pdf->Cell(10,10,$row['Select Batch'],1,'L',false);
            $pdf->Cell(17,10,$row['Select slot'],1,'L',false);
            $pdf->Cell(0,10,$row['Report Authority'],1,'L',false);
            $pdf->Ln();    
        }
$pdf->Output('PDF.pdf','I');



?>


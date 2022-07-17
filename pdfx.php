<?php

$conn = mysqli_connect('localhost','root','','hrdc1');

$sql = "SELECT * from `batchwise_nomination`";

$records=mysqli_query($conn,$sql);
$fetch = $records;

require("fpdf/fpdf.php");

class PDF extends FPDF{
  function Header(){
  }
  function Footer(){
  }
}

$pdf = new PDF('p', 'mm', 'Legal');
$title = 'Participant Deatails';
$pdf->SetTitle($title);
$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true,40);

$pdf->AddPage();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);

$pdf->MultiCell(194,4,"PARTICIPANT DETAILS",0,'C', false);

$pdf->Ln(1);

$pdf->SetBorders(array('LT', 'LT', 'LT', 'LT', 'LT', 'LT', 'LT', 'LT', 'LT', 'LT'));
$pdf->SetWidths(array(30, 30, 33,30, 30,30, 30, 33,30, 30));
$pdf->SetAligns(array('L', 'L', 'L', 'L', 'L','L', 'L', 'L', 'L', 'L'));

$pdf->SetFont('Arial', 'B', 10);

$pdf->Row(array("Name of Participant",
            "Functional Department",
            "Event Name",
            "Subevent Name",
			"Employee ID",
			"Mobile Number",
			"Email Id",
			"Select Batch",
			"Select slot",
            "Select slot"), 1);

$pdf->SetFont('Arial', '', 11);


while($row = mysqli_fetch_assoc($records)){
  $pdf->Row(array($row['Name of Participant'],
  $row['Functional Department'],
  $row['Event Name'],
  $row['Subevent Name'],
  $row['Employee ID'],
  $row['Mobile Number'],
  $row['Email Id'],
  $row['Select Batch'],
  $row['Select slot'],
  $row['Report Authority']), 1);
  }

$pdf->SetBorders(array('T', 'T', 'T', 'T', 'T','T', 'T', 'T', 'T', 'T'));
$pdf->Row(array('','','','','','','','','',''), 1, false, 1);

$pdf->OutPut();
?>
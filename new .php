<?php

$pdf->Cell(150,5,"MultiCell method",0,1);

$conn = mysqli_connect('localhost','root','','hrdc1');

$sql = "SELECT * from `batchwise_nomination`";

$records=mysqli_query($conn,$sql);

$data2 = while($row = mysqli_fetch_assoc($records)){
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

foreach($data2 as $item){
	$cellWidth=80;//wrapped cell width
	$cellHeight=5;//normal one-line cell height
	
	//check whether the text is overflowing
	if($pdf->GetStringWidth($item[2]) < $cellWidth){
		//if not, then do nothing
		$line=1;
	}else{
		//if it is, then calculate the height needed for wrapped cell
		//by splitting the text to fit the cell width
		//then count how many lines are needed for the text to fit the cell
		
		$textLength=strlen($item[2]);	//total text length
		$errMargin=10;		//cell width error margin, just in case
		$startChar=0;		//character start position for each line
		$maxChar=0;			//maximum character in a line, to be incremented later
		$textArray=array();	//to hold the strings for each line
		$tmpString="";		//to hold the string for a line (temporary)
		
		while($startChar < $textLength){ //loop until end of text
			//loop until maximum character reached
			while( 
			$pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) &&
			($startChar+$maxChar) < $textLength ) {
				$maxChar++;
				$tmpString=substr($item[2],$startChar,$maxChar);
			}
			//move startChar to next line
			$startChar=$startChar+$maxChar;
			//then add it into the array so we know how many line are needed
			array_push($textArray,$tmpString);
			//reset maxChar and tmpString
			$maxChar=0;
			$tmpString='';
			
		}
		//get number of line
		$line=count($textArray);
	}
	
	//write the cells
	$pdf->Cell(10,($line * $cellHeight),$item[0],1,0); //adapt height to number of lines
	$pdf->Cell(60,($line * $cellHeight),$item[1],1,0); //adapt height to number of lines
	
	//use MultiCell instead of Cell
	//but first, because MultiCell is always treated as line ending, we need to 
	//manually set the xy position for the next cell to be next to it.
	//remember the x and y position before writing the multicell
	$xPos=$pdf->GetX();
	$yPos=$pdf->GetY();
	$pdf->MultiCell($cellWidth,$cellHeight,$item[2],1);
	
	//return the position for next cell next to the multicell
	//and offset the x with multicell width
	$pdf->SetXY($xPos + $cellWidth , $yPos);
	
	$pdf->Cell(40,($line * $cellHeight),$item[3],1,1); //adapt height to number of lines
	
	
	
	
	
	
	
	
	
	
	
	
	
}






































$pdf->Output();
?>
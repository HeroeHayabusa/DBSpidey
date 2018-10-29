<?php
session_start();
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}
	
include "../conexion.php";
$query = "SELECT rol, count(*) as number FROM usuario GROUP BY rol";  
require('FPDF/pdf-sector.php');
$result = mysqli_query($conection, $query);
class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		//$this->Image('logo-small.png',10,10,10);
		
		$this->Cell(100,10,"Grafica de Administradores y Usuarios",0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
	}
	function Footer(){
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}
$pdf = new PDF_SECTOR('P','mm','A4'); //use new class
$pdf->AddPage();
//chart data
$data=Array(
              
	'Admin'=>[
		'color'=>[255,0,0],
		'value'=>60],
	'Usuarios'=>[
		'color'=>[255,255,0],
		'value'=>40],
	);

//pie and legend properties
$pieX=105;
$pieY=60;
$r=40;//radius
$legendX=150;
$legendY=70;

//get total data summary
$dataSum=0;
foreach($data as $item){
	$dataSum+=$item['value'];
}

//get scale unit for each degree
$degUnit=360/$dataSum;

//variable to store current angle
$currentAngle=0;
//store current legend Y position
$currentLegendY=$legendY;

$pdf->SetFont('Arial','',9);

//simplify the code by drawing both pie and legend in one loop
foreach($data as $index=>$item){
	//draw the pie
	//slice size
	$deg=$degUnit*$item['value'];
	//set color
	$pdf->SetFillColor($item['color'][0],$item['color'][1],$item['color'][2]);
	//remove border
	$pdf->SetDrawColor($item['color'][0],$item['color'][1],$item['color'][2]);
	//draw the slice
	$pdf->Sector($pieX,$pieY,$r,$currentAngle,$currentAngle+$deg);
	//add slice angle to currentAngle var
	$currentAngle+=$deg;
	
	//draw the legend	
	$pdf->Rect($legendX,$currentLegendY,5,5,'DF');
	$pdf->SetXY($legendX + 6,$currentLegendY);
	$pdf->Cell(50,5,$index,0,0);
	$currentLegendY+=5;
}

$pdf->Output(); 

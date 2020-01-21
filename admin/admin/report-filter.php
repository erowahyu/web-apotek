<?php
session_start();
error_reporting(0);
include('config.php');
require('report/fpdf/fpdf.php');

date_default_timezone_set('Asia/Jakarta');// change according timezone

$currentTime = date( 'd-m-Y h:i:s A', time () );


$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('images/php.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'APOTEK',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telepon : +62 83845679448',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Minomartani, Sleman, Yogyakarta',0,'L');
$pdf->SetX(4);
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Report Orders",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Printed On : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Product Name', 1, 0, 'C');
$pdf->Cell(9, 0.8, 'Product Code', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Date', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Price', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Unit', 1, 1, 'C');
$pdf->SetFont('Arial','',9);
$no=1;

$from=$_POST['from'];
$end=$_POST['end'];
$query=mysqli_query($con,"select * from orders ");
while($lihat=mysqli_fetch_array($query)){

	$pdf->Cell(1, 0.8, $no, 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['product_name'], 1, 0,'C');
	$pdf->Cell(9, 0.8, $lihat['product_code'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['date'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['price'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['units'], 1, 1,'C');

	$no++;
}
$pdf->ln(1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40.5,0.7,"Approve",0,10,'C');

$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40.5,0.7,"Admin",0,10,'C');

$pdf->Output("laporan_pemesanan.pdf","I");

?>
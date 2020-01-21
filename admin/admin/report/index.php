<?php
# koneksi database
$servername    = "localhost";
$username    = "root";
$password    = "";
$dbname        = "apotek";

$conn    = mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn){
    die ("Connection Failed: ". mysqli_connect_error());
    }

# include fdpf tergantung direktori file kamu
include "fpdf/fpdf.php";

$tgl = date('d-M-Y');
$pdf = new FPDF('P','mm',array(297,210));
$pdf->Open();
$pdf->addPage();
$pdf->setAutoPageBreak(false);

# header
$pdf->setFont('Arial','',12);
$pdf->text(70,26,'REPORT ORDER '.date('Y'));
$yi = 44;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(10,6,'NO',1,0,'C',1);
$pdf->CELL(40,6,'PRODUCT CODE',1,0,'C',1);
$pdf->CELL(40,6,'PRODUCT NAME',1,0,'C',1);
$pdf->CELL(15,6,'UNIT',1,0,'C',1);
$pdf->CELL(25,6,'PRICE',1,0,'C',1);
$pdf->CELL(40,6,'DATE',1,0,'C',1);

# menampilkan data dari database
$sql = mysqli_query($conn,"select * from orders order by id asc");
$no = 1;
$row = 6;
$ya = $yi + $row;
while($data = mysqli_fetch_array($sql)){
	$pdf->setXY(10,$ya);
	$pdf->setFont('arial','',9);
	$pdf->setFillColor(255,255,255);
	$pdf->cell(10,6,$no,1,0,'C',1);
	$pdf->cell(40,6,$data['product_code'],1,0,'C',1);
	$pdf->cell(40,6,$data['product_name'],1,0,'C',1);
	$pdf->cell(15,6,$data['units'],1,0,'C',1);
	$pdf->cell(25,6,$data['price'],1,0,'C',1);
	$pdf->cell(40,6,$data['date'],1,0,'C',1);
	$ya = $ya+$row;
	$no++;
}

# untuk menuliskan nama bulan dengan format Indonesia
$bln_list = array(
	'01' => 'Januari',
	'02' => 'Februari',
	'03' => 'Maret',
	'04' => 'April',
	'05' => 'Mei',
	'06' => 'Juni',
	'07' => 'Juli',
	'08' => 'Agustus',
	'09' => 'September',
	'10' => 'Oktober',
	'11' => 'November',
	'12' => 'Desember'
	);

# footer
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',9); 
$pdf->SetX(120); 
$pdf->MultiCell(95,10,'Semarang, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(120); 
$pdf->MultiCell(95,0, 'ADMIN',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,20, ' ',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, 'ERO WAHYU P',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, '_________________________',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,8, 'NIP : ero@admin.com',0,'C');
$pdf->Ln();
$pdf->output();
?>
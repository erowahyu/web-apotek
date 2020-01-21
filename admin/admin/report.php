<html>
<head>
<title>Report Order</title>
<style>
.table1{
font-family:sans_serif;
color:#232323;
border-collapse:collapse;
}
.table1,th,td{
border:1px solid #999;
padding:5px 14px;
}
</style>
</head>
<body>
<h3 style="text-align: center;">REPORT ORDER</h3>
<table cellspacing="0";  width="90%" align="center">
<tr>
<th style="text-align: center;" width="2%" bgcolor="#F4F4F">No</th>
<th style="text-align: center;" width="10%">Product Code</th>
<th style="text-align: center;" width="15%">Product Name</th>
<th style="text-align: center;" width="10%">Unit</th>
<th style="text-align: center;" width="15%">Price</th>
<th style="text-align: center;" width="15%">Date</th>
</tr>
<?php
include "koneksi.php";
$query = "SELECT * FROM orders";
$sql = mysqli_query($konek, $query);
$row = mysqli_num_rows($sql);
if($row > 0){
$i=1;
while($data = mysqli_fetch_array($sql)){
if($i%2!=0){
$gridcolor="white";
}else{
$gridcolor="lavender";
}
echo "<tr>";
echo "<td style='text-align: center;' width='2%' bgcolor='".$gridcolor."'>".$i++."</td>";
echo "<td style='text-align: left;' width='10%' bgcolor='".$gridcolor."'>".$data['id']." ( ".$data['product_code']." )</td>";
echo "<td style='text-align: left;' width='15%' bgcolor='".$gridcolor."'>".$data['product_name']."</td>";
echo "<td style='text-align: center;' width='10%' bgcolor='".$gridcolor."'>".$data['units']."</td>";
echo "<td style='text-align: center;' width='15%' bgcolor='".$gridcolor."'>".$data['price']."</td>";
echo "<td style='text-align: center;' width='15%' bgcolor='".$gridcolor."'>".$data['date']."</td>";
echo "</tr>";
echo "<tr>";
}
}else{ // Jika data tidak ada
echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}

?>

</table>
</body>
</html>
<?php
$html = ob_get_contents();
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
ob_end_clean();
$pdf->Output('Data Mahasiswa Aktif.pdf', 'FI');
?>
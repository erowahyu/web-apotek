
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$password = $_POST['password'];
$mysqli->query("INSERT INTO users(fname,lname,address,phone,type,password) VALUES('$fname','$lname','$address','$phone','$type','$password')");
echo "<script>alert('Data berhasil dibuat!');history.go(-2);</script>";
?>
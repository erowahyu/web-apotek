<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$phone = $_POST["phone"];
$pwd = $_POST["pwd"];
$type = $_POST["type"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, phone, password, type) VALUES('$fname', '$lname', '$address', '$city', $pin, '$phone', '$pwd', '$type')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>

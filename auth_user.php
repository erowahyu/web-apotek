<?php
include(koneksi.php)
if (!isset ($_SESSION["Login"]) || $_SESSION ["Login"] != true){
	header ("Location: ../pagenotfound.php");
}
else if ($_SESSION["level"] = user){
	$_SESSION ["Login"] = true;
}
else{
	header ("Location: ../pagenotfound.php");
}

?>
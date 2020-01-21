<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Full Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="apotek";
	$mysqli=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>
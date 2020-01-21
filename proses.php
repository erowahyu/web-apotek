<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$pwd = $_POST['pwd'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($mysqli,"select * from users where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['type']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['type']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:index.php");

	// cek jika user login sebagai pengurus
	}else if($data['type']=="kurir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "kurir";
		// alihkan ke halaman dashboard pengurus
		header("location:user/index.html");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>
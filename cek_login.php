<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi111.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:internal.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:user.php");
	}
	else if($data['level']=="pengurus"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pegawai
		header("location:mks/mks.php");
	}
	else if($data['level']=="pegawaimks"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawaimks";
		// alihkan ke halaman dashboard pegawai
		header("location:mks/mksus.php");
	}
	else if($data['level']=="adminbdg"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "adminbdg";
		// alihkan ke halaman dashboard pegawai
		header("location:bdg/bdgadmin.php");
	}
	else if($data['level']=="bdguser"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "bdguser";
		// alihkan ke halaman dashboard pegawai
		header("location:bdg/bdgus.php");
	}
	else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>
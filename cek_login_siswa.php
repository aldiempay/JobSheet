<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nis = $_POST['nis'];



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'"); 

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	

		// buat session login dan username
		$_SESSION['nis'] = $nis;
		
		// alihkan ke halaman dashboard admin
		header("location:lat_sekolah/siswa.php");

	// cek jika user login sebagai pegawai
	

	
}else{
	header("location:index_siswa.php?pesan=gagal");
}



?>
<?php 
session_start();
if ($_SESSION['id_level']=="") {
    header("location:../index.php?pesan=gagal");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Import</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}

	p{
		color: green;
	}
</style>
<h2></h2>
<h3></h3>



<a href="admin.php">Kembali</a>
<br/><br/>
<?php 
include 'koneksi.php';
?>

<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
	Pilih File: 
	<input name="filepegawai" type="file" required="required"> 
	<input name="upload" type="submit" value="Import">
</form>

<br/><br/>


</body>
</html>
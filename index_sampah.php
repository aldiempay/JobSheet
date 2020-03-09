<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body >
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai / Masuk Sebagai Admin !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">login Sebagai Admin !</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input class="input100" type="text" name="username" placeholder="username">
			
			<label>Password</label>
			<input class="input100" type="password" name="password" placeholder="Password">
			<br> <br>
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<a href="index_siswa.php">Login Sebagai Siswa</a>
		</form>
		
	</div>
 
 
</body>
</html>
<?php 
session_start();
if ($_SESSION['id_level']=="") {
    header("location:../index.php?pesan=gagal");
}

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>JURUSAN</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <!-- styles -->
            <link href="css/styles.css" rel="stylesheet">
    </head>
<body>
<!-- navbar -->
<div class="header"  style="background-image: url('')">
	<div class="container">
	    <div class="row">
	        <div class="col-md-5">
	            <!-- Logo -->
	            <div class="logo">
	                <h1><a href="#">Aldi Muhamad Sidik</a></h1>
	            </div>
	        </div>
	            <div class="col-md-5">
	            <div class="row">
	               
	            </div>
	            </div>
	            <div class="col-md-2">
	            <div class="navbar navbar-inverse" role="banner">
	                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                        <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                        <!--<li><a href="login.php">Login</a></li>-->
	                        <li><a href="../logout.php">Logout</a></li>
	                        </ul>
	                        </li>
	                    </ul>
	                </nav>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<!-- menu -->

<div class="page-content">
    <div class="row">
		<div class="col-md-2">
		<div class="sidebar content-box"  style="background-image: url('')">
            <ul class="nav">
            <!-- Main menu -->
            <a href="index.html"><img src="" width="100px" /></a>
            <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> HOME</a></li>
            <li class="submenu">
			    <a href="#">
					<i class="glyphicon glyphicon-user"></i> SISWA
						<span class="caret pull-right"></span>
				</a>
				<!-- Sub menu -->
				<ul>
				    <li><a href="admin.php">Data Siswa</a></li>
					<li><a href="create.php">Tambah Data Siswa</a></li>
				</ul>
            </li>
            <li class="submenu">
			    <a href="#">
					<i class="glyphicon glyphicon-sort"></i> JURUSAN
						<span class="caret pull-right"></span>
				</a>
				<!-- Sub menu -->
				<ul>
				    <li><a href="jur.php">Data Jurusan</a></li>
					<li><a href="create_jur.php">Tambah Data Jurusan</a></li>
                </ul>
			</li>
            <li class="submenu">
			    <a href="#">
					<i class="glyphicon glyphicon-list"></i> KELAS
						<span class="caret pull-right"></span>
				</a>
				<!-- Sub menu -->
                <ul>
				    <li><a href="kelas.php">Data Kelas</a></li>
					<li><a href="create_kls.php">Tambah Data Kelas</a></li>
				</ul>
            </ul>
        </div>
        </div>
<!-- content -->
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12">
            <div class="content-box-large">
  				<div class="panel-heading">
                    <div class="panel-title">Data Jurusan</div>
				</div>
                <div class="panel-body">
                <div class="table-responsive">
  				    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                        <tr>
                            <th>No</th>
                       <!--      <th>ID Jurusan</th>  -->
                            <th>Jurusan</th>
                            <th>Kepala Program</th>
                            <th>Action</th>
                        </tr>
                            <?php
                            include 'koneksi.php';
                            $no=1;
                            $sql = 'SELECT * FROM jurusan';
                            $query = mysqli_query($koneksi,$sql);

                            if (!$query){
                                die ('SQL Error : '.mysqli_error($koneksi));
                            }
                            while ($row = mysqli_fetch_array($query)){
                            echo "<tr>";
                                echo "<td>".$no++."</td>";
                                // echo "<td>".$row['id_jur']."</td>";
                                echo "<td>".$row['nm_jur']."</td>";
                                echo "<td>".$row['kaprog']."</td>";
                                echo "<td>";
                                echo "<a href=up_jur.php?id_jur=".$row['id_jur'].">Edit</a> | ";
                                echo "<a href=del_jur.php?id_jur=".$row['id_jur'].">Hapus </a>";
                                echo "</td>";        
                            echo "</tr>";
                            }
                            ?>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
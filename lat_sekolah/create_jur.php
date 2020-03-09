<?php 
session_start();
if ($_SESSION['id_level']=="") {
    header("location:../index.php?pesan=gagal");
}

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CREATE JURUSAN</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <!-- styles -->
            <link href="css/styles.css" rel="stylesheet">
			
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
			<link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
			<link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
			
			<link href="css/forms.css" rel="stylesheet">
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
	                        <!--<li><a href="profile.php">Profile</a></li>-->
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
            <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i> HOME</a></li>
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
            <div class="content-box-large">
                <div class="panel-heading">
					<div class="panel-title">Tambah Data Jurusan</div>
				</div>
                <div class="panel-body">
            <!-- form -->
            <form action="tmbh_jur.php" method="post" class="form-horizontal">
            <fieldset>
            <div class="form-group">
				<label class="col-md-2 control-label" for="nm_jur">Nama Jurusan</label>
					<div class="col-md-10">
						<input class="form-control" placeholder="Nama Jurusan" type="text" name="nm_jur" required>
					</div>
			</div>
            <div class="form-group">
				<label class="col-md-2 control-label" for="kaprog">Kepala Program</label>
					<div class="col-md-10">
						<input class="form-control" placeholder="Kepala Program" type="text" name="kaprog" required>
					</div>
			</div>
        
            </fieldset>
                <button class="btn btn-primary" type="submit" name="simpan_jur">
				<i class="glyphicon glyphicon-save"></i>
					Submit
				</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
    <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
</body>
</html>
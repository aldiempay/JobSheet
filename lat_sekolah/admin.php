<?php 
session_start();
if ($_SESSION['id_level']=="") {
    header("location:../index.php?pesan=gagal");
}

 ?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="icon" type="image/png" href="">
        <title>Data Siswa</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <!-- styles -->
            <link href="css/styles.css" rel="stylesheet">
            
    </head>
<body   >
<!-- navbar -->
<div class="header">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun<b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeInUp">
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
    <div class="col-md-10" >
        <div class="row" >
            <div class="col-md-12">
            <div class="content-box-large">
  				<div class="panel-heading">
                    <div class="panel-title" >Data Siswa</div>
                   
                </div>
         
                <div class="panel-body" >
                <div class="table-responsive">
                      <!--Cetak Data-->
                <a href=cetak_n.php class="btn btn-success"> Export Data To PDF </a>
                  
                <a href=index_export.php class="btn btn-success"> Export Data To Excel </a>
                   
                

                <form class="form-group" method="post" enctype="multipart/form-data" action="upload_aksi.php">
                Pilih File: 
                <input name="filepegawai" type="file" required="required"> 
                <input name="upload" type="submit" value="Import" class="btn btn-success"></form>
                


                  <br>
  				    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
<br>

                        <tr >
                            <th class="table-primary" style="text-align: center;">No</th>
                           <!--  <th>ID Siswa</th>  -->
                            <th class="table-primary" style="text-align: center;">Kelas</th>
                            <th class="table-primary" style="text-align: center;">Jurusan</th>
                            <th class="table-primary" style="text-align: center;">NIS</th>
                            <th class="table-primary" style="text-align: center;">Nama</th>
                            <th class="table-primary" style="text-align: center;">Gender</th>
                            <th class="table-primary" style="text-align: center;">Agama</th>
                            <th class="table-primary" style="text-align: center;">TTL</th> 
                            <th class="table-primary" style="text-align: center;">Alamat</th>
                            <th class="table-primary" style="text-align: center;">Nama Orangtua</th>
                            <th class="table-primary" style="text-align: center;">Alamat Orangtua</th>
                            <th class="table-primary" style="text-align: center;">Foto</th>
                            <th class="table-primary" style="text-align: center;">Action</tr>
                        </tr>
                            <?php
                            include 'koneksi.php';
                       
                            $no=1;
                                 
                            $sql = "SELECT siswa.id_siswa,siswa.nis,siswa.foto,siswa.nama,siswa.jk, siswa.agama, siswa.tgl_lahir,siswa.tmpt_lahir,siswa.alamat,siswa.nm_ortu,siswa.alamat_ortu,siswa.foto,siswa.id_kelas,kelas.nm_kelas,kelas.tingkat,kelas.id_jur,jurusan.nm_jur,jurusan.kaprog FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id INNER JOIN jurusan ON kelas.id_jur=jurusan.id_jur";
                            $query = mysqli_query($koneksi,$sql);
                            if (!$query){
                                die ('SQL Error : '.mysqli_error($koneksi));
                            }
                            while ($row = mysqli_fetch_array($query)){ ?>
                            <tr>
                                <td><?php echo $no++;?> </td>
                          <!--       <td><?php echo $row['id_siswa'];?></td> -->
                                <td><?php echo $row['tingkat'];?> <?php echo $row['nm_kelas'];?></td>
                                <td><?php echo $row['nm_jur'];?></td>
                                <td><?php echo $row['nis'];?></td>
                                <td><?php echo $row['nama'];?></td>
                                <td><?php echo $row['jk'];?></td>
                                <td><?php echo $row['agama'];?></td>
                                <td><?php echo $row['tmpt_lahir'];?>,<?php echo $row['tgl_lahir'];?></td>
                                <td><?php echo $row['alamat'];?></td>
                                <td><?php echo $row['nm_ortu'];?></td>
                                <td><?php echo $row['alamat_ortu'];?></td>
                                <td> <img src="<?php echo "images/".$row['foto'];?>" width="100px"></td>
                                <td>
                                    <a href=update.php?id_siswa=<?php echo $row['id_siswa'];?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href=cetak_s.php?id_siswa=<?php echo $row['id_siswa'];?>" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i></a>
                                    <a href=delete.php?id_siswa=<?php echo $row['id_siswa'];?>" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></a>
                                    
                                    
                                </td>        
                            </tr>
                    <?php }?>
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
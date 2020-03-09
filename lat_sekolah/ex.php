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
				    <li><a href="siswa.php">Data Siswa</a></li>
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
                
                <!-- Slider -->
    <div class="container">		
	<center><h1></h1></center>
	<br/>
	<div class="col-md-8 col-md-offset-1">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>		
			</ol>
 
			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/1.jpg" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>www.malasngoding.com</h3>
						<p>Tutorial belajar pemrograman web, mobile dan design.</p>
					</div>
				</div>
				<div class="item">
					<img src="img/2.jpg" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>Tutorial Bootstrap</h3>
						<p>Belajar tutorial bootstrap dasar di www.malasngoding.com</p>
					</div>
				</div>
				<div class="item">
					<img src="img/3.jpg" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>Tutorial Android</h3>
						<p>Tutorial membuat aplikasi android.</p>
					</div>
				</div>				
			</div>
 
			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
   </div>
   <!--Akhir slider-->
                
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
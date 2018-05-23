<?php

	ob_start();
	session_start();
	if (!isset($_SESSION['username'])) header("location:form_login.php");
	include "koneksi.php";  
  $tampil = mysqli_query($koneksi, "SELECT * FROM admin where username = '$_SESSION[username]'");
  while ($hasil = mysqli_fetch_array ($tampil)){
    $username = $hasil['username'];
    $namadepan = $hasil['nama_depan'];
    $namabelakang = $hasil['nama_belakang'];
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Aplikasi Pengolahan Data Karyawan</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
    <!-- Custom styles for this template -->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar" aria-expaded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				 <a class="navbar-brand" href="index.php?page=home">Sistem Informasi Pengolahan Data Karyawan</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li></li>
            		<li><a href="index.php?page=home">Home</a></li></li>
            		<li><a href="index.php?page=profiladmin"><?php echo $namadepan;?></a></li>
            		<li><a href="logout.php?berhasil-logout">Logout</a></li>
          		</ul>
          		<form class="navbar-form navbar-right">
           			<input type="text" class="form-control" placeholder="Cari...">
          		</form>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"></a></li>
            <li><a href="#">Reports</a></li>
            <li class="active"><a href="index.php?page=data_karyawan">Data Karyawan <span class="sr-only">(current)</span></a></li>
            <li><a href="index.php?page=data_divisi">Data Divisi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-0 main">
        	<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'data_karyawan': include "lihat.php"; break;
				case 'data_divisi': include "lihat2.php"; break;
				case 'home'	: include "index4.php"; break;
				case 'formeditkaryawan'	: include "formeditkaryawan.php"; break;
				case 'edit_karyawan' : include "edit_karyawan.php"; break;
				case 'edit_divisi' : include "edit_divisi.php"; break;
				case 'formcari' : include "formcari.php"; break;
				case 'forminputkaryawan2' : include "forminputkaryawan2.php"; break;
				case 'lihat' : include "lihat.php"; break;
				case 'lihat2' : include "lihat2.php"; break;
				case 'delete' : include "delete.php"; break;
				case 'deletediv' : include "deletediv.php"; break;
				case 'detail' : include "detail.php"; break;
				case 'forminputdivisi' : include "forminputdivisi.php"; break;
				case 'profiladmin' : include "profiladmin.php"; break;
				case 'main' :
				default : include 'index4.php';	
			}
			?>
      </div>
    </div>
</body>
</html>

<?php

	mysqli_close($koneksi);
	ob_end_flush();

?>
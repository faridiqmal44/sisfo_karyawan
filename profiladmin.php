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
    $foto_admin = $hasil['foto_admin'];
  }
  //echo $_SESSION['id_admin'];
?>

  <body>

    
      <!--<nav class="navbar navbar-inverse navbar-fixed-top">
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
                <li><a href="profiladmin.php"><?php echo $namadepan." ".$namabelakang ;?></a></li>
                <li><a href="logout.php?berhasil-logout">Logout</a></li>
              </ul>
              <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Cari...">
              </form>
      </div>
    </div>
  </nav>-->
      <!--<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>-->

      <div class="jumbotron ">
          <h2>Profil Admin</h2>
          <hr />
        <h2 align="center"><?php echo $namadepan." ".$namabelakang ;?></h2>
        <h4 align="center"><small>username </small><?php echo $_SESSION['username'] ;?></h2>
        <div align="center">
          <img src="images/<?php echo $foto_admin ;?>" class="img img-rounded" height="200px" width="200px" style="align:center">
        </div>
      </div>
    <!-- /container -->


    
  </body>

<?php 

 //mysqli_close($koneksi);
  ob_end_flush();

 ?>
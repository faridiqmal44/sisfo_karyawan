<?php

    ob_start();
    session_start();
    if (isset($_SESSION['username'])) header("location:index.php");
    include "koneksi.php";

  /* PROSES LOGIN */
    if (isset($_POST['proseslogin'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $query = mysqli_query($koneksi, "SELECT * from admin WHERE username = '$username' AND password = '$password'");

      if (mysqli_num_rows($query)>0) {
        $row_akun = mysqli_fetch_array($query);
        $_SESSION['id_admin'] = $row_akun['id_admin'];
        $_SESSION['username'] = $row_akun['username'];
        header("location:index.php");
      }
      else{
        header("location:form_login.php?login-gagal");
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | Sistem Informasi Karyawan</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="col-md-3 col-md-offset-4">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Silahkan Masuk</h2>
        <label for="inputusername" class="sr-only">Email address</label>
        <input type="text" id="inputusername" class="form-control" placeholder="Masukan Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only" name="password">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Masukan Password" name="password" required>
        <?php if (isset($_GET['berhasil-logout'])) { ?>
        <span>Anda berhasil logout</span>
        <?php } ?>
        <?php if (isset($_GET['login-gagal'])) { ?>
        <span>Username atau Password salah</span>
        <?php } ?>
        <div class="checkbox">
          <label>
            <input
             type="checkbox" value="remember-me"> Ingatkan Saya
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="proseslogin">Login</button>
      </form>
    </div>
    </div> <!-- /container -->


    
  </body>
</html>

<?php 
  mysqli_close($koneksi);
  ob_end_flush();
 ?>
<?php 

	session_start();
	$_SESSION['id_admin'];
	$_SESSION['username'];

	unset($_SESSION['id_admin']);
	unset($_SESSION['username']);

	session_unset();
	session_destroy();

	header("location:form_login.php?berhasil-logout")

 ?>
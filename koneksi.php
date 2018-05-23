<?php

	global $koneksi;

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sisfo_karyawan";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		die("Koneksi Gagal".mysql_connect_error());
	}
	
?>
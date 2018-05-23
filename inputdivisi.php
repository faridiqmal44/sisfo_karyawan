<!DOCTYPE html>
<html>
<body>
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
	$nama_divisi= $_POST['nama_divisi'];
	$keterangan	= $_POST['keterangan'];

//validasi data jika nama dan nik kosong
	if (empty($_POST['nama_divisi'])) {
?>
	<script language="JavaScript">
		alert('Data Harap Dilengkapi');
		document.location='index.php?page=forminputdivisi';
	</script>
<?php
	}
	//Jika Validasi Terpenuhi
	else {
	//buka koneksi ke engine MySQL
	$Open = include "koneksi.php";

//Masukan data ke Table Karyawan
$input	="INSERT INTO divisi (id_divisi, nama_divisi, keterangan)
		VALUES ('','$nama_divisi','$keterangan')";
$query_input =mysqli_query($koneksi, $input);
	if ($query_input) {
	//Jika Sukses
?>
		<script language="JavaScript">
		alert('Data Divisi berhasil diinput');
		document.location='index.php?page=data_divisi';
		</script>
<?php
	}
	else {
	//Jika Gagal
	echo "Data Divisi gagal diinput, Silahkan diulangi!";
	}
//Tutup koneksi engine MySQL
	mysqli_close($koneksi);
	}
}
?>
</body>
</html>

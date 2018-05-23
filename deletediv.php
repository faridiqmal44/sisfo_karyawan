<?php
//koneksi ke engine mysql
$Open = include "koneksi.php";
	if (!$Open){
	die ("Koneksi ke Engine MySQL Gagal !<br>");
	}
// Cek nik
if (isset($_GET['id_divisi'])) {
	$id_divisi = $_GET['id_divisi'];
// membaca nama file yang akan dihapus
$query   = "SELECT * FROM divisi WHERE id_divisi='$id_divisi'";
$hasil   = mysqli_query($koneksi, $query);
}
else {
	die ("Error. Tidak ada Nik yang dipilih Silakan cek kembali! ");	
}
//proses hapus data
	if (!empty($id_divisi) && $id_divisi != "") {
		$hapus = "DELETE FROM divisi WHERE id_divisi='$id_divisi'";
		$sql = mysqli_query($koneksi, $hapus);
		if ($sql) {		
			?>
				<script language="JavaScript">
				alert('Data Karyawan <?=$id_divisi?> Berhasil dihapus!');
				document.location='index.php?page=data_divisi';
				</script>
			<?php		
		} else {
			echo "<h2><font color=red><center>Data Divisi gagal dihapus</center></font></h2>";	
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
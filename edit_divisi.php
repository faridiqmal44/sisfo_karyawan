<div class="container">
<?php
$Open = include "koneksi.php";
if (isset($_GET['id_divisi'])) {
	$id_divisi = $_GET['id_divisi'];
}
//Tampilkan data dari tabel karyawan
	$query	= "SELECT * FROM divisi WHERE id_divisi='$id_divisi'";
	$sql	= mysqli_query ($koneksi, $query);
	$hasil	= mysqli_fetch_array ($sql);
	$id_divisi	= $hasil['id_divisi'];
	$nama_divisi	= $hasil['nama_divisi'];
	$keterangan	= $hasil['keterangan'];
		
//proses edit data karyawan
if (isset($_POST['Editdivisi'])) {
	$id_divisi	= $_POST['id_divisi'];
	$nama_divisi	= $_POST['nama_divisi'];
	$keterangan		= $_POST['keterangan'];
	//update
	$query = "UPDATE divisi SET nama_divisi='$nama_divisi', keterangan='$keterangan' WHERE id_divisi='$id_divisi'";
	$sql = mysqli_query ($koneksi, $query);
	//setelah berhasil update
	if ($sql) {
		header("location:index.php?page=lihat2");	
	} else {
		echo "<h3><font color=red><center>Data Divisi gagal diedit</center></font></h3>";	
	}
}
?>
<br />
<br />
<form action="#" method="POST" name="formeditdivisi" enctype="multipart/form-data">
	<h2 class="sub-header">Form Edit Data Divisi</h2>
<hr />
		<div class="row">
			<div class="form-group">
				<label for="id_divisi" class="col-md-2 control-label">ID Divisi</label>
				<div class="col-md-3">
					<input name="id_divisi" type="text" class="form-control" id="id_divisi" value="<?=$id_divisi?>" disabled>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="form-group">
				<label for="nama_divisi" class="col-md-2 control-label">Nama Divisi</label>
				<div class="col-md-3">
					<input name="nama_divisi" type="text" class="form-control" id="nama_divisi" value="<?=$nama_divisi?>">
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="form-group">
				<label for="keterangan" class="col-md-2 control-label">Keterangan</label>
				<div class="col-md-3">
					<textarea name="keterangan" class="form-control" rows="3" id="keterangan"><?=$keterangan?></textarea>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<input type="submit" name="Editdivisi" class="btn btn-primary" value="Edit Data">&nbsp;&nbsp;
				<input type="button" value="Cancel" class="btn btn-default" onclick=location.href="index.php?page=lihat2" title="kembali ke form edit data">
			</div>
		</div>

</form>
</div>
<div class="container">
<?php
//cek nik
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
} else {
	die ("Error. Tidak ada Nik yang dipilih Silakan cek kembali! ");	
}
//koneksi ke engine mysql
$Open = include "koneksi.php";	
//Tampilkan datanya dari tabel karyawan
$tampil_karyawan = "SELECT * FROM data_karyawan WHERE nik='$nik'";
$sql = mysqli_query ($koneksi, $tampil_karyawan);
$hasil_p = mysqli_fetch_array ($sql);
	$nik = $hasil_p['nik'];
	$nama = $hasil_p['nama'];
	$namafoto = stripslashes ($hasil_p['namafoto']);
	$foto = $hasil_p['namafoto'];
	$jk = $hasil_p['jk'];
	$jab = $hasil_p['jab'];
	$div = $hasil_p['id_divisi'];
	$tmp_lhr = $hasil_p['tmp_lhr'];
	$tgl_lhr = $hasil_p['tgl_lhr'];
	$gol_darah = $hasil_p['gol_darah'];
	$agama = $hasil_p['agama'];
	$status = $hasil_p['status'];
	$telp = $hasil_p['telp'];
	$email = $hasil_p['email'];
?>
<br />
<br />
<h2 class="sub-header">Detail Data Karyawan</h2>
<hr />
<a class="btn btn-default" href="index.php?page=data_karyawan" role="button">Kembali</a>
<form action="#" method="POST" name="detail" enctype="multipart/form-data">
<br />
<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tr>
			<td width="142" height="36">NIK</td>
			<td width="540">:&nbsp;<?=$nik?></td>
		</tr>
		<tr>
			<td height="36">Nama</td>
			<td>:&nbsp;<?=$nama?></td>
		</tr>
		<tr>
			<td height="36">Foto</td>
			<td>&nbsp;&nbsp;<?php if (empty($foto)) 
					echo "<strong><img class='img img-square' src='images/nopic.gif' width='140' height='140'> <br> No Image </strong>";
					else
					echo"<img class='img img-square' class='shadow' align=left src='images/$foto' width='140' heigth='140' title='$nama'>"
				?></td>
		</tr>
		<tr>
			<td height="36">Jenis Kelamin</td>
			<td>:&nbsp;<?=$jk?></td>
		</tr>
		<tr>
			<td height="36">Jabatan</td>
			<td>:&nbsp;<?=$jab?></td>
		</tr>
		<tr>
			<td height="36">Divisi</td>
			<td>:&nbsp;<?=$div?></td>
		</tr>
		<tr>
			<td height="36">Tempat Lahir</td>
			<td>:&nbsp;<?=$tmp_lhr?></td>
		</tr>
		<tr>
			<td height="36">Tanggal Lahir</td>
			<td>:&nbsp;<?php
			if ($hasil_p['tgl_lhr'] === NULL)
				$hasil_p['tgl_lhr'] = "NULL";
				print ("$tgl_lhr\n");
			?></td>
		</tr>
		<tr>
			<td height="36">Golongan Darah</td>
			<td>:&nbsp;<?=$gol_darah?></td>
		</tr>
		<tr>
			<td height="36">Agama</td>
			<td>:&nbsp;<?=$agama?></td>
		</tr>
		<tr>
			<td height="36">Status Pernikahan</td>
			<td>:&nbsp;<?=$status?></td>
		</tr>
		<tr>
			<td height="36">No. Telp</td>
			<td>:&nbsp;<?=$telp?></td>
		</tr>
		<tr>
			<td height="36">E-Mail</td>
			<td>:&nbsp;<?=$email?></td>
		</tr>
		<tr>
			<td><input type="button" class="btn btn-primary" value="Export To PDF" title="Save as PDF Format" onclick=window.open('report_detail.php?nik=<?=$nik?>','_blank');></td>
			<td width="540">&nbsp;</td>
		</tr>
</table>
</form>

</div>
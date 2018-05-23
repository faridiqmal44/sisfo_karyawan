<div class="container">
<br />
<br />
<h2 class="sub-header">Form Input Data Karyawan</h2>
<hr />
<a class="btn btn-default" href="index.php?page=data_karyawan" role="button">Kembali</a>
	<br />
	<br />
<form action="inputkaryawan.php" class="form-horizontal" method="POST" name="forminputkaryawan2" enctype="multipart/form-data">
	<h2 align="center"></h3>
	<div class="form-group">
		<label for="nik" class="col-md-2 control-label">NIK</label>
		<div class="col-md-3">
			<input name="nik" type="text" class="form-control" id="nik" placeholder="Masukan NIK">
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-2 control-label">Nama</label>
		<div class="col-md-5">
			<input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama">
		</div>
	</div>
	<div class="form-group">
		<label for="foto" class="col-md-2 control-label">Foto</label>
		<div class="col-md-5">
			<input name="foto" type="file" class="btn btn-info" id="foto">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Jenis Kelamin</label>
		<div class="radio col-md-2">
			<label for="lakilaki" class="control-label">
				<input type="radio" name="jk" id="lakilaki" value="Laki-laki" checked>
			Laki-laki</label>
		</div>
		<div class="radio col-md-1">
			<label for="perempuan" class="control-label">
				<input type="radio" name="jk" id="perempuan" value="Perempuan">
			Perempuan</label>
		</div>
	</div>
	<div class="form-group">
		<label for="jabatan" class="col-md-2 control-label">Jabatan</label>
		<div class="col-md-3">
			<input name="jab" type="text" class="form-control" id="jabatan" placeholder="Masukan Jabatan">
		</div>
	</div>
	<div class="form-group">
		<label for="departemen" class="col-md-2 control-label">Divisi</label>
		<div class="col-md-3">
			<input name="id_divisi" type="text" class="form-control" id="departemen" placeholder="Masukan Divisi">
		</div>
	</div>
	<div class="form-group">
		<label for="tmplahir" class="col-md-2 control-label">Tempat Lahir</label>
		<div class="col-md-3">
			<input name="tmp_lhr" type="text" class="form-control" id="tmplahir" placeholder="Masukan Tempat Lahir">
		</div>
	</div>
	<div class="form-group">
		<label for="tgllahir" class="col-md-2 control-label">Tanggal Lahir</label>
		<div class="col-md-4">
			<div class="row">
				<div class="col-xs-3">
					<select name="tgl" class="form-control input-sm">
						<?php
							for ($i=0; $i<=31; $i++) {
								$tg = ($i<10) ? "0$i" : $i;
								echo "<option value='$tg'>$tg</option>";	
							}
						?>
					</select>
				</div>
				<div class="col-xs-3">
					<select name="bln" class="form-control input-sm">
						<?php
							for ($i=0; $i<=12; $i++) {
								$bl = ($i<10) ? "0$i" : $i;
								echo "<option value='$bl'>$bl</option>";	
							}
						?>
					</select>
				</div>
				<div class="col-xs-4">
					<select name="thn" class="form-control input-sm">
						<?php
							for ($i=1949; $i<=2000; $i++) {
								$th = ($i<1950) ? "0000" : $i;
								echo "<option value='$th'>$th</option>";	
							}
						?>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Golongan Darah</label>
			<div class="radio col-md-1">
				<label for="a" class="control-label">
					<input name="gol_darah" type="radio" name="jk" id="a" value="a" checked>
				A</label>
			</div>
			<div class="radio col-md-1">
				<label for="b" class="control-label">
					<input name="gol_darah" type="radio" name="jk" id="b" value="b">
				B</label>
			</div>
			<div class="radio col-md-1">
				<label for="ab" class="control-label">
					<input name="gol_darah" type="radio" name="jk" id="ab" value="ab">
				AB</label>
			</div>
			<div class="radio col-md-1">
				<label for="o" class="control-label">
					<input name="gol_darah" type="radio" name="jk" id="o" value="o">
				O</label>
			</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Agama</label>
		<div class="col-md-3">
			<select name="agama" class="form-control">
				<option value="-">-pilihan-</option>
				<option value="islam">Islam</option>
				<optio value="Kkisten">Kristen</option>
				<option value="hindu">Hindu</option>
				<option value="budha">Budha</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Status Pernikahan</label>
		<div class="col-md-3">
		<select name="status" class="form-control">
				<option value="-">-pilihan-
				<option value="TK">Belum Menikah
				<option value="K0">Menikah Belum Memiliki Anak
				<option value="K1">Menikah Memiliki 1 Anak
				<option value="K2">Menikah Memiliki 2 Anak
				<option value="K3">Menikah Memiliki 3 Anak
				<option value="K4">Menikah Memiliki 4 Anak
				<option value="K5">Menikah Memiliki 5 Anak
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="notlp" class="col-md-2 control-label">No Telepon</label>
		<div class="col-md-3">
			<input name="telp" type="text" class="form-control" id="notlp" placeholder="Masukan No Telepon">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-2 control-label">Email</label>
		<div class="col-md-5">
			<input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email">
		</div>
	</div>
	<div class="col-md-2">

	</div>
	<div class="col-md-3"><input type="submit" class="btn btn-primary" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn btn-default" name="reset" value="Reset">
	</div>

<!--<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="789">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="789"><font color="orange" size="4" face="arial"><b>Form Input Data Karyawan</b></font></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="right" width="789" height="32"><input type="button" class="btn btn-info" value="Back To Home" onclick=location.href="index.php" title="kembali ke home">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" height="36">&nbsp;</td>
		<td width="165">NIK</td>
		<td><input type="text" name="nik" size="15" maxlength="9" style="text-transform: uppercase;">&nbsp;* gunakan kode NIK kemudian tambahkan angka ( ex : NIK000001 )</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Nama</td>
		<td><input type="text" name="nama" size="40" maxlength="30"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Foto</td>
		<td><input type="file" class="btn btn-info" name="foto" size="49"/>&nbsp;</td>
    </tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L" checked> Laki-laki
			<input type="radio" name="jk" value="P"> Perempuan</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Jabatan</td>
		<td><input type="text" name="jab" size="25" maxlength="15"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Departemen</td>
		<td><input type="text" name="dept" size="25" maxlength="16"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tmp_lhr" size="25" maxlength="15"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Tanggal Lahir</td>
		<td><select name="tgl">
			<?php
				for ($i=0; $i<=31; $i++) {
					$tg = ($i<10) ? "0$i" : $i;
					echo "<option value='$tg'>$tg</option>";	
				}
			?>
			</select> - 
			<select name="bln">
			<?php
				for ($i=0; $i<=12; $i++) {
					$bl = ($i<10) ? "0$i" : $i;
					echo "<option value='$bl'>$bl</option>";	
				}
			?>
			</select> - 
			<select name="thn">
			<?php
				for ($i=1949; $i<=2000; $i++) {
					$th = ($i<1950) ? "0000" : $i;
					echo "<option value='$th'>$th</option>";	
				}
			?>
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Golongan Darah</td>
		<td><input type="radio" name="gol_darah" value="A" checked>A &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="AB">AB &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="B">B &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="O">O</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Agama</td>
		<td><select name="agama">
				<option value="-">-pilihan-
				<option value="Islam">Islam
				<option value="Protestan">Protestan
				<option value="Katolik">Katolik
				<option value="Hindu">Hindu
				<option value="Budha">Budha
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Status Pernikahan</td>
		<td><select name="status">
				<option value="-">-pilihan-
				<option value="TK">Belum Menikah
				<option value="K0">Menikah Belum Memiliki Anak
				<option value="K1">Menikah Memiliki 1 Anak
				<option value="K2">Menikah Memiliki 2 Anak
				<option value="K3">Menikah Memiliki 3 Anak
				<option value="K4">Menikah Memiliki 4 Anak
				<option value="K5">Menikah Memiliki 5 Anak
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>No. Telp</td>
		<td><input type="text" name="telp" size="25" maxlength="12"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>E-Mail</td>
		<td><input type="text" name="email" size="50" maxlength="40"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" class="btn btn-info" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn btn-info" name="reset" value="Reset"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
</table>-->
</form>
</div>
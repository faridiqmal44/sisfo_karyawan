<div class="container">
<br />
<br />
<h2 class="sub-header">Form Input Data Divisi</h2>
<hr />
<a class="btn btn-default" href="index.php?page=data_divisi" role="button">Kembali</a>
	<br />
<form action="inputdivisi.php" class="form-horizontal" method="POST" name="forminputdivisi" enctype="multipart/form-data">
	<br />
	<br />
	<!--<div class="form-group">
		<label for="id_divisi" class="col-md-2 control-label">ID Divisi</label>
		<div class="col-md-3">
			<input name="id_divisi" type="text" class="form-control" id="id_divisi" placeholder="Masukan ID Divisi">
		</div>
	</div>-->
	<div class="form-group">
		<label for="nama_divisi" class="col-md-2 control-label">Nama Divisi</label>
		<div class="col-md-5">
			<input name="nama_divisi" type="text" class="form-control" id="nama_divisi" placeholder="Masukan Nama Divisi">
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-2 control-label">Keterangan</label>
		<div class="col-md-5">
			<textarea name="keterangan" class="form-control" rows="3" id="keterangan" placeholder="Tambahkan keterangan"></textarea>
		</div>
	</div>
	
	<div class="col-md-3"><input type="submit" class="btn btn-primary" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn btn-default" name="reset" value="Reset">
	</div>

</form>
</div>
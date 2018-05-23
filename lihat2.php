<br />
<br />
<h2 class="sub-header">Data Divisi</h2>
<hr />
          <div class="table-responsive">
            <a href="index.php?page=forminputdivisi" class="btn btn-primary">Tambah Data</a><br />
            <br />
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID Divisi</th>
                  <th>Nama Divisi</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
  /*$Open = mysql_connect("localhost","root","");
    if (!$Open){
    die ("Koneksi ke Engine MySQL Gagal !<br>");
    }
  $Koneksi = mysql_select_db("karyawan");
    if (!$Koneksi){
    die ("Koneksi ke Database Gagal !");
    }*/
  include "koneksi.php";
  $cari="SELECT * FROM divisi ORDER BY id_divisi";
  $tampil = mysqli_query($koneksi, $cari);
    while ( $hasil = mysqli_fetch_array ($tampil)) {
      $id_divisi = stripslashes ($hasil['id_divisi']);
      $nama_divisi = stripslashes ($hasil['nama_divisi']);
      $keterangan = stripslashes ($hasil['keterangan']);
    {
?>
  <tr href="index.php?page=detail&nik=<?=$nik; ?>">
    <td><?=$id_divisi?> <div align="center"></div></td>
     <td align="left"><?=$nama_divisi?> <div align="center"></div></td>
    <td align="left"><?=$keterangan?><div align="center"></div></td>
    <td><div align="left"><a href="index.php?page=deletediv&id_divisi=<?=$id_divisi; ?>" OnClick="return confirm('Yakin akan menghapus data Divisi <?=$nama_divisi?> ?');">Delete</a> | <a href="index.php?page=edit_divisi&id_divisi=<?=$id_divisi; ?>">Edit</a></div></td>
  </tr>
<?php  
    }
  }
//Tutup koneksi engine MySQL
  //mysqli_close($koneksi);
?>
              </tbody>
            </table>
          </div>
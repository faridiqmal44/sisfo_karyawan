<br />
<br />
<h2 class="sub-header">Data Karyawan</h2>
<hr />
          <div class="table-responsive">
            <a href="index.php?page=forminputkaryawan2" class="btn btn-primary">Tambah Data</a><br />
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>Jenis Kelamin</th>
                  <th>Jabatan</th>
                  <th>Divisi</th>
                  <th>Tempat Lahit</th>
                  <th>Tanggal Lahir</th>
                  <th>Gol Darah</th>
                  <th>Agama</th>
                  <th>Status Kawin</th>
                  <th>Telpon</th>
                  <th>Email</th>
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
  $cari="SELECT * FROM data_karyawan ORDER BY nama";
  $tampil = mysqli_query($koneksi, $cari);
  $nomer=0;
    while ( $hasil = mysqli_fetch_array ($tampil)) {
      $nik = stripslashes ($hasil['nik']);
      $nama = stripslashes ($hasil['nama']);
      $namafoto = stripslashes ($hasil['namafoto']);
      $foto = $hasil['namafoto'];
      $jk = stripslashes ($hasil['jk']);
      $jab = stripslashes ($hasil['jab']);
      $div = stripslashes ($hasil['id_divisi']);
      $tmp_lhr = stripslashes ($hasil['tmp_lhr']);
      $tgl_lhr = $hasil['tgl_lhr'];
      $gol_darah = stripslashes ($hasil['gol_darah']);
      $agama = stripslashes ($hasil['agama']);
      $status = stripslashes ($hasil['status']);
      $telp = stripslashes ($hasil['telp']);
      $email = stripslashes ($hasil['email']);
    {
  $nomer++;
?>
  <tr href="index.php?page=detail&nik=<?=$nik; ?>">
    <td><?=$nomer?>
    <div align="center"></div></td>
    <td><?=$nik?>
    <div align="center"></div></td>
    <td><?=$nama?>
    <div align="center"></div></td>
    <td><?php
      if (!empty($namafoto)){
           echo "<img class='img-circle' src='images/$namafoto' width='70' height='70' title='$nama' >";
        }
        else{
           echo "<strong><img src='images/nopic.gif' width='70' height='70'> <br> Tidak ada foto </strong>";
        
      }
        ?>&nbsp;</td>
    <td><?=$jk?><div align="center"></div></td>
    <td><?=$jab?><div align="center"></div></td>
    <td><?=$div?><div align="center"></div></td>
    <td><?=$tmp_lhr?><div align="center"></div></td>
    <td><?php
      if ($hasil['tgl_lhr'] === NULL)
        $hasil['tgl_lhr'] = "NULL"; 
        echo("$tgl_lhr\n");
    ?><div align="center"></div></td>
    <td><?=$gol_darah?><div align="center"></div></td>
    <td><?=$agama?><div align="center"></div></td>
    <td><?=$status?><div align="center"></div></td>
    <td><?=$telp?><div align="center"></div></td>
    <td><?=$email?><div align="center"></div></td>
    <td><div align="center"><a href="index.php?page=detail&nik=<?=$nik; ?>">Detail</a> | <a href="index.php?page=delete&nik=<?=$nik; ?>" OnClick="return confirm('Anda Yakin Seluruh Data Karyawan  <?=$nik?> Atas Nama <?=$nama?>  akan dihapus?');">Delete</a> | <a href="index.php?page=edit_karyawan&nik=<?=$nik; ?>">Edit</a></div></td>
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
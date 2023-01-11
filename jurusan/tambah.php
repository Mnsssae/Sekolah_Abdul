<h1>Tambah Data Jurusan</h1>
<?php include "conf/koneksi.php" ;?>
<form action="" method="post">
 <label for="nama_jurusan">Nama Jurusan</label>
 <input type="text" name="nama_jurusan" id="nama_jurusan">
 <br><br>

<label for="alias">Alias Jurusan</label>
<input type="text" name="alias" id="alias"><br>
<input type="submit" value="simpan" name='simpan' class='btn navy'>
</form>
<?php
  if(isset($_POST['simpan'])){
   $nama_jurusan = $_POST['nama_jurusan'];
   $alias = $_POST['alias'];
   $insert = mysql_query("INSERT INTO jurusan SET nama_jurusan='$nama_jurusan', alias='$alias'") or die (mysql_error());
      if($insert){
          echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_jurusan';</script>";
      }else{
        echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_jurusan';</script>";
      }
  }
?>
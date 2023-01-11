<h1>Tambah Data kelas</h1>
<?php include "conf/koneksi.php" ;?>
<form action="" method="post">
 <label for="kelas">kelas</label>
 <input type="text" name="kelas" id="kelas">
 <br><br>
<input type="submit" value="simpan" name='simpan' class='btn navy'>
</form>
<?php
  if(isset($_POST['simpan'])){
   $kelas = $_POST['kelas'];
   $insert = mysql_query("INSERT INTO kelas SET kelas='$kelas'") or die (mysql_error());
      if($insert){
          echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_kelas';</script>";
      }else{
        echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_kelas';</script>";
      }
  }
?>
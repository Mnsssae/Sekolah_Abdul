<h1>Tambah Data Matpel</h1>
<?php include "conf/koneksi.php" ;?>
<form action="" method="post">
 <label for="nama_matpel">Nama Matpel</label>
 <input type="text" name="nama_matpel" id="nama_matpel">
 <br><br>

<label for="jumlah_jam">Jumlah Jam</label>
<input type="text" name="jumlah_jam" id="jumlah_jam"><br>
<input type="submit" value="simpan" name='simpan' class='btn navy'>

</form>
<?php
  if(isset($_POST['simpan'])){
   $nama_jurusan = $_POST['nama_matpel'];
   $jumlah_jam = $_POST['jumlah_jam'];
   $insert = mysql_query("INSERT INTO matpel SET nama_matpel='$nama_jurusan', jumlah_jam='$jumlah_jam'") or die (mysql_error());
      if($insert){
          echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_matpel';</script>";
      }else{
        echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_matpel';</script>";
      }
  }
?>
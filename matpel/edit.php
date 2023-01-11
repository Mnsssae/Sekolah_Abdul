<h1>Edit Data Matpel</h1>
<?php
$id = $_GET['id'];
$getMat = mysql_query("SELECT * FROM matpel WHERE id_matpel='$id'")or die(mysql_error());
$rowMat = mysql_fetch_array($getMat);
?>
<form action="" method="post">
     <label>Nama Matpel :</label>
     <input type="text" name="nama_matpel" id="nama_matpel" value="<?php echo $rowMat['nama_matpel']; ?>">
     <br><br>

     <label>Jumlah Jam :</label>
     <input type="text" name="jumlah_jam" id="jumlah_jam" value="<?php echo $rowMat['jumlah_jam']; ?>"><br>
     <input type="submit" value="Simpan" name='simpan' class='btn navy'>
    </form>
  <?php
  if(isset($_POST['simpan'])){
      $nama_jurusan = $_POST['nama_matpel'];
      $jumlah_jam = $_POST['jumlah_jam'];
      $insert = mysql_query("UPDATE matpel SET nama_matpel='$nama_jurusan',jumlah_jam='$jumlah_jam' WHERE id_matpel='$id'")or die(mysql_error());
      if($insert){
          echo "<script>alert('Perubahan Data Berhasil'); document.location='?page=get_matpel';</script>";
      }else{
          echo "<script>alert('Perubahan Data Belum Berhasil'); document.location='?page=edit_matpel&id=$id';<script>";
      } 
      }
?>
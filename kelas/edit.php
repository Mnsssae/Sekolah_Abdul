<h1>Edit Data kelas</h1>
<?php
$id = $_GET['id'];
$getJur = mysql_query("SELECT * FROM kelas WHERE id_kelas='$id'")or die(mysql_error());
$rowJur = mysql_fetch_array($getJur); 
?>
<form action="" method="post">
     <label for="kelas">Nama kelas</label>
     <input type="text" name="kelas" id="kelas" value="<?php echo $rowJur['kelas']; ?>">
     <br><br>
     <input type="submit" value="simpan" name='simpan' class='btn navy'>
    </form>

  <?php

  if(isset($_POST['simpan'])){
      $kelas = $_POST['kelas'];
      $insert = mysql_query("UPDATE kelas SET kelas='$kelas' WHERE id_kelas='$id'")or die(mysql_error());

      if($insert){
          echo "<script>alert('Perubahan Data Berhasil'); document.location='?page=get_kelas';</script>";
      }else{
          echo "<script>alert('Perubahan Data Belum Berhasil'); document.location='?page=edit_kelas&id=$id';<script>";
      } 
      }
?>
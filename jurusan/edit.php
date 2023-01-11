<h1>Edit Data Jurusan</h1>
<?php
$id = $_GET['id'];
$getJur = mysql_query("SELECT * FROM jurusan WHERE id_jurusan='$id'")or die(mysql_error());
$rowJur = mysql_fetch_array($getJur); 
?>
<form action="" method="post">
     <label for="nama_jurusan">Nama Jurusan</label>
     <input type="text" name="nama_jurusan" id="nama_jurusan" value="<?php echo $rowJur['nama_jurusan']; ?>">
     <br><br>

     <label for="alias">Alias Jurusan</label>
     <input type="text" name="alias" id="alias" value="<?php echo $rowJur['alias']; ?>"><br>
     <input type="submit" value="simpan" name='simpan' class='btn navy'>
    </form>

  <?php

  if(isset($_POST['simpan'])){
      $nama_jurusan = $_POST['nama_jurusan'];
      $alias = $_POST['alias'];
      $insert = mysql_query("UPDATE jurusan SET nama_jurusan='$nama_jurusan',alias='$alias' WHERE id_jurusan='$id'")or die(mysql_error());

      if($insert){
          echo "<script>alert('Perubahan Data Berhasil'); document.location='?page=get_jurusan';</script>";
      }else{
          echo "<script>alert('Perubahan Data Belum Berhasil'); document.location='?page=edit_jurusan&id=$id';<script>";
      } 
      }
?>
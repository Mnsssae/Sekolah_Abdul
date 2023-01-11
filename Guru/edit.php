<h1>Edit Data Guru</h1>
<?php
$id = $_GET['id'];
$getgur = mysql_query("SELECT * FROM guru WHERE id_guru='$id'")or die(mysql_error());
$rowgur = mysql_fetch_array($getgur);
?>
<form action="" method="post">
     <label>Nama Guru :</label>
     <input type="text" name="nama_guru" id="nama_guru" value="<?php echo $rowgur['nama_guru']; ?>">
     <br><br>

     <label>Tahun Masuk :</label>
     <input type="text" name="tahun_masuk" id="tahun_masuk" value="<?php echo $rowgur['tahun_masuk']; ?>"><br>
     <br>
     <label> Jenis Kelamin :</label>
     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value='Perempuan'> Perempuan
     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value='Laki-Laki'> Laki-Laki
     <br><br>

     <label>Tanggal Lahir :</label>
     <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $rowgur['tanggal_lahir']; ?>">
     <br><br>

     <label>Tempat Lahir :</label>
     <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $rowgur['tempat_lahir']; ?>">
     <br><br>

     <label>Pendidikan :</label>
     <input type="text" name="pendidikan" id="pendidikan" value="<?php echo $rowgur['pendidikan']; ?>">
     <br><br>

     <label>Password :</label>
     <input type="password" name="password" id="password" value="<?php echo $rowgur['password']; ?>">
     <br><br>

     <label>Nip :</label>
     <input type="text" name="nip" id="nip" value="<?php echo $rowgur['nip']; ?>">
     <br><br>

     <label>Level :</label>
     <input type="levelw" name="level" id="level" value="<?php echo $rowgur['level']; ?>">
     <br><br>
     <input type="submit" value="Simpan" name='simpan' class='btn navy'>
    </form>
  <?php
  if(isset($_POST['simpan'])){
      $nama_guru= $_POST['nama_guru'];
      $tahun_masuk= $_POST['tahun_masuk'];
      $jenis_kelamin= $_POST['jenis_kelamin'];
      $tanggal_lahir= $_POST['tanggal_lahir'];
      $tempat_lahir= $_POST['tempat_lahir'];
      $pendidikan= $_POST['pendidikan'];
      $password = $_POST['password'];
      $nip = $_POST['nip'];
      $level = $_POST['level'];
      $insert = mysql_query("UPDATE guru SET nama_guru='$nama_guru',tahun_masuk='$tahun_masuk',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir',pendidikan='$pendidikan',  password='$password', nip='$nip', level='$level' WHERE id_guru='$id'")or die(mysql_error());
      if($insert){
          echo "<script>alert('Perubahan Data Berhasil'); document.location='?page=get_guru';</script>";
      }else{
          echo "<script>alert('Perubahan Data Belum Berhasil'); document.location='?page=edit_guru&id=$id';<script>";
      } 
      }
?>
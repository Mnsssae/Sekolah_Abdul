<h1>Edit Data</h1>
<?php
$id = $_GET['id'];
$getData = mysql_query("SELECT * FROM siswa WHERE id_siswa='$id'")or die(mysql_error());
$showData = mysql_fetch_array($getData);
?>
<form action="" method="post">
 <label for="nis">NIS : </label>
 <input type="text" name="nis" id="nis" value="<?php echo $showData['nis']; ?>">
 <br><br>
 <label for="nik"> NIK </label>
 <input type="text" name="nik" id="nik" value="<?php echo $showData['nik']; ?>">
 <br><br>
 <label for="nama"> Nama </label>
 <input type="text" name="nama" id="nama" value="<?php echo $showData['nama']; ?>">
 <br><br>
 <label for="tmpat_lahir">Tempat Lahir</label>
 <input type="text" name="tmpat_lahir" id="tmpat_lahir" value="<?php echo $showData['tmpat_lahir']; ?>">
 <br><br>
 <label for="tgl_lahir">Tanggal Lahir</label>
 <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $showData['tgl_lahir']; ?>">
 <br><br>
 <label for="jenis_kelamin">Jenis Kelamin</label>
 <input type="radio" name="jenkel" id="jenkel" value='Laki-Laki' <?php echo $showData['jenkel']==='Laki-Laki' ? "checked" : ""; ?> > Laki-Laki
 <input type="radio" name="jenkel" id="jenkel" value='Perempuan' <?php echo $showData['jenkel']==='Perempuan' ? "checked" : ""; ?> > Perempuan
 <br><br>
 <label for="agama">Agama</label>
 <select name="agama" id="agama">
       <option value="Islam">Islam</option>
       <option value="Katolik">Katolik</option>
       <option value="Protestan">Protestan</option>
       <option value="Hindu">Hindu</option>
       <option value="Budha">Budha</option>
       <option value="Konghucu">Konghucu</option>
       </select>
    <br><br>
  <label for="nama_ayah">Nama Ayah</label>
  <input type="text" name="nama_ayah" id="nama_ayah" value="<?php echo $showData['nama_ayah']; ?>">
  <br><br>
  <label for="nama_ibu">Nama Ibu</label>
  <input type="text" name="nama_ibu" id="nama_ibu" value="<?php echo $showData['nama_ibu']; ?>">
  <br><br>
  <label for="no_tlp">Nomor Telepon</label>
  <input type="text" name="no_tlp" id="no_tlp" value="<?php echo $showData['no_tlp']; ?>">
  <br><br>
  <label for="alamat">Alamat</label>
  <textarea name="alamat" id="alamat"><?php echo $showData['alamat']; ?></textarea>
  <br><br>

  <label for="jurusan">jurusan</label>
  <select name="id_jurusan" id="jurusan" required>
  <option value="">Pilih jurusan</option>
  <?php $getjurusan = mysql_query("SELECT * from jurusan") or die (mysql_error());
  while($barisjur = mysql_fetch_array($getjurusan)){ ?>

  <option value="<?php echo $barisjur['id_jurusan'] ?>"><?php echo $barisjur['nama_jurusan'] ?></option>  
  <?php } ?>  
  </select>
  
  <label for="kelas">kelas</label>
  <select name="id_kelas" id="kelas" required>
  <option value="">Pilih kelas</option>
  <?php $getkelas = mysql_query("SELECT * from kelas") or die (mysql_error());
  while($bariskelas = mysql_fetch_array($getkelas)){ ?>
  <option value="<?php echo $bariskelas['id_kelas'] ?>">
  <?php echo $bariskelas['kelas'] ?></option>  
  
  <?php } ?>  
  </select>

  <input type="submit" value="simpan" name='simpan' class='btn navy'>
  </form>
  
<?php
  if(isset($_POST['simpan'])){
      $nis = $_POST['nis'];
      $nik = $_POST['nik'];
      $nama = $_POST['nama'];
      $tmpt_lahir = $_POST['tmpat_lahir'];
      $tgl_lahir = $_POST['tgl_lahir'];
      $jenkel = $_POST['jenkel'];
      $agama = $_POST['agama'];
      $nama_ayah = $_POST['nama_ayah'];
      $nama_ibu = $_POST['nama_ibu'];
      $no_tlp = $_POST['no_tlp'];
      $alamat = $_POST['alamat'];
      $jurusan = $_POST['id_jurusan'];
      $id_kelas = $_POST['id_kelas'];
      $update = mysql_query("UPDATE siswa SET 
      nis='$nis',
      nama='$nama',
      alamat='$alamat',
      tgl_lahir='$tgl_lahir',
      jenkel='$jenkel',
      tmpat_lahir='$tmpt_lahir',
      nama_ibu='$nama_ibu',
      nama_ayah='$nama_ayah',
      no_tlp='$no_tlp',
      agama='$agama',
      id_jurusan='$jurusan',
      id_kelas='$id_kelas' WHERE id_siswa=$id") or die (mysql_error());
      if($update){
          echo "<script>alert('Perubahan Data Berhasil'); document.location='?page=get_siswa';</script>";
      }else{
        echo "<script>alert('Perubahan Data Belum Berhasil'); document.location='?page=edit_siswa&id=$id';</script>";
      }
  }
?>
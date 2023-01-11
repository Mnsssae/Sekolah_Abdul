<h1>Tambah Data</h1>
<?php include "conf/koneksi.php" ;?>
<form action="" method="post">
 <label for="nis">NIS : </label>
 <input type="text" name="nis" id="nis">
 <br><br>
 <label for="nik"> NIK </label>
 <input type="text" name="nik" id="nik">
 <br><br>
 <label for="nama"> Nama </label>
 <input type="text" name="nama" id="nama">
 <br><br>
 <label for="tmpat_lahir">Tempat Lahir</label>
 <input type="text" name="tmpat_lahir" id="tmpat_lahir">
 <br><br>
 <label for="tgl_lahir">Tanggal Lahir</label>
 <input type="date" name="tgl_lahir" id="tgl_lahir">
 <br><br>
 <label for="jenis_kelamin">Jenis Kelamin</label>
 <input type="radio" name="jenkel" id="jenkel" value='Laki-Laki'> Laki-Laki
 <input type="radio" name="jenkel" id="jenkel" value='Perempuan'> Perempuan
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
  <input type="text" name="nama_ayah" id="nama_ayah">
  <br><br>
  <label for="nama_ibu">Nama Ibu</label>
  <input type="text" name="nama_ibu" id="nama_ibu">
  <br><br>
  <label for="no_tlp">Nomor Telepon</label>
  <input type="text" name="no_tlp" id="no_tlp">
  <br><br>
  <label for="alamat">Alamat</label>
  <textarea name="alamat" id="alamat"></textarea>
  <br><br>

  <label for="jurusan">Jurusan</label>
  <select name="jurusan" id="jurusan" required>
  <option value="">Pilih Jurusan</option>
  <?php $getJurusan = mysql_query("SELECT * from jurusan") or die (mysql_error());
  while($barisjur = mysql_fetch_array($getJurusan)){ ?>

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
      $jurusan = $_POST['jurusan'];
      $kelas = $_POST['id_kelas'];
      $insert = mysql_query("INSERT INTO siswa SET 
      nis='$nis',
      nik='$nik',
      nama='$nama',
      alamat='$alamat',
      tgl_lahir='$tgl_lahir',
      tmpat_lahir='$tmpt_lahir',
      nama_ibu='$nama_ibu',
      nama_ayah='$nama_ayah',
      jenkel='$jenkel',
      no_tlp='$no_tlp',
      agama='$agama',
      id_kelas = '$kelas',
      id_jurusan='$jurusan'") or die (mysql_error());
      if($insert){
          echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_siswa';</script>";
      }else{
        echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_siswa';</script>";
      }
  }
?>
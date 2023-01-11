<h1>Tambah Data Guru</h1>
 <?php include "conf/koneksi.php"; ?>
 <form action="" method="post">
   <label for="nama_guru">Nama Guru</label>
   <input type="text" name="nama_guru" id="nama_guru">
   <br><br>

   <label for="tahun_masuk">Tahun Masuk</label>
   <input type="text" name="tahun_masuk" id="tahun_masuk">
   <br><br>

   <label for="jenis_kelamin">Jenis Kelamin</label>
   <input type="radio" name="jenkel" id="jenkel" value="Perempuan"> Perempuan
   <input type="radio" name="jenkel" id="jenkel" value="Laki-Laki">Laki-Laki
   <br><br>
   
   <label for="tempat_lahir">Tempat Lahir</label>
   <input type="text" name="tempat_lahir" id="tempat_lahir">
   <br><br>

   <label for="tanggal_lahir">Tanggal Lahir</label>
   <input type="date" name="tanggal_lahir" id="tanggal_lahir">
   <br><br>

   <label for="">Pendidikan</label>
   <input type="text" name="pendidikan" id="pendidikan">
   <br><br>

   <label for="">Password</label>
   <input type="password" name="password" id="password">
   <br><br>

   <label for="">NIP</label>
   <input type="text" name="nip" id="nip">
   <br><br>

   <label for="">Level</label>
   <select name="guru" id="guru" required>
   <input type="submit" value="simpan" name='simpan' class='btn navy'>

 </form>
 <?php
    if(isset($_POST['simpan'])){
        $nama_guru = $_POST['nama_guru'];
        $tahun_masuk = $_POST['tahun_masuk'];
        $jenis_kelamin = $_POST['jenkel'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pendidikan = $_POST['pendidikan'];
        $password = md5($_POST['password']);
        $nip = $_POST['nip'];
        $level = $_POST['level'];
        $insert = mysql_query("INSERT INTO guru SET nama_guru='$nama_guru', tahun_masuk='$tahun_masuk', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', pendidikan='$pendidikan', password='$password', nip='$nip', level='$level'") or die (mysql_error());
        if($insert){
            echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_guru';</script>";
        }else{
          echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_guru';</script>";
        }
    }
  ?>
    

<h1>Tambah Jadwal</h1>
 <form action="" method='post'>
    <div class="row">

        <div class="col-6">
   <label for="id_guru">Nama Guru</label>
   <select name="id_guru" id="id_guru" required>
    <option value="">--Pilih Nama Guru--</option>
    <?php $getGuru = mysql_query("SELECT * FROM guru")or die(mysql_error());
    while($rowGuru = mysql_fetch_array($getGuru)) {
        ?>
       <option value="<?php echo $rowGuru['id_guru'];?>"><?php echo $rowGuru['nama_guru'];?></option>
       <?php } ?>
    </select>
    </div>

<div class="col-6">
   <label for="id_matpel">Mata Pelajaran</label>
   <select name="id_matpel" id="id_matpel" required>
    <option value="">--Pilih Matpel--</option>
    <?php $getMatpel = mysql_query("SELECT * FROM matpel ORDER BY nama_matpel")or die(mysql_error());
    while ($rowMatpel = mysql_fetch_array($getMatpel)) {
        ?>
       <option value="<?php echo $rowMatpel['id_matpel'];?>"><?php echo $rowMatpel['nama_matpel'];?></option>
       <?php } ?>
    </select>
    </div>

    <div class="col-4">
   <label for="id_kelas">Kelas</label>
   <select name="id_kelas" id="id_kelas" required>
    <option value="">--Pilih Kelas--</option>
    <?php $getKelas = mysql_query("SELECT * FROM kelas ORDER BY kelas")or die(mysql_error());
    while ($rowKelas = mysql_fetch_array($getKelas)) {
        ?>
       <option value="<?php echo $rowKelas['id_kelas'];?>"><?php echo $rowKelas['kelas'];?></option>
       <?php } ?>
    </select>
    </div>

    <div class="col-4">
   <label for="hari">Hari</label>
   <select name="hari" id="hari" required>
    <option value="">Pilih Hari</option>
    <option value="1">Senin</option>
    <option value="2">Selasa</option>
    <option value="3">Rabu</option>
    <option value="4">Kamis</option>
    <option value="5">Jumat</option>
    </select>
    </div>

    <div class="col-4">
        <label for="jam">Jam</label>
        <input type="time" name="jam" id="jam">
    </div>
    </div>
   <input type="submit" value="simpan" name='simpan' class='btn navy'>

 </form>
 <?php
    if(isset($_POST['simpan'])){
        $id_guru = $_POST['id_guru'];
        $id_matpel = $_POST['id_matpel'];
        $id_kelas = $_POST['id_kelas'];
        $hari = $_POST['hari'];
        $jam = $_POST['jam'];
     
        $simpan = mysql_query("INSERT INTO jadwal SET id_guru='$id_guru',
        id_matpel='$id_matpel',
        id_kelas='$id_kelas',
        hari='$hari',
        jam='$jam'")or die (mysql_error());
        if($simpan){
            echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_jadwal';</script>";
        }else{
          echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_jadwal';</script>";
        }
    }
  ?>
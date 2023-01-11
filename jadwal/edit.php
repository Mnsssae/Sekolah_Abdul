<h1>Edit Jadwal</h1>
<?php
$id = $_GET['id'];
$getJadwal = mysql_query("SELECT * FROM jadwal WHERE id_guru='$id'")or die(mysql_error());
$rowJadwal = mysql_fetch_array($getJadwal);
?>
<form action="" method="post">
    <div class="row">
        
<div class="col-6">
   <label for="id_guru">Nama Guru</label>
   <select name="id_guru" id="id_guru" required>
    <option value="">--Pilih Nama Guru--</option>
    <?php $getGuru = mysql_query("SELECT * FROM guru ORDER BY nama_guru")or die(mysql_error());
    while($rowGuru = mysql_fetch_array($getGuru)) {?>
       <option <?php echo $rowGuru['id_guru']===$rowJadwal['id_guru'] ? "selected" : ""; ?>
       value="<?php echo $rowGuru['id_guru']; ?>"><?php echo $rowGuru['nama_guru']; ?>
       </option>
       <?php } ?>
    </select>
    </div>

<div class="col-6">
   <label for="id_matpel">Mata Pelajaran</label>
   <select name="id_matpel" id="id_matpel" required>
    <option value="">--Pilih Matpel--</option>
    <?php $getMatpel = mysql_query("SELECT * FROM matpel")or die(mysql_error());
    while ($rowMatpel = mysql_fetch_array($getMatpel)) {?>
       <option <?php echo $rowMatpel['id_matpel']===$rowJadwal['id_matpel'] ? "selected" : ""; ?>
        value="<?php echo $rowMatpel['id_matpel'];?>"> <?php echo $rowMatpel['nama_matpel'];?>
        </option>
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
       <option <?php echo $rowKelas['id_kelas']==$rowJadwal['id_kelas'] ? "selected" : "" ?>
       value="<?php echo $rowKelas['id_kelas'];?>"><?php echo $rowKelas['kelas']; ?></option>
       <?php } ?>
    </select>
    </div>

    <div class="col-4">
   <label for="hari">Hari</label>
   <select name="hari" id="hari" required>
    <option value="">--Pilih Hari--</option>
    <option value="1" <?php echo $rowJadwal['hari']==1 ? '':'';?>>Senin</option>
    <option value="2" <?php echo $rowJadwal['hari']==2 ? '':'';?>>Selasa</option>
    <option value="3" <?php echo $rowJadwal['hari']==3 ? '':'';?>>Rabu</option>
    <option value="4" <?php echo $rowJadwal['hari']==4 ? '':'';?>>Kamis</option>
    <option value="5" <?php echo $rowJadwal['hari']==5 ? '':'';?>>Jumat</option>
    </select>
    </div>

    <div class="col-4">
        <label for="jam">Jam</label>
        <input type="time" name="jam" id="jam" value="<?php echo $showData['jam'];?>">
    </div>
    </div>

     <input type="submit" value="Simpan" name='simpan' class='btn navy'>
     </form>
 <?php
    if(isset($_POST['simpan'])){
        $id_guru = $_POST['id_guru'];
        $id_matpel = $_POST['id_matpel'];
        $id_kelas = $_POST['id_kelas'];
        $hari = $_POST['hari'];
        $jam = $_POST['jam'];
     
        $simpan = mysql_query("UPDATE jadwal SET id_guru='$id_guru',
        id_matpel='$id_matpel',
        id_kelas='$id_kelas',
        hari='$hari',
        jam='$jam' WHERE id_jadwal='$id'")or die (mysql_error());
        if($simpan){
            echo "<script>alert('Penyimpanan Data Berhasil'); document.location='?page=get_jadwal';</script>";
        }else{
          echo "<script>alert('Penyimpanan Data Belum Berhasil'); document.location='?page=get_jadwal';</script>";
        }
    }
  ?>
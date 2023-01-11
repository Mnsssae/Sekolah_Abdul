<?php 
$id = $_GET['id_jadwal'];
$getkelas = mysql_query("SELECT * FROM kelas,jadwal WHERE jadwal.id_kelas=kelas.id_kelas AND jadwal.id_jadwal='$id'")or die(mysql_error());
$getkelas = mysql_fetch_array($getkelas);
//Select pertemuan terakhir
$getAbsen = mysql_query("SELECT * FROM absen WHERE id_jadwal='$id' ORDER BY pertemuan DESC")or die(mysql_error());
$rowAbsen = mysql_fetch_array($getAbsen);
if(empty($rowAbsen)){
    $pertemuan = 1;
}else{
    $pertemuan = $rowAbsen['pertemuan']+ 1;
}
?>
<h1>Pengisian Absen Kelas : <?php echo $getkelas['kelas']?></h1>
<form method='post'>
    <div class="row">
        <div class="col-6">
            <label for="tanggalAbsen">Tanggal Absen</label>
            <input typr="date" name="tanggal_absen" id="tanggalAbsen" value="<?php echo date('y-m-d') ?>">
</div>
    <div class="col-6">
        <label for="pertemuan">Pertemuan ke-</label>
        <input type="number" name="pertemuan" id="pertemuan" value="<?php echo $pertemuan; ?>">
</div>
    </div>

<table border=1>
    <thead>
        <th style='width:5%'>No</th>
        <th style='width:50%'>NIS/Nama</th>
        <th style='text-align:center;'>Keterangan</th>
    </thead>
<?php $no = 0;
$kelas = $getkelas["id_kelas"];
$getSiswa = mysql_query("SELECT * FROM siswa WHERE id_kelas='$kelas'")or die(mysql_error());
while($rowSiswa = mysql_fetch_array($getSiswa)){ $no++; ?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $rowSiswa['nama'].'<br>'.$rowSiswa['nis']; ?></td>
    <td style='text-align:center;'>
        <input type="radio" name="absen<?php echo $rowSiswa['nis'] ?>" id="hadir<?php echo $rowSiswa['nis'] ?>"
            value="H" checked>
        <label for="hadir<?php echo $rowSiswa['nis'] ?>">hadir</label>

        <input type="radio" name="absen<?php echo $rowSiswa['nis'] ?>" id="alpha<?php echo $rowSiswa['nis'] ?>"
            value="A">
        <label for="alpha<?php echo $rowSiswa['nis'] ?>">Alpha</label>

        <input type="radio" name="absen<?php echo $rowSiswa['nis'] ?>" id="izin<?php echo $rowSiswa['nis'] ?>"
            value="I">
        <label for="Izin<?php echo $rowSiswa['nis'] ?>">Izin</label>

        <input type="radio" name="absen<?php echo $rowSiswa['nis'] ?>" id="sakit<?php echo $rowSiswa['nis'] ?>"
            value="S">
        <label for="sakit<?php echo $rowSiswa['nis'] ?>">Sakit</label>
</td>
</tr>
<?php } ?>
</table>
<!-- <button type='submit' name='simpan' class='btn navy' style='float:right; margin-top:20px'>Simpan</button> -->
<input type="submit" name="simpan" class='btn navy' style='float:right; margin-top:20px' value="simpan">
</form>

<?php
if(isset($_POST['simpan'])){
    $kelas = $getkelas['id_kelas'];
    $getSiswa = mysql_query("SELECT * FROM siswa WHERE id_kelas='$kelas'")or die(mysql_error());
    while($rowSiswa = mysql_fetch_array($getSiswa)){
        $id_siswa = $rowSiswa['id_siswa'];
        $id_jadwal = $getkelas['id_jadwal'];
        $status_absen = $_POST['absen'.$rowSiswa['nis']];
        $tanggal_absen = $_POST['tanggal_absen'];
        $pertemuan = $_POST['pertemuan'];

        mysql_query("INSERT INTO absen SET
        id_siswa = '$id_siswa',
        id_jadwal = '$id_jadwal',
        status_absen = '$status_absen',
        tanggal_absen = '$tanggal_absen',
        pertemuan = '$pertemuan'")or die(mysql_error());
    }
    echo "<script>alert('Penyimpanan data berhasil'); document.location='?page=absen';</script>";
}
?>
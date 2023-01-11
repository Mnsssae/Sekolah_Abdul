<?php
$id = $_GET['id_jadwal'];
$getkelas = mysql_query("SELECT * FROM kelas,jadwal WHERE jadwal.id_kelas=kelas.id_kelas AND jadwal.id_jadwal='$id'")or die(mysql_error());
$getkelas = mysql_fetch_array($getkelas);
?>

<h1>Detail Absen Kelas <?php echo $getkelas['kelas']; ?></h1>
<a href="?page=isi_absen$id_jadwal=<?php echo $getkelas['id_jadwal']; ?>" class='btn-navy'> <i class='fa fa-plus'> </i>
    Isi Absen</a>
    <table border='1'>
        <thead>
            <th style='text-align:center;'>No</th>
            <th>Tanggal</th>
            <th style='text-align:center; '>Pertemuan</th>
            <th style='text-align:center; '>Jumlah siswa</th>
            <th style='text-align:center; '>hadir</th>
            <th style='text-align:center; '>Alpha</th>
            <th style='text-align:center; '>Izin</th>
            <th style='text-align:center; '>Sakit</th>
            <th style='text-align:center; '>Persentase</th>
            <th style='text-align:center; '>Action</th>
</thead>

<?php
$getAbsen = mysql_query("SELECT * FROM absen GROUP BY pertemuan ORDER BY pertemuan DESC")or die(mysql_error());
$no = 0;
while($rowAbsen = mysql_fetch_array($getAbsen)){
    $no++;
    ?>

    <tr>
        <td style='text-align:center;'><?php echo $no; ?></td>
        <td><?php echo tanggal_indo($rowAbsen['tanggal_absen']?></td>
        <td style='text-align:center;'><?php echo $rowAbsen['pertemuan']?></td>
        <td style='text-align:center;'><?php echo hitungJumlahSiswa($getkelas['id_kelas'])?>Siswa</td>
        <td style='text-align:center;'><?php echo hitungKehadiran('H',$id,$rowAbsen['pertemuan'])?></td>
        <td style='text-align:center;'><?php echo hitungKehadiran('A',$id,$rowAbsen['pertemuan'])?></td>
        <td style='text-align:center;'><?php echo hitungKehadiran('I',$id,$rowAbsen['pertemuan'])?></td>
        <td style='text-align:center;'><?php echo hitungKehadiran('S',$id,$rowAbsen['pertemuan'])?></td>
        <td style='text-align:center;'>
        <?php echo (hitungKehadiran('H',$id,$rowAbsen['pertemuan']) / hitungJumlahSiswa($getkelas['id_kelas']) * 100)?>
        %
        </td>
        <td style='text-align:center;'>
            <a href="?page=edit_absen$id_jadwal=<?php echo $id ?>&pertemuan=<?php echo $rowAbsen['pertemuan']; ?>"
                class='btn info'><i class='fa fa-edit'></i>Edit</a>
         
            <a href="?page=del_absen$id_jadwal=<?php echo $id ?>&pertemuan=<?php echo $rowAbsen['pertemuan']; ?>"
                class='btn danger' onclick="return confirm('Yakin menghapus data ini?')">
    </td>
    </tr>
<?php } ?>
</table>
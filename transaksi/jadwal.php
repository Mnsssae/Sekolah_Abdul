<h1>Jadwal Pelajaran</h1>
<table border=1>
    <thead>
        <th>No</th>
        <th>Matpel</th>
        <th>Hari/Jam</th>
        <th>Kelas</th>
</thead>
<?php
$no = 0;
$id_guru = $_SESSION['id_guru'];
$getJadwal = mysql_query("SELECT * FROM jadwal, guru, matpel, kelas
Where jadwal.id_guru=guru.id_guru
And jadwal.id_matpel=matpel.id_matpel
and jadwal.id_kelas=kelas.id_kelas
and jadwal.id_guru='$id_guru'")or die(mysql_error());
while($rowkelas = mysql_fetch_array($getJadwal)){
    $no++;
?>
    <tr>
     <td><?php echo $no; ?></td>
     <td><?php echo $rowkelas['nama_matpel'];?></td>
     <td><?php echo $rowkelas['hari'].'/'.$rowkelas['jam'];?></td>
      <td><?php echo $rowkelas['id_kelas'];?></td>
        <?php } ?>
        </tr>

        </table>

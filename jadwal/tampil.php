<h1>Tampil Jadwal</h1>


<?php 
$getjadwal = mysql_query("SELECT * from jadwal") or die(mysql_error());
$rowk = mysql_fetch_array($getjadwal);
?>

<a href="?page=add_jadwal" class="btn info"><i class='fa fa-plus'></i>Tambah Data</a>
<br><br>
<table border=1>
    <thead>
        <th>No</th>
        <th>Nama Guru</th>
        <th>Matpel</th>
        <th>Hari/Jam</th>
        <th>Kelas</th>
        <th>Action</th>
</thead>
<?php
$no = 0;
$getJadwal = mysql_query("SELECT * FROM jadwal, guru, matpel, kelas
Where jadwal.id_guru=guru.id_guru
And jadwal.id_matpel=matpel.id_matpel
and jadwal.id_kelas=kelas.id_kelas")or die(mysql_error());
while($rowkelas = mysql_fetch_array($getJadwal)){
    $no++;
?>
    <tr>
     <td><?php echo $no; ?></td>
     <td><?php echo $rowkelas['nama_guru']; ?></td>
     <td><?php echo $rowkelas['nama_matpel'];?></td>
     <td><?php echo convHari($rowkelas['hari']).'/'.$rowkelas['jam'];?></td>
      <td><?php echo $rowkelas['kelas'];?></td>
      <td>
        <a href="?page=edit_jadwal&id=<?php echo $rowkelas['id_jadwal'];?>" class='btn warning'>
        <i class='fa fa-edit'></i>Edit</a>
        <a href="?page=del_jadwal&id=<?php echo $rowkelas['id_jadwal'];?>"
        onclick="return confirm('Apakah yakin ingin mengapus data?')"class='btn danger'>
        <i class='fa fa-times'></i>Hapus</a>

        </td>
        <?php } ?>
        </tr>

        </table>


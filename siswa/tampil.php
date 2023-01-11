<div class="title">
 <h1> <i class='fa fa-users'></i>Tampil Data Siswa </h1>
<br><br>
<a href="?page=add_siswa" style="text-decoration: none; color:rgb(0, 175, 175); float:right; margin-top:-30px; margin-right:100px;" class="btn_info"><i class="fa fa-plus"></i>Tambah Data</a>
<table border=1>
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tempat, Tanggal lahir</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Action</th>
    </tr>
    <?php
     $no = 0;
     $getSiswa = mysql_query("SELECT * FROM siswa,jurusan,kelas WHERE siswa.id_jurusan=jurusan.id_jurusan AND siswa.id_kelas=kelas.id_kelas")or die(mysql_error());
     while ($arrsiswa = mysql_fetch_array($getSiswa)){ $no++; 
     ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $arrsiswa['nis']; ?></td>
        <td><?php echo $arrsiswa['nama']; ?></td>
        <td><?php echo $arrsiswa['tmpat_lahir'].','.$arrsiswa['tgl_lahir'];?></td>
        <td><?php echo $arrsiswa['kelas']; ?></td>
        <td><?php echo $arrsiswa['alias']; ?></td>
        <td>
        <a href="?page=edit_siswa&id=<?php echo $arrsiswa['id_siswa'];?>" class='btn warning'><i class='fa fa-edit'></i>Edit</a>
        <a href="?page=del_siswa&id=<?php echo $arrsiswa['id_siswa'];?>"
        onclick="return confirm('Apakah yakin ingin mengapus data?')"class='btn danger'><i class='fa fa-times'></i>Hapus</a>
             
    </tr>
    <?php } ?>
</table>
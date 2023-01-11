<div class="title">
 <h1> <i class='fa fa-users'></i>Tampil Data Jurusan </h1>
<br><br>
<a href="?page=add_jurusan" style="text-decoration:none; color:rgb(0, 175, 175); float:right; margin-top:-30px; margin-right:100px;" class="btn_info"><i class="fa fa-plus"></i>Tambah Data</a>
<table border=1>
    <tr>
        <th>No</th>
        <th>Nama Jurusan</th>
        <th>Alias</th>
        <th>Action</th>
    
    <?php
     $no = 0;
     $getSiswa = mysql_query("SELECT * From jurusan")or die(mysql_error());
     while ($arrsiswa = mysql_fetch_array($getSiswa)){ $no++; 
     ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $arrsiswa['nama_jurusan']; ?></td>
        <td><?php echo $arrsiswa['alias']; ?></td>
        

        <td>
        <a href="?page=edit_jurusan&id=<?php echo $arrsiswa['id_jurusan'];?>" class='btn warning'><i class='fa fa-edit'></i>Edit</a>
        <a href="?page=del_jurusan&id=<?php echo $arrsiswa['id_jurusan'];?>"
        onclick="return confirm('Apakah yakin ingin mengapus data?')"class='btn danger'><i class='fa fa-times'></i>Hapus</a>

        </td>
        <?php } ?>
        </tr>

        </table>
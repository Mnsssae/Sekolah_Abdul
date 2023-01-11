<div class="title">
 <h1> <i class='fa fa-users'></i>Tampil Data Kelas </h1>
<br><br>
<a href="?page=add_kelas" style="text-decoration:none; color:rgb(0, 175, 175); float:right; margin-top:-30px; margin-right:100px;" class="btn_info"><i class="fa fa-plus"></i>Tambah Data</a>
<table border=1>
    <tr>
        <th>No</th>
        <th>Kelas</th>
        <th>Action</th>
    
    <?php
     $no = 0;
     $getSiswa = mysql_query("SELECT * From kelas")or die(mysql_error());
     while ($arrsiswa = mysql_fetch_array($getSiswa)){ $no++; 
     ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $arrsiswa['kelas']; ?></td>
        

        <td>
        <a href="?page=edit_kelas&id=<?php echo $arrsiswa['id_kelas'];?>" class='btn warning'><i class='fa fa-edit'></i>Edit</a>
        <a href="?page=del_kelas&id=<?php echo $arrsiswa['id_kelas'];?>"
        onclick="return confirm('Apakah yakin ingin mengapus data?')"class='btn danger'><i class='fa fa-times'></i>Hapus</a>

        </td>
        <?php } ?>
        </tr>

        </table>
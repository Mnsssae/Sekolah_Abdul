<div class="title">
 <h1> <i class='fa fa-users'></i>Tampil Data Matpel </h1>
<br><br>
<a href="?page=add_matpel" style="text-decoration: none; color: rgb(0, 175, 175); float:right; margin-top:-30px; margin-right:100px;" class="btn_info"><i class="fa fa-plus"></i>Tambah Data</a>
<table border=1>
    <tr>
        <th>No</th>
        <th>Nama Matpel</th>
        <th>Jumlah Jam</th>
        <th>Action</th>
        </thead>
    <?php
     $no = 0; $getMatpel = mysql_query("SELECT * From matpel ORDER BY id_matpel DESC")or die(mysql_error());
     while ($row = mysql_fetch_array($getMatpel)){ $no++; 
     ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama_matpel']; ?></td>
        <td><?php echo $row['jumlah_jam']; ?></td>
       <td>
        <a href="?page=edit_matpel&id=<?php echo $row['id_matpel'];?>" class='btn warning'><i class='fa fa-edit'></i>Edit</a>
        <a href="?page=del_matpel&id=<?php echo $row['id_matpel'];?>"
        onclick="return confirm('Apakah yakin ingin mengapus data?')"class='btn danger'><i class='fa fa-times'></i>Hapus</a>

        </td>
        </tr>
        <?php } ?>
        </table>
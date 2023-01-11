<div class="title">
 <h1> <i class='fa fa-users'></i>Tampil Data Guru </h1>
<br><br>
<a href="?page=add_guru" style="text-decoration:none; color:rgb(0, 175, 175); float:right; margin-top:-30px; margin-right:100px;" class="btn_info"><i class="fa fa-plus"></i>Tambah Data</a>
   <table border=1>
   <tr>
   <th>No</th>
   <th>Nama Guru</th>
   <th>Tahun Masuk</th>
   <th>Jenis Kelamin</th>
   <th>Tempat Lahir</th>
   <th>Tanggal Lahir</th>
   <th>Pendidikan</th>
   <th>Password</th>
   <th>NIP</th>
   <th>Level</th>
   <th>Action</th>
   </thead>
<?php 
    $no = 0; $getGur = mysql_query("SELECT * FROM guru ORDER BY id_guru DESC")or die(mysql_error());
    while ($row = mysql_fetch_array($getGur)){ $no++;
    ?>
    <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['nama_guru'] ?></td>
    <td><?php echo $row['tahun_masuk']?></td>
    <td><?php echo $row['jenis_kelamin'] ?></td>
    <td><?php echo $row['tempat_lahir']?></td>
    <td><?php echo $row['tanggal_lahir'] ?></td>
    <td><?php echo $row['pendidikan']?></td>
    <td><?php echo $row['password']?></td>
    <td><?php echo $row['nip'] ?></td>
    <td><?php echo $row['level']?></td>
    <td>

    <a href="?page=edit_guru&id=<?php echo $row['id_guru'];?>" class='btn warning'><i class='fa fa-edit'></i>Edit</a>
    <a href="?page=del_guru&id=<?php echo $row['id_guru'];?>"
    onclick="return confirm('Apakah yakin ingin menghapus data?')" class='btn danger'><i class='fa fa-times'></i>Hapus</a>
    </td>
    <?php } ?>
    </tr>
    </table>
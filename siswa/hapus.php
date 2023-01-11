<?php 
$siswaid = $_GET['id'];
$hapus = mysql_query("DELETE FROM siswa WHERE id_siswa='$siswaid' ") or die (mysql_error());
if ($hapus){
    echo "<script> alert('Penghapusan Data Berhasil') ; document.location='?page=get_siswa'</script>";
    }else{
        echo "<script> alert('Maaf, Penghapusan Data Belum Berhasil') ; document.location='?page=get_siswa'</script>";
    }
    ?>
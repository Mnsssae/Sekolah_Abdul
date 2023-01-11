<?php
$id_jadwal = $_GET['id'];
$hapus = mysql_query("DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'")or die(mysql_error());
if($hapus){
    echo "<script>alert('Penghapusan Data Berhasil'); document.location='?page=get_jadwal'</script>";
    }else{
        echo "<script>alert('Maaf,Penghapusan Data Belum Berhasil'); document.location='?page=get_jadwal'</script>";
    }
?>
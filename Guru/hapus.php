<?php
$id_guru = $_GET['id'];
$hapus = mysql_query("DELETE FROM guru WHERE id_guru='$id_guru'")or die(mysql_error());
if($hapus){
    echo "<script>alert('Penghapusan Data Berhasil'); document.location='?page=get_guru'</script>";
    }else{
        echo "<script>alert('Maaf,Penghapusan Data Belum Berhasil'); document.location='?page=get_siswa'</script>";
    }
?>
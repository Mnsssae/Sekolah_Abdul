<?php
$id_matpel = $_GET['id'];
$hapus = mysql_query("DELETE FROM matpel WHERE id_matpel='$id_matpel'")or die(mysql_error());
if($hapus){
    echo "<script>alert('Penghapusan Data Berhasil'); document.location='?page=get_matpel'</script>";
    }else{
        echo "<script>alert('Maaf,Penghapusan Data Belum Berhasil'); document.location='?page=get_siswa'</script>";
    }
?>
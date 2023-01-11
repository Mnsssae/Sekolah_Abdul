<?php 
$id_kelas = $_GET['id'];
$hapus = mysql_query("DELETE FROM kelas WHERE id_kelas='$id_kelas'")or die(mysql_error());
if($hapus){
    echo "<script>alert('Penghapusan Data Berhasil'); document.location='?page=get_kelas'</script>";
    }else{
        echo "<script>alert('Maaf,Penghapusan Data Belum Berhasil'); document.location='?page=get_kelas'</script>";
    }
?>
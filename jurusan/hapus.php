<?php 
$id_jurusan = $_GET['id'];
$hapus = mysql_query("DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'")or die(mysql_error());
if($hapus){
    echo "<script>alert('Penghapusan Data Berhasil'); document.location='?page=get_jurusan'</script>";
    }else{
        echo "<script>alert('Maaf,Penghapusan Data Belum Berhasil'); document.location='?page=get_jurusan'</script>";
    }
?>
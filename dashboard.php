<!-- 
nama file : dashboard.html
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="backend.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="topbar navy"><h3> <i class="fa fa-tv"></i> Dashboard</h3></div>

    <div class="sidebar">
        <a href="./" class="<?php echo $_GET['page']==='home' ? 'active' : ''; ?>"><i class="fa fa-home"></i> Home</a>

        <!--menu untuk admin-->
        <?php if($_SESSION['level']==='ADMIN') { ?>
        <a href="?page=get_siswa" class="<?php echo substr($_GET['page'],4)==='siswa' ? 'active' : ''; ?>"><i class="fa fa-users"></i> Siswa</a>
        <a href="?page=get_guru" class="<?php echo substr($_GET['page'],4)==='guru' ? 'active' : ''; ?>"><i class="fa fa-chalkboard-teacher"></i> Guru</a>
        <a href="?page=get_matpel" class="<?php echo substr($_GET['page'],4)==='matpel' ? 'active' : ''; ?>"><i class="fa fa-clone"></i> Matpel</a>
        <a href="?page=get_jadwal" class="<?php echo substr($_GET['Page'],4)==='jadwal' ? 'active' : ''; ?>"><i class="fa fa-calendar-check "></i> Jadwal</a>
        <a href="?page=get_jurusan" class="<?php echo substr($_GET['page'],4)==='jurusan' ? 'active' : ''; ?>"><i class="fa fa-level-up-alt"></i> Jurusan</a>
        <a href="?page=get_kelas" class="<?php echo substr($_GET['page'],4)==='kelas' ? 'active' : ''; ?>"><i class="fa fa-warehouse"></i> Kelas</a>
        <?php } else{ ?>
<!--menu untuk guru-->

       <a href="?page=get_jguru&"><i class='fa fa-calendar'></i>Jadwal</a>
       <a href="?page=get_absen"><i class='fa fa-check'></i>Absen</a>
       <a href="?page=get_rguru"><i class='fa fa-file'></i>Laporan</a>
       <?php } ?>
        
  <a href="conf/logout.php" onclick="return confirm('Yakin keluar Apk?')"><i class="fa fa-power-off"></i> Keluar</a>
  </div>
  <!-- isi konten-->
    <div class="wrap-content">
       <?php 
       if(!$_GET['page']){
           echo"<script>document.location='?page=home'</script>";
       }
       include "conf/core_function.php";
        include "conf/koneksi.php";
       include "conf/page.php"; ?>
    </div>

</body>
</html>
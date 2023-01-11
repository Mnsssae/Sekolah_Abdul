<div class="title">
            <h1> <i class="fa fa-home"></i> Home</h1>
        </div>

        <h3>Selamat Datang,<?php echo $_SESSION['nama']; ?></h3>
    <?php if($_SESSION['level']==='ADMIN'){?>
<!-- dashboard statistics -->
        <div class="row">
            <div class="col-3 danger" style="color: white;">
                <div class="row">
                    <div class="col-4" style="padding:25px;">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-8">
                        <h3 style="margin: 0;">Siswa</h3>
                        <h1 style="font-size:50pt; margin: 0;"><?php echo hitung("siswa");?></h1>
                    </div>
                </div>
            </div>

            <div class="col-3 info" style="color: white;">
                <div class="row">
                    <div class="col-4" style="padding:25px;">
                        <i class="fa fa-newspaper fa-5x"></i>
                    </div>
                    <div class="col-8">
                        <h3 style="margin: 0;">Guru</h3>
                        <h1 style="font-size:50pt; margin: 0;"><?php echo hitung("guru");?></h1>
                    </div>
                </div>
            </div>

            <div class="col-3 warning" style="color: white;">
                <div class="row">
                    <div class="col-4" style="padding:25px;">
                        <i class="fa fa-pen fa-5x"></i>
                    </div>
                    <div class="col-8">
                        <h3 style="margin: 0;">Matpel</h3>
                        <h1 style="font-size:50pt; margin: 0;"><?php echo hitung("matpel");?></h1>
                    </div>
                </div>
            </div>

            <div class="col-3 navy" style="color: white;">
                <div class="row">
                    <div class="col-4" style="padding:25px;">
                        <i class="fa fa-bullhorn fa-5x"></i>
                    </div>
                    <div class="col-8">
                        <h3 style="margin: 0;">Kelas</h3>
                        <h1 style="font-size:50pt; margin: 0;"><?php echo hitung("kelas");?></h1>
                    </div>
                </div>
            </div>
        </div>
<!--dasboard statistic-->
        <?php } ?>
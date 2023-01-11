<!-- 
nama file : berita.html
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
        <a href="dashboard.html"> <i class="fa fa-home"></i> Home</a>
        <a href="berita.html"  class='active'><i class="fa fa-newspaper"></i> Berita</a>
        <a href="pengumuman.html"><i class="fa fa-bullhorn"></i> Pengumuman</a>
        <a href="penulis.html"><i class="fa fa-users"></i> Penulis</a>
        <a href="login.html" onclick="return confirm('Yakin Keluar Aplikasi?')"><i class="fa fa-power-off"></i> Keluar</a>
    </div>

    <div class="wrap-content">
        <div class="title">
            <h1> <i class="fa fa-newspaper"></i> Berita</h1>
        </div>

        <a href="tambah-berita.html" class="btn info"> <i class="fa fa-plus"></i> Tambah Data</a>
        <table border="1">
            <thead>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tanggal Post</th>
                <th>Action</th>
            </thead>
            <tr>
                <td>1</td>
                <td>Membuat Website</td>
                <td>Aldian Syahputra</td>
                <td>Berita</td>
                <td>20 Januari 2022</td>
                <td>
                    <a href="#" class="btn warning"> <i class="fa fa-edit"></i> Edit</a>
                    <a href="#" class="btn danger"> <i class="fa fa-times"></i> Hapus</a>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
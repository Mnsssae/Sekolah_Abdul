<!-- 
nama file : tambah-berita.html
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
            <h1> <i class="fa fa-plus"></i> Tambah Berita</h1>
        </div>

        <form action="#" method="post">
            <label for="judul">Judul Berita</label>
            <input type="text" name="judul" id="judul">

            <label for="kategori">Kategori</label>

            <select name="kategori" id="kategori">
                <option value="Berita">Berita</option>
                <option value="Artikel">Artikel</option>
                <option value="Tutorial">Tutorial</option>
            </select>

            <label for="isi">Isi Berita</label>
            <textarea name="isi" id="isi" cols="30" rows="10"></textarea>

            <button type="submit" class="info"> <i class="fa fa-save"></i> Simpan</button>

            <button type="reset" class="danger"> <i class="fa fa-times"></i> Batal</button>
        </form>

        
        
    </div>

</body>
</html>
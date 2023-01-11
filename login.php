<!-- 
    Nama file : Login.html
 -->
 <style>
     body{
         background: #C04848;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #480048, #C04848);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #480048, #C04848); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
     }
 </style>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Panel</title>
     <link rel="stylesheet" href="backend.css">
     <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
 </head>
 <body>
     <div class="container bg-white" style="margin-top:10% ;">
         <div class="row">
         <div class="col-8 login-desc">
             <h1> <i class="fa fa-sign-in"></i> Login Page</h1>
             <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum dolores nam, quo cumque fuga placeat facilis animi tenetur nihil, aperiam incidunt aliquid illum provident. Praesentium doloremque odit reiciendis velit debitis?</p>
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore ipsa id beatae. Est qui incidunt laudantium dolorum adipisci molestiae, magni ad id velit tempore cum similique ut provident harum quod.</p>
         </div>
         <div class="col-4">
             <h1> <i class="fa fa-fingerprint"></i> Login Form</h1>
             <form action="" method="post">
                 <label for="nip">Nomor Induk Pegawai(NIP)</label>
                 <input type="text" name="nip" id="nip" required>

                 <label for="password">Password</label>
                 <input type="password" name="password" id="password" required>
                 <button type="submit" name="masuk" class="info">Masuk</button>
                 <button type="reset" class="danger">Batal</button>
             </form>
         </div>
         </div>
     </div>
     <?php
     include "conf/koneksi.php";
     if(isset($_POST['masuk'])){
         $nip = $_POST['nip'];
         $password = md5($_POST['password']);
         $ceklogin = mysql_query("SELECT * FROM guru WHERE nip='$nip' and password='$password'")or die(mysql_error());
         if(mysql_num_rows($ceklogin)> 0 ){
             $getguru = mysql_fetch_array($ceklogin);
             session_start();
             $_SESSION['nama'] = $getguru['nama_guru'];
             $_SESSION['id_guru'] = $getguru['id_guru'];
             $_SESSION['status'] = 'LOGIN';
             $_SESSION['level'] = $getguru['level'];
             echo"<script>document.location='./'</script>";
         }else{
            echo"<script>alert('Kombinasi NIP dan password tidak sesuai')</script>";
         }
     }
     ?>
 </body>
 </html>
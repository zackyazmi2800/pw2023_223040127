<?php 
require 'functions.php';
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo"<script>
        alert('Username baru berhasil di tambahkan');
        document.location.href = 'index.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wakanda</title>
    <link rel="stylesheet" href="style/index.css">
    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>
</head>



<body>
    <div class="bg-login">
        <div class="wrapper-login">
            <div class="box-daftar">
                <h2 class="title-daftar">Daftar</h2>
                <label class="label-isi">Silahkan isi data anda</label>
                <form action="" method="POST">
                    <input input type="text" name="nama" id="nama" placeholder="Nama" autocomplete="off" class="input-daftar">
                    <input input type="text" name="username" id="username" placeholder="Username" autocomplete="off" class="input-daftar">
                    <input input type="email" name="email" id="email" placeholder="Email" autocomplete="off" class="input-daftar">
                    <input type="password" name="password" placeholder="Password" class="input-daftar">
                    <input type="password" name="password2" placeholder="Confirm Password" class="input-daftar">
                    <input type="hidden" name="level" id="level" value="user">
                    <button type="submit" name="register" class="btn">Daftar</button>
                </form>
                <label class="label-daftar">Apakah Anda Sudah Mempunyai Akun? <a href="index.php">Masuk</a></label>
            </div>
        </div>
    </div>
</body>


</html>
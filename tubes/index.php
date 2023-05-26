<?php
session_start();
require 'functions.php';


if (isset($_SESSION["login"])) {
	header("Location: petugas/index.php");
	exit;
}else if (isset($_SESSION["login2"])) {
	header("Location: admin/index.php");
	exit;
}


if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user_admin WHERE username = '$username'");

	// Cek username
	if (mysqli_num_rows($result) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			if ($row["level"] == "user") {
				// set session
				$_SESSION["login"] = true;

				header("Location: user/index.php");
				exit;
			}
			else if ($row["level"] == "admin") {
				// set session
				$_SESSION["login2"] = true;

				header("Location: admin/index.php");
				exit;
			}
		}
	}

	$error = true;
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
            <div class="box-login">
                <div class="title-login"><h1>WAKANDA</h1></div>
                <h2>Welcome To Web Wakanda</h2>
                <label class="label-login">Silahkan isi username dan password</label>
                <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">username / password salah</p>
            <?php endif; ?>
            <form action="" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" class="input">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" class="input">
                <button type="submit" name="login" class="masuk">Masuk</button>
            </form>
                <label class="new-user">Apakah Anda Belum Mempunyai Akun? <a href="daftar.php">Daftar</a></label>
            </div>
        </div>
    </div>
</body>


</html>
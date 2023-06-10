<?php
// session_start();
require 'functions.php';


if (isset($_SESSION["login"])) {
	header("Location: user/index.php");
	exit;}
if (isset($_SESSION["login2"])) {
	header("Location: admin/dashboard.php");
	exit;
}




if (isset($_POST["login"])) {

	$pesan = '';
	$redirect = '';
	$username = $_POST["username"];
	$password = $_POST["password"];

	$q = $conn->query("SELECT * FROM user_admin WHERE username = '$username'");
	$get_data = mysqli_fetch_assoc($q); 

	// Cek username
	if (empty($get_data)) {
		// cek password
		$pesan ='Username belum terdaftar';
	}else{
		if (!password_verify($password, $get_data['password'])) {
		$pesan="Username dan password salah";
	}elseif ($get_data['level'] == "admin"){
			session_start();
			$_SESSION['id'] = $get_data['id'];
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $get_data['email'];
			$pesan = "Selamat Data Admin";
			$redirect = "admin/index.php";
			$_SESSION["login2"] = true;
			$_SESSION["login"] = true;
			header("Location: admin/dashboard.php");
			exit;
		} else {
			session_start();
			$_SESSION['id'] = $get_data['id'];
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $get_data['email'];
			$pesan = "Selamat Data";
			$redirect = "user/index.php";
			$_SESSION["login"] = true;
			header("Location: user/index.php");
			exit;
		}
	} 
echo 
("<script>
alert ('$pesan');
window.location.href='$redirect';
</script>");
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
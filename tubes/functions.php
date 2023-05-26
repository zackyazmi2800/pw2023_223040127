<?php
define('BASE_URL', '/pw2023_223040127/tubes/admin/');
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "tubes");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data)
{
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$nama = $data["nama"];
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$level = $data["level"];

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user_admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
			  </script>";
		return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai')
			  </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO `user_admin` (`id`, `username`, `nama`, `email`, `password`, `level`)
	VALUES(null, '$username', '$nama', '$email', '$password', '$level')");

	return mysqli_affected_rows($conn);
}

function tambah_galery($data)
{
	global $conn;

	$judul = htmlspecialchars($data["judul"]);
	$gambar = upload();
	if (!$gambar){
		return false;
	}

	$query = "INSERT INTO galery
				VALUES
				(null, '$gambar', '$judul')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload()
{
	$nameFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4){
		echo"<script>
		alert('masukan foto terlebih dahulu'); 
		</script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
	$ekstensiGambar = explode ('.', $nameFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo"<script>
		alert('yang anda uplod bukan gambar '); 
		</script>";
		return false;
	}

	if ($ukuranFile > 1000000){
		echo"<script>
		alert('ukuran gambar terlalu besar '); 
		</script>";
		return false;
	}

	// memindahkan file
	move_uploaded_file ($tmpName, '../img/galery/' . $nameFile);
	return $nameFile;


}

function hapusGambar($id_gambar)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM galery WHERE id_gambar = '$id_gambar'");
	return mysqli_affected_rows($conn);
}

function ubah_galery($data)
{
	global $conn;

	$id_gambar = htmlspecialchars($data["id_gambar"]);
	$judul = htmlspecialchars($data["judul"]);
	$gambar = upload();
	if (!$gambar){
		return false;
	}

	$query = "UPDATE galery SET
				id_gambar = '$id_gambar', 
				gambar = '$gambar',
				judul = '$judul'
			WHERE id_gambar = $id_gambar
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cekAktive($uri) {
    return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri ) ? 'active' : '';
}
?>
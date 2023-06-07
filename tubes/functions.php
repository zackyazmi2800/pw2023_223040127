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

function ubah_admin($data)
{
	global $conn;

	$id = $data["id"];
	$username = strtolower(stripcslashes($data["username"]));
	$nama = $data["nama"];
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$level = $data["level"];

	$password = password_hash($password, PASSWORD_DEFAULT);


	$query = "UPDATE user_admin SET
				id = '$id', 
				username = '$username',
				nama = '$nama',
				`password` = '$password',
				`level` = '$level'
			WHERE id = $id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_admin($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM user_admin WHERE id = '$id'");
	return mysqli_affected_rows($conn);
}

function cari_admin($keyword)
{
	$query = "SELECT * FROM user_admin
				WHERE
			  id LIKE '%$keyword%' OR
			  username LIKE '%$keyword%' OR
			  nama LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  `level` LIKE '%$keyword%'
			";
	return query($query);
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

function cari_galery($keyword)
{
	$query = "SELECT * FROM galery
				WHERE
			  gambar LIKE '%$keyword%' OR
			  judul LIKE '%$keyword%'
			";
	return query($query);
}

function cekAktive($uri) {
    return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri ) ? 'active' : '';
}


function tambah_berita($data)
{
	global $conn;

	$img = upload_berita();
	if (!$img){
		return false;
	}
	$title_berita = htmlspecialchars($data["title_berita"]);
	$isi_berita = htmlspecialchars($data["isi_berita"]);

	$query = "INSERT INTO berita
				VALUES
				(null, '$img', '$title_berita', '$isi_berita')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload_berita()
{
	$nameFile = $_FILES['img']['name'];
	$ukuranFile = $_FILES['img']['size'];
	$error = $_FILES['img']['error'];
	$tmpName = $_FILES['img']['tmp_name'];

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
	move_uploaded_file ($tmpName, '../img/berita/' . $nameFile);
	return $nameFile;


}

function hapus_berita($id_berita)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM berita WHERE id_berita = '$id_berita'");
	return mysqli_affected_rows($conn);
}

function ubah_berita($data)
{
	global $conn;

	$id_berita = htmlspecialchars($data["id_berita"]);
	$img = upload_berita();
	if (!$img){
		return false;
	}
	$title_berita = htmlspecialchars($data["title_berita"]);
	$isi_berita = htmlspecialchars($data["isi_berita"]);

	$query = "UPDATE berita SET
				id_berita = '$id_berita', 
				img = '$img',
				title_berita = '$title_berita',
				isi_berita = '$isi_berita'
			WHERE id_gambar = $id_gambar
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari_berita($keyword)
{
	$query = "SELECT * FROM berita
				WHERE
			  img LIKE '%$keyword%' OR
			  title_berita LIKE '%$keyword%' OR
			  isi_berita LIKE '%$keyword%'
			";
	return query($query);
}


function tambah_pengaduan($data)
{
	global $conn;

	$id = mysqli_real_escape_string($conn, $data["id"]);
	$email = mysqli_real_escape_string($conn, $data["email"]);
	$judul_pengaduan = mysqli_real_escape_string($conn, $data["judul_pengaduan"]);
	$isi_pengaduan = mysqli_real_escape_string($conn, $data["isi_pengaduan"]);

	$query = "INSERT INTO pengaduan (id, email, judul_pengaduan, isi_pengaduan)
              SELECT user_admin.id, user_admin.email, '$judul_pengaduan', '$isi_pengaduan'
              FROM user_admin
              WHERE user_admin.id = '$id' AND user_admin.email = '$email'";
	
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	
}

function cari_pengaduan($keyword)
{
	$query = "SELECT * FROM pengaduan
	INNER JOIN user_admin
	ON pengaduan.id = user_admin.id
              WHERE
              pengaduan.id LIKE '%$keyword%' OR
              pengaduan.email LIKE '%$keyword%' OR
              pengaduan.isi_pengaduan LIKE '%$keyword%' OR
              pengaduan.judul_pengaduan LIKE '%$keyword%'
            ";
	return query($query);
}




?>



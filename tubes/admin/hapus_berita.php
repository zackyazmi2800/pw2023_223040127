<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

$id_berita = $_GET["id_berita"];

if (hapus_berita($id_berita) > 0) {
    echo "
	<script>
		alert('data berhasil dihapus!');
		document.location.href = 'index_berita.php';
	</script>
";
} else {
    mysql_error($id_berita);
}

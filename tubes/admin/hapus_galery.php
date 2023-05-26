<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

$id_gambar = $_GET["id_gambar"];

if (hapusGambar($id_gambar) > 0) {
    echo "
	<script>
		alert('data berhasil dihapus!');
		document.location.href = 'index.php';
	</script>
";
} else {
    mysql_error($id_gambar);
}

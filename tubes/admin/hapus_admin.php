<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

$id = $_GET["id"];

if (hapus_admin($id) > 0) {
    echo "
	<script>
		alert('data berhasil dihapus!');
		document.location.href = 'index_admin.php';
	</script>
";
} else {
    mysql_error($id);
}

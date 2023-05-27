<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

// ambil data di URL
$id_gambar = $_GET["id_gambar"];

// query data galery berdasarkan id
$id_gambar = query("SELECT * FROM galery WHERE id_gambar = $id_gambar")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_galery($_POST) > 0) {
        echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href = 'index.php';
		</script>
		";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

        <div class="content" id="container">
                <h1>Tambah Galery box</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                <input type="hidden" name="id_gambar" value="<?= $id_gambar["id_gambar"] ?>">
                    <div class="mb-3">
                       <label for="gambar" class="form-label">Masukan foto</label>
                        <input class="form-control" type="file" id="gambar" name="gambar" value="<?= $id_gambar["gambar"]?>">
                    </div>
                    <div class="mb-3">
                       <label for="judul" class="form-label">Masukan judul foto</label>
                        <input class="form-control" type="text" id="gambar" name="judul" value="<?= $id_gambar["judul"]?>">
                    </div>
                    <div class="button">
				        <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
			        </div>
                    
                </form>
        </div>

</body>

</html>
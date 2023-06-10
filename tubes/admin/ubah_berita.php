<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

// ambil data di URL
$id_berita = $_GET["id_berita"];

// query data id berita berdasarkan id
$id_berita = query("SELECT * FROM berita WHERE id_berita = $id_berita")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_berita($_POST) > 0) {
        echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href = 'index_berita.php';
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
                <h1>Ubah Berita</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    
                <input type="hidden" name="id_berita" value="<?= $id_berita["id_berita"] ?>">
                <input type="hidden" name="gambar_lama" value="<?= $id_berita["img"] ?>">
                    <div class="mb-3">
                       <label for="img" class="form-label">Masukan foto</label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                    <div class="mb-3">
                       <label for="title_berita" class="form-label">Masukan judul berita</label>
                        <input class="form-control" type="text" id="title_berita" name="title_berita" value="<?= $id_berita["title_berita"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Masukan isi berita</label>
                        <textarea class="form-control" id="isi_berita" name="isi_berita" rows="3" value="<?= $id_berita["isi_berita"] ?>"></textarea>
                    </div>
                    <div class="button">
				        <button type="submit" name="submit" class="btn btn-primary">Ubah Berita</button>
			        </div>
                    
                </form>
        </div>

</body>

</html>
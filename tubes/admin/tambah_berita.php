<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
if (isset($_POST["submit"])) {


	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah_berita($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index_berita.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index_berita.php';
		</script>
		";
	}
}
?>
<!DOCTYPE html>
<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

        <div class="content" id="container">
                <h1>Tambah Galery box</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                       <label for="img" class="form-label">Masukan foto</label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                    <div class="mb-3">
                       <label for="title_berita" class="form-label">Masukan judul berita</label>
                        <input class="form-control" type="text" id="title_berita" name="title_berita">
                    </div>
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Masukan isi berita</label>
                        <textarea class="form-control" id="isi_berita" name="isi_berita" rows="3"></textarea>
                    </div>
                    <div class="button">
				        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
			        </div>
                    
                </form>
        </div>

</body>

</html>
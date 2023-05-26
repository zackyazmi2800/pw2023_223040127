<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
if (isset($_POST["submit"])) {


	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah_galery($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php';
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
                       <label for="gambar" class="form-label">Masukan foto</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                       <label for="judul" class="form-label">Masukan judul foto</label>
                        <input class="form-control" type="text" id="gambar" name="judul">
                    </div>
                    <div class="button">
				        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
			        </div>
                    
                </form>
        </div>

</body>

</html>
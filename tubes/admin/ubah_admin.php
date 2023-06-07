<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

// ambil data di URL
$id= $_GET["id"];

// query data id berita berdasarkan id
$admin = query("SELECT * FROM user_admin WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_admin($_POST) > 0) {
        echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href = 'index_admin.php';
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
                <h1>Ubah admin</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    
                <input type="hidden" name="id" value="<?= $admin["id"] ?>">
                    <div class="mb-3">
                       <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username" value="<?= $admin["username"] ?>">
                    </div>
                    <div class="mb-3">
                       <label for="nama" class="form-label">Nama</label>
                        <input class="form-control" type="text" id="Nama" name="nama" value="<?= $admin["nama"] ?>">
                    </div>
                    <div class="mb-3">
                       <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?= $admin["email"] ?>">
                    </div>
                    <div class="mb-3">
                       <label for="nama" class="form-label">password</label>
                        <input class="form-control" type="password" id="password" name="password" value="<?= $admin["password"] ?>">
                    </div>
                    <input type="hidden" name="level" value="<?= $admin["level"] ?>">
                    <div class="button">
				        <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
			        </div>
                    
                </form>
        </div>

</body>

</html>
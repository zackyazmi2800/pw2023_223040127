<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo"<script>
        alert('User baru berhasil di tambahkan');
        document.location.href = 'index_admin.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

        <div class="content" id="container">
                <h1>Tambah User</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                       <label for="nama" class="form-label">Nama</label>
                        <input class="form-control" type="text" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                       <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username">
                    </div>
                    <div class="mb-3">
                       <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email">
                    </div>
                    <div class="mb-3">
                       <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="mb-3">
                       <label for="password2" class="form-label">Confirm Password</label>
                        <input class="form-control" type="password" id="password2" name="password2">
                    </div>
                    <div class="mb-3">
                       <label for="level" class="form-label">Sebagai apa</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="level">
                            <option selected>Masukan 1 pilihan</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="button">
				        <button type="submit" name="register" class="btn btn-primary">Tambah</button>
			        </div>
                    
                </form>
        </div>

</body>

</html>
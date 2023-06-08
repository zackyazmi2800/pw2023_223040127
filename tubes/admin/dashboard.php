<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;

}
require '../functions.php';
$user = "SELECT id FROM user_admin ORDER BY id";
$user = mysqli_query($conn, $user);
$user = mysqli_num_rows($user);

$pengaduan = "SELECT id FROM pengaduan ORDER BY id";
$pengaduan = mysqli_query($conn, $pengaduan);
$pengaduan = mysqli_num_rows($pengaduan);

$images = "SELECT id_gambar FROM galery ORDER BY id_gambar";
$images = mysqli_query($conn, $images);
$images = mysqli_num_rows($images);

$berita = "SELECT id_berita FROM berita ORDER BY id_berita";
$berita = mysqli_query($conn, $berita);
$berita = mysqli_num_rows($berita);


?>
<!DOCTYPE html>
<html>
<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">admin</div>
                    <div class="card-body">
                        <p class="card-text">Untuk menampilkan data admin dan user</p>
                        <i class="fa-solid fa-users-gear fa-2xl float-end" style="color: #f5f5f5;"></i>
                        <h5 class="card-title"><?= $user; ?> User & Admin</h5>
                        <div class="card-footer">
                        <a href="index_admin.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Tambah Galery Box</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Galery box</div>
                    <div class="card-body">
                        <p class="card-text">Untuk menambahkan gambar untuk galery box user</p>
                        <i class="fa-solid fa-images fa-2xl float-end" style="color: #e4290c;"></i>
                        <h5 class="card-title"><?= $images ?> Gambar</h5>
                        <div class="card-footer">
                            <a href="index.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Tambah Galery Box</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Berita</div>
                    <div class="card-body">
                        <p class="card-text">Untuk menambahkan berita pada halaman user</p>
                        <i class="fa-solid fa-newspaper fa-2xl float-end" style="color: #202327;"></i>
                        <h5 class="card-title"><?= $berita; ?> Berita</h5>
                        <div class="card-footer">
                            <a href="index_berita.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Tambah Berita</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Laporan</div>
                    <div class="card-body">
                        <p class="card-text">Menampilkan data laporan dari penduduk Wakanda</p>
                        <i class="fa-solid fa-envelope fa-2xl float-end" style="color: #e60505;"></i>
                        <h5 class="card-title"><?= $pengaduan; ?> Pengaduan</h5>
                        <div class="card-footer">
                        <a href="index_berita.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat Pengaduan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
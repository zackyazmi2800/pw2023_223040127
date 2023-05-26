<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}
require '../functions.php';

?>
<!DOCTYPE html>
<html>
<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

        <div class="content" id="container">
            <table class="tb">
                <h1>Galery box</h1>
                
                <form action="" method="post">
                    <input type="text" size="45" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
                    <button type="submit" name="cari" nisn="tombol-cari" class="btn-sec">Cari!</button>
                </form>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Laporan</th>
                        <th>Isi Laporan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. </td>
                        <td>profil Pemimpin Wakanda</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sint? Laborum debitis quam assumenda ratione rem. Quia cum dicta saepe! Repudiandae non nesciunt cupiditate! Optio laboriosam aliquid atque incidunt iusto!</td>
                    </tr>
                    <tbody>
                    </table>
        </div>


</body>

</html>
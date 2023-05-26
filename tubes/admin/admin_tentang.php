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
                <h1>Pemimpin Wakanda</h1>
                <form action="" method="post">
                    <button type="submit" name="tambah" class="btn-sec">Tambah Data Pemimpin</button>
                </form>
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="aksi">Ubah/Hapus</th>
                        <th>Nama</th>
                        <th>tentang</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. </td>
                        <td class="aksi">
                            <a href="#">ubah</a> |
                            <a href="#">hapus</a>
                        </td>
                        <td>Black Panther</td>
                        <td>Lahir di wakanda pada tanggal 29 November 1976</td>
                        <td>pemimpin.jpeg</td>
                    </tr>
                <tbody>
            </table>
            <table class="tb">
                <thead>
                <h1>Wakil Pemimpin Wakanda</h1>
                <form action="" method="post">
                    <button type="submit" name="tambah" class="btn-sec">Tambah Data Wakil Pemimpin</button>
                </form>
                <tr>
                    <th>No</th>
                    <th class="aksi">Ubah/Hapus</th>
                    <th>Nama</th>
                    <th>tentang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. </td>
                    <td class="aksi">
                        <a href="#">ubah</a> |
                        <a href="#">hapus</a>
                    </td>
                    <td>Black Panther</td>
                    <td>Lahir di wakanda pada tanggal 29 November 1976</td>
                    <td>pemimpin.jpeg</td>
                </tr>
                <tbody>
            </table>
        </div>


</body>

</html>
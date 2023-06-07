<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}
require '../functions.php';
$pengaduan = query("SELECT * FROM pengaduan
                    INNER JOIN user_admin
                    ON pengaduan.id = user_admin.id");

//cari ketika tombol di tekan
if (isset($_POST["cari"])) {
    $pengaduan = cari_pengaduan($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

        <div class="content">
            <h1>Pengaduan Wakanda</h1>
            
            <form action="" method="post">
                <input type="text" size="45" name="keyword_pengaduan" id="keyword_pengaduan" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
                <button type="submit" name="cari" id="tombol-cari_pengaduan" class="btn-sec">Cari!</button>
            </form>
            <div id="container">

                <table class="tb">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Judul Pengaduan</th>
                            <th>Isi Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php foreach($pengaduan as $p) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $p['email'] ?></td>
                                <td><?= $p['judul_pengaduan']?></td>
                                <td><?= $p['isi_pengaduan']?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                            <tbody>
                                </table>
                            </div>
                            
            </div>
                            
                        </body>
                        
                        </html>
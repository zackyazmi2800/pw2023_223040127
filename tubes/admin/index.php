<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
$images = query("SELECT * FROM galery");

?>
<!DOCTYPE html>
<html>

<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

      <!-- Admin Galery Box -->
        <div class="content" id="container">
            <table class="tb">
                <h1>Galery box</h1>
                
                <form action="" method="post">

                  <a href="tambah_galery.php" class="btn btn-danger mt-3 float-star px-5">Tambah Data</a>
                    
                </form>
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="aksi">Ubah/Hapus</th>
                        <th>Foto</th>
                        <th>Nama file</th>
                        <th>Judul Foto</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($images as $image) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td class="aksi">
                            <a href="ubah_galery.php?id_gambar=<?= $image["id_gambar"];?>">ubah</a> |
                            <a href="hapus_galery.php?id_gambar=<?= $image["id_gambar"];?>">hapus</a>
                        </td>
                        <td><img src="../img/galery/<?= $image["gambar"] ?>" width="200px" alt=""></td>
                        <td><?= $image["gambar"] ?></td>
                        <td><?= $image["judul"]?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach?>
                    <tbody>
                    </table>
          </div>

</body>

</html>
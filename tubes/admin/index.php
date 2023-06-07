<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
$images = query("SELECT * FROM galery");
//cari ketika tombol di tekan
if (isset($_POST["cari"])) {
    $images = cari_galery($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>

<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

      <!-- Admin Galery Box -->
      <div class="content">
          <h1>Galery box</h1>
          
          <form action="" method="post">
              <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian.." autocomplete="off" id="keyword_galery">
              <button type="submit" name="cari" id="tombol-cari_galery" class="btn btn-primary ms-2 px-5">Cari!</button>
              <a href="tambah_galery.php" class="btn btn-danger ms-2 px-5">Tambah Data</a>
              
            </form>
            <div id="container">
            <table class="tb">
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
        </div>
</body>

</html>
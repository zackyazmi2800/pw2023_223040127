<?php
session_start();
if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
$berita = query("SELECT * FROM berita");
//cari ketika tombol di tekan
if (isset($_POST["cari"])) {
    $berita = cari_berita($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>

<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

      <!-- Admin Galery Box -->
      <div class="content">
          <h1>Berita Wakanda</h1>
          
          <form action="" method="post">
              <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian.." autocomplete="off" id="keyword">
              <button type="submit" name="cari" id="tombol-cari" class="btn btn-primary ms-2 px-5">Cari!</button>
              <a href="tambah_berita.php" class="btn btn-danger ms-2 px-5">Tambah Data</a>
              <a href="../pdf/cetak_berita.php" target="_blank" class="btn btn-dark ms-2 px-5">Cetak Berita</a>
              
            </form>
            <div id="container">
            <table class="tb">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="aksi">Ubah/Hapus</th>
                        <th>Foto Berita</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($berita as $b) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td class="aksi">
                            <a href="ubah_berita.php?id_berita=<?= $b["id_berita"];?>">ubah</a> |
                            <a href="hapus_berita.php?id_berita=<?= $b["id_berita"];?>">hapus</a>
                        </td>
                        <td><img src="../img/berita/<?= $b["img"] ?>" width="200px" alt=""></td>
                        <td><?= $b["title_berita"] ?></td>
                        <td><?= $b["isi_berita"]?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach?>
                    <tbody>
                    </table>
            </div>
        </div>
</body>

</html>
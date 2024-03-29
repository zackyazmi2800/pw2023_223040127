<?php
session_start();
if (!isset($_SESSION["login2"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
$admins = query("SELECT * FROM user_admin");
//cari ketika tombol di tekan
if (isset($_POST["cari"])) {
    $admins = cari_admin($_POST["keyword"]);
}

// Tentukan pengurutan default
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';

// Tentukan kolom pengurutan default
$orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'level';

// Modifikasi query SQL berdasarkan pengurutan dan kolom yang dipilih
$admins = query("SELECT * FROM user_admin ORDER BY $orderBy $sort");

// Fungsi untuk mengubah pengurutan
function flipSort($sort)
{
    return $sort == 'asc' ? 'desc' : 'asc';
}
?>
<!DOCTYPE html>
<html>

<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>

      <!-- Admin Galery Box -->
      <div class="content-admin">
          <h1>User & Admin</h1>
          
          <form action="" method="post">
              <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian.." autocomplete="off" id="keyword_admin">
              <button type="submit" name="cari" id="tombol-cari_admin" class="btn btn-primary ms-2 px-5">Cari!</button>
              <a href="tambah_admin.php" class="btn btn-danger ms-2 px-5">Tambah Admin</a>
              
            </form>
            <div id="container">
            <table class="tb">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="aksi">Ubah/Hapus</th>
                        <th>ID Admin</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>
                        <a href="?orderBy=level&sort=<?= $orderBy == 'level' ? flipSort($sort) : 'asc'; ?>">
                            Level
                            <?php if ($orderBy == 'level') : ?>
                                <?php if ($sort == 'asc') : ?>
                                    <i class="fa fa-sort-asc"></i>
                                <?php else : ?>
                                    <i class="fa fa-sort-desc"></i>
                                <?php endif; ?>
                            <?php endif; ?>
                        </a>
                    </th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($admins as $admin) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td class="aksi">
                            <a href="ubah_admin.php?id=<?= $admin["id"];?>">ubah</a> |
                            <a href="hapus_admin.php?id=<?= $admin["id"];?>">hapus</a>
                        </td>
                        <td><?= $admin["id"] ?></td>
                        <td><?= $admin["username"] ?></td>
                        <td><?= $admin["nama"]?></td>
                        <td><?= $admin["email"]?></td>
                        <td><?= $admin["password"]?></td>
                        <td><?= $admin["level"]?></td>

                    </tr>
                    <?php $i++ ?>
                    <?php endforeach?>
                    <tbody>
                    </table>
            </div>
        </div>
</body>

</html>
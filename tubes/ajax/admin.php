<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query ="SELECT * FROM user_admin
             WHERE
        id LIKE '%$keyword%' OR
        username LIKE '%$keyword%' OR
        nama LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        `level` LIKE '%$keyword%'
        ";
$admins = query($query);

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="../style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>
</head>

<body>
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
                        <th>Tugas</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($admins as $admin) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td class="aksi">
                            <a href="ubah_berita.php?id=<?= $admin["id"];?>">ubah</a> |
                            <a href="hapus_berita.php?id=<?= $admin["id"];?>">hapus</a>
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
</body>
<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query ="SELECT * FROM berita
        WHERE
        img LIKE '%$keyword%' OR
		title_berita LIKE '%$keyword%' OR
    	isi_berita LIKE '%$keyword%'
        ";
$berita = query($query);

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
                            <a href="ubah_galery.php?id_gambar=<?= $b["id_berita"];?>">ubah</a> |
                            <a href="hapus_galery.php?id_gambar=<?= $b["id_berita"];?>">hapus</a>
                        </td>
                        <td><img src="../img/berita/<?= $b["img"] ?>" width="200px" alt=""></td>
                        <td><?= $b["title_berita"] ?></td>
                        <td><?= $b["isi_berita"]?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach?>
                    <tbody>
            </table>
</body>
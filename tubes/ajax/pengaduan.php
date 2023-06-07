<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM pengaduan
	INNER JOIN user_admin
	ON pengaduan.id = user_admin.id
              WHERE
              pengaduan.id LIKE '%$keyword%' OR
              pengaduan.email LIKE '%$keyword%' OR
              pengaduan.isi_pengaduan LIKE '%$keyword%' OR
              pengaduan.judul_pengaduan LIKE '%$keyword%'
            ";
$pengaduan = query($query);

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
</body>
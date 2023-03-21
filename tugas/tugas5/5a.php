<?php 
$mahasiswa = 
[
    [
        'nrp' => '223040127',
        'nama' => 'Zacky Azmi Asikin',
        'email' => 'zackyazmi30@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'zack.jpeg',
    ],
    [
        'nrp' => '223040128',
        'nama' => 'Muhammad Umara Fauzy Rahman',
        'email' => 'Umarfauzy000@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'umar.jpeg',
    ],
    [
        'nrp' => '223010100',
        'nama' => 'Chirs Evan',
        'email' => 'jarviss202882@gmail.com',
        'jurusan' => 'Teknik Industri',
        'foto' => 'evan.jpeg',
    ],
    [
        'nrp' => '223050101',
        'nama' => 'Bagus Geni',
        'email' => 'bagusgeni201@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'foto' => 'bagus.jpeg',
    ],
    [
        'nrp' => '223040105',
        'nama' => 'Muhammad Robby Ahmad',
        'email' => 'Robby0182727@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'oby.jpeg',
    ],
    [
        'nrp' => '223040110',
        'nama' => 'Bayu Mahesa',
        'email' => 'bayumahesa991@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'bayu.jpeg',
    ],
    [
        'nrp' => '223020111',
        'nama' => 'Syaidina Daffa',
        'email' => 'daffasyaidina1101@gmail.com',
        'jurusan' => 'Teknik Pangan',
        'foto' => 'daffa.jpeg',
    ],
    [
        'nrp' => '223020001',
        'nama' => 'Kurnia Anggaraeni',
        'email' => 'Kurnoe23211@gmail.com',
        'jurusan' => 'Teknik pangan',
        'foto' => 'noe.jpeg',
    ],
    [
        'nrp' => '223040122',
        'nama' => 'Muhammad Rizqi Saputra',
        'email' => 'rizqisap777@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'rizqi.jpeg',
    ],
    [
        'nrp' => '223040111',
        'nama' => 'Syerli',
        'email' => 'Syerli91871616@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'syerli.jpeg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
    <style>
        img{
            width: 100px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li><img src="img/<?= $mhs['foto'];?>"></li>
        <li>Nama : <?=  $mhs['nama']; ?></li>
        <li>NRP : <?= $mhs['nrp']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']?></li>
        <li>Email : <?= $mhs['email']?></li>
    </ul>
    <?php } ?>
</body>
</html>
<?php 
// Array Asosiatif
// Array yang indexnya adalah string yangkita buat sendiri

$mahasiswa = [
    [
        'nama' => 'Zacky',
        'makanan' => ['🍣', '🍔', '🍕'], 
        'binatang' => '🐼'
    ], 
    [
        'nama' => 'Bagus',
        'makanan' => ['🍔'],
        'binatang' => '🐱'
    ], 
    [
        'nama' => 'Noe', 
        'makanan' => ['🍔', '🍕'], 
        'binatang' => '🐭'
    ], 
    [
        'nama' => 'Bayu', 
        'makanan' => ['🍞', '🍣'], 
        'binatang' => '🐒'
    ], 
    [
        'nama' => 'Umar', 
        'makanan' => [], 
        'binatang' => '🐹'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
   <?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>
            Makanan favorit : 
            <?php foreach ($mhs['makanan'] as $m) {
                echo $m;
            }?>
        </li>
        <li>Binatang peliharaan : <?= $mhs['binatang']; ?></li>
    </ul>
    <?php }?>
</body>
</html>
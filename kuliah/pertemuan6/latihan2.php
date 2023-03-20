<?php 
// Array multi dimensi 
// Array di dalam array 
$mahasiswa = [
    ['Zacky', '🍣', '🐼'], 
    ['Bagus', '🍔', '🐱'], 
    ['Noe', '🍔', '🐭'], 
    ['Bayu', '🍞', '🐒'], 
    ['Umar', '🍕', '🐹']
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
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>Makanan Favorit : <?= $mhs[1]; ?></li>
        <li>Binatang peliharaan : <?= $mhs[2]; ?></li>
    </ul>
    <?php }?>
</body>
</html>
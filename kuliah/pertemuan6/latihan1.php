<?php 
$binatang = ['🐱', '🐒', '🐹', '🐭', '🐼'];
$makanan = ['🍔', '🍗', '🍣', '🍞', '🍕'];
$nama = ['Zacky', 'Bagus', 'Noe', 'Bayu', 'Umar'];
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
   <?php foreach($nama as $i => $n) {?>
    <ul>
        
        <li>Nama : <?= $n; ?></li>
        <li>Makanan Favorit : <?= $makanan[$i]; ?></li>
        <li>Binatang peliharaan : <?= $binatang[$i]; ?></li>
    </ul>
    <?php }?>
</body>
</html>
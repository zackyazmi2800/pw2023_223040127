<?php 
function luas_lingkaran($r)
{
    return 3.14*$r*$r;
}
function luas_keliling($r)
{
    return 2*3.14*$r;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Menghitung Luas Lingkaran</h4>
    <?php $r=10;?>
    <?="jari-jari = ".$r."cm"?>
    <br>
    <?= "Luas lingkaran = ".luas_lingkaran($r). "cm"; ?>
    <hr>
    <h4>Menghitung Keliling Lingkaran</h4>
    <?php $r=20;?>
    <?="jari-jari = ".$r."cm"?>
    <br>
    <?= "Luas lingkaran = ".luas_keliling($r). "cm"; ?>
    <hr>
    
</body>
</html>
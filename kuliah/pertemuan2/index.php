<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h1>
        <?php
            echo "Hello World!";
        ?>
    </h1>
    <p>
        <?php 
        echo "Pemograman web";
        ?>
    </p>
    <p>
        <?php 
        echo "jum'at";
        ?>
    </p>
    <p>
        <?php 
        echo "\"Pengumuan\" : Hari jum'at libur ";
        ?>
    </p>
    <p>
        <?php 
        echo '"Pengumuan" : Hari jum\'at libur ';
        ?>
    </p>
    <p>
        <?php 
        echo '"Pengumuan"' . " : Hari jumat libur";
        ?>
    </p>

    <hr>

    <?php 
    $nama_depan = "Zacky";
    $nama_belakang = "azmi";
    ?>

    <h2>
        <?php echo "Hello, $nama_depan $nama_belakang! " ; ?>
    </h2>


</body>
</html>
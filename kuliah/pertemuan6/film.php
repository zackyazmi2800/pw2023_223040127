<?php 
$film = 
[
    [
        'poster' => 'avatar.jpeg',
        'judul' => 'Avatar: The Way of Water',
        'tahun' => '2022',
        'genre' => ['Action', 'Adventure', 'Fanyasy'],
        'pemeran utama' => ['Sam Worthington', 'Zoe Saldana', 'Sigourney Weaver'],
        'sutradara' => 'James Cameron'
    ],
    [
        'poster' => 'america.jpeg',
        'judul' => 'Captain America: Civil War',
        'tahun' => '2016',
        'genre' => ['Action'],
        'pemeran utama' => ['Chirs Evan', 'Robert Downey Jr', 'Scarlett Johansson'],
        'sutradara' => 'Anthony Russo'
    ],
    [
        'poster' => 'iron.jpeg',
        'judul' => 'Iron Man 2',
        'tahun' => '2010',
        'genre' => ['Action'],
        'pemeran utama' => ['Robert Downey Jr', 'Mickey Rourke'],
        'sutradara' => 'Jon Favreau'
    ],
    [
        'poster' => 'conjuring.jpeg',
        'judul' => 'The Conjuring 2',
        'tahun' => '',
        'genre' => ['Horor', 'Thriller'],
        'pemeran utama' => ['Vera Farmiga', 'Patrick Wilson'],
        'sutradara' => 'James Wan'
    ],
    [
        'poster' => 'thor.jpeg',
        'judul' => 'Thor: Love and Thunder',
        'tahun' => '2022',
        'genre' => ['Action', 'Adventure'],
        'pemeran utama' => ['Chris Hemsworth', 'Natalie Portman'],
        'sutradara' => 'Taiki Waikiki'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <style>
        img{
            width: 100px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($film as $f) {?>
    <ul>
        <li>Poster : <img src="img/<?= $f['poster'];?>"></li>
        <li>Judul : <?=  $f['judul']; ?></li>
        <li>Tahun : <?= $f['tahun']; ?></li>
        <li>Genre : 
        <?php foreach ($f['genre'] as $g) {
                echo $g;
            }?>
        </li>
        <li>Pemeran Utama : 
        <?php foreach ($f['pemeran utama'] as $p) {
                echo $p;
            }?>
        </li>
        <li>Sutradara : <?= $f['sutradara']?></li>
    </ul>
    <?php } ?>
</body>
</html>
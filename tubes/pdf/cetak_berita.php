<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php';
$berita = query("SELECT * FROM berita");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="../style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>
    <script src="../style/jquery-3.7.0.min.js"></script>
    <script src="../style/script.js"></script>
</head>
<body>
<h1 class="pdf">Berita Wakanda</h1>

<table class="tb">

    <thead>
        <tr>
            <th>No</th>
            <th>Foto Berita</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
        </tr>
    </thead>
    <tbody>';
    $i=1;
    foreach($berita as $b){
        $html .= '<tr>
        <td>'. $i++ .'</td>
        <td><img src="../img/berita/'. $b["img"] .'" width="200px"></td>
        <td>'. $b["title_berita"] .'</td>
        <td>'. $b["isi_berita"] .'</td>
        </tr>';
    }


$html .= '</tbody>
</table>
</body>
</html>

';





$mpdf->WriteHTML($html);
$mpdf->Output();


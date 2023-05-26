<?php
require ('functions.php');
$title = "Home";
$students = [
    [
        "nama" => "Zacky",
        "npm" => "223040127",
        "email" => "zackyazmi30@gmail.com"
    ],
    
    [
        "nama" => "umar",
        "npm" => "223040128",
        "email" => "umarchan00@gmail.com"
    ],

];

// echo $_SERVER["REQUEST_URI"];
// /pw2023_223040127/kuliah/pertemuan9/

require('views/index.view.php');
?>
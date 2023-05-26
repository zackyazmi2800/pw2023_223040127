<?php 
define('BASE_URL', '/pw2023_223040127/kuliah/pertemuan9/');

function cekAktive($uri) {
    return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri ) ? 'active' : '';
}
?>
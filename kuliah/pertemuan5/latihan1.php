<?php 
// ARAY
// Membuat array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Zacky', 19, false];
$binatang = ['🐱', '🐒', '🐹', '🐭', '🐼'];

//menampilkan isi array
// mecetak satu elemen padaa array menggunakan index
echo $hari[0];
echo "<hr>";

// Mencetak seluruh element array
// var_dump, print_r
var_dump ($hari);
echo '<br>';
print_r($bulan);
echo '<br>';
var_dump($myArray);
echo '<br>';
print_r($binatang);
echo '<hr>';


// Manipulasi data array 
// isi element menggunakan index nya
$hari[3] = 'kamis';
print_r($hari);
echo '<br>';

// menambahakan element baru di akhir array
$hari[] = "jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo '<br>';
//menan bahkan elemen baruv di akhir array mengunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni', 'juli');
print_r($bulan);
echo "<hr>";

// menanbahakan elemen baru di awal array mengunakan array_unshift()
array_unshift($binatang, '🐸', '🦇');
print_r($binatang);
echo "<hr>";

// Menghapus element di akhir array mengunkan array_pop
array_pop($hari);
array_pop($hari);
print_r($hari);
echo "<hr>";

// menghapu element di awal array mengunakan array_shift
array_shift($hari);
print_r($hari);


?>
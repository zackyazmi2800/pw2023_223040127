<?php 
function urutan_angka($angka)
{
    $nilai = 1;
    for ($i=1; $i<=$angka; $i++){
        for ($j=1; $j <= $i ; $j++) { 
            echo $nilai . " ";
            $nilai++;
        }
        echo "<br>";
    }
}
urutan_angka(5);
?>
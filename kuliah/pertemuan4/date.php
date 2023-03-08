<?php 
// menmapilkan tangggal genagn format tertentu
 echo date("l, d-M-Y");
 echo "<hr>";
 //  Unix timetamp / EPOCH time
 // dtik yang belaku sejak 1 januari 1970
 echo time();
 echo "<hr>";
 
 
 echo date("d M Y", time()+60*60*24*100);
 echo "<hr>";
 
 //mktime
 //membuat detik sendiri
 // mktime(0,0,0,0,0,0)
 // jam,menit,detik,bulan,tanggal,tahun
 echo date("l", mktime(0,0,0,1,28,2004));
 echo "<hr>";

 //strtotime
 echo date("l", strtotime("28 jan 2004"));
?>
// var keyword = document.getElementById("keyword");
// var tombolCari = document.getElementById('tombol-cari');
// var container = document.getElementById('container');

// // tambah event ketika keywor ditulis

// keyword.addEventListener('keyup', function () {
    
//     //buat objek ajax
//     var xhr = new XMLHttpRequest();

//     // cek kesiapan ajax
//     xhr.onreadystatechange = function(){
//         if( xhr.readyState == 4 && xhr.status == 200){
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     // eksekusi ajax
//     xhr.open('GET', '../ajax/galery.php?keyword=' +keyword.value , true);
//     xhr.send();

// });

// jquery
$(document).ready(function(){

    //tombol cari 
    $('#tombol-cari_galery').hide();
    // ketika keywoard di tulis
    $('#keyword_galery').on('keyup', function(){
        $('#container').load('../ajax/galery.php?keyword=' + $('#keyword_galery').val());
    });

});

$(document).ready(function(){

    //tombol cari 
    $('#tombol-cari').hide();
    // ketika keywoard di tulis
    $('#keyword').on('keyup', function(){
        $('#container').load('../ajax/berita.php?keyword=' + $('#keyword').val());
    });

});
$(document).ready(function(){

    //tombol cari 
    $('#tombol-cari_admin').hide();
    // ketika keywoard di tulis
    $('#keyword_admin').on('keyup', function(){
        $('#container').load('../ajax/admin.php?keyword=' + $('#keyword_admin').val());
    });

});
$(document).ready(function(){

    //tombol cari 
    $('#tombol-cari_pengaduan').hide();
    // ketika keywoard di tulis
    $('#keyword_pengaduan').on('keyup', function(){
        $('#container').load('../ajax/pengaduan.php?keyword=' + $('#keyword_pengaduan').val());
    });

});
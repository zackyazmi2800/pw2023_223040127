<?php
session_start();

if (!isset($_SESSION["login1"])) {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
    <link rel="stylesheet" href="../style/user.css">
    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
          <div class="header-left">
            <h2>WAKANDA</h2>
          </div>
          <div class="header-right">
            <input type="checkbox" id="nav">
            <label for="nav">
              <i class="fa-solid fa-bars fa-2xl" style="color: #ffffff;" id="opennav"></i>
              <i class="fa-solid fa-xmark fa-beat fa-2xl" style="color: #ffffff;" id="closenav"></i>
            </label>
            <ul>
              <li><a href="index.php">Beranda</a></li>
              <li><a href="tentang.php">Tentang</a></li>
              <li><a href="#">Pengaduan</a></li>
              <li><a href="keluar.php">Keluar</a></li>
            </ul>
          </div>
        </div>
      </header>

      <!-- Banner -->
     <div class="top-wrapper">
        <div class="container">
          <h1>KOTA WAKANDA</h1>
          <h1>LAYANAN PENGADUAN</h1>
          <p>Sampaikan laporan dan pengaduan Anda langsung kepada instansi pemerintah berwenang</p>
        </div>
      </div>
  
  
      <!-- pengaduan -->
      <div class="container">
          <div class="wrap-aduan">
              <form action="POST" class="aduan-form">
                  <div class="aduan-form-box">
                      <div class="aduan-box">Sampaikan Laporan Anda</div>
                  </div>
                  <div class="aduan-form-category"><input type="text" name="" id="" class="form" placeholder="Ketik Judul Laporan Anda"></div>
                  <div class="aduan-form-category"><textarea name="" id="" rows="6" class="form" placeholder="Ketik Isi Laporan Anda" style="overflow: hidden; overflow-wrap: break-word; height: 158px;"></textarea></div>
                  <div class="right"><a href="#" class="btn">LAPOR!</a></div>
              </form>
          </div>
      </div>

      <!-- FOOTER -->
    <footer class="bg-foot">
        <div class="container">
          <div class="footer">
            <div class="footer_content">
              <div class="footlogo">  
                <img src="../img/logo.webp">
                <p>WAKANDA FOREVER</p>
              </div>
            </div>
            <div class="footer_content">
              <ul class="footmenu">
                  <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="pengaduan.php">Pengaduan</a></li>
              </ul>
            </div>
            <div class="footer_content">
              <ul class="sosmed">
                <li><a href="#"><i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i> <span>Twitter</span></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i> <span>Instagram</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];

require '../functions.php';
$images = query("SELECT * FROM galery");
$berita = query("SELECT * FROM berita");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wakanda</title>
    <link rel="stylesheet" href="../style/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../font/BebasNeue-Regular.woff">
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
            <li><a href="#" class="link-underline link-underline-opacity-0">Beranda</a></li>
            <li><a href="tentang.php" class="link-underline link-underline-opacity-0">Tentang</a></li>
            <li><a href="pengaduan.php" class="link-underline link-underline-opacity-0">Pengaduan</a></li>
            <li><a href="keluar.php" class="link-underline link-underline-opacity-0">Keluar</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Banner -->
     <div class="top-wrapper">
      <div class="container">
        <h1>KOTA WAKANDA</h1>
        <h1>WAKANDA FOREVER</h1>
        <p>Kota yang sangat damai dan aman</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quia voluptatibus cupiditate? Corporis, veniam ea in quaerat cumque reprehenderit libero veritatis deleniti! Tenetur mollitia eligendi ducimus aliquid ea dolorem qui.</p>
      </div>
    </div>

    <!-- Galery -->
    <div class="container">
      <h1 class="title-galery">Galery Wakanda</h1>
    <div class="wrapper-galery" id="galery">

      <ul class="galery">
      <?php $i= 1?>
      <?php foreach ($images as $image) : ?>
        <li>
          <a href="#gambar<?= $i;?>">
            <img src="../img/galery/<?= $image["gambar"] ?>" class="gambar">
            <span><?= $image["judul"] ?></span>
          </a>
          <div class="overlay" id="gambar<?= $i;?>">
            <a href="#galery" class="close"><i class="fa-solid fa-xmark fa-beat fa-2xl" style="color: #ff2600;"></i></a>
            <img src="../img/galery/<?= $image["gambar"] ?>" >
          </div>
        </li>
        <?php $i++ ?>
        <?php endforeach?>
        <div class="clear"></div>
      </ul>
    </div>
  </div>
  
  <!-- Berita -->
  <div class="container">
    <h1 class="judulberita">Berita Wakanda</h1>
    <?php $j=1 ?>
    <?php foreach ($berita as $b) : ?>
    <div class="d-flex position-relative <?php echo $j % 2 == 0 ? 'bg-body-secondary' : ''; ?>">
      <img src="../img/berita/<?= $b['img'] ?>" class="flex-shrink-0 me-3" alt="" width="200px" height="250px">
      <div>
        <h5 class="mt-0"><?= $b['title_berita'] ?></h5>
        <p><?= $b['isi_berita'] ?></p>
        <a href="#" class="stretched-link">Go somewhere</a>
      </div>
    </div>
    <?php $j++ ?>
    <?php endforeach?>
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
              <li><a href="#">Beranda</a></li>
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
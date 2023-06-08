<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
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
              <li><a href="#">Tentang</a></li>
              <li><a href="pengaduan.php">Pengaduan</a></li>
              <li><a href="keluar.php">Keluar</a></li>
            </ul>
          </div>
        </div>
      </header>


      <!-- Profil pemimpin -->
      <div class="wrapper">
        <div class="mainwrap">
            <div class="sectionrow">
                <div class="leader">
                    <div class="leader-label">
                        <div class="xlabel">
                            <span>Profil Pemimpin</span>
                        </div>
                    </div>
                    <div class="leader-row">
                        <div class="leader-col">
                            <div class="leader-text">
                                <div class="leader-pos">Pemimpin Wakanda</div>
                                <div class="leader-name">Black Panther</div>
                                <div class="leader-sumary"><p>Lahir di wakanda pada tanggal 29 November 1976</p></div>
                            </div>
                            <div class="leader-pict"><img src="../img/leader.jpeg" alt=""></div>
                        </div>
                        <div class="leader-col">
                            <div class="leader-pict"><img src="../img/leader.jpeg" alt=""></div>
                            <div class="cleader-text">
                                <div class="leader-pos">Pemimpin Wakanda</div>
                                <div class="leader-name">Black Panther</div>
                                <div class="leader-sumary"><p>Lahir di wakanda pada tanggal 29 November 1976</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Profil Kata -->
            <div class="sectionrow">
                <div class="about">
                    <div class="about-map"><img src="../img/map.png" alt=""></div>
                    <div class="about-text">
                        <div class="profil-header">
                            <h1 class="title-profil-header">Profil Wakanda</h1>
                        </div>
                        <p>Wakanda adalah sebuah negara fiksi yang terletak di Afrika Sub-Sahara yang dibuat oleh Marvel Comics. Negara tersebut adalah kampung halaman dari pahlawan super Black Panther. Wakanda pertama kali muncul dalam Fantastic Four #52, dan dibuat oleh Stan Lee dan Jack Kirby</p>
                    </div>
                </div>
            </div>
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
                <li><a href="#">Tentang Kami</a></li>
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
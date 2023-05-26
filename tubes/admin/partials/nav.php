<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <p class="navbar-brand">Halaman Admin</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link <?=cekAktive('index.php');?>" aria-current="page" href="index.php">Galery Box</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=cekAktive('admin_tentang.php');?>" href="admin_tentang.php">tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=cekAktive('admin_pengaduan.php');?>" href="admin_pengaduan.php">Pengaduan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tambah Data
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item <?=cekAktive('tambah_galery.php');?>" href="tambah_galery.php">Galery box</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Berita</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Leader</a></li>
            </ul>
          </li>
        </ul>
        <a class="btn btn-danger mt-3 float-end" href="keluar.php">keluar</a>
      </div>
    </div>
  </div>
</nav>
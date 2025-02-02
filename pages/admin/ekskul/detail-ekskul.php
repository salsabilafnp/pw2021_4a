<?php
//mengecek id, jika tidak ada dikembalikan ke ekskul.php
if (!isset($_GET['id'])) {
  header("location: ekskul.php");
  exit;
}

require 'php/functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Query
$ekskul = query("SELECT * FROM ekstrakurikuler WHERE id = $id");
$anggota_ekskul = query("SELECT * FROM anggota_ekskul WHERE ekskul = $id");

if (isset($_POST['cari'])) {
  $anggota_ekskul = cari_anggota_ekskul($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../../vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=""><img src="../../../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="../../../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <form action="" method="POST">
              <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                  <span class="input-group-text" id="search">
                    <button class="btn" type="submit" name="cari"><i class="icon-search"></i></button>
                  </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Cari Keyword" aria-label="search" aria-describedby="search" autocomplete="off" autofocus>
              </div>
            </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../../images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-profile text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a href="../../php/logout.php" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/admin.php">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/admin/guru/guru.php">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Guru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#siswa" aria-expanded="false" aria-controls="siswa">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title">Siswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="siswa">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../../pages/admin/siswa/siswa.php">Siswa Aktif</a></li>
                <li class="nav-item"><a class="nav-link" href="../../../pages/admin/alumni/kelulusan.php">Kelulusan</a></li>
                <li class="nav-item"><a class="nav-link" href="../../../pages/admin/alumni/alumni.php">Alumni</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kelas" aria-expanded="false" aria-controls="kelas">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Kelas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kelas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../../pages/admin/kelas/kelas.php">Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../pages/admin/kelas/mapel.php">Mata Pelajaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../pages/admin/kelas/ujian.php">Ujian</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/admin/kegiatan/kegiatan.php">
              <i class="menu-icon mdi mdi-checkbox-multiple-marked-circle"></i>
              <span class="menu-title">Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/admin/ekskul/ekskul.php">
              <i class="menu-icon icon-grid"></i>
              <span class="menu-title">Ekstrakurikuler</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/admin/prestasi/prestasi.php">
              <i class="menu-icon mdi mdi-bookmark"></i>
              <span class="menu-title">Prestasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../pages/admin/spp/spp.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">SPP</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row mb-3">
            <div class="col-12 col-md-8">
              <h3 class="font-weight-bold text-center">Detail Ekstrakurikuler</h3>
            </div>
            <div class="col-12 col-md-4 align-self-center">
              <div class="justify-content-center d-flex">
                <div class="flex-xl-grow-0">
                  <!-- Ubah -->
                  <a href="php/ubah_ekskul.php?id=<?= $ekskul['id']; ?>" class="btn btn-sm btn-outline-info px-3 my-1 mx-2"><i class="mdi mdi-tooltip-edit"></i></a>
                  <!-- Hapus -->
                  <a href="php/hapus_ekskul.php?id=<?= $ekskul['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus?');" class="btn btn-sm btn-outline-danger px-3 my-1 mx-2"><i class="mdi mdi-delete"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <div class="card-body">
                    <h4 class="fs-30 mb-6 text-uppercase"><?= $ekskul['nama_ekskul']; ?></h4>
                    <h5 class="my-3">Pembina Ekskul : <?= $ekskul['pembina']; ?></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <h4 class="card-title text-center">KEANGGOTAAN</h4>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Anggota (2021)</p>
                      <p class="fs-30 mb-2">12 anggota</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Anggota (2022)</p>
                      <p class="fs-30 mb-2">13 anggota</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Anggota (2023)</p>
                      <p class="fs-30 mb-2">10 anggota</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="php/tambah_anggota.php" class="text-dark"><button class="btn btn-sm btn-outline-primary mb-2">Tambah Data</button></a>
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Ekskul</th>
                              <th>ID Anggota</th>
                              <th>Nama Anggota</th>
                              <th>Jabatan Kepengurusan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($anggota_ekskul as $anggota) : ?>
                              <tr>
                                <td class="w-25" style="width: fit-content;">
                                  <a href="php/ubah_anggota.php?id=<?= $anggota['id_anggota']; ?>" class="btn btn-sm btn-outline-info px-3 my-1 mx-2"><i class="mdi mdi-tooltip-edit"></i> Edit</a>
                                  <a href="php/hapus_anggota.php?id=<?= $anggota['id_anggota']; ?>" onclick="return confirm('Anda yakin ingin menghapus?');" class=" btn btn-sm btn-outline-danger px-3 my-1 mx-2"><i class="mdi mdi-delete"></i> Delete</a>
                                </td>
                                <td><?= $anggota["ekskul"]; ?></td>
                                <td><?= $anggota["id_anggota"]; ?></td>
                                <td><?= $anggota["NIS"]; ?></td>
                                <td><?= $anggota["jabatan"]; ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Kelompok 4A<i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../js/off-canvas.js"></script>
  <script src="../../../js/hoverable-collapse.js"></script>
  <script src="../../../js/template.js"></script>
  <script src="../../../js/settings.js"></script>
  <script src="../../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../js/dashboard.js"></script>
  <script src="../../../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
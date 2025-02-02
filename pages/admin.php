<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'php/functions.php';

// Query Agenda
$agenda = query("SELECT * FROM agenda");

if (isset($_POST['cari'])) {
  $agenda = cari_agenda($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard - Admin Sekolah</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=""><img src="../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="../images/logo-mini.svg" alt="logo" /></a>
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
              <img src="../images/faces/face28.jpg" alt="profile" />
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
              <a href="php/logout.php" class="dropdown-item">
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
            <a class="nav-link" href="../pages/admin.php">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/admin/guru/guru.php">
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
                <li class="nav-item"><a class="nav-link" href="../pages/admin/siswa/siswa.php">Siswa Aktif</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/admin/alumni/kelulusan.php">Kelulusan</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/admin/alumni/alumni.php">Alumni</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../pages/admin/kelas/kelas.php">Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/admin/kelas/mapel.php">Mata Pelajaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/admin/kelas/ujian.php">Ujian</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/admin/kegiatan/kegiatan.php">
              <i class="menu-icon mdi mdi-checkbox-multiple-marked-circle"></i>
              <span class="menu-title">Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/admin/ekskul/ekskul.php">
              <i class="menu-icon icon-grid"></i>
              <span class="menu-title">Ekstrakurikuler</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/admin/prestasi/prestasi.php">
              <i class="menu-icon mdi mdi-bookmark"></i>
              <span class="menu-title">Prestasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/admin/spp/spp.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">SPP</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Welcome Notes -->
          <div class="row">
            <div class="col-12 grid-margin col-xl-8 mb-4">
              <h3 class="font-weight-bold">Hello, Admin!</h3>
              <h6 class="font-weight-normal">Selamat Datang di Dashboard Admin SMA ABCD Bandung !</h6>
            </div>
          </div>
          <!-- Main Information -->
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="../images/dashboard/people.svg" alt="people">
                  <div class="card-body">
                    <h4 class="fs-30 mb-6">SMA ABCD Bandung</h4>
                    <h5 class="my-3">Alamat: Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</h5>
                    <h5 class="my-3">Telepon: (022) 2021 440</h5>
                    <h5 class="my-3">Website: <a href="#">abcd.ac.id</a></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Peserta Didik</p>
                      <p class="fs-30 mb-2">543</p>
                      <p>Siswa</p>
                    </div>
                  </div>
                </div>
                <div class="col-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Pengajar</p>
                      <p class="fs-30 mb-2">58</p>
                      <p>Guru dan Pelatih Ekskul</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Kelas IPA</p>
                      <p class="fs-30 mb-2">18</p>
                      <p>Kelas 10, 11, 12</p>
                    </div>
                  </div>
                </div>
                <div class="col-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Kelas IPS</p>
                      <p class="fs-30 mb-2">12</p>
                      <p>Kelas 10, 11, 12</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-md-4">
                <div class="col-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Calon Siswa Baru</p>
                      <p class="fs-30 mb-2">12</p>
                      <p>Sisa Kuota: 488</p>
                    </div>
                  </div>
                </div>
                <div class="col-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Alumni</p>
                      <p class="fs-30 mb-2">4.567</p>
                      <p>(2021)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-2 text-center">Agenda Sekolah Genap - 2020/2021</p>
                  <a href="php/tambah_agenda.php" class="btn btn-outline-primary mb-2 btn-sm">Tambah Data</a>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Nama Kegiatan</th>
                          <th class="text-center">Tanggal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($agenda as $event) : ?>
                          <tr>
                            <td><?= $event['nama_agenda']; ?></td>
                            <?php if ($event['tanggal_awal'] == 'menunggu konfirmasi') : ?>
                              <td class="font-weight-bold text-center">Menunggu Konfirmasi</td>
                            <?php else : ?>
                              <td class="font-weight-bold text-center"><?= $event['tanggal_awal']; ?> - <?= $event['tanggal_akhir']; ?></td>
                            <?php endif; ?>
                            <td class="w-25" style="width: fit-content;">
                              <!-- Ubah -->
                              <a href="php/ubah_agenda.php?id=<?= $event['id']; ?>" class="btn btn-sm btn-outline-info px-3 my-1 mx-2"><i class="mdi mdi-tooltip-edit"></i> Edit</a>
                              <!-- Hapus -->
                              <a href="php/hapus_agenda.php?id=<?= $event['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus?');" class="btn btn-sm btn-outline-danger px-3 my-1 mx-2"><i class="mdi mdi-delete"></i> Delete</a>
                            </td>
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
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
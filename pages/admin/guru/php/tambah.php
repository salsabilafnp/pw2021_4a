<?php

require 'functions.php';

if (isset($_POST['tambahguru'])) {
  if (tambahguru($_POST) > 0) {
    echo
    "<script>
      alert('Data Berhasil Ditambahkan');
      document.location.href = '../guru.php';
    </script>";
  } else {
    echo
    "<script>
      alert('Data Gagal Ditambahkan');
      document.location.href = '../guru.php';
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tambah Data</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../../../vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=""><img src="../../../../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="../../../../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../../../images/faces/face28.jpg" alt="profile" />
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
              <a class="dropdown-item">
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
            <a class="nav-link" href="../../../../pages/admin.php">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../../pages/admin/guru/guru.php">
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
                <li class="nav-item"><a class="nav-link" href="../../../../pages/admin/siswa/siswa.php">Siswa Aktif</a></li>
                <li class="nav-item"><a class="nav-link" href="../../../../pages/admin/alumni/kelulusan.php">Kelulusan</a></li>
                <li class="nav-item"><a class="nav-link" href="../../../../pages/admin/alumni/alumni.php">Alumni</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../../../pages/admin/kelas/kelas.php">Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../pages/admin/kelas/mapel.php">Mata Pelajaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../pages/admin/kelas/ujian.php">Ujian</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../../pages/admin/kegiatan/kegiatan.php">
              <i class="menu-icon mdi mdi-checkbox-multiple-marked-circle"></i>
              <span class="menu-title">Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../../pages/admin/ekskul/ekskul.php">
              <i class="menu-icon icon-grid"></i>
              <span class="menu-title">Ekstrakurikuler</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../../pages/admin/prestasi/prestasi.php">
              <i class="menu-icon mdi mdi-bookmark"></i>
              <span class="menu-title">Prestasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../../pages/admin/spp/spp.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">SPP</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 cl-col-xl-8 mb-3 mb-xl-0">
                  <h3 class="font-weight-bold mt-3">Tambah Data Guru</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 grid-margin mx-auto">
              <div class="card">
                <div class="card-body">
                  <form class="forms" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="NIP" name="NIP" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Bandung" required>
                        </div>
                        <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required placeholder="yyyy-mm-dd">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jenis_kelamin" class="col-sm-2 col-form-label">Kelamin</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                          <option value="perempuan">Perempuan</option>
                          <option value="laki-laki">Laki-laki</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="agama" class="form-control" id="agama" name="agama" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="foto" name="foto">
                      </div>
                    </div>
                    <p class="card-title">Alamat</p>
                    <div class="form-group">
                      <div class="row">
                        <label for="alamat_jalan" class="col-sm-2 col-form-label">Jalan</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" placeholder="Jalan.Kenangan" required>
                        </div>
                        <label for="alamat_rt" class="col-form-label">RT</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="alamat_rt" id="alamat_rt" placeholder="000" required>
                        </div>
                        <label for="alamat_rw" class="col-form-label">RW</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="alamat_rw" id="alamat_rw" placeholder="000" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat_kecamatan" id="alamat_kecamatan" placeholder="Buahbatu" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_kab_kota" class="col-sm-2 col-form-label">Kab/Kota</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat_kab_kota" id="alamat_kab_kota" placeholder="Kota Bandung" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat_provinsi" id="alamat_provinsi" placeholder="Jawa Barat" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="kode_pos" id="kode_pos" required>
                      </div>
                    </div>
                    <p class="card-title">Pendidikan</p>
                    <div class="form-group row">
                      <label for="mapel" class="col-sm-4 col-form-label">Mapel yang dipegang</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" name="mapel" id="mapel" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tingkat_pendidikan_terakhir" class="col-sm-4 col-form-label">Tingkat Pendidikan Terakhir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tingkat_pendidikan_terakhir" id="tingkat_pendidikan_terakhir" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kampus_pendidikan_terakhir" class="col-sm-4 col-form-label">Kampus Pendidikan Terakhir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="kampus_pendidikan_terakhir" id="kampus_pendidikan_terakhir" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tahun_lulus_pendidikan_terakhir" class="col-sm-4 col-form-label">Tahun Lulus Pendidikan Terakhir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tahun_lulus_pendidikan_terakhir" id="tahun_lulus_pendidikan_terakhir" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="tambahguru">Simpan</button>
                    <a href="../guru.php"><button type="button" class="btn btn-light">Batal</button></a>
                  </form>
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
  <script src="../../../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../../js/off-canvas.js"></script>
  <script src="../../../../js/hoverable-collapse.js"></script>
  <script src="../../../../js/template.js"></script>
  <script src="../../../../js/settings.js"></script>
  <script src="../../../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../../js/dashboard.js"></script>
  <script src="../../../../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
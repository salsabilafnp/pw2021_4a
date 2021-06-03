<?php

require 'functions.php';
$id = $_GET['id'];
$swa = query("SELECT * FROM siswa WHERE NIS = $id")[0];

if (isset($_POST['ubahsiswa'])) {
  if (ubahsiswa($_POST) > 0) {
    echo
    "<script>
      alert('Data Berhasil Diubah');
      document.location.href = '../siswa.php';
    </script>";
  } else {
    echo
    "<script>
      alert('Data Gagal Diubah');
      document.location.href = '../siswa.php';
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
  <title>Ubah Data</title>
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
                  <h3 class="font-weight-bold mt-3">Ubah Data Siswa</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 grid-margin mx-auto">
              <div class="card">
                <div class="card-body">
                  <form class="forms" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $swa['id']; ?>">
                    <p class="card-title">Data Pribadi</p>
                    <div class="form-group row">
                      <label for="NIS" class="col-sm-2 col-form-label">NIS</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="NIS" name="NIS" required value="<?= $swa['NIS']; ?>">
                      </div>

                    </div>
                    <div class="form-group row">
                      <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" required value="<?= $swa['nama_siswa']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Bandung" required value="<?= $swa['tempat_lahir']; ?>">
                        </div>
                        <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required placeholder="yyyy-mm-dd" required value="<?= $swa['tanggal_lahir']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jenis_kelamin" class="col-sm-2 col-form-label">Kelamin</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required value="<?= $swa['jenis_kelamin']; ?>">
                          <option value="perempuan">Perempuan</option>
                          <option value="laki-laki">Laki-laki</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="agama" class="form-control" id="agama" name="agama" value="<?= $swa['agama']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" required value="<?= $swa['email']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required value="<?= $swa['no_hp']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <input type="hidden" name="gambar_lama" value="<?= $swa['foto']; ?>">
                      <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="foto" name="foto" value="<?= $swa['foto']; ?>">
                      </div>
                    </div>
                    <hr>
                    <p class="card-title">Alamat</p>
                    <div class="form-group">
                      <div class="row">
                        <label for="alamat_jalan" class="col-sm-2 col-form-label">Jalan</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" required value="<?= $swa['alamat_jalan']; ?>">
                        </div>
                        <label for="alamat_rt" class="col-form-label">RT</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="alamat_rt" id="alamat_rt" required value="<?= $swa['alamat_rt']; ?>">
                        </div>
                        <label for="alamat_rw" class="col-form-label">RW</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="alamat_rw" id="alamat_rw" required value="<?= $swa['alamat_rw']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat_kecamatan" id="alamat_kecamatan" required value="<?= $swa['alamat_kecamatan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_kab_kota" class="col-sm-2 col-form-label">Kab/Kota</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat_kab_kota" id="alamat_kab_kota" placeholder="Kota Bandung" required value="<?= $swa['alamat_kab_kota']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat_provinsi" id="alamat_provinsi" placeholder="Jawa Barat" required value="<?= $swa['alamat_provinsi']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="kode_pos" id="kode_pos" required value="<?= $swa['kode_pos']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="kelas" id="kelas" required value="<?= $swa['kelas']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" required value="<?= $swa['asal_sekolah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="no_ijazah" class="col-sm-2 col-form-label">No Ijazah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" required value="<?= $swa['no_ijazah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk" required placeholder="yyyy/mm/dd" value="<?= $swa['tanggal_masuk']; ?>">
                      </div>
                    </div>
                    <hr>
                    <p class="card-title pb-3">Data Orang Tua</p>
                    <p class="card-description" style="font-size: 15px;">Data Ayah</p>
                    <div class="form-group row">
                      <label for="nama_ayah" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required value="<?= $swa['nama_ayah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="status_ayah" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="status_ayah" id="status_ayah" required value="<?= $swa['status_ayah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_lahir_ayah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" required value="<?= $swa['tanggal_lahir_ayah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat_ayah" id="alamat_ayah" required value="<?= $swa['alamat_ayah']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required value="<?= $swa['pekerjaan_ayah']; ?>">
                      </div>
                    </div>
                    <p class="card-description" style="font-size: 15px;">Data Ibu</p>
                    <div class="form-group row">
                      <label for="nama_ibu" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required value="<?= $swa['nama_ibu']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="status_ibu" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="status_ibu" id="status_ibu" required value="<?= $swa['status_ibu']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_lahir_ibu" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" required value="<?= $swa['tanggal_lahir_ibu']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat_ibu" id="alamat_ibu" required value="<?= $swa['alamat_ibu']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required value="<?= $swa['pekerjaan_ibu']; ?>">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="ubahsiswa">Simpan</button>
                    <a href="../siswa.php"><button type="button" class="btn btn-light">Batal</button></a>
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
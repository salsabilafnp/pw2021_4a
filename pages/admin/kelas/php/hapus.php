<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['kode_kelas'])) {
  header("Location: ../kelas.php");
  exit;
}

// ID
$kode_kelas = $_GET['kode_kelas'];
//$id = $_GET['id'];
//$kode_ujian = $_GET['kode_ujian'];

// Hapus Kelas
if (hapus_kelas($kode_kelas) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../kelas.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../kelas.php';
        </script>";
}

//// Hapus Mapel
//if (hapus_mapel($id) > 0) {
//  echo "<script>
//          alert('Data Berhasil dihapus!');
//          document.location.href = '../mapel.php';
//        </script>";
//} else {
//  echo "<script>
//          alert('Data Gagal dihapus!');
//          document.location.href = '../mapel.php';
//        </script>";
//}

//// Hapus Ujian
//if (hapus_ujian($kode_ujian) > 0) {
//  echo "<script>
//          alert('Data Berhasil dihapus!');
//          document.location.href = '../ujian.php';
//        </script>";
//} else {
//  echo "<script>
//          alert('Data Gagal dihapus!');
//          document.location.href = '../ujian.php';
//        </script>";
//}

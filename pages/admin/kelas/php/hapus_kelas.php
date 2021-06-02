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

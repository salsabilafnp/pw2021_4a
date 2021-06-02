<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['kode_ujian'])) {
  header("Location: ../ujian.php");
  exit;
}

// ID
$kode_ujian = $_GET['kode_ujian'];

// Hapus Ujian
if (hapus_ujian($kode_ujian) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../ujian.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../ujian.php';
        </script>";
}

<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: ../../../login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: ../kegiatan.php");
  exit;
}

// ID
$id = $_GET['id'];

// Hapus Kegiatan
if (hapus_kegiatan($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../kegiatan.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../kegiatan.php';
        </script>";
}

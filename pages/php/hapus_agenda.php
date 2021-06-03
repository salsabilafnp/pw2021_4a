<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: ../login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: ../admin.php");
  exit;
}

// ID
$id = $_GET['id'];

// Hapus Agenda
if (hapus_agenda($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../admin.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../admin.php';
        </script>";
}

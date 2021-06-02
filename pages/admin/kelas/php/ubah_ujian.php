<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST["ubah"])) {
  if (ubah_ujian($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'ujian.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'ujian.php';
          </script>";
  }
}

?>
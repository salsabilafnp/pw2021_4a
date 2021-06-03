<?php

require "functions.php";
$id = $_GET['id'];

if (hapusprestasi($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../prestasi.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../prestasi.php';
        </script>";
}

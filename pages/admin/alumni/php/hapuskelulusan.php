<?php

require "functions.php";
$id = $_GET['id'];

if (hapuskelulusan($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../kelulusan.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../kelulusan.php';
        </script>";
}

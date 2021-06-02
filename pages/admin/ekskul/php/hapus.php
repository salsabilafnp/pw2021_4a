<?php

require "functions.php";
$id = $_GET['id'];

if (hapus_ekskul($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../detail-ekskul.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../detail-ekskul.php';
        </script>";
}

<?php

require "functions.php";
$NIS = $_GET['NIS'];

if (hapus_anggota_ekskul($NIS) > 0) {
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

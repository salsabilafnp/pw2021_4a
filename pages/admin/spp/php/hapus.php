<?php

require "functions.php";
$NIS = $_GET['NIS'];


if (hapuspembayaran_spp($NIS) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = '../spp.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = '../spp.php';
        </script>";
}

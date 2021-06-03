<?php
require "functions.php";

$id_anggota = $_GET['id_anggota'];

if (hapus_anggota_ekskul($id_anggota) > 0) {
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

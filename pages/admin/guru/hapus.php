<?php

require "../../php/functions.php";
$id = $_GET['id'];

if (hapus_guru($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = 'guru.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = 'guru.php';
        </script>";
}

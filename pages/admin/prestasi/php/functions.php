<?php

// Koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "sekolah");

  return $conn;
}

// Query
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);
  // pembuatan array assoc
  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Hapus Data Prestasi
function hapus_prestasi($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM prestasi WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// Tambah Data Prestasi
function tambah_prestasi($data)
{
  $conn = koneksi();

  $img = htmlspecialchars($data['img']);
  $nama_acara = htmlspecialchars($data['nama_acara']);
  $tahun_acara = htmlspecialchars($data['tahun_acara']);
  $peringkat = htmlspecialchars($data['peringkat']);
  $jenis_prestasi = htmlspecialchars($data['jenis_prestasi']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);

  $query = "INSERT INTO prestasi VALUES ('', '$img', '$nama_acara', $tahun_acara, $peringkat, '$jenis_prestasi', '$penyelenggara')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Prestasi
function ubah_prestasi($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $img = htmlspecialchars($data['img']);
  $nama_acara = htmlspecialchars($data['nama_acara']);
  $tahun_acara = htmlspecialchars($data['tahun_acara']);
  $peringkat = htmlspecialchars($data['peringkat']);
  $jenis_prestasi = htmlspecialchars($data['jenis_prestasi']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);


  $query = "UPDATE prestasi SET
              img = '$img',
              nama_acara = '$nama_acara',
              tahun_acara = $tahun_acara,
              peringkat = $peringkat,
              jenis_prestasi = '$jenis_prestasi',
              penyelenggara = '$penyelenggara'
              WHERE id = $id;";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
//cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM prestasi
            WHERE nama_acara LIKE '%$keyword%' OR
            tahun_acara LIKE '%$keyword%' OR
            jenis_prestasi LIKE '%$keyword%' OR
            penyelenggara LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

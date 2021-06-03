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

// Cari Ekskul
function cari_ekskul($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM ekstrakurikuler WHERE nama_ekskul LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


// Hapus Data Ekskul
function hapus_ekskul($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM ekstrakurikuler WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// Tambah Data Ekskul
function tambah_ekskul($data)
{
  $conn = koneksi();

  $nama_ekskul = htmlspecialchars($data['nama_ekskul']);
  $jadwal_ekskul = htmlspecialchars($data['jadwal_ekskul']);
  $pembina = htmlspecialchars($data['pembina']);

  $query = "INSERT INTO ekstrakurikuler VALUES ('', '$nama_ekskul', '$jadwal_ekskul', '$pembina')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Ekskul
function ubah_ekskul($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama_ekskul = htmlspecialchars($data['nama_ekskul']);
  $jadwal_ekskul = htmlspecialchars($data['jadwal_ekskul']);
  $pembina = htmlspecialchars($data['pembina']);

  $query = "UPDATE ekstrakurikuler SET
              nama_ekskul = '$nama_ekskul',
              jadwal_ekskul = '$jadwal_ekskul',
              pembina = '$pembina'
              WHERE id = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Cari Anggota Ekskul
function cari_anggota_ekskul($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM anggota_ekskul WHERE id_anggota LIKE '%$keyword%' OR NIS LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Hapus Anggota Ekskul
function hapus_anggota_ekskul($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM anggota_ekskul WHERE id_anggota = $id");

  return mysqli_affected_rows($conn);
}

// Tambah Anggota Ekskul
function tambah_anggota_ekskul($data)
{
  $conn = koneksi();

  $ekskul = htmlspecialchars($data['ekskul']);
  $NIS = htmlspecialchars($data['NIS']);
  $id_anggota = htmlspecialchars($data['id_anggota']);
  $jabatan = htmlspecialchars($data['jabatan']);

  $query = "INSERT INTO aggota_ekskul VALUES ('$ekskul', '$id_anggota', '$NIS', '$jabatan')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Anggota Ekskul
function ubah_anggota_ekskul($data)
{
  $conn = koneksi();

  $ekskul = htmlspecialchars($data['ekskul']);
  $NIS = htmlspecialchars($data['NIS']);
  $id_anggota = htmlspecialchars($data['id_anggota']);
  $jabatan = htmlspecialchars($data['jabatan']);

  $query = "UPDATE anggota_ekskul SET
              ekskul = '$ekskul',
              id_anggota = '$id_anggota',
              NIS = '$NIS',
              jabatan = '$jabatan'
              WHERE id_anggota = '$id_anggota'";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

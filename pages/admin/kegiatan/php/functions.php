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

// Hapus Data kegiatan
function hapus_kegiatan($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM kegiatan WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// Tambah Data Kegiatan
function tambah_kegiatan($data)
{
  $conn = koneksi();

  $nama_kegiatan = htmlspecialchars($data['nama_kegiatan']);
  $tanggal_pelaksanaan = htmlspecialchars($data['tanggal_pelaksanaan']);
  $jenis_kegiatan = htmlspecialchars($data['jenis_kegiatan']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);

  $query = "INSERT INTO kegiatan VALUES ('', '$nama_kegiatan', '$tanggal_pelaksanaan', '$jenis_kegiatan', '$penyelenggara')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Kegiatan
function ubah_kegiatan($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama_kegiatan = htmlspecialchars($data['nama_kegiatan']);
  $tanggal_pelaksanaan = htmlspecialchars($data['tanggal_pelaksanaan']);
  $jenis_kegiatan = htmlspecialchars($data['jenis_kegiatan']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);

  $query = "UPDATE kegiatan SET
              nama_kegiatan = '$nama_kegiatan',
              tanggal_pelaksanaan = '$tanggal_pelaksanaan',
              jenis_kegiatan = '$jenis_kegiatan',
              penyelenggara = '$penyelenggara',
              WHERE id = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

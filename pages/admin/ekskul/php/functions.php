<?php

// Koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "sekolah");

  return $conn;
}

// Melakukan Query
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// Hapus Data kegiatan
function hapus_ekskul($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM ekstrakurikuler WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Kegiatan
function tambah_ekskul($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $nama_anggota = htmlspecialchars($data['nama_kegiatan']);
  $jabatan = htmlspecialchars($data['ketua_pelaksana']);
  $jadwal_ekskul = htmlspecialchars($data['tanggal_Pelaksana']);
  $no_induk = htmlspecialchars($data['jenis_kegiatan']);

  $query = "INSERT INTO ekstrakurikuler VALUES
                ('', $id', '$nama_anggota', '$jabatan', '$jadwal_ekskul', '$no_induk')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Kegiatan
function ubah_ekskul($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $nama_anggota = htmlspecialchars($data['nama_anggota']);
  $jabatan = htmlspecialchars($data['jabatan']);
  $jadwal_ekskul = htmlspecialchars($data['jadwal_ekskul']);
  $no_induk = htmlspecialchars($data['no_induk']);

  $query = "UPDATE ekstrakurikuler SET
              
              nama_anggota = '$nama_anggota',
              jabatan = '$jabatan',
              jadwal_ekskul = '$jadwal_ekskul',
              no_induk = '$no_induk',
              
              WHERE id = '$id'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

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
function hapus_kegiatan($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM kegiatan WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Kegiatan
function tambahkegiatan($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $nama_kegiatan = htmlspecialchars($data['nama_kegiatan']);
  $ketua_pelaksana = htmlspecialchars($data['ketua_pelaksana']);
  $tanggal_pelaksana = htmlspecialchars($data['tanggal_Pelaksana']);
  $jenis_kegiatan = htmlspecialchars($data['jenis_kegiatan']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);
  
  $query = "INSERT INTO kegiatan VALUES
                ('', $id', '$nama_kegiatan', '$ketua_pelaksana', '$tanggal_pelaksana', '$jenis_kegiatan', '$penyelenggara')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Kegiatan
function ubahkegiatan($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $nama_kegiatan = htmlspecialchars($data['nama_kegiatan']);
    $ketua_pelaksana = htmlspecialchars($data['ketua_pelaksana']);
    $tanggal_pelaksana = htmlspecialchars($data['tanggal_Pelaksana']);
    $jenis_kegiatan = htmlspecialchars($data['jenis_kegiatan']);
    $penyelenggara = htmlspecialchars($data['penyelenggara']);
    
  $query = "UPDATE kegiatan SET
              
              nama_kegiatan = '$nama_kegiatan',
              ketua_pelaksana = '$ketua_pelaksana',
              tanggal_pelaksana = '$tanggal_pelaksana',
              jenis_kegiatan = '$jenis_kegiatan',
              penyelenggara = '$penyelenggara',
              WHERE id = '$id'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

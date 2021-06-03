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

// Hapus
function hapus_anggota_ekskul($NIS)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM anggota_ekskul WHERE NIS = $NIS")[0];

  return mysqli_affected_rows($conn);
}

// Tambah 
function tambah_anggota_ekskul($data)
{
  $conn = koneksi();
  $ekskul = htmlspecialchars($data['ekskul']);
  $NIS = htmlspecialchars($data['NIS']);
  $nama_anggota = htmlspecialchars($data['nama_anggota']);
  $jabatan = htmlspecialchars($data['jabatan']);
  

  $query = "INSERT INTO aggota_ekskul VALUES
                ('$ekskul', '$NIS', '$nama_anggota', '$jabatan')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah
function ubah_anggota_ekskul($data)
{
  $conn = koneksi();
  $ekskul = htmlspecialchars($data['ekskul']);
  $NIS = htmlspecialchars($data['NIS']);
  $nama_anggota = htmlspecialchars($data['nama_anggota']);
  $jabatan = htmlspecialchars($data['jabatan']);

  $query = "UPDATE anggota_ekskul SET
              
              ekskul = '$ekskul',
              NIS = '$NIS',
              nama_anggota = '$nama_anggota',
              jabatan = '$jabatan'
              WHERE ekskul = '$ekskul'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

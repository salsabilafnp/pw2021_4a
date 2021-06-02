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

// Hapus Data Prestasi
function hapus_prestasi($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM prestasi WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Prestasi
function tambahprestasi($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $img = htmlspecialchars($data['img']);
  $nama_acara = htmlspecialchars($data['nama_acara']);
  $tahun_acara = htmlspecialchars($data['tahun_acara']);
  $peringkat = htmlspecialchars($data['peringkat']);
  $jenis_prestasi = htmlspecialchars($data['jenis_prestasi']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);
  
  $query = "INSERT INTO prestasi VALUES
                ('$id', '$img', '$nama_acara', '$tahun_acara', '$peringkat', '$jenis_prestasi', '$penyelenggara')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Prestasi
function ubahprestasi($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $img = htmlspecialchars($data['img']);
  $nama_acara = htmlspecialchars($data['nama_acara']);
  $tahun_acara = htmlspecialchars($data['tahun_acara']);
  $peringkat = htmlspecialchars($data['peringkat']);
  $jenis_prestasi = htmlspecialchars($data['jenis_prestasi']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);


  $query = "UPDATE prestasi SET
             
              img = '$img',
              nama_acara = '$nama_acara',
              tahun_acara = '$tahun_acara',
              peringkat = '$peringkat',
              jenis_prestasi = '$jenis_prestasi',
              penyelenggara = '$penyelenggara'
              WHERE id = '$id'";
              

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

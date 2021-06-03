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

// Hapus Data Kelulusan
function hapuskelulusan($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM kelulusan WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Kelulusan
function tambahkelulusan($data)
{
  $conn = koneksi();

  $NIS = htmlspecialchars($data['NIS']);
  $no_ijazah = htmlspecialchars($data['no_ijazah']);
  $no_skhun = htmlspecialchars($data['no_skhun']);
  $nilai_ijazah = htmlspecialchars($data['nilai_ijazah']);
  $nilai_skhun = htmlspecialchars($data['nilai_skhun']);
  $nilai_akhir = htmlspecialchars($data['nilai_akhir']);

  $query = "INSERT INTO kelulusan VALUES
                ('', '$NIS', '$no_ijazah', '$no_skhun', '$nilai_ijazah', '$nilai_skhun', '$nilai_akhir')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Kelulusan
function ubahkelulusan($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $NIS = htmlspecialchars($data['NIS']);
  $no_ijazah = htmlspecialchars($data['no_ijazah']);
  $no_skhun = htmlspecialchars($data['no_skhun']);
  $nilai_ijazah = htmlspecialchars($data['nilai_ijazah']);
  $nilai_skhun = htmlspecialchars($data['nilai_skhun']);
  $nilai_akhir = htmlspecialchars($data['nilai_akhir']);

  $query = "UPDATE kelulusan SET
              NIS = '$NIS',
              no_ijazah = '$no_ijazah',
              no_skhun = '$no_skhun',
              nilai_ijazah = '$nilai_ijazah',
              nilai_skhun = '$nilai_skhun',
              nilai_akhir = '$nilai_akhir'
              WHERE id = '$id'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Hapus Data Alumni
function hapusalumni($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM alumni WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Alumni
function tambahalumni($data)
{
  $conn = koneksi();

  $NISN = htmlspecialchars($data['NISN']);
  $nama = htmlspecialchars($data['nama']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $kelamin = htmlspecialchars($data['kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $kecamatan = htmlspecialchars($data['kecamatan']);
  $kab_kota = htmlspecialchars($data['kab_kota']);
  $provinsi = htmlspecialchars($data['provinsi']);
  $kode_pos = htmlspecialchars($data['kode_pos']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);
  $tahun_lulus = htmlspecialchars($data['tahun_lulus']);
  $nama_ayah = htmlspecialchars($data['nama_ayah']);
  $nama_ibu = htmlspecialchars($data['nama_ibu']);

  $query = "INSERT INTO alumni VALUES
                ('', '$NISN', '$nama', '$tempat_lahir', '$tanggal_lahir', '$kelamin', '$alamat', '$kecamatan', '$kab_kota', '$provinsi', '$kode_pos', '$no_hp', '$email', '$tahun_lulus', '$nama_ayah', '$nama_ibu')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Alumni
function ubahalumni($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $NISN = htmlspecialchars($data['NISN']);
  $nama = htmlspecialchars($data['nama']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $kelamin = htmlspecialchars($data['kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $kecamatan = htmlspecialchars($data['kecamatan']);
  $kab_kota = htmlspecialchars($data['kab_kota']);
  $provinsi = htmlspecialchars($data['provinsi']);
  $kode_pos = htmlspecialchars($data['kode_pos']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);
  $tahun_lulus = htmlspecialchars($data['tahun_lulus']);
  $nama_ayah = htmlspecialchars($data['nama_ayah']);
  $nama_ibu = htmlspecialchars($data['nama_ibu']);

  $query = "UPDATE alumni SET
              NISN = '$NISN',
              nama = '$nama',
              tempat_lahir = '$tempat_lahir',
              tanggal_lahir = '$tanggal_lahir',
              kelamin = '$kelamin',
              alamat = '$alamat',
              kecamatan = '$kecamatan',
              kab_kota = '$kab_kota',
              provinsi = '$provinsi',
              kode_pos = '$kode_pos',
              no_hp = '$no_hp',
              email = '$email',
              tahun_lulus = '$tahun_lulus',
              nama_ayah = '$nama_ayah',
              nama_ibu = '$nama_ibu'
              WHERE id = '$id'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function carikelulusan($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM kelulusan 
            WHERE 
              NIS LIKE '%$keyword%' ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function carialumni($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM alumni 
            WHERE 
              NISN LIKE '%$keyword%' OR 
              nama LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

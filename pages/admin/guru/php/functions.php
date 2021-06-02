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

// Hapus Data Guru
function hapus_guru($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM guru WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Guru
function tambahguru($data)
{
  $conn = koneksi();

  $NIP = htmlspecialchars($data['NIP']);
  $foto = htmlspecialchars($data['foto']);
  $nama = htmlspecialchars($data['nama_lengkap']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat_jalan = htmlspecialchars($data['alamat_jalan']);
  $alamat_rt = htmlspecialchars($data['alamat_rt']);
  $alamat_rw = htmlspecialchars($data['alamat_rw']);
  $alamat_kecamatan = htmlspecialchars($data['alamat_kecamatan']);
  $alamat_kab_kota = htmlspecialchars($data['alamat_kab_kota']);
  $alamat_provinsi = htmlspecialchars($data['alamat_provinsi']);
  $kode_pos = htmlspecialchars($data['kode_pos']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);
  $agama = htmlspecialchars($data['agama']);
  $tingkat_pendidikan_terakhir = htmlspecialchars($data['tingkat_pendidikan_terakhir']);
  $kampus_pendidikan_terakhir = htmlspecialchars($data['kampus_pendidikan_terakhir']);
  $tahun_lulus_pendidikan_terakhir = htmlspecialchars($data['tahun_lulus_pendidikan_terakhir']);
  $mapel = htmlspecialchars($data['mapel']);

  $query = "INSERT INTO guru VALUES
                ('', '$NIP', '$foto', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat_jalan', '$alamat_rt', '$alamat_rw', '$alamat_kecamatan', '$alamat_kab_kota', '$alamat_provinsi', '$kode_pos', '$no_hp', '$email', '$agama', '$tingkat_pendidikan_terakhir', '$kampus_pendidikan_terakhir', '$tahun_lulus_pendidikan_terakhir', '$mapel')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Guru
function ubahguru($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $nip = htmlspecialchars($data['NIP']);
  $foto = htmlspecialchars($data['foto']);
  $nama = htmlspecialchars($data['nama_lengkap']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat_jalan = htmlspecialchars($data['alamat_jalan']);
  $alamat_rt = htmlspecialchars($data['alamat_rt']);
  $alamat_rw = htmlspecialchars($data['alamat_rw']);
  $alamat_kecamatan = htmlspecialchars($data['alamat_kecamatan']);
  $alamat_kab_kota = htmlspecialchars($data['alamat_kab_kota']);
  $alamat_provinsi = htmlspecialchars($data['alamat_provinsi']);
  $kode_pos = htmlspecialchars($data['kode_pos']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);
  $agama = htmlspecialchars($data['agama']);
  $tingkat_pendidikan_terakhir = htmlspecialchars($data['tingkat_pendidikan_terakhir']);
  $kampus_pendidikan_terakhir = htmlspecialchars($data['kampus_pendidikan_terakhir']);
  $tahun_lulus_pendidikan_terakhir = htmlspecialchars($data['tahun_lulus_pendidikan_terakhir']);
  $mapel = htmlspecialchars($data['mapel']);

  $query = "UPDATE guru SET
              NIP = '$nip',
              foto = '$foto',
              nama_lengkap = '$nama',
              tempat_lahir = '$tempat_lahir',
              tanggal_lahir = '$tanggal_lahir',
              jenis_kelamin = '$jenis_kelamin',
              alamat_jalan = '$alamat_jalan',
              alamat_rt = '$alamat_rt',
              alamat_rw = '$alamat_rw',
              alamat_kecamatan = '$alamat_kecamatan',
              alamat_kab_kota = '$alamat_kab_kota',
              alamat_provinsi = '$alamat_provinsi',
              kode_pos = '$kode_pos',
              no_hp = '$no_hp',
              email = '$email',
              agama = '$agama',
              tingkat_pendidikan_terakhir = '$tingkat_pendidikan_terakhir',
              kampus_pendidikan_terakhir = '$kampus_pendidikan_terakhir',
              tahun_lulus_pendidikan_terakhir = '$tahun_lulus_pendidikan_terakhir',
              mapel = '$mapel'
              WHERE id = '$id'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

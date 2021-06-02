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

// Hapus Data Siswa
function hapus_siswa($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM siswa WHERE NIS = $id")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Guru
function tambahsiswa($data)
{
  $conn = koneksi();

  $NIS = htmlspecialchars($data['NIS']);
  $foto = htmlspecialchars($data['foto']);
  $nama_siswa = htmlspecialchars($data['nama_siswa']);
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
  $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
  $no_ijazah = htmlspecialchars($data['no_ijazah']);
  $tanggal_masuk = htmlspecialchars($data['tanggal_masuk']);
  $nama_ayah = htmlspecialchars($data['nama_ayah']);
  $status_ayah = htmlspecialchars($data['status_ayah']);
  $tanggal_lahir_ayah = htmlspecialchars($data['tanggal_lahir_ayah']);
  $alamat_ayah = htmlspecialchars($data['alamat_ayah']);
  $pekerjaan_ayah = htmlspecialchars($data['pekerjaan_ayah']);
  $nama_ibu = htmlspecialchars($data['nama_ibu']);
  $status_ibu = htmlspecialchars($data['status_ibu']);
  $tanggal_lahir_ibu = htmlspecialchars($data['tanggal_lahir_ibu']);
  $alamat_ibu = htmlspecialchars($data['alamat_ibu']);
  $pekerjaan_ibu = htmlspecialchars($data['pekerjaan_ibu']);
  $kelas = htmlspecialchars($data['kelas']);

  $query = "INSERT INTO siswa VALUES
                ('', '$NIS', '$foto', '$nama_siswa', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat_jalan', '$alamat_rt', '$alamat_rw', '$alamat_kecamatan', '$alamat_kab_kota', '$alamat_provinsi', '$kode_pos', '$no_hp', '$email', '$agama', '$asal_sekolah', '$no_ijazah', '$tanggal_masuk', '$nama_ayah', '$status_ayah', '$tanggal_lahir_ayah', '$alamat_ayah', '$pekerjaan_ayah','$nama_ibu', '$status_ibu', '$tanggal_lahir_ibu', '$alamat_ibu', '$pekerjaan_ibu', '$kelas')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Siswa
function ubahsiswa($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $NIS = htmlspecialchars($data['NIS']);
  $foto = htmlspecialchars($data['foto']);
  $nama_siswa = htmlspecialchars($data['nama_siswa']);
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
  $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
  $no_ijazah = htmlspecialchars($data['no_ijazah']);
  $tanggal_masuk = htmlspecialchars($data['tanggal_masuk']);
  $nama_ayah = htmlspecialchars($data['nama_ayah']);
  $status_ayah = htmlspecialchars($data['status_ayah']);
  $tanggal_lahir_ayah = htmlspecialchars($data['tanggal_lahir_ayah']);
  $alamat_ayah = htmlspecialchars($data['alamat_ayah']);
  $pekerjaan_ayah = htmlspecialchars($data['pekerjaan_ayah']);
  $nama_ibu = htmlspecialchars($data['nama_ibu']);
  $status_ibu = htmlspecialchars($data['status_ibu']);
  $tanggal_lahir_ibu = htmlspecialchars($data['tanggal_lahir_ibu']);
  $alamat_ibu = htmlspecialchars($data['alamat_ibu']);
  $pekerjaan_ibu = htmlspecialchars($data['pekerjaan_ibu']);
  $kelas = htmlspecialchars($data['kelas']);

  $query = "UPDATE siswa SET
              NIS = '$NIS',
              foto = '$foto',
              nama_siswa = '$nama_siswa',
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
              asal_sekolah = '$asal_sekolah',
              no_ijazah = '$no_ijazah',
              tanggal_masuk = '$tanggal_masuk',
              nama_ayah = '$nama_ayah',
              status_ayah = '$status_ayah',
              tanggal_lahir_ayah = '$tanggal_lahir_ayah',
              alamat_ayah = '$alamat_ayah',
              pekerjaan_ayah = '$pekerjaan_ayah',
              nama_ibu = '$nama_ibu',
              status_ibu = '$status_ibu',
              tanggal_lahir_ibu = '$tanggal_lahir_ibu',
              alamat_ibu = '$alamat_ibu',
              pekerjaan_ibu = '$pekerjaan_ibu',
              kelas = '$kelas'
              WHERE id = '$id'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

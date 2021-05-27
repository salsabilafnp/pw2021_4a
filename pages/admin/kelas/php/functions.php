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

// Tambah Kelas
function tambah_kelas($data)
{
  $conn = koneksi();

  $kode_kelas = htmlspecialchars($data['kode_kelas']);
  $tingkat = htmlspecialchars($data['tingkat']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $rombel = htmlspecialchars($data['rombel']);
  $walikelas = htmlspecialchars($data['walikelas']);

  $query = "INSERT INTO kelas VALUES ('$kode_kelas', '$tingkat', '$jurusan', '$rombel', '$walikelas')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Hapus Kelas
function hapus_kelas($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM kelas WHERE kode_kelas = '$id'") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Ubah Kelas
function ubah_kelas($data)
{
  $conn = koneksi();

  $kode_kelas = htmlspecialchars($data['kode_kelas']);
  $tingkat = htmlspecialchars($data['tingkat']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $rombel = htmlspecialchars($data['rombel']);
  $walikelas = htmlspecialchars($data['walikelas']);

  $query = "UPDATE kelas SET 
              kode_kelas = '$kode_kelas',
              tingkat = '$tingkat',
              jurusan = '$jurusan',
              rombel = '$rombel',
              walikelas = '$walikelas'
              WHERE kode_kelas = '$kode_kelas';";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Tambah Mapel
function tambah_mapel($data)
{
  $conn = koneksi();

  $nama_mapel = htmlspecialchars($data['nama_mapel']);
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = "INSERT INTO mata_pelajaran VALUES ('', '$nama_mapel', $kelas, '$jurusan', 0, 0)";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Hapus Mapel
function hapus_mapel($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM mata_pelajaran WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Ubah Mapel
function ubah_mapel($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama_mapel = htmlspecialchars($data['nama_mapel']);
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = "UPDATE mata_pelajaran` SET
              nama_mapel = '$nama_mapel',
              kelas = '$kelas',
              jurusan = '$jurusan'
              WHERE id = $id;";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

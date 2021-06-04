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

// Cari Kelas
function cari_kelas($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM kelas
            WHERE kode_kelas LIKE '%$keyword%' OR
            tingkat LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            rombel LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

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

// Cari Mapel
function cari_mapel($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mata_pelajaran
            WHERE nama_mapel LIKE '%$keyword%' OR
            kelas LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Tambah Mapel
function tambah_mapel($data)
{
  $conn = koneksi();

  $nama_mapel = htmlspecialchars($data['nama_mapel']);
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = "INSERT INTO mata_pelajaran VALUES ('', '$nama_mapel', $kelas, '$jurusan')";

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

  $query = "UPDATE mata_pelajaran SET
              nama_mapel = '$nama_mapel',
              kelas = '$kelas',
              jurusan = '$jurusan'
              WHERE id = $id;";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Cari Ujian
function cari_ujian($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM ujian
            WHERE kode_ujian LIKE '%$keyword%' OR
            mapel LIKE '%$keyword%' OR
            kode_ruangan LIKE '%$keyword%' OR
            tgl_waktu_ujian LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Tambah Ujian
function tambah_ujian($data)
{
  $conn = koneksi();

  $mapel = htmlspecialchars($data['mapel']);
  $tgl_waktu_ujian = htmlspecialchars($data['tgl_waktu_ujian']);
  $jenis_ujian = htmlspecialchars($data['jenis_ujian']);
  $kode_soal = htmlspecialchars($data['kode_soal']);
  $kode_ljk = htmlspecialchars($data['kode_ljk']);
  $kode_ruangan = htmlspecialchars($data['kode_ruangan']);

  $query = "INSERT INTO ujian VALUES ('$mapel', '$tgl_waktu_ujian', '$jenis_ujian', $kode_soal, '$kode_ljk', '$kode_ruangan')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Hapus Ujian
function hapus_ujian($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM ujian WHERE kode_ujian = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Ubah Ujian
function ubah_ujian($data)
{
  $conn = koneksi();

  $kode_ujian = $data['kode_ujian'];
  $mapel = htmlspecialchars($data['mapel']);
  $tgl_waktu_ujian = htmlspecialchars($data['tgl_waktu_ujian']);
  $jenis_ujian = htmlspecialchars($data['jenis_ujian']);
  $kode_soal = htmlspecialchars($data['kode_soal']);
  $kode_ljk = htmlspecialchars($data['kode_ljk']);
  $kode_ruangan = htmlspecialchars($data['kode_ruangan']);

  $query = "UPDATE ujian SET
              mapel = '$mapel',
              tgl_waktu_ujian = '$tgl_waktu_ujian',
              jenis_ujian = '$jenis_ujian',
              kode_soal = '$kode_soal',
              kode_ljk = '$kode_ljk',
              kode_ruangan = '$kode_ruangan'
              WHERE kode_ujian = $kode_ujian;";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


// Tambah Mapel
function tambah_jadpel($data)
{
  $conn = koneksi();

  $mapel = htmlspecialchars($data['mapel']);
  $kelas = htmlspecialchars($data['kelas']);
  $hari = htmlspecialchars($data['hari']);
  $waktu_awal = htmlspecialchars($data['waktu_awal']);
  $waktu_akhir = htmlspecialchars($data['waktu_akhir']);

  $query = "INSERT INTO jadwal_pelajaran VALUES ('', '$kelas', '$mapel', '$hari', '$waktu_awal', '$waktu_akhir')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Hapus Mapel
function hapus_jadpel($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM jadwal_pelajaran WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Ubah Mapel
function ubah_jadpel($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $mapel = htmlspecialchars($data['mapel']);
  $kelas = htmlspecialchars($data['kelas']);
  $hari = htmlspecialchars($data['hari']);
  $waktu_awal = htmlspecialchars($data['waktu_awal']);
  $waktu_akhir = htmlspecialchars($data['waktu_akhir']);

  $query = "UPDATE jadwal_pelajaran SET
              kelas = '$kelas',
              mapel = '$mapel',
              hari = '$hari',
              waktu_awal = '$waktu_awal',
              waktu_akhir = '$waktu_akhir'
              WHERE id = $id;";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

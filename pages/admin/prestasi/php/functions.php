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

// Hapus Data Prestasi
function hapus_prestasi($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM prestasi WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// Tambah Data Prestasi
function tambah_prestasi($data)
{
  $conn = koneksi();
  $nama_acara = htmlspecialchars($data['nama_acara']);
  $tahun_acara = htmlspecialchars($data['tahun_acara']);
  $peringkat = htmlspecialchars($data['peringkat']);
  $jenis_prestasi = htmlspecialchars($data['jenis_prestasi']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);
  $img = upload();
  if (!$img) {
    return false;
  }
  $query = "INSERT INTO prestasi VALUES ('', '$img', '$nama_acara', $tahun_acara, $peringkat, '$jenis_prestasi', '$penyelenggara')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Prestasi
function ubah_prestasi($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $nama_acara = htmlspecialchars($data['nama_acara']);
  $tahun_acara = htmlspecialchars($data['tahun_acara']);
  $peringkat = htmlspecialchars($data['peringkat']);
  $jenis_prestasi = htmlspecialchars($data['jenis_prestasi']);
  $penyelenggara = htmlspecialchars($data['penyelenggara']);
  $img = upload();
  if (!$img) {
    return false;
  }

  if ($img == 0) {
    $img = $gambar_lama;
  }


  $query = "UPDATE prestasi SET
              img = '$img',
              gambar_lama = '$gambar_lama',
              nama_acara = '$nama_acara',
              tahun_acara = $tahun_acara,
              peringkat = $peringkat,
              jenis_prestasi = '$jenis_prestasi',
              penyelenggara = '$penyelenggara'
              WHERE id = $id;";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
//cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM prestasi
            WHERE nama_acara LIKE '%$keyword%' OR
            tahun_acara LIKE '%$keyword%' OR
            jenis_prestasi LIKE '%$keyword%' OR
            penyelenggara LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['img']['name'];
  $tipe_file = $_FILES['img']['type'];
  $ukuran_file = $_FILES['img']['size'];
  $error = $_FILES['img']['error'];
  $tmp_file = $_FILES['img']['tmp_name'];

  if ($error == 4) {
    echo "<script>
						alert('pilih gambar terlebih dahulu!');
					</script>";
    return false;
  }

  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
						alert('yang anda pilih bukan gambar!');
					</script>";
    return false;
  }

  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
						alert('yang anda pilih bukan gambar!');
					</script>";
    return false;
  }

  if ($ukuran_file > 5000000) {
    echo "<script>
						alert('size gambar terlalu besar');
					</script>";
    return false;
  }

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../../../../../pw2021_4a_sekolah/pages/admin/prestasi/img' . $nama_file_baru);

  return $nama_file_baru;
}
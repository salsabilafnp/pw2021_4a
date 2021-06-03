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

  $guru = query("SELECT * FROM guru WHERE id = $id")[0];
  if ($guru['foto'] != 0) {
    unlink('../../../../images/faces/' . $guru['foto']);
  }

  mysqli_query($conn, "DELETE FROM guru WHERE id = $id")[0];

  return mysqli_affected_rows($conn);
}

function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

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
  move_uploaded_file($tmp_file, '../../../../../pw2021_4a_sekolah/images/faces/' . $nama_file_baru);

  return $nama_file_baru;
}

// Tambah Data Guru
function tambahguru($data)
{
  $conn = koneksi();

  $NIP = htmlspecialchars($data['NIP']);
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

  $foto = upload();
  if (!$foto) {
    return false;
  }

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
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
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

  $foto = upload();
  if (!$foto) {
    return false;
  }

  if ($foto == 0) {
    $foto = $gambar_lama;
  }

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

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM guru 
            WHERE 
              nama_lengkap LIKE '%$keyword%' OR
              NIP LIKE '%$keyword%' ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

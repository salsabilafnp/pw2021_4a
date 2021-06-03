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

// Registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

// Cari Agenda
function cari_agenda($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM agenda
            WHERE nama_agenda LIKE '%$keyword%' OR
            tanggal_awal LIKE '%$keyword%' OR
            tanggal_akhir LIKE '%$keyword%' OR
            jenis_agenda LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Tambah Data Agenda
function tambah_agenda($data)
{
    $conn = koneksi();

    $nama_agenda = htmlspecialchars($data['nama_agenda']);
    $tanggal_awal = htmlspecialchars($data['tanggal_awal']);
    $tanggal_akhir = htmlspecialchars($data['tanggal_akhir']);
    $jenis_agenda = htmlspecialchars($data['jenis_agenda']);

    $query = "INSERT INTO agenda VALUES ('', '$nama_agenda', '$tanggal_awal', '$tanggal_akhir', '$jenis_agenda')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// Hapus agenda
function hapus_agenda($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM agenda WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// Ubah agenda
function ubah_agenda($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama_agenda = htmlspecialchars($data['nama_agenda']);
    $tanggal_awal = htmlspecialchars($data['tanggal_awal']);
    $tanggal_akhir = htmlspecialchars($data['tanggal_akhir']);
    $jenis_agenda = htmlspecialchars($data['jenis_agenda']);

    $query = "UPDATE agenda SET 
              nama_agenda = '$nama_agenda',
              tanggal_awal = '$tanggal_awal',
              tanggal_akhir = '$tanggal_akhir',
              jenis_agenda = '$jenis_agenda'
              WHERE id = $id;";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

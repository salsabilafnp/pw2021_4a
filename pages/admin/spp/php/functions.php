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

// Hapus Data Pembayaran SPP
function hapuspembayaran_spp($NIS)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM pembayaran_spp WHERE NIS = $NIS")[0];

  return mysqli_affected_rows($conn);
}

// Tambah Data Pembayaran SPP
function tambahpembayaran_spp($data)
{
  $conn = koneksi();
  $NIS = htmlspecialchars($data['NIS']);
  $tahun_masuk = htmlspecialchars($data['tahun_masuk']);
  $kode_struk = htmlspecialchars($data['kode_struk']);
  $tgl_bayar = htmlspecialchars($data['tgl_bayar']);
  $total_bayar = htmlspecialchars($data['total_bayar']);
  $sisa_bayar = htmlspecialchars($data['sisa_bayar']);
 

  $query = "INSERT INTO pembayaran_spp VALUES
                ('$NIS', '$tahun_masuk', '$kode_struk', '$tgl_bayar', '$total_bayar', '$sisa_bayar')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Ubah Data Pembayaran SPP
function ubahpembayaran_spp($data)
{
  $conn = koneksi();

  $NIS = htmlspecialchars($data['NIS']);
  $tahun_masuk = htmlspecialchars($data['tahun_masuk']);
  $kode_struk = htmlspecialchars($data['kode_struk']);
  $tgl_bayar = htmlspecialchars($data['tgl_bayar']);
  $total_bayar = htmlspecialchars($data['total_bayar']);
  $sisa_bayar = htmlspecialchars($data['sisa_bayar']);
 
  $query = "UPDATE pembayaran_spp SET
              NIS ='$NIS',
              tahun_masuk = '$tahun_masuk',
              kode_struk = '$kode_struk',
              tgl_bayar = '$tgl_bayar',
              total_bayar = '$total_bayar',
              sisa_bayar = '$sisa_bayar'
              
              WHERE NIS = '$NIS';";
              

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function carispp($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM pembayaran_spp 
            WHERE 
              NIS LIKE '%$keyword%' OR
              tahun_masuk LIKE '%$keyword%' OR
              kode_struk LIKE '%$keyword%' OR
              tgl_bayar LIKE '%$keyword%' OR
              total_bayar LIKE '%$keyword%' OR
              sisa_bayar LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


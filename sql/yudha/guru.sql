-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 05.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaspbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat_jalan` varchar(100) NOT NULL,
  `alamat_rt` varchar(25) NOT NULL,
  `alamat_rw` varchar(25) NOT NULL,
  `alamat_kecamatan` varchar(50) NOT NULL,
  `alamat_kab_kota` varchar(50) NOT NULL,
  `alamat_provinsi` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tingkat_pendidikan_terakhir` varchar(20) NOT NULL,
  `kampus_pendidikan_terakhir` varchar(50) NOT NULL,
  `tahun_lulus_pendidikan_terakhir` year(4) NOT NULL,
  `mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `NIP`, `foto`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `tingkat_pendidikan_terakhir`, `kampus_pendidikan_terakhir`, `tahun_lulus_pendidikan_terakhir`, `mapel`) VALUES
(1, 196809271, 'face1.jpg', 'Hariyanto Fajar ', 'Surabaya', '1997-01-05', 'Laki-Laki', 'Jl.Sersan Toyib A No.32 ', '004', '002', 'Rungkut', 'Kota Surabaya', 'Jawa Timur', 40924, '081359337645', 'hariyanto155@gmail.com', 'Islam', 'S1', 'Universitas Brawijaya', 2016, 1),
(2, 196203395, 'face3.jpg', 'Sri Mulyani', 'Semarang', '1995-02-08', 'Perempuan', 'Jl.Porgo No.121 A', '001', '003', 'Pedurungan', 'Kota Semarang', 'Jawa Tengah', 40535, '089513772395', 'srimulyani220@gmail.com', 'Islam', 'S3', 'Universitas Diponegoro', 2014, 2),
(3, 199301342, 'face4.jpg', 'Asep Damar', 'Bandung', '1993-07-08', 'Laki-Laki', 'Jl.Binong Tengah No.20', '005', '001', 'Batununggal', 'Kota Bandung', 'Jawa Barat', 40275, '087341663341', 'asepganteng220@gmail.com', 'Islam', 'S2', 'Universitas Padjadjaran', 2015, 1),
(4, 196303164, 'face5.jpg', 'Agus Sopandi', 'Bandung', '1998-09-09', 'Laki-Laki', 'Jl.Ahmad Yani No.10 A', '008', '002', 'Kiaracondong', 'Kota Bandung', 'Jawa Barat', 40825, '081397137622', 'agussehat35@gmail.com', 'Islam', 'S2', 'Universitas Indonesia', 2016, 2),
(5, 1923613491, 'face7.jpg', 'Lilis Sumiati', 'Padang', '1997-08-01', 'Perempuan', 'Jl.Bagindo Aziz No.199 A', '005', '002', 'Kuranji', 'Kota Padang', 'Sumatera Barat', 40193, '089518171521', 'Lilisgelis55@gmail.com', 'Islam', 'S1', 'Universitas Padjadjaran', 2017, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

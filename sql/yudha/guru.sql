-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 18.50
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
-- Database: `sekolah`
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
(1, 123456789, 'face2.jpg', 'Dewi Sandra, S.Pd, M.Pd', 'Garut', '1980-06-06', 'laki-laki', 'Jl. Dr. Setiabudi No.193', '010', '001', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '081123456789', 'dewisiska@mail.com', 'Islam', 'S2', 'Universitas XYZ', 2015, 2),
(2, 987654321, 'face1.jpg', 'Budi Setiawan, S.Pd, M.Pd', 'Garut', '1980-12-11', 'laki-laki', 'Jl. Ciwastra No.2', '02', '08', 'Buahbatu', 'Kota Bandung', 'Jawa Barat', 40287, '089765448776', 'budisetiawan@mail.com', 'Islam', 'S2', 'UPI', 2014, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

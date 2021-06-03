-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 05.38
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
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `NISN` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kab_kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahun_lulus` int(10) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `NISN`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelamin`, `alamat`, `kecamatan`, `kab_kota`, `provinsi`, `kode_pos`, `no_hp`, `email`, `tahun_lulus`, `nama_ayah`, `nama_ibu`) VALUES
(1, 15020020, 'saepudin mikel', 'bandung', '2000-01-11', 'perempuan', 'Jalan Ciwastra, No.15 RT/05 RW/08', 'Buahbatu', 'Kota Bandung', 'Jawa Barat', 40289, '089876557664', 'saep123@mail.com', 2018, 'asep', 'tarsih'),
(2, 15020021, 'Zaenal', 'Garut', '1999-02-10', 'laki-laki', 'Jalan Cigondewah No.19 RT/09 RW/02', 'sangkuriang', 'kota garut', 'jawa barat', 40283, '089765448776', 'zaenall@mail.com', 2017, 'zezen', 'neli'),
(4, 15020023, 'esih', 'bandung', '2000-06-07', 'perempuan', 'Jalan Cihuleung No.19 RT/09 RW/02', 'lengkong', 'kota bandung', 'jawa barat', 40289, '081876552998', 'esihh1@mail.com', 2016, 'yahsa', 'sukaesih'),
(5, 15020150, 'Raden fatah', 'ciamis', '1999-05-12', 'laki-laki', 'Jalan Cisarung No.19 RT/09 RW/02', 'jatisari', 'kota ciamis', 'jawa barat', 40281, '08976558776', 'fatahraden@mail.com', 2018, 'deden', 'sari'),
(6, 14020020, 'asep mikel', 'tasikmalaya', '2000-09-24', 'laki-laki', 'Jalan Gentong No.19 RT/09 RW/02', 'sodong hilir', 'Kota tasikmalaya', 'jawa barat', 40291, '085792887663', 'mikelasep@mail.com', 2016, 'saepul', 'asih');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

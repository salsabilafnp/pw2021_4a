-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal_pelaksanaan` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal_pelaksanaan`, `jenis_kegiatan`, `penyelenggara`) VALUES
(1, 'Gebyar Ramadhan 2021', '28 Apr 2021', 'Umum', 'OSIS SMAN ABCD'),
(2, 'Bulan Bahasa SMANA 2021', '03 Mar 2021', 'Antar Kelas', 'sekolah SMAN ABCD Bandung'),
(3, 'Pekan Kreativitas Siswa SMAN ABCD', '07 Juni 2021', 'Antar Siswa', 'Osis SMAN ABCD Bandung'),
(4, 'Masa pengenalan Lingkungan Sekolah Tahun Ajaran  2021 / 2022', '15 Juli 2021', 'Internal', 'Sekolah SMAN ABCD Bandung'),
(5, 'Kepramukaan', 'Setiap Sabtu', 'Ekstrakurikuler', 'Sekolah SMAN ABCD Bandung'),
(6, 'Peringatan ISRA\' MI\'RAJ 1441 H', '11 Mar 2021', 'Internal', 'Rohis SMAN ABCD Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

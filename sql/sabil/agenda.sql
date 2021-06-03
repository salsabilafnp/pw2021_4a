-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 02:47 AM
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
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `tanggal_awal` varchar(50) NOT NULL,
  `tanggal_akhir` varchar(50) NOT NULL,
  `jenis_agenda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nama_agenda`, `tanggal_awal`, `tanggal_akhir`, `jenis_agenda`) VALUES
(1, 'Penerimaan Siswa Baru 2021/2022', '11 Jan 2021', '15 Juni 2021', 'PSB'),
(2, 'Pemantapan/Kelas Tambah Siswa Kelas 12', '18 Jan 2021', '18 Mar 2021', 'ujian'),
(3, 'Ujian Praktikum', '08 April 2021', '15 April 2021', 'ujian'),
(4, 'Ujian Nasional', '22 April 2021', '25 April 2021', 'ujian'),
(6, 'Ujian Akhir Semester Genap', '22 Mei 2021', '29 Mei 2021', 'ujian'),
(7, 'Pembagian Raport', '06 Juni 2021', '06 Juni 2021', 'kenaikan'),
(8, 'Pembagian Kelulusan', 'menunggu konfirmasi', '', 'kelulusan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 07:39 AM
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
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `tahun_acara` int(4) NOT NULL,
  `peringkat` varchar(25) NOT NULL,
  `jenis_prestasi` varchar(50) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `img`, `nama_acara`, `tahun_acara`, `peringkat`, `jenis_prestasi`, `penyelenggara`) VALUES
(1, 'jtr bj vj', 'xchyhjvkj', 2020, '2', 'gnaepgnep', 'eaneanae'),
(2, 'prestasi 1.jpeg', 'Peringatan HUT- RI ke-76 \"penghargaan sekolah adiwiyata\"', 2020, '3', 'Sekolah Adiwiyata', 'pemerintah kabupaten Bandung'),
(3, 'prestasi 3.jpeg', 'LKTI NASIONAL 2019 ', 2019, '3', 'Karya Tulis Ilmiah', 'Pusjiantara'),
(4, 'prestasi 2.jpeg', 'LKTI JABAR 2021', 2021, '1', 'Lomba karya tulis ilmiah', 'pemerintah kabupaten jawa barat'),
(5, 'prestasi 4.jpeg', 'BUNKASAI Tahun 2019', 2019, '2', 'Festival kebudayaan jepang 2019', 'Musyawarah guru mata pelajar jepang '),
(6, 'vevnhoiE', 'rhnanbanr', 2018, '3', 'hrsraharj', 'vbqaeipva;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

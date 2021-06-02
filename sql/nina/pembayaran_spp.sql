-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 10:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `NIS` int(11) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `kode_struk` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `sisa_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`NIS`, `tahun_masuk`, `kode_struk`, `tgl_bayar`, `total_bayar`, `sisa_bayar`) VALUES
(19020102, 2019, '2019B010103', '2021-04-10', '550000', '1720000'),
(19020101, 2018, '2019B010450', '2019-01-07', '350000', '150000'),
(20004456, 2020, '2020B010450', '2021-04-09', '500000', '100000'),
(19020103, 2019, '2020B010451', '2019-01-03', '550000', '1755000'),
(20010123, 2020, '2021B010128', '2021-03-08', '350000', '1750000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`kode_struk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat_jalan` varchar(100) NOT NULL,
  `alamat_rt` varchar(25) NOT NULL,
  `alamat_rw` varchar(25) NOT NULL,
  `alamat_kecamatan` varchar(50) NOT NULL,
  `alamat_kab_kota` varchar(50) NOT NULL,
  `alamat_provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(25) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_ijazah` varchar(25) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `status_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `status_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `NIS`, `foto`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `asal_sekolah`, `no_ijazah`, `tanggal_masuk`, `nama_ayah`, `status_ayah`, `tanggal_lahir_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `nama_ibu`, `status_ibu`, `tanggal_lahir_ibu`, `alamat_ibu`, `pekerjaan_ibu`, `kelas`) VALUES
(1, 18010025, 'face1.jpg', 'Salsabila Febrianty', 'Bandung', '2000-02-02', 'perempuan', 'Jl. Dr. Setiabudi No.193', '001', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '081123456789', 'salsabilafebrianty@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2018-06-17', 'abcd efghijk', 'masih hidup', '1976-05-11', 'Jl. Dr. Setiabudi No.193', 'Wiraswasta', 'lmno pqrstuv', 'masih hidup', '1977-08-08', 'Jl. Dr. Setiabudi No.193', 'Ibu Rumah Tangga', '11-IPA-1'),
(2, 18020018, 'face2.jpg', 'Amelia Lita', 'Sukabumi', '2002-12-02', 'Perempuan', 'Jl. Banten No. 01', '001', '002', 'Sukajadi', 'Kota Bandung', 'Jawa Barat', '40153', '083198723456', 'amelialita@mail.com', 'Islam', 'SMP XYZ Bandung', 'XYZ-012345', '2018-06-17', 'abcd efghijk', 'masih hidup', '1971-12-07', 'Jl. Banten No. 01', 'Wiraswasta', 'lmno pqrstuv', 'masih hidup', '1977-08-08', 'Jl. Banten No. 01', 'Ibu Rumah Tangga', '12-IPS-1'),
(3, 18020110, 'face3.jpg', 'Aldi Indra', 'Padang', '2003-03-03', 'Laki-laki', 'Jl. YOS Sudarso No. 10', '002', '003', 'Buahbatu', 'Kota Bandung', 'Jawa Barat', '40153', '082123456789', 'aldiindran@mail.com', 'Islam', 'SMP PQR Bandung', 'PQR-45678', '2018-06-17', 'pqrs tuvwxyz', 'masih hidup', '1967-05-09', 'Jl. YOS Sudarso No. 10', 'Wirausahawan', 'qwerty uiop', 'masih hidup', '1976-03-03', 'Jl. YOS Sudarso No. 10', 'Wiraswasta', '11-IPA-2'),
(4, 19010111, 'face4.jpg', 'Farhan Wijaya', 'Palembang', '2003-11-30', 'Laki-laki', 'Jl. Cibaduyut No. 11', '003', '004', 'Bojongloa Kaler', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'farhanwijaya@mail.com', 'Islam', 'SMP XYZ Bandung', 'STU-055764', '2019-06-17', 'asdf ghjkl', 'masih hidup', '1970-05-08', 'Jl. Cibaduyut No. 11', 'Wiraswasta', 'zxc vbnm', 'masih hidup', '1975-07-07', 'Jl. Cibaduyut No. 11', 'Ibu Rumah Tangga', '11-IPS-1'),
(5, 19020001, 'face5.jpg', 'Jafar Shidiq', 'Tasikmalaya', '2004-04-04', 'Laki-laki', 'Perumahan Taman Cibaduyut Indah Blok AB No. 123', '004', '005', 'Bojongloa Kidul', 'Kabupaten Bandung', 'Jawa Barat', '40153', '083123456789', 'jafarshidiq@mail.com', 'Islam', 'SMP XYZ Bandung', 'FGH-276541', '2019-06-17', 'asdf ghjkl', 'masih hidup', '1969-02-08', 'Perumahan Taman Cibaduyut Indah Blok AB No. 123', 'Wiraswasta', 'zxc vbnm', 'masih hidup', '1975-07-07', 'Perumahan Taman Cibaduyut Indah Blok AB No. 123', 'Ibu Rumah Tangga', '12-IPA-3'),
(6, 19020100, 'face6.jpg', 'Yudha Permana', 'Bandung', '2000-01-01', 'Laki-laki', 'Jl. Dr. Setiabudi No.192', '002', '003', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '082123456789', 'yudhapermana@mail.com', 'Islam', 'SMP PQR Bandung', 'EFGH-45678', '2019-06-17', 'pqrs tuvwxyz', 'masih hidup', '1976-04-06', 'Jl. Dr. Setiabudi No.192', 'Wirausahawan', 'qwerty uiop', 'masih hidup', '1976-03-03', 'Jl. Dr. Setiabudi No.192', 'Wiraswasta', '10-IPS-1'),
(7, 20010013, 'face7.jpg', 'Jessica Jane', 'Bandung', '2005-03-11', 'Perempuan', 'Jl. Sumatera No.41', '007', '008', 'Sumur Bandung', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'jessicajane@mail.com', 'Protestan', 'SMP XYZ Bandung', 'SDF-088911', '2020-06-17', 'asdf ghjkl', 'masih hidup', '1968-05-19', 'Jl. Sumatera No.41', 'Wiraswasta', 'zxc vbnm', 'masih hidup', '1975-07-07', 'Jl. Sumatera No.41', 'Ibu Rumah Tangga', '12-IPS-2'),
(8, 20010123, 'face8.jpg', 'Nina Rosita', 'Bandung', '2000-03-03', 'Perempuan', 'Jl. Dr. Setiabudi No.191', '003', '004', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'ninarosita@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2020-06-17', 'asdf ghjkl', 'masih hidup', '1980-05-31', 'Jl. Dr. Setiabudi No.191', 'Wiraswasta', 'zxc vbnm', 'masih hidup', '1975-07-07', 'Jl. Dr. Setiabudi No.191', 'Ibu Rumah Tangga', '10-IPA-1'),
(9, 20020033, 'face9.jpg', 'Vina Ariana', 'Jakarta', '2004-10-12', 'Perempuan', 'Jl. Tamansari No.6-8', '005', '006', 'Bandung Wetan', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'vinaariana@mail.com', 'Islam', 'SMP XYZ Bandung', 'KLM-011223', '2020-06-17', 'asdf ghjkl', 'masih hidup', '1972-05-05', 'Jl. Tamansari No.6-8', 'Wiraswasta', 'zxc vbnm', 'masih hidup', '1975-07-07', 'Jl. Tamansari No.6-8', 'Ibu Rumah Tangga', '10-IPA-2'),
(10, 20020088, 'face10.jpg', 'Rivan Alamsyah', 'Banten', '2005-05-07', 'Laki-laki', 'Jl. Lengkong Besar No.68', '006', '007', 'Lengkong', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'rivanalamsyah@mail.com', 'Katolik', 'SMP XYZ Bandung', 'UIO-098765', '2020-06-17', 'asdf ghjkl', 'masih hidup', '1974-12-23', 'Jl. Lengkong Besar No.68', 'Wiraswasta', 'zxc vbnm', 'masih hidup', '1975-07-07', 'Jl. Lengkong Besar No.68', 'Ibu Rumah Tangga', '10-IPA-3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

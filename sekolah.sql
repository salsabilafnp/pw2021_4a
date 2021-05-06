-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 07:59 AM
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
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(200) NOT NULL,
  `jadwal_ekskul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `nama_ekskul`, `jadwal_ekskul`) VALUES
(1, 'Praja Muda Karana', 'Senin'),
(2, 'Palang Merah Remaja', 'Selasa'),
(3, 'Karya Ilmiah Remaja', 'Rabu'),
(4, 'Pasukan Pengibar Bendera Pusaka', 'Kamis'),
(5, 'Rohani Islam', 'Jumat'),
(6, 'Kesenian', 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat_jalan` varchar(100) NOT NULL,
  `alamat_rt` varchar(200) NOT NULL,
  `alamat_rw` varchar(200) NOT NULL,
  `alamat_kecamatan` varchar(200) NOT NULL,
  `alamat_kab_kota` varchar(200) NOT NULL,
  `alamat_provinsi` varchar(200) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tingkat_pendidikan_terakhir` varchar(20) NOT NULL,
  `kampus_pendidikan_terakhir` varchar(50) NOT NULL,
  `tahun_lulus_pendidikan_terakhir` int(4) NOT NULL,
  `mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `foto`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `tingkat_pendidikan_terakhir`, `kampus_pendidikan_terakhir`, `tahun_lulus_pendidikan_terakhir`, `mapel`) VALUES
(123456789, 'face2.jpg', 'Dewi Siska, S.Pd, M.Pd', 'Garut', '1980-06-06', 'Perempuan', 'Jl. Dr. Setiabudi No.193', '010', '001', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '081123456789', 'dewisiska@mail.com', 'Islam', 'S2', 'Universitas XYZ', 2015, 2),
(987654321, 'face1.jpg', 'Budi Setiawan, S.IP, M.Pd', 'Sukabumi', '1975-10-10', 'Laki-laki', 'Jl. Dr. Setiabudi No.193', '012', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '084123456789', 'budisetiawan@mail.com', 'Islam', 'S2', 'Universitas PQR', 2012, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `ketua_pelaksana` varchar(200) NOT NULL,
  `tanggal_pelaksanaan` varchar(200) NOT NULL,
  `jenis_kegiatan` varchar(200) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `ketua_pelaksana`, `tanggal_pelaksanaan`, `jenis_kegiatan`, `penyelenggara`) VALUES
(1, 'Gebyar Ramadhan 2021', 'Amelia lita', 'kamis, 23 januari 2021', 'kegiatan tahunan SMAN ABCD', 'OSIS SMAN ABCD'),
(2, 'Bulan Bahasa SMANA 2021', 'Syarifuddin ummay S.S', 'Sabtu, 25 oktober 2021', 'memperingati bulan bahasa dan sastra', 'sekolah SMAN ABCD Bandung'),
(3, 'PKS 2021', 'Aldi Indra N', 'Senin, 21 November 2021 s/d Rabu, 24 November 2021', 'kegiatan  tahunan Pekan Kreativitas Siswa SMAN ABCD ', 'Osis SMAN ABCD Bandung'),
(4, 'MPLS (Masa pengenalan Lingkungan Sekolah) Tahun Ajaran  2022 / 2023', 'Rangga adiyasa spd', 'kamis, 21 Januari 2022', 'Kegiatan awal peserta didik untuk kultur sekolah.', 'Sekolah SMAN ABCD Bandung'),
(5, 'Kepramukaan', 'Farhan wijaya', 'Jum\'at, 23 Februari 2021', 'Pramuka Wajib', 'Sekolah SMAN ABCD Bandung'),
(6, 'Peringatan ISRA\' MI\'RAJ 1441 H', 'jafar shidiq', 'Kamis, 11 maret 2022', 'Memperingati isra miraj nabi Muhammdad saw', 'Rohis SMAN ABCD Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(11) NOT NULL,
  `tingkat` int(5) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `rombel` int(2) NOT NULL,
  `walikelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `tingkat`, `jurusan`, `rombel`, `walikelas`) VALUES
('10-IIS-3', 10, 'IPS', 3, '987654321'),
('10-MIA-1', 10, 'IPA', 1, '123456789'),
('11-IIS-2', 11, 'IPS', 2, '987654321'),
('11-MIA-4', 11, 'IPA', 4, '123456789'),
('12-IIS-5', 12, 'IPS', 5, '123456789'),
('12-MIA-6', 12, 'IPA', 6, '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `kelulusan`
--

CREATE TABLE `kelulusan` (
  `id` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `no_ijazah` varchar(200) NOT NULL,
  `no_skhun` varchar(200) NOT NULL,
  `nilai_ijazah` varchar(200) NOT NULL,
  `nilai_skhun` varchar(200) NOT NULL,
  `nilai_akhir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelulusan`
--

INSERT INTO `kelulusan` (`id`, `NIS`, `no_ijazah`, `no_skhun`, `nilai_ijazah`, `nilai_skhun`, `nilai_akhir`) VALUES
(1, 15090293, 'BCD-098755', '123-232-4330-12', '95', '90', '93');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `NIS` int(11) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `kode_struk` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `sisa_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`NIS`, `tahun_masuk`, `kode_struk`, `tgl_bayar`, `total_bayar`, `sisa_bayar`) VALUES
(18010025, 2018, '2019B010100', '2019-01-07', '300000', '1500000'),
(19020100, 2019, '2020B010075', '2020-02-10', '325000', '1625000'),
(20010123, 2020, '2021B010128', '2021-03-08', '350000', '1750000');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nama_acara` varchar(200) NOT NULL,
  `tahun_acara` varchar(200) NOT NULL,
  `peringkat` varchar(200) NOT NULL,
  `jenis_prestasi` varchar(200) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `img`, `nama_acara`, `tahun_acara`, `peringkat`, `jenis_prestasi`, `penyelenggara`) VALUES
(1, 'prestasi 1.jpeg', 'Dalam rangka memperingati HUT- RI yang ke-76 pemerintah memberikan penghargaan adiwiyata kepada sekolah yang diberikan langsung oleh bupati Bandung. ', '25-01-2021', 'peringkat ke - 3', 'sekolah adiwiyata', 'pemerintah kabupaten Bandung'),
(2, 'prestasi 3.jpeg', 'LKTI NASIONAL 2019 ', '2019', 'ke - 3', 'Karya Tulis Ilmiah', 'di selenggarakan Pusjiantara');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(11) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `alamat_rt` varchar(200) NOT NULL,
  `alamat_rw` varchar(200) NOT NULL,
  `alamat_kecamatan` varchar(200) NOT NULL,
  `alamat_kab_kota` varchar(200) NOT NULL,
  `alamat_provinsi` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `no_ijazah` varchar(200) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `asal_sekolah`, `no_ijazah`, `tanggal_masuk`, `nama_ayah`, `tanggal_lahir_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `nama_ibu`, `tanggal_lahir_ibu`, `alamat_ibu`, `pekerjaan_ibu`, `kelas`) VALUES
(18010025, 'Salsabila Febrianty', 'Bandung', '2000-02-02', 'Perempuan', 'Jl. Dr. Setiabudi No.193', '001', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '081123456789', 'salsabilafebrianty@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2018-06-17', 'abcd efghijk', '1970-03-10', 'Jl. Dr. Setiabudi No.193', 'Wiraswasta', 'lmno pqrstuv', '1977-08-08', 'Jl. Dr. Setiabudi No.193', 'Ibu Rumah Tangga', ''),
(19020100, 'Yudha Permana', 'Bandung', '2000-01-01', 'Laki-laki', 'Jl. Dr. Setiabudi No.192', '002', '003', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '082123456789', 'yudhapermana@mail.com', 'Islam', 'SMP PQR Bandung', 'EFGH-45678', '2019-06-17', 'pqrs tuvwxyz', '1973-04-04', 'Jl. Dr. Setiabudi No.192', 'Wirausahawan', 'qwerty uiop', '1976-03-03', 'Jl. Dr. Setiabudi No.192', 'Wiraswasta', ''),
(20010123, 'Nina Rosita', 'Bandung', '2000-03-03', 'Perempuan', 'Jl. Dr. Setiabudi No.191', '003', '004', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'ninarosita@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2020-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Dr. Setiabudi No.191', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Dr. Setiabudi No.191', 'Ibu Rumah Tangga', '');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `tahun_masuk` int(4) NOT NULL,
  `total_spp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`tahun_masuk`, `total_spp`) VALUES
(2018, 3600000),
(2019, 3900000),
(2020, 4200000);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `kode_ujian` int(11) NOT NULL,
  `tanggal_ujian` varchar(200) NOT NULL,
  `waktu_ujian` varchar(200) NOT NULL,
  `kode_soal` varchar(200) NOT NULL,
  `kode_ljk` varchar(200) NOT NULL,
  `nilai_ujian` varchar(200) NOT NULL,
  `kode_ruangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `kelulusan`
--
ALTER TABLE `kelulusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`kode_struk`),
  ADD KEY `siswa.spp` (`NIS`),
  ADD KEY `spp` (`tahun_masuk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`tahun_masuk`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`kode_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `NIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987654322;

--
-- AUTO_INCREMENT for table `kelulusan`
--
ALTER TABLE `kelulusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `kode_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD CONSTRAINT `siswa.spp` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`),
  ADD CONSTRAINT `spp` FOREIGN KEY (`tahun_masuk`) REFERENCES `spp` (`tahun_masuk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

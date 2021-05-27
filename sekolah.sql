-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 08:01 AM
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
-- Table structure for table `anggota_ekskul`
--

CREATE TABLE `anggota_ekskul` (
  `ekskul` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL,
  `jadwal_ekskul` varchar(25) NOT NULL,
  `pembina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `nama_ekskul`, `jadwal_ekskul`, `pembina`) VALUES
(1, 'Praja Muda Karana', 'Senin', 0),
(2, 'Palang Merah Remaja', 'Selasa', 0),
(3, 'Karya Ilmiah Remaja', 'Rabu', 0),
(4, 'Pasukan Pengibar Bendera Pusaka', 'Kamis', 0),
(5, 'Rohani Islam', 'Jumat', 0),
(6, 'Kesenian', 'Sabtu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
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
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `NIP`, `foto`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `tingkat_pendidikan_terakhir`, `kampus_pendidikan_terakhir`, `tahun_lulus_pendidikan_terakhir`, `mapel`) VALUES
(1, 123456789, 'face2.jpg', 'Dewi Sandra, S.Pd, M.Pd', 'Garut', '1980-06-06', 'Perempuan', 'Jl. Dr. Setiabudi No.193', '010', '001', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '081123456789', 'dewisiska@mail.com', 'Islam', 'S2', 'Universitas XYZ', 2015, 2),
(2, 987654321, 'face1.jpg', 'Budi Setiawan, S.IP, M.Pd', 'Sukabumi', '1975-10-10', 'Laki-laki', 'Jl. Dr. Setiabudi No.193', '012', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '084123456789', 'budisetiawan@mail.com', 'Islam', 'S2', 'Universitas PQR', 2012, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `kelas` varchar(10) NOT NULL,
  `mapel` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu_awal` varchar(5) NOT NULL,
  `waktu_akhir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal_pelaksanaan`, `jenis_kegiatan`, `penyelenggara`) VALUES
(1, 'Gebyar Ramadhan 2021', '0000-00-00', 'kegiatan tahunan SMAN ABCD', 'OSIS SMAN ABCD'),
(2, 'Bulan Bahasa SMANA 2021', '0000-00-00', 'memperingati bulan bahasa dan sastra', 'sekolah SMAN ABCD Bandung'),
(3, 'PKS 2021', '0000-00-00', 'kegiatan  tahunan Pekan Kreativitas Siswa SMAN ABCD ', 'Osis SMAN ABCD Bandung'),
(4, 'MPLS (Masa pengenalan Lingkungan Sekolah) Tahun Ajaran  2022 / 2023', '0000-00-00', 'Kegiatan awal peserta didik untuk kultur sekolah.', 'Sekolah SMAN ABCD Bandung'),
(5, 'Kepramukaan', '0000-00-00', 'Pramuka Wajib', 'Sekolah SMAN ABCD Bandung'),
(6, 'Peringatan ISRA\' MI\'RAJ 1441 H', '0000-00-00', 'Memperingati isra miraj nabi Muhammdad saw', 'Rohis SMAN ABCD Bandung');

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
('', 0, 'IPA', 0, ''),
('10-IIS-3', 10, 'IPS', 3, '987654321'),
('10-MIA-1', 10, 'IPA', 1, '123456789'),
('11-IIS-2', 11, 'IPS', 2, '987654321'),
('11-MIA-4', 11, 'IPA', 4, '123456789'),
('12-IIS-5', 12, 'IPA', 5, '123456789'),
('12-MIA-6', 12, 'IPA', 6, '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `kelulusan`
--

CREATE TABLE `kelulusan` (
  `id` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `no_skhun` varchar(50) NOT NULL,
  `nilai_ijazah` int(10) NOT NULL,
  `nilai_skhun` int(10) NOT NULL,
  `nilai_akhir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelulusan`
--

INSERT INTO `kelulusan` (`id`, `NIS`, `no_ijazah`, `no_skhun`, `nilai_ijazah`, `nilai_skhun`, `nilai_akhir`) VALUES
(1, 18020110, 'BCD-098755', '123-232-4330-12', 95, 90, 93);

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kelulusan`
--

CREATE TABLE `mapel_kelulusan` (
  `kelulusan` int(11) NOT NULL,
  `mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kelas` int(2) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nilai_harian` int(11) DEFAULT NULL,
  `nilai_rapot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mapel`, `kelas`, `jurusan`, `nilai_harian`, `nilai_rapot`) VALUES
(1, 'Sejarah', 10, 'IPS', 85, 80),
(2, 'Bahasa Indonesia', 11, 'IPA', 80, 75),
(3, 'Matematika', 12, 'IPA', 0, 0);

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
(18010025, 2018, '2019B010100', '2019-01-07', '300000', '1500000'),
(19020100, 2019, '2020B010075', '2020-02-10', '325000', '1625000'),
(20010123, 2020, '2021B010128', '2021-03-08', '350000', '1750000');

-- --------------------------------------------------------

--
-- Table structure for table `pengawas_ujian`
--

CREATE TABLE `pengawas_ujian` (
  `NIP` int(11) NOT NULL,
  `kode_ujian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_kegiatan`
--

CREATE TABLE `peserta_kegiatan` (
  `NIS` int(11) NOT NULL,
  `kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_ujian`
--

CREATE TABLE `peserta_ujian` (
  `NIS` int(11) NOT NULL,
  `kode_ujian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pj_kegiatan`
--

CREATE TABLE `pj_kegiatan` (
  `NIP` int(11) NOT NULL,
  `kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `tahun_acara` year(4) NOT NULL,
  `peringkat` varchar(25) NOT NULL,
  `jenis_prestasi` varchar(50) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `img`, `nama_acara`, `tahun_acara`, `peringkat`, `jenis_prestasi`, `penyelenggara`) VALUES
(1, 'prestasi 1.jpeg', 'Peringatan HUT- RI ke-76 \"penghargaan sekolah adiwiyata\"', 2025, '3', 'Sekolah Adiwiyata', 'pemerintah kabupaten Bandung'),
(2, 'prestasi 3.jpeg', 'LKTI NASIONAL 2019 ', 2019, '3', 'Karya Tulis Ilmiah', 'Pusjiantara');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_siswa`
--

CREATE TABLE `prestasi_siswa` (
  `NIS` int(11) NOT NULL,
  `prestasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(11) NOT NULL,
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
  `tanggal_lahir_ayah` date NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `asal_sekolah`, `no_ijazah`, `tanggal_masuk`, `nama_ayah`, `tanggal_lahir_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `nama_ibu`, `tanggal_lahir_ibu`, `alamat_ibu`, `pekerjaan_ibu`, `kelas`) VALUES
(18010025, 'Salsabila Febrianty', 'Bandung', '2000-02-02', 'Perempuan', 'Jl. Dr. Setiabudi No.193', '001', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '081123456789', 'salsabilafebrianty@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2018-06-17', 'abcd efghijk', '1970-03-10', 'Jl. Dr. Setiabudi No.193', 'Wiraswasta', 'lmno pqrstuv', '1977-08-08', 'Jl. Dr. Setiabudi No.193', 'Ibu Rumah Tangga', ''),
(18020018, 'Amelia Lita', 'Sukabumi', '2002-12-02', 'Perempuan', 'Jl. Banten No. 01', '001', '002', 'Sukajadi', 'Kota Bandung', 'Jawa Barat', '40153', '083198723456', 'amelialita@mail.com', 'Islam', 'SMP XYZ Bandung', 'XYZ-012345', '2018-06-17', 'abcd efghijk', '1970-03-10', 'Jl. Banten No. 01', 'Wiraswasta', 'lmno pqrstuv', '1977-08-08', 'Jl. Banten No. 01', 'Ibu Rumah Tangga', ''),
(18020110, 'Aldi Indra', 'Padang', '2003-03-03', 'Laki-laki', 'Jl. YOS Sudarso No. 10', '002', '003', 'Buahbatu', 'Kota Bandung', 'Jawa Barat', '40153', '082123456789', 'aldiindran@mail.com', 'Islam', 'SMP PQR Bandung', 'PQR-45678', '2018-06-17', 'pqrs tuvwxyz', '1973-04-04', 'Jl. YOS Sudarso No. 10', 'Wirausahawan', 'qwerty uiop', '1976-03-03', 'Jl. YOS Sudarso No. 10', 'Wiraswasta', ''),
(19010111, 'Farhan Wijaya', 'Palembang', '2003-11-30', 'Laki-laki', 'Jl. Cibaduyut No. 11', '003', '004', 'Bojongloa Kaler', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'farhanwijaya@mail.com', 'Islam', 'SMP XYZ Bandung', 'STU-055764', '2019-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Cibaduyut No. 11', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Cibaduyut No. 11', 'Ibu Rumah Tangga', ''),
(19020001, 'Jafar Shidiq', 'Tasikmalaya', '2004-04-04', 'Laki-laki', 'Perumahan Taman Cibaduyut Indah Blok AB No. 123', '004', '005', 'Bojongloa Kidul', 'Kabupaten Bandung', 'Jawa Barat', '40153', '083123456789', 'jafarshidiq@mail.com', 'Islam', 'SMP XYZ Bandung', 'FGH-276541', '2019-06-17', 'asdf ghjkl', '1971-09-09', 'Perumahan Taman Cibaduyut Indah Blok AB No. 123', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Perumahan Taman Cibaduyut Indah Blok AB No. 123', 'Ibu Rumah Tangga', ''),
(19020100, 'Yudha Permana', 'Bandung', '2000-01-01', 'Laki-laki', 'Jl. Dr. Setiabudi No.192', '002', '003', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '082123456789', 'yudhapermana@mail.com', 'Islam', 'SMP PQR Bandung', 'EFGH-45678', '2019-06-17', 'pqrs tuvwxyz', '1973-04-04', 'Jl. Dr. Setiabudi No.192', 'Wirausahawan', 'qwerty uiop', '1976-03-03', 'Jl. Dr. Setiabudi No.192', 'Wiraswasta', ''),
(20010013, 'Jessica Jane', 'Bandung', '2005-03-11', 'Perempuan', 'Jl. Sumatera No.41', '007', '008', 'Sumur Bandung', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'jessicajane@mail.com', 'Protestan', 'SMP XYZ Bandung', 'SDF-088911', '2020-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Sumatera No.41', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Sumatera No.41', 'Ibu Rumah Tangga', ''),
(20010123, 'Nina Rosita', 'Bandung', '2000-03-03', 'Perempuan', 'Jl. Dr. Setiabudi No.191', '003', '004', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'ninarosita@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2020-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Dr. Setiabudi No.191', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Dr. Setiabudi No.191', 'Ibu Rumah Tangga', ''),
(20020033, 'Vina Ariana', 'Jakarta', '2004-10-12', 'Perempuan', 'Jl. Tamansari No.6-8', '005', '006', 'Bandung Wetan', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'vinaariana@mail.com', 'Islam', 'SMP XYZ Bandung', 'KLM-011223', '2020-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Tamansari No.6-8', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Tamansari No.6-8', 'Ibu Rumah Tangga', ''),
(20020088, 'Rivan Alamsyah', 'Banten', '2005-05-07', 'Laki-laki', 'Jl. Lengkong Besar No.68', '006', '007', 'Lengkong', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'rivanalamsyah@mail.com', 'Katolik', 'SMP XYZ Bandung', 'UIO-098765', '2020-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Lengkong Besar No.68', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Lengkong Besar No.68', 'Ibu Rumah Tangga', '');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `tahun_masuk` year(4) NOT NULL,
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
  `mapel` int(10) NOT NULL,
  `kode_ujian` int(11) NOT NULL,
  `tgl_waktu_ujian` datetime NOT NULL,
  `jenis_ujian` varchar(10) NOT NULL,
  `kode_soal` varchar(50) NOT NULL,
  `kode_ljk` varchar(50) NOT NULL,
  `nilai_ujian` int(10) NOT NULL,
  `kode_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'admin', '$2y$10$TQpBP2dc15VHJn50FekpceG0cjoMNiK7E8qYyM7iuC2KjuhjVIvHm'),
(1, 'adminsekolah', '$2y$10$rs0hkfVDIV2wcShikpvAgOUratlu6bdwwmOMd/MYm5UNw3RgVLwBu');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`kode_struk`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelulusan`
--
ALTER TABLE `kelulusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `kode_ujian` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

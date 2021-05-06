-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2021 pada 04.54
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
-- Struktur dari tabel `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(200) NOT NULL,
  `jadwal_ekskul` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `alamat_rt` varchar(200) NOT NULL,
  `alamat_rw` varchar(200) NOT NULL,
  `no_rumah` varchar(200) NOT NULL,
  `alamat_kecamatan` varchar(200) NOT NULL,
  `alamat_kab_kota` varchar(200) NOT NULL,
  `alamat_provinsi` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `mapel` varchar(200) NOT NULL,
  `tingkat_pendidikan_terakhir` varchar(200) NOT NULL,
  `kampus_pendidikan_terakhir` varchar(200) NOT NULL,
  `tahun_lulus_pendidikan_terakhir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `foto`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `no_rumah`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `jabatan`, `mapel`, `tingkat_pendidikan_terakhir`, `kampus_pendidikan_terakhir`, `tahun_lulus_pendidikan_terakhir`) VALUES
('198005122008021001', 'face1.jpg', 'saepul cahya', 'Bandung', '12 - 05 - 1980', 'laki-laki', 'ciwastra', '03', '07', '25', 'buahbatu', 'kota bandung', 'jawa barat', '40287', '081553976064', 'saepulcahya21@gmail.com', 'islam', 'guru', 'PAI', 'S1', 'UPI', '2004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `tanggal_pelaksanaan` varchar(200) NOT NULL,
  `jenis_kegiatan` varchar(200) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` int(11) NOT NULL,
  `tingkat` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelulusan`
--

CREATE TABLE `kelulusan` (
  `id` int(11) NOT NULL,
  `no_ijazah` varchar(200) NOT NULL,
  `no_skhun` varchar(200) NOT NULL,
  `nilai_ijazah` varchar(200) NOT NULL,
  `nilai_skhun` varchar(200) NOT NULL,
  `nilai_akhir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata pelajaran`
--

CREATE TABLE `mata pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL,
  `kurikulum` varchar(200) NOT NULL,
  `nilai_harian` varchar(200) NOT NULL,
  `nilai_rapot` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `nama_acara` varchar(200) NOT NULL,
  `tahun_acara` varchar(200) NOT NULL,
  `peringkat` varchar(200) NOT NULL,
  `jenis_prestasi` varchar(200) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(200) NOT NULL,
  `umur` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `alamat_rt` varchar(200) NOT NULL,
  `alamat_rw` varchar(200) NOT NULL,
  `no_rumah` varchar(100) NOT NULL,
  `alamat_kecamatan` varchar(200) NOT NULL,
  `alamat_kab_kota` varchar(200) NOT NULL,
  `alamat_provinsi` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `no_ijazah` varchar(200) NOT NULL,
  `tanggal_masuk` varchar(200) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `tanggal_lahir_ayah` varchar(200) NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `tanggal_lahir_ibu` varchar(200) NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `foto`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `no_rumah`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `asal_sekolah`, `no_ijazah`, `tanggal_masuk`, `nama_ayah`, `tanggal_lahir_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `nama_ibu`, `tanggal_lahir_ibu`, `alamat_ibu`, `pekerjaan_ibu`) VALUES
('0012345678', 'face15.jpg', 'asep munawar', 'jakarta', '13 - 06 - 2003', '17', 'laki - laki', 'peta', '04', '05', '19', 'sukasuka', 'kota jakarta', 'DKI jakarta', '40065', '089663875619', 'munawar12@gmail.com', 'islam', 'SMP PGRI 3 Jakarta', 'DN-03 DI-0223874', '02 - 07 - 2019', 'nawar', '18 - 11 - 1968', 'Jl. Peta', 'PNS', 'mawar', '15 - 12 - 1970', 'Jl. Peta RT/RW. 04/05 No.19 ', 'ibu rumah tangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `tahun_masuk` int(11) NOT NULL,
  `total_spp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
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
-- Indeks untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata pelajaran`
--
ALTER TABLE `mata pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`tahun_masuk`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`kode_ujian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kode_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mata pelajaran`
--
ALTER TABLE `mata pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `tahun_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `kode_ujian` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2021 pada 05.55
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
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `foto`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `tingkat_pendidikan_terakhir`, `kampus_pendidikan_terakhir`, `tahun_lulus_pendidikan_terakhir`, `mapel`) VALUES
(123456789, 'face2.jpg', 'Dewi Siska, S.Pd, M.Pd', 'Garut', '1980-06-06', 'Perempuan', 'Jl. Dr. Setiabudi No.193', '010', '001', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '081123456789', 'dewisiska@mail.com', 'Islam', 'S2', 'Universitas XYZ', 2015, 2),
(987654321, 'face1.jpg', 'Budi Setiawan, S.IP, M.Pd', 'Sukabumi', '1975-10-10', 'Laki-laki', 'Jl. Dr. Setiabudi No.193', '012', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', 40153, '084123456789', 'budisetiawan@mail.com', 'Islam', 'S2', 'Universitas PQR', 2012, 1);

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
  `kode_kelas` varchar(11) NOT NULL,
  `tingkat` int(5) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `rombel` int(2) NOT NULL,
  `walikelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `tingkat`, `jurusan`, `rombel`, `walikelas`) VALUES
('10MIA1', 10, 'IPA', 1, '123456789'),
('11IIS2', 11, 'IPS', 2, '987654321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelulusan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata pelajaran`
--

CREATE TABLE `mata pelajaran` (
  `id` int(50) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `nilai_harian` int(11) NOT NULL,
  `nilai_rapot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata pelajaran`
--

INSERT INTO `mata pelajaran` (`id`, `nama_mapel`, `nilai_harian`, `nilai_rapot`) VALUES
(1, 'Sejarah', 85, 80),
(2, 'Bahasa Indonesia', 80, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_spp`
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
-- Dumping data untuk tabel `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`NIS`, `tahun_masuk`, `kode_struk`, `tgl_bayar`, `total_bayar`, `sisa_bayar`) VALUES
(18010025, 2018, '2019B010100', '2019-01-07', '300000', '1500000'),
(19020100, 2019, '2020B010075', '2020-02-10', '325000', '1625000'),
(20010123, 2020, '2021B010128', '2021-03-08', '350000', '1750000');

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
  `NIS` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
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
  `pekerjaan_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `foto`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_kecamatan`, `alamat_kab_kota`, `alamat_provinsi`, `kode_pos`, `no_hp`, `email`, `agama`, `asal_sekolah`, `no_ijazah`, `tanggal_masuk`, `nama_ayah`, `tanggal_lahir_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `nama_ibu`, `tanggal_lahir_ibu`, `alamat_ibu`, `pekerjaan_ibu`) VALUES
(18010025, 'face6.jpg', 'Salsabila Febrianty', 'Bandung', '2000-02-02', 'Perempuan', 'Jl. Dr. Setiabudi No.193', '001', '002', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '081123456789', 'salsabilafebrianty@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2018-06-17', 'abcd efghijk', '1970-03-10', 'Jl. Dr. Setiabudi No.193', 'Wiraswasta', 'lmno pqrstuv', '1977-08-08', 'Jl. Dr. Setiabudi No.193', 'Ibu Rumah Tangga'),
(19020100, 'face9.jpg', 'Yudha Permana', 'Bandung', '2000-01-01', 'Laki-laki', 'Jl. Dr. Setiabudi No.192', '002', '003', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '082123456789', 'yudhapermana@mail.com', 'Islam', 'SMP PQR Bandung', 'EFGH-45678', '2019-06-17', 'pqrs tuvwxyz', '1973-04-04', 'Jl. Dr. Setiabudi No.192', 'Wirausahawan', 'qwerty uiop', '1976-03-03', 'Jl. Dr. Setiabudi No.192', 'Wiraswasta'),
(20010123, 'face5.jpg', 'Nina Rosita', 'Bandung', '2000-03-03', 'Perempuan', 'Jl. Dr. Setiabudi No.191', '003', '004', 'Sukasari', 'Kota Bandung', 'Jawa Barat', '40153', '083123456789', 'ninarosita@mail.com', 'Islam', 'SMP XYZ Bandung', 'ABC-012345', '2020-06-17', 'asdf ghjkl', '1971-09-09', 'Jl. Dr. Setiabudi No.191', 'Wiraswasta', 'zxc vbnm', '1975-07-07', 'Jl. Dr. Setiabudi No.191', 'Ibu Rumah Tangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `tahun_masuk` int(4) NOT NULL,
  `total_spp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`tahun_masuk`, `total_spp`) VALUES
(2018, 3600000),
(2019, 3900000),
(2020, 4200000);

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
-- Indeks untuk tabel `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`kode_struk`),
  ADD KEY `siswa.spp` (`NIS`),
  ADD KEY `spp` (`tahun_masuk`);

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
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `NIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987654322;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mata pelajaran`
--
ALTER TABLE `mata pelajaran`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `kode_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD CONSTRAINT `siswa.spp` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`),
  ADD CONSTRAINT `spp` FOREIGN KEY (`tahun_masuk`) REFERENCES `spp` (`tahun_masuk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

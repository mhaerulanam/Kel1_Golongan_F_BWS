-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 06.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dokternak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(11) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `id_pilihan` varchar(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tangal_penulis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hewan`
--

CREATE TABLE `data_hewan` (
  `id_hewan` varchar(11) NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `ras_hewan` varchar(30) NOT NULL,
  `usia` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` varchar(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `stok` int(30) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `expired` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` char(5) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `id_jabatan` varchar(11) NOT NULL,
  `jadwal_kerja` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(11) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_hewan`
--

CREATE TABLE `jenis_hewan` (
  `id_jenis` varchar(11) NOT NULL,
  `nama_jenis` char(30) NOT NULL,
  `ras` char(30) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_hewan`
--

CREATE TABLE `kat_hewan` (
  `id_kategori` varchar(11) NOT NULL,
  `kat_hewan` char(30) NOT NULL,
  `id_jenis` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(11) NOT NULL,
  `id_peternak` varchar(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `nama_hewan` char(30) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peternak`
--

CREATE TABLE `peternak` (
  `id_peternak` varchar(11) NOT NULL,
  `namadepan_peternak` varchar(15) NOT NULL,
  `namabelakang_peternak` varchar(30) NOT NULL,
  `email_peternak` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `foto_peternak` varchar(255) NOT NULL,
  `username_peternak` varchar(20) NOT NULL,
  `password_peternak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id_pilihan` varchar(11) NOT NULL,
  `nama_pilihan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskeswan`
--

CREATE TABLE `puskeswan` (
  `id_pukeswan` varchar(11) NOT NULL,
  `nama_puskeswan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jam_kerja` varchar(255) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `dokumentasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rmd` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `nama_hewan` varchar(11) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `pelayanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `respon_konsultasi`
--

CREATE TABLE `respon_konsultasi` (
  `id_respon` varchar(11) NOT NULL,
  `id_konsultasi` varchar(11) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `keluhan` text NOT NULL,
  `respon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(2) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_code` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD UNIQUE KEY `id_pilihan` (`id_pilihan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `data_hewan`
--
ALTER TABLE `data_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kat_hewan`
--
ALTER TABLE `kat_hewan`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_peternak` (`id_peternak`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `peternak`
--
ALTER TABLE `peternak`
  ADD PRIMARY KEY (`id_peternak`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indeks untuk tabel `puskeswan`
--
ALTER TABLE `puskeswan`
  ADD PRIMARY KEY (`id_pukeswan`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rmd`);

--
-- Indeks untuk tabel `respon_konsultasi`
--
ALTER TABLE `respon_konsultasi`
  ADD PRIMARY KEY (`id_respon`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`),
  ADD KEY `id_role` (`id_role`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_pilihan`) REFERENCES `pilihan` (`id_pilihan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kat_hewan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kat_hewan`
--
ALTER TABLE `kat_hewan`
  ADD CONSTRAINT `kat_hewan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_hewan` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_ibfk_3` FOREIGN KEY (`id_peternak`) REFERENCES `peternak` (`id_peternak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_ibfk_4` FOREIGN KEY (`id_kategori`) REFERENCES `kat_hewan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `puskeswan`
--
ALTER TABLE `puskeswan`
  ADD CONSTRAINT `puskeswan_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

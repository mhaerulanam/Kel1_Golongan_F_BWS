-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 16.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dokter_hewan`
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
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_def`
--

CREATE TABLE `artikel_def` (
  `id_artikel` varchar(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `tanggal_penulisan` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_peternak`
--

CREATE TABLE `artikel_peternak` (
  `id_artikel` varchar(11) NOT NULL,
  `id_peternak` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `judul_artikel` varchar(30) NOT NULL,
  `isi_artikel` text NOT NULL
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
-- Struktur dari tabel `dokter_in_profil`
--

CREATE TABLE `dokter_in_profil` (
  `id_dokter` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(5) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `id_jabatan` varchar(11) NOT NULL,
  `jadwal_kerja` varchar(100) NOT NULL,
  `jam_kerja` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter_registrasi`
--

CREATE TABLE `dokter_registrasi` (
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
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi_peternak`
--

CREATE TABLE `konsultasi_peternak` (
  `id_konsultasi` varchar(10) NOT NULL,
  `judul_konsultasi` varchar(40) NOT NULL,
  `isi` text NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `artikel_def`
--
ALTER TABLE `artikel_def`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `artikel_peternak`
--
ALTER TABLE `artikel_peternak`
  ADD PRIMARY KEY (`id_artikel`);

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
-- Indeks untuk tabel `dokter_in_profil`
--
ALTER TABLE `dokter_in_profil`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `dokter_registrasi`
--
ALTER TABLE `dokter_registrasi`
  ADD PRIMARY KEY (`id_dokter`);

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
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `konsultasi_peternak`
--
ALTER TABLE `konsultasi_peternak`
  ADD PRIMARY KEY (`id_konsultasi`);

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
  ADD PRIMARY KEY (`id_pukeswan`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rmd`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

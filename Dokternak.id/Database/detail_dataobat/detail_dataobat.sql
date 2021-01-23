-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2021 pada 15.42
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
-- Database: `db_dokternak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_dataobat`
--

CREATE TABLE `detail_dataobat` (
  `id_detailob` varchar(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `id_obat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_dataobat`
--

INSERT INTO `detail_dataobat` (`id_detailob`, `id_dokter`, `id_obat`) VALUES
('DO002648', 'DOC006', 'OB002648'),
('DO002904', 'DOC002', 'OB002904'),
('DO210655', 'DOC006', 'OB210655'),
('DO210740', 'DOC006', 'OB210740');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_dataobat`
--
ALTER TABLE `detail_dataobat`
  ADD PRIMARY KEY (`id_detailob`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

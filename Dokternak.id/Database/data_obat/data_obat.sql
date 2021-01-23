-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2021 pada 15.41
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

--
-- Dumping data untuk tabel `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `nama_obat`, `stok`, `supplier`, `expired`, `keterangan`) VALUES
('OB002648', 'Kumpit Oil', 15, 'Ani', '2021-05-12', 'Vitamin bulu kucing dan obat pembunuh pitak rontok'),
('OB002904', 'pulmotil Oil AC', 30, 'Oktavia', '2021-06-17', 'Obat hewan untuk mengatasi Mycoplasma pada hewan'),
('OB210655', 'Pet Mitonidazole', 50, 'Oktavia', '2021-06-04', 'Obat Kucing dan anjing yang mecret atau diare'),
('OB210740', 'Supravit Vitamin', 20, 'rara', '2021-06-11', 'Obat hewan ayam burung unggas multivitamin kapsul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

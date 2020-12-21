-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 01.25
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
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(11) NOT NULL,
  `id_peternak` int(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `id_ktg` varchar(10) NOT NULL,
  `nama_hewan` char(30) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_kirim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_peternak`, `id_dokter`, `id_kategori`, `id_ktg`, `nama_hewan`, `keluhan`, `tanggal`, `status_kirim`) VALUES
('KONS005822', 3, 'DOC001', 'KAT001', 'KAT04', 'damv', 'aku lagi ngeluh', '21-12-2020', 'norespon'),
('KONS173312', 3, 'DOC002', 'KAT002', 'KAT01', 'Raven', 'Gatau mau ngeluh', '20-12-2020', 'terespon'),
('KONS173559', 3, 'DOC003', 'KAT002', 'KAT05', 'Beo', 'Terima kasih', '20-12-2020', 'terespon'),
('KONS183559', 3, 'DOC002', 'KAT002', 'KAT03', 'sandi', 'gogogogogoogogo', '22-03-2020', 'norespon');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_peternak` (`id_peternak`),
  ADD KEY `id_ktg` (`id_ktg`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_ibfk_4` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_hewan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_ibfk_5` FOREIGN KEY (`id_peternak`) REFERENCES `peternak` (`id_peternak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_ibfk_6` FOREIGN KEY (`id_ktg`) REFERENCES `kategori_artikel` (`id_ktg`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

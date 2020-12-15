-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 17.32
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
-- Struktur dari tabel `dokumentasi_puskeswan`
--

CREATE TABLE `dokumentasi_puskeswan` (
  `id_dokpus` int(11) NOT NULL,
  `id_puskeswan` varchar(10) NOT NULL,
  `id_dokumentasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumentasi_puskeswan`
--

INSERT INTO `dokumentasi_puskeswan` (`id_dokpus`, `id_puskeswan`, `id_dokumentasi`) VALUES
(1, 'P01', 'pc1'),
(2, 'P01', 'pc2'),
(3, 'P01', 'pc5'),
(4, 'P02', 'ptm3'),
(5, 'P03', 'ptp4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokumentasi_puskeswan`
--
ALTER TABLE `dokumentasi_puskeswan`
  ADD PRIMARY KEY (`id_dokpus`),
  ADD KEY `id_puskeswan` (`id_puskeswan`),
  ADD KEY `id_dokumentasi` (`id_dokumentasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumentasi_puskeswan`
--
ALTER TABLE `dokumentasi_puskeswan`
  MODIFY `id_dokpus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokumentasi_puskeswan`
--
ALTER TABLE `dokumentasi_puskeswan`
  ADD CONSTRAINT `dokumentasi_puskeswan_ibfk_1` FOREIGN KEY (`id_puskeswan`) REFERENCES `puskeswan` (`id_puskeswan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumentasi_puskeswan_ibfk_2` FOREIGN KEY (`id_dokumentasi`) REFERENCES `dokumentasi` (`id_dokumentasi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Struktur dari tabel `dokter_puskeswan`
--

CREATE TABLE `dokter_puskeswan` (
  `id_dp` int(11) NOT NULL,
  `id_puskeswan` varchar(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter_puskeswan`
--

INSERT INTO `dokter_puskeswan` (`id_dp`, `id_puskeswan`, `id_dokter`) VALUES
(1, 'P01', 'DOC002'),
(2, 'P02', 'DOC004'),
(3, 'P03', 'DOC005'),
(4, 'P01', 'DOC003');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter_puskeswan`
--
ALTER TABLE `dokter_puskeswan`
  ADD PRIMARY KEY (`id_dp`),
  ADD KEY `id_puskeswan` (`id_puskeswan`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter_puskeswan`
--
ALTER TABLE `dokter_puskeswan`
  MODIFY `id_dp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter_puskeswan`
--
ALTER TABLE `dokter_puskeswan`
  ADD CONSTRAINT `dokter_puskeswan_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokter_puskeswan_ibfk_2` FOREIGN KEY (`id_puskeswan`) REFERENCES `puskeswan` (`id_puskeswan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

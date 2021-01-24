-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2021 pada 10.21
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
-- Struktur dari tabel `detail_rekammedik`
--

CREATE TABLE `detail_rekammedik` (
  `id_detailRM` int(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `id_rmd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_rekammedik`
--

INSERT INTO `detail_rekammedik` (`id_detailRM`, `id_dokter`, `id_rmd`) VALUES
(3, 'DOC006', 23),
(4, 'DOC006', 24),
(5, 'DOC003', 31);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_rekammedik`
--
ALTER TABLE `detail_rekammedik`
  ADD PRIMARY KEY (`id_detailRM`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_rmd` (`id_rmd`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_rekammedik`
--
ALTER TABLE `detail_rekammedik`
  MODIFY `id_detailRM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_rekammedik`
--
ALTER TABLE `detail_rekammedik`
  ADD CONSTRAINT `detail_rekammedik_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_rekammedik_ibfk_2` FOREIGN KEY (`id_rmd`) REFERENCES `rekam_medik` (`id_rmd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

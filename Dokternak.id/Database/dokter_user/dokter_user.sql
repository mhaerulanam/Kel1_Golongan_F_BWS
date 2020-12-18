-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 23.07
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
-- Struktur dari tabel `dokter_user`
--

CREATE TABLE `dokter_user` (
  `id_dokteruser` int(11) NOT NULL,
  `id_dokter` varchar(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter_user`
--

INSERT INTO `dokter_user` (`id_dokteruser`, `id_dokter`, `id_user`) VALUES
(1, 'DOC001', 17),
(2, 'DOC002', 18),
(3, 'DOC003', 19),
(4, 'DOC004', 20),
(5, 'DOC005', 21),
(7, 'DOC006', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter_user`
--
ALTER TABLE `dokter_user`
  ADD PRIMARY KEY (`id_dokteruser`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter_user`
--
ALTER TABLE `dokter_user`
  MODIFY `id_dokteruser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter_user`
--
ALTER TABLE `dokter_user`
  ADD CONSTRAINT `dokter_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokter_user_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

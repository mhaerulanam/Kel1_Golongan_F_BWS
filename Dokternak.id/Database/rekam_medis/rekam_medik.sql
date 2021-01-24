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
-- Struktur dari tabel `rekam_medik`
--

CREATE TABLE `rekam_medik` (
  `id_rmd` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `id_ktg` varchar(11) NOT NULL,
  `nama_hewan` varchar(11) NOT NULL,
  `nama_peternak` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `pelayanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekam_medik`
--

INSERT INTO `rekam_medik` (`id_rmd`, `tanggal`, `id_kategori`, `id_ktg`, `nama_hewan`, `nama_peternak`, `alamat`, `keluhan`, `diagnosa`, `pelayanan`) VALUES
(23, '2021-01-24', 'KAT002', 'KAT05', 'sandi', 'Defi Tamara', 'Tapen', 'tidak mau makan', 'keracunan', 'perawatan'),
(24, '2021-01-24', 'KAT001', 'KAT02', 'Ragita', 'Anggito Surya', 'Prajekan', 'bolo', 'bibi', 'sana'),
(29, '2021-01-23', 'KAT002', 'KAT01', 'cikky', 'Anggito Surya', 'Bondowoso', 'cara memandikan', 'sakit', 'periksaan'),
(30, '2021-01-23', 'KAT002', 'KAT01', 'cikky', 'Anggito Surya', 'Bondowoso', 'cara memandikan', 'sakit', 'periksaan'),
(31, '2021-01-23', 'KAT002', 'KAT01', 'cikky', 'Anggito Surya', 'Bondowoso', 'cara memandikan', 'sakit', 'periksaan'),
(32, '2021-01-23', 'KAT002', 'KAT01', 'cikky', 'Anggito Surya', 'Bondowoso', 'cara memandikan', 'sakit', 'periksaan'),
(33, '2021-01-23', 'KAT002', 'KAT01', 'cikky', 'Anggito Surya', 'Bondowoso', 'cara memandikan', 'sakit', 'periksaan'),
(34, '2021-01-23', 'KAT002', 'KAT01', 'cikky', 'Anggito Surya', 'Bondowoso', 'cara memandikan', 'sakit', 'periksaan'),
(35, '2021-01-19', 'KAT002', 'KAT01', 'Kambing', 'Anggito Surya', 'asa', 'sa', 'sa', 'sas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  ADD PRIMARY KEY (`id_rmd`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_ktg` (`id_ktg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  MODIFY `id_rmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  ADD CONSTRAINT `rekam_medik_ibfk_1` FOREIGN KEY (`id_ktg`) REFERENCES `kategori_artikel` (`id_ktg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medik_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_hewan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

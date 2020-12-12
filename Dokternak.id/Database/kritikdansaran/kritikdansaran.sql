-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2020 pada 05.20
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
-- Struktur dari tabel `kritikdansaran`
--

CREATE TABLE `kritikdansaran` (
  `id_ks` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kritikdansaran`
--

INSERT INTO `kritikdansaran` (`id_ks`, `tanggal`, `komentar`, `nama`, `email_hp`, `pekerjaan`) VALUES
(1, '2020-12-13', 'Semoga sukses', 'Tim Developer', 'dev@gmail.com', 'Mahasiswa'),
(2, '13-12-2020', 'Semangat terus, pemuda kuat pantang mundur sebelum menang.', 'Ara', 'aramahasiswi@gmail.c', 'Mahasiswi'),
(3, '13-12-2020', 'Semoga dimudahkan', 'Kelompok 1', 'kel01golabws@gmail.c', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  ADD PRIMARY KEY (`id_ks`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

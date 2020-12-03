-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 10.36
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
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `pendidikan` text NOT NULL,
  `matkul` text NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `ttl`, `pendidikan`, `matkul`, `alamat`) VALUES
('D1192122', 'M Haerul Anam', '2020-11-02', 'S3', 'Workshop Sistem Informasi Berbasis Website', 'Bondowoso'),
('D1192324', 'Suhardi', '1997-06-17', 'S2', 'Manajemen Basis data', 'Jember'),
('D1525364', 'Suroso', '1984-06-01', 'S2', 'Workshop Sistem Informasi Berbasis Website', 'Jember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `gender` text NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `ttl` date NOT NULL,
  `agama` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `nama`, `gender`, `prodi`, `angkatan`, `ttl`, `agama`, `alamat`, `username`, `password`) VALUES
('E41190555', 'diniaasas', 'Laki-Laki', '', 2001, '2020-11-11', 'Islam', 'Bondowoso', 'didi', '1213'),
('E41190834', 'Haerul', '', '', 2001, '2020-11-12', 'Islam', 'Bondowoso', 'asas', '123121'),
('E41190899', 'Mohammad Haerul Anam', '', '', 0, '2020-11-05', 'Islam', '', 'Anam', 'Anam2001'),
('E41190987', 'sasasa', '', '', 0, '2020-11-04', 'Islam', '', 'sasasa', '1234'),
('E41193212', 'Anam', '', '', 0, '2020-11-14', 'Islam', '', 'Anam', '12345'),
('E41194323', 'Anam-Anam', '', '', 0, '2020-11-04', 'Islam', '', 'Anamsa', '12334'),
('E41196578', 'Moh Haerul Anam', '', '', 0, '2001-06-22', 'Islam', '', 'Anam12', '1212334'),
('E41199086', 'M Haerul Anam', '', '', 0, '2020-11-05', 'Islam', '', 'Anam', '12345'),
('E41199123', 'Mohammad', '', '', 0, '2020-04-02', 'Islam', '', 'Mohammad', '13454'),
('E41199921', 'sisi', '', '', 0, '2020-11-19', 'Islam', '', 'sas', 'd121'),
('E41199999', 'Dono', '', '', 0, '2020-11-13', 'Islam', '', 'Do', 'no123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `username`, `password`, `level`) VALUES
('U01', 'Anam', 'Anam2001', '1'),
('U03', 'Adinda', 'Adinda123', '2'),
('U05', 'Salsabila', 'Salsabila123', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

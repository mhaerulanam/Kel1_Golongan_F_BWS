-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 07.40
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
-- Database: `polije`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `jenis_kelamin`, `jabatan`, `matkul`, `alamat`) VALUES
('45289002', 'Andre Hermansyah', 'Laki-Laki', 'Dosen', 'Workshop Sistem Informasi Berb', 'Semarang'),
('45289003', 'Herman Sudarga', 'Laki-Laki', 'Dosen', 'Workshop Sistem Informasi Berb', 'Jl. Regganis'),
('45289004', 'Andrea Sandiago', 'Laki-Laki', 'Kepala UPT', 'Tidak Ada', 'Jl. Seroji'),
('45289005', 'Steffani Hildan', 'Perempuan', 'Dosen', 'Workshop Sistem Informasi Berb', 'Jl. Jayapura'),
('45289007', 'Andre Hidayat', 'Laki-Laki', 'Kepala UPT', 'Tidak Ada', 'Surakarta'),
('45289017', 'Ardian Raharja', 'Laki-Laki', 'Dosen', 'Workshop Sistem Informasi Berb', 'Situbondo'),
('45289077', 'Andi Hermawan', 'Laki-Laki', 'Dosen', 'Workshop Sistem Informasi Berb', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'defitamara', '12345'),
(2, 'defi', '67890'),
(3, 'tamara', '2001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tgllahir`, `jenis_kelamin`, `prodi`, `telpon`, `alamat`) VALUES
('E41190931', 'Denada Rahayu', 'Bondowoso', '2001-11-06', 'Perempuan', 'Teknik Informatika', '081789999977', 'Jl. Merdeka'),
('E41190942', 'Defi Tamara', 'Bondowoso', '2001-10-26', 'Perempuan', 'Teknik Informatika', '082229189251', 'Desa Sukosari Kidul RT 02/RW 01'),
('E41190965', 'Ajeng Rahayu', 'Bogor', '2000-12-03', 'Perempuan', 'Teknik Informatika', '081234567877', 'Jl. Bangka'),
('E41190977', 'Dendi Hanum', 'Jakarta', '2000-11-19', 'Laki-Laki', 'Teknik Komputer', '082123888999', 'Jl. Manggis'),
('E41190988', 'Andini Rahmawati', 'Jember', '2000-11-13', 'Perempuan', 'Teknik Informatika', '081789999999', 'Jl. Kalimantan 3'),
('E41197061', 'Raden Simamba', 'Semarang', '2000-11-05', 'Laki-Laki', 'Teknik Komputer', '081234567888', 'Jl. Soedirman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

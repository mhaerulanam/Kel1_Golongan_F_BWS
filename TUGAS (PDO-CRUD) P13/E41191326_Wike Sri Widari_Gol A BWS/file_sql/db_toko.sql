-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 11:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(6) NOT NULL,
  `nama_barang` varchar(100) CHARACTER SET latin1 NOT NULL,
  `satuan_barang` varchar(20) CHARACTER SET latin1 NOT NULL,
  `stok_barang` varchar(20) NOT NULL,
  `harga_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nama_barang`, `satuan_barang`, `stok_barang`, `harga_barang`) VALUES
('B01', 'Beng-Beng', 'PCS', '12', '2000'),
('B010', 'Malkis', 'PCS', '30', '1000'),
('B011', 'Kopi cup', 'PCS', '40', '1000'),
('B012', 'Fress', 'Botol', '20', '8000'),
('B013', 'Kripik Tempe', 'PCS', '30', '5000'),
('B014', 'Teh Gelas', 'Botol', '50', '3000'),
('B015', 'Rexona', 'PCS', '35', '6000'),
('B016', 'Kripik Singkong', 'PCS', '30', '5000'),
('B017', 'Oky Jely Drink', 'PCS', '50', '1000'),
('B018', 'Nabati', 'PCS', '50', '9900'),
('B019', 'Mogu Mogu', 'Botol', '30', '6500'),
('B02', 'Teh Pucuk', 'Botol', '30', '5000'),
('B020', 'Sozzis', 'PCS', '35', '5500'),
('B021', 'PocarisWeat', 'Botol', '45', '6000'),
('B022', 'Rebo', 'PCS', '30', '7000'),
('B023', 'Oreo', 'PCS', '60', '12500'),
('B024', 'Snack Soes Coklat', 'PCS', '50', '6900'),
('B025', 'Fanta', 'Botol', '70', '5000'),
('B026', 'Migi Migi', 'PCS', '30', '4500'),
('B027', 'Coca Cola', 'Botol', '50', '8000'),
('B028', 'Tango', 'PCS', '30', '5000'),
('B03', 'Mi Sedap', 'PCS', '50', '2500'),
('B04', 'Liptik Implora', 'PCS', '30', '20000'),
('B05', 'Floridina', 'Botol', '30', '3000'),
('B06', 'Lotion 2 in 1', 'PCS', '30', '150000'),
('B07', 'Kecap Sedap', 'Botol', '30', '5000'),
('B08', 'Ale-Ale', 'PCS', '30', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

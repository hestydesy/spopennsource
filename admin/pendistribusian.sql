-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 03:57 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendistribusian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_agen`
--

CREATE TABLE IF NOT EXISTS `tabel_agen` (
  `kode_agen` int(5) NOT NULL,
  `nama_agen` varchar(20) NOT NULL,
  `alamat_agen` varchar(20) NOT NULL,
  `no_tlp_agen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_distribusi`
--

CREATE TABLE IF NOT EXISTS `tabel_distribusi` (
  `kode` int(8) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `kode_produk` int(5) NOT NULL,
  `kode_agen` int(5) NOT NULL,
  `kode_status_barang` int(5) NOT NULL,
  `harga_satuan` int(5) NOT NULL,
  `jumlah_barang` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_distribusi`
--

INSERT INTO `tabel_distribusi` (`kode`, `blokir`, `kode_produk`, `kode_agen`, `kode_status_barang`, `harga_satuan`, `jumlah_barang`) VALUES
(1111, 'Y', 22221, 3331, 44441, 0, 30),
(1112, 'Y', 22222, 3332, 4442, 0, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE IF NOT EXISTS `tabel_produk` (
  `kode_produk` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`kode_produk`, `nama_produk`, `harga_satuan`) VALUES
(2221, 'Harpers Bazaar', 20000),
(2222, 'Maxim Indonesia', 60000),
(2223, 'Cosmopilitan', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status_barang`
--

CREATE TABLE IF NOT EXISTS `tabel_status_barang` (
  `kode_status_barang` int(5) NOT NULL,
  `status_barang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_agen`
--
ALTER TABLE `tabel_agen`
  ADD PRIMARY KEY (`kode_agen`);

--
-- Indexes for table `tabel_distribusi`
--
ALTER TABLE `tabel_distribusi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tabel_status_barang`
--
ALTER TABLE `tabel_status_barang`
  ADD PRIMARY KEY (`kode_status_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_agen`
--
ALTER TABLE `tabel_agen`
  MODIFY `kode_agen` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_distribusi`
--
ALTER TABLE `tabel_distribusi`
  MODIFY `kode` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1113;
--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `kode_produk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2224;
--
-- AUTO_INCREMENT for table `tabel_status_barang`
--
ALTER TABLE `tabel_status_barang`
  MODIFY `kode_status_barang` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

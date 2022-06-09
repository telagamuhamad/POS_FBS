-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_fbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `nama_barang`, `jumlah_qty`) VALUES
(1, 'Komputer', 2),
(2, 'Komputer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `master_customer`
--

CREATE TABLE `master_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_customer`
--

INSERT INTO `master_customer` (`id_customer`, `nama_customer`) VALUES
(1, 'Telaga'),
(2, 'Gaa');

-- --------------------------------------------------------

--
-- Table structure for table `master_supplier`
--

CREATE TABLE `master_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_supplier`
--

INSERT INTO `master_supplier` (`id_supplier`, `nama_supplier`) VALUES
(4, 'Lenovo'),
(5, 'ACER');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_purchase` int(3) NOT NULL,
  `tgl_purchase` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_qty` int(3) NOT NULL,
  `harga_beli` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `dpp` int(100) NOT NULL,
  `ppn` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_purchase`, `tgl_purchase`, `nama_barang`, `jumlah_qty`, `harga_beli`, `discount`, `dpp`, `ppn`, `total`, `nama_supplier`) VALUES
(1, '2022-06-09', 'Komputer', 2, 10000000, 2000000, 9090909, 10000000, 18000000, ''),
(2, '2022-06-09', 'Komputer', 5, 15000000, 3500000, 13636364, 1363636, 12863636, ''),
(3, '2022-06-10', 'Laptop', 2, 5000000, 300000, 4545455, 454545, 5154545, ''),
(4, '2022-06-10', 'Laptop', 2, 10000000, 200000, 9090909, 909091, 10709091, 'Lenovo'),
(5, '2022-06-09', 'Komputer', 3, 3000000, 200000, 2727273, 272727, 3072727, 'Lenovo'),
(6, '2022-06-09', 'Komputer', 3, 3000000, 200000, 2727273, 272727, 3072727, 'Lenovo'),
(7, '2022-06-17', 'Komputer', 4, 20000000, 500000, 18181818, 1818182, 21318182, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id_sales` int(11) NOT NULL,
  `tgl_sales` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_qty` int(3) NOT NULL,
  `harga_jual` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `dpp` int(100) NOT NULL,
  `ppn` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `nama_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id_sales`, `tgl_sales`, `nama_barang`, `jumlah_qty`, `harga_jual`, `discount`, `dpp`, `ppn`, `total`, `nama_customer`) VALUES
(1, '2022-06-10', 'Komputer', 2, 10000000, 0, 9090909, 909091, 10909091, 'Telaga'),
(2, '2022-06-18', 'Laptop', 2, 14000000, 0, 12727273, 1272727, 15272727, 'Gaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `master_customer`
--
ALTER TABLE `master_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_purchase`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_sales`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_customer`
--
ALTER TABLE `master_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_supplier`
--
ALTER TABLE `master_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_purchase` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 11:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040082`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `asal_daerah` varchar(100) NOT NULL,
  `ketersediaan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `img`, `nama_makanan`, `asal_daerah`, `ketersediaan`, `harga`) VALUES
(1, 'lotek.jpg', 'lotek', 'jawa barat', 'tersedia', '10.000'),
(2, 'kupattahu.jpg', 'kupat tahu', 'jawa barat', 'tersedia', '13.000'),
(3, 'soto.jpg', 'soto madura', 'madura', 'habis', '15.000'),
(4, 'gudeg.jpg', 'gudeg', 'jogjakarta', 'habis', '15.000'),
(5, 'satepadang.jpg', 'sate padang', 'padang', 'tersedia', '15.000'),
(6, 'pempek.jpg', 'pempek', 'palembang', 'tersedia', '10.000'),
(7, 'keraktelor.jpg', 'kerak telur', 'jakarta', 'habis', '15.000'),
(8, 'surabi.jpg', 'surabi', 'jawa barat', 'tersedia', '7000'),
(9, 'ayamtaliwang.jpg', 'ayam taliwang', 'lombok', 'habis', '20.000'),
(10, 'bikaambon.jpg', 'bika ambon', 'ambon', 'habis', '15.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

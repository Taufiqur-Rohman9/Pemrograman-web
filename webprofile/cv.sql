-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `nama`) VALUES
(1, 'MI THORIQUL HUDA'),
(49, 'SMPN 2 MOJOAGUNG');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact`) VALUES
(1, 'taufikurrohman222@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hoby`
--

CREATE TABLE `hoby` (
  `id` int(11) NOT NULL,
  `kid` varchar(11) NOT NULL,
  `hoby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoby`
--

INSERT INTO `hoby` (`id`, `kid`, `hoby`) VALUES
(1, '1', 'Berenang'),
(2, '1', 'Berlari'),
(3, '1', 'bulu tangkis'),
(4, '1', 'tennis meja'),
(5, '2', 'bermain gitar'),
(6, '2', 'bernyanyi');

-- --------------------------------------------------------

--
-- Table structure for table `k_hoby`
--

CREATE TABLE `k_hoby` (
  `kid` varchar(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `k_hoby`
--

INSERT INTO `k_hoby` (`kid`, `kategori`) VALUES
('1', 'sport'),
('2', 'music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoby`
--
ALTER TABLE `hoby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `k_hoby`
--
ALTER TABLE `k_hoby`
  ADD PRIMARY KEY (`kid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoby`
--
ALTER TABLE `hoby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

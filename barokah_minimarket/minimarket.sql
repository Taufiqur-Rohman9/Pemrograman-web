-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2020 pada 14.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `sku` varchar(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `stok` varchar(40) NOT NULL,
  `harga` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`sku`, `nama`, `kategori`, `stok`, `harga`) VALUES
('1', 'AQUA', 'MINUMAN', '30', 4500),
('2', 'KRIPIK SINGKONG MAMA SUKA', 'MAKANAN', '30', 7650),
('4', 'BEBELOVE GOLD 2', 'KEPERLUAN ANAK', '30', 150000),
('5', 'GARNIER FACEWASH', 'SKINCARE', '30', 32000),
('7', 'MAYBELLINE', 'SKINCARE', '30', 75000),
('8', 'VOUCHER GAME', 'LAIN - LAIN', '20', 50000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

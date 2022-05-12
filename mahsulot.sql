-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 12, 2022 at 01:47 PM
-- Server version: 8.0.24
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kassa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahsulot`
--

CREATE TABLE `mahsulot` (
  `id` bigint UNSIGNED NOT NULL,
  `nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `narxi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahsulot`
--

INSERT INTO `mahsulot` (`id`, `nomi`, `narxi`, `kodi`, `created_at`, `updated_at`) VALUES
(1, 'pepsi(0.5)', '5000', '4700000000001', NULL, NULL),
(2, 'pepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(3, 'pepsi(0.5)', '5000', '4700000000001', NULL, NULL),
(4, 'pepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(6, 'apepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(7, 'pepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(9, 'bpepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(10, 'epepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(12, 'cpepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(13, 'dpepsi(1.0)', '9000', '4700000000002', NULL, NULL),
(14, 'pepsi(1.0)', '9000', '4700000000002', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahsulot`
--
ALTER TABLE `mahsulot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahsulot`
--
ALTER TABLE `mahsulot`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

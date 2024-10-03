-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 02:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_654230035`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_clothing`
--

CREATE TABLE `tb_clothing` (
  `id` int(11) NOT NULL,
  `brand` text NOT NULL,
  `type` text NOT NULL,
  `zise` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_clothing`
--

INSERT INTO `tb_clothing` (`id`, `brand`, `type`, `zise`, `price`, `quantity`) VALUES
(12, 'kloset', 'dress', 'xxl', 250, 2),
(13, 'balenciaga', 'skirt', 'xxxl', 4800, 1),
(14, 'hermes', 'dress', 'xxl', 4860, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clothing`
--
ALTER TABLE `tb_clothing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clothing`
--
ALTER TABLE `tb_clothing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 08:24 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grundfos`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientdatabase`
--

CREATE TABLE `clientdatabase` (
  `id` int(11) NOT NULL,
  `product_nr` varchar(20) COLLATE utf8_bin NOT NULL,
  `pump_location` varchar(20) COLLATE utf8_bin NOT NULL,
  `pump_usage` text COLLATE utf8_bin NOT NULL,
  `client_name` varchar(40) COLLATE utf8_bin NOT NULL,
  `client_country` varchar(40) COLLATE utf8_bin NOT NULL,
  `client_city` varchar(40) COLLATE utf8_bin NOT NULL,
  `client_zip` varchar(20) COLLATE utf8_bin NOT NULL,
  `client_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `client_email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pumps`
--

CREATE TABLE `pumps` (
  `product_nr` int(11) NOT NULL,
  `type` text COLLATE utf8_bin NOT NULL,
  `water_level` smallint(5) NOT NULL,
  `flow` smallint(4) NOT NULL,
  `power` smallint(4) NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL,
  `pressure` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pumps`
--

INSERT INTO `pumps` (`product_nr`, `type`, `water_level`, `flow`, `power`, `image`, `pressure`) VALUES
(11223344, 'Alpha3', 8, 4, 34, '', 10),
(22334455, 'Alpha2', 8, 4, 34, '', 10),
(33445566, 'UPS2', 8, 6, 140, '', 10),
(44556677, 'UPS N', 6, 10, 220, '', 10),
(55667788, 'UPA', 13, 4, 200, '', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientdatabase`
--
ALTER TABLE `clientdatabase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pumps`
--
ALTER TABLE `pumps`
  ADD PRIMARY KEY (`product_nr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientdatabase`
--
ALTER TABLE `clientdatabase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2020 at 02:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE `Accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`id`, `name`, `username`, `surname`, `phone`, `address`, `password`) VALUES
(1, 'John', 'cccccccc', 'wefd', 456546, 'dsdsd', 'zzzzzzzzzz'),
(4, 'Shamgar', 'dddd', 'fefcef', 535635, 'deded', 'zzzzzzzzzz'),
(6, 'manu', 'manu', 'musobero', 777777777, 'Dangamvura ', 'nnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `Rental`
--

CREATE TABLE `Rental` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `zesa` varchar(20) NOT NULL,
  `house` varchar(20) NOT NULL,
  `maids` varchar(10) NOT NULL,
  `WiFi` varchar(10) NOT NULL,
  `stoves` varchar(10) NOT NULL,
  `pool` varchar(10) NOT NULL,
  `places` varchar(50) NOT NULL,
  `NOM` int(3) NOT NULL,
  `solar` varchar(10) NOT NULL,
  `NoP` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rental`
--

INSERT INTO `Rental` (`id`, `name`, `address`, `phone`, `zesa`, `house`, `maids`, `WiFi`, `stoves`, `pool`, `places`, `NOM`, `solar`, `NoP`) VALUES
(10, 'ghgj', 'efsd', 4546, 'no', 'boarding', 'maids', 'WiFi', 'no', 'no', 'Chiwaridzo', 1, 'yes', 10),
(11, 'ewre', 'wefw', 857463, 'yes', 'notboarding', 'nomaids', 'noWiFi', 'yes', 'yes', 'Chipindura', 2, 'yes', 10),
(12, 'dfgdfgd', 'gsegs', 453645, 'no', 'boarding', 'maids', 'WiFi', 'no', 'no', 'Clutters', 2, 'no', 20),
(13, 'daaas', 'asfsfa', 27888, 'no', 'boarding', 'nomaids', 'WiFi', 'no', 'yes', 'ShashiView', 1, 'yes', 10),
(14, 'asa', 'sdfsdf', 52685, 'yes', 'notboarding', 'maids', 'WiFi', 'yes', 'no', 'ShashiWest', 3, 'yes', 20),
(15, 'Shamgar Musobero', 'assdsf', 779060176, 'yes', 'boarding', 'maids', 'noWiFi', 'no', 'yes', 'ShashiView', 1, 'yes', 20),
(16, 'Faith Musobero', 'dfdgsdf', 7546560, 'yes', 'notboarding', 'maids', 'noWiFi', 'no', 'yes', 'Chipindura', 2, 'yes', 20),
(17, 'sd', 'dfgdf', 72852, 'no', 'boarding', 'nomaids', 'noWiFi', 'no', 'yes', 'ShashiView', 2, 'yes', 20),
(18, 'Yolanda', 'Nano', 1755565, 'no', 'boarding', 'nomaids', 'WiFi', 'no', 'no', 'Chiwaridzo', 2, 'no', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Rental`
--
ALTER TABLE `Rental`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Rental`
--
ALTER TABLE `Rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

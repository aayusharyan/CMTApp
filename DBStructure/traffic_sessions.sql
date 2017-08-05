-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 12:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmtapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `traffic_sessions`
--

CREATE TABLE `traffic_sessions` (
  `id` int(11) NOT NULL,
  `from_ip` varchar(256) NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traffic_sessions`
--

INSERT INTO `traffic_sessions` (`id`, `from_ip`, `visit_date`) VALUES
(1, '::1', '2017-08-04'),
(2, '::1', '2017-08-04'),
(3, '::1', '2017-08-04'),
(4, '::1', '2017-08-04'),
(5, '::1', '2017-08-04'),
(6, '::1', '2017-08-04'),
(7, '::1', '2017-08-04'),
(8, '::1', '2017-08-04'),
(9, '::1', '2017-08-05'),
(10, '::1', '2017-08-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traffic_sessions`
--
ALTER TABLE `traffic_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traffic_sessions`
--
ALTER TABLE `traffic_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

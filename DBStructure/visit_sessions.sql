-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 03:08 PM
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
-- Table structure for table `visit_sessions`
--

CREATE TABLE `visit_sessions` (
  `id` int(11) NOT NULL,
  `from_ip` varchar(256) NOT NULL,
  `visit_date` date NOT NULL,
  `page_visited` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit_sessions`
--

INSERT INTO `visit_sessions` (`id`, `from_ip`, `visit_date`, `page_visited`) VALUES
(1, '::1', '2017-08-04', ''),
(2, '::1', '2017-08-04', '/CMTApp/functions/analytics.php'),
(3, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(4, '::1', '2017-08-04', '/CMTApp/dashboard'),
(5, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(6, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(7, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(8, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(9, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(10, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(11, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(12, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(13, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(14, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(15, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(16, '::1', '2017-08-04', '/CMTApp/dashboard'),
(17, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(18, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(19, '::1', '2017-08-04', '/CMTApp/dashboard.php'),
(20, '::1', '2017-08-04', '/CMTApp/dashboard'),
(21, '::1', '2017-08-04', '/CMTApp/dashboard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visit_sessions`
--
ALTER TABLE `visit_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visit_sessions`
--
ALTER TABLE `visit_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 01:58 PM
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
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `create_date` date NOT NULL,
  `phone` int(11) NOT NULL,
  `role` varchar(32) NOT NULL,
  `branch` varchar(256) NOT NULL,
  `academic_year` varchar(256) NOT NULL,
  `college` varchar(256) NOT NULL,
  `domains` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `uid`, `email`, `password`, `name`, `create_date`, `phone`, `role`, `branch`, `academic_year`, `college`, `domains`, `gender`) VALUES
(1, 'A', 'admin@admin', '12345', 'Sudha', '0000-00-00', 0, '', '', '', '', '', ''),
(2, 'B', 'sample@mail.com', '12345', 'Sample', '2017-08-01', 1, '', '', '', '', '', ''),
(3, 'C', 'sample1@mail.com', '12345', 'Sample', '2017-08-01', 2, '', '', '', '', '', ''),
(4, 'D', 'sample2@mail.com', '12345', 'Sample', '2017-08-02', 3, '', '', '', '', '', ''),
(6, '', 'admin@admin2', '12345', 'LOL', '2017-08-05', 2147483647, 'Presenter', 'Computer Enginerring', 'Second Year', 'Afghanistan', '', 'Male'),
(13, '', 'admin@admin4', '', 'klo', '2017-08-05', 147, 'Presenter', 'Electronics & Tele-Communication', 'Second Year', 'Albania', 'on, on, on', 'Other'),
(14, '', 'admin@admin6', '12345', 'lol', '2017-08-05', 1234567890, 'Presenter', 'Computer Enginerring', 'Master\'s Second Year', 'Albania', 'Cyber Security, Computer Networking, on, on', 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

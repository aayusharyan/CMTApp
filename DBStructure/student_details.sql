-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 12:05 PM
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
  `phone` varchar(256) NOT NULL,
  `role` varchar(32) NOT NULL,
  `branch` varchar(256) NOT NULL,
  `academic_year` varchar(256) NOT NULL,
  `college` varchar(256) NOT NULL,
  `domains` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `uid`, `email`, `password`, `name`, `create_date`, `phone`, `role`, `branch`, `academic_year`, `college`, `domains`, `gender`, `status`) VALUES
(48, '123452018P0048', 'wertr', '12345', 'qwertyu', '2017-08-05', '1237894560', 'P', 'Computer Enginerring', 'First Year', '0001', '12345', 'M', ''),
(49, 'CS2018P0049', 'hjfb@gmail.com', 'password', 'dhgf`', '2017-08-09', '8146699014', 'P', 'Computer Enginerring', 'Master\'s Second Year', '0002', 'CS', 'M', ''),
(50, 'MUL2018P0050', 'aa@123.com', '123', 'QWER', '2017-08-11', '7894561230', 'T', 'Electronics & Tele-Communication', 'Fourth Year', '0001', 'MUL', 'M', ''),
(51, '123, 1234, 12345, 123456, CS, CN2018P0051', 'aaa@123.com', 'sadsa', 'QWER', '2017-08-11', '7894560230', 'P', 'Electronics & Tele-Communication', 'Fourth Year', '0001', '123, 1234, 12345, 123456, CS, CN', 'M', ''),
(52, 'CN2018P0052', 'adaa@123.com', '124', 'QWER', '2017-08-11', '7894560200', 'P', 'Electronics & Tele-Communication', 'Fourth Year', '0001', 'CN', 'M', '');

--
-- Triggers `student_details`
--
DELIMITER $$
CREATE TRIGGER `CheckRole` BEFORE INSERT ON `student_details` FOR EACH ROW BEGIN
    DECLARE
        msg VARCHAR(255) ; IF(
            (NEW.role != 'P') OR(NEW.role != 'A')
        ) THEN
    SET
        msg = 'The Role Needs to be Either Presentee or Attendee' ; SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT
        = msg ;
END IF ;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `marks` varchar(500) NOT NULL,
  `result` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `sex`, `marks`, `result`, `grade`) VALUES
(5, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(6, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(7, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(8, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(9, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(10, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(11, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(12, 'Upendra Kumar Jaiswal', '20', 'Male', '70%-90%', 'Pass', 'A'),
(13, '', '', 'Select', 'Select', 'Select', 'Select'),
(14, '', '', 'Select', 'Select', 'Select', 'Select');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

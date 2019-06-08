-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:45 AM
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
-- Database: `login-register`
--

-- --------------------------------------------------------

--
-- Table structure for table `upen`
--

CREATE TABLE `upen` (
  `id` int(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upen`
--

INSERT INTO `upen` (`id`, `Name`, `Email`, `Password`, `Phone`, `Gender`, `Address`, `Status`, `Role`) VALUES
(1, 'upen jaiswal', 'upen.rdm@gmail.com', '123456789', '9793002002', 'Male', 'Pan Oasis Society, B-1006, Sector -70', 'inactive', 'admin'),
(2, 'Rohit Bhati', 'rohit.rdm@gmail.com', '123456789', '9871750901', 'Male', 'dadri', 'active', 'user'),
(30, 'Rajan kumar', 'rajanksingh2009@gmail.com', 'rajan', '9654072640', 'Male', 'RDM', 'inactive', 'user'),
(31, 'Gaurav', 'gaurav@gmail.com', 'Thakur', '9798000000', 'Male', 'delhi', 'active', ''),
(32, 'sonali', 'sonali@gmail.com', 'chauhan', '9856999555', 'Female', 'bihar', 'active', ''),
(34, 'Upendra Kumar Jaiswal', 'upen.j1986@gmail.com', 'jgjhf', '4534643543', 'Male', 'Gurgaon, Hariyana', 'inactive', ''),
(36, 'hello', 'how', 'are', 'you', 'i', 'am', 'fine', 'and'),
(37, 'hello', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upen`
--
ALTER TABLE `upen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upen`
--
ALTER TABLE `upen`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

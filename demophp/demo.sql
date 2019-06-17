-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 10:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `pincode` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `plan` varchar(40) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `area` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `user_role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `gender`, `phone`, `pincode`, `district`, `plan`, `bank`, `category`, `area`, `address`, `status`, `user_role`) VALUES
(10, 'rohit bhati', 'jsbbhatiroh', 'select', '2147483647', 'dc', 'v', '', '', '', '', '', '', ''),
(11, 'rohit bhati', 'jsbbhatiroh', 'male', '2147483647', 'efr', 'ewgrg', '', '', '', '', '', '', ''),
(12, 'dsfbg', 'k@gmail.com', 'select', '78888888', 'fg', 'g', 'Graduation', '', '', '', '', '', ''),
(13, 'werg', 'k@gmail.com', 'male', '324', 'fg', 'ewf', 'Graduation', '', '', '', '', '', ''),
(14, 'ajay', 'k@gmail.com', 'male', '2147483647', 'hvvchjd', 'gvt', 'Graduation', '', '', '', '', '', ''),
(15, 'kumarragu', 'kumar@gmail', 'male', '2147483647', 'bkjcbvkjf', 'fhjh', 'Graduation', 'Inactive', '', '', '', '', ''),
(16, 'rahul', 'kumar123@gm', '1', '58669', 'vkjkjd', 'fgh', 'Post-Graduation', 'Inactive', '', '', '', '', ''),
(17, 'ccghgh', 'cghchg@gmai', 'male', '6776', 'cgfgfj', 'xgfgj', 'Post-Graduation', 'Inactive', '', '', '', '', ''),
(18, 'ravi', 'jsbbhatiroh', '1', '2147483647', 'vhjhjc', 'afr', 'Post-Graduation', 'active', '', '', '', '', ''),
(19, 'amit', 'amit@gmail.com', '1', '11111', 'sfsg', 'eftg', 'Post-Graduation', 'active', '', '', '', '', ''),
(20, 'amit', 'amit@gmail.com', '1', '1212', 'bjkjbv', 'bhhbjc', 'Post-Graduation', 'active', '', '', '', '', ''),
(21, 'ajay', 'ajay@yahoo.com', 'male', '1231234', 'bkjfv', 'gfhgh', 'Graduation', 'active', 'Employee', '', '', '', ''),
(22, 'efg', 'k@gmail.com', 'male', '11111', 'bkjbfv', 'xdgf', 'Post-Graduation', 'active', 'Admin', '', '', '', ''),
(23, ' hjdf', 'amit@gmail', 'female', '56789', '235487', 'zdfxg', 'Basic', 'Punjab National bank', 'SC/ST', 'Rural', ' Ernakulam ', '', 'Employee'),
(24, 'rohit', 'rohit@gmail.com', 'male', '2147483647', '201301', 'gygg', 'Basic', 'Punjab National bank', 'O.B.C', 'Rural', ' Bangalore Rural ', 'active', 'Admin'),
(25, 'rohit bhati', 'jsbbhatirohit47@gmail.com', 'male', '9871750901', '201301', 'vhjvhj', 'Basic', 'Punjab National bank', 'O.B.C', 'Rural', 'Jharkhand', 'active', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

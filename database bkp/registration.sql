-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:47 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'upen', 'upen.j1986@gmail.com', 'ba8332b742b61a0144260157f653a01b'),
(0, 'gaurav', 'gaurav@gmail.com', '29f944b41969ed08deddbef0e79d691f'),
(0, 'shalu', 'shalu@gmail.com', 'ba8332b742b61a0144260157f653a01b'),
(0, 'sunaina', 'sunaina@gmail.com', 'ba8332b742b61a0144260157f653a01b'),
(0, 'rdm', 'rdm@gmail.com', 'ba8332b742b61a0144260157f653a01b'),
(0, '', '', ''),
(0, 'rks', 'rks@gmail.com', 'ba8332b742b61a0144260157f653a01b'),
(0, 'amit', 'amit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(0, 'jvbksjdbvjkdvb', 'dgsg@fghfh.g', 'e10adc3949ba59abbe56e057f20f883e'),
(0, 'kjkjdsfkj', 'hdskjfk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

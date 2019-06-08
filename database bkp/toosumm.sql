-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:48 AM
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
-- Database: `toosumm`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_detail` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_name`, `blog_detail`, `blog_image`, `user_id`, `created_at`) VALUES
(38, 'Recent Posts', 'Recent Posts', 'e2222306c9a4de207a331d581bab273d.jpg', 1, '2018-11-23 12:38:53'),
(39, 'testing blog\r\n\r\n', 'fffffffffffff', '9a1389cc62e003e67e228826a0fa4ea2.png', 1, '2018-11-23 12:39:09'),
(40, 'test', 'test blog', 'e3617b8986546090fdb2d519c03eb12a.png', 1, '2019-04-03 06:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `user_id`, `category_name`, `created_at`) VALUES
(1, 1, 'sports category', '2018-10-14 18:31:52'),
(2, 3, 'politics', '2018-10-14 18:32:01'),
(3, 3, 'entertainment', '2018-10-20 06:58:39'),
(4, 3, 'new testins', '2018-10-22 10:03:28'),
(5, 3, 'AAA', '2018-10-22 10:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `certificate_name` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `certificate_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `user_id`, `start`, `end`, `certificate_name`, `organization`, `license_number`, `certificate_url`, `created_at`) VALUES
(1, 1, '2018-04-11 00:00:00', '2018-04-11 00:00:00', 'Audrey Lazar', 'Ranks India', '5555555555', 'www.xuz.com', '2018-11-01 07:53:50'),
(2, 46, '2018-12-12 00:00:00', '2018-12-20 00:00:00', 'gggggg', 'ggggg', '5555555555555', 'ffffffffffffff', '2018-11-01 10:37:16'),
(3, 3, '1970-01-01 00:00:00', '2018-03-09 00:00:00', 'Audrey', 'Ranks India', '5555555555', 'www.xuz.com', '2018-11-03 08:35:42'),
(4, 35, '2018-11-01 00:00:00', '2018-11-02 00:00:00', 'Audrey Lazar', 'Ranks India', '5555555555', 'www.xuz.com', '2018-11-22 12:55:22'),
(5, 42, '2018-11-01 00:00:00', '2018-11-30 00:00:00', 'Audrey Lazar', 'Ranks India', '5555555555', 'www.xuz.com', '2018-11-23 11:15:05'),
(6, 44, '2018-11-01 00:00:00', '2018-11-02 00:00:00', 'Audrey Lazar', 'Ranks India', '5555555555', 'www.xuz.com', '2018-11-26 08:34:15'),
(8, 46, '2018-12-04 00:00:00', '2018-12-04 00:00:00', 'hello', 'aaa', '44444444', 'www.google.comhhuiui', '2018-12-04 06:28:29'),
(9, 47, '2018-12-03 00:00:00', '2018-12-04 00:00:00', 'xxxxxxxx', 'xxxxxxxxx', 'xxxxxx', 'xxxxxxxxx.com', '2018-12-06 07:06:24'),
(10, 63, '2018-12-01 00:00:00', '2018-12-04 00:00:00', 'wwwww', 'wwwww', '111111111', 'wwwww', '2018-12-11 05:34:49'),
(11, 69, '2018-12-01 00:00:00', '2018-12-11 00:00:00', 'demo', 'demo', '11111111', 'wwwww', '2018-12-11 06:02:44'),
(12, 58, '2018-12-01 00:00:00', '2018-12-10 00:00:00', 'wwww', 'wwww', '444444444', 'wwwww', '2018-12-11 06:30:15'),
(13, 70, '2018-12-01 00:00:00', '2018-12-18 00:00:00', 'wwww', 'wwww', '222222222', 'wwwwww', '2018-12-11 07:42:04'),
(14, 85, '2019-01-01 00:00:00', '2019-01-31 00:00:00', 'b.tech', 'united', '123456', 'https://google.com', '2019-01-02 04:56:17'),
(15, 84, '2018-01-01 00:00:00', '2019-01-31 00:00:00', 'XYZ', 'XYZ', '123456', 'https://google.com', '2019-01-02 05:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `clients_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `clients_name`, `contact_person`, `contact_number`, `note`, `image`, `created_at`) VALUES
(2, 1, 'hcl', 'rdm person', '777777777777777', 'hello', '062a7f5b4923984f0db35525467f8841.png', '2018-11-19 11:16:59'),
(3, 1, 'Ibm', 'Lisa Taylor', '9891231226', 'ddbb', 'd17e0faef8aaf538ba645471c6396857.jpg', '2018-11-19 11:25:33'),
(4, 35, 'google', 'Audrey Lazar', '1112222222', 'AAA', 'e9683eca783ef0f52ad156a0166c9c8b.png', '2018-11-19 11:34:06'),
(6, 1, 'ranks digital media', 'Lisa Taylor', '1111111111', 'ddbb', '5fc31b64d5aa105fe55c0048552b0737.jpg', '2018-11-19 12:45:18'),
(7, 44, 'aaa', 'aaa', '1111111111', 'wwwwwwwww', '955758d85df6f1e41dfb5de22183e86d.jpg', '2018-12-07 09:00:34'),
(8, 41, 'abhishek', 'abhishek', '9839060665', 'note', 'fea916833303d9b00216bad74694c15f.jpg', '2018-12-21 10:37:13'),
(9, 75, 'sepient', 'sumit', '9839060665', 'note', '02c17e7da39a55c1f34f65d74e626560.jpg', '2018-12-24 05:04:11'),
(10, 78, 'Young Urban Marketers', 'sumit team lead', '9839060665', 'note', 'cc8bcf59522b008eb4c1c289bfa958be.png', '2018-12-24 09:37:31'),
(11, 78, 'SmartCode Tech.', 'SmartCode Tech.', '9825252525', 'note', '7d37d1c27a86cda5e6a8237c5b5c8a75.png', '2018-12-25 08:50:36'),
(12, 75, 'hcl gurgaon', 'hcl team lead', '9839060665', 'note', '0091f4330df95702a1a98651d5645a00.png', '2018-12-25 08:52:23'),
(13, 78, 'Vibrant Communications', 'Vibrant Communications', '2345906424', 'hello this vibra nt communications', '533ff3c8b038ae0e47dac439d22d9969.png', '2018-12-27 06:31:28'),
(14, 78, 'Internal', 'Internal taem mananger', '5676746746', 'note', '7bc0da1154e0c69e2e18a6a9ae1a2e32.jpg', '2018-12-27 06:32:00'),
(15, 83, 'ranks digital media d', 'abhishek', '9839060665', 'note', '282dc01f4b1068838f56dd6b9fc82ea0.png', '2018-12-27 07:14:50'),
(16, 83, 'rdm skills', 'abhishek', '9839060665', 'note', 'bf89d6acd14acd753425fecce830199f.png', '2018-12-27 10:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `institute_name` varchar(255) NOT NULL,
  `area_of_study` varchar(255) NOT NULL,
  `degree_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `start`, `end`, `institute_name`, `area_of_study`, `degree_type`, `created_at`) VALUES
(1, 7, '2018-04-10 18:30:00', '2018-03-08 18:30:00', 'ss', 'computer', 'Doctorate', '2018-11-01 07:33:45'),
(2, 1, '2018-04-10 18:30:00', '2018-04-10 18:30:00', 'united', 'computer', 'Bachechors', '2018-11-01 07:35:54'),
(3, 3, '2018-02-10 18:30:00', '2018-04-10 18:30:00', 'unitedaa', 'computeraa', 'Diploma', '2018-11-03 07:58:11'),
(4, 35, '2018-10-31 18:30:00', '2018-11-01 18:30:00', 'united', 'computer', 'Doctorate', '2018-11-23 04:53:34'),
(5, 36, '2018-10-31 18:30:00', '2018-10-31 18:30:00', 'abhi', 'computer', 'Bachechors', '2018-11-23 10:34:09'),
(6, 42, '2018-10-31 18:30:00', '2018-11-01 18:30:00', 'united', 'computer', 'Bachechors', '2018-11-23 11:14:43'),
(8, 46, '2018-12-29 18:30:00', '2018-12-19 18:30:00', 'united', 'b.tech', 'Diploma', '2018-12-04 08:49:27'),
(9, 46, '2018-11-30 18:30:00', '2018-12-16 18:30:00', 'ddddd', 'ddddd', 'Doctorate', '2018-12-04 09:13:02'),
(10, 44, '2018-11-30 18:30:00', '2018-12-24 18:30:00', 'oxford', 'b.tech', 'Doctorate', '2018-12-05 12:30:25'),
(11, 52, '2018-11-30 18:30:00', '2018-12-11 18:30:00', 'united', 'bddjfdb', 'Bachechors', '2018-12-08 09:49:57'),
(12, 62, '2018-11-30 18:30:00', '2018-12-10 18:30:00', 'rrtrtrt', 'rtrttt', 'Diploma', '2018-12-10 10:30:47'),
(13, 63, '2018-11-30 18:30:00', '2018-12-09 18:30:00', 'united', 'b.tech', 'Bachechors', '2018-12-11 05:34:09'),
(14, 58, '2018-11-30 18:30:00', '2018-12-12 18:30:00', 'united', 'b.tech', 'Master', '2018-12-11 06:31:35'),
(15, 70, '2018-11-30 18:30:00', '2018-12-17 18:30:00', 'united', 'b.tech', 'Bachechors', '2018-12-11 07:41:40'),
(16, 85, '2018-12-31 18:30:00', '2019-01-22 18:30:00', 'united', 'b.tech', 'Bachechors', '2019-01-02 04:55:15'),
(17, 84, '2016-12-31 18:30:00', '2019-01-22 18:30:00', 'united', 'b.tech', 'Bachechors', '2019-01-02 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `employment_history`
--

CREATE TABLE `employment_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment_history`
--

INSERT INTO `employment_history` (`id`, `user_id`, `start`, `end`, `company_name`, `role`, `created_at`) VALUES
(1, 1, '2018-12-03 00:00:00', '2019-12-03 00:00:00', 'rdm', 'php developer', '2018-12-03 09:08:06'),
(2, 1, '2018-12-04 00:00:00', '2018-12-19 00:00:00', 'ranks', 'ci develo', '2018-12-03 09:08:18'),
(3, 1, '2018-12-12 00:00:00', '2018-12-18 00:00:00', 'wwwwww', 'wewwewe', '2018-12-03 11:38:09'),
(5, 46, '2018-12-01 00:00:00', '2018-12-05 00:00:00', 'connect globs', 'php developer', '2018-12-04 05:59:10'),
(6, 44, '2018-12-01 00:00:00', '2019-12-27 00:00:00', 'xyz', 'java devloper', '2018-12-05 12:31:21'),
(7, 47, '2018-12-01 00:00:00', '2018-12-10 00:00:00', 'hhjjj', 'hjhjhj', '2018-12-06 07:57:30'),
(8, 62, '2018-12-05 00:00:00', '2018-12-11 00:00:00', 'rrrt', 'rrtr', '2018-12-10 10:31:00'),
(9, 60, '2018-12-12 00:00:00', '2018-12-09 00:00:00', 'hjhjh', 'hjhjhj', '2018-12-10 10:38:02'),
(10, 63, '2018-12-27 00:00:00', '2018-12-31 00:00:00', 'demo', 'ci developer', '2018-12-11 05:35:56'),
(11, 69, '2018-12-01 00:00:00', '2018-12-04 00:00:00', 'united', 'php', '2018-12-11 06:03:03'),
(12, 58, '2018-12-01 00:00:00', '2018-12-06 00:00:00', 'rdm', 'php developer', '2018-12-11 06:31:15'),
(13, 70, '2018-12-01 00:00:00', '2018-12-11 00:00:00', 'rdm', 'php developer', '2018-12-11 07:41:18'),
(14, 85, '2018-01-01 00:00:00', '2019-01-31 00:00:00', 'xyz', 'web developer', '2019-01-02 04:57:57'),
(15, 84, '2018-01-01 00:00:00', '2019-01-09 00:00:00', 'xyz', 'php developer', '2019-01-02 05:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `user_id`, `experience`, `created_at`) VALUES
(1, 1, 'More than 8 year', '2018-10-29 05:59:16'),
(2, 1, '5 to 8 year', '2018-10-29 05:59:32'),
(3, 1, '1 to 8 year', '2018-12-01 08:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `expertise_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id`, `user_id`, `expertise_name`, `created_at`) VALUES
(1, 1, 'Brand Designer', '2018-11-01 10:56:24'),
(2, 1, 'Art Director', '2018-11-01 10:56:35'),
(3, 1, 'Creative Direct', '2018-11-01 10:56:51'),
(4, 1, 'Packaging Des', '2018-11-01 10:57:05'),
(5, 1, 'Blog & Article', '2018-11-01 10:57:15'),
(6, 1, 'Journalist', '2018-11-01 10:57:23'),
(7, 1, 'PowerPoint Prese', '2018-11-01 10:57:33'),
(10, 41, 'php ci', '2018-11-29 10:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'company', 'Company User'),
(3, 'team', 'Team User');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `industries_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `user_id`, `industries_name`, `created_at`) VALUES
(3, 3, 'Technology', '2018-11-03 14:31:49'),
(4, 3, 'Accounting', '2018-11-03 14:31:58'),
(5, 3, 'Advertising', '2018-11-03 14:32:06'),
(6, 3, 'Automotive', '2018-11-03 14:32:15'),
(7, 3, 'Computer', '2018-11-03 14:32:26'),
(8, 3, 'Consulting', '2018-11-03 14:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `languages_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `languages_name`, `created_at`) VALUES
(2, 3, 'Russian', '2018-11-03 10:18:24'),
(3, 3, 'French', '2018-11-03 10:19:18'),
(4, 3, 'Portuguese', '2018-11-03 10:19:26'),
(7, 41, 'ddddd', '2018-11-24 06:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'pushpendrakumar044@gmail.com', 1556255844),
(2, '::1', 'upen', 1559127549);

-- --------------------------------------------------------

--
-- Table structure for table `login_time`
--

CREATE TABLE `login_time` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logout_time`
--

CREATE TABLE `logout_time` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `logout_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_detail` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_detail`, `category_id`, `news_image`, `user_id`, `created_at`) VALUES
(7, 'TransparentBusiness in the Wall Street Journaxxxxxxxxxxx', 'Venture capital investment in US companies to hit $100B in 2018, according to the today&rsquo;s report in TechCrunch. To make sure that we take full advantage of this favorable investment market, we started reaching investors via the Wall Street Journal. &nbsp;', 1, '09aad0c613db997adcdbca4b253c4307.jpg', 1, '2018-10-16 11:25:28'),
(8, 'test', 'Venture capital investment in US companies to hit $100B in 2018, according to the today&rsquo;s report in TechCrunch. To make sure that we take full advantage of this favorable investment market, we started reaching investors via the Wall Street Journal. &nbsp;', 2, '798683f86cd5bdf887c5d8ef9a9b0a9f.jpg', 1, '2018-11-23 12:34:10'),
(9, 'tech news', 'tech news details', 4, '5d20ba2f75f34be217cd33b442873036.jpg', 1, '2019-04-03 06:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `user_id`, `name`, `image`, `created_at`) VALUES
(2, 3, 'Abhishek', 'ed2c414f131da4f02308832524f998ef.jpg', '2018-10-26 06:23:01'),
(5, 3, 'Abhishekdf', '91511e498c9d1efed1a1d7b108acfc47.jpg', '2018-11-13 06:49:38'),
(8, 3, 'Audrey', '4cfbc74654f84bf1d05b2a30bcfdc6f4.jpg', '2018-11-13 06:58:50'),
(9, 3, 'Audrey', '91035fe0b7d167d52ffd93af80937f76.jpg', '2018-11-13 07:00:05'),
(17, 1, 'adminn', '20d5c310ebfd033b06e1434ee62b4319.png', '2018-11-13 07:34:34'),
(23, 3, 'Audrey', 'ff68028cae2942a03b77c1a032091548.jpg', '2018-11-13 08:05:39'),
(24, 3, 'imteyaj Ali', '4ac796f5c6cf225c27e6e187c773b744.jpg', '2018-11-13 08:05:58'),
(25, 3, 'Audrey', 'fe8592193dd7b9c3e272044f07e8fd9f.jpg', '2018-11-13 08:45:14'),
(27, 3, 'Aud', '4bbb5872f3ef78f766ec5e2bb769c371.jpg', '2018-11-13 09:21:20'),
(28, 11, 'Audrey', 'ab4c8eae65938046131e7e1b5bcb0a28.png', '2018-11-14 11:08:20'),
(30, 38, 'Audrey Lazar', '3e88c689f3ba432cb2906148c417535c.png', '2018-11-15 09:01:02'),
(32, 35, 'Second', 'f8cb9f4f4138c51684f5ba8dae19a837.png', '2018-11-22 06:09:55'),
(33, 35, 'Lazar Audrey', '7b555e2f5c9aacb8961ba585291d0472.png', '2018-11-22 06:10:04'),
(34, 35, 'Lisa Taylor', '3f9cd8bb037a5d9bdfa3d89342bf20dd.jpg', '2018-11-22 06:10:13'),
(38, 1, 'admin2222', '14b0f9f0c259ec43b105f9a38d862a58.png', '2018-11-22 07:55:34'),
(39, 1, 'admin two', 'afe1eccaea418b39bb8b3420574f2ebf.png', '2018-11-22 07:56:23'),
(40, 35, 'first pa', 'd7cd7e8f0e2caef643a4b60c2e8007b0.jpg', '2018-11-23 10:26:26'),
(41, 35, 'first pagegg', '19366f14402d0705e658898e5e35ca73.jpg', '2018-11-23 10:26:44'),
(42, 35, 'first pa', '7a750152aaf5639df6ef17b80eadbb94.jpg', '2018-11-23 10:27:13'),
(44, 36, 'first', '02eac53c15991277cdd0a7749fd14e9f.jpg', '2018-11-23 10:36:40'),
(45, 36, 'AAAA', '20d101deeb8f74a9dd7bea3349c54515.jpg', '2018-11-23 10:36:59'),
(47, 36, 'llll', '652342421d053a383b986108fc254f2e.jpg', '2018-11-23 10:37:57'),
(48, 42, 'first', '7a2fc83776be2915f49622543843ea76.jpg', '2018-11-23 11:22:02'),
(49, 42, 'second', 'ea3fb6733a235ac00f69d9c2c96bfbbc.png', '2018-11-23 12:24:31'),
(50, 42, 'third', 'cada44b8f48fb1395cec8de2f8c052fb.png', '2018-11-24 07:13:14'),
(51, 42, 'fourth', '95d8c63e3f8f582939d5d3f2b25fc889.png', '2018-11-24 07:13:27'),
(52, 42, 'fifth', '005dbf1797f91a761b4c9b2e117850e1.jpg', '2018-11-24 07:13:41'),
(53, 1, 'hkfbjnk', '74014ee8fc9793d3da04591942a57a01.jpg', '2018-12-03 07:26:53'),
(54, 1, 'fgjhklhk', 'c6c66768927042fdb16028b388c8b1ac.png', '2018-12-03 07:27:15'),
(55, 46, 'iimage', '7218c79e924da8f798697077caf7737c.jpg', '2018-12-04 06:46:58'),
(56, 46, 'iamge2', '389a468dfc43d8b3056a4987f360fbf1.jpg', '2018-12-04 06:47:26'),
(57, 46, 'aaaa', '2a6887368934f8cf522b181988614723.jpg', '2018-12-05 06:19:23'),
(58, 46, 'aaaaaa', '7156c23859069d4d1dd10ad919d79e8e.jpg', '2018-12-05 06:19:34'),
(59, 46, 'ssssssss', 'ed7fc7977db71b572559efc32f682db8.png', '2018-12-05 06:19:42'),
(60, 46, 'jjjjjjjjjj', '5d778b2f8d760a8a81177f9f1331c49e.jpg', '2018-12-05 06:43:12'),
(61, 46, 'jjjjj', 'ea2b6f8cb38304d47af25005696cd6e2.jpg', '2018-12-05 06:55:56'),
(62, 63, 'image', '67b55d52b8b475200651c5c86ecad5a5.jpg', '2018-12-11 05:33:34'),
(63, 58, 'image', 'e1a2ce0840a426c0d0b676ec95feb1d3.jpg', '2018-12-11 06:30:32'),
(64, 58, 'image2', '0f9da3fee4d5d3942956e43c59b4e6d3.png', '2018-12-11 06:30:44'),
(65, 58, 'image3', '96b1aa09f870c391081a4a18c93c06bf.png', '2018-12-11 06:30:56'),
(66, 63, 'image2', 'b2e434b36ee2ab91f3b5aca9e5acbf37.png', '2018-12-11 06:38:30'),
(67, 63, 'image3', '9dfe8debaf6f0b560ec68e0f46a19627.jpg', '2018-12-11 06:38:41'),
(68, 63, 'image4', '44f82c372305c13aed696deb254dd97f.png', '2018-12-11 06:38:52'),
(69, 70, 'image', '0aae00f614bfb75a8d2508253b093d78.jpg', '2018-12-11 07:40:34'),
(70, 70, 'iamge1', 'e0374a3c92884ab13099b02db0645cc7.png', '2018-12-11 07:40:45'),
(71, 70, 'image', '6876d1b97d17a0913f600b914293ce63.png', '2018-12-11 07:40:55'),
(72, 70, 'image3', '47f5ac3696223dc5d6cebc3885f13d65.png', '2018-12-11 07:41:04'),
(73, 86, 'image', 'edfe0a8bfef096f6a4c30a441a143c53.jpg', '2019-01-02 04:50:53'),
(74, 86, 'image1', 'b5e41182ddceac03ad0226ecb9927585.png', '2019-01-02 04:51:05'),
(75, 86, 'image2', '1af25e9f8b3b6e5f562fc09d0e02fd71.png', '2019-01-02 04:51:15'),
(76, 85, 'image', '1088209064f38c1551a1c773112928e1.jpg', '2019-01-02 04:53:53'),
(77, 85, 'image1', '5834c5cbf34c4428e4dfe57e51a97dd3.png', '2019-01-02 04:54:10'),
(78, 85, 'image2', 'db11c0f9b4b0ac195f8be1539d27a41f.png', '2019-01-02 04:54:20'),
(79, 84, 'image', 'bd9d59456020aa41dc4d88500ff44d63.jpg', '2019-01-02 05:01:01'),
(80, 84, 'image1', '260c7bdd6da096c25f98b309742ad9de.png', '2019-01-02 05:01:12'),
(81, 84, 'image2', '681112932d6815dc948847ddfdab8a8d.png', '2019-01-02 05:01:24'),
(82, 84, 'ggg', '64da46833658a12ed909e2c7eea97df1.jpg', '2019-02-05 06:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `priority_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `user_id`, `priority_name`, `created_at`) VALUES
(1, 35, 'High', '2018-11-20 09:05:49'),
(2, 35, 'Medium', '2018-11-20 09:08:17'),
(3, 35, 'Regular', '2018-11-20 09:08:31'),
(7, 41, 'urgent', '2018-11-29 09:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `clients_id` int(11) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `internal_cost` varchar(255) NOT NULL,
  `external_cost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `user_id`, `project_name`, `start_date`, `due_date`, `status_id`, `priority_id`, `clients_id`, `project_image`, `internal_cost`, `external_cost`, `created_at`) VALUES
(1, 75, 'demo project', '2018-12-23 18:30:00', '2018-12-23 18:30:00', 2, 3, 4, '8c4f6e07328b5515f5ac3abc3375daff.jpg', '77', '44', '2018-12-24 04:58:18'),
(2, 75, 'demo two', '2018-12-23 18:30:00', '2018-12-23 18:30:00', 3, 2, 6, 'cd13ca78c052cb34c317106774f52718.png', '77', '44', '2018-12-24 04:58:47'),
(3, 75, 'demo three', '2018-12-23 18:30:00', '2018-12-23 18:30:00', 2, 1, 3, '4e4a706e6674f62b0767e616071e7877.png', '146', '33', '2018-12-24 04:59:16'),
(4, 75, 'demo three1', '2018-12-23 18:30:00', '2018-12-23 18:30:00', 1, 3, 2, '7739c8e4451d60cfa9d47d5b1343ff3b.png', '44', '44', '2018-12-24 05:02:18'),
(7, 78, 'YUM Website Launch', '2017-12-24 18:30:00', '2019-12-24 18:30:00', 2, 1, 10, '78d9e16e0f36493b393b5ded28ec9a1c.png', '77', '44', '2018-12-25 07:02:55'),
(8, 78, 'e-Newsletter', '2017-12-24 18:30:00', '2019-12-24 18:30:00', 2, 3, 10, '7f4c26378c705cef5a7c90814a5b4a95.png', '77', '44', '2018-12-25 07:08:55'),
(9, 78, 'MMMS Website Design', '2016-12-24 18:30:00', '2018-12-24 18:30:00', 3, 3, 10, 'da9ba9995a600469eb86535947118b96.png', '44', '44', '2018-12-25 07:11:35'),
(10, 78, 'Promo WebSite 2016', '2018-12-03 18:30:00', '2018-12-28 18:30:00', 2, 1, 10, '1e9a4558658afb1c2450e7956110615b.png', '77', '44', '2018-12-25 08:45:29'),
(11, 78, 'Support and Improvements', '2018-12-26 18:30:00', '2018-12-26 18:30:00', 1, 2, 13, '20cdb7bdf351c8085e418f6af7df1afb.png', '344434', '3343434', '2018-12-27 06:24:49'),
(12, 78, 'thfghfghfghgh', '2018-12-26 18:30:00', '2018-12-26 18:30:00', 2, 2, 13, 'a91bbe174b844f623814b18804000f08.png', '63363', '3536363', '2018-12-27 06:44:55'),
(13, 83, 'Support and Improvements3', '2018-12-26 18:30:00', '2018-12-26 18:30:00', 2, 3, 15, '740518669816ceadc11d52176ed77613.jpg', '146', '246', '2018-12-27 07:19:37'),
(14, 83, 'demo', '2018-12-26 18:30:00', '2018-12-26 18:30:00', 3, 2, 15, '7aaefd20121286e69ce7b96d723d7ed3.jpg', '77', '44', '2018-12-27 08:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `project_team`
--

CREATE TABLE `project_team` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reach_us`
--

CREATE TABLE `reach_us` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `linkdien` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reach_us`
--

INSERT INTO `reach_us` (`id`, `user_id`, `mail`, `skype`, `linkdien`, `phone`, `created_at`) VALUES
(13, 42, 'https://www.gmail.com', 'https://www.skype.com', '', 'tel:1 (+91) 9999571214', '2018-11-26 11:37:30'),
(14, 42, 'https://www.gmail.com', 'https://www.skype.com', '', 'tel:1 (+91) 9999571214', '2018-11-26 11:37:47'),
(15, 42, 'https://www.gmail.com', 'https://www.skype.com', '', 'tel:1 (+91) 9999571214', '2018-11-26 11:38:06'),
(16, 42, 'https://www.gmail.com', 'https://www.skype.com', '', 'tel:1 (+91) 9999571214', '2018-11-26 11:38:27'),
(17, 42, 'https://www.gmail.com', 'https://www.skype.com', '', 'tel:1 (+91) 9999571214', '2018-11-26 11:46:53'),
(18, 1, 'https://www.gmail.com', 'https://www.skype.com', 'https://in.linkedin.com/', '88888888888', '2018-11-30 04:49:39'),
(19, 44, 'https://accounts.google.com/', 'dddddd', '', 'dddddd', '2018-11-30 07:32:57'),
(21, 46, 'https://www.gmail.com', 'https://www.skype.com', 'https://www.linkdien.com', 'tel:888888888888', '2018-12-04 05:47:30'),
(22, 58, 'https://www.facebook.com', 'https://www.facebook.com', 'https://www.facebook.com', '333333333', '2018-12-11 06:29:32'),
(23, 81, 'https://accounts.google.com/', 'https://google.com/', 'https://google.com/', '9839060665', '2018-12-26 07:48:03'),
(24, 82, 'https://accounts.google.com/signin', 'https://accounts.google.com/signin', 'https://accounts.google.com/signin', '44444444444', '2018-12-26 07:50:33'),
(25, 86, 'https://www.aaa.com/', 'https://www.skype.com/', 'https://www.linkedin.com/', '8888888888', '2018-12-27 09:00:41'),
(26, 85, 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', '9839060665`', '2018-12-27 09:02:19'),
(27, 84, 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', '9839060665', '2018-12-27 09:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skills_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skills_name`, `created_at`) VALUES
(6, 3, 'Adobe Lightroom', '2018-10-25 07:59:53'),
(7, 3, 'Dreamweaver', '2018-10-25 08:00:03'),
(8, 3, 'Graphic Design', '2018-10-25 08:00:14'),
(9, 41, 'skills', '2018-11-24 05:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `user_id`, `facebook`, `twitter`, `youtube`, `created_at`) VALUES
(1, 37, 'dd', 'dd', 'dd', '2018-11-16 12:54:01'),
(2, 1, 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', '2018-11-17 11:13:45'),
(3, 35, 'facebook', 'tiwweete', 'youy', '2018-11-23 04:54:08'),
(4, 36, 'facebook.com', 'twitter.com', 'youtube.com', '2018-11-23 09:21:29'),
(5, 42, 'https://www.facebook.com/abhissona', 'https://www.twitter.com', 'https://www.youtube.com', '2018-11-23 11:15:34'),
(6, 44, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.youtube.com', '2018-11-26 08:36:48'),
(7, 46, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.youtube.com', '2018-12-04 09:58:32'),
(8, 58, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.youtube.com', '2018-12-11 06:27:43'),
(9, 81, 'https://www.facebook.com', 'https://accounts.google.com/', 'https://google.com/', '2018-12-26 07:47:21'),
(10, 82, 'https://accounts.google.com/signin', 'https://accounts.google.com/signin', 'https://accounts.google.com/signin', '2018-12-26 07:50:21'),
(11, 85, 'https://www.facebok.com/', 'https://www.twitter.com/', 'https://www.youtube.com/', '2019-01-02 04:52:52'),
(12, 84, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.youtube.com/', '2019-01-02 05:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `user_id`, `status`, `created_at`) VALUES
(1, 35, 'Complete', '2018-11-20 10:17:14'),
(2, 35, 'progress', '2018-11-20 10:45:21'),
(3, 35, 'Pending', '2018-11-21 06:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `team_id` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_details` text NOT NULL,
  `start_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `user_id`, `project_id`, `priority_id`, `status_id`, `team_id`, `task_name`, `task_details`, `start_date`, `due_date`, `created_at`) VALUES
(1, 75, 4, 0, 0, '77,78,79', 'demo task', 'demo taskt description', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-24 05:03:11'),
(2, 75, 1, 0, 0, '77,78,79', 'demo project task', 'demo task description', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-24 05:19:05'),
(3, 75, 2, 0, 0, '78', 'dummy task', 'dummy task details', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-24 05:23:23'),
(4, 75, 4, 0, 0, '77,78,79', 'task demo', 'demo description', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-24 05:46:21'),
(5, 75, 3, 0, 0, '77,78', 'project three for task', 'ytask details for project', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-24 07:18:17'),
(6, 78, 6, 0, 0, '80,81', 'Bug fixing', 'description for sepient task', '2016-12-25 00:00:00', '2019-12-25 00:00:00', '2018-12-24 09:38:45'),
(7, 78, 5, 0, 0, '80', 'task', 'project three for task', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-25 06:33:22'),
(8, 78, 5, 0, 0, '80,81,82', 'SEO (ad quality optimization)', 'SEO (ad quality optimization)&nbsp;details', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-25 06:58:09'),
(9, 78, 5, 0, 0, '80,81,82', 'Develop campaign strategy', 'Develop campaign strategy&nbsp;details', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-25 06:58:59'),
(10, 78, 9, 0, 0, '81', 'Design layout, create conten', 'Design layout, create content, and source sample photos for the Multi-Mode Modeling Service', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-25 07:12:49'),
(11, 78, 7, 0, 0, '81', 'Translate Transaction', 'Translate Transaction details', '2018-12-25 13:07:30', '2018-12-25 13:07:30', '2018-12-25 07:23:21'),
(12, 78, 9, 0, 0, '81', 'ddfdfdd', 'sdsssss', '2017-12-25 00:00:00', '2019-01-24 00:00:00', '2018-12-25 07:41:36'),
(13, 78, 6, 0, 0, '80', 'code testing', 'testing the all code then fix the issues', '2017-12-10 00:00:00', '2019-12-29 00:00:00', '2018-12-25 08:40:07'),
(14, 78, 10, 0, 0, '78,79,81', 'ddfdfdfdrer', 'ererere', '2018-12-25 00:00:00', '2018-12-25 00:00:00', '2018-12-25 08:45:42'),
(15, 83, 13, 0, 0, '84,85', 'project three for taskd', 'project three for task', '2012-12-27 00:00:00', '2022-12-27 00:00:00', '2018-12-27 07:23:56'),
(19, 83, 13, 1, 1, '84,85,86', 'Support and Improvements task', 'Support and Improvements task details', '2018-12-04 00:00:00', '2018-12-31 00:00:00', '2018-12-31 11:38:30'),
(20, 83, 13, 2, 2, '84,85,86', 'project three for task1', 'project three for task', '2019-01-03 00:00:00', '2019-01-03 00:00:00', '2019-01-03 05:17:00'),
(21, 83, 14, 2, 2, '85', 'Abhi demo task', 'Abhi demo task', '2019-01-01 00:00:00', '2020-01-03 00:00:00', '2019-01-03 05:26:34'),
(22, 83, 14, 2, 2, '84,85,86', 'Bug fixing1', '&nbsp;Bug fixing1', '2019-01-03 00:00:00', '2019-01-03 00:00:00', '2019-01-03 05:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `task_team`
--

CREATE TABLE `task_team` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_team`
--

INSERT INTO `task_team` (`id`, `task_id`, `team_id`, `created_at`) VALUES
(15, 3, 78, '2018-12-24 05:23:23'),
(16, 1, 77, '2018-12-24 05:45:02'),
(17, 1, 78, '2018-12-24 05:45:02'),
(18, 1, 79, '2018-12-24 05:45:02'),
(19, 4, 77, '2018-12-24 05:46:21'),
(20, 4, 78, '2018-12-24 05:46:21'),
(21, 4, 79, '2018-12-24 05:46:21'),
(33, 5, 77, '2018-12-24 10:16:07'),
(34, 5, 78, '2018-12-24 10:16:07'),
(38, 2, 77, '2018-12-24 10:18:07'),
(39, 2, 78, '2018-12-24 10:18:07'),
(40, 2, 79, '2018-12-24 10:18:07'),
(46, 8, 80, '2018-12-25 06:58:09'),
(47, 8, 81, '2018-12-25 06:58:09'),
(48, 8, 82, '2018-12-25 06:58:10'),
(49, 9, 80, '2018-12-25 06:59:00'),
(50, 9, 81, '2018-12-25 06:59:00'),
(51, 9, 82, '2018-12-25 06:59:00'),
(52, 7, 80, '2018-12-25 07:00:39'),
(53, 10, 81, '2018-12-25 07:12:49'),
(54, 11, 81, '2018-12-25 07:23:21'),
(57, 12, 81, '2018-12-25 07:54:13'),
(58, 6, 80, '2018-12-25 08:38:49'),
(59, 6, 81, '2018-12-25 08:38:49'),
(60, 13, 80, '2018-12-25 08:40:08'),
(69, 17, 85, '2018-12-27 08:52:08'),
(70, 16, 84, '2018-12-28 09:46:14'),
(71, 15, 84, '2018-12-28 09:46:57'),
(72, 15, 85, '2018-12-28 09:46:57'),
(81, 18, 85, '2018-12-31 11:44:22'),
(86, 21, 85, '2019-01-03 05:26:34'),
(87, 22, 84, '2019-01-03 05:27:43'),
(88, 22, 85, '2019-01-03 05:27:43'),
(89, 22, 86, '2019-01-03 05:27:43'),
(90, 20, 84, '2019-01-03 05:35:58'),
(91, 20, 85, '2019-01-03 05:35:58'),
(92, 20, 86, '2019-01-03 05:35:58'),
(93, 19, 84, '2019-01-03 05:36:45'),
(94, 19, 85, '2019-01-03 05:36:45'),
(95, 19, 86, '2019-01-03 05:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `details`, `image`, `user_id`, `created_at`) VALUES
(8, 'teeam two hhgh', 'two designation', 'Just six weeks remain until the Thanksgiving week and the beginning of the end-of-the-year holiday season; so we are taking steps to accelerate our fundraising.', 'e62da7c1f3d59a6c42f02ed6258594fd.jpg', 1, '2018-10-12 11:19:22'),
(9, 'team three', 'three designation', 'Just six weeks remain until the Thanksgiving week and the beginning of the end-of-the-year holiday season; so we are taking steps to accelerate our fundraising.', '897213f96b0080d4e2b578227bd9bdf9.jpg', 1, '2018-10-12 11:19:44'),
(10, 'abhishek mishraaa', 'developer', 'beginning of the end-of-the-year holiday season; so we are taking steps to accelerate our fundraising.', '22eaac1f4da682c3d4fa1c2934804ed1.jpg', 3, '2018-10-15 18:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `team_role`
--

CREATE TABLE `team_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_role`
--

INSERT INTO `team_role` (`id`, `user_id`, `role_name`, `created_at`) VALUES
(1, 1, 'Web designer', '2018-11-19 05:32:41'),
(2, 1, 'software eng', '2018-11-19 05:34:05'),
(3, 1, 'App developer', '2018-11-19 07:42:48'),
(6, 35, 'contractor', '2018-11-20 11:00:03'),
(7, 35, 'DEVELOPER', '2018-11-21 06:17:24'),
(8, 35, 'content writer', '2018-11-21 06:17:32'),
(11, 41, 'Graphics', '2018-11-29 09:12:37'),
(12, 78, 'sap developer', '2018-12-24 09:26:07'),
(13, 75, 'sap', '2018-12-27 07:01:55'),
(14, 83, 'php developer', '2018-12-27 07:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `language_id` varchar(255) NOT NULL,
  `experience_id` int(11) NOT NULL,
  `expertise_id` varchar(11) NOT NULL,
  `skills_id` varchar(255) NOT NULL,
  `industries_id` varchar(255) NOT NULL,
  `team_role_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `about_us` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `ip_address`, `language_id`, `experience_id`, `expertise_id`, `skills_id`, `industries_id`, `team_role_id`, `project_id`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `about_us`, `designation`, `language`, `image`, `gender`, `dob`, `country`, `city`, `login_time`, `logout_time`) VALUES
(1, 0, '127.0.0.1', '3', 1, '2', '6', '1,3,4,5,6,9', 2, 0, 'administrator', '$2y$08$fJcSs0h8gIVcwwWX/q8FfujxnUHG6EqTh4Lu5gWagiAzqLg0vrCma', '', 'admin@admin.com', '', 't.jSrHeQ0oo5plFTZBNESO16497efb6220d09649', 1547895279, 'DmNWeNwkfLeTHbz/LvKTFu', 1268889823, 1554272186, 1, 'admin', 'admin', 'admin', '22222222', 'UI/UX, advertising and direct mail marketing. My diverse interests and creative focus allow me to be problem solver, whether it&amp;amp;amp;amp;rsquo;s working with an established brand, evolving a brand in transition or the creation of a new brand/identity package. I consider myself an excellent collaborator and am completely comfortable with clients as well as fellow creatives. My many years of experience allow me to bring a focused yet fresh perspective to any design team or creative environment. Most recently I was the Associate Vice President / Director of Creative Services for Modell&amp;amp;amp;amp;rsquo;s Sporting Goods retail chain, where I oversaw all print, advertising (print, web and digital), direct mail, OOH, POP and e-comm for Modell&amp;amp;amp;amp;rsquo;s in house Marketing Department. Prior to Modell&amp;amp;amp;amp;rsquo;s, I freelanced as a CPG graphic designer for the branding firm CBX and a partner in the &amp;amp;amp;amp;ldquo;small but mighty&amp;amp;amp;amp;rdquo; Lost In Brooklyn Studio. Before LIB, I was a creative director for the sports marketing firm SME&amp;amp;amp;amp;ndash;Power Branding, a senior designer at The National Hockey League, a designer for The Limited Corporation and production designer for The National Football League.', 'Software engineer', 'Fluent', '82604691577fd41b9bf9633ff5910dc8.png', 'Male', '1990-02-04', 'India', 'New Delhi', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(75, 0, '::1', '', 0, '', '', '', 0, 0, 'demo@gmail.com', '$2y$08$otIJiUwZnXAcry5nWC8Jl.ZSqBRraRegpbYHM2iRnQmBhiimvH3Oy', NULL, 'demo@gmail.com', NULL, NULL, NULL, NULL, 1545627013, 1553767021, 1, NULL, NULL, 'demo abhishek', '9839060665', 'sdsdsd', '', '', '2d84fc52a8e6c0e8a109e805f2972ee7.png', '', '0000-00-00', 'dsdsds', 'sddsds', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(77, 75, '::1', '', 0, '', '', '', 13, 2, 'demo_abhishek@gmail.com', '$2y$08$lFIhXHkYpk7Tdtd54JOgx.GN79P.c1fInyb82qmUguP4bFz4KJCQG', NULL, 'demo_abhishek@gmail.com', NULL, NULL, NULL, NULL, 1545627699, 1545727714, 1, 'demo team', 'team', 'demo abhishek', '9839060665', '', '', '', '', '', '0000-00-00', '', '', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(79, 75, '::1', '', 0, '', '', '', 11, 4, 'demothree@gmail.com', '$2y$08$Z/CgHDVlb6Pk3UNyerczveKF/BjojTcDFt8rhUUOkbjteupVQynZG', NULL, 'demothree@gmail.com', NULL, NULL, NULL, NULL, 1545628473, 1545894346, 1, 'demo team three', 'team', 'rdm', '9839060665', '', '', '', '1fce1122d66b026508b0a7f9024908ac.jpg', '', '0000-00-00', '', '', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(83, 0, '::1', '', 0, '', '', '', 0, 0, 'abhishekcs401@gmail.com', '$2y$08$ymvVJrsmK4MolB3FSl8I5u5SsnpVLEVxMyU6/4LT.BaHG/XBxDl9K', NULL, 'abhishekcs401@gmail.com', NULL, 'KZ416oCNewv/wX3TQpS7NO1fdfc17d9f38a55d6f', 1547886756, NULL, 1545894494, 1554292872, 1, NULL, NULL, 'abhishek', '9839060665', 'hello', '', '', '8ee0778c1a44d00c13e515a499cf812b.jpg', '', '0000-00-00', 'india', 'alllahabad', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(84, 83, '::1', '2,3,4', 1, '1,2,3,4', '6,7,8', '3,4,5,6', 12, 13, 'abhi@gmail.com', '$2y$08$2sMj/377LkssCG4tfGG/oO37ehYcwrAUAqZI/NTV3HSS0O9HERVnO', NULL, 'abhi@gmail.com', NULL, NULL, NULL, NULL, 1545895265, 1549347695, 1, 'team dremo abhishejk', 'mishra', NULL, '9839060665', '', '', 'Conversational', 'c0752f4547fa61d30c178b91c5ce7a10.jpg', 'Male', '1990-01-01', 'India', 'New  Delhi', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(85, 83, '::1', '2,3,4', 2, '1,2,3,4', '6,7,8', '3,4,5,6', 6, 14, 'abhii@gmail.com', '$2y$08$lwRzhAEecqVpD0vS4OpFC.444Cou7MuGMkjldAzYDgdlOz09bG3Xy', NULL, 'abhii@gmail.com', NULL, NULL, NULL, NULL, 1545895317, 1553768918, 1, 'abhi demo 1', 'mishra', '', '9839060665', '', '', 'Conversational', 'f9ff2886b8ea96ab112aceaa9448f256.png', 'Male', '1991-01-01', 'india', 'Allahabad', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(86, 83, '::1', '2,3,4', 2, '1,2,3,4,5', '7,8', '3,4,5,6', 6, 13, 'abhiii@gmail.com', '$2y$08$3GHLmeODTbLpq.i19gVspeIYaP2DRZWvCBrUNFLK5wLcXz46rOdi.', NULL, 'abhiii@gmail.com', NULL, NULL, NULL, NULL, 1545895352, 1546663779, 1, 'abhiii', 'mishar', NULL, '9839060665', '', '', 'Basic', '105295236b0a46132b71d6a416632156.jpg', 'Male', '1990-01-01', 'India', 'kolkata', '2019-01-04 07:49:17', '2019-01-04 07:49:17'),
(87, 0, '::1', '', 0, '', '', '', 0, 0, 'ramu@gmail.com', '$2y$08$FpoJgvEqRX5aRoV2U3EgrOW9Ecz634uRFixSO/gsor7rW2CBnDvR2', NULL, 'ramu@gmail.com', NULL, NULL, NULL, NULL, 1556255813, NULL, 1, 'pushpendra', 'kumar', 'rdm', '7906370771', 'hmgfdg', '', '', '', '', '0000-00-00', '', '', '2019-04-26 05:16:53', '2019-04-26 05:16:53'),
(88, 0, '::1', '', 0, '', '', '', 0, 0, 'pushpendrakumar@gmail.com', '$2y$08$k7vZyNCt.PuppekTeH6xBuAdRgl8VfGWtq6CKjO5UozciCh.RRSxq', NULL, 'pushpendrakumar@gmail.com', NULL, NULL, NULL, NULL, 1558939877, NULL, 1, 'pushpendra', 'kumar', 'rdm', '7906370771', 'hmgfdg', '', '', '', '', '0000-00-00', '', '', '2019-05-27 06:51:17', '2019-05-27 06:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(145, 1, 1),
(179, 75, 2),
(196, 77, 3),
(183, 79, 3),
(190, 83, 2),
(191, 84, 3),
(192, 85, 3),
(193, 86, 3),
(197, 87, 2),
(198, 88, 2);

-- --------------------------------------------------------

--
-- Table structure for table `video_webpage`
--

CREATE TABLE `video_webpage` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `webpage` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_webpage`
--

INSERT INTO `video_webpage` (`id`, `user_id`, `video`, `webpage`, `created_at`) VALUES
(1, 1, 'https://www.youtugggbe.com/', 'www.google.comrrr', '2018-11-03 05:39:10'),
(2, 7, 'Abhishek', 'Mishra', '2018-11-03 05:50:17'),
(3, 3, 'https://www.youtube.com/aa', 'www.google.com///hh', '2018-11-03 07:47:56'),
(4, 35, 'https://www.youtube.com/', 'www.google.com///hh', '2018-11-22 12:03:37'),
(5, 36, 'Abhishek', 'www.google.com', '2018-11-23 09:09:39'),
(6, 42, 'xyz.com', 'xyz.com', '2018-11-23 11:12:28'),
(7, 44, 'xyz.com', 'xsyz.com', '2018-11-26 05:47:11'),
(8, 46, 'https://youtube.com', 'https://google.com', '2018-11-30 12:05:38'),
(9, 58, 'https://www.youtube.com/', 'https://www.google.com/', '2018-12-11 06:24:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_history`
--
ALTER TABLE `employment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_time`
--
ALTER TABLE `login_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logout_time`
--
ALTER TABLE `logout_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_team`
--
ALTER TABLE `project_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reach_us`
--
ALTER TABLE `reach_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_team`
--
ALTER TABLE `task_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_role`
--
ALTER TABLE `team_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `video_webpage`
--
ALTER TABLE `video_webpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employment_history`
--
ALTER TABLE `employment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_time`
--
ALTER TABLE `login_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logout_time`
--
ALTER TABLE `logout_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_team`
--
ALTER TABLE `project_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reach_us`
--
ALTER TABLE `reach_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `task_team`
--
ALTER TABLE `task_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team_role`
--
ALTER TABLE `team_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `video_webpage`
--
ALTER TABLE `video_webpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

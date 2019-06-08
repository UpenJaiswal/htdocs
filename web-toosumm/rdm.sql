-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 09:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdm`
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
(6, 'AATransparency and Inclusion, the driving concepts of Americas CEOs Summit in Peru', 'That&rsquo;s a wrap! Every three years, the most influential business forum of the America, brings together top CEOs, Heads of State, and over a thousand business executives for strategic discussions of issues related to economic growth and development; and the VIII Summit of the Americas (Lima, Peru, April 2018) did not disappoint. Opening remarks were delivered by Martin Vizcarra, President of Peru; followed by Luis Alberto Moreno, President of Inter-American Development Bank (IBD). Also in attendance the heads of state of Argentina, Bahamas, Bolivia, Canada, Chile, Colombia, the Dominican Republic, Ecuador, Honduras, Mexico, and Panama. A remarkable group of CEOs of leading companies participated as panelists and speakers at the event and, refreshingly, 45% of the panelists were women.\r\n\r\nIt was very exciting for me not only to represent women entrepreneurs, but to have the opportunity to lead a discussion about &ldquo;Exponential Disruption of the Digital Economy&rdquo; with a star panel of global leaders representing the most innovative companies including Ana Paula Assis, CEO for Latin America, IBM, Adriana Norena, Vice President for Spanish speaking LAC, Google, Cesar Cernuda, President for Latin America, Microsoft, Diego Dzodan, Vice President for Latin America, Facebook, Sean Summers, Vice President, Mercado Libre, Enrique Ortegon, COO and Senior Vice President, Latin America Salesforce and Brian Huseman, Vice President, Public Policy, Amazon.\r\n\r\n&nbsp;', 'ef21a15578bec383029b2d260d7037f1.jpg', 1, '2018-10-10 11:11:44'),
(7, 'Sales Channel Director SheWorks! &amp;amp;amp;amp; TransparentBusiness', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. &nbsp;', '3527763043b17b5e403130fd4d02053f.jpg', 1, '2018-10-11 07:22:54'),
(8, 'Silvina Moschini presents Panel Innovation Digital', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nDummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n&nbsp;', '8bb5517084900c768e8216c1094f5466.jpg', 1, '2018-10-11 07:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`) VALUES
(1, 'category one', '2018-10-14 18:31:52'),
(2, 'category two', '2018-10-14 18:32:01');

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
(2, 'members', 'General User'),
(3, 'example', 'trail');

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
(1, '127.0.0.1', 'admin', 1539541555);

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
(2, 'news admin', 'AAAA', 2, 'd8f1d4a80cda04055ca1502a1570e901.jpg', 1, '2018-10-14 18:33:43'),
(5, 'Abhisjek', 'Mishra', 2, '6b9755ab61d17a709c1c4969f9455846.jpg', 3, '2018-10-15 05:44:34'),
(6, 'Abhiskek two admin', 'data two', 1, '8e3da2ec1bc58440274f1cd79f973842.jpg', 3, '2018-10-15 06:27:30');

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
(8, 'teeam two', 'two designation', 'Just six weeks remain until the Thanksgiving week and the beginning of the end-of-the-year holiday season; so we are taking steps to accelerate our fundraising.', 'a43f52c980a1e291c23a158e43a46657.png', 1, '2018-10-12 11:19:22'),
(9, 'team three', 'three designation', 'Just six weeks remain until the Thanksgiving week and the beginning of the end-of-the-year holiday season; so we are taking steps to accelerate our fundraising.', '4556b42ab1441c3779ecefb7c28f69ef.png', 1, '2018-10-12 11:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
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
  `about_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `about_us`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1539587874, 1, 'Admin', 'istrator', 'ADMIN', '0', ''),
(3, '::1', 'abhishekcs401@gmail.com', '$2y$08$mqNDK15kCMZAPheZ5E25pOEUxeH0GDm8tDdtLxuHtDAw.buqkKMPy', NULL, 'abhishekcs401@gmail.com', NULL, '5OWu8vLOE5ogYn484WTi5O8c3dd26671d9302213', 1539422340, NULL, 1538990561, 1539585823, 1, 'abhishek', 'mishra', 'rdm', '9839060665', ''),
(4, '::1', 'abhi@gmail.com', '$2y$08$USAo66leqhRv/s9atZs8Oe5Y8eU7hbWON92f11ooyyRRABC/rGxQe', NULL, 'abhi@gmail.com', NULL, 'hjEmAycvXEgCL25wkF.9A.19f27ddb8cab8c73a2', 1539262192, NULL, 1538994529, 1538995066, 1, 'abhi', 'mishra', 'xyz', '9839060665', ''),
(5, '::1', 'ncsjch@gmail.com', '$2y$08$l9uE4sGFTP68JKZxk2gDJOlPIsQY5BpgZjeolC6hXVAfE2N0xh4dG', NULL, 'ncsjch@gmail.com', NULL, NULL, NULL, NULL, 1539063895, NULL, 1, 'suresh', 'kumar', 'xsgd', '88888888888888888', ''),
(6, '::1', 'dhj@gmail.com', '$2y$08$0VtEQjkouPAhMgv1QpcH4egAbeEsUog7yERNlychYG9.OvolMxXoy', NULL, 'dhj@gmail.com', NULL, NULL, NULL, NULL, 1539064436, NULL, 1, 'dhsjh', 'hfejf', 'djdfhfj', '44444444444', 'hgheeige'),
(7, '::1', 'ashisk@gmail.com', '$2y$08$5q8qI/fW/a2KqPEjBZGzqueQOyq1JjPTa1AGxR7der9LTlvZcTR8C', NULL, 'ashisk@gmail.com', NULL, NULL, NULL, NULL, 1539253980, 1539253991, 1, 'ashis kumar', 'kumar', 'jdbdjg', '7777777777', 'ashiskumar'),
(8, '::1', 'ramu@gmail.com', '$2y$08$LS4dGHnKrXx4yYRvHU4D.OYwyG.gcgqgtsbzCbiQeebIHkRuKK.da', NULL, 'ramu@gmail.com', NULL, NULL, NULL, NULL, 1539417589, NULL, 1, 'ramu', 'misjta', 'csjc', '1111111111', ''),
(9, '::1', 'abhijbvj@gmail.com', '$2y$08$mdaUv/BzSEdqBj/UoiF2yOmVWCozz3mDB8oC5yOv9D3Z.syu6jzLG', NULL, 'abhijbvj@gmail.com', NULL, NULL, NULL, NULL, 1539417651, NULL, 1, 'ramanand', 'hxsvxs', 'djb', '444444444444', ''),
(10, '::1', 'aaa@gmail.com', '$2y$08$ZN7XEfbcjNCO8HpC9/86YO1G2kQ5g9LpHr2Q1.1A.5xotW2.xwCea', NULL, 'aaa@gmail.com', '9cb0f7a8d2fe3ce7331f79953f640edf03d32e76', NULL, NULL, NULL, 1539422061, NULL, 0, 'aaaaadddccc', 'dddd', 'ddd', '444444444444444444', 'chdhd'),
(11, '::1', 'brij@gmail.com', '$2y$08$cP5gFzhCFnyRGG9MjH9Fb.3qMWBrwO6oiQHrX9A6nPxnF17HzVCXe', NULL, 'brij@gmail.com', NULL, NULL, NULL, NULL, 1539424240, NULL, 1, 'brijesh', 'aaaa', 'aaa', '1111111111111', ''),
(12, '::1', 'bt@gmail.com', '$2y$08$lvv00yD9jhW.jieGeBwoN.F3XINnWBUqEwU0QzAuc05hRQg85jyzy', NULL, 'bt@gmail.com', NULL, NULL, NULL, NULL, 1539424306, NULL, 1, 'brijesh', 'kcndkcd', 'nfben', '1111', ''),
(13, '::1', 'pkh@gmail.com', '$2y$08$fSlrzxvpPiCncKszp5exP.rcbmA58cy/J/J8A7aeqYmewmACD9fJ2', NULL, 'pkh@gmail.com', NULL, NULL, NULL, NULL, 1539424412, NULL, 1, 'pappu', 'bhgh', 'hjvhv', '1111111111111', ''),
(14, '::1', 'nfbk@gmail.com', '$2y$08$zaeX8fg.92k4MwqkDqkJ3O1g.mcMhiMmTZO8uMgRLhPhW6OGyuqWG', NULL, 'nfbk@gmail.com', NULL, NULL, NULL, NULL, 1539424523, NULL, 1, 'raarrrrr', 'jbjs', 'vbvj', '1111111111111', '');

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
(1, 1, 1),
(2, 1, 2),
(30, 3, 1),
(31, 3, 2),
(12, 4, 3),
(13, 5, 2),
(14, 6, 2),
(24, 7, 2),
(16, 8, 2),
(17, 9, 2),
(19, 10, 2),
(20, 11, 2),
(21, 12, 2),
(22, 13, 2),
(23, 14, 2);

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
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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

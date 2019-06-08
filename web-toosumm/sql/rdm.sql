-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 12:39 PM
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
(6, 'Transparency and Inclusion, the driving concepts of Americas CEOs Summit in Peru', '<p>That&rsquo;s a wrap! Every three years, the most influential business forum of the America, brings together top CEOs, Heads of State, and over a thousand business executives for strategic discussions of issues related to economic growth and development; and the VIII Summit of the Americas (Lima, Peru, April 2018) did not disappoint. Opening remarks were delivered by Martin Vizcarra, President of Peru; followed by Luis Alberto Moreno, President of Inter-American Development Bank (IBD). Also in attendance the heads of state of Argentina, Bahamas, Bolivia, Canada, Chile, Colombia, the Dominican Republic, Ecuador, Honduras, Mexico, and Panama. A remarkable group of CEOs of leading companies participated as panelists and speakers at the event and, refreshingly, 45% of the panelists were women.\r\n</p>\r\n<p>It was very exciting for me not only to represent women entrepreneurs, but to have the opportunity to lead a discussion about &ldquo;Exponential Disruption of the Digital Economy&rdquo; with a star panel of global leaders representing the most innovative companies including Ana Paula Assis, CEO for Latin America, IBM, Adriana Norena, Vice President for Spanish speaking LAC, Google, Cesar Cernuda, President for Latin America, Microsoft, Diego Dzodan, Vice President for Latin America, Facebook, Sean Summers, Vice President, Mercado Libre, Enrique Ortegon, COO and Senior Vice President, Latin America Salesforce and Brian Huseman, Vice President, Public Policy, Amazon.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'ef21a15578bec383029b2d260d7037f1.jpg', 1, '2018-10-10 11:11:44'),
(7, 'Sales Channel Director SheWorks! &amp;amp;amp; TransparentBusiness', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nDummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n&nbsp;', '3527763043b17b5e403130fd4d02053f.jpg', 1, '2018-10-11 07:22:54'),
(8, 'Silvina Moschini presents Panel Innovation Digital', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nDummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n&nbsp;', '8bb5517084900c768e8216c1094f5466.jpg', 1, '2018-10-11 07:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `parent_category_id`, `created_at`) VALUES
(1, 'first category', 0, '2018-10-10 07:43:00'),
(3, 'Second category1', 0, '2018-10-10 09:54:24');

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
(1, 'ashis', '<p>kumar</p>\r\n', 3, '207d9a057e901d99549aeb9774c95186.jpg', 1, '2018-10-10 07:45:01'),
(2, 'ramanand', '<p>mishra</p>\r\n', 3, '61106ccb2798e095c9ad38a39d66055c.jpg', 1, '2018-10-10 07:45:21'),
(3, 'sunil ', '<p>kumar</p>\r\n', 1, '12ca14c61fc7cce3187b01e776fb90cd.png', 1, '2018-10-10 07:45:52'),
(4, 'amit kumar', '<p>kumar</p>\r\n', 1, '2311cd56a8618713e8ad87c57bdad938.png', 1, '2018-10-10 07:49:56'),
(5, 'ramesh', '<p>kumar</p>\r\n', 1, 'd1326c4fed0a36c32958356276712cfd.jpg', 1, '2018-10-10 07:50:46'),
(6, 'suresh', '<p>jvkh</p>\r\n', 3, '1b3833488c572bd2acbf8908e4333c88.png', 1, '2018-10-10 07:51:34'),
(7, 'ashu', '<p>kumar</p>\r\n', 3, '51e6365108b37620e019b51870a99b17.jpg', 1, '2018-10-10 19:14:58'),
(8, 'ashu', '<p>kumar</p>\r\n', 3, '066a2a8112fdf78b451907175cae9551.jpg', 1, '2018-10-10 19:16:52');

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1539233468, 1, 'Admin', 'istrator', 'ADMIN', '0', ''),
(3, '::1', 'abhishekcs401@gmail.com', '$2y$08$mqNDK15kCMZAPheZ5E25pOEUxeH0GDm8tDdtLxuHtDAw.buqkKMPy', NULL, 'abhishekcs401@gmail.com', NULL, 'bAnToWgqGKLfq6pT2Q0dl.65c62cc565bccfe80e', 1539239053, NULL, 1538990561, 1539062873, 1, 'abhishek', 'mishra', 'rdm', '9839060665', ''),
(4, '::1', 'abhi@gmail.com', '$2y$08$USAo66leqhRv/s9atZs8Oe5Y8eU7hbWON92f11ooyyRRABC/rGxQe', NULL, 'abhi@gmail.com', '9504b8a51b4ba6b77fdc842969fe767731be598e', NULL, NULL, NULL, 1538994529, 1538995066, 0, 'abhi', 'mishra', 'xyz', '9839060665', ''),
(5, '::1', 'ncsjch@gmail.com', '$2y$08$l9uE4sGFTP68JKZxk2gDJOlPIsQY5BpgZjeolC6hXVAfE2N0xh4dG', NULL, 'ncsjch@gmail.com', NULL, NULL, NULL, NULL, 1539063895, NULL, 1, 'suresh', 'kumar', 'xsgd', '88888888888888888', ''),
(6, '::1', 'dhj@gmail.com', '$2y$08$0VtEQjkouPAhMgv1QpcH4egAbeEsUog7yERNlychYG9.OvolMxXoy', NULL, 'dhj@gmail.com', NULL, NULL, NULL, NULL, 1539064436, NULL, 1, 'dhsjh', 'hfejf', 'djdfhfj', '44444444444', 'hgheeige'),
(7, '::1', 'ashisk@gmail.com', '$2y$08$5q8qI/fW/a2KqPEjBZGzqueQOyq1JjPTa1AGxR7der9LTlvZcTR8C', NULL, 'ashisk@gmail.com', NULL, NULL, NULL, NULL, 1539253980, 1539253991, 1, 'ashis', 'kumar', 'jdbdjg', '7777777777', 'ashiskumar');

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
(9, 3, 1),
(10, 3, 2),
(12, 4, 3),
(13, 5, 2),
(14, 6, 2),
(15, 7, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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

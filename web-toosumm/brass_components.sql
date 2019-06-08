-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 09:23 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brass_components`
--

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
(2, 'members', 'General User');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_detail` text NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `entry_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_detail`, `product_image`, `user_id`, `entry_time`) VALUES
(1, 'Brass Inserts', '<ul>\r\n	<li>\r\n	<p>We Offer Terminal Bars, Neutral Links, Earthing Block, Earthing Bars, Brass Earthing Bars, Panel Board Switch Gears, Electrical Switch Boards, Brass Terminal Bars, Neutral Links, Brass Neutral Links, Neutral Bars, Terminal Blocks, Brass Terminal Blocks, Electrical Neutral Links, Brass Electrical Neutral Links Can Be Developed And Supplied Exactly As Per Customer Specifications.&nbsp;<br />\r\n	&nbsp;</p>\r\n\r\n	<h3>Material</h3>\r\n\r\n	<p>High grade free cutting brass as per IS 319 (Type 1) or BS 249 (Type 1) or any other special Brass material composition as per customer requirement.</p>\r\n	</li>\r\n</ul>\r\n', '79dfc896e322c20ff2f43861f3355972.jpg', 2, '2018-03-23 02:57:15'),
(2, ' Electrical Neutral', '<p>We Offer Terminal Bars, Neutral Links, Earthing Block, Earthing Bars, Brass Earthing Bars, Panel Board Switch Gears, Electrical Switch Boards, Brass Terminal Bars, Neutral Links, Brass Neutral Links, Neutral Bars, Terminal Blocks, Brass Terminal Blocks, Electrical Neutral Links, Brass Electrical Neutral Links Can Be Developed And Supplied Exactly As Per Customer Specifications.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<h3>Material</h3>\r\n\r\n<p>High grade free cutting brass as per IS 319 (Type 1) or BS 249 (Type 1) or any other special Brass material composition as per customer requirement.</p>\r\n', 'f252b99a2c22c05fca6213ee1cf2aa74.jpg', 2, '2018-03-23 02:58:16'),
(3, 'Brass Electrical', '<p>&nbsp;</p>\r\n\r\n<p>Our products of electrical switch parts, 5 Amp Two Pin Socket with Spring 5 Amp Two Pin Socket Heavy Type 5 X 5 Amp Universal Combine Socket Brass Electrical 5 Amp Earthing Socket with Spring 10 Amp Live Part Socket 15 Amp Earthing Socket 5 X 15 Amp Universal Combine Socket, Brass Electrical 6 Amp Riveting TC Piller 16 Amp Riveting TC Piller Riveting Piller 16 Amp Side Part 16 Amp Center Part 32 Amp Side Part 32 Amp Center Part 5 Amp Top Pin with, Brass Electrical Parts Plugs, Brass Electrical Parts Sockets, Brass Electrical Parts Socket Pins.&nbsp;<br />\r\n<br />\r\nBrass Electrical Parts Earth Socket, Brass Fasteners Brass Anchors Brass Inserts Energy Meter Terminal, Energy Meter Parts, Neutral Links and Terminal Blocks Electrical Switch Parts, Brass Parts, Brass Precision Parts, electrical accessories, electrical parts electrical components and electrical switch parts, Brass electrical accessories, Wiring Accessories Earthing Accessories, General Brass Electrical Accessories, Panel Board Accessories, Brass Solid Pins, Brass Half Solid Pins, Brass Earth Pin Plug &amp; Socket.<br />\r\n&nbsp;</p>\r\n\r\n<h3>Material</h3>\r\n\r\n<p>High grade free cutting brass as per IS 319 (Type 1) or BS 249 (Type 1) or any other special Brass material composition as per customer requirement.</p>\r\n', 'd8b8a37e0944c542bfcf3f0829bf8e09.jpg', 2, '2018-03-23 02:59:26'),
(5, 'Brass Nuts &amp; Washers', '<p>&nbsp;</p>\r\n\r\n<p>We produce as per customer&#39;s requirement. Nuts, Lock Nuts, Slotted Nuts, Castle Nuts, Brass Nut, Square Nuts, Round Nuts, Collar Nuts, Brass Nuts, Brass Flange Nut, Special Nuts, Brass Plain Nuts, Hexagon Nuts, Brass Hex Full Nuts, Brass Hex Lock Nuts, Brass Hex Rivet Nuts, Brass Square Nuts, Wheel Nuts Bolts, Hexagon Bolts, Washers, Brass Washers, Steel Washers, Lock Washers, Spring Washers, Metal Washers, Stainless Washers, Brass Square Washers, Flat Washer, Stainless Steel Washer, Copper Washers, Countersunk Washers, Metric Flat Washer, Brass Nipples, Brass Bush, Industrial Fasteners, Automotive Fasteners, MS Fasteners.</p>\r\n\r\n<h3>Material</h3>\r\n\r\n<p>High grade free cutting brass as per IS 319 (Type 1) or BS 249 (Type 1) or any other special Brass material composition as per customer requirement.</p>\r\n', '6d97e52a9a38f5ba5b3453537837ee8c.jpg', 2, '2018-03-23 03:01:41'),
(6, 'Brass Washers', '<ul>\r\n	<li>Lock Washers</li>\r\n	<li>Brass Finish Washers</li>\r\n	<li>Brass Round Washers</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Brass Square Washers</li>\r\n	<li>Brass Flat Washers</li>\r\n</ul>\r\n\r\n<p>We produce as per customer&#39;s requirement. Nuts, Lock Nuts, Slotted Nuts, Castle Nuts, Brass Nut, Square Nuts, Round Nuts, Collar Nuts, Brass Nuts, Brass Flange Nut, Special Nuts, Brass Plain Nuts, Hexagon Nuts, Brass Hex Full Nuts, Brass Hex Lock Nuts, Brass Hex Rivet Nuts, Brass Square Nuts, Wheel Nuts Bolts, Hexagon Bolts, Washers, Brass Washers, Steel Washers, Lock Washers, Spring Washers, Metal Washers, Stainless Washers, Brass Square Washers, Flat Washer, Stainless Steel Washer, Copper Washers, Countersunk Washers, Metric Flat Washer, Brass Nipples, Brass Bush, Industrial Fasteners, Automotive Fasteners, MS Fasteners.</p>\r\n\r\n<h3>Material</h3>\r\n\r\n<p>High grade free cutting brass as per IS 319 (Type 1) or BS 249 (Type 1) or any other special Brass material composition as per customer requirement.</p>\r\n', '520b6726ac680b20237da3d20e91c785.jpg', 2, '2018-03-23 03:02:49');

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
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$Ohry0HGRx7ttzmf4ejjJBeqIBlo3LAya4j1TAAwHlf0gZsYfauH2W', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1521765756, 1, 'Admin', 'istrator', 'ADMIN', '055'),
(2, '::1', 'abhishekcs401@gmail.com', '$2y$08$H5ki6mPLR7uYuOlTxSPHDep55wyoCSfYYcFwPzKZYVuab6tbTIXq6', NULL, 'abhishekcs401@gmail.com', NULL, NULL, NULL, NULL, 1521056620, 1521837692, 1, 'Abhishek', 'Mishra', 'Tech BaBa', '9839060665');

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
(14, 1, 1),
(15, 1, 2),
(34, 2, 1),
(35, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `entry_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `username`, `email`, `phone_number`, `message`, `entry_time`) VALUES
(1, 'hdjkf', 'ndfgnd@gmail.com', '8888888888', 'vkjgkfjgfg', '2018-03-21 21:38:32'),
(2, 'dskj', 'ddg@gmail.com', '8888888888', 'gdhgfjgj', '2018-03-21 21:39:17');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

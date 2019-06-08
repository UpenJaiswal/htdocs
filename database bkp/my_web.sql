-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:46 AM
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
-- Database: `my_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-04-21 10:25:04', '2019-04-21 10:25:04', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0),
(2, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-04-21 10:25:04', '2019-04-21 10:25:04', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0),
(3, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-04-21 10:25:04', '2019-04-21 10:25:04', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/upen/my_web', 'yes'),
(2, 'home', 'http://localhost/upen/my_web', 'yes'),
(3, 'blogname', 'my_web', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'upen.j1986@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:86:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:4:{i:0;s:29:\"acf-repeater/acf-repeater.php\";i:1;s:30:\"advanced-custom-fields/acf.php\";i:2;s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";i:3;s:33:\"classic-editor/classic-editor.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:5:{i:0;s:64:\"C:\\xampp\\htdocs\\upen\\my_web/wp-content/themes/my_theme/style.css\";i:1;s:64:\"C:\\xampp\\htdocs\\upen\\my_web/wp-content/themes/my_theme/index.php\";i:3;s:70:\"C:\\xampp\\htdocs\\upen\\my_web/wp-content/themes/my_theme/testimonial.php\";i:4;s:65:\"C:\\xampp\\htdocs\\upen\\my_web/wp-content/themes/my_theme/header.php\";i:5;s:0:\"\";}', 'no'),
(40, 'template', 'my_theme', 'yes'),
(41, 'stylesheet', 'my_theme', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '44719', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:0:{}', 'yes'),
(79, 'widget_text', 'a:0:{}', 'yes'),
(80, 'widget_rss', 'a:0:{}', 'yes'),
(81, 'uninstall_plugins', 'a:1:{s:33:\"classic-editor/classic-editor.php\";a:2:{i:0;s:14:\"Classic_Editor\";i:1;s:9:\"uninstall\";}}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'initial_db_version', '44719', 'yes'),
(280, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(282, 'fresh_site', '0', 'yes'),
(284, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(285, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(286, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(287, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(289, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(290, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(291, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(293, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(294, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(295, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(297, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(298, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(299, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(300, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(301, 'cron', 'a:6:{i:1556108724;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1556144724;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1556187953;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1556187957;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1556189538;a:1:{s:18:\"ai1wm_cleanup_cron\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(303, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.1.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.1.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.1.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.1.1-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.1.1\";s:7:\"version\";s:5:\"5.1.1\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1556105736;s:15:\"version_checked\";s:5:\"5.1.1\";s:12:\"translations\";a:0:{}}', 'no'),
(308, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1556105747;s:7:\"checked\";a:1:{s:8:\"my_theme\";s:0:\"\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(309, '_site_transient_timeout_browser_127868b9556d0b73282ae4585eb3c66a', '1556447154', 'no'),
(310, '_site_transient_browser_127868b9556d0b73282ae4585eb3c66a', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"73.0.3683.103\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(311, '_site_transient_timeout_php_check_b210b8aa09c12dbcb4a182813622790b', '1556447156', 'no'),
(312, '_site_transient_php_check_b210b8aa09c12dbcb4a182813622790b', 'a:5:{s:19:\"recommended_version\";s:3:\"7.3\";s:15:\"minimum_version\";s:5:\"5.2.4\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(314, 'can_compress_scripts', '1', 'no'),
(327, 'theme_mods_twentynineteen', 'a:1:{s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1555842382;s:4:\"data\";a:0:{}}}', 'yes'),
(328, 'current_theme', 'my_theme', 'yes'),
(329, 'theme_mods_my_theme', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1555843750;s:4:\"data\";a:0:{}}}', 'yes'),
(331, 'theme_switched', '', 'yes'),
(334, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(337, 'recently_activated', 'a:0:{}', 'yes'),
(342, 'ai1wm_secret_key', 'VM94CuNRVIo4', 'yes'),
(347, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1556105747;s:7:\"checked\";a:6:{s:30:\"advanced-custom-fields/acf.php\";s:6:\"5.7.12\";s:29:\"acf-repeater/acf-repeater.php\";s:5:\"2.1.0\";s:19:\"akismet/akismet.php\";s:5:\"4.1.1\";s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";s:4:\"6.91\";s:33:\"classic-editor/classic-editor.php\";s:3:\"1.4\";s:9:\"hello.php\";s:5:\"1.7.1\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:5:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:6:\"5.7.12\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:72:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.5.7.12.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-256x256.png?rev=1082746\";s:2:\"1x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=1729099\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=1729102\";}s:11:\"banners_rtl\";a:0:{}}s:19:\"akismet/akismet.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.1\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}}s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:37:\"w.org/plugins/all-in-one-wp-migration\";s:4:\"slug\";s:23:\"all-in-one-wp-migration\";s:6:\"plugin\";s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";s:11:\"new_version\";s:4:\"6.91\";s:3:\"url\";s:54:\"https://wordpress.org/plugins/all-in-one-wp-migration/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/all-in-one-wp-migration.6.91.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:76:\"https://ps.w.org/all-in-one-wp-migration/assets/icon-256x256.png?rev=2065682\";s:2:\"1x\";s:76:\"https://ps.w.org/all-in-one-wp-migration/assets/icon-128x128.png?rev=2065682\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:79:\"https://ps.w.org/all-in-one-wp-migration/assets/banner-1544x500.png?rev=2065682\";s:2:\"1x\";s:78:\"https://ps.w.org/all-in-one-wp-migration/assets/banner-772x250.png?rev=2065682\";}s:11:\"banners_rtl\";a:0:{}}s:33:\"classic-editor/classic-editor.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/classic-editor\";s:4:\"slug\";s:14:\"classic-editor\";s:6:\"plugin\";s:33:\"classic-editor/classic-editor.php\";s:11:\"new_version\";s:3:\"1.4\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/classic-editor/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/classic-editor.1.4.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-256x256.png?rev=1998671\";s:2:\"1x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-128x128.png?rev=1998671\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/classic-editor/assets/banner-1544x500.png?rev=1998671\";s:2:\"1x\";s:69:\"https://ps.w.org/classic-editor/assets/banner-772x250.png?rev=1998676\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(348, 'ai1wm_updater', 'a:0:{}', 'yes'),
(349, 'acf_version', '5.7.12', 'yes'),
(441, '_site_transient_timeout_theme_roots', '1556107545', 'no'),
(442, '_site_transient_theme_roots', 'a:1:{s:8:\"my_theme\";s:7:\"/themes\";}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 2, '_wp_page_template', 'default'),
(3, 2, '_wp_page_template', 'default'),
(4, 3, '_wp_page_template', 'default'),
(5, 3, '_wp_page_template', 'default'),
(6, 3, '_wp_page_template', 'default'),
(7, 11, '_edit_lock', '1555846054:1'),
(8, 11, '_edit_last', '1'),
(9, 15, '_edit_lock', '1555979567:1'),
(10, 15, '_edit_last', '1'),
(11, 11, '_wp_trash_meta_status', 'publish'),
(12, 11, '_wp_trash_meta_status', 'publish'),
(13, 11, '_wp_trash_meta_time', '1555846201'),
(14, 11, '_wp_trash_meta_time', '1555846201'),
(15, 11, '_wp_desired_post_slug', 'group_5cbc523ff0fee'),
(16, 11, '_wp_desired_post_slug', 'group_5cbc523ff0fee'),
(17, 12, '_wp_trash_meta_status', 'publish'),
(18, 12, '_wp_trash_meta_status', 'publish'),
(19, 12, '_wp_trash_meta_time', '1555846202'),
(20, 12, '_wp_trash_meta_time', '1555846202'),
(21, 12, '_wp_desired_post_slug', 'field_5cbc524f277df'),
(22, 12, '_wp_desired_post_slug', 'field_5cbc524f277df'),
(23, 7, '_wp_trash_meta_status', 'draft'),
(24, 7, '_wp_trash_meta_time', '1555846277'),
(25, 7, '_wp_desired_post_slug', 'privacy-policy'),
(26, 8, '_wp_trash_meta_status', 'draft'),
(27, 8, '_wp_trash_meta_time', '1555846280'),
(28, 8, '_wp_desired_post_slug', 'privacy-policy'),
(29, 9, '_wp_trash_meta_status', 'draft'),
(30, 9, '_wp_trash_meta_time', '1555846283'),
(31, 9, '_wp_desired_post_slug', 'privacy-policy'),
(32, 5, '_wp_trash_meta_status', 'publish'),
(33, 5, '_wp_trash_meta_time', '1555846293'),
(34, 5, '_wp_desired_post_slug', 'sample-page'),
(35, 4, '_wp_trash_meta_status', 'publish'),
(36, 4, '_wp_trash_meta_time', '1555846295'),
(37, 4, '_wp_desired_post_slug', 'sample-page'),
(38, 6, '_edit_lock', '1555861929:1'),
(39, 6, '_edit_last', '1'),
(40, 6, '_wp_page_template', 'index.php'),
(41, 6, 'slider1', '28'),
(42, 6, '_slider1', 'field_5cbc53f51c648'),
(43, 23, 'slider1', ''),
(44, 23, '_slider1', 'field_5cbc53f51c648'),
(47, 25, 'slider1', '24'),
(48, 25, '_slider1', 'field_5cbc53f51c648'),
(49, 26, '_edit_lock', '1555846758:1'),
(50, 26, '_edit_last', '1'),
(51, 26, '_wp_page_template', 'about.php'),
(54, 29, 'slider1', '28'),
(55, 29, '_slider1', 'field_5cbc53f51c648'),
(56, 30, '_edit_lock', '1555851271:1'),
(57, 6, 'custom_field_0_cimage', '28'),
(58, 6, '_custom_field_0_cimage', 'field_5cbc681fe42f0'),
(59, 6, 'custom_field', '1'),
(60, 6, '_custom_field', 'field_5cbc6810e42ef'),
(61, 33, 'slider1', '28'),
(62, 33, '_slider1', 'field_5cbc53f51c648'),
(63, 33, 'custom_field_0_cimage', '28'),
(64, 33, '_custom_field_0_cimage', 'field_5cbc681fe42f0'),
(65, 33, 'custom_field', '1'),
(66, 33, '_custom_field', 'field_5cbc6810e42ef'),
(67, 34, '_edit_lock', '1555860753:1'),
(68, 34, '_edit_last', '1'),
(69, 34, '_wp_page_template', 'testimonial.php'),
(76, 6, 'slider_0_image', '38'),
(77, 6, '_slider_0_image', 'field_5cbc681fe42f0'),
(78, 6, 'slider_1_image', '37'),
(79, 6, '_slider_1_image', 'field_5cbc681fe42f0'),
(80, 6, 'slider_2_image', '36'),
(81, 6, '_slider_2_image', 'field_5cbc681fe42f0'),
(82, 6, 'slider', '3'),
(83, 6, '_slider', 'field_5cbc6810e42ef'),
(84, 39, 'slider1', '28'),
(85, 39, '_slider1', 'field_5cbc53f51c648'),
(86, 39, 'custom_field_0_cimage', '28'),
(87, 39, '_custom_field_0_cimage', 'field_5cbc681fe42f0'),
(88, 39, 'custom_field', '1'),
(89, 39, '_custom_field', 'field_5cbc6810e42ef'),
(90, 39, 'slider_0_image', '38'),
(91, 39, '_slider_0_image', 'field_5cbc681fe42f0'),
(92, 39, 'slider_1_image', '37'),
(93, 39, '_slider_1_image', 'field_5cbc681fe42f0'),
(94, 39, 'slider_2_image', '36'),
(95, 39, '_slider_2_image', 'field_5cbc681fe42f0'),
(96, 39, 'slider', '3'),
(97, 39, '_slider', 'field_5cbc6810e42ef'),
(98, 6, '_wp_trash_meta_status', 'publish'),
(99, 6, '_wp_trash_meta_time', '1555862080'),
(100, 6, '_wp_desired_post_slug', 'sample-page'),
(101, 40, '_edit_lock', '1555979564:1'),
(102, 40, '_edit_last', '1'),
(103, 40, '_wp_page_template', 'index.php'),
(104, 40, 'slider', '3'),
(105, 40, '_slider', 'field_5cbc6810e42ef'),
(106, 41, 'slider', ''),
(107, 41, '_slider', 'field_5cbc6810e42ef'),
(108, 40, 'slider_0_image', '48'),
(109, 40, '_slider_0_image', 'field_5cbc681fe42f0'),
(110, 40, 'slider_1_image', '49'),
(111, 40, '_slider_1_image', 'field_5cbc681fe42f0'),
(112, 40, 'slider_2_image', '51'),
(113, 40, '_slider_2_image', 'field_5cbc681fe42f0'),
(114, 42, 'slider', '3'),
(115, 42, '_slider', 'field_5cbc6810e42ef'),
(116, 42, 'slider_0_image', '37'),
(117, 42, '_slider_0_image', 'field_5cbc681fe42f0'),
(118, 42, 'slider_1_image', '36'),
(119, 42, '_slider_1_image', 'field_5cbc681fe42f0'),
(120, 42, 'slider_2_image', '28'),
(121, 42, '_slider_2_image', 'field_5cbc681fe42f0'),
(122, 40, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(123, 40, '_slider_0_heading', 'field_5cbc934dffc27'),
(124, 40, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(125, 40, '_slider_0_content', 'field_5cbc935cffc28'),
(126, 40, 'slider_1_heading', 'thdjj'),
(127, 40, '_slider_1_heading', 'field_5cbc934dffc27'),
(128, 40, 'slider_1_content', 'hgfjgfjf'),
(129, 40, '_slider_1_content', 'field_5cbc935cffc28'),
(130, 40, 'slider_2_heading', 'ghgfjfj'),
(131, 40, '_slider_2_heading', 'field_5cbc934dffc27'),
(132, 40, 'slider_2_content', 'ghgfjfj'),
(133, 40, '_slider_2_content', 'field_5cbc935cffc28'),
(134, 45, 'slider', '3'),
(135, 45, '_slider', 'field_5cbc6810e42ef'),
(136, 45, 'slider_0_image', '37'),
(137, 45, '_slider_0_image', 'field_5cbc681fe42f0'),
(138, 45, 'slider_1_image', '36'),
(139, 45, '_slider_1_image', 'field_5cbc681fe42f0'),
(140, 45, 'slider_2_image', '28'),
(141, 45, '_slider_2_image', 'field_5cbc681fe42f0'),
(142, 45, 'slider_0_heading', 'hello how r u??'),
(143, 45, '_slider_0_heading', 'field_5cbc934dffc27'),
(144, 45, 'slider_0_content', 'I m fine bro..'),
(145, 45, '_slider_0_content', 'field_5cbc935cffc28'),
(146, 45, 'slider_1_heading', ''),
(147, 45, '_slider_1_heading', 'field_5cbc934dffc27'),
(148, 45, 'slider_1_content', ''),
(149, 45, '_slider_1_content', 'field_5cbc935cffc28'),
(150, 45, 'slider_2_heading', ''),
(151, 45, '_slider_2_heading', 'field_5cbc934dffc27'),
(152, 45, 'slider_2_content', ''),
(153, 45, '_slider_2_content', 'field_5cbc935cffc28'),
(154, 46, 'slider', '3'),
(155, 46, '_slider', 'field_5cbc6810e42ef'),
(156, 46, 'slider_0_image', '37'),
(157, 46, '_slider_0_image', 'field_5cbc681fe42f0'),
(158, 46, 'slider_1_image', '36'),
(159, 46, '_slider_1_image', 'field_5cbc681fe42f0'),
(160, 46, 'slider_2_image', '28'),
(161, 46, '_slider_2_image', 'field_5cbc681fe42f0'),
(162, 46, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(163, 46, '_slider_0_heading', 'field_5cbc934dffc27'),
(164, 46, 'slider_0_content', '<pre>I m fine bro..</pre>'),
(165, 46, '_slider_0_content', 'field_5cbc935cffc28'),
(166, 46, 'slider_1_heading', ''),
(167, 46, '_slider_1_heading', 'field_5cbc934dffc27'),
(168, 46, 'slider_1_content', ''),
(169, 46, '_slider_1_content', 'field_5cbc935cffc28'),
(170, 46, 'slider_2_heading', ''),
(171, 46, '_slider_2_heading', 'field_5cbc934dffc27'),
(172, 46, 'slider_2_content', ''),
(173, 46, '_slider_2_content', 'field_5cbc935cffc28'),
(174, 47, 'slider', '3'),
(175, 47, '_slider', 'field_5cbc6810e42ef'),
(176, 47, 'slider_0_image', '37'),
(177, 47, '_slider_0_image', 'field_5cbc681fe42f0'),
(178, 47, 'slider_1_image', '36'),
(179, 47, '_slider_1_image', 'field_5cbc681fe42f0'),
(180, 47, 'slider_2_image', '28'),
(181, 47, '_slider_2_image', 'field_5cbc681fe42f0'),
(182, 47, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(183, 47, '_slider_0_heading', 'field_5cbc934dffc27'),
(184, 47, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(185, 47, '_slider_0_content', 'field_5cbc935cffc28'),
(186, 47, 'slider_1_heading', ''),
(187, 47, '_slider_1_heading', 'field_5cbc934dffc27'),
(188, 47, 'slider_1_content', ''),
(189, 47, '_slider_1_content', 'field_5cbc935cffc28'),
(190, 47, 'slider_2_heading', ''),
(191, 47, '_slider_2_heading', 'field_5cbc934dffc27'),
(192, 47, 'slider_2_content', ''),
(193, 47, '_slider_2_content', 'field_5cbc935cffc28'),
(202, 52, '_wp_attached_file', '2019/04/5.jpg'),
(203, 52, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1711;s:6:\"height\";i:550;s:4:\"file\";s:13:\"2019/04/5.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:13:\"5-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:12:\"5-300x96.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:96;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:13:\"5-768x247.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:247;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:14:\"5-1024x329.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:329;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(204, 53, 'slider', '3'),
(205, 53, '_slider', 'field_5cbc6810e42ef'),
(206, 53, 'slider_0_image', '48'),
(207, 53, '_slider_0_image', 'field_5cbc681fe42f0'),
(208, 53, 'slider_1_image', '49'),
(209, 53, '_slider_1_image', 'field_5cbc681fe42f0'),
(210, 53, 'slider_2_image', '52'),
(211, 53, '_slider_2_image', 'field_5cbc681fe42f0'),
(212, 53, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(213, 53, '_slider_0_heading', 'field_5cbc934dffc27'),
(214, 53, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(215, 53, '_slider_0_content', 'field_5cbc935cffc28'),
(216, 53, 'slider_1_heading', ''),
(217, 53, '_slider_1_heading', 'field_5cbc934dffc27'),
(218, 53, 'slider_1_content', ''),
(219, 53, '_slider_1_content', 'field_5cbc935cffc28'),
(220, 53, 'slider_2_heading', ''),
(221, 53, '_slider_2_heading', 'field_5cbc934dffc27'),
(222, 53, 'slider_2_content', ''),
(223, 53, '_slider_2_content', 'field_5cbc935cffc28'),
(224, 54, 'slider', '3'),
(225, 54, '_slider', 'field_5cbc6810e42ef'),
(226, 54, 'slider_0_image', '48'),
(227, 54, '_slider_0_image', 'field_5cbc681fe42f0'),
(228, 54, 'slider_1_image', '49'),
(229, 54, '_slider_1_image', 'field_5cbc681fe42f0'),
(230, 54, 'slider_2_image', '52'),
(231, 54, '_slider_2_image', 'field_5cbc681fe42f0'),
(232, 54, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(233, 54, '_slider_0_heading', 'field_5cbc934dffc27'),
(234, 54, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(235, 54, '_slider_0_content', 'field_5cbc935cffc28'),
(236, 54, 'slider_1_heading', ''),
(237, 54, '_slider_1_heading', 'field_5cbc934dffc27'),
(238, 54, 'slider_1_content', ''),
(239, 54, '_slider_1_content', 'field_5cbc935cffc28'),
(240, 54, 'slider_2_heading', ''),
(241, 54, '_slider_2_heading', 'field_5cbc934dffc27'),
(242, 54, 'slider_2_content', ''),
(243, 54, '_slider_2_content', 'field_5cbc935cffc28'),
(244, 55, 'slider', '3'),
(245, 55, '_slider', 'field_5cbc6810e42ef'),
(246, 55, 'slider_0_image', '48'),
(247, 55, '_slider_0_image', 'field_5cbc681fe42f0'),
(248, 55, 'slider_1_image', '49'),
(249, 55, '_slider_1_image', 'field_5cbc681fe42f0'),
(250, 55, 'slider_2_image', '51'),
(251, 55, '_slider_2_image', 'field_5cbc681fe42f0'),
(252, 55, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(253, 55, '_slider_0_heading', 'field_5cbc934dffc27'),
(254, 55, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(255, 55, '_slider_0_content', 'field_5cbc935cffc28'),
(256, 55, 'slider_1_heading', 'thdjj'),
(257, 55, '_slider_1_heading', 'field_5cbc934dffc27'),
(258, 55, 'slider_1_content', 'hgfjgfjf'),
(259, 55, '_slider_1_content', 'field_5cbc935cffc28'),
(260, 55, 'slider_2_heading', 'ghgfjfj'),
(261, 55, '_slider_2_heading', 'field_5cbc934dffc27'),
(262, 55, 'slider_2_content', 'ghgfjfj'),
(263, 55, '_slider_2_content', 'field_5cbc935cffc28'),
(264, 56, '_edit_lock', '1555864197:1'),
(265, 56, '_edit_last', '1'),
(266, 56, '_wp_trash_meta_status', 'publish'),
(267, 56, '_wp_trash_meta_time', '1555864348'),
(268, 56, '_wp_desired_post_slug', 'group_5cbc9ac9c0922'),
(269, 57, '_wp_trash_meta_status', 'publish'),
(270, 57, '_wp_trash_meta_time', '1555864348'),
(271, 57, '_wp_desired_post_slug', 'field_5cbc9ae08b3ee'),
(272, 40, 'image1', '66'),
(273, 40, '_image1', 'field_5cbc9b22d5ff1'),
(274, 59, 'slider', '3'),
(275, 59, '_slider', 'field_5cbc6810e42ef'),
(276, 59, 'slider_0_image', '48'),
(277, 59, '_slider_0_image', 'field_5cbc681fe42f0'),
(278, 59, 'slider_1_image', '49'),
(279, 59, '_slider_1_image', 'field_5cbc681fe42f0'),
(280, 59, 'slider_2_image', '51'),
(281, 59, '_slider_2_image', 'field_5cbc681fe42f0'),
(282, 59, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(283, 59, '_slider_0_heading', 'field_5cbc934dffc27'),
(284, 59, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(285, 59, '_slider_0_content', 'field_5cbc935cffc28'),
(286, 59, 'slider_1_heading', 'thdjj'),
(287, 59, '_slider_1_heading', 'field_5cbc934dffc27'),
(288, 59, 'slider_1_content', 'hgfjgfjf'),
(289, 59, '_slider_1_content', 'field_5cbc935cffc28'),
(290, 59, 'slider_2_heading', 'ghgfjfj'),
(291, 59, '_slider_2_heading', 'field_5cbc934dffc27'),
(292, 59, 'slider_2_content', 'ghgfjfj'),
(293, 59, '_slider_2_content', 'field_5cbc935cffc28'),
(294, 59, 'image1', '52'),
(295, 59, '_image1', 'field_5cbc9b22d5ff1'),
(296, 40, 'image2', '71'),
(297, 40, '_image2', 'field_5cbc9b7b727db'),
(298, 40, 'image3', '70'),
(299, 40, '_image3', 'field_5cbc9b90727dc'),
(300, 40, 'image4', '72'),
(301, 40, '_image4', 'field_5cbc9ba5727dd'),
(302, 40, 'image5', '73'),
(303, 40, '_image5', 'field_5cbc9bba727de'),
(304, 64, 'slider', '3'),
(305, 64, '_slider', 'field_5cbc6810e42ef'),
(306, 64, 'slider_0_image', '48'),
(307, 64, '_slider_0_image', 'field_5cbc681fe42f0'),
(308, 64, 'slider_1_image', '49'),
(309, 64, '_slider_1_image', 'field_5cbc681fe42f0'),
(310, 64, 'slider_2_image', '51'),
(311, 64, '_slider_2_image', 'field_5cbc681fe42f0'),
(312, 64, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(313, 64, '_slider_0_heading', 'field_5cbc934dffc27'),
(314, 64, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(315, 64, '_slider_0_content', 'field_5cbc935cffc28'),
(316, 64, 'slider_1_heading', 'thdjj'),
(317, 64, '_slider_1_heading', 'field_5cbc934dffc27'),
(318, 64, 'slider_1_content', 'hgfjgfjf'),
(319, 64, '_slider_1_content', 'field_5cbc935cffc28'),
(320, 64, 'slider_2_heading', 'ghgfjfj'),
(321, 64, '_slider_2_heading', 'field_5cbc934dffc27'),
(322, 64, 'slider_2_content', 'ghgfjfj'),
(323, 64, '_slider_2_content', 'field_5cbc935cffc28'),
(324, 64, 'image1', '52'),
(325, 64, '_image1', 'field_5cbc9b22d5ff1'),
(326, 64, 'image2', '52'),
(327, 64, '_image2', 'field_5cbc9b7b727db'),
(328, 64, 'image3', '52'),
(329, 64, '_image3', 'field_5cbc9b90727dc'),
(330, 64, 'image4', '52'),
(331, 64, '_image4', 'field_5cbc9ba5727dd'),
(332, 64, 'image5', '52'),
(333, 64, '_image5', 'field_5cbc9bba727de'),
(334, 65, 'slider', '3'),
(335, 65, '_slider', 'field_5cbc6810e42ef'),
(336, 65, 'slider_0_image', '48'),
(337, 65, '_slider_0_image', 'field_5cbc681fe42f0'),
(338, 65, 'slider_1_image', '49'),
(339, 65, '_slider_1_image', 'field_5cbc681fe42f0'),
(340, 65, 'slider_2_image', '51'),
(341, 65, '_slider_2_image', 'field_5cbc681fe42f0'),
(342, 65, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(343, 65, '_slider_0_heading', 'field_5cbc934dffc27'),
(344, 65, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(345, 65, '_slider_0_content', 'field_5cbc935cffc28'),
(346, 65, 'slider_1_heading', 'thdjj'),
(347, 65, '_slider_1_heading', 'field_5cbc934dffc27'),
(348, 65, 'slider_1_content', 'hgfjgfjf'),
(349, 65, '_slider_1_content', 'field_5cbc935cffc28'),
(350, 65, 'slider_2_heading', 'ghgfjfj'),
(351, 65, '_slider_2_heading', 'field_5cbc934dffc27'),
(352, 65, 'slider_2_content', 'ghgfjfj'),
(353, 65, '_slider_2_content', 'field_5cbc935cffc28'),
(354, 65, 'image1', '24'),
(355, 65, '_image1', 'field_5cbc9b22d5ff1'),
(356, 65, 'image2', '24'),
(357, 65, '_image2', 'field_5cbc9b7b727db'),
(358, 65, 'image3', '24'),
(359, 65, '_image3', 'field_5cbc9b90727dc'),
(360, 65, 'image4', '24'),
(361, 65, '_image4', 'field_5cbc9ba5727dd'),
(362, 65, 'image5', '24'),
(363, 65, '_image5', 'field_5cbc9bba727de'),
(364, 66, '_wp_attached_file', '2019/04/black-black-watch-cellphone-1841841.jpg'),
(365, 66, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2496;s:6:\"height\";i:1664;s:4:\"file\";s:47:\"2019/04/black-black-watch-cellphone-1841841.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:47:\"black-black-watch-cellphone-1841841-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:47:\"black-black-watch-cellphone-1841841-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:47:\"black-black-watch-cellphone-1841841-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:48:\"black-black-watch-cellphone-1841841-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(366, 67, 'slider', '3'),
(367, 67, '_slider', 'field_5cbc6810e42ef'),
(368, 67, 'slider_0_image', '48'),
(369, 67, '_slider_0_image', 'field_5cbc681fe42f0'),
(370, 67, 'slider_1_image', '49'),
(371, 67, '_slider_1_image', 'field_5cbc681fe42f0'),
(372, 67, 'slider_2_image', '51'),
(373, 67, '_slider_2_image', 'field_5cbc681fe42f0'),
(374, 67, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(375, 67, '_slider_0_heading', 'field_5cbc934dffc27'),
(376, 67, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(377, 67, '_slider_0_content', 'field_5cbc935cffc28'),
(378, 67, 'slider_1_heading', 'thdjj'),
(379, 67, '_slider_1_heading', 'field_5cbc934dffc27'),
(380, 67, 'slider_1_content', 'hgfjgfjf'),
(381, 67, '_slider_1_content', 'field_5cbc935cffc28'),
(382, 67, 'slider_2_heading', 'ghgfjfj'),
(383, 67, '_slider_2_heading', 'field_5cbc934dffc27'),
(384, 67, 'slider_2_content', 'ghgfjfj'),
(385, 67, '_slider_2_content', 'field_5cbc935cffc28'),
(386, 67, 'image1', '66'),
(387, 67, '_image1', 'field_5cbc9b22d5ff1'),
(388, 67, 'image2', ''),
(389, 67, '_image2', 'field_5cbc9b7b727db'),
(390, 67, 'image3', ''),
(391, 67, '_image3', 'field_5cbc9b90727dc'),
(392, 67, 'image4', ''),
(393, 67, '_image4', 'field_5cbc9ba5727dd'),
(394, 67, 'image5', ''),
(395, 67, '_image5', 'field_5cbc9bba727de'),
(396, 68, '_wp_attached_file', '2019/04/business-cellular-telephone-communication-682933.jpg'),
(397, 68, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:3206;s:6:\"height\";i:2256;s:4:\"file\";s:60:\"2019/04/business-cellular-telephone-communication-682933.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:60:\"business-cellular-telephone-communication-682933-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:60:\"business-cellular-telephone-communication-682933-300x211.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:211;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:60:\"business-cellular-telephone-communication-682933-768x540.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:540;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:61:\"business-cellular-telephone-communication-682933-1024x721.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:721;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(398, 69, 'slider', '3'),
(399, 69, '_slider', 'field_5cbc6810e42ef'),
(400, 69, 'slider_0_image', '48'),
(401, 69, '_slider_0_image', 'field_5cbc681fe42f0'),
(402, 69, 'slider_1_image', '49'),
(403, 69, '_slider_1_image', 'field_5cbc681fe42f0'),
(404, 69, 'slider_2_image', '51'),
(405, 69, '_slider_2_image', 'field_5cbc681fe42f0'),
(406, 69, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(407, 69, '_slider_0_heading', 'field_5cbc934dffc27'),
(408, 69, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(409, 69, '_slider_0_content', 'field_5cbc935cffc28'),
(410, 69, 'slider_1_heading', 'thdjj'),
(411, 69, '_slider_1_heading', 'field_5cbc934dffc27'),
(412, 69, 'slider_1_content', 'hgfjgfjf'),
(413, 69, '_slider_1_content', 'field_5cbc935cffc28'),
(414, 69, 'slider_2_heading', 'ghgfjfj'),
(415, 69, '_slider_2_heading', 'field_5cbc934dffc27'),
(416, 69, 'slider_2_content', 'ghgfjfj'),
(417, 69, '_slider_2_content', 'field_5cbc935cffc28'),
(418, 69, 'image1', '66'),
(419, 69, '_image1', 'field_5cbc9b22d5ff1'),
(420, 69, 'image2', '68'),
(421, 69, '_image2', 'field_5cbc9b7b727db'),
(422, 69, 'image3', ''),
(423, 69, '_image3', 'field_5cbc9b90727dc'),
(424, 69, 'image4', ''),
(425, 69, '_image4', 'field_5cbc9ba5727dd'),
(426, 69, 'image5', ''),
(427, 69, '_image5', 'field_5cbc9bba727de'),
(428, 70, '_wp_attached_file', '2019/04/black-and-white-cable-charger-dark-236132.jpg'),
(429, 70, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:5618;s:6:\"height\";i:3229;s:4:\"file\";s:53:\"2019/04/black-and-white-cable-charger-dark-236132.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:53:\"black-and-white-cable-charger-dark-236132-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:53:\"black-and-white-cable-charger-dark-236132-300x172.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:172;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:53:\"black-and-white-cable-charger-dark-236132-768x441.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:441;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:54:\"black-and-white-cable-charger-dark-236132-1024x589.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:589;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(430, 71, '_wp_attached_file', '2019/04/apple-equipment-gadget-277406.jpg'),
(431, 71, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1215;s:4:\"file\";s:41:\"2019/04/apple-equipment-gadget-277406.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:41:\"apple-equipment-gadget-277406-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:41:\"apple-equipment-gadget-277406-300x190.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:41:\"apple-equipment-gadget-277406-768x486.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:486;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:42:\"apple-equipment-gadget-277406-1024x648.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:648;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(432, 72, '_wp_attached_file', '2019/04/calculator-clean-desk-433639.jpg'),
(433, 72, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:5472;s:6:\"height\";i:3648;s:4:\"file\";s:40:\"2019/04/calculator-clean-desk-433639.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:40:\"calculator-clean-desk-433639-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:40:\"calculator-clean-desk-433639-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:40:\"calculator-clean-desk-433639-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:41:\"calculator-clean-desk-433639-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(434, 73, '_wp_attached_file', '2019/04/casual-cellphone-communication-1262971.jpg'),
(435, 73, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:4000;s:6:\"height\";i:2293;s:4:\"file\";s:50:\"2019/04/casual-cellphone-communication-1262971.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:50:\"casual-cellphone-communication-1262971-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:50:\"casual-cellphone-communication-1262971-300x172.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:172;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:50:\"casual-cellphone-communication-1262971-768x440.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:440;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:51:\"casual-cellphone-communication-1262971-1024x587.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:587;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(436, 74, 'slider', '3'),
(437, 74, '_slider', 'field_5cbc6810e42ef'),
(438, 74, 'slider_0_image', '48'),
(439, 74, '_slider_0_image', 'field_5cbc681fe42f0'),
(440, 74, 'slider_1_image', '49'),
(441, 74, '_slider_1_image', 'field_5cbc681fe42f0'),
(442, 74, 'slider_2_image', '51'),
(443, 74, '_slider_2_image', 'field_5cbc681fe42f0'),
(444, 74, 'slider_0_heading', '<h1>hello how r u??</h1>'),
(445, 74, '_slider_0_heading', 'field_5cbc934dffc27'),
(446, 74, 'slider_0_content', '<h3>I m fine bro..</h3>'),
(447, 74, '_slider_0_content', 'field_5cbc935cffc28'),
(448, 74, 'slider_1_heading', 'thdjj'),
(449, 74, '_slider_1_heading', 'field_5cbc934dffc27'),
(450, 74, 'slider_1_content', 'hgfjgfjf'),
(451, 74, '_slider_1_content', 'field_5cbc935cffc28'),
(452, 74, 'slider_2_heading', 'ghgfjfj'),
(453, 74, '_slider_2_heading', 'field_5cbc934dffc27'),
(454, 74, 'slider_2_content', 'ghgfjfj'),
(455, 74, '_slider_2_content', 'field_5cbc935cffc28'),
(456, 74, 'image1', '66'),
(457, 74, '_image1', 'field_5cbc9b22d5ff1'),
(458, 74, 'image2', '71'),
(459, 74, '_image2', 'field_5cbc9b7b727db'),
(460, 74, 'image3', '70'),
(461, 74, '_image3', 'field_5cbc9b90727dc'),
(462, 74, 'image4', '72'),
(463, 74, '_image4', 'field_5cbc9ba5727dd'),
(464, 74, 'image5', '73'),
(465, 74, '_image5', 'field_5cbc9bba727de');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 2, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2019-04-21 10:25:04', '2019-04-21 10:25:04', '', 0, 'http://localhost/upen/my_web/?p=1', 0, 'post', '', 1),
(2, 1, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2019-04-21 10:25:04', '2019-04-21 10:25:04', '', 0, 'http://localhost/upen/my_web/?p=1', 0, 'post', '', 1),
(3, 1, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2019-04-21 10:25:04', '2019-04-21 10:25:04', '', 0, 'http://localhost/upen/my_web/?p=1', 0, 'post', '', 1),
(4, 1, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/upen/my_web/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'trash', 'closed', 'open', '', 'sample-page__trashed-2', '', '', '2019-04-21 11:31:35', '2019-04-21 11:31:35', '', 0, 'http://localhost/upen/my_web/?page_id=2', 0, 'page', '', 0),
(5, 1, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/upen/my_web/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'trash', 'closed', 'open', '', 'sample-page__trashed', '', '', '2019-04-21 11:31:33', '2019-04-21 11:31:33', '', 0, 'http://localhost/upen/my_web/?page_id=2', 0, 'page', '', 0),
(6, 2, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '', 'home', '', 'trash', 'closed', 'open', '', 'sample-page__trashed-3', '', '', '2019-04-21 15:54:40', '2019-04-21 15:54:40', '', 0, 'http://localhost/upen/my_web/?page_id=2', 0, 'page', '', 0),
(7, 1, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/upen/my_web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'trash', 'closed', 'open', '', 'privacy-policy__trashed', '', '', '2019-04-21 11:31:17', '2019-04-21 11:31:17', '', 0, 'http://localhost/upen/my_web/?page_id=3', 0, 'page', '', 0),
(8, 1, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/upen/my_web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'trash', 'closed', 'open', '', 'privacy-policy__trashed-2', '', '', '2019-04-21 11:31:20', '2019-04-21 11:31:20', '', 0, 'http://localhost/upen/my_web/?page_id=3', 0, 'page', '', 0),
(9, 2, '2019-04-21 10:25:04', '2019-04-21 10:25:04', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/upen/my_web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'trash', 'closed', 'open', '', 'privacy-policy__trashed-3', '', '', '2019-04-21 11:31:23', '2019-04-21 11:31:23', '', 0, 'http://localhost/upen/my_web/?page_id=3', 0, 'page', '', 0),
(10, 1, '2019-04-21 10:25:56', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-04-21 10:25:56', '0000-00-00 00:00:00', '', 0, 'http://localhost/upen/my_web/?p=10', 0, 'post', '', 0),
(11, 1, '2019-04-21 11:24:22', '2019-04-21 11:24:22', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:13:\"page_template\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:9:\"index.php\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'home', 'home', 'trash', 'closed', 'closed', '', 'group_5cbc523ff0fee__trashed', '', '', '2019-04-21 11:30:01', '2019-04-21 11:30:01', '', 0, 'http://localhost/upen/my_web/?post_type=acf-field-group&#038;p=11', 0, 'acf-field-group', '', 0),
(12, 1, '2019-04-21 11:24:22', '2019-04-21 11:24:22', 'a:10:{s:4:\"type\";s:8:\"repeater\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"collapsed\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:6:\"layout\";s:5:\"table\";s:12:\"button_label\";s:0:\"\";}', 'slider', 'slider', 'trash', 'closed', 'closed', '', 'field_5cbc524f277df__trashed', '', '', '2019-04-21 11:30:02', '2019-04-21 11:30:02', '', 11, 'http://localhost/upen/my_web/?post_type=acf-field&#038;p=12', 0, 'acf-field', '', 0),
(13, 1, '2019-04-21 11:24:23', '2019-04-21 11:24:23', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 's_img1', 's_img1', 'publish', 'closed', 'closed', '', 'field_5cbc528a277e0', '', '', '2019-04-21 11:24:23', '2019-04-21 11:24:23', '', 12, 'http://localhost/upen/my_web/?post_type=acf-field&p=13', 0, 'acf-field', '', 0),
(14, 1, '2019-04-21 11:24:23', '2019-04-21 11:24:23', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 's_txt1', 's_txt1', 'publish', 'closed', 'closed', '', 'field_5cbc52a0277e1', '', '', '2019-04-21 11:24:23', '2019-04-21 11:24:23', '', 12, 'http://localhost/upen/my_web/?post_type=acf-field&p=14', 1, 'acf-field', '', 0),
(15, 1, '2019-04-21 11:29:42', '2019-04-21 11:29:42', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:13:\"page_template\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:9:\"index.php\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'home', 'home', 'publish', 'closed', 'closed', '', 'group_5cbc53f241f02', '', '', '2019-04-21 16:35:31', '2019-04-21 16:35:31', '', 0, 'http://localhost/upen/my_web/?post_type=acf-field-group&#038;p=15', 0, 'acf-field-group', '', 0),
(17, 1, '2019-04-21 11:31:17', '2019-04-21 11:31:17', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/upen/my_web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-04-21 11:31:17', '2019-04-21 11:31:17', '', 7, 'http://localhost/upen/my_web/?p=17', 0, 'revision', '', 0),
(18, 1, '2019-04-21 11:31:20', '2019-04-21 11:31:20', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/upen/my_web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2019-04-21 11:31:20', '2019-04-21 11:31:20', '', 8, 'http://localhost/upen/my_web/?p=18', 0, 'revision', '', 0),
(19, 1, '2019-04-21 11:31:23', '2019-04-21 11:31:23', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/upen/my_web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2019-04-21 11:31:23', '2019-04-21 11:31:23', '', 9, 'http://localhost/upen/my_web/?p=19', 0, 'revision', '', 0),
(20, 1, '2019-04-21 11:31:33', '2019-04-21 11:31:33', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/upen/my_web/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-04-21 11:31:33', '2019-04-21 11:31:33', '', 5, 'http://localhost/upen/my_web/?p=20', 0, 'revision', '', 0),
(21, 1, '2019-04-21 11:31:35', '2019-04-21 11:31:35', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/upen/my_web/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2019-04-21 11:31:35', '2019-04-21 11:31:35', '', 4, 'http://localhost/upen/my_web/?p=21', 0, 'revision', '', 0),
(22, 1, '2019-04-21 11:32:40', '2019-04-21 11:32:40', '<!-- wp:paragraph -->\r\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:quote -->\r\n<blockquote class=\"wp-block-quote\">\r\n<p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p>\r\n</blockquote>\r\n<!-- /wp:quote -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>...or something like this:</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:quote -->\r\n<blockquote class=\"wp-block-quote\">\r\n<p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<!-- /wp:quote -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/upen/my_web/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\r\n<!-- /wp:paragraph -->', 'home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-04-21 11:32:40', '2019-04-21 11:32:40', '', 6, 'http://localhost/upen/my_web/?p=22', 0, 'revision', '', 0),
(23, 1, '2019-04-21 11:32:47', '2019-04-21 11:32:47', '', 'home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-04-21 11:32:47', '2019-04-21 11:32:47', '', 6, 'http://localhost/upen/my_web/?p=23', 0, 'revision', '', 0),
(25, 1, '2019-04-21 11:34:05', '2019-04-21 11:34:05', '', 'home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-04-21 11:34:05', '2019-04-21 11:34:05', '', 6, 'http://localhost/upen/my_web/?p=25', 0, 'revision', '', 0),
(26, 1, '2019-04-21 11:37:59', '2019-04-21 11:37:59', '', 'about', '', 'publish', 'closed', 'closed', '', 'about', '', '', '2019-04-21 11:37:59', '2019-04-21 11:37:59', '', 0, 'http://localhost/upen/my_web/?page_id=26', 0, 'page', '', 0),
(27, 1, '2019-04-21 11:37:59', '2019-04-21 11:37:59', '', 'about', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2019-04-21 11:37:59', '2019-04-21 11:37:59', '', 26, 'http://localhost/upen/my_web/?p=27', 0, 'revision', '', 0),
(29, 1, '2019-04-21 11:48:47', '2019-04-21 11:48:47', '', 'home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-04-21 11:48:47', '2019-04-21 11:48:47', '', 6, 'http://localhost/upen/my_web/6-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2019-04-21 12:53:59', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-04-21 12:53:59', '0000-00-00 00:00:00', '', 0, 'http://localhost/upen/my_web/?post_type=acf-field-group&p=30', 0, 'acf-field-group', '', 0),
(33, 1, '2019-04-21 12:55:46', '2019-04-21 12:55:46', '', 'home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-04-21 12:55:46', '2019-04-21 12:55:46', '', 6, 'http://localhost/upen/my_web/6-revision-v1/', 0, 'revision', '', 0),
(34, 1, '2019-04-21 13:36:27', '2019-04-21 13:36:27', '', 'testimonal', '', 'publish', 'closed', 'closed', '', 'testimonal', '', '', '2019-04-21 13:36:27', '2019-04-21 13:36:27', '', 0, 'http://localhost/upen/my_web/?page_id=34', 0, 'page', '', 0),
(35, 1, '2019-04-21 13:36:27', '2019-04-21 13:36:27', '', 'testimonal', '', 'inherit', 'closed', 'closed', '', '34-revision-v1', '', '', '2019-04-21 13:36:27', '2019-04-21 13:36:27', '', 34, 'http://localhost/upen/my_web/34-revision-v1/', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(39, 1, '2019-04-21 15:53:28', '2019-04-21 15:53:28', '', 'home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-04-21 15:53:28', '2019-04-21 15:53:28', '', 6, 'http://localhost/upen/my_web/6-revision-v1/', 0, 'revision', '', 0),
(40, 1, '2019-04-21 15:54:53', '2019-04-21 15:54:53', '', 'home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2019-04-21 16:53:30', '2019-04-21 16:53:30', '', 0, 'http://localhost/upen/my_web/?page_id=40', 0, 'page', '', 0),
(41, 1, '2019-04-21 15:54:53', '2019-04-21 15:54:53', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 15:54:53', '2019-04-21 15:54:53', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2019-04-21 15:55:18', '2019-04-21 15:55:18', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 15:55:18', '2019-04-21 15:55:18', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2019-04-21 16:00:21', '2019-04-21 16:00:21', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:00:21', '2019-04-21 16:00:21', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(46, 1, '2019-04-21 16:01:14', '2019-04-21 16:01:14', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:01:14', '2019-04-21 16:01:14', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2019-04-21 16:01:51', '2019-04-21 16:01:51', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:01:51', '2019-04-21 16:01:51', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(52, 1, '2019-04-21 16:02:58', '2019-04-21 16:02:58', '', '5', '', 'inherit', 'open', 'closed', '', '5', '', '', '2019-04-21 16:02:58', '2019-04-21 16:02:58', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/5.jpg', 0, 'attachment', 'image/jpeg', 0),
(53, 1, '2019-04-21 16:03:56', '2019-04-21 16:03:56', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:03:56', '2019-04-21 16:03:56', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(54, 1, '2019-04-21 16:05:20', '2019-04-21 16:05:20', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:05:20', '2019-04-21 16:05:20', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(55, 1, '2019-04-21 16:06:06', '2019-04-21 16:06:06', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:06:06', '2019-04-21 16:06:06', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(56, 1, '2019-04-21 16:31:58', '2019-04-21 16:31:58', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:4:\"post\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'slider', 'slider', 'trash', 'closed', 'closed', '', 'group_5cbc9ac9c0922__trashed', '', '', '2019-04-21 16:32:28', '2019-04-21 16:32:28', '', 0, 'http://localhost/upen/my_web/?post_type=acf-field-group&#038;p=56', 0, 'acf-field-group', '', 0),
(57, 1, '2019-04-21 16:31:58', '2019-04-21 16:31:58', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'image1', 'image1', 'trash', 'closed', 'closed', '', 'field_5cbc9ae08b3ee__trashed', '', '', '2019-04-21 16:32:28', '2019-04-21 16:32:28', '', 56, 'http://localhost/upen/my_web/?post_type=acf-field&#038;p=57', 0, 'acf-field', '', 0),
(58, 1, '2019-04-21 16:32:59', '2019-04-21 16:32:59', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'image1', 'image1', 'publish', 'closed', 'closed', '', 'field_5cbc9b22d5ff1', '', '', '2019-04-21 16:32:59', '2019-04-21 16:32:59', '', 15, 'http://localhost/upen/my_web/?post_type=acf-field&p=58', 0, 'acf-field', '', 0),
(59, 1, '2019-04-21 16:33:25', '2019-04-21 16:33:25', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:33:25', '2019-04-21 16:33:25', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(60, 1, '2019-04-21 16:35:30', '2019-04-21 16:35:30', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'image2', 'image2', 'publish', 'closed', 'closed', '', 'field_5cbc9b7b727db', '', '', '2019-04-21 16:35:30', '2019-04-21 16:35:30', '', 15, 'http://localhost/upen/my_web/?post_type=acf-field&p=60', 1, 'acf-field', '', 0),
(61, 1, '2019-04-21 16:35:30', '2019-04-21 16:35:30', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'image3', 'image3', 'publish', 'closed', 'closed', '', 'field_5cbc9b90727dc', '', '', '2019-04-21 16:35:30', '2019-04-21 16:35:30', '', 15, 'http://localhost/upen/my_web/?post_type=acf-field&p=61', 2, 'acf-field', '', 0),
(62, 1, '2019-04-21 16:35:30', '2019-04-21 16:35:30', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'image4', 'image4', 'publish', 'closed', 'closed', '', 'field_5cbc9ba5727dd', '', '', '2019-04-21 16:35:30', '2019-04-21 16:35:30', '', 15, 'http://localhost/upen/my_web/?post_type=acf-field&p=62', 3, 'acf-field', '', 0),
(63, 1, '2019-04-21 16:35:31', '2019-04-21 16:35:31', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:6:\"medium\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'image5', 'image5', 'publish', 'closed', 'closed', '', 'field_5cbc9bba727de', '', '', '2019-04-21 16:35:31', '2019-04-21 16:35:31', '', 15, 'http://localhost/upen/my_web/?post_type=acf-field&p=63', 4, 'acf-field', '', 0),
(64, 1, '2019-04-21 16:35:59', '2019-04-21 16:35:59', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:35:59', '2019-04-21 16:35:59', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(65, 1, '2019-04-21 16:41:08', '2019-04-21 16:41:08', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:41:08', '2019-04-21 16:41:08', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(66, 1, '2019-04-21 16:49:50', '2019-04-21 16:49:50', '', 'black-black-watch-cellphone-1841841', '', 'inherit', 'open', 'closed', '', 'black-black-watch-cellphone-1841841', '', '', '2019-04-21 16:49:50', '2019-04-21 16:49:50', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/black-black-watch-cellphone-1841841.jpg', 0, 'attachment', 'image/jpeg', 0),
(67, 1, '2019-04-21 16:50:10', '2019-04-21 16:50:10', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:50:10', '2019-04-21 16:50:10', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(68, 1, '2019-04-21 16:50:47', '2019-04-21 16:50:47', '', 'business-cellular-telephone-communication-682933', '', 'inherit', 'open', 'closed', '', 'business-cellular-telephone-communication-682933', '', '', '2019-04-21 16:50:47', '2019-04-21 16:50:47', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/business-cellular-telephone-communication-682933.jpg', 0, 'attachment', 'image/jpeg', 0),
(69, 1, '2019-04-21 16:50:56', '2019-04-21 16:50:56', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:50:56', '2019-04-21 16:50:56', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0),
(70, 1, '2019-04-21 16:52:00', '2019-04-21 16:52:00', '', 'black-and-white-cable-charger-dark-236132', '', 'inherit', 'open', 'closed', '', 'black-and-white-cable-charger-dark-236132', '', '', '2019-04-21 16:52:00', '2019-04-21 16:52:00', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/black-and-white-cable-charger-dark-236132.jpg', 0, 'attachment', 'image/jpeg', 0),
(71, 1, '2019-04-21 16:52:19', '2019-04-21 16:52:19', '', 'apple-equipment-gadget-277406', '', 'inherit', 'open', 'closed', '', 'apple-equipment-gadget-277406', '', '', '2019-04-21 16:52:19', '2019-04-21 16:52:19', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/apple-equipment-gadget-277406.jpg', 0, 'attachment', 'image/jpeg', 0),
(72, 1, '2019-04-21 16:52:32', '2019-04-21 16:52:32', '', 'calculator-clean-desk-433639', '', 'inherit', 'open', 'closed', '', 'calculator-clean-desk-433639', '', '', '2019-04-21 16:52:32', '2019-04-21 16:52:32', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/calculator-clean-desk-433639.jpg', 0, 'attachment', 'image/jpeg', 0),
(73, 1, '2019-04-21 16:53:23', '2019-04-21 16:53:23', '', 'casual-cellphone-communication-1262971', '', 'inherit', 'open', 'closed', '', 'casual-cellphone-communication-1262971', '', '', '2019-04-21 16:53:23', '2019-04-21 16:53:23', '', 40, 'http://localhost/upen/my_web/wp-content/uploads/2019/04/casual-cellphone-communication-1262971.jpg', 0, 'attachment', 'image/jpeg', 0),
(74, 1, '2019-04-21 16:53:30', '2019-04-21 16:53:30', '', 'home', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2019-04-21 16:53:30', '2019-04-21 16:53:30', '', 40, 'http://localhost/upen/my_web/40-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 0, 0),
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 2, 'nickname', 'upen'),
(2, 1, 'nickname', 'upen'),
(3, 2, 'first_name', ''),
(4, 1, 'first_name', ''),
(5, 2, 'last_name', ''),
(6, 1, 'last_name', ''),
(7, 2, 'description', ''),
(8, 1, 'description', ''),
(9, 2, 'rich_editing', 'true'),
(10, 1, 'rich_editing', 'true'),
(11, 2, 'syntax_highlighting', 'true'),
(12, 1, 'syntax_highlighting', 'true'),
(13, 2, 'comment_shortcuts', 'false'),
(14, 1, 'comment_shortcuts', 'false'),
(15, 2, 'admin_color', 'fresh'),
(16, 1, 'admin_color', 'fresh'),
(17, 2, 'use_ssl', '0'),
(18, 1, 'use_ssl', '0'),
(19, 2, 'show_admin_bar_front', 'true'),
(20, 1, 'show_admin_bar_front', 'true'),
(21, 2, 'locale', ''),
(22, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(23, 1, 'locale', ''),
(24, 2, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(25, 1, 'wp_user_level', '10'),
(26, 2, 'wp_user_level', '10'),
(27, 2, 'dismissed_wp_pointers', 'wp496_privacy'),
(28, 1, 'dismissed_wp_pointers', 'wp496_privacy,theme_editor_notice'),
(29, 1, 'session_tokens', 'a:1:{s:64:\"674e60ebbd90fc91d1642e70cae74eb8b75c2e5c02e743e62c5c5d48cbdedbfc\";a:4:{s:10:\"expiration\";i:1556015153;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36\";s:5:\"login\";i:1555842353;}}'),
(30, 1, 'wp_dashboard_quick_press_last_post_id', '10'),
(31, 1, 'wp_user-settings', 'libraryContent=browse'),
(32, 1, 'wp_user-settings-time', '1555846441'),
(33, 1, 'closedpostboxes_page', 'a:0:{}'),
(34, 1, 'metaboxhidden_page', 'a:5:{i:0;s:12:\"revisionsdiv\";i:1;s:16:\"commentstatusdiv\";i:2;s:11:\"commentsdiv\";i:3;s:7:\"slugdiv\";i:4;s:9:\"authordiv\";}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'upen', '$P$Bp6m.dfSo8hm.JSbYjHL37Xc/phEfQ.', 'upen', 'upen.j1986@gmail.com', '', '2019-04-21 10:24:59', '', 0, 'upen'),
(2, 'upen', '$P$BqQ4k2fHbFDryWxiQeUQGD4qPjXrde0', 'upen', 'upen.j1986@gmail.com', '', '2019-04-21 10:24:59', '', 0, 'upen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

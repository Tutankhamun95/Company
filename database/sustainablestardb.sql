-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2023 at 02:53 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sustainablestardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'LinkedIn Motivation', '2023-04-11 02:49:03', '2023-04-11 02:49:03'),
(4, 'Tweets', '2023-04-11 02:49:07', '2023-04-11 02:49:07'),
(5, 'Trending', '2023-04-11 02:49:11', '2023-04-11 02:49:11'),
(6, 'Latest', '2023-04-11 02:49:14', '2023-04-11 02:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'Maha Muffins', 'Specialized in making keka', 3, '2023-04-11 02:48:34', '2023-04-11 02:48:34'),
(11, 'Tutankhamun Technologies', 'Software House, specialized in Web & Mobile App Dev', 3, '2023-04-11 02:48:08', '2023-04-11 02:48:08'),
(13, 'Dates n Spice', 'this is a bakery shop', 4, '2023-04-11 02:51:05', '2023-04-11 02:51:05'),
(14, 'title', 'jtjjtj', 4, '2023-04-11 03:04:56', '2023-04-11 03:04:56'),
(15, 'Noor\'s Latest Company', 'latest company by nour', 4, '2023-04-11 03:07:16', '2023-04-11 03:07:16'),
(16, 'maha\'s company', 'maha', 5, '2023-04-11 03:21:52', '2023-04-11 03:21:52'),
(17, 'Lamar\'s Company', 'this is lamar\'s company', 6, '2023-04-11 03:30:51', '2023-04-11 03:30:51'),
(18, 'Maha & Lamar Co.', 'This is Lamar\'s Collab with Maha', 6, '2023-04-11 03:33:53', '2023-04-11 03:33:53'),
(19, 'Wavy World', 'This is Wavy World', 7, '2023-04-11 03:40:19', '2023-04-11 03:40:19'),
(20, 'Lamar', 'lamar', 7, '2023-04-11 03:47:09', '2023-04-11 03:47:09'),
(21, 'Bakery Shop', 'this is a bakery shop', 4, '2023-04-11 09:44:10', '2023-04-11 09:44:10'),
(22, 'Rahaf\'s Company', 'this is rahaf\'s first company', 8, '2023-04-11 11:41:36', '2023-04-11 11:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

DROP TABLE IF EXISTS `company_user`;
CREATE TABLE IF NOT EXISTS `company_user` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_user`
--

INSERT INTO `company_user` (`id`, `company_id`, `user_id`, `created_at`, `updated_at`) VALUES
(151, 22, 8, NULL, NULL),
(150, 21, 4, NULL, NULL),
(149, 20, 7, NULL, NULL),
(148, 20, 6, NULL, NULL),
(147, 20, 4, NULL, NULL),
(146, 19, 7, NULL, NULL),
(144, 18, 5, NULL, NULL),
(143, 17, 6, NULL, NULL),
(142, 12, 5, NULL, NULL),
(141, 16, 5, NULL, NULL),
(140, 14, 4, NULL, NULL),
(138, 13, 4, NULL, NULL),
(137, 12, 3, NULL, NULL),
(136, 11, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

DROP TABLE IF EXISTS `company_users`;
CREATE TABLE IF NOT EXISTS `company_users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2023_04_07_014202_create_posts_table', 1),
(20, '2023_04_07_014318_create_categories_table', 1),
(21, '2023_04_07_215617_create_tags_table', 1),
(22, '2023_04_07_224417_create_companies_table', 1),
(23, '2023_04_07_230457_post_tag_table_creation', 1),
(24, '2023_04_08_204028_company_user_table_migration', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category_id`, `company_id`, `user_id`, `created_at`, `updated_at`) VALUES
(41, 'This is our latest post', 'This is our latest postThis is our latest postThis is our latest postThis is our latest post', '5', '13', 4, '2023-04-11 02:52:50', '2023-04-11 02:52:50'),
(40, 'Our Next Event is coming soon', 'stay tuned for our next even in the american school\'s bazaar!', '5', '13', 4, '2023-04-11 02:52:08', '2023-04-11 02:52:08'),
(39, 'Tut Tech Post', 'this is my first post for tut tech', '5', '11', 3, '2023-04-11 02:50:03', '2023-04-11 02:50:03'),
(42, 'n nnnn', 'nnnnnn', '3', '13', 4, '2023-04-11 02:53:37', '2023-04-11 02:53:37'),
(43, 'nnnnnnnnn', 'nnnnnnnnnnnnn', '3', '16', 5, '2023-04-11 03:22:16', '2023-04-11 03:22:16'),
(44, 'This is Lamar\'s Company first Post', 'this is her first post', '5', '17', 6, '2023-04-11 03:32:00', '2023-04-11 03:32:00'),
(45, 'mmmm', 'mmmmmmm', '3', NULL, 7, '2023-04-11 03:39:43', '2023-04-11 03:44:58'),
(46, 'This is Wavy World', 'ready to conquer za world', '3', '19', 7, '2023-04-11 03:45:23', '2023-04-11 03:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `tag_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL),
(15, 17, 1, NULL, NULL),
(16, 18, 1, NULL, NULL),
(17, 19, 1, NULL, NULL),
(18, 20, 1, NULL, NULL),
(19, 21, 1, NULL, NULL),
(20, 22, 1, NULL, NULL),
(21, 23, 1, NULL, NULL),
(22, 24, 1, NULL, NULL),
(23, 26, 1, NULL, NULL),
(24, 27, 1, NULL, NULL),
(25, 28, 1, NULL, NULL),
(26, 29, 1, NULL, NULL),
(27, 31, 1, NULL, NULL),
(28, 32, 1, NULL, NULL),
(29, 33, 1, NULL, NULL),
(30, 34, 1, NULL, NULL),
(31, 35, 1, NULL, NULL),
(32, 36, 1, NULL, NULL),
(33, 37, 1, NULL, NULL),
(34, 37, 2, NULL, NULL),
(35, 38, 1, NULL, NULL),
(36, 38, 2, NULL, NULL),
(37, 39, 3, NULL, NULL),
(38, 40, 4, NULL, NULL),
(39, 40, 3, NULL, NULL),
(40, 41, 4, NULL, NULL),
(41, 41, 3, NULL, NULL),
(42, 42, 4, NULL, NULL),
(43, 43, 3, NULL, NULL),
(44, 44, 3, NULL, NULL),
(45, 45, 3, NULL, NULL),
(46, 45, 4, NULL, NULL),
(47, 46, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(4, 'vr', '2023-04-11 02:49:26', '2023-04-11 02:49:26'),
(3, 'ai', '2023-04-11 02:49:20', '2023-04-11 02:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subscribed` tinyint NOT NULL DEFAULT '0',
  `company_id` bigint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_company_id_foreign` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `subscribed`, `company_id`) VALUES
(4, 'Noor', 'noor@mail.com', NULL, '$2y$10$quSJn855cuCr3UPnAbBL6uWuaMFS6PslxPmtkptW.GXp8.rqWBvnK', 'Ar5EV78IHYDSs5gKasyxGBYE8aZhEVtBWyLlt1L5bgmWBnx0DdacwRUf9Gdv', '2023-04-11 02:50:39', '2023-04-11 02:50:51', 1, NULL),
(3, 'Ali Elmahdi', 'ali-mahdy@windowslive.com', NULL, '$2y$10$hHK1HPT0hoWG.Yq5OELL3.OFa73jMvMxbYqOfY6SBv/PeTTi4qJxy', 'Ppo58WJV1l3A2s7isWdlTywHVRLN19lZSEeKF02X7KYVJsUjOm2HdfgpfKhL', '2023-04-11 02:47:39', '2023-04-11 02:47:48', 1, NULL),
(5, 'Maha Hossam', 'maha@mail.com', NULL, '$2y$10$6STiAWkV1mI985GfNksvt.bFuot9G/qWYlOePKoBrOYb2y3ADT5Xm', 'STGU3pINmRNnzsxV4lgYBzbHKnanRPUTWChJa5r8QyNgNe2RswcgIfcK0xhd', '2023-04-11 03:08:31', '2023-04-11 03:29:36', 1, NULL),
(6, 'Lamar Hossam', 'lamar@mail.com', NULL, '$2y$10$z.ZrD5KSAqLIQXrK52u38OzBrBN9r5qimJ/p6DUWfn302Ob5SByjG', 'Xw5thiSIh9v4R64hMqQczJtelAjlfxlRaoVKnmZwHianezOwTMCFt9HVfV5j', '2023-04-11 03:30:15', '2023-04-11 03:33:21', 1, NULL),
(7, 'Lamees', 'youroee2@gmail.com', NULL, '$2y$10$VjAYtPQwvq8DlrcfBI0/M.7TNTx6dFUlS4XPIhErHUF.zE8WSnFfS', 'eDEp42FTHOYDnupTKl2gQqIxCYquUiOSqzeGKDP2quNL4Mo90lpwQyBTqXNW', '2023-04-11 03:37:20', '2023-04-11 03:46:49', 1, NULL),
(8, 'Rahaf', 'rahaf@mail.com', NULL, '$2y$10$UpZBbSL9aL174j9cl2FN6eBiSuJZzcXVSIcDhTjlQjWNXV6WcKVxq', NULL, '2023-04-11 11:41:14', '2023-04-11 11:46:15', 1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

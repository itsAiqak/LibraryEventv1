-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 04, 2023 at 02:46 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `eventimage` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `level`, `description`, `eventimage`, `date`, `modified`, `created`) VALUES
(2, 'Title 1', 'school', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2-13d198f8-ada0-4197-b095-dd1d719c9e3c.jpeg', '2023-07-14', '2023-07-04 22:13:00', '2023-07-03 15:08:13'),
(5, 'Title 2', 'test', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, '2023-07-27', '2023-07-04 07:59:02', '2023-07-03 18:02:18'),
(7, 'zzz', 'zzz', 'zzz', NULL, '2023-07-08', '2023-07-04 15:26:08', '2023-07-04 15:26:08'),
(9, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:43', '2023-07-04 17:16:43'),
(10, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:46', '2023-07-04 17:16:46'),
(11, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:47', '2023-07-04 17:16:47'),
(12, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:47', '2023-07-04 17:16:47'),
(13, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:47', '2023-07-04 17:16:47'),
(14, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:47', '2023-07-04 17:16:47'),
(15, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:47', '2023-07-04 17:16:47'),
(16, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:48', '2023-07-04 17:16:48'),
(17, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:48', '2023-07-04 17:16:48'),
(18, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:48', '2023-07-04 17:16:48'),
(19, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:48', '2023-07-04 17:16:48'),
(20, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:48', '2023-07-04 17:16:48'),
(21, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:49', '2023-07-04 17:16:49'),
(22, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:49', '2023-07-04 17:16:49'),
(23, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:49', '2023-07-04 17:16:49'),
(24, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:49', '2023-07-04 17:16:49'),
(25, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:49', '2023-07-04 17:16:49'),
(26, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:49', '2023-07-04 17:16:49'),
(27, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:50', '2023-07-04 17:16:50'),
(28, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:50', '2023-07-04 17:16:50'),
(29, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:50', '2023-07-04 17:16:50'),
(30, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:51', '2023-07-04 17:16:51'),
(31, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:51', '2023-07-04 17:16:51'),
(32, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:51', '2023-07-04 17:16:51'),
(33, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:51', '2023-07-04 17:16:51'),
(34, 'TEST', 'dsad', 'TEST', NULL, '2023-07-21', '2023-07-04 17:16:52', '2023-07-04 17:16:52'),
(35, 'Steven', 'dsad', '1', NULL, '2023-07-21', '2023-07-04 17:17:38', '2023-07-04 17:17:38'),
(36, 'zzz', 'zzz', 'zzz', NULL, '2023-07-14', '2023-07-04 17:22:00', '2023-07-04 17:22:00'),
(37, 'zz', 'zz', 'zz', NULL, '2023-07-14', '2023-07-04 17:25:00', '2023-07-04 17:25:00'),
(38, 'zz', 'zz', 'zz', NULL, '2023-07-15', '2023-07-04 17:28:12', '2023-07-04 17:28:12'),
(39, 'cc', 'cc', 'cc', NULL, '2023-07-07', '2023-07-04 17:29:43', '2023-07-04 17:29:43'),
(40, 'zz', 'zz', 'zz', NULL, '2023-07-14', '2023-07-04 17:31:30', '2023-07-04 17:31:30'),
(41, 'cc', 'cc', 'cc', NULL, '2023-07-14', '2023-07-04 17:33:23', '2023-07-04 17:33:23'),
(42, 'ccc', 'ccc', 'ccc', NULL, '2023-07-20', '2023-07-04 17:36:17', '2023-07-04 17:36:17'),
(43, 'zz', 'xx', 'xx', NULL, '2023-07-15', '2023-07-04 17:43:34', '2023-07-04 17:43:34'),
(44, 'xxx', 'xxx', 'xxx', NULL, '2023-07-20', '2023-07-04 17:46:30', '2023-07-04 17:46:30'),
(45, 'xxx', 'xxx', 'xxx', NULL, '2023-07-20', '2023-07-04 17:46:48', '2023-07-04 17:46:48'),
(46, 'xxx', 'xxx', 'xxx', NULL, '2023-07-20', '2023-07-04 17:47:09', '2023-07-04 17:47:09'),
(47, 'xx', 'xx', 'xx', '47-Screenshot 2023-07-04 at 2.12.47 PM (2).png', '2023-07-21', '2023-07-04 17:48:08', '2023-07-04 17:48:08'),
(48, 'ccc', 'ccc', 'ccc', '48-Screenshot 2023-07-04 at 2.15.09 PM (2).png', '2023-07-29', '2023-07-04 17:49:00', '2023-07-04 17:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Steven', 'suvindran94@gmail.com', NULL, '$2y$10$Yp0Ey7/wVZmn8nUDTK3hvuR56OMAt0WW1.y0BMihtuaPbxTTewOnO', NULL, '2023-07-03 22:05:31', '2023-07-03 22:05:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

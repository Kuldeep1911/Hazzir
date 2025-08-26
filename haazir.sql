-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2025 at 02:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haazir`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `maid_type` varchar(255) NOT NULL,
  `team_id` varchar(255) DEFAULT NULL,
  `service_date` datetime NOT NULL,
  `otp` varchar(4) DEFAULT NULL,
  `otp_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `name`, `phone`, `address`, `maid_type`, `team_id`, `service_date`, `otp`, `otp_verified`, `created_at`, `updated_at`) VALUES
(1, 0, 'Kuldeep kumar', '08090741822', 'krishna -nagar', 'Cook', NULL, '2025-08-25 12:30:00', NULL, 1, '2025-08-24 23:25:20', '2025-08-24 23:26:50'),
(2, 0, 'kuldeep kumar', '8090741822', 'noida', 'Cook', NULL, '2025-08-25 18:16:00', NULL, 1, '2025-08-25 02:10:49', '2025-08-25 02:11:50'),
(3, 0, 'sandeep kumar', '08799783761', 'krishna -nagar\r\npalia kalan', 'Full-time', NULL, '2025-08-25 18:25:00', '2110', 0, '2025-08-25 03:24:05', '2025-08-25 03:24:05'),
(4, 0, 'sandeep kumar', '08799783761', 'krishna -nagar\r\npalia kalan', 'Full-time', NULL, '2025-08-25 18:25:00', '7492', 0, '2025-08-25 03:27:57', '2025-08-25 03:27:57'),
(5, 0, 'sandeep kumar', '08799783761', 'krishna -nagar\r\npalia kalan', 'Full-time', NULL, '2025-08-25 18:25:00', '8615', 0, '2025-08-25 03:28:19', '2025-08-25 03:28:19'),
(6, 0, 'sandeep kumar', '08799783761', 'krishna -nagar\r\npalia kalan', 'Full-time', NULL, '2025-08-25 18:25:00', '6975', 0, '2025-08-25 03:33:01', '2025-08-25 03:33:01'),
(7, 0, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Daily Cleaner', NULL, '2025-08-25 20:48:00', '1418', 0, '2025-08-25 03:42:29', '2025-08-25 03:42:29'),
(8, 0, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Daily Cleaner', NULL, '2025-08-25 00:06:00', '1674', 0, '2025-08-25 08:01:12', '2025-08-25 08:01:12'),
(9, 0, 'kuldeep kumar', '08090741822', 'noida', 'Cook', NULL, '2025-08-25 19:12:00', '9368', 0, '2025-08-25 08:08:45', '2025-08-25 08:08:45'),
(13, 0, 'booking', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048\r\nCareerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Baby Care', NULL, '2025-08-25 19:24:00', '0830', 0, '2025-08-25 08:20:50', '2025-08-25 08:20:50'),
(14, 0, 'ho Https://nationallawolympiad.com/', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048\r\nCareerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Full-time', NULL, '2025-08-25 19:26:00', '2483', 0, '2025-08-25 08:21:52', '2025-08-25 08:21:52'),
(15, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Cook', NULL, '2025-08-25 19:34:00', '1759', 0, '2025-08-25 08:31:01', '2025-08-25 08:31:01'),
(16, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Cook', NULL, '2025-08-25 19:34:00', '0388', 0, '2025-08-25 08:34:21', '2025-08-25 08:34:21'),
(17, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Cook', NULL, '2025-08-25 19:34:00', '7653', 0, '2025-08-25 08:35:09', '2025-08-25 08:35:09'),
(18, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Daily Cleaner', NULL, '2025-08-25 19:40:00', '3990', 0, '2025-08-25 08:36:12', '2025-08-25 08:36:12'),
(19, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Full-time', NULL, '2025-08-25 19:41:00', '3079', 0, '2025-08-25 08:37:08', '2025-08-25 08:37:08'),
(20, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Cook', NULL, '2025-08-25 19:44:00', '2427', 0, '2025-08-25 08:41:11', '2025-08-25 08:41:11'),
(21, NULL, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Cook', NULL, '2025-08-25 19:44:00', '8708', 0, '2025-08-25 08:42:46', '2025-08-25 08:42:46'),
(22, 4, 'Nidhi Jain', '08799783761', 'Careerliy, Add- GF- HS-35, Kailash Colony, Delhi, 110048', 'Baby Care', NULL, '2025-08-25 23:52:00', '2056', 0, '2025-08-25 08:48:23', '2025-08-25 08:48:23'),
(23, 4, 'kuldeep kumar', '08799783761', 'noida', 'Cook', NULL, '2025-08-25 01:23:00', '0604', 0, '2025-08-25 10:18:53', '2025-08-25 10:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_08_25_044324_create_bookings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `age` int(121) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `gender` varchar(121) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `experience` int(121) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(191) NOT NULL DEFAULT 0,
  `confirmation_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `specialization`, `age`, `language`, `gender`, `image`, `experience`, `email_verified_at`, `password`, `role`, `confirmation_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kuldeep kumar', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$9ZwCkWq2qpheFKaQfhU/T.3vy0l.EYc/cWTch8BAra91qCf/85VsK', 1, NULL, NULL, '2025-08-20 12:00:18', '2025-08-20 12:00:18'),
(2, 'Aman Yadav', 'user@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$Ji4SKWaS2v7nScpWlUkU2uZJRcD3skWT7lWkoJqeobCo3dZblvaMm', 0, NULL, NULL, '2025-08-20 12:54:35', '2025-08-20 12:54:35'),
(3, 'Rahul Kumar', 'client@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$607NILi/O9qsbJe/WMJKU.M3Fc8VU99DWRbb/1pX0A8l3WlfGzoIa', 2, NULL, NULL, '2025-08-20 12:55:35', '2025-08-20 12:55:35'),
(4, 'harsh pandey', 'harsh@gmail.com', 8090741822, 'delhi', NULL, 23, NULL, 'male', 'maids/cs1aU99F1BxWtNkM5wWY8aRQOfgdfXiMe0iLxjYt.png', 0, NULL, '$2y$12$Rhq5BoTCBjB08Bc5GYEIlO6Ky.YAwRcwyVcq/4cxAIwRidKdCALwi', 0, NULL, NULL, '2025-08-21 04:02:25', '2025-08-21 05:17:07'),
(5, 'sandeep', 'sandeep@gmail.com', 9170199205, 'palia kalan kheri', NULL, 25, 'hindi', 'male', 'maids/z2ypr0hqSPnfFVKKQWoD1Z7jG5t4jQ8tvwG89Cd4.png', 1, NULL, '$2y$12$.mtI.0UIxyA1/8xpKIqeOeE0VM7UfKvT8iXNm/6GVzDT6PN1fJsZS', 0, NULL, NULL, '2025-08-21 05:18:03', '2025-08-21 05:19:13'),
(6, 'kapil', 'kapil@gamil.com', 9170199208, 'palia kalan', 'Auto Driver', 24, 'hindi', 'male', 'maids/XOcB6MfW0oARiTIhLIVeZQG5zJtOXe21oAnZWQ68.png', 3, NULL, '$2y$12$D6.XbnLM43wNqOaYZsPojuGPAK9iJIpceiIWviEyVdoUpD3xeHdha', 0, NULL, NULL, '2025-08-21 05:21:18', '2025-08-21 05:22:25'),
(7, 'harsh pandey', 'herop929@gmail.com', 9873668074, 'egfhjrehgbhfnrkdrjfthgrhjdjfh', 'Coding', 23, 'hindi', 'male', 'maids/2kqlxv8b6AeQeHWjtZ94FUoQkom2NJJIHjb5dQAV.png', 1, NULL, '$2y$12$hWrMYzRLWtm/RkHxXcyOvu801qu3HkDec9SDrycDh.G4sgHAb7o7u', 0, NULL, NULL, '2025-08-22 08:27:02', '2025-08-22 08:29:53'),
(8, 'Kuldeep kumar', 'info@careerliy.com', 8090741822, 'dfghjkl;', NULL, 21, 'hindi', 'male', 'maids/yGsRWKILZXQYlxMZJKMAZfH0Ip0DwVktnwKAAlLy.png', 0, NULL, '$2y$12$Zf.2W1eqQWZAOovrnGstMuIs61r8F2D0u6FWINBElLRAIlYGzzCYa', 0, NULL, NULL, '2025-08-22 09:49:57', '2025-08-22 09:51:16'),
(15, 'pramod', 'pramod8090@gmail.com', 9170199208, 'bhl colony palia kalan kheri', 'electrical engineering', 22, 'hindi', 'male', 'maids/Iwo3uUrjC2Ymk0udVu5kTiVZdZI2iKpNaKFUd5f9.png', 2, NULL, '$2y$12$JruvLMIwynGPtrlWv/2CP.TfJnTCDoUY5Jf1w1JCiHuaCgovEX4B.', 0, 'HZ6666', NULL, '2025-08-25 00:54:27', '2025-08-25 00:58:09'),
(16, 'REEMA THIND', 'raveshbansal110@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$0IOkW.moHWx86cWAsjcYYOCSIo.O2GA0TUycI0nadYmrrQq8majxK', 0, 'HZ1745', NULL, '2025-08-25 11:30:09', '2025-08-25 11:30:09'),
(17, 'SHIKHA SAURABH', 'sunelwala84@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$kTWEGdJK2SAc5iolUmqz4OJioBGmTDvXknx.TO8qwLVq0GdfwaZP6', 0, 'HZ2178', NULL, '2025-08-25 11:34:12', '2025-08-25 11:34:12'),
(18, 'Rashmi Prashant Harale', 'rashmiprashant72@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$0R2s.9CRkWNJ6TVeqWjjceg2wetSp5IU0UUGBcZzWJ4BVutYJ1vAq', 2, 'HZ4571', NULL, '2025-08-25 11:38:41', '2025-08-25 11:38:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_phone_index` (`phone`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2023 at 08:42 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmarriage2`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nickname`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'علي جمال', 44, '2023-01-10 16:46:10', '2023-01-10 16:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `conditions_provider`
--

CREATE TABLE `conditions_provider` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id_supervisor` bigint UNSIGNED NOT NULL,
  `conditions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conditions_supervisor`
--

CREATE TABLE `conditions_supervisor` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id_supervisor` bigint UNSIGNED NOT NULL,
  `conditions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
-- Table structure for table `period_cost_service_provider`
--

CREATE TABLE `period_cost_service_provider` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id_supervisor` bigint UNSIGNED NOT NULL,
  `period` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `status` enum('active','unactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `period_cost_service_supervisor`
--

CREATE TABLE `period_cost_service_supervisor` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id_supervisor` bigint UNSIGNED NOT NULL,
  `period` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `status` enum('active','unactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
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
-- Table structure for table `roles_provider`
--

CREATE TABLE `roles_provider` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id_supervisor` bigint UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_supervisor`
--

CREATE TABLE `roles_supervisor` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id_supervisor` bigint UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serviceproviders`
--

CREATE TABLE `serviceproviders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rate` decimal(2,1) DEFAULT NULL,
  `user_ID` bigint UNSIGNED DEFAULT NULL,
  `numberId` bigint DEFAULT NULL,
  `accountNumberId` bigint DEFAULT NULL,
  `brief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` enum('active','unactive') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serviceproviders`
--

INSERT INTO `serviceproviders` (`id`, `image`, `rate`, `user_ID`, `numberId`, `accountNumberId`, `brief`, `status`, `created_at`, `updated_at`) VALUES
(3, '1673456131.jpg', NULL, 46, 2124685888888888, NULL, 'ياشتنسيلاشمسنيتنشكسىي', 'active', '2023-01-11 14:55:31', '2023-01-11 16:55:31'),
(4, '1673457042.png', NULL, 50, 5474479745544774474, NULL, 'مكتب مكتب', 'active', '2023-01-11 15:10:42', '2023-01-11 17:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `services_for_provider`
--

CREATE TABLE `services_for_provider` (
  `id` bigint UNSIGNED NOT NULL,
  `user_ID` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services_for_supervisor`
--

CREATE TABLE `services_for_supervisor` (
  `id` bigint UNSIGNED NOT NULL,
  `user_ID` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specification_client`
--

CREATE TABLE `specification_client` (
  `id` bigint UNSIGNED NOT NULL,
  `user_ID` bigint UNSIGNED DEFAULT NULL,
  `realName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maritalStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `beauty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `HealthStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `religious` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `skinColour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kidsNumber` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jobs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `multiplicity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ageyear` date DEFAULT NULL,
  `age` int NOT NULL,
  `breif` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specification_client`
--

INSERT INTO `specification_client` (`id`, `user_ID`, `realName`, `maritalStatus`, `gender`, `length`, `beauty`, `HealthStatus`, `education`, `religious`, `city`, `state`, `address`, `weight`, `skinColour`, `kidsNumber`, `jobs`, `multiplicity`, `ageyear`, `age`, `breif`, `created_at`, `updated_at`) VALUES
(4, 44, 'علي جمال علي', 'حالة 1', 'رجل', 'اطول من 150', 'جميل 1', 'حالة 1', 'مستوي 1', 'مستوي 1', 'الرياض', 'قبيلة 1', 'مدينة 1', 'اطول من 50', 'اسمر', 'نعم', 'عمل 1', 'لا', '2023-01-11', 0, 'ششششش', '2023-01-11 11:01:24', '2023-01-11 13:01:24'),
(5, 44, 'سليبشي', 'حالة 1', 'امراءه', 'اطول من 150', 'جميل 1', 'حالة 1', 'مستوي 1', 'مستوي 1', 'الرياض', 'قبيلة 1', 'مدينة 1', 'اطول من 50', 'اسمر', 'نعم', 'عمل 1', 'لا', '2023-01-11', 0, 'يششيسشيشس', '2023-01-11 15:22:18', '2023-01-11 17:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `specification_required`
--

CREATE TABLE `specification_required` (
  `id` bigint UNSIGNED NOT NULL,
  `user_ID` bigint UNSIGNED DEFAULT NULL,
  `maritalStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `length` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `beauty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `HealthStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `religious` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `skinColour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kidsNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jobs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `multiplicity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ageyear` date DEFAULT NULL,
  `age` int NOT NULL,
  `breif` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specification_required`
--

INSERT INTO `specification_required` (`id`, `user_ID`, `maritalStatus`, `gender`, `length`, `beauty`, `HealthStatus`, `education`, `religious`, `city`, `state`, `address`, `weight`, `skinColour`, `kidsNumber`, `jobs`, `multiplicity`, `ageyear`, `age`, `breif`, `created_at`, `updated_at`) VALUES
(4, 44, 'حالة 1', 'رجل', 'اطول من 150', 'جميل 1', 'حالة 1', 'مستوي 1', 'مستوي 1', 'الرياض', 'قبيلة 1', 'مدينة 1', 'اطول من 50', 'اسمر', 'نعم', 'عمل 1', 'لا', '2023-01-11', 0, 'ششششش', '2023-01-11 11:01:24', '2023-01-11 13:01:24'),
(5, 44, 'حالة 1', 'رجل', 'اطول من 150', 'جميل 1', 'حالة 1', 'مستوي 1', 'مستوي 1', 'جدة', 'قبيلة 1', 'مدينة 1', 'اطول من 50', 'اسمر', 'نعم', 'عمل 1', 'نعم', NULL, 0, 'شسيشسي', '2023-01-11 11:24:27', '2023-01-11 13:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` bigint UNSIGNED NOT NULL,
  `user_ID` bigint UNSIGNED NOT NULL,
  `status` enum('active','unactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `user_ID`, `status`, `created_at`, `updated_at`) VALUES
(4, 45, 'active', '2023-01-10 17:09:57', '2023-01-10 17:09:57'),
(5, 47, 'active', '2023-01-11 14:58:19', '2023-01-11 14:58:19'),
(6, 51, 'active', '2023-01-11 15:12:45', '2023-01-11 15:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completeclient` tinyint(1) DEFAULT NULL,
  `completerequire` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `phone`, `phone_verified_at`, `password`, `remember_token`, `completeclient`, `completerequire`, `created_at`, `updated_at`) VALUES
(44, 'علي جمال', 'عميل', '01124105214', NULL, '$2y$10$5IMJhYMJQBf0BuI3ZIeaPeT7jc61ynyGVJtYcvO8Jg2rnKMu/dokW', NULL, 1, 0, '2023-01-10 16:46:10', '2023-01-11 15:22:18'),
(45, 'علي احمد', 'مشرف', '1111111111111111111111111115', NULL, '$2y$10$jzyyJKcvcKX/eglDrbmUM.bzJGRcRyBBsgQ7JOg61aHlAhHTepPei', NULL, 0, 0, '2023-01-10 17:09:57', '2023-01-10 17:09:57'),
(46, 'مكتب 1', 'مزود خدمة', '01124105214214', NULL, '$2y$10$cPtwI8ht9cEhNATps4yMyONrdzE.dANWXNv72YbKkb9HLFWH2zqkK', NULL, NULL, NULL, '2023-01-11 14:55:31', '2023-01-11 14:55:31'),
(47, 'احمد سمير', 'مشرف', '01124105214214214', NULL, '$2y$10$oUQls0cA75cN1K6zpAx3Ee9MkWAOcFqHsnnfi6Pdn100FeAJ5rUfW', NULL, NULL, NULL, '2023-01-11 14:58:19', '2023-01-11 14:58:19'),
(48, 'علي احمد', 'عميل', '012410521421455', NULL, '$2y$10$4DQcKVyVfIV2109YStCZyuRuDItvmWLl9qEqDAyMKga8vPXebpt4C', NULL, NULL, NULL, '2023-01-11 15:08:56', '2023-01-11 15:08:56'),
(49, 'علي احمد', 'عميل', '15452157412745124', NULL, '$2y$10$wnSJeHynyFkyB6IlqlEDsu..0DH7.u1qgWP/yq67/YfvQ8u/Bmvgm', NULL, NULL, NULL, '2023-01-11 15:09:37', '2023-01-11 15:09:37'),
(50, 'مكتب  3', 'مزود خدمة', '012410521444444', NULL, '$2y$10$XhPEvMHonOTHKq4CBgtkEeVer0W118OorzvgM2RQPw.nkB81EU6LG', NULL, NULL, NULL, '2023-01-11 15:10:42', '2023-01-11 15:10:42'),
(51, 'علي جمال علي', 'مشرف', '01124105271444', NULL, '$2y$10$EHbOK86YBoRIkvqEQSte7eplI/a3XKCdjCYab2e9N9wQrtXW8M2Rq', NULL, NULL, NULL, '2023-01-11 15:12:45', '2023-01-11 15:12:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Foreign` (`user_id`);

--
-- Indexes for table `conditions_provider`
--
ALTER TABLE `conditions_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`service_id_supervisor`);

--
-- Indexes for table `conditions_supervisor`
--
ALTER TABLE `conditions_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`service_id_supervisor`);

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
-- Indexes for table `period_cost_service_provider`
--
ALTER TABLE `period_cost_service_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`service_id_supervisor`);

--
-- Indexes for table `period_cost_service_supervisor`
--
ALTER TABLE `period_cost_service_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`service_id_supervisor`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles_provider`
--
ALTER TABLE `roles_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`service_id_supervisor`);

--
-- Indexes for table `roles_supervisor`
--
ALTER TABLE `roles_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`service_id_supervisor`);

--
-- Indexes for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisiorId` (`user_ID`);

--
-- Indexes for table `services_for_provider`
--
ALTER TABLE `services_for_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Foreign` (`user_ID`);

--
-- Indexes for table `services_for_supervisor`
--
ALTER TABLE `services_for_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Foreign` (`user_ID`);

--
-- Indexes for table `specification_client`
--
ALTER TABLE `specification_client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serviceprovidersId` (`user_ID`);

--
-- Indexes for table `specification_required`
--
ALTER TABLE `specification_required`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serviceprovidersId` (`user_ID`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conditions_provider`
--
ALTER TABLE `conditions_provider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conditions_supervisor`
--
ALTER TABLE `conditions_supervisor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `period_cost_service_provider`
--
ALTER TABLE `period_cost_service_provider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `period_cost_service_supervisor`
--
ALTER TABLE `period_cost_service_supervisor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services_for_provider`
--
ALTER TABLE `services_for_provider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_for_supervisor`
--
ALTER TABLE `services_for_supervisor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specification_client`
--
ALTER TABLE `specification_client`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specification_required`
--
ALTER TABLE `specification_required`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD CONSTRAINT `serviceproviders_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services_for_provider`
--
ALTER TABLE `services_for_provider`
  ADD CONSTRAINT `services_for_provider_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `serviceproviders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services_for_supervisor`
--
ALTER TABLE `services_for_supervisor`
  ADD CONSTRAINT `services_for_supervisor_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `supervisors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specification_client`
--
ALTER TABLE `specification_client`
  ADD CONSTRAINT `specification_client_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specification_required`
--
ALTER TABLE `specification_required`
  ADD CONSTRAINT `specification_required_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD CONSTRAINT `supervisors_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

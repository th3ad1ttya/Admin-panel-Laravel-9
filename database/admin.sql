-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 07:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib32`
--

CREATE TABLE `lib32` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libARMV7aName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libARMV8aName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libARMV7aUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libARMV8aUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libARMV7aVersion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libARMV8aVersion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lib32`
--

INSERT INTO `lib32` (`id`, `libARMV7aName`, `libARMV8aName`, `libARMV7aUrl`, `libARMV8aUrl`, `libARMV7aVersion`, `libARMV8aVersion`, `created_at`, `updated_at`) VALUES
(1, 'lib-armv7a', 'lib-armv8a', 'lib-pg-v7a_v-1.0.0-KJj49.so', 'lib-pg-v8a_v-1.0.0-ozC68.so', '1.0.0', '1.0.0', NULL, '2022-12-06 12:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `lib64`
--

CREATE TABLE `lib64` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lib64ARMV7aName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lib64ARMV8aName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lib64ARMV7aUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lib64ARMV8aUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lib64ARMV7aVersion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lib64ARMV8aVersion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lib64`
--

INSERT INTO `lib64` (`id`, `lib64ARMV7aName`, `lib64ARMV8aName`, `lib64ARMV7aUrl`, `lib64ARMV8aUrl`, `lib64ARMV7aVersion`, `lib64ARMV8aVersion`, `created_at`, `updated_at`) VALUES
(1, 'Lib-v7a', 'Lib-v8a', 'lib-pg64-v7a_v-1.0.0-HJzis.so', 'lib-pg64-v8a_v-1.0.0-Faa22.so', '1.0.0', '1.0.0', NULL, '2022-12-06 14:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `loaderannouncement`
--

CREATE TABLE `loaderannouncement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaderconfig`
--

CREATE TABLE `loaderconfig` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaderVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaderPackage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaderUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaderChangeLog` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaderconfig`
--

INSERT INTO `loaderconfig` (`id`, `name`, `loaderVersion`, `loaderPackage`, `loaderUrl`, `loaderChangeLog`, `created_at`, `updated_at`) VALUES
(1, 'SkullShooter', '1.5', 'com.skullshooter.gm2.loader', 'com.skullshooter.gm2.loader-v-1.5-YDdvDvtC.apk', '**Fixe bugs', NULL, '2022-12-07 08:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `plugin64data`
--

CREATE TABLE `plugin64data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plugin64Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plugin64Version` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plugin64Url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plugin64data`
--

INSERT INTO `plugin64data` (`id`, `plugin64Name`, `plugin64Version`, `plugin64Url`, `created_at`, `updated_at`) VALUES
(1, 'plugin64.apk', '1.0.0', 'plugin64-v-1.0.0-peMMNdEF.apk', NULL, '2022-12-07 08:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `plugindata`
--

CREATE TABLE `plugindata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pluginName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pluginVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pluginUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plugindata`
--

INSERT INTO `plugindata` (`id`, `pluginName`, `pluginVersion`, `pluginUrl`, `created_at`, `updated_at`) VALUES
(1, 'plugin.apk', '1.0.0', 'plugin-v-1.0.0-TTLNzbQQ.apk', NULL, '2022-12-07 08:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `safety`
--

CREATE TABLE `safety` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is32Bit` tinyint(1) DEFAULT 0 COMMENT '0=Safe 1=Unsafe',
  `is64Bit` tinyint(1) DEFAULT 0 COMMENT '0=Safe 1=Unsafe',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `safety`
--

INSERT INTO `safety` (`id`, `is32Bit`, `is64Bit`, `created_at`, `updated_at`) VALUES
(1, 0, 1, NULL, '2022-12-07 08:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `safetystatus`
--

CREATE TABLE `safetystatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is32Bit` tinyint(1) DEFAULT 0 COMMENT '0=Safe 1=Unsafe',
  `is64Bit` tinyint(4) DEFAULT 0 COMMENT '0=Safe 1=Unsafe',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `safetystatus`
--

INSERT INTO `safetystatus` (`id`, `is32Bit`, `is64Bit`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, '2022-12-07 09:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whoAreYou` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=user, 100=admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `whoAreYou`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CEO', 'admin123', 'admin@brand.com', NULL, '$2y$10$HB30CZTeS7vUUs1LXDIqauXdfbh/gTg6eyS8wgjjv4u5XUKPlRnWm', '100', '7ooBdvJul5qjAcWQeNZ4tcGT8Qe7PpathM82FrmDSh7fzNN5ORt84twYdBoo', '2022-12-05 03:32:01', '2022-12-07 12:58:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib32`
--
ALTER TABLE `lib32`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib64`
--
ALTER TABLE `lib64`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaderannouncement`
--
ALTER TABLE `loaderannouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaderconfig`
--
ALTER TABLE `loaderconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plugin64data`
--
ALTER TABLE `plugin64data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plugindata`
--
ALTER TABLE `plugindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety`
--
ALTER TABLE `safety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safetystatus`
--
ALTER TABLE `safetystatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib32`
--
ALTER TABLE `lib32`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lib64`
--
ALTER TABLE `lib64`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaderannouncement`
--
ALTER TABLE `loaderannouncement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaderconfig`
--
ALTER TABLE `loaderconfig`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plugin64data`
--
ALTER TABLE `plugin64data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plugindata`
--
ALTER TABLE `plugindata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `safety`
--
ALTER TABLE `safety`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `safetystatus`
--
ALTER TABLE `safetystatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

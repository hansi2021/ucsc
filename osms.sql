-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 04:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_lists`
--

CREATE TABLE `case_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `lname`, `gender`, `nic`, `address`, `contact`, `email`, `password`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Lyndon ', 'Dias', 'Male', '852340988V', 'No.14, Rosmead Place, Colombo 8', '+94 71 894 6980', 'lyndon@gmail.com', 'Lyndon@123', 'Hansi', 'Hansi', '2021-10-17 09:11:14', '2021-10-17 09:11:37'),
(2, 'Shevantha', 'Felix', 'Female', '967522988V', '9, colombo 8', '071 984 4627', 'shevantha@gmail.com', 'shevantha@123', NULL, NULL, '2021-10-17 06:09:22', '2021-10-17 06:09:22'),
(3, 'Janagan', 'Selvarajan', 'Male', '597823409V', 'No.12/34, Belmond Street, Colombo 12', '070 398 7645', 'selvarajan@gmail.com', 'Janagan@123', NULL, NULL, '2021-10-20 03:38:26', '2021-10-20 03:38:26');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scenrolment_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualified_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_qualifications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_of_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin official',
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin official',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `fname`, `lname`, `gender`, `nic`, `scenrolment_no`, `qualified_area`, `academic_qualifications`, `years_of_experience`, `address`, `contact`, `email`, `password`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Prasantha lal', 'De Alwis', 'Male', '759045893V', 'A19876', 'Criminal Law', 'PhD', '39', 'No.14, Kirulapana Avenue, Colombo 4', '071 345 7289', 'prasantha@gmail.com', 'prasanthalal@123', 'Chani', 'Chani', '2021-10-20 03:59:46', '2021-10-20 03:59:52'),
(2, 'Haridrani ', 'Mututantri', 'Female', '873420829V', 'A27894', 'Civil Law', 'LLB', '10', 'No.112, Mount Road, Moratuwa', '076 459 2945', 'haridrani@gmail.com', 'Haridrani@123', 'Hansi', 'Hansi', '2021-10-20 12:01:32', '2021-10-20 12:01:39'),
(3, 'Harsha', 'Amarasekara', 'Male', '597823409V', 'A17894', 'Commercial Law', 'LLM', '34', 'No.34, Charles Drive, Colombo 4', '076 349 6233', 'harshaamarasekara@gmail.com', 'Harsha@123', 'Admin official', 'Admin official', '2021-10-20 07:19:41', '2021-10-20 07:19:41'),
(5, 'Naomal', 'Pelpola', 'Male', '782630976V', 'A21628', 'Civil Law', 'LLM', '12', 'No.34, Kingsbury Gardens, Colombo 7', '071 286 8922', 'naomalpelpola@gmail.com', 'Naomal@123', 'Admin official', 'Admin official', '2021-10-24 03:56:42', '2021-10-24 03:56:42'),
(6, 'Saumya', 'Amarasekara', 'Female', '782937478V', 'A20387', 'Commercial Law', 'LLM', '32', 'No.19, Vauxhall Street, Colombo 7', '071 494 8944', 'saumyaamarasekara@gmail.com', 'Saumya@123', 'Admin official', 'Admin official', '2021-10-24 04:06:06', '2021-10-24 04:06:06'),
(7, 'Dileepa', 'Peiris', 'Male', '819273873V', 'A19876', 'Criminal Law', 'PhD', '27', 'No.117, Apt 1T, Trillium Scheme, Colombo 8', '071 854 2899', 'dileepapeiris@gmail.com', 'Dileepa@123', 'Admin official', 'Admin official', '2021-10-24 07:54:34', '2021-10-24 07:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers_type`
--

CREATE TABLE `lawyers_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyers_type`
--

INSERT INTO `lawyers_type` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'President\'s Counsel', '2021-10-20 09:18:56', '2021-10-20 09:19:04'),
(2, 'Attorney-at-Law', '2021-10-20 09:20:09', '2021-10-20 09:20:15');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2014_10_12_000000_create_users_table', 6),
(15, '2021_09_25_053132_create_case_lists_table', 6),
(16, '2021_10_17_090031_create_clients_table', 7),
(17, '2021_10_20_034155_create_lawyers_table', 8),
(18, '2021_10_20_075034_create_lawyers_type_table', 9);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `fname`, `lname`, `contact`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hansi', 'Seneviratne', '0719842637', 'hansi@gmail.com', NULL, '$2a$12$k3zIN.6QMD8IXAv5xhYro.Iu5QwKlUaG3FvDI5Ee4x6sOYUDr1CFq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_lists`
--
ALTER TABLE `case_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers_type`
--
ALTER TABLE `lawyers_type`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_lists`
--
ALTER TABLE `case_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lawyers_type`
--
ALTER TABLE `lawyers_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

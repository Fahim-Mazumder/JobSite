-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 06:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `first_name`, `last_name`, `email_address`, `password`, `profile_picture`, `upload_resume`, `skills`, `created_at`, `updated_at`) VALUES
(1, 'Fahim', 'Mazumder', 'fahim.mazumder73@gmail.com', '12345', '1574615556.jpg', '1574615556.pdf', 'CCNA', '2019-11-23 16:31:46', '2019-11-24 11:12:36'),
(3, 'Mahfuzur', 'Rahman', 'himel@gmail.com', '12345', '1574590134.jpg', '1574590134.pdf', 'Laravel', '2019-11-24 03:48:28', '2019-11-24 04:08:54'),
(4, 'Supto', 'hasan', 'supto@gmail.com', '12345', '1574590271.jpg', '1574590271.pdf', 'ASP.net', '2019-11-24 04:09:30', '2019-11-24 04:11:11'),
(5, 'Emon', 'Saha', 'emon@gmail.com', '12345', '1574612728.jpg', '1574612728.pdf', 'Laravel, ASP.net', '2019-11-24 10:23:44', '2019-11-24 10:25:29'),
(6, 'Parvez', 'Ahmed', 'parvez@gmail.com', '12345', '1574612889.jpg', '1574612889.pdf', 'CCNA', '2019-11-24 10:26:32', '2019-11-24 10:28:09'),
(7, 'Abir', 'Hasan', 'abir@gmail.com', '12345', NULL, NULL, NULL, '2019-11-24 11:32:53', '2019-11-24 11:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `applicant_id`, `job_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '2019-11-24 06:49:26', '2019-11-24 06:49:26'),
(9, 3, 1, '2019-11-24 09:29:48', '2019-11-24 09:29:48'),
(10, 4, 1, '2019-11-24 09:30:20', '2019-11-24 09:30:20'),
(12, 1, 2, '2019-11-24 10:22:42', '2019-11-24 10:22:42'),
(13, 1, 3, '2019-11-24 10:22:53', '2019-11-24 10:22:53'),
(14, 1, 4, '2019-11-24 10:23:00', '2019-11-24 10:23:00'),
(15, 5, 3, '2019-11-24 10:25:46', '2019-11-24 10:25:46'),
(16, 5, 4, '2019-11-24 10:25:59', '2019-11-24 10:25:59'),
(17, 1, 7, '2019-11-24 11:07:18', '2019-11-24 11:07:18'),
(18, 1, 8, '2019-11-24 11:07:25', '2019-11-24 11:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `first_name`, `last_name`, `business_name`, `email_address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Fahim', 'Mazumder', 'BRAC IT', 'fahim.mazumder73@gmail.com', '12345', '2019-11-23 16:30:28', '2019-11-23 16:30:28'),
(2, 'Mahfuzur', 'Rahman', 'Namespace IT', 'himel@gmail.com', '12345', '2019-11-24 05:14:57', '2019-11-24 05:14:57'),
(3, 'Emon', 'Saha', 'Fiber@home', 'emon@gmail.com', '12345', '2019-11-24 10:17:18', '2019-11-24 10:17:18'),
(4, 'Parvez', 'Ahmed', 'Genex', 'parvez@gmail.com', '12345', '2019-11-24 10:20:09', '2019-11-24 10:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` int(11) NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`id`, `cid`, `job_title`, `job_description`, `salary`, `location`, `country`, `created_at`, `updated_at`) VALUES
(2, 2, 'Routing & Switching Trainee', 'CCNA', '25000', 'Mirpur', 'Bangladesh', '2019-11-24 05:15:47', '2019-11-24 05:15:47'),
(3, 4, 'Support Engineer', 'Monitoring', '15000', 'Nikunja', 'Bangladesh', '2019-11-24 10:21:10', '2019-11-24 10:21:10'),
(4, 3, 'Network Engineer', 'NOC', '20000', 'Banani', 'Bangladesh', '2019-11-24 10:22:01', '2019-11-24 10:22:01'),
(7, 1, 'IT Assistant (Intern)', 'Networking', '10000', 'Kuratoli', 'Bangladesh', '2019-11-24 10:57:51', '2019-11-24 10:57:51'),
(8, 1, 'IOT Developer (Trainee)', 'IOT', '22000', 'Nikunja', 'Bangladesh', '2019-11-24 11:02:07', '2019-11-24 11:02:07');

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
(4, '2019_11_23_150654_create_company_table', 1),
(5, '2019_11_23_151823_create_applicant_table', 1),
(6, '2019_11_23_152936_create_jobpost_table', 1),
(7, '2019_11_24_123110_create_apply_table', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicant_email_address_unique` (`email_address`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_email_address_unique` (`email_address`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

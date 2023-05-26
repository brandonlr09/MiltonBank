-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 at 05:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MiltonBank`
--
CREATE DATABASE IF NOT EXISTS `MiltonBank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `MiltonBank`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `contact_id` int(10) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `contact_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'friend', NULL, NULL),
(2, 1, 4, 'family', '2022-03-31 05:37:48', '2022-03-31 05:37:48'),
(3, 4, 1, 'family', '2022-03-31 05:37:48', '2022-03-31 05:37:48'),
(4, 2, 1, 'friend', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_28_192643_create_posts_table', 1),
(6, '2022_03_29_230136_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'How to save money in a recession', 'The trick is to get into the habit of always saving money. Even 50$ a month can add up to thousands of dollars with compound interest.', '2022-03-30 12:10:47', '2022-03-30 12:10:47'),
(2, 'Save more Stress less', 'Studies have shown that the more you have saved, the less you stress. This is only true up to a certain point and then the fear of loss can become a stress in itself. Contact our team today to learn how we can help you save and invest in a secure and profitable manner.', '2022-03-30 12:12:20', '2022-03-30 12:12:20'),
(3, 'How to make a million dollars in 65 years', 'The key to financial success is making a lot of money. The best way to make a lot is through passive investments. We specialize in passive investments. Contact one of our specialists today for more information on how we can help you reach your savings goals.', '2022-03-31 00:26:33', '2022-03-31 00:26:33'),
(4, 'Money Working for You', 'Most of us put in hundreds of hours of work each year to earn most of our money. But when you have savings and stash your funds in the right places, your money starts to work for you. Over time, you’ll need to work less and less as your money works more and more, and eventually, you might be able to stop working altogether.', '2022-03-31 00:28:19', '2022-03-31 00:28:19'),
(5, 'Expanded Options', 'The more money you have saved, the more you control your own destiny. If your job has you on the verge of a nervous breakdown, you can quit, even if you don’t have a new job lined up yet, and take time off to restore your sanity before you look for new employment. If you’re tired of living in an unsafe neighborhood, you can move to a safer area because you’ll have enough for a deposit on a better apartment or a down payment on a nicer home.', '2022-03-31 00:28:38', '2022-03-31 00:28:38'),
(6, 'Saving Up for a Down Payment First', 'Owning a home can be less expensive than renting and can provide emotional comfort in having your own place to fix up and remodel as you see fit.\r\nHousing prices, interest rates, and the cost of renting could continue to rise if you put off buying a home in favor of paying off debt.\r\nHaving student loan debt is not as bad for your credit rating as other types of debt. That\'s because student loans have longer repayment terms and typically feature lower interest rates.\r\nSince your down payment will lower the overall cost of your mortgage, it may be more advantageous to save up money for a home than to pay off a low-interest student loan.\r\nYou may qualify for student loan forgiveness or an income-based repayment plan that will lower your monthly payments.\r\nInterest paid on student loans (up to $2,500 per year) is tax-deductible.1﻿', '2022-03-31 00:32:19', '2022-03-31 00:32:19'),
(7, 'Paying Loans Off First', 'Reasons to pay off your student loans first include:\r\n\r\nThe longer you wait to pay off debt, the more interest you will pay. The higher the interest rate, the more you will save.\r\nIf your student loan interest rate is variable, it will likely go up over time, costing you even more.\r\nPaying off student loans means the debt is entirely erased from your credit report. While student loan debt isn\'t a huge factor in your credit rating, it is a factor.\r\nHaving debt can have a psychological effect. Some people prefer to go into the home-buying process debt-free.', '2022-03-31 00:32:36', '2022-03-31 00:32:36'),
(8, 'Doing Both', 'You may decide you can handle paying down your student loan debt while saving for a down payment on the home of your dreams. This can take some effort, but it is entirely possible if you follow some simple guidelines:', '2022-03-31 00:33:05', '2022-03-31 00:33:05'),
(9, 'Put savings in a separate account', 'Keep your down payment savings separate to avoid spending it. Open a savings account that pays the highest rate (online banks tend to be most competitive) or set up an investment account to increase your potential yield over time. Be aware, however, that investing is risky, and you could lose a good chunk of your money in a down market.', '2022-03-31 00:33:26', '2022-03-31 00:33:26'),
(10, 'Don\'t neglect other savings', 'You should have an emergency fund of three to six months\' income and retirement savings to round out your financial picture. Each of these is a separate account. If your job offers a 401(k) or similar retirement plan, make sure you put enough in it to take advantage of any employer matching.', '2022-03-31 00:33:39', '2022-03-31 00:33:39'),
(11, 'Is the Earth REALLY FLAT?', 'The truth is no one knows for sure. A lot of evidence supports the theory that the EARTH is FLAT!!!! KEEP AN OPEN MIND. EYES ARE ALWAYS WATCHING.', '2022-03-31 00:36:08', '2022-03-31 00:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(10) NOT NULL,
  `recipient_id` int(10) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reversible` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `client_id`, `recipient_id`, `amount`, `description`, `created_at`, `updated_at`, `reversible`) VALUES
(1, 1, 1, '500.00', 'deposit', NULL, NULL, 0),
(2, 1, 1, '200.00', 'deposit', NULL, NULL, 0),
(3, 1, 2, '-200.00', 'sent money to eric', NULL, NULL, 0),
(4, 2, 1, '200.00', 'received money from id-1', NULL, NULL, 0),
(6, 1, 2, '-2.00', 'money sent from this account to user: 2', '2022-03-30 22:10:21', '2022-03-30 22:10:21', 0),
(7, 2, 1, '2.00', 'money received from user:1 to this account', '2022-03-30 22:10:21', '2022-03-30 22:10:21', 0),
(8, 1, 1, '400.00', 'you deposited $400 dollars', '2022-03-31 00:05:55', '2022-03-31 00:05:55', 0),
(9, 1, 1, '1000.00', 'you deposited $1000 dollars', '2022-03-31 00:21:22', '2022-03-31 00:21:22', 0),
(10, 1, 1, '-100.00', 'you withdrew $100 dollars', '2022-03-31 00:23:25', '2022-03-31 00:23:25', 0),
(11, 1, 1, '-30.00', 'you withdrew $30 dollars', '2022-03-31 01:30:46', '2022-03-31 01:30:46', 0),
(12, 1, 1, '-68.00', 'you withdrew $68 dollars', '2022-03-31 01:30:56', '2022-03-31 01:30:56', 0),
(13, 1, 1, '2000.00', 'you deposited $2000 dollars', '2022-03-31 01:31:04', '2022-03-31 01:31:04', 0),
(14, 1, 2, '-3.00', 'money sent from this account to user: 2', '2022-03-31 01:31:20', '2022-03-31 01:31:20', 0),
(15, 2, 1, '3.00', 'money received from user:1 to this account', '2022-03-31 01:31:20', '2022-03-31 01:31:20', 0),
(16, 2, 2, '10000.00', 'you deposited $10000 dollars', '2022-03-31 01:32:19', '2022-03-31 01:32:19', 0),
(17, 5, 5, '10657.00', 'you deposited $10657 dollars', '2022-03-31 01:33:35', '2022-03-31 01:33:35', 0),
(18, 6, 6, '3453.00', 'you deposited $3453 dollars', '2022-03-31 01:34:59', '2022-03-31 01:34:59', 0),
(19, 6, 6, '1.00', 'you deposited $1 dollars', '2022-03-31 01:35:08', '2022-03-31 01:35:08', 0),
(20, 6, 6, '32423.00', 'you deposited $32423 dollars', '2022-03-31 01:35:16', '2022-03-31 01:35:16', 0),
(21, 1, 1, '12.00', 'you deposited $12 dollars', '2022-03-31 05:40:03', '2022-03-31 05:40:03', 0),
(22, 1, 1, '1.00', 'you deposited $1 dollars', '2022-03-31 05:43:54', '2022-03-31 05:43:54', 0),
(23, 1, 1, '1000.00', 'you deposited $1000 dollars', '2022-03-31 05:44:21', '2022-03-31 05:44:21', 0),
(24, 1, 4, '-324.00', 'money sent from this account to user: 4', '2022-03-31 06:01:28', '2022-03-31 06:01:28', 0),
(25, 4, 1, '324.00', 'money received from user:1 to this account', '2022-03-31 06:01:28', '2022-03-31 06:01:28', 1),
(26, 1, 4, '-1000.00', 'money sent from this account to user: 4', '2022-03-31 06:11:43', '2022-03-31 06:11:43', 0),
(27, 4, 1, '1000.00', 'money received from user:1 to this account', '2022-03-31 06:11:43', '2022-03-31 08:11:43', 1),
(28, 1, 4, '-700.00', 'money sent from this account to user: 4', '2022-03-31 07:11:32', '2022-03-31 07:11:32', 0),
(29, 4, 1, '700.00', 'money received from user:1 to this account', '2022-03-31 07:11:32', '2022-03-31 07:11:32', 0),
(30, 4, 1, '700.00', 'Transaction Reversal in amount of700', '2022-03-31 07:11:41', '2022-03-31 07:11:41', 0),
(31, 1, 4, '-700.00', 'Transaction Reversal in amount of -700.00', '2022-03-31 07:11:41', '2022-03-31 07:11:41', 0),
(32, 4, 1, '1000.00', 'Transaction Reversal in amount of1000', '2022-03-31 07:14:09', '2022-03-31 07:14:09', 0),
(33, 1, 4, '-1000.00', 'Transaction Reversal in amount of -1000.00', '2022-03-31 07:14:09', '2022-03-31 07:14:09', 0),
(34, 1, 4, '-5.00', 'money sent from this account to user: 4', '2022-03-31 07:15:37', '2022-03-31 07:15:37', 0),
(35, 4, 1, '5.00', 'money received from user:1 to this account', '2022-03-31 07:15:37', '2022-03-31 07:15:37', 0),
(36, 4, 1, '-5.00', 'Transaction Reversal in amount of-5.00', '2022-03-31 07:15:50', '2022-03-31 07:15:50', 0),
(37, 1, 4, '5.00', 'Transaction Reversal in amount of 5', '2022-03-31 07:15:50', '2022-03-31 07:15:50', 0),
(38, 2, 1, '-500.00', 'money sent from this account to user: 1', '2022-03-31 07:21:53', '2022-03-31 07:21:53', 0),
(39, 1, 2, '500.00', 'money received from user:2 to this account', '2022-03-31 07:21:53', '2022-03-31 07:21:53', 0),
(40, 1, 2, '-500.00', 'Transaction Reversal in amount of-500.00', '2022-03-31 07:21:58', '2022-03-31 07:21:58', 0),
(41, 2, 1, '500.00', 'Transaction Reversal in amount of 500', '2022-03-31 07:21:58', '2022-03-31 07:21:58', 0),
(42, 2, 1, '-600.00', 'money sent from this account to user: 1', '2022-03-31 07:22:30', '2022-03-31 07:22:30', 0),
(43, 1, 2, '600.00', 'money received from user:2 to this account', '2022-03-31 07:22:30', '2022-03-31 07:22:30', 0),
(44, 1, 2, '-600.00', 'Transaction Reversal in amount of-600.00', '2022-03-31 07:22:40', '2022-03-31 07:22:40', 0),
(45, 2, 1, '600.00', 'Transaction Reversal in amount of 600', '2022-03-31 07:22:40', '2022-03-31 07:22:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` int(11) NOT NULL DEFAULT 1,
  `routing_number` int(11) NOT NULL DEFAULT 10012,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `branch`, `routing_number`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 1, 10012, 'jdoe@email.com', NULL, '$2y$10$kWZI2OhPA9xn6mms9Jn5au0XQCkl8KC52Q1V3TFJrX.hhw4MiOHJ6', 0, NULL, '2022-03-30 10:41:30', '2022-03-30 10:41:30'),
(2, 'Mary Jane', 1, 10012, 'mjane@email.com', NULL, '$2y$10$EG3M1oTxfH.4m1ygOSGSuemOzt0ymjK7roBqAJXo9G107sqVK8i/S', 0, NULL, '2022-03-30 10:41:59', '2022-03-30 10:41:59'),
(3, 'admin', 1, 10012, 'admin@admin.com', NULL, '$2y$10$3p.5Nc3qKi7R9kxqoa.1UOLxZFcxnnqoVgaEp43TYmsye5as5hNo2', 0, NULL, '2022-03-30 10:42:50', '2022-03-30 10:42:50'),
(4, 'Bob Robberts', 1, 10012, 'bobrob@mail.com', NULL, '$2y$10$MJhhBaIng.BbNipW.rsUOeWt.cebDASCvAVD.rojaJov7iZEMjKV6', 0, NULL, '2022-03-31 01:03:55', '2022-03-31 01:03:55'),
(5, 'John Quil', 1, 10012, 'jquil@email.com', NULL, '$2y$10$chL2z9cuIdWBnqeZVO8S5uNNgZpzOKfmzxY15zadTjm9MgFT6nFcC', 0, NULL, '2022-03-31 01:33:26', '2022-03-31 01:33:26'),
(6, 'Penny Black ', 1, 10012, 'pennyb@email.com', NULL, '$2y$10$.eVgiFFnX8EbRfuGVSIN6.gRwuLMZiHzbiM0G4fm80hP2ewBYvMUG', 0, NULL, '2022-03-31 01:34:50', '2022-03-31 01:34:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

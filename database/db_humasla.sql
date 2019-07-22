-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 12:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_humasla`
--

-- --------------------------------------------------------

--
-- Table structure for table `humas`
--

CREATE TABLE `humas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tamu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jaminan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `humas`
--

INSERT INTO `humas` (`id`, `nama_tamu`, `jk`, `alamat`, `status`, `jaminan`, `keterangan`, `created_at`, `updated_at`) VALUES
(10, 'Gakim', 'Laki-Laki', 'Cisarua', 'Pelajar', 'Ktp', 'Ambil raport', '2018-07-02 20:32:43', '2018-07-02 20:32:43'),
(11, 'Husein', 'Laki-Laki', 'Cisarua', 'Pelajar', 'KTP', 'Ambil Uang Data Entry', '2018-07-13 07:47:47', '2018-07-13 07:47:47'),
(12, 'Steph MacOS', 'Perempuan', 'Cibanban', 'Pebasket', 'KTA', 'Ambil Ijazah', '2018-07-13 07:49:13', '2018-07-13 07:49:13'),
(13, 'Steph', 'Laki-Laki', 'Cibogo', 'Pelajar', 'KTP', 'Ambil Ijazah', '2018-07-13 07:51:45', '2018-07-13 07:51:45'),
(14, 'Sean', 'Perempuan', 'KP.URUG', 'Orang Tua', 'KTP', 'Ambil Raport', '2019-04-09 13:57:11', '2019-04-09 13:57:11'),
(15, 'Chintia', 'Perempuan', 'Bogor', 'Alumni', 'KTP', 'Hanya Mengambil Ijazah', '2019-07-22 22:52:50', '2019-07-22 22:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_01_175045_create_humas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gakim', 'inigakim@gmail.com', '$2y$10$UrCvt.mE2w9YBDXb/ozTW.PNfIwJ22Pxt3S5TmDnkmqpAU5AQGNM6', 'Kg7tYoxfQ9PwPo7MtAG8QCbSjjghJrFPJQ0V0P4JMzkhVE4I9hrCR45sQF95', '2018-07-01 22:21:02', '2018-07-01 22:21:02'),
(2, 'Gilbert', 'gilbertstep@gmail.com', '$2y$10$ZU5qY7Kt145XQEDsXxx9guhDAnYiZ79EIcEVodU9MfYFFm9kTnFxS', NULL, '2018-07-03 05:32:19', '2018-07-03 05:32:19'),
(3, 'James', 'inini@gmail.com', '$2y$10$6PK5XZ7WIGbRBdMmVbLAYes.VcwgczyqprA2nHIjy8yYmT4bizRWW', '3plZzYgWUhXeIN4zeDT4IyWtMzTO4hH4NY9NTy24G1c5EcUsbeTIT35a1UGz', '2018-07-03 06:56:14', '2018-07-03 06:56:14'),
(4, 'MasABil', 'gakim@gmail.com', '$2y$10$YERBFD0ANQUe07EXN8.RGeE5zf.khI7m3VUIoibr3MAKvqBkdSml6', NULL, '2018-07-04 00:51:18', '2018-07-04 00:51:18'),
(6, 'MasABil', 'abbil@gmail.com', '$2y$10$puZ.7eedJLT9pX6goA./8.RzaJbiOkNSIYANPmy0dWNJYgFDv3r3C', 'J5cyc60vIfGodu6yQw3Qz6EHwNGKEoVQFpSJqPBo8rzeJHFtiSgwuJRYDLhl', '2018-07-04 00:52:02', '2018-07-04 00:52:02'),
(7, 'gakim', 'gkm@gmail.cos', '$2y$10$co9T1AyKlqAz8/5h9v9w/eArnjLMQvZRRBdciVl/sCQnB.83glvN6', 'BmXSv6YHAVZ0WTSdQS1S1Ok3SxxQnXPh7LGhgFMLxV5jbPjTImhjzFmJiFnM', '2018-07-04 02:48:49', '2018-07-04 04:00:55'),
(8, 'Joe', 'joe@gmail.com', '$2y$10$uzDjocumJL0OxkTJN7LNd.iu6n4/4YSO7iUlKfmBzkfbv7jB.umsS', 'H2H3yXSRpsi7XOVDsaPeVgMyOxlexzOnuI0pwJORq46q2T5D0YcCkxpwVlnZ', '2018-07-04 04:36:03', '2018-07-04 04:38:39'),
(9, 'Muhammad Lukmanulhakim', 'gkm@epic.net', '$2y$10$sw1H3l6FYRy6iCam37EY3eTWNjogK8ESVcbMLv9eHwedTD6BfuMti', NULL, '2018-07-04 05:45:52', '2018-07-04 05:46:38'),
(10, 'Gakim', 'gakim@gmail.co.id', '$2y$10$G4dXnHo/wsr69f6mM7Uf6u/vGO530aNLKpLKfAy.cX4u.UYZ5JkMu', NULL, '2018-07-13 07:46:59', '2018-07-13 07:46:59'),
(11, 'gakim', 'gakimgakim@gakim.gakim', '$2y$10$VmfgITriCdNqu4RhKAcVoOUKVP6AlaDb2ihHkW1XbEbQm50B1hQIK', 'EUTOCYJh6TEzQT5MGk0URRbDfVIz70nNaiABID4UZqDq4sLIE2wesWFBqbkW', '2018-08-07 00:23:31', '2018-08-07 00:23:31'),
(12, 'Gakim', 'admin@gmail.com', '$2y$10$5Z4X7hfppk42eqkukC.jP.QLe8nvDDFESM8sPYinHCFJD8FbS57UO', NULL, '2019-07-22 22:51:59', '2019-07-22 22:51:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `humas`
--
ALTER TABLE `humas`
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
-- AUTO_INCREMENT for table `humas`
--
ALTER TABLE `humas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 09:30 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectitec`
--

-- --------------------------------------------------------

--
-- Table structure for table `aaction`
--

CREATE TABLE `aaction` (
  `idaction` int(11) NOT NULL,
  `iduser` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `acdetail` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `actime` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `aaction`
--

INSERT INTO `aaction` (`idaction`, `iduser`, `acdetail`, `actime`) VALUES
(1, '1', 'Chỉnh thông tin idlife user 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`) VALUES
(1, 'Cty A'),
(2, 'Cty B'),
(3, 'Cty cổ phần F'),
(4, 'Tập đoàn Y'),
(5, 'Tập đoàn R'),
(6, 'Doanh nghiệp G');

-- --------------------------------------------------------

--
-- Table structure for table `companies_users`
--

CREATE TABLE `companies_users` (
  `id` int(11) NOT NULL,
  `companies_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `pos` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `sdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `companies_users`
--

INSERT INTO `companies_users` (`id`, `companies_id`, `users_id`, `pos`, `sdate`, `edate`) VALUES
(1, 1, 1, 'Nhân viên', '2017-06-13', NULL),
(2, 2, 1, 'HR manager', '2016-11-16', '2017-06-13'),
(3, 1, 2, 'Intership', '2017-05-16', '2017-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` int(12) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(12) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`id`, `name`, `code`) VALUES
(1, 'Hóa sinh', 'UBSS20072011'),
(2, 'Physical cosmology', 'UBSS22331411'),
(3, 'Chấn thương chỉnh hình', 'UBSS23251123'),
(5, 'Hàn công nghiệp', 'CN23414C14');

-- --------------------------------------------------------

--
-- Table structure for table `degrees_users`
--

CREATE TABLE `degrees_users` (
  `id` int(11) NOT NULL,
  `degrees_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `degrees_users`
--

INSERT INTO `degrees_users` (`id`, `degrees_id`, `users_id`, `date`) VALUES
(1, 1, 2, '2017-05-15'),
(2, 3, 2, '2017-06-15'),
(3, 2, 2, '2017-06-22'),
(4, 1, 1, '2017-08-14'),
(6, 3, 5, '2017-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id` int(11) NOT NULL,
  `users_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `exdetails` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `users_id`, `exdetails`) VALUES
(1, '1', 'Buốn bán'),
(2, '1', 'Marketing'),
(3, '2', 'Lập trình'),
(4, '2', 'Dạy học');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `act` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(3, 'Develope Android'),
(2, 'Phân tích hệ thống nhúng'),
(1, 'Tiếng Anh nâng cao');

-- --------------------------------------------------------

--
-- Table structure for table `skills_users`
--

CREATE TABLE `skills_users` (
  `id` int(11) NOT NULL,
  `skills_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `skills_users`
--

INSERT INTO `skills_users` (`id`, `skills_id`, `users_id`, `rate`) VALUES
(1, 1, 1, 5),
(2, 2, 1, 6),
(3, 3, 4, 2),
(4, 2, 3, 7),
(5, 3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idlife` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulvl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `idlife`, `pic`, `adr`, `ulvl`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', 'a@mail.com', '$2y$10$y9EycHLw/kIy7ddQUqmNG.8lgnYWy.GGDwxMWesah.l3ueqt/Jblu', '1156325432', '1.jpg', 'ASD', '0', 'l6Fl5uELwTeMqZP3L27PfM5cnPCesbm6BAK1xNLFQsNroj5TR6JWC49YmChx', '2017-07-31 13:09:15', '2017-07-31 13:09:15'),
(2, 'Nguyễn Đinh B', 'b@mail.com', '$2y$10$zbJC9bdre3l/wLTHCsyLJ.vSjSzYsSkpZs0Qo6WjEuoYJLIBNA2Fa', '456321', '', 'WADSAF', '1', 'BY2981nxvG8a8YF3OBCygAQn9cXgFMlS8o2aB0FFXhx55TrzcZkXQuFxtlPx', '2017-07-31 13:35:33', '2017-07-31 13:35:33'),
(3, 'Trần Văn D', 'd@mail.com', '$2y$10$eDkV1WSNJH/nVoInSnMgwOra0GA9izFJe4Wak5gjLryS1.GsL163K', '123432', '', 'DGGGDG', '2', 'W7ZIZBcGWpmlOKjOcGq2MILfB0roprmDKSjcT9dysMXyryDpj4Dk4PGwFsqz', '2017-07-31 13:36:15', '2017-07-31 13:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aaction`
--
ALTER TABLE `aaction`
  ADD PRIMARY KEY (`idaction`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies_users`
--
ALTER TABLE `companies_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `degreecode` (`code`);

--
-- Indexes for table `degrees_users`
--
ALTER TABLE `degrees_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_users`
--
ALTER TABLE `skills_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aaction`
--
ALTER TABLE `aaction`
  MODIFY `idaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `companies_users`
--
ALTER TABLE `companies_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `degrees_users`
--
ALTER TABLE `degrees_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `skills_users`
--
ALTER TABLE `skills_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

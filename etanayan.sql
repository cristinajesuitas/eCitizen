-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 12:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etanayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cap_barangay`
--

CREATE TABLE `cap_barangay` (
  `id` int(5) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `cap_province_id` int(2) UNSIGNED NOT NULL,
  `cap_municipal_id` int(4) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_designation`
--

CREATE TABLE `cap_designation` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_lguclass`
--

CREATE TABLE `cap_lguclass` (
  `id` int(1) UNSIGNED NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_lguprofile`
--

CREATE TABLE `cap_lguprofile` (
  `cap_barangay_id` int(5) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `cap_province_id` int(2) UNSIGNED NOT NULL,
  `cap_municipal_id` int(4) UNSIGNED NOT NULL,
  `cap_lgutype_id` int(1) UNSIGNED NOT NULL,
  `cap_lguclass_id` int(1) UNSIGNED NOT NULL,
  `cap_designation_id` int(2) UNSIGNED NOT NULL,
  `landarea` int(5) UNSIGNED NOT NULL,
  `landunit` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_lgutype`
--

CREATE TABLE `cap_lgutype` (
  `id` int(1) UNSIGNED NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_migration`
--

CREATE TABLE `cap_migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_migration`
--

INSERT INTO `cap_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1495704677),
('m130524_201442_init', 1495704692);

-- --------------------------------------------------------

--
-- Table structure for table `cap_municipal`
--

CREATE TABLE `cap_municipal` (
  `id` int(4) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `cap_province_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_pic`
--

CREATE TABLE `cap_pic` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_province`
--

CREATE TABLE `cap_province` (
  `id` int(2) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_region`
--

CREATE TABLE `cap_region` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_region`
--

INSERT INTO `cap_region` (`id`, `name`, `code`) VALUES
(1, 'Region I Ilocos Region', '010000000');

-- --------------------------------------------------------

--
-- Table structure for table `cap_user`
--

CREATE TABLE `cap_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cap_user`
--

INSERT INTO `cap_user` (`id`, `fname`, `mname`, `lname`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cristina', 'Pintacasi', 'Jesuitas', 'cristina.jesuitas', '9W5RKsDPfL6gekVC8fweBch8tpXKevQw', '$2y$13$nmHeUJPD8Pww81DiEnU/F.pa2m/4uO95v105TzAyXA/ZXOYG5c9uu', NULL, 'cristina.jesuitas@gmail.com', 10, 1495704886, 1496115305);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cap_barangay`
--
ALTER TABLE `cap_barangay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cap_region_id` (`cap_region_id`),
  ADD KEY `cap_province_id` (`cap_province_id`),
  ADD KEY `cap_municipal_id` (`cap_municipal_id`);

--
-- Indexes for table `cap_designation`
--
ALTER TABLE `cap_designation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_lguclass`
--
ALTER TABLE `cap_lguclass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_lguprofile`
--
ALTER TABLE `cap_lguprofile`
  ADD PRIMARY KEY (`cap_barangay_id`),
  ADD KEY `cap_region_id` (`cap_region_id`),
  ADD KEY `cap_province_id` (`cap_province_id`),
  ADD KEY `cap_municipal_id` (`cap_municipal_id`),
  ADD KEY `cap_lgutype_id` (`cap_lgutype_id`),
  ADD KEY `cap_lguclass_id` (`cap_lguclass_id`),
  ADD KEY `cap_designation_id` (`cap_designation_id`);

--
-- Indexes for table `cap_lgutype`
--
ALTER TABLE `cap_lgutype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_migration`
--
ALTER TABLE `cap_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `cap_municipal`
--
ALTER TABLE `cap_municipal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_region_id` (`cap_region_id`),
  ADD KEY `cap_province_id` (`cap_province_id`);

--
-- Indexes for table `cap_pic`
--
ALTER TABLE `cap_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cap_province`
--
ALTER TABLE `cap_province`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_region_id` (`cap_region_id`);

--
-- Indexes for table `cap_region`
--
ALTER TABLE `cap_region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_user`
--
ALTER TABLE `cap_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cap_barangay`
--
ALTER TABLE `cap_barangay`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_designation`
--
ALTER TABLE `cap_designation`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_lguclass`
--
ALTER TABLE `cap_lguclass`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_lgutype`
--
ALTER TABLE `cap_lgutype`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_municipal`
--
ALTER TABLE `cap_municipal`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_pic`
--
ALTER TABLE `cap_pic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_province`
--
ALTER TABLE `cap_province`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cap_region`
--
ALTER TABLE `cap_region`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cap_user`
--
ALTER TABLE `cap_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cap_barangay`
--
ALTER TABLE `cap_barangay`
  ADD CONSTRAINT `cap_barangay_cap_municipal_id` FOREIGN KEY (`cap_municipal_id`) REFERENCES `cap_municipal` (`id`),
  ADD CONSTRAINT `cap_barangay_cap_province_id` FOREIGN KEY (`cap_province_id`) REFERENCES `cap_province` (`id`),
  ADD CONSTRAINT `cap_barangay_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

--
-- Constraints for table `cap_lguprofile`
--
ALTER TABLE `cap_lguprofile`
  ADD CONSTRAINT `cap_lguprofile_cap_designation_id` FOREIGN KEY (`cap_designation_id`) REFERENCES `cap_designation` (`id`),
  ADD CONSTRAINT `cap_lguprofile_cap_lguclass_id` FOREIGN KEY (`cap_lguclass_id`) REFERENCES `cap_lguclass` (`id`),
  ADD CONSTRAINT `cap_lguprofile_cap_lgutype_id` FOREIGN KEY (`cap_lgutype_id`) REFERENCES `cap_lgutype` (`id`),
  ADD CONSTRAINT `cap_lguprofile_cap_municipal_id` FOREIGN KEY (`cap_municipal_id`) REFERENCES `cap_municipal` (`id`),
  ADD CONSTRAINT `cap_lguprofile_cap_province_id` FOREIGN KEY (`cap_province_id`) REFERENCES `cap_province` (`id`),
  ADD CONSTRAINT `cap_lguprofile_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

--
-- Constraints for table `cap_municipal`
--
ALTER TABLE `cap_municipal`
  ADD CONSTRAINT `cap_municipal_cap_province_id` FOREIGN KEY (`cap_province_id`) REFERENCES `cap_province` (`id`),
  ADD CONSTRAINT `cap_municipal_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

--
-- Constraints for table `cap_province`
--
ALTER TABLE `cap_province`
  ADD CONSTRAINT `cap_province_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gianha`
--

-- --------------------------------------------------------

--
-- Table structure for table `04_category`
--

CREATE TABLE `04_category` (
  `04_id` int(11) NOT NULL,
  `04_name` varchar(500) NOT NULL,
  `04_parent_id` int(11) DEFAULT 0,
  `04_module_id` int(11) DEFAULT 1,
  `04_alias` varchar(255) DEFAULT NULL,
  `04_des` text NOT NULL,
  `04_index` int(11) DEFAULT 0,
  `04_active` int(11) DEFAULT 0,
  `04_created_at` varchar(50) NOT NULL,
  `04_updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `04_category`
--

INSERT INTO `04_category` (`04_id`, `04_name`, `04_parent_id`, `04_module_id`, `04_alias`, `04_des`, `04_index`, `04_active`, `04_created_at`, `04_updated_at`) VALUES
(1, 'Mặt bằng / Cho thuê', 0, 1, 'mat-bang-cho-thue', '', 2, 0, '24-07-2020 09:08', '24-07-2020 09:08'),
(2, 'Chung cư / Nhà lầu', 1, 0, NULL, '', 0, 0, '24-07-2020 09:09', '24-07-2020 09:09'),
(3, 'Nhà đất / Mặt tiền / Căn hộ', 0, 1, '', '<p>Xin chào</p>', 10, 1, '24-07-2020 09:14', '24-07-2020 09:14'),
(7, 'Ký gửi', 0, 0, '', '', 6, 1, '', ''),
(8, 'Cho thuê mặt bằng', 1, 1, '', '<p>XIn chào 500 anh em</p>', 3, 1, '', ''),
(9, 'menu nef', 8, 1, 'menu-nef', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `10_module`
--

CREATE TABLE `10_module` (
  `10_id` int(11) NOT NULL,
  `10_name` varchar(255) DEFAULT NULL,
  `10_created_at` varchar(50) NOT NULL,
  `10_updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `10_module`
--

INSERT INTO `10_module` (`10_id`, `10_name`, `10_created_at`, `10_updated_at`) VALUES
(1, 'Tin tức', '', ''),
(2, 'Dự án', '', ''),
(3, 'Blog', '', ''),
(4, 'Giới thiệu', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `04_category`
--
ALTER TABLE `04_category`
  ADD PRIMARY KEY (`04_id`);

--
-- Indexes for table `10_module`
--
ALTER TABLE `10_module`
  ADD PRIMARY KEY (`10_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `04_category`
--
ALTER TABLE `04_category`
  MODIFY `04_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `10_module`
--
ALTER TABLE `10_module`
  MODIFY `10_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

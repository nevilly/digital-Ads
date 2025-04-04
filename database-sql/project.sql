-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 05:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(6) UNSIGNED NOT NULL,
  `ads_id` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ads_id`, `created_at`) VALUES
(4, '2', '2025-04-03 16:41:41'),
(5, '5', '2025-04-03 16:59:49'),
(6, '4', '2025-04-03 17:55:24'),
(7, '4', '2025-04-03 17:55:27'),
(9, '10', '2025-04-03 19:56:26'),
(10, '3', '2025-04-04 03:38:48'),
(11, '7', '2025-04-04 03:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(6) UNSIGNED NOT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `ad_type` varchar(30) DEFAULT NULL,
  `ad_unit` varchar(30) DEFAULT NULL,
  `img` varchar(30) DEFAULT NULL,
  `size` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `appearence` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `cashType` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `placement_type` varchar(50) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `brand`, `ad_type`, `ad_unit`, `img`, `size`, `position`, `appearence`, `price`, `cashType`, `category`, `placement_type`, `createDate`) VALUES
(1, 'Mwananchi', '', '', '', 'Full Page', 'Normal', 'B/white', '2,400,000', 'Tsh', 'news', '', '0000-00-00 00:00:00'),
(2, 'Mwananchi', '', '', '', 'Full Page', 'Normal', 'F/color', '3,700,000', 'Tsh', 'news', '', '0000-00-00 00:00:00'),
(3, 'Mwananchi', '', '', '', 'Half Page', 'Normal', 'B/White', '1,3000,000', 'Tsh', 'news', '', '2025-03-29 10:15:59'),
(4, 'Mwananchi', '', '', '', 'Half Page', 'Normal', 'F/Color', '2070000', 'Tsh', 'news', '', '2025-03-29 10:15:59'),
(5, 'Mwananchi', '', '', '', 'Front Strip', 'Special', 'F/color', '1500000', 'Tsh', 'news', '', '2025-03-29 10:22:51'),
(6, 'Citien', '', '', '', 'One Eight', 'Normal', 'F/color', '500000', 'Tsh', 'news', '', '2025-03-29 10:22:51'),
(7, 'Citizen', '', '', '', 'Front-strip', 'Special', 'F/color', '1000000', 'Tsh', 'news', '', '2025-03-29 10:22:51'),
(8, 'Spoti', '', '', '', 'Full Page', 'Normal', 'F/color', '2400000', 'Tsh', 'news', '', '2025-03-29 10:22:51'),
(9, 'MwanaSpoti', '', '', '', 'Column Depth 33cm', 'Dimensions', '', '50000', '', 'news', '', '0000-00-00 00:00:00'),
(10, 'Facebook', 'social Media', NULL, NULL, 'font page', '', '', '211385', 'Tsh', 'card rate', '', '2025-04-03 05:57:37'),
(11, 'Instagram', 'social Media', NULL, NULL, 'font page', 'middle', '', '50000', 'Tsh', '', '', '2025-04-03 06:00:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

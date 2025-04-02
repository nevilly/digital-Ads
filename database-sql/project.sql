-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 06:31 AM
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
  `id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ads_id`) VALUES
(1, 7),
(2, 9),
(3, 9),
(4, 4),
(5, 3),
(6, 1),
(7, 1),
(8, 6),
(9, 4),
(10, 3),
(11, 4),
(12, 2),
(13, 2),
(14, 8),
(15, 2),
(16, 4),
(17, 3),
(18, 3),
(19, 2),
(20, 1),
(21, 1),
(22, 6),
(23, 6),
(24, 6),
(25, 4),
(26, 4),
(27, 2),
(28, 1),
(29, 1),
(30, 3),
(31, 3),
(32, 3),
(33, 4),
(34, 4),
(35, 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `brand` text NOT NULL,
  `ad_type` text NOT NULL,
  `img` text NOT NULL,
  `size` text NOT NULL,
  `position` text NOT NULL,
  `appearence` text NOT NULL,
  `price` text NOT NULL,
  `ad_unit` text NOT NULL,
  `cashType` text NOT NULL,
  `category` enum('news','rate') NOT NULL,
  `placement_type` text NOT NULL,
  `createDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `brand`, `ad_type`, `img`, `size`, `position`, `appearence`, `price`, `ad_unit`, `cashType`, `category`, `placement_type`, `createDate`) VALUES
(1, 'Mwananchi', '', '', 'Full Page', 'Normal', 'B/white', '2,400,000', '', 'Tsh', 'news', '', '0000-00-00 00:00:00'),
(2, 'Mwananchi', '', '', 'Full Page', 'Normal', 'F/color', '3,700,000', '', 'Tsh', 'news', '', '0000-00-00 00:00:00'),
(3, 'Mwananchi', '', '', 'Half Page', 'Normal', 'B/White', '1,3000,000', '', 'Tsh', 'news', '', '2025-03-29 16:15:59'),
(4, 'Mwananchi', '', '', 'Half Page', 'Normal', 'F/Color', '2,070,000', '', 'Tsh', 'news', '', '2025-03-29 16:15:59'),
(5, 'Mwananchi', '', '', 'Front Strip', 'Special', 'F/color', '1,500,000', '', 'Tsh', 'news', '', '2025-03-29 16:22:51'),
(6, 'Citien', '', '', 'One Eight', 'Normal', 'F/color', '500,000', '', 'Tsh', 'news', '', '2025-03-29 16:22:51'),
(7, 'Citizen', '', '', 'Front-strip', 'Special', 'F/color', '1,000,000', '', 'Tsh', 'news', '', '2025-03-29 16:22:51'),
(8, 'Spoti', '', '', 'Full Page', 'Normal', 'F/color', '2,400,000', '', 'Tsh', 'news', '', '2025-03-29 16:22:51'),
(9, 'MwanaSpoti', '', '', 'Column Depth 33cm', 'Dimensions', '', '', '', '', 'news', '', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

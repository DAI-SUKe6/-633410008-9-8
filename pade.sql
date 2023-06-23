-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pade`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `target_analysis` text DEFAULT NULL,
  `strengths` text DEFAULT NULL,
  `weaknesses` text DEFAULT NULL,
  `opportunities` text DEFAULT NULL,
  `threats` text DEFAULT NULL,
  `tourist_attractions` text DEFAULT NULL,
  `economic_crops` text DEFAULT NULL,
  `resources` text DEFAULT NULL,
  `community` text DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `report_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `target_analysis`, `strengths`, `weaknesses`, `opportunities`, `threats`, `tourist_attractions`, `economic_crops`, `resources`, `community`, `reporter_name`, `report_date`) VALUES
(13, '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(14, '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(15, '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(16, '', '', '', '', '', '', '', '', '', 'FDSF', '2023-06-19'),
(17, 'มหาวิทยาลัยขอนแก่น', '', '', '', '', '', '', '', '', 'จิรภัทร', '2023-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

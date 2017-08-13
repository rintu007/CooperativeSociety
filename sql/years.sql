-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 01:30 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `YearValue` varchar(200) DEFAULT NULL,
  `YearName` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `YearValue`, `YearName`, `created_at`, `updated_at`) VALUES
(1, '2017', '2017', '2017-06-21 05:23:15', '2017-06-21 05:23:15'),
(2, '2016', '2016', '2017-06-21 05:25:39', '2017-06-21 05:25:39'),
(3, '2015', '2015', '2017-06-21 05:25:47', '2017-06-21 05:25:47'),
(4, '2014', '2014', '2017-06-21 05:25:57', '2017-06-21 05:25:57'),
(5, '2013', '2013', '2017-06-21 05:26:04', '2017-06-21 05:26:04'),
(6, '2012', '2012', '2017-06-21 05:26:13', '2017-06-21 05:26:13'),
(7, '2011', '2011', '2017-06-21 05:26:30', '2017-06-21 05:26:30'),
(8, '2010', '2010', '2017-06-21 05:26:41', '2017-06-21 05:26:41'),
(9, '2018', '2018', '2017-08-02 11:29:36', '2017-08-02 11:29:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

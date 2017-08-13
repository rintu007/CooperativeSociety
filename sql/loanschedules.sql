-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 09:07 AM
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
-- Table structure for table `loanschedules`
--

CREATE TABLE `loanschedules` (
  `id` int(11) NOT NULL,
  `DomainName` varchar(100) DEFAULT NULL,
  `DivisionOfficeId` varchar(100) DEFAULT NULL,
  `MemberId` varchar(500) DEFAULT NULL,
  `MemberName` varchar(500) DEFAULT NULL,
  `InstallmentNo` varchar(50) DEFAULT NULL,
  `Payable` varchar(500) NOT NULL,
  `Interest` varchar(500) DEFAULT NULL,
  `Total` varchar(500) DEFAULT NULL,
  `ScheduleDate` date DEFAULT NULL,
  `Ok` int(11) DEFAULT NULL,
  `posted_by` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loanschedules`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `loanschedules`
--
ALTER TABLE `loanschedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loanschedules`
--
ALTER TABLE `loanschedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

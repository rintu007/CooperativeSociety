-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 09:58 AM
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
-- Table structure for table `riskfunds`
--

CREATE TABLE `riskfunds` (
  `id` int(10) UNSIGNED NOT NULL,
  `MemberId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MemberName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DomainName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DivisionName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ZoneId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AreaId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BranchId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoanAmount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `RiskFund` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TransactionType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoneyMethod` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `posted_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `riskfunds`
--

INSERT INTO `riskfunds` (`id`, `MemberId`, `MemberName`, `DomainName`, `DivisionName`, `ZoneId`, `AreaId`, `BranchId`, `LoanAmount`, `RiskFund`, `TransactionType`, `MoneyMethod`, `Date`, `posted_by`, `created_at`, `updated_at`) VALUES
(8, '110105', '111111', '11111111111111', '11111111111111', '11111111111111', '111111111111', '1111111111', '50000', '500', '1', '1', '0000-00-00', '1002', '2017-08-21 23:20:56', '2017-08-21 23:20:56'),
(9, '110105', '111111', '11111111111111', '11111111111111', '11111111111111', '111111111111', '1111111111', '50000', '500', '2', '1', '0000-00-00', '1002', '2017-08-21 23:21:31', '2017-08-21 23:21:31'),
(10, '3', '3', '1', '1', '3', '3', '3', '100000', '1000', '1', '1', '0000-00-00', '1002', '2017-08-22 00:10:25', '2017-08-22 00:10:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riskfunds`
--
ALTER TABLE `riskfunds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riskfunds`
--
ALTER TABLE `riskfunds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

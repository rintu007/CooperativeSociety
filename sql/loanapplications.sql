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
-- Table structure for table `loanapplications`
--

CREATE TABLE `loanapplications` (
  `id` int(11) NOT NULL,
  `MemberId` varchar(100) DEFAULT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `Savings` varchar(100) DEFAULT NULL,
  `LoanType` varchar(100) DEFAULT NULL,
  `LoanAmount` varchar(100) DEFAULT NULL,
  `LoanDuration` varchar(100) DEFAULT NULL,
  `InstallmentNo` int(11) DEFAULT NULL,
  `PayedInstallment` int(11) DEFAULT NULL,
  `InterestRate` varchar(100) DEFAULT NULL,
  `BankAccountName` varchar(100) DEFAULT NULL,
  `AccountType` varchar(100) DEFAULT NULL,
  `AccountNo` varchar(100) DEFAULT NULL,
  `BankName` varchar(100) DEFAULT NULL,
  `BranchName` varchar(100) DEFAULT NULL,
  `IncomeSource` varchar(100) DEFAULT NULL,
  `EnglishName` varchar(100) DEFAULT NULL,
  `DomainName` varchar(100) DEFAULT NULL,
  `DivisionOfficeId` varchar(100) DEFAULT NULL,
  `ZoneId` varchar(100) DEFAULT NULL,
  `AreaId` varchar(100) DEFAULT NULL,
  `BranchId` varchar(100) DEFAULT NULL,
  `TMSSId` varchar(100) DEFAULT NULL,
  `GaurantorName` varchar(100) DEFAULT NULL,
  `GFatherName` varchar(100) DEFAULT NULL,
  `GMotherName` varchar(100) DEFAULT NULL,
  `GHusbandWifeName` varchar(100) DEFAULT NULL,
  `GBirthDate` varchar(100) DEFAULT NULL,
  `GAge` varchar(100) DEFAULT NULL,
  `GNationality` varchar(100) DEFAULT NULL,
  `GOccupation` varchar(100) DEFAULT NULL,
  `GNId` varchar(100) DEFAULT NULL,
  `GTaxNo` varchar(100) DEFAULT NULL,
  `GDrivingLicenseNo` varchar(100) DEFAULT NULL,
  `GMobileNo` varchar(100) DEFAULT NULL,
  `GVillageName` varchar(100) DEFAULT NULL,
  `GPostOffice` varchar(100) DEFAULT NULL,
  `GPolliceStation` varchar(100) DEFAULT NULL,
  `GDistrict` varchar(100) DEFAULT NULL,
  `GOfficeName` varchar(100) DEFAULT NULL,
  `GDesignation` varchar(100) DEFAULT NULL,
  `GOfficeId` varchar(100) DEFAULT NULL,
  `GOfficeAddress` text,
  `GBankAccountName` varchar(100) DEFAULT NULL,
  `GAccountType` varchar(100) DEFAULT NULL,
  `GAccountNo` varchar(100) DEFAULT NULL,
  `GBankName` varchar(100) DEFAULT NULL,
  `GBranchName` varchar(100) DEFAULT NULL,
  `GTMemberId` varchar(100) DEFAULT NULL,
  `GAdmDate` varchar(100) DEFAULT NULL,
  `GSavingAmount` varchar(100) DEFAULT NULL,
  `GImage` varchar(500) DEFAULT NULL,
  `GSignature` varchar(100) DEFAULT NULL,
  `WName1` varchar(100) DEFAULT NULL,
  `WName2` varchar(100) DEFAULT NULL,
  `W1Signature` varchar(100) DEFAULT NULL,
  `W2Signature` varchar(100) DEFAULT NULL,
  `Approval1` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loanapplications`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `loanapplications`
--
ALTER TABLE `loanapplications`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `loanapplications` ADD FULLTEXT KEY `idx_name` (`MemberId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loanapplications`
--
ALTER TABLE `loanapplications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

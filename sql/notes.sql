-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 08:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timf`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `ThisMonth` varchar(500) DEFAULT NULL,
  `ThisYear` varchar(500) DEFAULT NULL,
  `ThisPeriod` varchar(500) DEFAULT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `CommentedBy` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


insert into `notes` (`id`, `Description`, `ThisMonth`, `ThisYear`, `ThisPeriod`, `Comments`, `CommentedBy`, `created_at`, `updated_at`) values 
	('1','Admitted Members', '', '', '', '', '', '', ''),
	('2','Cancelled Members', '', '', '', '', '', '', ''),
	('3','Number of Members', '', '', '', '', '', '', ''),
	('4','Member Application Fee Collection', '', '', '', '', '', '', ''),
	('5','Member Application Fee Return', '', '', '', '', '', '', ''),
	('6','Member Application Fee Reserved', '', '', '', '', '', '', ''),
	('7','Member Savings Collection', '', '', '', '', '', '', ''),
	('8','Member Savings Return', '', '', '', '', '', '', ''),
	('9','Member Savings Reserved', '', '', '', '', '', '', ''),
	('10','Members Sagings & Profit Return', '', '', '', '', '', '', ''),
	('11','Loan Distribution to Members(prsn)', '', '', '', '', '', '', ''),
	('12','Loan Repayment from Members(prsn)', '', '', '', '', '', '', ''),
	('13','Total Debtor Members(prsn)', '', '', '', '', '', '', ''),
	('14','Loan Distribution to Members(taka)', '', '', '', '', '', '', ''),
	('15','Loan Repayment from Members(taka)', '', '', '', '', '', '', ''),
	('16','Total Debtor Members(taka)', '', '', '', '', '', '', ''),
	('17','Total Reserved(Cash at Bank)', '', '', '', '', '', '', ''),
	('18','Total Owing Members(prsn)', '', '', '', '', '', '', ''),
	('19','Total Loan Owing(taka)', '', '', '', '', '', '', ''),
	('20','Owing Reserved for Welfare Trust(prsn)', '', '', '', '', '', '', ''),
	('21','Owing Reserved Loan from WT(taka)', '', '', '', '', '', '', ''),
	('22','5 Years DPS(prsn)', '', '', '', '', '', '', ''),
	('23','5 Years DPS(taka)', '', '', '', '', '', '', ''),
	('24','10 Years DPS(prsn)', '', '', '', '', '', '', ''),
	('25','10 Years DPS(taka)', '', '', '', '', '', '', ''),
	('26','Risk Fund Collection(prsn)', '', '', '', '', '', '', ''),
	('27','Risk Fund Return(prsn)', '', '', '', '', '', '', ''),
	('28','Risk Fund Reserved(prsn)', '', '', '', '', '', '', ''),
	('29','Risk Fund Collection(taka)', '', '', '', '', '', '', ''),
	('30','Risk Fund Return(taka)', '', '', '', '', '', '', ''),
	('31','Risk Fund Reserved(taka)', '', '', '', '', '', '', ''),
	('32','Advanced Loan Repayment(prsn)', '', '', '', '', '', '', ''),
	('33','Advanced Loan Repayment(taka)', '', '', '', '', '', '', ''),
	('34','Profit Collection from Advanced Loan Repayment(prsn)', '', '', '', '', '', '', ''),
	('35','Profit Collection from Advanced Loan Repayment(taka)', '', '', '', '', '', '', ''),
	('36','Service Charge Collection', '', '', '', '', '', '', ''),
	('37','Total Worker', '', '', '', '', '', '', ''),
	('38','Expenses per Worker(taka)', '', '', '', '', '', '', ''),
	('39','Net Profit/Loss of TECSL(taka)', '', '', '', '', '', '', ''),
	('40','Member Increament Target(prsn)', '', '', '', '', '', '', ''),
	('41','Person to Person Communication(prsn)', '', '', '', '', '', '', ''),
	('42','Other Activities for Member Inclusion(prsn)', '', '', '', '', '', '', ''),
	('43','Problem Shooting Activites', '', '', '', '', '', '', ''),
	('44','Share(prsn)', '', '', '', '', '', '', ''),
	('45','Share(taka) TECSL', '', '', '', '', '', '', ''),
	('46','Share(taka) in WT', '', '', '', '', '', '', ''),
	('47','Total Share Reserved Fund(taka)', '', '', '', '', '', '', ''),
	('48','Investment at GF', '', '', '', '', '', '', '');
	--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

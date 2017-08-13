-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 08:30 PM
-- Server version: 5.7.19
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coops`
--

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE IF NOT EXISTS `domains` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `DomainName` varchar(500) DEFAULT NULL,
  `DomainNameBangla` varchar(500) DEFAULT NULL,
  `TestImages` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`id`, `name`, `DomainName`, `DomainNameBangla`, `TestImages`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ICT', 'Info', NULL, '2017-06-20 05:45:29', '2017-06-20 05:45:29'),
(2, NULL, 'A&E', 'Agriculture & Environment', NULL, '2017-06-20 05:45:44', '2017-07-25 17:33:06'),
(3, NULL, 'ES', 'Executive Secretariat', NULL, '2017-07-25 16:18:01', '2017-07-25 16:18:01'),
(4, NULL, 'Program', 'Program', NULL, '2017-07-25 17:57:46', '2017-07-25 17:57:46'),
(5, NULL, 'Health Education', 'Health Education', NULL, '2017-07-25 20:49:11', '2017-07-25 20:49:11'),
(6, NULL, 'Program-4', 'Program-4', NULL, '2017-07-26 17:16:33', '2017-07-26 17:16:33'),
(7, NULL, 'Program-2', 'Program-2', NULL, '2017-07-26 17:56:44', '2017-07-26 17:56:44'),
(8, NULL, 'Life Member', 'Life Member', NULL, '2017-07-26 21:16:11', '2017-07-26 21:16:11'),
(9, NULL, 'Program-5', 'Program-5', NULL, '2017-07-26 21:29:55', '2017-07-26 21:29:55'),
(10, NULL, 'Program-3', 'Program-3', NULL, '2017-07-26 21:30:51', '2017-07-26 21:30:51'),
(11, NULL, 'TSAL', 'TSAL', NULL, '2017-07-26 22:02:29', '2017-07-26 22:02:29'),
(12, NULL, 'BCL', 'BCL', NULL, '2017-07-27 20:19:46', '2017-07-27 20:19:46'),
(13, NULL, 'HEM', 'HEM', NULL, '2017-07-27 20:26:37', '2017-07-27 20:26:37'),
(14, NULL, 'GBM', 'GBM', NULL, '2017-07-27 21:30:36', '2017-07-27 21:30:36'),
(15, NULL, 'HRD & T', 'HRD & T', NULL, '2017-07-27 21:58:49', '2017-07-27 21:58:49'),
(16, NULL, 'Outreach Service (THCC)', 'THCC', NULL, '2017-07-28 18:29:45', '2017-07-28 18:30:53'),
(17, NULL, 'Construction & Engineering', 'Construction & Engineering (CD)', NULL, '2017-07-29 15:16:41', '2017-07-29 15:16:41'),
(18, NULL, 'Health Service', 'Health Service', NULL, '2017-08-03 16:37:36', '2017-08-03 16:37:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

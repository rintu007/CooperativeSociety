-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cosociety
DROP DATABASE IF EXISTS `cosociety`;
CREATE DATABASE IF NOT EXISTS `cosociety` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cosociety`;


-- Dumping structure for table cosociety.shares
DROP TABLE IF EXISTS `shares`;
CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `serial_no` varchar(500) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_id` varchar(500) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date12` varchar(500) DEFAULT NULL,
  `share_number` varchar(500) DEFAULT NULL,
  `share_amount` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Dumping data for table cosociety.shares: ~4 rows (approximately)
DELETE FROM `shares`;
/*!40000 ALTER TABLE `shares` DISABLE KEYS */;
INSERT INTO `shares` (`id`, `name`, `serial_no`, `member_name`, `member_id`, `mobile_no`, `date12`, `share_number`, `share_amount`, `unitprice`, `created_at`, `updated_at`) VALUES
	(37, NULL, '7', '6', '5', '4', '3', '2', '5', 0.00, '2017-01-18 06:57:31', '2017-01-18 06:57:31'),
	(38, NULL, '1', '2', '3', '4', '5', '6', '4', 0.00, '2017-01-18 06:57:41', '2017-01-18 06:57:41'),
	(39, NULL, '7', '6', '5', '4', '3', '2', '5', 0.00, '2017-01-18 06:58:18', '2017-01-18 06:58:18'),
	(40, NULL, '0', '9', '8', '7', '6', '5', '4', 0.00, '2017-01-18 07:05:26', '2017-01-18 07:05:26');
/*!40000 ALTER TABLE `shares` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

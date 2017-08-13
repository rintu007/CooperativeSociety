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

-- Dumping database structure for timf
DROP DATABASE IF EXISTS `timf`;
CREATE DATABASE IF NOT EXISTS `timf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `timf`;


-- Dumping structure for table timf.grades
DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.grades: ~27 rows (approximately)
DELETE FROM `grades`;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
INSERT INTO `grades` (`id`, `name`, `designation`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'ED', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(2, NULL, 'DED', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(3, NULL, 'D', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(4, NULL, 'JD', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(5, NULL, 'DD', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(6, NULL, 'SAD', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(7, NULL, 'AD', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(8, NULL, 'SZM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(9, NULL, 'ZM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(10, NULL, 'AZM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(11, NULL, 'AM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(12, NULL, 'AAM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(13, NULL, 'DAM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(14, NULL, 'JAM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(15, NULL, 'SBM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(16, NULL, 'DSBM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(17, NULL, 'BM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(18, NULL, 'ABM', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(19, NULL, 'SS', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(20, NULL, 'DSS', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(21, NULL, 'FS', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(22, NULL, 'AFS', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(23, NULL, 'SVO', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(24, NULL, 'DSVO', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(25, NULL, 'VO', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(26, NULL, 'OTHERS', '2017-01-25 10:14:16', '2017-01-25 10:14:18'),
	(27, NULL, 'Divisional Head', '2017-01-25 10:14:16', '2017-01-25 10:14:18');
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

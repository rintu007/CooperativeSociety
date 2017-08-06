DROP TABLE IF EXISTS `loanschedules`;
CREATE TABLE IF NOT EXISTS `loanschedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MemberId` varchar(500) DEFAULT NULL,
  `InstallmentNo` varchar(500) DEFAULT NULL,
  `Payable` varchar(500) NOT NULL,
  `Interest` varchar(500) DEFAULT NULL,
  `Total` varchar(500) DEFAULT NULL,
  `posted_by` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
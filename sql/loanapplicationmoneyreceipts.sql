DROP TABLE IF EXISTS `loanapplicationmoneyreceipts`;
CREATE TABLE IF NOT EXISTS `loanapplicationmoneyreceipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(100) DEFAULT NULL,
  `MemberName` varchar(100) DEFAULT NULL,
  `MemberId` varchar(100) DEFAULT NULL,
  `MobileNo` varchar(100) DEFAULT NULL,
  `FormFee` varchar(100) DEFAULT NULL,
  `ActualDate` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
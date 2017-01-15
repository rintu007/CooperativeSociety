DROP TABLE IF EXISTS `loanapplicationmoneyreceipts`;
CREATE TABLE IF NOT EXISTS `loanapplicationmoneyreceipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `CSMId` varchar(500) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `form_fee` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
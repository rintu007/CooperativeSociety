DROP TABLE IF EXISTS `savings`;
CREATE TABLE IF NOT EXISTS `savings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NOT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `saving_amount` decimal(15,2) DEFAULT '0.00',
  `withdrawal_amount` decimal(15,2) DEFAULT '0.00',
  `created_at` varchar(500) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `savings`;
CREATE TABLE IF NOT EXISTS `savings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(500) DEFAULT NULL,
  `member_id` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  
  `member_name` varchar(500) DEFAULT NULL,
  
  `mobile_no` varchar(500) DEFAULT NULL,
  `date12` varchar(500) DEFAULT NULL,
  `share_number` varchar(500) DEFAULT NULL,
  `share_amount` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
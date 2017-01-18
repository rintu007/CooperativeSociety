DROP TABLE IF EXISTS `savings`;
CREATE TABLE IF NOT EXISTS `savings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` int(11) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `month_name` varchar(500) DEFAULT NULL,
  `saving_amount` decimal(15,2) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
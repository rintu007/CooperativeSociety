DROP TABLE IF EXISTS `shares`;
CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` int(11) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `share_number` int(11) DEFAULT NULL,
  `share_amount` float(20) DEFAULT NULL,
 
  PRIMARY KEY (`id`),
  FULLTEXT KEY `idx_name` (`member_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
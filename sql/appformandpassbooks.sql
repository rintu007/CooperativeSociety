DROP TABLE IF EXISTS `appformandpassbooks`;
CREATE TABLE IF NOT EXISTS `appformandpassbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `CSMId` varchar(500) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `app_form` int(11) DEFAULT NULL,
  `passbook` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
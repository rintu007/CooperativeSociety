DROP TABLE IF EXISTS `savings`;
CREATE TABLE `savings` (
  `id` int(11) NOT NULL,
  `serial_no` varchar(11) DEFAULT NULL,
  `member_id` varchar(500) DEFAULT NULL,
  `member_name` varchar(500) NOT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `saving_amount` varchar(11) DEFAULT NULL,
  `withdrawal_amount` varchar(50) NOT NULL,
  `created_at` varchar(500) DEFAULT NULL,
  `updated_at` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


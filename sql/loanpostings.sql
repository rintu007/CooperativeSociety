DROP TABLE IF EXISTS `loanpostings`;
CREATE TABLE IF NOT EXISTS `loanpostings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DomainName` varchar(500) DEFAULT NULL,
  `DivisionName` varchar(500) NOT NULL,
  `ZoneId` varchar(500) DEFAULT NULL,
  `AreaId` varchar(500) DEFAULT NULL,
  `BranchId` varchar(500) DEFAULT NULL,
  `MonthId` varchar(500) DEFAULT NULL,
  `YearId` varchar(500) DEFAULT NULL,
  `MemberId` varchar(500) NOT NULL,
  `MemberName` varchar(500) NOT NULL,
  `InstallmentNo` varchar(500) DEFAULT NULL,
  `Payable` varchar(500) DEFAULT NULL,
  `Interest` varchar(500) NOT NULL,
  `Total` varchar(500) NOT NULL,
  `posted_by` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
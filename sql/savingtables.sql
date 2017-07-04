DROP TABLE IF EXISTS `savingtables`;
CREATE TABLE IF NOT EXISTS `savingtables` (
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
  `AccountNo` varchar(500) DEFAULT NULL,
  `GSaving` varchar(500) DEFAULT NULL,
  `Dps` varchar(500) NOT NULL,
  `posted_by` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
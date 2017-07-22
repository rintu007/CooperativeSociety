-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 06:30 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bd_geocode`
--

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcats` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `CategoryId` int(2) unsigned NOT NULL,
  `SubcategoryName` varchar(500) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`CategoryId`) REFERENCES `addcats` (`id`) 
  ON DELETE CASCADE 
  ON UPDATE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;





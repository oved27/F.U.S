-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 08:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fus`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarm`
--

CREATE TABLE IF NOT EXISTS `alarm` (
  `AlarmID` int(11) NOT NULL AUTO_INCREMENT,
  `AlarmType` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  UNIQUE KEY `AlarmID` (`AlarmID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Id` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Delivers` int(11) DEFAULT '0',
  `CustomerNum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CustomerNum`),
  UNIQUE KEY `CustomerNum` (`CustomerNum`),
  KEY `Delivers` (`Delivers`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `DeliverySn` int(11) NOT NULL AUTO_INCREMENT,
  `DlvDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CustomerId` int(11) NOT NULL DEFAULT '0',
  `DeliverId` int(11) NOT NULL DEFAULT '0',
  `DepartureTime` datetime DEFAULT '0000-00-00 00:00:00',
  `statusId` int(11) DEFAULT NULL,
  `eventId` int(11) DEFAULT NULL,
  `AlarmId` int(11) DEFAULT NULL,
  PRIMARY KEY (`DeliverySn`),
  UNIQUE KEY `DeliverySn` (`DeliverySn`),
  UNIQUE KEY `DeliverId_2` (`DeliverId`),
  KEY `DeliverId` (`DeliverId`),
  KEY `AlarmId` (`AlarmId`),
  KEY `CustomerId` (`CustomerId`),
  KEY `eventId` (`eventId`),
  KEY `statusId` (`statusId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Id` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DrivingExp` int(11) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `HourlyWage` decimal(19,4) DEFAULT '0.0000',
  `DeliverId` int(11) NOT NULL DEFAULT '0',
  `dateShift` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `dateShift` (`dateShift`),
  KEY `DeliverId` (`DeliverId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `EventId` int(11) NOT NULL AUTO_INCREMENT,
  `EventName` varchar(255) DEFAULT NULL,
  `Active` datetime DEFAULT NULL,
  UNIQUE KEY `EventId` (`EventId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `Delivery` varchar(255) DEFAULT NULL,
  `ShiftMgr` varchar(255) DEFAULT NULL,
  `Co` varchar(255) DEFAULT NULL,
  `Developer` varchar(255) DEFAULT NULL,
  `RoleId` varchar(255) NOT NULL,
  PRIMARY KEY (`RoleId`),
  KEY `RoleId` (`RoleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE IF NOT EXISTS `shifts` (
  `ShiftDate` datetime NOT NULL,
  `Morning` tinyint(1) DEFAULT '0',
  `Noon` tinyint(1) DEFAULT '0',
  `Evening` tinyint(1) DEFAULT '0',
  UNIQUE KEY `ShiftDate` (`ShiftDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `InCare` datetime DEFAULT NULL,
  `Assign` datetime DEFAULT NULL,
  `OnTheWay` datetime DEFAULT NULL,
  `Arrived` datetime DEFAULT NULL,
  `Deliver` datetime DEFAULT NULL,
  `Cancel` datetime DEFAULT NULL,
  `StatusId` int(11) DEFAULT NULL,
  UNIQUE KEY `StatusId` (`StatusId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`InCare`, `Assign`, `OnTheWay`, `Arrived`, `Deliver`, `Cancel`, `StatusId`) VALUES
('1899-12-30 00:00:00', '1899-12-30 00:00:00', '1899-12-30 00:00:00', '1899-12-30 00:00:00', '1899-12-30 00:00:00', '1899-12-30 00:00:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

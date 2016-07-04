-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 10:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fus`
--

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `CourierID` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(11) NOT NULL,
  `DrivingExperience` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`CourierID`, `FName`, `Lname`, `Address`, `Phone`, `DrivingExperience`) VALUES
(21, 'aa', 'aa', 'aa', '111-1111111', 3),
(22, 'rr', 'rr', 'rr', '888-8888888', 9),
(23, 'cc', 'cc', 'cc', '333-3333333', 5),
(24, 'dd', 'dd', 'dd', '444-4444444', 6),
(25, 'ee', 'ee', 'ee', '555-5555555', 7),
(26, 'bb', 'bb', 'bb', '222-2222222', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(11) NOT NULL,
  `numberOfDelivery` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FName`, `Lname`, `Address`, `Phone`, `numberOfDelivery`) VALUES
(1, 'yy', 'yy', 'yy', '666-6666666', 13),
(2, 'cc', 'cc', 'ccc', '111-1111111', 13),
(3, 'bb', 'bb', 'bb', '888-8888888', 9),
(4, 'dd', 'dd', 'ddd', '222-2222222', 13),
(5, 'ee', 'ee', 'eec', '222-2222222', 13),
(6, 'dd', 'dd', 'ddc', '888-9999999', 10),
(7, 'rr', 'rr', 'rrc', '777-7777777', 9),
(8, 'tt', 'tt', 'ttc', '555-5555555', 12);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `PickupAddress` varchar(255) NOT NULL,
  `DropDownAddress` varchar(255) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `CourierID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '0',
  `AssignTime` time DEFAULT NULL,
  `PickupTime` time DEFAULT NULL,
  `DropDownTime` time DEFAULT NULL,
  `IsCancel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`DeliveryID`, `Date`, `PickupAddress`, `DropDownAddress`, `CustomerID`, `CourierID`, `IsActive`, `AssignTime`, `PickupTime`, `DropDownTime`, `IsCancel`) VALUES
(1, '2016-07-12', 'ss', 'ss', 1, 21, 0, '04:20:00', NULL, NULL, 0),
(2, '2015-07-12', 'qq', 'qq', 2, 22, 1, NULL, '10:29:00', NULL, 0),
(3, '2015-07-12', 'ww', 'ww', 3, 23, 1, NULL, NULL, '17:30:29', 0),
(4, '2014-07-12', 'ee', 'ee', 4, 24, 1, NULL, NULL, NULL, 0),
(5, '2013-07-12', 'rr', 'rr', 5, 25, 1, NULL, NULL, NULL, 0),
(6, '2015-07-12', 'qq', 'qq', 2, 21, 1, NULL, NULL, NULL, 0),
(7, '2015-07-12', 'ww', 'ww', 3, 21, 1, NULL, NULL, NULL, 0),
(8, '2015-08-05', 'ee', 'ee', 1, 22, 1, NULL, NULL, NULL, 0),
(9, '2014-07-12', 'rr', 'rr', 1, 23, 1, NULL, NULL, NULL, 0),
(10, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(11, '2014-06-12', 'tt', 'tt', 2, 24, 1, NULL, NULL, NULL, 0),
(12, '2014-06-12', 'ww', 'ww', 2, 22, 1, NULL, NULL, NULL, 0),
(13, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(14, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(15, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(16, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(17, '2015-05-12', 'tt', 'tt', 2, 23, 1, NULL, NULL, NULL, 0),
(18, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(19, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(20, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(21, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(22, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(23, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(24, '2015-05-12', 'vv', 'vv', 2, 21, 1, NULL, NULL, NULL, 0),
(25, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(26, '2016-07-12', 'ss', 'ss', 1, 22, 0, NULL, NULL, NULL, 0),
(30, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(31, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(37, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(40, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(41, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(42, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(43, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(44, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(45, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(46, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(47, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(55, '2014-06-12', 'yy', 'yy', 2, 25, 1, NULL, NULL, NULL, 0),
(56, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(57, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(58, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(59, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(60, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(61, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0),
(62, '2016-07-12', 'ss', 'ss', 1, 21, 0, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `scooterassign`
--

CREATE TABLE `scooterassign` (
  `ScooterLicense` varchar(7) NOT NULL,
  `Date` date NOT NULL,
  `Shift` tinyint(4) NOT NULL,
  `CourierID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `scooterassign`
--

INSERT INTO `scooterassign` (`ScooterLicense`, `Date`, `Shift`, `CourierID`, `IsActive`) VALUES
('1111111', '2016-07-05', 2, 21, 1),
('2222222', '2016-08-03', 0, 22, 0),
('9999999', '2016-10-04', 1, 23, 1),
('4444444', '2016-11-02', 0, 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `scooters`
--

CREATE TABLE `scooters` (
  `ScooterLicense` varchar(7) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Model` year(4) NOT NULL,
  `NextTreatment` int(11) NOT NULL DEFAULT '10000',
  `CurrentKM` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `scooters`
--

INSERT INTO `scooters` (`ScooterLicense`, `Type`, `Model`, `NextTreatment`, `CurrentKM`) VALUES
('1111111', 'aa', 1989, 10000, 4585),
('2222222', 'ss', 0000, 20000, 4562),
('4444444', 'gg', 1990, 20000, 5622),
('8888888', 'ff', 1980, 50000, 5433),
('9999999', 'dd', 1978, 40000, 352);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Role` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `FName`, `Lname`, `Address`, `Phone`, `Role`) VALUES
('aaa', 'aaa', 'aaa', 'aaa', 'aaa', '222-2222222', 1),
('ddd', 'ddd', 'ddd', 'ddd', 'ddd', '444-4444444', 1),
('ffff', 'ffff', 'ffff', 'ffff', 'ffff', '555-5555555', 0),
('ggg', 'ggg', 'ggg', 'ggg', 'ggg', '333-3333333', 0),
('sss', 'sss', 'sss', 'sss', 'sss', '111-1111111', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`CourierID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `CourierID` (`CourierID`);

--
-- Indexes for table `scooterassign`
--
ALTER TABLE `scooterassign`
  ADD KEY `ScooterLicense` (`ScooterLicense`),
  ADD KEY `ScooterLicense_2` (`ScooterLicense`),
  ADD KEY `CourierID` (`CourierID`);

--
-- Indexes for table `scooters`
--
ALTER TABLE `scooters`
  ADD PRIMARY KEY (`ScooterLicense`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `CourierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DeliveryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`CourierID`) REFERENCES `courier` (`CourierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scooterassign`
--
ALTER TABLE `scooterassign`
  ADD CONSTRAINT `scooterassign_ibfk_1` FOREIGN KEY (`CourierID`) REFERENCES `courier` (`CourierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scooterassign_ibfk_2` FOREIGN KEY (`ScooterLicense`) REFERENCES `scooters` (`ScooterLicense`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

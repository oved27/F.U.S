-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 12:57 PM
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
  `numberOfDelivery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FName`, `Lname`, `Address`, `Phone`, `numberOfDelivery`) VALUES
(1, 'yy', 'yy', 'yy', '666-6666666', 4),
(2, 'cc', 'cc', 'ccc', '111-1111111', 4),
(3, 'bb', 'bb', 'bb', '888-8888888', 0),
(4, 'dd', 'dd', 'ddd', '222-2222222', 4),
(5, 'ee', 'ee', 'eec', '222-2222222', 4),
(6, 'dd', 'dd', 'ddc', '888-9999999', 6),
(7, 'rr', 'rr', 'rrc', '777-7777777', 5),
(8, 'tt', 'tt', 'ttc', '555-5555555', 8);

-- --------------------------------------------------------

--
-- Table structure for table `deliverystatus`
--

CREATE TABLE `deliverystatus` (
  `DeliveryID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `AssignTime` time NOT NULL,
  `PickupTime` time NOT NULL,
  `DropDownTime` time NOT NULL,
  `CourierID` int(11) NOT NULL,
  `IsCancel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `deliverystatus`
--

INSERT INTO `deliverystatus` (`DeliveryID`, `Date`, `AssignTime`, `PickupTime`, `DropDownTime`, `CourierID`, `IsCancel`) VALUES
(1, '2016-07-12', '07:00:00', '00:17:00', '05:08:05', 21, 0),
(2, '2015-06-12', '07:34:00', '12:17:00', '04:08:05', 22, 1),
(3, '2014-05-12', '07:56:00', '02:17:00', '06:08:05', 23, 1),
(4, '2017-02-12', '07:12:00', '09:17:00', '07:08:05', 24, 1),
(1, '2016-07-12', '07:00:00', '00:00:00', '00:00:00', 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery’sorder`
--

CREATE TABLE `delivery’sorder` (
  `DeliveryID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `PickupAddress` varchar(255) NOT NULL,
  `DropDownAddress` varchar(255) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `CourierID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

--
-- Dumping data for table `delivery’sorder`
--

INSERT INTO `delivery’sorder` (`DeliveryID`, `Date`, `PickupAddress`, `DropDownAddress`, `CustomerID`, `CourierID`, `IsActive`) VALUES
(1, '2016-07-12', 'ss', 'ss', 1, 21, 0),
(2, '2015-07-12', 'qq', 'qq', 2, 22, 1),
(3, '2015-07-12', 'ww', 'ww', 3, 23, 1),
(4, '2014-07-12', 'ee', 'ee', 4, 24, 1),
(5, '2013-07-12', 'rr', 'rr', 5, 25, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `scotterassign`
--

CREATE TABLE `scotterassign` (
  `ScooterLicense` varchar(7) NOT NULL,
  `Date` date NOT NULL,
  `Shift` tinyint(4) NOT NULL,
  `CourierID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=hebrew;

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
-- Indexes for table `deliverystatus`
--
ALTER TABLE `deliverystatus`
  ADD KEY `CourierID` (`CourierID`),
  ADD KEY `DeliveryID` (`DeliveryID`);

--
-- Indexes for table `delivery’sorder`
--
ALTER TABLE `delivery’sorder`
  ADD PRIMARY KEY (`DeliveryID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `CourierID` (`CourierID`);

--
-- Indexes for table `scooters`
--
ALTER TABLE `scooters`
  ADD PRIMARY KEY (`ScooterLicense`);

--
-- Indexes for table `scotterassign`
--
ALTER TABLE `scotterassign`
  ADD KEY `ScooterLicense` (`ScooterLicense`),
  ADD KEY `ScooterLicense_2` (`ScooterLicense`),
  ADD KEY `CourierID` (`CourierID`);

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
-- AUTO_INCREMENT for table `delivery’sorder`
--
ALTER TABLE `delivery’sorder`
  MODIFY `DeliveryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `deliverystatus`
--
ALTER TABLE `deliverystatus`
  ADD CONSTRAINT `deliverystatus_ibfk_1` FOREIGN KEY (`CourierID`) REFERENCES `courier` (`CourierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deliverystatus_ibfk_2` FOREIGN KEY (`DeliveryID`) REFERENCES `delivery’sorder` (`DeliveryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery’sorder`
--
ALTER TABLE `delivery’sorder`
  ADD CONSTRAINT `delivery’sorder_ibfk_1` FOREIGN KEY (`CourierID`) REFERENCES `courier` (`CourierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery’sorder_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scooters`
--
ALTER TABLE `scooters`
  ADD CONSTRAINT `ScooterLicenseToAssign` FOREIGN KEY (`ScooterLicense`) REFERENCES `scotterassign` (`ScooterLicense`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `scotterassign`
--
ALTER TABLE `scotterassign`
  ADD CONSTRAINT `scotterassign_ibfk_1` FOREIGN KEY (`CourierID`) REFERENCES `courier` (`CourierID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

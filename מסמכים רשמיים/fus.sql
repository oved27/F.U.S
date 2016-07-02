-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 08:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

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
-- Table structure for table `alarm`
--

CREATE TABLE `alarm` (
  `AlarmId` int(11) NOT NULL,
  `AlarmType` varchar(255) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `NumberOfDelivery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliverySn` int(11) NOT NULL,
  `DeliveryDate` date NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `DeliverId` int(11) NOT NULL,
  `DepartureTime` date NOT NULL,
  `ArrivalTime` date NOT NULL,
  `StatusId` int(11) NOT NULL,
  `EventId` int(11) NOT NULL,
  `AlarmId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `UserName` varchar(255) NOT NULL,
  `UserPassword` varchar(10) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DrivingExp` int(11) NOT NULL,
  `DeliverId` int(11) NOT NULL,
  `DateShift` date NOT NULL,
  `Role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventId` int(11) NOT NULL,
  `EventName` varchar(255) NOT NULL,
  `Active` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Delivery` tinyint(1) NOT NULL DEFAULT '0',
  `ShiftMgr` tinyint(1) NOT NULL DEFAULT '0',
  `Co` tinyint(1) NOT NULL DEFAULT '0',
  `Developer` tinyint(1) NOT NULL DEFAULT '0',
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `ShiftDate` date NOT NULL,
  `Morning` tinyint(1) NOT NULL DEFAULT '0',
  `Noon` tinyint(1) NOT NULL DEFAULT '0',
  `Evening` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `InCare` date NOT NULL,
  `Assign` date NOT NULL,
  `OnTheWay` date NOT NULL,
  `Arrived` date NOT NULL,
  `Deliver` date NOT NULL,
  `Cancel` date NOT NULL,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alarm`
--
ALTER TABLE `alarm`
  ADD PRIMARY KEY (`AlarmId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliverySn`),
  ADD KEY `EventId` (`EventId`),
  ADD KEY `DeliverId` (`DeliverId`),
  ADD KEY `CustomerId` (`CustomerId`),
  ADD KEY `StatusId` (`StatusId`),
  ADD KEY `AlarmId` (`AlarmId`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `Role` (`Role`),
  ADD KEY `DeliverId` (`DeliverId`),
  ADD KEY `DateShift` (`DateShift`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Role`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`ShiftDate`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alarm`
--
ALTER TABLE `alarm`
  MODIFY `AlarmId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DeliverySn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`EventId`) REFERENCES `events` (`EventId`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customers` (`CustomerId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_4` FOREIGN KEY (`AlarmId`) REFERENCES `alarm` (`AlarmId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `roles` (`Role`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `employes_ibfk_2` FOREIGN KEY (`DeliverId`) REFERENCES `delivery` (`DeliverySn`),
  ADD CONSTRAINT `employes_ibfk_3` FOREIGN KEY (`DateShift`) REFERENCES `shifts` (`ShiftDate`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

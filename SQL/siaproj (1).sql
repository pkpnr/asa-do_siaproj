-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 06:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siaproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsn_estab`
--

CREATE TABLE `bsn_estab` (
  `BusinessID` int(11) NOT NULL,
  `bsn_Nm` varchar(500) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Cont_Num` varchar(500) DEFAULT NULL,
  `categ_Estab` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsn_estab`
--

INSERT INTO `bsn_estab` (`BusinessID`, `bsn_Nm`, `Address`, `Cont_Num`, `categ_Estab`) VALUES
(1, 'Prito Paborito', 'CM Recto Avenue, Lapasan, Cagayan de Oro, 9000 Misamis Oriental', '(+63)933-983-1279', 'Food and Beverage'),
(2, 'PIDOT 1971 Deep Fried Chicken and Barbecue', 'CM Recto Avenue, Lapasan, Cagayan de Oro, 9000 Misamis Oriental', '(088) 880 7203', 'Food and Beverage'),
(3, '3J\'s Net and Prints', 'CM Recto Avenue, Lapasan, Cagayan de Oro, 9000 Misamis Oriental', '(+63)915-250-6630', 'Printing Services'),
(4, 'Jollibee', 'Gateway Tower 1, Ground floor, Cagayan de Oro National High Way, Cagayan de Oro Misamis Oriental', '(088) 880 5226', 'Food and Beverage');

-- --------------------------------------------------------

--
-- Stand-in structure for view `byquant`
-- (See below for the actual view)
--
CREATE TABLE `byquant` (
`bsn_Nm` varchar(500)
,`Address` varchar(500)
,`Cont_Num` varchar(500)
,`itemName` varchar(500)
,`Price` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `byservavb`
-- (See below for the actual view)
--
CREATE TABLE `byservavb` (
`bsn_Nm` varchar(500)
,`Address` varchar(500)
,`Cont_Num` varchar(500)
,`srv_Nm` varchar(500)
,`SrvRate` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gen_tb`
-- (See below for the actual view)
--
CREATE TABLE `gen_tb` (
`bsn_Nm` varchar(500)
,`Address` varchar(500)
,`Cont_Num` varchar(500)
,`itemName` varchar(500)
,`Price` float
);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ItemID` int(11) NOT NULL,
  `itemName` varchar(500) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `ItemSoldBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `itemName`, `Price`, `ItemSoldBy`) VALUES
(1, 'Arroz Caldo with Egg', 89, 1),
(2, 'Lugaw with Egg', 50, 1),
(3, 'Chicken Mami with Egg', 99, 1),
(4, 'Goto', 89, 1),
(5, '2 Pcs. Fried Chicken with 2 Cups of Plain Rice', 164, 2),
(6, '2 Pcs. Fried Chicken and 2 Sticks of Pork Barbecue with 2 Cups of Plain Rice', 221, 2),
(7, '6 Pcs. Fried Chicken and 6 Sticks of Pork Barbecue', 484, 2),
(8, 'Jolly Spaghetti (ala Carte)', 99, 4),
(9, 'Burger Steak (ala Carte)', 75, 4),
(10, 'Jolly Hotdog (ala Carte)', 39, 4);

-- --------------------------------------------------------

--
-- Table structure for table `item_available`
--

CREATE TABLE `item_available` (
  `BsnID` int(11) NOT NULL,
  `ItmID` int(11) NOT NULL,
  `AvbQnt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_available`
--

INSERT INTO `item_available` (`BsnID`, `ItmID`, `AvbQnt`) VALUES
(1, 1, 50),
(1, 2, 20),
(1, 3, 80),
(1, 4, 20),
(2, 5, 40),
(2, 6, 50),
(2, 7, 100),
(4, 8, 80),
(4, 9, 20),
(4, 10, 70);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `srv_Nm` varchar(500) DEFAULT NULL,
  `SrvRate` float DEFAULT NULL,
  `DescRate` varchar(500) DEFAULT NULL,
  `ServOffdBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `srv_Nm`, `SrvRate`, `DescRate`, `ServOffdBy`) VALUES
(1, 'Layouting', 100, 'per T-Shirt', 3),
(2, 'Printing', 20, 'per Mug', 3);

-- --------------------------------------------------------

--
-- Table structure for table `serv_available`
--

CREATE TABLE `serv_available` (
  `BsnID` int(11) NOT NULL,
  `SrvID` int(11) NOT NULL,
  `IsAvailable` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serv_available`
--

INSERT INTO `serv_available` (`BsnID`, `SrvID`, `IsAvailable`) VALUES
(3, 1, 'Yes'),
(3, 2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentID` int(11) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Username` varchar(500) NOT NULL,
  `S_Pwd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentID`, `Email`, `Username`, `S_Pwd`) VALUES
(2010667823, 'gora@conyomail.com', 'heatpour', '$2y$10$aXmAJ.CZqSq7VWHJFBLwl.xmxSzsrvHnETiA3DB9AzMShcij.3jBC'),
(2021053435, 'demo@mamamoblue.com', 'demorunz', '$2y$10$/2Xn6fvG5CUxDZ3ScDbHReVcPtxVyzLfzHPDperCap771KnQEF/F2'),
(2147483647, 'demo@siaproject.com', 'deemo', '$2y$10$LVfmTQGCLC0rvcTLHvC0bOFHOfHf/eM7DWJbx2NgxD9ISgJW/R6Q6');

-- --------------------------------------------------------

--
-- Structure for view `byquant`
--
DROP TABLE IF EXISTS `byquant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `byquant`  AS SELECT `bsn`.`bsn_Nm` AS `bsn_Nm`, `bsn`.`Address` AS `Address`, `bsn`.`Cont_Num` AS `Cont_Num`, `i`.`itemName` AS `itemName`, `i`.`Price` AS `Price` FROM ((`item_available` `i2` join `items` `i` on(`i2`.`ItmID` = `i`.`ItemID`)) join `bsn_estab` `bsn` on(`i2`.`BsnID` = `bsn`.`BusinessID`)) ORDER BY `i2`.`AvbQnt` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `byservavb`
--
DROP TABLE IF EXISTS `byservavb`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `byservavb`  AS SELECT `bsn`.`bsn_Nm` AS `bsn_Nm`, `bsn`.`Address` AS `Address`, `bsn`.`Cont_Num` AS `Cont_Num`, `s`.`srv_Nm` AS `srv_Nm`, `s`.`SrvRate` AS `SrvRate` FROM ((`serv_available` `s2` join `services` `s` on(`s2`.`SrvID` = `s`.`ServiceID`)) join `bsn_estab` `bsn` on(`s2`.`BsnID` = `bsn`.`BusinessID`)) WHERE `s2`.`IsAvailable` = 'Yes' ;

-- --------------------------------------------------------

--
-- Structure for view `gen_tb`
--
DROP TABLE IF EXISTS `gen_tb`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gen_tb`  AS SELECT `bsn`.`bsn_Nm` AS `bsn_Nm`, `bsn`.`Address` AS `Address`, `bsn`.`Cont_Num` AS `Cont_Num`, `i`.`itemName` AS `itemName`, `i`.`Price` AS `Price` FROM (`bsn_estab` `bsn` join `items` `i` on(`bsn`.`BusinessID` = `i`.`ItemSoldBy`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsn_estab`
--
ALTER TABLE `bsn_estab`
  ADD PRIMARY KEY (`BusinessID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `ItemSoldBy` (`ItemSoldBy`);

--
-- Indexes for table `item_available`
--
ALTER TABLE `item_available`
  ADD KEY `BsnID` (`BsnID`),
  ADD KEY `ItmID` (`ItmID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `ServOffdBy` (`ServOffdBy`);

--
-- Indexes for table `serv_available`
--
ALTER TABLE `serv_available`
  ADD KEY `BsnID` (`BsnID`),
  ADD KEY `SrvID` (`SrvID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsn_estab`
--
ALTER TABLE `bsn_estab`
  MODIFY `BusinessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`ItemSoldBy`) REFERENCES `bsn_estab` (`BusinessID`);

--
-- Constraints for table `item_available`
--
ALTER TABLE `item_available`
  ADD CONSTRAINT `item_available_ibfk_1` FOREIGN KEY (`BsnID`) REFERENCES `bsn_estab` (`BusinessID`),
  ADD CONSTRAINT `item_available_ibfk_2` FOREIGN KEY (`ItmID`) REFERENCES `items` (`ItemID`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`ServOffdBy`) REFERENCES `bsn_estab` (`BusinessID`);

--
-- Constraints for table `serv_available`
--
ALTER TABLE `serv_available`
  ADD CONSTRAINT `serv_available_ibfk_1` FOREIGN KEY (`BsnID`) REFERENCES `bsn_estab` (`BusinessID`),
  ADD CONSTRAINT `serv_available_ibfk_2` FOREIGN KEY (`SrvID`) REFERENCES `services` (`ServiceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

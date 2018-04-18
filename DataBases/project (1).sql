-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 01:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appo`
--

CREATE TABLE `appo` (
  `id` int(11) NOT NULL,
  `patientid` int(11) DEFAULT NULL,
  `appoint` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appo`
--

INSERT INTO `appo` (`id`, `patientid`, `appoint`) VALUES
(29, 5, NULL),
(30, 5, NULL),
(31, 5, NULL),
(32, 5, NULL),
(33, 5, NULL),
(34, 5, NULL),
(35, 5, NULL),
(36, 5, NULL),
(37, 5, NULL),
(38, 5, NULL),
(39, 5, NULL),
(40, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorid` int(11) DEFAULT NULL,
  `Day` varchar(10) NOT NULL,
  `appoint` varchar(30) DEFAULT NULL,
  `patientlimit` int(11) DEFAULT NULL,
  `patientnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorid`, `Day`, `appoint`, `patientlimit`, `patientnum`) VALUES
(1, 4, '01', '7', 0, 0),
(2, 4, '4', '65', 8, 7),
(3, 4, '25', '54', 5, 5),
(4, 4, '1', '5', 8, 5),
(5, 4, '4', '8', 65, 8);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `unitPrice` float DEFAULT NULL,
  `Mount` int(11) DEFAULT NULL,
  `totalPrice` float DEFAULT NULL,
  `invoiceDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `itemId`, `unitPrice`, `Mount`, `totalPrice`, `invoiceDate`) VALUES
(1, 1, 100, 122, 12200, '2018-04-16'),
(2, 1, 100, 1, 100, '2018-04-16'),
(3, 1, 1, 1, 1, '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `unitPrice` float DEFAULT NULL,
  `existMount` int(11) DEFAULT NULL,
  `soldMount` int(11) DEFAULT NULL,
  `desription` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `unitPrice`, `existMount`, `soldMount`, `desription`) VALUES
(1, 'profin', 1, 10, 1, 'ddd'),
(2, 'congestal', 70, 10, 5, 'dsd'),
(3, 'lbos', 14, 10, 15, 'lbosss');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `unitPrice` float DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `vendorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `itemId`, `unitPrice`, `description`, `vendorId`) VALUES
(1, 1, 100, 'kcms;lclsanc;lksa;mcklsanl;ck\'smac', 1),
(3, 3, 10, 'kfklasanfck', 2),
(4, 2, 40, 'c', 1),
(5, 3, 15, 'c', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_patient`
--

CREATE TABLE `order_patient` (
  `id` int(11) NOT NULL,
  `patientId` int(11) DEFAULT NULL,
  `invoiceId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_patient`
--

INSERT INTO `order_patient` (`id`, `patientId`, `invoiceId`) VALUES
(0, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_supply`
--

CREATE TABLE `order_supply` (
  `id` int(11) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `mount` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `vendorId` int(11) DEFAULT NULL,
  `adminConfirm` varchar(1) NOT NULL,
  `vendorConfirm` varchar(1) NOT NULL,
  `offerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_supply`
--

INSERT INTO `order_supply` (`id`, `itemId`, `mount`, `Price`, `vendorId`, `adminConfirm`, `vendorConfirm`, `offerId`) VALUES
(1, 2, 1, 111, 1, 'T', 'T', 1),
(2, 1, 12, 50, 1, 'F', 'F', 12),
(3, 2, 12, 70, 1, 'T', 'T', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `active` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `adress`, `email`, `image`, `type`, `active`) VALUES
(1, 'mina', 'mina', 1234, 'sds', 'ddd', 'dd', 4, 'pending'),
(2, 'Andrew', 'dodos', 123, 'nn', 'nnn', 'nn', 4, 'active'),
(3, 'atef', 'atef', 1234, 's', 's', 's', 5, 'active'),
(4, 'DOC', 'DOC', 1234, 's', 'a', 'a', 3, 'active'),
(5, '7amza', '7amza', 222, ';v,;', ';c,v', 'v;,s', 5, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users_type`
--

CREATE TABLE `users_type` (
  `userId` int(11) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_type`
--

INSERT INTO `users_type` (`userId`, `userType`) VALUES
(1, 'admin'),
(2, 'Employee'),
(3, 'Doctor'),
(4, 'vendor'),
(5, 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appo`
--
ALTER TABLE `appo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pat` (`patientid`),
  ADD KEY `FK_appoint` (`appoint`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_doctor` (`doctorid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_itemInvoice` (`itemId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_itemOffer` (`itemId`),
  ADD KEY `FK_vendorOffer` (`vendorId`);

--
-- Indexes for table `order_patient`
--
ALTER TABLE `order_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_patient` (`patientId`),
  ADD KEY `FK_invoice` (`invoiceId`);

--
-- Indexes for table `order_supply`
--
ALTER TABLE `order_supply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_itemOrder` (`itemId`),
  ADD KEY `FK_vendorOrder` (`vendorId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_UserType` (`type`);

--
-- Indexes for table `users_type`
--
ALTER TABLE `users_type`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appo`
--
ALTER TABLE `appo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_type`
--
ALTER TABLE `users_type`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appo`
--
ALTER TABLE `appo`
  ADD CONSTRAINT `FK_appoint` FOREIGN KEY (`appoint`) REFERENCES `appointment` (`id`),
  ADD CONSTRAINT `FK_pat` FOREIGN KEY (`patientid`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `FK_doctor` FOREIGN KEY (`doctorid`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `FK_itemInvoice` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `FK_itemOffer` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `FK_vendorOffer` FOREIGN KEY (`vendorId`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_patient`
--
ALTER TABLE `order_patient`
  ADD CONSTRAINT `FK_invoice` FOREIGN KEY (`invoiceId`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `FK_patient` FOREIGN KEY (`patientId`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_supply`
--
ALTER TABLE `order_supply`
  ADD CONSTRAINT `FK_itemOrder` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `FK_vendorOrder` FOREIGN KEY (`vendorId`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_UserType` FOREIGN KEY (`type`) REFERENCES `users_type` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

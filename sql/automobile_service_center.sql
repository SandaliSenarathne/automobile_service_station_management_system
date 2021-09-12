-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 03:39 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobile_service_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(5) NOT NULL,
  `booking_id` int(5) DEFAULT NULL,
  `customer_id` int(5) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill_item`
--

CREATE TABLE `bill_item` (
  `id` int(5) NOT NULL,
  `bill_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `service_type` int(1) NOT NULL COMMENT '0-normal service, \r\n1-Breakdown service,\r\n2-Repair service,\r\n3-Modification service',
  `vehicle_number` varchar(50) NOT NULL,
  `vehicle_brand` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `requested_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0-pending,\r\n1-accepted,\r\n2-rejected,\r\n3-completed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `thumbnail` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` blob NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modification_item`
--

CREATE TABLE `modification_item` (
  `id` int(5) NOT NULL,
  `booking_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Only if a modification service';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0 COMMENT '0-user, 1-admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `first_name`, `last_name`, `phone`, `address`, `pwd`, `role`) VALUES
(1, 'sandali@gmail.com', 'Sandali', 'Seya', '0719748123', 'mslkdj klas, sdkf.', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(2, 'sachitha@gmail.com', 'sachitha', 'Hirushan', '0719748123', 'dmfkl lakmffl lsfm', '1', 0),
(3, 'ruwanthi@gmail.com', 'ruwanthi@gmail.com', 'ruwanthi@gmail.com', 'ruwanthi@g', 'ruwanthi@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 0),
(4, 'nayomi@gmail.com', 'nayomi@gmail.com', 'nayomi@gmail.com', 'nayomi@gma', 'nayomi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(5, 'dilshan@gmail.com', 'dilshan@gmail.com', 'dilshan@gmail.com', 'dilshan@gm', 'dilshan@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ForeignKeyConstraint5` (`customer_id`),
  ADD KEY `ForeignKeyConstraint8` (`booking_id`);

--
-- Indexes for table `bill_item`
--
ALTER TABLE `bill_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ForeignKeyConstraint6` (`bill_id`),
  ADD KEY `ForeignKeyConstraint7` (`item_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ForeignKeyConstraint2` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ForeignKeyConstraint1` (`category_id`);

--
-- Indexes for table `modification_item`
--
ALTER TABLE `modification_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ForeignKeyConstraint3` (`booking_id`),
  ADD KEY `ForeignKeyConstraint4` (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_item`
--
ALTER TABLE `bill_item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modification_item`
--
ALTER TABLE `modification_item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `ForeignKeyConstraint5` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ForeignKeyConstraint8` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`);

--
-- Constraints for table `bill_item`
--
ALTER TABLE `bill_item`
  ADD CONSTRAINT `ForeignKeyConstraint6` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `ForeignKeyConstraint7` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `ForeignKeyConstraint2` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `ForeignKeyConstraint1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `modification_item`
--
ALTER TABLE `modification_item`
  ADD CONSTRAINT `ForeignKeyConstraint3` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `ForeignKeyConstraint4` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

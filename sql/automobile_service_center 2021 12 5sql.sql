-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 04:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer_id`, `service_type`, `vehicle_number`, `vehicle_brand`, `vehicle_model`, `message`, `date`, `time`, `requested_on`, `status`) VALUES
(10, 13, 2, '3', '3', '3', '', '2021-09-10', '12:09:00', '2021-09-14 06:33:37', 2),
(11, 13, 2, 'grdvd', 'fvdfvde', 'feedf', 'fedf', '2021-09-11', '12:10:00', '2021-09-14 06:34:52', 2),
(12, 1, 4, 'dwd', 'frgvfr', 'rgfrf', 'fervef', '2021-10-15', '09:42:00', '2021-10-17 16:07:29', 0),
(13, 1, 12, 'dwd', 'frgvfr', 'rgfrf', ' fervef', '2021-10-15', '09:42:00', '2021-10-17 16:44:53', 0),
(14, 1, 12, 'dwd', 'frgvfr', 'rgfrf', ' fervef', '2021-10-15', '09:42:00', '2021-10-17 16:45:06', 0),
(15, 1, 12, 'dwd', 'frgvfr', 'rgfrf', ' fervef', '2021-10-15', '09:42:00', '2021-10-17 16:45:10', 0),
(16, 1, 4, 'fesfe', 'fefes', 'efcewfc', 'fesdf', '2021-12-10', '23:56:00', '2021-12-04 18:21:29', 0),
(17, 1, 4, 'escfesc', 'cefsdsw', 'cfescds', 'sczc', '2021-12-09', '00:13:00', '2021-12-04 18:37:27', 0),
(18, 1, 4, 'efsfces', 'fesde', 'fesfcesf', 'efsds', '2021-12-11', '00:14:00', '2021-12-04 18:38:23', 0),
(19, 1, 4, 'fefe', 'fefef', 'fedredr', 'effe', '2021-12-09', '00:15:00', '2021-12-04 18:39:34', 0),
(20, 1, 4, 'fhnf', 'hfbf', 'fhhbf', 'fcesc', '2021-12-04', '00:16:00', '2021-12-04 18:40:40', 0),
(21, 1, 4, 'fefef', 'fefe', 'efdfef', 'efef', '2021-12-11', '00:17:00', '2021-12-04 18:41:33', 0),
(22, 1, 4, 'f4r3', '4eft4ef', '4eft4e', 'grgf', '2021-12-09', '20:47:00', '2021-12-05 15:11:38', 0),
(23, 1, 4, 'fee', 'fee', 'ede', 'grdxgf', '2021-12-10', '20:50:00', '2021-12-05 15:15:54', 0),
(24, 1, 4, 'fee', 'fee', 'ede', 'grdxgf', '2021-12-10', '20:50:00', '2021-12-05 15:16:51', 0),
(25, 1, 4, 'fef', 'egvgferfgre', 'fefe', 'effe', '2021-12-17', '21:27:00', '2021-12-05 15:51:48', 0),
(26, 1, 4, 'g5rg', 'grgfrf', 'gfrfrf', 'grfrdxf', '2021-12-10', '21:29:00', '2021-12-05 15:54:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 not finished 1 finished',
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `date`, `time`, `status`, `booking_id`, `customer_id`) VALUES
(3, '2021-12-05', '20:45:54', 1, 23, 1),
(5, '2021-12-05', '21:21:48', 1, 25, 1),
(6, '2021-12-05', '21:24:00', 0, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `date`, `time`, `cart_id`, `item_id`) VALUES
(6, '2021-12-05', '21:13:55', 3, 7),
(8, '2021-12-05', '21:14:01', 3, 7),
(9, '2021-12-05', '21:22:28', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `thumbnail` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `thumbnail`) VALUES
(1, 'grfcbrfcb', 0x6261636b656e642f75706c6f6164732f313633313433343039394242425f4465736b746f702e504e47),
(19, 'fcedcfedcf', 0x6261636b656e642f75706c6f6164732f3136333134333637303861646d696e46656174757265312e504e47),
(25, 'gfrgvr', 0x6261636b656e642f75706c6f6164732f313633313630323532314242425f4465736b746f702e504e47);

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

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `category_id`, `name`, `description`, `thumbnail`, `price`, `stock`) VALUES
(7, 19, 'MATTRESS-Arpico double layer 6X3', '2558', 0x6261636b656e642f75706c6f6164732f31363333383534333838696d616765202831292e706e67, 25, 20);

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
(1, 'sandali@gmail.com', 'Sandali', 'Seya', '0719748123', 'mslkdj klas, sdkf.', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(2, 'sachitha@gmail.com', 'sachitha', 'Hirushan', '0719748123', 'dmfkl lakmffl lsfm', '1', 0),
(3, 'ruwanthi@gmail.com', 'ruwanthi@gmail.com', 'ruwanthi@gmail.com', 'ruwanthi@g', 'ruwanthi@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 0),
(4, 'nayomi@gmail.com', 'nayomi@gmail.com', 'nayomi@gmail.com', 'nayomi@gma', 'nayomi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(5, 'dilshan@gmail.com', 'dilshan@gmail.com', 'dilshan@gmail.com', 'dilshan@gm', 'dilshan@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(6, 'Shpsachitha@gmail.com', 'Shpsachitha@gmail.com', 'Shpsachitha@gmail.com', 'Shpsachith', 'Shpsachitha@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(7, 'sam@gmail.com', 'sam@gmail.com', 'sam@gmail.com', 'sam@gmail.', 'sam@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(8, 'Shpsachitha@gmail.co', 'Shpsachitha@gmail.co', 'Shpsachitha@gmail.co', 'Shpsachith', 'Shpsachitha@gmail.co', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(9, 'Shpsachitha@gmail.cp', 'Shpsachitha@gmail.cp', 'Shpsachitha@gmail.cp', 'Shpsachith', 'Shpsachitha@gmail.cp', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(10, 'Shpsachitha@gmail.vv', 'Shpsachitha@gmail.vv', 'Shpsachitha@gmail.vv', 'Shpsachith', 'Shpsachitha@gmail.vv', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(11, 'Shpsachithac@gmail.com', 'Shpsachithac@gmail.com', 'Shpsachithac@gmail.com', 'Shpsachith', 'Shpsachithac@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(12, 'Shpsachithacv@gmail.com', 'Shpsachithacv@gmail.com', 'Shpsachithacv@gmail.com', 'Shpsachith', 'Shpsachithacv@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(13, '1Shpsachitha@gmail.com', '1Shpsachitha@gmail.com', '1Shpsachitha@gmail.com', '1Shpsachit', '1Shpsachitha@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(14, 'admin@gmail.com', 'admin@gmail.com', 'admin@gmail.com', 'admin@gmai', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1);

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `modification_item`
--
ALTER TABLE `modification_item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

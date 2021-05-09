-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 05:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_new_admin`
--

CREATE TABLE `add_new_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_new_admin`
--

INSERT INTO `add_new_admin` (`id`, `name`, `nid`, `phone`, `gender`, `password`) VALUES
(1, 'mitu', '1234567', '12345', 'female', '12345'),
(4, 'SUMAIAH ISLAM MITU', '1234fgh', '12345', 'female', '12345'),
(5, 'x', 'ffjghfkn', '3456', 'female', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `add_ticket_info`
--

CREATE TABLE `add_ticket_info` (
  `id` int(11) NOT NULL,
  `p_from` varchar(100) NOT NULL,
  `p_to` varchar(100) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_time` varchar(100) NOT NULL,
  `ticket_price` varchar(100) NOT NULL,
  `ticket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_ticket_info`
--

INSERT INTO `add_ticket_info` (`id`, `p_from`, `p_to`, `p_date`, `p_time`, `ticket_price`, `ticket`) VALUES
(6, 'Dhaka', 'Khagrachhari', '2020-08-30', '10:00', '700', '20'),
(8, 'Dhaka', 'Feni', '2020-08-28', '21:30', '300', '20'),
(9, 'Dhaka', 'Feni', '2020-08-28', '21:30', '300', '20'),
(10, 'Dhaka', 'Meherpur', '2020-08-29', '16:00', '200', '20'),
(11, 'Dhaka', 'Gaibandha', '2020-08-31', '17:10', '400', '30'),
(12, 'Dhaka', 'Jamalpur', '2020-08-31', '01:29', '700', '30');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `p_from` varchar(100) NOT NULL,
  `p_to` varchar(100) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_time` varchar(100) NOT NULL,
  `ticket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `p_from`, `p_to`, `p_date`, `p_time`, `ticket`) VALUES
(3, 'Sumaiah', '01517006325', 'Dhaka', 'Feni', '2020-08-28', '21:30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CATID` bigint(20) NOT NULL,
  `name` varchar(120) NOT NULL DEFAULT '',
  `seo` varchar(200) NOT NULL,
  `parent` bigint(20) NOT NULL DEFAULT 0,
  `details` text NOT NULL,
  `mtitle` text NOT NULL,
  `mdesc` text NOT NULL,
  `mtags` text NOT NULL,
  `category_image` varchar(500) NOT NULL,
  `category_thumb_image` varchar(500) NOT NULL,
  `category_medium_image` varchar(500) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL COMMENT '( 0 - Active , 1 - Inactive)',
  `delete_sts` int(11) NOT NULL DEFAULT 0 COMMENT '0-active,1 -inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `nid`, `phone`, `gender`, `password`) VALUES
(2, 'Sumaiah', 'ghy678', '12345', 'female', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_code`
--

CREATE TABLE `transaction_code` (
  `id` int(11) NOT NULL,
  `payment_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_code`
--

INSERT INTO `transaction_code` (`id`, `payment_code`) VALUES
(1, '679821434'),
(2, '2143465'),
(3, '2143465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_new_admin`
--
ALTER TABLE `add_new_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_ticket_info`
--
ALTER TABLE `add_ticket_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_code`
--
ALTER TABLE `transaction_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_new_admin`
--
ALTER TABLE `add_new_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_ticket_info`
--
ALTER TABLE `add_ticket_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_code`
--
ALTER TABLE `transaction_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

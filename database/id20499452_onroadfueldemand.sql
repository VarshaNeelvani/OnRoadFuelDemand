-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2023 at 07:14 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- CREATE DATABASE IF NOT EXISTS `id20499452_onroadfueldemand`;
USE b7xqzvtfanhnwhk0ydhl;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20499452_onroadfueldemand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL DEFAULT '',
  `admin_name` varchar(100) DEFAULT NULL,
  `shop_name` varchar(100) DEFAULT NULL,
  `shop_address` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `shop_name`, `shop_address`, `mobile_no`, `password`) VALUES
('AD001', 'Pooja Hiremath', 'Growrobot', 'Opposite to bvb college ,hubli', '+919113209120', '@Po203');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `user_name` varchar(100) DEFAULT NULL,
  `shop_id` varchar(100) DEFAULT NULL,
  `user_mobile` varchar(100) DEFAULT NULL,
  `requirement_work_details` varchar(100) DEFAULT NULL,
  `dated` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`user_name`, `shop_id`, `user_mobile`, `requirement_work_details`, `dated`) VALUES
('Prema Arabi', 'SH001', '+916362629288', 'Lubrications', '2023/2/1'),
('Prema Arabi', 'SH002', '+916362629288', 'lubrication', '2023-03-01'),
('Akshata ', 'SH003', '+918310579240', 'All fuels', '2023-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(100) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(100) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `postaladdress` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `city`, `mobile_no`, `email_id`, `postaladdress`, `password`) VALUES
('US001', 'Prema Arabi', 'Vijayapur', '+916362629288', 'premaarabi23@gmail.com', 'Kalyan nagar, Ashram Road,Vijayapur', 'Pr200@');

-- --------------------------------------------------------

--
-- Table structure for table `work_details`
--

CREATE TABLE `work_details` (
  `shop_id` varchar(100) NOT NULL DEFAULT '',
  `shop_name` varchar(100) DEFAULT NULL,
  `work_facility_details` varchar(300) DEFAULT NULL,
  `service_charge` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_details`
--

INSERT INTO `work_details` (`shop_id`, `shop_name`, `work_facility_details`, `service_charge`) VALUES
('SH001', 'ENERGETIC', 'Lubrication', '700'),
('SH002', 'GROWROBOT', 'coolant levels', '790');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `work_details`
--
ALTER TABLE `work_details`
  ADD PRIMARY KEY (`shop_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

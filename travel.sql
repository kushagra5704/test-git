-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 05:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_vehicle`
--

CREATE TABLE `add_vehicle` (
  `vech_id` int(11) NOT NULL,
  `model_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `driver_license_no` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `load_type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `source` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `delivery_start_date` date NOT NULL,
  `delivery_end_date` date NOT NULL,
  `approval_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_vehicle`
--

INSERT INTO `add_vehicle` (`vech_id`, `model_no`, `capacity`, `reg_no`, `driver_license_no`, `load_type`, `weight`, `quantity`, `source`, `destination`, `delivery_start_date`, `delivery_end_date`, `approval_status`, `date`, `unit_id`) VALUES
(1, '', 20, 0, '', 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '', '0000-00-00', 0),
(2, '', 20, 0, '', 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '', '0000-00-00', 0),
(3, '', 20, 0, '', 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '', '0000-00-00', 0),
(4, 'TATA AIA', 20, 0, '', 0, 0, 0, 1, 2, '0000-00-00', '0000-00-00', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop_address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`user_id`, `name`, `password`, `mobile`, `shop_name`, `shop_address`) VALUES
(1, 'Deb', '123', '9534014778', 'Bitsphere', 'ranchi');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `plc_id` int(11) NOT NULL,
  `names` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`plc_id`, `names`) VALUES
(1, 'ranchi'),
(2, 'garwah'),
(3, 'ramgarh'),
(4, 'bokaro');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `u_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  ADD PRIMARY KEY (`vech_id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`plc_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  MODIFY `vech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `plc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

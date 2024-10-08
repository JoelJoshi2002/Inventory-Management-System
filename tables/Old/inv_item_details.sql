-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv_item_details`
--

CREATE TABLE `inv_item_details` (
  `sl_no` int(5) NOT NULL,
  `inv_id` int(5) NOT NULL,
  `inv_item_id` int(5) NOT NULL,
  `item_sl_no` int(5) NOT NULL,
  `make_year` year(4) NOT NULL,
  `asset_code` varchar(20) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `current_place` varchar(20) NOT NULL,
  `building` varchar(20) NOT NULL,
  `room_no` int(5) NOT NULL,
  `parchased_to` varchar(20) NOT NULL,
  `primary_custodian` varchar(15) NOT NULL,
  `in_charge` varchar(15) NOT NULL,
  `remarks` text NOT NULL,
  `entered_on` int(6) NOT NULL DEFAULT current_timestamp(),
  `entered_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_item_details`
--
ALTER TABLE `inv_item_details`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_item_details`
--
ALTER TABLE `inv_item_details`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

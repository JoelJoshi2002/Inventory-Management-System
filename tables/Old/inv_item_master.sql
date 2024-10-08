-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:02 AM
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
-- Table structure for table `inv_item_master`
--

CREATE TABLE `inv_item_master` (
  `sl_no` int(5) NOT NULL,
  `inv_id` int(5) NOT NULL,
  `item_name` varchar(10) NOT NULL,
  `item_model_no` varchar(20) NOT NULL,
  `item_make` varchar(20) NOT NULL,
  `item_hsn_sac` varchar(20) NOT NULL,
  `item_cgst` float NOT NULL,
  `item_sgst` float NOT NULL,
  `item_igst` float NOT NULL,
  `item_unit_price` float NOT NULL,
  `item_quantity` int(5) NOT NULL,
  `item_amount` float NOT NULL,
  `item_warranty_period` int(10) NOT NULL,
  `item_warranty_from` date NOT NULL,
  `item_warranty_to` date NOT NULL,
  `item_remarks` text NOT NULL,
  `item_entered_on` int(6) NOT NULL DEFAULT current_timestamp(),
  `item_entered_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_item_master`
--
ALTER TABLE `inv_item_master`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_item_master`
--
ALTER TABLE `inv_item_master`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

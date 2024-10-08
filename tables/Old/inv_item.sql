-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:00 AM
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
-- Table structure for table `inv_item`
--

CREATE TABLE `inv_item` (
  `inv_itm_sl_no` int(5) NOT NULL,
  `inv_itm_category_id` int(5) NOT NULL,
  `inv_itm_priority` int(5) NOT NULL,
  `inv_itm_status` varchar(10) NOT NULL,
  `inv_itm_name` varchar(10) NOT NULL,
  `inv_itm_description` text NOT NULL,
  `inv_itm_specification` varchar(100) NOT NULL,
  `inv_itm_reffered_by` varchar(20) NOT NULL,
  `inv_itm_entered_by` varchar(10) NOT NULL,
  `inv_itm_entered_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_item`
--
ALTER TABLE `inv_item`
  ADD PRIMARY KEY (`inv_itm_sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_item`
--
ALTER TABLE `inv_item`
  MODIFY `inv_itm_sl_no` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

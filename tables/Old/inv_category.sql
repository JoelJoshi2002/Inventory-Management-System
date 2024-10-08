-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 06:59 AM
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
-- Table structure for table `inv_category`
--

CREATE TABLE `inv_category` (
  `cat_sl_no` int(5) NOT NULL,
  `cat_status` varchar(10) NOT NULL,
  `cat_priority` int(5) NOT NULL,
  `cat_first_category` varchar(20) NOT NULL,
  `cat_first_desc` text NOT NULL,
  `cat_second_category` varchar(20) NOT NULL,
  `cat_second_desc` text NOT NULL,
  `cat_third_category` varchar(20) NOT NULL,
  `cat_third_desc` text NOT NULL,
  `cat_remarks` text NOT NULL,
  `cat_entered_by` text NOT NULL,
  `cat_entered_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_category`
--
ALTER TABLE `inv_category`
  ADD PRIMARY KEY (`cat_sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_category`
--
ALTER TABLE `inv_category`
  MODIFY `cat_sl_no` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

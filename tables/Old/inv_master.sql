-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:03 AM
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
-- Table structure for table `inv_master`
--

CREATE TABLE `inv_master` (
  `inv_sl` int(10) NOT NULL,
  `inv_date` varchar(10) NOT NULL,
  `inv_delivered_date` varchar(11) NOT NULL,
  `inv_inv_no` varchar(10) NOT NULL,
  `inv_sup_id` int(10) NOT NULL,
  `inv_no_items` int(5) NOT NULL,
  `inv_amount` int(10) NOT NULL,
  `inv_sgst` int(10) NOT NULL,
  `inv_cgst` int(10) NOT NULL,
  `inv_igst` int(10) NOT NULL,
  `inv_tot_after_discount` int(10) NOT NULL,
  `inv_entered_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `inv_entered_by` varchar(10) NOT NULL,
  `inv_remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inv_master`
--

INSERT INTO `inv_master` (`inv_sl`, `inv_date`, `inv_delivered_date`, `inv_inv_no`, `inv_sup_id`, `inv_no_items`, `inv_amount`, `inv_sgst`, `inv_cgst`, `inv_igst`, `inv_tot_after_discount`, `inv_entered_on`, `inv_entered_by`, `inv_remarks`) VALUES
(1, 'a', 'a', 'a', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 14:51:58.284651', 'a', ''),
(2, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:05:23.804425', '', ''),
(3, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:06:25.259955', '', ''),
(4, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:07:00.704329', '', ''),
(5, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:08:37.570640', '', ''),
(6, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:09:25.504586', '', ''),
(7, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:10:57.685006', '', ''),
(8, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:18:29.769997', '', ''),
(9, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:20:49.371572', '', ''),
(10, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:23:46.426998', '', ''),
(11, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:24:04.716936', '', ''),
(12, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:24:41.304182', '', ''),
(13, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:25:02.632985', '', ''),
(14, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:27:43.579942', '', ''),
(15, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:28:23.025961', '', ''),
(16, '', '', '11', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:28:38.792066', '', ''),
(17, '', '', '11', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:30:18.813646', '', ''),
(18, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:32:12.275238', '', ''),
(19, '', '', '', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:32:44.725051', '', ''),
(20, '', '', '11', 0, 0, 0, 0, 0, 0, 0, '2023-03-03 15:33:05.294103', '', ''),
(21, '10-20-200', '10-20-2222', '55', 0, 10, 10000, 100, 100, 110, 9500, '2023-03-05 13:38:38.268363', 'josh', ''),
(22, '10-20-200', '10-20-2222', '55', 0, 10, 10000, 100, 100, 110, 9500, '2023-03-05 13:39:12.529306', 'josh', ''),
(23, '10-20-200', '10-20-2222', '55', 0, 10, 10000, 100, 100, 110, 9500, '2023-03-05 13:39:31.518741', 'josh', ''),
(24, '10-20-200', '10-20-2222', '55', 1, 10, 10000, 100, 100, 110, 9500, '2023-03-05 13:40:34.236543', 'josh', ''),
(25, '12-12-2023', '23-10-2023', '25', 2, 12, 120000, 1000, 1000, 0, 110000, '2023-03-05 13:41:23.916975', 'josh', ''),
(26, '5555', '5555', '555', 8, 12, 111, 11, 11, 11, 111, '2023-03-05 13:42:03.865955', 'josh', ''),
(27, '', '', '1', 9, 0, 0, 0, 0, 0, 0, '2023-05-23 12:18:51.831326', 'josh', ''),
(28, '', '', '1', 9, 0, 0, 0, 0, 0, 0, '2023-05-23 12:20:03.969962', 'josh', ''),
(29, '21-10-2023', '12-2-2023', '1', 1, 5, 500, 10, 10, 10, 499, '2023-05-23 12:20:37.837250', 'josh', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_master`
--
ALTER TABLE `inv_master`
  ADD PRIMARY KEY (`inv_sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_master`
--
ALTER TABLE `inv_master`
  MODIFY `inv_sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

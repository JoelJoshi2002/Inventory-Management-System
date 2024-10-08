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
-- Table structure for table `inv_supplier`
--

CREATE TABLE `inv_supplier` (
  `sup_sl` int(9) NOT NULL,
  `sup_name` varchar(20) NOT NULL,
  `sup_address` text NOT NULL,
  `sup_district` varchar(20) NOT NULL,
  `sup_category` varchar(20) NOT NULL,
  `sup_contact_person` varchar(20) NOT NULL,
  `sup_mobile_one` int(12) NOT NULL,
  `sup_mobile_two` int(12) NOT NULL,
  `sup_tel_no` int(12) NOT NULL,
  `sup_email` varchar(30) NOT NULL,
  `sup_accno` int(20) NOT NULL,
  `sup_acc_holder` varchar(20) NOT NULL,
  `sup_bank` varchar(25) NOT NULL,
  `sup_branch` varchar(25) NOT NULL,
  `sup_ifsc` varchar(10) NOT NULL,
  `sup_micr` varchar(10) NOT NULL,
  `sup_entered_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `sup_entered_by` varchar(20) NOT NULL,
  `sup_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `sup_remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inv_supplier`
--

INSERT INTO `inv_supplier` (`sup_sl`, `sup_name`, `sup_address`, `sup_district`, `sup_category`, `sup_contact_person`, `sup_mobile_one`, `sup_mobile_two`, `sup_tel_no`, `sup_email`, `sup_accno`, `sup_acc_holder`, `sup_bank`, `sup_branch`, `sup_ifsc`, `sup_micr`, `sup_entered_on`, `sup_entered_by`, `sup_status`, `sup_remarks`) VALUES
(1, 'alan b jhn', '', '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '2023-03-02 17:38:29.126436', 'josh', '', ''),
(2, 'safas', 'fasdfas', 'fdasdfa', 'asdfas', 'sadfasd', 45645, 456456, 456456, 'asdf@gmail.com', 456465, 'sdfs', 'sdf', 'd', 'asdfasf', 'asdf', '2023-03-02 17:39:03.983029', 'josh', 'dfsa', ''),
(3, 'Alan B John', 'Cottage', 'Alappuzha', 'Editor', 'Biju John', 325639875, 2147483647, 14895210, 'alan@gmail.com', 2147483647, 'Alan', 'Federal', 'nrd', '452132687', '145236', '2023-03-02 17:47:00.167282', 'josh', 'HAi', ''),
(4, 'sfsg,ggh', '', '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '2023-03-03 04:29:20.851502', 'josh', '', ''),
(5, 'dhfh&#039;', '', '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '2023-03-03 04:29:34.230318', 'josh', '', ''),
(6, 'dhfh&#039;', '', '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '2023-03-03 04:33:25.843042', 'josh', '', ''),
(7, 'test1', 'test1', 'test1', 'test1', 'test1', 123, 123, 123, 'test1', 1234, '1234', '1234', '13564', '242543564', '35645675', '2023-03-03 04:44:17.758182', 'josh', 'ACTIVE', ''),
(8, 'wbdj,bq', 'jvjmvjmvhj', 'hvmvm', '', 'jv,jvjv', 0, 0, 0, 'hvmjvj,v', 0, 'mnvmhvmn', 'vhmvhm', 'vmnvmnvhm', 'vhmvhmvmn', 'vvvnvnv', '2023-03-03 04:45:18.506154', 'josh', 'ACTIVE', 'bvbnvbnv'),
(9, '', '', '', '', '', 0, 0, 0, 'wdbwbdjw', 0, '', '', '', '', '', '2023-03-03 04:45:59.288728', 'josh', 'ACTIVE', ''),
(10, '', '', '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '2023-03-05 13:37:27.927297', 'josh', 'ACTIVE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  ADD PRIMARY KEY (`sup_sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  MODIFY `sup_sl` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

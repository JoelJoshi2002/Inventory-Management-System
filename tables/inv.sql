-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 02:55 PM
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
  `cat_entered_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inv_invoice_details`
--

CREATE TABLE `inv_invoice_details` (
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
  `purchased_to` varchar(20) NOT NULL,
  `primary_custodian` varchar(15) NOT NULL,
  `in_charge` varchar(15) NOT NULL,
  `remarks` text NOT NULL,
  `entered_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `entered_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `inv_invoice_master`
--

CREATE TABLE `inv_invoice_master` (
  `inv_sl` int(10) NOT NULL,
  `inv_date` date NOT NULL,
  `inv_delivered_date` date NOT NULL,
  `inv_inv_no` varchar(10) NOT NULL,
  `inv_sup_id` int(10) NOT NULL,
  `inv_no_items` int(5) NOT NULL,
  `inv_amount` int(10) NOT NULL,
  `inv_sgst` int(10) NOT NULL,
  `inv_cgst` int(10) NOT NULL,
  `inv_igst` int(10) NOT NULL,
  `inv_tot_after_discount` int(10) NOT NULL,
  `inv_entered_on` timestamp NOT NULL DEFAULT current_timestamp,
  `inv_entered_by` varchar(10) NOT NULL,
  `inv_remarks` text NOT NULL,
  `inv_po_date` date NOT NULL,
  `inv_po_no` int(6) NOT NULL,
  `inv_dept_no` varchar(6) NOT NULL,
  `inv_staff_id` varchar(6) NOT NULL,
  `inv_amount_paid_on` date NOT NULL,
  `inv_payment_remarks` varchar(100) NOT NULL,
  `inv_tot_amount` int(10) NOT NULL,
  `inv_payment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `inv_itm_entered_on` timestamp NOT NULL DEFAULT current_timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


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
  `item_entered_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_entered_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `sup_entered_on` timestamp NOT NULL DEFAULT current_timestamp,
  `sup_entered_by` varchar(20) NOT NULL,
  `sup_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `sup_remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for table `inv_category`
--
ALTER TABLE `inv_category`
  ADD PRIMARY KEY (`cat_sl_no`);

--
-- Indexes for table `inv_invoice_details`
--
ALTER TABLE `inv_invoice_details`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `inv_invoice_master`
--
ALTER TABLE `inv_invoice_master`
  ADD PRIMARY KEY (`inv_sl`);

--
-- Indexes for table `inv_item`
--
ALTER TABLE `inv_item`
  ADD PRIMARY KEY (`inv_itm_sl_no`);

--
-- Indexes for table `inv_item_master`
--
ALTER TABLE `inv_item_master`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  ADD PRIMARY KEY (`sup_sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_category`
--
ALTER TABLE `inv_category`
  MODIFY `cat_sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inv_invoice_details`
--
ALTER TABLE `inv_invoice_details`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inv_invoice_master`
--
ALTER TABLE `inv_invoice_master`
  MODIFY `inv_sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `inv_item`
--
ALTER TABLE `inv_item`
  MODIFY `inv_itm_sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inv_item_master`
--
ALTER TABLE `inv_item_master`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  MODIFY `sup_sl` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

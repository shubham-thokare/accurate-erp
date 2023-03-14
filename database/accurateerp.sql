-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 05:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accurateerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_trans`
--

CREATE TABLE `bank_trans` (
  `Bank_Trans_ID` int(10) NOT NULL,
  `Transaction_Type` text NOT NULL,
  `Voucher_No` text NOT NULL,
  `Voucher_Date` text NOT NULL,
  `Dr_Cr` text DEFAULT NULL,
  `Particulars` text DEFAULT NULL,
  `Payment_Type` text NOT NULL,
  `Reference` text DEFAULT NULL,
  `Amount` int(10) NOT NULL,
  `Cheque_No` int(10) DEFAULT NULL,
  `Cheque_Date` date DEFAULT NULL,
  `Favouring_Name` text NOT NULL,
  `Remark` text DEFAULT NULL,
  `Month` date DEFAULT NULL,
  `Financial_Year` year(4) NOT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bank_trans`
--

INSERT INTO `bank_trans` (`Bank_Trans_ID`, `Transaction_Type`, `Voucher_No`, `Voucher_Date`, `Dr_Cr`, `Particulars`, `Payment_Type`, `Reference`, `Amount`, `Cheque_No`, `Cheque_Date`, `Favouring_Name`, `Remark`, `Month`, `Financial_Year`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 'Payment', '2022-23/001', '12/06/2019', 'Dr', 'Mars Fiber Product LLP', 'On Account', 'payment', 6600, 854436, '0000-00-00', 'Mars Fiber Product LLP', 'asdftgy sedfgygfds sdfghjhgf 121548', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(2, 'Payment', '2022-23/001', '12/06/2019', 'Cr', 'TDS', 'On Account', 'payment', 600, 854436, '0000-00-00', 'TDS', NULL, '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(3, 'Payment', '2022-23/001', '12/06/2019', 'Cr', 'ICICI Bank Ltd', 'Reference', 'April19', 6000, 15148, '0000-00-00', 'ICICI Bank Ltd', 'rwfdsa23ERFF', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(4, 'Payment', '2022-23/002', '13/07/2019', 'Dr', 'Office Expenses', 'Reference', 'April19', 5000, NULL, NULL, 'Office Expenses', 'rawerggho098765e', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(5, 'Payment', '2022-23/002', '12/07/2019', 'Cr', 'State Bank of India', 'Advance', 'dfd', 5000, 54, '0000-00-00', 'State Bank of India', NULL, '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(1, 'Payment', '2022-23/001', '12/06/2019', 'Dr', 'Mars Fiber Product LLP', 'On Account', 'payment', 6600, 854436, '0000-00-00', 'Mars Fiber Product LLP', 'asdftgy sedfgygfds sdfghjhgf 121548', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(2, 'Payment', '2022-23/001', '12/06/2019', 'Cr', 'TDS', 'On Account', 'payment', 600, 854436, '0000-00-00', 'TDS', NULL, '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(3, 'Payment', '2022-23/001', '12/06/2019', 'Cr', 'ICICI Bank Ltd', 'Reference', 'April19', 6000, 15148, '0000-00-00', 'ICICI Bank Ltd', 'rwfdsa23ERFF', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(4, 'Payment', '2022-23/002', '13/07/2019', 'Dr', 'Office Expenses', 'Reference', 'April19', 5000, NULL, NULL, 'Office Expenses', 'rawerggho098765e', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(5, 'Payment', '2022-23/002', '12/07/2019', 'Cr', 'State Bank of India', 'Advance', 'dfd', 5000, 54, '0000-00-00', 'State Bank of India', NULL, '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(1, 'Payment', '2022-23/001', '12/06/2019', 'Dr', 'Mars Fiber Product LLP', 'On Account', 'payment', 6600, 854436, '0000-00-00', 'Mars Fiber Product LLP', 'asdftgy sedfgygfds sdfghjhgf 121548', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(2, 'Payment', '2022-23/001', '12/06/2019', 'Cr', 'TDS', 'On Account', 'payment', 600, 854436, '0000-00-00', 'TDS', NULL, '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(3, 'Payment', '2022-23/001', '12/06/2019', 'Cr', 'ICICI Bank Ltd', 'Reference', 'April19', 6000, 15148, '0000-00-00', 'ICICI Bank Ltd', 'rwfdsa23ERFF', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(4, 'Payment', '2022-23/002', '13/07/2019', 'Dr', 'Office Expenses', 'Reference', 'April19', 5000, NULL, NULL, 'Office Expenses', 'rawerggho098765e', '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(5, 'Payment', '2022-23/002', '12/07/2019', 'Cr', 'State Bank of India', 'Advance', 'dfd', 5000, 54, '0000-00-00', 'State Bank of India', NULL, '0000-00-00', 2022, 'Ram Javle', '0000-00-00', 12345, 123);

-- --------------------------------------------------------

--
-- Table structure for table `credit_note`
--

CREATE TABLE `credit_note` (
  `Credit_Note_Id` int(20) NOT NULL,
  `Credit_Note_No` text NOT NULL,
  `Credit_Note_Date` date NOT NULL,
  `Customer_Name` text NOT NULL,
  `Billing_Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` text DEFAULT NULL,
  `Incoice_No` text NOT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Remark` text DEFAULT NULL,
  `Transport_Charges` int(20) NOT NULL,
  `Additional_Charges` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Other_Discount` int(20) NOT NULL,
  `Taxable_Value` int(20) NOT NULL,
  `Total_Value` int(20) NOT NULL,
  `Product_ID` int(20) NOT NULL,
  `Sequence_Type` text DEFAULT NULL,
  `prefix1` text DEFAULT NULL,
  `prefix2` text DEFAULT NULL,
  `Sequence_No` int(20) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credit_note_products`
--

CREATE TABLE `credit_note_products` (
  `CN_Product_Id` int(20) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Unit` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `Invoice_No` text DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` text NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Id` int(15) NOT NULL,
  `Customer_Name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GST_No` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Address1` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Address2` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `City` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pincode` int(10) NOT NULL,
  `State` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Country` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Person` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Contact_No` int(10) DEFAULT NULL,
  `ShippingCustomer_Name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ShippingGST_No` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingAddress1` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingAddress2` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingCity` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ShippingPincode` int(15) NOT NULL,
  `ShippingState` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ShippingCountry` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ShippingContact_Person` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingContact_No` int(20) DEFAULT NULL,
  `Vendor_Code` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Accounting_Group` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PO_No` text NOT NULL,
  `PO_Date` datetime NOT NULL,
  `Terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Opening_Balance` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `As_On_Date` datetime DEFAULT NULL,
  `Dr_Cr` text NOT NULL,
  `CreatedBy` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Created_Date` datetime DEFAULT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Customer_Name`, `GST_No`, `Address1`, `Address2`, `City`, `Pincode`, `State`, `Country`, `Contact_Person`, `Email`, `Contact_No`, `ShippingCustomer_Name`, `ShippingGST_No`, `ShippingAddress1`, `ShippingAddress2`, `ShippingCity`, `ShippingPincode`, `ShippingState`, `ShippingCountry`, `ShippingContact_Person`, `ShippingContact_No`, `Vendor_Code`, `Accounting_Group`, `PO_No`, `PO_Date`, `Terms`, `Opening_Balance`, `As_On_Date`, `Dr_Cr`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(3, 'akash', '2132434', 'narhe pune', 'balajinagar', 'pune', 411041, 'maharashtra', 'india', 'akash sonawane', 'abc@gmail.com', 987987987, 'govind', '35fdgggg', 'regregerg34543', 'regreg', 'ergreg', 989879848, 'er\r\nerwer', 'rweferf', 'rreg', 545435, '454543', '45345trytytytr', 'tryrty', '2022-11-10 07:13:21', 'tyrtyrty', 'tyty', '2022-11-10 07:13:21', 'trytry', '345435tyrty', '2022-11-10 07:13:21', 453, 45),
(4, 'akash', '2132434', 'narhe pune', 'balajinagar', 'pune', 411041, 'maharashtra', 'india', 'akash sonawane', 'abc@gmail.com', 546844884, 'govind', '35fdgggg', 'regregerg34543', 'regreg', 'ergreg', 989879848, 'er\r\nerwer', 'rweferf', 'rreg', 545435, '454543', '45345trytytytr', 'tryrty', '2022-11-10 07:13:21', 'tyrtyrty', 'tyty', '2022-11-10 07:13:21', 'trytry', '345435tyrty', '2022-11-10 07:13:21', 453, 45),
(5, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 0, '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(6, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 411041, '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(7, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 411041, '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(8, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 411041, '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(11, 'akash sonawane', '675667852342', 'narhe', 'pune', 'pune', 411045, 'Maharashtra ', 'India', 'aarti', 'sonawanea307@gmail.com', 2147483647, 'akash sonawane1', '465687/6', 'narhe', 'pune', 'pune', 411045, 'Maharashtra ', 'india', NULL, NULL, '6547684135', '', '', '0000-00-00 00:00:00', '', '20000', NULL, 'Dr', NULL, NULL, 0, 0),
(12, 'Ram Javle', '27AOYPJ6627G2ZB', 'Akurdi', 'Pimpri chinchwad', 'Pune', 411035, 'Maharashtra ', 'India', '', 'gfhjiuygfv5415841', 0, '', '', '', '', '', 0, '', '', NULL, NULL, 'kjuhgfcdv', '', '', '0000-00-00 00:00:00', '', 'kjhgfcxcvb', NULL, 'Dr', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `CustomerId` int(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `sundry` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  `ship_custname` varchar(255) NOT NULL,
  `ship_gst` varchar(255) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `ship_address2` varchar(255) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `ship_pin` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL,
  `ship_country` varchar(255) NOT NULL,
  `contact_person1` varchar(255) NOT NULL,
  `mobile1` bigint(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `opening` bigint(255) NOT NULL,
  `dr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`CustomerId`, `cust_name`, `sundry`, `gst`, `address`, `address2`, `city`, `pin`, `state`, `country`, `contact_person`, `mobile`, `email`, `vendor`, `ship_custname`, `ship_gst`, `ship_address`, `ship_address2`, `ship_city`, `ship_pin`, `ship_state`, `ship_country`, `contact_person1`, `mobile1`, `terms`, `opening`, `dr`) VALUES
(1, 'mahesh', 'sundry', '345678', 'baramati', '215523232', 'pune', '23456', '27', '', NULL, NULL, NULL, NULL, 'shubham', '5421213', 'bihar', 'bihar', 'bihar', '42515', '4', '', '23456', 5423, 'bichkulemahesh@gmail.com', 323432344, 'Cr'),
(45, '', 'sundry', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(46, '', 'sundry', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(47, 'Mahesh1254', 'sundry', '154845458', 'Pune', 'Maharshtra', 'Pune', '40110', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(48, 'Ram Javle65875', 'sundry', '5584', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(49, 'ram javle', 'sundry', '254558987', 'akurdi', '9948498494999999iuygtfd', '54', '', '27', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(50, '', 'sundry', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(51, '', 'sundry', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(52, '', 'sundry', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', 0, 'Dr'),
(53, 'srgwsgv', '', 'sdvgefwdsvas', 'sefacd', 'sfefdv', 'ecd', 'sdvc', '6', '', NULL, NULL, NULL, NULL, 'efwrfeads', 'eqefvfecas', 'efvsdwsvd', 'efdwsvsdcx', 'efqvsfdwac', 'efefvf', '9', '', 'efvsdwacsv', 0, 'hn5frsrnyhtegv', 0, 'Dr');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo1`
--

CREATE TABLE `customerinfo1` (
  `id` int(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `sundry` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerinfo1`
--

INSERT INTO `customerinfo1` (`id`, `cust_name`, `sundry`, `gst`) VALUES
(1, 'mahesh', '', '345678'),
(2, 'mahesh', '', '345678'),
(3, 'mahesh', 'sundry', '345678');

-- --------------------------------------------------------

--
-- Table structure for table `debit_note`
--

CREATE TABLE `debit_note` (
  `Debit_Note_Id` int(20) NOT NULL,
  `Debit_Note_No` text NOT NULL,
  `Debit_Note_Date` date NOT NULL,
  `Customer_Name` text NOT NULL,
  `Billing_Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` text DEFAULT NULL,
  `Incoice_No` text NOT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Remark` text DEFAULT NULL,
  `Transport_Charges` int(20) NOT NULL,
  `Additional_Charges` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Other_Discount` int(20) NOT NULL,
  `Taxable_Value` int(20) NOT NULL,
  `Total_Value` int(20) NOT NULL,
  `Product_ID` int(20) NOT NULL,
  `Sequence_Type` text DEFAULT NULL,
  `prefix1` text DEFAULT NULL,
  `prefix2` text DEFAULT NULL,
  `Sequence_No` int(20) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debit_note_products`
--

CREATE TABLE `debit_note_products` (
  `DN_Product_Id` int(20) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Unit` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `Invoice_No` text DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` text NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_challan`
--

CREATE TABLE `delivery_challan` (
  `Challan_Id` int(20) NOT NULL,
  `Challan_No` text NOT NULL,
  `Challan_Date` date NOT NULL,
  `Customer_Name` text NOT NULL,
  `Billing_Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` text DEFAULT NULL,
  `PO_No` int(11) DEFAULT NULL,
  `PO_Date` date DEFAULT NULL,
  `Transport_Mode` text DEFAULT NULL,
  `Vehicle_No.` int(20) DEFAULT NULL,
  `Payment_Terms` text DEFAULT NULL,
  `Due_Date` date DEFAULT NULL,
  `Remark` text DEFAULT NULL,
  `Additional_Terms` text NOT NULL,
  `Transport_Charges` int(20) NOT NULL,
  `Additional_Charges` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Other_Discount` int(20) NOT NULL,
  `Taxable_Value` int(20) NOT NULL,
  `Total_Value` int(20) NOT NULL,
  `DC_Product_ID` int(20) NOT NULL,
  `Sequence_Type` text DEFAULT NULL,
  `prefix1` text DEFAULT NULL,
  `prefix2` text DEFAULT NULL,
  `Sequence_No` int(20) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_challan_products`
--

CREATE TABLE `delivery_challan_products` (
  `Challan_Product_Id` int(20) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Unit` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `Invoice_No` text DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` text NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` year(4) NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documnet_seq`
--

CREATE TABLE `documnet_seq` (
  `doc_id` int(10) NOT NULL,
  `module` text DEFAULT NULL,
  `mode` text DEFAULT NULL,
  `prefix1` text DEFAULT NULL,
  `prefix2` text DEFAULT NULL,
  `series` text DEFAULT NULL,
  `reg_id` int(10) NOT NULL,
  `fin_year` year(4) NOT NULL,
  `IsActive` int(10) NOT NULL,
  `UpdatedOn` date DEFAULT NULL,
  `Month` text NOT NULL,
  `Financial_Year` year(4) NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `documnet_seq`
--

INSERT INTO `documnet_seq` (`doc_id`, `module`, `mode`, `prefix1`, `prefix2`, `series`, `reg_id`, `fin_year`, `IsActive`, `UpdatedOn`, `Month`, `Financial_Year`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 'Invoice', 'Auto', 'S', '2019-20', '025', 9, 2019, 1, '0000-00-00', 'Oct', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(2, 'Quotation', 'Auto', 'Q', '2019-20', '001', 9, 2019, 1, '0000-00-00', 'Oct', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(3, 'Purchase Order', 'Auto', 'PO', '2019-20', '001', 9, 2019, 1, '0000-00-00', 'Oct', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(4, 'Debit Note', 'Auto', 'DN', '2019-20', '001', 9, 2019, 1, '0000-00-00', 'Oct', 2022, 'Ram Javle', '0000-00-00', 12345, 123),
(5, 'Credit Note', 'Auto', 'CN', '2019-20', '001', 9, 2019, 1, '0000-00-00', 'Oct', 2022, 'Ram Javle', '0000-00-00', 12345, 123);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Purchase_Id` int(10) NOT NULL,
  `Purchase_No` int(10) NOT NULL,
  `Purchase_Date` date NOT NULL,
  `Supplier_Name` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` text DEFAULT NULL,
  `PO_No` text NOT NULL,
  `PO_Date` text NOT NULL,
  `Payment_Terms` text NOT NULL,
  `Due_Date` text NOT NULL,
  `Remark` text DEFAULT NULL,
  `Transport_Charges` int(10) NOT NULL,
  `Additional_Charges` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Other_Discount` int(10) NOT NULL,
  `Taxable_Value` int(10) NOT NULL,
  `Invoice_Value` int(10) NOT NULL,
  `Purchase_Product_ID` int(3) NOT NULL,
  `Month` text NOT NULL,
  `Financial_Year` year(4) NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` text NOT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Purchase_Id`, `Purchase_No`, `Purchase_Date`, `Supplier_Name`, `Address`, `City`, `State`, `GST_No`, `PO_No`, `PO_Date`, `Payment_Terms`, `Due_Date`, `Remark`, `Transport_Charges`, `Additional_Charges`, `Discount`, `Other_Discount`, `Taxable_Value`, `Invoice_Value`, `Purchase_Product_ID`, `Month`, `Financial_Year`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', '30-Days', '18-10-2022', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 123456, 123456, 123456, 123456, 1234567, 12345678, 1, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(2, 0, '0000-00-00', 'Samarth Industries And Private Limited', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 2, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(3, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 3, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(4, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 110, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(5, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 111, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(1, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', '30-Days', '18-10-2022', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 123456, 123456, 123456, 123456, 1234567, 12345678, 1, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(2, 0, '0000-00-00', 'Samarth Industries And Private Limited', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 2, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(3, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 3, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(4, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 110, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123),
(5, 0, '0000-00-00', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'PO1234567', '18-10-2022', 'select', '18-10-2022', NULL, 123456, 123456, 123456, 123456, 1234567, 12345678, 111, 'Oct', 2022, 'Ram Javle', '17-10-2022', 12345, 123);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

CREATE TABLE `invoice_products` (
  `Invoice_Product_Id` int(10) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` text DEFAULT NULL,
  `Quantity` int(10) NOT NULL,
  `Unit` int(10) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Tax` int(10) NOT NULL,
  `Invoice_No` int(10) NOT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` int(10) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` year(4) DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journalentry`
--

CREATE TABLE `journalentry` (
  `Voucher_Id` int(10) NOT NULL,
  `Voucher_No` text NOT NULL,
  `Voucher_Date` text NOT NULL,
  `Dr_Cr` varchar(2) DEFAULT NULL,
  `Particulars` varchar(15) DEFAULT NULL,
  `Reference` varchar(10) DEFAULT NULL,
  `Amount` int(10) NOT NULL,
  `Remark` varchar(44) DEFAULT NULL,
  `Month` text NOT NULL,
  `Financial_Year` text NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` text NOT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `journalentry`
--

INSERT INTO `journalentry` (`Voucher_Id`, `Voucher_No`, `Voucher_Date`, `Dr_Cr`, `Particulars`, `Reference`, `Amount`, `Remark`, `Month`, `Financial_Year`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, '2022/001', '17-10-2022', 'Dr', 'Tea Bill', 'Bill.12354', 20000, 'sdgahafha sdfghuytred sdfghytrdfgt 125741225', 'Oct', '2022-23', 'Ram Javle', '17-10-2022', 12345, 123),
(2, '2022/001', '17-10-2022', 'Cr', 'Swad Tea Center', 'Swad', 20000, 'sdgahafha', 'Oct', '2022-23', 'Ram Javle', '17-10-2022', 12345, 123),
(3, '2022/001', '17-10-2022', 'Cr', 'TDS', 'TDS', 20000, 'dszhfhfh', 'Oct', '2022-23', 'Ram Javle', '17-10-2022', 12345, 123),
(4, '2022/002', '17-10-2022', 'Dr', 'State Bank', '125458', 20000, 'jgjhj', 'Oct', '2022-23', 'Ram Javle', '17-10-2022', 12345, 123),
(5, '2022/002', '17-10-2022', 'Cr', 'ICICI Bank', 'fhfghjg', 20000, 'sgdhfh', 'Oct', '2022-23', 'Ram Javle', '17-10-2022', 12345, 123);

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `Ledger_ID` int(1) DEFAULT NULL,
  `Ledger_Name` varchar(15) DEFAULT NULL,
  `Accounting_Group` varchar(13) DEFAULT NULL,
  `Sub_Group` varchar(3) DEFAULT NULL,
  `Account_Holder` varchar(19) DEFAULT NULL,
  `Account_No` bigint(11) DEFAULT NULL,
  `IFSC` varchar(11) DEFAULT NULL,
  `Bank_Name` varchar(19) DEFAULT NULL,
  `Branch` varchar(15) DEFAULT NULL,
  `Bank_Status` varchar(7) DEFAULT NULL,
  `Opening_Balance` decimal(10,2) DEFAULT NULL,
  `Dr_CR` varchar(2) DEFAULT NULL,
  `As_On_Date` varchar(10) DEFAULT NULL,
  `CreatedBy` varchar(9) DEFAULT NULL,
  `Created_Date` varchar(10) DEFAULT NULL,
  `Register_Id` int(5) DEFAULT NULL,
  `User_Id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`Ledger_ID`, `Ledger_Name`, `Accounting_Group`, `Sub_Group`, `Account_Holder`, `Account_No`, `IFSC`, `Bank_Name`, `Branch`, `Bank_Status`, `Opening_Balance`, `Dr_CR`, `As_On_Date`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 'State Bank', 'Bank Accounts', 'Yes', 'Shivansh Innovative', 98605010979, 'ICIC0000986', 'ICICI Bank Limited', 'Hinjewadi, Pune', 'default', '12345678.00', 'Dr', '17-10-2022', 'Ram Javle', '17-10-2022', 12345, 123),
(2, 'ICICI Bank', 'Bank Accounts', 'yes', 'Shivansh Innovative', 98605010979, 'ICIC0000986', 'ICICI Bank Limited', 'Hinjewadi, Pune', 'default', '12345678.00', 'Dr', '17-10-2022', 'Ram Javle', '17-10-2022', 12345, 123),
(3, 'Cash', 'Cash in Hand', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '12345678.00', 'Dr', '17-10-2022', 'Ram Javle', '17-10-2022', 12345, 123),
(4, 'State Bank', 'Bank Accounts', 'Yes', 'Shivansh Innovative', 98605010979, 'ICIC0000986', 'State bank of India', 'Hinjewadi, Pune', 'default', '12345678.00', 'Dr', '17-10-2022', 'Ram Javle', '17-10-2022', 12345, 123),
(5, 'Office Expenses', 'Bank Accounts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '12345678.00', 'Dr', '17-10-2022', 'Ram Javle', '17-10-2022', 12345, 123);

-- --------------------------------------------------------

--
-- Table structure for table `ledger1`
--

CREATE TABLE `ledger1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ledger1`
--

INSERT INTO `ledger1` (`id`, `name`, `product`, `gst`, `opening`, `dr`) VALUES
(1, 'mahesh', 'Deposits (Assets)', 'GST@5%', '323432344.44', 'Cr'),
(2, '', 'Select Group', 'Nill', '', 'Dr');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` int(10) NOT NULL,
  `ProductName` text NOT NULL,
  `Product_Description` text DEFAULT NULL,
  `Prodcut_Type` text DEFAULT NULL,
  `Part_Code` int(10) NOT NULL,
  `HSN_Code` int(10) DEFAULT NULL,
  `Unit` int(10) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Category` text DEFAULT NULL,
  `Applicable_Tax` int(10) NOT NULL,
  `Opening_Stock` int(10) NOT NULL,
  `As_On_Date` text DEFAULT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` text NOT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `ProductName`, `Product_Description`, `Prodcut_Type`, `Part_Code`, `HSN_Code`, `Unit`, `Rate`, `Category`, `Applicable_Tax`, `Opening_Stock`, `As_On_Date`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 'modular Kitchen', NULL, 'Inventory', 9846841, 982321, 3, 45, NULL, 0, 0, NULL, '', '', 0, 0),
(2, 'Furniture - Chairs & Fan', NULL, 'Inventory', 94045, 9403, 12563, 12, NULL, 0, 121215, NULL, '', '', 0, 0),
(3, 'Labour Charges', NULL, 'Service', 9865111, 9865111, 0, 5, NULL, 0, 2, NULL, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `id` int(11) NOT NULL,
  `product_desc` varchar(11) NOT NULL,
  `part_code` varchar(11) NOT NULL,
  `hsn_code` varchar(11) NOT NULL,
  `unit` varchar(11) NOT NULL,
  `rate` varchar(11) NOT NULL,
  `catagory` varchar(11) NOT NULL,
  `applicable_tax` varchar(11) NOT NULL,
  `opening_stock` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`id`, `product_desc`, `part_code`, `hsn_code`, `unit`, `rate`, `catagory`, `applicable_tax`, `opening_stock`) VALUES
(15, 'Mob', '15', '145', 'BTL', '9', 'Capital Goo', 'GST@28%', '30'),
(16, '', '', '', 'JOB', '85', 'Transpost S', 'GST@5%', ''),
(17, '', '', '', 'Select Unit', '', 'Select Unit', 'Select Unit', '');

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoice`
--

CREATE TABLE `proforma_invoice` (
  `PI_Id` int(20) NOT NULL,
  `PI_No` int(20) NOT NULL,
  `PI_Date` date NOT NULL,
  `Customer_Name` text NOT NULL,
  `Billing_Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` text NOT NULL,
  `ShippingCustomer_Name` text NOT NULL,
  `Shipping_Address` text NOT NULL,
  `Shipping_City` text NOT NULL,
  `Shipping_State` text NOT NULL,
  `ShippingGST_No` text DEFAULT NULL,
  `PO_No` text DEFAULT NULL,
  `PO_Date` date DEFAULT NULL,
  `Challan_No` text NOT NULL,
  `Challan_Date` date DEFAULT NULL,
  `Transport_Mode` text DEFAULT NULL,
  `Vehicle_No.` text DEFAULT NULL,
  `Payment_Terms` text NOT NULL,
  `Due_Date` date DEFAULT NULL,
  `Remark` text NOT NULL,
  `Additional_Terms` text NOT NULL,
  `Service_Invoice` text NOT NULL,
  `Transport_Charges` int(20) NOT NULL,
  `Additional_Charges` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Other_Discount` int(20) NOT NULL,
  `Taxable_Value` int(20) NOT NULL,
  `Invoice_Value` int(20) NOT NULL,
  `Invoice_Product_ID` int(20) NOT NULL,
  `Sequence_Type` text NOT NULL,
  `prefix1` text DEFAULT NULL,
  `prefix2` text DEFAULT NULL,
  `Sequence_No` int(20) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoice_products`
--

CREATE TABLE `proforma_invoice_products` (
  `PI_Product_Id` int(20) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Unit` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Discount` int(20) DEFAULT NULL,
  `Amount` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `Invoice_No` text DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` text NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Purchase_Id` int(10) NOT NULL,
  `Purchase_No` int(10) NOT NULL,
  `Purchase_Date` date NOT NULL,
  `Supplier_Name` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` int(20) DEFAULT NULL,
  `PO_No` int(20) DEFAULT NULL,
  `PO_Date` date DEFAULT NULL,
  `Payment_Terms` text NOT NULL,
  `Due_Date` date DEFAULT NULL,
  `Remark` text DEFAULT NULL,
  `Transport_Charges` int(10) NOT NULL,
  `Additional_Charges` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Other_Discount` int(10) NOT NULL,
  `Taxable_Value` int(10) NOT NULL,
  `Invoice_Value` int(10) NOT NULL,
  `Purchase_Product_ID` int(10) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` year(4) DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `PO_Id` int(20) NOT NULL,
  `PO_No` int(20) NOT NULL,
  `PO_Date` int(20) NOT NULL,
  `Supplier_Name` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `GST_No` text NOT NULL,
  `Payment_Terms` text NOT NULL,
  `Remark` text DEFAULT NULL,
  `Transport_Charges` int(20) NOT NULL,
  `Additional_Charges` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Other_Discount` int(20) NOT NULL,
  `Taxable_Value` int(20) NOT NULL,
  `Total_Value` int(20) NOT NULL,
  `PO_Product_ID` text NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`PO_Id`, `PO_No`, `PO_Date`, `Supplier_Name`, `Address`, `City`, `State`, `GST_No`, `Payment_Terms`, `Remark`, `Transport_Charges`, `Additional_Charges`, `Discount`, `Other_Discount`, `Taxable_Value`, `Total_Value`, `PO_Product_ID`, `Month`, `Financial_Year`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 0, 17, 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', '30-Days', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 123456, 123456, 123456, 123456, 1234567, 12345678, '1', 'Oct', '0000-00-00', 'Ram Javle', '0000-00-00', 12345, 123);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_products`
--

CREATE TABLE `purchase_order_products` (
  `PO_Product_Id` int(20) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Unit` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `Invoice_No` text DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` text NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_products`
--

CREATE TABLE `purchase_products` (
  `Purchase_Product_Id` int(10) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` text DEFAULT NULL,
  `Quantity` int(10) NOT NULL,
  `Unit` int(10) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Tax` int(10) NOT NULL,
  `Invoice_No` int(10) NOT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` int(10) NOT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` year(4) DEFAULT NULL,
  `CreatedBy` text DEFAULT NULL,
  `Created_Date` date DEFAULT NULL,
  `Register_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_products`
--

CREATE TABLE `quotation_products` (
  `Quotation_Product_Id` int(20) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Description` text NOT NULL,
  `HSN_SAC` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Unit` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `Invoice_No` text DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Invoice_ID` text DEFAULT NULL,
  `Month` text DEFAULT NULL,
  `Financial_Year` date NOT NULL,
  `CreatedBy` text NOT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(20) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_info`
--

CREATE TABLE `service_info` (
  `id` int(11) NOT NULL,
  `service_desc` varchar(11) NOT NULL,
  `service_code` varchar(11) NOT NULL,
  `sac_code` varchar(11) NOT NULL,
  `unit` varchar(11) NOT NULL,
  `rate` varchar(11) NOT NULL,
  `catagory` varchar(11) NOT NULL,
  `applicable_tax` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_Id` int(11) NOT NULL,
  `Supplier_Name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GST_No` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Address1` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Address2` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `City` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pincode` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `State` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Country` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Person` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Contact_No` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Vendor_Code` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Accounting_Group` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Terms` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Opening_Balance` int(10) DEFAULT NULL,
  `As_On_Date` date DEFAULT NULL,
  `Dr_Cr` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `CreatedBy` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Created_Date` date NOT NULL,
  `Register_Id` int(11) NOT NULL,
  `User_Id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sundry` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `ship_custname` varchar(255) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `ship_gst` varchar(255) NOT NULL,
  `ship_address2` varchar(255) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `ship_pin` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL,
  `ship_india` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vender` varchar(255) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `account_No` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `name`, `sundry`, `gst`, `ship_custname`, `ship_address`, `ship_gst`, `ship_address2`, `ship_city`, `ship_pin`, `ship_state`, `ship_india`, `contact_person`, `mobile`, `email`, `vender`, `bankName`, `account_No`, `ifsc`, `branch`, `opening`, `dr`) VALUES
(1, 'mahesh', 'sundry', '345678', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'raman', 'sundry', '345678', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'mahesh', 'sundry', '345678', 'shubham', 'baramati', '5421213', 'baramati', 'pune', '42515', '27', '', '23456', '5423.0', 'new@gmail.com', '3746', 'mahesh', '234567', 'PNBD2341', 'hdfc', '12324.44', 'Dr'),
(4, 'mahesh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12324.44', 'Cr'),
(5, 'mahesh', '', 'GST@18%', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12324.44', 'Cr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `customerinfo1`
--
ALTER TABLE `customerinfo1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger1`
--
ALTER TABLE `ledger1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productinfo`
--
ALTER TABLE `productinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_info`
--
ALTER TABLE `service_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `CustomerId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `customerinfo1`
--
ALTER TABLE `customerinfo1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ledger1`
--
ALTER TABLE `ledger1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productinfo`
--
ALTER TABLE `productinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_info`
--
ALTER TABLE `service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplier_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

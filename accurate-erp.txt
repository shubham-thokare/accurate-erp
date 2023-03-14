-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 11:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
  `stateCode` text NOT NULL,
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
  `ShippingstateCode` text NOT NULL,
  `ShippingCountry` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ShippingContact_Person` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingEmail` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingContact_No` int(20) DEFAULT NULL,
  `Vendor_Code` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Accounting_Group` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PO_No` text NOT NULL,
  `PO_Date` datetime NOT NULL,
  `Payment_Terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Remark` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
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

INSERT INTO `customer` (`Customer_Id`, `Customer_Name`, `GST_No`, `Address1`, `Address2`, `City`, `Pincode`, `State`, `stateCode`, `Country`, `Contact_Person`, `Email`, `Contact_No`, `ShippingCustomer_Name`, `ShippingGST_No`, `ShippingAddress1`, `ShippingAddress2`, `ShippingCity`, `ShippingPincode`, `ShippingState`, `ShippingstateCode`, `ShippingCountry`, `ShippingContact_Person`, `ShippingEmail`, `ShippingContact_No`, `Vendor_Code`, `Accounting_Group`, `PO_No`, `PO_Date`, `Payment_Terms`, `Remark`, `Opening_Balance`, `As_On_Date`, `Dr_Cr`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(3, 'akash', '2132434', 'narhe pune', 'balajinagar', 'pune', 411041, 'maharashtra', '', 'india', 'akash sonawane', 'abc@gmail.com', 987987987, 'govind', '35fdgggg', 'regregerg34543', 'regreg', 'ergreg', 989879848, 'er\r\nerwer', '', 'rweferf', 'rreg', 'rereg', 545435, '454543', '45345trytytytr', 'tryrty', '2022-11-10 07:13:21', 'tyrtyrty', 'tytry', 'tyty', '2022-11-10 07:13:21', 'trytry', '345435tyrty', '2022-11-10 07:13:21', 453, 45),
(4, 'akash', '2132434', 'narhe pune', 'balajinagar', 'pune', 411041, 'maharashtra', '', 'india', 'akash sonawane', 'abc@gmail.com', 546844884, 'govind', '35fdgggg', 'regregerg34543', 'regreg', 'ergreg', 989879848, 'er\r\nerwer', '', 'rweferf', 'rreg', 'rereg', 545435, '454543', '45345trytytytr', 'tryrty', '2022-11-10 07:13:21', 'tyrtyrty', 'tytry', 'tyty', '2022-11-10 07:13:21', 'trytry', '345435tyrty', '2022-11-10 07:13:21', 453, 45),
(5, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 0, '', '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', NULL, '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(6, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 411041, '', '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', NULL, '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(7, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 411041, '', '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', NULL, '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(8, 'govind', '567843547354785', 'ef4e4et4t4rrgregretresdfrgrgg', NULL, '', 411041, '', '', '', NULL, 'werrefrfrefrfref', 453554354, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '2022-11-10 10:46:51', '', NULL, '343434', '2022-11-10 10:46:51', '', NULL, '2022-11-10 10:46:51', 0, 0),
(11, 'akash sonawane', '675667852342', 'narhe', 'pune', 'pune', 411045, 'Maharashtra ', '', 'India', 'aarti', 'sonawanea307@gmail.com', 2147483647, 'akash sonawane1', '465687/6', 'narhe', 'pune', 'pune', 411045, 'Maharashtra ', '', 'india', NULL, NULL, NULL, '6547684135', '', '', '0000-00-00 00:00:00', '', NULL, '20000', NULL, 'Dr', NULL, NULL, 0, 0),
(12, 'Ram Javle', '27AOYPJ6627G2ZB', 'Akurdi', 'Pimpri chinchwad', 'Pune', 411035, 'Maharashtra ', '', 'India', '', 'gfhjiuygfv5415841', 0, '', '', '', '', '', 0, '', '', '', NULL, NULL, NULL, 'kjuhgfcdv', '', '', '0000-00-00 00:00:00', '', NULL, 'kjhgfcxcvb', NULL, 'Dr', NULL, NULL, 0, 0),
(13, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '', NULL, '', NULL, '', NULL, NULL, 0, 0),
(14, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '', NULL, '', NULL, '', NULL, NULL, 0, 0),
(15, 'Rushikesh shinde', '27AAVFG8786E1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(16, 'Akash Sonawane updated', '27AAVFG8786E1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(17, 'abc', '27AAVFG8786E1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(18, 'Rushikesh shinde', '27AAVFG8786E1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(19, 'Rushikesh Shinde', '27AAVFG8786E1ZK', 'ChinchWad', 'Shahunagar', 'Pune', 411019, 'Maharashtra', '27', 'India', 'Rushikesh', 'rushikeshs377@gmail.com', 788819818, 'Anil', '27AAVFG8786E1ZI', 'Jejuri', 'Jejuri', 'Jejuri', 412303, 'Maharashtra', '27', 'India', 'abc', 'abc@gmail.com', 999999999, '1000', '', '12', '2022-12-26 10:09:47', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(21, 'Rushikesh Shinde', '27AAVFG8786E1ZK', 'ChinchWad', 'Shahunagar', 'Pune', 411019, 'Maharashtra', '27', 'India', 'Rushikesh', 'rushikeshs377@gmail.com', 788819818, 'Anil', '27AAVFG8786E1ZI', 'Jejuri', 'Jejuri', 'Jejuri', 412303, 'Maharashtra', '27', 'India', 'abc', 'abc@gmail.com', 999999999, '1000', '', '12', '2022-12-26 10:09:47', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(23, 'shinde rushikesh', '27AAVFG8786X1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(24, 'abc', '27AAVFG8786E1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0),
(25, 'Rushikesh shinde', '27AAVFG8786E1ZK', '', NULL, '', 0, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', 0, '', '', '', NULL, NULL, NULL, NULL, '', '', '0000-00-00 00:00:00', '', NULL, NULL, NULL, '', NULL, NULL, 0, 0);

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
  `Invoice_Id` int(11) NOT NULL,
  `Invoice_No` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Invoice_Date` date NOT NULL,
  `Customer_Name` varchar(38) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Billing_Address` varchar(85) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `City` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `State` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GST_No` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingCustomer_Name` varchar(38) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Shipping_Address` varchar(85) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Shipping_City` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Shipping_State` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ShippingGST_No` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PO_No` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PO_Date` datetime DEFAULT NULL,
  `Challan_No` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Challan_Date` datetime DEFAULT NULL,
  `Transport_Mode` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Vehicle_No` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Payment_Terms` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Due_Date` datetime DEFAULT NULL,
  `Remark` varchar(85) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Additional_Terms` varchar(85) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Service_Invoice` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Transport_Charges` int(11) DEFAULT NULL,
  `Additional_Charges` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL,
  `Other_Discount` int(11) DEFAULT NULL,
  `CGST_Value` int(11) NOT NULL,
  `SGST_Value` int(11) NOT NULL,
  `IGST_Value` int(11) NOT NULL,
  `Taxable_Value` int(11) NOT NULL,
  `Invoice_Value` int(11) NOT NULL,
  `Invoice_Status` varchar(100) DEFAULT NULL,
  `Invoice_Product_ID` int(11) NOT NULL,
  `Sequence_Type` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `prefix1` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `prefix2` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Sequence_No` int(11) DEFAULT NULL,
  `Month` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Financial_Year` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `CreatedBy` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Created_Date` datetime DEFAULT NULL,
  `Register_Id` int(11) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Invoice_Id`, `Invoice_No`, `Invoice_Date`, `Customer_Name`, `Billing_Address`, `City`, `State`, `GST_No`, `ShippingCustomer_Name`, `Shipping_Address`, `Shipping_City`, `Shipping_State`, `ShippingGST_No`, `PO_No`, `PO_Date`, `Challan_No`, `Challan_Date`, `Transport_Mode`, `Vehicle_No`, `Payment_Terms`, `Due_Date`, `Remark`, `Additional_Terms`, `Service_Invoice`, `Transport_Charges`, `Additional_Charges`, `Discount`, `Other_Discount`, `CGST_Value`, `SGST_Value`, `IGST_Value`, `Taxable_Value`, `Invoice_Value`, `Invoice_Status`, `Invoice_Product_ID`, `Sequence_Type`, `prefix1`, `prefix2`, `Sequence_No`, `Month`, `Financial_Year`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 'S/2022-23/0001', '2022-08-17', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AESPA4832Q1ZW', 'PO1234567', '2022-10-18 00:00:00', 'PO1234567', '2022-10-18 00:00:00', 'By Road', 'MH12CZ4852', '30-Days', '2022-10-18 00:00:00', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Yes', 123456, 123456, 123456, 123456, 0, 0, 0, 1234567, 12345678, NULL, 1, 'Auto', 'S', '2022-23', 1, 'Oct', '2022-23', 'Ram Javle', '2022-10-17 00:00:00', 12345, 123),
(2, 'S/2022-23/0002', '2022-09-18', 'Samarth Industries And Private Limited', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'Samarth Industries And Private Limited', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AESPA4832Q1ZW', 'PO1234567', '2022-10-18 00:00:00', 'PO1234567', '2022-10-18 00:00:00', 'By Hand', 'NULL', 'select', '2022-10-18 00:00:00', 'NULL', 'NULL', 'No', 123456, 123456, 123456, 123456, 0, 0, 0, 1234567, 12345678, NULL, 2, 'Manual', 'S', '2022-23', 2, 'Oct', '2022-23', 'Ram Javle', '2022-10-17 00:00:00', 12345, 123),
(3, 'S/2022-23/0003', '2022-10-19', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AESPA4832Q1ZW', 'PO1234567', '2022-10-18 00:00:00', 'PO1234567', '2022-10-18 00:00:00', 'By Road', 'MH12CZ4852', 'select', '2022-10-18 00:00:00', 'NULL', 'NULL', 'Yes', 123456, 123456, 123456, 123456, 0, 0, 0, 1234567, 12345678, NULL, 3, 'Auto', 'S', '2022-23', 3, 'Oct', '2022-23', 'Ram Javle', '2022-10-17 00:00:00', 12345, 123),
(4, 'S/2022-23/0004', '2022-11-20', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AESPA4832Q1ZW', 'PO1234567', '2022-10-18 00:00:00', 'PO1234567', '2022-10-18 00:00:00', 'By Air', 'NULL', 'select', '2022-10-18 00:00:00', 'NULL', 'NULL', 'Yes', 123456, 123456, 123456, 123456, 0, 0, 0, 1234567, 12345678, NULL, 110, 'Auto', 'S', '2022-23', 4, 'Oct', '2022-23', 'Ram Javle', '2022-10-17 00:00:00', 12345, 123),
(5, 'S/2022-23/0005', '2022-12-21', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AOYPJ6627G2ZB', 'Samarth Industries', 'B-48, Pavana Complex, Pre Co-Operative, Society Ltd.T-204, MIDC, Bhosari, Pune 411026', 'Pune', 'Maharashtra', '27AESPA4832Q1ZW', 'PO1234567', '2022-10-18 00:00:00', 'PO1234567', '2022-10-18 00:00:00', 'By Road', 'MH12CZ4852', 'select', '2022-10-18 00:00:00', 'NULL', 'NULL', 'No', 123456, 123456, 123456, 123456, 0, 0, 0, 1234567, 12345678, NULL, 111, 'Auto', 'S', '2022-23', 5, 'Oct', '2022-23', 'Ram Javle', '2022-10-17 00:00:00', 12345, 123),
(6, '122', '2022-06-01', 'Rushikesh Shinde', 'A/P - Jejuri', 'jeju', 'maharashtra', '27AAVFG8786E1zk', 'pune', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2000, 2360, NULL, 1, NULL, NULL, NULL, NULL, 'MONTH()', NULL, NULL, NULL, 12345, NULL),
(7, '', '2022-04-01', 'Govind', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, 1200, 0, 120000, 100, 'paid', 0, NULL, NULL, NULL, NULL, 'MONTH()', NULL, NULL, NULL, 12345, NULL),
(8, '122', '2022-07-01', 'Rushikesh Shinde', 'A/P - Jejuri', 'jeju', 'maharashtra', '27AAVFG8786E1zk', 'pune', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2000, 2360, NULL, 1, NULL, NULL, NULL, NULL, 'MONTH()', NULL, NULL, NULL, 12345, NULL),
(9, '', '2022-05-01', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 100, NULL, 0, NULL, NULL, NULL, NULL, 'MONTH()', NULL, NULL, NULL, 12345, 123);

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
  `Applicable_Tax` varchar(10) NOT NULL,
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
(1, 'modular Kitchen', NULL, 'Inventory', 9846841, 982321, 3, 45, NULL, '18', 0, NULL, '', '', 0, 0),
(2, 'Furniture - Chairs & Fan', NULL, 'Inventory', 94045, 9403, 12563, 12, NULL, '12', 121215, NULL, '', '', 0, 0),
(3, 'Labour Charges', NULL, 'Service', 9865111, 9865111, 0, 5, NULL, '28', 2, NULL, '', '', 0, 0),
(4, 'Thanos Vape', 'Good for health', 'Electric cigarate', 0, 2323, 1, 200, 'product', '12', 1122, '', '', '', 0, 0);

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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Register_ID` int(11) DEFAULT NULL,
  `Contact_Person` varchar(22) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Company_Name` varchar(27) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Mobile` bigint(20) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Email` varchar(29) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Password` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Pricing_Plan` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Payment_Status` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Trans_id` int(11) DEFAULT NULL,
  `Activation_Date` datetime DEFAULT NULL,
  `Expiry_Date` datetime DEFAULT NULL,
  `Account_Status` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Renewal_Amount` int(11) DEFAULT NULL,
  `Address1` varchar(71) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Address2` varchar(43) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PinCode` int(11) DEFAULT NULL,
  `State` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Country` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GST_No` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PAN_No` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `CRN_MSME` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Financial_Year` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Website` varchar(26) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Company_Logo` varchar(23) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Stamp_Sign` varchar(29) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Stamp_Status` int(11) DEFAULT NULL,
  `Profile_Photo` varchar(23) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Register_ID`, `Contact_Person`, `Company_Name`, `Mobile`, `Phone`, `Email`, `Password`, `Pricing_Plan`, `Amount`, `Payment_Status`, `Trans_id`, `Activation_Date`, `Expiry_Date`, `Account_Status`, `Renewal_Amount`, `Address1`, `Address2`, `city`, `PinCode`, `State`, `Country`, `GST_No`, `PAN_No`, `CRN_MSME`, `Financial_Year`, `Website`, `Company_Logo`, `Stamp_Sign`, `Stamp_Status`, `Profile_Photo`) VALUES
(1, 'Ram Javle', 'SHIVANSH INFOTECH SOLUTIONS', 9527145556, 20223344, 'ramjavle@shivanshinfo.com', 'Shiv@1990*', 'Business', 12999, 'Success', 12154848, '2019-04-01 00:00:00', '2024-03-31 00:00:00', 'Active', 5000, 'Office No.107, B- Wing, Jai Ganesh Vision, Akurdi', 'Pimpri Chinchwad', 'Pune', 411035, 'Maharashtra', 'India', '27AOYPJ6627G1ZC', 'AOYPJ6627G', 'MH266985265', '2022-23', 'www.shivanshinnovative.com', 'SHIVANSH LOGO.png', 'Stamp_2_-removebg-preview.png', 0, 'SHIVANSH LOGO.png'),
(2, 'GURURAJ PRAKASH HEGADI', 'FORTUNE ENGINEERING', 8983027883, 20223344, 'fortuneengineering8@gmail.com', 'Fortune@22', 'Standard', 5899, 'Success', 12154848, '2019-04-07 00:00:00', '2020-04-06 00:00:00', 'Expired', 5000, 'Office- E 401 Sai Kunj Hsg Soc Nr Sawtamali Mandir Jadhavwadi Chikhali,', 'WORKS-Gat No.74/75, Jyotiba Nagar, Talwade,', 'Pune', 411062, 'Maharashtra', 'India', '27AAGFF3073Q1ZX', 'AAGFF3073Q', 'MH266985266', '2021-22', 'www.fortuneengineering.com', 'FORTUNE ENGINEERING.jpg', NULL, 0, 'FORTUNE ENGINEERING.jpg'),
(3, 'Sujit Agarkar', 'SAMARTH INDUSTRIES', 9822433441, 20223344, 'samarthindustries13@gmail.com', 'Agarkar5555', 'Standard', 5899, 'Failed', 12154848, '2019-04-02 00:00:00', '2023-06-01 00:00:00', 'Expired', 5000, 'B48 Pavana Industrial Premises Co-op Society Ltd, T 204, MIDC Bhosari,', NULL, 'Pune', 411026, 'Maharashtra', 'India', '27AESPA4832Q1ZW', 'AESPA4832Q', 'MH266985267', '2022-23', 'www.samarthindustries.com', 'Samarth Logo - Copy.png', NULL, 0, 'Samarth Logo - Copy.png'),
(4, 'Dharmaraj Jadhav', 'OMKAR PRINTERS', 9822978503, 20223344, 'omkarprinters222@gmail.com', 'Sdj@c2', 'Standard', 4999, 'Failed', 12154848, '2019-04-27 00:00:00', '2023-04-01 00:00:00', 'Active', 5000, '68 T201/1,Morya Complex, Opp. Polygrass Hokey Stadium, MIDC Bhosari,', 'Bhosari', 'Pune', 411026, 'Maharashtra', 'India', '27AGDPJ4564D1ZK', 'AGDPJ4564D', 'MH266985268', '2022-23', 'www.omkarprinters.com', 'Omkar Logo.png', NULL, 0, 'Omkar Logo.png'),
(5, 'Vijay Vadile', 'GLACIER COOLING SYSTEM', 9545141555, 20223344, 'vijayvadile@glaciersystem.com', 'Glacier@19', 'Standard', 4999, 'Success', 12154848, '2019-07-01 00:00:00', '2023-06-30 00:00:00', 'Standard', 5000, 'Sr. No. 28/2A/1-B, Near Park Royal Society, Shivrajnagar, Rahatani', 'Pimpri Chinchwad', 'Pune', 411017, 'Maharashtra', 'India', '27ACQPV2492P1ZF', 'ACQPV2492P', 'MH266985269', '2022-23', 'www.glaciersystem.com', 'Glacier Logo.png', 'Glacier_Stamp___Sign.png', 0, 'Glacier Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_ID` int(11) NOT NULL,
  `Supplier_Name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GST_No` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Address1` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Address2` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `City` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pincode` int(11) NOT NULL,
  `State` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Country` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Person` int(11) DEFAULT NULL,
  `Email` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Contact_No` int(10) DEFAULT NULL,
  `Vendor_Code` text NOT NULL,
  `BankName` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Account_No` int(20) NOT NULL,
  `IFSC` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Branch` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PO_No` int(11) NOT NULL,
  `PO_Date` datetime NOT NULL,
  `Payment_Terms` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Remark` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Opening_Balance` int(11) NOT NULL,
  `As_On_Date` datetime DEFAULT NULL,
  `Dr_Cr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CreatedBy` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Created_Date` datetime DEFAULT NULL,
  `Register_Id` int(11) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Supplier_Name`, `GST_No`, `Address1`, `Address2`, `City`, `Pincode`, `State`, `Country`, `Contact_Person`, `Email`, `Contact_No`, `Vendor_Code`, `BankName`, `Account_No`, `IFSC`, `Branch`, `PO_No`, `PO_Date`, `Payment_Terms`, `Remark`, `Opening_Balance`, `As_On_Date`, `Dr_Cr`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`) VALUES
(1, 'Customer_Name', '27AOYPJ6627G2ZB', 'Address1', 'Address2', 'City', 411035, 'State', 'Country', 0, 'Email', 0, '', 'ShippingCustomer_Name', 2147483647, 'ICIC0000986', 'ShippingAddress2', 12345, '2022-10-17 00:00:00', 'Payment_Terms', 'Remark', 0, '2022-10-17 00:00:00', 'Dr_Cr', 'CreatedBy', '2022-10-17 00:00:00', 1, 2),
(2, 'akash sonawane', '27222EYBZX4572', 'narhe', 'pune', 'pune', 411041, 'maharashtra', 'india', 123456, 'sonawanea307@gmail.com', 983491164, '', '', 0, '', NULL, 0, '2022-12-01 12:02:46', '', NULL, 20000, '2022-12-01 12:02:46', '', NULL, '2022-12-01 12:02:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `User_ID` int(100) NOT NULL,
  `User_Name` varchar(22) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Designation` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Department` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Branch` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Phone` int(100) NOT NULL,
  `Email` varchar(29) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Login_Id` varchar(29) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Password` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Address` varchar(71) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PinCode` decimal(7,1) DEFAULT NULL,
  `State` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Country` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `joining_date` datetime DEFAULT NULL,
  `Employee_Id` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Pan_no` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Passport_no` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Pf_no` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Uan_no` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Qualification` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Experience` decimal(2,1) DEFAULT NULL,
  `Gender` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Birth_date` datetime DEFAULT NULL,
  `Bank_name` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Account_number` decimal(13,1) DEFAULT NULL,
  `IFSC` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Branch_1` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `linkedin` varchar(34) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Twitter` varchar(34) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Facebook` varchar(34) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Instagram` varchar(34) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Profile_Photo` varchar(23) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Banking` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `CashBook` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Accounting` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Sales` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Purchase` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Inventory` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Quotation` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Purchase_Order` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `User_Status` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Created_Date` datetime DEFAULT NULL,
  `Register_ID` decimal(6,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`User_ID`, `User_Name`, `Designation`, `Department`, `Branch`, `Phone`, `Email`, `Login_Id`, `Password`, `Address`, `city`, `PinCode`, `State`, `Country`, `joining_date`, `Employee_Id`, `Pan_no`, `Passport_no`, `Pf_no`, `Uan_no`, `Qualification`, `Experience`, `Gender`, `Birth_date`, `Bank_name`, `Account_number`, `IFSC`, `Branch_1`, `linkedin`, `Twitter`, `Facebook`, `Instagram`, `Profile_Photo`, `Banking`, `CashBook`, `Accounting`, `Sales`, `Purchase`, `Inventory`, `Quotation`, `Purchase_Order`, `User_Status`, `Created_Date`, `Register_ID`) VALUES
(1, 'Ram Javle', 'sales Manager', 'Sales', 'Pune', 2147483647, 'ramjavle@shivanshinfo.com', 'ramjavle@shivanshinfo.com', 'Shiv@1990*', 'Office No.107, B- Wing, Jai Ganesh Vision, Akurdi', 'Pune', '411035.0', 'Maharashtra', 'India', '2022-10-18 00:00:00', 'SI01', 'JS7888190', 'AB0000123', 'MH1234567890', 'MH1234567890', 'BCOM', '2.0', 'MALE', '1998-02-18 00:00:00', 'Icici', '123456789012.0', 'icici0123', 'Pune', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'SHIVANSH LOGO.png', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Active', '2022-10-18 00:00:00', '12345.0'),
(2, 'GURURAJ PRAKASH HEGADI', 'purchase Manager', 'Purchase', 'Akurdi', 2147483647, 'fortuneengineering8@gmail.com', 'fortuneengineering8@gmail.com', 'Fortune@22', 'Office- E 401 Sai Kunj Hsg Soc Nr Sawtamali Mandir Jadhavwadi Chikhali,', 'Pune', '411062.0', 'Maharashtra', 'India', '2022-10-18 00:00:00', 'SI02', 'JS7888191', 'AB0000124', 'MH1234567891', 'MH1234567891', 'MCOM', '2.0', 'MALE', '1998-02-19 00:00:00', 'Icici', '123456789012.0', 'icici0124', 'Pune', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'FORTUNE ENGINEERING.jpg', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Inactive', '2022-10-18 00:00:00', '12345.0'),
(3, 'Sujit Agarkar', 'Accountant', 'Account', 'Nigdi', 2147483647, 'samarthindustries13@gmail.com', 'samarthindustries13@gmail.com', 'Agarkar5555', 'B48 Pavana Industrial Premises Co-op Society Ltd, T 204, MIDC Bhosari,', 'Pune', '411026.0', 'Maharashtra', 'India', '2022-10-18 00:00:00', 'SI03', 'JS7888192', 'AB0000125', 'MH1234567892', 'MH1234567892', 'MCOM', '2.0', 'MALE', '1998-02-20 00:00:00', 'Icici', '123456789012.0', 'icici0125', 'Pune', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'Samarth Logo - Copy.png', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Inactive', '2022-10-18 00:00:00', '12345.0'),
(4, 'Dharmaraj Jadhav', 'hr', 'Hr and Admin', 'Chakan', 2147483647, 'omkarprinters222@gmail.com', 'omkarprinters222@gmail.com', 'Sdj@c2', '68 T201/1,Morya Complex, Opp. Polygrass Hokey Stadium, MIDC Bhosari,', 'Pune', '411026.0', 'Maharashtra', 'India', '2022-10-18 00:00:00', 'SI04', 'JS7888193', 'AB0000126', 'MH1234567893', 'MH1234567893', 'MCOM', '2.0', 'MALE', '1998-02-21 00:00:00', 'Icici', '123456789012.0', 'icici0126', 'Pune', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'Omkar Logo.png', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Inactive', '2022-10-18 00:00:00', '12345.0'),
(5, 'Vijay Vadile', 'admin', 'Admin', 'Chinchwad', 2147483647, 'vijayvadile@glaciersystem.com', 'vijayvadile@glaciersystem.com', 'Glacier@19', 'Sr. No. 28/2A/1-B, Near Park Royal Society, Shivrajnagar, Rahatani', 'Pune', '411017.0', 'Maharashtra', 'India', '2022-10-18 00:00:00', 'SI05', 'JS7888194', 'AB0000127', 'MH1234567894', 'MH1234567894', 'MCOM', '2.0', 'MALE', '1998-02-22 00:00:00', 'Icici', '123456789012.0', 'icici0127', 'Pune', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'www.efficientglobetechsolution.com', 'Glacier Logo.png', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Inactive', '2022-10-18 00:00:00', '12345.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Invoice_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `User_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

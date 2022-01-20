-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2021 at 09:37 AM
-- Server version: 10.2.38-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntproesu_ntprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_tbl`
--

CREATE TABLE `customers_tbl` (
  `client_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `person_name` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_deliverynotes`
--

CREATE TABLE `customer_deliverynotes` (
  `deliverynote_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `deliverynote_name` varchar(250) NOT NULL,
  `deliverynote_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_deliverynotes`
--

INSERT INTO `customer_deliverynotes` (`deliverynote_id`, `submitted_on`, `deliverynote_name`, `deliverynote_no`, `s_qoute_reference`, `comments`) VALUES
(12, '2020-12-23 16:27:11', '901468.pdf', ' 901468', '21627', 'full Deliverey'),
(13, '2020-12-23 16:34:27', 'Delivery Note 901476.jpg', '901476', '21648', 'full Deliverey'),
(14, '2020-12-23 16:36:11', 'Delivery Note 901479.pdf', '901479', '21656', 'full Deliverey'),
(15, '2020-12-23 16:38:51', 'Delivery note 901482.pdf', ' 901482', '21670', 'full Deliverey'),
(16, '2020-12-23 16:40:28', 'Delivery note 901488.pdf', '901488', '21566', 'full Deliverey'),
(17, '2021-01-19 16:53:03', 'Delivery Note 901493.PDF', '901493', '21692', 'ISANTI GLASS'),
(18, '2021-01-19 16:53:20', 'Delivery Note 901494.PDF', ' 901494', '21602', 'ISANTI GLASS'),
(19, '2021-01-19 17:10:29', 'Delivery Note901497.PDF', '901497', '21592', 'GRUNDFOS'),
(20, '2021-01-19 17:12:33', 'Delivery Note 901498.PDF', '901498', '21665', 'TURBINE VIBRATOR *2'),
(21, '2021-01-19 17:14:22', 'Delivery Note 901500.PDF', '901500', '21501-1', 'Geared Motor'),
(22, '2021-01-21 16:19:28', 'Delivery_Note_901495_21694.PDF', '901495', '21694', 'Movi Drive B Repairs '),
(23, '2021-01-21 16:33:45', 'Delivery_Note_901502_21684.PDF', '901502', '21684', 'Movi Drive  Repairs '),
(24, '2021-01-22 09:45:39', 'Delivery_Note_901504_21711.PDF', '901504', '21711', 'full Deliverey'),
(25, '2021-01-28 16:10:15', 'Delivery Note 901505.pdf', '901505', '901505', 'Parallel shaft helical gearmotor FA87/G DRN160M4'),
(26, '2021-02-08 09:20:49', 'denisvalprePODS1.jpg', '901506', '21699', ''),
(27, '2021-02-08 09:23:49', 'denisvalprePODS2.jpg', '901507', '21699', ''),
(28, '2021-02-10 16:56:45', 'Deliverynote901487-1.pdf', '901487-1', '21664', '2nd motor delivery.order completed'),
(29, '2021-02-17 08:34:57', 'zibodeliv901509.jpg', '901509', '21742', 'Movi Drive  Repairs zibo Containers'),
(30, '2021-02-25 09:40:34', 'IsantiDeliveryNote901517.PDF', '901517', '21752', 'Single phase submergible pumps - Isanti Glass'),
(31, '2021-03-05 14:02:19', 'NT21739Zibodeliverynote901521.pdf', '901521', '21739', 'zibo Containers - 0.37kw motor*2'),
(32, '2021-03-11 09:30:04', 'SupplierNo0051428934UnileverDelieryNote901522.PDF', '901522', '21614', '3GAA 101 520-ASE ABB-M3AA-3-KW-400V-2-POLE-IE2-B3-100  Power: 3kW Speed nN: 2920 r/min Voltage: 400 Mounting: IM2101'),
(33, '2021-04-08 15:42:41', 'DeliveryNote901527.pdf', '901527', '21737', 'Delivered '),
(34, '2021-04-08 15:42:41', 'DeliveryNote901528.pdf', '901548', '21570-1', 'Delivered '),
(35, '2021-04-08 15:42:41', 'DeliveryNote901548.pdf', '901548', '21712-1', 'Delivered '),
(36, '2021-04-22 09:28:26', 'IsantiglassDeliveryNote901550.pdf', '901550', '21745', '10 profibus connectors');

-- --------------------------------------------------------

--
-- Table structure for table `customer_invoices`
--

CREATE TABLE `customer_invoices` (
  `invoice_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_name` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `invoice_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_invoices`
--

INSERT INTO `customer_invoices` (`invoice_id`, `submitted_on`, `invoice_name`, `invoice_no`, `s_qoute_reference`, `invoice_details`) VALUES
(8, '2020-12-01 12:47:50', '.pdf', '901480', '21671', 'AC motor DRN180L4/FG'),
(9, '2020-12-01 12:53:46', 'Invoice_901476_2020-12-02.pdf', '', '', ''),
(12, '2020-12-14 11:10:17', '.pdf', '901474', '901474', '18 core x 0.75mm cable'),
(13, '2020-12-14 11:22:21', '.pdf', '901482', '901482', 'Helical-bevel gear unit KA57/A/T'),
(14, '2020-12-14 11:22:37', '.pdf', '901483', '901483', 'Call out labour'),
(15, '2020-12-14 11:22:55', '.pdf', '901478', '901478', 'Speck Pump â€“ AquaDrive 1100'),
(16, '2020-12-14 11:24:56', '.pdf', '901481', '901481', 'Helical gearmotor R67 DRN71M4/AL/DH'),
(17, '2021-01-05 15:11:25', 'Invoice_901492_2021-01-20 (1).pdf', '', '', ''),
(19, '2021-01-08 12:11:59', '.pdf', '901484', '901484', 'GRUNDFOS PUMPS'),
(22, '2021-01-20 11:51:25', 'Estimate2171020210131.pdf', '901503', '21699', '1500VA/900W/10A Pure sine wave UPS Part Number: NTPSE1500I,12V 9AH Gel BATTERY Part Number: GELBAT9A,'),
(23, '2021-01-21 22:05:45', 'Isanti_21716_2021-02-21.pdf', '21716', '21716', 'Limit Switch XCKP Roller Lever 1 NC; IFM InductiveE Sersor M18; VLTÂ® Control Panel LCP 102EAN; VLTÂ®Automation Drive FC 300'),
(24, '2021-02-02 09:35:43', 'Isanti_901505_2021-02-06.pdf', '901505', '901505', 'Parallel shaft helical gearmotor FA87/G DRN160M4'),
(25, '2021-02-05 15:15:45', 'Invoice_901508_2021-02-12.pdf', '901508', '21732', 'Callout-Labour(02/01/20202) '),
(26, '2021-02-15 16:01:44', 'Invoice_901509_2021-03-15.pdf', '901509', '21742', 'Movidrive repairs zibo containers'),
(27, '2021-02-22 09:49:12', 'Invoice_901510_2021-03-03.pdf', '901510', 'STill locating PO....... for trans NTPRO ID ID', 'cONSOL'),
(28, '2021-02-22 09:49:24', 'Invoice_901511_2021-03-03.pdf', '901511', '21707', 'CONSOL GLASS MULITIPLE ITEMS'),
(29, '2021-02-22 09:49:41', 'Invoice_901512_2021-02-25 (1).pdf', '901512', '21707', 'iSANTI GLASS - Inductive sensor'),
(30, '2021-02-25 09:49:54', 'Invoice_901517_2021-03-03.pdf', '901517', '21570-1', 'SINGLE PHASE SUBMERGIBLE PUMP | isanti'),
(31, '2021-03-04 16:42:34', 'Invoice_901521_2021-03-11.pdf', '901521', '21739', ' ACS150-01E-02A4-2, 0.37kW 2.4A 200-240'),
(32, '2021-03-10 16:55:01', 'Invoice_901525_2021-03-15 (1).pdf', '901525', '21744', 'ETHERNET CABLE PLUGGED ON BOTH ENDS(50m)'),
(33, '2021-03-11 09:01:25', 'Invoice_901522_2021-03-31.pdf', '901522', '21614', '3GAA 101 520-ASE ABB-M3AA-3-KW-400V-2-POLE-IE2-B3-100  Power: 3kW Speed nN: 2920 r/min Voltage: 400 Mounting: IM2101'),
(34, '2021-03-18 10:20:07', 'Invoice_901535_2021-03-24.pdf', '901535', '21744', 'Strip , Clean and Repair 1 Conrol'),
(35, '2021-04-15 10:14:33', 'Invoice_901519-2_2021-04-21.pdf', '901519-2', '21826', 'GEMINI S02055 Sliding Gate Wheel KIT,Nail In Anchor Poly 6 x 55mm (50 Pack)'),
(36, '2021-04-15 10:14:33', 'Invoice_901519-3_2021-04-15.pdf', '901519-3', '', 'Parallel shaft helical gearmotor FA67 DRN90L4 Speed [r/min]: 1461 / 24'),
(37, '2021-04-28 10:06:49', 'Invoice_901554_2021-05-05.pdf', '901554', '', 'CE SICK SENSOR FOR SHUTTLE CAR Safety laser scanners S30A-4011BA Safety laser scanners S3000 Standard Protective'),
(38, '2021-04-28 10:06:49', 'Invoice_901552_2021-05-05.pdf', '901552', '', 'Sensor Cable; Operating voltage 300 V AC; 100m; PUR; Halogen-free yes,'),
(39, '2021-04-28 10:06:49', 'Invoice_901550_2021-04-29.pdf', '901550', '', 'Profibus connector 35 DEG 700-792-0BB41 014808536'),
(40, '2021-04-28 10:06:49', 'Invoice_901519-2_2021-04-21-819846506.pdf', '901519-2', '', 'GEMINI S02055 Sliding Gate Wheel Kit (80mm) 711352'),
(41, '2021-05-06 09:55:42', 'Invoice_901561_2021-05-13.pdf', '901561', '21836', 'VIBRATOR MOTOR MVE 2400/15E-60A0 220-240/380-415V 50Hz'),
(42, '2021-05-14 09:42:09', 'Invoice_901564_2021-05-17.pdf', '901564', '21815', 'unit. KA37/TDT71D4/MM05/BW1'),
(43, '2021-05-14 09:42:09', 'Invoice_901565_2021-05-17.pdf', '901565', '21816', 'KA37/A'),
(44, '2021-05-14 09:42:09', 'Invoice_901566_2021-05-17.pdf', '901566', '21818', 'SA47/A'),
(45, '2021-05-14 09:42:09', 'Invoice_901567_2021-05-18.pdf', '901567', '21819', 'KA37DT9054/TF'),
(46, '2021-05-14 09:42:09', 'Invoice_901568_2021-05-18.pdf', '901568', '21820', 'KA37/T DR63L4'),
(47, '2021-05-14 09:42:09', 'Invoice_901569_2021-05-18.pdf', '', '', ''),
(48, '2021-05-14 09:42:09', 'Invoice_901570_2021-05-18.pdf', '901570', '21823', 'KA37/TDT71D4'),
(49, '2021-05-14 09:42:09', 'Invoice_901571_2021-05-18.pdf', '', '', ''),
(50, '2021-05-14 09:42:09', 'Invoice_901572_2021-05-18.pdf', '901572', '21824', 'KA37/TDT80K4/MM07/BW1'),
(51, '2021-05-14 09:42:09', 'Invoice_901573_2021-05-18.pdf', '901573', '21829', 'DRN160L4;15KW;4P'),
(52, '2021-05-14 10:21:01', 'Invoice_901574_2021-05-18.pdf', '901574', '21804', 'FA87/G DRS160M4'),
(53, '2021-05-14 10:21:01', 'Invoice_901576_2021-05-18.pdf', '901576', '', ''),
(54, '2021-05-14 10:21:01', 'Invoice_901577_2021-05-18.pdf', '901577', '21791-1', 'RF box Motor: 1.1kw 4pole'),
(56, '2021-05-17 13:38:58', 'Invoice_901585_2021-05-24.pdf', '901585', '21849', 'Sick: on-contact safety switches RE27'),
(57, '2021-05-17 14:16:08', 'Invoice_901586_2021-05-25.pdf', '901586', '21888', 'Geared Motor for Repairs FA47DT90S4 Power : 1.1kw Ratio: 38.61'),
(58, '2021-05-17 14:20:48', 'Invoice_901587_2021-05-25.pdf', '901587', '21889', 'Geared Motor for Repairs SA67DRS90M4BE2HR Power : 1.5kw Ratio: 23.22 With Brake, BV 230Vac'),
(59, '2021-05-17 14:25:44', 'Invoice_901588_2021-05-25.pdf', '901588', '21890', 'Geared Motor for Repairs SA57DRS90M4BE2HR/FG Power : 1.5kw With Brake, BV 230Vac'),
(60, '2021-05-18 12:17:55', 'Invoice_901589_2021-05-25.pdf', '901589', '21806', 'Compact photoelectric sensors WL280-2P2431 NB: This makes up 8 of the 34 ordered 26 yet more to be invoiced on delivery.'),
(61, '2021-05-18 12:25:17', 'Invoice_901590_2021-05-25.pdf', '901590', '21805', 'Shrouder Safety Relay SAF.MOD.EXT.UNIT.8N.O 24V AC/ DC Part no : XPSECPE5131P'),
(62, '2021-05-20 08:29:57', 'Invoice_901591_2021-05-27.pdf', '901591', '21842', 'IDE External Hard Drive 120GB'),
(63, '2021-05-24 11:00:24', 'Invoice_901568_2021-05-31.pdf', '901568', '21820', ' KA37/T DR63L4'),
(64, '2021-05-26 10:27:10', 'Invoice_901601_2021-06-02.pdf', '901601', '21865', 'Helical-worm gearmotor SA67 DRN80M4 Speed [r/min : 1440 / 31 No. of teeth nom./denominator: 232/5 Output torque [Nm]: 190 Mounting positionM1A 1, AC motor DRN80M4/FG'),
(65, '2021-05-26 10:36:22', 'Invoice_901602_2021-06-02.pdf', '901602', '21905', 'SIMATIC HMI KTP1200 with DP SIMATIC HMI, KTP1200 withDP, Panel, Key/touch operation, 12\" TFT display, 65536 colors, PROFIBUS interface,'),
(66, '2021-05-26 11:52:10', 'Invoice_901603_2021-06-02.pdf', '901603', '21919', 'Encoder plug 623 Plug cpl. 12polig Signal'),
(68, '2021-06-10 08:46:31', 'Invoice_901610_2021-06-16.pdf', '901610', '21943', 'Contactors,Auxillaries and Overloads'),
(69, '2021-06-10 08:46:31', 'Invoice_901611_2021-06-16.pdf', '901611', '21924', 'Repairs KA47/AR'),
(70, '2021-06-10 08:46:31', 'Invoice_901612_2021-06-16.pdf', '901612', '21929', 'Call Out'),
(71, '2021-06-10 08:46:31', 'Invoice_901613_2021-06-16.pdf', '901623', '21758', 'PVC Conrol Cable');

-- --------------------------------------------------------

--
-- Table structure for table `customer_purchaseorders`
--

CREATE TABLE `customer_purchaseorders` (
  `purchaseorder_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `purchaseorder_name` varchar(250) NOT NULL,
  `p_order_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `expected_deliverydate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_purchaseorders`
--

INSERT INTO `customer_purchaseorders` (`purchaseorder_id`, `submitted_on`, `purchaseorder_name`, `p_order_no`, `s_qoute_reference`, `expected_deliverydate`) VALUES
(8, '2020-11-20 09:41:17', 'R43500_C0001_528733_PDF.pdf', 'NT21648', 'grudfos pump', '13 November 2020'),
(9, '2020-11-23 17:37:35', 'MG825.pdf', 'MG825', '21661', '30/11/2020'),
(10, '2020-11-25 12:54:26', 'R43500_C0001_531266_PDF.pdf', '20003232', 'NT 21655', '30 November 2020'),
(11, '2020-11-26 10:57:51', 'R43500_C0025_532412_PDF.pdf', '20000951', '21659', 'Delivered  19 January 2021'),
(12, '2020-11-26 11:37:46', 'R43500_C0001_532383_PDF.pdf', '20003231', 'NT21656', '25 November 2020'),
(13, '2020-11-27 09:52:00', 'R43500_C0001_529828_PDF.pdf', '20003185', '21653', ' Delivered'),
(14, '2020-12-01 10:04:55', 'R43500_C0025_534341_PDF.pdf', 'NT21666', 'NT21666', 'to be confirmed'),
(15, '2020-12-01 10:39:37', 'R43500_C0001_534752_PDF.pdf', 'NT21664', 'NT21664', '1 Motor delivered,  second motor expected January 2020 first week.'),
(16, '2020-12-08 10:02:53', 'R43500_C0001_537880_PDF.pdf', 'NT21679', '21679', 'Delivered by Dennis'),
(17, '2020-12-08 12:39:31', 'SKMBT_C22020120808351.pdf', 'NT21681', '21681', 'Work done by Nathi'),
(18, '2020-12-09 11:48:41', 'PO 4504035948 NT-PRO TRADING Approved.PDF', '4504035948', '21675', 'Delivered by KG'),
(19, '2020-12-23 13:18:52', '20001011 OP.pdf', 'M4000 ADVANCED TRANSMITTER', '21686', 'expected early Jan'),
(20, '2020-12-23 16:18:44', 'PO 4504039730 NT-PRO TRADING Approved.PDF', '4504039730', '21687', 'Work done and invoice sent by Nathi 29/12/2020'),
(21, '2021-01-04 16:38:33', 'Consol-4501021966.PDF', '4501021966', '21677', '05 February 2021'),
(22, '2021-01-15 12:12:14', 'Isanti_C0001_549384_PDF.pdf', '20003718', '21692 ', 'Delivered  18 January 2021'),
(24, '2021-01-22 10:52:09', 'PurchaseOrderR43500_C0001_552996_PDF.pdf', '20003862', '21707', '06/02/2021'),
(25, '2021-01-26 12:59:50', 'Consol_Order data.PDF', '4501021966', '21677', '05/02721'),
(27, '2021-02-05 14:24:28', 'SKMBT_C22021020512301.pdf', '3BB202127349', '21732', '03 February 2021'),
(28, '2021-02-15 16:16:58', 'ZIBOPurchase Orders - Local_000000000061895.pdf', '061895		', '21742', '25 February 2021'),
(30, '2021-02-25 16:18:44', 'IsantiOrder202102251447PO21737.pdf', '200011450P', '21737', 'mid march'),
(31, '2021-03-02 09:37:21', 'R43500_C0001_567488_ISANTIPO21712.pdf', '20004360ON', '21712-1', 'mid march-RF37'),
(32, '2021-03-02 10:32:07', 'R43500_C0001_566958_PDF.pdf', '20004284', '21748', '12/03/2021'),
(33, '2021-03-08 08:10:53', 'R43500_C0001_569796_PDF.pdf', '20004472', '21757', '08/03/2021'),
(34, '2021-03-08 08:57:34', 'R43500_C0025_567479_PDF.pdf', '20001190', '21752 , 21570-1', 'Pumps delivered, waiting on sew'),
(35, '2021-03-08 09:18:28', 'NT21739Purchase Orders -061765.pdf', '061765', '21739', '05 March 2021'),
(37, '2021-03-08 13:32:32', 'Print data.PDF', '4501024098', '21750', 'JOB DONE'),
(38, '2021-03-08 14:13:47', 'NT21774CocaColaPO4504063278NT-PRO.pdf', '4504063278', '21744', '09 March 2021'),
(39, '2021-03-11 17:35:28', 'R43500_C0001_570226_PDF.pdf', '20004439', '21759', '18/03/2021'),
(41, '2021-03-12 09:40:29', 'R43500_C0025_571578_PDF.pdf', '20001368', '21421-2', '12/03/2021'),
(42, '2021-03-12 10:21:15', 'cables,plugs.pdf', '20004483', '21758', '2 weeks, partial delivery done'),
(43, '2021-03-12 12:23:47', '21770PurchaseOrders-ZIBO000000000062462.pdf', '062462', '21770', '30 March 2021'),
(44, '2021-03-17 11:17:29', 'premier order Fan.pdf', '904PPO-49180 ', '21795', '24/03/2021'),
(45, '2021-03-17 11:17:29', 'premier order call out.pdf', ' 904PPO-49182', ' 21792', 'Delivered'),
(46, '2021-03-18 10:22:40', 'INV21744Q21744PO4504064848 NT-PRO TRADING Approved (003).pdf', '4504064848', '21744', '15/03/2021'),
(47, '2021-03-23 12:07:23', 'IsantiC0001575526PDF.pdf', '2004747 ON', '21791', ''),
(48, '2021-03-26 10:24:29', '21786PO4504068730 NT-PRO TRADING Approved.pdf', '4504068730', '21786', '01 May 2021'),
(50, '2021-04-08 14:50:19', 'COCACOLAPO4504073159NTPROTRADINGApproved.PDF', '4504073159', '21826', '30 April 2021'),
(51, '2021-04-19 18:22:17', 'IFM-plugs and cables.PDF', '20004925_ON', '20813', '2 weeks ORDER NOT SENT YET'),
(53, '2021-04-19 18:35:29', 'UPS Repairs F2.PDF', '20004928_ON', '21809', '2 weeks'),
(54, '2021-04-19 19:17:01', 'UPS Repairs F1.PDF', '20004924_ON', '21808', ' 2 weeks'),
(55, '2021-04-23 09:07:22', '21815R43500_20005061_ON.PDF', '20005061_ON', '21815', '2 weeks'),
(56, '2021-04-23 09:08:19', '21819R43500_20005062_ON.PDF', '20005062_ON', '21819', '2 weeks'),
(59, '2021-05-14 11:24:02', '21855R43500_20005368_ON.pdf', '20005368', '21855', '29 April 2021'),
(60, '2021-05-14 11:24:02', '21857R43500_20005375_ON (002).pdf', '20005375 ON', '21857', '28 April 2021'),
(61, '2021-05-14 11:24:02', '21857R43500_20005376_ON (002).pdf', '20005376', '21857', '03 May 2021'),
(62, '2021-05-14 11:24:02', '21858R43500_20005373_ON (002).pdf', '20005373', '21858', ''),
(63, '2021-05-14 11:24:02', '21859R43500_20005374_ON.pdf', '20005374_ON', '21859', '27 April 2021'),
(64, '2021-05-14 11:24:02', '21876_R43500_20005372_ON.pdf', '20005372 ON', '21876', '17 May 2021'),
(66, '2021-05-14 11:24:02', 'R43500_20001145_OP.PDF', '20001145 0N', '21837', '29 April 2021'),
(69, '2021-05-14 11:47:18', 'R43500_20001292_OP.PDF', '20001292_OP', '21786', '30 April 2021'),
(70, '2021-05-14 11:47:18', 'R43500_20001380_OP.PDF', '20001380_OP', '21814', '10 May 2021'),
(71, '2021-05-14 11:47:18', 'R43500_20001457_OP.PDF', '20001457_OP', '21843', '15 May 2021'),
(72, '2021-05-14 11:47:18', 'R43500_20004925_ON.PDF', '20004925_ON', '21813', '30 May 2021'),
(73, '2021-05-14 11:47:18', 'R43500_20005061_ON.PDF', '20005061', '21815', '30 April 2021'),
(74, '2021-05-14 11:47:18', 'R43500_20005062_ON.PDF', '20005062_ON', '21819', ''),
(75, '2021-05-14 11:47:18', 'R43500_20005063_ON.PDF', '20005063 ON', '21816', '30 April 2021'),
(76, '2021-05-14 11:47:18', 'R43500__ON20005064.PDF', '20005064', '21818', '30 April 2021'),
(77, '2021-05-14 11:47:18', 'R43500_20005065_ON.PDF', '20005065_ON', '21842', '01 May 2021'),
(78, '2021-05-14 11:48:15', 'R43500_20005106_ON.PDF', '21829', '21829', '15 May 2021'),
(79, '2021-05-14 11:48:15', 'R43500_20005107_ON.PDF', '', '', ''),
(80, '2021-05-14 11:48:15', 'R43500_20005110_ON.PDF', '20005110_ON', '21791-1', '17 May 2021'),
(81, '2021-05-14 11:48:15', 'R43500_20005111_ON.PDF', '20005111_ON', '21791-1', '15 May 2021'),
(82, '2021-05-14 11:48:15', 'R43500_20005112_ON.PDF', '20005112_ON', '21836', '15 May 2021'),
(83, '2021-05-14 11:48:15', 'R43500_20005190_ON.PDF', '20005190_ON', '21821', '15 May 2021'),
(84, '2021-05-14 11:48:15', 'R43500_20005203_ON.PDF', '20005203_ON', '21864', '15 May 2021'),
(86, '2021-05-14 11:48:15', 'R43500_20005206_ON (002).PDF', '20005206_ON', '21822', '15 May 2021'),
(89, '2021-05-14 11:49:12', 'R43500_20005111_ON-1219979541.PDF', '20005111_ON', '21791-1', ''),
(90, '2021-05-14 11:49:12', 'R43500_20005112_ON-505621024.PDF', '20005112_ON', '21786', ''),
(91, '2021-05-14 11:49:12', 'R43500_20005190_ON-1260019887.PDF', '20005190_ON', '21821', '17 May 2021'),
(92, '2021-05-14 11:49:12', 'R43500_20005203_ON-190568490.PDF', '20005203_ON', '21864', '15 May 2021'),
(93, '2021-05-14 11:49:12', 'R43500_20005204_ON-722436049.PDF', '20005204_ON', '21823', '17 May 2021'),
(95, '2021-05-14 11:49:12', 'R43500_20005207_ON-1283979471.PDF', '20005207_ON', '21820', '5 May 2021'),
(96, '2021-05-14 11:49:12', 'R43500_20005210_ON.PDF', '20005210_ON', '21824', '15 May 2021'),
(97, '2021-05-14 11:49:12', 'R43500_20005214_ON.PDF', '20005214_ON', '21820', '5 May 2021'),
(98, '2021-05-14 11:50:13', 'R43500_20005366_ON.pdf', '20005366_ON', '21846', '15 May 2021'),
(100, '2021-05-14 11:50:13', 'R43500_20005367_ON.pdf', '20005367_ON', '21845', '15 May 2021'),
(101, '2021-05-14 11:50:13', 'R43500_20005373_ON.pdf', '20005373_ON', '21858', '15 May 2021'),
(102, '2021-05-14 11:50:13', 'R43500_20005375_ON.pdf', '20005375_ON', '21857', '17 May 2021'),
(103, '2021-05-14 11:50:13', 'R43500_20005376_ON.pdf', '20005376_ON', '21857', '17 May 2021'),
(104, '2021-05-14 11:50:13', 'R43500_C0025_577623_PDF.pdf', '20004825ON', '21805', '5 May 2021'),
(105, '2021-05-17 13:46:09', 'ConsoleOrder4501036696Ntpro Drive.PDF', '4501036696', '21889 AND 21890', '18 May 2021'),
(106, '2021-05-17 13:46:09', 'ConsoleOrder4501036889NtproDrive .PDF', '4501036889', '21888', '18 May 2021');

-- --------------------------------------------------------

--
-- Table structure for table `customer_qoutes`
--

CREATE TABLE `customer_qoutes` (
  `qoute_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `qoute_name` varchar(250) NOT NULL,
  `qoute_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `qoute_items` varchar(250) NOT NULL,
  `client_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_qoutes`
--

INSERT INTO `customer_qoutes` (`qoute_id`, `submitted_on`, `qoute_name`, `qoute_no`, `s_qoute_reference`, `qoute_items`, `client_name`) VALUES
(10, '2020-11-13 15:52:04', 'Speech.pdf', '', '20165', '', ''),
(11, '2020-11-13 15:54:12', 'Speech-1242127921.pdf', '', '', '', ''),
(13, '2020-11-13 19:05:14', 'Estimate_21650_2020-11-30.pdf', '21650', '21650', 'COC', 'Jerry'),
(21, '2020-11-17 13:53:03', 'Estimate_21653_2020-12-17.pdf', '21653', 'DAQT10127', '18 core x 0.75mm cable', 'Isanti Glass'),
(22, '2020-11-17 14:17:58', 'Estimate_21654_2020-12-17.pdf', '21654', '416966873', 'Helical-bevel gear unit KA57/A/T', 'Isanti Glass'),
(23, '2020-11-20 15:35:03', 'Estimate_21662_2020-12-20 (1).pdf', '21662', '21662', 'R47 DRN90S4/BE2HR', 'Twinsaver pta'),
(24, '2020-11-20 18:44:07', 'Estimate_21542-4_2020-12-20.pdf', '21664', '21542-4', 'RF77 DRN100LS4  ', 'National Ceramic Industries'),
(27, '2020-11-23 10:13:33', 'Estimate_21663_2020-12-22-1175484232.pdf', '21663', '21663', '22kw Motor', 'National Ceramic Industries'),
(29, '2020-11-23 17:06:02', 'Estimate_21664_2020-12-23.pdf', '21664', '21664', 'R37 DRN80M4/V', 'Isanti Glass'),
(30, '2020-11-23 17:48:05', 'Estimate_21661_2020-12-20.pdf', '21661', '21661', 'R67 DRN71M4/AL/DH', 'Twinsaver Kliprivier'),
(31, '2020-11-24 11:57:32', 'Estimate_21665_2020-12-24.pdf', '21665', '21665', 'GT25 and GT36', 'Isanti Glass'),
(32, '2020-11-25 08:11:15', 'Estimate_21666_2020-12-25.pdf', '21666', '21666', 'KA87/T DRN132S4  5.5kw', 'Isanti Glass'),
(33, '2020-11-26 09:41:12', 'Estimate_21667_2020-12-26.pdf', '417047323', '21667', 'Br.rectifier BG1,2', 'Isanti Glass'),
(34, '2020-11-26 09:42:22', 'Estimate_21668_2020-12-26.pdf', '417047205', '21668', 'Prefabricated cable', 'Isanti Glass'),
(35, '2020-11-27 13:01:21', 'Estimate_21670_2020-12-27.pdf', '', '21670', 'KA57 x5', 'Isanti Glass'),
(36, '2020-11-30 09:45:41', 'Estimate_21671_2020-12-30.pdf', '', '21671', 'SIMCO Power Supply A2A7S', 'Coca cola'),
(37, '2020-12-04 09:48:53', 'Estimate_21672_2020-12-31.pdf', '', '21672', 'Inductive sensor', 'Nestle'),
(38, '2020-12-04 09:49:04', 'Estimate_21673_2020-12-31.pdf', 'QUO62813', '21673', 'Cylindrical Photoelectric SensorsV18', 'Nestle'),
(39, '2020-12-04 09:49:14', 'Estimate_21674_2020-12-31.pdf', 'QUO62813', '21674', '25X160 STR D/A CUSH MAG CRIMP', 'Nestle'),
(40, '2020-12-04 09:49:24', 'Estimate_21675_2021-01-03.pdf', '', '21675', 'Programmable Geyser Timer ', 'Coca cola'),
(41, '2020-12-04 09:49:34', 'Estimate_21676_2021-01-02.pdf', 'speck pump', '21676', 'Speck Pump ', 'Coca cola'),
(42, '2020-12-04 09:49:46', 'Estimate_21677_2021-01-04.pdf', '', '21677', 'Hex Socket Button Screw ', 'consol'),
(46, '2020-12-04 10:28:37', 'Estimate_21678_2021-01-03.pdf', '', '21678', 'Labour for 2 Boilermakers 30 days', 'consol'),
(47, '2020-12-04 10:29:00', 'Estimate_21679_2021-01-03 (1).pdf', '417076998', '21679', 'Helical-bevel gearmotor KA37/T', 'Isanti Glass'),
(48, '2020-12-04 10:29:15', 'Estimate_21680_2021-01-03.pdf', ' SP-2020-106220', '21680', 'Connecting cable with socket:', 'Nestle'),
(49, '2020-12-08 16:03:26', 'Estimate_21682_2021-01-07 (1).pdf', '21682', '21682', 'KA67 DRS80S6BE2/TF/AL', 'Isanti Glass'),
(50, '2020-12-09 11:45:22', 'Estimate_21675_2021-01-03-810661627.pdf', '21675', '21675', '2 geyser timers', 'COCA COLA-VAPRE'),
(51, '2020-12-14 10:21:02', 'Estimate_21687_2020-12-31.pdf', '21687', '21687', 'BOREHOLES EARTHING', 'COCA COLA-VAPRE'),
(52, '2020-12-14 15:31:32', 'Estimate_21688_2021-01-13.pdf', '21688', '21688', 'Helical-bevel gearmotor KA97 DRN132S4/BE11HF', 'Isanti Glass'),
(53, '2020-12-16 16:24:01', 'Estimate_21689_2020-12-31.pdf', '21689', '21689', 'FA87/G DRN132S4', 'Isanti Glass'),
(54, '2020-12-17 08:40:32', 'Estimate_21690_2020-12-31.pdf', '21690', '21690', '40KVA ups repair', 'Isanti Glass'),
(55, '2020-12-17 11:40:11', 'Estimate_21691_2020-12-17.pdf', '21691', '21691', 'VSD and Keypad inclusive( Sew Pricelist used)', 'mclarencircus'),
(56, '2020-12-18 06:56:44', 'Estimate_21692_2020-12-31.pdf', '21692', '21692', 'KA47B DRN90L4', 'Isanti Glass'),
(57, '2021-01-04 16:40:21', 'Consol_21695_2021-01-31.pdf', '21695', '21695', 'MURR Parts ', 'Consol '),
(58, '2021-01-07 13:58:22', 'Estimate_21699_2021-02-06.pdf', '21699', '21699', 'UPS, Battery and Plugs', 'Cocacola Valpre'),
(59, '2021-01-08 10:37:28', 'Consol _21702_2021-01-31.pdf', '21702', '21702', 'Consol Project Number C.00232.05010.10.02', 'Consol '),
(62, '2021-01-08 10:58:14', 'Isanti_21588_2020-10-28 (1).pdf', '21588', '21588', 'Grundfor Multistage Pump', 'Isanti'),
(63, '2021-01-08 13:11:13', 'Estimate_21700_2021-02-06.pdf', '21700', '21700', 'Multipole Connectors', 'Isanti glass'),
(65, '2021-01-08 13:40:33', 'Isanti_21701_2021-01-31 (2).pdf', '21701', '21701', 'Brake BE1B/10Nm/60AC/24DC & Man. brake rel.kit BE05/1 HF NBR &1 Brake control BSG 24 V', 'Isanti'),
(66, '2021-01-13 11:20:32', 'Estimate_21623_2021-01-31.pdf', '21623', '21623', 'K87 DRN132S4/BE11 -525V', 'Twinsaver Kliprivier'),
(67, '2021-01-20 10:42:48', 'Estimate_21710_2021-01-31.pdf', '', '21710', 'delivered 20/01/2021  by KG  R37 DRN71M4', 'Isanti Glass'),
(68, '2021-01-21 04:25:08', 'Estimate_21680-3_2021-02-19.pdf', '21680-3', '21680', 'Nestle labour and parts', 'Nestle'),
(69, '2021-01-21 04:25:08', 'Estimate_21680-2_2021-02-19.pdf', '21680-2', '21680', 'Nestle labour and parts', 'Nestle'),
(70, '2021-01-21 04:25:08', 'Estimate_21680-1_2021-02-19.pdf', '21680-1', '21680', 'Nestle labour and parts', 'Nestle'),
(71, '2021-01-21 18:15:34', 'Estimate_21717_2021-02-20.pdf', '21717', '21717', 'Meter project labour', 'Cocacola Midrand'),
(72, '2021-01-21 18:16:15', 'Estimate_21718_2021-02-21.pdf', '21718', '21718', 'Meter project Supply', 'Cocacola Midrand'),
(73, '2021-01-21 18:18:08', 'Estimate_21716_2021-02-21.pdf', '21716', '21716', 'danfoss drives and LCP, ifm sensor', 'Consol'),
(74, '2021-01-21 22:11:55', 'Consol_21714_2021-02-21 (1).pdf', '21714', '21714', 'OFLEX FD CLASSICS ', 'CONSOL'),
(75, '2021-01-22 14:56:39', 'Estimate_21720_2021-02-22.pdf', '21720', '21720', 'banner sensors', 'Consol'),
(76, '2021-01-26 12:18:39', 'Consol_21722_2021-02-26.pdf', '21722', '21722', 'TR Encoder CEV65M-01460', 'Consol'),
(77, '2021-01-26 12:58:54', 'Estimate_21677_2021-01-04-467243245.pdf', '21677', '21677', 'Plain Ladder accessories', 'Consol'),
(78, '2021-01-26 17:38:28', 'Estimate_21494_2021-02-26 (1).pdf', '21494', '21494', 'Compressor Energy Saving', 'COCA COLA-VAPRE'),
(79, '2021-01-26 17:38:28', 'Estimate_21488_2021-02-26 (1).pdf', '21488', '21488', 'Energy saving with Night switches', 'COCA COLA-VAPRE'),
(80, '2021-01-27 13:59:46', 'Estimate_21724_2021-02-27.pdf', '21724', '21724', 'Siemens GearBox and Motor', 'BMGWorld'),
(81, '2021-01-29 12:39:27', 'CCBSA_21727_2021-02-28.pdf', '21727', '21727', 'Welding Machine; Leather Welding Apron; Welding Gloves ', 'Coca Cola '),
(82, '2021-01-29 13:45:52', 'Estimate_21728_2021-02-28.pdf', '21728', '21728', '*5 Roller brushes *5 Roller Sticks', 'Coca Cola'),
(83, '2021-01-29 17:18:04', 'Estimate_21729_2021-02-26.pdf', '21729', '21729', 'KH77CMPZ71', 'Isanti Glass'),
(84, '2021-01-30 10:16:50', 'Estimate_21730_2021-02-26.pdf', '21730', '21730', 'K77 DRN100L4/BE5', 'Haver boecker'),
(85, '2021-02-01 09:55:56', 'Estimate_21726_2021-02-28.pdf', '21726', '21726', 'panel building labour only', 'Consol'),
(86, '2021-02-03 15:29:40', 'Consol_21733_2021-03-03.pdf', '21733', '21733', 'Ã–LFLEX FD 855 CP 25G0,5', 'Consol '),
(88, '2021-02-08 10:21:20', 'Estimate_21736_2021-03-08.pdf', '21376', '21736', 'converting proTool project to winCC flex SP2& SP3, then to TIA , to communicate with S7 300 PLC and download', 'CONSOL'),
(89, '2021-02-08 10:45:36', 'Estimate_21737_2021-03-08.pdf', '21737', '21737', 'Helical gearmotor ', 'Isanti Glass'),
(90, '2021-02-08 15:14:36', 'Estimate_21739_2021-03-08.pdf', '21739', '21739', 'ACS150-01E-02A4-2, 0.37kW 2.4A 200-240V', 'Zibo Containers'),
(91, '2021-02-10 14:35:07', 'Estimate_21743_2021-03-10.pdf', '21743', '21743', 'Magnetic Vibrator', 'Isanti Glass'),
(92, '2021-02-12 12:23:06', 'Estimate_21744_2021-03-12.pdf', '21744', '21744', '80MM ANGLE CONTROL VALVE C/W ACTUATOR & POSITIONER Repairs', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(93, '2021-02-15 09:58:39', 'Estimate_21746_2021-03-15.pdf', '21746', '21746', 'High energy saving motor ie3', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(94, '2021-02-15 09:59:54', 'Estimate_21745_2021-03-12.pdf', '21745', '21745', 'profibus connector', 'Isanti Glass'),
(95, '2021-02-15 10:01:13', 'Estimate_21740_2021-03-09.pdf', '21740', '21740', 'ACS150-01E-04A7-2, 0.75kW 4.7A 200-240V', 'Zibo Containers'),
(96, '2021-02-15 10:02:45', 'Estimate_21738_2021-03-08.pdf', '21738', '21738', 'MECER USB HEADPHONE WITH MICROPHONE Model/Sku: S-EK3-U03BK', 'Isanti Glass'),
(97, '2021-02-15 10:04:01', 'Estimate_21739_2021-03-08-343346894.pdf', '21739', '21739', 'ACS150-01E-02A4-2, 0.37kW 2.4A 200-240V', 'Zibo Containers'),
(98, '2021-02-15 14:17:07', 'Estimate_21747_2021-03-30.pdf', '21747', '21747', 'Labor to work in Nigeria 4 electricians', 'Consol'),
(99, '2021-02-15 15:24:03', 'Estimate_21749_2021-03-30.pdf', '21749', '21749', 'Dust collect TR 59 _ price came from Stanley on whats up', 'Washa'),
(100, '2021-02-15 15:26:32', 'Estimate_21748_2021-03-15.pdf', '21748', '21748', 'Omron, 24V dc Coil Non-Latching Relay DPDT, 5A Switching Current Plug In Part No : G2R-2-SNDI 24DC(S)', 'Isanti Glass'),
(101, '2021-02-15 16:24:44', 'Estimate_21750_2021-03-15 (1).pdf', '21750', '21750', 'Cold end conv stripping', 'Consol'),
(102, '2021-02-17 11:33:13', 'Estimate_21751_2021-03-15.pdf', '21751', '21751', 'Guroflex MV-1000', 'CTM'),
(103, '2021-02-17 11:34:49', 'Estimate_21752_2021-03-17.pdf', '21752', '21752', '1 SINGLE PHASE SUBMERGIBLE PUMP HT V2200F 2.2KW 2860 RPM 230V', 'Isanti Glass'),
(104, '2021-02-17 12:42:24', 'Estimate_21570-1_2021-03-17.pdf', '21570-1', '21570-1', 'Helical gearmotor KA87', 'Isanti Glass'),
(105, '2021-02-18 09:26:31', 'Estimate_21755_2021-03-18.pdf', '21755', '21755', '37kw from weg', 'Twinsaver Kliprivier'),
(109, '2021-02-22 10:50:27', 'Estimate_21757_2021-03-19.pdf', '21757', '21757', 'Helical-bevel gearmotor KA77 DRN132S4', 'Isanti Glass'),
(110, '2021-02-23 12:51:54', 'Estimate_21759_2021-03-23.pdf', '21759', '21759', 'Helical-bevel gearmotor KA37/T DRN90S4', 'Bheki(Isanti)'),
(111, '2021-02-23 16:33:38', 'Estimate_21752_2021-03-17-230574680.pdf', '21752', '21752', 'VH2200 pumps', 'Isanti Glass'),
(113, '2021-03-01 14:08:58', 'Estimate_21766_2021-03-31.pdf', '21766', '21766', 'KA37DRN80MK4/BE1', 'COCA COLA-DVL'),
(114, '2021-03-01 15:30:08', 'Estimate_21767_2021-04-30.pdf', '_21767', '_21767', 'RX57 DRN90L4', 'Isanti Glass'),
(115, '2021-03-01 16:08:29', 'Estimate_21765_2021-03-31.pdf', '21765', '21765', 'Weg Nema Motor', 'mpact'),
(116, '2021-03-01 16:08:58', 'Estimate_21768_2021-04-01.pdf', '21765', '21768', 'Absolute encoder AS3H SFM60-HZZ0-S03 Part no: 13639935', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(117, '2021-03-02 11:32:38', 'Estimate_21770_2021-04-02.pdf', '21770', '21770', 'Controll Heads repairs', 'Zibo Containers'),
(118, '2021-03-02 13:19:57', 'Estimate_21771_2021-04-02.pdf', '21771', '21771', 'led Tubes', 'COCA COLA-VAPRE'),
(119, '2021-03-02 13:39:05', 'Estimate_21772_2021-03-31.pdf', '21772', '21772', 'DOL Starter', 'COCA COLA-VAPRE'),
(120, '2021-03-02 14:05:47', 'Estimate_21773_2021-04-02.pdf', '21773', '21773', 'SOLENOID VALVE 740BV - NO COIL TYPE 740 5/2 N/COIL S/SOL 8X1', 'Isanti Glass'),
(122, '2021-03-02 14:39:03', 'Estimate_21774_2021-04-02.pdf', '21774', '21774', 'Ethernet cable plugged on both ends', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(123, '2021-03-02 14:48:51', 'Estimate_21775_2021-04-02.pdf', '21775', '21775', 'Shelly 1 WiFi-operated Relay Switch Power supply AC - 110-230V Â±10%, 50/60Hz Power supply DC - 12V, 24 â€“ 60V Maximum load - 16A Intelligent On/Off - Yes', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(124, '2021-03-02 16:03:03', 'Estimate_21758_2021-03-22.pdf', '21758', '21758', 'Multiple items ,cables', 'Isanti Glass'),
(125, '2021-03-04 13:13:57', 'Estimate_21421-2_2021-03-31 (1).pdf', '21421', '21421', 'Pressure Switch', 'Isanti Glass'),
(126, '2021-03-05 13:09:38', 'Estimate_21780_2021-04-05.pdf', '21780', 'NT21780', 'Model PSD-4 WIKA electronic pressure switch with display, 0...250 bar', 'Mtshali, Musa -Isanti Glass'),
(127, '2021-03-08 16:08:57', 'Estimate_21785_2021-04-08.pdf', '21785', '21785', 'SOL VALVE - OPTYMA-F 5/2 SOL SPRING /14\" 24 VDC Part no: 2531.52.00.39.02,CLOSED RIGHT END PLATE OPTYMA-F Part no: 2530.03.00', 'Coca Cola Waideville'),
(128, '2021-03-10 15:47:01', 'Estimate_21786_2021-04-10.pdf', 'NT21786', '21786', 'CE SICK SENSOR FOR SHUTTLE CAR Safety laser scanners S30A-4011BA Safety laser scanners S3000 Standard Protective field range 4 m Scanning angle 190 Number of fields 4 S3000 Standard | Protective field range: 4 m | Scanning angle: 190Â° | Number of fi', 'Isanti Glass - DIMAKATSO'),
(129, '2021-03-11 11:08:38', 'Estimate_21787_2021-04-11.pdf', '21787', '21787', 'LEHR BRIDGE AXIAL FAN 380-400V PMLDAG45/99/22Â°/4/A/0.37kWTFS-Plate Mount Axial Fan', 'Isanti Glass'),
(130, '2021-03-12 09:29:54', 'Estimate_21546_2021-03-31.pdf', '21546', '21546', '1600M 18 LINE FARM FENCE', 'COCA COLA-VAPRE'),
(131, '2021-03-12 09:29:54', 'Estimate_21548_2021-03-31.pdf', '21548', '21548', '1600M 6LINE FENCE INNER-Plant', 'COCA COLA-VAPRE'),
(132, '2021-03-12 13:37:03', 'Estimate_21788_2021-04-12.pdf', '21788', '21788', 'PVC Insulation Tape 19mmx10m Red, Black, White, Yellow 5 of each, Energizer Max 9V PP3 Alkaline Battery,', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(133, '2021-03-15 14:06:04', 'Estimate_21790_2021-04-15.pdf', '21790', '21790', 'Finder, 24V ac Coil Non-Latching Relay DPDT, 8A Switching Current PCB Mount, 2 Pole 8Pins', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(134, '2021-03-15 15:17:33', 'Estimate_21777.pdf', '21777', 'NT21777', 'FOOT MOUNTED INDUCTION MOTOR 2.2kW 2P 230/400V 90L MOTOR WEG W22 IE3 stock code : 014808366', 'Isanti Glass'),
(135, '2021-03-16 11:26:01', 'Estimate_21796_2021-04-04 (2).pdf', '21796', '21796', 'Pressure Switch 0---10 bar', 'Isanti Glass '),
(136, '2021-03-16 11:26:01', 'Estimate_21797_2021-04-04 (1).pdf', '21797', '21797', 'Pressure Switch 0---1 bar', 'Isanti Glass'),
(137, '2021-03-16 11:26:01', 'Estimate_21780_2021-03-31 (1).pdf', '21780', '21780', 'Pressure Switch 0---250 bar', 'Isanti Glass'),
(138, '2021-03-17 12:37:44', 'Estimate_21802_2021-04-17.pdf', 'NT21802', '21802', 'Brake chopper', 'Gcina - Consol'),
(139, '2021-03-18 12:09:29', 'Estimate_21803_2021-04-18.pdf', '21803', '21803', 'Fluke 437 Power Quality Analyser', 'Isanti Glass - Musa'),
(140, '2021-03-19 10:09:08', 'Estimate_21804_2021-03-31.pdf', 'NTPRO LABOUR', '21804', 'FA87 REPAIRS', 'Isanti Glass'),
(141, '2021-03-23 09:55:20', 'Estimate_21799_2021-03-31.pdf', '21799', '21799', 'Complete Brake. Brake BE1B/5Nm/400AC/180DC', 'UNILEVER'),
(142, '2021-03-23 09:56:35', 'Estimate_21800_2021-03-31 (1).pdf', '21800', '21800', 'Geared Motor SA57 DRN80M4/BE1HR/TF Speed:1440 / 50 Ratio:29,00 / finite Hollow shaft : 35mm Motor power [kW] : 0.75 Voltage range [V] : 230/400 star Brake voltage : 400 AC / 10 Brake rectifier : BGE1.5 Motor protection : TF = PTC Temperature sensor', 'Unilever South Africa (Pty) Ltd'),
(143, '2021-03-23 11:27:00', 'Estimate_21805_2021-04-23.pdf', '78796566', '21805', '1 SAF.MOD.EXT.UNIT.8N.O 24V AC/ DC Part no : XPSECPE5131P', 'Isanti Glass'),
(144, '2021-03-23 12:12:39', 'Isanti_21791_2021-03-31.pdf', '20004747', '21791', 'Geared Motor for repairs RF box Motor: 1.1kw 4pole Voltage:230/400vgh', 'ISANTI'),
(145, '2021-03-24 15:07:50', 'Estimate_21806_2021-04-24.pdf', 'QUO64666', '21806', 'Compact photoelectric sensors WL280-2P2431', 'Isanti Glass - Gugu'),
(146, '2021-03-24 16:26:39', 'Estimate_21807_2021-04-24.pdf', '417504228', '21807', '6*( PC 22.718,45 136.310,70 Parallel shaft helical gearmotor FA67 DRN90L4)', 'Isanti Glass - Gugu'),
(147, '2021-03-29 09:45:00', 'Estimate_21814_2021-04-29.pdf', '21814', '21814', 'VEGAVIB 63 Net price 15 767,50 15 767,50 VB63.XXAGCRKMX eID: ZC117757989', 'Isanti Glass - Gugu'),
(148, '2021-03-31 05:48:52', 'Estimate_RP 43_21825.pdf', 'RP 43_21825', '21825', 'KA37/A', 'Isanti Glass'),
(149, '2021-03-31 05:48:52', 'Estimate_RP 44_21824.pdf', 'RP 44_21824', '21824', 'KA37/TDT80K4/MM07/BW1', 'Isanti Glass'),
(150, '2021-03-31 05:48:52', 'Estimate_RP-41-42_21823.pdf', 'RP-41-42_21823', '21823', 'KA37/TDT71D4/MM05/BM1', 'Isanti Glass'),
(151, '2021-03-31 05:48:52', 'Estimate_RP 39_21815.pdf', 'RP 39_21815', '21815', 'KA37/TDT71D4/MM05/BM1', 'Isanti Glass'),
(152, '2021-03-31 05:48:52', 'Estimate_RP38_21816.pdf', 'RP38_21816', '21816', 'KA37/A', 'Isanti Glass'),
(153, '2021-03-31 05:48:52', 'Estimate_RP36_21818.pdf', 'RP36_21818', '21818', 'SA47/A', 'Isanti Glass'),
(154, '2021-03-31 05:48:52', 'Estimate_RP34_21819.pdf', 'RP34_21819', '21819', 'KA37DT90S4/TF', 'Isanti Glass'),
(155, '2021-03-31 05:48:52', 'Estimate_RP35_21820.pdf', 'RP35_21820', '21820', 'KA37/TDR63L4', 'Isanti Glass'),
(156, '2021-03-31 05:48:52', 'Estimate_RP40_21821.pdf', 'RP40_21821', '21821', 'KA37/TDT71D4/MM05/BM1', 'Isanti Glass'),
(157, '2021-03-31 05:48:52', 'Estimate_RP37_21822.pdf', 'RP37_21822', '21822', 'KA37/A', 'Isanti Glass'),
(160, '2021-03-31 14:59:55', 'Estimate_21827_2021-04-30.pdf', '21827', '21827', ' CIRCUIT BREAKER MOTOR 2.5-4A MOELLER:PKZM1-2.5-4AMP OVERLOAD', 'Isanti Glass - DIMAKATSO'),
(161, '2021-03-31 16:33:00', 'Estimate_21826_2021-04-30.pdf', '21826', '21826', 'ms Quantity Price Amount 1 GEMINI S02055 Sliding Gate Wheel Kit (80mm)', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(162, '2021-04-12 15:00:07', 'Estimate_21835_2021-05-12.pdf', '21835', '21735', 'Inverter / options MC07B0011-5A3-4-00', 'CONSOL'),
(163, '2021-04-12 15:00:07', 'Estimate_21836_2021-04-12.pdf', '21836', '21736', 'VIBRATOR MOTOR MVE 2400/15E-60A0 220-240/380-415V 50Hz', 'Isanti Glass'),
(164, '2021-04-12 15:00:07', 'Estimate_21837_2021-04-12.pdf', '21837', '21837', 'Helical-bevel gearmotor KA67 DRS112M8/2/2W E150.299', 'Unilever South Africa (Pty) Ltd'),
(165, '2021-04-14 08:14:15', 'Estimate_21838_2021-04-30.pdf', '21838', '21838', 'SUPPLIED ON BREAKDOWN MOVIDRIVE 5.5KW ', 'BOSUN BRICK MIDRAND'),
(166, '2021-04-14 12:16:53', 'Estimate_21839_2021-05-14.pdf', '21839', '21839', 'Connecting cables YF2A28-300VA6XLEAX * 3 different sizes', 'Isanti - Aupa '),
(167, '2021-04-14 15:51:09', 'Estimate_21841_2021-04-14.pdf', '21841', '21841', 'Multiple items', 'Isanti Glass'),
(168, '2021-04-14 16:18:45', 'Estimate_21842_2021-05-14.pdf', '21842', '21842', 'Ide external HARDDRIVES 120GB * 20 ', 'Isanti - Johnson Mathew'),
(169, '2021-04-15 10:11:33', 'Estimate_21843_2021-05-15.pdf', '21843', '21843', '*2  MS7 VIBRATOR MOTOR', 'Isanti Glass - DIMAKATSO'),
(170, '2021-04-16 13:26:10', 'Estimate_21845_2021-05-16.pdf', '21845', '21845', 'Fan guard DR90 BE', 'Isanti Glass - Aupa'),
(171, '2021-04-16 13:26:21', 'Estimate_21846_2021-05-16.pdf', '21846', '21846', 'Fan guard DRN100/DR100', 'Isanti - Aupa '),
(173, '2021-04-20 12:13:46', 'Estimate_21855_2021-05-20.pdf', '21855', '21855', 'Siemens - Battery For use with: PS 405/PS 407 Power Supply Mfr. Part No.:6ES7971-0BA00', 'Isanti - Aupa '),
(174, '2021-04-23 11:08:56', 'Estimate_21862_2021-05-21.pdf', '21862', '21862', 'MOVIDRIVE MDX61B0075-5A3-4-00 Repairs', 'Zibo Containers'),
(175, '2021-05-06 09:11:18', 'CCBSA_21898_2021-05-06.pdf', '21898', '21898', '1 TP Link RE450 AC1750 Wi-Fi range extender QUOTE WITH NATHI', 'CCBSA'),
(176, '2021-05-07 12:08:15', '8000275131_SupplierResponses SASOL.pdf', 'nt2884', 'NT2884', 'Revcon Power Supply  Collect, Strip & Quote', 'Sasol'),
(177, '2021-05-11 15:38:57', 'Estimate_21892_2021-06-30.pdf', 'SEW 0417697936', 'nt21892', 'CMP50L/BK/PK/AK0H/SB1', 'SASOL MIDLAND'),
(178, '2021-05-12 13:39:56', 'CCBSA_21894_Supply & Fit of Vega Tray.pdf', 'BAJWADI BA PEU', 'NT21894', 'SUPPLY & FIT OF VEGA TRAY', 'CCBSA PROJECT BY BAJWADI'),
(179, '2021-05-12 13:40:06', 'CCBSA_21895_Supply of Turpentine Container.pdf', 'BAJWADI BA PEU', 'NT21895', 'SUPPLY OF TURPENTINE COTAINER ', 'CCBSA PROJECT BY BAJWADI'),
(180, '2021-05-12 13:40:14', 'CCBSA_21896_Supply & Fit Covers Around Change Parts.pdf', 'BAJWADI BA PEU', 'NT21896', 'SUPPLY & FIT COVERS AROUND CHANGE PARTS ', 'CCBSA PROJECT BY BAJWADI'),
(181, '2021-05-12 13:40:40', 'CCBSA_21898_Supply of PPE Container.pdf', 'BAJWADI BA PEU', 'NT21898', 'PROJECT SUPPLY OF PPE CONTAINER', 'CCBSA PROJECT BY BAJWADI'),
(182, '2021-05-12 16:21:01', 'CCBSA_21897_Cleaning Hose.pdf', 'NT21897', '21897', 'HOSE REEL, RETRACTABLE, SS, 3/8 HOSE, 400 BAR', 'Coca-Cola Beverages South Africa (Pty) Ltd'),
(183, '2021-05-17 13:42:19', 'Estimate_21905_2021-06-17.pdf', 'NT21905', '21905', 'SIMATIC HMI KTP1200 with DP SIMATIC HMI, KTP1200 withDP, Panel, Key/touch operation, 12\" TFT display, 65536 colors, PROFIBUS interface,', 'Isanti Glass - Gugu'),
(184, '2021-05-20 14:43:46', 'Estimate_21911_2021-06-20.pdf', '21911', '21911', 'PCB wiring MLK30/BG1/1/kpl.', 'Unilever South Africa (Pty) Ltd'),
(185, '2021-05-24 15:32:47', 'Estimate_21919_2021-06-24.pdf', '21919', '21919', 'Encoder plug 623 Plug cpl. 12polig Signal', 'Zibo Containers - Theresa'),
(186, '2021-05-27 10:51:25', 'Estimate_21924_2021-05-27.pdf', '21924', '21924', 'KH47/AR Parts for Repairs ', 'Zibo Containers - Enock'),
(187, '2021-06-03 13:22:45', 'Estimate_21938_2021-07-03.pdf', '21938', '21938', 'Gear Motor Repairs for : KA37 DT90S4/TF', 'Isanti Glass'),
(188, '2021-06-03 13:22:45', 'Estimate_21939_2021-07-03.pdf', '21939', '21939', 'Repairs to KA37 DT80K4/MMO7', 'Isanti Glass'),
(189, '2021-06-03 13:22:45', 'Estimate_21940_2021-07-03.pdf', '21940', '21940', 'SA57 DRN80M4 - Repairs', 'Isanti Glass'),
(191, '2021-06-04 14:57:08', 'Estimate_21944_2021-07-04.pdf', '21944', '21944', 'EF96 ELECTR O/L 36.100A', 'Isanti Glass - Thulani'),
(193, '2021-06-04 15:10:28', 'Estimate_21945_2021-07-04.pdf', '21945', '21945', 'Helical gearmotor R27 DRN80M4', 'Zibo Containers'),
(194, '2021-06-07 09:34:20', 'Estimate_21943_2021-07-07.pdf', '21943', '21943', 'ABB Contactor AF116-30-00-12', 'Isanti Glass - Thulani'),
(195, '2021-06-09 13:42:30', 'Estimate_21964_2021-07-09.pdf', '21964', '21964', 'SINGLE PHASE SUBMERGIBLE PUMP HT', 'Isanti Glass - DIMAKATSO'),
(196, '2021-06-09 13:50:07', 'SINGLEPHASESUBMERGIBLEPUMPHT.pdf', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplierstbl`
--

CREATE TABLE `supplierstbl` (
  `supplier_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `Person_name` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_deliverynotes`
--

CREATE TABLE `supplier_deliverynotes` (
  `deliverynote_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `deliverynote_name` varchar(250) NOT NULL,
  `deliverynote_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `delivered_itemsdescription` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_deliverynotes`
--

INSERT INTO `supplier_deliverynotes` (`deliverynote_id`, `submitted_on`, `deliverynote_name`, `deliverynote_no`, `s_qoute_reference`, `delivered_itemsdescription`) VALUES
(8, '2021-03-05 10:20:28', '21739DN9771.pdf', '2103017', '21739', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_invoices`
--

CREATE TABLE `supplier_invoices` (
  `invoice_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_name` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `supplier_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_invoices`
--

INSERT INTO `supplier_invoices` (`invoice_id`, `submitted_on`, `invoice_name`, `invoice_no`, `s_qoute_reference`, `supplier_name`) VALUES
(9, '2020-11-27 09:28:37', '.pdf', ' P00011', 'NT21614', 'SAW AFRICA'),
(10, '2020-12-14 10:42:32', '.pdf', '901476', '901476', 'Pumps for Africa'),
(11, '2020-12-14 10:46:04', '.pdf', '901478', '901478', 'Pumps for Africa'),
(12, '2020-12-14 10:56:49', '.PDF', '901468', '901468', 'FESTO'),
(13, '2020-12-14 10:58:32', '.pdf', '', '', 'Piab'),
(14, '2020-12-14 11:02:14', '.pdf', '901474', '901474', 'Dayroux Africa'),
(17, '2020-12-23 17:45:02', '.pdf', '800859', '', 'IFM'),
(18, '2021-01-08 12:08:54', '.pdf', 'INV0010534', '901492', 'Pumps For Africa '),
(19, '2021-01-11 08:06:00', 'Getting started with OneDrive.pdf', '', '', ''),
(21, '2021-01-15 12:42:30', 'Piab_23628.pdf', '', '', ''),
(22, '2021-01-18 22:46:20', 'Pumps For Africa - INV0010617.pdf', 'INV0010617', 'NT21592', 'Pumps For Africa '),
(23, '2021-01-19 16:46:35', 'Inv0010617Pumps4africa.PDF', 'Inv0010617P', '21592', 'Pumps For Africa '),
(24, '2021-01-19 16:47:48', '841104361SEW.PDF', '841104361', '21501-1', 'SEW'),
(25, '2021-03-05 10:23:41', '21739INV_2103017.pdf', '2103017', '21739', 'ppetech');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_purchaseorders`
--

CREATE TABLE `supplier_purchaseorders` (
  `purchaseorder_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `supplier_name` varchar(250) NOT NULL,
  `order_name` varchar(250) NOT NULL,
  `order_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `expecteddeliverydate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_purchaseorders`
--

INSERT INTO `supplier_purchaseorders` (`purchaseorder_id`, `submitted_on`, `supplier_name`, `order_name`, `order_no`, `s_qoute_reference`, `expecteddeliverydate`) VALUES
(9, '2020-11-20 09:46:35', 'Pumps for Africa', 'PO NT21648- PumpforAfrica.pdf', '20003092', '21648', '13 November 2020'),
(10, '2020-11-25 12:59:48', 'SEW', 'PO NT21661-SEW.pdf', 'MG 825', '21661', '30 November 2020'),
(11, '2020-11-27 10:08:00', 'Dayroux Africa', 'PO NT21653-Dayroux Africa.pdf', '20003185', 'NT21653', '20 November 2020'),
(12, '2020-12-01 11:19:37', 'SEW', 'PO NT21664-SEW.pdf', '20203333', 'NT21664', '7 December 2020'),
(13, '2020-12-01 12:23:29', 'SEW', 'PO NT21666-SEW.pdf', '20000961', 'NT21666', 'to be confirmed'),
(14, '2020-12-04 11:12:06', 'IFM', 'PO NT21680-IMF.pdf', '', '21680', ' not invoiced-project'),
(15, '2020-12-04 11:14:08', 'SEW', 'PO NT21679-SEW.pdf', '20003408', '0 417076998', '8 December 2020'),
(16, '2020-12-04 11:17:18', 'SEW', 'PO NT21670-SEW.pdf', '', '21670', '8 December 2020'),
(17, '2020-12-08 12:42:43', 'SEW', 'PO NT21679-SEW-416886553.pdf', 'NT21679', '21679', '15 December 2020'),
(18, '2020-12-23 13:38:13', 'Sick Automation', 'PO NT21686.pdf', 'NT21686', '21686', 'Mid Jan'),
(19, '2021-01-12 23:21:32', 'SEW ', '417133256- SEW.pdf', '21692', 'NT21692', ''),
(20, '2021-01-22 11:54:15', 'IFM', 'IFMPurchaseOrder21707.pdf', 'BG-2020-106880', '21707', '06/02/2021'),
(22, '2021-02-25 16:08:31', 'SEW', 'PO NT21570-1-SEW.pdf', ' NT21570-1', '21750-1', 'mid-march'),
(23, '2021-02-25 16:40:49', 'SEW', 'PO NT21737-SEW.pdf', 'NT21737', '21737', 'mid-march'),
(25, '2021-03-01 14:07:45', 'HELUKABEL', 'PO NT21758cables.pdf', 'N21758', '21758', '01/03/2021'),
(26, '2021-03-02 14:46:08', 'SEW', 'NT21712-1_SEW.pdf', 'N21712-1', '21712-1', '15/03/2021'),
(27, '2021-03-03 16:36:27', 'SEW', 'PO NT21757-SEW.pdf', 'NT21757', '21757', '17/03/2021'),
(28, '2021-03-08 11:40:08', 'SEW', 'PO NT21759-SEW417373747.pdf', 'NT21759', '21759', '30 March 2021'),
(29, '2021-03-12 09:38:40', 'ZEST WEG ELECTRIC (PTY) LTD', 'ZESTWEGPONT21777.pdf', 'NT21777', '21777', '16/03/2021.'),
(30, '2021-03-18 10:26:59', 'VSR(Valve Service and  Repairs)', 'PONT21744VSR.pdf', '21744', '21744', '16/03/2021'),
(31, '2021-04-07 10:29:07', 'Schneider Electric', 'PONT21805Schneider.pdf', '21805', '21805', ''),
(32, '2021-04-07 10:32:59', 'SICK AUTOMATION', 'PONT21786-SICKAUTOMATION.pdf', 'NT21786', '21786', '30 March 2021'),
(33, '2021-04-07 11:13:00', '', 'PO NT21817-PPE.pdf', '', '', ''),
(34, '2021-04-20 16:24:22', 'IMF', 'PO NT21813-IMF Part1.pdf', 'SP-2021-108646', '21813', '2-3'),
(35, '2021-04-20 16:24:22', 'IMF', 'PO NT21813-IMF Part2.pdf', 'MM-2021-110054', '21813', '2-3 weeks'),
(36, '2021-04-20 16:54:19', 'CFW', 'PONT21787-cfw.pdf', '21787', '21787', '30/04/2021'),
(37, '2021-04-20 16:54:19', 'VEGA', 'PONT21814-VEGA.pdf', '926354', '21814', '30/04/2021'),
(38, '2021-04-23 12:46:43', 'SEW', 'PONT21819-SEW.pdf', '21819', '21819', '28/04/2021'),
(39, '2021-04-23 12:46:43', 'SEW', 'PONT21862-SEW.pdf', '21863', '21862', '28/04/2021'),
(40, '2021-05-03 14:48:06', 'SICK AUTOMATION', 'PONT21849-SICKAUTONMATION.pdf', 'NT21849', '21849', '30/05/2021'),
(41, '2021-05-04 14:54:31', 'IFM', 'PO NT21813-IMF Part1-1016343355.pdf', '', '21813', '15/05/2021'),
(42, '2021-05-04 14:54:31', 'IFM', 'PO NT21813-IMF Part2-1869363807.pdf', '', '21813', '15/05/2021'),
(43, '2021-05-04 14:54:31', 'BMG', 'PO NT21815-BMG.pdf', '', '21818-1-', '15/05/2021'),
(44, '2021-05-04 14:54:31', 'Bearing Man Group', 'PO NT21818-1-BMG.pdf', '', '21818-1-', '15/05/2021'),
(45, '2021-05-04 14:54:31', 'VEGA', 'PO NT21818-1-VEGA.pdf', '', '21818', '15/05/2021'),
(46, '2021-05-04 14:54:31', 'Bearing Man Group', 'PO NT21818-BMG.pdf', '', '21818', '30/05/2021'),
(47, '2021-05-04 14:54:31', 'cfw', 'PONT21787-cfw-334307051.pdf', '', '21787', '15/05/2021'),
(48, '2021-05-04 14:54:31', 'IGSA', 'PONT21791-1-IGSA.pdf', '', '21791-1', '15/05/2021'),
(49, '2021-05-04 14:54:31', 'VEGA', 'PONT21814-VEGA-119093042.pdf', '', '21814', '15/05/2021'),
(50, '2021-05-04 14:55:35', 'BMG', 'PONT21818BMG.pdf', '', '21818', '15/05/2021'),
(51, '2021-05-04 14:55:35', 'SEW', 'PONT21819-SEW-1071396529.pdf', '', '21819', '15/05/2021'),
(52, '2021-05-04 14:55:35', 'SEW', 'PONT21829-SEW.pdf', '', '21829', '15/05/2021'),
(53, '2021-05-04 14:55:35', 'RegalBeloitSA', 'PONT21836-RegalBeloitSA.pdf', '', '21836', '15/05/2021'),
(54, '2021-05-04 14:55:35', 'jOEST VIBRATING SYSTEMS', 'PONT21843-JOEST.pdf', '', '21843', '15/05/2021'),
(55, '2021-05-04 14:55:35', 'SICK AUTOMATION', 'PONT21849-SICKAUTONMATION-1886022301.pdf', '', '21849', '15/05/2021'),
(56, '2021-05-04 14:55:35', 'SEW', 'PONT21862-SEW-2095875051.pdf', '', '21862', '15/05/2021'),
(57, '2021-05-04 14:55:35', 'SEW', 'PONT21869-SEW.pdf', '', '21869', '15/05/2021'),
(58, '2021-05-04 14:55:35', 'ZEST WEG ELECTRIC (PTY) LTD', 'PONT93222-ZESTWEGGROUP.pdf', '', '93222', '15/05/2021'),
(59, '2021-05-14 12:51:44', 'BAJWADI BA PEU ', 'PO  NT21563-1 - Bajwadi.pdf', 'NTPRO -712/05', '21563-1', ''),
(60, '2021-05-19 11:06:30', 'SEW', 'PONT21845-SEW.pdf', 'NT21845', '21845', '21/03/2021'),
(61, '2021-05-19 13:09:35', 'SEW', 'PONT21865-SEW.pdf', '21865', '21865', '20/05/2021'),
(62, '2021-05-20 09:59:27', 'SEW - extra Oil seals for repairs', 'PONT21858-SEW.pdf', '21858', '21858', '21/05/2021'),
(64, '2021-05-24 16:13:22', 'SEW', 'PONT21919-SEW.pdf', 'NT21919', '21919', '28/05/2021'),
(65, '2021-05-25 15:39:35', 'SEW', 'PONT21885-1-SEW.pdf', '21885-1', '21885-1', '25/05/2021'),
(66, '2021-05-25 15:39:35', 'SEW', 'PONT21885-2-SEW.pdf', '21885-2', '21885-2', '25/05/2021'),
(67, '2021-05-25 15:39:35', 'SEW', 'PONT21885-SEW.pdf', '21885', '21885', '25/05/2021'),
(68, '2021-05-26 12:28:10', 'Kagano Automation', 'PONT21905-1-KaganoAutomation.pdf', '21905-1', '21905-1', '05 June 2021'),
(69, '2021-06-02 15:08:11', 'SICK AUTOMATION', '21932-AC2024_SS-2021-112975 (002).pdf', '21932', '21932', '15/06/2021');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_qoutes`
--

CREATE TABLE `supplier_qoutes` (
  `qoute_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `qoute_name` varchar(250) NOT NULL,
  `qoute_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `qoute_items` varchar(250) NOT NULL,
  `Supplier_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_qoutes`
--

INSERT INTO `supplier_qoutes` (`qoute_id`, `submitted_on`, `qoute_name`, `qoute_no`, `s_qoute_reference`, `qoute_items`, `Supplier_name`) VALUES
(7, '2020-11-13 18:34:02', 'Jerry Mamogobo.pdf', 'Jerry_1', '21650', 'COC', 'Jerry'),
(11, '2020-11-17 13:52:02', 'Dayroux Africa PTY Ltd Quote DAQT10127.pdf', 'DAQT10127', '21653', '21653', 'Dayroux Africa'),
(12, '2020-11-17 14:19:44', '0416966873.pdf', '21654', '21654', 'Helical-bevel gear unit KA57/A/T', 'SEW'),
(13, '2020-11-19 12:28:44', 'Piab.pdf', 'SG 8257', '21659', 'Suctions', 'Piab'),
(14, '2020-11-20 09:59:28', '0417027925.pdf', '0417027925', '21662', 'Helical gearmotor', 'SEW'),
(16, '2020-11-20 18:46:07', '0416727731.pdf', '416727731', '21542-4', 'RF77 DRN100LS4  ', 'SEW'),
(17, '2020-11-23 09:49:46', '0417032231.pdf', '0417032231', '21663', 'DRN180L4/FG  22kw without forced cool', 'SEW'),
(19, '2020-11-23 16:54:31', '0417035945.pdf', '0417035945', '21664', 'R37 DRN80M4/V', 'SEW'),
(20, '2020-11-24 09:19:07', 'online buying.PNG', '21665', '21665', 'GT25 and GT36', 'import it all .online buying'),
(21, '2020-11-25 08:01:32', '0417040879.pdf', '0417040879', '21666', 'KA87/T DRN132S4  5.5kw', 'SEW'),
(22, '2020-11-26 09:37:41', '0417047323.pdf', '21667', '21667', 'Br.rectifier BG1,2', 'SEW'),
(23, '2020-11-26 09:39:37', '0417047205.pdf', '21668', '21668', 'Prefabricated cable', 'SEW'),
(24, '2020-11-26 09:57:41', 'Q00253.pdf', 'Q00272', '21614', '3GAA 101 520-ASE ABB M3AA 3KW 2POLE 400V B3 IE2', 'SAW AFRICA'),
(27, '2020-11-30 09:43:49', 'SIMCO.pdf', 'QT00000913', '21671', 'SIMCO Power Supply A2A7S', 'SIMCO'),
(28, '2020-12-04 09:17:29', '0417076998.pdf', '21679', '21679', 'KA37/T DRN90S4/TF', 'SEW'),
(37, '2020-12-04 10:59:20', 'Quotation no.pdf', ' SP-2020-106220', '21680', 'Connecting cable with socket', 'IFM'),
(39, '2020-12-08 16:01:21', '8046228.pdf', '8046228', '21682', 'KA67 DRS80S6BE2/TF/AL', 'SEW'),
(40, '2020-12-09 11:42:15', 'Price taken form ACDC website.pdf', '21675', '21675', '2 geyser timers', 'ACDC'),
(41, '2020-12-14 10:07:55', 'Jerry-earthing.pdf', '', '21687', 'Earthing for Boreholes', 'Jerry'),
(43, '2020-12-14 15:22:17', '0417116188.pdf', '21688', '21688', 'Helical-bevel gearmotor KA97 DRN132S4/BE11HF', 'SEW'),
(44, '2020-12-16 16:07:40', '0417127660.pdf', '0417127660', '21689', 'FA87/G DRN132S4', 'SEW'),
(45, '2020-12-17 08:27:21', 'REPAIRES 40 KVA UPS.pdf', 'isep01', '21690', '40KVA ups repair', 'Isibani Sezwe'),
(46, '2020-12-18 06:48:26', '0417133256.pdf', '0417133256', '21692', 'KA47B DRN90L4', 'SEW'),
(47, '2020-12-23 13:30:18', 'NTPRO _ Nathi _ QUO61127.pdf', 'QUO61127', '21686', 'M4000 Adv tranmitter', 'Sick Automation'),
(48, '2021-01-04 16:46:34', 'Consol.pdf', 'RFQ ', '21695', 'MURR Parts ', 'Consol'),
(50, '2021-01-07 13:57:04', 'Estimate_21699_2021-02-06.pdf', '21699', '21699', 'UPS, Battery and Plugs', 'EATON'),
(51, '2021-01-08 10:33:41', 'Kagano Automation 7713 NTPro.pdf', '7713', '21702', 'Consol Project Number C.00232.05010.10.02', 'Kagano Automation'),
(52, '2021-01-08 10:42:24', 'SEW 417176339.pdf', '417176339', '21701', 'Brake Control BSG 24V', 'SEW '),
(53, '2021-01-08 10:50:20', 'Pumps For Africa_INV0010534.pdf', 'INV0010534', '21588', ' Vertical Multistage Pump ', 'GRUNDFOS'),
(54, '2021-01-08 13:12:40', 'Estimate_21700_2021-02-06.pdf', '21700', '21700', 'Multipole Connectors', 'RS Components'),
(55, '2021-01-08 13:18:24', 'E Solar Manufacturing_206235.pdf', '206235', '21698', 'T5 LED TUBE ULTRA LUX SERIES 563MM (2FT) 9W 6000K 145LM/W ', 'E Solar Manufacturing'),
(56, '2021-01-13 11:19:25', '0417197394.pdf', '0417197394', '21623', 'K87 DRN132S4/BE11 -525V', 'SEW'),
(57, '2021-01-18 22:40:25', 'SEW_0417216941.pdf', '0417216941', '21708', 'Parallel shaft helical gearmotor FA87/G DRN160M4', 'SEW '),
(59, '2021-01-20 10:25:23', '0417227154.pdf', '21710', '21710', 'Helical gearmotor R37 DRN71M4', 'SEW'),
(60, '2021-01-20 12:31:52', 'K8documentQuotation00498440.pdf', '', '', 'LASCON B40 BULKHEAD - RETROFIT PLATE - 53W - 230V LED 53W', 'Voltex'),
(61, '2021-01-21 18:13:03', 'Agility Quote_NTPRO 2020_09_21.pdf', '21717', '21717', 'Meter project labour', 'AGILITY CONTROL SYSTEMS'),
(62, '2021-01-21 18:14:32', '4933--JS.pdf', '4933', '21716', 'danfoss drives and LCP', 'Atspeed'),
(63, '2021-01-21 18:14:32', 'ifm sensor.pdf', 'online price ifm', '21716', 'inductive sensor', 'IFM'),
(64, '2021-01-21 18:14:32', 'S20210120161413_76942694.pdf', 'S20210120161413_76942694', '21716', 'Limit Switch roller', 'schneider'),
(65, '2021-01-21 18:17:38', 'Agility Quote_NTPRO 2020_09_21-179745065.pdf', '21718', '21718', 'Meter project Supply', 'AGILITY CONTROL SYSTEMS'),
(66, '2021-01-21 21:32:10', 'AtSpeed- 4933.pdf', '4933', '21716', 'VLTÂ®AutomationDrive FC 300 1.1 KW / 1.5 HP, 380 - 500 VAC, IP20 / Chassis, RFI Class A2 (C3), Brake chopper Part Number: 5702427150782 VLTÂ® Control Panel LCP 102EAN', 'AtSpeed'),
(67, '2021-01-21 21:48:58', 'SchneiderElectric_76942694.pdf', '76942694', '21716', 'LIMIT SWITCH XCKP ROLLER LEVER 1 NC', 'SchneiderElectric'),
(68, '2021-01-21 21:59:49', 'IFM Online Quote.pdf', 'Online Quote', '21716', 'Part Number: IGT205 IFM InductiveE Sersor M18', 'IFM'),
(69, '2021-01-22 11:24:23', 'Estimate_21707_2021-02-15.pdf', '2020-106880', '21707', 'Inductive Sensor', 'IFM'),
(70, '2021-01-22 14:44:11', 'SOQ79735TURCKBANNER.pdf', 'SOQ79735', '21720', 'banner sensors', 'TURCKBANNER'),
(71, '2021-01-26 12:21:08', 'Angstom_DE18910.pdf', 'DE 18910', '21722', 'TR Encoder CEV65M-01460', 'Angstom'),
(72, '2021-01-26 12:51:45', 'Cabstrut of 2020-11-J125D NTPRO (cl76 plain).pdf', '', '', '', ''),
(73, '2021-01-26 12:56:09', 'Cabstrut of 2020-11-J125D NTPRO (cl76 plain)-695338677.pdf', '2020/11/J125D', '21677', 'Plain Ladder accessories', 'Cabstrut'),
(74, '2021-01-29 12:43:52', 'Pinnicle Online Safety & Welding Shop.pdf', 'Online Quote ', '21727', 'Welding Machine; Leather Welding Apron; Welding Gloves ', 'Pinnicle Online Safety & Welding Shop For CCBSA'),
(75, '2021-01-29 17:10:33', '0417223112.pdf', '0417223112', '21729', 'KH77CMPZ71', 'SEW'),
(76, '2021-01-30 10:00:37', '0417274487.pdf', '0417274487', '21730', 'K77 DRN100L4/BE5', 'SEW'),
(77, '2021-02-03 15:51:36', 'Unmanaedinternetswitchrscomponentsqoute.PNG', '21734', '21734', '', ''),
(78, '2021-02-10 13:15:39', 'supplierquote21737.pdf', '417306784', '21737', 'Helical gearmotor ', 'SEW'),
(80, '2021-02-10 14:32:40', 'JVA-2021-02-023 NTPRO MVES 50-1 380V AVITEQ DRIVE.pdf', 'JVA-2021-02-023', '21743', 'Magnetic Vibrator', 'Kwatani'),
(81, '2021-02-12 12:06:49', 'NTPRO -Q0195-80mm Angle Control Valve CW Actuator And Positioner - Sboniso Mpanza.pdf', 'Q0195-R', '21744', '80MM ANGLE CONTROL VALVE C/W ACTUATOR & POSITIONER Repairs', 'VSR'),
(82, '2021-02-18 10:02:55', 'Quotation00086523.pdf', '86523', '21755', '37kw from weg', 'WEG'),
(83, '2021-02-23 16:34:32', 'Pumpsfor africa VH2200.pdf', 'email', '21752', 'VH2200 pumps', 'Pumps for africa'),
(84, '2021-02-23 17:19:57', '21570SEWSupplierquote.pdf', '417306784', '21570', 'KA87 Gear Motor S4', 'SEW'),
(85, '2021-02-23 17:32:15', '21570-1.pdf', '417349369', '21570', '	KA87 Gear Motor M4', 'SEW'),
(86, '2021-02-25 13:03:03', '5038-JS.pdf', '5038', '21760', 'Danfos drives', 'Atspeed'),
(87, '2021-02-25 13:11:07', 'cokeprojectcoolingtower.pdf', 'ifm part numbers', '21760', 'IFM part numbers', 'IFM'),
(88, '2021-03-01 14:07:58', '0417397967.pdf', '0417397967', '21766', 'K37drn80mk4be1', 'SEW'),
(89, '2021-03-01 15:19:55', '0417399205.pdf', '0417399205', '21767', 'RX57 DRN90L4', 'SEW'),
(90, '2021-03-01 16:00:52', '0417398602sew21768.pdf', '417398602', '21768', 'Absolute encoder AS3H SFM60-HZZ0-S03 Part no: 13639935', 'SEW'),
(92, '2021-03-02 11:10:03', '8046870 NTPRODRIVETECHSQ21770.pdf', '8046870', '21770', 'Controll heads *2', 'SEW'),
(93, '2021-03-02 12:43:55', 'Quote 206401 - NTPRO DRIVE TECHNOLOGY.pdf', '206401', '21771', 'led tUBES', 'Elighting'),
(94, '2021-03-02 13:33:49', 'rs components dol.JPG', 'Online RS', '21772', 'DOL Starter', 'RS COMPONENTS'),
(95, '2021-03-02 14:00:28', 'QuoteOutputCoil10042429_Rev0121773.pdf', '10042429', '21773', 'TYPE 740 5/2 N/COIL S/SOL 8X1', 'TECTRA JOHANNESBURG'),
(96, '2021-03-02 15:02:52', 'rscomponentsorder.pdf', '161025087', '21748', 'relays orderd ref number 161025087', 'RS COMPONENTS'),
(97, '2021-03-02 16:07:48', 'QU31238(107448)(Igus (Pty) Ltd)(SQ21758).pdf', 'QU31238', '21758', 'PVC Control cable, CF5', 'IGUS'),
(98, '2021-03-03 09:37:02', '0417405775.pdf', '0417405775', '21776', 'K97 and K77', 'SEW'),
(101, '2021-03-04 10:23:14', 'Quotation21777 - Single_00088084.pdf', '88084', '21777', 'FOOT MOUNTED INDUCTION MOTOR 2.2kW 2P 230/400V 90L MOTOR WEG W22 IE3 stock code : 014808366', 'ZEST WEG ELECTRIC (PTY) LTD'),
(102, '2021-03-04 15:27:47', 'K8 document Quotation-17002436.pdf', '17002436', '21776', 'Sd gearbox 20:1', 'BMG'),
(103, '2021-03-05 08:28:08', '0417361576.pdf', '0417361576', '21757', 'KA77 DRN132S4', 'SEW'),
(104, '2021-03-05 13:07:48', 'NT21780WIKAQUOTENtpro Drive Technology__QUO00157289.pdf', 'QUO00157289-1', 'NT21780', 'Model PSD-4 WIKA electronic pressure switch with display, 0...250 bar', 'Wika'),
(105, '2021-03-08 15:57:15', '21785SQ015672.pdf', 'SQ015672', '', 'SOL VALVE - OPTYMA-F 5/2 SOL SPRING /14\" 24 VDC ', 'APG INDUSTRIAL'),
(106, '2021-03-10 15:43:25', 'NT21786NTPRO _ Sithembiso _ QUO64389.pdf', 'QUO64389', '21786', 'Safety laser scanners S30A-4011BA', 'SICK AUTOMATION'),
(107, '2021-03-11 11:06:17', '21787LEHRBRIDGEAXIALFAN .pdf', '10613', '21787', 'Plate Mount Axial Fans', 'CFW'),
(108, '2021-03-12 12:12:46', '21758Quotation no.pdf', 'SP-2021-108646', '21758', 'Wirable sockets *2 male *2 Female', 'IFM'),
(109, '2021-03-12 13:40:11', 'wika.pdf', 'email', '21780', 'Wika Pressure switches', 'Wika'),
(110, '2021-03-12 14:10:46', 'SQ21788.pdf', 'Different quotes online', '21788', '1. Energizer Max Alkaline Battery (PP3)=R 80,00. 2.PVC Insulation Tape etc', 'builders,Discount Electrical,RS'),
(111, '2021-03-15 14:03:23', '21790RSQUOTE48PINRELAY.pdf', 'website screenshot', '21790', 'Finder, 24V ac Coil Non-Latching Relay DPDT, 8A Switching Current PCB Mount, 2 Pole', 'RS Components'),
(112, '2021-03-16 08:20:52', '0417458215.pdf', '0417458215', '21793', 'ka87  repairs', 'SEW'),
(113, '2021-03-16 09:57:01', '0417462477.pdf', '0417462477', '21795', 'forced cooling fan', 'SEW'),
(114, '2021-03-16 11:35:19', 'Quotation no.pdf', 'word ', '21796', 'Pressure Switch', 'IFM'),
(115, '2021-03-16 11:35:19', 'ifm-pressuresensors.pdf', 'ifm', '21797', 'Pressure Switch', 'IFM'),
(116, '2021-03-16 12:59:27', '0417465760.pdf', '0417465760', '21800', 'SA57 DRN80M4/BE1HR/TF', 'SEW'),
(119, '2021-03-16 13:23:49', 'sick QUO64490.pdf', '217908', '231798', 'ultiple light beam safety devices', 'Sick Automation'),
(120, '2021-03-16 13:24:31', 'IVQ0101797(NTP001)(Lapp Southern Africa (Pty) Ltd)(2021-03-16).pdf', '21801', '21801', 'ofx classiscs', 'Lapp'),
(121, '2021-03-16 13:34:04', '0417465962.pdf', '0417465962', '21799', 'brake', 'SEW'),
(122, '2021-03-17 11:34:46', '21802atspeedquote5116-JS.pdf', '5116', '21802', 'Item 	Qty FC-302 5.5 KW / 7.5 HP, 380 - 500 VAC, Brake chopper	1 FC-302 3.0 KW / 4.0 HP, 380 - 500 VAC, Brake chopper	1 FC-302 0.37 KW / 0.50 HP, 380 - 500 VAC, Brake chopper	2 FC-302 1.5 KW / 2.0 HP, 380 - 500 VAC, Brake chopper	2 FC-302 2.2 KW / 3.', 'atspeed'),
(123, '2021-03-18 12:07:53', 'RSONLINEQUOTEFORNT21803Fluke437.pdf', '21803', '21803', 'Fluke 437 Power Quality Analyser', 'RS Components'),
(124, '2021-03-23 11:04:34', '21805Q20210323100622_78796566.pdf', '21805', '21805', 'SAF.MOD.EXT.UNIT.8N.O 24V AC/ DC', 'Sneider Electric'),
(125, '2021-03-24 14:47:37', '21806NTPRO _ Sithembiso _ QUO64666SICK.pdf', 'QUO64666', '21806', 'Compact photoelectric sensors WL280-2P2431', 'SICK AUTOMATION'),
(126, '2021-03-24 16:10:00', '21807SEW0417504228.pdf', '417504228', '21807', '6*(22.718,45 136.310,70 Parallel shaft helical gearmotor FA67 DRN90L4)', 'SEW'),
(127, '2021-03-26 09:29:12', 'QUOTATIONFORREPAIR93E40KVAUPS.pdf', '40kva', '	21808', '40KVA ups repair', 'Isibani Sezwe'),
(128, '2021-03-26 09:29:12', 'QUOTATIONFORREPAIRANDSERVICETHEUPS.pdf', 'ups service', '21808', 'ups service', 'Isibani Sezwe'),
(129, '2021-03-26 09:29:12', 'REPAIRES40kVAUPS.pdf', '49kva ups', '21809', 'ups service', 'Isibani Sezwe'),
(130, '2021-03-26 10:02:05', '21811rexrothQuoteOutput_CashCustomer_10043135_Rev00.pdf', '21811', '21811', '1 REXROTH VALVE BLOCK 35MM RUNNER BLOCK - SNS-C1-H stock code : 162231320', 'Rexroth'),
(131, '2021-03-26 14:17:54', '21813Quotation no.pdf', '21813', '21813', 'Cable; Operating voltage < 300 V AC; 100 m; PUR; Halogen-free yes,', 'IFM'),
(132, '2021-03-29 09:22:30', '21814Quote_926354_Level switch.pdf', '926354/1.0', '21814', 'VEGAVIB 63 Net price 15 767,50 15 767,50 VB63.XXAGCRKMX eID: ZC117757989', 'VEGA'),
(133, '2021-03-29 10:11:01', '20210329110232584.pdf', '20210329110232584', '21558-1', 'Rotex couplings', 'Rexroth'),
(134, '2021-03-30 07:05:17', 'PT210379.pdf', 'PT210379', '21817', 'abb drives', 'PPE'),
(135, '2021-04-08 13:49:50', 'SQ644564 - NT-PRO Drive Technology.pdf', '', '21832', 'safety Switch', 'Craigcor'),
(136, '2021-04-08 14:25:54', '0417561231.pdf', '0417561231', '21833', 'forced cooling fan', 'SEW'),
(137, '2021-04-12 14:26:19', 'RegalbeloitquoteJHB42890.pdf', 'JHB42890', '21836', 'MVE 2400/15E-60A0 220-240/380-415V 50Hz VIBRATOR MOTOR', 'Regal Beloit'),
(138, '2021-04-12 14:39:20', 'SEWQUOTEKA670417571561.pdf', '417571561', '21837', 'Helical-bevel gearmotor KA67 DRS112M8/2/2W E150.299', 'SEW'),
(139, '2021-04-14 09:09:27', 'NTPRO Drive Technology _ Nathi _ QUO65062.pdf', ' QUO65062', '21839', 'safety Switch cables', 'Sick Automation'),
(141, '2021-04-14 11:56:47', 'MM-2021-110837.pdf', 'MM-2021-110837', '21840', 'M12 PLUGS', 'IFM'),
(142, '2021-04-14 13:53:19', '0417578194.pdf', '0417578194', '21841', 'Multiple items', 'SEW'),
(143, '2021-04-15 10:09:34', '21843JoestquoteS2021-04-1548MS7Drives.pdf', 'S2021-04-1548', '21748', '*2  MS7 VIBRATOR MOTOR', 'jOEST VIBRATING SYSTEMS'),
(144, '2021-04-15 17:48:47', 'ConsolWadeville-UPS.pdf', 'consolwadeville', '21844', 'ups service', 'Isibani Sezwe'),
(145, '2021-04-16 12:57:32', '21845SEW0417595582.pdf', '417595582', '21845', 'Fan guard DR90 BE', 'SEW'),
(146, '2021-04-16 13:23:27', '21846SEW0417595583.pdf', '0417595583', '21846', 'Fan guard DRN100/DR100', 'SEW'),
(147, '2021-04-19 12:06:18', 'QUO65142.pdf', 'QUO65142', '21849', 'Sick: on-contact safety switches RE27-SA68L', 'Sick Automation'),
(148, '2021-04-19 14:12:14', '0417590419.pdf', '0417590419', '21850', 'movitracs', 'SEW'),
(149, '2021-04-19 18:06:40', 'SOQ92536.pdf', 'SOQ92536', '21841', 'motor cables', 'Helukabel'),
(150, '2021-04-19 19:53:35', 'SOQ92443.pdf', 'SOQ92443', '21851', '5g2.5mm cable', 'Helukabel'),
(151, '2021-04-19 20:05:29', 'JM BUILDING WORKS.pdf', 'Mike1', '21852', 'building quote', 'BAJWADI BA PEU Labour'),
(152, '2021-04-19 20:08:14', 'CAP2104192.pdf', 'CAP2104192', '21854', 'positioner and actuator', 'BAJWADI BA PEU Labour'),
(154, '2021-04-19 20:08:14', 'Quotation-QUO00160019.PDF', 'QUO00160019', '21853', 'Wika Sensor', 'BAJWADI BA PEU Labour'),
(155, '2021-04-20 16:08:29', '21814Quote_926354_Level switch-1733954962.pdf', '21814', '21814', 'Vega switch', 'VEGA'),
(156, '2021-04-21 12:16:39', 'PC SHOP & TAKE A LOT.pdf', 'online quote ', '21861', 'Seagate Harddrive and Clone Dock ', 'pc shop and takealot.com'),
(157, '2021-04-21 15:56:58', '21862SEW8047571 NTPRODRIVETECH.pdf', '8047571', '21862', 'MOVIDRIVE MDX61B0075-5A3-4-00 Repairs', 'SEW - Elvis'),
(158, '2021-04-22 09:26:57', 'SEW 0417619346.pdf', '0417619346', 'NT21863', 'Mains Filter and Output Choke for Zibo', 'SEW'),
(159, '2021-04-29 09:49:23', 'SEW 0417646933.pdf', '0417646933', 'NT21866', 'Helical Bevel Gearmotor KAZ77 DRN112M4', 'sew'),
(160, '2021-04-29 10:11:52', 'ASSTech 13109.pdf', '13109', 'NT21867', 'WENGLOR Red-light Retro-reflex Sensor', 'AssTech'),
(161, '2021-05-04 12:55:19', 'Tp700.pdf', '0193', '21876', '21876', 'Electronics Solutions-John'),
(162, '2021-05-04 13:43:46', 'Quote_KAG_059_from_Kagano_Automation_CC.pdf', '59', '21877', 'KTP1200', 'KAGANO'),
(163, '2021-05-04 14:14:59', '21843JOESTQUOTES2021-04-1548 MS 7 Drives.pdf', '', '', '', ''),
(164, '2021-05-06 09:30:35', 'Bajwadi Ba Peu.pdf', 'JME210401', '21871', '', 'JOHNSOM MATTEY'),
(165, '2021-05-06 09:47:57', 'JM BUILDING WORKS DOOR INSTALLATION BAJWADI.pdf', 'NTPRO062/5', '21879', 'JM BUILDING WORKS DOOR INSTALLATION ', 'BAJWADI BA PEU JOHNSON MATTEY'),
(166, '2021-05-06 09:48:06', 'JM BUILDING WORKS Drywalling BAJWADI.pdf', '', '', '', ''),
(167, '2021-05-06 09:48:14', 'JM BUILDING WORKS FLOOR SLAB REMOVAL BAJWADI.pdf', ' NTPRO -060/05', '21880', 'SLAB REMOVAL', 'BAJWADI BA PEU JOHNSON MATTEY'),
(168, '2021-05-06 17:33:09', 'JM BUILDING WORKS copy.pdf', '', '', '', ''),
(169, '2021-05-06 17:34:02', 'JM Acid Plant Pipe Brackets.pdf', 'Acid Plant Pipe Brackets', '21883', 'Acid Plant Pipe Brackets', 'BAJWADI BA PEU Labour'),
(170, '2021-05-06 17:34:07', 'JM BUILDING WORKS copy-266748554.pdf', '21882', '21882', ' JM Old Timber Removal', 'BAJWADI BA PEU Labour'),
(171, '2021-05-11 15:41:30', '0417697936 SEW.pdf', '0417697936 ', 'nt21892', 'Synchronous motor  CMP50L/BK/PK/AK0H/SB1', 'SEW FOR SASOL MIDLANDS'),
(172, '2021-05-12 13:56:36', 'SUPPLY AND FIT VEGA TRAY COKE OLIFANTSFONTAIN BAJWADI  21894.pdf', 'BAJWADI BA PEU', '21894', 'SUPPLY & FIT OF VEGA TRAY', 'BAJWADI BA PEU FOR CCBSA'),
(173, '2021-05-12 13:56:49', 'SUPPLY OF TURPENTAIN CONTAINERS COKE OLIFANTS BAJWADI 21895.pdf', 'BAJWADI BA PEU', '21895', 'SUPPLY OF TURPENTINE COTAINER ', 'BAJWADI BA PEU FOR CCBSA'),
(174, '2021-05-12 13:57:07', 'SUPPLY AND FIT COVERS AROUND CHANGE PARTS RACK, COKE OLIFANTS BAJWADI 21896.pdf', 'BAJWADI BA PEU', '21896', 'SUPPLY AND FIT COVERS AROUND CHANGE PARTS RACK', 'BAJWADI BA PEU FOR CCBSA'),
(175, '2021-05-12 13:57:44', 'SUPPLY OF PPE CONTAINERS + STAND - COKE OLIFANTS BAJWADI 21898.pdf', 'BAJWADI BA PEU', '21898', 'SUPPLY OF PPE CONTAINERS + STAND', 'BAJWADI BA PEU FOR CCBSA'),
(176, '2021-05-12 16:25:55', 'Quote-Q62618 Hawk High Pressure Pumps.PDF', 'Quote-Q62618', 'nt21897', 'Cleaning House ', 'Hawks High Pressure Pump'),
(178, '2021-05-13 14:56:07', 'WORKBENCH _ BAJWADI.pdf', 'BAJWADI BA PEU', '', 'WORK BENCH', 'BAJWADI BA PEU FOR CCBSA'),
(180, '2021-05-14 09:34:21', 'COVER PLATE COKE BAJWADI.pdf', '113/05', '21907', 'COVER PLATE PROJECT ', 'BAJWADI BA PEU FOR CCBSA'),
(181, '2021-05-19 11:04:31', 'SEWQUOTE0417643235FORPO21865.pdf', '0417643235', '21865', 'SA67 DRN80M4,AC motor DRN80M4/FG', 'SEW'),
(182, '2021-05-19 11:33:10', 'Quote_KAG_051_from_Kagano_Automation_CCfor21855.pdf', '', '', '', ''),
(183, '2021-05-20 14:42:34', '21911SEWQUOTE0417737202.pdf', '0417737202', '21911', 'PCB wiring MLK30/BG1/1/kpl.', 'SEW'),
(184, '2021-05-20 15:09:41', '21912IsibanesezwequoteCONSOL_UPS.pdf', 'isep02', '21912', 'UPS  repairs for consol done  ', 'isibanesezwe - Themba Zulu'),
(185, '2021-05-21 09:56:22', 'Pumps For Africa.pdf', '', '21915', 'Foros Elctro Pump ', 'Pumps For Africa for Isanti '),
(186, '2021-05-24 15:36:58', 'SEWQuote0416941715.pdf', '0416941715', '21919', 'Encoder plug 623 Plug cpl. 12polig Signal', 'SEW'),
(187, '2021-05-27 08:32:10', '0417759604.pdf', '0417759604', ' 21923', 'Serve motors and drives', 'SEW'),
(188, '2021-05-27 10:54:25', 'NT21924SEW0417762647.pdf', '21924', '21924', 'KH47/AR', 'SEW'),
(189, '2021-05-31 09:54:06', 'QUOTE21921IFMSS-2021-113030.pdf', '21921', 'NT21921', 'oupas items Depalletizer and Palletizer', 'IFM'),
(190, '2021-05-31 10:35:53', '21921Quotation no.pdf', '21921', 'NT21921', 'Oupas Items depalletizer and Palletizer', 'IFM'),
(191, '2021-06-01 11:31:34', '21932SchneiderS20210601101307_80899423.pdf', '21932', '21932', 'XS518BLPAM12,XS618B1PBM12,ATV320U11M2C', 'Schneider Electric'),
(192, '2021-06-01 12:38:22', '21932-AC2024_SS-2021-112975 (002).pdf', '21932', '21932', 'PALLETIZER INTERFACE AIR BOX - ASI-IFM MODULE AC 2024', 'IFM'),
(193, '2021-06-01 12:44:28', 'FESTO_QUOTATION_2171418335 (002).PDF', '2171418335', '21933', 'AIR BLOCK 10P', 'FESTO'),
(194, '2021-06-01 12:48:53', 'TROJAN5RS_QUOTEFOR21932.pdf', '21932', '21932', 'TROJAN5', 'RS Components'),
(195, '2021-06-02 14:54:12', '21848forUPS_proposal-355164 (3).pdf', '21848', '21848', 'UPS sale', 'Saletech'),
(196, '2021-06-03 09:14:20', 'za.pdf', 'online quote ', '21937', 'safty switch, emergency stop', 'RS COMPONENETS '),
(197, '2021-06-04 10:40:43', 'NT21943_Q04359NTP.pdf', '21943', '21943', 'ABB Contactor AF116-30-00-12', 'SAWAFRICA'),
(198, '2021-06-04 14:54:36', '21944_overloadAF96Quote013865.pdf', '21944', '21944', 'EF96 ELECTR O/L 36.100A', 'ELECTRO-CONTACT'),
(199, '2021-06-04 15:05:06', '21945_0417796609.pdf', '0417796609', '21945', 'Helical gearmotor R27 DRN80M4', 'SEW'),
(200, '2021-06-07 05:46:34', 'RS COMPONENETS  FOR ISANTI 21946.pdf', 'ONLINE QUOTE ', '21946', 'CURRENT TRANSDUCER & EL CIRCUIT BREAKER ', 'RS COMPONENETS '),
(201, '2021-06-07 11:54:26', '0417801709.pdf', '0417801709', '21947', 'MC07B 15KW', 'SEW'),
(202, '2021-06-07 16:37:18', '0417803684.pdf', '0417803684', '21953', 'SA67 DRN90L4', 'SEW'),
(203, '2021-06-08 08:50:04', '21954Motor_0417801550.pdf', '0417801550', '21954', 'DRN112M4/FG/RS', 'SEW'),
(205, '2021-06-09 13:52:35', 'K8 document Quotation-17113584.pdf', '17113584', '21965', '', 'BMG'),
(206, '2021-06-09 13:52:35', 'K8 document Quotation-17113583.pdf', '17113583', '21966', 'Saddle-bearing', 'BMG'),
(207, '2021-06-09 15:47:57', 'ThyristorA.pdf', 'Online price', '21967', 'ThyristorA', 'Nex Instrument ');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `qoute_id` int(11) NOT NULL DEFAULT 0,
  `Customer_Name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `qoute_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `NTPRO_id` varchar(250) CHARACTER SET latin1 NOT NULL,
  `CustomerAtt_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Customer_Paid` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Order_Details` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Order_delivered` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Supplier_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `SupplierInv_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Supplier_paid` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(7, 'nathi.maduna@ntpro.co.za', '$2y$10$sISj0u38zB2u.QPmnUs4QuAXydVlwmMhcynPkYn18XI4/qibKiisa', '2020-11-12 08:46:40'),
(11, 'neliswa.kazana@ntpro.co.za', '$2y$10$9WDhjiv./uRDL/g9rocBW..sKx03regp.Oq9Ci8KsA7kJzBPwlAgq', '2020-11-16 09:22:16'),
(12, 'vuyokazi.mgele@ntpro.co.za', '$2y$10$a4oaTOaMnL3MTQb7vt5ImegQ7C1HK2ugKVmDS4PTHLumeKXeOniES', '2020-11-16 09:42:36'),
(13, 'katlego.motadi@ntpro.co.za', '$2y$10$BAJawK8hm6jGLqjVqfr9beMHZml8uS6kMyPuw3rDv2XIPUcyon5Ay', '2020-11-16 09:51:00'),
(14, 'mxolisi.ntombela@ntpro.co.za', '$2y$10$flxi.46AL5F8mop89/9hbuvhLFRyvZ.MTPJ6A.mBqGsUlLAP8l7J6', '2020-11-16 09:56:00'),
(15, 'lunga.klaas@ntpro.co.za', '$2y$10$sGxjqCgZAmGklJpaRJlVj.GvLe22WxO5QA6iZDAHcbwTg66t39.0C', '2020-11-16 10:00:32'),
(16, 'sithembiso.maphanga@ntpro.co.za', '$2y$10$HwFBW1ViTLVQOq.12ahNM.mvSNhQlexM.EoJ07/0/VgCrWQyfH97i', '2020-11-16 10:02:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `customer_deliverynotes`
--
ALTER TABLE `customer_deliverynotes`
  ADD PRIMARY KEY (`deliverynote_id`);

--
-- Indexes for table `customer_invoices`
--
ALTER TABLE `customer_invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `customer_purchaseorders`
--
ALTER TABLE `customer_purchaseorders`
  ADD PRIMARY KEY (`purchaseorder_id`);

--
-- Indexes for table `customer_qoutes`
--
ALTER TABLE `customer_qoutes`
  ADD PRIMARY KEY (`qoute_id`);

--
-- Indexes for table `supplierstbl`
--
ALTER TABLE `supplierstbl`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_deliverynotes`
--
ALTER TABLE `supplier_deliverynotes`
  ADD PRIMARY KEY (`deliverynote_id`);

--
-- Indexes for table `supplier_invoices`
--
ALTER TABLE `supplier_invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `supplier_purchaseorders`
--
ALTER TABLE `supplier_purchaseorders`
  ADD PRIMARY KEY (`purchaseorder_id`);

--
-- Indexes for table `supplier_qoutes`
--
ALTER TABLE `supplier_qoutes`
  ADD PRIMARY KEY (`qoute_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_deliverynotes`
--
ALTER TABLE `customer_deliverynotes`
  MODIFY `deliverynote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customer_invoices`
--
ALTER TABLE `customer_invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `customer_purchaseorders`
--
ALTER TABLE `customer_purchaseorders`
  MODIFY `purchaseorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `customer_qoutes`
--
ALTER TABLE `customer_qoutes`
  MODIFY `qoute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `supplierstbl`
--
ALTER TABLE `supplierstbl`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_deliverynotes`
--
ALTER TABLE `supplier_deliverynotes`
  MODIFY `deliverynote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier_invoices`
--
ALTER TABLE `supplier_invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `supplier_purchaseorders`
--
ALTER TABLE `supplier_purchaseorders`
  MODIFY `purchaseorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `supplier_qoutes`
--
ALTER TABLE `supplier_qoutes`
  MODIFY `qoute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

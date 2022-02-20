-- Database: `ntproesu_ntprodb`
--

-- --------------------------------------------------------

CREATE TABLE `customer_deliverynotes2` (
  `deliverynote_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `deliverynote_name` varchar(250) NOT NULL,
  `deliverynote_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
    `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_deliverynotes`
--

INSERT INTO `customer_deliverynotes2` (`deliverynote_id`, `submitted_on`, `deliverynote_name`, `deliverynote_no`, `s_qoute_reference`, `comments`) VALUES
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
-- Indexes for table `customer_deliverynotes`
--
ALTER TABLE `customer_deliverynotes2`
  ADD PRIMARY KEY (`deliverynote_id`);

--
--
-- AUTO_INCREMENT for table `customer_deliverynotes`
--
ALTER TABLE `customer_deliverynotes2`
  MODIFY `deliverynote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Table structure for table `customer_invoices`
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE `customer_invoices2` (
  `invoice_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_name` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `invoice_details` varchar(250) NOT NULL,
  `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_invoices`
--

INSERT INTO `customer_invoices2` (`invoice_id`, `submitted_on`, `invoice_name`, `invoice_no`, `s_qoute_reference`, `invoice_details`) VALUES
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
-- Indexes for table `customer_invoices`
--
ALTER TABLE `customer_invoices2`
  ADD PRIMARY KEY (`invoice_id`);

--
-- AUTO_INCREMENT for table `customer_invoices`
--
ALTER TABLE `customer_invoices2`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
==============================================================================================================================================================
-- Table structure for table `customer_purchaseorders`
--

CREATE TABLE `customer_purchaseorders2` (
  `purchaseorder_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `purchaseorder_name` varchar(250) NOT NULL,
  `p_order_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `expected_deliverydate` varchar(250) NOT NULL,
    `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_purchaseorders`
--

INSERT INTO `customer_purchaseorders2` (`purchaseorder_id`, `submitted_on`, `purchaseorder_name`, `p_order_no`, `s_qoute_reference`, `expected_deliverydate`) VALUES
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
-- Indexes for table `customer_purchaseorders`
--
ALTER TABLE `customer_purchaseorders2`
  ADD PRIMARY KEY (`purchaseorder_id`);
--
-- AUTO_INCREMENT for table `customer_purchaseorders`
--
ALTER TABLE `customer_purchaseorders2`
  MODIFY `purchaseorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;


-- --------------------------------------------------------

--
-- Table structure for table `supplier_deliverynotes`
--

CREATE TABLE `supplier_deliverynotes2` (
  `deliverynote_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `deliverynote_name` varchar(250) NOT NULL,
  `deliverynote_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `delivered_itemsdescription` varchar(250) NOT NULL,
  `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_deliverynotes`
--

INSERT INTO `supplier_deliverynotes2` (`deliverynote_id`, `submitted_on`, `deliverynote_name`, `deliverynote_no`, `s_qoute_reference`, `delivered_itemsdescription`) VALUES
(8, '2021-03-05 10:20:28', '21739DN9771.pdf', '2103017', '21739', '');

-- ------------------------------------------------
ALTER TABLE `supplier_deliverynotes2`
  ADD PRIMARY KEY (`deliverynote_id`);


-- AUTO_INCREMENT for table `supplier_deliverynotes`
--
ALTER TABLE `supplier_deliverynotes2`
  MODIFY `deliverynote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

=================================================================================================================================

-- Table structure for table `supplier_invoices`
--

CREATE TABLE `supplier_invoices2` (
  `invoice_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_name` varchar(250) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
   `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_invoices`
--

INSERT INTO `supplier_invoices2` (`invoice_id`, `submitted_on`, `invoice_name`, `invoice_no`, `s_qoute_reference`, `supplier_name`) VALUES
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
ALTER TABLE `supplier_invoices2`
  ADD PRIMARY KEY (`invoice_id`);


  ALTER TABLE `supplier_invoices2`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;


================================================================================================================================
-- Table structure for table `supplier_purchaseorders`

CREATE TABLE `supplier_purchaseorders2` (
  `purchaseorder_id` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `supplier_name` varchar(250) NOT NULL,
  `order_name` varchar(250) NOT NULL,
  `order_no` varchar(250) NOT NULL,
  `s_qoute_reference` varchar(250) NOT NULL,
  `expecteddeliverydate` varchar(250) NOT NULL,
    `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_purchaseorders`
--

INSERT INTO `supplier_purchaseorders2` (`purchaseorder_id`, `submitted_on`, `supplier_name`, `order_name`, `order_no`, `s_qoute_reference`, `expecteddeliverydate`) VALUES
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
-- Indexes for table `supplier_purchaseorders`
--
ALTER TABLE `supplier_purchaseorders2`
  ADD PRIMARY KEY (`purchaseorder_id`);
-- AUTO_INCREMENT for table `supplier_purchaseorders`
--
ALTER TABLE `supplier_purchaseorders2`
  MODIFY `purchaseorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;



--

-- Indexes for dumped tables
=================================================================================================================


-- Indexes for table `supplier_invoices`

--



--
================================================================================

--
-- AUTO_INCREMENT for table `supplier_invoices`
--


-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 04:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_email` varchar(80) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  `ad_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ad_id`, `ad_name`, `ad_email`, `ad_pass`, `ad_status`) VALUES
(1, 'Admin', 'administerationof@waterapp.com', 'eyJpdiI6IkNFNEhRRUYycnF1ZThSbUx0ZDJKTFE9PSIsInZhbHVlIjoiTGNHYThkckhYZTA1Y0xLS04rMUI0QT09IiwibWFjIjoiODYyY2RkY2FiODJiYmRlZWRkZjNmZjNlYTM2NmY5Yjk1MmJjNTQ5ZjBkOTk5ZTA2YWI2YmM1NzQwYzRmZjg3MCIsInRhZyI6IiJ9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_title` varchar(250) NOT NULL,
  `area_cit_id` int(11) NOT NULL,
  `area_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_title`, `area_cit_id`, `area_status`) VALUES
(1, 'Qasimabad', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cit_id` int(11) NOT NULL,
  `cit_name` varchar(200) NOT NULL,
  `cit_status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cit_id`, `cit_name`, `cit_status`, `updated_at`) VALUES
(1, 'Lahore', 1, '2021-10-04 15:29:26'),
(2, 'Faisalabad', 1, '0000-00-00 00:00:00'),
(3, 'Rawalpindi', 1, '0000-00-00 00:00:00'),
(4, 'Gujranwala', 1, '0000-00-00 00:00:00'),
(5, 'Peshawar', 1, '0000-00-00 00:00:00'),
(6, 'Multan', 1, '0000-00-00 00:00:00'),
(7, 'Saidu Sharif', 1, '0000-00-00 00:00:00'),
(8, 'Hyderabad', 1, '0000-00-00 00:00:00'),
(9, 'Islamabad', 1, '0000-00-00 00:00:00'),
(10, 'Quetta', 1, '0000-00-00 00:00:00'),
(11, 'Bahawalpur', 1, '0000-00-00 00:00:00'),
(12, 'Sargodha', 1, '0000-00-00 00:00:00'),
(13, 'Sialkot City', 1, '0000-00-00 00:00:00'),
(14, 'Sukkur', 1, '0000-00-00 00:00:00'),
(15, 'Larkana', 1, '0000-00-00 00:00:00'),
(16, 'Chiniot', 1, '0000-00-00 00:00:00'),
(17, 'Shekhupura', 1, '0000-00-00 00:00:00'),
(18, 'Jhang City', 1, '0000-00-00 00:00:00'),
(19, 'Dera Ghazi Khan', 1, '0000-00-00 00:00:00'),
(20, 'Gujrat', 1, '0000-00-00 00:00:00'),
(21, 'Rahimyar Khan', 1, '0000-00-00 00:00:00'),
(22, 'Kasur', 1, '0000-00-00 00:00:00'),
(23, 'Mardan', 1, '0000-00-00 00:00:00'),
(24, 'Mingaora', 1, '0000-00-00 00:00:00'),
(25, 'Nawabshah', 1, '0000-00-00 00:00:00'),
(26, 'Sahiwal', 1, '0000-00-00 00:00:00'),
(27, 'Mirpur Khas', 1, '0000-00-00 00:00:00'),
(28, 'Okara', 1, '0000-00-00 00:00:00'),
(29, 'Mandi Burewala', 1, '0000-00-00 00:00:00'),
(30, 'Jacobabad', 1, '0000-00-00 00:00:00'),
(31, 'Saddiqabad', 1, '0000-00-00 00:00:00'),
(32, 'Kohat', 1, '0000-00-00 00:00:00'),
(33, 'Muridke', 1, '0000-00-00 00:00:00'),
(34, 'Muzaffargarh', 1, '0000-00-00 00:00:00'),
(35, 'Khanpur', 1, '0000-00-00 00:00:00'),
(36, 'Gojra', 1, '0000-00-00 00:00:00'),
(37, 'Mandi Bahauddin', 1, '0000-00-00 00:00:00'),
(39, 'Turbat', 1, '0000-00-00 00:00:00'),
(40, 'Dadu', 1, '0000-00-00 00:00:00'),
(41, 'Bahawalnagar', 1, '0000-00-00 00:00:00'),
(42, 'Khuzdar', 1, '0000-00-00 00:00:00'),
(43, 'Pakpattan', 1, '0000-00-00 00:00:00'),
(44, 'Tando Allahyar', 1, '0000-00-00 00:00:00'),
(45, 'Ahmadpur East', 1, '0000-00-00 00:00:00'),
(46, 'Vihari', 1, '0000-00-00 00:00:00'),
(47, 'Jaranwala', 1, '0000-00-00 00:00:00'),
(48, 'New Mirpur', 1, '0000-00-00 00:00:00'),
(49, 'Kamalia', 1, '0000-00-00 00:00:00'),
(50, 'Kot Addu', 1, '0000-00-00 00:00:00'),
(51, 'Nowshera', 1, '0000-00-00 00:00:00'),
(52, 'Swabi', 1, '0000-00-00 00:00:00'),
(53, 'Khushab', 1, '0000-00-00 00:00:00'),
(54, 'Dera Ismail Khan', 1, '0000-00-00 00:00:00'),
(55, 'Chaman', 1, '0000-00-00 00:00:00'),
(56, 'Charsadda', 1, '0000-00-00 00:00:00'),
(57, 'Kandhkot', 1, '0000-00-00 00:00:00'),
(58, 'Chishtian', 1, '0000-00-00 00:00:00'),
(59, 'Hasilpur', 1, '0000-00-00 00:00:00'),
(60, 'Attock Khurd', 1, '0000-00-00 00:00:00'),
(61, 'Muzaffarabad', 1, '0000-00-00 00:00:00'),
(62, 'Mianwali', 1, '0000-00-00 00:00:00'),
(63, 'Jalalpur Jattan', 1, '0000-00-00 00:00:00'),
(64, 'Bhakkar', 1, '0000-00-00 00:00:00'),
(65, 'Zhob', 1, '0000-00-00 00:00:00'),
(66, 'Dipalpur', 1, '0000-00-00 00:00:00'),
(67, 'Kharian', 1, '0000-00-00 00:00:00'),
(68, 'Mian Channun', 1, '0000-00-00 00:00:00'),
(69, 'Bhalwal', 1, '0000-00-00 00:00:00'),
(70, 'Jamshoro', 1, '0000-00-00 00:00:00'),
(71, 'Pattoki', 1, '0000-00-00 00:00:00'),
(72, 'Harunabad', 1, '0000-00-00 00:00:00'),
(73, 'Kahror Pakka', 1, '0000-00-00 00:00:00'),
(74, 'Toba Tek Singh', 1, '0000-00-00 00:00:00'),
(75, 'Samundri', 1, '0000-00-00 00:00:00'),
(76, 'Shakargarh', 1, '0000-00-00 00:00:00'),
(77, 'Sambrial', 1, '0000-00-00 00:00:00'),
(78, 'Shujaabad', 1, '0000-00-00 00:00:00'),
(79, 'Hujra Shah Muqim', 1, '0000-00-00 00:00:00'),
(80, 'Kabirwala', 1, '0000-00-00 00:00:00'),
(81, 'Mansehra', 1, '0000-00-00 00:00:00'),
(82, 'Lala Musa', 1, '0000-00-00 00:00:00'),
(83, 'Chunian', 1, '0000-00-00 00:00:00'),
(84, 'Nankana Sahib', 1, '0000-00-00 00:00:00'),
(85, 'Bannu', 1, '0000-00-00 00:00:00'),
(86, 'Pasrur', 1, '0000-00-00 00:00:00'),
(87, 'Timargara', 1, '0000-00-00 00:00:00'),
(88, 'Parachinar', 1, '0000-00-00 00:00:00'),
(89, 'Chenab Nagar', 1, '0000-00-00 00:00:00'),
(90, 'Gwadar', 1, '0000-00-00 00:00:00'),
(91, 'Abdul Hakim', 1, '2021-09-17 18:24:18'),
(92, 'Hassan Abdal', 1, '0000-00-00 00:00:00'),
(93, 'Tank', 1, '0000-00-00 00:00:00'),
(94, 'Hangu', 1, '0000-00-00 00:00:00'),
(95, 'Risalpur Cantonment', 1, '0000-00-00 00:00:00'),
(96, 'Karak', 1, '0000-00-00 00:00:00'),
(97, 'Kundian', 1, '0000-00-00 00:00:00'),
(98, 'Umarkot', 1, '0000-00-00 00:00:00'),
(99, 'Chitral', 1, '0000-00-00 00:00:00'),
(100, 'Dainyor', 1, '0000-00-00 00:00:00'),
(101, 'Kulachi', 1, '0000-00-00 00:00:00'),
(102, 'Kalat', 1, '0000-00-00 00:00:00'),
(103, 'Kotli', 1, '0000-00-00 00:00:00'),
(104, 'Gilgit', 1, '0000-00-00 00:00:00'),
(105, 'Narowal', 1, '0000-00-00 00:00:00'),
(106, 'Khairpur Mirâ€™s', 1, '0000-00-00 00:00:00'),
(107, 'Khanewal', 1, '0000-00-00 00:00:00'),
(108, 'Jhelum', 1, '0000-00-00 00:00:00'),
(109, 'Haripur', 1, '0000-00-00 00:00:00'),
(110, 'Shikarpur', 1, '0000-00-00 00:00:00'),
(111, 'Rawala Kot', 1, '0000-00-00 00:00:00'),
(112, 'Hafizabad', 1, '0000-00-00 00:00:00'),
(113, 'Lodhran', 1, '0000-00-00 00:00:00'),
(114, 'Malakand', 1, '0000-00-00 00:00:00'),
(115, 'Attock City', 1, '0000-00-00 00:00:00'),
(116, 'Batgram', 1, '0000-00-00 00:00:00'),
(117, 'Matiari', 1, '0000-00-00 00:00:00'),
(118, 'Ghotki', 1, '0000-00-00 00:00:00'),
(119, 'Naushahro Firoz', 1, '0000-00-00 00:00:00'),
(120, 'Alpurai', 1, '0000-00-00 00:00:00'),
(121, 'Bagh', 1, '0000-00-00 00:00:00'),
(122, 'Daggar', 1, '0000-00-00 00:00:00'),
(123, 'Leiah', 1, '0000-00-00 00:00:00'),
(124, 'Tando Muhammad Khan', 1, '0000-00-00 00:00:00'),
(125, 'Chakwal', 1, '0000-00-00 00:00:00'),
(126, 'Badin', 1, '0000-00-00 00:00:00'),
(127, 'Lakki', 1, '0000-00-00 00:00:00'),
(128, 'Rajanpur', 1, '0000-00-00 00:00:00'),
(129, 'Dera Allahyar', 1, '0000-00-00 00:00:00'),
(130, 'Shahdad Kot', 1, '0000-00-00 00:00:00'),
(131, 'Pishin', 1, '0000-00-00 00:00:00'),
(132, 'Sanghar', 1, '0000-00-00 00:00:00'),
(133, 'Upper Dir', 1, '0000-00-00 00:00:00'),
(134, 'Thatta', 1, '0000-00-00 00:00:00'),
(135, 'Dera Murad Jamali', 1, '0000-00-00 00:00:00'),
(136, 'Kohlu', 1, '0000-00-00 00:00:00'),
(137, 'Mastung', 1, '0000-00-00 00:00:00'),
(138, 'Dasu', 1, '0000-00-00 00:00:00'),
(139, 'Athmuqam', 1, '0000-00-00 00:00:00'),
(140, 'Loralai', 1, '0000-00-00 00:00:00'),
(141, 'Barkhan', 1, '0000-00-00 00:00:00'),
(142, 'Musa Khel Bazar', 1, '0000-00-00 00:00:00'),
(143, 'Ziarat', 1, '0000-00-00 00:00:00'),
(144, 'Gandava', 1, '0000-00-00 00:00:00'),
(145, 'Sibi', 1, '0000-00-00 00:00:00'),
(146, 'Dera Bugti', 1, '0000-00-00 00:00:00'),
(147, 'Eidgah', 1, '0000-00-00 00:00:00'),
(148, 'Uthal', 1, '0000-00-00 00:00:00'),
(149, 'Khuzdar', 1, '0000-00-00 00:00:00'),
(150, 'Chilas', 1, '0000-00-00 00:00:00'),
(151, 'Panjgur', 1, '0000-00-00 00:00:00'),
(152, 'Gakuch', 1, '0000-00-00 00:00:00'),
(153, 'Qila Saifullah', 1, '0000-00-00 00:00:00'),
(154, 'Kharan', 1, '0000-00-00 00:00:00'),
(155, 'Aliabad', 1, '0000-00-00 00:00:00'),
(156, 'Awaran', 1, '0000-00-00 00:00:00'),
(157, 'Dalbandin', 1, '0000-00-00 00:00:00'),
(158, 'Karachi', 1, '0000-00-00 00:00:00'),
(160, 'Abbottabad', 1, '2021-10-04 14:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cn_id` int(11) NOT NULL,
  `cn_name` varchar(100) NOT NULL,
  `cn_email` varchar(100) NOT NULL,
  `cn_subject` varchar(255) NOT NULL,
  `cn_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cn_id`, `cn_name`, `cn_email`, `cn_subject`, `cn_message`) VALUES
(1, 'Waseem Laghari', 'waseemlaghari2@gmail.com', 'testing', 'testing message');

-- --------------------------------------------------------

--
-- Table structure for table `dis_agency`
--

CREATE TABLE `dis_agency` (
  `ds_id` int(11) NOT NULL,
  `ds_title` varchar(200) NOT NULL,
  `ds_regis_date` date NOT NULL,
  `ds_price` int(11) NOT NULL,
  `ds_type` int(2) NOT NULL,
  `ds_cit_id` int(11) NOT NULL,
  `ds_location` text NOT NULL,
  `ds_email` varchar(100) NOT NULL,
  `ds_pass` varchar(255) NOT NULL,
  `ds_profilepic` varchar(200) NOT NULL,
  `ds_phone` varchar(50) NOT NULL,
  `ds_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dis_agency`
--

INSERT INTO `dis_agency` (`ds_id`, `ds_title`, `ds_regis_date`, `ds_price`, `ds_type`, `ds_cit_id`, `ds_location`, `ds_email`, `ds_pass`, `ds_profilepic`, `ds_phone`, `ds_status`) VALUES
(1, 'newagency', '2021-09-21', 15, 1, 8, 'HNo A23 Qasimabad', 'newagnt@gmail.com', 'eyJpdiI6IkNFNEhRRUYycnF1ZThSbUx0ZDJKTFE9PSIsInZhbHVlIjoiTGNHYThkckhYZTA1Y0xLS04rMUI0QT09IiwibWFjIjoiODYyY2RkY2FiODJiYmRlZWRkZjNmZjNlYTM2NmY5Yjk1MmJjNTQ5ZjBkOTk5ZTA2YWI2YmM1NzQwYzRmZjg3MCIsInRhZyI6IiJ9', 'bottled_water.png', '02003930403', 1),
(2, 'agency two', '0000-00-00', 18, 2, 8, 'Phase 2 Qasimabad', 'agencytwo@gmail.com', 'eyJpdiI6IkNFNEhRRUYycnF1ZThSbUx0ZDJKTFE9PSIsInZhbHVlIjoiTGNHYThkckhYZTA1Y0xLS04rMUI0QT09IiwibWFjIjoiODYyY2RkY2FiODJiYmRlZWRkZjNmZjNlYTM2NmY5Yjk1MmJjNTQ5ZjBkOTk5ZTA2YWI2YmM1NzQwYzRmZjg3MCIsInRhZyI6IiJ9', 'bottled_water.png', '0022165412', 1),
(3, 'Third Agency', '2021-09-26', 20, 1, 158, 'Ghulshan e Iqbal Nipa', 'thirdagency@gmail.com', 'eyJpdiI6IkNFNEhRRUYycnF1ZThSbUx0ZDJKTFE9PSIsInZhbHVlIjoiTGNHYThkckhYZTA1Y0xLS04rMUI0QT09IiwibWFjIjoiODYyY2RkY2FiODJiYmRlZWRkZjNmZjNlYTM2NmY5Yjk1MmJjNTQ5ZjBkOTk5ZTA2YWI2YmM1NzQwYzRmZjg3MCIsInRhZyI6IiJ9', 'bottled_water.png', '02110256390', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dis_order`
--

CREATE TABLE `dis_order` (
  `ord_id` int(11) NOT NULL,
  `ord_dis_id` int(11) NOT NULL,
  `ord_cit_id` int(11) NOT NULL,
  `ord_fulladdr` text NOT NULL,
  `ord_cusname` varchar(100) NOT NULL,
  `ord_cusnumb` varchar(50) NOT NULL,
  `ord_can_no` int(11) NOT NULL,
  `ord_date` date NOT NULL,
  `ord_status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dis_order`
--

INSERT INTO `dis_order` (`ord_id`, `ord_dis_id`, `ord_cit_id`, `ord_fulladdr`, `ord_cusname`, `ord_cusnumb`, `ord_can_no`, `ord_date`, `ord_status`, `updated_at`) VALUES
(1, 2, 8, 'HNo B33 Qasimabad Hyderabad', 'My name', '02330256289', 10, '2021-09-27', 1, '2021-10-04 15:31:01'),
(2, 3, 8, 'HNo B334 Qasimabad Hyderabad', 'My name 2', '02330256289', 23, '2021-10-03', 1, '2021-10-05 01:33:20'),
(3, 1, 8, 'HNo A34 Qasimabad Hyderabad', 'My name 3', '00321351646', 10, '2021-10-03', 1, '2021-10-04 15:31:01'),
(4, 3, 8, 'HNo AA43 Qasimabad Hyderabad', 'My name 4', '001240124012', 10, '2021-10-03', 2, '2021-10-04 20:34:31'),
(5, 3, 158, 'H No 123 Latifabad Hyderabad', 'name 5', '03449586720', 5, '2021-10-04', 2, '2021-10-04 20:40:09'),
(6, 2, 2, 'safaf asdfasf adsfa sfas df', 'aad', '24234234', 2, '2021-10-03', 1, '2021-10-04 15:31:01'),
(7, 2, 8, 'HNo AA33 Qasimabad Hyderabad', 'My name 4', '00321351646', 12, '2021-10-04', 1, '2021-10-04 20:38:57'),
(8, 3, 158, 'HNo A3222 Qasimabad Hyderabad', 'My name 3', '02330256289', 2, '2021-10-04', 2, '2021-12-05 14:30:51'),
(11, 2, 8, 'aaa', 'aaaa', '112212223', 2, '2021-12-02', 1, '2021-12-02 21:47:23'),
(12, 3, 158, 'Latifabad', 'Waseem', '03001234567', 20, '2021-12-05', 1, '2021-12-05 14:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rt_id` int(11) NOT NULL,
  `rt_ds_id` int(11) NOT NULL,
  `rt_cusnumb` varchar(50) NOT NULL,
  `rt_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rt_id`, `rt_ds_id`, `rt_cusnumb`, `rt_rating`) VALUES
(1, 2, '02330256289', 3),
(2, 2, '00321351646', 4),
(3, 2, '03449586720', 5),
(4, 2, '02330256287', 1),
(5, 2, '02330256286', 1),
(6, 1, '02330256289', 2),
(7, 3, '02330256289', 5),
(8, 3, '03449586720', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD UNIQUE KEY `area_id` (`area_id`,`area_title`,`area_cit_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cit_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cn_id`);

--
-- Indexes for table `dis_agency`
--
ALTER TABLE `dis_agency`
  ADD PRIMARY KEY (`ds_id`),
  ADD UNIQUE KEY `ds_id` (`ds_id`,`ds_title`,`ds_regis_date`,`ds_price`,`ds_type`,`ds_cit_id`),
  ADD KEY `ds_cit_id` (`ds_cit_id`);

--
-- Indexes for table `dis_order`
--
ALTER TABLE `dis_order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dis_agency`
--
ALTER TABLE `dis_agency`
  MODIFY `ds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dis_order`
--
ALTER TABLE `dis_order`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dis_agency`
--
ALTER TABLE `dis_agency`
  ADD CONSTRAINT `dis_agency_ibfk_1` FOREIGN KEY (`ds_cit_id`) REFERENCES `city` (`cit_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

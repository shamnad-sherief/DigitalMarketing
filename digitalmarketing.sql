-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 08:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalmarketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `adm_no` varchar(30) NOT NULL,
  `adm_course_id` int(11) NOT NULL,
  `adm_name` varchar(30) NOT NULL,
  `adm_address` varchar(30) NOT NULL,
  `adm_phone` varchar(30) NOT NULL,
  `adm_email` varchar(30) NOT NULL,
  `adm_gender` varchar(30) NOT NULL,
  `adm_date` date NOT NULL,
  `adm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`adm_no`, `adm_course_id`, `adm_name`, `adm_address`, `adm_phone`, `adm_email`, `adm_gender`, `adm_date`, `adm_password`) VALUES
('', 1001, 'Diya', 'ddd', '9946528815', 'dd@gmail.com', 'female', '2020-01-02', ''),
('', 1003, 'fg', 'dsf', '5615155', 'dd@gmail.com', 'female', '2020-02-06', ''),
('', 1223, 'cdc', 'ddd', '9946528815', 'dd@gmail.com', 'female', '2020-02-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `ad_id` int(11) NOT NULL,
  `ad_date` date NOT NULL,
  `code_no` varchar(50) NOT NULL,
  `ip_adddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`ad_id`, `ad_date`, `code_no`, `ip_adddress`) VALUES
(1, '2021-02-11', '1613609242', ''),
(2, '2021-02-12', '1613609242', ''),
(3, '2021-07-01', '1626281920', ''),
(4, '2021-07-02', '1626281927', '');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_request`
--

CREATE TABLE `advertisement_request` (
  `ad_request_id` int(11) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement_request`
--

INSERT INTO `advertisement_request` (`ad_request_id`, `email_id`, `package_id`, `date`) VALUES
(12, 'sshamnad03@gmail.com', 5, '2021-07-14'),
(13, 'sshamnad03@gmail.com', 6, '2021-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `card_no` varchar(200) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expiry` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `card_no`, `cvv`, `expiry`, `amount`) VALUES
(1, '44123655647518', 123, '12/2022', 20000),
(2, '59654756321458', 230, '12/2021', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_id` int(30) NOT NULL,
  `Course_name` varchar(30) NOT NULL,
  `Course_duration` int(30) NOT NULL,
  `Course_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_id`, `Course_name`, `Course_duration`, `Course_type`) VALUES
(1, 'python', 3, ''),
(2, 'python', 3, ''),
(3, 'python', 3, ''),
(4, 'python', 3, ''),
(5, 'python', 3, ''),
(6, 'python', 3, ''),
(7, 'python', 3, ''),
(8, 'python', 3, ''),
(9, 'python', 3, ''),
(10, 'python', 3, ''),
(11, 'python', 3, ''),
(12, 'python', 3, ''),
(13, 'python', 3, ''),
(14, 'python', 3, ''),
(15, 'python', 3, ''),
(16, 'python', 3, ''),
(17, 'python', 3, ''),
(18, 'python', 3, ''),
(19, 'python', 3, ''),
(20, 'python', 3, ''),
(21, 'python', 3, ''),
(22, 'python', 3, ''),
(23, 'python', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `cutomer`
--

CREATE TABLE `cutomer` (
  `cust_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `web_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutomer`
--

INSERT INTO `cutomer` (`cust_id`, `full_name`, `address`, `phone`, `email`, `web_address`) VALUES
(2, 'shiby abraham', 'punnackattu', '9890909090', 'vipin@gmail.com', ''),
(3, ' Nicole Robin', 'sunny villa', '9496789090', 'info@afpageneraltraders.com', ''),
(4, 'honey', 'palackal', '9496325505', 'honey@gmail.com', ''),
(5, 'shiby abraham', 'punnackattu', '9890909090', 'rohini@gmail.com', 'http://example.com'),
(6, 'shamnad', 'shamnad manzil', '9567932761', 'sshamnad03@gmail.com', 'https://shamnadsherief.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_gender` varchar(20) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `emp_joindate` date NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_password` varchar(20) NOT NULL,
  `emp_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_address`, `emp_gender`, `emp_phone`, `emp_joindate`, `emp_email`, `emp_password`, `emp_type`) VALUES
(1, 'appu', '', 'male', '9946525815', '2020-01-31', 'dd@gmail.com', 'yyy123', ''),
(2, 'hhhhhhhhhhh', 'sdf', 'Male', '8989899888', '2021-01-21', 'aeaee@gmail.com', '123', 'staff'),
(4, 'sunny', 'sunny villa', 'Male', '9496325505', '2020-11-11', 'sunny@gmail.com', '123123', 'staff'),
(5, 'Relishwin Varghese', 'relishwin house', 'Male', '9462175642', '2021-07-14', 'relishwinvarghese@gmail.com', 'relishwin', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `username` varchar(200) NOT NULL,
  `random_number` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`username`, `random_number`, `id`) VALUES
('sshamnad03@gmail.com', 948783, 1),
('sshamnad03@gmail.com', 976061, 2),
('sshamnad03@gmail.com', 998340, 3),
('sshamnad03@gmail.com', 988274, 4),
('sshamnad03@gmail.com', 921426, 5),
('sshamnad03@gmail.com', 898063, 6),
('sshamnad03@gmail.com', 936020, 7),
('sshamnad03@gmail.com', 920536, 8),
('sshamnad03@gmail.com', 949918, 9),
('sshamnad03@gmail.com', 985853, 10),
('sshamnad03@gmail.com', 932445, 11),
('sshamnad03@gmail.com', 912064, 12),
('sshamnad03@gmail.com', 961894, 13),
('sshamnad03@gmail.com', 954715, 14);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `status`) VALUES
('admin@gmail.com', 'admin', 'admin', 'active'),
('aeaee@gmail.com', '123', 'employee', 'active'),
('honey@gmail.com', '123123', 'customer', 'active'),
('info@afpageneraltraders.com', '123', 'customer', 'active'),
('relishwinvarghese@gmail.com', 'relishwin', 'employee', 'active'),
('rohini@gmail.com', '123', 'customer', 'active'),
('sshamnad03@gmail.com', 'shamnad', 'customer', 'active'),
('sunny@gmail.com', '123123', 'employee', 'active'),
('uuu@gmail.com', '9090', 'employee', 'active'),
('vipin@gmail.com', '123', 'customer', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `marketingarea`
--

CREATE TABLE `marketingarea` (
  `mkt_id` int(11) NOT NULL,
  `mkt_title` varchar(30) NOT NULL,
  `mkt_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketingarea`
--

INSERT INTO `marketingarea` (`mkt_id`, `mkt_title`, `mkt_type`) VALUES
(1, 'Facebook', 'Online'),
(2, 'Whats Up', 'Online'),
(3, '', 'Kannan'),
(4, '', 'Online'),
(5, '', 'Online'),
(6, '', 'Kannan'),
(7, 'Facebook', 'Online'),
(8, '', 'Online'),
(9, '', 'Online'),
(10, '', 'Online'),
(11, '', 'Online'),
(12, '', 'Online'),
(13, '', 'Online'),
(14, '', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_area`
--

CREATE TABLE `marketing_area` (
  `mkt_id` int(11) NOT NULL,
  `mkt_title` varchar(50) NOT NULL,
  `mkt_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_area`
--

INSERT INTO `marketing_area` (`mkt_id`, `mkt_title`, `mkt_type`) VALUES
(1, 'Facebook', 'Social Media'),
(2, 'Twitter', 'Social Media'),
(5, 'Instagram', 'Social Media');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_team`
--

CREATE TABLE `marketing_team` (
  `team_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `mkt_id` int(11) NOT NULL,
  `code_no` varchar(10) NOT NULL,
  `adv_req_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_team`
--

INSERT INTO `marketing_team` (`team_id`, `emp_id`, `mkt_id`, `code_no`, `adv_req_id`) VALUES
(2, 4, 1, '1613608487', 4),
(3, 4, 1, '1613609242', 5),
(4, 5, 1, '1626281920', 12),
(5, 4, 2, '1626281927', 12),
(6, 2, 5, '1626281935', 12);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `no_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `title`, `description`, `amount`, `no_days`) VALUES
(5, 'SILVER PACKAGE', 'simple and effective package', 2500, 60),
(6, 'Gold', '14days full package', 36000, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`adm_course_id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `advertisement_request`
--
ALTER TABLE `advertisement_request`
  ADD PRIMARY KEY (`ad_request_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_id`);

--
-- Indexes for table `cutomer`
--
ALTER TABLE `cutomer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `marketingarea`
--
ALTER TABLE `marketingarea`
  ADD PRIMARY KEY (`mkt_id`);

--
-- Indexes for table `marketing_area`
--
ALTER TABLE `marketing_area`
  ADD PRIMARY KEY (`mkt_id`);

--
-- Indexes for table `marketing_team`
--
ALTER TABLE `marketing_team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `empid` (`emp_id`),
  ADD KEY `mktid` (`mkt_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advertisement_request`
--
ALTER TABLE `advertisement_request`
  MODIFY `ad_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cutomer`
--
ALTER TABLE `cutomer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `marketingarea`
--
ALTER TABLE `marketingarea`
  MODIFY `mkt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `marketing_area`
--
ALTER TABLE `marketing_area`
  MODIFY `mkt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marketing_team`
--
ALTER TABLE `marketing_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marketing_team`
--
ALTER TABLE `marketing_team`
  ADD CONSTRAINT `empid` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `mktid` FOREIGN KEY (`mkt_id`) REFERENCES `marketing_area` (`mkt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 03:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
(2, '2021-02-12', '1613609242', '');

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
(4, 'honey@gmail.com', 5, '2021-02-18'),
(5, 'rohini@gmail.com', 5, '2021-02-18');

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
(5, 'shiby abraham', 'punnackattu', '9890909090', 'rohini@gmail.com', 'http://example.com');

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
(2, 'hhhhhhhhhhh', 'sdf', 'Male', '8989899888', '2021-01-21', 'aeaee@gmail.com', '123', 'staff'),
(4, 'sunny', 'sunny villa', 'Male', '9496325505', '2020-11-11', 'sunny@gmail.com', '123123', 'staff');

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
('rohini@gmail.com', '123', 'customer', 'active'),
('sunny@gmail.com', '123123', 'employee', 'active'),
('uuu@gmail.com', '9090', 'employee', 'active'),
('vipin@gmail.com', '123', 'customer', 'active');

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
(2, 'Twitter', 'Social Media');

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
(3, 4, 1, '1613609242', 5);

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
(5, 'SILVER PACKAGE', 'simple and effective package', 2500, 60);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

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
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisement_request`
--
ALTER TABLE `advertisement_request`
  MODIFY `ad_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cutomer`
--
ALTER TABLE `cutomer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marketing_area`
--
ALTER TABLE `marketing_area`
  MODIFY `mkt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marketing_team`
--
ALTER TABLE `marketing_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

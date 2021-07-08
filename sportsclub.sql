-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 05:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `sno` int(11) NOT NULL,
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `1785600552` tinyint(1) DEFAULT NULL,
  `1536538846` tinyint(1) DEFAULT NULL,
  `1813673998` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sno`, `day`, `month`, `year`, `1785600552`, `1536538846`, `1813673998`) VALUES
(3, 18, 11, 20, NULL, NULL, NULL),
(4, 19, 11, 20, NULL, NULL, NULL),
(5, 20, 11, 20, NULL, NULL, NULL),
(6, 21, 11, 20, NULL, NULL, NULL),
(7, 21, 12, 20, NULL, NULL, NULL),
(8, 22, 11, 20, NULL, NULL, NULL),
(9, 22, 12, 20, NULL, NULL, NULL),
(10, 2, 2, 21, NULL, NULL, NULL),
(11, 23, 11, 20, NULL, NULL, NULL),
(12, 24, 12, 20, NULL, NULL, NULL),
(13, 30, 1, 21, NULL, NULL, NULL),
(14, 24, 11, 20, NULL, NULL, NULL),
(15, 25, 12, 20, NULL, NULL, NULL),
(16, 25, 11, 20, NULL, NULL, NULL),
(17, 26, 11, 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `sno` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_id` varchar(10) NOT NULL,
  `c_o_mobile` int(11) NOT NULL,
  `c_o_email` varchar(25) NOT NULL,
  `c_o_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`sno`, `c_name`, `c_id`, `c_o_mobile`, `c_o_email`, `c_o_pass`) VALUES
(14, 'Ramiz', 'nt4', 898014087, 'r833250@gmail.com', '$2y$10$pZdgrHLRk8y4uqZD.46GruRnE7L8FlRq7Xv.iqvBKuYpGoUeRkM8e'),
(19, 'Noor', 'Noor', 898014088, 'rabelim87@gmail.com', '$2y$10$D9rh92p2MC4tSSUXBogl3e8paDQ5u93eP5cqCQJBsibi9kC5TUAJu');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `s_no` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `paidby` varchar(15) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`s_no`, `type`, `amount`, `date`, `paidby`, `month`, `year`) VALUES
(89, 'Salary of 224<br><br>', 800, '26-11-20', 'googlepay', 11, 20),
(90, 'Salary of 224<br><br>', 800, '26-11-20', 'Cash', 11, 20);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`sr_no`, `name`, `price`) VALUES
(49, 'AEROBICS ARYA ', 800),
(50, 'Cardio', 600),
(51, 'Yoga', 900);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sno` int(11) NOT NULL,
  `staffid` int(10) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(11) NOT NULL,
  `GENDER` varchar(6) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `MOBILE` bigint(15) NOT NULL,
  `HOME` bigint(15) NOT NULL,
  `DOCTOR` bigint(15) NOT NULL,
  `medHistory` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `aadharNo` bigint(16) NOT NULL,
  `panNo` bigint(20) NOT NULL,
  `birthDate` date NOT NULL,
  `work_exp` text NOT NULL,
  `TOTAL` int(10) DEFAULT NULL,
  `PAID` int(10) DEFAULT NULL,
  `PAYBY` varchar(25) DEFAULT NULL,
  `PAY_DATE` varchar(60) DEFAULT NULL,
  `lpay` int(6) DEFAULT NULL,
  `lamount` int(6) DEFAULT NULL,
  `PENDING` int(10) DEFAULT NULL,
  `joinDate` varchar(10) NOT NULL,
  `lastPay` int(10) NOT NULL,
  `nextPay` varchar(10) NOT NULL,
  `maritiulStauts` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sno`, `staffid`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `EMAIL`, `MOBILE`, `HOME`, `DOCTOR`, `medHistory`, `Address`, `aadharNo`, `panNo`, `birthDate`, `work_exp`, `TOTAL`, `PAID`, `PAYBY`, `PAY_DATE`, `lpay`, `lamount`, `PENDING`, `joinDate`, `lastPay`, `nextPay`, `maritiulStauts`, `password`, `timestamp`) VALUES
(144, 1224489295, 'Mahir', 'Belim', 'M', 'mahirbelim8@gmail.com', 9725648798, 8758856992, 4561452697, 'None', 'Khodpara Main Road Jetpur', 456142536347, 0, '2002-06-26', 'Fresher', 8000, 0, NULL, NULL, NULL, NULL, 8000, '26-11-2020', 0, '26-12-2020', 'unmarried', '$2y$10$1FNVh77K9NtbW..Xi8YLU.VxU1kzukMbPYIPJ0pW/oYwHa94Ndu6a', '2020-11-26 08:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uno` int(11) NOT NULL,
  `userid` int(10) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(11) NOT NULL,
  `GENDER` varchar(6) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `MOBILE` bigint(15) NOT NULL,
  `HOME` bigint(15) NOT NULL,
  `DOCTOR` bigint(15) NOT NULL,
  `medHistory` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `aadharNo` bigint(16) NOT NULL,
  `panNo` bigint(20) NOT NULL,
  `birthDate` date NOT NULL,
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `package` varchar(25) NOT NULL,
  `TOTAL` int(10) NOT NULL,
  `PAID` int(10) NOT NULL,
  `PAYBY` varchar(25) DEFAULT NULL,
  `PAY_DATE` varchar(60) DEFAULT NULL,
  `lpay` int(2) DEFAULT NULL,
  `lamount` int(5) DEFAULT NULL,
  `PENDING` int(10) DEFAULT NULL,
  `MemStatus` varchar(10) DEFAULT NULL,
  `labsent` varchar(10) DEFAULT NULL,
  `maritiulStauts` varchar(10) NOT NULL,
  `club_id` varchar(11) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `shift_id` int(5) NOT NULL,
  `intime` varchar(10) DEFAULT NULL,
  `outtime` varchar(10) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Not Active',
  `lastin` varchar(10) NOT NULL DEFAULT '01-01-1000',
  `eday` int(2) DEFAULT NULL,
  `emonth` int(2) DEFAULT NULL,
  `eyear` int(2) DEFAULT NULL,
  `password` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uno`, `userid`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `EMAIL`, `MOBILE`, `HOME`, `DOCTOR`, `medHistory`, `Address`, `aadharNo`, `panNo`, `birthDate`, `day`, `month`, `year`, `package`, `TOTAL`, `PAID`, `PAYBY`, `PAY_DATE`, `lpay`, `lamount`, `PENDING`, `MemStatus`, `labsent`, `maritiulStauts`, `club_id`, `staff_id`, `shift_id`, `intime`, `outtime`, `status`, `lastin`, `eday`, `emonth`, `eyear`, `password`, `timestamp`) VALUES
(225, 1813673998, 'Ramiz', 'Belim', 'M', 'ramiz@gmail.com', 8980140878, 9998593877, 4521638765, 'None', 'Khodpara Main Road', 451213562478, 0, '2000-11-25', 26, -2, 20, '49', 800, 800, 'Cash', '26-11-20', 11, 800, 0, 'TODAY', NULL, 'unmarried', '14', 144, 3, NULL, NULL, 'Not Active', '01-01-1000', 26, 12, 2020, '$2y$10$M5.iQUIemQIyTezikYG1o.Wg7XDOJY/eNQd0ladubd7XCVorywTo6', '2020-11-26 08:19:15'),
(226, 1536538846, 'Mahir', 'Belim', 'M', 'mahirbelim8@gmail.com', 5656454845, 5545454564, 5465456564, 'None', 'jetpur 360 370', 515875211554, 9223372036854775807, '2005-05-10', 26, -2, 20, '50', 600, 0, NULL, NULL, NULL, NULL, 600, 'TODAY', NULL, 'unmarried', '14', 144, 4, NULL, NULL, 'Not Active', '01-01-1000', 26, 12, 2020, '$2y$10$tK71CrVFGQU5COfuy7jmbO1b5ZRxAjWx/X5KPYkAX6Jf6BmZsoOwC', '2020-11-26 10:01:35'),
(227, 1785600552, 'Riyan', 'Belim', 'M', 'riyen8@gmail.com', 2364578156, 2345686514, 6253422878, 'None', 'Nr school area\r\nJetpur 360370\r\n', 546546545456, 2165445456456, '2020-11-03', 26, -2, 20, '51', 900, 0, NULL, NULL, NULL, NULL, 900, 'TODAY', NULL, 'unmarried', '14', 144, 4, NULL, NULL, 'Not Active', '01-01-1000', 26, 12, 2020, '$2y$10$qvD8YfdL0K0PFmbREVEVnugdJ.MyLzdBWEogT6CTR50AXLsHl30PW', '2020-11-26 10:03:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `club_` (`c_id`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `userid` (`staffid`),
  ADD UNIQUE KEY `mobile` (`MOBILE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uno`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `mobile` (`MOBILE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

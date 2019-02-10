-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2018 at 01:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `player`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestperform`
--

CREATE TABLE `bestperform` (
  `player_id` int(10) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `opp_club` varchar(50) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `match_id` varchar(20) NOT NULL,
  `run` int(10) NOT NULL,
  `wicket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bestperform`
--

INSERT INTO `bestperform` (`player_id`, `clubname`, `opp_club`, `event_id`, `match_id`, `run`, `wicket`) VALUES
(20, 'Sheikh Rasel', 'India', 'BD-IN- 21', 'BD-IN-ODI-234', 112, 4),
(21, 'Chittagong Vikings', 'Rangpur Riders', 'KH-BSP-23', 'CV-RR-T20-301', 131, 5);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `player_id` int(10) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `ins_dept` varchar(50) NOT NULL,
  `board_uni` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`player_id`, `degree`, `ins_dept`, `board_uni`, `year`, `result`) VALUES
(20, 'BSc', 'Computer Science', 'NSU', 2015, '3'),
(21, 'SSC', 'Motijheel Ideal School', 'Dhaka', 2014, '5');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `player_id` int(10) NOT NULL,
  `org` varchar(50) NOT NULL,
  `org_text` varchar(50) NOT NULL,
  `player_sign` varchar(50) NOT NULL,
  `sign_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`player_id`, `org`, `org_text`, `player_sign`, `sign_date`) VALUES
(20, 'bccb', '', 'Navid', '12-12-2018'),
(21, 'iccb', '', 'Rubel Rana', '26-12-2019');

-- --------------------------------------------------------

--
-- Table structure for table `playerreg`
--

CREATE TABLE `playerreg` (
  `player_id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `pr_house` varchar(20) NOT NULL,
  `pr_location` varchar(20) NOT NULL,
  `pr_village` varchar(20) NOT NULL,
  `pr_thana` varchar(20) NOT NULL,
  `pr_district` varchar(20) NOT NULL,
  `pr_postcode` varchar(20) NOT NULL,
  `per_house` varchar(20) NOT NULL,
  `per_location` varchar(20) NOT NULL,
  `per_village` varchar(20) NOT NULL,
  `per_thana` varchar(20) NOT NULL,
  `per_district` varchar(20) NOT NULL,
  `per_postcode` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerreg`
--

INSERT INTO `playerreg` (`player_id`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `pr_house`, `pr_location`, `pr_village`, `pr_thana`, `pr_district`, `pr_postcode`, `per_house`, `per_location`, `per_village`, `per_thana`, `per_district`, `per_postcode`, `dob`) VALUES
(20, 'Md Navid', 'Al', 'Musabbir', 'Jani na', 'Jani na', '123/D', 'Malibug', 'Rampura', 'Rampura', 'Dhaka', '1234', '231/D', 'Modhubug', 'Modhubug', 'Rampura', 'Dhaka', '5678', '12-12-1980'),
(21, 'Mohammad', 'Rubel', 'Rana', 'Abdul Kuddus', 'Rehana Begum', '15/A', 'Bashundhara', 'Block A', 'Vatara', 'Dhaka', '1229', '27/B', 'Natore', 'Bonpara', 'Boraigram', 'Natore', '5005', '15-12-1990');

-- --------------------------------------------------------

--
-- Table structure for table `previoushistory`
--

CREATE TABLE `previoushistory` (
  `player_id` int(10) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `clubfrom` varchar(50) NOT NULL,
  `clubto` varchar(50) NOT NULL,
  `run` int(10) NOT NULL,
  `wicket` varchar(10) NOT NULL,
  `teamleader` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previoushistory`
--

INSERT INTO `previoushistory` (`player_id`, `clubname`, `clubfrom`, `clubto`, `run`, `wicket`, `teamleader`) VALUES
(20, 'Sheikh Rasel', 'Dhaka', 'Khulna', 5000, '250', 'Yes'),
(21, 'Chittagong Vikings', 'Chittagong Vikings', 'Dhaka Dynamites', 7000, '15', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestperform`
--
ALTER TABLE `bestperform`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `playerreg`
--
ALTER TABLE `playerreg`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `previoushistory`
--
ALTER TABLE `previoushistory`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestperform`
--
ALTER TABLE `bestperform`
  MODIFY `player_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `player_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `player_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `playerreg`
--
ALTER TABLE `playerreg`
  MODIFY `player_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `previoushistory`
--
ALTER TABLE `previoushistory`
  MODIFY `player_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

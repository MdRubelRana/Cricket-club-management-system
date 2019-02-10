-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2018 at 01:17 PM
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
-- Database: `contract`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorizedinfo`
--

CREATE TABLE `authorizedinfo` (
  `clubid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorizedinfo`
--

INSERT INTO `authorizedinfo` (`clubid`, `playerid`, `firstname`, `middlename`, `lastname`, `designation`) VALUES
(1001, 3005, 'Sakib', 'Al', 'Hasan', 'Senior Player'),
(1014, 2526, 'Mushfiqur', '', 'Rahim', 'Senior Player');

-- --------------------------------------------------------

--
-- Table structure for table `contractform`
--

CREATE TABLE `contractform` (
  `clubid` int(10) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `playerid` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractform`
--

INSERT INTO `contractform` (`clubid`, `clubname`, `playerid`, `firstname`, `middlename`, `lastname`) VALUES
(1001, 'Dhaka Dynamites', 3005, 'Nichiro', 'Hoshino', 'Kawafuchi'),
(1014, 'Barishal Blazers', 2526, 'Micheal', 'Jorge', 'Stephen');

-- --------------------------------------------------------

--
-- Table structure for table `contractperiod`
--

CREATE TABLE `contractperiod` (
  `clubid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `startdate` varchar(15) NOT NULL,
  `enddate` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractperiod`
--

INSERT INTO `contractperiod` (`clubid`, `playerid`, `startdate`, `enddate`, `amount`) VALUES
(1001, 3005, '15-12-2018', '19-11-2019', 50000),
(1014, 2526, '03-04-2019', '04-10-2022', 350000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `clubid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `serialnumber` varchar(15) NOT NULL,
  `duedate` varchar(15) NOT NULL,
  `paydate` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL,
  `firstwitness` varchar(50) NOT NULL,
  `secondwitness` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`clubid`, `playerid`, `serialnumber`, `duedate`, `paydate`, `amount`, `firstwitness`, `secondwitness`) VALUES
(1001, 3005, '1234', '20-02-2019', '20-03-2019', 50000, 'Navid', 'Monsur'),
(1014, 2526, '102', '11-12-2018', '01-03-2020', 350000, 'Rubel Rana', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorizedinfo`
--
ALTER TABLE `authorizedinfo`
  ADD PRIMARY KEY (`clubid`,`playerid`);

--
-- Indexes for table `contractform`
--
ALTER TABLE `contractform`
  ADD PRIMARY KEY (`clubid`,`playerid`);

--
-- Indexes for table `contractperiod`
--
ALTER TABLE `contractperiod`
  ADD PRIMARY KEY (`clubid`,`playerid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`clubid`,`playerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Database: `teaminfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `teamplayer`
--

CREATE TABLE `teamplayer` (
  `clubid` int(10) NOT NULL,
  `teamleaderid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `coachid` int(10) NOT NULL,
  `playername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamplayer`
--

INSERT INTO `teamplayer` (`clubid`, `teamleaderid`, `playerid`, `coachid`, `playername`) VALUES
(1001, 1213, 123, 1213, 'A'),
(1003, 2004, 2001, 1517, 'Monsur Hillas');

-- --------------------------------------------------------

--
-- Table structure for table `teamreg`
--

CREATE TABLE `teamreg` (
  `clubid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `teamleaderid` int(10) NOT NULL,
  `coachid` int(10) NOT NULL,
  `event_id` varchar(15) NOT NULL,
  `playername` varchar(30) NOT NULL,
  `coachname` varchar(30) NOT NULL,
  `tfdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamreg`
--

INSERT INTO `teamreg` (`clubid`, `playerid`, `teamleaderid`, `coachid`, `event_id`, `playername`, `coachname`, `tfdate`) VALUES
(1001, 3005, 1213, 1213, '115', 'Navid Musabbir', 'Musabbir', '10-12-2017'),
(1003, 3510, 2004, 1517, '225', 'Mehedi Hasan', 'Mushfiqur Rahman', '12-10-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teamplayer`
--
ALTER TABLE `teamplayer`
  ADD PRIMARY KEY (`clubid`,`teamleaderid`,`coachid`,`playerid`);

--
-- Indexes for table `teamreg`
--
ALTER TABLE `teamreg`
  ADD PRIMARY KEY (`playerid`,`clubid`,`event_id`,`teamleaderid`,`coachid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

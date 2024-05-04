-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 12:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunil-auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `aemail`, `apassword`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `btype` varchar(50) NOT NULL,
  `bdate` varchar(50) NOT NULL,
  `bdescription` varchar(500) NOT NULL,
  `bstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `bname`, `bemail`, `btype`, `bdate`, `bdescription`, `bstatus`) VALUES
(1, 'Sunil', 'sunil123@gmail.com', 'Servicing', '2024-05-04', 'ghjghj', 'Approved'),
(2, 'Sunil', 'sunil123@gmail.com', 'Emg. Request', '2024-05-02', 'sdsd', 'Declined'),
(3, 'Sunil', 'sunil123@gmail.com', 'Servicing', '2024-05-06', 'gjgjh', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `cntid` int(11) NOT NULL,
  `cntname` varchar(50) NOT NULL,
  `cntemail` varchar(50) NOT NULL,
  `cntsub` varchar(50) NOT NULL,
  `cntmessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cname`, `cemail`, `cpassword`) VALUES
(3, 'Sunil Baral', 'sunil123@gmail.com', 'af94a517cdf9bad31b2d3b04f9073381');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_services`
--

CREATE TABLE `emergency_services` (
  `eid` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `eemail` varchar(50) NOT NULL,
  `econtact` int(15) NOT NULL,
  `etype` varchar(50) NOT NULL,
  `evname` varchar(50) NOT NULL,
  `evnumber` varchar(50) NOT NULL,
  `evmodel` varchar(50) NOT NULL,
  `esoption` varchar(50) NOT NULL,
  `esldate` varchar(50) NOT NULL,
  `eaddress` varchar(100) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_services`
--

INSERT INTO `emergency_services` (`eid`, `ename`, `eemail`, `econtact`, `etype`, `evname`, `evnumber`, `evmodel`, `esoption`, `esldate`, `eaddress`, `estatus`) VALUES
(1, 'Sunil', 'sunil123@gmail.com', 2147483647, 'Emg. Request', 'fdgdfg', 'dfge5634', 'sfdfs', 'PickUp', '2024-05-03', 'hjhj', ''),
(2, 'Sunil', 'sunil123@gmail.com', 2147483647, 'Emg. Request', 'fdgdfg', 'dfge5634', 'sfdfs', 'PickUp', '2024-05-02', 'fghfgh', 'Approved'),
(3, 'Kushal', 'k@gmail.com', 2147483647, 'Emg. Request', 'fdgdfg', 'dfge5634', 'sfdfs', 'PickUp', '2024-05-05', 'vbnbn', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`cntid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `emergency_services`
--
ALTER TABLE `emergency_services`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `cntid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emergency_services`
--
ALTER TABLE `emergency_services`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 03:07 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cld_pan`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
`ST_NO,N,2` int(2) NOT NULL,
  `ST_NAME,C,22` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`ST_NO,N,2`, `ST_NAME,C,22`) VALUES
(1, 'ANDAMAN & NICOBAR'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHANDIGARH'),
(7, 'DADRA & NAGAR HAVELI'),
(8, 'DAMAN & DIU'),
(9, 'DELHI'),
(10, 'GOA'),
(11, 'GUJRAT'),
(12, 'HARYANA'),
(13, 'HIMACAHL PRADESH'),
(14, 'JAMMU & KASHMIR'),
(15, 'KARNATAKA'),
(16, 'KERALA'),
(17, 'LAKSHDWEEP'),
(18, 'MADHAYA PRADESH'),
(19, 'MAHARASHTRA'),
(20, 'MANIPUR'),
(21, 'MEGHALAYA'),
(22, 'MIZORAM'),
(23, 'NAGALAND'),
(24, 'ORISSA'),
(25, 'PONDICHERRY'),
(26, 'PUNJAB'),
(27, 'RAJASTHAN'),
(28, 'SIKKIM'),
(29, 'TAMILNADU'),
(30, 'TRIPURA'),
(31, 'UTTAR PRADESH'),
(32, 'WEST BENGAL'),
(33, 'CHATTAISHGARH'),
(34, 'UTTRAKHAND'),
(35, 'JHARKHAND'),
(98, 'C/O APO'),
(99, 'OTHER STATE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state`
--
ALTER TABLE `state`
 ADD PRIMARY KEY (`ST_NO,N,2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
MODIFY `ST_NO,N,2` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

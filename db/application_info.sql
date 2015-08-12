-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 03:06 PM
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
-- Table structure for table `application_info`
--

CREATE TABLE IF NOT EXISTS `application_info` (
`SR_NO,N,1` int(11) NOT NULL,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `APPLN_TYPE,N,1` tinyint(1) NOT NULL,
  `APPLN_NO,C,10` varchar(10) NOT NULL,
  `INWARD_NO,N,10,0` int(10) NOT NULL,
  `COUPON_NO,C,10` varchar(10) NOT NULL,
  `AREA_CODE,C,3` varchar(3) NOT NULL,
  `AO_TYPE,C,2` varchar(2) NOT NULL,
  `RANGE,C,3` varchar(3) NOT NULL,
  `AO_CODE,C,2` varchar(2) NOT NULL,
  `OLD_PAN,C,10` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `FINAL_STATUS,N,1` tinyint(1) NOT NULL,
  `FLAG1` tinyint(1) NOT NULL,
  `FLAG2` tinyint(1) NOT NULL,
  `FLAG3` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_info`
--
ALTER TABLE `application_info`
 ADD PRIMARY KEY (`SR_NO,N,1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_info`
--
ALTER TABLE `application_info`
MODIFY `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 03:05 PM
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
-- Table structure for table `address_info_level1`
--

CREATE TABLE IF NOT EXISTS `address_info_level1` (
`SR_NO,N,11` int(11) NOT NULL,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `ADDR_FLAG,C,1` char(1) NOT NULL,
  `RES_ADDR1,C,25` varchar(25) NOT NULL,
  `RES_ADDR2,C,25` varchar(25) NOT NULL,
  `RES_ADDR3,C,25` varchar(25) NOT NULL,
  `RES_ADDR4,C,25` varchar(25) NOT NULL,
  `RES_DIST,C,25` varchar(25) NOT NULL,
  `RES_STATE,C,2` int(2) NOT NULL,
  `RES_PIN,C,6` varchar(6) NOT NULL,
  `RES_CNTRY,C,3` int(3) NOT NULL,
  `OFF_NAME,C,75` varchar(75) NOT NULL,
  `OFF_ADDR1,C,25` varchar(25) NOT NULL,
  `OFF_ADDR2,C,25` varchar(25) NOT NULL,
  `OFF_ADDR3,C,25` varchar(25) NOT NULL,
  `OFF_ADDR4,C,25` varchar(25) NOT NULL,
  `OFF_DIST,C,25` varchar(25) NOT NULL,
  `OFF_STATE,C,2` int(2) NOT NULL,
  `OFF_PIN,C,6` varchar(6) NOT NULL,
  `OFF_CNTRY,C,3` int(3) NOT NULL,
  `TEL_ISD,C,7` varchar(7) NOT NULL,
  `TEL_STD,C,7` varchar(7) NOT NULL,
  `TEL_NO,C,13` varchar(13) NOT NULL,
  `E_MAIL_ID,C,41` varchar(50) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  `flag4` tinyint(1) NOT NULL,
  `flag5` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_info_level1`
--
ALTER TABLE `address_info_level1`
 ADD PRIMARY KEY (`SR_NO,N,11`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_info_level1`
--
ALTER TABLE `address_info_level1`
MODIFY `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

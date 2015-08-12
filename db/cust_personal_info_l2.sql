-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 01:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `cust_personal_info_l2`
--

CREATE TABLE IF NOT EXISTS `cust_personal_info_l2` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `AS_TITLE,C,1` tinyint(1) NOT NULL,
  `AS_LAST,C,75` varchar(75) NOT NULL,
  `AS_FIRST,C,25` varchar(25) NOT NULL,
  `AS_MIDDLE,C,25` varchar(25) NOT NULL,
  `PAN_NAME,C,85` varchar(85) NOT NULL,
  `FTH_LAST,C,25` varchar(25) NOT NULL,
  `FTH_FIRST,C,25` varchar(25) NOT NULL,
  `FTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `SEX,C,1` char(1) NOT NULL,
  `DOB,D` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`),
  KEY `BATCH_ID,N,11` (`FORM_ID,C,18`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

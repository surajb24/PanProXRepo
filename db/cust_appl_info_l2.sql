-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 01:24 PM
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
-- Table structure for table `cust_appl_info_l2`
--

CREATE TABLE IF NOT EXISTS `cust_appl_info_l2` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `PCC_CODE,C,8` varchar(8) NOT NULL,
  `BATCH_NO,C,20` varchar(20) NOT NULL,
  `APPLN_TYPE,N,1` tinyint(1) NOT NULL,
  `APPLN_NO,C,10` varchar(10) NOT NULL,
  `INWARD_NO,N,10,0` int(10) NOT NULL,
  `COUPON_NO,C,10` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `FLAG1` tinyint(1) NOT NULL,
  `FLAG2` tinyint(1) NOT NULL,
  `FLAG3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cust_appl_info_l2`
--

INSERT INTO `cust_appl_info_l2` (`SR_NO,N,1`, `FORM_ID,C,18`, `PCC_CODE,C,8`, `BATCH_NO,C,20`, `APPLN_TYPE,N,1`, `APPLN_NO,C,10`, `INWARD_NO,N,10,0`, `COUPON_NO,C,10`, `STATUS,N,1`, `FLAG1`, `FLAG2`, `FLAG3`) VALUES
(1, 'BF01', '1MH74510', '1MH', 1, '2', 2, '2', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

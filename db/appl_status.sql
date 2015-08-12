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
-- Table structure for table `appl_status`
--

CREATE TABLE IF NOT EXISTS `appl_status` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `ASSIGN_TO_L1,C,30` varchar(30) NOT NULL,
  `ASSIGN_DATE_L1,D` varchar(11) NOT NULL,
  `ASSIGN_TIME_L1,C,8` varchar(8) NOT NULL,
  `ASSIGN_TO_L2,C,30` varchar(30) NOT NULL,
  `ASSIGN_DATE_L2,D` varchar(11) NOT NULL,
  `ASSIGN_TIME_L2,C,8` varchar(8) NOT NULL,
  `COMPLETED_DATE_L1,D` varchar(11) NOT NULL,
  `COMPLETED_TIME_L1,C,8` varchar(8) NOT NULL,
  `COMPLETED_DATE_L2,D` varchar(11) NOT NULL,
  `COMPLETED_TIME_L2,C,8` varchar(8) NOT NULL,
  `COMPARE_BY,C,30` varchar(30) NOT NULL,
  `COMPARE_DATE,D` varchar(11) NOT NULL,
  `COMPARE_S_TIME,C,8` varchar(8) NOT NULL,
  `COMPARE_E_TIME,C,8` varchar(8) NOT NULL,
  `QC_BY,C,30` varchar(30) NOT NULL,
  `QC_DATE,D` varchar(10) NOT NULL,
  `QC_S_TIME,C,8` varchar(8) NOT NULL,
  `QC_E_TIME,C,8` varchar(8) NOT NULL,
  `L1_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `L2_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `COMPARE_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `QC_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `FINAL_STATUS,N,1` varchar(8) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `appl_status`
--

INSERT INTO `appl_status` (`SR_NO,N,1`, `FORM_ID,C,18`, `ASSIGN_TO_L1,C,30`, `ASSIGN_DATE_L1,D`, `ASSIGN_TIME_L1,C,8`, `ASSIGN_TO_L2,C,30`, `ASSIGN_DATE_L2,D`, `ASSIGN_TIME_L2,C,8`, `COMPLETED_DATE_L1,D`, `COMPLETED_TIME_L1,C,8`, `COMPLETED_DATE_L2,D`, `COMPLETED_TIME_L2,C,8`, `COMPARE_BY,C,30`, `COMPARE_DATE,D`, `COMPARE_S_TIME,C,8`, `COMPARE_E_TIME,C,8`, `QC_BY,C,30`, `QC_DATE,D`, `QC_S_TIME,C,8`, `QC_E_TIME,C,8`, `L1_TOTAL_TIME,C,8`, `L2_TOTAL_TIME,C,8`, `COMPARE_TOTAL_TIME,C,8`, `QC_TOTAL_TIME,C,8`, `FINAL_STATUS,N,1`, `flag1`, `flag2`, `flag3`) VALUES
(1, 'BF01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'compare', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

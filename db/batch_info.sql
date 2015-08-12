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
-- Table structure for table `batch_info`
--

CREATE TABLE IF NOT EXISTS `batch_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `PCC_CODE,C,8` varchar(8) NOT NULL,
  `BATCH_NO,C,20` varchar(20) NOT NULL,
  `BATCH_TYPE,C,25` varchar(25) NOT NULL,
  `BATCH_DATE,D` varchar(10) NOT NULL,
  `DATE_OF_RECEIPT,D` varchar(10) NOT NULL,
  `NO_OF_APPLN,N,4` int(4) NOT NULL,
  `IMPORT_BY,C,30` varchar(30) NOT NULL,
  `IMPORT_DATE,D` date NOT NULL,
  `IMPORT_TIME,C,8` varchar(8) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `FLAG1,N,1` tinyint(1) NOT NULL,
  `Flag2` tinyint(1) NOT NULL,
  `Flag3` tinyint(1) NOT NULL,
  `Flag4` tinyint(1) NOT NULL,
  `Flag5` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

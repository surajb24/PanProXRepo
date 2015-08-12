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
-- Table structure for table `cust_verification_info`
--

CREATE TABLE IF NOT EXISTS `cust_verification_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `PHOTO_FLAG,C,1` char(1) NOT NULL,
  `SIG_FLAG,C,1` char(1) NOT NULL,
  `IDENT_DOC,C,2` int(2) NOT NULL,
  `RES_DOC,C,2` int(2) NOT NULL,
  `DOB_DOC,C,2` int(2) NOT NULL,
  `NoOfDoc` tinyint(1) NOT NULL,
  `VER_NAME,C,75` varchar(75) NOT NULL,
  `VER_CAP,C,2` int(1) NOT NULL,
  `VER_PLACE,C,30` varchar(30) NOT NULL,
  `DOA,D` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cust_verification_info`
--

INSERT INTO `cust_verification_info` (`SR_NO,N,11`, `FORM_ID,C,18`, `PHOTO_FLAG,C,1`, `SIG_FLAG,C,1`, `IDENT_DOC,C,2`, `RES_DOC,C,2`, `DOB_DOC,C,2`, `NoOfDoc`, `VER_NAME,C,75`, `VER_CAP,C,2`, `VER_PLACE,C,30`, `DOA,D`, `STATUS,N,1`, `flag1`, `flag2`, `flag3`) VALUES
(1, 'BF01', 'Y', 'Y', 2, 0, 2, 5, 'JAMDD', 3, 'PUNE', '01/02/2015', 1, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

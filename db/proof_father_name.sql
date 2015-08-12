-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 01:27 PM
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
-- Table structure for table `proof_father_name`
--

CREATE TABLE IF NOT EXISTS `proof_father_name` (
  `SR_NO,N,1` int(1) NOT NULL AUTO_INCREMENT,
  `PROOF_NAME,C,40` varchar(40) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `proof_father_name`
--

INSERT INTO `proof_father_name` (`SR_NO,N,1`, `PROOF_NAME,C,40`) VALUES
(1, 'VOTERS ID CARD'),
(2, 'CERTIFICATE OF IDENTITY'),
(3, 'SCHOOL LEAVING CERTIFICATE'),
(4, 'DRIVING LICENSE'),
(5, 'PASSPORT'),
(6, 'RATION CARD'),
(7, 'OTHER DOCUMENT MENTIONING FATHER NAME');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

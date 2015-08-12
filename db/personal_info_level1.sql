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
-- Table structure for table `personal_info_level1`
--

CREATE TABLE IF NOT EXISTS `personal_info_level1` (
`SR_NO,N,11` int(11) NOT NULL,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `AS_TITLE,C,1` tinyint(1) NOT NULL,
  `AS_LAST,C,75` varchar(75) NOT NULL,
  `AS_FIRST,C,25` varchar(25) NOT NULL,
  `AS_MIDDLE,C,25` varchar(25) NOT NULL,
  `PAN_NAME,C,85` varchar(85) NOT NULL,
  `OTH_NM_FLG,C,1` char(1) NOT NULL,
  `OTH_TITLE,C,1` tinyint(1) NOT NULL,
  `OTH_LAST,C,75` varchar(75) NOT NULL,
  `OTH_FIRST,C,25` varchar(25) NOT NULL,
  `OTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `SEX,C,1` char(1) NOT NULL,
  `DOB,D` date NOT NULL,
  `FTH_LAST,C,25` varchar(25) NOT NULL,
  `FTH_FIRST,C,25` varchar(25) NOT NULL,
  `FTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_info_level1`
--
ALTER TABLE `personal_info_level1`
 ADD PRIMARY KEY (`SR_NO,N,11`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_info_level1`
--
ALTER TABLE `personal_info_level1`
MODIFY `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 03:08 PM
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
-- Table structure for table `verification_info`
--

CREATE TABLE IF NOT EXISTS `verification_info` (
`SR_NO,N,11` int(11) NOT NULL,
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
  `DOA,D` date NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `verification_info`
--
ALTER TABLE `verification_info`
 ADD PRIMARY KEY (`SR_NO,N,11`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `verification_info`
--
ALTER TABLE `verification_info`
MODIFY `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

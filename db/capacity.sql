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
-- Table structure for table `capacity`
--

CREATE TABLE IF NOT EXISTS `capacity` (
`CAP_NO,N,1` int(1) NOT NULL,
  `CAP_NAME,C,23` varchar(21) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`CAP_NO,N,1`, `CAP_NAME,C,23`) VALUES
(1, 'SELF'),
(2, 'KARTA'),
(3, 'DIRECTOR'),
(4, 'AUTHORIZED SIGNATORY'),
(5, 'PARTNER'),
(6, 'TRUSTEE'),
(7, 'REPRESENTATIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
 ADD PRIMARY KEY (`CAP_NO,N,1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacity`
--
ALTER TABLE `capacity`
MODIFY `CAP_NO,N,1` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2015 at 11:45 AM
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
-- Table structure for table `cust_qc_other_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_other_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `CATEGORY,C,2` tinyint(1) NOT NULL,
  `STATUS,C,2` char(1) NOT NULL,
  `REGN_NO,C,30` varchar(30) NOT NULL,
  `CONT_CIT,C,3` int(3) NOT NULL,
  `CONT_ISD,C,7` varchar(7) NOT NULL,
  `UID_NO,C,12` varchar(12) NOT NULL,
  `SR_INC1,C,1` char(1) NOT NULL,
  `SR_INC2,C,1` char(1) NOT NULL,
  `PROFESSION,C,2` int(2) NOT NULL,
  `SR_INC3,C,1` char(1) NOT NULL,
  `SR_INC4,C,1` char(1) NOT NULL,
  `SR_INC5,C,1` char(1) NOT NULL,
  `NOINC,C,1` char(1) NOT NULL,
  `SR_INCED1,N,2,0` int(2) NOT NULL,
  `SR_INCED2,N,2,0` int(2) NOT NULL,
  `SR_INCED3,N,2,0` int(2) NOT NULL,
  `SR_INC1VAL,C,2` char(2) NOT NULL,
  `OLD_PAN1,C,10` varchar(10) NOT NULL,
  `OLD_PAN2,C,10` varchar(10) NOT NULL,
  `OLD_PAN3,C,10` varchar(10) NOT NULL,
  `OLD_PAN4,C,10` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cust_qc_other_info`
--

INSERT INTO `cust_qc_other_info` (`SR_NO,N,11`, `FORM_ID,C,18`, `CATEGORY,C,2`, `STATUS,C,2`, `REGN_NO,C,30`, `CONT_CIT,C,3`, `CONT_ISD,C,7`, `UID_NO,C,12`, `SR_INC1,C,1`, `SR_INC2,C,1`, `PROFESSION,C,2`, `SR_INC3,C,1`, `SR_INC4,C,1`, `SR_INC5,C,1`, `NOINC,C,1`, `SR_INCED1,N,2,0`, `SR_INCED2,N,2,0`, `SR_INCED3,N,2,0`, `SR_INC1VAL,C,2`, `OLD_PAN1,C,10`, `OLD_PAN2,C,10`, `OLD_PAN3,C,10`, `OLD_PAN4,C,10`, `STATUS,N,1`, `flag1`, `flag2`, `flag3`) VALUES
(1, '1', 0, 'B', '', 0, '', '123232332323', 'N', 'Y', 11, 'Y', 'Y', 'Y', 'N', 0, 0, 0, '', '', '', '', '', 2, 0, 0, 0);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `newEmpInsert` ON SCHEDULE EVERY 1 HOUR STARTS '2015-03-11 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        CALL `newEmpInsert`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `PersonalLeaveUpdate` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:40:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `PLUpdate`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `newEmpDelete` ON SCHEDULE EVERY 1 HOUR STARTS '2015-03-12 09:01:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        CALL `newEmpDelete`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `UpdateTenure` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:30:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `UpdateTen`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `UpdateStatus` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `UpdateStatus`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `UpdateLeave` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-13 20:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN CALL `UpdateLeave`(); 
END$$

CREATE DEFINER=`root`@`localhost` EVENT `DailyList` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-13 08:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `DailyEmpList`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `WeekOff` ON SCHEDULE EVERY 1 WEEK STARTS '2015-03-22 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
		call WeekOff();
    END$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

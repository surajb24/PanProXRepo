-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2015 at 11:44 AM
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
-- Table structure for table `cust_qc_address_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_address_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `ADDR_FLAG,C,1` char(1) NOT NULL,
  `RES_ADDR1,C,25` varchar(25) NOT NULL,
  `RES_ADDR2,C,25` varchar(25) NOT NULL,
  `RES_ADDR3,C,25` varchar(25) NOT NULL,
  `RES_ADDR4,C,25` varchar(25) NOT NULL,
  `RES_DIST,C,25` varchar(25) NOT NULL,
  `RES_STATE,C,2` int(2) NOT NULL,
  `RES_PIN,C,6` varchar(6) NOT NULL,
  `RES_CNTRY,C,3` int(3) NOT NULL,
  `OFF_NAME,C,75` varchar(75) NOT NULL,
  `OFF_ADDR1,C,25` varchar(25) NOT NULL,
  `OFF_ADDR2,C,25` varchar(25) NOT NULL,
  `OFF_ADDR3,C,25` varchar(25) NOT NULL,
  `OFF_ADDR4,C,25` varchar(25) NOT NULL,
  `OFF_DIST,C,25` varchar(25) NOT NULL,
  `OFF_STATE,C,2` int(2) NOT NULL,
  `OFF_PIN,C,6` varchar(6) NOT NULL,
  `OFF_CNTRY,C,3` int(3) NOT NULL,
  `TEL_ISD,C,7` varchar(7) NOT NULL,
  `TEL_STD,C,7` varchar(7) NOT NULL,
  `TEL_NO,C,13` varchar(13) NOT NULL,
  `E_MAIL_ID,C,41` varchar(50) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  `flag4` tinyint(1) NOT NULL,
  `flag5` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cust_qc_address_info`
--

INSERT INTO `cust_qc_address_info` (`SR_NO,N,11`, `FORM_ID,C,18`, `ADDR_FLAG,C,1`, `RES_ADDR1,C,25`, `RES_ADDR2,C,25`, `RES_ADDR3,C,25`, `RES_ADDR4,C,25`, `RES_DIST,C,25`, `RES_STATE,C,2`, `RES_PIN,C,6`, `RES_CNTRY,C,3`, `OFF_NAME,C,75`, `OFF_ADDR1,C,25`, `OFF_ADDR2,C,25`, `OFF_ADDR3,C,25`, `OFF_ADDR4,C,25`, `OFF_DIST,C,25`, `OFF_STATE,C,2`, `OFF_PIN,C,6`, `OFF_CNTRY,C,3`, `TEL_ISD,C,7`, `TEL_STD,C,7`, `TEL_NO,C,13`, `E_MAIL_ID,C,41`, `STATUS,N,1`, `flag1`, `flag2`, `flag3`, `flag4`, `flag5`) VALUES
(1, '1', 'A', 'A', 'A', 'A', 'A', 'A', 3, '4', 18, 'A', 'A', 'A', 'A', 'A', 'A', 2, '1', 5, '1', '2', '2', 'a', 2, 0, 0, 0, 0, 0);

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

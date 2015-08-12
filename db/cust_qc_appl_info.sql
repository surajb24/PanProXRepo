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
-- Table structure for table `cust_qc_appl_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_appl_info` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `APPLN_TYPE,N,1` tinyint(1) NOT NULL,
  `APPLN_NO,C,10` varchar(10) NOT NULL,
  `INWARD_NO,N,10,0` int(10) NOT NULL,
  `COUPON_NO,C,10` varchar(10) NOT NULL,
  `AREA_CODE,C,3` varchar(3) NOT NULL,
  `AO_TYPE,C,2` varchar(2) NOT NULL,
  `RANGE,C,3` varchar(3) NOT NULL,
  `AO_CODE,C,2` varchar(2) NOT NULL,
  `OLD_PAN,C,10` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `FLAG1` tinyint(1) NOT NULL,
  `FLAG2` tinyint(1) NOT NULL,
  `FLAG3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cust_qc_appl_info`
--

INSERT INTO `cust_qc_appl_info` (`SR_NO,N,1`, `FORM_ID,C,18`, `APPLN_TYPE,N,1`, `APPLN_NO,C,10`, `INWARD_NO,N,10,0`, `COUPON_NO,C,10`, `AREA_CODE,C,3`, `AO_TYPE,C,2`, `RANGE,C,3`, `AO_CODE,C,2`, `OLD_PAN,C,10`, `STATUS,N,1`, `FLAG1`, `FLAG2`, `FLAG3`) VALUES
(1, '1', 1, '1', 1, '1', 'F', 'F', '546', '56', '', 2, 0, 0, 0);

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

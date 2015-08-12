-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2015 at 10:12 AM
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
-- Table structure for table `doc_path`
--

CREATE TABLE IF NOT EXISTS `doc_path` (
  `FORM_ID,C,18` int(11) NOT NULL AUTO_INCREMENT,
  `APP_PATH,C,100` varchar(100) NOT NULL,
  `FRONT_PG_PATH,C,100` varchar(100) NOT NULL,
  `PHOTO_PATH,C,100` varchar(100) NOT NULL,
  `SIGN_PATH,C,100` varchar(100) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`FORM_ID,C,18`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doc_path`
--

INSERT INTO `doc_path` (`FORM_ID,C,18`, `APP_PATH,C,100`, `FRONT_PG_PATH,C,100`, `PHOTO_PATH,C,100`, `SIGN_PATH,C,100`, `STATUS,N,1`, `flag1`, `flag2`, `flag3`) VALUES
(1, '1700044341.pdf', '', '', '', 0, 0, 0, 0);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `newEmpInsert` ON SCHEDULE EVERY 1 HOUR STARTS '2015-03-11 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        CALL `newEmpInsert`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `newEmpDelete` ON SCHEDULE EVERY 1 HOUR STARTS '2015-03-12 09:01:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        CALL `newEmpDelete`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `PersonalLeaveUpdate` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:40:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `PLUpdate`();
     
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

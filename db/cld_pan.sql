-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2015 at 06:47 PM
-- Server version: 5.6.19-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cld_pan`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `compare`(IN `id` VARCHAR(18))
begin
    if(id="")
    then
	   select '';
	else
	INSERT INTO `cust_compare_appl_info`( `FORM_ID,C,18`) VALUES (id);
	INSERT INTO `cust_compare_personal_info`(`FORM_ID,C,18`) VALUES (id);
	INSERT INTO `cust_compare_address_info`(`FORM_ID,C,18`) VALUES (id);
	
	set @flagtrue="";
	
	SELECT `FORM_TYPE,C,1`, `APPLN_NO,C,10`, `INWARD_NO,N,10,0`, `COUPON_NO,C,10` into        @app_type1,@app_no1,@inward1,@coupan1 FROM `cust_appl_info_l1` WHERE `FORM_ID,C,18`=id;
	
	SELECT `FORM_TYPE,C,1`, `APPLN_NO,C,10`, `INWARD_NO,N,10,0`, `COUPON_NO,C,10` into @app_type2,@app_no2,@inward2,@coupan2 FROM `cust_appl_info_l2` WHERE  `FORM_ID,C,18`=id;
	
    SELECT  `AS_TITLE,C,1`, `AS_LAST,C,75`, `AS_FIRST,C,25`, `AS_MIDDLE,C,25`, `PAN_NAME,C,85`, `FTH_LAST,C,25`, `FTH_FIRST,C,25`, `FTH_MIDDLE,C,25`, `SEX,C,1`, `DOB,D` into @title1,@lname1,@fname1,@mname1,@pan1,@flname1,@ffname1,@fmname1,@gender1,@dob1 FROM `cust_personal_info_l2` WHERE `FORM_ID,C,18`=id;
	
	SELECT `AS_TITLE,C,1`, `AS_LAST,C,75`, `AS_FIRST,C,25`, `AS_MIDDLE,C,25`, `PAN_NAME,C,85`,`FTH_LAST,C,25`, `FTH_FIRST,C,25`, `FTH_MIDDLE,C,25`, `SEX,C,1`, `DOB,D` 
	into @title2,@lname2,@fname2,@mname2,@pan2,@flname2,@ffname2,@fmname2,@gender2,@dob2
	FROM `cust_personal_info_l1` where `FORM_ID,C,18`=id;
	
	SELECT `ADDR_FLAG,C,1`, `RES_ADDR1,C,25`, `RES_ADDR2,C,25`, `RES_ADDR3,C,25`, `RES_ADDR4,C,25`, `RES_DIST,C,25`, `RES_STATE,C,2`, `RES_PIN,C,6`, `RES_CNTRY,C,3`, `OFF_NAME,C,75`, `OFF_ADDR1,C,25`, `OFF_ADDR2,C,25`, `OFF_ADDR3,C,25`, `OFF_ADDR4,C,25`, `OFF_DIST,C,25`, `OFF_STATE,C,2`, `OFF_PIN,C,6`, `OFF_CNTRY,C,3` into @adflag1,@res11,@res21,@res31,@res41,@rdist1,@rstate1,@rpin1,@rcountry1,@ofname1,@off11,@off21,@off31,@off41,@odist1,@ostate1,@opin1,@ocountry1 FROM `cust_address_info_l1` WHERE `FORM_ID,C,18`=id;
	
	SELECT `ADDR_FLAG,C,1`, `RES_ADDR1,C,25`, `RES_ADDR2,C,25`, `RES_ADDR3,C,25`, `RES_ADDR4,C,25`, `RES_DIST,C,25`, `RES_STATE,C,2`, `RES_PIN,C,6`, `RES_CNTRY,C,3`, `OFF_NAME,C,75`, `OFF_ADDR1,C,25`, `OFF_ADDR2,C,25`, `OFF_ADDR3,C,25`, `OFF_ADDR4,C,25`, `OFF_DIST,C,25`, `OFF_STATE,C,2`, `OFF_PIN,C,6`, `OFF_CNTRY,C,3` into @adflag2,@res12,@res22,@res32,@res42,@rdist2,@rstate2,@rpin2,@rcountry2,@ofname2,@off12,@off22,@off32,@off42,@odist2,@ostate2,@opin2,@ocountry2 FROM `cust_address_info_l2` WHERE `FORM_ID,C,18`=id;
	
if @app_type1=@app_type2
then
		SET @flagtrue = CONCAT(@flagtrue, "1");
		UPDATE `cust_compare_appl_info` SET `FORM_TYPE,C,1`=@app_type1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, "0");
end if;	

if @app_no1=@app_no2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_appl_info` SET `APPLN_NO,C,10`=@app_no1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @inward1=@inward2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_appl_info` SET `INWARD_NO,N,10,0`=@inward1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;


if @coupan1=@coupan2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_appl_info` SET `COUPON_NO,C,10`=@coupan1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;


if @title1=@title2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `AS_TITLE,C,1`=@title1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @lname1=@lname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `AS_LAST,C,75`=@lname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @fname1=@fname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `AS_FIRST,C,25`=@fname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @mname1=@mname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `AS_MIDDLE,C,25`=@mname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @pan1=@pan2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `PAN_NAME,C,85`=@pan1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @flname1=@flname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `FTH_LAST,C,25`=@flname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @ffname1=@ffname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `FTH_FIRST,C,25`=@ffname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @fmname1=@fmname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `FTH_MIDDLE,C,25`=@fmname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @gender1=@gender2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `SEX,C,1`=@gender1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;


if @dob1=@dob2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_personal_info` SET `DOB,D`=@dob1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;


if @adflag1=@adflag2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `ADDR_FLAG,C,1`=@adflag1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @res11=@res12
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_ADDR1,C,25`=@res11 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @res21=@res22
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_ADDR2,C,25`=@res21 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @res31=@res32
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_ADDR3,C,25`=@res31 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @res41=@res42
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_ADDR4,C,25`=@res41 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @rdist1=@rdist2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_DIST,C,25`=@rdist1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @rstate1=@rstate2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_STATE,C,2`=@rstate1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @rpin1=@rpin2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_PIN,C,6`=@rpin1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @rcountry1=@rcountry2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `RES_CNTRY,C,3`=@rcountry1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @ofname1=@ofname2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_NAME,C,75`=@ofname1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @off11=@off12
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_ADDR1,C,25`=@off11 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @off21=@off22
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_ADDR2,C,25`=@off21 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @off31=@off32
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_ADDR3,C,25`=@off31 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @off41=@off42
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_ADDR4,C,25`=@off41 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @odist1=@odist2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_DIST,C,25`=@odist1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @ostate1=@ostate2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_STATE,C,2`=@ostate1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @opin1=@opin2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_PIN,C,6`=@opin1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

if @ocountry1=@ocountry2
then
		SET @flagtrue = CONCAT(@flagtrue, '1');
		UPDATE `cust_compare_address_info` SET `OFF_CNTRY,C,3`=@ocountry1 WHERE `FORM_ID,C,18`=id;
		
else
		SET @flagtrue = CONCAT(@flagtrue, '0');
end if;

	 SELECT POSITION(0 in @flagtrue) into @pos;
	
	 if(@pos=0)
     then
	    UPDATE `appl_status` SET `FINAL_STATUS,N,1`='11' WHERE `FORM_ID,C,18`=id;
		DELETE FROM `cust_compare_appl_info` WHERE `FORM_ID,C,18`=id;
		DELETE FROM `cust_compare_personal_info` WHERE `FORM_ID,C,18`=id;
		DELETE FROM `cust_compare_address_info` WHERE `FORM_ID,C,18`=id;
		
		INSERT INTO `cust_qc_appl_info`(`FORM_ID,C,18`) VALUES (id);
		INSERT INTO `cust_qc_personal_info`(`FORM_ID,C,18`) VALUES (id);
		INSERT INTO `cust_qc_address_info`(`FORM_ID,C,18`) VALUES (id);
		INSERT INTO `cust_qc_other_info`(`FORM_ID,C,18`) VALUES (id);
		INSERT INTO `cust_qc_ra_info`(`FORM_ID,C,18`) VALUES (id);
		INSERT INTO `cust_qc_verification_info`(`FORM_ID,C,18`) VALUES (id);
	 else
	    UPDATE `appl_status` SET `FINAL_STATUS,N,1`='6' WHERE `FORM_ID,C,18`=id;
	 end if;
	
end if;	
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `addr_flag`
--

CREATE TABLE IF NOT EXISTS `addr_flag` (
  `ADDR_ID,C,1` char(1) NOT NULL,
  `ADDR_NAME,C,9` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addr_flag`
--

INSERT INTO `addr_flag` (`ADDR_ID,C,1`, `ADDR_NAME,C,9`) VALUES
('A', 'RESIDANCE'),
('B', 'OFFICE');

-- --------------------------------------------------------

--
-- Table structure for table `application_type`
--

CREATE TABLE IF NOT EXISTS `application_type` (
  `APPLN_ID,N,1` tinyint(1) NOT NULL AUTO_INCREMENT,
  `APPLN_NAME,C,10` varchar(10) NOT NULL,
  PRIMARY KEY (`APPLN_ID,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `application_type`
--

INSERT INTO `application_type` (`APPLN_ID,N,1`, `APPLN_NAME,C,10`) VALUES
(1, '49A'),
(2, '49AA'),
(3, 'CORRECTION');

-- --------------------------------------------------------

--
-- Table structure for table `appl_status`
--

CREATE TABLE IF NOT EXISTS `appl_status` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `BATCH_ID,N,11` int(11) NOT NULL,
  `ASSIGN_TO_L1,C,30` varchar(30) NOT NULL,
  `ASSIGN_DATE_L1,D` varchar(11) NOT NULL,
  `ASSIGN_TIME_L1,C,8` varchar(8) NOT NULL,
  `ASSIGN_TO_L2,C,30` varchar(30) NOT NULL,
  `ASSIGN_DATE_L2,D` varchar(11) NOT NULL,
  `ASSIGN_TIME_L2,C,8` varchar(8) NOT NULL,
  `COMPLETED_DATE_L1,D` varchar(11) NOT NULL,
  `COMPLETED_TIME_L1,C,8` varchar(8) NOT NULL,
  `COMPLETED_DATE_L2,D` varchar(11) NOT NULL,
  `COMPLETED_TIME_L2,C,8` varchar(8) NOT NULL,
  `COMPARE_BY,C,30` varchar(30) NOT NULL,
  `COMPARE_DATE,D` varchar(11) NOT NULL,
  `COMPARE_S_TIME,C,8` varchar(8) NOT NULL,
  `COMPARE_E_TIME,C,8` varchar(8) NOT NULL,
  `QC_BY,C,30` varchar(30) NOT NULL,
  `QC_DATE,D` varchar(10) NOT NULL,
  `QC_S_TIME,C,8` varchar(8) NOT NULL,
  `QC_E_TIME,C,8` varchar(8) NOT NULL,
  `L1_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `L2_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `COMPARE_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `QC_TOTAL_TIME,C,8` varchar(8) NOT NULL,
  `FINAL_STATUS,N,1` varchar(8) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `PDC_CODE,C,3` varchar(3) NOT NULL DEFAULT '001',
  `AGENCY_CD,C,5` varchar(5) NOT NULL,
  `DOE_AT_AG,D` varchar(10) NOT NULL,
  `DOR_AT_PDC,D` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `Flag5` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE IF NOT EXISTS `capacity` (
  `CAP_NO,N,1` int(1) NOT NULL AUTO_INCREMENT,
  `CAP_NAME,C,23` varchar(21) NOT NULL,
  PRIMARY KEY (`CAP_NO,N,1`)
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

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CAT_ID,N,1` int(1) NOT NULL AUTO_INCREMENT,
  `CAT_NAME,C,1` varchar(14) NOT NULL,
  PRIMARY KEY (`CAT_ID,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CAT_ID,N,1`, `CAT_NAME,C,1`) VALUES
(1, 'INDIVIDUAL'),
(2, 'NON-INDIVIDUAL');

-- --------------------------------------------------------

--
-- Table structure for table `citizenship status`
--

CREATE TABLE IF NOT EXISTS `citizenship status` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `NAME,C,N,10` varchar(100) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `citizenship status`
--

INSERT INTO `citizenship status` (`SR_NO,N,1`, `NAME,C,N,10`) VALUES
(1, 'Foreigner'),
(2, 'Person Of Indian Origin'),
(3, 'Overseas Citizen Of India');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `CNT_NO,N,3` int(3) NOT NULL AUTO_INCREMENT,
  `CNT_NAME,C,45` varchar(42) NOT NULL,
  PRIMARY KEY (`CNT_NO,N,3`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CNT_NO,N,3`, `CNT_NAME,C,45`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALAND ISLANDS'),
(3, 'ALBANIA'),
(4, 'ALGERIA'),
(5, 'AMERICAN SAMOA'),
(6, 'ANDORRA'),
(7, 'ANGOLA'),
(8, 'ANGUILLA'),
(9, 'ANTARCTICA'),
(10, 'ANTIGUA AND BARBUDA'),
(11, 'ARGENTINA'),
(12, 'ARMENIA'),
(13, 'ARUBA'),
(14, 'AUSTRALIA'),
(15, 'AUSTRIA'),
(16, 'AZERBAIJAN'),
(17, 'BAHAMAS'),
(18, 'BAHRAIN'),
(19, 'BANGLADESH'),
(20, 'BARBADOS'),
(21, 'BELARUS'),
(22, 'BELGIUM'),
(23, 'BELIZE'),
(24, 'BENIN'),
(25, 'BERMUDA'),
(26, 'BHUTAN'),
(27, 'BOLIVARIAN REPUBLIC OF VENEZUELA'),
(28, 'BOSNIA AND HERZEGOVINA'),
(29, 'BOTSWANA'),
(30, 'BOUVET ISLAND'),
(31, 'BRAZIL'),
(32, 'BRITISH INDIAN OCEAN TERRITORY'),
(33, 'BRUNEI DARUSSALAM'),
(34, 'BULGARIA'),
(35, 'BURKINA FASO'),
(36, 'BURUNDI'),
(37, 'CAMBODIA'),
(38, 'CAMEROON'),
(39, 'CANADA'),
(40, 'CAPE VERDE'),
(41, 'CAYMAN ISLANDS'),
(42, 'CENTRAL AFRICAN REPUBLIC'),
(43, 'CHAD'),
(44, 'CHILE'),
(45, 'CHINA'),
(46, 'CHRISTMAS ISLAND'),
(47, 'COCOS (KEELING) ISLANDS'),
(48, 'COLOMBIA'),
(49, 'COMOROS'),
(50, 'CONGO'),
(51, 'COOK ISLANDS'),
(52, 'COSTA RICA'),
(53, 'C?TE D''IVOIRE'),
(54, 'CROATIA'),
(55, 'CUBA'),
(56, 'CURA?AO'),
(57, 'CYPRUS'),
(58, 'CZECH REPUBLIC'),
(59, 'DEMOCRATIC PEOPLE''S REPUBLIC OF KOREA(NO'),
(60, 'DENMARK'),
(61, 'DJIBOUTI'),
(62, 'DOMINICA'),
(63, 'DOMINICAN REPUBLIC'),
(64, 'ECUADOR'),
(65, 'EGYPT'),
(66, 'EL SALVADOR'),
(67, 'EQUATORIAL GUINEA'),
(68, 'ERITREA'),
(69, 'ESTONIA'),
(70, 'ETHIOPIA'),
(71, 'FALKLAND ISLANDS (MALVINAS)'),
(72, 'FAROE ISLANDS'),
(73, 'FEDERATED STATES OF MICRONESIA'),
(74, 'FIJI'),
(75, 'FINLAND'),
(76, 'FRANCE'),
(77, 'FRENCH GUIANA'),
(78, 'FRENCH POLYNESIA'),
(79, 'FRENCH SOUTHERN TERRITORIES'),
(80, 'GABON'),
(81, 'GAMBIA'),
(82, 'GEORGIA'),
(83, 'GERMANY'),
(84, 'GHANA'),
(85, 'GIBRALTAR'),
(86, 'GREECE'),
(87, 'GREENLAND'),
(88, 'GRENADA'),
(89, 'GUADELOUPE'),
(90, 'GUAM'),
(91, 'GUATEMALA'),
(92, 'GUERNSEY'),
(93, 'GUINEA'),
(94, 'GUINEA-BISSAU'),
(95, 'GUYANA'),
(96, 'HAITI'),
(97, 'HEARD ISLAND AND MCDONALD ISLANDS'),
(98, 'HOLY SEE (VATICAN CITY STATE)'),
(99, 'HONDURAS'),
(100, 'HONG KONG'),
(101, 'HUNGARY'),
(102, 'ICELAND'),
(103, 'INDIA'),
(104, 'INDONESIA'),
(105, 'IRAQ'),
(106, 'IRELAND'),
(107, 'ISLAMIC REPUBLIC OF IRAN'),
(108, 'ISLE OF MAN'),
(109, 'ISRAEL'),
(110, 'ITALY'),
(111, 'JAMAICA'),
(112, 'JAPAN'),
(113, 'JERSEY'),
(114, 'JORDAN'),
(115, 'KAZAKHSTAN'),
(116, 'KENYA'),
(117, 'KIRIBATI'),
(118, 'KUWAIT'),
(119, 'KYRGYZSTAN'),
(120, 'LAO PEOPLE''S DEMOCRATIC REPUBLIC'),
(121, 'LATVIA'),
(122, 'LEBANON'),
(123, 'LESOTHO'),
(124, 'LIBERIA'),
(125, 'LIBYAN ARAB JAMAHIRIYA'),
(126, 'LIECHTENSTEIN'),
(127, 'LITHUANIA'),
(128, 'LUXEMBOURG'),
(129, 'MACAO'),
(130, 'MADAGASCAR'),
(131, 'MALAWI'),
(132, 'MALAYSIA'),
(133, 'MALDIVES'),
(134, 'MALI'),
(135, 'MALTA'),
(136, 'MARSHALL ISLANDS'),
(137, 'MARTINIQUE'),
(138, 'MAURITANIA'),
(139, 'MAURITIUS'),
(140, 'MAYOTTE'),
(141, 'MEXICO'),
(142, 'MONACO'),
(143, 'MONGOLIA'),
(144, 'MONTENEGRO'),
(145, 'MONTSERRAT'),
(146, 'MOROCCO'),
(147, 'MOZAMBIQUE'),
(148, 'MYANMAR'),
(149, 'NAMIBIA'),
(150, 'NAURU'),
(151, 'NEPAL'),
(152, 'NETHERLANDS'),
(153, 'NEW CALEDONIA'),
(154, 'NEW ZEALAND'),
(155, 'NICARAGUA'),
(156, 'NIGER'),
(157, 'NIGERIA'),
(158, 'NIUE'),
(159, 'NORFOLK ISLAND'),
(160, 'NORTHERN MARIANA ISLANDS'),
(161, 'NORWAY'),
(162, 'OMAN'),
(163, 'PAKISTAN'),
(164, 'PALAU'),
(165, 'PALESTINIAN TERRITORY, OCCUPIED'),
(166, 'PANAMA'),
(167, 'PAPUA NEW GUINEA'),
(168, 'PARAGUAY'),
(169, 'PERU'),
(170, 'PHILIPPINES'),
(171, 'PITCAIRN'),
(172, 'PLURINATIONAL STATE OF BOLIVIA'),
(173, 'POLAND'),
(174, 'PORTUGAL'),
(175, 'PUERTO RICO'),
(176, 'QATAR'),
(177, 'REPUBLIC OF KOREA(SOUTH KOREA)'),
(178, 'REPUBLIC OF MOLDOVA'),
(179, 'R?UNION'),
(180, 'ROMANIA'),
(181, 'RUSSIAN FEDERATION'),
(182, 'RWANDA'),
(183, 'SAINT BARTH?LEMY'),
(184, 'SAINT HELENA, ASCENSION AND TRISTAN DA C'),
(185, 'SAINT KITTS AND NEVIS'),
(186, 'SAINT LUCIA'),
(187, 'SAINT MARTIN (FRENCH PART)'),
(188, 'SAINT PIERRE AND MIQUELON'),
(189, 'SAINT VINCENT AND THE GRENADINES'),
(190, 'SAMOA'),
(191, 'SAN MARINO'),
(192, 'SAO TOME AND PRINCIPE'),
(193, 'SAUDI ARABIA'),
(194, 'SENEGAL'),
(195, 'SERBIA'),
(196, 'SEYCHELLES'),
(197, 'SIERRA LEONE'),
(198, 'SINGAPORE'),
(199, 'SINT EUSTATIUS AND SABA BONAIRE'),
(200, 'SINT MAARTEN (DUTCH PART)'),
(201, 'SLOVAKIA'),
(202, 'SLOVENIA'),
(203, 'SOLOMON ISLANDS'),
(204, 'SOMALIA'),
(205, 'SOUTH AFRICA'),
(206, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISL'),
(207, 'SOUTH SUDAN'),
(208, 'SPAIN'),
(209, 'SRI LANKA'),
(210, 'SUDAN'),
(211, 'SURINAME'),
(212, 'SVALBARD AND JAN MAYEN'),
(213, 'SWAZILAND'),
(214, 'SWEDEN'),
(215, 'SWITZERLAND'),
(216, 'SYRIAN ARAB REPUBLIC'),
(217, 'TAIWAN, PROVINCE OF CHINA'),
(218, 'TAJIKISTAN'),
(219, 'THAILAND'),
(220, 'THE DEMOCRATIC REPUBLIC OF THE CONGO'),
(221, 'THE FORMER YUGOSLAV REPUBLIC OF MACEDONI'),
(222, 'TIMOR-LESTE'),
(223, 'TOGO'),
(224, 'TOKELAU'),
(225, 'TONGA'),
(226, 'TRINIDAD AND TOBAGO'),
(227, 'TUNISIA'),
(228, 'TURKEY'),
(229, 'TURKMENISTAN'),
(230, 'TURKS AND CAICOS ISLANDS'),
(231, 'TUVALU'),
(232, 'UGANDA'),
(233, 'UKRAINE'),
(234, 'UNITED ARAB EMIRATES'),
(235, 'UNITED KINGDOM'),
(236, 'UNITED REPUBLIC OF TANZANIA'),
(237, 'UNITED STATES'),
(238, 'UNITED STATES MINOR OUTLYING ISLANDS'),
(239, 'URUGUAY'),
(240, 'UZBEKISTAN'),
(241, 'VANUATU'),
(242, 'VIET NAM'),
(243, 'VIRGIN ISLANDS, BRITISH'),
(244, 'VIRGIN ISLANDS, U.S.'),
(245, 'WALLIS AND FUTUNA'),
(246, 'WESTERN SAHARA'),
(247, 'YEMEN'),
(248, 'ZAMBIA'),
(249, 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Table structure for table `cust_address_info_l1`
--

CREATE TABLE IF NOT EXISTS `cust_address_info_l1` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_address_info_l2`
--

CREATE TABLE IF NOT EXISTS `cust_address_info_l2` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_appl_info_l1`
--

CREATE TABLE IF NOT EXISTS `cust_appl_info_l1` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `FORM_TYPE,C,1` tinyint(1) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_appl_info_l2`
--

CREATE TABLE IF NOT EXISTS `cust_appl_info_l2` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `FORM_TYPE,C,1` tinyint(1) NOT NULL,
  `APPLN_NO,C,10` varchar(10) NOT NULL,
  `INWARD_NO,N,10,0` int(10) NOT NULL,
  `COUPON_NO,C,10` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `FLAG1` tinyint(1) NOT NULL,
  `FLAG2` tinyint(1) NOT NULL,
  `FLAG3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_compare_address_info`
--

CREATE TABLE IF NOT EXISTS `cust_compare_address_info` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_compare_appl_info`
--

CREATE TABLE IF NOT EXISTS `cust_compare_appl_info` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `FORM_TYPE,C,1` tinyint(1) NOT NULL,
  `APPLN_NO,C,10` varchar(10) NOT NULL,
  `INWARD_NO,N,10,0` int(10) NOT NULL,
  `COUPON_NO,C,10` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `FLAG1` tinyint(1) NOT NULL,
  `FLAG2` tinyint(1) NOT NULL,
  `FLAG3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_compare_personal_info`
--

CREATE TABLE IF NOT EXISTS `cust_compare_personal_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `AS_TITLE,C,1` tinyint(1) NOT NULL,
  `AS_LAST,C,75` varchar(75) NOT NULL,
  `AS_FIRST,C,25` varchar(25) NOT NULL,
  `AS_MIDDLE,C,25` varchar(25) NOT NULL,
  `PAN_NAME,C,85` varchar(85) NOT NULL,
  `FTH_LAST,C,25` varchar(25) NOT NULL,
  `FTH_FIRST,C,25` varchar(25) NOT NULL,
  `FTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `SEX,C,1` char(1) NOT NULL,
  `DOB,D` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_other_col`
--

CREATE TABLE IF NOT EXISTS `cust_other_col` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `NID_BUS,C,30` varchar(30) NOT NULL,
  `NID_DOC,D` varchar(10) NOT NULL,
  `NO_OF_BR,N,4,0` int(4) NOT NULL DEFAULT '0',
  `NO_OF_PART,N,2,0` int(2) NOT NULL DEFAULT '0',
  `DESP_MODE,C,1` char(1) NOT NULL DEFAULT '2',
  `OBJ_STRING,C,34` varchar(34) NOT NULL,
  `AG_OBJ_FL,C,1` varchar(1) NOT NULL,
  `VAL_FLAG,C,1` char(1) DEFAULT 'A',
  `DATA_USER,C,8` varchar(8) NOT NULL DEFAULT 'ADMIN',
  `EDIT_USER,C,8` char(8) NOT NULL,
  `PDCFILETAG,C,1` char(1) NOT NULL,
  `PPCFILETAG,C,1` char(1) NOT NULL,
  `PDCVALFLAG,C,1` char(1) NOT NULL,
  `OBJ_DATE,D` varchar(10) NOT NULL,
  `DESP_ID,C,10` varchar(10) NOT NULL,
  `TAT_FLAG,C,1` char(1) NOT NULL DEFAULT 'N',
  `DOC_IMG,C,1` char(1) NOT NULL,
  `LTI_FLAG,C,1` char(1) NOT NULL,
  `OTH_SRC,C,30` varchar(30) NOT NULL,
  `EDT_GEN_FL,C,1` char(1) NOT NULL,
  `BATTYPE,C,1` char(1) NOT NULL DEFAULT 'N',
  `RES_ZIP,C,11` varchar(11) NOT NULL,
  `OFF_ZIP,C,11` varchar(11) NOT NULL,
  `LLP_STATUS,C,1` char(1) NOT NULL,
  `KYC_FLAG,C,1` char(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_other_info`
--

CREATE TABLE IF NOT EXISTS `cust_other_info` (
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
  `UID_VER,C,1` varchar(1) NOT NULL,
  `UID_NAME,C,80` varchar(80) NOT NULL,
  `UID_YOB,C,4` varchar(4) NOT NULL,
  `UID_SEX,C,1` tinyint(1) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_personal_info_l1`
--

CREATE TABLE IF NOT EXISTS `cust_personal_info_l1` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
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
  `DOB,D` varchar(10) NOT NULL,
  `FTH_LAST,C,25` varchar(25) NOT NULL,
  `FTH_FIRST,C,25` varchar(25) NOT NULL,
  `FTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  `PM` char(1) NOT NULL,
  `SM` char(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_personal_info_l2`
--

CREATE TABLE IF NOT EXISTS `cust_personal_info_l2` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `AS_TITLE,C,1` tinyint(1) NOT NULL,
  `AS_LAST,C,75` varchar(75) NOT NULL,
  `AS_FIRST,C,25` varchar(25) NOT NULL,
  `AS_MIDDLE,C,25` varchar(25) NOT NULL,
  `PAN_NAME,C,85` varchar(85) NOT NULL,
  `FTH_LAST,C,25` varchar(25) NOT NULL,
  `FTH_FIRST,C,25` varchar(25) NOT NULL,
  `FTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `SEX,C,1` char(1) NOT NULL,
  `DOB,D` varchar(10) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`),
  KEY `BATCH_ID,N,11` (`FORM_ID,C,18`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_qc_appl_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_appl_info` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `FORM_TYPE,C,1` tinyint(1) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `UID_VER,C,1` varchar(1) NOT NULL,
  `UID_NAME,C,80` varchar(80) NOT NULL,
  `UID_YOB,C,4` varchar(4) NOT NULL,
  `UID_SEX,C,1` tinyint(1) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_qc_personal_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_personal_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
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
  `DOB,D` varchar(10) NOT NULL,
  `FTH_LAST,C,25` varchar(25) NOT NULL,
  `FTH_FIRST,C,25` varchar(25) NOT NULL,
  `FTH_MIDDLE,C,25` varchar(25) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  `PM` char(1) NOT NULL,
  `SM` char(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_qc_ra_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_ra_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `REP_TITLE,C,1` int(1) NOT NULL,
  `REP_LAST,C,75` varchar(75) NOT NULL,
  `REP_FIRST,C,25` varchar(25) NOT NULL,
  `REP_MIDDLE,C,25` varchar(25) NOT NULL,
  `REP_ADDR1,C,25` varchar(25) NOT NULL,
  `REP_ADDR2,C,25` varchar(25) NOT NULL,
  `REP_ADDR3,C,25` varchar(25) NOT NULL,
  `REP_ADDR4,C,25` varchar(25) NOT NULL,
  `REP_DIST,C,25` varchar(25) NOT NULL,
  `REP_STATE,C,2` int(2) NOT NULL,
  `REP_PIN,C,6` varchar(6) NOT NULL,
  `REP_FLAG,C,1` char(1) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_qc_verification_info`
--

CREATE TABLE IF NOT EXISTS `cust_qc_verification_info` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_ra_info`
--

CREATE TABLE IF NOT EXISTS `cust_ra_info` (
  `SR_NO,N,11` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID,C,18` varchar(18) NOT NULL,
  `REP_TITLE,C,1` int(1) NOT NULL,
  `REP_LAST,C,75` varchar(75) NOT NULL,
  `REP_FIRST,C,25` varchar(25) NOT NULL,
  `REP_MIDDLE,C,25` varchar(25) NOT NULL,
  `REP_ADDR1,C,25` varchar(25) NOT NULL,
  `REP_ADDR2,C,25` varchar(25) NOT NULL,
  `REP_ADDR3,C,25` varchar(25) NOT NULL,
  `REP_ADDR4,C,25` varchar(25) NOT NULL,
  `REP_DIST,C,25` varchar(25) NOT NULL,
  `REP_STATE,C,2` int(2) NOT NULL,
  `REP_PIN,C,6` varchar(6) NOT NULL,
  `REP_FLAG,C,1` char(1) NOT NULL,
  `STATUS,N,1` tinyint(1) NOT NULL,
  `flag2` tinyint(1) NOT NULL,
  `flag3` tinyint(1) NOT NULL,
  PRIMARY KEY (`SR_NO,N,11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dob_doc`
--

CREATE TABLE IF NOT EXISTS `dob_doc` (
  `DOB_DOC_ID,N,2` int(2) NOT NULL AUTO_INCREMENT,
  `DOB_DOC,C,2` varchar(80) NOT NULL,
  PRIMARY KEY (`DOB_DOC_ID,N,2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `dob_doc`
--

INSERT INTO `dob_doc` (`DOB_DOC_ID,N,2`, `DOB_DOC,C,2`) VALUES
(1, 'SCHOOL LEAVING CERTIFIACTE'),
(2, 'BIRTH CERTIFICATE'),
(3, 'VOTERS ID CARD'),
(4, 'OFFICE ID CARD'),
(5, 'DRIVING LICENSE'),
(6, 'PASSPORT'),
(7, 'OTHER AGE DOCUMENT'),
(8, 'ROC CERTIFICATE'),
(9, 'REVISED REGISTRATION/DEED/AGREEMENT'),
(10, 'PENSION PAYMENT ORDER'),
(11, 'MARRIAGE CERTIFICATE ISSUED BY REGISTRAR OF MARRIAGE'),
(12, 'DOMICILE CERTIFICATE ISSUED BY GOVT'),
(13, 'AFFIDAVIT SWORN BEFORE MAGISTRATE STATING DOB'),
(14, 'MATRICULATION CERTIFICATE / MARK SHEET OF RECOGNISED BOARD'),
(15, 'AFFIDAVIT BY KARTA OF HUF STATING NAME FATHER NAME'),
(16, 'REGISTRATION CERTIFICATE ISSUED BY FIRM / LLP'),
(17, 'TRUST DEED/ COPY OF AGREEMENT/ PARTNERSHIP DEED'),
(18, 'REGISTRATION CERTIFICATE NUMBER/TRUST DEED BY CHARITY COMMISSIONER'),
(19, 'CERTIFICATE FROM REGISTRAR OF COOP SOCIETY / COMPETENT AUTHORITY.'),
(21, 'AADHAAR CARD ISSUED BY UIDAI'),
(22, 'PHOTO ID CARD ISSUED BY CENTRAL / STATE GOVT. / PUBLIC SECTOR UNDERTAKING'),
(23, 'CENTRAL GOVT. / EX-SERVICEMEN CONTRIBUTORY HEALTH SCHEME CARD'),
(99, 'NO DOB PROOF FOR OLD FORM');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `form_status`
--

CREATE TABLE IF NOT EXISTS `form_status` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `STATUS,C,9` varchar(100) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `form_status`
--

INSERT INTO `form_status` (`SR_NO,N,1`, `STATUS,C,9`) VALUES
(1, 'Pending'),
(2, 'Submitted'),
(3, 'Level 1 Assigned'),
(4, 'Level 1 Completed'),
(5, 'Level 2 Assigned'),
(6, 'Level 2 Completed'),
(7, 'Compare Assigned'),
(8, 'Compare Completed'),
(9, 'QC Assigned'),
(10, 'QC Completed'),
(11, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `ident_doc`
--

CREATE TABLE IF NOT EXISTS `ident_doc` (
  `IDENT_DOC_ID,N,2` int(2) NOT NULL AUTO_INCREMENT,
  `IDENT_DOC_NAME,C,80` varchar(80) NOT NULL,
  PRIMARY KEY (`IDENT_DOC_ID,N,2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `ident_doc`
--

INSERT INTO `ident_doc` (`IDENT_DOC_ID,N,2`, `IDENT_DOC_NAME,C,80`) VALUES
(1, 'VOTERS ID CARD'),
(2, 'SCHOOL LEAVING CERTIFICATE'),
(3, 'DRIVING LICENSE'),
(4, 'PASSPORT'),
(5, 'RATION CARD HAVING PHOTOGRAPH OF THE APPLICANT.'),
(6, 'OTHER IDENTITY DOCUMENT'),
(7, 'COLLEGE DEGREE'),
(8, 'DEPOSITORY ACCOUNT'),
(9, 'CREDITCARD'),
(10, 'BANK ACCOUNT'),
(11, 'WATER BILL'),
(12, 'PROPERTY TAX ASSESMENT COPY'),
(13, 'CERTIFICATE OF IDENTITY'),
(14, 'REGISTRATION ISSUED BY REGISTRAR OF COMPANIES'),
(15, 'ARMS LICENSE'),
(16, 'AADHAR CARD ISSUED BY UIDAI'),
(17, 'PHOTO ID CARD ISSUED BY CG OR SG OR PSU'),
(18, 'PENSIONER CARD HAVING PHOTOGRAPH OF APPLICANT'),
(19, 'CGHS OR ECHS PHOTO CARD'),
(20, 'CERTIFICATE OF IDENTITY IN ORIGINAL FROM MP/MLA/MC'),
(21, 'BANK CERTIFICATE IN ORIGINAL ATTESTED WITH PHOTO AND BANK A/C'),
(22, 'AFFIDAVIT BY KARTA OF HUF STATING NAME FATHER NAME'),
(23, 'REG CERTIFICATE BY  FIRM / LLP OR PARTNERSHIP DEED'),
(24, 'TRUST DEED/ COPY OF AGREEMENT'),
(25, 'CERTIFICATE OF REG NUMBER  ISSUED BY CHARITY COMMISSIONER'),
(26, 'CERTIFICATE FROM REGISTRAR OF COOPERATIVE SOCIETY / COMPETENT AUTHORITY.'),
(27, 'OTHER DOCUMENT ORIGINATING FROM CG OR SG'),
(28, 'PERSON OF INDIAN ORIGIN CARD ISSUED BY GOVT IND-AA'),
(29, 'OVERSEAS CTZNSHIP CARD ISSUED BY GOVT IND- AA'),
(31, 'OTHER NATIONAL/CIN/TIN ATTESTED BY APOSTILE-AA'),
(32, 'OTHER NATIONAL/CIN/TIN ATTESTED BY EMBASSY-AA'),
(33, 'OTHER NATIONAL/CIN/TIN BY HIGH COMMISSION -49AA'),
(34, 'OTHER NATIONAL/CIN/TIN ATTESTED BY CONSULATE-49AA'),
(35, 'OTHER NATIONAL/CIN/TIN ATTESTED BY OVERSEAS BANKS REGISTERD IN INDIA-AA'),
(36, 'CERTIFICATE OF REGISTRATION ATTESTED BY APOSTILE-AA'),
(37, 'CERTIFICATE OF REGISTRATION ATTESTED INDIAN EMBASSY-AA'),
(38, 'CERTIFICATE OF REGISTRATION ATTESTED BY HIGH COMMISSION-AA'),
(39, 'CERTIFICATE OF REGISTRATION ATTESTED BY CONSULATE-49AA'),
(40, 'CERTIFICATE OF REGISTRATION ATTESTED BY OVERSEAS BRANCHES OF BANKS REGISTERD IN'),
(41, 'REGISTRATION CERTIFICATE ISSUED IN INDIA/APPROVAL FOR OFFICE IN INDA-AA'),
(51, 'MARRIAGE CERTIFICATE'),
(52, 'MARRIAGE INVITATION CARD'),
(53, 'PUBLICATION OF NAME CHANGE IN GAZETTE'),
(54, 'PASSPORT SHOWING SPOUSE NAME/HUSBAND NAME'),
(55, 'ROC CERTIFICATE GIVING NAME CHANGE'),
(56, 'REVISED REGISTRATION/DEED/AGREEMENT'),
(57, 'CERTIFICATE OF IDENTITYFROM GAZETTED OFFICER'),
(58, 'MINOR CORRECTION');

-- --------------------------------------------------------

--
-- Table structure for table `isd_code`
--

CREATE TABLE IF NOT EXISTS `isd_code` (
  `ISD,C,3` varchar(3) NOT NULL,
  `COUNTRY,C,45` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isd_code`
--

INSERT INTO `isd_code` (`ISD,C,3`, `COUNTRY,C,45`) VALUES
('93', 'AFGHANISTAN'),
('358', 'ALAND ISLANDS'),
('355', 'ALBANIA'),
('213', 'ALGERIA'),
('684', 'AMERICAN SAMOA'),
('376', 'ANDORRA'),
('244', 'ANGOLA'),
('264', 'ANGUILLA'),
('672', 'ANTARCTICA'),
('126', 'ANTIGUA AND BARBUDA'),
('54', 'ARGENTINA'),
('374', 'ARMENIA'),
('297', 'ARUBA'),
('A61', 'AUSTRALIA'),
('43', 'AUSTRIA'),
('994', 'AZERBAIJAN'),
('124', 'BAHAMAS'),
('973', 'BAHRAIN'),
('880', 'BANGLADESH'),
('124', 'BARBADOS'),
('375', 'BELARUS'),
('32', 'BELGIUM'),
('501', 'BELIZE'),
('229', 'BENIN'),
('144', 'BERMUDA'),
('975', 'BHUTAN'),
('58', 'BOLIVARIAN REPUBLIC OF VENEZUELA'),
('387', 'BOSNIA AND HERZEGOVINA'),
('267', 'BOTSWANA'),
('47', 'BOUVET ISLAND'),
('55', 'BRAZIL'),
('246', 'BRITISH INDIAN OCEAN TERRITORY'),
('673', 'BRUNEI DARUSSALAM'),
('359', 'BULGARIA'),
('226', 'BURKINA FASO'),
('257', 'BURUNDI'),
('855', 'CAMBODIA'),
('237', 'CAMEROON'),
('A1', 'CANADA'),
('238', 'CAPE VERDE'),
('134', 'CAYMAN ISLANDS'),
('236', 'CENTRAL AFRICAN REPUBLIC'),
('235', 'CHAD'),
('56', 'CHILE'),
('86', 'CHINA'),
('61', 'CHRISTMAS ISLAND'),
('61', 'COCOS (KEELING) ISLANDS'),
('57', 'COLOMBIA'),
('269', 'COMOROS'),
('242', 'CONGO'),
('682', 'COOK ISLANDS'),
('506', 'COSTA RICA'),
('225', 'C?TE D''IVOIRE'),
('385', 'CROATIA'),
('53', 'CUBA'),
('599', 'CURA?AO'),
('357', 'CYPRUS'),
('420', 'CZECH REPUBLIC'),
('850', 'DEMOCRATIC PEOPLE''S REPUBLIC OF KOREA(NO'),
('45', 'DENMARK'),
('253', 'DJIBOUTI'),
('176', 'DOMINICA'),
('182', 'DOMINICAN REPUBLIC'),
('593', 'ECUADOR'),
('20', 'EGYPT'),
('503', 'EL SALVADOR'),
('240', 'EQUATORIAL GUINEA'),
('291', 'ERITREA'),
('372', 'ESTONIA'),
('251', 'ETHIOPIA'),
('500', 'FALKLAND ISLANDS (MALVINAS)'),
('298', 'FAROE ISLANDS'),
('691', 'FEDERATED STATES OF MICRONESIA'),
('679', 'FIJI'),
('358', 'FINLAND'),
('33', 'FRANCE'),
('594', 'FRENCH GUIANA'),
('689', 'FRENCH POLYNESIA'),
('0', 'FRENCH SOUTHERN TERRITORIES'),
('241', 'GABON'),
('220', 'GAMBIA'),
('995', 'GEORGIA'),
('49', 'GERMANY'),
('233', 'GHANA'),
('350', 'GIBRALTAR'),
('30', 'GREECE'),
('299', 'GREENLAND'),
('147', 'GRENADA'),
('590', 'GUADELOUPE'),
('167', 'GUAM'),
('502', 'GUATEMALA'),
('441', 'GUERNSEY'),
('224', 'GUINEA'),
('245', 'GUINEA-BISSAU'),
('592', 'GUYANA'),
('509', 'HAITI'),
('61', 'HEARD ISLAND AND MCDONALD ISLANDS'),
('379', 'HOLY SEE (VATICAN CITY STATE)'),
('504', 'HONDURAS'),
('852', 'HONG KONG'),
('36', 'HUNGARY'),
('354', 'ICELAND'),
('91', 'INDIA'),
('62', 'INDONESIA'),
('964', 'IRAQ'),
('353', 'IRELAND'),
('98', 'ISLAMIC REPUBLIC OF IRAN'),
('441', 'ISLE OF MAN'),
('972', 'ISRAEL'),
('39', 'ITALY'),
('187', 'JAMAICA'),
('81', 'JAPAN'),
('441', 'JERSEY'),
('962', 'JORDAN'),
('7', 'KAZAKHSTAN'),
('254', 'KENYA'),
('686', 'KIRIBATI'),
('965', 'KUWAIT'),
('996', 'KYRGYZSTAN'),
('856', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC'),
('371', 'LATVIA'),
('961', 'LEBANON'),
('266', 'LESOTHO'),
('231', 'LIBERIA'),
('218', 'LIBYAN ARAB JAMAHIRIYA'),
('423', 'LIECHTENSTEIN'),
('370', 'LITHUANIA'),
('352', 'LUXEMBOURG'),
('853', 'MACAO'),
('261', 'MADAGASCAR'),
('265', 'MALAWI'),
('60', 'MALAYSIA'),
('960', 'MALDIVES'),
('223', 'MALI'),
('356', 'MALTA'),
('692', 'MARSHALL ISLANDS'),
('596', 'MARTINIQUE'),
('222', 'MAURITANIA'),
('230', 'MAURITIUS'),
('269', 'MAYOTTE'),
('52', 'MEXICO'),
('377', 'MONACO'),
('976', 'MONGOLIA'),
('382', 'MONTENEGRO'),
('166', 'MONTSERRAT'),
('212', 'MOROCCO'),
('258', 'MOZAMBIQUE'),
('95', 'MYANMAR'),
('264', 'NAMIBIA'),
('674', 'NAURU'),
('977', 'NEPAL'),
('31', 'NETHERLANDS'),
('687', 'NEW CALEDONIA'),
('A64', 'NEW ZEALAND'),
('505', 'NICARAGUA'),
('227', 'NIGER'),
('234', 'NIGERIA'),
('683', 'NIUE'),
('672', 'NORFOLK ISLAND'),
('167', 'NORTHERN MARIANA ISLANDS'),
('47', 'NORWAY'),
('968', 'OMAN'),
('92', 'PAKISTAN'),
('680', 'PALAU'),
('970', 'PALESTINIAN TERRITORY, OCCUPIED'),
('507', 'PANAMA'),
('675', 'PAPUA NEW GUINEA'),
('595', 'PARAGUAY'),
('51', 'PERU'),
('63', 'PHILIPPINES'),
('64', 'PITCAIRN'),
('591', 'PLURINATIONAL STATE OF BOLIVIA'),
('48', 'POLAND'),
('351', 'PORTUGAL'),
('178', 'PUERTO RICO'),
('974', 'QATAR'),
('82', 'REPUBLIC OF KOREA(SOUTH KOREA)'),
('373', 'REPUBLIC OF MOLDOVA'),
('262', 'R?UNION'),
('40', 'ROMANIA'),
('7', 'RUSSIAN FEDERATION'),
('250', 'RWANDA'),
('590', 'SAINT BARTH?LEMY'),
('290', 'SAINT HELENA, ASCENSION AND TRISTAN DA C'),
('186', 'SAINT KITTS AND NEVIS'),
('175', 'SAINT LUCIA'),
('590', 'SAINT MARTIN (FRENCH PART)'),
('508', 'SAINT PIERRE AND MIQUELON'),
('178', 'SAINT VINCENT AND THE GRENADINES'),
('685', 'SAMOA'),
('378', 'SAN MARINO'),
('239', 'SAO TOME AND PRINCIPE'),
('966', 'SAUDI ARABIA'),
('221', 'SENEGAL'),
('381', 'SERBIA'),
('248', 'SEYCHELLES'),
('232', 'SIERRA LEONE'),
('65', 'SINGAPORE'),
('599', 'SINT EUSTATIUS AND SABA BONAIRE'),
('172', 'SINT MAARTEN (DUTCH PART)'),
('421', 'SLOVAKIA'),
('386', 'SLOVENIA'),
('677', 'SOLOMON ISLANDS'),
('252', 'SOMALIA'),
('27', 'SOUTH AFRICA'),
('500', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISL'),
('249', 'SOUTH SUDAN'),
('34', 'SPAIN'),
('94', 'SRI LANKA'),
('249', 'SUDAN'),
('597', 'SURINAME'),
('47', 'SVALBARD AND JAN MAYEN'),
('268', 'SWAZILAND'),
('46', 'SWEDEN'),
('41', 'SWITZERLAND'),
('963', 'SYRIAN ARAB REPUBLIC'),
('886', 'TAIWAN, PROVINCE OF CHINA'),
('992', 'TAJIKISTAN'),
('66', 'THAILAND'),
('243', 'THE DEMOCRATIC REPUBLIC OF THE CONGO'),
('389', 'THE FORMER YUGOSLAV REPUBLIC OF MACEDONI'),
('670', 'TIMOR-LESTE'),
('228', 'TOGO'),
('690', 'TOKELAU'),
('676', 'TONGA'),
('186', 'TRINIDAD AND TOBAGO'),
('216', 'TUNISIA'),
('90', 'TURKEY'),
('993', 'TURKMENISTAN'),
('164', 'TURKS AND CAICOS ISLANDS'),
('688', 'TUVALU'),
('256', 'UGANDA'),
('380', 'UKRAINE'),
('971', 'UNITED ARAB EMIRATES'),
('44', 'UNITED KINGDOM'),
('255', 'UNITED REPUBLIC OF TANZANIA'),
('B1', 'UNITED STATES'),
('999', 'UNITED STATES MINOR OUTLYING ISLANDS'),
('598', 'URUGUAY'),
('998', 'UZBEKISTAN'),
('678', 'VANUATU'),
('84', 'VIET NAM'),
('128', 'VIRGIN ISLANDS, BRITISH'),
('134', 'VIRGIN ISLANDS, U.S.'),
('681', 'WALLIS AND FUTUNA'),
('212', 'WESTERN SAHARA'),
('967', 'YEMEN'),
('260', 'ZAMBIA'),
('263', 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE IF NOT EXISTS `marital_status` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `STATUS,C,10` varchar(100) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`SR_NO,N,1`, `STATUS,C,10`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Divorced'),
(4, 'Window/Windower');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `SrNo` int(5) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(25) NOT NULL,
  `MenuName` varchar(25) NOT NULL,
  PRIMARY KEY (`SrNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`SrNo`, `FileName`, `MenuName`) VALUES
(1, '4.home', 'dataoperator_dash'),
(2, '4.user', 'dataoperator_dash'),
(3, '2.home', 'tl_dash'),
(4, '2.user', 'tl_dash'),
(5, '2.compare', 'com_dash'),
(6, '2.qc', 'com_dash'),
(7, '2.import', 'com_dash');

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE IF NOT EXISTS `occupation` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `NAME,C,N,11` varchar(100) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`SR_NO,N,1`, `NAME,C,N,11`) VALUES
(1, 'Private Sector Services'),
(2, 'Public Sector/Govt.Services'),
(3, 'Business'),
(4, 'Professional'),
(5, 'Agriculturist'),
(6, 'Retired'),
(7, 'House Wife'),
(8, 'Student'),
(9, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `pan_proof`
--

CREATE TABLE IF NOT EXISTS `pan_proof` (
  `SR_NO,N,1` int(1) NOT NULL,
  `PROOF_NAME,C,35` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pan_proof`
--

INSERT INTO `pan_proof` (`SR_NO,N,1`, `PROOF_NAME,C,35`) VALUES
(0, 'NONE'),
(1, 'COPY OF PAN CARD'),
(2, 'COPY OF LETTER FROM ITD ISSUING PAN'),
(3, 'COPY OF FIR');

-- --------------------------------------------------------

--
-- Table structure for table `pcc_info`
--

CREATE TABLE IF NOT EXISTS `pcc_info` (
  `SR_NO,N,1` int(11) NOT NULL AUTO_INCREMENT,
  `PCC_CODE,C,8` varchar(8) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE IF NOT EXISTS `profession` (
  `PROF_ID,N,2` int(2) NOT NULL AUTO_INCREMENT,
  `PROF_NAME,C,30` varchar(30) NOT NULL,
  PRIMARY KEY (`PROF_ID,N,2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`PROF_ID,N,2`, `PROF_NAME,C,30`) VALUES
(1, 'MEDICAL PROFESSION AND BUSINES'),
(2, 'ENGINEERING'),
(3, 'ARCHITECTURE'),
(4, 'CHARTERED ACCOUNTANT/ACCOUNTS'),
(5, 'INTERIOR DECORATION'),
(6, 'TECHNICAL CONSULTANT'),
(7, 'COMPANY SECRETARY'),
(8, 'LEGAL PRACTIONER/ SOLICITOR'),
(9, 'GOVERNMENT CONTRACTOR'),
(10, 'INSURANCE AGENCY'),
(11, 'FILM / TV AND OTHER ENTERTAIN'),
(12, 'INFORMATION TECHNOLOGY'),
(13, 'BUILDERS AND DEVELOPERS'),
(14, 'STOCK EXCH. MEMBER,SHARE BROKE'),
(15, 'PERFORMIMG ARTS AND YATRA'),
(16, 'SHIP, HOVERCRAFT,AIRCRAFT,HELI'),
(17, 'TAXIES,LORRIES,TRUCKS,BUSES'),
(18, 'OWNERSHIP OF HORSES OR JOCKEY'),
(19, 'CINEMA HALLS AND OTHER THEATER'),
(20, 'OTHERS');

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

-- --------------------------------------------------------

--
-- Table structure for table `res_doc`
--

CREATE TABLE IF NOT EXISTS `res_doc` (
  `RES_DOC_ID,N,2` int(2) NOT NULL AUTO_INCREMENT,
  `RES_DOC_NAME,C,80` varchar(80) NOT NULL,
  PRIMARY KEY (`RES_DOC_ID,N,2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `res_doc`
--

INSERT INTO `res_doc` (`RES_DOC_ID,N,2`, `RES_DOC_NAME,C,80`) VALUES
(1, 'ELECTRICITY BILL'),
(2, 'TELEPHONE BILL'),
(3, 'BANK PASS-BOOK'),
(4, 'LETTER FROM EMPLOYER'),
(5, 'PASSPORT'),
(6, 'DRIVING LICENSE'),
(7, 'OTHER ADDRESS DOCUMENT'),
(8, 'DEPOSITORY ACCOUNT'),
(9, 'CREDIT CARD STATEMENT'),
(10, 'RATION CARD'),
(11, 'VOTER''S IDENTITY CARD'),
(12, 'PROPERTY TAX ASSESMENT COPY'),
(13, 'RENT RECEIPT OR CERTIFICATE'),
(14, 'RESIDENCE CERTIFICATE'),
(15, 'CERTIFICATE OF REGISTRATION'),
(16, 'WATER BILL'),
(17, 'GAS CONNECTION CARD OR BOOK OR PIPED GAS BILL'),
(18, 'POST OFFICE PASS BOOK'),
(19, 'DOMICILE CERTIFICATE ISSUED BY GOVT'),
(20, 'PASSPORT SHOWING SPOUSE NAME'),
(21, 'AADHAR CARD ISSUED BY UIDAI'),
(22, 'ALLOTMENT LETTER OF ACCOMODATION ISSUED BY CG/SG'),
(23, 'PROPERTY REGISTRATION DOCUMENT'),
(24, 'CERTIFICATE OF ADDRESS SIGNED BY MP/MLA/MC'),
(25, 'CERTIFICATE FROM GAZETTED OFFICER'),
(26, 'EMPLOYER CERTIFICATE IN ORIGINAL'),
(27, 'AFFIDAVIT BY KARTA OF HUF STATING NAME FATHER NAME'),
(28, 'REG CERTIFICATE BY  FIRM / LLP OR PARTNERSHIP DEED'),
(29, 'TRUST DEED/ COPY OF AGREEMENT'),
(30, 'CERTIFICATE OF REG NUMBER  ISSUED BY CHARITY COMMISSIONER'),
(31, 'CERTIFICATE FROM REGISTRAR OF COOPERATIVE SOCIETY / COMPETENT AUTHORITY.'),
(32, 'OTHER DOCUMENT ORIGINATING FROM CG OR SG'),
(33, 'PERSON OF INDIAN ORIGIN CARD ISSUED BY GOVT IND-AA'),
(34, 'OVERSEAS CTZNSHIP CARD ISSUED BY GOVT IND- AA'),
(35, 'OTHER NATIONAL/CIN/TIN ATTESTED BY APOSTILE-AA'),
(36, 'OTHER NATIONAL/CIN/TIN ATTESTED BY EMBASSY-AA'),
(37, 'OTHER NATIONAL/CIN/TIN BY HIGH COMMISSION -49AA'),
(38, 'OTHER NATIONAL/CIN/TIN ATTESTED BY CONSULATE-49AA'),
(39, 'OTHER NATIONAL/CIN/TIN ATTESTED BY OVERSEAS BANKS REGISTERD IN INDIA-AA'),
(40, 'CERTIFICATE OF REGISTRATION ATTESTED BY APOSTILE-AA'),
(41, 'CERTIFICATE OF REGISTRATION ATTESTED INDIAN EMBASSY-AA'),
(42, 'CERTIFICATE OF REGISTRATION ATTESTED BY HIGH COMMISSION-AA'),
(43, 'CERTIFICATE OF REGISTRATION ATTESTED BY CONSULATE-49AA'),
(44, 'CERTIFICATE OF REGISTRATION ATTESTED BY OVERSEAS BRANCHES OF BANKS REGISTERD IN'),
(45, 'REGISTRATION CERTIFICATE ISSUED IN INDIA/APPROVAL FOR OFFICE IN INDA-AA'),
(46, 'BANK STATEMENT IN THE COUNTRY OF RESIDENCE'),
(47, 'NRE BANK ACCOUNT STATEMENT IN INDIA'),
(48, 'RESIDENCE CERTIFICATE IN INDIA/RESIDENTIAL PERMIT ISSUED BY STATE POLICE-AA'),
(49, 'REGISTRATION CERTIFICATE ISSUED BY FOREIGNERS REGISTRATION OFFICES SHOWING INDI'),
(50, 'VISA WITH APPOINTMENT LETTER WITH CERTIFIFCATE OF INDIAN ADDRESS ISSUED BY EMPL'),
(51, 'REGISTRATION CERTIFICATE ISSUED IN INDIA/APPROVAL FOR SETUP OFFICES INDIA BY IA');

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE IF NOT EXISTS `sex` (
  `SEX_ID,C,1` char(1) NOT NULL,
  `SEX_NAME,C,6` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`SEX_ID,C,1`, `SEX_NAME,C,6`) VALUES
('M', 'MALE'),
('F', 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `ST_NO,N,2` int(2) NOT NULL AUTO_INCREMENT,
  `ST_NAME,C,22` varchar(20) NOT NULL,
  PRIMARY KEY (`ST_NO,N,2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`ST_NO,N,2`, `ST_NAME,C,22`) VALUES
(1, 'ANDAMAN & NICOBAR'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHANDIGARH'),
(7, 'DADRA & NAGAR HAVELI'),
(8, 'DAMAN & DIU'),
(9, 'DELHI'),
(10, 'GOA'),
(11, 'GUJRAT'),
(12, 'HARYANA'),
(13, 'HIMACAHL PRADESH'),
(14, 'JAMMU & KASHMIR'),
(15, 'KARNATAKA'),
(16, 'KERALA'),
(17, 'LAKSHDWEEP'),
(18, 'MADHAYA PRADESH'),
(19, 'MAHARASHTRA'),
(20, 'MANIPUR'),
(21, 'MEGHALAYA'),
(22, 'MIZORAM'),
(23, 'NAGALAND'),
(24, 'ORISSA'),
(25, 'PONDICHERRY'),
(26, 'PUNJAB'),
(27, 'RAJASTHAN'),
(28, 'SIKKIM'),
(29, 'TAMILNADU'),
(30, 'TRIPURA'),
(31, 'UTTAR PRADESH'),
(32, 'WEST BENGAL'),
(33, 'CHATTAISHGARH'),
(34, 'UTTRAKHAND'),
(35, 'JHARKHAND'),
(98, 'C/O APO'),
(99, 'OTHER STATE');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `STA_CODE,C,1` char(2) NOT NULL,
  `STATUS,C,30` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`STA_CODE,C,1`, `STATUS,C,30`) VALUES
('A', 'ASSOCIATION OF PERSON'),
('B', 'BODY OF INDIVIDUAL'),
('C', 'COMPANY'),
('F', 'PARTNERSHIP FIRM'),
('G', 'GOVERNMENT'),
('H', 'HINDU UNDIVIDED FAMILY - HUF'),
('J', 'ARTIFICIAL JUDICIAL PERSON'),
('L', 'LOCAL AUTHORITY'),
('P', 'INDIVIDUAL APPLICANT'),
('T', 'TRUST'),
('F1', 'LIMITED LIABILITY PARTNERSHIP');

-- --------------------------------------------------------

--
-- Table structure for table `system_user_info`
--

CREATE TABLE IF NOT EXISTS `system_user_info` (
  `SrNo` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(50) NOT NULL,
  `FranchiseeID` varchar(20) NOT NULL,
  `UserName` varchar(41) NOT NULL DEFAULT '',
  `UserBranch` varchar(20) NOT NULL,
  `UserDepartment` varchar(30) NOT NULL,
  `UserRole` varchar(40) NOT NULL,
  `UserPass` varchar(40) NOT NULL,
  `Flag` varchar(20) NOT NULL,
  `SecurityQuestion` varchar(250) NOT NULL,
  `SecurityAnswer` varchar(250) NOT NULL,
  `FirstLogIn` varchar(20) NOT NULL,
  `AddFlag` varchar(20) NOT NULL,
  `Forgot_Status` varchar(10) NOT NULL,
  PRIMARY KEY (`SrNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `system_user_info`
--

INSERT INTO `system_user_info` (`SrNo`, `UserID`, `FranchiseeID`, `UserName`, `UserBranch`, `UserDepartment`, `UserRole`, `UserPass`, `Flag`, `SecurityQuestion`, `SecurityAnswer`, `FirstLogIn`, `AddFlag`, `Forgot_Status`) VALUES
(1, '00001', '', 'Admin', '', '1', '1', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(2, '00002', '', 'TL1', '', '2', '2', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(3, '00003', '', 'TL2', '', '', '2', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(4, '00004', '', 'DEO1', '', '', '4', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(5, '00005', '', 'DEO2', '', '', '4', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(6, '00006', '', 'DEO3', '', '', '4', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(7, '00007', '', 'DEO4', '', '', '4', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', ''),
(8, '00008', '', 'DEO5', '', '', '4', 'b4e367e5f88d3f5fd76efb967257411b', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE IF NOT EXISTS `title` (
  `SR_NO,N,1` int(1) NOT NULL AUTO_INCREMENT,
  `TITLE,C,6` varchar(6) NOT NULL,
  PRIMARY KEY (`SR_NO,N,1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`SR_NO,N,1`, `TITLE,C,6`) VALUES
(1, 'SHRI'),
(2, 'SMT'),
(3, 'KUMARI'),
(4, 'M/S');

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `WeekOff` ON SCHEDULE EVERY 1 WEEK STARTS '2015-03-22 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
		call WeekOff();
    END$$

CREATE DEFINER=`root`@`localhost` EVENT `DailyList` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-13 08:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `DailyEmpList`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `UpdateLeave` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-13 20:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN CALL `UpdateLeave`(); 
END$$

CREATE DEFINER=`root`@`localhost` EVENT `UpdateStatus` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `UpdateStatus`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `newEmpInsert` ON SCHEDULE EVERY 1 HOUR STARTS '2015-03-11 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        CALL `newEmpInsert`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `UpdateTenure` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:30:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `UpdateTen`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `newEmpDelete` ON SCHEDULE EVERY 1 HOUR STARTS '2015-03-12 09:01:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        CALL `newEmpDelete`();
     
      END$$

CREATE DEFINER=`root`@`localhost` EVENT `PersonalLeaveUpdate` ON SCHEDULE EVERY 1 DAY STARTS '2015-03-01 09:40:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL `PLUpdate`();
     
      END$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

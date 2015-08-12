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
-- Table structure for table `res_doc`
--

CREATE TABLE IF NOT EXISTS `res_doc` (
`RES_DOC_ID,N,2` int(2) NOT NULL,
  `RES_DOC_NAME,C,80` varchar(80) NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_doc`
--
ALTER TABLE `res_doc`
 ADD PRIMARY KEY (`RES_DOC_ID,N,2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_doc`
--
ALTER TABLE `res_doc`
MODIFY `RES_DOC_ID,N,2` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

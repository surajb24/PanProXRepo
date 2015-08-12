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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

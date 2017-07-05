-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2014 at 06:46 AM
-- Server version: 5.5.20-log
-- PHP Version: 5.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_wmb`
--
CREATE DATABASE IF NOT EXISTS `db_wmb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_wmb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_broadcast`
--

CREATE TABLE IF NOT EXISTS `tbl_broadcast` (
  `broadcast` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_broadcast`
--

INSERT INTO `tbl_broadcast` (`broadcast`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `ls_username` varchar(10) NOT NULL COMMENT 'User name of local server',
  `ls_password` varchar(16) NOT NULL COMMENT 'Password of local server',
  UNIQUE KEY `ls_username` (`ls_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table stores login details';

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ls_username`, `ls_password`) VALUES
('bigb', 'abc123'),
('crossword', 'abc'),
('digital', 'abcd'),
('moreshopee', 'abc'),
('pantalooms', 'abc123'),
('reltrends', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ls`
--

CREATE TABLE IF NOT EXISTS `tbl_ls` (
  `ls_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Local Server ID / Primary Key',
  `ls_name` varchar(30) NOT NULL COMMENT 'Name of Server',
  `ls_owner` varchar(30) NOT NULL COMMENT 'Name of Owner of Server',
  `ls_address` varchar(90) NOT NULL COMMENT 'Address of Local Server',
  `ls_phone` int(12) NOT NULL COMMENT 'Contact No of Local Server',
  `ls_email` varchar(50) NOT NULL COMMENT 'Contact email of Local Server',
  `ls_sub_end` datetime NOT NULL COMMENT 'Subscription end date',
  `ls_username` varchar(10) NOT NULL,
  `ls_website` varchar(40) NOT NULL COMMENT 'website of local server. may remain null',
  PRIMARY KEY (`ls_id`),
  UNIQUE KEY `ls_username` (`ls_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='This table stores the details of Local Server' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_ls`
--

INSERT INTO `tbl_ls` (`ls_id`, `ls_name`, `ls_owner`, `ls_address`, `ls_phone`, `ls_email`, `ls_sub_end`, `ls_username`, `ls_website`) VALUES
(1, 'MoreStore', 'Swanand', 'Solapur', 2147483647, 'gvswanand@gmail.com', '0000-00-00 00:00:00', 'moreshopee', 'www.morestore.com'),
(2, 'CrossWord', 'Sumit', 'Sinnar', 2147483647, 'ssdsin@hotmail.com', '0000-00-00 00:00:00', 'crossword', 'www.crossword.in'),
(3, 'Pantalooms', 'Chetan', 'Nashik', 464648, 'chetancr7@gmail.com', '2014-05-31 02:38:44', 'pantalooms', 'www.pantalooms.com'),
(5, 'Reliance Trends', 'Rahul', 'Nashik Road', 234678682, 'rvm221@gmail.com', '2014-05-31 02:45:42', 'reltrends', 'www.reliance.com/trends'),
(6, 'Reliance Digital', 'Mr. Ambani', 'CCM Nasik', 2475412, 'reldigi@rel.com', '2014-05-31 11:16:24', 'digital', 'www.rel.com'),
(7, 'big bazaar', 'mr. mojad', 'ccm, nasik', 254135, 'bbazaar@gmail.com', '2014-05-31 12:59:21', 'bigb', 'www.bigbazaar.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `msg_id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Message ID / Primary key',
  `msg_body` varchar(3000) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL COMMENT 'Message Body or Message Text',
  `msg_start_date` date NOT NULL COMMENT 'Message Broadcasting start date',
  `msg_end_date` date NOT NULL COMMENT 'Message Broadcasting end date',
  `cat_id` int(3) NOT NULL COMMENT 'Message Category id / Foreign Key',
  `msg_creation_date` date NOT NULL COMMENT 'Message Creation Date',
  `ls_id` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='This table stores messages' AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `msg_body`, `msg_start_date`, `msg_end_date`, `cat_id`, `msg_creation_date`, `ls_id`) VALUES
(1, 'Chetan Bhagat''s Books Complete Collection at only Rs.500. Only at CrossWord CCM', '2014-01-18', '0000-00-00', 12, '2014-01-15', 1),
(2, 'Cinthol Soap only 10 Rs.', '2014-01-17', '2014-02-17', 10, '2014-01-15', 1),
(3, 'I Ball Pen Drive 4GB for Rs. 200.', '2014-01-17', '2014-03-11', 15, '2014-01-15', 1),
(4, 'Shiv Khera''s "You can Win" now at only Rs. 200', '2014-01-24', '2014-01-30', 12, '2014-01-15', 2),
(5, 'Shuttle box is free with purchase of two Yonex Rackets', '2014-02-24', '2014-03-13', 11, '2014-02-24', 1),
(6, 'Purchase Pirates of Caribbean series combo DVD pack at Rs.500 only.', '2014-02-27', '2014-03-27', 12, '2014-02-24', 2),
(7, 'Buy two Marathi Novels and get one free.\r\n*Limited stock', '2014-02-20', '2014-02-28', 12, '2014-02-24', 2),
(8, 'New Marathi novels 50% free', '2014-03-25', '2014-04-04', 12, '2014-03-20', 2),
(9, '10% off on harry potter DVD series', '2014-03-26', '2014-04-08', 12, '2014-03-20', 2),
(10, 'Buy Micromax Canvas 4 and get Lava 1215 mobile absolutely free.', '2014-04-04', '2014-04-30', 15, '2014-04-04', 2),
(11, 'Buy new HP laptop and get accessories free worth Rs. 2500. \r\nT&C', '2014-04-04', '2014-04-30', 15, '2014-04-04', 2),
(12, 'Buy "Five Point Someone" at Rs. 99 only\r\nStock limited ', '2014-05-31', '2014-06-04', 12, '2014-05-31', 2),
(13, 'Exclusive offer on smartphones\r\nbuy new samsung s5 @ rs. 50000/- and get samsung bluetooth free worth 1500/-', '2014-05-31', '2014-06-02', 15, '2014-05-31', 0),
(14, 'top collections of Chetan Bhagat only for rs. 999/-\r\nhurry!!! limited period offer', '2014-05-31', '2014-06-02', 12, '2014-05-31', 2),
(15, 'buy 2 levis jeans n get 1 dj&c t-shirt absolutely free.\r\n', '2014-05-31', '2014-06-02', 1, '2014-05-31', 3),
(16, 'xyz', '2014-05-31', '2014-06-02', 1, '2014-05-31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msg_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_msg_cat` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Message Category ID / Primary key',
  `cat_name` varchar(30) NOT NULL COMMENT 'Name of message category',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_msg_cat`
--

INSERT INTO `tbl_msg_cat` (`cat_id`, `cat_name`) VALUES
(0, 'Other'),
(1, 'Garments'),
(2, 'Grossary'),
(3, 'Food Products'),
(4, 'Vehicles'),
(5, 'Home Appliances'),
(6, 'Food Corner'),
(7, 'Tours & Travels'),
(8, 'Entertainment'),
(9, 'Cosmetics'),
(10, 'Provisional Store Items'),
(11, 'Sport Items'),
(12, 'Books/CD/DVD'),
(13, 'Stationary'),
(14, 'Interiors'),
(15, 'Mobile/Computer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2013 at 10:37 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'Free',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `code`, `number`, `status`, `created_on`, `updated_on`) VALUES
(1, 'TBL001', 'A1', 'Free', '2013-09-22 16:25:52', NULL),
(2, 'TBL002', 'A2', 'Free', '2013-09-22 16:26:00', '2013-09-22 16:26:03'),
(3, 'TBL003', 'A3', 'Booked', '2013-09-22 16:26:17', '2013-09-22 16:26:19'),
(4, 'TBL004', 'A4', 'Free', '2013-09-22 16:26:30', '2013-09-22 16:26:32'),
(5, 'TBL005', 'A5', 'Free', '2013-09-23 16:30:27', '2013-09-17 16:30:30'),
(6, 'TBL006', 'B1', 'Free', '2013-09-22 16:36:35', '2013-09-22 16:36:38'),
(7, 'TBL007', 'B2', 'Free', '2013-09-22 16:36:57', '2013-09-22 16:37:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2013 at 11:02 PM
-- Server version: 5.5.32-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nextcupb_rems`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=140 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `type`, `created_on`, `updated_on`) VALUES
(81, 'Espresso', '', 75, 'Reguler', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Cappuccino', '', 165, 'Reguler', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Cappuccino', '', 199, 'Lagre', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Espresso', '', 105, 'Lagre', '0000-00-00 00:00:00', NULL),
(85, 'Cafe Latte', '', 169, 'Reguler', '0000-00-00 00:00:00', NULL),
(86, 'Cafe Latte', '', 205, 'Lagre', '0000-00-00 00:00:00', NULL),
(87, 'Cafe Mocha', '', 193, 'Reguler', '0000-00-00 00:00:00', NULL),
(88, 'Cafe Mocha', '', 237, 'Lagre', '0000-00-00 00:00:00', NULL),
(89, 'Americano/ Black Coffee', '', 85, 'Reguler', '0000-00-00 00:00:00', NULL),
(90, 'Americano/ Black Coffee', '', 105, 'Lagre', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Cafe Caramel', '', 193, 'Reguler', '0000-00-00 00:00:00', NULL),
(92, 'Cafe Caramel', '', 225, 'Lagre', '0000-00-00 00:00:00', NULL),
(93, 'Cafe Vanilla', '', 180, 'Reguler', '0000-00-00 00:00:00', NULL),
(94, 'Cafe Vanilla', '', 225, 'Lagre', '0000-00-00 00:00:00', NULL),
(95, 'Hazelnut Cappuccino', '', 175, 'Reguler', '0000-00-00 00:00:00', NULL),
(96, 'Hazelnut Cappuccino', '', 220, 'Lagre', '0000-00-00 00:00:00', NULL),
(97, 'Hazelnut Mocha', '', 199, 'Reguler', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Hazelnut Mocha', '', 235, 'Lagre', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Iced Cappuccino', '', 160, 'Reguler', '0000-00-00 00:00:00', NULL),
(100, 'Iced Cappuccino', '', 199, 'Lagre', '0000-00-00 00:00:00', NULL),
(101, 'Iced Mocha', '', 187, 'Reguler', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Iced Mocha', '', 225, 'Lagre', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Iced Espresso', '', 105, 'Reguler', '0000-00-00 00:00:00', NULL),
(104, 'Iced Espresso', '', 132, 'Lagre', '0000-00-00 00:00:00', NULL),
(105, 'Green Tea', '', 50, 'General', '0000-00-00 00:00:00', NULL),
(106, 'Black Tea', '', 50, 'General', '0000-00-00 00:00:00', NULL),
(107, 'Earl Grey Tea', '', 80, 'General', '0000-00-00 00:00:00', NULL),
(108, 'Massala Tea', '', 80, 'General', '0000-00-00 00:00:00', NULL),
(109, 'Hazelnut Frappe', '', 170, 'General', '0000-00-00 00:00:00', NULL),
(110, 'Almond Frappe', '', 170, 'General', '0000-00-00 00:00:00', NULL),
(111, 'Vanilla Frappe', '', 170, 'General', '0000-00-00 00:00:00', NULL),
(112, 'Caramel Frappe', '', 170, 'General', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Mocha Frappe', '', 190, 'General', '0000-00-00 00:00:00', NULL),
(114, 'Cream and Cookies Frappe', '', 250, 'General', '0000-00-00 00:00:00', NULL),
(115, 'Passion Fruit Smoothies', '', 183, 'General', '0000-00-00 00:00:00', NULL),
(116, 'Strawberry Smoothies', '', 175, 'General', '0000-00-00 00:00:00', NULL),
(117, 'Mango Smoothies', '', 179, 'General', '0000-00-00 00:00:00', NULL),
(118, 'Iced Chocolate Yogurt', '', 199, 'General', '0000-00-00 00:00:00', NULL),
(119, 'Iced Coffee Yogurt', '', 177, 'General', '0000-00-00 00:00:00', NULL),
(120, 'Yogurt Passion Fruit Frape', '', 199, 'General', '0000-00-00 00:00:00', NULL),
(121, 'Yogurt Strawberry Frappe', '', 185, 'General', '0000-00-00 00:00:00', NULL),
(122, 'Yogurt Mango Frappe', '', 190, 'General', '0000-00-00 00:00:00', NULL),
(123, 'Lassi', '', 120, 'General', '0000-00-00 00:00:00', NULL),
(124, 'Vanilla Milk Shake', '', 155, 'General', '0000-00-00 00:00:00', NULL),
(125, 'Strawberry Milk Shake', '', 168, 'General', '0000-00-00 00:00:00', NULL),
(126, 'Lemon Touch', '', 189, 'General', '0000-00-00 00:00:00', NULL),
(127, 'Freshly Squeezed Lemonade', '', 95, 'General', '0000-00-00 00:00:00', NULL),
(128, 'Orange Splash', '', 110, 'General', '0000-00-00 00:00:00', NULL),
(129, 'Iced Lemon Tea', '', 135, 'General', '0000-00-00 00:00:00', NULL),
(130, 'Ice Cream Brownie with Chocolate Sauce', '', 155, 'General', '0000-00-00 00:00:00', NULL),
(131, 'Fruit Cake', '', 35, 'General', '0000-00-00 00:00:00', NULL),
(132, 'Banana Split', '', 160, 'General', '0000-00-00 00:00:00', NULL),
(133, 'Vanilla Mocha', '', 222, 'General', '0000-00-00 00:00:00', NULL),
(134, 'Fresh Apple Juice', '', 150, 'General', '0000-00-00 00:00:00', NULL),
(135, 'Fresh Orange Juice', '', 150, 'General', '0000-00-00 00:00:00', NULL),
(136, 'Water 500ml', '', 20, 'General', '0000-00-00 00:00:00', NULL),
(137, 'Original Hot Chocolate', '', 160, 'General', '0000-00-00 00:00:00', NULL),
(138, 'Original White Hot Chocolate ', '', 180, 'General', '0000-00-00 00:00:00', NULL),
(139, 'Flavored Hot Chocolate', '', 199, 'General', '0000-00-00 00:00:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

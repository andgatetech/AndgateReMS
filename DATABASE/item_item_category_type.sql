-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2013 at 10:44 AM
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
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `type` enum('Regular','Large','General') DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `type`, `created_on`, `updated_on`) VALUES
(1, 'Chicken Sandwiches	', NULL, 130, NULL, '2013-09-20 23:56:47', NULL),
(5, 'Beef Sandwiches ', NULL, 140, 'General', '2013-09-20 23:56:47', '0000-00-00 00:00:00'),
(6, 'Tuna Sandwiches', NULL, 150, NULL, '2013-09-20 23:56:47', NULL),
(7, 'Vegetable Sandwiches', NULL, 120, NULL, '2013-09-20 23:56:47', NULL),
(8, 'Grilled/Cold Chicken Sandwich', NULL, 160, NULL, '2013-09-20 23:56:47', NULL),
(9, 'Grilled Beef Sandwich', NULL, 170, NULL, '2013-09-20 23:56:47', NULL),
(10, 'Grilled Tuna Sandwich', NULL, 180, NULL, '2013-09-20 23:56:47', NULL),
(11, 'Next Cup Special Salad ', NULL, 275, NULL, '2013-09-20 23:56:47', NULL),
(12, 'Channa Chat	', NULL, 110, NULL, '2013-09-20 23:56:47', NULL),
(13, 'Chicken Burger', NULL, 150, NULL, '2013-09-20 23:56:47', NULL),
(14, 'Beef Burger', NULL, 170, 'General', '2013-09-20 23:56:47', '0000-00-00 00:00:00'),
(15, 'Vegetable Roll', NULL, 40, NULL, '2013-09-20 23:56:47', NULL),
(16, 'Chicken Roll', NULL, 65, NULL, '2013-09-20 23:56:47', NULL),
(17, 'Espresso', NULL, 105, '', '2013-09-20 23:56:47', NULL),
(18, 'Espresso', NULL, 132, 'Large', '2013-09-20 23:56:47', NULL),
(19, 'Cappuccino', NULL, 220, '', '2013-09-20 23:56:47', NULL),
(20, 'Cappuccino', NULL, 310, 'Large', '2013-09-20 23:56:47', NULL),
(21, 'Café Latte', NULL, 220, '', '2013-09-20 23:56:47', NULL),
(22, 'Café Latte', NULL, 310, 'Large', '2013-09-20 23:56:47', NULL),
(23, 'Café Mocca', NULL, 245, '', '2013-09-20 23:56:47', NULL),
(24, 'Café Mocca', NULL, 320, 'Large', '2013-09-20 23:56:47', NULL),
(25, 'Americano/Black Coffee	', 'test testbbb', 150, 'General', '2013-09-20 23:56:47', '0000-00-00 00:00:00'),
(26, 'Americano/Black Coffee', NULL, 220, 'Large', '2013-09-20 23:56:47', NULL),
(27, 'Café Caramel', NULL, 245, '', '2013-09-20 23:56:47', NULL),
(28, 'Café Caramel', NULL, 335, 'Large', '2013-09-20 23:56:47', NULL),
(29, 'Café Vanilla', NULL, 245, '', '2013-09-20 23:56:47', NULL),
(30, 'Café Vanilla', NULL, 335, 'Large', '2013-09-20 23:56:47', NULL),
(31, 'Hazelnut Cappuccino	', NULL, 245, '', '2013-09-20 23:56:47', NULL),
(32, 'Hazelnut Cappuccino', NULL, 335, 'Large', '2013-09-20 23:56:47', NULL),
(33, 'Hazelnut Mocca', NULL, 270, '', '2013-09-20 23:56:47', NULL),
(34, 'Iced Cappuccino', NULL, 170, '', '2013-09-20 23:56:47', NULL),
(35, 'Iced Cappuccino', NULL, 220, 'Large', '2013-09-20 23:56:47', NULL),
(36, 'Iced Mocca', NULL, 190, '', '2013-09-20 23:56:47', NULL),
(37, 'Iced Mocca', NULL, 240, 'Large', '2013-09-20 23:56:47', NULL),
(38, 'Iced Espresso', NULL, 145, '', '2013-09-20 23:56:47', NULL),
(39, 'Iced Espresso	', NULL, 225, 'Large', '2013-09-20 23:56:47', NULL),
(40, 'Black Tea', NULL, 70, 'General', '2013-09-20 23:56:47', '0000-00-00 00:00:00'),
(41, 'Green Tea', NULL, 70, NULL, '2013-09-20 23:56:47', NULL),
(42, 'Earl Grey Tea', NULL, 90, NULL, '2013-09-20 23:56:47', NULL),
(43, 'Massala Tea', NULL, 100, NULL, '2013-09-20 23:56:47', NULL),
(44, 'Hazelnut Frappe', NULL, 220, NULL, '2013-09-20 23:56:47', NULL),
(46, 'Vanilla Frappe	', NULL, 220, NULL, '2013-09-20 23:56:47', NULL),
(47, 'Caramel Frappe', NULL, 220, NULL, '2013-09-20 23:56:47', NULL),
(48, 'Mocca Frappe', NULL, 250, NULL, '2013-09-20 23:56:47', NULL),
(49, 'Original Hot Chocolate', NULL, 180, NULL, '2013-09-20 23:56:47', NULL),
(50, 'Original White Hot Chocolate', NULL, 200, NULL, '2013-09-20 23:56:47', NULL),
(51, 'Flavored Hot Chocolate', NULL, 235, NULL, '2013-09-20 23:56:47', NULL),
(52, 'Passion Fruit Smoothies', NULL, 225, NULL, '2013-09-20 23:56:47', NULL),
(53, 'Strawberry Smoothies', NULL, 200, NULL, '2013-09-20 23:56:47', NULL),
(54, 'Mango Smoothies', NULL, 200, NULL, '2013-09-20 23:56:47', NULL),
(55, 'Iced Chocolate Yogurt', NULL, 250, NULL, '2013-09-20 23:56:47', NULL),
(56, 'Iced Coffee Yogurt', NULL, 250, NULL, '2013-09-20 23:56:47', NULL),
(57, 'Yogurt Passion Fruit Frappe', NULL, 260, NULL, '2013-09-20 23:56:47', NULL),
(58, 'Yogurt Strawberry Frappe', NULL, 235, NULL, '2013-09-20 23:56:47', NULL),
(59, 'Yogurt Mango Frappe', NULL, 235, NULL, '2013-09-20 23:56:47', NULL),
(60, 'Lassi	', NULL, 120, NULL, '2013-09-20 23:56:47', NULL),
(61, 'Vanilla Milk Shake', NULL, 180, NULL, '2013-09-20 23:56:47', NULL),
(62, 'Strawberry Milk Shake', NULL, 180, NULL, '2013-09-20 23:56:47', NULL),
(63, 'Lemon Touch	', NULL, 180, NULL, '2013-09-20 23:56:47', NULL),
(64, 'Freshly Squeezed Lemonade	', NULL, 125, NULL, '2013-09-20 23:56:47', NULL),
(65, 'Orange Splash	', NULL, 110, NULL, '2013-09-20 23:56:47', NULL),
(66, 'Iced Lemon Tea', NULL, 135, NULL, '2013-09-20 23:56:47', NULL),
(67, 'Ice Cream Brownie with Chocolate Sauce', NULL, 150, NULL, '2013-09-20 23:56:47', NULL),
(68, 'Fruit Cake', NULL, 35, NULL, '2013-09-20 23:56:47', NULL),
(69, 'Banana Split ', NULL, 160, 'General', '2013-09-20 23:56:47', '0000-00-00 00:00:00'),
(70, 'Fresh Apple', NULL, 150, NULL, '2013-09-20 23:56:47', NULL),
(71, 'Fresh Orange', NULL, 150, NULL, '2013-09-20 23:56:47', NULL),
(72, 'Fresh Water 500 ml', NULL, 20, NULL, '2013-09-20 23:56:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE IF NOT EXISTS `item_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `name`, `created_on`, `updated_on`) VALUES
(1, 'Sandwiches', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(2, 'Next Cup Special Sandwiches ', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(3, 'Fresh Salad Items', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(4, 'Spicy Bites', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(5, 'Burgers & Roll Items', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(6, 'Classic Hot Coffee', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(7, 'Flavored Hot Coffee', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(8, 'Coffee with Ice', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(9, 'Hot Tea', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(10, 'Flavored Iced Coffee Frappe', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(11, 'Melted Chocolate', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(12, 'Fruity Smoothies – Non Dairy', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(13, 'Yogurt Base Drinks', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(14, 'Milk Shake', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(15, 'Next Cup Special Moctails', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(16, 'Sweet Items', '2013-09-21 01:07:25', '2013-09-21 01:07:25'),
(17, 'Freshly Squeezed Juices', '2013-09-21 01:07:25', '2013-09-21 01:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `item_types`
--

CREATE TABLE IF NOT EXISTS `item_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `item_types`
--

INSERT INTO `item_types` (`id`, `name`, `created_on`, `updated_on`) VALUES
(1, 'Lagre', '2013-09-22 14:53:02', '2013-09-22 14:53:04'),
(2, 'Reguler', '2013-09-22 14:53:06', '2013-09-22 14:53:09'),
(3, 'General', '2013-09-22 14:53:33', '2013-09-22 14:53:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

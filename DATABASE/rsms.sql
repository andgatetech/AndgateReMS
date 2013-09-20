-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2013 at 08:28 PM
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
-- Table structure for table `inventories`
--

CREATE TABLE IF NOT EXISTS `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inventories`
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
  `type` enum('Reguler','Large') DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `type`, `created_on`, `updated_on`) VALUES
(1, 'Chicken Sandwiches	', NULL, 130, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(5, 'Beef Sandwiches ', NULL, 140, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(6, 'Tuna Sandwiches', NULL, 150, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(7, 'Vegetable Sandwiches', NULL, 120, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(8, 'Grilled/Cold Chicken Sandwich', NULL, 160, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(9, 'Grilled Beef Sandwich', NULL, 170, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(10, 'Grilled Tuna Sandwich', NULL, 180, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(11, 'Next Cup Special Salad ', NULL, 275, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(12, 'Channa Chat	', NULL, 110, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(13, 'Chicken Burger', NULL, 150, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(14, 'Beef Burger', NULL, 170, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(15, 'Vegetable Roll', NULL, 40, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(16, 'Chicken Roll', NULL, 65, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(17, 'Espresso', NULL, 105, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(18, 'Espresso', NULL, 132, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(19, 'Cappuccino', NULL, 220, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(20, 'Cappuccino', NULL, 310, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(21, 'Café Latte', NULL, 220, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(22, 'Café Latte', NULL, 310, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(23, 'Café Mocca', NULL, 245, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(24, 'Café Mocca', NULL, 320, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(25, 'Americano/Black Coffee	', NULL, 150, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(26, 'Americano/Black Coffee', NULL, 220, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(27, 'Café Caramel', NULL, 245, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(28, 'Café Caramel', NULL, 335, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(29, 'Café Vanilla', NULL, 245, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(30, 'Café Vanilla', NULL, 335, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(31, 'Hazelnut Cappuccino	', NULL, 245, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(32, 'Hazelnut Cappuccino', NULL, 335, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(33, 'Hazelnut Mocca', NULL, 270, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(34, 'Iced Cappuccino', NULL, 170, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(35, 'Iced Cappuccino', NULL, 220, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(36, 'Iced Mocca', NULL, 190, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(37, 'Iced Mocca', NULL, 240, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(38, 'Iced Espresso', NULL, 145, 'Reguler', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(39, 'Iced Espresso	', NULL, 225, 'Large', '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(40, 'Black Tea', NULL, 70, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(41, 'Green Tea', NULL, 70, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(42, 'Earl Grey Tea', NULL, 90, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(43, 'Massala Tea', NULL, 100, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(44, 'Hazelnut Frappe', NULL, 220, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(45, 'Almond Frappe', NULL, 220, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(46, 'Vanilla Frappe	', NULL, 220, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(47, 'Caramel Frappe', NULL, 220, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(48, 'Mocca Frappe', NULL, 250, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(49, 'Original Hot Chocolate', NULL, 180, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(50, 'Original White Hot Chocolate', NULL, 200, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(51, 'Flavored Hot Chocolate', NULL, 235, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(52, 'Passion Fruit Smoothies', NULL, 225, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(53, 'Strawberry Smoothies', NULL, 200, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(54, 'Mango Smoothies', NULL, 200, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(55, 'Iced Chocolate Yogurt', NULL, 250, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(56, 'Iced Coffee Yogurt', NULL, 250, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(57, 'Yogurt Passion Fruit Frappe', NULL, 260, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(58, 'Yogurt Strawberry Frappe', NULL, 235, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(59, 'Yogurt Mango Frappe', NULL, 235, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(60, 'Lassi	', NULL, 120, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(61, 'Vanilla Milk Shake', NULL, 180, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(62, 'Strawberry Milk Shake', NULL, 180, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(63, 'Lemon Touch	', NULL, 180, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(64, 'Freshly Squeezed Lemonade	', NULL, 125, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(65, 'Orange Splash	', NULL, 110, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(66, 'Iced Lemon Tea', NULL, 135, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(67, 'Ice Cream Brownie with Chocolate Sauce', NULL, 150, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(68, 'Fruit Cake', NULL, 35, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(69, 'Banana Split ', NULL, 160, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(70, 'Fresh Apple', NULL, 150, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(71, 'Fresh Orange', NULL, 150, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47'),
(72, 'Fresh Water 500 ml', NULL, 20, NULL, '2013-09-20 23:56:47', '2013-09-20 23:56:47');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `item_types`
--


-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `modules`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordernumber` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `roles`
--


-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `settings` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `settings`
--


-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tables`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_on`, `updated_on`) VALUES
(53, 'superadmin', 'superadmin@superadmin.com', '0192023a7bbd73250516f069df18b500', '2012-07-29 19:41:02', '2012-07-29 19:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vendors`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

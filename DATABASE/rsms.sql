-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 10:28 PM
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
-- Table structure for table `join_user_types_users`
--

CREATE TABLE IF NOT EXISTS `join_user_types_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `user_type_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_students_subjects_copy1_users1` (`user_id`),
  KEY `fk_students_subjects_copy1_userTypes1` (`user_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `join_user_types_users`
--

INSERT INTO `join_user_types_users` (`id`, `user_id`, `user_type_id`) VALUES
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(41, 52, 1),
(40, 51, 1),
(39, 50, 1),
(38, 49, 1),
(37, 48, 1),
(36, 47, 1),
(35, 46, 1),
(34, 45, 2),
(33, 44, 2),
(32, 43, 2),
(31, 42, 2),
(30, 40, 2),
(18, 4, 2),
(27, 36, 1),
(26, 35, 1),
(25, 34, 1),
(29, 39, 1),
(28, 38, 2),
(42, 53, 3);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `type` enum('Reguler','Large') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `description`, `price`, `type`) VALUES
(1, 'Chicken Sandwiches	', NULL, 130, NULL),
(5, 'Beef Sandwiches ', NULL, 140, NULL),
(6, 'Tuna Sandwiches', NULL, 150, NULL),
(7, 'Vegetable Sandwiches', NULL, 120, NULL),
(8, 'Grilled/Cold Chicken Sandwich', NULL, 160, NULL),
(9, 'Grilled Beef Sandwich', NULL, 170, NULL),
(10, 'Grilled Tuna Sandwich', NULL, 180, NULL),
(11, 'Next Cup Special Salad ', NULL, 275, NULL),
(12, 'Channa Chat	', NULL, 110, NULL),
(13, 'Chicken Burger', NULL, 150, NULL),
(14, 'Beef Burger', NULL, 170, NULL),
(15, 'Vegetable Roll', NULL, 40, NULL),
(16, 'Chicken Roll', NULL, 65, NULL),
(17, 'Espresso', NULL, 105, 'Reguler'),
(18, 'Espresso', NULL, 132, 'Large'),
(19, 'Cappuccino', NULL, 220, 'Reguler'),
(20, 'Cappuccino', NULL, 310, 'Large'),
(21, 'Café Latte', NULL, 220, 'Reguler'),
(22, 'Café Latte', NULL, 310, 'Large'),
(23, 'Café Mocca', NULL, 245, 'Reguler'),
(24, 'Café Mocca', NULL, 320, 'Large'),
(25, 'Americano/Black Coffee	', NULL, 150, 'Reguler'),
(26, 'Americano/Black Coffee', NULL, 220, 'Large'),
(27, 'Café Caramel', NULL, 245, 'Reguler'),
(28, 'Café Caramel', NULL, 335, 'Large'),
(29, 'Café Vanilla', NULL, 245, 'Reguler'),
(30, 'Café Vanilla', NULL, 335, 'Large'),
(31, 'Hazelnut Cappuccino	', NULL, 245, 'Reguler'),
(32, 'Hazelnut Cappuccino', NULL, 335, 'Large'),
(33, 'Hazelnut Mocca', NULL, 270, 'Reguler'),
(34, 'Iced Cappuccino', NULL, 170, 'Reguler'),
(35, 'Iced Cappuccino', NULL, 220, 'Large'),
(36, 'Iced Mocca', NULL, 190, 'Reguler'),
(37, 'Iced Mocca', NULL, 240, 'Large'),
(38, 'Iced Espresso', NULL, 145, 'Reguler'),
(39, 'Iced Espresso	', NULL, 225, 'Large'),
(40, 'Black Tea', NULL, 70, NULL),
(41, 'Green Tea', NULL, 70, NULL),
(42, 'Earl Grey Tea', NULL, 90, NULL),
(43, 'Massala Tea', NULL, 100, NULL),
(44, 'Hazelnut Frappe', NULL, 220, NULL),
(45, 'Almond Frappe', NULL, 220, NULL),
(46, 'Vanilla Frappe	', NULL, 220, NULL),
(47, 'Caramel Frappe', NULL, 220, NULL),
(48, 'Mocca Frappe', NULL, 250, NULL),
(49, 'Original Hot Chocolate', NULL, 180, NULL),
(50, 'Original White Hot Chocolate', NULL, 200, NULL),
(51, 'Flavored Hot Chocolate', NULL, 235, NULL),
(52, 'Passion Fruit Smoothies', NULL, 225, NULL),
(53, 'Strawberry Smoothies', NULL, 200, NULL),
(54, 'Mango Smoothies', NULL, 200, NULL),
(55, 'Iced Chocolate Yogurt', NULL, 250, NULL),
(56, 'Iced Coffee Yogurt', NULL, 250, NULL),
(57, 'Yogurt Passion Fruit Frappe', NULL, 260, NULL),
(58, 'Yogurt Strawberry Frappe', NULL, 235, NULL),
(59, 'Yogurt Mango Frappe', NULL, 235, NULL),
(60, 'Lassi	', NULL, 120, NULL),
(61, 'Vanilla Milk Shake', NULL, 180, NULL),
(62, 'Strawberry Milk Shake', NULL, 180, NULL),
(63, 'Lemon Touch	', NULL, 180, NULL),
(64, 'Freshly Squeezed Lemonade	', NULL, 125, NULL),
(65, 'Orange Splash	', NULL, 110, NULL),
(66, 'Iced Lemon Tea', NULL, 135, NULL),
(67, 'Ice Cream Brownie with Chocolate Sauce', NULL, 150, NULL),
(68, 'Fruit Cake', NULL, 35, NULL),
(69, 'Banana Split ', NULL, 160, NULL),
(70, 'Fresh Apple', NULL, 150, NULL),
(71, 'Fresh Orange', NULL, 150, NULL),
(72, 'Fresh Water 500 ml', NULL, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`) VALUES
(1, 'Sandwiches'),
(2, 'Next Cup Special Sandwiches '),
(3, 'Fresh Salad Items'),
(4, 'Spicy Bites'),
(5, 'Burgers & Roll Items'),
(6, 'Classic Hot Coffee'),
(7, 'Flavored Hot Coffee'),
(8, 'Coffee with Ice'),
(9, 'Hot Tea'),
(10, 'Flavored Iced Coffee Frappe'),
(11, 'Melted Chocolate'),
(12, 'Fruity Smoothies – Non Dairy'),
(13, 'Yogurt Base Drinks'),
(14, 'Milk Shake'),
(15, 'Next Cup Special Moctails'),
(16, 'Sweet Items'),
(17, 'Freshly Squeezed Juices');

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
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT '-1',
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT '-1',
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_on`, `updated_on`) VALUES
(53, 'superadmin', 'superadmin@superadmin.com', '0192023a7bbd73250516f069df18b500', '2012-07-29 19:41:02', '2012-07-29 19:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '-1',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type`, `created_on`, `updated_on`) VALUES
(1, 'student', NULL, NULL),
(2, 'faculty', NULL, NULL),
(3, 'superadmin', '2012-07-29 19:42:29', '2012-07-29 19:42:31');

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

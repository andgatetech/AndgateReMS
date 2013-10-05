-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2013 at 09:36 PM
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
  `type` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `type`, `created_on`, `updated_on`) VALUES
(81, 'Espresso', '', 75, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(82, 'Cappuccino', '', 165, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(83, 'Cappuccino', '', 199, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(84, 'Espresso', '', 105, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(85, 'Cafe Latte', '', 169, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(86, 'Cafe Latte', '', 205, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(87, 'Cafe Mocha', '', 193, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(88, 'Cafe Mocha', '', 237, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(89, 'Americano-Black Coffee', '', 85, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(90, 'Americano-Black Coffee', '', 105, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(91, 'Cafe Caramel', '', 193, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(92, 'Cafe Caramel', '', 225, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(93, 'Cafe Vanilla', '', 180, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(94, 'Cafe Vanilla', '', 225, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(95, 'Hazelnut Cappuccino', '', 175, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(96, 'Hazelnut Cappuccino', '', 220, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(97, 'Hazelnut Mocha', '', 199, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(98, 'Hazelnut Mocha', '', 235, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(99, 'Iced Cappuccino', '', 160, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(100, 'Iced Cappuccino', '', 199, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(101, 'Iced Mocha', '', 187, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(102, 'Iced Mocha', '', 225, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(103, 'Iced Espresso', '', 105, 'Reguler', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(104, 'Iced Espresso', '', 132, 'Lagre', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(105, 'Green Tea', '', 50, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(106, 'Black Tea', '', 50, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(107, 'Earl Grey Tea', '', 80, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(108, 'Massala Tea', '', 80, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(109, 'Hazelnut Frappe', '', 170, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(110, 'Almond Frappe', '', 170, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(111, 'Vanilla Frappe', '', 170, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(112, 'Caramel Frappe', '', 170, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(113, 'Mocha Frappe', '', 190, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(114, 'Cream and Cookies Frappe', '', 250, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(115, 'Passion Fruit Smoothies', '', 183, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(116, 'Strawberry Smoothies', '', 175, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(117, 'Mango Smoothies', '', 179, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(118, 'Iced Chocolate Yogurt', '', 199, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(119, 'Iced Coffee Yogurt', '', 177, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(120, 'Yogurt Passion Fruit Frape', '', 199, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(121, 'Yogurt Strawberry Frappe', '', 185, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(122, 'Yogurt Mango Frappe', '', 190, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(123, 'Lassi', '', 120, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(124, 'Vanilla Milk Shake', '', 155, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(125, 'Strawberry Milk Shake', '', 168, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(126, 'Lemon Touch', '', 189, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(127, 'Freshly Squeezed Lemonade', '', 95, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(128, 'Orange Splash', '', 110, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(129, 'Iced Lemon Tea', '', 135, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(130, 'Ice Cream Brownie with Chocolate Sauce', '', 155, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(131, 'Fruit Cake', '', 35, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(132, 'Banana Split', '', 160, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(133, 'Vanilla Mocha', '', 222, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(134, 'Fresh Apple Juice', '', 150, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(135, 'Fresh Orange Juice', '', 150, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(136, 'Water 500ml', '', 20, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(137, 'Original Hot Chocolate', '', 160, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(138, 'Original White Hot Chocolate ', '', 180, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(139, 'Flavored Hot Chocolate', '', 199, 'General', '2013-09-23 00:00:00', '2013-09-23 00:00:00'),
(143, 'test', 'test', 100, 'Reguler', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `join_item_categories_items`
--

CREATE TABLE IF NOT EXISTS `join_item_categories_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`item_id`,`item_category_id`),
  KEY `fk_join_items_item_catgories_items_idx` (`item_id`),
  KEY `fk_join_items_item_catgories_item_categories1_idx` (`item_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `join_item_categories_items`
--

INSERT INTO `join_item_categories_items` (`id`, `item_id`, `item_category_id`) VALUES
(10, 89, 1),
(11, 90, 16),
(14, 91, 10),
(13, 106, 15),
(9, 110, 1),
(12, 132, 16),
(5, 143, 6);

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
  `order_type` varchar(45) DEFAULT NULL,
  `vatparcentage` varchar(45) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `vat_tax` varchar(45) DEFAULT NULL,
  `vat_type` varchar(45) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `payment_type` varchar(45) DEFAULT NULL,
  `choosen_space` varchar(45) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ordernumber`, `order_type`, `vatparcentage`, `subtotal`, `vat_tax`, `vat_type`, `total`, `payment_type`, `choosen_space`, `status`, `created_on`, `updated_on`) VALUES
(5, 'ORD-1381008628', 'takeaway', '15', 435, '65.25', 'inclusive', 435, NULL, 'B1', 'pending', '2013-10-06 04:33:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `item_type` varchar(45) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_id`, `item_name`, `item_type`, `item_price`, `item_quantity`, `total`, `created_on`, `updated_on`) VALUES
(16, 5, 90, 'Americano-Black Coffee', 'Lagre', 105, 1, 105, '2013-10-06 04:33:07', NULL),
(17, 5, 132, 'Banana Split', 'General', 160, 1, 160, '2013-10-06 04:33:07', NULL),
(18, 5, 110, 'Almond Frappe', 'General', 170, 1, 170, '2013-10-06 04:33:07', NULL);

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
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_on`, `updated_on`) VALUES
(1, 'vat', '15', '2013-09-23 13:13:42', '2013-09-23 13:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Free',
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
(3, 'TBL003', 'A3', 'Free', '2013-09-22 16:26:17', '2013-09-22 16:26:19'),
(4, 'TBL004', 'A4', 'Free', '2013-09-22 16:26:30', '2013-09-22 16:26:32'),
(5, 'TBL005', 'A5', 'Free', '2013-09-23 16:30:27', '2013-09-17 16:30:30'),
(6, 'TBL006', 'B1', 'Free', '2013-09-22 16:36:35', '2013-09-22 16:36:38'),
(7, 'TBL007', 'B2', 'Free', '2013-09-22 16:36:57', '2013-09-22 16:37:18');

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
(53, 'superadmin', 'superadmin@superadmin.com', 'a009dacbb04aaf267f40b61ef315d7ad', '2012-07-29 19:41:02', '2012-07-29 19:41:04');

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


--
-- Constraints for dumped tables
--

--
-- Constraints for table `join_item_categories_items`
--
ALTER TABLE `join_item_categories_items`
  ADD CONSTRAINT `fk_join_items_item_catgories_items` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_join_items_item_catgories_item_categories1` FOREIGN KEY (`item_category_id`) REFERENCES `item_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

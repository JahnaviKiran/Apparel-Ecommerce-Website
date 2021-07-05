-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `product_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE IF NOT EXISTS `products1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products1`
--

INSERT INTO `products1` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Pink Shirt', 'clothes01', 1000.00, '1.jpg'),
(2, 'Blue Hoodie', 'clothes03', 1200.00, '11.jpg'),
(3, 'Black Handbag', 'bag01', 2000.00, '3.jpg');
(4, 'Sling Handbag', 'bag02', 2500.00, '4.jpg');
(5, 'Pink Shoes', 'shoes01', 1800.00, '5.jpg');
(6, 'Black Shoes', 'shoes02', 2000.00, '6.jpg');
(7, 'Chain Watch', 'watch01', 3000.00, '7.jpg');
(8, 'Gold Watch', 'watch02', 3200.00, '8.jpg');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

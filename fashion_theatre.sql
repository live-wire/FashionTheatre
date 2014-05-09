-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2012 at 07:13 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fashion_theatre`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE IF NOT EXISTS `cart_items` (
  `Cart_item_id` int(5) NOT NULL AUTO_INCREMENT,
  `Product_id` varchar(30) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total_price` int(10) NOT NULL,
  `Order_id` int(5) NOT NULL,
  PRIMARY KEY (`Cart_item_id`),
  KEY `Order_id` (`Product_id`),
  KEY `Product_id` (`Product_id`),
  KEY `Order_id_2` (`Order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`Cart_item_id`, `Product_id`, `Quantity`, `Total_price`, `Order_id`) VALUES
(1, 'women_watches_5', 1, 225, 1),
(2, 'women_shoes_2', 1, 280, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_id` varchar(30) NOT NULL,
  `Category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Category_name`) VALUES
('men', 'Men'),
('women', 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `User_name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`User_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`User_name`, `Password`, `Email`) VALUES
('123', '123', 'vipul.munoth@gmail.com'),
('abc', '123', 'a@gmail.com'),
('customer1', 'customer1', 'customer1@gmail.com'),
('customer2', 'customer2', 'customer2@gmail.com'),
('mohinder', '123', 'mohin19derp@gmail.com'),
('sharmila', 'sharmila', 'abc'),
('vipul', '29121992$$', 'vipul.munoth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Department_id` varchar(30) NOT NULL,
  `Department_name` varchar(30) NOT NULL,
  `Category_id` varchar(30) NOT NULL,
  PRIMARY KEY (`Department_id`),
  KEY `Category_id` (`Category_id`),
  KEY `Category_id_2` (`Category_id`),
  KEY `Department_id` (`Department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_id`, `Department_name`, `Category_id`) VALUES
('men_bags', 'Bags', 'men'),
('men_blazers', 'Blazers', 'men'),
('men_hats', 'Hats', 'men'),
('men_jeans', 'Jeans', 'men'),
('men_pants', 'Pants', 'men'),
('men_shoes', 'Shoes', 'men'),
('men_tops', 'Tops', 'men'),
('men_wallets', 'Wallets', 'men'),
('men_watches', 'Watches', 'men'),
('women_bags', 'Bags', 'women'),
('women_blazers', 'Blazers', 'women'),
('women_hats', 'Hats', 'women'),
('women_jeans', 'Jeans', 'women'),
('women_pants', 'Pants', 'women'),
('women_shoes', 'Shoes', 'women'),
('women_shorts', 'Shorts', 'women'),
('women_tops', 'Tops', 'women'),
('women_watches', 'Watches', 'women');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_id` int(5) NOT NULL AUTO_INCREMENT,
  `User_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Order_id`),
  KEY `User_name` (`User_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `User_name`) VALUES
(1, 'customer1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Product_id` varchar(30) NOT NULL,
  `Department_id` varchar(30) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Size` int(5) NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `Department_id` (`Department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Department_id`, `Product_name`, `Brand`, `Price`, `Size`, `path`) VALUES
('men_bags_1', 'men_bags', 'AirBac Backpack', 'BKE Sport', 64, 20, 'men/men_bags_1.jpg'),
('men_bags_2', 'men_bags', 'Shards Reload Backpack', 'Fox', 59, 20, 'men/men_bags_2.jpg'),
('men_bags_3', 'men_bags', 'Natch Backpack', 'Fox', 59, 16, 'men/men_bags_3.jpg'),
('men_bags_4', 'men_bags', 'Victory Backpack', 'Fox', 59, 18, 'men/men_bags_4.jpg'),
('men_bags_5', 'men_bags', 'Flash Backpack', 'Fox', 59, 20, 'men/men_bags_5.jpg'),
('men_blazers_1', 'men_blazers', 'Two-Tone Blazer', 'Threads 4 Thought', 148, 25, 'men/men_blazers_1.jpg'),
('men_blazers_2', 'men_blazers', 'Conley Hooded Blazer', 'Pop Icon', 21, 24, 'men/men_blazers_2.jpg'),
('men_blazers_3', 'men_blazers', 'Meistro Blazer', 'Roar', 94, 25, 'men/men_blazers_3.jpg'),
('men_blazers_4', 'men_blazers', 'Stoic Hooded Blazer', 'Roar', 82, 30, 'men/men_blazers_4.jpg'),
('men_blazers_5', 'men_blazers', 'Zip Tape Blazer', 'Crash & Burn', 19, 28, 'men/men_blazers_5.jpg'),
('men_hats_1', 'men_hats', 'Matsu Hat', 'Hurley', 29, 10, 'men/men_hats_1.jpg'),
('men_hats_2', 'men_hats', 'Cedar Hat', 'OBEY', 22, 8, 'men/men_hats_2.jpg'),
('men_hats_3', 'men_hats', 'Beanie', 'Buckle Black', 27, 8, 'men/men_hats_3.jpg'),
('men_hats_4', 'men_hats', 'Visor Plaid Beanie', 'BKE', 24, 10, 'men/men_hats_4.jpg'),
('men_hats_5', 'men_hats', 'Beanie', 'Buckle Black', 24, 9, 'men/men_hats_5.jpg'),
('men_jeans_1', 'men_jeans', 'Blake Flooded Fleur Jean', 'Affliction', 155, 32, 'men/men_jeans_1.jpg'),
('men_jeans_2', 'men_jeans', 'Tyler Straight Jean', 'BKE', 74, 30, 'men/men_jeans_2.jpg'),
('men_jeans_3', 'men_jeans', 'Tyson Jean', 'BKE', 69, 32, 'men/men_jeans_3.jpg'),
('men_jeans_4', 'men_jeans', 'Chuck Straight Jean', 'Rock Revival', 148, 34, 'men/men_jeans_4.jpg'),
('men_jeans_5', 'men_jeans', 'Brady Jean', 'Buffalo', 119, 30, 'men/men_jeans_5.jpg'),
('men_pants_1', 'men_pants', 'Detractor Pant', 'Hurley', 55, 31, 'men/men_pants_1.jpg'),
('men_pants_2', 'men_pants', 'Opponent Pant', 'Hurley', 55, 31, 'men/men_pants_2.jpg'),
('men_pants_3', 'men_pants', 'Georgetown Pant ', 'Union', 89, 29, 'men/men_pants_3.jpg'),
('men_pants_4', 'men_pants', 'Burnout Sweatpant', 'BKE', 39, 30, 'men/men_pants_4.jpg'),
('men_pants_5', 'men_pants', 'Raw General Pant', 'G-Star', 140, 30, 'men/men_pants_5.jpg'),
('men_shoes_1', 'men_shoes', 'Crue Boot', 'Bed Stu', 139, 7, 'men/men_shoes_1.jpg'),
('men_shoes_2', 'men_shoes', 'Scramble Boot', 'Timberland', 99, 6, 'men/men_shoes_2.jpg'),
('men_shoes_3', 'men_shoes', 'Siberia Boot', 'Buckle Black', 109, 5, 'men/men_shoes_3.jpg'),
('men_shoes_4', 'men_shoes', 'Overland Shoe', 'Dr. Martens', 110, 5, 'men/men_shoes_4.jpg'),
('men_shoes_5', 'men_shoes', 'Racket Boot', 'Bed Stu', 109, 6, 'men/men_shoes_5.jpg'),
('men_tops_1', 'men_tops', 'Thermal Shirt', 'Hurley', 45, 25, 'men/men_tops_1.jpg'),
('men_tops_2', 'men_tops', 'Warriors T-Shirt', 'Hurley', 25, 25, 'men/men_tops_2.jpg'),
('men_tops_3', 'men_tops', 'Knighted T-Shirt', 'RVCA', 26, 25, 'men/men_tops_3.jpg'),
('men_tops_4', 'men_tops', 'Shield T-Shirt', 'OBEY', 33, 25, 'men/men_tops_4.jpg'),
('men_tops_5', 'men_tops', 'Nada T-Shirt', 'OBEY', 29, 25, 'men/men_tops_5.jpg'),
('men_wallets_1', 'men_wallets', 'Execufold Wallet', 'Fossil ', 35, 10, 'men/men_wallets_1.jpg'),
('men_wallets_2', 'men_wallets', 'Turf Wallet', 'Fox', 25, 10, 'men/men_wallets_2.jpg'),
('men_wallets_3', 'men_wallets', 'Magnetic Wallet ', 'Fossil', 30, 8, 'men/men_wallets_3.jpg'),
('men_wallets_4', 'men_wallets', 'Serif Wallet ', 'Volcom', 20, 7, 'men/men_wallets_4.jpg'),
('men_wallets_5', 'men_wallets', 'Bolder Wallet ', 'Volcom', 24, 10, 'men/men_wallets_5.jpg'),
('men_watches_1', 'men_watches', ' Double Strap Watch', 'Guess', 95, 4, 'men/men_watches_1.jpg'),
('men_watches_2', 'men_watches', 'Leather Watch ', 'Guess', 65, 4, 'men/men_watches_2.jpg'),
('men_watches_3', 'men_watches', 'Machine Watch', 'Fossil', 145, 5, 'men/men_watches_3.jpg'),
('men_watches_4', 'men_watches', '51-30 Watch', 'Nixon', 375, 5, 'men/men_watches_4.jpg'),
('men_watches_5', 'men_watches', 'The Ride Watch', 'Nixon', 550, 4, 'men/men_watches_5.jpg'),
('women_bags_1', 'women_bags', 'Glitz Wallet', 'Woven', 24, 12, 'women/women_bags_1.jpg'),
('women_bags_2', 'women_bags', 'Leather Purse', 'Faux', 59, 12, 'women/women_bags_2.jpg'),
('women_bags_3', 'women_bags', 'Detail Purse ', 'Woven', 59, 10, 'women/women_bags_3.jpg'),
('women_bags_4', 'women_bags', 'Doctor''s Bag', 'Guess', 118, 12, 'women/women_bags_4.jpg'),
('women_bags_5', 'women_bags', 'Crossbody Purse', 'Revolution', 34, 12, 'women/women_bags_5.jpg'),
('women_blazers_1', 'women_blazers', 'Overlay Blazer ', 'Daytrip', 49, 28, 'women/women_blazers_1.jpg'),
('women_blazers_2', 'women_blazers', 'Metallic Blazer', 'Daytrip', 49, 28, 'women/women_blazers_2.jpg'),
('women_blazers_3', 'women_blazers', 'Satin Blazer ', 'Ashley', 39, 26, 'women/women_blazers_3.jpg'),
('women_blazers_4', 'women_blazers', 'Pieced Blazer', 'Mystree', 59, 30, 'women/women_blazers_4.jpg'),
('women_blazers_5', 'women_blazers', 'Animal Print Blazer', 'Daytrip', 54, 30, 'women/women_blazers_5.jpg'),
('women_hats_1', 'women_hats', 'Ear Warmer', 'Olive & Pique', 19, 5, 'women/women_hats_1.jpg'),
('women_hats_2', 'women_hats', 'Trucker Hat ', 'Rhinestone', 19, 5, 'women/women_hats_2.jpg'),
('women_hats_3', 'women_hats', 'Military Hat ', 'BKE', 19, 5, 'women/women_hats_3.jpg'),
('women_hats_4', 'women_hats', 'Fleur Hat ', 'BKE', 24, 4, 'women/women_hats_4.jpg'),
('women_hats_5', 'women_hats', 'Heart Hat', 'Crash & Burn', 44, 5, 'women/women_hats_5.jpg'),
('women_jeans_1', 'women_jeans', 'Stretch Jegging', 'Jessica Simpson', 59, 24, 'women/women_jeans_1.jpg'),
('women_jeans_2', 'women_jeans', 'Stretch Jean', 'Miss Me', 103, 24, 'women/women_jeans_2.jpg'),
('women_jeans_3', 'women_jeans', 'Stretch Jean', 'Big Star Vintage', 148, 26, 'women/women_jeans_3.jpg'),
('women_jeans_4', 'women_jeans', 'Jegging', 'Jessica Simpson', 59, 26, 'women/women_jeans_4.jpg'),
('women_jeans_5', 'women_jeans', 'Stretch Jean', 'Miss Me', 109, 25, 'women/women_jeans_5.jpg'),
('women_pants_1', 'women_pants', 'Stretch Pant ', 'Jessica Simpson', 54, 24, 'women/women_pants_1.jpg'),
('women_pants_2', 'women_pants', 'Neon Sweatpant', 'BKE', 36, 24, 'women/women_pants_2.jpg'),
('women_pants_3', 'women_pants', 'Slouchy Sweatpant', 'Puma', 55, 25, 'women/women_pants_3.jpg'),
('women_pants_4', 'women_pants', 'Edge Sweatpant', 'BKE', 36, 25, 'women/women_pants_4.jpg'),
('women_pants_5', 'women_pants', 'Terry Pant ', 'Miss Me', 58, 24, 'women/women_pants_5.jpg'),
('women_shoes_1', 'women_shoes', 'Cowboy Boot', 'Mia', 79, 8, 'women/women_shoes_1.jpg'),
('women_shoes_2', 'women_shoes', 'Cowboy Boot', 'Corral', 280, 8, 'women/women_shoes_2.jpg'),
('women_shoes_3', 'women_shoes', 'Lido Shoe', 'Roxy', 44, 7, 'women/women_shoes_3.jpg'),
('women_shoes_4', 'women_shoes', 'Trench Shoe', 'BKE', 69, 6, 'women/women_shoes_4.jpg'),
('women_shoes_5', 'women_shoes', 'Hemlock Boot ', 'Roxy', 79, 6, 'women/women_shoes_5.jpg'),
('women_shorts_1', 'women_shorts', 'Athletic Short', 'Hurley', 32, 24, 'women/women_shorts_1.jpg'),
('women_shorts_2', 'women_shorts', 'Stretch Short', 'Miss Me', 85, 25, 'women/women_shorts_2.jpg'),
('women_shorts_3', 'women_shorts', 'Stretch Short', 'Miss Me', 89, 24, 'women/women_shorts_3.jpg'),
('women_shorts_4', 'women_shorts', 'Stretch Short ', 'BKE', 62, 22, 'women/women_shorts_4.jpg'),
('women_shorts_5', 'women_shorts', 'Cargo Short', 'Miss Me', 79, 22, 'women/women_shorts_5.jpg'),
('women_tops_1', 'women_tops', 'Gemma Top', 'Guess', 89, 24, 'women/women_tops_1.jpg'),
('women_tops_2', 'women_tops', 'Tank Top ', 'BKE', 42, 24, 'women/women_tops_2.jpg'),
('women_tops_3', 'women_tops', 'Thermal Top', 'Crash & Burn', 76, 22, 'women/women_tops_3.jpg'),
('women_tops_4', 'women_tops', 'Gemma Top', 'Guess', 79, 26, 'women/women_tops_4.jpg'),
('women_tops_5', 'women_tops', 'Thermal Top', 'Daytrip', 25, 25, 'women/women_tops_5.jpg'),
('women_watches_1', 'women_watches', 'Chain Watch', 'Guess', 85, 8, 'women/women_watches_1.jpg'),
('women_watches_2', 'women_watches', 'Cuff Watch ', 'Guess', 135, 8, 'women/women_watches_2.jpg'),
('women_watches_3', 'women_watches', 'Glitz Watch ', 'BKE', 69, 9, 'women/women_watches_3.jpg'),
('women_watches_4', 'women_watches', 'Riley Watch', 'Fossil', 135, 7, 'women/women_watches_4.jpg'),
('women_watches_5', 'women_watches', 'Franchise Watch', 'Diesel', 225, 9, 'women/women_watches_5.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `products` (`Product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_3` FOREIGN KEY (`Order_id`) REFERENCES `orders` (`Order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_name`) REFERENCES `customer` (`User_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Department_id`) REFERENCES `department` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

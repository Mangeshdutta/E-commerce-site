-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 05:07 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangesh_cp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_table`
--

CREATE TABLE `admin_login_table` (
  `login_id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_table`
--

INSERT INTO `admin_login_table` (`login_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`contact_id`, `name`, `email`, `contact`, `address`, `message`) VALUES
(1, 'mangesh', 'mangesh@gmail.com', '111', '1', '1111'),
(2, 'aa', 'aa@aa', '33', '33', '33333'),
(3, 'fffff', 'ffff', 'ffffffffff', 'ktm', 'yyyyy');

-- --------------------------------------------------------

--
-- Table structure for table `items_table`
--

CREATE TABLE `items_table` (
  `items_id` int(11) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `item_name` varchar(1000) NOT NULL,
  `item_cost` varchar(1000) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_table`
--

INSERT INTO `items_table` (`items_id`, `category`, `item_name`, `item_cost`, `image`) VALUES
(8, 'Electronics', 'mobile', '5000', 'mobile1.png'),
(9, 'Electronics', 'mobile phone', '1234', 'mobile1.png'),
(10, 'Jewellery', 'set', '44444', 'jewellery1.jpg'),
(11, 'Automobiles', 'car', '1000000', 'car1.jpg'),
(12, 'Automobiles', 'bike', '150000', 'bike1.jpg'),
(13, 'Fashion', 'dress', '1200', 'dress1.jpg'),
(14, 'Fashion', 'shoe', '2000', 'shoe1.jpg'),
(15, 'Film', 'pashupati prasad cd', '100', 'film1.jpg'),
(16, 'Electronics', 'iphone 6', '88000', 'mobile2.jpg'),
(17, 'Electronics', 'galaxy s6', '67000', 'mobile3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_table`
--

CREATE TABLE `purchase_table` (
  `purchase_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `customer_name` varchar(1000) NOT NULL,
  `customer_address` varchar(1000) NOT NULL,
  `customer_contact` varchar(1000) NOT NULL,
  `date_of_purchase` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_table`
--

INSERT INTO `purchase_table` (`purchase_id`, `items_id`, `customer_name`, `customer_address`, `customer_contact`, `date_of_purchase`) VALUES
(1, 7, 'harendra', 'kathmandu', '9812222', '16/10/18'),
(2, 10, 'anil', 'dillibazar', '01444444', '16/10/19'),
(3, 9, 'pankaj kumar lal das karna', 'bhaktapur', '3333333', '16/10/19'),
(4, 10, 'aa', 'aa', 'aa', '16/10/20'),
(5, 8, 'aaaaaaaaaa', 'aaaaaa', 'aaaaa', '16/10/20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `items_table`
--
ALTER TABLE `items_table`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `purchase_table`
--
ALTER TABLE `purchase_table`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items_table`
--
ALTER TABLE `items_table`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchase_table`
--
ALTER TABLE `purchase_table`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

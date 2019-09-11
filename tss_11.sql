-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2019 at 01:11 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tss_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'sohel', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Home Appliance'),
(2, 'Mobile'),
(4, 'Fashion Mens'),
(6, 'Fashion Womens'),
(7, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_detail` text NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_detail`, `product_category`, `discount`, `image_name`) VALUES
(1, 'New Saree', '2500.00', 'sdfg sdgsdfgsdfg', 'Fashion Womens', 12, '155505240545331.jpg'),
(4, 'I-Phone 8', '56000.00', 'this is best iphone ever', 'Mobile', 10, '155548348183468.png'),
(5, 'New Sofa', '24300.00', 'sdf sdfgdf sdfger sdfgerg dfb', 'Home Appliance', 7, '155531246584391.jpeg'),
(6, 'LG Fridge', '12500.00', ' sdfgs sdfg sdfg sdfg', 'Home Appliance', 5, '155548383710609.jpeg'),
(7, 'T-Shirt', '4000.00', 'sdfg sdfg sdfgdf', 'Fashion Mens', 5, '155531252329507.jpeg'),
(8, 'New Saree', '3500.00', 'sdfg sdfgsdgsdg', 'Fashion Womens', 5, '155531253894672.jpg'),
(9, 'Demo', '5000.00', 'dfg sdf sdfg', 'Fashion Womens', 10, '155565859661664.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_name`, `title`, `sub_title`) VALUES
(1, '155652198432401.jpg', 'First Image', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(2, '155652201032202.jpg', 'Second Image', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(3, '155652202685722.png', 'Third Image', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n'),
(4, '155652204175962.jpg', 'Fourth Image', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n'),
(5, '155652269858847.jpg', 'Fifth Imaeg', 'somthing somthing somthing somthing somthing somthing ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fee`) VALUES
(1, 'James', 5000),
(2, 'Gaurav', 7500),
(3, 'Jaya', 4500),
(5, 'Ravi', 7500),
(6, 'Raj', 2300),
(7, 'Preeti', 5000),
(8, 'Ankit', 4500),
(9, 'Meena', 7000),
(10, 'Demo', 10000),
(11, 'Arpit', 4500),
(12, 'Rohit', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `password`, `address`, `city`, `gender`, `contact`, `image`) VALUES
(1, 'Rohit', 'rohit@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'sfg dsfg sdg', 'Indore', 'male', '124578', '155530838752229.png'),
(2, 'Jaya Verma', 'jaya@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'palaysia', 'Bhopal', 'female', '225588', '155548510342184.jpeg'),
(3, 'Demo', 'demo@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'testing', 'Bhopal', 'male', '3366699', '155530969786411.jpeg'),
(4, 'Parul', 'parul@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sdfg sdfgsdfg', 'Bhopal', 'female', '1234567890', '155669597668096.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

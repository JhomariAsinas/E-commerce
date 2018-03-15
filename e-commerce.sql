-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:48 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`) VALUES
(1, 'admin', 'password', 'Jhomari Asinas');

-- --------------------------------------------------------

--
-- Table structure for table `discount_db`
--

CREATE TABLE `discount_db` (
  `id` int(11) NOT NULL,
  `dis_name` int(11) NOT NULL,
  `dis_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_db`
--

CREATE TABLE `product_db` (
  `id` int(11) NOT NULL,
  `prod_code` text NOT NULL,
  `prod_name` text NOT NULL,
  `prod_items` int(11) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_descrip` text NOT NULL,
  `prod_category` text NOT NULL,
  `prod_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_db`
--

INSERT INTO `product_db` (`id`, `prod_code`, `prod_name`, `prod_items`, `prod_price`, `prod_descrip`, `prod_category`, `prod_img`) VALUES
(36, 'eYUsYE', 'PsP ', 12, 1500, 'Brand New', 'Gadgets', 'psp.jpg'),
(38, '72PYbH', 'Dress', 12, 1500, 'Size Large', 'Clothings', 'dress2.jpg'),
(39, 'irT716', 'Chair', 12, 1500, 'Apat ang Paa', 'Clothings', 'chair.jpg'),
(40, 'P1jq4C', 'Burger', 12, 1500, 'w/ Cheese', 'Foods', 'burger.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sales_db`
--

CREATE TABLE `sales_db` (
  `id` int(11) NOT NULL,
  `c_name` int(11) NOT NULL,
  `c_address` int(11) NOT NULL,
  `c_date` int(11) NOT NULL,
  `c_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sold_db`
--

CREATE TABLE `sold_db` (
  `id` int(11) NOT NULL,
  `sold_item` text NOT NULL,
  `sold_amount` int(11) NOT NULL,
  `sold_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_db`
--
ALTER TABLE `discount_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_db`
--
ALTER TABLE `product_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_db`
--
ALTER TABLE `sales_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_db`
--
ALTER TABLE `sold_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discount_db`
--
ALTER TABLE `discount_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_db`
--
ALTER TABLE `product_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sales_db`
--
ALTER TABLE `sales_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sold_db`
--
ALTER TABLE `sold_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

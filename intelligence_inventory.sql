-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 06:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intelligence_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `mirpur_outlet`
--

CREATE TABLE `mirpur_outlet` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `sell_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mirpur_outlet`
--

INSERT INTO `mirpur_outlet` (`id`, `product_id`, `sell_amount`) VALUES
(3, 1, '40'),
(4, 2, '100');

-- --------------------------------------------------------

--
-- Table structure for table `mirpur_outlet_product`
--

CREATE TABLE `mirpur_outlet_product` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `product_amount` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_image`, `product_category`, `product_price`, `product_details`, `product_amount`, `supplier_name`, `time`) VALUES
(1, 'Asus Laptop vivobook', '', 'Laptop', 37000, 'Asus Laptop vivobook Green color', '100', '', ''),
(2, 'Dell Keyboard', '', 'Keyboard', 500, 'Black Keyboard', '80', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Active'),
(2, 'sajid', 'sajid@gmail.com', 'b46563afafa2a0625306b9d0a08f3466', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `uttara_outlet`
--

CREATE TABLE `uttara_outlet` (
  `id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `sell_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uttara_outlet`
--

INSERT INTO `uttara_outlet` (`id`, `product_id`, `sell_amount`) VALUES
(5, '1', '33'),
(6, '2', '100');

-- --------------------------------------------------------

--
-- Table structure for table `uttara_outlet_product`
--

CREATE TABLE `uttara_outlet_product` (
  `id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mirpur_outlet`
--
ALTER TABLE `mirpur_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mirpur_outlet_product`
--
ALTER TABLE `mirpur_outlet_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uttara_outlet`
--
ALTER TABLE `uttara_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uttara_outlet_product`
--
ALTER TABLE `uttara_outlet_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mirpur_outlet`
--
ALTER TABLE `mirpur_outlet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mirpur_outlet_product`
--
ALTER TABLE `mirpur_outlet_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uttara_outlet`
--
ALTER TABLE `uttara_outlet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uttara_outlet_product`
--
ALTER TABLE `uttara_outlet_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

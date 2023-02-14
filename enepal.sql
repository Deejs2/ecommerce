-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 04:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(1, 1, 'smart phone', '30000', 'product-1.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(20) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `content` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `publish` tinyint(1) NOT NULL,
  `updated_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `filename`, `title`, `sub_title`, `content`, `created_date`, `publish`, `updated_date`) VALUES
(1, 'shoe.jpg', 'ASICS Men', 'Running shoe', 'This versatile shoe is excellent for trail runs, light hiking or exploring a city. ', '2023-02-02 20:38:44', 1, '2023-02-12 16:19:03'),
(3, 'watch.jpg', 'Smartwatch', 'with Heart Rate, Notifications and Activity Tracking!', 'Color display with customizable watch face; Optical heart rate monitor;Recharge battery with 10-day ', '2023-02-07 20:15:30', 1, '2023-02-12 16:17:25'),
(12, 'jacket.jfif', 'Jacket For Men', 'WindShitter!', 'This jacket is just wow! New Fashion in the market.', '2023-02-04 12:00:19', 1, '2023-02-04 12:00:19'),
(16, 'fruits.jpg', 'Fruits Bucket', 'green and fresh', 'This is content about fruits.', '2023-02-12 16:24:23', 1, '2023-02-12 16:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carousel`
--

CREATE TABLE `tbl_carousel` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`id`, `filename`, `title`, `content`, `publish`) VALUES
(5, 'online grocery.jpg', 'Glossaries-Nepal', 'Fresh and clean!', 1),
(6, 'laptop.jpg', 'Technology', 'Laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fname`, `lname`, `email`, `mobile`, `message`) VALUES
(1, '', '', '', '', ''),
(2, 'admin', 'jirel', 'admin22@enepal.com', '9862506862', 'hi'),
(3, 'admin', 'jirel', 'admin22@enepal.com', '9862506862', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(20) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `email`, `password`, `gender`, `address`, `created_date`, `updated_date`, `publish`) VALUES
(1, 'customer', 'customer@enepal.com', 'customer1', 'female', 'boudha', '2023-02-01 12:32:21', '2023-02-01 12:32:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `filename`, `title`, `content`, `publish`, `created_date`, `updated_date`) VALUES
(1, 'fruits.jpg', 'Fruits', 'Clean, Fresh and Healthy. Buy Now!', 1, '2023-02-01 12:38:19', '2023-02-04 13:21:57'),
(2, 'online grocery.jpg', 'Glossaries', 'Fresh and Clean glossary items to buy!', 1, '2023-01-28 12:41:33', '2023-02-01 17:06:41'),
(19, 'fashion.jpeg', 'Fashion', 'Change your Looks!', 1, '2023-02-10 02:41:53', '2023-02-12 15:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(20) NOT NULL,
  `product_title` text NOT NULL,
  `product_description` text NOT NULL,
  `product_image1` varchar(100) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `product_price` int(11) NOT NULL,
  `created-date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated-date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_title`, `product_description`, `product_image1`, `publish`, `product_price`, `created-date`, `updated-date`) VALUES
(5, 'Smart watch', 'Brand', 'watch.jpg', 0, 4000, '2023-02-12 21:15:54', '2023-02-12 21:15:54'),
(6, 'Laptop', 'Trending Laptop in Nepal(Today).', 'laptop.jpg', 0, 80000, '2023-02-12 21:17:07', '2023-02-12 21:17:07'),
(8, 'Dairy Milk', 'candy bar', 'dairymilk-silk.jpg', 0, 300, '2023-02-12 21:30:28', '2023-02-12 21:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`) VALUES
(20, 'admin', 'admin1@gmail.com', 'admin1'),
(21, 'admin2', 'admin2@gmail.com', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

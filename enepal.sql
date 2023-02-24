-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 05:57 PM
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
(66, 11, 'P47 Wireless Bluetooth Headphones', '50', 'headset.jpg', 1),
(67, 11, 'Garmin Venu® Sq 2', '200', 'watch3.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `adminName` text NOT NULL,
  `post` text NOT NULL,
  `work` text NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `title`, `content`, `filename`, `adminName`, `post`, `work`, `email`) VALUES
(0, 'eNepal', 'eNepal is the ultimate Nepali eCommerce website that offers a solution for all needs of the customers.\r\nIt has a wide and assorted range of products including clothing, electronics, mobile phones, fruits, grocery and much more.', 'dhiraj.jpg', 'Dhiraj Jirel', 'Designer', 'Manage admin and customer ', 'dhiraj@enepal.com'),
(3, '', '', 'fashion.jpeg', 'Chitra Prasad Acharya', 'Designer', 'Create and design login and register page.', 'chitra@enepal.com'),
(7, '', '', 'pasang.JPG', 'Pasang Gelbu Sherpa', 'Designer', 'Create and manage product page(CRUD).', 'pasang@gmail.com'),
(9, '', '', 'apson.JPG', 'Apson Jirel', 'Designer', 'Create and design login and register for customer.', 'apson@enepal.com'),
(10, '', '', 'utsav.JPG', 'Utsab Dahal', 'Designer', 'Create and manage about and contact page.', 'utsab@enepal.com');

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
(16, 'fruits.jpg', 'California Bounty Fruit Gift Basket', 'green and fresh!', 'A Gift Inside Number of Items 1 Flavor All Occasions Weight 0.09 Pounds Size 12 Piece Set.', '2023-02-12 16:24:23', 1, '2023-02-24 16:03:26');

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
(5, 'banner4.jpg', 'Glossaries-Nepal', 'Fresh and clean!', 1),
(6, 'banner3.jpg', 'Technology', 'Laptops, smart phones, watches,speakers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `delivery_address` varchar(50) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `name_on_card` varchar(50) NOT NULL,
  `credit_card_number` int(50) NOT NULL,
  `expiration_date` varchar(20) NOT NULL,
  `security_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id`, `user_id`, `firstname`, `lastname`, `username`, `email`, `delivery_address`, `permanent_address`, `payment`, `name_on_card`, `credit_card_number`, `expiration_date`, `security_code`) VALUES
(20, 0, 'Bishal Acharya', '', 'bishal', 'bishal@enepal.com', 'kapan', 'Tusal,Boudha', 'debit_card', 'bishalcard', 123456789, '2023-02-16', 2222),
(23, 0, 'Bishal Acharya', '', 'customer1', 'bishal@enepal.com', '5-chabahil', 'Tusal,Boudha', 'debit_card', 'customercard', 123456789, '2023-02-14', 12345),
(24, 0, 'Bishal Acharya', '', 'customer1', 'bishal@enepal.com', 'kapan', 'Tusal,Boudha', 'debit_card', 'customercard', 1234567895, '2023-02-14', 1111),
(25, 0, 'Apson Jirel', '', 'Apson', 'apson@enepal.com', 'boudha,jorpati', 'Nayabasti, Jorpati', 'credit_card', 'apsoncard', 123456789, '2023-02-15', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `country` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `country`, `message`) VALUES
(9, 'customer', 'customer@enepal.com', '392497593', 'NP', 'Hello!'),
(10, 'Sita Basnet', 'sita1@gmail.com', '392497593', 'NP', 'how can we be your customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `filename` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(20) NOT NULL,
  `work` varchar(50) NOT NULL,
  `bio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `filename`, `email`, `password`, `gender`, `address`, `work`, `bio`) VALUES
(9, 'Customer', 'Screenshot (6).png', 'customer@enepal.com', 'customer', 'Male', 'Kathmandu', 'Create and design login and register page.', 'Popular and beautiful'),
(10, 'Bishal Acharya', 'fashion.jpeg', 'bishal@enepal.com', 'bishal', 'Male', 'Tusal,Boudha', 'Designer and Video editor!', 'Work hard'),
(11, 'Apson Jirel', 'apson.JPG', 'apson@enepal.com', 'apson', 'Male', 'Nayabasti, Jorpati', 'As a student in Aadim National College', 'Be smart!');

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
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_image1` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `created-date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated-date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_title`, `product_description`, `product_image1`, `product_price`, `created-date`, `updated-date`) VALUES
(5, 'Garmin Venu® Sq 2', 'GPS Smartwatch, All-Day Health Monitoring, Long-Lasting Battery Life, AMOLED Display, Cream Gold and White', 'watch3.jpg', 200, '2023-02-12 21:15:54', '2023-02-12 21:15:54'),
(6, 'Acer Nitro 5 AN515-57-79TD Gaming Laptop', 'Intel Core i7-11800H | NVIDIA GeForce RTX 3050 Ti Laptop GPU | 15.6\" FHD 144Hz IPS Display | 8GB DDR4 | 512GB NVMe SSD | Killer Wi-Fi 6 | Backlit Keyboard', 'laptop2.jpg', 773, '2023-02-12 21:17:07', '2023-02-12 21:17:07'),
(9, 'Canon EOS Rebel T7', 'DSLR Camera with 18-55mm Lens | Built-in Wi-Fi | 24.1 MP CMOS Sensor | DIGIC 4+ Image Processor and Full HD Videos', 'camera.jpg', 350, '2023-02-15 06:47:30', '2023-02-15 06:47:30'),
(12, 'JBL GO2 - Waterproof Ultra-Portable Bluetooth Speaker - Black', 'Wireless Bluetooth Streaming 5 hours of playtime IPX7 waterproof Speakerphone Audio Cable Input Included Components: Speaker; Micro Usb Cable; Quick Start Guide', 'jbl-speaker.jpg', 50, '2023-02-17 19:17:14', '2023-02-17 19:17:14'),
(13, 'Columbia Mens Super Low Drag Offshore Polo', 'A classic polo that plays well at work or on the water, this shirt wicks away moisture, shields from the sun with UPF 50, and has built-in vents to help keep you cool.', 'shirt.jpg', 10, '2023-02-24 19:49:41', '2023-02-24 19:49:41'),
(14, 'BELONGSCI Womens 2023 Summer Dress Sweet & Cute V-Neck Bell Sleeve Shift Dress Mini Dress', '96% Polyester, 4% Spandex,short dress, V-neck, bell sleeve, soft lining, zipper in the back. Can dress it up or down.Made of high quality and high density chiffon with non-elasticity and breathability.', 'women-clothes.jpg', 26, '2023-02-24 20:22:34', '2023-02-24 20:22:34'),
(15, 'Blue Diamond Almonds Blue Diamond Almond Flour', 'Brand	Blue Diamond Almonds Weight	3 Pounds Allergen Information	Tree Nuts Specialty	Gluten Free,Keto,Low Carb,Paleo,Plant Based Package Weight	1.4 Kil', 'almond-flour.jpg', 7, '2023-02-24 20:26:24', '2023-02-24 20:26:24'),
(16, 'California Bounty Fruit Gift Basket', ' Brand	A Gift Inside Number of Items	1 Flavor	All Occasions Weight	0.09 Pounds Size	12 Piece Set A beautiful selection of fresh seasonal fruit 3 varieties of pears, 2 varieties of apples, citrus, kiwi and seasonal fruits - 15 pieces of fruit in all Hand packed to order in a wicker basket', 'fruits.jpg', 20, '2023-02-24 20:28:57', '2023-02-24 20:28:57'),
(19, 'Smartwatch with Heart Rate, Notifications and Activity Tracking!', 'Color display with customizable watch face; Optical heart rate monitor;Recharge battery with 10-day ', 'watch.jpg', 250, '2023-02-24 20:43:22', '2023-02-24 20:43:22'),
(20, 'Jacket For Men New WindShitter!', 'This jacket is just wow! New Fashion in the market.', 'jacket.jfif', 40, '2023-02-24 20:45:57', '2023-02-24 20:45:57'),
(21, 'P47 Wireless Bluetooth Headphones', '     Wireless Connectivity : Bluetooth     Bluetooth : Yes     Cable Length : 0.5m - 0.9m     Box Content : 1 p47 headphone', 'headset.jpg', 50, '2023-02-24 22:31:20', '2023-02-24 22:31:20');

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
(1, 'Dhiraj', 'dhiraj@enepal.com', 'dhiraj'),
(2, 'Pasang Gelbu Sherpa', 'pasang@enepal.com', 'pasang'),
(3, 'Utsab Dahal', 'utsab@enepal.com', 'utsab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
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
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

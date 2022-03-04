-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 01:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommers74`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `writer_name` varchar(100) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `blog_sub_category_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `blog_image`, `writer_name`, `blog_category_id`, `blog_sub_category_id`, `create_at`) VALUES
(1, 'HP 280 Pro G6 MT Core i3 10th Gen Microtower PC', 'HP 280 Pro G6 MT Core i3 10th Gen Microtower PC comes with Intel 10th Gen Core i3-10100 Processor-3.6GHz Turbo Boost 4.3GHz (6MB Cache), Intel H470 Chipset, 4GB DDR4 RAM-2666MHz RAM, 1TB SATA-7200rpm HDD and Intel 630 Graphics with Free DOS Operating System. No Monitor is included here. In this brand PC, Front: 1 headphone/microphone combo; 4 SuperSpeed USB 5Gbps signaling rate; 2 SuperSpeed USB 10Gbps signaling rateRear: 1 HDMI; 1 line in; 1 line out; 1 power connector; 1 RJ-45; 1, serial; 1 VGA; 2 USB 2.0 ports and connectors are available. Here, Realtek ALC3601 codec, combo microphone/headphone jack also included. This new Brand PC comes with HP USB Keyboard and HP USB Optical Mouse and full Brand PC has 03 years warranty.', 'blog_hp.jpg', 'Shihabul Islam', 2, 5, '2022-02-19 04:08:48'),
(2, 'Dell OptiPlex 3080 MT Core i3 10th Gen Tower Brand PC', 'Dell Optiplex 3080 MT 10th Gen Intel Core i3 10100 Brand PC comes with Intel Core i3 10100 (6MB, 3.60 GHz up to 4.30 GHz) Processor. Its 4GB DDR4 RAM makes this an essential business desktop that also contains 1TB 7200RPM of SATA HDD storage to ensure greater work ability. In its basic components include LED Back Light and standard Dell USB keyboard & USB mouse. In addition, it has Intel UHD Graphics 630 with Intel Intel B460 and integrated gigabit LAN. It runs on free DOS operating system with 260-watt power supply and DVD writer. Its2 x USB 2.0 (front), 2 x USB 3.2 Gen 1 Type-A (front), 2 x USB 2.0 (rear), 2 x USB 3.2 Gen 1 Type-A (rear), HDMI Port x 1, DisplayPort (DP) x 1, 1 x Audio Jack (Front), 1 x Audio Jack (Rear) provides secure data transfer. This best-in-class security and manageability in a space-saving design come with 3 years of limited warranty facility.', 'blog_dell.jpg', 'Nais Farjana', 2, 6, '2022-02-19 04:08:48'),
(3, 'HP 280 Pro G6 MT Core i3 10th Gen Microtower PC', 'HP 280 Pro G6 MT Core i3 10th Gen Microtower PC comes with Intel 10th Gen Core i3-10100 Processor-3.6GHz Turbo Boost 4.3GHz (6MB Cache), Intel H470 Chipset, 4GB DDR4 RAM-2666MHz RAM, 1TB SATA-7200rpm HDD and Intel 630 Graphics with Free DOS Operating System. No Monitor is included here. In this brand PC, Front: 1 headphone/microphone combo; 4 SuperSpeed USB 5Gbps signaling rate; 2 SuperSpeed USB 10Gbps signaling rateRear: 1 HDMI; 1 line in; 1 line out; 1 power connector; 1 RJ-45; 1, serial; 1 VGA; 2 USB 2.0 ports and connectors are available. Here, Realtek ALC3601 codec, combo microphone/headphone jack also included. This new Brand PC comes with HP USB Keyboard and HP USB Optical Mouse and full Brand PC has 03 years warranty.', 'blog_hp_1.jpg', 'Shihabul Islam', 2, 5, '2022-02-19 04:08:48'),
(4, 'Dell OptiPlex 3080 MT Core i3 10th Gen Tower Brand PC', 'Dell Optiplex 3080 MT 10th Gen Intel Core i3 10100 Brand PC comes with Intel Core i3 10100 (6MB, 3.60 GHz up to 4.30 GHz) Processor. Its 4GB DDR4 RAM makes this an essential business desktop that also contains 1TB 7200RPM of SATA HDD storage to ensure greater work ability. In its basic components include LED Back Light and standard Dell USB keyboard & USB mouse. In addition, it has Intel UHD Graphics 630 with Intel Intel B460 and integrated gigabit LAN. It runs on free DOS operating system with 260-watt power supply and DVD writer. Its2 x USB 2.0 (front), 2 x USB 3.2 Gen 1 Type-A (front), 2 x USB 2.0 (rear), 2 x USB 3.2 Gen 1 Type-A (rear), HDMI Port x 1, DisplayPort (DP) x 1, 1 x Audio Jack (Front), 1 x Audio Jack (Rear) provides secure data transfer. This best-in-class security and manageability in a space-saving design come with 3 years of limited warranty facility.', 'blog_dell_1.jpg', 'Nais Farjana', 2, 6, '2022-02-19 04:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`) VALUES
(1, 'Camera'),
(2, 'Desktops'),
(3, 'Pants'),
(4, 'Bags'),
(5, 'Hats'),
(6, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `blog_commments`
--

CREATE TABLE `blog_commments` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_sub_category`
--

CREATE TABLE `blog_sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `blog_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_sub_category`
--

INSERT INTO `blog_sub_category` (`id`, `name`, `blog_category_id`) VALUES
(1, 'CannonMX', 1),
(2, 'SonyMT', 1),
(3, 'SumsungM10', 1),
(4, 'SumsungM2', 1),
(5, 'Hp', 2),
(6, 'Dell', 2),
(7, 'Lenevo', 2),
(8, 'MSI', 2),
(9, 'Calvin Kl', 3),
(10, 'Denim', 3),
(11, 'T-series', 3),
(12, 'SmartX', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `total_product_price` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pending` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `shipped` int(11) NOT NULL,
  `delivered` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stock` int(100) NOT NULL,
  `short_descriptoin` mediumtext NOT NULL,
  `regular_rice` int(100) NOT NULL,
  `offer_price` int(100) NOT NULL,
  `description` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `images` longtext NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sub_sub_category_id` int(11) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `hot` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `hot_deals` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `stock`, `short_descriptoin`, `regular_rice`, `offer_price`, `description`, `featured_image`, `images`, `brand`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `new`, `featured`, `hot`, `sale`, `hot_deals`, `created_at`) VALUES
(1, 'laptop', 10, 'HP 15s-du1115TU Celeron N4020 15.6\" HD Laptop', 51000, 49000, 'The 15s-du1115TU powered by Intel Celeron N4020 (1.1 GHz up to 2.8 GHz, 2 cores) with Intel UHD Graphics 600. This Hp 15s series laptop comes with micro-edge display, the barely visible bezel revolutionizes your display by letting a larger screen fit into a smaller frame, that is featured with 15.6\" diagonal, HD (1366 x 768), micro-edge, BrightView, 220 nits, 45% NTSC Display. This laptop is designed with 1 TB 5400 rpm SATA HDD storage and 4GB DDR4 2400MHz RAM, which helps to run more efficiently and more reliably at faster speeds with DDR4 RAM, everything from multi-tasking to playing games gets a performance boost. This Hp Laptop is also equipped with Realtek Wi-Fi CERTIFIED 6 (1x2) and Bluetooth 5.2 combo (Supporting Gigabit data rate) wireless network connectivity. ', 'laptop1.jpg', 'laptop1.jpg', 'Hp', 5, 6, 36, 1, 1, 0, 0, 1, '2022-02-13 08:06:40'),
(2, 'Desktop', 20, 'Dell Vostro 3888MT Core i3 10th Gen Brand PC', 62000, 60000, 'Dell Vostro 3888MT Brand PC comes with Intel Core i3-10100 Processor (6M Cache, 3.60 GHz up to 4.30 GHz), 4GB DDR4 3200MHz RAM, Intel UHD Graphics 630, 1TB 7200RPM 3.5\" SATA HDD and Free DOS Operating System. Its 4GB DDR4 RAM makes this an essential business desktop that also contains 1TB 7200RPM of SATA storage to ensure greater workability. In its basic components include with USB Keyboard & Mouse. In addition, it has 4 x USB3.2 Gen 1 Type-A, 4 x USB2.0 Type-A, 1 x HDMI Port, 1 x VGA/D-Sub, 1 x Audio Port Combo and 1x Extra RAM Slot (highest upgradeable up to 64GB) with Tray load DVD Drive (Reads and Writes to DVD/CD).', 'desktop1.jpg', 'desktop1.jpg', 'Dell', 5, 7, 37, 0, 0, 0, 1, 0, '2022-02-13 08:06:40'),
(3, 'laptop', 10, 'HP 15s-du1115TU Celeron N4020 15.6\" HD Laptop', 51000, 49000, 'The 15s-du1115TU powered by Intel Celeron N4020 (1.1 GHz up to 2.8 GHz, 2 cores) with Intel UHD Graphics 600. This Hp 15s series laptop comes with micro-edge display, the barely visible bezel revolutionizes your display by letting a larger screen fit into a smaller frame, that is featured with 15.6\" diagonal, HD (1366 x 768), micro-edge, BrightView, 220 nits, 45% NTSC Display. This laptop is designed with 1 TB 5400 rpm SATA HDD storage and 4GB DDR4 2400MHz RAM, which helps to run more efficiently and more reliably at faster speeds with DDR4 RAM, everything from multi-tasking to playing games gets a performance boost. This Hp Laptop is also equipped with Realtek Wi-Fi CERTIFIED 6 (1x2) and Bluetooth 5.2 combo (Supporting Gigabit data rate) wireless network connectivity. ', 'laptop2.jpg', 'laptop2.jpg', 'Hp', 5, 6, 36, 0, 1, 1, 0, 1, '2022-02-13 08:06:40'),
(4, 'Desktop', 20, 'Dell Vostro 3888MT Core i3 10th Gen Brand PC', 62000, 60000, 'Dell Vostro 3888MT Brand PC comes with Intel Core i3-10100 Processor (6M Cache, 3.60 GHz up to 4.30 GHz), 4GB DDR4 3200MHz RAM, Intel UHD Graphics 630, 1TB 7200RPM 3.5\" SATA HDD and Free DOS Operating System. Its 4GB DDR4 RAM makes this an essential business desktop that also contains 1TB 7200RPM of SATA storage to ensure greater workability. In its basic components include with USB Keyboard & Mouse. In addition, it has 4 x USB3.2 Gen 1 Type-A, 4 x USB2.0 Type-A, 1 x HDMI Port, 1 x VGA/D-Sub, 1 x Audio Port Combo and 1x Extra RAM Slot (highest upgradeable up to 64GB) with Tray load DVD Drive (Reads and Writes to DVD/CD).', 'desktop2.jpg', 'desktop2.jpg', 'Dell', 5, 7, 37, 1, 0, 0, 0, 0, '2022-02-13 08:06:40'),
(5, 'Special Half Sleeve Shirt ', 0, 'Special Half Sleeve Printed Linen Shirt For Men', 2300, 2100, 'Fabrics : Cotton/Quality: 100% export quality./Collection for Men/Color: As given picture/Size : M, L, XL/M- long: 28\", body: 40\"/L- long: 29 \", body: 42\"\r\nXL/long 30\" body 44', 'shirt1.jpg', 'shirt1.jpg', 'ck', 4, 1, 14, 0, 1, 0, 1, 1, '2022-02-13 09:19:21'),
(6, 'Fashion Shoes for Women', 20, 'Slip-on Design Winter Fashion Shoes/Available Size 6 to 11/Outsole Material: Rubber/Gender: Women/Toe: Round Toe/Closure Type: Slip On/Color: grey/New Excellent Style', 3500, 3000, 'Slip-on Design Winter Fashion Shoes/Available Size 6 to 11/Outsole Material: Rubber/Gender: Women/Toe: Round Toe/Closure Type: Slip On/Color: grey/New Excellent Style/practical and fashionable\r\nProduct Type: Shoe/Main Material: Artificial Leather\r\nGender: Women/Smart Design/Fashionable and Stylish/size 35 36.37.38.39.40.\r\nsize 6.7.8.9.10.11.', 'shoes1.jpg', 'shoes1.jpg', 'Arong', 4, 2, 9, 1, 0, 0, 0, 0, '2022-02-13 09:19:21'),
(7, 'Special Half Sleeve Shirt ', 0, 'Special Half Sleeve Printed Linen Shirt For Men', 2300, 2100, 'Fabrics : Cotton/Quality: 100% export quality./Collection for Men/Color: As given picture/Size : M, L, XL/M- long: 28\", body: 40\"/L- long: 29 \", body: 42\"\r\nXL/long 30\" body 44', 'shirt2.jpg', 'shirt2.jpg', 'ck', 4, 1, 14, 0, 1, 0, 1, 1, '2022-02-13 09:19:21'),
(8, 'Fashion Shoes for Women', 20, 'Slip-on Design Winter Fashion Shoes/Available Size 6 to 11/Outsole Material: Rubber/Gender: Women/Toe: Round Toe/Closure Type: Slip On/Color: grey/New Excellent Style', 3500, 3000, 'Slip-on Design Winter Fashion Shoes/Available Size 6 to 11/Outsole Material: Rubber/Gender: Women/Toe: Round Toe/Closure Type: Slip On/Color: grey/New Excellent Style/practical and fashionable\r\nProduct Type: Shoe/Main Material: Artificial Leather\r\nGender: Women/Smart Design/Fashionable and Stylish/size 35 36.37.38.39.40.\r\nsize 6.7.8.9.10.11.', 'shoes2.jpg', 'shoes2.jpg', 'Arong', 4, 2, 9, 1, 0, 0, 0, 0, '2022-02-13 09:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `icon`) VALUES
(4, 'Clothing', 'icon fa fa-shopping-bag'),
(5, 'Electronics', 'icon fa fa-laptop'),
(6, 'Health & Beauty', 'icon fa fa-paw'),
(7, 'Watches', 'icon fa fa-clock-o'),
(8, 'Jewellery', 'icon fa fa-diamond'),
(9, 'Shoes', 'icon fa fa-heartbeat'),
(10, 'Kids & Girls', 'icon fa fa-paper-plane');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `btntext` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `heading`, `subheading`, `description`, `link`, `btntext`, `img`) VALUES
(1, 'Top Brands', 'New Collections', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'home', 'Shop Now', 'slide1.jpg'),
(2, 'My Business', 'Latest Collections', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'home', 'Read More', 'slide2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider-bottom`
--

CREATE TABLE `slider-bottom` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider-bottom`
--

INSERT INTO `slider-bottom` (`id`, `title`, `subtitle`) VALUES
(1, 'MONEY BACK', '30 Days Money Back Guarantee'),
(2, 'FREE SHIPPING', 'Shipping on orders over $99'),
(3, 'SPECIAL SALE', 'Extra $5 off on all items');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category_id`) VALUES
(1, 'Men', 4),
(2, 'Women', 4),
(3, 'Boys', 4),
(4, 'Girls', 4),
(6, 'Laptops', 5),
(7, 'Desktops', 5),
(8, 'Cameras', 5),
(9, 'Mobile Phones', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_category`
--

INSERT INTO `sub_sub_category` (`id`, `name`, `sub_cat_id`) VALUES
(8, 'Dresses', 1),
(9, 'Shoes', 1),
(10, 'Jackets', 1),
(11, 'Sunglasses', 1),
(12, 'Sport Wear', 1),
(13, 'Blazers', 1),
(14, 'Shirts', 1),
(15, 'Handbags', 2),
(16, 'Jwellery', 2),
(17, 'Swimwear', 2),
(18, 'Tops', 2),
(19, 'Flats', 2),
(20, 'Shoes', 2),
(21, 'Winter Wear', 2),
(22, 'Toys & Games', 3),
(23, 'Jeans', 3),
(24, 'Shirts', 3),
(25, 'Shoes', 3),
(26, 'School Bags', 3),
(27, 'Lunch Box', 3),
(28, 'Footwear', 3),
(29, 'Sandals', 4),
(30, 'Shorts', 4),
(31, 'Dresses', 4),
(32, 'Jwellery', 4),
(33, 'Bags', 4),
(34, 'Night Dress', 4),
(35, 'Swim Wear', 4),
(36, 'Hp', 6),
(37, 'Dell', 6),
(38, 'Asuse', 6),
(39, 'Brand Pc', 6),
(40, 'Non-brand', 6),
(41, 'Clone', 6),
(42, 'Lenevo', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_id` (`blog_category_id`),
  ADD KEY `blog_sub_category_id` (`blog_sub_category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_commments`
--
ALTER TABLE `blog_commments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `blog_sub_category`
--
ALTER TABLE `blog_sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_id` (`blog_category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `sub_sub_category_id` (`sub_sub_category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider-bottom`
--
ALTER TABLE `slider-bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_commments`
--
ALTER TABLE `blog_commments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_sub_category`
--
ALTER TABLE `blog_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider-bottom`
--
ALTER TABLE `slider-bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`blog_sub_category_id`) REFERENCES `blog_sub_category` (`id`);

--
-- Constraints for table `blog_commments`
--
ALTER TABLE `blog_commments`
  ADD CONSTRAINT `blog_commments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

--
-- Constraints for table `blog_sub_category`
--
ALTER TABLE `blog_sub_category`
  ADD CONSTRAINT `blog_sub_category_ibfk_1` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`sub_sub_category_id`) REFERENCES `sub_sub_category` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);

--
-- Constraints for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD CONSTRAINT `sub_sub_category_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

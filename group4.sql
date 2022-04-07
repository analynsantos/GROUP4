-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2021 at 06:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15364776_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(22, 'PAINT2', 'Waves Painting', 'Ocean Waves Paint by Number Kit || Paint and Brush', 6, 1, 6.25, '2021-02-09 11:31:44', 'thehero_24@yahoo.com'),
(23, 'STICKER3', 'Sports Sticker', 'Sports Ball', 4, 1, 4.25, '2021-02-09 11:31:44', 'thehero_24@yahoo.com'),
(25, 'PAINT1', 'Green Plant Painting', 'Potted Plants Paint by Number Kit || Paint and Brush', 5, 1, 4.50, '2021-02-09 15:18:48', 'reynante@gmail.com'),
(26, 'PAINT2', 'Waves Painting', 'Ocean Waves Paint by Number Kit || Paint and Brush', 6, 1, 6.25, '2021-02-09 15:18:48', 'reynante@gmail.com'),
(27, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 6, 2, 11.50, '2021-02-09 16:13:18', 'inyeop@gmail.com'),
(28, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 6, 1, 5.75, '2021-02-10 01:52:17', 'je@gmail.com'),
(29, 'PAINT2', 'Waves Painting', 'Ocean Waves Paint by Number Kit || Paint and Brush', 6, 2, 12.50, '2021-02-10 02:56:21', 'inyeop@gmail.com'),
(30, 'PAINT2', 'Waves Painting', 'Ocean Waves Paint by Number Kit || Paint and Brush', 6, 7, 43.75, '2021-02-10 03:06:44', 'asd@asd'),
(31, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 6, 1, 5.75, '2021-02-10 03:07:56', 'asd@asd'),
(32, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 6, 1, 5.75, '2021-02-10 03:08:40', 'asd@asd'),
(33, 'PAINT1', 'Green Plant Painting', 'Potted Plants Paint by Number Kit || Paint and Brush', 5, 1, 4.50, '2021-02-10 03:08:40', 'asd@asd'),
(34, 'PAINT1', 'Green Plant Painting', 'Potted Plants Paint by Number Kit || Paint and Brush', 5, 1, 4.50, '2021-02-17 06:05:40', 'hezekiiiah@gmail.com'),
(35, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 6, 1, 5.75, '2021-02-17 06:05:40', 'hezekiiiah@gmail.com'),
(36, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 6, 4, 23.00, '2021-02-17 06:06:33', 'hezekiiiah@gmail.com'),
(37, 'PAINT2', 'Waves Painting', 'Ocean Waves Paint by Number Kit || Paint and Brush', 6, 7, 43.75, '2021-03-27 14:32:06', 'project@group4.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(5, 'PAINT1', 'Green Plant Painting', 'Potted Plants Paint by Number Kit || Paint and Brush', 'p1.jpg', 10, 4.50),
(6, 'PAINT2', 'Waves Painting', 'Ocean Waves Paint by Number Kit || Paint and Brush', 'p2.jpg', 3, 6.25),
(7, 'PAINT3', 'Tropical Plant Painting', 'Tropical Potted Plants Paint by Number Kit || Paint and Brush', 'p3.jpg', 10, 5.75),
(8, 'STICKER1', 'Candles Sticker', 'Heart Butt Corgi Dog', 'k4.jpg', 10, 3.00),
(9, 'STICKER2', 'Coffee Sticker', 'Coffee Shop Fancy Drink  ', 'k2.jpg', 10, 3.50),
(10, 'STICKER3', 'Sports Sticker', 'Sports Ball', 'k3.jpg', 10, 4.25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`, `profile`) VALUES
(10, 'Project', 'IT304', 'unknown', 'unknown', 123456789, 'project@group4.com', 'project123', 'user', 'anna_lisa.png'),
(11, 'christian ', 'cabantog ', 'mojon', 'malolos', 3000, 'thehero_24@yahoo.com', 'cabantog16', 'user', 'people2.jpg'),
(12, 'Reynante', 'Gigante', 'Pandi, Bulacan', 'Pandi', 3000, 'reynante@gmail.com', '123', 'user', 'profile.jpg'),
(13, 'inyeop', 'hwang', '12345', 'south', 3001, 'inyeop@gmail.com', '12345', 'user', 'Koala.jpg'),
(14, 'J', 'P', 'sample', 'Bulacan', 1234, 'je@gmail.com', '1234', 'user', 'FB_IMG_15718383412965388.jpg'),
(15, 'asd', 'dfghj', 'asdfg', 'asdfghj', 1234, 'asd@asd', 'asd', 'user', 'picture.png'),
(16, 'Christian', 'Cabantog', '77# Virgo St. San Felipe Subdivision Mojon Malolos Bulacan', 'Malolos', 3000, 'hezekiiiah@gmail.com', 'hezekiah16', 'user', 'profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

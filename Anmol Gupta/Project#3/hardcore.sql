-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 10:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardcore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `im1` varchar(255) NOT NULL,
  `im2` varchar(255) NOT NULL,
  `sellerid` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `im1`, `im2`, `sellerid`, `category`, `price`) VALUES
(1, 'Anime Wallpapers', 'My Favourite Wallpapers are on SALE!!! Hurry....', 'images/5d2c36801fa7b1.69385848.jpg', 'images/5d2c36801fa826.85390223.jpg', '2', 'Books, Sports & Hobbies', '15'),
(2, 'Another Anime Wallpaper Collection', 'One Piece and Naruto I guess', 'images/5d2c38495e0399.02939372.jpg', 'images/5d2c38495e0417.56210257.jpg', '2', 'Kids', '1500'),
(3, 'Wallpapers', 'Some Awesome Car Wallpapers', 'images/5d2c38f32da204.16966755.jpg', 'images/5d2c38f32da286.79715621.jpg', '1', 'Cars', '99'),
(4, 'House for Sale', 'A nice house on a beautiful landscape.FEATURES:-(1)Bathroom(2)Bedroom', 'images/5d2cbee913ab80.59914067.jpg', 'images/5d2cbee913ac04.96117654.jpg', '3', 'Real Estates', '12000000'),
(5, 'Castle for Sale', 'A Real Castle on a hill with a Princess and a baby Dragon..Clash Royal ehhh......I will be mega knight with an Awp.', 'images/5d2cbf8bc9f276.44404803.jpg', 'images/5d2cbf8bc9f313.47659579.jpg', '3', 'Real Estates', '12000000'),
(6, 'Island for Sale', 'A Real Island from where you can start your journey for becoming a Pirate.', 'images/5d2cbfed9ebaf7.39372647.jpg', 'images/5d2cbfed9ebb74.14922453.jpg', '3', 'Real Estates', '999999'),
(7, 'Cup of True Coffee', 'The true coffee which is the only thing that a ghoul can enjoy as a human....evil eh.....', 'images/5d2cc0986b2358.51007039.jpg', 'images/5d2cc0986b2403.55047333.jpg', '1', 'Services', '5000'),
(8, 'Eiffel Tower', 'Yupp!!! The real Eiffel Tower that is located in Paris is on sale.......and moreover in just Rs. 5.....Grab it and then destroy it like in Modern Warfare 3.', 'images/5d2cc2d3502e41.81207284.jpg', 'images/5d2cc2d3502ea4.58527765.jpg', '1', 'Furnitures', '5'),
(9, 'Hong Kong', 'At last the dreamed Hong Kong is on sale at a price of only Rs 7.You are a sucker if you lose it......', 'images/5d2cc3c2a55001.11134448.jpg', 'images/5d2cc3c2a55109.86031287.jpg', '1', 'Real Estates', '7'),
(10, 'I Phone', 'This model looked best on Google though I really has no idea which it is........Nice Ehhhhh????', 'images/5d2d61891c3fd4.68631533.jpg', 'images/5d2d61891c40e2.50521098.jpg', '1', 'Mobiles', '50000'),
(11, 'Alienware Laptop', 'What can be more good than getting a brand new imaginary Alienware Laptop in only Rs 69............Oh Yeah.......', 'images/5d2d62cbc4a672.00995570.jpg', 'images/5d2d62cbc4a6f3.72314654.jpg', '1', 'Electronics & Appliances', '69'),
(12, 'Ninja H2R', 'The only thing that I know about this bike is that it looks really good so probably runs fast also.', 'images/5d2d63e9ce10b3.22183968.jfif', 'images/5d2d63e9ce1208.37859484.png', '1', 'Bikes', '1469000'),
(13, 'Dragon for Sale', 'What can be more good in life than having A Living Dragon as a pet.......Accept the deal if you want to die of happiness......', 'images/5d2d6557ace299.95020079.gif', 'images/5d2d6557ace381.30300531.jpg', '1', 'Pets', '700'),
(14, 'An Ordinary suit', 'Hey it is not a store that only contains imaginary fake items.It also contains real fake items...... ', 'images/5d2d69bc65f634.35334088.jpg', 'images/5d2d69bc65f6c8.72881332.jpg', '1', 'Fashion', '123456'),
(15, 'CS GO workshops', 'Just Subscribe them on steam to get them for free.', 'images/5d2d6ac32dae94.99683690.jpg', 'images/5d2d6ac32daf06.28987812.jpg', '1', 'Services', '150000'),
(16, 'Need an App Developer', 'Your very important task is to to nothing and come with me to grab a meal at Dominos......From your side though.', 'images/5d2d6b96180172.27370371.jpg', 'images/5d2d6b961801f3.19685771.jpg', '1', 'Jobs', '5'),
(17, 'Yuno Wallpapers', 'What can be so satisfying than having a psycho killer protecting your laptop from younger siblings.', 'images/5d2d6d149dbef7.37538478.jpg', 'images/5d2d6d149dbf65.78777793.jpg', '2', 'Books, Sports & Hobbies', '77');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phno`, `password`) VALUES
(1, 'Anmol Gupta', 'ag5826000@gmail.com', '9453134239', '1234567890'),
(2, 'Anmol Gupta', 'guptaanmol92@gmail.com', '6387935172', '1234567890'),
(3, 'Hardcore', 'ag7777000@gmail.com', '7777777777', '1234567890'),
(4, 'Dragon Slayer', 'natsu@123.com', '7676767676', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

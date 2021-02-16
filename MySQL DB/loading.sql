-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 01:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loading`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(60) NOT NULL,
  `admin_type` int(1) NOT NULL,
  `admin_firstname` varchar(50) NOT NULL,
  `admin_lastname` varchar(50) NOT NULL,
  `admin_address` text NOT NULL,
  `admin_contact_info` varchar(100) NOT NULL,
  `admin_photo` varchar(200) NOT NULL,
  `admin_status` int(1) NOT NULL,
  `admin_activate_code` varchar(15) NOT NULL,
  `admin_reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_password`, `admin_type`, `admin_firstname`, `admin_lastname`, `admin_address`, `admin_contact_info`, `admin_photo`, `admin_status`, `admin_activate_code`, `admin_reset_code`, `created_on`, `role`) VALUES
(17, 'a@a.com', '12', 0, 'sadi ', 'ashlaq', '', '', '', 0, '', '', '0000-00-00', 'admin'),
(33, 'anasmahmoud.mel@gmail.com', '123456', 0, 'Anas ', 'Melhem', '', '', '', 0, '', '', '0000-00-00', 'admin'),
(34, 'a@a.com', '123', 0, 'omar', 'melhem', '', '', '', 0, '', '', '0000-00-00', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `cat_slug`, `cat_image`) VALUES
(90, 'PC', '', 'images/admin_images/1.jpg'),
(91, 'Console', '', 'images/admin_images/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_description` varchar(999) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_photo` text NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `category_id`, `pro_name`, `pro_description`, `slug`, `pro_price`, `pro_photo`, `date_view`, `counter`) VALUES
(72, 90, 'Battlefield 3', 'Battlefield 3 is a first-person shooter video game developed by EA DICE and published by Electronic Arts. ', '', '$39.99', 'images/proimages/1.jpg', '0000-00-00', 0),
(73, 90, 'Prey', 'Prey is a first-person shooter video game developed by Arkane Studios and published by Bethesda Softworks.', '', '$29.99', 'images/proimages/2.jpg', '0000-00-00', 0),
(74, 91, 'Call of Duty: Modern Warfare 3', 'Call of Duty: Modern Warfare 3 is a 2011 first-person shooter video game, jointly developed by Infinity Ward and Sledgehammer Games and published by Activision.', '', '$22.14', 'images/proimages/3.jpg', '0000-00-00', 0),
(75, 90, 'Halo: Combat Evolved', 'Halo: Combat Evolved is a first-person shooter video game developed by Bungie and published by Microsoft Game Studios.', '', '$9.99', 'images/proimages/4.jpg', '0000-00-00', 0),
(76, 91, 'Halo 4', 'Halo 4 is a first-person shooter developed by 343 Industries and published by Microsoft Studios for the Xbox 360 video game console.', '', '$12.49', 'images/proimages/5.jpg', '0000-00-00', 0),
(77, 91, 'The Legend of Zelda: The Wind Waker', 'The Legend of Zelda: The Wind Waker is an action-adventure game developed and published by Nintendo for the GameCube home video game console.', '', '$30', 'images/proimages/6.jpg', '0000-00-00', 0),
(78, 91, 'The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda: Breath of the Wild is a 2017 action-adventure game developed and published by Nintendo for the Nintendo Switch and Wii U consoles.', '', '$44.99', 'images/proimages/8.jpg', '0000-00-00', 0),
(80, 91, 'Destiny Rise of Iron', 'Destiny: Rise of Iron is a major expansion for Bungies first-person shooter Destiny.', '', '$30', 'images/proimages/10.jpg', '0000-00-00', 0),
(81, 91, 'The Last of Us', 'The Last of Us is a 2013 action-adventure game developed by Naughty Dog and published.', '', '$19.99', 'images/proimages/11.jpg', '0000-00-00', 0),
(82, 90, 'Assassins Creed III', 'Assassins Creed III is a 2012 action-adventure video game developed by Ubisoft Montreal.', '', '$39.99', 'images/proimages/12.jpg', '0000-00-00', 0),
(83, 90, 'Fallout', 'Fallout is a series of post-apocalyptic role-playing video games.', '', '$29.99', 'images/proimages/13.jpg', '0000-00-00', 0),
(84, 90, 'Golden Axe', 'Golden Axe is a side-scrolling hack and slash arcade video game.', '', '$0.99', 'images/proimages/15.jpg', '0000-00-00', 0),
(85, 90, 'Civilization VI: Rise and Fall', 'Rise and Fall is the first official expansion pack for the turn-based strategy video game Civilization VI.', '', '$29.99', 'images/proimages/16.jpg', '0000-00-00', 0),
(86, 91, 'The Legend of Zelda: The Wind Waker', 'The Legend of Zelda: The Wind Waker is an action-adventure game developed and published by Nintendo for the GameCube home video game console.', '', '$30', 'images/proimages/17.jpg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pro_id`, `pay_id`, `sales_date`) VALUES
(10, 15, 20, '15', '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `randSalt`) VALUES
(22, 'lyt8191400@ju.edu.jo', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'user', 'Ss', 'ss', 'Amman', '', '', 0, '', '', '2020-12-02 22:25:48', '$2y$10$iusesomecrazystrings22'),
(23, 'lyt8191400@ju.edu.jo', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'user', 'Ss', 'ss', 'Amman', '', '', 0, '', '', '2020-12-02 22:27:08', '$2y$10$iusesomecrazystrings22'),
(24, 'test@mail.com', '123', 'user', 'Laith', 'Alenooz', 'Amman', '', '', 0, '', '', '2020-12-03 08:55:26', '$2y$10$iusesomecrazystrings22'),
(47, 'a@a.com', '12', '', 'sadsa', 'adsdasd', '', '', '', 0, '', '', '2020-12-03 20:15:36', '$2y$10$iusesomecrazystrings22'),
(50, 'wallahmdre@mdre.com', '123', 'user', 'Sadi', 'A', 'mdre', '', 'the_one_thing_improve_skills.jpg', 0, '', '', '2020-12-05 02:33:33', '$2y$10$iusesomecrazystrings22'),
(51, 'a@a.com', '123', 'user', 'sadsa', 'adsdasd', 'Amman,jordan', '', '', 0, '', '', '2020-12-05 03:34:28', '$2y$10$iusesomecrazystrings22'),
(52, 'anasmahmoud.mel@gmail.com', '123456', '', 'Anas', 'Melhem', '', '', '', 0, '', '', '2020-12-05 15:50:52', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

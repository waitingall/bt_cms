-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 08:34 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_hai_blogs`
--

CREATE TABLE `cms_hai_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_hai_blogs`
--

INSERT INTO `cms_hai_blogs` (`id`, `title`, `contents`, `descriptions`, `images`, `url`) VALUES
(1, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/'),
(2, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/'),
(3, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/'),
(4, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/');

-- --------------------------------------------------------

--
-- Table structure for table `cms_hung_blogs`
--

CREATE TABLE `cms_hung_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `number` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_hung_blogs`
--

INSERT INTO `cms_hung_blogs` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(1, 'Buddha:\r\n                            <br>\r\n                            How to drink tea?', '', 'The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_manh_blogs`
--

CREATE TABLE `cms_manh_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `times` datetime NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `number` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_manh_blogs`
--

INSERT INTO `cms_manh_blogs` (`id`, `title`, `times`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(1, 'Coffee & Tea', '2017-04-05 00:00:00', '', 'Its delicious smooth blend and various varieties seductively charm you at the start of your day', 'images/coffee-thumb-1.jpg', '', ''),
(2, 'Bakery & Sweets', '2017-04-19 00:00:00', '', 'These desserts aren’t simply favorites of ours; they also help define, in their own way…', 'images/coffee-thumb-3.jpg', '', ''),
(3, 'Lunch Menu', '2017-04-03 00:00:00', '', 'We make our lunches and dinners with the finest ingredients we can find to make our meals as flavorful as possible.', 'images/coffee-thumb-4.jpg', '', ''),
(4, 'Work Spots', '2017-04-15 00:00:00', '', 'Coffice in Stockholm is a great place to work from. Food options beyond pastries. Free WiFi.', 'images/coffee-thumb-5.jpg', '', ''),
(5, 'Child Friendly', '2017-04-13 00:00:00', '', 'Based in Barcelona, Pudding Bar was designed for spending the afternoon with the kids.', 'images/coffee-thumb-6.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pho_date`
--

CREATE TABLE `cms_pho_date` (
  `date_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `times` datetime NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_pho_date`
--

INSERT INTO `cms_pho_date` (`date_id`, `title`, `times`, `contents`, `descriptions`, `images`, `url`) VALUES
(1, 'Opening Times', '2017-04-12 00:00:00', 'Week days', 'Saturday', '', ''),
(2, 'Didgrections', '2017-04-12 00:00:00', 'London, UK \r\n10, Firs Avenue, Muswell Hill', 'View on map', '', ''),
(4, 'Directions', '2017-04-12 00:00:00', '', '', 'images/Yelp-logo.svg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pho_location`
--

CREATE TABLE `cms_pho_location` (
  `location_id` int(11) NOT NULL,
  `location_title` varchar(128) NOT NULL,
  `location_times` datetime NOT NULL,
  `location_contents` varchar(128) NOT NULL,
  `location_descriptions` text NOT NULL,
  `location_images` varchar(128) NOT NULL,
  `location_url` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_pho_location`
--

INSERT INTO `cms_pho_location` (`location_id`, `location_title`, `location_times`, `location_contents`, `location_descriptions`, `location_images`, `location_url`) VALUES
(1, 'Directions', '2017-04-13 00:00:00', 'London, UK \r\n10, Firs Avenue, Muswell Hill', '', '', 'https://facebook.com/'),
(2, 'Directions', '2017-04-13 00:00:00', 'London, UK \r\n10, Firs Avenue, Muswell Hill', '', '', 'https://facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `cms_quang_header_bulid`
--

CREATE TABLE `cms_quang_header_bulid` (
  `header_id` int(11) NOT NULL,
  `header_title` varchar(128) NOT NULL,
  `header_times` datetime NOT NULL,
  `header_contents` varchar(128) NOT NULL,
  `header_descriptions` text NOT NULL,
  `header_images` varchar(128) NOT NULL,
  `header_url` varchar(128) NOT NULL,
  `header_number` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_quang_main_bulid`
--

CREATE TABLE `cms_quang_main_bulid` (
  `bulid_id` int(11) NOT NULL,
  `bulid_title` varchar(128) NOT NULL,
  `bulid_times` datetime NOT NULL,
  `bulid_contents` varchar(128) NOT NULL,
  `bulid_descriptions` text NOT NULL,
  `bulid_images` varchar(128) NOT NULL,
  `bulid_url` varchar(128) NOT NULL,
  `bulid_number` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_quang_main_bulid`
--

INSERT INTO `cms_quang_main_bulid` (`bulid_id`, `bulid_title`, `bulid_times`, `bulid_contents`, `bulid_descriptions`, `bulid_images`, `bulid_url`, `bulid_number`) VALUES
(1, 'Brunch', '2017-04-13 00:00:00', 'Cashew Chicken With Stir-Fry Vegetables & Green Salad\r\n', 'Cashew Chicken With Stir-Fry Vegetables & Green Salad $22\r\nCashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.\r\nOptic Big Breakfast Combo Menu $20\r\nCoffee and Pain au chocolat (Chocolate croissant) Combo Menu $11\r\nHot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...', './images/coffee-photo-1.jpg', '', ''),
(8, 'Brunch', '2017-04-13 00:00:00', 'Cashew Chicken With Stir-Fry Vegetables & Green Salad\r\n', 'Cashew Chicken With Stir-Fry Vegetables & Green Salad $22\r\nCashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.\r\nOptic Big Breakfast Combo Menu $20\r\nCoffee and Pain au chocolat (Chocolate croissant) Combo Menu $11\r\nHot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...', './images/coffee-photo-2.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_sang_blogs`
--

CREATE TABLE `cms_sang_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `number` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_sang_blogs`
--

INSERT INTO `cms_sang_blogs` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(1, 'Tools', '', '“Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.”', '', '', ''),
(2, 'Welcome', '', '“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”', '', '', ''),
(3, 'Food', '', '“Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_thien_blogs`
--

CREATE TABLE `cms_thien_blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(128) NOT NULL,
  `blog_times` datetime NOT NULL,
  `blog_contents` varchar(128) NOT NULL,
  `blog_descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `blog_url` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_thien_blogs`
--

INSERT INTO `cms_thien_blogs` (`blog_id`, `blog_title`, `blog_times`, `blog_contents`, `blog_descriptions`, `images`, `blog_url`) VALUES
(1, 'Avocado Maki', '2017-04-13 00:00:00', 'Avocado, Nori, Sushi Rice, Sashimi-grade Salmon', 'Avocado, Nori, Sushi Rice, Sashimi-grade Salmon', 'images/Sushi-thumbs-1.jpg', ''),
(2, 'Spicy Tuna Roll', '2017-04-13 00:00:00', 'Nori, Sushi Rice, Sashimi-grade tuna, Sriracha sauce, Green scallion, Sesame seeds, Spicy mayo', 'Nori, Sushi Rice, Sashimi-grade tuna, Sriracha sauce, Green scallion, Sesame seeds, Spicy mayo', 'images/Sushi-thumbs-1.jpg', ''),
(3, 'Salmon Dragon Roll', '2017-04-13 00:00:00', 'Nori, Sushi Rice, Shrimp Tempura, Tobiko, Grilled eel, Avocados, Japanese cucumber, Unagi Sauce, Spicy mayo', 'Spicy Tuna RollNori, Sushi Rice, Shrimp Tempura, Tobiko, Grilled eel, Avocados, Japanese cucumber, Unagi Sauce, Spicy mayo', 'images/Sushi-thumbs-3.jpg', ''),
(4, 'Smoked Salmon and Caviar Sushi', '2017-04-13 00:00:00', 'Cream cheese, Chives, Smoked salmon, Nori, Blanched leeks, Wasabi Tobbiko Caviar, Rice', 'Cream cheese, Chives, Smoked salmon, Nori, Blanched leeks, Wasabi Tobbiko Caviar, Rice', 'images/Sushi-thumbs-4.jpg', ''),
(5, 'Vegetarian Futomaki', '2017-04-13 00:00:00', 'Tomato, Bell pepper, Cucumber, Lettuce leaves, Nori, Sushi Rice', 'Tomato, Bell pepper, Cucumber, Lettuce leaves, Nori, Sushi Rice', 'images/Sushi-thumbs-5.jpg', ''),
(6, 'Cucumber Maki', '2017-04-13 00:00:00', 'Nori, Sushi Rice, Cucumber strips, Sesame Seeds', 'Nori, Sushi Rice, Cucumber strips, Sesame Seeds', 'images/Sushi-thumbs-6.jpg', ''),
(7, '', '0000-00-00 00:00:00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_thong_breakfast`
--

CREATE TABLE `cms_thong_breakfast` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_thong_breakfast`
--

INSERT INTO `cms_thong_breakfast` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `price`) VALUES
(1, 'Antioxidant Fruits Mix', '', '', '', '', '$5'),
(2, 'Blueberry banana pancakes', '', '', '', '', '$5'),
(3, 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '', '', '', '', '$5'),
(4, 'Fig and lemon cake', '', '', '', '', '$5'),
(5, 'Antioxidant Fruits Mix', '', '', '', '', '$5'),
(6, 'Blueberry banana pancakes', '', '', '', '', '$5'),
(7, 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '', '', '', '', '$5'),
(8, 'Fig and lemon cake', '', '', '', '', '$7');

-- --------------------------------------------------------

--
-- Table structure for table `cms_thong_dessert`
--

CREATE TABLE `cms_thong_dessert` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_thong_dessert`
--

INSERT INTO `cms_thong_dessert` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `price`) VALUES
(1, 'Antioxidant Fruits Mix', '', '', '', '', '$5'),
(2, 'Blueberry banana pancakes', '', '', '', '', '$5'),
(3, 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '', '', '', '', '$5'),
(4, 'Fig and lemon cake', '', '', '', '', '$5'),
(5, 'Antioxidant Fruits Mix', '', '', '', '', '$5'),
(6, 'Blueberry banana pancakes', '', '', '', '', '$5'),
(7, 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '', '', '', '', '$5'),
(8, 'Fig and lemon cake', '', '', '', '', '$7');

-- --------------------------------------------------------

--
-- Table structure for table `cms_thong_dinner`
--

CREATE TABLE `cms_thong_dinner` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_thong_dinner`
--

INSERT INTO `cms_thong_dinner` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `price`) VALUES
(1, 'Antioxidant Fruits Mix', '', '', '', '', '$5'),
(2, 'Blueberry banana pancakes', '', '', '', '', '$5'),
(3, 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '', '', '', '', '$5'),
(4, 'Fig and lemon cake', '', '', '', '', '$5'),
(5, 'Antioxidant Fruits Mix', '', '', '', '', '$5'),
(6, 'Blueberry banana pancakes', '', '', '', '', '$5'),
(7, 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '', '', '', '', '$5'),
(8, 'Fig and lemon cake', '', '', '', '', '$7');

-- --------------------------------------------------------

--
-- Table structure for table `cms_thong_menu`
--

CREATE TABLE `cms_thong_menu` (
  `menu_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_thong_menu`
--

INSERT INTO `cms_thong_menu` (`menu_id`, `type`, `images`, `name`, `status`) VALUES
(1, '', '', 'Home', 0),
(2, '', '', 'About', 0),
(3, '', '', 'Reservation', 0),
(4, '', '', 'Hình ảnh', 0),
(5, '', '', 'Tin tức', 0),
(6, '', '', 'Bộ sưu tập', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_tuananh_gallery`
--

CREATE TABLE `cms_tuananh_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `descriptions` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `number` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_tuananh_gallery`
--

INSERT INTO `cms_tuananh_gallery` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(9, '', '', '', 'images/16/07.jpg', '', ''),
(2, '', '', '', 'images/16/01.jpg', '', ''),
(3, '', '', '', 'images/16/02.jpg', '', ''),
(4, '', '', '', 'images/16/03.jpg', '', ''),
(5, '', '', '', 'images/16/04.jpg', '', ''),
(6, '', '', '', 'images/16/05.jpg', '', ''),
(7, '', '', '', 'images/16/06.jpg', '', ''),
(8, '', '', '', 'images/16/08.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`) VALUES
(1, 'Nhà Hàng 1'),
(2, 'Nhà Hàng 2'),
(3, 'Nhà hàng 5'),
(4, 'Nhà hàng 6'),
(5, 'Nhà hàng 7'),
(6, 'Nhà hàng 8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_hai_blogs`
--
ALTER TABLE `cms_hai_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_hung_blogs`
--
ALTER TABLE `cms_hung_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_manh_blogs`
--
ALTER TABLE `cms_manh_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pho_date`
--
ALTER TABLE `cms_pho_date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `cms_pho_location`
--
ALTER TABLE `cms_pho_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `cms_quang_header_bulid`
--
ALTER TABLE `cms_quang_header_bulid`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `cms_quang_main_bulid`
--
ALTER TABLE `cms_quang_main_bulid`
  ADD PRIMARY KEY (`bulid_id`);

--
-- Indexes for table `cms_sang_blogs`
--
ALTER TABLE `cms_sang_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_thien_blogs`
--
ALTER TABLE `cms_thien_blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cms_thong_breakfast`
--
ALTER TABLE `cms_thong_breakfast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_thong_dessert`
--
ALTER TABLE `cms_thong_dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_thong_dinner`
--
ALTER TABLE `cms_thong_dinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_thong_menu`
--
ALTER TABLE `cms_thong_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `cms_tuananh_gallery`
--
ALTER TABLE `cms_tuananh_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_hai_blogs`
--
ALTER TABLE `cms_hai_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cms_hung_blogs`
--
ALTER TABLE `cms_hung_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cms_manh_blogs`
--
ALTER TABLE `cms_manh_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cms_pho_date`
--
ALTER TABLE `cms_pho_date`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_pho_location`
--
ALTER TABLE `cms_pho_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cms_quang_header_bulid`
--
ALTER TABLE `cms_quang_header_bulid`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_quang_main_bulid`
--
ALTER TABLE `cms_quang_main_bulid`
  MODIFY `bulid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cms_sang_blogs`
--
ALTER TABLE `cms_sang_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cms_thien_blogs`
--
ALTER TABLE `cms_thien_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cms_thong_breakfast`
--
ALTER TABLE `cms_thong_breakfast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cms_thong_dessert`
--
ALTER TABLE `cms_thong_dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cms_thong_dinner`
--
ALTER TABLE `cms_thong_dinner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cms_thong_menu`
--
ALTER TABLE `cms_thong_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cms_tuananh_gallery`
--
ALTER TABLE `cms_tuananh_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

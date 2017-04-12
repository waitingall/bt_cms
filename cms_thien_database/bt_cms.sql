-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 03:24 PM
-- Server version: 5.7.16
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt_cms`
--
CREATE DATABASE IF NOT EXISTS `bt_cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `bt_cms`;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `number`, `url`, `image`) VALUES
(1, 'Sushi', 'Đây là lựa chọn tốt nhất cho các cặp đôi uyên ương sắp cưới và kỷ niệm ngày cưới.', '+84 909 685 172', 'http://localhost/cms_thien_database/public', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `image`) VALUES
(1, 'sushi nam', 'Từ xưa, người Nhật đã biết cách ủ cá, tôm, hải sản vào nắm cơm để giữ được mùi vị thơm ngon. Khi ủ, cơm thường được trộn với một chút giấm cho chua chua ngọt ngọt. Mà cũng chính vì thế mà cá ủ trong cơm được chuyển hóa thành sushi.\n\nNgoài nắm cơm bên ngoài còn có rong biển, tảo biển hoặc rau để bổ sung thêm vị ngọt của rau. Có nhiều loại sushi như california roll, salmon sushi,..', ''),
(2, 'sushi cuo', 'Loại cơm trộn giấm để làm sushi (Sushi rice) được gọi là sumeshi hoặc sushimeshi. Loại giấm để nấu cơm này không phải giấm thông thường mà là giấm có pha muối, đường, rượu ngọt Mirin, vì thế gọi là giấm hỗn hợp awasesu. Giấm này được chuyên dùng để chế biến sushi, nên còn được gọi là sushisu. Cơm sau khi được nấu xong (nấu không chín hoàn toàn như cơm bình thường) sẽ được cho vào một chậu gỗ gọi là tarai và trộn với giấm. Cơm vừa được trộn vừa được nghệ nhân sushi dùng quạt tay để quạt cho hơi nóng thoát ra ngoài, giúp cho giấm giữ được hương vị.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

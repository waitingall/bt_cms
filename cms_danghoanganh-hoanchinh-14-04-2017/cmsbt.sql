-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 06:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `description`, `images`) VALUES
(1, 'Marry', 'wedding', ''),
(2, 'Chào mừng đến với Délicious', '“Trở thành nhà cung cấp dịch vụ cưới hỏi hàng đầu và cung cấp đầy đủ các dịch vụ nhất, với nhiều ý tưởng cưới sáng tạo và sự tiện lợi thiết thực nhất cho cho việc tổ chức cưới hỏi và cũng là mục tiêu chung cho phát triển của công ty Délicious.”', ''),
(3, 'RESTAURANTS', 'Nhà hàng hội nghị tiệc cưới', ''),
(4, 'Pullman Saigon Centre', 'Đặc biệt là hệ thống ánh sáng hiện đại sẽ mang lại màu sắc sang trọng, quý phái cho bộ ảnh cưới lung linh, độc đáo của bạn.', ''),
(5, 'Continental Saigon', 'Pullman Saigon Centre mang đến không gian hiện đại, sang trọng nhưng không kém phần lãng mạn và ấm cúng.', ''),
(6, 'Parkroyal Saigon', 'Đặc biệt là hệ thống ánh sáng hiện đại sẽ mang lại màu sắc sang trọng, quý phái cho bộ ảnh cưới lung linh, độc đáo của bạn.', ''),
(7, 'Diamond Place', 'Pullman Saigon Centre mang đến không gian hiện đại, sang trọng nhưng không kém phần lãng mạn và ấm cúng.', ''),
(8, 'Grand Palace', 'Đặc biệt là hệ thống ánh sáng hiện đại sẽ mang lại màu sắc sang trọng, quý phái cho bộ ảnh cưới lung linh, độc đáo của bạn.', ''),
(9, 'Sofitel Saigon Plaza', 'Pullman Saigon Centre mang đến không gian hiện đại, sang trọng nhưng không kém phần lãng mạn và ấm cúng.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

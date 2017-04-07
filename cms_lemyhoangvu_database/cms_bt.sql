-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 05:13 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_bt`
--

-- --------------------------------------------------------

--
-- Table structure for table `dk`
--

CREATE TABLE `dk` (
  `id_dk` int(11) NOT NULL,
  `nd_dk` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dk`
--

INSERT INTO `dk` (`id_dk`, `nd_dk`, `img`) VALUES
(1, 'Một địa điểm thuận lợi , các trang thiết bị hiện đại cũng nhưng cách phục vụ chuyên nghiệp sẽ mang đến sự thành công cho sự kiện cũng như hội nghị quan trọng của các doanh nghiệp. Đó chính là lý do mà bạn nên chọn Callary, chúng tôi mang đến những dịch vụ tốt nhất, đảm bảo mọi yêu cầu khắc khe nhất để sự kiện của bạn diễn ra thuận lợi và thành công.', 'Untitled.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

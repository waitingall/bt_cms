-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 05, 2017 lúc 02:59 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cms_bt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dk`
--

CREATE TABLE `dk` (
  `id_dk` int(11) NOT NULL,
  `nd_dk` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dk`
--

INSERT INTO `dk` (`id_dk`, `nd_dk`) VALUES
(1, 'Whether you are planning an intimate dinner for friends, a corporate luncheon, \r\nor an extravagant soirée, you will find the perfect setting at Délicious.'),
(1, 'Whether you are planning an intimate dinner for friends, a corporate luncheon, \r\nor an extravagant soirée, you will find the perfect setting at Délicious.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

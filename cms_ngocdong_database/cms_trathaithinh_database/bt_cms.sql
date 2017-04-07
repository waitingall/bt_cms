-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 06:13 PM
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
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `url` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `number`, `url`, `images`) VALUES
(1, 'WEDDING', 'Đây là lựa chọn tốt nhất cho các cặp đôi uyên ương sắp cưới và kỷ niệm ngày cưới.', '+84 909 685 172', 'http://localhost/cms_trathaithinh/public', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `images`) VALUES
(1, 'Lễ Dạm Ngõ', 'Đây là một phần của nghi lễ cưới hỏi truyền thống nhằm chính thức hóa quan hệ hôn nhân của hai gia đình. Lễ dạm ngõ ngày nay không còn theo lối xưa, mà chỉ là buổi gặp gỡ giữa hai gia đình. Nhà trai đến nhà gái đặt vấn đề chính thức cho đôi nam nữ được tự do đi lại, tiếp tục quá trình tìm hiểu nhau một cách kỹ càng hơn trước khi đi đến quyết định hôn nhân. Buổi lễ này, không cần vai trò hẹn trước của người mai mối và cũng không cần lễ vật rườm rà. Sau lễ chạm ngõ, người con gái được xem như đã có nơi có chốn.', 'wedding-1.jpg'),
(2, 'Lễ Hỏi', ' Là một thông báo chính thức về sự kết giao của hai gia đình và hai họ. Ngày nay, tuy nhiều nghi lễ cưới hỏi đã được giảm bớt, nhưng lễ ăn hỏi là một trong những nghi lễ chính vẫn được duy trì. Nó đánh dấu một chuyển đoạn quan trọng trong quan hệ hôn nhân: Cô gái được hỏi đã chính thức trở thành vợ chưa cưới của chàng trai đi hỏi. Lễ vật của lễ hỏi là cau tươi, cốm, chè (trà), rượu, bánh xu xê, phong bì tiền, heo quay, trái cây… để thể hiện lòng biết ơn của nhà trai đối với công ơn dưỡng dục của cha mẹ cô gái.  ', '89.jpg');

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
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

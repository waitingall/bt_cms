-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 05:31 AM
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
(1, 'MAKEUP STUDIO \r\n', 'Rạng rỡ đầy tự tin để cho ngày vui được trọn vẹn.', '+84 905 385 156', '#', '');

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
(1, 'TRANG ĐIỂM', 'Trang điểm là 1 bước vô cùng quan trọng đối với mỗi cô dâu để sở hữu được vẻ đẹp hoàn hảo nhất trong ngày cưới.\r\nTrang điểm cô dâu ngày nay đang đi theo chiều hướng đơn giản, ngọt ngào, tôn vinh nét đẹp tự nhiên.\r\n\r\nChính bởi vì vậy, mỗi cô dâu hãy trang bị cho mình những bí quyết để trang điểm sao cho mình có một vẻ đẹp tinh tế nhất. ', 'td1.jpg'),
(2, 'CÔ DÂU', 'Ngày nay trang điểm không chỉ là làm đẹp mà còn là nghệ thuật, nghề trang điểm không những đem lại vẻ đẹp cho bạn mà còn mang lại sự tự tin và nét quyến rũ cho người khác. ', 'td2.jpg'),
(3, 'Nơi Lưu Lại Khoảng Khắc Của Các Đôi Uyên Ương', 'Mấy năm gần đây, xu hướng chụp ảnh cưới ngày càng nở rộ. Những phim trường có không gian rộng, trang trí cầu kì đẹp mắt được mở ra ngày càng nhiều. Nắm bắt xu hướng ấy, tại Sài phố cũng có rất nhiều phim trường vừa đẹp vừa thuận tiện cho các cặp đôi lựa chọn để tạo ra và lưu giữ những khoảnh khắc hạnh phúc của mình. Cùng foorest"đột nhập" những địa điểm ấy để tìm hiểu rõ hơn nào!', ''),
(4, 'ẢNH CƯỚI', 'Mùa cưới năm 2017 đã đến gần. Trong không khí náo nức của các đôi uyên ương. Những vấn đề lo âu về tài chính, đặt nhà hàng, váy cưới chụp hình, Akstudio thấu hiểu được điều đó & muốn chia sẻ một phần khó khăn cho các đôi uyên ương một album ảnh đẹp nhất, trang phục cưới thời trang nhất của đời người?', 'anh2.png'),
(5, 'NGOẠI CẢNH', 'Chúng tôi đã có hơn 10 năm kinh nghiệm trong lĩnh vực chụp album cưới ngoại cảnh theo phong cách lãng mạn, tự nhiên.', 'anh1.png'),
(6, 'Nhanh Chóng', '+84 934 632 112', ''),
(7, 'IN THIỆP CƯỚI', 'Top các cửa hàng in thiệp nổi bật', ''),
(8, 'Thiệp cưới Gia Hỷ', '878 Nguyễn Kiệm, Phường 3, Gò Vấp, Hồ Chí Minh, Việt Nam; thiepcuoigiahy.com; +84 93 882 06 30', ''),
(9, 'Peonies Wedding', '30bis Hoàng Diệu, phường 10, Quận Phú Nhuận, TP Hồ Chí Minh, 08 6676 6622 - 0946322291', ''),
(10, 'Printopia Wedding', '732 Nguyễn Đình Chiểu, P.1, Quận 3, TP Hồ Chí Minh; (08) 6680 9021 - 0903428874', ''),
(11, 'MEOW Wedding', '1324 Đường 3 Tháng 2, Phường 2, Quận 11, TP Hồ Chí Minh; 0933 969 234', ''),
(12, 'Thiệp cưới đẹp 2', '267 Trương Vĩnh Ký, Tân Thành, Quận Tân Phú, TP Hồ Chí Minh; 0973 452 257', ''),
(13, 'Thiệp cưới Hưng', '286 Lý Thái Tổ, P.1, Quận 3, TP Hồ Chí Minh; (08) 3830 7451 - 0933 537 738', ''),
(14, 'XEM CHI TIẾT', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

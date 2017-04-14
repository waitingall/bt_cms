-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 09:08 AM
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
(1, 'Wedding Flowers\r\n', 'Đây là lựa chọn tốt nhất cho các cặp đôi uyên ương sắp cưới và kỷ niệm ngày cưới.', '+84 909 685 172', 'http://localhost/cms_trathaithinh/public', '');

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
(1, 'HOA', 'Khi muốn bày tỏ tình cảm, chia sẻ, sự quan tâm hay lòng kính trọng, người ta thường hay nhắc đến hoa. Trong mọi hoàn cảnh, hoa chính là món quà ý nghĩa nhất, bởi hoa là hiện thân của cái đẹp, là nơi gửi gắm nhưng lời yêu thương muốn nói, là món quà tuyệt vời nhất dành tặng cho người mình yêu, sẽ giúp bạn hoàn thiện trọn vẹn, những giá trị của cuộc sống.', 'hoa.jpg'),
(2, 'CƯỚI', 'là nơi hội tụ của tất cả các loài hoa, đang thịnh hành nhất hiện nay như: hoa hồng, hoa cẩm chướng, hoa lan, hoa ly, hoa bách hợp…Mỗi loại hoa ở đây, được thiết kế theo phong cách đặc trưng riêng, hết sức độc đáo, giúp bạn có nhiều sự lựa chọn ưng ý nhất, để có một món quà ý nghĩa cho những người thương yêu, trong các ngày sinh nhật, ngày lễ đặc biệt.', 'cuoi.jpg'),
(3, 'MẪU ÁO CƯỚI ĐẸP, VÁY CƯỚI ĐẸP NHẤT - CÁC STUDIO ÁO CƯỚI', 'Hiện nay, do có quá nhiều studio áo cưới uy tín khiến cho nhiều cặp đôi băn khoăn không biết nên lựa chọn nơi nào cho chuyên nghiệp nhất để có đươc bộ album ảnh cưới có một không hai với những trang phục cưới đẹp lộng lẫy. Cách đánh giá một studio áo cưới […]', ''),
(4, 'CÁC NHÀ HÀNG NỖI BẬT', 'Top các nhà hàng nỗi bật', ''),
(5, 'Nhà hàng Eon51', 'Số 02 Hải Triều , Quận 1, TP Hồ Chí Minh', ''),
(6, 'Nhà hàng Lion', '11 - 13 Công trường Lam Sơn, Quận 1, TP Hồ Chí Minh', ''),
(7, 'Nhà hàng Long Hải', '70-72 Lê Thánh Tôn, Quận 1, TP Hồ Chí Minh', ''),
(8, 'MERPERLE CRYSTAL PALACE', '2 Lê Duẩn, Bến Nghé, Quận 1, Hồ Chí Minh', ''),
(9, 'Nhà hàng Phượng Gòn', '6 Mạc Đĩnh Chi, Bến Nghé, Quận 1, Hồ Chí Minh', ''),
(10, 'Nhà Hàng Hữu Nghị', '55 Nguyễn Huệ, Bến Nghé, Quận 1, Hồ Chí Minh', ''),
(11, 'XEM CHI TIẾT', 'Sự Lãng Mạn Lan Tỏa', ''),
(12, 'STUDIO', 'Ảnh cưới hàng đầu', ''),
(13, 'ẢNH CƯỚI', 'Lưu lại khoảng khắc', ''),
(14, 'Năng Lực - Đảm Bảo - Sản Phẩm Tốt - Giá Trị', 'Bạn chuẩn bị lập gia đình? Bạn muốn có một cuốn album ảnh cưới đẹp và độc đáo? Bạn mong muốn khán giả trầm trồ thích thú khi chiêm ngưỡng cuốn album ảnh cưới của mình? Bạn cần một dịch vụ hoàn hảo, xứng đáng để đặt niềm tin tuyệt đối cho ngày quan trọng và ý nghĩa nhất của đời người?', ''),
(15, '+84 909 685 172', 'Hãy trao gửi niềm tin, Chúng tôi có Năng lực giải đáp tất cả những mong muốn của Bạn và đảm bảo đem tới Quý khách những sản phẩm tốt nhất, giá trị trường tồn cùng thời gian!', ''),
(16, 'LIÊN HỆ', 'Uy Tín và Nhanh Chóng', '');

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

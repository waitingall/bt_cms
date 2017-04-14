-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 11:54 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

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
-- Table structure for table `cms_dong_blogs`
--

CREATE TABLE IF NOT EXISTS `cms_dong_blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(128) NOT NULL,
  `blog_contents` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_dong_blogs`
--

INSERT INTO `cms_dong_blogs` (`blog_id`, `blog_title`, `blog_contents`) VALUES
(1, 'TIỆC NGOÀI', 'Bạn muốn tổ chức tiệc ngoài tại địa điểm định trước cho những sự kiện hoành tráng của Công ty hay chỉ là buổi tiệc với không khí ấm cúng cho gia đình? Tất cả từ tiệc cưới, tiệc tất niên, tân niên, sinh nhật đến tiệc động thổ, khai trương… , từ thông thường đến quy mô lớn đều được đáp ứng bởi Dịch vụ tổ chức Tiệc Ngoài chuyên nghiệp của DuyHoa.'),
(2, 'HỘI NGHỊ', 'Các chuyên gia giàu kinh nghiệm của chúng tôi luôn đặt mình vào vị trí của bạn, chia sẻ mối quan tâm và đáp ứng tối ưu các yêu cầu khắt khe nhất. Bên cạnh đó, trung tâm hội nghị với đầy đủ tiện nghi hiện đại và đội ngũ nhân viên chuyên nghiệp sẽ đảm bảo thành công cho tất cả các hội nghị, hay các cuộc họp chiến lược của doanh nghiệp.'),
(3, 'ƯU ĐÃI', 'Tại DuyHoa, chúng tôi luôn có các chương trình ưu đãi dành cho các sự kiện quan trọng từ tiệc cưới cho đến các hội nghị, hội thảo, …Chúng tôi đề xuất những gói sản phẩm và dịch vụ chất lượng, giúp tiết kiệm ngân sách nhưng vẫn đáp ứng mọi tiêu chí của bạn.');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pho_date`
--

CREATE TABLE IF NOT EXISTS `cms_pho_date` (
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
(1, 'Sáng', '2017-04-14 00:00:00', '', '', '', ''),
(2, 'Chiều', '2017-04-14 00:00:00', '', '', '', ''),
(4, 'Tối', '2017-04-14 00:00:00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_thien_blogs`
--

CREATE TABLE IF NOT EXISTS `cms_thien_blogs` (
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
(1, 'Hoa Hồng', '2017-04-13 00:00:00', 'Hồng hay hường là tên gọi chung cho các loài thực vật có hoa dạng cây bụi hoặc cây leo lâu năm thuộc chi Rosa', '', 'images/hoa1.jpg', ''),
(2, 'Hoa Huệ', '2017-04-13 00:00:00', 'Huệ còn gọi là dạ lai hương hoặc vũ lai hương, là một loài hoa đặc biệt, nở về đêm', '', 'images/hoa2.jpg', ''),
(3, 'Hoa Lan', '2017-04-13 00:00:00', 'Họ Lan là một họ thực vật có hoa, thuộc bộ Lan Orchidales, lớp thực vật một lá mầm.', '', 'images/hoa3.jpg', ''),
(4, 'Hoa Cúc', '2017-04-13 00:00:00', 'Họ Cúc, còn gọi là họ Hướng dương, họ Cúc tây, là một họ thực vật có hoa hai lá mầm', '', 'images/hoa4.jpg', ''),
(5, 'Hoa Mào gà', '2017-04-13 00:00:00', 'Cây mào gà hay cây kê quan hoa, cây kê đầu, cây mồng gà, có tên khoa học: Celosia cristata', '', 'images/hoa5.jpg', ''),
(6, 'Hoa Loa Kèn', '2017-04-13 00:00:00', 'Hoa loa kèn hay huệ tây, ở Đà Lạt gọi là hoa Lys, là một loài thực vật có hoa thuộc chi Lilium, họ Loa kèn', '', 'images/hoa.jpg', ''),
(7, '', '0000-00-00 00:00:00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_tuananh_blog`
--

CREATE TABLE IF NOT EXISTS `cms_tuananh_blog` (
  `id` int(11) NOT NULL,
  `images` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_tuananh_blog`
--

INSERT INTO `cms_tuananh_blog` (`id`, `images`) VALUES
(9, 'images/07.jpg'),
(2, 'images/01.jpg'),
(3, 'images/02.jpg'),
(4, 'images/03.jpg'),
(5, 'images/04.jpg'),
(6, 'images/05.jpg'),
(7, 'images/06.jpg'),
(8, 'images/08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `url` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `number`, `url`, `images`) VALUES
(1, 'ĐẶT PHÒNG', 'Đặt phòng tại nhà hàng DuyHoa rất dễ dàng và chỉ mất vài phút.', '+359 562 958', '#', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `images`) VALUES
(1, 'Chú Rể', 'Một chú rể hay chàng rể thường là nhân vật nam chính trong một hôn lễ, đôi khi từ này cũng được chỉ một người đàn ông sẽ sớm hoặc mới đã kết hôn. Một chú rể thường được phụ giúp bằng một hay nhiều phù rể. Nếu kết hôn với một người phụ nữ, người đó thường được gọi là cô dâu.', 'sushi-icon-1.png'),
(2, 'Cô Dâu', 'Cô dâu thường được xem là nhân vật nữ chính trong hôn lễ, là buổi tuyên bố lễ thành hôn giữa cô dâu đó và chú rể. Theo văn hóa phương Tây, cô dâu thường được phụ giúp bằng những thiếu nữ khác, thường được gọi là "cô dâu phụ" hay là "phù dâu".', 'sushi-icon-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`) VALUES
(1, 'Cô dâu chú rể nổi bật 1'),
(2, 'Cô dâu chú rể nổi bật 2'),
(3, 'Cô dâu chú rể nổi bật 3'),
(4, 'Cô dâu chú rể nổi bật 4'),
(5, 'Cô dâu chú rể nổi bật 5'),
(6, 'Cô dâu chú rể nổi bật 6');

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
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

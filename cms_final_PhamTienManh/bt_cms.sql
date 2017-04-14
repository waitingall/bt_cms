-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 14, 2017 lúc 04:17 AM
-- Phiên bản máy phục vụ: 5.7.17
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bt_cms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_hai_blogs`
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
-- Đang đổ dữ liệu cho bảng `cms_hai_blogs`
--

INSERT INTO `cms_hai_blogs` (`id`, `title`, `contents`, `descriptions`, `images`, `url`) VALUES
(1, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nThịt cừu ở đâu ngon nhất:Mỹ, Úc hay New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/'),
(2, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/'),
(3, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/'),
(4, '\r\nCATEGORYRECIPES TIPS & TRICKS\r\nWhich Lamb is the Best: American, Australian or New Zealand?', '', 'If you need to disconnect from the given database due to exceeding the underlying PDO instance\'s  max_connections limit, use the disconnect method:', 'images/Meat-1-400x268.jpg', 'https://hitechfocus.com/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_hung_blogs`
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
-- Đang đổ dữ liệu cho bảng `cms_hung_blogs`
--

INSERT INTO `cms_hung_blogs` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(1, 'Buddha:\r\n                            <br>\r\n                            How to drink tea?', '', 'Trà có những loại như trà trắng, trà xanh, trà vàng, trà ô long, trà đen, và trà pu-erh. “Khi bạn có 1 chương về  trà tráng’ hoặc ‘traf xanh’, bạn phải thực sự mô tả quy trình nó được thực hiện,” Woollard nói.', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_manh_blogs`
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
-- Đang đổ dữ liệu cho bảng `cms_manh_blogs`
--

INSERT INTO `cms_manh_blogs` (`id`, `title`, `times`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(1, 'Cà phê & Trà', '2017-04-05 00:00:00', '', 'Nó là kết hợp tuyệt vời cúa sự pha trộn đa dạn sẽ quyến rũ bạn ngay ki bắt đầu ngày mới', 'images/coffee-thumb-1.jpg', '', ''),
(2, 'Bánh mứt & Đồ ngọt', '2017-04-19 00:00:00', '', 'Nhưng món tráng miệng khổng chỉ đơn giản là được ưa chuộng của chúng tôi; Chúng cũng giúp tìm ra, theo cách riêng của chúng…', 'images/coffee-thumb-3.jpg', '', ''),
(3, 'Thực đơn ăn trưa', '2017-04-03 00:00:00', '', 'Chúng tôi cung cấp bữa trưa và bữa tối Với các thành phần tốt nhất chúng ta có thể tìm thấy để làm cho bữa ăn của chúng ta có hương vị nhất có thể.', 'images/coffee-thumb-4.jpg', '', ''),
(4, 'Địa điểm làm việc', '2017-04-15 00:00:00', '', 'Coffice ở Stockholm là một nơi tuyệt vời để làm việc. Thức ăn tùy chọn bao gồm cả bánh ngọt. Wifi miễn phí.', 'images/coffee-thumb-5.jpg', '', ''),
(5, 'Thân thiện với trẻ em', '2017-04-13 00:00:00', '', 'Có trụ sở tại Barcelona, Pudding Bar được thiết kế dành cho buổi chiều cùng với trẻ em.', 'images/coffee-thumb-6.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_pho_date`
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
-- Đang đổ dữ liệu cho bảng `cms_pho_date`
--

INSERT INTO `cms_pho_date` (`date_id`, `title`, `times`, `contents`, `descriptions`, `images`, `url`) VALUES
(1, 'Giờ mở của', '2017-04-12 00:00:00', 'Ngày trong tuần', 'Thứ 7', '', ''),
(2, 'Didgrections', '2017-04-12 00:00:00', 'London, UK \r\n10, Firs Avenue, Muswell Hill', 'View on map', '', ''),
(4, 'Directions', '2017-04-12 00:00:00', '', '', 'images/Yelp-logo.svg', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_pho_location`
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
-- Đang đổ dữ liệu cho bảng `cms_pho_location`
--

INSERT INTO `cms_pho_location` (`location_id`, `location_title`, `location_times`, `location_contents`, `location_descriptions`, `location_images`, `location_url`) VALUES
(1, 'Địa chỉ', '2017-04-13 00:00:00', 'London, UK \r\n10, Firs Avenue, Muswell Hill', '', '', 'https://facebook.com/'),
(2, 'Địa chỉ', '2017-04-13 00:00:00', 'London, UK \r\n10, Firs Avenue, Đồi Muswell ', '', '', 'https://facebook.com/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_quang_header_bulid`
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
-- Cấu trúc bảng cho bảng `cms_quang_main_bulid`
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
-- Đang đổ dữ liệu cho bảng `cms_quang_main_bulid`
--

INSERT INTO `cms_quang_main_bulid` (`bulid_id`, `bulid_title`, `bulid_times`, `bulid_contents`, `bulid_descriptions`, `bulid_images`, `bulid_url`, `bulid_number`) VALUES
(1, 'Brunch', '2017-04-13 00:00:00', 'Thịt gà với rau củ xào và xà lách xanh\r\n', 'Gà cắt hạt với rau củ tỏi & xà lách xanh $ 22\r\nThịt gà với rau cải xào với rau xanh, mầm và nấm hầm.\r\nBữa ăn sáng Sáng Big Combo Menu $ 20\r\nCà phê và Đau au chocolat (Sôcôla croissant) Thực đơn hỗn hợp $ 11\r\nCà phê nóng trong công ty của bánh sừng bò nấu ăn tự làm đẹp, mỗi hộp chứa một thanh sô cô la đậm chất lượng cao, tạo cho ...', './images/coffee-photo-1.jpg', '', ''),
(8, 'Brunch', '2017-04-13 00:00:00', 'Cashew Chicken With Stir-Fry Vegetables & Green Salad\r\n', 'Cashew Chicken With Stir-Fry Vegetables & Green Salad $22\r\nCashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.\r\nOptic Big Breakfast Combo Menu $20\r\nCoffee and Pain au chocolat (Chocolate croissant) Combo Menu $11\r\nHot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...', './images/coffee-photo-2.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_sang_blogs`
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
-- Đang đổ dữ liệu cho bảng `cms_sang_blogs`
--

INSERT INTO `cms_sang_blogs` (`id`, `title`, `contents`, `descriptions`, `images`, `url`, `number`) VALUES
(1, 'Dụng cụ', '', '\"Đầu bếp chuyên nghiệp dựa vào một bộ dụng cụ và thiết bị. Đầu bếp phải ý thức được công cụ nhà bếp của họ khi lên kế hoạch cho một thực đơn và hiểu rõ về sử dụng và năng lực sản xuất của họ. \"', '', '', ''),
(2, 'Chào mừng', '', '\r\n\"Trước nhất, tôi là đầu bếp, dù là đằng sau bếp lò tại một trong những nhà hàng ở Bắc California của tôi hay trong 15 năm qua trước camera trên chương trình nấu ăn cho Mạng Thực phẩm của tôi. Tạo ra các món ăn mới và sự kết hợp hương vị mang lại cho đầu bếp và khách hàng của chúng tôi niềm vui là công việc của tôi và tôi thích nó. \"', '', '', ''),
(3, 'Food', '', '\"Tạo ra các món ăn mới và sự kết hợp hương vị mang lại cho các đầu bếp và khách hàng của chúng tôi niềm vui là công việc của tôi và tôi thích nó.\"', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_thien_blogs`
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
-- Đang đổ dữ liệu cho bảng `cms_thien_blogs`
--

INSERT INTO `cms_thien_blogs` (`blog_id`, `blog_title`, `blog_times`, `blog_contents`, `blog_descriptions`, `images`, `blog_url`) VALUES
(1, 'Avocado Maki', '2017-04-13 00:00:00', 'Avocado, Nori, Sushi Rice, Sashimi-grade Salmon', 'Bơ, Nori, cơm Sushi, cá hồi Sashimi', 'images/Sushi-thumbs-1.jpg', ''),
(2, 'Cá ngừ', '2017-04-13 00:00:00', 'Nori, Sushi Rice, cá ngừ Sashimi, nước sốt Sriracha, Xoài Xanh, Hạt mè, Cayo cay', 'Nori, Sushi Rice, cá ngừ Sashimi, nước sốt Sriracha, Xoài Xanh, Hạt mè, Cayo cay', 'images/Sushi-thumbs-1.jpg', ''),
(3, 'Cá hồi rồng cuộn', '2017-04-13 00:00:00', 'Nori, Cơm Sushi, Tôm Tempura, Tobiko, Lươn nướng, Bơ, Dưa chuột Nhật Bản, Nước sốt Unagi, Cayo cay', 'Cá ngừ nếp RollNori, Sushi Sushi, Tôm Tempura, Tobiko, Lươn nướng, Bơ, Dưa chuột Nhật Bản, Nước sốt Unagi, Cayo cay', 'images/Sushi-thumbs-3.jpg', ''),
(4, 'Cá hồi hun khói và Caviar Sushi', '2017-04-13 00:00:00', 'Kem pho mát, lá ớt, cá hồi hun khói, Nori, tỏi Blanched, bò Wasabi Tobiko, gạo', 'Kem pho mát, lá ớt, cá hồi hun khói, Nori, tỏi Blanched, bò Wasabi Tobiko, cơm', 'images/Sushi-thumbs-4.jpg', ''),
(5, 'Cháo Futomaki', '2017-04-13 00:00:00', 'Cà chua, ớt chuông, dưa leo, rau diếp, Nori, cơm sushi', 'Cà chua, ớt chuông, dưa leo, rau diếp, Nori, cơm sushi', 'images/Sushi-thumbs-5.jpg', ''),
(6, 'Dưa chuột Maki', '2017-04-13 00:00:00', 'Nori, cơm Sushi, dưa chuột dưa leo, hạt mè', 'Nori, cơm Sushi, dưa chuột dưa leo, hạt mè', 'images/Sushi-thumbs-6.jpg', ''),
(7, '', '0000-00-00 00:00:00', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cms_thong_menu`
--

CREATE TABLE `cms_thong_menu` (
  `menu_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cms_thong_menu`
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
-- Cấu trúc bảng cho bảng `cms_tuananh_gallery`
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
-- Đang đổ dữ liệu cho bảng `cms_tuananh_gallery`
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
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`test_id`, `test_name`) VALUES
(1, 'Nhà Hàng 1'),
(2, 'Nhà Hàng 2'),
(3, 'Nhà hàng 5'),
(4, 'Nhà hàng 6'),
(5, 'Nhà hàng 7'),
(6, 'Nhà hàng 8');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cms_hai_blogs`
--
ALTER TABLE `cms_hai_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cms_hung_blogs`
--
ALTER TABLE `cms_hung_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cms_manh_blogs`
--
ALTER TABLE `cms_manh_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cms_pho_date`
--
ALTER TABLE `cms_pho_date`
  ADD PRIMARY KEY (`date_id`);

--
-- Chỉ mục cho bảng `cms_pho_location`
--
ALTER TABLE `cms_pho_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Chỉ mục cho bảng `cms_quang_header_bulid`
--
ALTER TABLE `cms_quang_header_bulid`
  ADD PRIMARY KEY (`header_id`);

--
-- Chỉ mục cho bảng `cms_quang_main_bulid`
--
ALTER TABLE `cms_quang_main_bulid`
  ADD PRIMARY KEY (`bulid_id`);

--
-- Chỉ mục cho bảng `cms_sang_blogs`
--
ALTER TABLE `cms_sang_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cms_thien_blogs`
--
ALTER TABLE `cms_thien_blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Chỉ mục cho bảng `cms_thong_menu`
--
ALTER TABLE `cms_thong_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `cms_tuananh_gallery`
--
ALTER TABLE `cms_tuananh_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cms_hai_blogs`
--
ALTER TABLE `cms_hai_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `cms_hung_blogs`
--
ALTER TABLE `cms_hung_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `cms_manh_blogs`
--
ALTER TABLE `cms_manh_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `cms_pho_date`
--
ALTER TABLE `cms_pho_date`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `cms_pho_location`
--
ALTER TABLE `cms_pho_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `cms_quang_header_bulid`
--
ALTER TABLE `cms_quang_header_bulid`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `cms_quang_main_bulid`
--
ALTER TABLE `cms_quang_main_bulid`
  MODIFY `bulid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `cms_sang_blogs`
--
ALTER TABLE `cms_sang_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `cms_thien_blogs`
--
ALTER TABLE `cms_thien_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `cms_thong_menu`
--
ALTER TABLE `cms_thong_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `cms_tuananh_gallery`
--
ALTER TABLE `cms_tuananh_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

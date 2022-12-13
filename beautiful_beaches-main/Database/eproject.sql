-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 05:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `beach`
--

CREATE TABLE `beach` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `beach_categories_id` int(11) DEFAULT 0 COMMENT '1: North\r\n2: Central\r\n3: South',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beach`
--

INSERT INTO `beach` (`id`, `name`, `slug`, `thumbnail`, `description`, `video`, `content`, `user_id`, `beach_categories_id`, `created_at`, `updated_at`) VALUES
(1, 'Hạ Long', 'ha-long-beach', 'https://vi.wikipedia.org/wiki/V%E1%BB%8Bnh_H%E1%BA%A1_Long', 'Thành phố du lịch với nững điểm đến vô cùng hấp dẫn cho khách du lịch khi đã đặt chân tới nơi đây.', '0', 'content1', 1, 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53'),
(2, 'Hạ Long', 'ha-long-beach', 'https://vi.wikipedia.org/wiki/V%E1%BB%8Bnh_H%E1%BA%A1_Long', 'Thành phố du lịch với nững điểm đến vô cùng hấp dẫn cho khách du lịch khi đã đặt chân tới nơi đây.', '1', 'content1', 1, 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `beach_categories`
--

CREATE TABLE `beach_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beach_categories`
--

INSERT INTO `beach_categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'North', 1, '2022-06-01 16:01:31', '2022-06-02 21:01:26'),
(2, 'Central', 2, '2022-05-03 21:05:14', '2022-06-01 11:14:01'),
(3, 'South', 1, '2022-06-02 16:01:31', '2022-06-02 21:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `beach_image`
--

CREATE TABLE `beach_image` (
  `id` int(11) NOT NULL,
  `beach_id` int(11) NOT NULL DEFAULT 0,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `thumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `user_id`, `category_id`, `content`, `view_count`, `thumbnail`, `description`, `created_at`, `updated_at`) VALUES
(83, 'Bỏ túi 16 địa điểm du lịch Hạ Long làm say lòng du khách', '16-dia-diem-du-lich-ha-long-noi-tieng', 2, 4, '&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/du-lich-ha-long_1626080677.jpg&#34; style=&#34;height:380px; width:720px&#34; /&#62;&#60;em&#62;Vịnh Hạ Long được UNESCO c&#38;ocirc;ng nhận l&#38;agrave; di sản thi&#38;ecirc;n nhi&#38;ecirc;n văn h&#38;oacute;a thế giới&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Địa điểm du lịch Hạ Long&#60;/strong&#62;&#38;nbsp;n&#38;agrave;o đẹp? Nếu bạn v&#38;agrave; gia đ&#38;igrave;nh đang c&#38;oacute; kế hoạch&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://vinpearl.com/vi/cam-nang-du-lich-quang-ninh-diem-den-di-lai-an-o-vui-choi-chi-tiet&#34; target=&#34;_blank&#34;&#62;du lịch Quảng Ninh&#60;/a&#62;&#60;/strong&#62;&#38;nbsp;v&#38;agrave; đặc biệt muốn tham quan, kh&#38;aacute;m ph&#38;aacute;&#38;nbsp;Hạ Long, b&#38;agrave;i viết dưới đ&#38;acirc;y sẽ l&#38;agrave; những kinh nghiệm du lịch v&#38;ocirc; c&#38;ugrave;ng hữu &#38;iacute;ch cho bạn trong h&#38;agrave;nh tr&#38;igrave;nh sắp tới.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;1. Bảo t&#38;agrave;ng Quảng Ninh&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Bảo t&#38;agrave;ng &#38;ndash; thư viện Quảng Ninh được v&#38;iacute; như vi&#38;ecirc;n ngọc đen qu&#38;yacute; b&#38;aacute;u, s&#38;aacute;ng lấp l&#38;aacute;nh b&#38;ecirc;n vịnh Hạ Long. Với thiết kế ph&#38;aacute; c&#38;aacute;ch, đơn giản m&#38;agrave; sang trọng, t&#38;ograve;a nh&#38;agrave; vu&#38;ocirc;ng vức với to&#38;agrave;n bộ bề mặt b&#38;ecirc;n ngo&#38;agrave;i m&#38;agrave;u đen đ&#38;atilde; thu h&#38;uacute;t rất đ&#38;ocirc;ng du kh&#38;aacute;ch&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://vinpearl.com/vi/du-lich-ha-long-kinh-nghiem-tron-bo&#34; target=&#34;_blank&#34;&#62;du lịch Hạ Long&#60;/a&#62;&#60;/strong&#62;&#38;nbsp;tới tham quan, chụp ảnh.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;Bảo tàng Quảng Ninh (Nguồn ảnh: Sưu tầm)&#34; src=&#34;https://statics.vinpearl.com/dia-diem-du-lich-ha-long-bao-tang-quang-ninh-2_1627275176.jpg&#34; style=&#34;height:495px; width:800px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Bảo t&#38;agrave;ng Quảng Ninh c&#38;oacute; thiết kế th&#38;agrave;nh 3 tầng, mỗi tầng thể hiện một chủ đề kh&#38;aacute;c nhau gắn liền với đặc trưng của mảnh đất Quảng Ninh theo d&#38;ograve;ng lịch sử. Tầng 1 trưng b&#38;agrave;y theo chủ đề Biển cả v&#38;agrave; tự nhi&#38;ecirc;n, &#38;nbsp;tầng 2 l&#38;agrave; nơi lưu giữ những gi&#38;aacute; trị lịch sử v&#38;agrave; tầng 3 l&#38;agrave; khu t&#38;aacute;i hiện lịch sử h&#38;igrave;nh th&#38;agrave;nh mỏ than. Đ&#38;acirc;y chắc chắn l&#38;agrave; điểm du lịch Hạ Long m&#38;agrave; bạn kh&#38;ocirc;ng n&#38;ecirc;n bỏ qua nếu muốn t&#38;igrave;m hiểu về cuộc sống v&#38;agrave; những n&#38;eacute;t văn h&#38;oacute;a đặc trưng của con người nơi đ&#38;acirc;y.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Địa chỉ:&#38;nbsp;&#60;/strong&#62;Trần Quốc Nghiễn, H&#38;ograve;n&#38;nbsp;Gai, Th&#38;agrave;nh phố Hạ Long, Quảng Ninh&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Gi&#38;aacute; v&#38;eacute; tham khảo:&#38;nbsp;&#60;/strong&#62;30.000 VNĐ/người lớn; 15.000 VNĐ/học sinh, sinh vi&#38;ecirc;n; 10.000 VNĐ/trẻ em&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Giờ mở cửa:&#38;nbsp;&#60;/strong&#62;8h &#38;ndash; 11h30, 13h30 &#38;ndash; 17h00, mở cửa tất cả c&#38;aacute;c ng&#38;agrave;y trong tuần trừ thứ 2&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;2. Vịnh Hạ Long&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;&#60;img alt=&#34;Vịnh Hạ Long (Nguồn ảnh: Sưu tầm)&#34; src=&#34;https://statics.vinpearl.com/dia-diem-du-lich-ha-long-6.jpg&#34; style=&#34;height:419px; width:700px&#34; /&#62;&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Với vẻ đẹp non nước h&#38;ugrave;ng vĩ tựa tranh vẽ,&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://vinpearl.com/vi/review-du-lich-vinh-ha-long-tu-a-z-di-dau-o-dau-an-gi-ngon&#34; target=&#34;_blank&#34;&#62;Vịnh Hạ Long&#60;/a&#62;&#60;/strong&#62;&#38;nbsp;được UNESCO c&#38;ocirc;ng nhận l&#38;agrave; kỳ quan thi&#38;ecirc;n nhi&#38;ecirc;n thế giới. Sự hiện diện của h&#38;agrave;ng ngh&#38;igrave;n h&#38;ograve;n đảo v&#38;agrave; hang động hoang sơ, đẹp kỳ b&#38;iacute; c&#38;ugrave;ng hệ sinh th&#38;aacute;i phong ph&#38;uacute;, Vịnh Hạ Long đ&#38;atilde; trở th&#38;agrave;nh điểm đến cực kỳ độc đ&#38;aacute;o m&#38;agrave; bất kỳ du kh&#38;aacute;ch n&#38;agrave;o cũng muốn gh&#38;eacute; thăm. Một h&#38;ograve;n đảo, hang động nổi tiếng tại Vịnh Hạ Long bạn c&#38;oacute; thể tham khảo như: h&#38;ograve;n G&#38;agrave; Chọi, đảo Ngọc Vừng, h&#38;ograve;n Con C&#38;oacute;c, đảo Ti Tốp, hang Sửng Sốt...&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ngo&#38;agrave;i ra, tại địa điểm du lịch Hạ Long nổi tiếng n&#38;agrave;y, du kh&#38;aacute;ch c&#38;oacute; thể trải nghiệm nhiều hoạt động hấp dẫn như như du thuyền tr&#38;ecirc;n vịnh Hạ Long, ch&#38;egrave;o thuyền kayak&#38;hellip;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Gi&#38;aacute; v&#38;eacute;:&#38;nbsp;&#60;/strong&#62;Từ 290.000 VNĐ/người/tuyến&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Giờ mở cửa:&#38;nbsp;&#60;/strong&#62;7h30 &#38;ndash; 16h30&#38;nbsp;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;C&#38;aacute;c điểm thăm quan:&#60;/strong&#62;&#38;nbsp;hang Sửng Sốt, hang Đầu Gỗ, hang Luồn, hang Trinh Nữ; đảo Ti Tốp; c&#38;aacute;c l&#38;agrave;ng như l&#38;agrave;ng ch&#38;agrave;i Cửa Vạn, l&#38;agrave;ng Ngọc Trai; n&#38;uacute;i B&#38;agrave;i Thơ&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;C&#38;aacute;c hoạt động kh&#38;aacute;c:&#38;nbsp;&#60;/strong&#62;ch&#38;egrave;o thuyền Kayak, tắm biển, trekking, leo n&#38;uacute;i...&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;&#60;strong&#62;3. Du lịch&#38;nbsp;đảo Tuần Ch&#38;acirc;u, Hạ Long&#60;/strong&#62;&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Nằm tại cửa ng&#38;otilde; của Vịnh Hạ Long,&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://vinpearl.com/vi/dao-tuan-chau-quang-ninh-thien-duong-du-lich-cuc-hap-dan&#34; target=&#34;_blank&#34;&#62;đảo Tuần Ch&#38;acirc;u&#60;/a&#62;&#60;/strong&#62;&#38;nbsp;l&#38;agrave; địa điểm du lịch Hạ Long nổi tiếng với hệ thống cảng du thuyền nh&#38;acirc;n tạo lớn nhất Việt Nam, b&#38;atilde;i biển đẹp v&#38;agrave; sở hữu khu vui chơi giải tr&#38;iacute; độc đ&#38;aacute;o&#38;hellip;&#38;nbsp;Đảo Tuần Ch&#38;acirc;u c&#38;ograve;n được du kh&#38;aacute;ch đặt cho nhiều c&#38;aacute;i t&#38;ecirc;n mỹ miều như đảo hoa hậu, đảo hoa, đảo ngọc ch&#38;acirc;u, đảo dừa&#38;hellip; &#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/dia-diem-du-lich-ha-long-dao-tuan-chau-3_1627290464.jpg&#34; style=&#34;height:319px; width:700px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h3&#62;&#60;strong&#62;3.1. B&#38;atilde;i tắm biển Tuần Ch&#38;acirc;u&#60;/strong&#62;&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Địa chỉ:&#38;nbsp;&#60;/strong&#62;Ngọc Ch&#38;acirc;u, Tuần Ch&#38;acirc;u, Hạ Long, Quảng Ninh&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Giờ mở cửa:&#60;/strong&#62;&#38;nbsp;24/24h&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Gi&#38;aacute; v&#38;eacute;:&#60;/strong&#62;&#38;nbsp;V&#38;agrave;o cửa tự do&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đ&#38;acirc;y l&#38;agrave; b&#38;atilde;i tắm duy nhất tại Hạ Long c&#38;oacute; điểm tắm tr&#38;aacute;ng tự động. B&#38;atilde;i biển đẹp, s&#38;oacute;ng nhẹ ph&#38;ugrave; hợp cho những gia đ&#38;igrave;nh c&#38;oacute; người gi&#38;agrave; v&#38;agrave; trẻ nhỏ.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/dia-diem-du-lich-ha-long-dao-tuan-chau-5_1627290703.jpg&#34; style=&#34;height:335px; width:800px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h3&#62;3.2. Khu vui chơi quốc tế Tuần Ch&#38;acirc;u&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Địa chỉ:&#38;nbsp;&#60;/strong&#62;Ngọc Ch&#38;acirc;u, Tuần Ch&#38;acirc;u, Hạ Long, Quảng Ninh&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Giờ mở cửa:&#60;/strong&#62;&#38;nbsp;8h &#38;ndash; 22h&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;&#60;strong&#62;Gi&#38;aacute; v&#38;eacute;:&#38;nbsp;&#60;/strong&#62;250.000 VNĐ/người&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/dia-diem-du-lich-ha-long-12.jpg&#34; style=&#34;height:393px; width:700px&#34; /&#62;&#60;/p&#62;&#13;&#10;', 128, '/publics/assets/photos/blogs/travel/travel-0.jpg', 'Các địa điểm du lịch Hạ Long luôn thu hút du khách bởi nơi đây sở hữu di sản thiên nhiên thế giới từng được UNESCO nhiều lần công nhận.', '2022-08-02 04:49:08', '2022-08-08 01:02:14'),
(92, 'Món ngon phải thử khi đến Sầm Sơn', 'am-thuc-sam-son', 2, 1, '<h3><strong>1. GỎI C&Aacute;</strong></h3>\r\n\r\n<p>Gỏi c&aacute; lu&ocirc;n l&agrave; m&oacute;n ăn phổ biến ở c&aacute;c v&ugrave;ng biển đảo, ở&nbsp;Sầm Sơn gỏi c&aacute; cũng l&agrave; một&nbsp;m&oacute;n ăn đặc sản của Sầm Sơn&nbsp;nức tiếng. Gỏi c&aacute; ở đ&acirc;y lu&ocirc;n được chế biến từ những ch&uacute; c&aacute; sống tươi ngon nhất, thịt c&aacute; được lọc xương, th&aacute;i l&aacute;t mỏng, sau đ&oacute; cho th&ecirc;m nếm gia vị. Mỗi miếng c&aacute; sẽ được gỏi&nbsp;ăn k&egrave;m rau thơm, l&aacute; linh đăng, sung muối, b&aacute;nh tr&aacute;ng, đặc biệt chấm c&ugrave;ng nước sốt sền sệt sẽ cho miếng ăn của bạn th&ecirc;m tr&ograve;n vị hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://media.dulich24.com.vn/diemden/sam-son-3378/9299c4d4-0880-4cdd-ba9e-85d14b38a66c-21.gif\" style=\"height:675px; width:900px\" /></p>\r\n\r\n<h3><strong>2. C&Aacute;C M&Oacute;N ĂN ĐƯỢC L&Agrave;M TỪ RẠM</strong></h3>\r\n\r\n<p>Rạm l&agrave; hải sản phổ biến của biển Sầm Sơn v&agrave; c&aacute;c m&oacute;n ăn được chế biến từ rạm cũng l&agrave; một trong&nbsp;những m&oacute;n ăn ngon của Sầm Sơn. Rạm c&oacute; h&igrave;nh d&aacute;ng kh&aacute; giống với cua nhưng con nhỏ hơn, m&agrave;u v&agrave;ng hơn v&agrave; c&oacute; mai mỏng hơn. C&oacute; thể chế biến rạm theo nhiều c&aacute;ch: lấy gạch rạm nấu canh ăn rất ngọt v&agrave; m&aacute;t, gạch rạm cũng được d&ugrave;ng để chế biến m&oacute;n b&uacute;n rạm rất ngon, ngo&agrave;i ra, rạm c&oacute; thể rang với mẻ, rạm rang muối th&ecirc;m ch&uacute;t l&aacute; chanh cho dậy m&ugrave;i hay rạm rang me chua chua ngọt ngọt cũng rất đậm đ&agrave;, bạn n&ecirc;n thử.</p>\r\n\r\n<p><img alt=\"\" src=\"http://media.dulich24.com.vn/bai-viet/mon-ngon-phai-thu-khi-den-sam-son-33093712/a75838fc-38df-4ec6-bad4-ab65621664ce.jpg\" style=\"height:600px; width:900px\" /></p>\r\n\r\n<h3><strong>3. S&Ograve; HUYẾT</strong></h3>\r\n\r\n<p>Nhắc đến m&oacute;n hải sản nhiều bổ dưỡng th&igrave; kh&ocirc;ng thể kh&ocirc;ng nhắc tới s&ograve; huyết, bởi vừa ngon lại v&ocirc; c&ugrave;ng bổ dưỡng n&ecirc;n những m&oacute;n được chế biến từ s&ograve; huyết rất được c&aacute;c thực kh&aacute;ch chọn lựa. Chỉ với nguy&ecirc;n liệu s&ograve; huyết, người d&acirc;n Sầm Sơn cũng c&oacute; thể chế biến cho bạn đa dạng c&aacute;c m&oacute;n ngon, như: b&ograve; x&agrave;o s&ograve; huyết, s&ograve; huyết hấp, s&ograve; huyết sốt me, s&ograve; huyết nướng&hellip; mỗi m&oacute;n ăn lại c&oacute; những hương vị rất ri&ecirc;ng, vừa thơm, vừa b&ugrave;i, ng&ograve;n ngọt, vị tươi mặn của biển khiến bạn kh&ocirc;ng thể bỏ qua m&oacute;n ăn n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://media.dulich24.com.vn/bai-viet/mon-ngon-phai-thu-khi-den-sam-son-33093712/b8cff15c-8654-49ae-a37b-03616211cacb.jpg\" style=\"height:600px; width:900px\" /><strong>4. MỰC NHỒI THỊT</strong></p>\r\n\r\n<p>Một m&oacute;n ăn đặc trưng nữa của&nbsp;du lịch Sầm Sơn&nbsp;bạn kh&ocirc;ng thể bỏ qua đ&oacute; l&agrave; m&oacute;n mực nhồi thịt nức tiếng. Nếu được hỏi &ldquo;Đặc sản Sầm Sơn c&oacute; g&igrave;?&rdquo; hay &ldquo;Ăn g&igrave; ngon khi du lịch Sầm Sơn?&rdquo; t&ocirc;i sẽ kh&ocirc;ng do dự m&agrave; kể cho bạn nghe Sầm Sơn c&oacute; mực nhồi thịt v&ocirc; c&ugrave;ng hấp dẫn v&agrave; độc đ&aacute;o. Thưởng thức hết hương vị của m&oacute;n ăn n&agrave;y phải l&agrave; khi miếng mực c&ograve;n n&oacute;ng sốt, vỏ mực tươi d&agrave;y khi nướng săn chắc lại, ăn dai dai lẫn m&ugrave;i thơm, vị ngọt của thịt, chấm k&egrave;m nước chấm cay cay sẽ khiến bạn ăn rồi lại muốn ăn th&ecirc;m nữa.</p>\r\n\r\n<p><img alt=\"\" src=\"http://media.dulich24.com.vn/bai-viet/mon-ngon-phai-thu-khi-den-sam-son-33093712/e4993fbf-d5ef-489d-b75f-6c547424bcd1.jpg\" style=\"height:607px; width:900px\" /></p>\r\n\r\n<h3><strong>5. NEM CHUA THANH H&Oacute;A</strong></h3>\r\n\r\n<p>C&oacute; ai l&agrave; kh&ocirc;ng biết đến m&oacute;n nem chua Thanh H&oacute;a trứ danh n&agrave;y? Bạn c&oacute; thể thưởng thức ở nhiều nơi, nhưng nếu đ&atilde; c&oacute; dịp du lịch Sầm Sơn th&igrave; đừng bỏ lỡ thưởng thức nem chua Thanh H&oacute;a chuẩn vị.&nbsp;Vị chua chua, cay cay, gi&ograve;n ngon của miếng nem chua sẽ th&ecirc;m đậm đ&agrave; hơn khi bạn chấm c&ugrave;ng tương ớt đặc biệt của người Thanh H&oacute;a.</p>\r\n\r\n<p><img alt=\"\" src=\"http://media.dulich24.com.vn/bai-viet/mon-ngon-phai-thu-khi-den-sam-son-33093712/92a596c2-d69d-4d03-894c-75cd6452b0a8.jpg\" style=\"height:654px; width:900px\" /></p>\r\n\r\n<h3>6.B&Aacute;NH RĂNG BỪA</h3>\r\n\r\n<p>Người Thanh H&oacute;a đặt t&ecirc;n cho chiếc b&aacute;nh tẻ qu&ecirc; hương đ&acirc;y l&agrave; một đặc trưng rất ri&ecirc;ng của v&ugrave;ng&nbsp;biển Sầm Sơn, nhất l&agrave; khi ta ăn vẫn c&ograve;n n&oacute;ng sốt, với chiếc vỏ mực tươi d&agrave;y khi nướng săn chắc, dai dai lẫn m&ugrave;i thơm của vị thịt nhồi toả ra khiến ta c&oacute; một cảm gi&aacute;c ngon tuyệt rất đặc biệt, đ&oacute; l&agrave; b&aacute;nh răng bừa.</p>\r\n\r\n<p><img alt=\"\" src=\"http://media.dulich24.com.vn/bai-viet/mon-ngon-phai-thu-khi-den-sam-son-33093712/30139f45-b2e4-4051-862d-3e43adf77f4f.jpg\" style=\"height:668px; width:900px\" /></p>\r\n', 128, '/publics/assets/photos/blogs/food/blog_food_2.jpg', 'Sầm Sơn là một trong những địa điểm du lịch lý tưởng nhất ở Việt Nam không chỉ bởi cảnh quan tuyệt đẹp mà còn bởi những món ăn ngon mang đậm nét đẹp vùng miền Xứ Thanh.', '2022-08-03 12:04:31', '2022-08-04 15:30:43'),
(93, '9 món ăn hấp dẫn - tinh túy ẩm thực Hội An', '9-mon-ngon-hap-dan-o-hoi-an', 2, 1, '&#60;h2&#62;1. Đặc trưng ẩm thực Hội An&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ẩm thực Hội An v&#38;ocirc; c&#38;ugrave;ng phong ph&#38;uacute; v&#38;agrave; đa dạng, nhưng ch&#38;uacute;ng đều mang những đặc trưng ri&#38;ecirc;ng của v&#38;ugrave;ng biển miền Trung. Trong c&#38;aacute;c m&#38;oacute;n ăn đặc sản Hội An được sử dụng nguy&#38;ecirc;n liệu đa dạng từ n&#38;uacute;i rừng - đồng bằng v&#38;agrave; biển.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ngo&#38;agrave;i những m&#38;oacute;n ăn truyền thống, ch&#38;uacute;ng ta vẫn lu&#38;ocirc;n bắt gặp m&#38;oacute;n ăn mang phong c&#38;aacute;ch ẩm thực người Hoa v&#38;agrave; phương T&#38;acirc;y khi tới Hội An.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Nếu như bạn l&#38;agrave; người th&#38;iacute;ch du lịch v&#38;agrave; thường xuy&#38;ecirc;n t&#38;igrave;m hiểu về Hội An th&#38;igrave; đều nhận thấy c&#38;aacute;ch b&#38;agrave;i b&#38;agrave;i tr&#38;iacute; đồ ăn ở đ&#38;acirc;y rất đơn giản, vẫn mang đậm chất truyền thống: d&#38;acirc;n d&#38;atilde;, mộc mạc. Những người chủ qu&#38;aacute;n ăn hay phục vụ đồ ăn ở đ&#38;acirc;y cũng v&#38;ocirc; c&#38;ugrave;ng giản dị, th&#38;acirc;n thiện. V&#38;igrave; vậy, khi thưởng thức c&#38;aacute;c&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://vinpearl.com/vi/20-mon-dac-san-hoi-an-ngon-nuc-tieng-nhat-dinh-phai-thu-1-lan&#34;&#62;m&#38;oacute;n ngon ở Hội An&#60;/a&#62;&#60;/strong&#62;, bạn sẽ lu&#38;ocirc;n cảm thấy thật thoải m&#38;aacute;i.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/am-thuc-hoi-an-wecheckin_1624254909.jpg&#34; style=&#34;height:562px; width:900px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Một trong những m&#38;oacute;n ăn đặc trưng ở Hội An đ&#38;oacute; ch&#38;iacute;nh l&#38;agrave; M&#38;igrave; Quảng. Đến Hội An, bạn c&#38;oacute; thể bắt gặp m&#38;igrave; Quảng được b&#38;aacute;n ở khắp nơi, kh&#38;ocirc;ng kh&#38;oacute; để bạn c&#38;oacute; được b&#38;aacute;t m&#38;igrave; &#38;ldquo;chống đ&#38;oacute;i&#38;rdquo; si&#38;ecirc;u hấp dẫn sau khi dạo chơi một v&#38;ograve;ng Hội An.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;2. Bỏ t&#38;uacute;i 9 m&#38;oacute;n ăn ngon - tinh t&#38;uacute;y ẩm thực Hội An&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ăn g&#38;igrave; ở Hội An? C&#38;acirc;u hỏi mu&#38;ocirc;n thuở của du kh&#38;aacute;ch mỗi dịp tới du lịch Hội An. Mặc d&#38;ugrave; ẩm thực Hội An rất phong ph&#38;uacute;, rất nhiều m&#38;oacute;n đặc sản nổi tiếng nhưng c&#38;oacute; lẽ 9 m&#38;oacute;n ngon dưới đ&#38;acirc;y l&#38;agrave; c&#38;aacute;c m&#38;oacute;n m&#38;agrave; bạn kh&#38;ocirc;ng n&#38;ecirc;n bỏ qua:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h3&#62;2.1. Cao lầu Hội An&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/Hinh-anh-9-mon-an-hap-dan-tinh-tuy-am-thuc-hoi-an2_1623858050.jpg&#34; style=&#34;height:675px; width:900px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Nhắc đến Hội An th&#38;igrave; kh&#38;ocirc;ng thể kh&#38;ocirc;ng nhắc đến đặc sản Cao Lầu. Một m&#38;oacute;n ăn gắn liền với Hội An mang c&#38;aacute;i t&#38;ecirc;n rất lạ với hương vị độc đ&#38;aacute;o. Cao Lầu thực chất l&#38;agrave; m&#38;oacute;n m&#38;igrave; được trộn từ bột với với tro củi tr&#38;agrave;m n&#38;ecirc;n sợi m&#38;igrave; c&#38;oacute; m&#38;agrave;u v&#38;agrave;ng s&#38;aacute;ng, sợi to v&#38;agrave; mềm. Những sợi m&#38;igrave; mềm kết hợp c&#38;ugrave;ng t&#38;ocirc;m, thịt heo, x&#38;aacute; x&#38;iacute;u, rau sống&#38;hellip;.đ&#38;atilde; mang đến một m&#38;oacute;n Cao Lầu đặc trưng chỉ c&#38;oacute; ở Hội An.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Nếu v&#38;agrave;o c&#38;aacute;c địa điểm ăn uống Hội An, bạn sẽ kh&#38;ocirc;ng kh&#38;oacute; để thưởng thức m&#38;oacute;n ăn đặc sản n&#38;agrave;y. Tuy nhi&#38;ecirc;n c&#38;oacute; một v&#38;agrave;i gợi &#38;yacute; về qu&#38;aacute;n ăn ngon nhất d&#38;agrave;nh cho bạn:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Qu&#38;aacute;n cao lầu Thanh ở số 26 Th&#38;aacute;i Phi&#38;ecirc;n, Phường Minh An, Hội An, Quảng Nam với gi&#38;aacute;: 15.000 &#38;ndash; 33.000 đồng.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Qu&#38;aacute;n cao lầu Li&#38;ecirc;n ở số 21B Th&#38;aacute;i Phi&#38;ecirc;n, Phường Minh An, Hội An, Quảng Nam với gi&#38;aacute;: 20.000 &#38;ndash; 30.000 đồng.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Qu&#38;aacute;n cao lầu Hội An B&#38;agrave; B&#38;eacute; ở số 19 Trần Ph&#38;uacute;, Cẩm Ch&#38;acirc;u, Hội An, Quảng Nam với gi&#38;aacute;: 20.000 &#38;ndash; 44.000 đồng&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;h3&#62;2.2. B&#38;aacute;nh ướt thịt nướng&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;p&#62;B&#38;aacute;nh ướt thịt nướng cũng l&#38;agrave; một trong c&#38;aacute;c m&#38;oacute;n ăn ở Hội An được y&#38;ecirc;u th&#38;iacute;ch. B&#38;aacute;nh ướt mềm ăn c&#38;ugrave;ng thịt nướng v&#38;ocirc; c&#38;ugrave;ng ngon v&#38;agrave; dễ ăn, th&#38;iacute;ch hợp cho c&#38;aacute;c bữa s&#38;aacute;ng hoặc ăn vặt. Nếu bạn đi&#38;nbsp;&#60;strong&#62;&#60;a href=&#34;https://vinpearl.com/vi/21-khu-du-lich-hoi-an-va-dia-diem-check-in-hot-nhat-2021&#34;&#62;du lịch Hội An&#60;/a&#62;&#60;/strong&#62;&#38;nbsp;l&#38;acirc;u ng&#38;agrave;y m&#38;agrave; muốn đổi vị th&#38;igrave; đ&#38;acirc;y l&#38;agrave; lựa chọn ph&#38;ugrave; hợp.&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/banh%20uot%20thit%20nuong_1624255077.jpg&#34; style=&#34;height:540px; width:900px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Để thưởng thức m&#38;oacute;n ăn n&#38;agrave;y ngon nhất, c&#38;aacute;c bạn c&#38;oacute; thể tham khảo c&#38;aacute;c qu&#38;aacute;n sau:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;Qu&#38;aacute;n thịt xi&#38;ecirc;n nướng chị Vi&#38;ecirc;n ở vỉa h&#38;egrave; c&#38;ocirc;ng vi&#38;ecirc;n Kazik, 138 Trần Ph&#38;uacute;, Hội An c&#38;oacute; gi&#38;aacute; từ 5.000 - 50.000 đồng; qu&#38;aacute;n thường mở từ 15:00 - 21:00 giờ.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Qu&#38;aacute;n gia truyền B&#38;agrave; Hường ở 31 Tiểu La; gi&#38;aacute; từ 6.000 - 30.000 đồng v&#38;agrave; mở cửa từ 17:00 - 21:00 giờ.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;Qu&#38;aacute;n Giếng B&#38;aacute; Lễ ở 51 Trần Hưng Đạo, Minh An, Hội An; gi&#38;aacute; từ 15.000 - 45.000 đồng v&#38;agrave; mở cửa từ 10:00 - 22:00 giờ.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;h3&#62;2.3. M&#38;igrave; Quảng Hội An&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đứng đầu top ẩm thực Hội An phải kể đến M&#38;igrave; Quảng. Đ&#38;acirc;y l&#38;agrave; một trong những m&#38;oacute;n ăn được thực kh&#38;aacute;ch y&#38;ecirc;u th&#38;iacute;ch. B&#38;aacute;t m&#38;igrave; Quảng to đầy với những sợi m&#38;igrave; to dai, kết hợp c&#38;ugrave;ng thịt nướng, x&#38;aacute; x&#38;iacute;u, rau sống...giải ngay cơn đ&#38;oacute;i sau cả buổi đi chơi.&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/mon-ngon-hoi-an-mi-quang-dalaco_1624256160.jpg&#34; style=&#34;height:505px; width:900px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;So với c&#38;aacute;c địa danh kh&#38;aacute;c, m&#38;igrave; Quảng Hội An c&#38;oacute; sợi to hơn v&#38;agrave; topping cũng đa dạng hơn. V&#38;igrave; thế, ai ai đến Hội An cũng nhất định phải thưởng thức một b&#38;aacute;t m&#38;igrave; Quảng trước khi ra về.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;strong&#62;Một số qu&#38;aacute;n m&#38;igrave; Quảng Hội An được review ngon nhất:&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;M&#38;igrave; quảng &#38;Ocirc;ng Hai Hội An ở số 6A Trương Minh Lượng,&#38;nbsp; Tp. Hội An, Quảng Nam với gi&#38;aacute; từ 15.000 - 40.000 đồng v&#38;agrave; mở cửa từ 06:00 - 22:00 giờ.&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;M&#38;igrave; Quảng D&#38;igrave; H&#38;aacute;t ở số 4 Phan Ch&#38;acirc;u Trinh,&#38;nbsp; Tp. Hội An, Quảng Nam mở cửa từ 17:00 - 22:00 giờ v&#38;agrave; gi&#38;aacute; chỉ từ 15.000 - 25.000 đồng&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;M&#38;igrave; Quảng B&#38;agrave; Minh Hội An ở đường Cẩm H&#38;agrave; c&#38;oacute; gi&#38;aacute; 25.000 - 50.000 đồng v&#38;agrave; mở cửa từ 07:00 - 21:00 giờ.&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;h3&#62;2.4. B&#38;uacute;n gi&#38;ograve;&#60;/h3&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Trong danh s&#38;aacute;ch ẩm thực Đ&#38;agrave; Nẵng Hội An c&#38;oacute; m&#38;oacute;n b&#38;uacute;n gi&#38;ograve; được nhiều du kh&#38;aacute;ch review. Ai cũng n&#38;oacute;i, b&#38;uacute;n gi&#38;ograve; Hội An kh&#38;aacute;c lắm, miến gi&#38;ograve; rất to v&#38;agrave; chắc c&#38;ugrave;ng với nước d&#38;ugrave;ng vừa miệng, ăn rất đ&#38;atilde;. Bạn c&#38;oacute; thể lựa chọn m&#38;oacute;n n&#38;agrave;y để ăn tối hội an trước khi rời đi.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://statics.vinpearl.com/Hinh-anh-9-mon-an-hap-dan-tinh-tuy-am-thuc-hoi-an5_1623858154.jpg&#34; style=&#34;height:599px; width:900px&#34; /&#62;&#60;/p&#62;&#13;&#10;', 128, '/publics/assets/photos/blogs/food/blog_food_3.jpg', 'Bạn đang có kế hoạch đi du lịch Hội An? Bạn mong muốn khám phá nét đẹp văn hóa Ẩm thực Hội An? Vậy hãy cùng nhau tìm hiểu 9 món ăn hấp dẫn - tinh túy nhất của ẩm thực Hội An nhé.', '2022-08-03 12:16:56', '2022-08-08 00:33:49'),
(94, '7 đặc sản nổi tiếng Cửa Lò:  Không nếm thử là tiếc hùi hụi', '7-dac-san-cua-lo', 2, 1, '&#60;p&#62;&#60;em&#62;Cửa L&#38;ograve; &#38;ndash;&#38;nbsp;&#60;a href=&#34;https://www.vntrip.vn/cam-nang/du-lich-nghe-an&#34;&#62;Nghệ An&#60;/a&#62;&#38;nbsp;thu h&#38;uacute;t đ&#38;ocirc;ng đảo lượng kh&#38;aacute;ch du lịch mỗi năm kh&#38;ocirc;ng chỉ bởi những b&#38;atilde;i biển đẹp nao l&#38;ograve;ng người m&#38;agrave; c&#38;ograve;n bởi phong vị ẩm thực v&#38;ocirc; c&#38;ugrave;ng cuốn h&#38;uacute;t. Dưới đ&#38;acirc;y l&#38;agrave; 7 đặc sản Cửa L&#38;ograve; ngon nhất m&#38;agrave; bạn n&#38;ecirc;n nếm thử khi c&#38;oacute; dịp.&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;1.Ghẹ rang me&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Cửa L&#38;ograve; nổi tiếng l&#38;agrave; v&#38;ugrave;ng biển c&#38;oacute; hải sản tươi ngon, đặc biệt l&#38;agrave; ghẹ nơi đ&#38;acirc;y rất to v&#38;agrave; chắc thịt, khi chế biến m&#38;oacute;n ăn th&#38;igrave; hấp dẫn v&#38;ocirc; c&#38;ugrave;ng. Ghẹ c&#38;oacute; quanh năm n&#38;ecirc;n đi du lịch Cửa L&#38;ograve; v&#38;agrave;o bất kỳ thời gian n&#38;agrave;o bạn cũng c&#38;oacute; thể tận hưởng c&#38;aacute;c mon ăn ngon như ghẹ nướng, ghẹ hấp me, ghẹ rang muối&#38;hellip; Trong đ&#38;oacute;, m&#38;oacute;n ghẹ rang me được y&#38;ecirc;u th&#38;iacute;ch hơn cả.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/ghe-rang-me-dac-san-cua-lo-vo-cung-hap-dan.jpg&#34; style=&#34;height:480px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;&#38;nbsp; Ghẹ rang me &#38;ndash; Đặc sản Cửa L&#38;ograve; v&#38;ocirc; c&#38;ugrave;ng hấp dẫn (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Thực kh&#38;aacute;ch đ&#38;atilde; từng thưởng thức m&#38;oacute;n ăn độc đ&#38;aacute;o n&#38;agrave;y sẽ kh&#38;ocirc;ng khỏi vương vấn hương vị chua dịu h&#38;ograve;a quyện c&#38;ugrave;ng thịt ghẹ đậm đ&#38;agrave; ngon hết sẩy. Kh&#38;ocirc;ng qu&#38;aacute; để n&#38;oacute;i rằng đ&#38;acirc;y l&#38;agrave; một trong những m&#38;oacute;n ăn c&#38;oacute; sức gợi nhớ đến Cửa L&#38;ograve; nhiều nhất.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;2.Mọc cua bể&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đến du lịch Nghệ An, sau khi thỏa sức kh&#38;aacute;m ph&#38;aacute; những cảnh đẹp ở Cửa L&#38;ograve; th&#38;igrave; c&#38;aacute;c bạn đừng qu&#38;ecirc;n gh&#38;eacute; một qu&#38;aacute;n h&#38;agrave;ng gần đ&#38;oacute; thưởng thức m&#38;oacute;n mọc cua bể thơm ngon v&#38;agrave; gi&#38;agrave;u dinh dưỡng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/moc-cua-be-mon-an-noi-tieng-o-cua-lo-768x512.jpg&#34; style=&#34;height:480px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;Mọc cua bể &#38;ndash; M&#38;oacute;n ăn nổi tiếng ở Cửa L&#38;ograve; (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để c&#38;oacute; được m&#38;oacute;n ăn hấp dẫn như n&#38;agrave;y, người đầu bếp đ&#38;atilde; mất rất nhiều t&#38;acirc;m sức. Cua được t&#38;aacute;ch thịt, gỡ nhỏ rồi trộn đều th&#38;agrave;nh hỗn hợp c&#38;ugrave;ng gi&#38;ograve; sống, nấm hương, mộc nhĩ, h&#38;agrave;nh kh&#38;ocirc; sau khi n&#38;ecirc;m nếm gia vị vừa phải th&#38;igrave; đắp l&#38;ecirc;n mai cua đem đi hấp. Hấp đến độ ch&#38;iacute;n tới, người đầu bếp phải nhanh tay lấy ra rồi phết đều một lớp l&#38;ograve;ng đỏ trứng l&#38;ecirc;n rồi hấp tiếp cho đến khi nh&#38;acirc;n b&#38;ecirc;n trong ch&#38;iacute;n hẳn. Khi thưởng thức, xếp gọn từng chiến mai cua nhồi mọc ra đĩa rồi gắn th&#38;ecirc;m những chiếc c&#38;agrave;ng cua v&#38;agrave;o nh&#38;igrave;n y như những ch&#38;uacute; cua sống, đặc biệt, ch&#38;iacute;nh hương vị đặc sắc n&#38;agrave;y khiến thực kh&#38;aacute;ch vấn vương m&#38;atilde;i kh&#38;ocirc;ng qu&#38;ecirc;n về Cửa L&#38;ograve;.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;3.C&#38;aacute; gi&#38;ograve; bảy m&#38;oacute;n&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Đi Cửa L&#38;ograve; m&#38;agrave; chưa nếm thử hương vị c&#38;aacute; gi&#38;ograve; l&#38;agrave; coi như chưa biết đến xứ biển n&#38;agrave;y. C&#38;aacute; gi&#38;ograve; c&#38;oacute; nguồn gốc ở Nauy, được nhập khẩu về nu&#38;ocirc;i thử nghiệm tại Đảo Ngư từ mấy năm gần đ&#38;acirc;y v&#38;agrave; dần trở th&#38;agrave;nh đặc sản Cửa L&#38;ograve; được đ&#38;ocirc;ng đảo du kh&#38;aacute;ch y&#38;ecirc;u th&#38;iacute;ch nhờ c&#38;oacute; h&#38;agrave;m lượng dinh dưỡng cao nhưng kh&#38;ocirc;ng chứa nhiều calo g&#38;acirc;y b&#38;eacute;o.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/long-ca-xao-768x512.jpg&#34; style=&#34;height:480px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;L&#38;ograve;ng c&#38;aacute; x&#38;agrave;o (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;C&#38;aacute; c&#38;oacute; h&#38;igrave;nh dạng kh&#38;aacute; hung dữ nhưng qua chế biến t&#38;agrave;i t&#38;igrave;nh của người đầu bếp trở th&#38;agrave;nh nhiều m&#38;oacute;n ăn ngon như c&#38;aacute; hấp sả, gỏi c&#38;aacute;, lẩu c&#38;aacute;, ch&#38;aacute;o c&#38;aacute;, l&#38;ograve;ng c&#38;aacute; x&#38;agrave;o, c&#38;aacute; r&#38;aacute;n, da c&#38;aacute; chi&#38;ecirc;n gi&#38;ograve;n. Nếu c&#38;oacute; cơ hội c&#38;aacute;c bạn nhớ nếm thử hương vị của cả 7 m&#38;oacute;n ăn hấp dẫn n&#38;agrave;y nh&#38;eacute;.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;4.Ch&#38;aacute;o ngh&#38;ecirc;u&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Ch&#38;aacute;o ngh&#38;ecirc;u l&#38;agrave; m&#38;oacute;n ăn th&#38;iacute;ch hợp khi d&#38;ugrave;ng v&#38;agrave;o buổi tối ở Cửa L&#38;ograve;. Ch&#38;aacute;o c&#38;oacute; c&#38;ocirc;ng dụng tăng cường sinh lực, giải tỏa căng thẳng, l&#38;agrave;m ấm người.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/chao-ngheu-cua-lo.jpg&#34; style=&#34;height:437px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;Ch&#38;aacute;o ngh&#38;ecirc;u &#38;ndash; Cửa L&#38;ograve; (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để l&#38;agrave;m n&#38;ecirc;n hương vị t&#38;ocirc; ch&#38;aacute;o ho&#38;agrave;n hảo, từ kh&#38;acirc;u chọn nguy&#38;ecirc;n liệu cho đến kh&#38;acirc;u chế biến đều đ&#38;ograve;i hỏi nhiều c&#38;ocirc;ng sức, t&#38;acirc;m huyết của người nấu. Nguy&#38;ecirc;n liệu ch&#38;iacute;nh gồm c&#38;oacute; ngh&#38;ecirc;u v&#38;agrave; gạo c&#38;ugrave;ng một số gia giảm kh&#38;aacute;c. Ngh&#38;ecirc;u được d&#38;ugrave;ng phải l&#38;agrave; loại tươi sống, chắc thịt, sau khi sơ chế qua đem ướp với gia vị rồi chi&#38;ecirc;n đến v&#38;agrave;ng gi&#38;ograve;n. Gạo để nấu ch&#38;aacute;o cũng cần phải l&#38;agrave; loại ngon th&#38;igrave; khi nấu l&#38;ecirc;n ch&#38;aacute;o mới dậy m&#38;ugrave;i, b&#38;iacute; quyết để phần ch&#38;aacute;o th&#38;ecirc;m hấp dẫn l&#38;agrave; d&#38;ugrave;ng ch&#38;iacute;nh nước luộc ngh&#38;ecirc;u để nấu. Khi d&#38;ugrave;ng th&#38;igrave; m&#38;uacute;c ch&#38;aacute;o ra t&#38;ocirc; đ&#38;atilde; chuẩn bị sẵn rau sống ở dưới v&#38;agrave; rắc đều ngh&#38;ecirc;u chi&#38;ecirc;n gi&#38;ograve;n l&#38;ecirc;n.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;5.Mực nh&#38;aacute;y&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Khi mới được đ&#38;aacute;nh bắt l&#38;ecirc;n, những con mực c&#38;oacute; lớp da trong suốt nhấp nh&#38;aacute;y kh&#38;ocirc;ng th&#38;ocirc;i n&#38;ecirc;n được ngư d&#38;acirc;n gọi l&#38;agrave; mực nh&#38;aacute;y, c&#38;oacute; nơi gọi l&#38;agrave; mực nhảy, nhưng t&#38;ecirc;n gọi n&#38;agrave;o cũng nhằm mi&#38;ecirc;u tả độ tươi ngon của con mực m&#38;agrave; th&#38;ocirc;i.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/muc-xao-sa-te-768x510.jpg&#34; style=&#34;height:478px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;Mực x&#38;agrave;o sa tế (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Mực nh&#38;aacute;y c&#38;oacute; thể chế biến th&#38;agrave;nh nhiều m&#38;oacute;n hấp dẫn: luộc, rim, x&#38;agrave;o, nhồi thịt r&#38;aacute;n hay trộn c&#38;ugrave;ng t&#38;eacute;p bưởi. Nhưng c&#38;oacute; lẽ cuốn h&#38;uacute;t hơn cả l&#38;agrave; c&#38;acirc;u mực v&#38;agrave; tận hưởng hương vị mực nướng tươi r&#38;oacute;i tr&#38;ecirc;n t&#38;aacute;n đ&#38;egrave;n măng s&#38;ocirc;ng. Vừa c&#38;acirc;u vừa lai rai với ch&#38;uacute;t tương ớt v&#38;agrave; chai bia lạnh th&#38;igrave; c&#38;ograve;n g&#38;igrave; tuyệt bằng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;6.Mắm ruốc Cửa L&#38;ograve;&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;M&#38;ugrave;a con ruốc ở Cửa L&#38;ograve; k&#38;eacute;o d&#38;agrave;i từ th&#38;aacute;ng Gi&#38;ecirc;ng đến hết th&#38;aacute;ng 4 &#38;Acirc;m Lịch. Đến du lịch Cửa L&#38;ograve; đ&#38;uacute;ng m&#38;ugrave;a ruốc, du kh&#38;aacute;ch sẽ được chứng kiến khung cảnh lao động hăng say khi cả l&#38;agrave;ng ch&#38;agrave;i rủ nhau đi k&#38;eacute;o ruốc về l&#38;agrave;m mắm. Đ&#38;acirc;y tuy chỉ l&#38;agrave; m&#38;oacute;n ăn d&#38;acirc;n d&#38;atilde; nhưng lại đ&#38;ograve;i hỏi nhiều c&#38;ocirc;ng sức. Sau khi chọn lựa được ruốc tươi ngon th&#38;igrave; phải d&#38;ugrave;ng nước lọc để rửa v&#38;igrave; nước l&#38;atilde; sẽ l&#38;agrave;m ruốc dễ bị thối rữa.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/mam-ruoc-cua-lo.jpg&#34; style=&#34;height:469px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;Mắm ruốc Cửa L&#38;ograve; (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Mắm ruốc c&#38;oacute; thể d&#38;ugrave;ng để n&#38;ecirc;m canh, l&#38;agrave;m thịt kho mắm, ch&#38;aacute;o ruốc&#38;hellip; nhưng hợp hơn cả l&#38;agrave; thịt cuốn b&#38;aacute;nh tr&#38;aacute;ng chấm mắm ruốc. Vị mặn m&#38;ograve;i của biển cả quyện c&#38;ugrave;ng vị chua chua của khế, ch&#38;aacute;t ch&#38;aacute;t của chuối, beo b&#38;eacute;o của miếng thịt ba chỉ l&#38;agrave;m cho m&#38;oacute;n ăn trở n&#38;ecirc;n tuyệt vời hơn bao giờ hết. Giữa thời tiết oi n&#38;oacute;ng được ngụp lặn dưới l&#38;agrave;n nước biển m&#38;aacute;t lạnh rồi được thưởng thức m&#38;oacute;n ngon n&#38;agrave;y th&#38;igrave; c&#38;ograve;n g&#38;igrave; tuyệt bằng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;7.T&#38;ocirc;m t&#38;iacute;t hấp sả bia&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;T&#38;ocirc;m t&#38;iacute;t hay c&#38;ograve;n được biết đến với t&#38;ecirc;n gọi kh&#38;aacute;c l&#38;agrave; bề bề. Đ&#38;acirc;y vốn l&#38;agrave; những m&#38;oacute;n ăn b&#38;igrave;nh dị của miền biển, nhưng c&#38;ugrave;ng với thời gian, đ&#38;acirc;y dần trở th&#38;agrave;nh m&#38;oacute;n đặc sản Cửa L&#38;ograve; rất được y&#38;ecirc;u th&#38;iacute;ch tại c&#38;aacute;c nh&#38;agrave; h&#38;agrave;ng, qu&#38;aacute;n ăn. Nếu bạn đang sợ m&#38;oacute;n ăn qu&#38;aacute; tanh th&#38;igrave; đừng lo nh&#38;eacute;, nhờ được hấp c&#38;ugrave;ng sả bia n&#38;ecirc;n t&#38;ocirc;m t&#38;iacute;t hết hẳn m&#38;ugrave;i tanh, thịt dai v&#38;agrave; ngọt rất ngon miệng. Khi ăn kết hợp chấm c&#38;ugrave;ng tương ớt cay nồng hay m&#38;ugrave; tạt th&#38;igrave; vừa ngon hết sẩy lại vừa kh&#38;ocirc;ng sợ bị lạnh bụng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/12/tom-tit-hap-sa-bia-hap-dan.jpg&#34; style=&#34;height:493px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;em&#62;T&#38;ocirc;m t&#38;iacute;t hấp sả bia hấp dẫn (Ảnh: ST)&#60;/em&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Tr&#38;ecirc;n đ&#38;acirc;y l&#38;agrave; 7 m&#38;oacute;n đặc sản Cửa L&#38;ograve; nổi tiếng m&#38;agrave; c&#38;aacute;c bạn n&#38;ecirc;n thử nếu c&#38;oacute; dịp đến đ&#38;acirc;y du lịch. Hy vọng với những chia sẻ tr&#38;ecirc;n đ&#38;acirc;y sẽ gi&#38;uacute;p &#38;iacute;ch cho chuyến du h&#38;yacute; của bạn v&#38;agrave; gia đ&#38;igrave;nh.&#60;/p&#62;&#13;&#10;', 128, '/publics/assets/photos/blogs/food/blog_food_4.jpg', 'Cửa Lò – Nghệ An thu hút đông đảo lượng khách du lịch mỗi năm không chỉ bởi những bãi biển đẹp nao lòng người mà còn bởi phong vị ẩm thực vô cùng cuốn hút. Dưới đây là 7 đặc sản Cửa Lò ngon nhất mà bạn nên nếm thử khi có dịp.', '2022-08-03 13:35:06', '2022-08-08 00:33:57'),
(95, 'Bản đồ ẩm thực Hải Phòng trong lòng bàn tay nhất định phải nhớ.', 'ban-do-am-thuc-hai-phong', 2, 1, '&#60;p&#62;Hải Ph&#38;ograve;ng đang rất biết c&#38;aacute;ch &#38;quot;chi&#38;ecirc;u dụ&#38;quot; kh&#38;aacute;ch du lịch khi&#38;nbsp;&#60;a href=&#34;https://afamily.vn/so-du-lich-hai-phong-tu-lam-ban-do-am-thuc-de-kich-thich-du-lich-dan-tinh-vo-tay-khen-tam-tac-vi-qua-co-ich-va-nhung-kinh-nghiem-de-co-mot-tour-tron-ven-20220507233651609.chn&#34; target=&#34;_blank&#34;&#62;tung ra bản đồ ẩm thực&#60;/a&#62;&#38;nbsp;&#38;quot;m&#38;aacute;ch nước&#38;quot; tận t&#38;igrave;nh những qu&#38;aacute;n ăn n&#38;agrave;o ngon n&#38;ecirc;n gh&#38;eacute;, những địa điểm gộp một lần 3 4 h&#38;agrave;ng qu&#38;aacute;n để tiện di chuyển, c&#38;ograve;n c&#38;oacute; mục gợi &#38;yacute; menu cho c&#38;acirc;u hỏi: &#38;quot;S&#38;aacute;ng/Trưa/Tối nay ch&#38;uacute;ng m&#38;igrave;nh ăn g&#38;igrave;?&#38;quot;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Để kiểm tra xem bản đồ ẩm thực do ch&#38;iacute;nh Sở Du Lịch Hải Ph&#38;ograve;ng nghi&#38;ecirc;n cứu n&#38;agrave;y c&#38;oacute; hữu dụng kh&#38;ocirc;ng, điểm qua c&#38;aacute;c m&#38;oacute;n ngon c&#38;oacute; mặt tr&#38;ecirc;n bản đồ đ&#38;atilde; được c&#38;aacute;c Food Blogger review suốt mấy ng&#38;agrave;y qua.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;1. B&#38;Aacute;NH ĐA CUA&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Food Blogger P&#38;iacute;t Ham Ăn đ&#38;atilde; chọn đ&#38;aacute;nh thức vị gi&#38;aacute;c bằng m&#38;oacute;n b&#38;aacute;nh đa cua ở d&#38;ograve;ng đầu ti&#38;ecirc;n tr&#38;ecirc;n bản đồ, đến địa chỉ 143/46 Lạch Tray, bạn sẽ nhận được sự đ&#38;oacute;n tiếp nhiệt t&#38;igrave;nh của vợ chồng chủ qu&#38;aacute;n. Một t&#38;ocirc; b&#38;aacute;nh đa cua đầy ắp thịt trần, chả vi&#38;ecirc;n,.. chỉ c&#38;oacute; gi&#38;aacute; 25 ngh&#38;igrave;n.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Food Blogger Cừu B&#38;eacute; cũng ăn v&#38;agrave; chia sẻ qu&#38;aacute;n b&#38;aacute;n kh&#38;aacute; rẻ, một b&#38;aacute;t vừa c&#38;oacute; đầy đủ thịt bò, tóp mỡ, chả lá lốt, mọc m&#38;agrave; nước dùng lại thanh thanh, hành phi tay thơm lừng.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://afamilycdn.com/thumb_w/650/150157425591193600/2022/5/11/17088329616783957123516258242660340117974619n-16522427684081593181400.jpeg&#34; style=&#34;height:835px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;2. NEM CUA BỂ&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Theo gợi &#38;yacute; &#38;quot;trưa thưởng thức nem cua bể&#38;quot; tr&#38;ecirc;n bản đồ, P&#38;iacute;t đ&#38;atilde; gh&#38;eacute; nem cua bể Phương Mai ở 87 C&#38;aacute;t Cụt. Với gi&#38;aacute; 100 ngh&#38;igrave;n/c&#38;aacute;i, chất lượng sẽ tương đương với gi&#38;aacute; tiền khi b&#38;ecirc;n trong c&#38;oacute; rất nhiều thịt cua ngọt. Nem gi&#38;ograve;n tan kết hợp với nước chấm đậm đ&#38;agrave; đặc biệt sẽ khiến bạn nhớ m&#38;atilde;i kh&#38;ocirc;ng qu&#38;ecirc;n.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://afamilycdn.com/150157425591193600/2022/5/11/nem-cua-be-071630562149-16522431158031491560209.jpeg&#34; style=&#34;height:634px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;3. ỐC&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Trong khi Blogger Hunh Food đến qu&#38;aacute;n Ốc Thuỳ Dương 30/263 Lạch Tray tr&#38;ecirc;n bản đồ v&#38;agrave; chia sẻ rằng m&#38;igrave;nh phải xếp h&#38;agrave;ng thật d&#38;agrave;i để đợi được ăn th&#38;igrave; c&#38;ocirc; n&#38;agrave;ng P&#38;iacute;t lại chọn gh&#38;eacute; Hoa Ốc 69 M&#38;aacute;y Tơ để trải nghiệm. P&#38;iacute;t gợi &#38;yacute; một số m&#38;oacute;n nổi trội n&#38;ecirc;n gọi như ốc Hương x&#38;agrave;o trứng muối, ngh&#38;ecirc;u hấp Th&#38;aacute;i v&#38;igrave; loại nước sốt rất đặt biệt.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://afamilycdn.com/thumb_w/650/150157425591193600/2022/5/11/2802169495219550529433266158708026674477643n-16522432123801662779003.jpg&#34; style=&#34;height:720px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;4. B&#38;Aacute;NH M&#38;Igrave; CAY&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Anh ch&#38;agrave;ng reviewer Hunh Food đ&#38;atilde; ăn thử 2 qu&#38;aacute;n: B&#38;aacute;nh m&#38;igrave; cay &#38;ocirc;ng Cu&#38;ocirc;ng ở 184 H&#38;agrave;ng K&#38;ecirc;nh v&#38;agrave; b&#38;aacute;nh m&#38;igrave; cay B&#38;agrave; Gi&#38;agrave; 57 L&#38;ecirc; Lợi để so s&#38;aacute;nh. Theo anh, b&#38;aacute;nh m&#38;igrave; cay &#38;ocirc;ng Cu&#38;ocirc;ng c&#38;oacute; phần pate hơi dễ ng&#38;aacute;n một ch&#38;uacute;t, c&#38;ograve;n b&#38;aacute;nh m&#38;igrave; cay B&#38;agrave; Gi&#38;agrave; nhỉnh hơn nhưng vẫn chưa thật sự ấn tượng vị gi&#38;aacute;c.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://afamilycdn.com/150157425591193600/2022/5/11/27817205431772755558504112584053678869230430n-1652243800071655090254.jpg&#34; style=&#34;height:720px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;5. B&#38;Aacute;NH B&#38;Egrave;O&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Tuy nhi&#38;ecirc;n khi gh&#38;eacute; đến qu&#38;aacute;n B&#38;aacute;nh b&#38;egrave;o c&#38;ocirc; M&#38;acirc;y 64 Chu Văn An, anh cảm thấy rất ngon v&#38;agrave; ra sức hối th&#38;uacute;c mọi người nhất định phải ăn chỗ n&#38;agrave;y.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://afamilycdn.com/thumb_w/650/150157425591193600/2022/5/11/27816255810089442197292444560504872411361396n-1652243897241694885350.jpg&#34; style=&#34;height:720px; width:720px&#34; /&#62;&#60;/p&#62;&#13;&#10;', 128, '/publics/assets/photos/blogs/food/blog_food_5.jpg', ' Hải Phòng đang rất biết cách &#34;chiêu dụ&#34; khách du lịch khi tung ra bản đồ ẩm thực &#34;mách nước&#34; tận tình những quán ăn nào ngon nên ghé...', '2022-08-03 08:50:48', '2022-08-08 00:34:04');
INSERT INTO `blog` (`id`, `title`, `slug`, `user_id`, `category_id`, `content`, `view_count`, `thumbnail`, `description`, `created_at`, `updated_at`) VALUES
(109, 'Top 6 món ngon Phú Yên ăn một lần là ghiền!', 'mon-ngon-phu-yen', 2, 1, '<h2>Top 6 m&oacute;n ngon Ph&uacute; Y&ecirc;n ăn một lần l&agrave; Ghiền</h2>\r\n\r\n<h3>Mắt c&aacute; ngừ đại dương</h3>\r\n\r\n<p>Chỉ khi gh&eacute; thăm Ph&uacute; Y&ecirc;n, du kh&aacute;ch mới c&oacute; thể thưởng thức được m&oacute;n mắt c&aacute; ngừ đại dương b&eacute;o ngậy thơm ngon m&agrave; kh&ocirc;ng c&oacute; một nơi n&agrave;o kh&aacute;c c&oacute;.</p>\r\n\r\n<p>Mắt c&aacute; ngừ được chế biến v&ocirc; c&ugrave;ng sạch sẽ, tẩm ướp gia vị v&agrave; cho v&agrave;o một c&aacute;i b&aacute;t nhỏ nấu ch&iacute;n.</p>\r\n\r\n<p>Mắt c&aacute; ngừ sẽ được hầm c&ugrave;ng với c&aacute;c vị thuốc bắc như t&aacute;o t&agrave;u, kỷ tử,&hellip; th&ecirc;m &iacute;t rau củ nữa l&agrave; c&oacute; ngay một m&oacute;n ăn v&ocirc; c&ugrave;ng đẹp mắt.</p>\r\n\r\n<p>Chỉ mất tầm&nbsp;<strong>40.000 đồng &ndash; 50.000 đồng</strong>&nbsp;l&agrave; du kh&aacute;ch đ&atilde; c&oacute; ngay cho m&igrave;nh một b&aacute;t c&aacute; ngừ thơm ngon b&eacute;o ngậy.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quynhonme.vn/wp-content/uploads/2020/11/mat-ca-ngu-dai-duong.jpg\" style=\"height:525px; width:700px\" /></p>\r\n\r\n<p><em>Mắt c&aacute; ngừ đại dương &ndash; M&oacute;n ăn thơm ngon nơi v&ugrave;ng biển Ph&uacute; Y&ecirc;n</em></p>\r\n\r\n<p>Địa chỉ ăn tham khảo:</p>\r\n\r\n<blockquote>\r\n<p><strong><em>&ndash; Qu&aacute;n B&agrave; T&aacute;m 289 L&ecirc; Duẩn, TP. Tuy H&ograve;a</em></strong></p>\r\n\r\n<p><strong><em>&ndash; Qu&aacute;n C&acirc;y Sung đường bờ k&egrave; Tổ 6, P. 6, Gần Hải đội Bi&ecirc;n Ph&ograve;ng</em></strong></p>\r\n\r\n<p><strong><em>&ndash; Qu&aacute;n Sơn Cầu Gỗ bờ k&egrave; Bạch Đằng</em></strong></p>\r\n\r\n<p><strong><em>&ndash; 293C L&ecirc; Duẩn, P.3</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n</blockquote>\r\n\r\n<h3>Cơm g&agrave; Ph&uacute; Y&ecirc;n</h3>\r\n\r\n<p>Nếu đ&atilde; đi&nbsp;<strong>Ph&uacute; Y&ecirc;n</strong>, bạn n&ecirc;n thử m&oacute;n Cơm g&agrave; Ph&uacute; Y&ecirc;n được nấu bằng nước luộc g&agrave; th&ecirc;m ch&uacute;t nghệ xay n&ecirc;n cơm c&oacute; m&agrave;u v&agrave;ng đẹp mắt.</p>\r\n\r\n<p>Phần cơm dẻo thơm từ gạo ăn k&egrave;m với thịt g&agrave; dai ngon, rau răm, dưa g&oacute;p mang lại cảm gi&aacute;c dễ ăn m&agrave; kh&ocirc;ng ng&aacute;n đối với du kh&aacute;ch. Cơm g&agrave; Ph&uacute; Y&ecirc;n sẽ ngon hơn khi bạn ăn k&egrave;m với nước s&uacute;p.</p>\r\n\r\n<p>Chỉ với&nbsp;<strong>25.000 đồng &ndash; 30.000 đồng</strong>&nbsp;l&agrave; bạn đ&atilde; c&oacute; ngay cho m&igrave;nh một dĩa cơm g&agrave; n&oacute;ng hổi đầy ắp thịt g&agrave; ngon tuyệt c&uacute; m&egrave;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quynhonme.vn/wp-content/uploads/2020/11/com-ga-phu-yen.jpg\" style=\"height:466px; width:700px\" /></p>\r\n\r\n<p>Địa chỉ ăn tham khảo:</p>\r\n\r\n<blockquote>\r\n<p><strong><em>&ndash; Cơm g&agrave; Tuyết Nhung: 189 L&ecirc; Th&aacute;nh T&ocirc;, P.3, TP. Tuy H&ograve;a</em></strong></p>\r\n\r\n<p><strong><em>&ndash; Qu&aacute;n Thi&ecirc;n Hương: 211 L&ecirc; Th&aacute;nh T&ocirc;n</em></strong></p>\r\n\r\n<p><strong><em>&ndash; Cơm g&agrave; Bảo Ch&acirc;u: gần chợ Tuy H&ograve;a</em></strong></p>\r\n\r\n<p><strong><em>&ndash; Cơm g&agrave; C&ocirc; Diệp tr&ecirc;n đường Ng&ocirc; Quyền</em></strong></p>\r\n</blockquote>\r\n\r\n<h3>B&uacute;n mực đặc sản Tuy H&ograve;a</h3>\r\n\r\n<p>Kh&ocirc;ng sử dụng mực l&aacute; như những m&oacute;n b&uacute;n mực nơi kh&aacute;c, b&uacute;n mực của Tuy H&ograve;a sử dụng mực cơm loại nhỏ, ngọt thịt m&agrave; kh&ocirc;ng qu&aacute; dai khi ăn.</p>\r\n\r\n<p>B&uacute;n mực được nấu chua với dứa v&agrave; c&agrave; chua, ăn k&egrave;m với rau sống v&agrave; gi&aacute; sống l&agrave; sự lựa chọn tuyệt vời cho những ng&agrave;y se se lạnh.<img alt=\"\" src=\"https://quynhonme.vn/wp-content/uploads/2020/11/dac-san-bun-muc-tuy-hoa.jpg\" style=\"height:524px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Ch&aacute;o h&agrave;u</h3>\r\n\r\n<p>Trong c&aacute;c m&oacute;n chế biến từ h&agrave;u th&igrave; ch&aacute;o h&agrave;u l&agrave; m&oacute;n ăn phổ biến nhất ở&nbsp;<a href=\"https://quynhonme.vn/phu-yen\">Ph&uacute; Y&ecirc;n ở đ&acirc;u</a>. Nếu bạn đ&atilde; đến Ph&uacute; Y&ecirc;n th&igrave; nhớ đừng bỏ lỡ m&oacute;n ch&aacute;o h&agrave;u n&oacute;ng hổi &ndash; bổ rẻ n&agrave;y.</p>\r\n\r\n<p>T&ocirc; ch&aacute;o h&agrave;u đặc biệt với nhiều h&agrave;u, đập th&ecirc;m 2 quả trứng g&agrave; ta b&eacute;o ngậy v&agrave;o. Khi ăn, bỏ th&ecirc;m ch&uacute;t h&agrave;nh băm v&agrave; v&agrave;i miếng gừng, bẻ miếng b&aacute;nh tr&aacute;ng v&agrave; trộn đều l&ecirc;n v&agrave; bắt đầu thưởng thức n&agrave;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quynhonme.vn/wp-content/uploads/2020/11/chao-hau-phu-yen.jpg\" style=\"height:525px; width:700px\" /></p>\r\n\r\n<p>Địa chỉ tham khảo</p>\r\n\r\n<blockquote>\r\n<p><strong>Số 373, đường Nguyễn Huệ, Tuy H&ograve;a, Ph&uacute; Y&ecirc;n</strong></p>\r\n</blockquote>\r\n\r\n<h3>B&aacute;nh canh hẹ</h3>\r\n\r\n<p>Mặc d&ugrave; l&agrave; một m&oacute;n ăn b&igrave;nh dị nhưng lại thu h&uacute;t rất nhiều du kh&aacute;ch gh&eacute; đến thưởng thức. Nguy&ecirc;n liệu l&agrave;m m&oacute;n b&aacute;nh n&agrave;y cũng rất đơn giản gồm: chả c&aacute;, thịt, trứng c&uacute;t, b&aacute;nh canh v&agrave; bạn đ&atilde; c&oacute; ngay một t&ocirc; b&aacute;nh canh hẹ thơm ngon rồi.</p>\r\n\r\n<p>Sợi b&aacute;nh canh được l&agrave;m từ bột gạo, dẻo mềm nhưng khi ăn lại kh&ocirc;ng bị dai hay bở. Chả c&aacute; th&igrave; được th&aacute;i mỏng rồi r&aacute;n ch&iacute;n hai mặt, chỉ cần h&iacute;t h&agrave; m&ugrave;i thơm th&ocirc;i cũng đủ để cho du kh&aacute;ch ng&acirc;y ngất.</p>\r\n\r\n<p>Chỉ với&nbsp;<strong>20.000 đồng &ndash; 25.000</strong>&nbsp;đồng bạn đ&atilde; c&oacute; ngay một t&ocirc; b&aacute;nh canh n&oacute;ng hổi vừa thổi vừa ăn rồi.</p>\r\n\r\n<p>Địa chỉ tham khảo:</p>\r\n\r\n<blockquote>\r\n<p><strong><em>&ndash; 59 Điện Bi&ecirc;n Phủ (b&aacute;nh canh sợi nhỏ &ndash; từ 2h chiều đến 10h tối)</em></strong></p>\r\n\r\n<p><strong><em>&ndash; Qu&aacute;n c&ocirc; Mai (b&aacute;nh canh sợi to &ndash; từ 2h đến 6h chiều,m&agrave; &nbsp;thường hết l&uacute;c 4h30)</em></strong></p>\r\n\r\n<p><strong><em>&ndash; 48B Nguyễn Tr&atilde;i, P.4, TP. Tuy H&ograve;a</em></strong></p>\r\n\r\n<p><strong><em>&ndash; B&aacute;nh canh hẹ chả c&aacute; S&ocirc;ng Cầu: L&ecirc; Lợi, TP. Tuy H&ograve;a</em></strong></p>\r\n\r\n<p><strong><em>&ndash; B&aacute;nh canh hẹ năng nở B&agrave; Triệu</em></strong></p>\r\n\r\n<p><strong><em>&ndash; G&oacute;c đường Trần Hưng Đạo (b&ecirc;n h&ocirc;ng chợ Tuy H&ograve;a)</em></strong></p>\r\n</blockquote>\r\n\r\n<h3>B&aacute;nh hỏi l&ograve;ng heo</h3>\r\n\r\n<p>Đ&acirc;y l&agrave; một trong những m&oacute;n ăn kh&ocirc;ng thể thiếu trong đời sống hằng ng&agrave;y của người d&acirc;n Ph&uacute; Y&ecirc;n. B&aacute;nh hỏi được l&agrave;m từ gạo xay nhuyễn, pha th&agrave;nh hỗn hợp sệt sau đ&oacute; d&ugrave;ng khu&ocirc;n &eacute;p bột đ&atilde; tạo khối th&agrave;nh b&aacute;nh, hấp c&aacute;ch thủy để l&agrave;m ch&iacute;n. B&aacute;nh hỏi ăn k&egrave;m với l&ograve;ng heo hoặc thịt nướng, chấm th&ecirc;m c&ugrave;ng nước mắm pha chua chua ngọt ngọt. Miếng b&aacute;nh ăn thơm đậm m&ugrave;i gạo v&agrave; kh&ocirc;ng hề bị kh&ocirc;.<img alt=\"\" src=\"https://quynhonme.vn/wp-content/uploads/2020/11/banh-hoi-long-heo.jpg\" style=\"height:525px; width:700px\" /></p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những m&oacute;n ăn gợi &yacute; m&agrave; du kh&aacute;ch nhất định phải thử qua nếu vẫn đang thắc mắc kh&ocirc;ng biết n&ecirc;n&nbsp;<strong>ăn g&igrave; ở Ph&uacute; Y&ecirc;n</strong>. Đảm bảo b&agrave;i viết đ&atilde; cho bạn biết hết&nbsp;<strong><a href=\"https://quynhonme.vn/dac-san-phu-yen-lam-qua#%C4%91%E1%BA%B7c_s%E1%BA%A3n_Ph%C3%BA_Y%C3%AAn\">đặc sản Ph&uacute; Y&ecirc;n</a>&nbsp;l&agrave; g&igrave;</strong>&nbsp;rồi đấy!</p>\r\n\r\n<p>V&agrave; nếu bạn đang muốn kh&aacute;m ph&aacute;&nbsp;<strong>ẩm thực Ph&uacute; Y&ecirc;n</strong>&nbsp;m&agrave; kh&ocirc;ng bỏ s&oacute;t m&oacute;n n&agrave;o th&igrave; h&atilde;y li&ecirc;n hệ&nbsp;<a href=\"https://sites.google.com/view/quynhonmevn/\"><strong>Quy Nhon Me</strong></a>. Ch&uacute;ng t&ocirc;i sẽ đưa bạn đi&nbsp;<strong>ăn vặt Ph&uacute; Y&ecirc;n</strong>&nbsp;v&agrave; tặng bạn gi&aacute; ưu đ&atilde;i th&aacute;ng n&agrave;y nh&eacute;!</p>\r\n\r\n<blockquote>\r\n<p>C&aacute;c&nbsp;<strong><a href=\"https://quynhonme.vn/19-bai-bien-tuy-hoa-phu-yen-dep-nhat\">b&atilde;i biển Ph&uacute; Y&ecirc;n</a></strong>&nbsp;đẹp thu h&uacute;t kh&aacute;ch du lịch nhất</p>\r\n\r\n<p>29 địa điểm&nbsp;<a href=\"https://quynhonme.vn/dia-diem-du-lich-phu-yen\"><strong>ph&uacute; y&ecirc;n c&oacute; g&igrave; đẹp</strong></a>&nbsp;&ndash; Quy Nhon Me</p>\r\n\r\n<p><a href=\"https://quynhonme.vn/nha-tho-mang-lang-phu-yen-tram-tuoi\"><strong>Nh&agrave; thờ Mằng Lăng</strong></a>&nbsp;cổ k&iacute;nh | Du lịch Tuy An Ph&uacute; Y&ecirc;n</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"https://quynhonme.vn/wp-content/uploads/2020/11/banh-canh-he.jpg\" style=\"height:438px; width:700px\" /></p>\r\n\r\n<p><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 29px; left: 414.175px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', 128, '/publics/assets/photos/blogs/food/blog_food_6.jpg', 'Nếu bạn đang thắc mắc không biết nên ăn gì ở Phú Yên thì hãy tham khảo 17 món ngon nhất định phải thử qua một lần khi đến vùng đất hoa vàng cỏ xanh này.\r\n', '2022-08-05 09:18:19', '2022-08-05 09:20:33'),
(113, 'Điều bạn chưa biết về Sơn Đoòng - Hang động lớn nhất thế giới của Việt Nam', 'dieu-ban-chua-biet-ve-son-doong-hang-dong-lon-nhat-the-gioi', 2, 2, '&#60;p&#62;Việt Nam l&#38;agrave; đất nước c&#38;oacute; nhiều cảnh quan ngoạn mục - từ những thửa ruộng bậc thang xếp tầng ở v&#38;ugrave;ng T&#38;acirc;y Bắc hay h&#38;agrave;ng ngh&#38;igrave;n đảo đ&#38;aacute; v&#38;ocirc;i độc đ&#38;aacute;o ở Vịnh Hạ Long, đến những con đường uống lượn b&#38;ecirc;n biển ở Ph&#38;uacute; Y&#38;ecirc;n - B&#38;igrave;nh Thuận, hoặc m&#38;ecirc; cung của những con s&#38;ocirc;ng ở Đồng Bằng s&#38;ocirc;ng Cửu Long. Du kh&#38;aacute;ch trong v&#38;agrave; ngo&#38;agrave;i nước c&#38;oacute; v&#38;ocirc; v&#38;agrave;n lựa chọn du lịch kh&#38;ocirc;ng thể bỏ lỡ ở mảnh đất chữ S tuyệt vời. Tuy nhi&#38;ecirc;n, một sự thật &#38;iacute;t được biết đến l&#38;agrave; Việt Nam hiện đang l&#38;agrave; quốc gia sở hữu hang động lớn nhất thế giới -&#38;nbsp;&#60;strong&#62;Hang Sơn Đo&#38;ograve;ng&#60;/strong&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;h2&#62;&#60;strong&#62;Hang Sơn Đo&#38;ograve;ng ở đ&#38;acirc;u?&#60;/strong&#62;&#60;/h2&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Hang Sơn Đo&#38;ograve;ng (Mountian River Cave), hang động lớn nhất thế giới,&#38;nbsp;&#60;em&#62;&#60;strong&#62;nằm ngay trung t&#38;acirc;m Vườn Quốc gia Phong Nha-Kẻ B&#38;agrave;n&#60;/strong&#62;&#60;/em&#62;g, tỉnh Quảng B&#38;igrave;nh, Việt Nam. N&#38;oacute; được h&#38;igrave;nh th&#38;agrave;nh trong c&#38;aacute;c kỷ nguy&#38;ecirc;n địa chất kỷ Cambri-Permi, c&#38;oacute; ni&#38;ecirc;n đại từ 400&#38;ndash;450 triệu năm tuổi. Kh&#38;ocirc;ng c&#38;oacute; từ n&#38;agrave;o c&#38;oacute; thể đ&#38;aacute;nh gi&#38;aacute; hay ước lượng về k&#38;iacute;ch cỡ hay vẻ đẹp của Sơn Đo&#38;ograve;ng. Hang hiện được UNESCO c&#38;ocirc;ng nhận v&#38;agrave; bảo vệ. Hang c&#38;oacute; chiều rộng 150m, cao hơn 200m, chiều d&#38;agrave;i l&#38;ecirc;n tới gần 9km. Ước t&#38;iacute;nh dung t&#38;iacute;ch của Hang Sơn Đo&#38;ograve;ng l&#38;agrave; 36,8 triệu m&#38;eacute;t khối. Hang ch&#38;iacute;nh đủ lớn để chứa cả một t&#38;ograve;a nh&#38;agrave; của Th&#38;agrave;nh phố New York.&#60;img alt=&#34;&#34; src=&#34;https://elitetour.com.vn/files/images/Blogs/Son%20Doong%208.jpg&#34; style=&#34;height:600px; width:900px&#34; /&#62;Điều tuyệt vời hơn nữa l&#38;agrave; hệ sinh th&#38;aacute;i được tạo ra trong hang động. Nơi đ&#38;acirc;y c&#38;oacute; hệ thống thời tiết ri&#38;ecirc;ng v&#38;agrave; tạo ra những đ&#38;aacute;m m&#38;acirc;y ri&#38;ecirc;ng. V&#38;agrave;o b&#38;ecirc;n trong, bạn sẽ t&#38;igrave;m thấy thạch nhũ to lớn, c&#38;oacute; những khối thạch nhũ cao tới 80m v&#38;agrave; c&#38;aacute;c h&#38;oacute;a thạch c&#38;oacute; ni&#38;ecirc;n đại h&#38;agrave;ng triệu năm. Hang c&#38;oacute; hai &#38;quot;giếng trời&#38;quot;, l&#38;agrave; hai hố sụp, nơi &#38;aacute;nh nắng c&#38;oacute; thể chiếu v&#38;agrave;o hang gi&#38;uacute;p thực vật sinh trưởng v&#38;agrave; ph&#38;aacute;t triển.&#60;img alt=&#34;&#34; src=&#34;https://elitetour.com.vn/files/images/Blogs/Son%20Doong%2015.jpg&#34; style=&#34;height:600px; width:900px&#34; /&#62;Trong hang, bạn sẽ bắt gặp những bụi rậm v&#38;agrave; d&#38;ograve;ng nước được bao phủ bởi những đ&#38;aacute;m m&#38;acirc;y m&#38;ugrave; sương, v&#38;agrave; c&#38;aacute;c vi sinh vật ph&#38;aacute;t triển mạnh trong b&#38;oacute;ng tối. Đ&#38;oacute; l&#38;agrave; một thế giới ho&#38;agrave;n to&#38;agrave;n kh&#38;aacute;c, kh&#38;ocirc;ng c&#38;oacute; sự can thiệp của b&#38;agrave;n tay con người. Bạn sẽ nh&#38;igrave;n thấy h&#38;igrave;nh ảnh đầy lạ lẫm của Tr&#38;aacute;i Đất giống như c&#38;aacute;ch đ&#38;acirc;y h&#38;agrave;ng trăm triệu năm.&#38;nbsp;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#60;img alt=&#34;&#34; src=&#34;https://elitetour.com.vn/files/images/Blogs/Son%20Doong%2011.jpg&#34; style=&#34;height:600px; width:900px&#34; /&#62;&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;top: 358.6px; left: 558.263px;&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;top: 358.6px; left: 558.263px;&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;top: 358.6px; left: 558.263px;&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;top: 358.6px; left: 558.263px;&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;top: 358.6px; left: 558.263px;&#34;&#62;&#38;nbsp;&#60;/div&#62;&#13;&#10;&#13;&#10;&#60;div class=&#34;ddict_btn&#34; style=&#34;top: 1744.4px; left: 20px;&#34;&#62;&#60;img src=&#34;chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png&#34; /&#62;&#60;/div&#62;&#13;&#10;', 0, '/publics/assets/photos/blogs/travel/travel-1.jpg', 'Hang Sơn Đoòng (Mountian River Cave), hang động lớn nhất thế giới, nằm ngay trung tâm Vườn Quốc gia Phong Nha-Kẻ Bàng, tỉnh Quảng Bình, Việt Nam', '2022-08-07 23:43:59', '2022-08-07 23:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categorires`
--

CREATE TABLE `blog_categorires` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_categorires`
--

INSERT INTO `blog_categorires` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'am-thuc', 1, '2022-05-09', '2022-05-17 06:20:53'),
(2, 'Travel', 'du-lich', 1, '2022-08-01', '2022-08-01 13:05:20'),
(3, 'People', 'con-nguoi', 1, '2022-07-20', '2022-07-21 07:48:18'),
(4, 'Place', 'dia-diem', 2, '2022-08-09', '2022-08-01 13:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `blog_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_name`, `email`, `website`, `content`, `parent_id`, `blog_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'LyLy', 'lyly@gmail.com', NULL, 'Nice Beach...I Love Travel To VietNam', 0, 92, 2, '2022-05-10 06:20:53', NULL),
(2, 'Tú Anh', 'tuanh@gmail.com', NULL, 'Quá Tuyệt vời với đồ ăn nơi đây', 0, 92, 2, '2022-05-10 06:20:53', NULL),
(14, 'Thuý Tồ', 'thuy@gmail.com', NULL, 'Mình rất hai lòng khi đến nơi đây bởi ẩm thực, con người nơi đây!!\r\nThanks', 0, 94, 1, '2022-08-04 08:09:07', NULL),
(16, 'Khả Vân', '123@gmail.com', NULL, 'Có hẹn với đò ăn nơi này một lần nữa!', 2, 92, 2, '2022-08-04 09:34:21', NULL),
(19, 'Lan Lan', 'lanlan@gmail.com', NULL, 'Me too!', 1, 92, 2, '2022-05-03 21:05:14', NULL),
(20, 'Quang Linh', 'dasd@gmail.com', NULL, 'Linh rất hân hạnh được đến nôi đây', 0, 92, 1, '2022-08-04 09:50:14', NULL),
(33, 'Tuấn Khang', 'khang@gmail.com', NULL, 'Chúc mọi người kỳ nghỉ vui vẻ?', 1, 92, 1, '2022-08-04 10:44:22', NULL),
(40, 'Dân Chơi Xóm', 'lylong@gmail.com', NULL, 'Hủ Tiếu Lầu quá nổi tiếng rồi! Khỏi phải khen nha', 0, 93, 1, '2022-08-04 11:06:00', NULL),
(41, 'Linh Lê', 'le@gmail.com', NULL, 'Chuẩn nha', 40, 93, 1, '2022-08-04 11:06:23', NULL),
(42, 'Mẹ Mướp', 'bau@gmail.com', NULL, 'Đã từng qua nơi này với vô số món ăn mình yêu thích', 0, 93, 1, '2022-08-04 11:07:19', NULL),
(43, 'Linh Boo', 'linh@gmail.com', NULL, 'Bị Nghiện Món Cháo Lươn Mất rồi', 0, 94, 1, '2022-08-04 11:08:12', NULL),
(44, 'Nam Anh', 'namanh@gmail.com', NULL, 'Cùng cảnh ngộ ha', 43, 94, 1, '2022-08-04 11:08:37', NULL),
(45, 'Bà Tân Vlog', 'tan@gmail.com', NULL, 'tôm ở đây Siêu To khổng Lồ Các Cháu ơi!', 0, 95, 1, '2022-08-04 11:09:35', NULL),
(46, 'Nhock Tỳ', 'nhoc@gmail.com', NULL, 'Bà Tân LÀm Quả Vlog ở đây Đii', 45, 95, 1, '2022-08-04 11:10:10', NULL),
(47, 'Trik Boy', 'boy1cham@gmail.com', NULL, 'Bà ơi...Ra Làm Con Mực  Siêu To khổng Lồ nữa', 45, 95, 1, '2022-08-04 11:11:08', NULL),
(51, 'Thuý Hiền', 'hien@gmail.com', NULL, 'Nhớ nhất khi tới đây là món .....!', 0, 92, 1, '2022-08-04 14:33:11', NULL),
(52, 'Đình Trường', 'truong@gmail.com', NULL, 'Hay quá bạn ơi', 51, 92, 1, '2022-08-04 14:34:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = chưa xử lý\r\n1 = Đang xử lý\r\n2 = Đã xử lý',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `subject`, `phone_number`, `message`, `note`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Thu Hà', 'ha@gmail.com', 'Beaches', '0356099841', 'Mình cần tư vấn về biển miền trung&#13;&#10;', 'Đang tư vấn. Hẹn ngày tư vấn thêm!', 0, '2022-08-04 07:34:13', '2022-08-08 01:08:20'),
(7, 'misThy', 'thi@gmail.com', 'blog', '03488888333', '<p>Cần th&ecirc;m nhiều ảnh v&agrave;o web</p>\r\n', 'Vân TT gọi tư vấn', 1, '2022-08-04 14:35:02', '2022-08-05 08:15:19'),
(37, 'Lê Cường', 'cuong@gmail.com', 'Beaches', '0356099841', 'Rất bổ ích cho chuyến đi của tôi&#13;&#10;&#13;&#10;', 'Chưa liên hệ được người dùng!', 0, '2022-08-06 04:56:01', '2022-08-08 00:24:22'),
(85, 'Tuấn Liễn', 'tuanxuka@gmail.com', 'homemes', '0325655555', 'Yêu cầu có thêm thêm music cho web&#13;&#10;', 'Số điện thoại không liên hệ được', 0, '2022-08-06 20:14:37', '2022-08-08 00:24:49'),
(87, 'Tuấn Đạt', 'datkute@gmail.com', 'address', '0349820000', 'Việt Nam luôn tuyệt vời&#13;&#10;', 'Đã liên hệ và tư vấn thành công.', 0, '2022-08-06 22:32:04', '2022-08-08 00:25:09'),
(88, 'Lê Duy Đạt', 'dat@gmail.com', 'Travel', '0323232552', 'Rất hữu ích cho chúng tôi khi lựa chọn địa điểm du lịch hè này', NULL, 0, '2022-08-08 00:11:18', '2022-08-08 00:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permission`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Trang chủ', 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53'),
(2, 'pages', 'Chứa các nội dung về page about us, thankful', 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53'),
(3, 'pages', 'Chứa các nội dung về page about us, thankful', 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53'),
(4, 'Gallery', 'Page chứa các ảnh và các link bài viết về các bãi biển', 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53'),
(5, 'Service', 'Chứa các pages về dịch vụ: foods, hotel, travel, people, places', 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53'),
(6, 'Beaches', 'Chứa các link các pages thông tin về bãi biển theo khu vực: Bắc trung nam', 1, '2022-07-20 07:55:06', '2022-07-22 07:55:06'),
(7, 'Blog', 'Chứa các link page các blog về bãi biển theo vùng miền', 1, '2022-05-10 06:20:53', '2022-05-17 06:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `login_token`
--

CREATE TABLE `login_token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `otp_key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0->Chưa xly\r\n1-> Đang xử lý\r\n2-> Đã xly',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avata` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forget_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 -chua kich hoat\r\n1 -hoat dong\r\n2- khoa',
  `last_activity` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone_number`, `address`, `gender`, `avata`, `about_content`, `contact_facebook`, `forget_token`, `group_id`, `status`, `last_activity`, `created_at`, `updated_at`) VALUES
(1, 'NgocMinh', 'ngominh@gmail.com', '', '0349820883', 'Thanh Xuan- Ha noi', 'Male', '/publics/assets/photos/pages/about_us/profile3.jpg', 'Team 03 C2110L Aptech', 'https://facebook/minhngoc', NULL, 1, 1, NULL, '2022-07-09 18:00:03', '2022-08-08 02:04:31'),
(2, 'Đỗ Huy Hoà', 'dohuyhoa.jaekin@gmail.com', '123456', '0356099841', 'Thanh Trì- Hà Nội', 'Male', '/publics/assets/photos/pages/about_us/profile1.jpg', 'Sinh viên năm nhất Aptech Lê Thanh Nghị', 'https://www.facebook.com/JaeKin', 'null', 1, 1, '2022-07-20 16:48:25', '2022-07-18 16:48:25', '2022-08-08 00:54:50'),
(20, 'Hoàng Phúc', 'hoangphuc@gmail.com', '123456', '0904426889', 'Lĩnh Nam - Hà nội', 'Male', '/publics/assets/photos/pages/about_us/profile2.jpg', 'Team 03 C2110L Aptech', 'https://facebook.com/hoangphuc', NULL, 0, 0, NULL, '2022-08-07 22:31:30', '2022-08-08 00:56:58'),
(41, 'Aptech', 'aptech@edu.vn', '123456', '19005634', '54 Lê Thanh Nghị', 'Other', '', 'Trung tâm đào tạo IT', 'https:/facobook.com/aptech-ltn', NULL, 0, 0, NULL, '2022-08-08 03:32:23', '2022-08-08 03:56:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beach`
--
ALTER TABLE `beach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beach_categories_id` (`beach_categories_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `beach_categories`
--
ALTER TABLE `beach_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `beach_image`
--
ALTER TABLE `beach_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beach_id` (`beach_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog_categorires`
--
ALTER TABLE `blog_categorires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login_token`
--
ALTER TABLE `login_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beach`
--
ALTER TABLE `beach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beach_categories`
--
ALTER TABLE `beach_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beach_image`
--
ALTER TABLE `beach_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `blog_categorires`
--
ALTER TABLE `blog_categorires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_token`
--
ALTER TABLE `login_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beach`
--
ALTER TABLE `beach`
  ADD CONSTRAINT `beach_ibfk_1` FOREIGN KEY (`beach_categories_id`) REFERENCES `beach_categories` (`id`),
  ADD CONSTRAINT `beach_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `beach_categories`
--
ALTER TABLE `beach_categories`
  ADD CONSTRAINT `beach_categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `beach_image`
--
ALTER TABLE `beach_image`
  ADD CONSTRAINT `beach_image_ibfk_1` FOREIGN KEY (`beach_id`) REFERENCES `beach` (`id`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `blog_categorires` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_categorires`
--
ALTER TABLE `blog_categorires`
  ADD CONSTRAINT `blog_categorires_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `login_token`
--
ALTER TABLE `login_token`
  ADD CONSTRAINT `login_token_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

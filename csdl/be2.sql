-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 18, 2019 lúc 03:32 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `be2`
--
CREATE DATABASE IF NOT EXISTS `be2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `be2`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantily` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`bill_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `categories_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_id`, `categories_description`, `categories_image`) VALUES
(1, 'Máy tính bảng', 0, '', ''),
(2, 'Điện thoại', 0, '', ''),
(3, 'Apple', 0, '', ''),
(4, 'iphone', 2, '', ''),
(5, 'samsung', 2, '', ''),
(6, 'iphone', 3, '', ''),
(7, 'ipad', 3, '', ''),
(8, 'Laptop', 0, '', ''),
(9, 'Acer', 8, '', ''),
(10, 'Asus', 8, '', ''),
(11, 'Dell', 8, '', ''),
(12, 'HP', 8, '', ''),
(13, 'Lenovo', 8, '', ''),
(14, 'MSI', 8, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`product_id`, `category_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(3, 3),
(4, 2),
(4, 3),
(5, 2),
(5, 3),
(6, 2),
(7, 2),
(15, 1),
(15, 2),
(15, 3),
(16, 1),
(16, 2),
(16, 3),
(17, 4),
(17, 5),
(17, 6),
(17, 7),
(38, 8),
(38, 10),
(39, 8),
(39, 14),
(40, 8),
(40, 14),
(41, 8),
(41, 9),
(42, 8),
(42, 13),
(43, 8),
(43, 10),
(44, 8),
(44, 10),
(45, 8),
(45, 13),
(46, 8),
(46, 9),
(47, 8),
(47, 9),
(48, 8),
(48, 14),
(49, 8),
(49, 11),
(50, 8),
(50, 12),
(51, 8),
(51, 10),
(52, 8),
(52, 9),
(53, 8),
(53, 11),
(54, 8),
(54, 9),
(55, 8),
(55, 11),
(56, 8),
(56, 9),
(57, 8),
(57, 13),
(58, 8),
(58, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `comment_content`, `product_id`) VALUES
(1, '2019-11-22 17:52:16', '2019-11-22 17:52:16', 'thuan oc cho', 1),
(2, '2019-11-22 17:58:32', '2019-11-22 17:58:32', 'tu cho is real', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_21_065948_create_comment_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_promotion_pricre` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_promotion_pricre`) VALUES
(1, 'Máy tính bảng iPad WiFi 32GB New 2018 - Hàng Chính Hãng', '6980000.00', 'Thần thái của tablet cao cấp bên mức giá vừa phải\r\niPad WiFi 32GB New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 'iPadWiFi32GB.jpg', '0.00'),
(2, 'Máy đọc sách Kindle PaperWhite 2018 gen 4 (10th) - Bản 8GB 2019 - Hàng chính hãng', '2887000.00', 'Thiết kế mỏng nhẹ\r\nMáy đọc sách Kindle PaperWhite 2018 gen 4 (10th) - Bản 8 GB - Hàng chính hãng được thiết kế cực kỳ mỏng, nhẹ và màn hình sáng hơn. Trọng lượng của máy là 182 gram và dày 8,18 mm, so với phiên bản trước là 200 gram và 9 mm. Màn hình của Paperwhite vẫn là 6 inch và 300 ppi, được Vergeđánh giá xuất sắc và không có gì để phàn nàn.', 'KindlePaperWhite.jpg', '0.00'),
(3, 'Máy tính bảng iPad Mini 5 Wi-Fi 64GB - Hàng Chính Hãng', '9350000.00', 'Thiết kế mỏng, gọn nhẹ\r\niPad Mini 5 Wi-Fi 64GB được thiết kế tinh tế, sang trọng với vỏ nhôm tạo cảm giác cầm chắc tay. Máy tính bảng có kích thước siêu mỏng với độ dày chỉ 6.1mm và trọng lượng siêu nhẹ khoảng 300g giúp bạn dễ dàng bỏ vào túi xách để mang theo mọi lúc mọi nơi, đáp ứng đủ các nhu cầu cho cuộc sống không ngừng chuyển động của bạn.', 'ipadmini.jpg', '0.00'),
(4, 'Điện Thoại iPhone 7 Plus 32GB - Hàng Chính Hãng', '11990000.00', 'Thiết kế kim loại nguyên khối sang trọng\r\nĐiện Thoại iPhone 7 Plus 32GB - Hàng Chính Hãng FPT với kích thước 158.2 x 77.9 x 7.3 mm mỏng nhẹ và thiết kế tương tự như bộ đôi iPhone 6s/6s Plus, tuy nhiên phần dải nhựa bắt sóng không cắt ngang mặt lưng như phiên bản cũ mà được chuyển sang phần cạnh trên của sản phẩm. Phím Home vật lý trên điện thoại cũng được thay thế bằng phím cảm ứng nhờ vào sự kết hợp Taptic Engine mới và liên kết với 3D Touch tiện lợi và đẹp mắt.', 'iphone7plus.jpg', '0.00'),
(5, 'Điện Thoại iPhone X 64GB VN/A - Hàng Chính Hãng', '20190000.00', 'Thiết kế lạ mắt không nút Home cứng\r\nĐiện Thoại iPhone X 64GB là chiếc điện thoại hoàn toàn mới của Apple vừa mới ra mắt tuần vừa qua. Trên cơ bản, iPhone X vẫn có những tính năng như những dòng iPhone khác nhưng thiết kế bên ngoài lạ mắt hơn, không trang bị nút Home cứng, viền kim loại sang trọng và đặc biệt là cụm camera sau được trang bị theo chiều dọc tạo điểm nhấn cho chiếc điện thoại.', 'iphonex.jpg', '0.00'),
(6, 'Điện Thoại Samsung Galaxy A70 (128GB/6GB) - Hàng Chính Hãng', '7189000.00', 'Điện Thoại Samsung Galaxy A70 (128GB/6GB) - Hàng Chính Hãng (Đã Kích Hoạt) Bảo Hành 12 Tháng sản phẩm vẫn được làm bằng chất liệu nhựa giả thủy tinh nhưng là nhựa cao cấp với tên gọi 3D Graffitistic, mang đến sự cứng cáp và chắc chắn khi cầm nắm.\r\n\r\nBên cạnh đó, màu sắc trên lưng máy được trang bị thêm hiệu ứng lấp lánh nên khi nhìn theo góc nghiêng sẽ rất đẹp mắt. Đáng tiếc là A70 vẫn bị bám mồ hôi và dấu vân tay. Ngoài ra, viền bezel của máy cũng được làm rất mỏng, so với các máy thuộc dòng Galaxy A thì A70 là mỏng nhất.', 'SamsungGalaxyA70.jpg', '0.00'),
(7, 'Điện thoại Samsung Galaxy M10 Ram 2GB 16GB - Hàng chính hãng', '2580000.00', 'Màn hình: PLS TFT LCD, 6.2\", HD+ • Hệ điều hành: Android 8.1 (Oreo) • Camera sau: Chính 13 MP & Phụ 5 MP • Camera trước: 5 MP • CPU: Exynos 7870 8 nhân 64-bit • RAM: 2 GB • Bộ nhớ trong: 16 GB • Thẻ nhớ: MicroSD • Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ) • Dung lượng pin: 3400 mAh', 'SamsungGalaxyM10.png', '0.00'),
(38, 'Laptop ASUS ZenBook 13 UX333FA-A4011T (13.3\" FHD/i5-8265U/8GB/256GB SSD/UHD 620/Win10/1.2 kg)', '22990000.00', 'Tên sản phẩm: Máy tính xách tay/ Laptop Asus Zenbook UX333FA-A4011T (I5-8265U) (Xanh)\r\n\r\n- CPU: Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 13.3\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 8GB Onboard LPDDR3\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 3 cell 50 Wh Pin liền , khối lượng: 1.2 kg', 'Asus_Zenbook_UX333_RoyalBlue_NoNumpad_6.jpg', '22490000.00'),
(39, 'Laptop MSI GL65 9SDK-054VN (15\" FHD/i5-9300H/8GB/512GB SSD/GTX 1660Ti/Win10/2.3 kg)', '29490000.00', '- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 64GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1660Ti 6GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 6 cell 51 Wh Pin liền, Khối lượng: 2.3 kg', 'MSI_GL65_1.jpg', '29090000.00'),
(40, 'Laptop MSI Prestige PS42 Modern 8M-288VN (14\" FHD/i5-8250U/8GB/UHD 620/Win10/1.2 kg)', '21960000.00', '- CPU: Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 14\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 620 / Shared memory\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 50 Wh Pin liền , khối lượng: 1.2 kg', 'msi ps42_8m_1.jpg', '21060000.00'),
(41, 'Laptop Acer Nitro 5 AN515-54-51X1 (NH.Q5ASV.011) (15\" FHD/i5-9300H/8GB/256GB SSD/GTX 1050/Win10/2.3 kg)\r\n', '19790000.00', '- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2400MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1050 3GB\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 55 Wh Pin liền, Khối lượng: 2.3 kg', 'Acer_Nitro_5_AN515-54_2019_2.jpg', '19290000.00'),
(42, 'Laptop Lenovo Ideapad L340-15IRH (81LK007JVN) (15\" FHD/i7-9750H/8GB/1TB HDD/GTX 1050/Free DOS/2.2 kg)', '19990000.00', '- CPU: Intel Core i7 9750H ( 2.6 GHz - 4.5 GHz / 12MB / 6 nhân, 12 luồng )\r\n- Màn hình: 15.6\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050 3GB GDDR5\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 3 cell 45 Wh Pin liền , khối lượng: 2.2 kg', 'lenovo ideapad l340-15irh_2.jpg', '19290000.00'),
(43, 'Laptop ASUS TUF Gaming FX505DT-AL003T (15\" FHD/R7-3750H/8GB/512GB SSD/GTX 1650/Win10/2.2 kg)', '21490000.00', '- CPU: AMD Ryzen 7 3750H ( 2.3 GHz - 4.0 GHz / 4MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: AMD Radeon Vega 10 Graphics / NVIDIA GeForce GTX 1650 4GB GDDR5\r\n- Lưu trữ: 512GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 3 cell 48 Wh Pin liền , khối lượng: 2.2 kg', 'asus tuf gaming fx505dd-dt_1.jpg', '21090000.00'),
(44, 'Laptop ASUS ROG Zephyrus S GX531GM-ES004T (15.6\" FHD/i7-8750H/16GB/512GB SSD/GTX 1060/Win10/2.1 kg)', '54990000.00', '- CPU: Intel Core i7-8750H ( 2.2 GHz - 4.1 GHz / 9MB / 6 nhân, 12 luồng )\r\n- Màn hình: 15.6\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 16GB (8GB + 8GB Onboard) DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1060 6GB GDDR5\r\n- Lưu trữ: 512GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 50 Wh Pin liền , khối lượng: 2.1 kg', 'Asus_ROG_Zephyrus_GX531GM_1.jpg', '54910000.00'),
(45, 'Laptop Lenovo Legion Y740-15IRHG (81UH003JVN) (15\" FHD/i7-9750H/16GB/1TB SSD/RTX 2060/Win10/2.2 kg)\r\n', '50000000.00', '- CPU: Intel Core i7-9750H (2.6 GHz - 4.5 GHz/12MB/6 nhân, 12 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 2 x 8GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce RTX 2060 6GB\r\n- Lưu trữ: 1TB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 3 cell 57 Wh Pin rời, Khối lượng: 2.2 kg', 'Lenovo_Legion_Y740_1.jpg', '49000000.00'),
(46, 'Laptop Acer Predator Triton 500 PT515-51-73AA (NH.Q50SV.004) (15\" FHD/i7-9750H/16GB/256GB SSD/RTX 2060/Win10/2.1 kg)\r\n', '49990000.00', '- CPU: Intel Core i7-9750H (2.6 GHz - 4.5 GHz/12MB/6 nhân, 12 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 16GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce RTX 2060 6GB\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 84 Wh Pin liền, Khối lượng: 2.1 kg', 'Laptop_Acer_Predator_Triton_500_1.jpg', '49490000.00'),
(47, 'Laptop Acer Nitro 7 AN715-51-750K (NH.Q5HSV.003) (15\" FHD/i7-9750H/8GB/256GB SSD/GTX 1660Ti/Win10/2.4 kg)\r\n', '34990000.00', '- CPU: Intel Core i7-9750H (2.6 GHz - 4.5 GHz/12MB/6 nhân, 12 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2400MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1660Ti 6GB\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 55 Wh Pin liền, Khối lượng: 2.4 kg', 'Acer_Nitro_7_AN715-51_2019_1.jpg', '34490000.00'),
(48, 'Laptop MSI GS65 Stealth 9SD-1409VN (15\" FHD/i5-9300H/8GB/512GB SSD/GTX 1660Ti/Win10/1.9 kg)\r\n', '36490000.00', '- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 64GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1660Ti 6GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 82 WhKhối lượng: 1.9 kg', 'MSI_Stealth_GS65_2019_3.jpg', '36090000.00'),
(49, 'Laptop Dell G5 5590-4F4Y41 (15\" FHD/i7-9750H/8GB/256GB SSD/GTX 1650/Win10/2.7 kg)\r\n', '34990000.00', '- CPU: Intel Core i7 9750H (2.6 GHz - 4.5 GHz/12MB/6 nhân, 12 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 2 x 4GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1650 4GB\r\n- Lưu trữ: 256GB SSD M.2 NVMe / 1TB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 60 Wh Pin liền, Khối lượng: 2.7 kg', 'Dell_Inspiron_G5_5590_Black_3.jpg', '34490000.00'),
(50, 'Laptop HP Pavilion Gaming 15-cx0177TX (5EF40PA) (15.6\" FHD/i5-8300H/8GB/1TB HDD/GTX 1050/Win10/2.2 kg)\r\n', '25790000.00', '- CPU: Intel Core i5-8300H ( 2.3 GHz - 4.0 GHz / 8MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050 4GB GDDR5\r\n- Lưu trữ: 128GB SSD M.2 NVMe / 1TB HDD 7200RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 3 cell 52 Wh Pin liền , khối lượng: 2.2 kg', 'hp gaming pavilion - 15-cx0xxxtx_2.jpg', '25190000.00'),
(51, 'Laptop ASUS ROG Strix G G531GD-AL025T (15\" FHD/i5-9300H/8GB/512GB SSD/GTX 1050/Win10/2.4 kg)\r\n', '22990000.00', '- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1050 4GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 48 Wh Pin liền, Khối lượng: 2.4 kg', 'Asus_ROG_Strix_G531GD-GT_2.jpg', '22490000.00'),
(52, 'Laptop Acer Aspire 5 A515-54-54EU (NX.HN3SV.002) (15\" FHD/i5-10210U/8GB/512GB SSD/UHD 620/Win10/1.7 kg)\r\n', '15990000.00', '- CPU: Intel Core i5-10210U (1.6 GHz - 4.2 GHz/6MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2133MHz (1 Khe cắm, Hỗ trợ tối đa 16GB)\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 48 WhKhối lượng: 1.7 kg\r\n', 'Acer_Aspire_A515-54_Silver_2019_3.jpg', '15590000.00'),
(53, 'Laptop Acer Aspire 3 A315-42-R8PX (NX.HF9SV.00A) (15\" FHD/R3-3200U/8GB/256GB SSD/Radeon Vega 3/Win10/1.7 kg)\r\n', '10990000.00', '- CPU: AMD Ryzen 3 3200U (2.6 GHz - 3.5 GHz/4MB/2 nhân, 4 luồng)\r\n- Màn hình: 15.6\" (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2133MHz (2 Khe cắm, Hỗ trợ tối đa 16GB)\r\n- Đồ họa: AMD Radeon Vega 3 Graphics\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 2 cell 37 WhKhối lượng: 1.7 kg', 'Acer_Aspire_A315-54_2019_2.jpg', '10490000.00'),
(54, 'Laptop Acer Aspire 3 A315-54K-32SD (NX.HFXSV.001) (15\" FHD/i3-7020U/4GB/256GB SSD/HD 620/Win10/1.7 kg)\r\n', '9990000.00', '- CPU: Intel Core i3-7020U (2.3 GHz/3MB/2 nhân, 4 luồng)\r\n- Màn hình: 15.6\" (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 4GB Onboard DDR4 2133MHz (1 Khe cắm, Hỗ trợ tối đa 8GB)\r\n- Đồ họa: Intel HD Graphics 620\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 2 cell 37 WhKhối lượng: 1.7 kg', 'Acer_Aspire_3_A315-54-54K_Red_1.jpg', '9490000.00'),
(55, 'Laptop Dell Inspiron 3567-N3567U (15\" FHD/i3-7020U/4GB/1TB HDD/HD 620/Ubuntu/2.3 kg)', '9490000.00', '- CPU: Intel Core i3-7020U ( 2.3 GHz / 3MB / 2 nhân, 4 luồng )\r\n- Màn hình: 15.6\" TN ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2400MHz\r\n- Đồ họa: Intel HD Graphics 620 / Shared memory\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Ubuntu\r\n- Pin: 4 cell Pin rời , khối lượng: 2.3 kg', 'dell inspiron 3567_2.jpg', '9090000.00'),
(56, 'Laptop Acer Swift 3 SF314-57G-53T1 (NX.HJESV.001) (14\" FHD/i5-1035G1/8GB/512GB SSD/MX250/Win10/1.2kg)\r\n', '19990000.00', '- CPU: Intel Core i5-1035G1 (1.0 GHz - 3.6 GHz/6MB/4 nhân, 8 luồng)\r\n- Màn hình: 14\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 8GB Onboard LPDDR4 2666MHz , Không nâng cấp được)\r\n- Đồ họa: Intel UHD Graphics/ NVIDIA GeForce MX250 2GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 3 cell 48 Wh Pin liền, Khối lượng: 1.2 kg', 'Acer_Swift_3_SF314-57G_Gray_3.jpg', '19490000.00'),
(57, 'Laptop Lenovo ThinkPad E590 (20NBS07000) (15\" HD/i5-8265U/4GB/1TB HDD/UHD 620/Free DOS/2.1 kg)\r\n', '16990000.00', '- CPU: Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" IPS ( 1366 x 768 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2400MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 3 cell 45 Wh Pin rời , khối lượng: 2.1 kg', 'lenovo thinkpad e590_1.jpg', '16490000.00'),
(58, 'Laptop Lenovo ThinkPad L380 (20M5S01500) (13.3\" FHD/i5-8250U/4GB/UHD 620/Free DOS/1.5 kg)\r\n', '19490000.00', '- CPU: Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 13.3\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2400MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 256GB SSD M.2 SATA\r\n- Hệ điều hành: Free DOS\r\n- Pin: 3 cell 45 Wh Pin liền , khối lượng: 1.5 kg', 'thinkpad-l380-20m5s01500-i5-8250u-bac-1-v.jpg', '19090000.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'tan', 'tan@gmail.com', NULL, '$2y$10$ylaYQJjBJEm6WiUz9Ny6nuXu7qVF7SbS0MBNIoCIhJ9TanYuupPIG', NULL, '2019-11-22 17:47:48', '2019-11-22 17:47:48', 1),
(2, 'thuan', 'thuan@gmail.com', NULL, '$2y$10$g6WuFwBdMR.ezrr.YJxa.OB8QWbDIToJsgSe0zcGeJCPA2lHjH1HS', NULL, '2019-11-29 12:17:07', '2019-11-29 12:17:07', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

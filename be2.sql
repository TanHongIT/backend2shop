-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2019 at 10:02 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_id`) VALUES
(1, 'Máy tính bảng', 0),
(2, 'Điện thoại', 0),
(3, 'Apple', 0),
(4, '7in', 1),
(5, '10in', 1),
(6, 'Phổ thông', 2),
(7, 'Smartphone', 2),
(8, 'Màn hình trắng đen', 6),
(9, 'Màn hình màu', 6);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
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
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Máy tính bảng iPad WiFi 32GB New 2018 - Hàng Chính Hãng', '6980000.00', 'Thần thái của tablet cao cấp bên mức giá vừa phải\r\niPad WiFi 32GB New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 'iPadWiFi32GB.jpg'),
(2, 'Máy đọc sách Kindle PaperWhite 2018 gen 4 (10th) - Bản 8GB 2019 - Hàng chính hãng', '2887000.00', 'Thiết kế mỏng nhẹ\r\nMáy đọc sách Kindle PaperWhite 2018 gen 4 (10th) - Bản 8 GB - Hàng chính hãng được thiết kế cực kỳ mỏng, nhẹ và màn hình sáng hơn. Trọng lượng của máy là 182 gram và dày 8,18 mm, so với phiên bản trước là 200 gram và 9 mm. Màn hình của Paperwhite vẫn là 6 inch và 300 ppi, được Vergeđánh giá xuất sắc và không có gì để phàn nàn.', 'KindlePaperWhite.jpg'),
(3, 'Máy tính bảng iPad Mini 5 Wi-Fi 64GB - Hàng Chính Hãng', '9350000.00', 'Thiết kế mỏng, gọn nhẹ\r\niPad Mini 5 Wi-Fi 64GB được thiết kế tinh tế, sang trọng với vỏ nhôm tạo cảm giác cầm chắc tay. Máy tính bảng có kích thước siêu mỏng với độ dày chỉ 6.1mm và trọng lượng siêu nhẹ khoảng 300g giúp bạn dễ dàng bỏ vào túi xách để mang theo mọi lúc mọi nơi, đáp ứng đủ các nhu cầu cho cuộc sống không ngừng chuyển động của bạn.', 'ipadmini.jpg'),
(4, 'Điện Thoại iPhone 7 Plus 32GB - Hàng Chính Hãng', '11990000.00', 'Thiết kế kim loại nguyên khối sang trọng\r\nĐiện Thoại iPhone 7 Plus 32GB - Hàng Chính Hãng FPT với kích thước 158.2 x 77.9 x 7.3 mm mỏng nhẹ và thiết kế tương tự như bộ đôi iPhone 6s/6s Plus, tuy nhiên phần dải nhựa bắt sóng không cắt ngang mặt lưng như phiên bản cũ mà được chuyển sang phần cạnh trên của sản phẩm. Phím Home vật lý trên điện thoại cũng được thay thế bằng phím cảm ứng nhờ vào sự kết hợp Taptic Engine mới và liên kết với 3D Touch tiện lợi và đẹp mắt.', 'iphone7plus.jpg'),
(5, 'Điện Thoại iPhone X 64GB VN/A - Hàng Chính Hãng', '20190000.00', 'Thiết kế lạ mắt không nút Home cứng\r\nĐiện Thoại iPhone X 64GB là chiếc điện thoại hoàn toàn mới của Apple vừa mới ra mắt tuần vừa qua. Trên cơ bản, iPhone X vẫn có những tính năng như những dòng iPhone khác nhưng thiết kế bên ngoài lạ mắt hơn, không trang bị nút Home cứng, viền kim loại sang trọng và đặc biệt là cụm camera sau được trang bị theo chiều dọc tạo điểm nhấn cho chiếc điện thoại.', 'iphonex.jpg'),
(6, 'Điện Thoại Samsung Galaxy A70 (128GB/6GB) - Hàng Chính Hãng', '7189000.00', 'Điện Thoại Samsung Galaxy A70 (128GB/6GB) - Hàng Chính Hãng (Đã Kích Hoạt) Bảo Hành 12 Tháng sản phẩm vẫn được làm bằng chất liệu nhựa giả thủy tinh nhưng là nhựa cao cấp với tên gọi 3D Graffitistic, mang đến sự cứng cáp và chắc chắn khi cầm nắm.\r\n\r\nBên cạnh đó, màu sắc trên lưng máy được trang bị thêm hiệu ứng lấp lánh nên khi nhìn theo góc nghiêng sẽ rất đẹp mắt. Đáng tiếc là A70 vẫn bị bám mồ hôi và dấu vân tay. Ngoài ra, viền bezel của máy cũng được làm rất mỏng, so với các máy thuộc dòng Galaxy A thì A70 là mỏng nhất.', 'SamsungGalaxyA70.jpg'),
(7, 'Điện thoại Samsung Galaxy M10 Ram 2GB 16GB - Hàng chính hãng', '2580000.00', 'Màn hình: PLS TFT LCD, 6.2\", HD+ • Hệ điều hành: Android 8.1 (Oreo) • Camera sau: Chính 13 MP & Phụ 5 MP • Camera trước: 5 MP • CPU: Exynos 7870 8 nhân 64-bit • RAM: 2 GB • Bộ nhớ trong: 16 GB • Thẻ nhớ: MicroSD • Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ) • Dung lượng pin: 3400 mAh', 'SamsungGalaxyM10.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

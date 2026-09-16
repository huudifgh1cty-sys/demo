-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 11, 2019 lúc 01:21 PM
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
-- Cơ sở dữ liệu: `banhang1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `fullname`, `date`) VALUES
(34, 'huynhhuudi', '2019-12-10 07:58:35'),
(35, 'huynhhuudi', '2019-12-10 09:17:10'),
(36, 'huynhhuudi', '2019-12-11 11:00:41'),
(37, 'huynhhuudi', '2019-12-11 11:50:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

DROP TABLE IF EXISTS `cart_detail`;
CREATE TABLE IF NOT EXISTS `cart_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_id` (`cart_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `cart_id`, `product_id`, `quantity`, `price`) VALUES
(50, 34, 41, 1, 1000),
(51, 35, 41, 1, 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_email` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_pass` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_contact` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_address` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `customer_address`) VALUES
(5, 'huudi', 'nguyenchenhfgh1@gmail.com', '123456789', '4147319142', '148 Browning Lane'),
(6, 'huudi', 'huynhhuudi', '123456789', '4147319142', '148 Browning Lane'),
(7, 'huudi', 'nguyenchenhfgh1@gmail.com', '123456789', '4147319142', '148 Browning Lane'),
(8, 'huudi', 'nguyenchenhfgh2@gmail.com', '123456789', '4147319142', '1527 Chicago Avenue'),
(9, 'huudi', 'nguyenchenhfgh2@gmail.com', '123456789', '4147319142', '1527 Chicago Avenue');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hieu`
--

DROP TABLE IF EXISTS `hieu`;
CREATE TABLE IF NOT EXISTS `hieu` (
  `hieu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenhieu` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`hieu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hieu`
--

INSERT INTO `hieu` (`hieu_id`, `tenhieu`) VALUES
(3, 'Apple'),
(4, 'Samsung'),
(5, 'Oppo'),
(6, 'Nokia'),
(7, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `loai_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`loai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`loai_id`, `tenloai`) VALUES
(12, 'Ipads'),
(14, 'Laptop'),
(15, 'Mobiles'),
(16, 'Camera'),
(17, 'Touchpad'),
(18, 'Smartphone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_keywords` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(41, 15, 3, 'iPhone 11 Pro Max 256GB', 39900000000, 'apple', 'iphone11.png', 'Dien thoai'),
(42, 12, 3, 'iPhone 11 Pro 256GB', 30000000000, 'Apple', 'iPhone11_Pro.jpg', 'Apple'),
(43, 18, 3, 'iPhone 11 256GB', 249000000000, 'Apple', 'iPhone11_Green3500.jpg', 'Apple iPhone'),
(44, 18, 3, 'iPhone XS 256GB', 299000000000, 'Apple', 'iPhone-XS-Max_Vang3523.jpg', 'Apple'),
(45, 18, 4, 'Samsung Galaxy Note 10+', 269000000000, 'Samsung Galaxy Note 10+ 512GB', 'Galaxy-Note10--N975.jpg', 'Samsung'),
(46, 18, 4, 'Samsung Galaxy S10+', 249000000000, 'Samsung Galaxy S10+ 512GB', 'Galaxys10plus_white.jpg', 'Samsung'),
(47, 18, 4, 'SAMSUNG GALAXY A80', 11490000000, '<span style=\"font-family: UTMCafeta, Arial, sans-serif; text-transform: uppercase; white-space: nowrap; background-color: rgb(255, 255, 255);\">SAMSUNG GALAXY A80</span>', 'Galaxy-A80.jpg', 'SAMSUNG GALAXY A80'),
(48, 18, 4, 'SAMSUNG GALAXY FOLD', 50000000000, '<span style=\"font-family: UTMCafeta, Arial, sans-serif; text-transform: uppercase; white-space: nowrap; background-color: rgb(255, 255, 255);\">SAMSUNG GALAXY FOLD</span>', 'Galaxy_Fold_ProductImage_CosmosBlack_Front115.jpg', 'SAMSUNG GALAXY FOLD'),
(49, 18, 5, 'OPPO Reno 10x Zoom Edition', 16900000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">OPPO Reno 10x Zoom Edition</font></h1>', 'oppo-reno-10x-zoom-edition-black-400x460.png', 'OPPO Reno 10x Zoom Edition'),
(50, 18, 5, 'OPPO Reno2', 14900000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">OPPO Reno2</font></h1>', 'oppo-reno2-black-mtp1-400x460.png', 'OPPO Reno2'),
(51, 18, 5, 'OPPO Reno', 9490000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">OPPO Reno</font></h1>', 'oppo-reno-pink-400x460.png', 'OPPO Reno'),
(52, 18, 5, 'OPPO A9', 6490000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">OPPO A9</font></h1>', 'oppoa9.png', 'OPPO A9'),
(53, 18, 6, 'Nokia 7.2', 5590000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; float: left; overflow: hidden;\"><font size=\"3\">Nokia 7.2</font></h1>', 'nokia-72-black-400x460.png', 'Nokia 7.2'),
(54, 18, 6, 'Nokia 8.1', 6590000000, 'Nokia 8.1', 'nokia-81-blue-18thangbh-400x460.png', 'Nokia 8.1'),
(55, 18, 6, 'Nokia 6.1 Plus', 3900000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">Nokia 6.1 Plus</font></h1>', 'nokia-61-plus-3-400x460.png', 'Nokia 6.1 Plus'),
(56, 18, 6, 'Nokia 5.1 Plus', 3200000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">Nokia 5.1 Plus</font></h1>', 'nokia-51-plus-black-400x460.png', 'Nokia 5.1 Plus'),
(57, 18, 7, 'Xiaomi Mi Note 10 Pro', 14900000000, 'Xiaomi Mi Note 10', 'xiaomi-mi-note-10-white-400x460-400x460.png', 'Xiaomi Mi Note 10'),
(58, 18, 7, 'Xiaomi Mi 9T', 7900000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">Xiaomi Mi 9T</font></h1>', 'xiaomi-mi-9t-red-400x460.png', 'Xiaomi Mi 9T'),
(59, 18, 7, 'Redmi Note 7', 4400000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">Redmi Note 7</font></h1>', 'xiaomi-redmi-note-7-400x460.png', 'Redmi Note 7'),
(60, 18, 7, 'Redmi Note 8 Pro', 5790000000, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; line-height: 40px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; overflow: hidden;\"><font size=\"3\">Redmi Note 8 Pro</font></h1>', 'xiaomi-redmi-note-8-pro-white-1-400x460.png', 'Redmi Note 8 Pro');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_date`) VALUES
(1, 'admin', 'admin!123', '2015-03-05 16:09:53');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

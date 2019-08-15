-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 14 日 12:02
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `click`
--

-- --------------------------------------------------------

--
-- 資料表結構 `brands`
--

CREATE TABLE `brands` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `brands`
--

INSERT INTO `brands` (`sid`, `name`) VALUES
(1, 'canon'),
(2, 'nikon'),
(3, 'leica');

-- --------------------------------------------------------

--
-- 資料表結構 `brands_lens_map`
--

CREATE TABLE `brands_lens_map` (
  `sid` int(11) NOT NULL,
  `brands_sid` int(11) NOT NULL,
  `lens_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `brands_lens_map`
--

INSERT INTO `brands_lens_map` (`sid`, `brands_sid`, `lens_sid`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 2, 15),
(16, 2, 16),
(17, 2, 17),
(18, 2, 18),
(19, 2, 19),
(20, 2, 20),
(21, 2, 21),
(22, 2, 22),
(23, 2, 23),
(24, 2, 24),
(25, 2, 25),
(26, 2, 26),
(27, 2, 27),
(28, 2, 28),
(29, 2, 29),
(30, 2, 30),
(31, 1, 31),
(32, 1, 32),
(33, 1, 33),
(34, 1, 34),
(35, 1, 35),
(36, 1, 36),
(37, 1, 37),
(38, 1, 38),
(39, 1, 39),
(40, 1, 40),
(41, 1, 41),
(42, 1, 42),
(43, 1, 43),
(44, 1, 44),
(45, 1, 45),
(46, 1, 46),
(47, 1, 47),
(48, 1, 48),
(49, 1, 49),
(50, 1, 50),
(51, 1, 51),
(52, 1, 52),
(53, 1, 53),
(54, 1, 54),
(55, 1, 55),
(56, 1, 56),
(57, 1, 57),
(58, 1, 58),
(59, 1, 59),
(60, 1, 60),
(61, 3, 61),
(62, 3, 62),
(63, 3, 63),
(64, 3, 64),
(65, 3, 65),
(66, 3, 66),
(67, 3, 67),
(68, 3, 68),
(69, 3, 69),
(70, 3, 70),
(71, 3, 71),
(72, 3, 72),
(73, 3, 73),
(74, 3, 74),
(75, 3, 75);

-- --------------------------------------------------------

--
-- 資料表結構 `brands_products_map`
--

CREATE TABLE `brands_products_map` (
  `sid` int(11) NOT NULL,
  `brands_sid` int(11) NOT NULL,
  `products_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `brands_products_map`
--

INSERT INTO `brands_products_map` (`sid`, `brands_sid`, `products_sid`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 6, 1),
(5, 7, 2),
(6, 8, 3),
(7, 9, 1),
(8, 11, 2),
(9, 12, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `categories`
--

CREATE TABLE `categories` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `parent_sid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `categories`
--

INSERT INTO `categories` (`sid`, `name`, `parent_sid`) VALUES
(1, '單眼', 0),
(2, '鏡頭', 0),
(3, '配件', 0),
(4, '全片幅', 1),
(5, '微單眼', 1),
(6, '數位攝影機', 1),
(7, '記憶卡', 3),
(8, '腳架', 3),
(10, '閃光燈', 3),
(11, '遠攝變焦', 2),
(12, '遠攝及超遠攝定焦', 2),
(13, '超廣角變焦', 2),
(14, '超廣角及廣角定焦', 2),
(15, '標準變焦', 2),
(16, '微距鏡頭', 2),
(17, '遠攝變焦', 2),
(18, '遠攝及超遠攝定焦', 2),
(19, '超廣角變焦', 2),
(20, '超廣角及廣角定焦', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `collection`
--

CREATE TABLE `collection` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `p_products_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `lens`
--

CREATE TABLE `lens` (
  `sid` int(11) NOT NULL COMMENT '編號',
  `廠牌` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '廠牌',
  `model` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '型號',
  `分類` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '分類',
  `對應最大片幅` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '對應最大片幅',
  `焦距` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '焦距',
  `光圈` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '光圈',
  `視角` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '視角',
  `鏡片組` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '鏡片組',
  `光圈葉片數` int(255) DEFAULT NULL COMMENT '光圈葉片數',
  `最小光圈` int(255) DEFAULT NULL COMMENT '最小光圈',
  `最近對焦距離` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '最近對焦距離',
  `放大倍率` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '放大倍率',
  `對焦系統` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '對焦系統',
  `變焦系統` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '變焦系統',
  `濾光鏡尺寸` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '濾光鏡尺寸',
  `直徑 x 鏡長` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '直徑 x 鏡長',
  `重量` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '重量',
  `price` int(255) NOT NULL COMMENT '價錢',
  `imges` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `lens`
--

INSERT INTO `lens` (`sid`, `廠牌`, `model`, `分類`, `對應最大片幅`, `焦距`, `光圈`, `視角`, `鏡片組`, `光圈葉片數`, `最小光圈`, `最近對焦距離`, `放大倍率`, `對焦系統`, `變焦系統`, `濾光鏡尺寸`, `直徑 x 鏡長`, `重量`, `price`, `imges`) VALUES
(1, 'Nikon\r\n', 'Nikon AF-S NIKKOR 200-500mm f/5.6E ED VR\r\n', '遠攝變焦鏡頭\r\n', '35mm 全片幅\r\n', '200 - 500 mm\r\n', '恒定光圈 f/5.6\r\n', '5° - 12°20\'（對角）\r\n', '12 組 19 片，3 片 ED 超低色散鏡片\r\n', 9, 32, '2.2 米\r\n', ' 0.22x (1:4.5)\r\n', 'SWM 內對焦\r\n', '轉鏡\r\n', '95 mm\r\n', '108 x 267.5 mm\r\n', '2300 克\r\n', 43920, 'LN_01'),
(2, 'Nikon\r\n', 'Nikon 1 NIKKOR VR 70-300mm f/4.5-5.6\r\n', '遠攝變焦鏡頭\r\n', NULL, '70 - 300 mm\r\n', 'f/4.5 - f/5.6\r\n', '3° - 13°（對角）\r\n', '10 組 16 片，包含 1 片超級 ED 鏡片\r\n', 7, 16, ' 1.0 米\r\n', '0.15x (1:6.7)\r\n', 'STM (Silent Stepping Motor)\r\n', '轉鏡\r\n', '62mm\r\n', '73 x 108 mm\r\n', '550 克\r\n', 29400, 'LN_02'),
(3, 'Nikon', 'Nikon 1 NIKKOR VR 10-100mm f/4.5-5.6 PD-ZOOM', '遠攝變焦鏡頭', NULL, '10 - 100 mm', ' f/4.5 - f/5.6', '9°10’ - 77°（對角）', '12 組 14 片，包括 3 片 ED 鏡片、2 片非球面鏡片及 1 片高折射率 HRI 鏡片', 7, 16, '0.3m (wide) - 0. 米', '0.12x (1:8.3)', 'STM (Silent Stepping Motor)', '電動轉鏡', '72 mm', '77 x 95 mm', '530 克', 21900, 'LN_03'),
(4, 'Nikon', 'Nikon AF-S VR Zoom-Nikkor 70-300mm f/4.5-5.6G IF-ED', '遠攝變焦鏡頭', NULL, '70 - 300 mm', 'f/4.5 - f/5.6', '8° 10\' - 34° 20\'（對角）', '12 組 17 片， 2 塊 ED 鏡片', 9, 40, '1.5 米', '(1:4.8)', 'SWM IF', '轉鏡', '67 mm', '80 x 143.5 mm', '725 克', 20700, 'LN_04'),
(5, 'Nikon', 'Nikon AF-S DX VR Zoom-Nikkor 55-200mm f/4-5.6G IF-ED', '遠攝變焦鏡頭', NULL, '55 - 200 mm', 'f/4 - f/5.6', '8° - 28°50\'（對角）', '15 片 11 組，1 片 ED 玻璃鏡', 7, 22, '1.1 米', '(1:4.4)', 'SWM 內對焦', '轉鏡', '52 mm', '73 x 99.5 mm', '335 克', 8100, 'LN_05'),
(6, 'Nikon\r\n', 'Nikon AF-S Nikkor 300mm f/4D IF-ED\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 300 mm\r\n', '恒定光圈 f/4\r\n', '8°10\'（對角）\r\n', '6 組 10 片，2 塊 ED 鏡片\r\n', 9, 32, '1.45 米\r\n', '(1:3.7)\r\n', 'SWM IF\r\n', NULL, '77 mm\r\n', '\r\n90×222.5 mm', '1440 克\r\n', 36250, 'LN_06'),
(7, 'Nikon\r\n', 'Nikon AF DC-Nikkor 135mm f/2D\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 135 mm\r\n', '恒定光圈 f/2\r\n', '18°（對角）\r\n', '6 組 7 片\r\n', 9, 16, '1.1 米\r\n', '(1:7.1)\r\n', NULL, NULL, '72 mm\r\n', '79x120 mm\r\n', '815 克\r\n', 29800, 'LN_07'),
(8, 'Nikon\r\n', 'Nikon AF-S Nikkor 500mm f/4G ED VR\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 500 mm\r\n', '恒定光圈 f/4.0\r\n', '5°（對角）\r\n', '11 組 14 片，3 片超低色散鏡片，1 層納米結晶塗層，1 個球面保護鏡片元件\r\n', 9, 22, '4.0 米\r\n', '( 1:6.9)\r\n', 'SWM 內對焦\r\n', NULL, '52 mm\r\n', '139.5 x 391 mm\r\n', '3880 克\r\n', 282700, 'LN_08'),
(9, 'Nikon\r\n', 'Nikon AF Nikkor 180mm f/2.8D IF-ED\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 180 mm\r\n', '恒定光圈 f/2.8\r\n', '13°40’（對角）\r\n', ' 6 組 8 片，1 塊 ED 鏡片\r\n', 9, 22, '1.5 米\r\n', '( 1:6.6)\r\n', 'IF\r\n', NULL, '72 mm\r\n', '78.5x144 mm\r\n', '760 克\r\n', 30500, 'LN_09'),
(10, 'Nikon\r\n', 'Nikon AF-S NIKKOR 200mm f/2G ED VR II\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 200 mm\r\n', '恒定光圈 f/2.0\r\n', '12°20\' （對角）\r\n', '9 組 13 片，3 片 ED，1 片 Super ED\r\n', 9, 22, '1.9 米\r\n', '0.12x (1:8.3)\r\n', 'SWM 內對焦\r\n', NULL, '52 mm\r\n', '124 x 204 mm\r\n', '2930 克\r\n', 183900, 'LN_10'),
(11, 'Nikon\r\n', 'Nikon AF-S Fisheye NIKKOR 8-15mm f/3.5-4.5E ED\r\n', '超廣角變焦鏡頭\r\n', NULL, '8 - 15 mm\r\n', 'f/3.5 - f/4.5\r\n', '175° - 180°（對角）\r\n', '13 組 15 片，3 片 ED 鏡片，2 片非球面鏡\r\n', 7, 29, '0.16 米\r\n', '0.34x (1:2.9)\r\n', 'SWM 內對焦\r\n', '轉鏡\r\n', NULL, '77.5 x 83 mm\r\n', '485 克\r\n', 42300, 'LN_11'),
(12, 'Nikon\r\n', 'Nikon AF-P DX NIKKOR 10-20mm F/4.5-5.6G VR\r\n', '超廣角變焦鏡頭\r\n', NULL, '10 - 20 mm\r\n', 'f/4 - f/5.6\r\n', '70° - 109°（對角）\r\n', '11 組 14 片，3 片非球面鏡\r\n', 7, 29, '0.22 米\r\n', '0.17x (1:5.9)\r\n', 'SWM 內對焦\r\n', '轉鏡\r\n', '72 mm\r\n', '77 x 73 mm\r\n', '230 克\r\n', 10700, 'LN_12'),
(13, 'Nikon\r\n', 'Nikon 1 NIKKOR VR 6.7-13mm f/3.5-5.6\r\n', '超廣角變焦鏡頭\r\n', NULL, '6.7 - 13 mm\r\n', 'f/3.6 - f/5.6\r\n', '63° - 100° （對角）\r\n', '7 組 11 片，3 片非球面鏡片，3 片 ED 鏡片\r\n', 7, 16, '0.25 米\r\n', '0.06x (1:16.7)\r\n', '內對焦\r\n', '轉鏡\r\n', '52 mm\r\n', '56.5 x 46 mm\r\n', '125 克\r\n', 16800, 'LN_13'),
(14, 'Nikon\r\n', 'Nikon AF-S NIKKOR 16-35mm f/4G ED VR\r\n', '超廣角變焦鏡頭\r\n', NULL, '16 - 35 mm\r\n', '恒定光圈 f/4\r\n', '63° - 107°（對角）\r\n', '12 組 17 片（包括：3 片非球面鏡、2 片 ED 低色散鏡片）\r\n', 9, 22, '0.28 米\r\n', '0.24X (1:4.2)\r\n', '內對焦\r\n', '轉鏡\r\n', '77 mm\r\n', '82.5 x 125 mm\r\n', '680 克\r\n', 43200, 'LN_14'),
(15, 'Nikon\r\n', 'Nikon AF-S NIKKOR 14-24mm f/2.8G ED\r\n', '超廣角變焦鏡頭\r\n', NULL, '14 - 24 mm\r\n', '恒定光圈 f/2.8\r\n', '84° - 114°（對角）\r\n', '11 組 14 片，2 片超低色散鏡片，3 片非球面鏡 ，1 層納米結晶塗層\r\n', 8, 22, '0.28 米\r\n', '( 1:6.7)\r\n', 'SWM 內對焦\r\n', '轉鏡\r\n', NULL, ' 98 x 131.5 mm\r\n', '1000 克\r\n', 68050, 'LN_15'),
(16, 'Nikon\r\n', 'Nikon NIKKOR Z 35mm f/1.8 S\r\n', '超廣角及廣角定焦鏡頭\r\n', '35mm 全片幅\r\n', '定焦 35 mm\r\n', '恒定光圈 f/1.8\r\n', '63°（對角）\r\n', '9 組 11 片（包括：2 片 ED 低色散鏡片及 3 片非球面鏡片）\r\n', 9, 16, '0.25 米\r\n', '0.19X (1:5.3)\r\n', '內對焦\r\n', NULL, '62 mm\r\n', '73.0 x 86.0 mm\r\n', '370 克\r\n', 28700, 'LN_16'),
(17, 'Nikon\r\n', 'Nikon AF-S Nikkor 20mm f/1.8G ED\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 20 mm\r\n', '恒定光圈 f/1.8\r\n', '94°（對角）\r\n', '11 組 13 片，2 片 ED 以，2 片 AS 非球面鏡片\r\n', 7, 16, '0.2 米\r\n', '0.23x (1:4.3)\r\n', 'SWM 內對焦\r\n', NULL, '77 mm\r\n', '82.5 x 80.5 mm\r\n', '355 克\r\n', 28000, 'LN_17'),
(18, 'Nikon\r\n', 'Nikon 1 NIKKOR 10mm f/2.8\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 10 mm\r\n', '恒定光圈 f/2.8\r\n', '77°（對角）\r\n', '5 組 6 片，包括兩片非球面鏡\r\n', 7, 11, '0.2 米\r\n', '0.06x (1:16.7)\r\n', 'STM (Silent Stepping Motor)\r\n', NULL, '40.5 mm\r\n', '55.5 x 22 mm\r\n', '77 克\r\n', 7500, 'LN_18'),
(19, 'Nikon\r\n', 'Nikon AF Nikkor 20mm f/2.8D\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 20 mm', '恒定光圈 f/2.8\r\n', '94°（對角）\r\n', '9 組 12 片\r\n', 7, 22, '0.25 米\r\n', '(1:8.3)\r\n', NULL, NULL, '62 mm\r\n', '69 x 42.5 mm\r\n', '270 克\r\n', 17500, 'LN_19'),
(20, 'Nikon\r\n', 'Nikon AF DX Fisheye-Nikkor 10.5mm f/2.8G ED\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 10.5 mm\r\n', '恒定光圈 f/2.8\r\n', '180°（對角）\r\n', '7 組 10 片，1 塊 ED 鏡片\r\n', 7, 22, '0.14 米\r\n', '( 1:5)\r\n', NULL, NULL, NULL, '63×62.5 mm\r\n', '305 克\r\n', 23600, 'LN_20'),
(21, 'Nikon\r\n', 'Nikon AF-S NIKKOR 24-70mm f/2.8E ED VR\r\n', '標準變焦鏡頭\r\n', '35mm 全片幅\r\n', '24 - 70 mm\r\n', '恒定光圈 f/2.8\r\n', '34°20’ - 84°（對角）\r\n', '16 組 20 片，1 片非球面 ED 超低色散鏡片，3 片非球面鏡，2 片 ED 超低色散鏡片\r\n', 9, 22, '0.38 米\r\n', '0.27x (1:3.7)\r\n', 'SWM 內對焦\r\n', '轉鏡\r\n', '82 mm\r\n', '88 x 154.5 mm\r\n', '1070 克\r\n', 72000, 'LN_21'),
(22, 'Nikon\r\n', 'Nikon 1 Nikkor VR 10-30mm f/3.5-5.6 PD-ZOOM\r\n', '標準變焦鏡頭\r\n', NULL, '10 - 30 mm\r\n', 'f/3.5 - f/5.6\r\n', '29°40’ - 77°（對角）\r\n', '7 組 9 片，包括 4 片非球面鏡片、1 片 ED 鏡片\r\n', 7, 16, '0.2 米\r\n', '0.2x (1:5)\r\n', 'STM (Silent Stepping Motor)\r\n', '電動\r\n', '不支援 mm\r\n', '58 x 28 mm\r\n', '85 克\r\n', 10500, 'LN_22'),
(23, 'Nikon\r\n', 'Nikon AF-S NIKKOR 24-120mm F4 G ED VR\r\n', '標準變焦鏡頭\r\n', NULL, '24 - 120 mm\r\n', '恒定光圈 f/4\r\n', '20° 20\' - 84°（對角）\r\n', '13 組 17 片，2 片 ED 鏡片及 3 片非球面鏡片\r\n', 9, 22, '0.45 米\r\n', '0.24x (1:4.2)\r\n', 'SWM 寧靜波動馬達\r\n', '轉鏡\r\n', '77 mm\r\n', '84 x 103.5 mm\r\n', '710 克\r\n', 39500, 'LN_23'),
(24, 'Nikon\r\n', 'Nikon AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR\r\n', '標準變焦鏡頭\r\n', NULL, '18 - 55 mm\r\n', 'f/3.5 - f/5.6\r\n', '28°50\' - 76°（對角）\r\n', '8 組 11 片，一片為非球面鏡\r\n', 7, 22, '0.28 米\r\n', '0.31x (1:3.2)\r\n', 'SWM\r\n', '轉鏡\r\n', '52 mm\r\n', '73 x 79.5 mm\r\n', ' 265 克\r\n', 5200, 'LN_24'),
(25, 'Nikon\r\n', 'Nikon AF-S DX Zoom-Nikkor 17-55mm f/2.8G IF-ED\r\n', '標準變焦鏡頭\r\n', NULL, '17 - 55 mm\r\n', '恒定光圈 f/2.8\r\n', '28°50\' - 79°（對角）\r\n', '10 組 14 片，3 塊 ED 鏡片，3 塊非球面鏡片\r\n', 9, 22, '0.36 米\r\n', '( 1:5)\r\n', 'SWM IF\r\n', '轉鏡\r\n', '77 mm\r\n', '85.5×110.5 mm\r\n', '755 克\r\n', 45500, 'LN_25'),
(26, 'Nikon\r\n', 'Nikon AF-S DX Micro NIKKOR 40mm f/2.8G\r\n', '微距鏡頭\r\n', NULL, '定焦 40 mm\r\n', '恒定光圈 f/2.8\r\n', '38° 50\'（對角）\r\n', '7 組 9 片\r\n', 7, 22, '0.16 米\r\n', '( 1:1)\r\n', 'SWM\r\n', NULL, '52 mm\r\n', '68.5 x 64.5 mm\r\n', '235 克\r\n', 9100, 'LN_26'),
(27, 'Nikon\r\n', 'Nikon AF-S VR Micro-Nikkor 105mm f/2.8G IF-ED\r\n', '微距鏡頭\r\n', NULL, '定焦 105 mm\r\n', '恒定光圈 f/2.8\r\n', '23° 20\'（對角）\r\n', '12 組 14 片，一片 ED 鏡片，一片納米結晶塗層鏡片\r\n', 9, 32, '0.31 米\r\n', '( 1:1)\r\n', 'SWM IF\r\n', NULL, '62 mm\r\n', '83 x 116 mm\r\n', '790 克\r\n', 27900, 'LN_27'),
(28, 'Nikon\r\n', 'Nikon AF-S Micro NIKKOR 60mm f/2.8G ED\r\n', '微距鏡頭\r\n', NULL, '定焦 60 mm\r\n', '恒定光圈 f/2.8\r\n', '39°40’（對角）\r\n', '9 組 12 片 (1 片 ED 鏡片, 2 片非球面鏡, 1 片納米結晶塗膜)\r\n', 9, 32, '0.185 米\r\n', '( 1:1)\r\n', 'SWM 對焦馬達\r\n', NULL, '62 mm\r\n', '73 x 89 mm mm\r\n', '425 克\r\n', 21100, 'LN_28'),
(29, 'Nikon\r\n', 'Nikon AF Micro-Nikkor 60mm f/2.8D\r\n', '微距鏡頭\r\n', NULL, '定焦 60 mm\r\n', '恒定光圈 f/2.8\r\n', '39°40\'（對角）\r\n', '7 組 8 片\r\n', 7, 32, '0.22 米\r\n', '( 1:1)\r\n', NULL, NULL, '62 mm\r\n', '70×74.5 mm\r\n', '440 克\r\n', 12800, 'LN_29'),
(30, 'Nikon\r\n', 'Nikon AF Micro-Nikkor 200mm f/4D IF-ED\r\n', '微距鏡頭\r\n', NULL, '定焦 200 mm\r\n', '恒定光圈 f/4\r\n', '12°20\'（對角）\r\n', '8 組 13 片，2 塊 ED 鏡片\r\n', 9, 32, '0.5 米\r\n', '( 1:1)\r\n', NULL, NULL, '62 mm\r\n', '76x193 mm\r\n', '1190 克\r\n', 41600, 'LN_30'),
(31, 'Canon\r\n', 'Canon EF 70-300 F4-5.6 IS II USM\r\n', '遠攝變焦鏡頭\r\n', NULL, '70 - 300 mm\r\n', 'f/4 - f/5.6\r\n', '8° 15\' - 34°（對角）\r\n', '12 組 17 片\r\n', 9, 32, '1.2 米\r\n', '0.25 (1:4)\r\n', 'nano USM 超聲波馬達\r\n', '轉鏡\r\n', '67 mm\r\n', '145.5 x 80 mm\r\n', '710 克\r\n', 16350, 'LC_01'),
(32, 'Canon\r\n', 'Canon EF 70-300mm f/4.0-5.6 L IS USM\r\n', '遠攝變焦鏡頭\r\n', NULL, '70 - 300 mm\r\n', 'f/4 - f/5.6\r\n', '34° - 8? 15\'（對角）\r\n', '14 組 19 片（包括：2 片 UD 鏡片）\r\n', 8, 32, '1.2 米\r\n', '0.21x (1:4.8)\r\n', 'USM 內對焦\r\n', '轉鏡\r\n', '67 mm\r\n', '89 x 143 mm\r\n', '1050 克\r\n', 44000, 'LC_02'),
(33, 'Canon\r\n', 'Canon EF 70-200mm f/2.8L IS II USM\r\n', '遠攝變焦鏡頭\r\n', NULL, '70 - 200 mm\r\n', '恒定光圈 f/2.8\r\n', '12° - 34°（對角）\r\n', '19 組 23 片（包括：5 片 UD 鏡片、1 片螢石鏡片）\r\n', 8, 32, '1.2 米\r\n', '0.21x (1:4.8)\r\n', 'USM 內對焦\r\n', '轉鏡\r\n', '77 mm\r\n', '88.8 x 199 mm\r\n', '1490 克\r\n', 71150, 'LC_03'),
(34, 'Canon\r\n', 'Canon EF-S 55-250mm F4-5.6 IS\r\n', '遠攝變焦鏡頭\r\n', NULL, '55 - 250 mm\r\n', 'f/4.0 - f/5.6\r\n', '6° 15\' - 27° 50\' （對角）\r\n', '10 組 12枚，設有一杖 UD 鏡片\r\n', 7, 22, '1.1 米\r\n', '0.31x (1:3.2)\r\n', 'DC 馬達\r\n', '轉鏡\r\n', '58 mm\r\n', '71 x 108 mm\r\n', '390 克\r\n', 8300, 'LC_04'),
(35, 'Canon\r\n', 'Canon EF 70-200mm f4.0L USM\r\n', '遠攝變焦鏡頭\r\n', NULL, '70 - 200 mm\r\n', '恒定光圈 f/4\r\n', '12° - 34°（對角）\r\n', '16 組 13 片，1 片螢石，2 片 Super UD 鏡片\r\n', 8, 32, '1.2 米\r\n', '0.21x (1:4.8)\r\n', 'USM 內對焦系統\r\n', '轉鏡\r\n', '67 mm\r\n', '172 x 76 mm\r\n', '705 克\r\n', 22000, 'LC_05'),
(36, 'Canon\r\n', 'Canon EF 300mm f/2.8 L IS II USM\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 300 mm\r\n', '恒定光圈 f/2.8\r\n', '8°15\'（對角）\r\n', '12 組 16 片，2 片螢石鏡片\r\n', 9, 32, '2 米\r\n', '0.18x (1:5.6)\r\n', 'USM 內對焦\r\n', NULL, '52 mm\r\n', '128 x 248 mm\r\n', '2350 克\r\n', 202000, 'LC_06'),
(37, 'Canon\r\n', 'Canon EF 300mm f4L IS USM\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 300 mm\r\n', '恒定光圈 f/4\r\n', '8°15\'（對角）\r\n', '11 組 15 片，2 塊 UD 超低色散鏡片\r\n', 8, 32, '1.5 米\r\n', '0.24 (1:4.2)\r\n', 'Ring USM 內對焦 (超聲波馬達)\r\n', NULL, '77 mm\r\n', '221 x 90 mm\r\n', '1190 克\r\n', 44700, 'LC_07'),
(38, 'Canon\r\n', 'Canon EF 200mm f2.8L II USM\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 200 mm\r\n', '恒定光圈 f/2.8\r\n', '12°（對角）\r\n', '7 組 9 片，2 片 UD 鏡片\r\n', 8, 32, '1.5 米\r\n', '0.16 (1:6.3)\r\n', 'Ring USM 後對焦系統 (超聲波馬達)\r\n', NULL, '72 mm\r\n', '136.2 x 83.2 mm\r\n', ' 765 克\r\n', 24800, 'LC_08'),
(39, 'Canon\r\n', 'Canon EF 135mm f2.0L USM\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 135 mm\r\n', '恒定光圈 f/2.0\r\n', '18°（對角）\r\n', '8 組 10 片\r\n', 8, 32, '0.9 米\r\n', '0.19 (1:5.3)\r\n', 'Ring USM 後對焦系統 (超聲波馬達)\r\n', NULL, '72 mm\r\n', '112 x 82.5 mm\r\n', '750 克\r\n', 33100, 'LC_09'),
(40, 'Canon\r\n', 'Canon EF 500mm f/4L IS II USM\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 500 mm\r\n', '恒定光圈 f/4\r\n', '5°（對角）\r\n', '12 組 16 片，2 片螢石\r\n', 9, 32, '3.7 米\r\n', '0.15x (1:6.7)\r\n', 'USM 內對焦\r\n', NULL, '後置式 52 mm\r\n', '146 x 383 mm\r\n', '3190 克\r\n', 291100, 'LC_10'),
(41, 'Canon\r\n', 'Canon EF 11-24mm f/4L USM\r\n', '超廣角變焦鏡頭\r\n', NULL, '11 - 24 mm\r\n', '恒定光圈 f/4\r\n', '84°00\' - 126°05\'（對角）\r\n', '11 組 16 片設計，1 片 Super UD，1 片 UD 及 4 片非球面鏡\r\n', 9, 22, '0.28 米\r\n', '0.16x (1:6.3)\r\n', 'USM 內對焦\r\n', '轉鏡\r\n', NULL, '108.0 × 132.0 mm\r\n', '1180 克\r\n', 94000, 'LC_11'),
(42, 'Canon\r\n', 'Canon EF 16-35mm F4L IS USM\r\n', '超廣角變焦鏡頭\r\n', NULL, '16 - 35 mm\r\n', '恒定光圈 f/4\r\n', '63° - 108°10\' （對角）\r\n', '12 組 16 片的，3 片非球面，2 片 UD\r\n', 9, 22, '0.28 米\r\n', '0.23x (1:4.3)\r\n', 'USM 內對焦\r\n', '轉鏡\r\n', '77 mm\r\n', '82.6 x 112.8 mm\r\n', '615 克\r\n', 33500, 'LC_12'),
(43, 'Canon\r\n', 'Canon EF-M 11-22mm f/4-5.6 IS STM\r\n', '超廣角變焦鏡頭\r\n', 'APS-C 片幅\r\n', '11 - 22 mm\r\n', 'f/4 - f/5.6\r\n', '63°30 - 102°10\'（對角）\r\n', '9 組 12 片， 1 片 UD 超低色散，2 片非球面鏡片\r\n', 7, 22, '0.15 米\r\n', '0.3x (1:3.3)\r\n', 'STM 內對焦\r\n', '轉鏡\r\n', '55 mm\r\n', '60.9 x 58.2 mm\r\n', '220 克\r\n', 12000, 'LC_13'),
(44, 'Canon\r\n', 'Canon EF 17-40mm f/4.0L USM\r\n', '超廣角變焦鏡頭\r\n', '35mm 全片幅\r\n', '17 - 40 mm\r\n', '恒定光圈 f/4\r\n', '57° 30\' - 104°（對角）\r\n', '9 組 12 片\r\n', 7, 22, '0.28 米\r\n', '0.24 (1:4.2)\r\n', 'USM 內對焦系統\r\n', '轉鏡\r\n', '77 mm\r\n', '96.8 x 83.5 mm\r\n', '475 克\r\n', 25100, 'LC_14'),
(45, 'Canon\r\n', 'Canon EF-S 10-22mm f/3.5-4.5 USM\r\n', '超廣角變焦鏡頭\r\n', NULL, '10 - 22 mm\r\n', 'f/3.5 - f/4.5\r\n', '63° 30\' - 107° 30\'（對角）\r\n', '10 組 13 片，3 片非球面，1 片 Super UD\r\n', 6, 22, '0.24 米\r\n', '0.17x (1:5.9)\r\n', 'USM 內對焦系統\r\n', '轉鏡\r\n', '77 mm\r\n', '89.8 x 83.5 mm\r\n', '385 克\r\n', 20000, 'LC_15'),
(46, 'Canon\r\n', 'Canon EF 35mm f/1.4L II USM\r\n', '超廣角及廣角定焦鏡頭\r\n', '35mm 全片幅\r\n', '定焦 35 mm\r\n', '恒定光圈 f/4\r\n', '63°（對角）\r\n', '11 組 14 片，1 片 BR 鏡片，1 片 UD 鏡片，2 片非球面鏡片\r\n', 9, 22, '0.28 米\r\n', '0.21x (1:4.8)\r\n', 'USM 內對焦\r\n', NULL, '72 mm\r\n', '105.5 x 80.4 mm\r\n', '760 克\r\n', 58300, 'LC_16'),
(47, 'Canon\r\n', 'Canon EF 35mm f/2 IS USM\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 35 mm\r\n', '恒定光圈 f/2\r\n', '63°（對角）\r\n', '8 組 10 片，1 片高精度玻璃鑄模 (GMo) 非球面鏡\r\n', 8, 22, '0.24 米\r\n', '0.24x (1:4.2)\r\n', 'USM 內對焦\r\n', NULL, '67 mm\r\n', '77.9 x 62.6 mm\r\n', '335 克\r\n', 20700, 'LC_17'),
(48, 'Canon\r\n', 'Canon EF-M 22mm f/2.0 STM\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 22 mm\r\n', '恒定光圈 f/2.0\r\n', '63°30‘（對角）\r\n', ' 6 組 7 片，1 片非球面鏡片\r\n', 7, 22, '0.15 米\r\n', '0.21x (1:4.8)\r\n', 'STM 對焦\r\n', NULL, '43 mm\r\n', '60.9 × 23.7 mm mm\r\n', '105 克\r\n', 7500, 'LC_18'),
(49, 'Canon\r\n', 'Canon EF 14mm f/2.8L II USM\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 14 mm\r\n', '恒定光圈 f/2.8\r\n', '114°（對角）\r\n', '11 組 14 片，2 片非球面鏡，2 片UD 超色散鏡\r\n', 6, 22, '0.2 米\r\n', '0.15 (1:6.7)\r\n', 'USM 內對焦\r\n', NULL, NULL, '94 x 80 mm\r\n', '645 克\r\n', 69500, 'LC_19'),
(50, 'Canon\r\n', 'Canon EF 28mm f/1.8 USM\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 28 mm\r\n', '恒定光圈 f/1.8\r\n', '75°（對角）\r\n', '10 組 9 片\r\n', 7, 22, '0.25 米\r\n', '0.18x (1:5.6)\r\n', 'USM 後對焦系統\r\n', NULL, '58 mm\r\n', '55.6 x 73.6 mm\r\n', '310 克\r\n', 17500, 'LC_20'),
(51, 'Canon\r\n', 'Canon RF 28-70mm f/2L USM\r\n', '標準變焦鏡頭\r\n', '35mm 全片幅\r\n', '28 - 70 mm\r\n', '恒定光圈 f/2\r\n', '34° - 75°（對角）\r\n', '13 組 19 片（包括：4 片非球面鏡片、1 片 Super UD 鏡片及 2 片 UD 鏡片）\r\n', 9, 22, '0.39 米\r\n', '0.18X (1:5.6)\r\n', '環型 USM 內對焦\r\n', '轉鏡\r\n', '95 mm\r\n', '104 x 140 mm\r\n', '1430 克\r\n', 98700, 'LC_21'),
(52, 'Canon\r\n', 'Canon EF 24-70mm f2.8L II USM\r\n', '標準變焦鏡頭\r\n', NULL, '24 - 70 mm\r\n', '恒定光圈 f/2.8\r\n', '34° - 84°（對角）\r\n', '13 組 18 片，3 片非球面、1 片超級 UD 及 2 片 UD 鏡片\r\n', 9, 22, '0.38 米\r\n', '0.21x (1:4.8)\r\n', 'USM 內對焦\r\n', '轉鏡\r\n', '82 mm\r\n', '88.5 x 113 mm\r\n', '805 克\r\n', 63100, 'LC_22'),
(53, 'Canon\r\n', ' Canon EF 28-300mm f3.5-5.6L IS USM\r\n', '標準變焦鏡頭\r\n', NULL, '28 - 300 mm\r\n', ' f/3.5 - f/5.6\r\n', ' 8° 15\' - 75°（對角）\r\n', ' 16 組 22 片\r\n', NULL, 22, '0.7 米\r\n', '0.3x (1:3.3)\r\n', ' USM 內對焦\r\n', '推鏡\r\n', '77 mm\r\n', '92 x 184 mm\r\n', '1670 克\r\n', 78000, 'LC_23'),
(54, 'Canon\r\n', 'Canon EF 24-105mm f/3.5-5.6 IS STM\r\n', '標準變焦鏡頭\r\n', NULL, '24 - 105 mm\r\n', 'f/3.5 - f/5.6\r\n', '23° 20\' - 84°（對角）\r\n', '13 組 17 片， 1 片 UD 鏡片，2 片非球面鏡片\r\n', 7, 22, '0.4 米\r\n', '0.3x (1:3.3)\r\n', 'STM 馬達\r\n', '轉鏡\r\n', '77 mm\r\n', '104 x 83.4 mm\r\n', '525 克\r\n', 16300, 'LC_24'),
(55, 'Canon\r\n', 'Canon EF 24-70mm f/4L IS USM\r\n', '標準變焦鏡頭\r\n', '35mm 全片幅\r\n', ' 24 - 70 mm\r\n', ' 恒定光圈 f/4\r\n', ' 34° - 84° （對角）\r\n', '12 組15片，1 片高精度玻璃鑄模(GMo)，一片複製(Replica)非球面，2 片 UD 超低色散鏡片\r\n', 9, 22, ' 0.2 米\r\n', ' 0.7x (1:1.4)\r\n', ' USM 內對焦\r\n', '轉鏡\r\n', '77 mm\r\n', '83.4 x 93 mm\r\n', '600 克\r\n', 39100, 'LC_25'),
(56, 'Canon\r\n', 'Canon EF 100mm f/2.8L Macro IS USM\r\n', '微距鏡頭\r\n', NULL, ' 定焦 100 mm\r\n', '恒定光圈 f/2.8\r\n', '19.8?（對角）\r\n', '12 組 15 片，1 片 UD\r\n', 9, 32, '0.3 米\r\n', '1x\r\n', 'USM 內對焦\r\n', NULL, '67 mm\r\n', '77.7 x 123 mm mm\r\n', '625 克\r\n', 28700, 'LC_26'),
(57, 'Canon\r\n', 'Canon EF 180mm f/3.5L Macro USM\r\n', '微距鏡頭\r\n', NULL, ' 定焦 180 mm\r\n', '恒定光圈 f/3.5\r\n', '13°40\'（對角）\r\n', '14 組 12 片，3 塊UD 超低色散鏡片\r\n', 8, 32, '0.48 米\r\n', '1', '內對焦系統 USM\r\n', NULL, ' 72 mm\r\n', '186.6 x 82.5 mm\r\n', '1090 克\r\n', 46300, 'LC_27'),
(58, 'Canon\r\n', ' Canon EF-M 28mm f/3.5 Macro IS STM\r\n', '微距鏡頭\r\n', NULL, ' 定焦 28 mm\r\n', ' 恒定光圈 f/3.5\r\n', '51°55′（對角）\r\n', '10 組 11 片，1 片 UD， 2 片非球面鏡\r\n', 7, 22, '0.093 米\r\n', '1.2x (1:0.8)\r\n', 'STM\r\n', NULL, '43 mm\r\n', '60.9 x 45.5 mm\r\n', '130 克\r\n', 9900, 'LC_28'),
(59, 'Canon\r\n', 'Canon EF 100mm f2.8 Macro USM\r\n', '微距鏡頭\r\n', '35mm 全片幅\r\n', ' 定焦 100 mm\r\n', '恒定光圈 f/2.8\r\n', '24°（對角）\r\n', '8 組 12 片\r\n', 8, 32, ' 0.31 米\r\n', '1', 'Ring USM 內對焦系統 (超聲波馬達)\r\n', NULL, '58 mm\r\n', '119 x 79 mm\r\n', '600 克\r\n', 20300, 'LC_29'),
(60, 'Canon\r\n', ' Canon EF-S 60mm f2.8 Macro USM\r\n', '微距鏡頭\r\n', 'APS-C 片幅\r\n', ' 定焦 60 mm\r\n', '恒定光圈 f/2.8\r\n', '24°30\'（對角）\r\n', '8 組 12 片\r\n', 8, NULL, '0.2 米\r\n', '1\r\n', 'Ring USM 內對焦 (超聲波馬達)\r\n', '\r\n', '\r\n52 mm', '73 x 69.8 mm', '335 克\r\n', 16000, 'LC_30'),
(61, 'Leica\r\n', 'LEICA APO-VARIO-ELMAR-T 55-135mm f/3.5-4.5 ASPH.\r\n', '遠攝變焦鏡頭\r\n', NULL, '55 - 135 mm\r\n', 'f/3.5 - f/4.5\r\n', '12° - 28°（對角）\r\n', '10 組 12 片，1 片非球面\r\n', NULL, 16, '1 米\r\n', NULL, '內對焦\r\n', '轉鏡\r\n', '60 mm\r\n', '110 x 68 mm\r\n', '500 克\r\n', 68000, 'LL_01'),
(62, 'Leica\r\n', 'LEICA APO Tele Elmar-S 180/3.5 (CS)\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 180 mm\r\n', '恒定光圈 f/3.5\r\n', '17°（對角）\r\n', '7 組 9 片\r\n', NULL, 22, '1.5 米\r\n', '( 1:7)\r\n', '內對焦\r\n', NULL, '72 mm\r\n', '88 x 151 mm\r\n', '1300 克\r\n', 260550, 'LL_02'),
(63, 'Leica\r\n', 'LEICA APO-TELYT-M 135 mm f/3.4\r\n', '遠攝及超遠攝定焦鏡頭\r\n', NULL, '定焦 135 mm\r\n', '恒定光圈 f/3.4\r\n', '18°（對角）\r\n', '4 組 5 片\r\n', NULL, 22, '1.5 米\r\n', '( 1:9)\r\n', NULL, NULL, '49 mm\r\n', '104.7 x 58.5 mm\r\n', '450 克\r\n', 125000, 'LL_03'),
(64, 'Leica\r\n', 'Leica Super-Vario-Elmar-SL 16–35/3.5–4.5 ASPH.\r\n', '超廣角變焦鏡頭\r\n', NULL, '16 - 35 mm\r\n', 'f/3.5 - f/4.5\r\n', '63° - 107° （對角）\r\n', '12 組 18 片，2 片非球面鏡，3 片低色散鏡片\r\n', 8, 22, '0.25 米\r\n', '( 1:3.7)\r\n', '內對焦\r\n', '轉鏡\r\n', '82 mm\r\n', '88 x 123 mm\r\n', '990 克\r\n', 179800, 'LL_04'),
(65, 'Leica\r\n', 'LEICA SUPER-VARIO-ELMAR-T 11-23mm f/3.5-4.5 ASPH.\r\n', '超廣角變焦鏡頭\r\n', NULL, '11 - 23 mm\r\n', 'f/3.5 - f/4.5\r\n', '65° - 103°（對角）\r\n', '11 組 14 片，4 片非球面\r\n', NULL, 16, '0.2 米\r\n', NULL, '內對焦\r\n', '轉鏡\r\n', '67 mm\r\n', '77 x 73 mm\r\n', '386 克\r\n', 60750, 'LL_05'),
(66, 'Leica\r\n', 'LEICA TRI-ELMAR-M 16-18-21 mm f/4 ASPH\r\n', '超廣角變焦鏡頭\r\n', NULL, '16 - 21 mm\r\n', '恒定光圈 f/4\r\n', '92° - 107°（對角）\r\n', '7 組 10 片\r\n', NULL, 22, '0.5 米\r\n', '1:30\r\n', NULL, '轉鏡\r\n', '67 mm\r\n', '62 x 54 mm\r\n', '335 克\r\n', 220100, 'LL_06'),
(67, 'Leica\r\n', 'Leica Super-Elmar-M 21mm f/3.4 ASPH\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 21 mm\r\n', '恒定光圈 f/3.4\r\n', '91°（對角）\r\n', '7 組 8 片，2 面非球面\r\n', NULL, 16, '0.7 米\r\n', '0.03 (1:33.3)\r\n', '手動\r\n', NULL, '46 mm\r\n', '43 x 55 mm\r\n', '279 克\r\n', 104300, 'LL_07'),
(68, 'Leica\r\n', 'LEICA SUMMICRON-M 35 mm f/2 ASPH\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 35 mm\r\n', '恒定光圈 f/2\r\n', '63°（對角）\r\n', '5 組 7 片\r\n', NULL, 16, '0.7 米\r\n', '1:17.5\r\n', NULL, NULL, '39 mm\r\n', '34.5 x 53 mm\r\n', '255 克\r\n', 80000, 'LL_08'),
(69, 'Leica\r\n', 'LEICA ELMARIT-M 28 mm f/2.8 ASPH\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 28 mm\r\n', '恒定光圈 f/2.8\r\n', '75°（對角）\r\n', '6 組 8 片\r\n', NULL, 22, '0.7 米\r\n', '1:22\r\n', NULL, NULL, '39 mm\r\n', '30 x 52 mm\r\n', '180 克\r\n', 56800, 'LL_09'),
(70, 'Leica\r\n', 'LEICA SUMMILUX-M 21 mm f/1.4 ASPH\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 21 mm\r\n', '恒定光圈 f/1.4\r\n', '92˚（對角）\r\n', '8 組 10 片，2 片非球面鏡，7 片低色散鏡片\r\n', NULL, 16, '0.7 米\r\n', '1：29\r\n', NULL, NULL, '82 mm\r\n', '70 x 77 mm\r\n', '580 克\r\n', 178000, 'LL_10'),
(71, 'Leica\r\n', 'LEICA ELMAR-M 24mm f/3.8 ASPH\r\n', '超廣角及廣角定焦鏡頭\r\n', NULL, '定焦 24 mm\r\n', '恒定光圈 f/3.8\r\n', '84˚（對角）\r\n', '6 组 8 片，2 片非球面、1 片高折射鏡片\r\n', NULL, 16, '0.7 米\r\n', '1：26\r\n', NULL, NULL, '46 mm\r\n', '53 × 53.5 mm\r\n', '360 克\r\n', 51100, 'LL_11'),
(72, 'Leica\r\n', 'LEICA VARIO-ELMAR-T 18-56mm f/3.5-5.6 ASPH.\r\n', '標準變焦鏡頭\r\n', NULL, '18 - 56 mm\r\n', 'f/3.5 - f/5.6\r\n', '28° - 75°（對角）\r\n', '7 組 10 片，4 片非球面\r\n', NULL, 16, '0.3 米\r\n', '1:7.5\r\n', '內對焦\r\n', '轉鏡\r\n', '52 mm\r\n', '60 x 63 mm\r\n', '256 克\r\n', 55200, 'LL_12'),
(73, 'Leica\r\n', 'Leica APO-Macro-Elmarit-TL 60mm F2.8 ASPH\r\n', '微距鏡頭\r\n', 'APS-C 片幅\r\n', '定焦 60 mm\r\n', '恒定光圈 f/2.8\r\n', '24°30\'（對角）\r\n', '9 組 10 片，4 片非球面鏡片\r\n', NULL, 32, '0.16 米\r\n', '1x\r\n', '內對焦\r\n', NULL, '60 mm\r\n', '68 x 89 mm\r\n', '320 克\r\n', 50000, 'LL_13'),
(74, 'Leica\r\n', 'LEICA APO Macro Summarit-S 120/2.5 (CS)\r\n', '微距鏡頭\r\n', NULL, '定焦 120 mm\r\n', '恒定光圈 f/2.5\r\n', '25°（對角）\r\n', '7 組 9 片\r\n', NULL, 22, '0.57 米\r\n', '\"1:2\r\n\"\r\n', NULL, NULL, '72 mm\r\n', '91 x 128 mm\r\n', '1285 克\r\n', 11800, 'LL_14'),
(75, 'Leica\r\n', 'LEICA MACRO-ELMAR-M 90 mm f/4\r\n', '微距鏡頭\r\n', NULL, '定焦 90 mm\r\n', '恒定光圈 f/4\r\n', '27°（對角）\r\n', '4 組 4 片\r\n', NULL, 22, '0.77 米\r\n', '1:6.7\r\n', NULL, NULL, '39 mm\r\n', '59 x 52 mm\r\n', '240 克\r\n', 74000, 'LL_15');

-- --------------------------------------------------------

--
-- 資料表結構 `lens_categories_map`
--

CREATE TABLE `lens_categories_map` (
  `sid` int(11) NOT NULL,
  `lens_sid` int(11) NOT NULL,
  `categories_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `lens_categories_map`
--

INSERT INTO `lens_categories_map` (`sid`, `lens_sid`, `categories_sid`) VALUES
(1, 1, 2),
(2, 1, 11),
(3, 2, 2),
(4, 2, 11),
(5, 3, 2),
(6, 3, 11),
(7, 4, 2),
(8, 4, 11),
(9, 5, 2),
(10, 5, 11),
(11, 6, 2),
(12, 6, 12),
(13, 7, 2),
(14, 7, 12),
(15, 8, 2),
(16, 8, 12),
(17, 9, 2),
(18, 9, 12),
(19, 10, 2),
(20, 10, 12),
(21, 11, 2),
(22, 11, 13),
(23, 12, 2),
(24, 12, 13),
(25, 13, 2),
(26, 13, 13),
(27, 14, 2),
(28, 14, 13),
(29, 15, 2),
(30, 15, 13),
(31, 16, 2),
(32, 16, 14),
(33, 17, 2),
(34, 17, 14),
(35, 18, 2),
(36, 18, 14),
(37, 19, 2),
(38, 19, 14),
(39, 20, 2),
(40, 20, 14),
(41, 21, 2),
(42, 21, 15),
(43, 22, 2),
(44, 22, 15),
(45, 23, 2),
(46, 23, 15),
(47, 24, 2),
(48, 24, 15),
(49, 25, 2),
(50, 25, 15),
(51, 26, 2),
(52, 26, 16),
(53, 27, 2),
(54, 27, 16),
(55, 28, 2),
(56, 28, 16),
(57, 29, 2),
(58, 29, 16),
(59, 30, 2),
(60, 30, 16),
(61, 31, 2),
(62, 31, 11),
(63, 32, 2),
(64, 32, 11),
(65, 33, 2),
(66, 33, 11),
(67, 34, 2),
(68, 34, 11),
(69, 35, 2),
(70, 35, 11),
(71, 36, 2),
(72, 36, 12),
(73, 37, 2),
(74, 37, 12),
(75, 0, 0),
(76, 1, 2),
(77, 1, 11),
(78, 2, 2),
(79, 2, 11),
(80, 3, 2),
(81, 3, 11),
(82, 4, 2),
(83, 4, 11),
(84, 5, 2),
(85, 5, 11),
(86, 6, 2),
(87, 6, 12),
(88, 7, 2),
(89, 7, 12),
(90, 8, 2),
(91, 8, 12),
(92, 9, 2),
(93, 9, 12),
(94, 10, 2),
(95, 10, 12),
(96, 11, 2),
(97, 11, 13),
(98, 12, 2),
(99, 12, 13),
(100, 13, 2),
(101, 13, 13),
(102, 14, 2),
(103, 14, 13),
(104, 15, 2),
(105, 15, 13),
(106, 16, 2),
(107, 16, 14),
(108, 17, 2),
(109, 17, 14),
(110, 18, 2),
(111, 18, 14),
(112, 19, 2),
(113, 19, 14),
(114, 20, 2),
(115, 20, 14),
(116, 21, 2),
(117, 21, 15),
(118, 22, 2),
(119, 22, 15),
(120, 23, 2),
(121, 23, 15),
(122, 24, 2),
(123, 24, 15),
(124, 25, 2),
(125, 25, 15),
(126, 26, 2),
(127, 26, 16),
(128, 27, 2),
(129, 27, 16),
(130, 28, 2),
(131, 28, 16),
(132, 29, 2),
(133, 29, 16),
(134, 30, 2),
(135, 30, 16),
(136, 31, 2),
(137, 31, 11),
(138, 32, 2),
(139, 32, 11),
(140, 33, 2),
(141, 33, 11),
(142, 34, 2),
(143, 34, 11),
(144, 35, 2),
(145, 35, 11),
(146, 36, 2),
(147, 36, 12),
(148, 37, 2),
(149, 37, 12),
(150, 0, 0),
(151, 38, 2),
(152, 38, 12),
(153, 39, 2),
(154, 39, 12),
(155, 40, 2),
(156, 40, 12),
(157, 41, 2),
(158, 41, 13),
(159, 42, 2),
(160, 42, 13),
(161, 43, 2),
(162, 43, 13),
(163, 44, 2),
(164, 44, 13),
(165, 45, 2),
(166, 45, 13),
(167, 46, 2),
(168, 46, 14),
(169, 47, 2),
(170, 47, 14),
(171, 48, 2),
(172, 48, 14),
(173, 49, 2),
(174, 49, 14),
(175, 50, 2),
(176, 50, 14),
(177, 51, 2),
(178, 51, 15),
(179, 52, 2),
(180, 52, 15),
(181, 53, 2),
(182, 53, 15),
(183, 54, 2),
(184, 54, 15),
(185, 55, 2),
(186, 55, 15),
(187, 56, 2),
(188, 56, 16),
(189, 57, 2),
(190, 57, 16),
(191, 58, 2),
(192, 58, 16),
(193, 59, 2),
(194, 59, 16),
(195, 60, 2),
(196, 60, 16),
(197, 61, 2),
(198, 61, 11),
(199, 62, 2),
(200, 62, 12),
(201, 63, 2),
(202, 63, 12),
(203, 64, 2),
(204, 64, 13),
(205, 65, 2),
(206, 65, 13),
(207, 66, 2),
(208, 66, 13),
(209, 67, 2),
(210, 67, 14),
(211, 68, 2),
(212, 68, 14),
(213, 69, 2),
(214, 69, 14),
(215, 70, 2),
(216, 70, 14),
(217, 71, 2),
(218, 71, 14),
(219, 72, 2),
(220, 72, 15),
(221, 73, 2),
(222, 73, 16),
(223, 74, 2),
(224, 74, 16),
(225, 75, 2),
(226, 75, 16);

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `sid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_check` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `sex` int(11) NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`sid`, `email`, `password`, `password_check`, `mobile`, `nickname`, `sex`, `birthday`, `address`, `hash`, `activated`, `create_at`) VALUES
(1, 'admin@gmail.com', '111111', '111111', '0988-888-888', 'Admin', 1, '2019-08-20', '台北市大安區復興南路一段390號2樓', '', 0, '0000-00-00 00:00:00'),
(2, 'qwe@qwe.com.tw', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '', '22222222', '23', 2, '2021-08-08', '台灣', '', 0, '0000-00-00 00:00:00'),
(3, 'qwer@qwe.com.tw', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '', NULL, 'WW', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(4, 'qwe123@qwe.com.tw', '601f1889667efaebb33b8c12572835da3f027f78', '', NULL, 'QQ', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(5, 'qqq@qqq.com.tw', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '', NULL, 'QW', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(6, 'ewq@123.com.tw', '601f1889667efaebb33b8c12572835da3f027f78', '', NULL, 'AZ', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(7, 'ewq@1223.com.tw', '273a0c7bd3c679ba9a6f5d99078e36e85d02b952', '', NULL, 'XX', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(8, 'ewq2@123.com.tw', '33a740b2d1990a453a7fe928d6cdf52d9bc767dd', '', NULL, 'OO', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(9, '123@123.com.tw', 'fa376e383626491fb6f3b6b5c06b1c208bba702b', '', NULL, 'YYY', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(10, 'aaa@aaa.com.tw', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '', NULL, NULL, 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(12, 'bbb@bbb.com.tw', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '', NULL, 'BBB', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00'),
(13, 'qqqqq@gmail.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '', NULL, 'QQ', 0, NULL, NULL, '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `level` varchar(30) NOT NULL,
  `廠牌` varchar(255) NOT NULL,
  `型號` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brands_sid` int(11) NOT NULL,
  `images` varchar(500) NOT NULL,
  `商品簡介` varchar(255) NOT NULL,
  `相機格式` varchar(255) NOT NULL,
  `感光元件像素` varchar(255) NOT NULL,
  `有效像素` varchar(255) NOT NULL,
  `感光元件大小` varchar(255) NOT NULL,
  `感光元件格式` varchar(255) NOT NULL,
  `感光元件種類` varchar(255) NOT NULL,
  `感光元件濾鏡排列` varchar(255) NOT NULL,
  `感光元件生產商` varchar(255) NOT NULL,
  `最大解像度` varchar(255) NOT NULL,
  `解像度選擇` varchar(255) NOT NULL,
  `壓縮模式` varchar(255) NOT NULL,
  `質素調較` varchar(255) NOT NULL,
  `無壓縮影像格式` varchar(255) NOT NULL,
  `影像比例` varchar(255) NOT NULL,
  `動畫解像度` varchar(255) NOT NULL,
  `動畫種類` varchar(255) NOT NULL,
  `動畫音效` varchar(255) NOT NULL,
  `訊號轉換器` varchar(255) NOT NULL,
  `雜訊消除` varchar(255) NOT NULL,
  `防手震功能` varchar(255) NOT NULL,
  `鏡片組合` varchar(255) NOT NULL,
  `鏡片焦距` varchar(255) NOT NULL,
  `135 格式焦距` varchar(255) NOT NULL,
  `變焦能力` varchar(255) NOT NULL,
  `動畫種類1` varchar(255) NOT NULL,
  `動畫音效1` varchar(255) NOT NULL,
  `訊號轉換器1` varchar(255) NOT NULL,
  `雜訊消除1` varchar(255) NOT NULL,
  `鏡片組合2` varchar(255) NOT NULL,
  `鏡片焦距2` varchar(255) NOT NULL,
  `135 格式焦距2` varchar(255) NOT NULL,
  `變焦能力2` varchar(255) NOT NULL,
  `數碼變焦` varchar(255) NOT NULL,
  `光圈範圍` varchar(255) NOT NULL,
  `焦距變換比率` varchar(255) NOT NULL,
  `自動對焦情況` varchar(255) NOT NULL,
  `AF Assist Light` varchar(255) NOT NULL,
  `手動對焦` varchar(255) NOT NULL,
  `正常對焦範圍` varchar(255) NOT NULL,
  `微距對焦範圍` varchar(255) NOT NULL,
  `鏡頭接環` varchar(255) NOT NULL,
  `轉換鏡頭` varchar(255) NOT NULL,
  `曝光模式` varchar(255) NOT NULL,
  `場景模式` varchar(255) NOT NULL,
  `快門速度` varchar(255) NOT NULL,
  `測光模式` varchar(255) NOT NULL,
  `曝光補償` varchar(255) NOT NULL,
  `自動曝光鎖` varchar(255) NOT NULL,
  `包圍曝光` varchar(255) NOT NULL,
  `ISO 感光值` varchar(255) NOT NULL,
  `白平衡設定` varchar(255) NOT NULL,
  `自拍` varchar(255) NOT NULL,
  `連拍` varchar(255) NOT NULL,
  `定時拍攝` varchar(255) NOT NULL,
  `LCD 熒光幕` varchar(255) NOT NULL,
  `光學觀景器` varchar(255) NOT NULL,
  `播放放大` varchar(255) NOT NULL,
  `儲存媒體` varchar(255) NOT NULL,
  `內存` varchar(255) NOT NULL,
  `跟機記憶體` varchar(255) NOT NULL,
  `接口` varchar(255) NOT NULL,
  `視頻輸出` varchar(255) NOT NULL,
  `打印協定` varchar(255) NOT NULL,
  `電池種類` varchar(255) NOT NULL,
  `電池手柄` varchar(255) NOT NULL,
  `隨機電池及充電器` varchar(255) NOT NULL,
  `電池壽命` varchar(255) NOT NULL,
  `支援火牛輸入` varchar(255) NOT NULL,
  `腳架座材料` varchar(255) NOT NULL,
  `機身重量` varchar(255) NOT NULL,
  `重量含電池` varchar(255) NOT NULL,
  `體積` varchar(255) NOT NULL,
  `搖遠控制` varchar(255) NOT NULL,
  `隨機軟件` varchar(255) NOT NULL,
  `隨機物件` varchar(255) NOT NULL,
  `附註` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`sid`, `level`, `廠牌`, `型號`, `product_name`, `price`, `brands_sid`, `images`, `商品簡介`, `相機格式`, `感光元件像素`, `有效像素`, `感光元件大小`, `感光元件格式`, `感光元件種類`, `感光元件濾鏡排列`, `感光元件生產商`, `最大解像度`, `解像度選擇`, `壓縮模式`, `質素調較`, `無壓縮影像格式`, `影像比例`, `動畫解像度`, `動畫種類`, `動畫音效`, `訊號轉換器`, `雜訊消除`, `防手震功能`, `鏡片組合`, `鏡片焦距`, `135 格式焦距`, `變焦能力`, `動畫種類1`, `動畫音效1`, `訊號轉換器1`, `雜訊消除1`, `鏡片組合2`, `鏡片焦距2`, `135 格式焦距2`, `變焦能力2`, `數碼變焦`, `光圈範圍`, `焦距變換比率`, `自動對焦情況`, `AF Assist Light`, `手動對焦`, `正常對焦範圍`, `微距對焦範圍`, `鏡頭接環`, `轉換鏡頭`, `曝光模式`, `場景模式`, `快門速度`, `測光模式`, `曝光補償`, `自動曝光鎖`, `包圍曝光`, `ISO 感光值`, `白平衡設定`, `自拍`, `連拍`, `定時拍攝`, `LCD 熒光幕`, `光學觀景器`, `播放放大`, `儲存媒體`, `內存`, `跟機記憶體`, `接口`, `視頻輸出`, `打印協定`, `電池種類`, `電池手柄`, `隨機電池及充電器`, `電池壽命`, `支援火牛輸入`, `腳架座材料`, `機身重量`, `重量含電池`, `體積`, `搖遠控制`, `隨機軟件`, `隨機物件`, `附註`) VALUES
(1, '專業', 'Canon', 'Canon EOS 5D Mark IV', 'Canon EOS 5D Mark IV', 117000, 1, 'CC-01', '30.4MP 全片幅 CMOS、DIGIC 6+ 晶片、61 點 AF、7fps 連拍、ISO 102400 高感光、4K 拍片、Dual Pixel AF、Dual Pixel RAW 拍攝、GPS 及 Wi-Fi 功能\r\n3170 萬像素\r\n視鏡頭而定x 光學變焦\r\nLP-E6 / LP-E6N鋰離子充電池\r\n機身 800 Gram', '3040 萬像素單鏡反光相機', '3040 萬像素', '3170 萬像素', '36 x 24 mm', '-', 'CMOS', '-', 'Canon', '6720 x 4480', '6720 x 4480 (L);\r\n4464 x 2976 (M);\r\n3360 x 2240 (S1); \r\n1920 x 1280 (S2);\r\n720 x 480 (S3);\r\n6720 x 4480 (RAW);\r\n5040 x 3360 (M-RAW);\r\n3360 x 2240 (S-RAW)', 'JPEG (EXIF 2.3)', 'DPRaw Raw JPEG Fine  JPEG Normal (可自定壓縮比率)', 'DPRAW、RAW、RAW + JPEG (Fine)、RAW + JPEG (Standard)', '3:2', '4K：29.97p/24.00p/23.98p (NTSC); \r\n4K：25.00p/24.00p (PAL); \r\n全高清：59.94p/29.97p/24.00p/23.98p (NTSC);\r\n全高清：50.00p/25.00p/24.00p (PAL);\r\n高清：119.9p (NTSC);\r\n高清：100.0p (PAL);', 'MPEG-4 AVC/H.264 格式、立體聲', '支援立體聲收音', '14 bit', '支援', 'Hybrid IS 光學防震', '9 組 11 片1 片雙面非球面鏡、1 片非球面 UA 鏡、1 片非球面鏡、1 片 UD 低色散鏡片', '8.8-36.8 mm', '24 mm 至 100 mm', '4.2X', 'MPEG-4 AVC/H.264; \r\n分別可選 ALL-I（I-only）、IPB 兩種', '內置單聲道 / 支援外置收音', '-', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '1.0 倍', 'TTL-AREA-SIR 自動對焦感應器\r\n61 個對焦點41 點對應 f/4 十字對焦\r\n單次對焦 (One-Shot AF)\r\n人工智能伺服對焦 (AI SERVO)\r\n6 種自動對焦區域模式(包括區域自動對焦及重點自動對焦)\r\nDual Pixel CMOS AF\r\n', '以閃光燈頻閃', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', 'Canon EF 接環', '視鏡頭而定', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '-', '1 / 8000 至 30 秒支援 B 快門', '150000像素RGB+IR測光感應器\r\n局部測光\r\n點測光 (Spot Metering)\r\n中央偏重權衡測光', '-3EV至+3EV以1/3EV或1/2EV級調整', '支援', '-3EV至+3EV每次以1/3EV調整\r\n包圍數量2357張\r\n可選擇以快門、光圈或 ISO 值包圍\r\n', '100 200 400 800 1600 3200 6400 12800 25600 32100(1/3 級調校)\r\n擴展模式 50 102400', '自動、日光、陰影、密雲、鎢絲燈、光管、閃光燈、直接手動指定色溫 (Kelvin)\r\n支援手動白平衡設定', '10 / 3 秒延遲自拍模式', '每秒 7 張高速連續拍攝；可連續拍攝焦限 JPEG 或 21 張 RAW\r\nRAW + JPEG 可連拍 16 張 (CF UDMA 7)', '電腦控制 (以 USB 連接)', '3.2 吋 Touch LCD 熒光幕 視野率為 100 %', '0.71x 放大率、稜鏡反射式光學觀景器的準確度為 100%', '10X', 'Compact Flash 記憶咭 (支援 UDMA 7) (Type I only) 支援 UHS-I Speed Class 3\r\nSD / SDHC / SDXC', '-', '-', 'USB 3.0', 'HDMI / PAL / NTSC', 'PictBridge', 'LP-E6 / LP-E6N鋰離子充電池', '-', 'LP-E6N 專用鋰充電池組及專用充電器', '-', '支援（另購）', '金屬', '800 克', '890 克', '150.7 x 116.4 x 75.9mm', '-', '-', '-', '採用DIGIC 6+ 影像處理器\r\n支援 4K 電影 Time Code 功能及壓縮率可選\r\n新增 Dual Pixel RAW 拍攝\r\n內置 GPS 及 Wi-Fi\r\n61 點 AF 點全部對應 f/8 感應'),
(2, '專業', 'Nikon', 'Nikon Z7', 'Nikon Z7', 102980, 2, 'CN-11', '4,575 萬像素全片幅 CMOS、493 點 Hybrid PDAF 、內置 5 軸防震、9fps 連拍、4K 攝錄\r\n4,575 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子電池EN-EL15b\r\n連電池 675 Gram', '4575 萬像素，可換鏡頭式數碼相機', '4575 萬像素', '4575 萬像素', '35.9 x 23.9 mm', '35mm Full Frame', 'CMOS', '-', '-', '8256 x 5504', 'FX-format: 8256 x 5504;\r\n6192 x 4128;\r\n4128 x 2752;\r\nDX-format: 5408 x 3600;\r\n5:4 : 6880 x 5504; \r\n1:1 : 5504 x 5504; \r\n16:9 : 8256 x 4640', 'JPEG (EXIF 2.3)', 'Large, Medium, Small', 'NEF、TIFF（支援 RAW M, S）', '3:2 / 16:9 / 5:4 / 1:1', '3840 x 2160 @ 30p / 144 Mbps, MOV, H.264, Linear PCM; \r\n3840 x 2160 @ 25p / 144 Mbps, MOV, H.264, Linear PCM; \r\n3840 x 2160 @ 24p / 144 Mbps, MOV, H.264, Linear PCM;\r\n1920 x 1080 @ 120p, MOV, H.264, Linear PCM;\r\n1920 x 1080 @ 100p, MOV, H.264, Linear PCM;', 'MP4', '-', '-', '支援', '光學防震、電子減震', '35x optical Zoom', '4.3 - 151.0 mm', '24 mm 至 840 mm', '35X', 'MPEG-4, H.264', '立體聲', '14 bits', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '1 倍', '493 點 Hybrid PDAF', '-', '支援', '視鏡頭而定', '視鏡頭而定', 'Nikon Z mount', '視鏡頭而定', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '-', '1/8000 至 30 秒，支援 B 快門', '矩陣：3D 彩色矩陣測光 III / 中央平均 / 偏重中央 / 重點', '-5EV 至 +5EV 以 1/3 EV, 1/2 EV 級調整', '支援', '拍攝 2 至 9 幅，以 1/3、1/2、2/3 或 1 EV 為等級進行微調', 'ISO 64 - 25600 可擴展至 ISO 32 (Low-1) / 102400 (Hi-2)', '自動（3種類型）、白熾燈、螢光燈（7種類型）、直射陽光、閃光、陰天、陰影、選擇色溫(2500 K-10000 K)，均可進行微調\r\n手動預置（最多可存儲 6 個值）手動白平衡設定', '2秒、5秒、10秒、20秒；以0.5、1、2或3秒為間隔曝光1-9次自拍模式', '9 fps（支援自動對焦和自動曝光）', '-', '3.2 吋 多角度 TFT LCD（輕觸式） 熒光幕 ，視野率為 100 %', '369 萬點 EVF; 約 0.8 倍放大率，光學觀景器的準確度為 100%', '-', 'XQD 記憶卡', '-', '-', '高速 USB 3.1; 3.5mm 音訊輸入/輸出', 'micro HDMI', 'PictBridge、DPOF', '鋰離子電池EN-EL15b', '-', '鋰離子 電池 EN-EL15b及專用充電器', '330 張', '-', '金屬', '-', '675 克', '134 x 101 x 68 mm', '-', '-', '-', '內置機身 5 軸防震\r\n支援 N-Log 攝錄'),
(3, '專業', 'Leica', 'Leica CL', 'Leica CL', 155000, 3, 'CL-02', 'APS-C 尺寸 2,400 萬像 CMOS、4K 拍片、內置 EVF 取景、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 403 Gram', '2500 萬像素，可換鏡頭式數碼相機', '2500 萬像素', '2400 萬像素', '23.6 x 15.7 mm', 'APS-C', 'CMOS', '-', 'CMOS', '6016 x 4014', '6000 x 4000; \r\n4272 x 2856; \r\n3024 x 2016', 'JPEG', '優良, 良好, 標準', 'DNG', '3:2', '3840 x 2160 @ 30p, MP4, H.264, AAC;\r\n1920 x 1080 @ 60p, MP4, H.264, AAC;\r\n1280 x 720 @ 60p, MP4, H.264, AAC;\r\n1280 x 720 @ 120p, MP4, H.264, AAC;', 'MPEG-4 無間斷有聲影片', '支援 ACC 立體聲收音', '-', '-', '-', '9組11片，包括3片非球面', '28mm', '28 mm至28mm', '1X', 'MP4', 'Stereo', '12-bit', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '視鏡頭而定', '1.5 倍', '單點選擇\r\n多點自動對焦\r\n單點中央\r\n人面對焦\r\n觸控對焦', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', 'Leica T、可透過轉接環使用 Leica M 鏡頭', '-', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', 'sport, portrait, landscape, night portrait, snow/beach, fireworks, candlelight, sunset', '1/8000 至 30 秒，不支援 B 快門', '多區測光\r\n平均偏重中央測光\r\n重心測光\r\n人臉優先', '+/- 3 EV 以 1/3 EV 級調整', '支援', '拍攝三張，以 1/3 級 EV，增減 3 EV 值', 'Auto, 100-50000', '自動、日光、陰天、白熾燈、陰天、閃光燈、直接手動指定色溫 (Kelvin)\r\n支援手動白平衡設定', '2 秒 / 12 秒自拍模式', '10fps', '-', '3 吋 觸控式 TFT LCD 熒光幕 ，視野率為 100 %', '內置 236 萬點 EVF，光學觀景器的準確度為 100%', '-', 'SD / SDHC / SDXC', '-', '-', 'USB 2.0', 'USB 2.0', '支援', 'BP-DC 13 專用鋰電池', '-', 'BP-DC 12 專用鋰電池及BC-DC12 專用充電器', '220', '-', '金屬', '-', '403 克', '131 x 78 x 45 mm', '-', 'Adobe Photoshop Lightroom', '-', '-'),
(6, '進階', 'Canon', 'Canon PowerShot G7 X Mark III', 'Canon PowerShot G7 X Mark III', 16500, 1, 'CC-11', '1 吋背照層疊式 CMOS、Digic 8 影像處理技術、30fps RAW 連拍、24-100mm 等效焦段、最高 ISO 25600、4K 拍片、支援 YouTube 直播服務\r\n2,010 萬像素\r\n4.2x 光學變焦\r\nCanon NB-13L 鋰充電池\r\n機身 235 Gram', '2010 萬像素，半專業級數碼相機', '2010 萬像素', '2010 萬像素', '1.0 吋', '1 吋', 'CMOS', '-', '-', '5472 x 3648', '3:2 : 5472 x 3648; 4320 x 2880; 2304 x 1536; 720 x 480\r\n4:3 : 4864 x 3648; 3840 x 2880; 2048 x 1536; 640 x 480\r\n16:9 : 5472 x 3080; 4320 x 2432; 1920 x 1080; 720 x 408\r\n1:1 : 3648 x 3648; 2880 x 2880; 1536 x 1536; 480 x 480\r\n4:5 : 2912 x 3648; 2304 x 2880', 'JPEG (EXIF 2.3)', 'Normal, Fine, RAW', '14-bit RAW(CR3)', '4:3 / 3:2 / 16:9 / 1:1 / 4:5', '3840 x 2160 @ 30p / 120 Mbps, MOV, H.264, AAC;\r\n1920 x 1080 @ 120p / 120 Mbps, MOV, H.264, AAC;\r\n1920 x 1080 @ 60p / 60 Mbps, MOV, H.264, AAC;\r\n1920 x 1080 @ 30p / 30 Mbps, MOV, H.264, AAC', 'MPEG-4 AVC/H.264;\r\n分別可選 ALL-I（I-only）、IPB 兩種', '內置單聲道 / 支援外置收音', '14 bit', '支援', '-', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '-', '-', '-', '-', '-', '-', '-', '2X', 'f/1.8-2.8', '-', 'TTL 對比偵測對焦系統;\r\n人面對焦;\r\n人面追蹤;\r\n支援自動對焦鎖', '支援 (可選擇開啟或關閉)', '支援', '5cm - 無限遠 ( Wide ), 40cm - 無限遠 ( Tele )', '5cm - 50cm', '-', '-', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', 'Portrait, Landscape, Night Snapshot, Kids & Pets, Indoor, Sports, Sunset, Night Scene, Fireworks, Beach, Underwater, Aquarium, F', '1/25600 至 30 秒、個別拍攝模式可達 25 秒，不支援 B 快門', '平均測光 (Evaluative), 中央重點平均測光 (Centre-Weighted Averaging), 點測光 (Spot)', '-3EV 至 +3EV 以 1/3EV 級調整', '支援', '支援', '125 - 12800 (每 1/3 級調校, 可擴展至 ISO 25600)', '自動, 預設 (Daylight, Shade, Cloudy, Tungsten, Fluorescent, Fluorescent H, Flash, Underwater), 手動白平衡\r\n支援手動白平衡設定', '2 秒, 10 秒, 自訂時間, 面部偵測自拍模式', '30fps (Raw)', '支援, 1 - 60 分鐘, 1 - 100 張', '3.0 吋 TFT 觸控 LCD 熒光幕 ，視野率為 100 %', '-', '10X', 'SD / SDHC / SDXC ( 支援 UHS-I )', '-', '-', 'USB 3.1 Gen 1, HDMI', 'HDMI', 'PictBridge, Digital Print Order Format(DPOF) Version 1.1', 'Canon NB-13L 鋰充電池', '-', 'Canon NB-13L 鋰充電池', '235', 'AC Adapter Kit ACK-DC110另購）', '金屬', '235 克', '304 克', '105 x 61 x 41 mm', '-', 'Digital Camera Solution CD-ROM\r\nArcSoft Camera Suite CD-ROM', '-', '內置 Wi-Fi 及 NFC\r\nDIGIC 8 影像處理器\r\n感光度推展至 ISO 25600\r\n支援 YouTube 直播服務\r\n支援 4K 拍片'),
(7, '進階', 'Nikon', 'Nikon Coolpix A1000', 'Nikon Coolpix A1000', 15900, 2, 'CN-12', 'COOLPIX A1000 配備 35 倍光學變焦及 70 倍動態細緻變焦，於小巧緊湊的機身中提供了最高變焦率。相機備有約 1600 萬有效像素及 ISO 6400 最高感光度，於解像度及高感光度雜訊之間取得最佳平衡，於昏暗環境下仍能呈現優異影像品質。相機機身輕盈，卻支援 4K UHD/30p 格式短片攝錄兼備降低風聲雜音功能，更可在攝錄短片期間儲存靜態影像！\r\n\r\n相機的預先自動對焦 (Pre-AF) 及目標尋找 AF 功能令拍攝特寫或昏暗場景時自動對焦更精準。此外，相機配備的減震 (VR) 功能可於拍', '1679 萬像素，輕巧型數碼相機', '1679 萬像素', '1600 萬像素', '1/2.3 吋', '-', 'CMOS', '-', '-', '4608 x 3456', '4608 x 3456;\r\n3264 x 2448;\r\n2272 x 1704;\r\n1600 x 1200;\r\n4608 x 2592;\r\n4608 x 3072;\r\n3456 x 3456', 'JPEG Exif 2.3', 'Fine, Normal, PC Screen, TV Screen', 'RAW (NRW)', '4:3 / 16:9 / 1:1', '2160/30p (4K UHD)；2160/25p (4K UHD)；1080/30p；1080/25p；1080/60p；1080/50p；720/30p；720/25p；720/60p；720/50p；HS 720/4x；HS 720/2x；HS 1080/0.5x', 'H.264/MPEG-4先進視頻編碼 MOV 格式影片，支援全手動曝光，每段 29 分鐘 59 秒', '立體聲', '14 bits', '支援', '-', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '-', '-', '-', '-', '-', '-', '-', '4X', 'f/3.4 - 6.9', '-', '對比偵測 AF、微距模式、中央、臉部偵測', '-', '-', '50cm - 無限遠 (wide); 200cm - 無限遠 (tele)', '1 cm 至無限遠', '-', '-', '1. 不支援光圈先決\r\n2. 不支援快門先決\r\n3. 不支援手動曝光', '逆光、沙灘、黑白、日落、煙花、食物、人像、風景、近攝、夜景人像、夜晚風景、雪地、博物館、自拍、高感光、兒童、橫掃、運動、全景、3D 相片等', '1/4000 至 8 秒，不支援 B 快門', '矩陣測光、偏重中央測光、重點測光', '-2EV 至 +2EV 以 1/3 EV 級調整', '支援半按快門', '-', 'ISO 100-6400', '自動、直射陽光、白熾燈、螢光燈、陰天、閃光\r\n支援手動白平衡設定', '自拍模式', '120fps', '-', '3 吋 TFT LCD，5 級光度調整 熒光幕 ，視野率為 98 %', '沒有光學觀器', '-', 'SD/SDHC /SDXC 記憶咭', '-', '-', 'USB 2.0', '-', 'PictBridge、DCF、DPOF、Exif 2.3', 'EN-EL12', '-', '-', '250張、50 分鐘', '-', '支援', '-', '330 克', '114.2 x 71.7 x 40.5 mm', '-', '-', '-', '支援 4K UHD 拍片\r\n自動場境選擇\r\n拍攝照片或短片時可以選擇特殊效果'),
(8, '專業', 'Leica', 'Leica Q2', 'Leica Q2', 183160, 3, 'CL-05', '全片幅 CMOS 感光元件、4,730 萬有效像素、Wi-Fi 傳輸、內置 368 萬像素 EVF、支援 4K 拍片、最高 ISO 50000 感光度、20fps 連拍\r\n5,040 萬像素\r\n1x 光學變焦\r\nBP-SCL4 專用鋰離子充電池\r\n連電池 718 Gram', '4730 萬像素，半專業級數碼相機', '4730 萬像素', '5040 萬像素', '36 x 24 mm', '35mm 全片幅', 'CMOS', '-', '-', '8368 x 5584', '8368 x 5584;\r\n 6000 x 4000;\r\n 4271 x 2848;\r\n6704 x 4472;\r\n4800 x 3200;\r\n3424 x 2288;\r\n4688 x 3128;\r\n3360 x 2240;\r\n2400 x 1600; \r\n3136 x 2096;\r\n2240 x 1496;\r\n1600 x 1072;', 'JPEG (EXIF 2.3)', 'Fine / Standard', 'RAW (DNG)', '3:2', '4K（24p/30p）;\r\n1920 x 1080（24p/30p/60p/120p）', '-', '-', '-', '-', '-', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '-', '-', '-', '-', '-', '-', '-', '1.25X', 'F2.3', '-', '255 區自動', '支援', '支援', '30cm - 無限遠', '17cm', '-', '-', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '全自動、運動、人像、風景、夜間人像、雪地／海灘、燭光、日落、放大鏡、微型效果、全景相片、縮時拍攝', '1/40000 至 60 秒，支援 B 快門', '多區域測光、中央平均測光、重點測光', '-3EV 至 +3EV 以 1/3EV 級調整', '-', '支援以 1/3EV 間距連拍 3 張（最多 3EV）', 'Auto、ISO 50 - ISO 50000', '自動、日光、陰天、陰影、白熾燈、閃光燈、色溫、自定白平衡\r\n支援手動白平衡設定', '2 秒、12 秒自拍模式', '最高 20fps', '-', '3.0 吋 TFT LCD 熒光幕 ，視野率為 100 %', '368 萬像素電子觀景器，光學觀景器的準確度為 100%', '-', 'SD / SDHC / SDXC 記憶咭', '-', '-', 'HDMI、Micro USB', 'PAL / NTSC', 'PictBridge、DPOF、Exif Print、DCF', 'BP-SCL4 專用鋰離子充電池', '-', 'BP-SCL4 專用鋰離子充電池及BP-SCL4 專用充電器', '350', '-', '金屬', '-', '718 克', '130 x 80 x 92mm', '-', '-', '-', '-'),
(9, '專業', 'Canon', 'Canon EOS 1D X Mark II', 'Canon EOS 1D X Mark II', 169000, 1, 'CC-09', '2,020 萬像素、感光範圍最高 ISO 409600、61 點對焦全部支援 f/8.0 應應、4K 拍片、Touch Screen\r\n2,020 萬像素\r\n視鏡頭而定x 光學變焦\r\n專用鋰電\r\n連電池 1530 Gram', '2200 萬像素，單鏡反光相機', '2200 萬像素', '2020 萬像素', '36mm x 24mm', '-', 'CMOS', '-', 'Canon', '5472 x 3648', '5472 x 3648;\r\n4368 x 2912;\r\n3648 x 2432;\r\n2736 x 1824', 'JPEG Exif 2.3', 'Raw, JPEG Fine , JPEG Normal (可自定壓縮比率)', 'RAW、RAW + JPEG (Fine)、RAW + JPEG (Standard)', '3:2', '4096 x 2160 (60p, 30p, 25p, 24p, 23.98p); \r\n1920 x 1080 (120p, 60p, 50p, 25p, 24p, 23.98p)', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '1X', '視鏡頭而定', '-', 'TTL-AREA-SIR 自動對焦感應器;\r\n61 個對焦點，41 點對應 f/4 十字對焦;\r\n單次對焦 (One-Shot AF);\r\n人工智能伺服對焦 (AI SERVO);\r\n6 種自動對焦區域模式(包括區域自動對焦及重點自動對焦);\r\nDual Pixel CMOS AF', '以閃光燈頻閃', '支援', '視鏡頭而定', '視鏡頭而定', 'Canon EOS EF 接環', '視鏡頭而定', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '-', '1/8000 至 30 秒，支援 B 快門', '配備 DIGIC 6+ 影像處理器 36 萬像素 RGB 感測器\r\n216 區平均測光及 35 區應付弱光測光\r\n局部測光\r\n點測光 (Spot Metering)\r\n中央偏重權衡測光', '-5EV to +5EV 以 1/3 EV 級調整', '支援', '-3EV 至 +3EV, 每次以 1/3EV 調整\r\n包圍數量 2, 3, 5, 7 張\r\n可選擇以快門、光圈或 ISO 值包圍', '100, 200, 400, 800, 1600, 3200, 6400, 12800, 25600, 51200(1/3 級調校)\r\n擴展模式 50, 102400, 204800, 409600', '自動、日光、陰影、陰天、鎢絲燈、光管、閃光燈、自設、色溫設定、手動\r\n支援手動白平衡設定', '2 杪或 10 秒自拍模式', '每秒 14 張高速連續拍攝 / 反光鏡上鎖為 16fps；可連續拍攝 170 張 Raw 或無限量 Jpeg', '以專用電腦軟件控制 (USB 連接)', '3.2 吋 Touch 熒光幕 ，視野率為 100 %', '支援，放大率約 0.76 倍，光學觀景器的準確度為 100%', '10X', 'Compact Flash 記憶咭 (Type I and II) / CFast 2.0 記憶咭', '-', '-', 'USB 3.0、RJ45 Gigabit LAN', 'PAL / NTSC / HDMI', 'PictBridge, Exif Print', '專用鋰電', '-', 'LP-E19 / CR2025 (機內時鐘)及專用充電器', '1210', '支援專用火牛', '金屬', '-', '1530 克', '158 x 168 x 83 mm', '-', 'Digital Photo Professional', '-', '採用雙 Dual DIGIC 6+ 影像處理器\r\n支援 4K 電影功能\r\nDual Pixel CMOS AF'),
(11, '專業', 'Nikon', 'Nikon D5(單機身)', 'Nikon D5(單機身)', 209900, 2, 'CN-13', '2074 萬像素全片幅 CMOS、最高 ISO 3,280,000 感光度、12 fps 連拍\r\n2,074 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子 Li-ion EN-EL18a 電池\r\n連電池 1405 Gram', '2133 萬像素，單鏡反光相機', '2133 萬像素', '2074 萬像素', '35.9 x 23.9 mm', '35mm Full Frame', 'CMOS', '-', '-', '5588 x 3712', 'FX-format: 4,176 x 2,784; \r\n2,784 x 1,856; \r\n4,640 x 3,088; \r\n3,472 x 2,312; \r\n2,320 x 1,544;\r\n4,640 x 3,712; \r\n3,472 x 2,784;\r\n2,320 x 1,856;\r\nDX-format: 3,648 x 2,432;\r\n2,736 x 1,824; \r\n1,824 x 1,216 ;', 'JPEG (EXIF 2.3)', 'Large, Medium, Small', 'NEF、TIFF（支援 RAW M, S）', '3:2 / 4:3 / 16:9 / 5:4; ', '4K/UHD : 3,840x2,160 @ 30/25/24fps;\r\nHD︰1280 x 720 @ 60/50fps;', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '視鏡頭而定', '視鏡頭而定', '1 倍', 'Multi-CAM 20k 自動對焦感應器模組;\r\n具備 TTL 相位偵測、微調及 153 個對焦點（55點可選）;\r\n包括 99 個十字型感應器;\r\n偵測範圍: -4 - +20 EV;\r\n自動對焦(AF)：單次伺服自動對焦(AF-S)；連續伺服自動對焦(AF-C)；根據主體的狀態自動啟用預估追蹤對焦; 手動對焦(M)：可以使用電子測距器;\r\n臉部優先 AF、廣闊區域 AF、標準區域 AF、主體追蹤AF、群組區域 AF', '-', '支援', '視鏡頭而定', '視鏡頭而定', 'Nikon F mount', '視鏡頭而定', '1. 支援光圈先決\r\n2. 不支援快門先決\r\n3. 支援手動曝光', '-', '1/8000 至 30 秒，支援 B 快門', '矩陣：3D 彩色矩陣測光 III / 偏重中央：約 75% 的比重集中在畫面中央 12、 8、15 或 20 mm 直徑圈中，或者平均分佈於整個畫面 / 重點: 集中在以所選對焦點為中心的 4 mm 直徑圈中（約 1.5%）', '-5EV 至 +5EV 以 1/3 EV, 1/2 EV 級調整', '支援', '拍攝 2 至 9 幅，以 1/3、1/2、2/3 或 1 EV 為等級進行微調', 'ISO 100 - 102,400，可擴展至 ISO 50 (Low-1) / 204800 (Hi-1) / 409600 (Hi-2) / 819200 (Hi-3) / 1638400 (Hi-4) / 3280000 (Hi-5)', '自動（3種類型）、白熾燈、螢光燈（7種類型）、直射陽光、閃光、陰天、陰影、選擇色溫(2500 K-10000 K)，均可進行微調\r\n手動預置（最多可存儲 6 個值）手動白平衡設定', '2秒、5秒、10秒、20秒；以0.5、1、2或3秒為間隔曝光1-9次自拍模式', '12 fps（支援自動對焦和自動曝光）、14 fps（mirror-up）', '-', '3.2 吋 TFT LCD（輕觸式） 熒光幕 ，視野率為 100 %', '眼平五棱鏡單鏡反光觀景器; 約 0.72 倍放大率，光學觀景器的準確度為 100%', '-', '雙XQD 或 雙CF 記憶卡（兼容UDMA )\r\n雙記憶卡插槽: 每張卡都可用作主要或備用儲存空間，或用於分開儲存 NEF（RAW）和 JPEG 影像；照片可在兩張卡之間進行複製', '-', '-', '高速 USB 3.0; 3.5mm 音訊輸入/輸出; RJ-45 連接器; 十針遙控終端', 'HDMI', 'PictBridge、DPOF', '鋰離子 Li-ion EN-EL18a 電池', '-', '鋰離子 Li-ion EN-EL18a 電池及MH-26a 電池充電器', '3,780 張', 'EH-6b 變壓器', '金屬', '-', '1405 克', '160 x 158.5 x 92 mm', '-', 'ViewNX 2', '-', '在拍片的時候，光圈、快門及 ISO 可完全手動控制\r\n拍片時可以連接立體耳機作收音監聽\r\n拍攝影片時更提供 Face Detection 臉部辨識以及主體追蹤 AF 功能'),
(12, '專業', 'Leica', 'Leica M-D Typ 262', 'Leica M-D Typ 262', 226000, 3, 'CL-11', '2,400 萬像素全片幅 CMOS、靜音快門\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子充電池\r\n連電池 680 Gram', '2400 萬像素，可換鏡頭式數碼相機', '2400 萬像素', '2400 萬像素', '36 x 24mm', '35mm Full Frame', 'CMOS', '-', '-', '5952 x 3976', '5952 x 3976;\r\n4256 x 2832; \r\n2976 x 1984', '不支援 Jpeg', '-', '12-bit RAW, DNG (20 MB), 30 MB (compressed); 48.22 MB (uncompressed)', '3:2', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '視鏡頭而定', '視鏡頭而定', '1 倍', '無', '不支援', '支援', '視鏡頭而定', '視鏡頭而定', 'Leica M 接環', '視鏡頭而定', '1. 支援光圈先決\r\n2. 不支援快門先決\r\n3. 支援手動曝光', '-', '1/4000 至 60 (Bulb) 秒，支援 B 快門', 'TTL、多區測光、中央偏重平均測光、重點測光', '-3EV 至 +3EV 以 1/3 EV 級調整', '-', '3 / 5 張, 1/2, 1, 2, 3 EV 間距', 'ISO 200 - 6400, 可擴展至 ISO 100', 'Auto / 日光 / 陰天 / 陰影 / 燈泡 / 螢光管(冷 / 暖) / 閃光燈 / 手動 (灰卡) / 色溫輸入由 2000-13100K\r\n支援手動白平衡設定', '2 秒 / 12 秒自拍模式', '3fps', '-', '沒有 LCD 熒光幕', '支援', '-', 'SD / SDHC / SDXC', '-', '-', 'USB 2.0', '-', '-', '鋰離子充電池', '-', 'BP-SCL2 鋰離子充電池 (7.4V)及隨附附送叉電機', '-', '-', '金屬', '-', '680 克', '138.6 x 42 x 80 mm', '-', 'Adobe Lightroom', '-', '可接 Leica M-Adapter R');

-- --------------------------------------------------------

--
-- 資料表結構 `products_categories_map`
--

CREATE TABLE `products_categories_map` (
  `sid` int(11) NOT NULL,
  `products_sid` int(11) NOT NULL,
  `categories_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `products_categories_map`
--

INSERT INTO `products_categories_map` (`sid`, `products_sid`, `categories_sid`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 1),
(4, 2, 4),
(5, 3, 1),
(6, 6, 1),
(7, 6, 5),
(8, 7, 1),
(9, 7, 5),
(10, 8, 1),
(11, 8, 4),
(12, 9, 1),
(13, 9, 4),
(14, 11, 1),
(15, 11, 4),
(16, 12, 1),
(17, 12, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `products_lens_map`
--

CREATE TABLE `products_lens_map` (
  `sid` int(11) NOT NULL,
  `products_sid` int(11) NOT NULL,
  `lens_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `products_lens_map`
--

INSERT INTO `products_lens_map` (`sid`, `products_sid`, `lens_sid`) VALUES
(1, 1, 31),
(2, 1, 32),
(3, 1, 33),
(4, 1, 34),
(5, 1, 35),
(6, 1, 36),
(7, 1, 37),
(8, 1, 38),
(9, 1, 39),
(10, 6, 40),
(11, 6, 41),
(12, 6, 42),
(13, 6, 43),
(14, 6, 44),
(15, 6, 45),
(16, 6, 46),
(17, 6, 47),
(18, 6, 48),
(19, 6, 49),
(20, 9, 50),
(21, 9, 51),
(22, 9, 52),
(23, 9, 53),
(24, 9, 54),
(25, 9, 55),
(26, 9, 56),
(27, 9, 57),
(28, 9, 58),
(29, 9, 59),
(30, 9, 60),
(31, 2, 1),
(32, 2, 2),
(33, 2, 3),
(34, 2, 4),
(35, 2, 5),
(36, 2, 6),
(37, 2, 7),
(38, 2, 8),
(39, 2, 9),
(40, 7, 10),
(41, 7, 11),
(42, 7, 12),
(43, 7, 13),
(44, 7, 14),
(45, 7, 15),
(46, 7, 16),
(47, 7, 17),
(48, 7, 18),
(49, 7, 19),
(50, 11, 20),
(51, 11, 21),
(52, 11, 22),
(53, 11, 23),
(54, 11, 24),
(55, 11, 25),
(56, 11, 26),
(57, 11, 27),
(58, 11, 28),
(59, 11, 29),
(60, 11, 30),
(61, 3, 61),
(62, 3, 62),
(63, 3, 63),
(64, 3, 64),
(65, 3, 65),
(66, 8, 66),
(67, 8, 67),
(68, 8, 68),
(69, 8, 69),
(70, 12, 70),
(71, 12, 71),
(72, 12, 72),
(73, 12, 73),
(74, 12, 74),
(75, 12, 75);

-- --------------------------------------------------------

--
-- 資料表結構 `p_products`
--

CREATE TABLE `p_products` (
  `sid` int(11) NOT NULL,
  `brand_sid` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category_sid` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `p_products`
--

INSERT INTO `p_products` (`sid`, `brand_sid`, `model`, `category_sid`, `description`, `price`, `images`) VALUES
(1, 1, 'Canon EOS 5D Mark IV', 4, '30.4MP 全片幅 CMOS、DIGIC 6+ 晶片、61 點 AF、7fps 連拍、ISO 102400 高感光、4K 拍片、Dual Pixel AF、Dual Pixel RAW 拍攝、GPS 及 Wi-Fi 功能\r\n3170 萬像素\r\n視鏡頭而定x 光學變焦\r\nLP-E6 / LP-E6N鋰離子充電池\r\n機身 800 Gram', 117000, 'CC-01'),
(2, 2, 'Nikon Z7', 4, '4,575 萬像素全片幅 CMOS、493 點 Hybrid PDAF 、內置 5 軸防震、9fps 連拍、4K 攝錄\r\n4,575 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子電池EN-EL15b\r\n連電池 675 Gram', 102980, 'CN-11'),
(3, 3, 'Leica CL', 4, 'APS-C 尺寸 2,400 萬像 CMOS、4K 拍片、內置 EVF 取景、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 403 Gram', 155000, 'CL-02'),
(4, 1, 'Canon PowerShot G7 X Mark III', 5, '1 吋背照層疊式 CMOS、Digic 8 影像處理技術、30fps RAW 連拍、24-100mm 等效焦段、最高 ISO 25600、4K 拍片、支援 YouTube 直播服務\r\n2,010 萬像素\r\n4.2x 光學變焦\r\nCanon NB-13L 鋰充電池\r\n機身 235 Gram', 16500, 'CC-11'),
(5, 2, 'Nikon Coolpix A1000', 5, 'COOLPIX A1000 配備 35 倍光學變焦及 70 倍動態細緻變焦，於小巧緊湊的機身中提供了最高變焦率。相機備有約 1600 萬有效像素及 ISO 6400 最高感光度，於解像度及高感光度雜訊之間取得最佳平衡，於昏暗環境下仍能呈現優異影像品質。相機機身輕盈，卻支援 4K UHD/30p 格式短片攝錄兼備降低風聲雜音功能，更可在攝錄短片期間儲存靜態影像！\r\n\r\n相機的預先自動對焦 (Pre-AF) 及目標尋找 AF 功能令拍攝特寫或昏暗場景時自動對焦更精準。此外，相機配備的減震 (VR) 功能可於拍', 15900, 'CN-12'),
(6, 3, 'Leica Q2', 4, '全片幅 CMOS 感光元件、4,730 萬有效像素、Wi-Fi 傳輸、內置 368 萬像素 EVF、支援 4K 拍片、最高 ISO 50000 感光度、20fps 連拍\r\n5,040 萬像素\r\n1x 光學變焦\r\nBP-SCL4 專用鋰離子充電池\r\n連電池 718 Gram', 183160, 'CL-05'),
(7, 1, 'Canon EOS 1D X Mark II', 4, '2,020 萬像素、感光範圍最高 ISO 409600、61 點對焦全部支援 f/8.0 應應、4K 拍片、Touch Screen\r\n2,020 萬像素\r\n視鏡頭而定x 光學變焦\r\n專用鋰電\r\n連電池 1530 Gram', 169000, 'CC-09'),
(8, 2, 'Nikon D5', 4, '2074 萬像素全片幅 CMOS、最高 ISO 3,280,000 感光度、12 fps 連拍\r\n2,074 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子 Li-ion EN-EL18a 電池\r\n連電池 1405 Gram', 209900, 'CN-13'),
(9, 3, 'Leica M-D Typ 262', 4, '2,400 萬像素全片幅 CMOS、靜音快門\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子充電池\r\n連電池 680 Gram', 226000, 'CL-11'),
(10, 2, 'Nikon AF-S NIKKOR 200-500mm f/5.6E ED VR', 11, '200 - 500 mm', 43920, 'LN_01'),
(11, 2, 'Nikon 1 NIKKOR VR 70-300mm f/4.5-5.6', 11, '70 - 300 mm', 29400, 'LN_02'),
(12, 2, 'Nikon 1 NIKKOR VR 10-100mm f/4.5-5.6 PD-ZOOM', 11, '10 - 100 mm', 21900, 'LN_03'),
(13, 2, 'Nikon AF-S VR Zoom-Nikkor 70-300mm f/4.5-5.6G IF-ED', 11, '70 - 300 mm', 20700, 'LN_04'),
(14, 2, 'Nikon AF-S DX VR Zoom-Nikkor 55-200mm f/4-5.6G IF-ED', 11, '55 - 200 mm', 8100, 'LN_05'),
(15, 2, 'Nikon AF-S Nikkor 300mm f/4D IF-ED', 12, '定焦 300 mm', 36250, 'LN_06'),
(16, 2, 'Nikon AF DC-Nikkor 135mm f/2D', 12, '定焦 135 mm', 29800, 'LN_07'),
(17, 2, 'Nikon AF-S Nikkor 500mm f/4G ED VR', 12, '定焦 500 mm', 282700, 'LN_08'),
(18, 2, 'Nikon AF Nikkor 180mm f/2.8D IF-ED', 12, '定焦 180 mm', 30500, 'LN_09'),
(19, 2, 'Nikon AF-S NIKKOR 200mm f/2G ED VR II', 12, '定焦 200 mm', 183900, 'LN_10'),
(20, 2, 'Nikon AF-S Fisheye NIKKOR 8-15mm f/3.5-4.5E ED', 13, '8 - 15 mm', 42300, 'LN_11'),
(21, 2, 'Nikon AF-P DX NIKKOR 10-20mm F/4.5-5.6G VR', 13, '10 - 20 mm', 10700, 'LN_12'),
(22, 2, 'Nikon 1 NIKKOR VR 6.7-13mm f/3.5-5.6', 13, '6.7 - 13 mm', 16800, 'LN_13'),
(23, 2, 'Nikon AF-S NIKKOR 16-35mm f/4G ED VR', 13, '16 - 35 mm', 43200, 'LN_14'),
(24, 2, 'Nikon AF-S NIKKOR 14-24mm f/2.8G ED', 13, '14 - 24 mm', 68050, 'LN_15'),
(25, 2, 'Nikon NIKKOR Z 35mm f/1.8 S', 14, '定焦 35 mm', 28700, 'LN_16'),
(26, 2, 'Nikon AF-S Nikkor 20mm f/1.8G ED', 14, '定焦 20 mm', 28000, 'LN_17'),
(27, 2, 'Nikon 1 NIKKOR 10mm f/2.8', 14, '定焦 10 mm', 7500, 'LN_18'),
(28, 2, 'Nikon AF Nikkor 20mm f/2.8D', 14, '定焦 20 mm', 17500, 'LN_19'),
(29, 2, 'Nikon AF DX Fisheye-Nikkor 10.5mm f/2.8G ED', 14, '定焦 10.5 mm', 23600, 'LN_20'),
(30, 2, 'Nikon AF-S NIKKOR 24-70mm f/2.8E ED VR', 15, '24 - 70 mm', 72000, 'LN_21'),
(31, 2, 'Nikon 1 Nikkor VR 10-30mm f/3.5-5.6 PD-ZOOM', 15, '10 - 30 mm', 10500, 'LN_22'),
(32, 2, 'Nikon AF-S NIKKOR 24-120mm F4 G ED VR', 15, '24 - 120 mm', 39500, 'LN_23'),
(33, 2, 'Nikon AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR', 15, '18 - 55 mm', 5200, 'LN_24'),
(34, 2, 'Nikon AF-S DX Zoom-Nikkor 17-55mm f/2.8G IF-ED', 15, '17 - 55 mm', 45500, 'LN_25'),
(35, 2, 'Nikon AF-S DX Micro NIKKOR 40mm f/2.8G', 16, '定焦 40 mm', 9100, 'LN_26'),
(36, 2, 'Nikon AF-S VR Micro-Nikkor 105mm f/2.8G IF-ED', 16, '定焦 105 mm', 27900, 'LN_27'),
(37, 2, 'Nikon AF-S Micro NIKKOR 60mm f/2.8G ED', 16, '定焦 60 mm', 21100, 'LN_28'),
(38, 2, 'Nikon AF Micro-Nikkor 60mm f/2.8D', 16, '定焦 60 mm', 12800, 'LN_29'),
(39, 2, 'Nikon AF Micro-Nikkor 200mm f/4D IF-ED', 16, '定焦 200 mm', 41600, 'LN_30'),
(40, 1, 'Canon EF 70-300 F4-5.6 IS II USM', 11, '70 - 300 mm', 16350, 'LC_01'),
(41, 1, 'Canon EF 70-300mm f/4.0-5.6 L IS USM', 11, '70 - 300 mm', 44000, 'LC_02'),
(42, 1, 'Canon EF 70-200mm f/2.8L IS II USM', 11, '70 - 200 mm', 71150, 'LC_03'),
(43, 1, 'Canon EF-S 55-250mm F4-5.6 IS', 11, '55 - 250 mm', 8300, 'LC_04'),
(44, 1, 'Canon EF 70-200mm f4.0L USM', 11, '70 - 200 mm', 22000, 'LC_05'),
(45, 1, 'Canon EF 300mm f/2.8 L IS II USM', 12, '定焦 300 mm', 202000, 'LC_06'),
(46, 1, 'Canon EF 300mm f4L IS USM', 12, '定焦 300 mm', 44700, 'LC_07'),
(47, 1, 'Canon EF 200mm f2.8L II USM', 12, '定焦 200 mm', 24800, 'LC_08'),
(48, 1, 'Canon EF 135mm f2.0L USM', 12, '定焦 135 mm', 33100, 'LC_09'),
(49, 1, 'Canon EF 500mm f/4L IS II USM', 12, '定焦 500 mm', 291100, 'LC_10'),
(50, 1, 'Canon EF 11-24mm f/4L USM', 13, '11 - 24 mm', 94000, 'LC_11'),
(51, 1, 'Canon EF 16-35mm F4L IS USM', 13, '16 - 35 mm', 33500, 'LC_12'),
(52, 1, 'Canon EF-M 11-22mm f/4-5.6 IS STM', 13, '11 - 22 mm', 12000, 'LC_13'),
(53, 1, 'Canon EF 17-40mm f/4.0L USM', 13, '17 - 40 mm', 25100, 'LC_14'),
(54, 1, 'Canon EF-S 10-22mm f/3.5-4.5 USM', 13, '10 - 22 mm', 20000, 'LC_15'),
(55, 1, 'Canon EF 35mm f/1.4L II USM', 14, '定焦 35 mm', 58300, 'LC_16'),
(56, 1, 'Canon EF 35mm f/2 IS USM', 14, '定焦 35 mm', 20700, 'LC_17'),
(57, 1, 'Canon EF-M 22mm f/2.0 STM', 14, '定焦 22 mm', 7500, 'LC_18'),
(58, 1, 'Canon EF 14mm f/2.8L II USM', 14, '定焦 14 mm', 69500, 'LC_19'),
(59, 1, 'Canon EF 28mm f/1.8 USM', 14, '定焦 28 mm', 17500, 'LC_20'),
(60, 1, 'Canon RF 28-70mm f/2L USM', 15, '28 - 70 mm', 98700, 'LC_21'),
(61, 1, 'Canon EF 24-70mm f2.8L II USM', 15, '24 - 70 mm', 63100, 'LC_22'),
(62, 1, ' Canon EF 28-300mm f3.5-5.6L IS USM', 15, '28 - 300 mm', 78000, 'LC_23'),
(63, 1, 'Canon EF 24-105mm f/3.5-5.6 IS STM', 15, '24 - 105 mm', 16300, 'LC_24'),
(64, 1, 'Canon EF 24-70mm f/4L IS USM', 15, ' 24 - 70 mm', 39100, 'LC_25'),
(65, 1, 'Canon EF 100mm f/2.8L Macro IS USM', 16, ' 定焦 100 mm', 28700, 'LC_26'),
(66, 1, 'Canon EF 180mm f/3.5L Macro USM', 16, ' 定焦 180 mm', 46300, 'LC_27'),
(67, 1, ' Canon EF-M 28mm f/3.5 Macro IS STM', 16, ' 定焦 28 mm', 9900, 'LC_28'),
(68, 1, 'Canon EF 100mm f2.8 Macro USM', 16, ' 定焦 100 mm', 20300, 'LC_29'),
(69, 1, ' Canon EF-S 60mm f2.8 Macro USM', 16, ' 定焦 60 mm', 16000, 'LC_30'),
(70, 3, 'LEICA APO-VARIO-ELMAR-T 55-135mm f/3.5-4.5 ASPH.', 11, '55 - 135 mm', 68000, 'LL_01'),
(71, 3, 'LEICA APO Tele Elmar-S 180/3.5 (CS)', 12, '定焦 180 mm', 260550, 'LL_02'),
(72, 3, 'LEICA APO-TELYT-M 135 mm f/3.4', 12, '定焦 135 mm', 125000, 'LL_03'),
(73, 3, 'Leica Super-Vario-Elmar-SL 16–35/3.5–4.5 ASPH.', 13, '16 - 35 mm', 179800, 'LL_04'),
(74, 3, 'LEICA SUPER-VARIO-ELMAR-T 11-23mm f/3.5-4.5 ASPH.', 13, '11 - 23 mm', 60750, 'LL_05'),
(75, 3, 'LEICA TRI-ELMAR-M 16-18-21 mm f/4 ASPH', 13, '16 - 21 mm', 220100, 'LL_06'),
(76, 3, 'Leica Super-Elmar-M 21mm f/3.4 ASPH', 14, '定焦 21 mm', 104300, 'LL_07'),
(77, 3, 'LEICA SUMMICRON-M 35 mm f/2 ASPH', 14, '定焦 35 mm', 80000, 'LL_08'),
(78, 3, 'LEICA ELMARIT-M 28 mm f/2.8 ASPH', 14, '定焦 28 mm', 56800, 'LL_09'),
(79, 3, 'LEICA SUMMILUX-M 21 mm f/1.4 ASPH', 14, '定焦 21 mm', 178000, 'LL_10'),
(80, 3, 'LEICA ELMAR-M 24mm f/3.8 ASPH', 14, '定焦 24 mm', 51100, 'LL_11'),
(81, 3, 'LEICA VARIO-ELMAR-T 18-56mm f/3.5-5.6 ASPH.', 15, '18 - 56 mm', 55200, 'LL_12'),
(82, 3, 'Leica APO-Macro-Elmarit-TL 60mm F2.8 ASPH', 16, '定焦 60 mm', 50000, 'LL_13'),
(83, 3, 'LEICA APO Macro Summarit-S 120/2.5 (CS)', 16, '定焦 120 mm', 11800, 'LL_14'),
(84, 3, 'LEICA MACRO-ELMAR-M 90 mm f/4', 16, '定焦 90 mm', 74000, 'LL_15'),
(85, 4, 'SanDisk Extreme SDXC UHS-1(V30)', 7, '讀取速度高達每秒150MB \r\n寫入速度高達每秒70MB \r\nClass 10，高畫質錄影不間斷 \r\nUHS速度等級Class (U3) \r\nVideo Speed Class等級 (V30) \r\n支援Full HD(1080P)、3D及4K影片 ', 999, 'SD-01'),
(86, 4, 'SanDisk Extreme Pro CF', 7, '極速讀取最高160MB/秒 \r\n極速寫入最高150MB/秒 \r\n1067倍極致高速讀寫 \r\n滿足4K 攝影所需 \r\nSanDisk獨有控制晶片技術', 3080, 'SD-02'),
(87, 4, 'SDXC R260W100 UHS-II U3', 7, '支援對應UHS-II 提升讀寫能力 \r\n對應UHS-II規格最大讀取達260MB/秒 \r\n對應UHS-I規格 適用於4K攝影 \r\n對應UHS速度等級3 \r\n防水、耐高溫、防X光、防震的設計', 4480, 'SD-03'),
(88, 4, 'SONY 64GB XQD R440M/s ', 7, '可連接數位單眼相機中高速連拍 \r\n超大容量XQD記憶卡 \r\n寫入速度400MB/s*讀取速度440MB/s*的高速性能 \r\n無須擔心大容量數據傳輸到個人電腦的慢速等問題 \r\n可在4k攝影機中拍出穩定的動畫', 4990, 'SD-04'),
(89, 4, '新武士 SAMURAI Outdoor 255B 反折 三腳架', 8, '收折33CM \r\n最高高度138CM \r\n腳架重量900g \r\n球型雲台 \r\n附腳架袋', 1590, 'FT-01\r\n'),
(90, 4, 'KINGJOY 勁捷 K3208腳架+QH20雲台', 8, '三腳架與單腳架二用 \r\n球型雲台設計/碳纖維製造 \r\n享受更多的低角度拍攝自由', 5390, 'FT-03'),
(91, 4, 'BEIKE 北卡 BK-472 碳纖維專家必備扳扣型三腳架', 8, '碳纖維材質 \r\n中軸設定螺旋鎖更穩固 \r\n節管設計及設置360度刻度盤', 3690, 'FT-04'),
(92, 4, 'FOTOPRO MINI PRO 迷你三腳架', 8, '體積小好攜帶 \r\n半自動翻轉 \r\n載重6KG', 2490, 'FT-02'),
(93, 4, 'Speedlite 600EX II-RT', 10, '閃光指數達60\r\n連續閃光次數大幅提升 \r\nLCD螢幕新增回電狀況顯示', 19900, 'LG-01'),
(94, 4, 'Macro Twin Lite MT-26EX-RT 微距雙邊閃光燈', 10, '優越閃光性能\r\n採用高亮度白LED對焦燈\r\n更穩定可靠的結構', 31600, 'LG-02'),
(95, 4, 'Canon MR-14EX II 環形微距閃光燈 ', 10, '為EF微距鏡設計 \r\n具有獨立控制的左、右閃光燈管 \r\n提供更詳細閃光拍攝資訊的LCD螢幕 \r\n搭載5級亮度調整高亮度白色LED對焦燈 \r\n支援光脈衝主控拍攝功能', 18870, 'LG-03'),
(96, 4, 'Nikon Speedlight SB-5000 閃光燈', 10, '化繁為簡，創意激增 \r\n減少停機，提升拍攝效率 \r\n智能設計，實用非凡', 13585, 'LG-04'),
(97, 4, 'NIKON Speedlight SB-700 閃光燈 平輸', 10, '配備無線閃光系統 \r\n主閃光燈功能 \r\n多重閃光攝影功能 \r\n內置溫度感應器 \r\n多位置電動變焦功能 \r\n2.5秒高速回電', 8500, 'LG-05'),
(98, 4, 'Godox TT685N 閃光燈', 10, 'GN值 60 (m ISO 100)\r\n支援2.4G無線電傳輸\r\n支援1/8000秒高速同步', 3000, 'LG-06'),
(99, 4, 'Leica SF 60 Flash 閃光燈', 10, '儘管SF 60的重量僅為300克，高度為98 mm，但閃光燈在ISO 100下閃光指數可達60。其閃光燈頭可在左右方向上水準旋轉180度，並向上傾斜90度。SF 60的這種多功能特性使其成為從眾多位置和角度進行間接，反彈和柔和閃光的理想選擇。。它可以自動調整焦距從24到200毫米（相當於35毫米），閃光燈還裝置一個反光板，用於16mm以下的超廣角曝光。', 19100, 'LG-07'),
(100, 1, 'Canon EOS 6D Mark II', 4, '全新2,620萬像素全片幅尺寸CMOS 影像感應器\r\n配備雙像素CMOS自動對焦（DAF）技術\r\n標準ISO範圍100-40000\r\n採用最新DIGIC 7數位影像處理器\r\n連續拍攝速度最高約每秒6.5張\r\n明亮0.71x 放大率光學觀景窗，加入「智慧觀景器II」讓使用者自訂顯示電子水平儀、格線、長寬比線及拍攝設定\r\n支援50p/59.94p幀率FHD短片格式，加入4K UHD 縮時短片11及FHD HDR短片13\r\n內建GPS接收器並支援記錄器功能\r\n內建Wi-Fi 、NFC及低耗電藍牙技術，可透過智', 49900, 'CC-02'),
(101, 1, 'EOS 7D Mark II', 2, '全新研發65點全十字型自動對焦感應器\r\n每秒10張高速連續拍攝\r\nEV-3的低光環境下自動對焦\r\nEOS Movie 強化短片伺服自動對焦功能\r\n專業及堅固可靠的機身設計\r\n標準ISO範圍為100-16000\r\nCanon 2,020 萬像素APS-C CMOS 影像感測器\r\n100%視野率的全新智慧光學觀景窗\r\nCF及SD記憶卡雙卡插糟設計\r\n自訂控制按鈕功能', 46900, 'CC-03'),
(102, 1, 'Canon EOS 77D', 5, '全新2,420萬像素APS-C 尺吋影像感應器\r\n標準ISO範圍 100-25600\r\n最高每秒6張連續拍攝速度\r\n支援數位5軸防震\r\nDAF支援伺服自動對焦連拍，於即時顯示拍攝持續追蹤主體\r\n多角度觸控式螢幕\r\nWi-Fi功能讓拍攝、分享更輕鬆\r\n支援低耗電藍牙技術', 23900, 'CC-04'),
(103, 1, 'Canon EOS 80D', 5, '全新研發2,420萬像素APS-C 尺寸影像感測器\r\n標準ISO範圍ISO 100至16000\r\n全新45點全十字型自動對焦感應器', 31900, 'CC-05'),
(104, 1, 'Canon EOS 800D', 5, '全新研發的2,420萬像素CMOS影像感測器\r\n標準ISO範圍 100-25600\r\n源自EOS 80D的45點全十字型自動對焦感測器\r\n全新DIGIC 7數位影像處理器\r\n多角度觸控式螢幕，觸控對焦與操控\r\n支援數位五軸防震\r\n全新DIGIC 7數位影像處理器\r\n0.03秒高速自動對焦\r\n最高每秒6張連續拍攝速度\r\n先進的短片拍攝與對焦功能\r\n全新引導式界面', 18900, 'CC-06'),
(105, 1, 'Canon EOS R', 4, '為RF鏡頭改良光學設計的3,030萬像素全片幅Canon CMOS影像感應器\r\nDAF提供短至0.05秒的驚人自動對焦速度\r\n支援5,655個自動對焦點\r\n支援於接近完全漆黑的EV -6環境對焦\r\n最高每秒8張高速連續拍攝，以伺服自動對焦（Servo AF）連拍時最高每秒5張\r\n輕巧堅固鎂合金機身結構及可靠防塵防水滴設計', 67000, 'CC-07'),
(106, 1, 'Canon EOS RP', 4, '2,620萬像素全片幅影像感測器\r\n雙像素CMOS自動對焦，0.05秒高速對焦能力\r\n昏暗環境下EV -5 對焦亮度範圍\r\n眼睛偵測自動對焦新增追蹤對焦功能\r\n機身僅重440g\r\n全新[包圍對焦]功能', 42900, 'CC-08'),
(107, 3, 'Leica_M10', 4, '新設計的 2,400 萬畫素全片幅感光元件\r\n・新款 Leica Maestro II 影像處理器\r\n・3 吋螢幕不可翻轉觸控\r\n・機頂蓋厚度僅 33.75mm，為 M 機歷代最薄\r\n・機頂左側新增 ISO 感光度實體轉盤\r\n・感光度範圍 ISO100 至 ISO 50,000\r\n・機背僅有四向操控轉盤、相簿、LiveView 與選單等四個實體按鍵\r\n・連拍速度最高每秒 5 張，搭配 2GB 的緩衝記憶體\r\n・新增可客製化功能的 Favorites Menu\r\n・沒有錄影功能\r\n・內建 Wi-Fi 可傳', 280000, 'CL-01'),
(108, 3, 'Leica-C-Lux\r\n', 5, '15 倍光學變焦、1\" 感光元件、2,010 萬有效像素、Wi-Fi 傳輸、5 軸防震、內置 233 萬像素 EVF', 40000, 'CL-03'),
(109, 3, 'Leica-D-Lux-7', 5, '2,100 萬像素 4/3\"\" Live MOS、支援 Multi-Aspect 多重拍攝比例、4K 超高清影片、24-75mm f/1.7-2.8 鏡頭、內置 276 萬像素 EVF、支援 USB 充電\r\n1,700 萬像素\r\n3.1x 光學變焦\r\nDMW-BLG10E 專用鋰充電池\r\n連電池 403 Gram', 40000, 'CL-04'),
(110, 3, 'Leica-SL-system', 4, '2400萬畫素CMOS，無低通濾鏡設計\r\n感光度範圍ISO 50~ISO 50000\r\n每秒連拍速度最高11fps（DNG+JPG）合焦速度最短只要0.18秒。\r\n可錄製4K（4096x2160 24fps）高畫質影片，採Super 35mm       格式。\r\n鋁合金機身，支援防塵防滴設計。\r\n內建440萬素電子觀景器。\r\n機背觸控螢幕規格為2.95吋104萬點。\r\n內建GPS與Wi-Fi功能。\r\n每秒連拍速度最高11fps（DNG+JPG）\r\n支援麥克風輸入、同步監聽孔、USB 3.0傳輸。\r\n', 218000, 'CL-06'),
(111, 3, 'Leica-Sofort', 5, '貴族文青Leica首款拍立得相機\r\n三種對焦區域、六種拍攝模式、滿足各種拍攝需求\r\n鏡頭外圈可直接轉換標準/無限對焦，拍攝變焦超簡單', 12900, 'CL-07'),
(112, 3, 'leica-s-system', 5, '3,750 萬像素\r\n視鏡頭而定x 光學變焦\r\n2100 mAh 專用鋰電池\r\n連電池 1260 Gram', 505000, 'CL-08'),
(113, 3, 'Leica-TL2', 5, '一體化鋁製機身、APS-C 尺寸 2,400 萬像 CMOS、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 399 Gram', 70700, 'CL-09'),
(114, 3, 'Leica-V-Lux', 5, '4k高畫質影片 \r\n內設WI-FI、NFC \r\n每秒12幀高速連拍 \r\n2000萬高畫素、16倍變焦鏡頭 \r\n3吋翻蓋式螢幕、超高速自動對焦', 45900, 'CL-10'),
(115, 2, 'nikon- d7200', 5, '2,420 萬像素CMOS 影像感應器 \r\nEXPEED 4影像處理引擎 \r\nDX及1.3倍格式Full HD高畫質錄影 \r\n內建WIFI功能 \r\n51點自動對焦系統', 24900, 'CN-01'),
(116, 2, 'nikon-5600', 4, '39點、21點、9點動態、全範圍自動對焦功能；並可3D追蹤能輕鬆鎖定移動物體', 20900, 'CN-02'),
(117, 2, 'nikon-d500', 4, '2,090萬有效像素 \r\nEXPEED5影像處理器 \r\n153點AF對焦系統 \r\n-4EV昏暗環境流暢對焦 \r\n影院級4k UHD短片攝錄 \r\n3.2吋觸控式翻轉螢幕 \r\nSD+XQD雙卡槽設計 \r\n內置SnapBridge功能 \r\nISO 51200 ', 69900, 'CN-03'),
(118, 2, 'nikon-d750', 4, '2,432 萬像素CMOS 影像感應器 \r\nEXPEED 4影像處理引擎 \r\n3.2吋可翻轉液晶螢幕 \r\n內建WIFI功能 \r\n每秒6.5張高速連拍 \r\n雙SD卡插槽設計', 49000, 'CN-04'),
(119, 2, 'nikon-d850', 4, '無聲快門 (Live View模式下)\r\n8K縮時(需透過第三方軟體)\r\n內建4K縮時短片\r\nRAW 批次處理(大量RAW機身處理)\r\nRAW ：大(4,500萬)/中(2,560萬)/小(1,140萬)\r\n機身左側按鍵背光燈\r\n0.75 倍光學觀景窗\r\n峰值對焦(手動對焦時)\r\n內建底片數位化功能，翻拍底片\r\n對焦移動拍攝', 99850, 'CN-05'),
(120, 2, 'nikon-d3500', 5, 'Picture Control\r\n5 FPS連續拍攝模式', 14500, 'CN-06'),
(121, 2, 'nikon-d7500', 5, '2090 萬像素CMOS 影像\r\n51點自動對焦系統\r\n高品質 4KUHD影片', 39150, 'CN-07'),
(122, 2, 'nikon-z6', 4, 'FX 格式無反光鏡相機\r\n配備 2450 萬有效像素\r\n全新的EXPEED 6圖像處理', 61000, 'CN-08');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `brands_lens_map`
--
ALTER TABLE `brands_lens_map`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `brands_products_map`
--
ALTER TABLE `brands_products_map`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `lens`
--
ALTER TABLE `lens`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `lens_categories_map`
--
ALTER TABLE `lens_categories_map`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products_categories_map`
--
ALTER TABLE `products_categories_map`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products_lens_map`
--
ALTER TABLE `products_lens_map`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `p_products`
--
ALTER TABLE `p_products`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `brands`
--
ALTER TABLE `brands`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `brands_lens_map`
--
ALTER TABLE `brands_lens_map`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `brands_products_map`
--
ALTER TABLE `brands_products_map`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `categories`
--
ALTER TABLE `categories`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `collection`
--
ALTER TABLE `collection`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lens`
--
ALTER TABLE `lens`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=76;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lens_categories_map`
--
ALTER TABLE `lens_categories_map`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products_categories_map`
--
ALTER TABLE `products_categories_map`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products_lens_map`
--
ALTER TABLE `products_lens_map`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p_products`
--
ALTER TABLE `p_products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

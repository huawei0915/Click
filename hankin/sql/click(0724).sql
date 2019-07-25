-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 24 日 11:18
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.2.19

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
-- 資料表結構 `lens`
--

CREATE TABLE `lens` (
  `sid` int(11) NOT NULL COMMENT '編號',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '廠牌',
  `model` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '型號',
  `classif` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '分類',
  `space` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '對應最大片幅',
  `focal` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '焦距',
  `aperture` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '光圈',
  `perspective` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '視角',
  `lens_group` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '鏡片組',
  `numofab` int(255) DEFAULT NULL COMMENT '光圈葉片數',
  `minfocal` int(255) DEFAULT NULL COMMENT '最小光圈',
  `focus_distance` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '最近對焦距離',
  `magnification` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '放大倍率',
  `focusing_sys` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '對焦系統',
  `zoom` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '變焦系統',
  `size` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '濾光鏡尺寸',
  `long_size` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '直徑 x 鏡長',
  `weight` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '重量',
  `price` int(255) NOT NULL COMMENT '價錢',
  `imges` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `lens`
--

INSERT INTO `lens` (`sid`, `label`, `model`, `classif`, `space`, `focal`, `aperture`, `perspective`, `lens_group`, `numofab`, `minfocal`, `focus_distance`, `magnification`, `focusing_sys`, `zoom`, `size`, `long_size`, `weight`, `price`, `imges`) VALUES
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
(1, 'admin@gmail.com', 'admin123', 'admin123', '0988-888-888', 'Admin', 1, '2019-08-20', '台北市大安區復興南路一段390號2樓', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `level` varchar(30) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_sid` int(11) NOT NULL DEFAULT 1,
  `imgs` varchar(500) NOT NULL,
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

INSERT INTO `products` (`sid`, `level`, `product_name`, `price`, `category_sid`, `imgs`, `商品簡介`, `相機格式`, `感光元件像素`, `有效像素`, `感光元件大小`, `感光元件格式`, `感光元件種類`, `感光元件濾鏡排列`, `感光元件生產商`, `最大解像度`, `解像度選擇`, `壓縮模式`, `質素調較`, `無壓縮影像格式`, `影像比例`, `動畫解像度`, `動畫種類`, `動畫音效`, `訊號轉換器`, `雜訊消除`, `防手震功能`, `鏡片組合`, `鏡片焦距`, `135 格式焦距`, `變焦能力`, `動畫種類1`, `動畫音效1`, `訊號轉換器1`, `雜訊消除1`, `鏡片組合2`, `鏡片焦距2`, `135 格式焦距2`, `變焦能力2`, `數碼變焦`, `光圈範圍`, `焦距變換比率`, `自動對焦情況`, `AF Assist Light`, `手動對焦`, `正常對焦範圍`, `微距對焦範圍`, `鏡頭接環`, `轉換鏡頭`, `曝光模式`, `場景模式`, `快門速度`, `測光模式`, `曝光補償`, `自動曝光鎖`, `包圍曝光`, `ISO 感光值`, `白平衡設定`, `自拍`, `連拍`, `定時拍攝`, `LCD 熒光幕`, `光學觀景器`, `播放放大`, `儲存媒體`, `內存`, `跟機記憶體`, `接口`, `視頻輸出`, `打印協定`, `電池種類`, `電池手柄`, `隨機電池及充電器`, `電池壽命`, `支援火牛輸入`, `腳架座材料`, `機身重量`, `重量含電池`, `體積`, `搖遠控制`, `隨機軟件`, `隨機物件`, `附註`) VALUES
(1, '專業', 'Canon EOS 5D Mark IV', 117000, 1, '', '30.4MP 全片幅 CMOS、DIGIC 6+ 晶片、61 點 AF、7fps 連拍、ISO 102400 高感光、4K 拍片、Dual Pixel AF、Dual Pixel RAW 拍攝、GPS 及 Wi-Fi 功能\r\n3170 萬像素\r\n視鏡頭而定x 光學變焦\r\nLP-E6 / LP-E6N鋰離子充電池\r\n機身 800 Gram', '3040 萬像素單鏡反光相機', '3040 萬像素', '3170 萬像素', '36 x 24 mm', '-', 'CMOS', '-', 'Canon', '6720 x 4480', '6720 x 4480 (L);\r\n4464 x 2976 (M);\r\n3360 x 2240 (S1); \r\n1920 x 1280 (S2);\r\n720 x 480 (S3);\r\n6720 x 4480 (RAW);\r\n5040 x 3360 (M-RAW);\r\n3360 x 2240 (S-RAW)', 'JPEG (EXIF 2.3)', 'DPRaw Raw JPEG Fine  JPEG Normal (可自定壓縮比率)', 'DPRAW、RAW、RAW + JPEG (Fine)、RAW + JPEG (Standard)', '3:2', '4K：29.97p/24.00p/23.98p (NTSC); \r\n4K：25.00p/24.00p (PAL); \r\n全高清：59.94p/29.97p/24.00p/23.98p (NTSC);\r\n全高清：50.00p/25.00p/24.00p (PAL);\r\n高清：119.9p (NTSC);\r\n高清：100.0p (PAL);', 'MPEG-4 AVC/H.264 格式、立體聲', '支援立體聲收音', '14 bit', '支援', 'Hybrid IS 光學防震', '9 組 11 片1 片雙面非球面鏡、1 片非球面 UA 鏡、1 片非球面鏡、1 片 UD 低色散鏡片', '8.8-36.8 mm', '24 mm 至 100 mm', '4.2X', 'MPEG-4 AVC/H.264; \r\n分別可選 ALL-I（I-only）、IPB 兩種', '內置單聲道 / 支援外置收音', '-', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '1.0 倍', 'TTL-AREA-SIR 自動對焦感應器\r\n61 個對焦點41 點對應 f/4 十字對焦\r\n單次對焦 (One-Shot AF)\r\n人工智能伺服對焦 (AI SERVO)\r\n6 種自動對焦區域模式(包括區域自動對焦及重點自動對焦)\r\nDual Pixel CMOS AF\r\n', '以閃光燈頻閃', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', 'Canon EF 接環', '視鏡頭而定', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '-', '1 / 8000 至 30 秒支援 B 快門', '150000像素RGB+IR測光感應器\r\n局部測光\r\n點測光 (Spot Metering)\r\n中央偏重權衡測光', '-3EV至+3EV以1/3EV或1/2EV級調整', '支援', '-3EV至+3EV每次以1/3EV調整\r\n包圍數量2357張\r\n可選擇以快門、光圈或 ISO 值包圍\r\n', '100 200 400 800 1600 3200 6400 12800 25600 32100(1/3 級調校)\r\n擴展模式 50 102400', '自動、日光、陰影、密雲、鎢絲燈、光管、閃光燈、直接手動指定色溫 (Kelvin)\r\n支援手動白平衡設定', '10 / 3 秒延遲自拍模式', '每秒 7 張高速連續拍攝；可連續拍攝焦限 JPEG 或 21 張 RAW\r\nRAW + JPEG 可連拍 16 張 (CF UDMA 7)', '電腦控制 (以 USB 連接)', '3.2 吋 Touch LCD 熒光幕 視野率為 100 %', '0.71x 放大率、稜鏡反射式光學觀景器的準確度為 100%', '10X', 'Compact Flash 記憶咭 (支援 UDMA 7) (Type I only) 支援 UHS-I Speed Class 3\r\nSD / SDHC / SDXC', '-', '-', 'USB 3.0', 'HDMI / PAL / NTSC', 'PictBridge', 'LP-E6 / LP-E6N鋰離子充電池', '-', 'LP-E6N 專用鋰充電池組及專用充電器', '-', '支援（另購）', '金屬', '800 克', '890 克', '150.7 x 116.4 x 75.9mm', '-', '-', '-', '採用DIGIC 6+ 影像處理器\r\n支援 4K 電影 Time Code 功能及壓縮率可選\r\n新增 Dual Pixel RAW 拍攝\r\n內置 GPS 及 Wi-Fi\r\n61 點 AF 點全部對應 f/8 感應'),
(2, '專業', 'Nikon Z7', 102980, 2, '', '4,575 萬像素全片幅 CMOS、493 點 Hybrid PDAF 、內置 5 軸防震、9fps 連拍、4K 攝錄\r\n4,575 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子電池EN-EL15b\r\n連電池 675 Gram', '4575 萬像素，可換鏡頭式數碼相機', '4575 萬像素', '4575 萬像素', '35.9 x 23.9 mm', '35mm Full Frame', 'CMOS', '-', '-', '8256 x 5504', 'FX-format: 8256 x 5504;\r\n6192 x 4128;\r\n4128 x 2752;\r\nDX-format: 5408 x 3600;\r\n5:4 : 6880 x 5504; \r\n1:1 : 5504 x 5504; \r\n16:9 : 8256 x 4640', 'JPEG (EXIF 2.3)', 'Large, Medium, Small', 'NEF、TIFF（支援 RAW M, S）', '3:2 / 16:9 / 5:4 / 1:1', '3840 x 2160 @ 30p / 144 Mbps, MOV, H.264, Linear PCM; \r\n3840 x 2160 @ 25p / 144 Mbps, MOV, H.264, Linear PCM; \r\n3840 x 2160 @ 24p / 144 Mbps, MOV, H.264, Linear PCM;\r\n1920 x 1080 @ 120p, MOV, H.264, Linear PCM;\r\n1920 x 1080 @ 100p, MOV, H.264, Linear PCM;', 'MP4', '-', '-', '支援', '光學防震、電子減震', '35x optical Zoom', '4.3 - 151.0 mm', '24 mm 至 840 mm', '35X', 'MPEG-4, H.264', '立體聲', '14 bits', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '1 倍', '493 點 Hybrid PDAF', '-', '支援', '視鏡頭而定', '視鏡頭而定', 'Nikon Z mount', '視鏡頭而定', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '-', '1/8000 至 30 秒，支援 B 快門', '矩陣：3D 彩色矩陣測光 III / 中央平均 / 偏重中央 / 重點', '-5EV 至 +5EV 以 1/3 EV, 1/2 EV 級調整', '支援', '拍攝 2 至 9 幅，以 1/3、1/2、2/3 或 1 EV 為等級進行微調', 'ISO 64 - 25600 可擴展至 ISO 32 (Low-1) / 102400 (Hi-2)', '自動（3種類型）、白熾燈、螢光燈（7種類型）、直射陽光、閃光、陰天、陰影、選擇色溫(2500 K-10000 K)，均可進行微調\r\n手動預置（最多可存儲 6 個值）手動白平衡設定', '2秒、5秒、10秒、20秒；以0.5、1、2或3秒為間隔曝光1-9次自拍模式', '9 fps（支援自動對焦和自動曝光）', '-', '3.2 吋 多角度 TFT LCD（輕觸式） 熒光幕 ，視野率為 100 %', '369 萬點 EVF; 約 0.8 倍放大率，光學觀景器的準確度為 100%', '-', 'XQD 記憶卡', '-', '-', '高速 USB 3.1; 3.5mm 音訊輸入/輸出', 'micro HDMI', 'PictBridge、DPOF', '鋰離子電池EN-EL15b', '-', '鋰離子 電池 EN-EL15b及專用充電器', '330 張', '-', '金屬', '-', '675 克', '134 x 101 x 68 mm', '-', '-', '-', '內置機身 5 軸防震\r\n支援 N-Log 攝錄'),
(3, '專業', 'Leica CL', 155000, 3, '', 'APS-C 尺寸 2,400 萬像 CMOS、4K 拍片、內置 EVF 取景、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 403 Gram', '2500 萬像素，可換鏡頭式數碼相機', '2500 萬像素', '2400 萬像素', '23.6 x 15.7 mm', 'APS-C', 'CMOS', '-', 'CMOS', '6016 x 4014', '6000 x 4000; \r\n4272 x 2856; \r\n3024 x 2016', 'JPEG', '優良, 良好, 標準', 'DNG', '3:2', '3840 x 2160 @ 30p, MP4, H.264, AAC;\r\n1920 x 1080 @ 60p, MP4, H.264, AAC;\r\n1280 x 720 @ 60p, MP4, H.264, AAC;\r\n1280 x 720 @ 120p, MP4, H.264, AAC;', 'MPEG-4 無間斷有聲影片', '支援 ACC 立體聲收音', '-', '-', '-', '9組11片，包括3片非球面', '28mm', '28 mm至28mm', '1X', 'MP4', 'Stereo', '12-bit', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '視鏡頭而定', '1.5 倍', '單點選擇\r\n多點自動對焦\r\n單點中央\r\n人面對焦\r\n觸控對焦', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', 'Leica T、可透過轉接環使用 Leica M 鏡頭', '-', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', 'sport, portrait, landscape, night portrait, snow/beach, fireworks, candlelight, sunset', '1/8000 至 30 秒，不支援 B 快門', '多區測光\r\n平均偏重中央測光\r\n重心測光\r\n人臉優先', '+/- 3 EV 以 1/3 EV 級調整', '支援', '拍攝三張，以 1/3 級 EV，增減 3 EV 值', 'Auto, 100-50000', '自動、日光、陰天、白熾燈、陰天、閃光燈、直接手動指定色溫 (Kelvin)\r\n支援手動白平衡設定', '2 秒 / 12 秒自拍模式', '10fps', '-', '3 吋 觸控式 TFT LCD 熒光幕 ，視野率為 100 %', '內置 236 萬點 EVF，光學觀景器的準確度為 100%', '-', 'SD / SDHC / SDXC', '-', '-', 'USB 2.0', 'USB 2.0', '支援', 'BP-DC 13 專用鋰電池', '-', 'BP-DC 12 專用鋰電池及BC-DC12 專用充電器', '220', '-', '金屬', '-', '403 克', '131 x 78 x 45 mm', '-', 'Adobe Photoshop Lightroom', '-', '-'),
(6, '進階', 'Canon PowerShot G7 X Mark III', 16500, 1, '', '1 吋背照層疊式 CMOS、Digic 8 影像處理技術、30fps RAW 連拍、24-100mm 等效焦段、最高 ISO 25600、4K 拍片、支援 YouTube 直播服務\r\n2,010 萬像素\r\n4.2x 光學變焦\r\nCanon NB-13L 鋰充電池\r\n機身 235 Gram', '2010 萬像素，半專業級數碼相機', '2010 萬像素', '2010 萬像素', '1.0 吋', '1 吋', 'CMOS', '-', '-', '5472 x 3648', '3:2 : 5472 x 3648; 4320 x 2880; 2304 x 1536; 720 x 480\r\n4:3 : 4864 x 3648; 3840 x 2880; 2048 x 1536; 640 x 480\r\n16:9 : 5472 x 3080; 4320 x 2432; 1920 x 1080; 720 x 408\r\n1:1 : 3648 x 3648; 2880 x 2880; 1536 x 1536; 480 x 480\r\n4:5 : 2912 x 3648; 2304 x 2880', 'JPEG (EXIF 2.3)', 'Normal, Fine, RAW', '14-bit RAW(CR3)', '4:3 / 3:2 / 16:9 / 1:1 / 4:5', '3840 x 2160 @ 30p / 120 Mbps, MOV, H.264, AAC;\r\n1920 x 1080 @ 120p / 120 Mbps, MOV, H.264, AAC;\r\n1920 x 1080 @ 60p / 60 Mbps, MOV, H.264, AAC;\r\n1920 x 1080 @ 30p / 30 Mbps, MOV, H.264, AAC', 'MPEG-4 AVC/H.264;\r\n分別可選 ALL-I（I-only）、IPB 兩種', '內置單聲道 / 支援外置收音', '14 bit', '支援', '-', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '-', '-', '-', '-', '-', '-', '-', '2X', 'f/1.8-2.8', '-', 'TTL 對比偵測對焦系統;\r\n人面對焦;\r\n人面追蹤;\r\n支援自動對焦鎖', '支援 (可選擇開啟或關閉)', '支援', '5cm - 無限遠 ( Wide ), 40cm - 無限遠 ( Tele )', '5cm - 50cm', '-', '-', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', 'Portrait, Landscape, Night Snapshot, Kids & Pets, Indoor, Sports, Sunset, Night Scene, Fireworks, Beach, Underwater, Aquarium, F', '1/25600 至 30 秒、個別拍攝模式可達 25 秒，不支援 B 快門', '平均測光 (Evaluative), 中央重點平均測光 (Centre-Weighted Averaging), 點測光 (Spot)', '-3EV 至 +3EV 以 1/3EV 級調整', '支援', '支援', '125 - 12800 (每 1/3 級調校, 可擴展至 ISO 25600)', '自動, 預設 (Daylight, Shade, Cloudy, Tungsten, Fluorescent, Fluorescent H, Flash, Underwater), 手動白平衡\r\n支援手動白平衡設定', '2 秒, 10 秒, 自訂時間, 面部偵測自拍模式', '30fps (Raw)', '支援, 1 - 60 分鐘, 1 - 100 張', '3.0 吋 TFT 觸控 LCD 熒光幕 ，視野率為 100 %', '-', '10X', 'SD / SDHC / SDXC ( 支援 UHS-I )', '-', '-', 'USB 3.1 Gen 1, HDMI', 'HDMI', 'PictBridge, Digital Print Order Format(DPOF) Version 1.1', 'Canon NB-13L 鋰充電池', '-', 'Canon NB-13L 鋰充電池', '235', 'AC Adapter Kit ACK-DC110另購）', '金屬', '235 克', '304 克', '105 x 61 x 41 mm', '-', 'Digital Camera Solution CD-ROM\r\nArcSoft Camera Suite CD-ROM', '-', '內置 Wi-Fi 及 NFC\r\nDIGIC 8 影像處理器\r\n感光度推展至 ISO 25600\r\n支援 YouTube 直播服務\r\n支援 4K 拍片');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `lens`
--
ALTER TABLE `lens`
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
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `brands`
--
ALTER TABLE `brands`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `categories`
--
ALTER TABLE `categories`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lens`
--
ALTER TABLE `lens`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=76;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

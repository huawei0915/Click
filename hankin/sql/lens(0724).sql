-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 24 日 17:16
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `lens`
--
ALTER TABLE `lens`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lens`
--
ALTER TABLE `lens`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

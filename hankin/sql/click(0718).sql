-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 18 日 10:08
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
  `name` varchar(255) NOT NULL,
  `product_sid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `brands`
--

INSERT INTO `brands` (`sid`, `name`, `product_sid`) VALUES
(1, 'canon', 0),
(2, 'nikon', 0),
(3, 'leica', 0);

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
(9, '雲台', 3),
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
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `info` text NOT NULL,
  `spec` text NOT NULL,
  `category_sid` int(11) NOT NULL DEFAULT 1,
  `imgs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

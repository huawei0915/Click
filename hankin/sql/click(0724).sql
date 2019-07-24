-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 24 日 11:03
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
(2, '專業', 'Nikon Z7', 102980, 1, '', '4,575 萬像素全片幅 CMOS、493 點 Hybrid PDAF 、內置 5 軸防震、9fps 連拍、4K 攝錄\r\n4,575 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子電池EN-EL15b\r\n連電池 675 Gram', '4575 萬像素，可換鏡頭式數碼相機', '4575 萬像素', '4575 萬像素', '35.9 x 23.9 mm', '35mm Full Frame', 'CMOS', '-', '-', '8256 x 5504', 'FX-format: 8256 x 5504;\r\n6192 x 4128;\r\n4128 x 2752;\r\nDX-format: 5408 x 3600;\r\n5:4 : 6880 x 5504; \r\n1:1 : 5504 x 5504; \r\n16:9 : 8256 x 4640', 'JPEG (EXIF 2.3)', 'Large, Medium, Small', 'NEF、TIFF（支援 RAW M, S）', '3:2 / 16:9 / 5:4 / 1:1', '3840 x 2160 @ 30p / 144 Mbps, MOV, H.264, Linear PCM; \r\n3840 x 2160 @ 25p / 144 Mbps, MOV, H.264, Linear PCM; \r\n3840 x 2160 @ 24p / 144 Mbps, MOV, H.264, Linear PCM;\r\n1920 x 1080 @ 120p, MOV, H.264, Linear PCM;\r\n1920 x 1080 @ 100p, MOV, H.264, Linear PCM;', 'MP4', '-', '-', '支援', '光學防震、電子減震', '35x optical Zoom', '4.3 - 151.0 mm', '24 mm 至 840 mm', '35X', 'MPEG-4, H.264', '立體聲', '14 bits', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '1 倍', '493 點 Hybrid PDAF', '-', '支援', '視鏡頭而定', '視鏡頭而定', 'Nikon Z mount', '視鏡頭而定', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', '-', '1/8000 至 30 秒，支援 B 快門', '矩陣：3D 彩色矩陣測光 III / 中央平均 / 偏重中央 / 重點', '-5EV 至 +5EV 以 1/3 EV, 1/2 EV 級調整', '支援', '拍攝 2 至 9 幅，以 1/3、1/2、2/3 或 1 EV 為等級進行微調', 'ISO 64 - 25600 可擴展至 ISO 32 (Low-1) / 102400 (Hi-2)', '自動（3種類型）、白熾燈、螢光燈（7種類型）、直射陽光、閃光、陰天、陰影、選擇色溫(2500 K-10000 K)，均可進行微調\r\n手動預置（最多可存儲 6 個值）手動白平衡設定', '2秒、5秒、10秒、20秒；以0.5、1、2或3秒為間隔曝光1-9次自拍模式', '9 fps（支援自動對焦和自動曝光）', '-', '3.2 吋 多角度 TFT LCD（輕觸式） 熒光幕 ，視野率為 100 %', '369 萬點 EVF; 約 0.8 倍放大率，光學觀景器的準確度為 100%', '-', 'XQD 記憶卡', '-', '-', '高速 USB 3.1; 3.5mm 音訊輸入/輸出', 'micro HDMI', 'PictBridge、DPOF', '鋰離子電池EN-EL15b', '-', '鋰離子 電池 EN-EL15b及專用充電器', '330 張', '-', '金屬', '-', '675 克', '134 x 101 x 68 mm', '-', '-', '-', '內置機身 5 軸防震\r\n支援 N-Log 攝錄'),
(3, '專業', 'Leica CL', 155000, 1, '', 'APS-C 尺寸 2,400 萬像 CMOS、4K 拍片、內置 EVF 取景、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 403 Gram', '2500 萬像素，可換鏡頭式數碼相機', '2500 萬像素', '2400 萬像素', '23.6 x 15.7 mm', 'APS-C', 'CMOS', '-', 'CMOS', '6016 x 4014', '6000 x 4000; \r\n4272 x 2856; \r\n3024 x 2016', 'JPEG', '優良, 良好, 標準', 'DNG', '3:2', '3840 x 2160 @ 30p, MP4, H.264, AAC;\r\n1920 x 1080 @ 60p, MP4, H.264, AAC;\r\n1280 x 720 @ 60p, MP4, H.264, AAC;\r\n1280 x 720 @ 120p, MP4, H.264, AAC;', 'MPEG-4 無間斷有聲影片', '支援 ACC 立體聲收音', '-', '-', '-', '9組11片，包括3片非球面', '28mm', '28 mm至28mm', '1X', 'MP4', 'Stereo', '12-bit', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', '-', '視鏡頭而定', '1.5 倍', '單點選擇\r\n多點自動對焦\r\n單點中央\r\n人面對焦\r\n觸控對焦', '支援', '視鏡頭而定', '視鏡頭而定', '視鏡頭而定', 'Leica T、可透過轉接環使用 Leica M 鏡頭', '-', '1. 支援光圈先決\r\n2. 支援快門先決\r\n3. 支援手動曝光', 'sport, portrait, landscape, night portrait, snow/beach, fireworks, candlelight, sunset', '1/8000 至 30 秒，不支援 B 快門', '多區測光\r\n平均偏重中央測光\r\n重心測光\r\n人臉優先', '+/- 3 EV 以 1/3 EV 級調整', '支援', '拍攝三張，以 1/3 級 EV，增減 3 EV 值', 'Auto, 100-50000', '自動、日光、陰天、白熾燈、陰天、閃光燈、直接手動指定色溫 (Kelvin)\r\n支援手動白平衡設定', '2 秒 / 12 秒自拍模式', '10fps', '-', '3 吋 觸控式 TFT LCD 熒光幕 ，視野率為 100 %', '內置 236 萬點 EVF，光學觀景器的準確度為 100%', '-', 'SD / SDHC / SDXC', '-', '-', 'USB 2.0', 'USB 2.0', '支援', 'BP-DC 13 專用鋰電池', '-', 'BP-DC 12 專用鋰電池及BC-DC12 專用充電器', '220', '-', '金屬', '-', '403 克', '131 x 78 x 45 mm', '-', 'Adobe Photoshop Lightroom', '-', '-'),
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
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

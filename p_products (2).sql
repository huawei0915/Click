-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 31 日 10:36
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
-- 資料庫： `test`
--

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
(1, 1, 'Canon EOS 5D Mark IV', 4, '30.4MP 全片幅 CMOS、DIGIC 6+ 晶片、61 點 AF、7fps 連拍、ISO 102400 高感光、4K 拍片、Dual Pixel AF、Dual Pixel RAW 拍攝、GPS 及 Wi-Fi 功能\r\n3170 萬像素\r\n視鏡頭而定x 光學變焦\r\nLP-E6 / LP-E6N鋰離子充電池\r\n機身 800 Gram', 117000, ''),
(2, 2, 'Nikon Z7', 4, '4,575 萬像素全片幅 CMOS、493 點 Hybrid PDAF 、內置 5 軸防震、9fps 連拍、4K 攝錄\r\n4,575 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子電池EN-EL15b\r\n連電池 675 Gram', 102980, ''),
(3, 3, 'Leica CL', 4, 'APS-C 尺寸 2,400 萬像 CMOS、4K 拍片、內置 EVF 取景、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 403 Gram', 155000, ''),
(4, 1, 'Canon PowerShot G7 X Mark III', 5, '1 吋背照層疊式 CMOS、Digic 8 影像處理技術、30fps RAW 連拍、24-100mm 等效焦段、最高 ISO 25600、4K 拍片、支援 YouTube 直播服務\r\n2,010 萬像素\r\n4.2x 光學變焦\r\nCanon NB-13L 鋰充電池\r\n機身 235 Gram', 16500, ''),
(5, 2, 'Nikon Coolpix A1000', 5, 'COOLPIX A1000 配備 35 倍光學變焦及 70 倍動態細緻變焦，於小巧緊湊的機身中提供了最高變焦率。相機備有約 1600 萬有效像素及 ISO 6400 最高感光度，於解像度及高感光度雜訊之間取得最佳平衡，於昏暗環境下仍能呈現優異影像品質。相機機身輕盈，卻支援 4K UHD/30p 格式短片攝錄兼備降低風聲雜音功能，更可在攝錄短片期間儲存靜態影像！\r\n\r\n相機的預先自動對焦 (Pre-AF) 及目標尋找 AF 功能令拍攝特寫或昏暗場景時自動對焦更精準。此外，相機配備的減震 (VR) 功能可於拍', 15900, ''),
(6, 3, 'Leica Q2', 4, '全片幅 CMOS 感光元件、4,730 萬有效像素、Wi-Fi 傳輸、內置 368 萬像素 EVF、支援 4K 拍片、最高 ISO 50000 感光度、20fps 連拍\r\n5,040 萬像素\r\n1x 光學變焦\r\nBP-SCL4 專用鋰離子充電池\r\n連電池 718 Gram', 183160, ''),
(7, 1, 'Canon EOS 1D X Mark II', 4, '2,020 萬像素、感光範圍最高 ISO 409600、61 點對焦全部支援 f/8.0 應應、4K 拍片、Touch Screen\r\n2,020 萬像素\r\n視鏡頭而定x 光學變焦\r\n專用鋰電\r\n連電池 1530 Gram', 169000, ''),
(8, 2, 'Nikon D5', 4, '2074 萬像素全片幅 CMOS、最高 ISO 3,280,000 感光度、12 fps 連拍\r\n2,074 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子 Li-ion EN-EL18a 電池\r\n連電池 1405 Gram', 209900, ''),
(9, 3, 'Leica M-D Typ 262', 4, '2,400 萬像素全片幅 CMOS、靜音快門\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\n鋰離子充電池\r\n連電池 680 Gram', 226000, ''),
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
(86, 4, 'SanDisk Extreme Pro CF', 7, '\"極速讀取最高160MB/秒 \r\n極速寫入最高150MB/秒 \r\n1067倍極致高速讀寫 \r\n滿足4K 攝影所需 \r\nSanDisk獨有控制晶片技術 \"', 3080, 'SD-02'),
(87, 4, 'SDXC R260W100 UHS-II U3', 7, '\"支援對應UHS-II 提升讀寫能力 \r\n對應UHS-II規格最大讀取達260MB/秒 \r\n對應UHS-I規格 適用於4K攝影 \r\n對應UHS速度等級3 \r\n防水、耐高溫、防X光、防震的設計\"', 4480, 'SD-03'),
(88, 4, 'SONY 64GB XQD R440M/s ', 7, '\"可連接數位單眼相機中高速連拍 \r\n超大容量XQD記憶卡 \r\n寫入速度400MB/s*讀取速度440MB/s*的高速性能 \r\n無須擔心大容量數據傳輸到個人電腦的慢速等問題 \r\n可在4k攝影機中拍出穩定的動畫\"', 4990, 'SD-04'),
(89, 4, '新武士 SAMURAI Outdoor 255B 反折 三腳架', 8, '\"收折33CM \r\n最高高度138CM \r\n腳架重量900g \r\n球型雲台 \r\n附腳架袋\"', 1590, 'FT-01\r\n'),
(90, 4, 'KINGJOY 勁捷 K3208腳架+QH20雲台', 8, '\"三腳架與單腳架二用 \r\n球型雲台設計/碳纖維製造 \r\n享受更多的低角度拍攝自由\"', 5390, 'FT-03'),
(91, 4, 'BEIKE 北卡 BK-472 碳纖維專家必備扳扣型三腳架', 8, '\"碳纖維材質 \r\n中軸設定螺旋鎖更穩固 \r\n節管設計及設置360度刻度盤 \"', 3690, 'FT-04'),
(92, 4, 'FOTOPRO MINI PRO 迷你三腳架', 8, '\"體積小好攜帶 \r\n半自動翻轉 \r\n載重6KG\"', 2490, 'FT-02'),
(93, 4, 'Speedlite 600EX II-RT', 10, '\"閃光指數達60\r\n連續閃光次數大幅提升 \r\nLCD螢幕新增回電狀況顯示\"', 19900, 'LG-01'),
(94, 4, 'Macro Twin Lite MT-26EX-RT 微距雙邊閃光燈', 10, '\"優越閃光性能\r\n採用高亮度白LED對焦燈\r\n更穩定可靠的結構\"', 31600, 'LG-02'),
(95, 4, 'Canon MR-14EX II 環形微距閃光燈 ', 10, '\"為EF微距鏡設計 \r\n具有獨立控制的左、右閃光燈管 \r\n提供更詳細閃光拍攝資訊的LCD螢幕 \r\n搭載5級亮度調整高亮度白色LED對焦燈 \r\n支援光脈衝主控拍攝功能\"', 18870, 'LG-03'),
(96, 4, 'Nikon Speedlight SB-5000 閃光燈', 10, '\"化繁為簡，創意激增 \r\n減少停機，提升拍攝效率 \r\n智能設計，實用非凡\"', 13585, 'LG-04'),
(97, 4, 'NIKON Speedlight SB-700 閃光燈 平輸', 10, '\"配備無線閃光系統 \r\n主閃光燈功能 \r\n多重閃光攝影功能 \r\n內置溫度感應器 \r\n多位置電動變焦功能 \r\n2.5秒高速回電\"', 8500, 'LG-05'),
(98, 4, 'Godox TT685N 閃光燈', 10, '\"GN值 60 (m ISO 100)\r\n支援2.4G無線電傳輸\r\n支援1/8000秒高速同步\"', 3000, 'LG-06'),
(99, 4, 'Leica SF 60 Flash 閃光燈', 10, '儘管SF 60的重量僅為300克，高度為98 mm，但閃光燈在ISO 100下閃光指數可達60。其閃光燈頭可在左右方向上水準旋轉180度，並向上傾斜90度。SF 60的這種多功能特性使其成為從眾多位置和角度進行間接，反彈和柔和閃光的理想選擇。。它可以自動調整焦距從24到200毫米（相當於35毫米），閃光燈還裝置一個反光板，用於16mm以下的超廣角曝光。', 19100, 'LG-07');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `p_products`
--
ALTER TABLE `p_products`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p_products`
--
ALTER TABLE `p_products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

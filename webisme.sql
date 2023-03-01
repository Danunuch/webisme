-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 03:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webisme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `firstname`, `lastname`) VALUES
(1, 'Adminwebsite', '$2y$10$cgrZ4R3I/a6tZkDsZYztTOdNxuEyHNClgn/FOYmlHte5zGdkb/Bpm', '2023-02-01 18:26:50', 'ACE', 'SYSTEM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `tel3` varchar(255) NOT NULL,
  `tel4` varchar(255) NOT NULL,
  `time_open` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `qr_cord` varchar(255) NOT NULL,
  `map` longtext NOT NULL,
  `line_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `tel1`, `tel2`, `tel3`, `tel4`, `time_open`, `address`, `email1`, `email2`, `qr_cord`, `map`, `line_id`) VALUES
(1, '02-100-5055', '095-987-4596', '096-292-4669', '063-941-4993', '(จ.-ศ. 8.00-17.00น.)', 'Channel Wide Computer Co., Ltd.\n89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช)\nแขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220', 'admin@cw.in.th', 'genatt11@gmail.com', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1936.556783275055!2d100.622214!3d13.892157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7d60c758220d%3A0x6fb44395301d89f!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4reC4reC4geC5geC4muC4muC5gOC4p-C5h-C4muC5hOC4i-C4leC5jCDguJfguLPguYDguKfguYfguJrguYPguKvguKHguYjguJfguLHguYnguIfguKPguLDguJrguJog4LiX4Liz4LmA4Lin4LmH4Lia4Lij4Liy4LiE4Liy4LiW4Li54LiB!5e0!3m2!1sen!2sth!4v1677214770754!5m2!1sen!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://line.me/ti/p/~@webisme');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `content3` longtext NOT NULL,
  `content4` longtext NOT NULL,
  `content5` longtext NOT NULL,
  `content6` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content1`, `content2`, `content3`, `content4`, `content5`, `content6`) VALUES
(1, '<h2>เปิดร้านขายสินค้าออนไลน์กับเรา</h2>\r\n<h3>ปกติ <s>25,000</s> บาท/ปี ราคาถูกที่สุด</h3>', '<h4>เปิดร้านค้า 1 ปี 20,000 บาท (เฉลี่ยวันละ 56 บาท)</h4>\r\n<h4>เปิดร้านค้า 2 ปี 12,500 บาท (เฉลี่ยวันละ 17 บาท)</h4>', '<p>รับจำนวนจำกัด</p>', '<p>50%</p>', '<p>ฟรี! รับส่วนลด</p>', '<p>สมัครเลย!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img_cover` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `content`, `img_cover`, `status`) VALUES
(1, '<h4>เว็บสวยล้ำ ทันสมัย</h4>\r\n<p>เว็บไซต์น่าเชื่อถือ ดีไซน์ตอบโจทย์ธุรกิจ<br>ร้านค้าออนไลน์ราคาถูก<br>เทมเพลตเว็บไม่ซ้ำใคร</p>', '779855324.webp', 'on'),
(2, '<h4>จัดการร้านค้าได้ง่ายๆ</h4>\r\n<p>ระบบจัดการร้านค้าออนไลน์ ใช้ง่าย<br>สะดวก ไม่ยุ่งยาก พร้อมเจ้าหน้าที่<br>ดูแลตลอดอายุการใช้งาน (สอนการใช้งานฟรี)</p>', '558500736.webp', 'on'),
(3, '<h4>ฟรี SSL&nbsp;(https://)</h4>\r\n<p>สร้างความปลอดภัยให้กับเว็บไซต์<br>ด้วยการติดตั้ง SSL ให้ฟรีกับทุกเว็บไซต์<br>และช่วยทำอันดับที่ดีใน Google</p>', '1618036925.webp', 'on'),
(4, '<h4>รองรับมือถือ</h4>\r\n<p>เว็บพร้อมใช้ ทุกเทมเพลตรองรับ<br>การเข้าชมผ่านหน้าจอมือถือ<br>Reaponsive 100%</p>', '842296184.webp', 'on'),
(5, '<h4>ระบบ E-Commerce</h4>\r\n<p>มั่นใจได้ว่าจะทำให้งานขายง่ายขึ้น<br>กับระบบที่ครบครัน สามารถจัดการได้เอง<br>ระบบจัดสินค้า ระบบสั่งซื้อ ระบบชำระเงิน etc.</p>', '1340718357.webp', ''),
(6, '<h4>ดูแล ใส่ใจ ให้คำปรึกษา</h4>\r\n<p>ฟรี! บริการหลังการขายตลอดอายุ<br>การใช้งาน คอร์สอบรมการใช้งานฟรี<br>ให้ลูกค้ามั่นใจได้ว่าเว็บไซต์ดีที่สุด</p>', '1184811403.webp', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text1`
--

CREATE TABLE `slide_text1` (
  `id` int(11) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `content3` longtext NOT NULL,
  `content4` longtext NOT NULL,
  `content5` longtext NOT NULL,
  `img_slide1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_text1`
--

INSERT INTO `slide_text1` (`id`, `content1`, `content2`, `content3`, `content4`, `content5`, `img_slide1`) VALUES
(1, '<p>สมัครเลย</p>', '<p>เปิดใช้งานเว็บพร้อมใช้วันนี้ <u>รับส่วนลด</u>ทันที</p>', '<p>50%</p>', '<p>ฟรี++<br>Hosting<br>Domain<br>SSL<br>ลงสินค้าได้ไม่จำกัด</p>', '<p>สมัครใช้งาน</p>', '1078237216.webp');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text2`
--

CREATE TABLE `slide_text2` (
  `id` int(11) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `content3` longtext NOT NULL,
  `content4` longtext NOT NULL,
  `img_slide2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_text2`
--

INSERT INTO `slide_text2` (`id`, `content1`, `content2`, `content3`, `content4`, `img_slide2`) VALUES
(1, '<p>สร้างเว็บสวย ล้ำหน้า ดูดีน่าเชื่อถือ</p>', '<p>เว็บไซต์สำเร็จรูป เว็บพร้อมใช้ ราคาถูก<br>คุณภาพเต็ม ใช้ง่าย ครบทุกฟังก์ชั่น<br>รองรับการใช้งานทุกขนาดหน้าจอ</p>', '<p>สมัครใช้งาน</p>', '<p>** การรันตีด้วยประสบการณ์กว่า 15 ปี</p>', '1082510434.webp');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text3`
--

CREATE TABLE `slide_text3` (
  `id` int(11) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `content3` longtext NOT NULL,
  `content4` longtext NOT NULL,
  `img_slide3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_text3`
--

INSERT INTO `slide_text3` (`id`, `content1`, `content2`, `content3`, `content4`, `img_slide3`) VALUES
(1, '<p>ครบทุกการขาย<br>ครอบคลุมทุกธุรกิจ</p>', '<p>เว็บไซต์พร้อมใช้ สร้างเว็บคุณภาพ<br>ช่วยเพิ่มยอดขายให้ธุรกิจคุณ</p>', '<p>เราช่วยให้ธุรกิจของคุณ เติบโต ในโลกออนไลน์<br>ไม่ว่าธุรกิจของคุณ ขนาดเล็กหรือใหญ่</p>', '<p>สมัครใช้งาน</p>', '1071088865.webp');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_website` int(10) NOT NULL,
  `img_cover` varchar(255) NOT NULL,
  `web_name` varchar(255) NOT NULL,
  `type_web` varchar(255) NOT NULL,
  `link_web` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id_website`, `img_cover`, `web_name`, `type_web`, `link_web`, `status`) VALUES
(1, '1762920265.webp', 'เว็บไซต์ Butterfly Cosmetic', 'Responsive', 'https://thaibyhost.com/web/webisme_livedemo/butterfly-cosmetic/', 'on'),
(2, '1693039985.webp', 'เว็บไซต์ 1', 'Responsive', 'https://thaibyhost.com/web/webisme_livedemo/doolaeu/', ''),
(3, '2088461530.webp', 'เว็บไซต์ 2', 'Responsive', 'https://thaibyhost.com/web/webisme_livedemo/sooderra/', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `slide_text1`
--
ALTER TABLE `slide_text1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text2`
--
ALTER TABLE `slide_text2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text3`
--
ALTER TABLE `slide_text3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slide_text1`
--
ALTER TABLE `slide_text1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_text2`
--
ALTER TABLE `slide_text2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_text3`
--
ALTER TABLE `slide_text3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id_website` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

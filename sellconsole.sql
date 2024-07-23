-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 12:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellconsole`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `image`, `price`) VALUES
(2, 'เครื่องเล่นเกม Lenovo Legion Go 8APU1-83E1003XTA Console Shadow Black', 'ชนิดเกม Console\r\nLenovo Legion Go\r\nขนาด(กว้าง x ยาว x สูง cm)\r\n29.88 x 13.1 x 4.07\r\nน้ำหนัก\r\n854.00 g', 'uploads/1720588063_aa0b9b1e7521452ed5e6.jpg', 28990),
(3, 'เครื่องเล่นเกม Nintendo Switch OLED (Asia) Console Neon Blue/Neon Red', 'หน่วยความจำในตัว\r\n64GB\r\nประเภทจอ\r\nOLED\r\nขนาดหน้าจอ\r\n7 นิ้ว\r\nหน้าจอระบบสัมผัส\r\nรองรับ\r\nความละเอียดหน้าจอ\r\n1280x720\r\n\r\nJoy-Con Controller\r\nรองรับ\r\nโหมดการเล่น\r\nTV Mode, Tabletop Mode, Handheld Mode\r\n\r\nการเชื่อมต่อไร้สาย\r\nWi-Fi, Bluetooth\r\nช่องเชื่อมต่อ\r\nUSB-C, 3.5 mm, Micro SD Card\r\n\r\nความจุแบตเตอรี่\r\n4310mAh\r\nอายุการใช้งานแบตเตอรี่\r\n4.5 - 9 ชั่วโมง\r\n\r\nขนาด\r\n10 x 24 x 1.4 ซม.\r\nน้ำหนัก\r\n420.00 g', 'uploads/1720588273_012c8fae9935dd659b93.jpg', 11700),
(4, 'เครื่องเล่นเกม Sony PlayStation 5 Standard Edition 825GB Console', 'ชนิดเกม Console\r\nPS5kkk', 'uploads/1720588354_320f6afedc5a9a1aadb2.webp', 16900),
(5, 'เครื่องเล่นเกม Asus ROG Ally RC71L-NH001W Console White', 'หน้าจอ Gorilla® Glass Victus™ 7 นิ้ว\r\nขุมพลัง AMD Ryzen™ Z1 Extreme\r\nหน้าจอรีเฟรชเรท 120Hz\r\nระบบทัชสกรีน 10 จุด บนหน้าจอ', 'uploads/1720588429_2302f2e9ce16678ecd0e.jpg', 21240),
(7, 'เครื่องเล่นเกม Nintendo Switch Lite (Asia) Console Coral', 'หน่วยความจำในตัว\r\n32GB\r\n\r\nประเภทจอ\r\nLCD\r\nขนาดหน้าจอ\r\n5.5 นิ้ว\r\nหน้าจอระบบสัมผัส\r\nรองรับ\r\n\r\nความละเอียดหน้าจอ\r\n1280x720\r\nโหมดการเล่น\r\nTabletop Mode, Handheld Mode\r\n\r\nการเชื่อมต่อไร้สาย\r\nWi-Fi, Bluetooth\r\nช่องเชื่อมต่อ\r\nUSB-C, 3.5 mm, Micro SD Card\r\n\r\nความจุแบตเตอรี่\r\n3570mAh\r\nอายุการใช้งานแบตเตอรี่\r\n3.0 - 7.0 ชั่วโมง\r\n\r\nขนาด\r\n9.14 x 20.8 x 1.39 ซม.\r\nน้ำหนัก\r\n276.00 g', 'uploads/1720588579_f2620165407fe7f2c637.jpg', 6530),
(8, 'เครื่องเล่นเกม Nintendo Switch OLED The Legend of Zelda : Tears of the Kingdom Edition (Asia) Consol', 'หน่วยความจำในตัว\r\n64GB\r\nประเภทจอ\r\nOLED\r\n\r\nขนาดหน้าจอ\r\n7 นิ้ว\r\nหน้าจอระบบสัมผัส\r\nรองรับ\r\n\r\nความละเอียดหน้าจอ\r\n1280x720\r\nJoy-Con Controller\r\nรองรับ\r\n\r\nโหมดการเล่น\r\nTV Mode, Tabletop Mode, Handheld Mode\r\nการเชื่อมต่อไร้สาย\r\nWi-Fi, Bluetooth\r\n\r\nช่องเชื่อมต่อ\r\nUSB-C, 3.5 mm, Micro SD Card\r\n\r\nความจุแบตเตอรี่\r\n4310mAh\r\n\r\nแบตเตอรี่ใช้งานได้สูงสุด\r\n9 ชม.', 'uploads/1720588684_a3a98bde91be4faf1f90.jpg', 14990),
(9, 'เครื่องเล่นเกม Nintendo Switch OLED Pokemon Scarlet & Violet Edition (Asia) Console', 'หน่วยความจำในตัว\r\n64GB\r\nประเภทจอ\r\nOLED\r\n\r\nขนาดหน้าจอ\r\n7 นิ้ว\r\nหน้าจอระบบสัมผัส\r\nรองรับ\r\n\r\nความละเอียดหน้าจอ\r\n1280x720\r\nJoy-Con Controller\r\nรองรับ\r\nโหมดการเล่น\r\nTV Mode, Tabletop Mode, Handheld Mode\r\nการเชื่อมต่อไร้สาย\r\nWi-Fi, Bluetooth\r\nช่องเชื่อมต่อ\r\nUSB-C, 3.5 mm, Micro SD Card\r\nความจุแบตเตอรี่\r\n4310mAh\r\n\r\nแบตเตอรี่ใช้งานได้สูงสุด\r\n9 ชม.v', 'uploads/1720588766_8b68a311cb78c6c572a7.jpg', 15990),
(10, 'แท่นชาร์จ HyperX ChargePlay Duo Charging Stand for PS5 Charger White', 'หน่วยความจำในตัว\r\n64GB\r\n\r\nประเภทจอ\r\nOLED\r\n\r\nขนาดหน้าจอ\r\n7 นิ้ว\r\n\r\nหน้าจอระบบสัมผัส\r\nรองรับ\r\n\r\nความละเอียดหน้าจอ\r\n1280x720\r\n\r\nJoy-Con Controller\r\nรองรับ\r\n\r\nโหมดการเล่น\r\nTV Mode, Tabletop Mode, Handheld Mode\r\n\r\nการเชื่อมต่อไร้สาย\r\nWi-Fi, Bluetooth\r\n\r\nช่องเชื่อมต่อ\r\nUSB-C, 3.5 mm, Micro SD Card\r\n\r\nความจุแบตเตอรี่\r\n4310mAh\r\n\r\nแบตเตอรี่ใช้งานได้สูงสุด\r\n9 ชม.', 'uploads/1720588861_f06091e919c8014f9a82.jpg', 990),
(11, 'แท่นชาร์จ Razer Quick Charging Stand for PS5 Charger White', 'อุปกรณ์ที่รองรับ\r\nPlayStation 5', 'uploads/1720588972_b7244636169d81c7d9c4.jpg', 1490),
(12, 'ยางหุ้มจอย KontrolFreek Grips XT Black PS4', 'อุปกรณ์ที่รองรับ\r\nPlayStation 4, PlayStation 5, Xbox', 'uploads/1720589050_fa943ff9449eb9c41344.jpg', 650),
(15, 'ppp', 'zzz', 'uploads/1721731441_2414f633b86400de0af7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`, `name`, `email`, `phone_number`) VALUES
(1, 'admin', 'admin', 'admin', 'เรียกข้าว่าผู้ดูแลไข่', 'example@email.com', ''),
(18, 'Nice', '123456', '', 'chuthiwat khamsakhon', '644230007@webmail.npru.ac.th', '0882426632'),
(19, 'Natthaphong', '12345678', '', 'Natthaphong Soison', '644230011@webmail.npru.ac.th', '0614321043'),
(20, '1', '123456', '', '1', 'info@mail.com', '0000000000'),
(21, '2', '123456', '', '2', 'info@mail.com', '0800000002'),
(22, '3', '123456', '', '3', 'info@mail.com', '0800000003'),
(23, '4', '123456', '', '4', 'info@mail.com', '0800000004'),
(24, '5', '123456', '', '5', 'info@mail.com', '0800000005'),
(25, '6', '123456', '', '6', 'info@mail.com', '0800000006'),
(26, '7', '123456', '', '7', 'info@mail.com', '0800000007'),
(27, '8', '123456', '', '8', 'info@mail.com', '0800000008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

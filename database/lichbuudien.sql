-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 02:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lichbuudien`
--

-- --------------------------------------------------------

--
-- Table structure for table `sachgiaokhoa`
--

CREATE TABLE `sachgiaokhoa` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luocmua` int(11) NOT NULL,
  `luocxem` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sachgiaokhoa`
--

INSERT INTO `sachgiaokhoa` (`id`, `img`, `tensp`, `masp`, `tinhtrang`, `luocmua`, `luocxem`, `gia`) VALUES
(1, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH MẦM NON', 'SGK01', 'Còn hàng', 123, 6546, 350),
(2, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIÁO KHOA LỚP 1', 'SGK01', 'Còn hàng', 12, 156, 350),
(3, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 2', 'SGK02', ' Còn hàng', 321, 6465, 350),
(4, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 3', 'SGK03', 'Còn hàng', 256, 3156, 350),
(5, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 4', 'SGK04', 'Còn hàng', 256, 3156, 350),
(6, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 5', 'SGK05', 'Còn hàng', 256, 3156, 350),
(7, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 6', 'SGK06', 'Còn hàng', 256, 3156, 350),
(8, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 7', 'SGK07', 'Còn hàng', 256, 3156, 350),
(9, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 8', 'SGK08', 'Còn hàng', 256, 3156, 350),
(10, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 9', 'SGK09', 'Còn hàng', 256, 3156, 350),
(11, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 10', 'SGK010', 'Còn hàng', 256, 3156, 350),
(12, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 11', 'SGK011', 'Còn hàng', 256, 3156, 350),
(13, 'sach-giao-khoa-lop-1-0903.jpg', 'SÁCH GIAO KHOA LỚP 12', 'SGK012', 'Còn hàng', 256, 3156, 350);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luocmua` int(11) NOT NULL,
  `luocxem` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `img`, `tensp`, `masp`, `tinhtrang`, `luocmua`, `luocxem`, `gia`, `loai`) VALUES
(1, 'sanpham.jpg', 'Bloc Siêu Siêu Đại - Hà Nội những góc nhìn thời gian', 'VN01', 'Còn hàng', 1, 65, 35, 'new'),
(2, 'vn08.jpg', 'Lịch 7 tờ - phòng cảnh Bắc Trung Nam', 'VN08', 'Còn hàng', 56, 42, 35, 'new'),
(3, 'vn11.jpg', 'Lịch để bàn - Hà Nội xưa', 'vn11', 'còn hàng', 57, 45, 35, 'new'),
(4, 'nt04.jpg', 'Lịch bàn - Sài gòn sau vai', 'nt04', 'còn hàng', 45, 69, 35, 'new'),
(5, '	\r\nsanpham.jpg', 'Lịch bàn - Sài gòn ', 'mt01', 'còn hàng', 4, 5, 35, ''),
(6, 'vn10.jpg', 'Lịch 7 tờ - Phố cổ', 'vn10', 'còn hàng', 8, 45, 35, 'noibat'),
(7, 'nh02.jpg', 'Bloc cực đại - tinh hoa gốm việt', 'NH02', 'còn hàng', 56, 102, 35, 'noibat'),
(8, 'nh23.jpg', 'Lịch 52 tuần - Phát lộc', 'nh23', 'còn hàng', 45, 56, 35, 'noibat'),
(9, 'nh29.jpg', 'lịch 7 tờ - bon sai, thư pháp, trà đạo', 'Nh29', 'còn hàng', 25, 65, 35, 'noibat'),
(10, 'vn19.jpg', 'BLOC ĐẠI SEN', 'VN19', 'Còn hàng', 7, 49, 350, 'lichlienket'),
(11, 'vn17.jpg', 'BLOC TRUNG MÀU - TRANH LỤA QUÊ HƯƠNG - SẮC HOA', 'VN17', 'Còn hàng', 12, 73, 35, 'lichlienket'),
(12, 'vn08.jpg', 'BLOC ĐẠI LỠ - TRANH LỤA QUÊ HƯƠNG - SẮC HOA', 'vn08', 'Còn hàng', 25, 65, 35, 'lichlienket'),
(13, 'vn16.jpg', 'LỊCH BLOC TRỌN BỘ - THỊNH VƯỢNG', 'VN16', ' Còn hàng', 28, 95, 35, 'lichlienket'),
(14, 'vn15.jpg', 'LỊCH BLOC LẺ - VN15', 'VN15', ' Còn hàng', 48, 56, 35, 'lichlienket'),
(15, 'vn-06-07.jpg', 'BÌA GẮN BLOC - VN06. VN07', 'VN06 - VN07', ' Còn hàng', 45, 85, 35, 'lichlienket'),
(16, 'sanpham.jpg', 'BLOC SIÊU SIÊU ĐẠI - HÀ NỘI NHỮNG GÓC NHÌN THỜI GIAN', 'VN01', ' Còn hàng', 65, 132, 35, 'lichlienket'),
(17, 'vn-06-07.jpg', 'BÌA GẮN BLOC - VN04. VN05', 'VN04 -VN05', ' Còn hàng', 48, 156, 35, 'lichlienket');

-- --------------------------------------------------------

--
-- Table structure for table `vohocsinh`
--

CREATE TABLE `vohocsinh` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luocmua` int(11) NOT NULL,
  `luocxem` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vohocsinh`
--

INSERT INTO `vohocsinh` (`id`, `img`, `tensp`, `masp`, `tinhtrang`, `luocmua`, `luocxem`, `gia`) VALUES
(1, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(2, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(3, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(4, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(5, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(6, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(7, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(8, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(9, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(10, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10),
(11, 'thu-cung-2-04.jpg', 'BÌA VỞ VĂN LANG 4 Ô LY 48 TRANG', 'Thú cưng 2-04', 'Còn hàng', 12, 56, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sachgiaokhoa`
--
ALTER TABLE `sachgiaokhoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vohocsinh`
--
ALTER TABLE `vohocsinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sachgiaokhoa`
--
ALTER TABLE `sachgiaokhoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `vohocsinh`
--
ALTER TABLE `vohocsinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

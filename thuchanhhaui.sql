-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2022 at 03:25 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuchanhhaui`
--

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `maGiangVien` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenGiangVien` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDienThoai` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocVi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`maGiangVien`, `tenGiangVien`, `email`, `soDienThoai`, `hocVi`, `khoa`) VALUES
('20226001', 'Nguyễn Bá Nghiễn', '', '', '', ''),
('20226002', 'Nguyễn Thị Thanh Huyền', '', '', '', ''),
('20226003', 'Nguyễn Thị Minh Hằng', '', '', '', ''),
('20226004', 'Trần Thị Thanh Hảo', '', '', '', ''),
('20226005', 'Vũ Đình Minh', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lichthuchanh`
--

CREATE TABLE `lichthuchanh` (
  `maPhongMay` int(11) NOT NULL,
  `maLopHocPhan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayThucHanh` date NOT NULL,
  `buoiThucHanh` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiDiemDangKy` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lophocphan`
--

CREATE TABLE `lophocphan` (
  `maLopHocPhan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenHocPhan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soLuongSinhVien` int(11) NOT NULL,
  `buoiHocLyThuyet` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongHocLyThuyet` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tietHocLyThuyet` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoaHoc` int(11) DEFAULT NULL,
  `maGiangVien` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBatDauHocKy` datetime NOT NULL,
  `ngayKetThucHocKy` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lophocphan`
--

INSERT INTO `lophocphan` (`maLopHocPhan`, `tenHocPhan`, `soLuongSinhVien`, `buoiHocLyThuyet`, `phongHocLyThuyet`, `tietHocLyThuyet`, `khoaHoc`, `maGiangVien`, `ngayBatDauHocKy`, `ngayKetThucHocKy`) VALUES
('20221IT6039008', 'Thiết kế Web', 70, 'C4', 'Tòa A8 - p', '7,8,9', 15, '20226001', '2022-09-12 00:00:00', '2023-01-01 00:00:00'),
('20221IT6039011', 'Thiết kế Web', 70, 'S3', 'Tòa A8 - p', '3,4,5', 15, '20226001', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('20221IT6039025', 'Thiết kế Web', 70, 'S2', 'Tòa A8 - p', '1,2,3', 15, '20226001', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phongmay`
--

CREATE TABLE `phongmay` (
  `maPhongMay` int(11) NOT NULL,
  `tenPhongMay` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toaNha` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `viTriPhongMay` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soMayTinh` int(11) NOT NULL,
  `tinhTrangMayChieu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhTrang` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phongmay`
--

INSERT INTO `phongmay` (`maPhongMay`, `tenPhongMay`, `toaNha`, `viTriPhongMay`, `soMayTinh`, `tinhTrangMayChieu`, `tinhTrang`) VALUES
(1, 'PM01', 'A1', 'Phòng 704', 40, 'Tốt', 'Sử dụng được'),
(2, 'PM02', 'A1', 'Phòng 703', 40, 'Hỏng', 'Đang bảo trì');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tenDangNhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tenDangNhap`, `matKhau`, `quyen`) VALUES
('20226001', '12345678', 0),
('20226002', '12345678', 0),
('20226003', '12345678', 0),
('20226004', '12345678', 0),
('20226005', '12345678', 0),
('admin', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`maGiangVien`);

--
-- Indexes for table `lichthuchanh`
--
ALTER TABLE `lichthuchanh`
  ADD PRIMARY KEY (`maPhongMay`,`ngayThucHanh`,`buoiThucHanh`),
  ADD KEY `maLopHocPhan` (`maLopHocPhan`);

--
-- Indexes for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`maLopHocPhan`),
  ADD KEY `maGiangVien` (`maGiangVien`);

--
-- Indexes for table `phongmay`
--
ALTER TABLE `phongmay`
  ADD PRIMARY KEY (`maPhongMay`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tenDangNhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phongmay`
--
ALTER TABLE `phongmay`
  MODIFY `maPhongMay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`maGiangVien`) REFERENCES `taikhoan` (`tenDangNhap`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `lichthuchanh`
--
ALTER TABLE `lichthuchanh`
  ADD CONSTRAINT `lichthuchanh_ibfk_1` FOREIGN KEY (`maPhongMay`) REFERENCES `phongmay` (`maPhongMay`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lichthuchanh_ibfk_2` FOREIGN KEY (`maLopHocPhan`) REFERENCES `lophocphan` (`maLopHocPhan`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `lophocphan_ibfk_1` FOREIGN KEY (`maGiangVien`) REFERENCES `giangvien` (`maGiangVien`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 10:20 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlidiemdanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `maadmin` int(11) NOT NULL,
  `tenadmin` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`maadmin`, `tenadmin`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `email`, `taikhoan`, `matkhau`) VALUES
(1, 'Nguyễn Thị Huyền', '1985-04-05', 0, 'Hà Nội', '01234567879', 'admin@gmail.com', 'admin', '1234'),
(2, 'Phạm Văn Hoàng', '1983-05-04', 1, 'Ninh Bình', '0125466578', 'admin1@gmail.com', 'admin1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diemdanh`
--

CREATE TABLE `tbl_diemdanh` (
  `madiemdanh` int(11) NOT NULL,
  `mamonhoc` int(11) NOT NULL,
  `malop` int(11) NOT NULL,
  `magv` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `giobatdau` time NOT NULL,
  `gioketthuc` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_diemdanh`
--

INSERT INTO `tbl_diemdanh` (`madiemdanh`, `mamonhoc`, `malop`, `magv`, `ngay`, `giobatdau`, `gioketthuc`) VALUES
(8, 2, 1, 1, '2018-06-04', '08:00:00', '12:00:00'),
(9, 2, 1, 1, '2018-06-04', '08:00:00', '12:00:00'),
(10, 2, 1, 1, '2018-06-04', '08:00:00', '12:00:00'),
(11, 2, 1, 1, '2018-06-04', '08:00:00', '12:00:00'),
(26, 1, 4, 4, '2018-06-06', '08:00:00', '12:00:00'),
(27, 1, 4, 4, '2018-06-06', '08:00:00', '12:00:00'),
(28, 1, 4, 4, '2018-06-06', '08:00:00', '12:00:00'),
(29, 1, 4, 4, '2018-06-06', '08:00:00', '12:00:00'),
(30, 1, 4, 1, '2018-06-06', '08:00:00', '12:00:00'),
(33, 1, 4, 2, '2018-06-06', '08:00:00', '12:00:00'),
(34, 1, 4, 2, '2018-06-06', '08:00:00', '12:00:00'),
(49, 1, 4, 2, '2018-06-07', '08:00:00', '12:00:00'),
(50, 2, 2, 1, '2018-06-06', '08:00:00', '12:00:00'),
(51, 2, 1, 1, '2018-06-06', '08:00:00', '12:00:00'),
(52, 2, 2, 1, '2018-06-07', '08:00:00', '12:00:00'),
(54, 2, 1, 1, '2018-06-07', '08:00:00', '12:00:00'),
(55, 2, 1, 1, '2018-06-08', '08:00:00', '12:00:00'),
(56, 4, 4, 1, '2018-06-08', '07:00:00', '12:00:00'),
(57, 2, 2, 1, '2018-06-08', '08:00:00', '12:00:00'),
(59, 2, 4, 1, '2018-06-08', '08:00:00', '12:00:00'),
(60, 2, 4, 1, '2018-06-12', '08:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diemdanhchitiet`
--

CREATE TABLE `tbl_diemdanhchitiet` (
  `madiemdanh` int(11) NOT NULL,
  `masv` int(11) NOT NULL,
  `tinhtrang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_diemdanhchitiet`
--

INSERT INTO `tbl_diemdanhchitiet` (`madiemdanh`, `masv`, `tinhtrang`) VALUES
(49, 9, 1),
(49, 10, 1),
(50, 7, 1),
(51, 6, 1),
(51, 11, 1),
(51, 12, 1),
(51, 13, 1),
(51, 14, 1),
(51, 15, 1),
(51, 16, 1),
(51, 17, 1),
(51, 18, 1),
(51, 19, 1),
(51, 20, 1),
(51, 21, 1),
(51, 22, 1),
(51, 23, 1),
(51, 24, 1),
(51, 25, 1),
(51, 26, 1),
(51, 27, 1),
(51, 28, 1),
(51, 29, 1),
(51, 30, 1),
(52, 7, 1),
(54, 6, 1),
(54, 11, 1),
(54, 12, 1),
(54, 13, 1),
(54, 14, 1),
(54, 15, 1),
(54, 16, 1),
(54, 17, 1),
(54, 18, 1),
(54, 19, 1),
(54, 20, 1),
(54, 21, 1),
(54, 22, 1),
(54, 23, 1),
(54, 24, 1),
(54, 25, 1),
(54, 26, 1),
(54, 27, 1),
(54, 28, 1),
(54, 29, 1),
(54, 30, 1),
(55, 6, 1),
(55, 11, 1),
(55, 12, 1),
(55, 13, 1),
(55, 14, 1),
(55, 15, 1),
(55, 16, 1),
(55, 17, 1),
(55, 18, 1),
(55, 19, 1),
(55, 20, 1),
(55, 21, 1),
(55, 22, 1),
(55, 23, 1),
(55, 24, 1),
(55, 25, 1),
(55, 26, 1),
(55, 27, 1),
(55, 28, 1),
(55, 29, 1),
(55, 30, 1),
(56, 9, 3),
(56, 10, 1),
(57, 7, 3),
(59, 6, 1),
(59, 7, 1),
(59, 9, 1),
(59, 10, 1),
(59, 12, 1),
(60, 6, 1),
(60, 7, 1),
(60, 9, 1),
(60, 10, 1),
(60, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giaovien`
--

CREATE TABLE `tbl_giaovien` (
  `magv` int(11) NOT NULL,
  `tengv` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_giaovien`
--

INSERT INTO `tbl_giaovien` (`magv`, `tengv`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `email`, `taikhoan`, `matkhau`, `trangthai`) VALUES
(1, 'Phạm Thị Hoa', '1990-09-08', 1, 'Hà Nội', '0987645367', 'hoa@gmail.com', '123456', '123456', 0),
(2, 'Kiều Đức Hạnh', '1980-05-06', 0, 'Hà Nội', '0123456789', 'hanh@gmail.com', '123456', '123456', 1),
(4, 'K', '2018-05-03', 1, 'KJH', '9876', 'KJH', 'KJ', 'GF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lichhoc`
--

CREATE TABLE `tbl_lichhoc` (
  `ngayhoc` date NOT NULL,
  `malich` int(11) NOT NULL,
  `magv` int(11) NOT NULL,
  `mamon` int(11) NOT NULL,
  `malop` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lichhoc`
--

INSERT INTO `tbl_lichhoc` (`ngayhoc`, `malich`, `magv`, `mamon`, `malop`, `tinhtrang`) VALUES
('0000-00-00', 1, 1, 4, 4, 1),
('0000-00-00', 2, 1, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lophocbienche`
--

CREATE TABLE `tbl_lophocbienche` (
  `malop` int(11) NOT NULL,
  `tenlop` varchar(50) NOT NULL,
  `manganh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lophocbienche`
--

INSERT INTO `tbl_lophocbienche` (`malop`, `tenlop`, `manganh`) VALUES
(1, 'BKC01', 1),
(2, 'BKC02', 1),
(3, 'BKC03', 1),
(4, 'BKC04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monhoc`
--

CREATE TABLE `tbl_monhoc` (
  `mamonhoc` int(11) NOT NULL,
  `tenmonhoc` varchar(50) NOT NULL,
  `manganh` int(11) NOT NULL,
  `thoiluonghoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_monhoc`
--

INSERT INTO `tbl_monhoc` (`mamonhoc`, `tenmonhoc`, `manganh`, `thoiluonghoc`) VALUES
(1, 'php1', 1, 60),
(2, 'ccna', 2, 50),
(3, 'php2', 1, 2),
(4, 'Database2', 1, 50),
(5, 'Database1', 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nganhhoc`
--

CREATE TABLE `tbl_nganhhoc` (
  `manganh` int(11) NOT NULL,
  `tennganh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_nganhhoc`
--

INSERT INTO `tbl_nganhhoc` (`manganh`, `tennganh`) VALUES
(1, 'quản trị mạng'),
(2, 'lập trình'),
(3, 'điện cơ học'),
(4, 'kế toán');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `masv` int(11) NOT NULL,
  `tensv` varchar(50) NOT NULL,
  `malop` int(11) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sinhvien`
--

INSERT INTO `tbl_sinhvien` (`masv`, `tensv`, `malop`, `ngaysinh`, `gioitinh`, `diachi`, `sodienthoai`, `email`) VALUES
(6, 'Phùng Minh Hiếu', 4, '1998-09-09', 1, 'Hà Nội', '01245656478', 'Hieu@gmail.com'),
(7, 'Nguyễn Ngọc Chi', 4, '1998-02-09', 1, 'Ninh Bình', '01657868734', 'NguyenNgocChi@gmail.com'),
(9, 'Trần Thị Hồng', 4, '1998-05-04', 0, 'Thái Bình', '0547868989', 'hồng@mail.com'),
(10, 'Trần Việt Long', 4, '1998-05-04', 1, 'Hà Nội', '0547868989', 'Long@mail.com'),
(11, 'Nguyễn Thị Thanh Vân', 1, '1998-12-31', 0, 'Hà Nội', '0987654564', 'van@gmail.com'),
(12, 'Trịnh Huy Hoàng', 4, '1998-06-07', 1, 'Hà Nội', '8982771271', 'hoang@gmail.com'),
(13, 'Mile', 1, '0000-00-00', 0, 'Kotlovka', '2604645300', NULL),
(14, 'Isaak', 1, '0000-00-00', 0, 'Bum Bum', '9406623471', NULL),
(15, 'Ophelie', 1, '0000-00-00', 0, 'Västerås', '0802644252', NULL),
(16, 'Wilden', 1, '0000-00-00', 0, 'Brok', '6759983149', NULL),
(17, 'Ulick', 1, '0000-00-00', 0, 'Jieshi', '9819942055', NULL),
(18, 'Aprilette', 1, '0000-00-00', 0, 'Vereshchagino', '3194095382', NULL),
(19, 'Barney', 1, '0000-00-00', 0, 'Feni', '7154426098', NULL),
(20, 'Jeramie', 1, '0000-00-00', 0, 'Xibei', '5695752361', NULL),
(21, 'Osmond', 1, '0000-00-00', 0, 'Conima', '4624828496', NULL),
(22, 'Cindi', 1, '0000-00-00', 0, 'Yinjiang', '3873151758', NULL),
(23, 'Hendrik', 1, '0000-00-00', 0, 'Xiayang', '5100298006', NULL),
(24, 'Dare', 1, '0000-00-00', 0, 'Yujia’ao', '3552322450', NULL),
(25, 'Rudolfo', 1, '0000-00-00', 0, 'Santana do Livramento', '6252332445', NULL),
(26, 'Min', 1, '0000-00-00', 0, 'Tríkala', '8816794089', NULL),
(27, 'Delila', 1, '0000-00-00', 0, 'Herálec', '7670841761', NULL),
(28, 'Mack', 1, '0000-00-00', 0, 'Jiamaogong', '9960620115', NULL),
(29, 'Valida', 1, '0000-00-00', 0, 'Lederaba', '5426449937', NULL),
(30, 'Gabriel', 1, '0000-00-00', 0, 'Fasito‘outa', '6554861459', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`maadmin`);

--
-- Indexes for table `tbl_diemdanh`
--
ALTER TABLE `tbl_diemdanh`
  ADD PRIMARY KEY (`madiemdanh`),
  ADD KEY `mamonhoc` (`mamonhoc`),
  ADD KEY `malop` (`malop`),
  ADD KEY `ngay` (`ngay`),
  ADD KEY `magv` (`magv`);

--
-- Indexes for table `tbl_diemdanhchitiet`
--
ALTER TABLE `tbl_diemdanhchitiet`
  ADD PRIMARY KEY (`madiemdanh`,`masv`),
  ADD KEY `madiemdanh` (`madiemdanh`),
  ADD KEY `masv` (`masv`);

--
-- Indexes for table `tbl_giaovien`
--
ALTER TABLE `tbl_giaovien`
  ADD PRIMARY KEY (`magv`);

--
-- Indexes for table `tbl_lichhoc`
--
ALTER TABLE `tbl_lichhoc`
  ADD PRIMARY KEY (`malich`),
  ADD KEY `malop` (`malop`),
  ADD KEY `magv` (`magv`),
  ADD KEY `mamon` (`mamon`),
  ADD KEY `malop_2` (`malop`),
  ADD KEY `malop_3` (`malop`),
  ADD KEY `malop_4` (`malop`),
  ADD KEY `magv_2` (`magv`);

--
-- Indexes for table `tbl_lophocbienche`
--
ALTER TABLE `tbl_lophocbienche`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `manganh` (`manganh`);

--
-- Indexes for table `tbl_monhoc`
--
ALTER TABLE `tbl_monhoc`
  ADD PRIMARY KEY (`mamonhoc`),
  ADD KEY `manganh` (`manganh`);

--
-- Indexes for table `tbl_nganhhoc`
--
ALTER TABLE `tbl_nganhhoc`
  ADD PRIMARY KEY (`manganh`);

--
-- Indexes for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `malop` (`malop`),
  ADD KEY `malop_2` (`malop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `maadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_diemdanh`
--
ALTER TABLE `tbl_diemdanh`
  MODIFY `madiemdanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_giaovien`
--
ALTER TABLE `tbl_giaovien`
  MODIFY `magv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lichhoc`
--
ALTER TABLE `tbl_lichhoc`
  MODIFY `malich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_lophocbienche`
--
ALTER TABLE `tbl_lophocbienche`
  MODIFY `malop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_monhoc`
--
ALTER TABLE `tbl_monhoc`
  MODIFY `mamonhoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nganhhoc`
--
ALTER TABLE `tbl_nganhhoc`
  MODIFY `manganh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  MODIFY `masv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_diemdanh`
--
ALTER TABLE `tbl_diemdanh`
  ADD CONSTRAINT `tbl_diemdanh_ibfk_1` FOREIGN KEY (`mamonhoc`) REFERENCES `tbl_monhoc` (`mamonhoc`),
  ADD CONSTRAINT `tbl_diemdanh_ibfk_2` FOREIGN KEY (`malop`) REFERENCES `tbl_lophocbienche` (`malop`),
  ADD CONSTRAINT `tbl_diemdanh_ibfk_3` FOREIGN KEY (`magv`) REFERENCES `tbl_giaovien` (`magv`);

--
-- Constraints for table `tbl_diemdanhchitiet`
--
ALTER TABLE `tbl_diemdanhchitiet`
  ADD CONSTRAINT `tbl_diemdanhchitiet_ibfk_1` FOREIGN KEY (`madiemdanh`) REFERENCES `tbl_diemdanh` (`madiemdanh`),
  ADD CONSTRAINT `tbl_diemdanhchitiet_ibfk_2` FOREIGN KEY (`masv`) REFERENCES `tbl_sinhvien` (`masv`);

--
-- Constraints for table `tbl_lichhoc`
--
ALTER TABLE `tbl_lichhoc`
  ADD CONSTRAINT `tbl_lichhoc_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `tbl_giaovien` (`magv`),
  ADD CONSTRAINT `tbl_lichhoc_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `tbl_monhoc` (`mamonhoc`),
  ADD CONSTRAINT `tbl_lichhoc_ibfk_3` FOREIGN KEY (`malop`) REFERENCES `tbl_lophocbienche` (`malop`);

--
-- Constraints for table `tbl_lophocbienche`
--
ALTER TABLE `tbl_lophocbienche`
  ADD CONSTRAINT `tbl_lophocbienche_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `tbl_nganhhoc` (`manganh`);

--
-- Constraints for table `tbl_monhoc`
--
ALTER TABLE `tbl_monhoc`
  ADD CONSTRAINT `tbl_monhoc_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `tbl_nganhhoc` (`manganh`);

--
-- Constraints for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD CONSTRAINT `tbl_sinhvien_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `tbl_lophocbienche` (`malop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 07:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `tenSP` varchar(200) NOT NULL,
  `anhSP` varchar(200) NOT NULL,
  `giaSP` int(11) NOT NULL,
  `moTaSP` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `tenSP`, `anhSP`, `giaSP`, `moTaSP`) VALUES
(1, 'Xe ben đồ chơi trẻ em', '1.jpg', 26, 'mô tả '),
(2, 'Chọn bộ đồ chơi trẻ em đẹp', '2.jpg', 30, 'mô tả'),
(3, 'Xe ben, gấu,... đồ chơi siêu rẻ', '3.jpg', 11, 'mô tả'),
(4, 'lego xếp hình đa năng cho bé ', '4.jpg', 30, 'mô tả');

-- --------------------------------------------------------

--
-- Table structure for table `titishop`
--

CREATE TABLE `titishop` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `passWord` varchar(30) NOT NULL,
  `phanQuyen` varchar(5) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titishop`
--

INSERT INTO `titishop` (`idUser`, `userName`, `passWord`, `phanQuyen`, `firstName`, `lastName`, `img`) VALUES
(1, 'thanhtung10x@gmail.com', '123@123a', 'admin', 'Tùng', 'Trần Thanh', '1.jpg'),
(2, 'tungsmokes@gmail.com', '123@123a', '', 'Tùng', 'Trần Thanh', '1.jpg'),
(3, 'huyentrang192001@gmail.com', '12345', '', 'Trang', 'Huyền', ''),
(4, 'tungmusicedm@gmail.com', '1234', '', 'bách', ' việt', '1.jpg'),
(5, 'tungkhoientertainment@gmail.co', '123@123', '', 'Thúy', ' Nguyễn', '2.jpg'),
(6, 'kaza123@gmail.com', '123456', '', 'khoi', ' Nguyễn', ''),
(7, 'khoi123@123.vn', '1234', '', 'tung', ' khoi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Indexes for table `titishop`
--
ALTER TABLE `titishop`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `titishop`
--
ALTER TABLE `titishop`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 05:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bai-do-xe-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_diem_do`
--

CREATE TABLE `thong_tin_diem_do` (
  `id` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `nhiet_do` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thong_tin_diem_do`
--

INSERT INTO `thong_tin_diem_do` (`id`, `trang_thai`, `nhiet_do`) VALUES
(1, 0, 31.56),
(2, 0, 31.56),
(3, 0, 31.06),
(4, 0, 31.56),
(5, 0, 32.81);

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_ve_xe`
--

CREATE TABLE `thong_tin_ve_xe` (
  `id` int(11) NOT NULL,
  `rfid` varchar(30) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thong_tin_ve_xe`
--

INSERT INTO `thong_tin_ve_xe` (`id`, `rfid`, `trang_thai`) VALUES
(1, 'f0:b4:0b:19', 1),
(2, '53:d4:e5:ad', 1),
(3, '23:5a:9c:ad', 1),
(4, '81:0e:da:27', 1),
(5, '01:19:b6:1d', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thong_tin_ve_xe`
--
ALTER TABLE `thong_tin_ve_xe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thong_tin_ve_xe`
--
ALTER TABLE `thong_tin_ve_xe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

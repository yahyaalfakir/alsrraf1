-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 نوفمبر 2021 الساعة 21:40
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alsrraf1`
--

-- --------------------------------------------------------

--
-- بنية الجدول `move`
--

CREATE TABLE `move` (
  `id` int(11) NOT NULL,
  `conversion_number` varchar(50) NOT NULL,
  `username_send` varchar(100) NOT NULL,
  `time_send` varchar(50) NOT NULL,
  `name_of_sender` varchar(50) NOT NULL,
  `identity_sender` varchar(50) NOT NULL,
  `attachments_identit_sender` varchar(50) NOT NULL,
  `country_send` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `recipient` varchar(50) NOT NULL,
  `identity_recifient` varchar(50) NOT NULL,
  `county_recifinet` varchar(50) NOT NULL,
  `attachments_identit_recifinet` varchar(50) NOT NULL,
  `cash` int(50) NOT NULL,
  `purpose2` varchar(50) NOT NULL,
  `username_recfient` varchar(50) NOT NULL,
  `time_recifient` varchar(50) NOT NULL,
  `hwleh` varchar(10) NOT NULL,
  `arsl` varchar(20) NOT NULL,
  `cash1` int(11) NOT NULL,
  `astlm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `move`
--

INSERT INTO `move` (`id`, `conversion_number`, `username_send`, `time_send`, `name_of_sender`, `identity_sender`, `attachments_identit_sender`, `country_send`, `purpose`, `recipient`, `identity_recifient`, `county_recifinet`, `attachments_identit_recifinet`, `cash`, `purpose2`, `username_recfient`, `time_recifient`, `hwleh`, `arsl`, `cash1`, `astlm`) VALUES
(34, ' 1001268588 ', 'saleh', '2021-11-15-20:44:00', 'سعيد', '2345678', '11152021204645.ico', 'اليمن', 'العلاح', '', '12222', 'مصر', '11172021030040.', 3000, 'بدون', 'saleh', '2021-11-17-03:00:32', 'true', '', 0, ''),
(35, ' 6327279084 ', 'saleh', '2021-11-16-19:48:30', 'خالد', '505050', '11162021194910.jpg', 'مصر', 'علاج', '', '202020', 'مصر', '11162021195547.jpg', 1000, '', 'saleh', '2021-11-16-19:55:33', 'مستلم', '', 0, ''),
(36, ' 8339926603 ', 'saleh', '2021-11-16-19:57:48', 'جلال', '303030', '11162021195827.jpg', 'اردن', 'سياحه', '', '454545', 'الاردن', '11162021200118.jpg', 2520, '', 'saleh', '2021-11-16-20:00:55', 'مستلم', '', 0, ''),
(38, ' 9666774752 ', 'saleh', '2021-11-16-20:26:43', 'منصور', '808080', '11162021202831.jpg', 'اليمن', 'دراسه', '', '705050', 'مصر', '11162021204405.jpg', 3250, 'استلام جواز', 'saleh', '2021-11-16-20:43:01', 'مستلم الحو', 'استلام', 0, ''),
(39, ' 9810353840 ', 'saleh', '2021-11-16-22:55:17', 'صالح ', '85858', '11162021225615.jpg', 'مصر', 'علاج', '', '12222', 'مصر', '11172021024500.', 1000, 'بدون', 'saleh', '2021-11-17-02:44:44', 'false', 'ارسال', 0, '');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `wusername` varchar(20) NOT NULL,
  `wpassward` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `wusername`, `wpassward`) VALUES
(1, 'saleh', '123'),
(5, 'salem', '333'),
(8, 'ahmad', '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `move`
--
ALTER TABLE `move`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

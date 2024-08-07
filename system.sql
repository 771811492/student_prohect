-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أكتوبر 2023 الساعة 07:40
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- بنية الجدول `dagaree`
--

CREATE TABLE `dagaree` (
  `id_d` int(11) NOT NULL,
  `name_s` varchar(200) NOT NULL,
  `name_k` varchar(200) NOT NULL,
  `name_p` varchar(200) NOT NULL,
  `name_m` varchar(200) NOT NULL,
  `name_d` varchar(200) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `dagaree`
--

INSERT INTO `dagaree` (`id_d`, `name_s`, `name_k`, `name_p`, `name_m`, `name_d`, `level`) VALUES
(1, 'ahmed almosannaf', 'طب اسنان', ' sder', 'ali', '55', 'اختر المستوى'),
(2, 'علي', 'علوم ادارية', ' مصارف', 'محاسبة 1', '66', 'اول'),
(3, 'علي', 'علوم ادارية', ' مصارف', 'مصرف', '88', 'ثاني');

-- --------------------------------------------------------

--
-- بنية الجدول `kali`
--

CREATE TABLE `kali` (
  `id_k` int(11) NOT NULL,
  `name_k` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `kali`
--

INSERT INTO `kali` (`id_k`, `name_k`) VALUES
(1, 'طب اسنان'),
(2, 'علوم ادارية'),
(3, 'محاسبة');

-- --------------------------------------------------------

--
-- بنية الجدول `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `materal`
--

CREATE TABLE `materal` (
  `id_b` int(11) NOT NULL,
  `name_b` varchar(200) NOT NULL,
  `name_k` varchar(200) NOT NULL,
  `name_p` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `materal`
--

INSERT INTO `materal` (`id_b`, `name_b`, `name_k`, `name_p`) VALUES
(1, 'ali', 'طب اسنان', ' sder'),
(2, 'محاسبة 1', 'علوم ادارية', ' مصارف'),
(3, 'مصرف', 'علوم ادارية', ' مصارف');

-- --------------------------------------------------------

--
-- بنية الجدول `part`
--

CREATE TABLE `part` (
  `id_p` int(11) NOT NULL,
  `name_p` varchar(200) NOT NULL,
  `name_k` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `part`
--

INSERT INTO `part` (`id_p`, `name_p`, `name_k`) VALUES
(1, ' sder', 'طب اسنان'),
(2, ' مصارف', 'علوم ادارية');

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `id_s` int(11) NOT NULL,
  `name_s` varchar(200) NOT NULL,
  `name_k` varchar(200) NOT NULL,
  `name_p` varchar(200) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `student`
--

INSERT INTO `student` (`id_s`, `name_s`, `name_k`, `name_p`, `level`) VALUES
(1, 'ahmed almosannaf', 'طب اسنان', ' sder', 'ثاني'),
(2, 'علي', 'علوم ادارية', ' مصارف', 'اول');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dagaree`
--
ALTER TABLE `dagaree`
  ADD PRIMARY KEY (`id_d`);

--
-- Indexes for table `kali`
--
ALTER TABLE `kali`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materal`
--
ALTER TABLE `materal`
  ADD PRIMARY KEY (`id_b`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_s`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dagaree`
--
ALTER TABLE `dagaree`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kali`
--
ALTER TABLE `kali`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materal`
--
ALTER TABLE `materal`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

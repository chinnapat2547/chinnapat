-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 04:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4104db`
--
CREATE DATABASE IF NOT EXISTS `4104db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4104db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(11) NOT NULL,
  `a_position` varchar(100) NOT NULL,
  `a_title` varchar(20) NOT NULL,
  `a_fullname` varchar(100) NOT NULL,
  `a_dob` date NOT NULL,
  `a_education` varchar(100) NOT NULL,
  `a_skills` text NOT NULL,
  `a_experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_title`, `a_fullname`, `a_dob`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'AI Engineer', 'นาย', 'ชินพัฒน์ ลิ่มดิลกธรรม', '2547-12-19', 'ปริญญาเอก', 'เก่งทุกด้าน', '10000 ปี'),
(2, 'Full Stack Developer', 'นาย', 'ชินพัฒน์ ลิ่มดิลกธรรม', '2547-12-19', 'ปริญญาเอก', 'เก่งทุกด้านแบบมากๆ', 'ทั้งชีวิต'),
(3, 'Data Analyst', 'นาย', 'ชินพัฒน์ ลิ่มดิลกธรรม', '2547-12-19', 'ปริญญาเอก', 'เก่งทุกด้านหาใครเปรียบ', 'google 10 ปี meta 5 ปี tesla 2 ปี nasa 1000 ปี ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_ID` int(6) NOT NULL,
  `r_Name` varchar(255) NOT NULL,
  `r_Phone` varchar(255) NOT NULL,
  `r_Height` int(3) NOT NULL,
  `r_Color` varchar(255) NOT NULL,
  `r_Major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_ID`, `r_Name`, `r_Phone`, `r_Height`, `r_Color`, `r_Major`) VALUES
(1, 'ชินพัฒน์ ลิ่มดิลกธรรม', '', 0, '', ''),
(2, 'ศิวกร ลิ่มดิลกธรรม', '', 0, '', ''),
(5, 'สมหมาย สีทอง', '', 0, '', ''),
(6, 'สมชาย หมายปอง', '', 0, '', ''),
(7, 'ชินพัฒน์ ลิ่มดิลกธรรม', '0611323746', 0, '', ''),
(9, 'ชินพัฒน์ ลิ่มดิลกธรรม', '0611323746', 166, '#000000', 'คอมพิวเตอร์ธุรกิจ'),
(10, 'สมหมาย สีทอง', '0611321245', 185, '#9e9900', 'การตลาด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

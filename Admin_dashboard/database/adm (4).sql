-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 04:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adm`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1667562226);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `postid` int(11) NOT NULL,
  `post` text NOT NULL,
  `datepost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`postid`, `post`, `datepost`) VALUES
(8, 'เเจ้างเตือน---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------', '2022-11-09'),
(9, 'การผัดวันประกันพรุ่งในระยะยาวเป็นสาเหตุของความผิดหวังในชีวิต เราต่างก็เคยผัดวันประกันพรุ่งกันทั้งนั้น ลองสังเกตุตัวเอง ลองนึกถึงสิ่งที่เราตั้งใจไว้ว่าจะทำแต่ก็ยังไม่ได้ทำสักที แล้วไล่ลิงตัวที่เอาแต่มักง่ายและความสนุกไปไกลๆ\r\n\r\nเราต่างก็อยากมีสุขภาพที่ดี อยากมีรูปร่างที่ดี อยากมีหน้าที่การงานที่ดี อยากเปลี่ยนไลฟ์สไตล์ แต่สิ่งเหล่านี้มันจะไม่เกิดขึ้น ถ้าเราไม่ได้กำหนดเส้นตายเอาไว้', '2022-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomid` varchar(10) NOT NULL,
  `userroom` varchar(30) NOT NULL DEFAULT 'none',
  `typeroom` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `startdate` date NOT NULL,
  `recipe` varchar(30) NOT NULL,
  `image_id` tinyint(4) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomid`, `userroom`, `typeroom`, `price`, `startdate`, `recipe`, `image_id`, `image_name`) VALUES
('1', 'Nanachi', 'ห้องนั้นเเหละ', 16514, '2022-11-08', '', 20, ''),
('2', 'Heker', 'ห้องพัดลม', 1651, '2022-11-07', '', 21, ''),
('3', 'Fuu', 'ห้องพัดลม', 1651, '2022-11-02', '', 22, ''),
('4', 'Titi', 'ห้องนั้นเเหละ', 12355, '2022-11-07', '', 23, ''),
('5', 'Heker', 'ห้องพัดลม', 1651, '2022-11-04', '', 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userlevel` varchar(1) NOT NULL DEFAULT 'M',
  `password` varchar(32) NOT NULL,
  `phone` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `userlevel`, `password`, `phone`) VALUES
(21, 'reg', 'roblox', 'reg', 'M', 'e10adc3949ba59abbe56e057f20f883e', 315),
(22, 'bondrewd', 'Lorddawn', 'bondrewd', 'A', 'e10adc3949ba59abbe56e057f20f883e', 6556),
(99, 'goo', 'gaygay', '', 'M', 'd41d8cd98f00b204e9800998ecf8427e', 3151),
(100, 'Lafy', 'Vacia', 'Lacia', 'M', 'e10adc3949ba59abbe56e057f20f883e', 45465),
(101, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(102, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(104, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(105, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(106, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(107, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(108, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(109, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(110, 'gee', 'Vacia', 'rye', 'M', 'e10adc3949ba59abbe56e057f20f883e', 545),
(111, 'gee', 'Vacia', 'rye', 'M', 'e10adc3949ba59abbe56e057f20f883e', 4554),
(112, 'MemberFname', 'MemberLname', 'Member', 'M', 'e10adc3949ba59abbe56e057f20f883e', 77877877),
(113, 'AdminFname', 'AdminLname', 'Admin', 'A', 'e10adc3949ba59abbe56e057f20f883e', 99899899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `image_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

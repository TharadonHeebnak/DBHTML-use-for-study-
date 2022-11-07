-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 05:28 PM
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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomid` varchar(10) NOT NULL,
  `userroom` varchar(30) NOT NULL,
  `typeroom` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `startdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomid`, `userroom`, `typeroom`, `price`, `startdate`) VALUES
('121', 'Nanachi', 'ห้องนั้นเเหละ', 120000, '2022-11-04'),
('1312', 'Heker', 'ห้องพัดลม', 1651, '2022-11-08'),
('1214', 'Titi', 'ห้องเเอร์', 16514, '2022-11-03'),
('1214', 'Titi', 'ห้องเเอร์', 16514, '2022-11-03'),
('1214', 'Titi', 'ห้องเเอร์', 16514, '2022-11-03'),
('1214', 'Titi', 'ห้องเเอร์', 16514, '2022-11-03'),
('1214', 'Titi', 'ห้องเเอร์', 16514, '2022-11-03'),
('1214', 'Titi', 'ห้องเเอร์', 16514, '2022-11-03'),
('121', 'GEE', 'ห้องพัดลม', 1651, '2022-11-04'),
('121', 'Titi', 'ห้องพัดลม', 16514, '2022-11-17');

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
(103, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(104, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(105, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(106, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(107, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(108, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(109, 'Lee', 'Jerk', 'Lee', 'M', 'e10adc3949ba59abbe56e057f20f883e', 6565),
(110, 'gee', 'Vacia', 'rye', 'M', 'e10adc3949ba59abbe56e057f20f883e', 545),
(111, 'gee', 'Vacia', 'rye', 'M', 'e10adc3949ba59abbe56e057f20f883e', 4554);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

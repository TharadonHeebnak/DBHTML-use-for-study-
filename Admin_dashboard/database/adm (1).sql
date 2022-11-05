-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:10 PM
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
(1, 'gee', 'gay', '', '0', '', 546),
(2, 'gee', 'gay', '', '0', '', 1145),
(7, 'Gay', 'admin', 'Jo', 'A', '123456', 147258),
(8, 'gee', 'gay', '', '', '', 12313),
(9, 'gee', 'gay', '', '', '123', 1231),
(10, 'geegee', 'gaygay', '', '', '321', 564),
(11, 'fef', 'ef', '', '', '9bd5ee6fe5', 1),
(12, 'goo', 'go', '', '', '81dc9bdb52', 12315),
(13, 'ge', 'gee', '', '', '81dc9bdb52', 156),
(14, 'fef', 'gay', 'Jey', '', '81dc9bdb52', 565),
(15, 'gee', 'ef', 'ry', '', '1234', 546),
(21, 'reg', 'roblox', 'reg', 'M', 'e10adc3949ba59abbe56e057f20f883e', 315),
(22, 'bondrewd', 'Lorddawn', 'bondrewd', 'A', 'e10adc3949ba59abbe56e057f20f883e', 6556);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

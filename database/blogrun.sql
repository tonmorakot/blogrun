-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 08:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `tel`, `address`, `status`) VALUES
(1, 'มรกต', 'ทองพรหม', 'admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', '0805151651', 'พิษณุโลก', 'admin'),
(2, 'อโนทัย', 'ทองพรหม', 'test2@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0959559515', 'ลพบุรี', 'user'),
(3, 'สุประวีณ์', 'ประทุมมาศ', 'test3@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0814567894', 'กำแพงเพชร', 'user'),
(4, 'สุเทพ', 'ประทุมมาศ', 'test4@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0874561231', 'ลำพูน', 'user'),
(5, 'ศักดิ์สิทธิ์', 'ทองพรหม', 'test5@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0945684571', 'เชียงใหม่', 'user'),
(6, 'ลัดดาวัลย์', 'หวังเจริญ', 'test7@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0805151651', 'ศรีสะเกษ', 'user'),
(7, 'อาภรณ์', 'นากุ', 'test8@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0805151651', 'ขอนแก่น', 'user'),
(8, 'ปฏิกมล', 'โพธิคามบำรุง', 'test6@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0815478547', 'แพร่', 'user');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

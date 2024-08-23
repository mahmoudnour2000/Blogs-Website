-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 09:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datablog`
--

CREATE TABLE `datablog` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `subTitle` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datablog`
--

INSERT INTO `datablog` (`id`, `title`, `subTitle`, `description`, `image`) VALUES
(30, 'نشرة الاخبار عن لغة البرمجة PH', 'نشرة الاخبار عن لغة البرمجة ', 'نشرة الاخبار عن لغة البرمجة PHPنشرة الاخبار عن لغة البرمجة PHPنشرة الاخبار عن لغة البرمجة PHPنشرة ال', '27c0e3fab99791182111f6f4006ee73f.png'),
(32, 'نشرة الاخبار عن laraval', 'نشرة الاخبار عن laraval', '[okndfklndagndlfbsd,fbfdl,mbcvlbns[ofkgbnsrkbsldvb', '91b46b3ac9136249f4f4ead66391d2aa.png'),
(33, 'mahmihu8', 'oihiuhiu', 'puighbhug', '2f5b5f5183f36b3eb5cfdd9621eece4b.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Mahmoud nour mohamed mohamed', 'm01120901632@gmail.com', 'd4080de896bda53a157e54fde032f7a4'),
(2, 'Mahmoud nour', 'mahmoud@gmail.com', '009723baecdae0b3b62e3d1c77b7d303'),
(3, 'ali', 'shahdhamde584@gmail.com', '009723baecdae0b3b62e3d1c77b7d303'),
(4, 'asdvdfv', 'adsfvadfv@dfvsfasd', '2474599412ce9012da69d18058d992a5'),
(5, 'seargse', 'adsfvadfv@dfvsfasd', '2fa8d0fb2770fd88acef856bb782270a'),
(6, 'WEFw', 'shahdhamde584@gmail.com', '4e5b44fc6b4425464ac1ef8aa2cb24be'),
(7, 'sadgasd', 'sfasdf@hjbjhvjhvhjv', '4e5b44fc6b4425464ac1ef8aa2cb24be'),
(8, 'paemglkfd', 'Mahmoudnour0820@gmail.com', '3cf46700b7444b32bcdf96049bae4e3c'),
(9, 'lskmdvlkds', 'mah@g.com', '7f5abe882db082dbd5015909f7232cf9'),
(10, 'mahmoud', 'mnour@gmail.com', '3cf46700b7444b32bcdf96049bae4e3c'),
(11, 'mahmoud', 'MAH@GMAIL.COM', '7f5abe882db082dbd5015909f7232cf9'),
(12, 'asd', 'shahdhamde@gmail.com', '3cf46700b7444b32bcdf96049bae4e3c'),
(13, 'mahmoud', 'am@gmail.com', '009723baecdae0b3b62e3d1c77b7d303'),
(14, 'm@m.m', 'm@m.m', '009723baecdae0b3b62e3d1c77b7d303');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datablog`
--
ALTER TABLE `datablog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datablog`
--
ALTER TABLE `datablog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

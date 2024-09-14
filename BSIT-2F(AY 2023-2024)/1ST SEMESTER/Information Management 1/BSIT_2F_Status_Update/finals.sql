-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 07:54 AM
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
-- Database: `finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `username`, `password`, `name`, `status`, `datetime`) VALUES
(41, 'jowdaaaa', 'c4ca4238a0b923820dcc509a6f75849b', 'Pau', 'Okay na', '2023-12-16 06:49:18'),
(42, 'jmd', 'c81e728d9d4c2f636f067f89cc14862c', 'John Mark David', 'driving', '2023-12-16 06:48:42'),
(43, 'rolando', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Roland', 'Ano naaa', '2023-12-16 06:48:42'),
(44, 'panak', 'a87ff679a2f3e71d9181a67b7542122c', 'Johnrick', 'ayooo', '2023-12-16 06:52:14'),
(45, 'boy', 'e4da3b7fbbce2345d7772b0674a318d5', 'Dince', 'Vape lang', '2023-12-16 06:48:42'),
(46, 'acbang2', '1679091c5a880faf6fb5e6087eb1b2dc', 'Patrick', 'Kalinturado', '2023-12-16 06:48:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

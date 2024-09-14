-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1032.awardspace.net
-- Generation Time: Dec 14, 2023 at 08:50 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4361268_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `task details`
--

CREATE TABLE `task details` (
  `Task Number` int NOT NULL,
  `Task Title` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `Task Description` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task details`
--

INSERT INTO `task details` (`Task Number`, `Task Title`, `Task Description`) VALUES
(2, 'Geget ng goods', 'Kanto Malaya, dating tagpuan'),
(4, 'Buy Julia flowers', 'Monthsary on 5, go to Plaza'),
(5, 'Give mother money', '1,000 for vitamins, 500 for electric bill'),
(6, 'Go to Birthday of Shaine', 'Residence of Caleja Family, buy 500 peso gift card'),
(8, 'Get Mingming from vet', 'Ungaon if the ikus got its vaccine too'),
(9, 'Leave Daraga', 'Prepare bagahe before alis'),
(12, 'Swimming kaiba 2F', 'Mag-unga ki Shaine if shewants to go kaiba ako'),
(14, 'Hintayin mag-New Year', 'Hiram ka speaker kila Shaine'),
(15, 'Suyuin si Shaine', 'Bo!'),
(19, 'Hanapin si Muning', 'Kanto Tinyo, Highway'),
(21, 'Baguhin ang Pilipinas', 'Patayin si Marcos'),
(27, 'Finding You', 'Nemo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task details`
--
ALTER TABLE `task details`
  ADD PRIMARY KEY (`Task Number`,`Task Title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task details`
--
ALTER TABLE `task details`
  MODIFY `Task Number` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

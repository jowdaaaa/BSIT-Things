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
-- Table structure for table `task when`
--

CREATE TABLE `task when` (
  `Task Title` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `Task Date` date NOT NULL,
  `Task Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task when`
--

INSERT INTO `task when` (`Task Title`, `Task Date`, `Task Time`) VALUES
('Baguhin ang Pilipinas', '2023-12-20', '23:00:00'),
('Buy Julia flowers', '2023-12-29', '17:00:00'),
('Finding You', '2020-05-05', '04:44:00'),
('Geget ng goods', '2023-12-27', '01:30:00'),
('Get Mingming from vet', '2024-02-02', '14:22:00'),
('Get missing phone', '2023-12-27', '13:45:00'),
('Give mother money', '2024-01-01', '14:00:00'),
('Go to Birthday of Shaine', '2024-01-24', '16:00:00'),
('Hanapin si Muning', '2024-01-18', '16:30:00'),
('Hintayin mag-New Year', '2023-12-31', '23:30:00'),
('Leave Daraga', '2024-03-11', '07:30:00'),
('Suyuin si Shaine', '2023-12-15', '22:30:00'),
('Swimming kaiba 2F', '2023-12-22', '06:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task when`
--
ALTER TABLE `task when`
  ADD PRIMARY KEY (`Task Title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

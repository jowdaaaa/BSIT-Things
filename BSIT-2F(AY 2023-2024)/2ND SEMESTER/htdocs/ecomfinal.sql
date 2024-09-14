-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 10:51 PM
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
-- Database: `ecomfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'paulo', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(100) DEFAULT NULL,
  `prod_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `prod_id`, `quantity`, `total`, `prod_name`) VALUES
(112, 56, 2, 2, 3112, 'Trafalgar Law - DXF Figure - The Grandline Series - Extra - Change Ver. (Bandai Spirits)'),
(113, 56, 1, 1, 2709, 'Monkey D. Luffy - King of Artist - Gear 5 (Bandai Spirits)'),
(114, 56, 9, 1, 1700, 'XXRAY Plus Sanji (Anime Edition)');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `prod_id` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `total_price` int(100) DEFAULT NULL,
  `checkout_date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `user_id`, `prod_id`, `quantity`, `total_price`, `checkout_date`, `payment_method`, `address`, `status`) VALUES
(44, 56, 1, 1, 2709, '2024-05-10 23:13:50', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(45, 56, 1, 1, 2709, '2024-05-11 00:20:34', 'Paymaya', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(46, 56, 2, 1, 1556, '2024-05-11 00:20:34', 'Paymaya', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(47, 56, 10, 1, 910, '2024-05-11 00:23:24', 'GCash', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(48, 56, 15, 1, 2506, '2024-05-11 00:24:54', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(49, 56, 8, 1, 2598, '2024-05-11 00:24:54', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(50, 56, 2, 1, 1556, '2024-05-11 00:35:59', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(51, 57, 6, 1, 5832, '2024-05-11 00:44:27', 'Cash on Delivery', 'Nabua Camarines Sur', 'Delivered'),
(52, 56, 2, 1, 1556, '2024-05-11 22:28:19', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(53, 56, 73, 2, 6400, '2024-05-11 22:40:42', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(57, 57, 1, 1, 2709, '2024-05-12 16:47:23', 'Cash on Delivery', 'Nabua Camarines Sur', 'Delivered'),
(58, 57, 9, 1, 1700, '2024-05-12 16:55:31', 'Paymaya', 'Nabua Camarines Sur', 'Delivered'),
(60, 56, 2, 2, 3112, '2024-05-14 16:13:03', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(61, 56, 8, 1, 2598, '2024-05-16 23:48:28', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(62, 56, 21, 1, 11800, '2024-05-18 02:43:51', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Delivered'),
(63, 56, 2, 1, 1556, '2024-05-18 02:43:59', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Shipped Out'),
(64, 56, 29, 2, 20200, '2024-05-18 02:43:59', 'Cash on Delivery', 'Sta. Lucia, Nabua, Camarines Sur', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(10) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` int(25) NOT NULL,
  `prod_category` varchar(100) NOT NULL,
  `prod_details` text NOT NULL,
  `prod_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_price`, `prod_category`, `prod_details`, `prod_img`) VALUES
(1, 'Monkey D. Luffy - King of Artist - Gear 5 (Bandai Spirits)', 2709, 'One Piece', 'One Piece - Monkey D. Luffy - King of Artist - Gear 5 (Bandai Spirits) :\r\n\r\nLuffy, as seen in the space survival arc of One Piece, joins the S.H.Figuarts series! Now you can hold the power of Son Goku Ultra Instinct in the palm of your hand! The One Piece - Monkey D. Luffy - King of Artist - Gear 5 (Bandai Spirits) S.H.Figuarts Action Figure includes 3x optional expressions, 3x pairs of optional hands, a ball effect, and 7x light beam effects. Measures about 5 1/2-inches tall.\r\n\r\nSpecifications\r\nTheme:One Piece\r\nProduct Type:Action Figures\r\nCharacter:Luffy\r\nCollection:S.H.Figuarts\r\nAge:15 +\r\nCountry of Origin:China\r\nPackaging Height:7 inches (17.78 cm)\r\nPackaging Width:1.50 inches (3.81 cm)\r\nPackaging Length:6 inches (15.24 cm)\r\nWeight:0.350 lb', 'Pics/luffy.jpg'),
(2, 'Trafalgar Law - DXF Figure - The Grandline Series - Extra - Change Ver. (Bandai Spirits)', 1556, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles. Standing tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/lawwomen.jpg'),
(6, 'Son Goku Xeno - Super Full Power Saiyan 4 Limit Breaker - Ichiban Kuji Dr', 5832, 'Dragon Ball', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles. Standing tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/goku.jpg'),
(7, 'Sung Jin-woo', 1501, 'Solo Leveling', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles. Standing tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/jinwo.jpg'),
(8, 'Dai 2 Ki - Chousou', 2598, 'Jujutsu Kaisen', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles. Standing tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/chousou.jpg'),
(9, 'XXRAY Plus Sanji (Anime Edition)', 1700, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/sanji.jpg'),
(10, 'Anime Heroes Naruto_Gaara', 910, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/gaara.jpg'),
(11, 'Dragon Ball Figure goku Figure Super Saiyan Figure Action Figure Collection Design anime Figures', 2500, 'Dragon Ball', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/goku1.jpg'),
(12, 'One Piece Figure Gear 5 Luffy Action Figure Collection One Piece Luffy Action Figures', 10100, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/luffy1.jpg'),
(13, '72l Only I Level Up Solo Leveling Sung Jin Woo Anime Figure Manga Statue Collection Toy 8r4', 3030, 'Solo Leveling', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/jinwo1.jpg'),
(14, 'Gojou Satoru - Nendoroid #2440 - Suit Ver. (Good Smile Company)', 1690, 'Jujutsu Kaisen', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/gojou.jpg'),
(15, 'Fushiguro Touji - Jurei (Bukiko) - Luminasta - Rinsen (SEGA)', 2506, 'Jujutsu Kaisen', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/touji.jpg'),
(16, 'Namikaze Minato - Vibration Stars - II (Bandai Spirits)', 3538, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/minato.jpg'),
(17, 'Uzumaki Naruto - Memorable Saga (Bandai Spirits)', 3027, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/naruto.jpg'),
(18, 'Uchiha Obito - Vibration Stars - II (Bandai Spirits)', 2750, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/obito.jpg'),
(19, 'Son Gohan SSJ - S.H.Figuarts - The Fighter Who Surpassed Goku (Bandai Spirits)', 9559, 'Dragon Ball', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/gohan.jpg'),
(20, 'Vegeta SSJ (Majin) - Match Makers (Bandai Spirits)', 3917, 'Dragon Ball', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/vegeta.jpg'),
(21, 'Kugisaki Nobara - Figuarts ZERO (Bandai Spirits)', 11800, 'Jujutsu Kaisen', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/nobara.jpg'),
(22, 'Figuarts ZERO Nami - WT100 Commemoration Eichiro Oda New Illustration 100 Famous Views and Pirates- ', 6620, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/nami.jpg'),
(23, 'Kamado Nezuko - Figuarts ZERO - Kekkijutsu (Bandai Spirits)', 9100, 'Demon Slayer', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/nezuko.jpg'),
(24, 'Kamado Tanjirou - Figuarts ZERO - Total Concentration (Bandai Spirits)', 10700, 'Demon Slayer', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/tanjiro.jpg'),
(25, 'Figuarts ZERO Giyu Tomioka Demon Slayer: Kimetsu no Yaiba - November 2021 Re-release (Bandai)', 11800, 'Demon Slayer', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/giyu.jpg'),
(26, 'Hatake Kakashi - G.E.M. - Ninkai Taisen ver. (MegaHouse)', 5200, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/kakashi.jpg'),
(27, 'Naruto Shippuuden - Uchiha Sasuke - Chimi Mega Buddy! 003 - Ninkaitaisen Set (MegaHouse)', 6020, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/narutosasuke.jpg'),
(28, 'Nico Robin - DXF Figure - The Grandline Lady Item No. 24', 4070, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/robin1.jpg'),
(29, 'Kaido - Portrait Of Pirates \"WA-MAXIMUM\" (MegaHouse)', 10100, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/kaido.jpg'),
(30, 'Trafalgar Law - Portrait of Pirates \"Playback Memories\" (MegaHouse)', 8020, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/law.jpg'),
(31, 'Kanroji Mitsuri - ARTFX J - 1/8 (Kotobukiya)', 7200, 'Demon Slayer', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/mitsuri.jpg'),
(32, 'Mugen Ressha-hen - Rengoku Kyoujurou - Ichiban Kuji Kimetsu no Yaiba ~Reimeini Yaiba wo Mote~ B Priz', 10300, 'Demon Slayer', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/rengoku.jpg'),
(33, 'Agatsuma Zenitsu - Figuarts ZERO - Thunderclap and Flash (Bandai Spirits)', 11000, 'Demon Slayer', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/zenitsu.jpg'),
(34, 'Donquixote Doflamingo - Portrait Of Pirates \"SA-MAXIMUM\" - Heavenly Demon (MegaHouse)', 14020, 'One Piece', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/doflamingo.jpg'),
(35, 'Uchiha Itachi - Precious G.E.M. - Susanoo Ver., With LED base stand (MegaHouse)', 16220, 'Naruto', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/itachi.jpg'),
(36, 'Itadori Yuuji - DX Figure - Vs ver. (MegaHouse)', 1099, 'Jujutsu Kaisen', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/itadori.jpg'),
(37, 'Getou Suguru - Shibuya Scramble Figure - 1/7 (eStream, Mappa)', 8500, 'Jujutsu Kaisen', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles.\n\nStanding tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/getou.jpg'),
(72, 'Genshin Impact - Xiao - Guardian Yaksha Ver. - 1/7 (Apex)', 3500, 'Others', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles. Standing tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/xiao.jpg'),
(73, 'Bleach Sennen Kessen-hen - Kuchiki Byakuya - Precious G.E.M. (MegaHouse)', 3200, 'Others', 'Introducing the ultimate warrior destined to dominate your collection—the Anime Action Figure! Crafted with meticulous attention to detail, this figure captures the essence of strength, agility, and power. With its dynamic pose and finely sculpted physique, this figure embodies the epitome of action-packed anime battles. Standing tall at 5 inches, our Anime Action Figure features intricate design elements, from the battle-worn armor to the flowing, dynamic hair. Every muscle is defined, every crease in the clothing meticulously crafted to evoke a sense of movement frozen in time.', 'Pics/kuchiki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `checkout_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `prod_id`, `user_id`, `checkout_id`, `rating`, `comments`, `image`) VALUES
(13, 1, 56, 45, 5, 'Arrived on time, great quality would highly recommend for fellow one piece fans. I hope to see more high quality gear 5th figures.', 'Pics/Screenshot 2024-05-12 161559.jpg'),
(14, 2, 56, 52, 5, 'Its soo pretty! Her (his) face is perfect and her(his) tattoos are very detailed.', 'Pics/Screenshot 2024-05-12 161430.jpg'),
(15, 2, 56, 50, 4, 'The real thing is beautiful and available according to the price. The package was thick but when it was unpacked, the box was wrinkled. It\'s good that the inside was damaged. Overall satisfied.', NULL),
(16, 6, 57, 51, 5, 'The real thing is beautiful and available according to the price. The package was thick but when it was unpacked, the box was wrinkled. It\'s good that the inside was damaged. Overall satisfied.', NULL),
(17, 1, 57, 57, 4, 'The seller shipped quickly and indeed, the entity is as correct as the product photo, and the quality and service are very reassuring for buyers, and there will be more repurchase in the future. Thank', NULL),
(18, 9, 57, 58, 4, 'The seller\'s service is very good, the quality of the product is also very good, the packaging is very strict, it is worth repurchasing all the time', 'Pics/Screenshot 2024-05-12 165821.jpg'),
(20, 8, 56, 61, 4, 'maganda', 'Pics/Screenshot 2024-04-28 181710.jpg'),
(21, 2, 56, 60, 5, 'sdsadsa', 'Pics/Screenshot 2024-04-28 181710.jpg'),
(22, 73, 56, 53, 5, 'maganda', 'Pics/Screenshot 2024-04-28 181710.jpg'),
(23, 8, 56, 49, 5, 'okay lang', 'Pics/Screenshot 2024-04-28 181710.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `phone_number`, `password`, `user_address`) VALUES
(56, 'Judah Paulo Vinas', 'juvinas@my.cspc.edu.ph', '09519814518', 'c4ca4238a0b923820dcc509a6f75849b', 'Sta. Lucia, Nabua, Camarines Sur'),
(57, 'vPaulo', 'vjudahpaulo01@gmail.com', '09519814518', 'c81e728d9d4c2f636f067f89cc14862c', 'Nabua Camarines Sur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `checkout_id` (`checkout_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`checkout_id`) REFERENCES `checkout` (`checkout_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

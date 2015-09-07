-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2014 at 08:03 PM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `owloo_owloo`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_population`
--

CREATE TABLE IF NOT EXISTS `country_population` (
  `id_population` int(11) NOT NULL AUTO_INCREMENT,
  `id_country` bigint(11) NOT NULL,
  `population` bigint(12) NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`id_population`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;

--
-- Dumping data for table `country_population`
--

INSERT INTO `country_population` (`id_population`, `id_country`, `population`, `year`) VALUES
(1, 1, 311591917, 2011),
(2, 2, 34483975, 2011),
(3, 3, 62744081, 2011),
(4, 4, 40764561, 2011),
(5, 5, 22323900, 2011),
(6, 6, 8423635, 2011),
(7, 7, 11020952, 2011),
(8, 8, 196655014, 2011),
(9, 9, 17269525, 2011),
(10, 10, 1344130000, 2011),
(11, 11, 46927125, 2011),
(12, 12, 4403000, 2011),
(13, 13, 5570572, 2011),
(14, 14, 10056181, 2011),
(15, 15, 82536770, 2011),
(16, 16, 5388272, 2011),
(17, 17, 65433714, 2011),
(18, 18, 81797673, 2011),
(19, 19, 11300410, 2011),
(20, 20, 7071600, 2011),
(21, 21, 1241491960, 2011),
(22, 22, 242325638, 2011),
(23, 23, 4576317, 2011),
(24, 24, 7765900, 2011),
(25, 25, 60723603, 2011),
(26, 26, 127817277, 2011),
(27, 27, 6181000, 2011),
(28, 28, 2818042, 2011),
(29, 29, 4259405, 2011),
(30, 30, 28859154, 2011),
(31, 31, 114793341, 2011),
(32, 32, 16693074, 2011),
(33, 33, 4405200, 2011),
(34, 34, 162470737, 2011),
(35, 35, 4953088, 2011),
(36, 36, 176745364, 2011),
(37, 37, 3571185, 2011),
(38, 38, 29399817, 2011),
(39, 39, 94852030, 2011),
(40, 40, 38534157, 2011),
(41, 41, 142960000, 2011),
(42, 42, 28082541, 2011),
(43, 43, 7258745, 2011),
(44, 44, 5183700, 2011),
(45, 45, 50586757, 2011),
(46, 46, 49779000, 2011),
(47, 47, 46174601, 2011),
(48, 48, 9449213, 2011),
(49, 49, 7912398, 2011),
(50, 50, 23315822, 2011),
(51, 51, 69518555, 2011),
(52, 52, 73639596, 2011),
(53, 53, 7890924, 2011),
(54, 54, 29278000, 2011),
(55, 55, 10556999, 2011),
(56, 56, 518252, 2011),
(57, 57, 7348328, 2011),
(58, 58, 10496088, 2011),
(59, 59, 2052843, 2011),
(60, 60, 319014, 2011),
(61, 61, 5398384, 2011),
(62, 62, 3030173, 2011),
(63, 63, 1346350, 2011),
(64, 64, 150493658, 2011),
(65, 65, 20869000, 2011),
(66, 66, 41609728, 2011),
(67, 67, 9971727, 2011),
(68, 68, 32272974, 2011),
(69, 69, 1116564, 2011),
(70, 70, 2706500, 2011),
(71, 71, 14666055, 2011),
(72, 72, 21384832, 2011),
(73, 73, 10088108, 2011),
(74, 74, 14757316, 2011),
(75, 75, 4726575, 2011),
(76, 76, 1870041, 2011),
(77, 77, 6227491, 2011),
(78, 78, 7754687, 2011),
(79, 79, 5869859, 2011),
(80, 80, 6568290, 2011),
(81, 81, 3368595, 2011),
(82, 82, 3706690, 2011),
(83, 83, 3752228, 2011),
(84, 84, 4260636, 2011),
(85, 85, 10673800, 2011),
(86, 86, 1323535, 2011),
(87, 87, 87840000, 2011),
(88, 88, 24965816, 2011),
(89, 89, 1286051, 2011),
(90, 90, 45706100, 2011),
(91, 91, 415654, 2011),
(92, 92, 347176, 2011),
(93, 93, 320081, 2011),
(94, 94, 2846145, 2011),
(95, 95, 2063893, 2011),
(96, 96, 2058184, 2011),
(97, 97, 1339928, 2011),
(98, 98, 32961959, 2011),
(99, 99, 35980193, 2011),
(100, 100, 3215988, 2011),
(101, 101, 30485798, 2011),
(102, 102, 555731, 2011),
(103, 103, 632261, 2011),
(104, 104, 12767556, 2011),
(105, 105, 4486000, 2011),
(106, 106, 405938, 2011),
(107, 107, 34509205, 2011),
(108, 108, 463000, 2011),
(109, 109, 273925, 2011),
(110, 110, 9173082, 2011),
(111, 111, 46218486, 2011),
(112, 112, 6422772, 2011),
(113, 113, 498151, 2011),
(114, 114, 20030362, 2011),
(115, 115, 2030738, 2011),
(116, 116, 84734262, 2011),
(117, 117, 16558676, 2011),
(118, 118, 2324004, 2011),
(119, 119, 21315135, 2011),
(120, 120, 254024, 2011),
(121, 121, 3559000, 2011),
(122, 122, 868406, 2011),
(123, 123, 9473000, 2011),
(124, 124, 98000, 2011),
(125, 125, 182111, 2011),
(126, 126, 24799880, 2011),
(127, 127, 13474959, 2011),
(128, 128, 83327, 2011),
(129, 129, 10123787, 2011),
(130, 130, 14305183, 2011),
(131, 131, 108141, 2011),
(132, 132, 273777, 2011),
(133, 133, 35320445, 2011),
(134, 134, 64700, 2011),
(135, 135, 756040, 2011),
(136, 136, 3100236, 2011),
(137, 137, 15380888, 2011),
(138, 138, 80161, 2011),
(139, 139, 10942950, 2011),
(140, 140, 65345, 2011),
(141, 141, 1776103, 2011),
(142, 142, 48863, 2011),
(143, 143, 176000, 2011),
(144, 144, 56729, 2011),
(145, 145, 9099922, 2011),
(146, 146, 86165, 2011),
(147, 147, 104890, 2011),
(148, 148, 109666, 2011),
(149, 149, 356600, 2011),
(150, 150, 103220, 2011),
(151, 151, 2800114, 2011),
(152, 152, 23929708, 2011),
(153, 153, 15839538, 2011),
(154, 154, 19618432, 2011),
(155, 155, 236250, 2011),
(156, 156, 29341200, 2011),
(157, 157, 905564, 2011),
(158, 158, 16967845, 2011),
(159, 159, 35427, 2011),
(160, 160, 6154813, 2011),
(161, 161, 56840, 2011),
(162, 162, 1534262, 2011),
(163, 163, 29752, 2011),
(164, 164, 67757577, 2011),
(165, 165, 5514600, 2011),
(166, 166, 7013829, 2011),
(167, 167, 738267, 2011),
(168, 168, 50726, 2011),
(169, 169, 1067773, 2011),
(170, 170, 2193843, 2011),
(171, 171, 6288037, 2011),
(172, 172, 36304, 2011),
(173, 173, 61174, 2011),
(174, 174, 529419, 2011),
(175, 175, 86000, 2011),
(176, 176, 27800, 2011),
(177, 177, 39184, 2011),
(178, 178, 67675, 2011),
(179, 179, 3541540, 2011),
(180, 180, 28355, 2011),
(181, 181, 31735, 2011),
(182, 182, 5997486, 2011),
(183, 183, 16068994, 2011),
(184, 184, 4139748, 2011),
(185, 185, 15754, 2011),
(186, 186, 194000, 2011),
(187, 187, 500585, 2011),
(188, 188, 10221808, 2011),
(189, 189, 5105301, 2011),
(190, 190, 8575172, 2011),
(191, 191, 6976958, 2011),
(192, 192, 245619, 2011),
(193, 193, 552267, 2011),
(194, 194, 5415280, 2011),
(195, 195, 183874, 2011),
(196, 196, 69543, 2011),
(197, 197, 2932, 2011),
(198, 198, 720213, 2011),
(199, 199, 104509, 2011),
(200, 200, 753943, 2011),
(201, 201, 20609, 2011),
(202, 202, 111542, 2011),
(203, 203, 4486837, 2011),
(204, 204, 9556873, 2011),
(205, 205, 54816, 2011),
(206, 206, 836, 2011),
(207, 207, 11525496, 2011),
(208, 208, 101093, 2011),
(209, 209, 168526, 2011),
(210, 210, 9847, 2011),
(211, 211, 9378, 2011),
(212, 212, 839500, 2011);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

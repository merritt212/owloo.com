-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2014 at 08:29 PM
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
-- Table structure for table `record_country`
--

CREATE TABLE IF NOT EXISTS `record_country` (
  `id_historial_pais` int(11) NOT NULL AUTO_INCREMENT,
  `id_country` bigint(11) NOT NULL,
  `date` date NOT NULL,
  `total_user` bigint(20) DEFAULT NULL,
  `total_female` bigint(20) DEFAULT NULL,
  `total_male` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_historial_pais`),
  KEY `id_country` (`id_country`,`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=155895 ;

--
-- Dumping data for table `record_country`
--

INSERT INTO `record_country` (`id_historial_pais`, `id_country`, `date`, `total_user`, `total_female`, `total_male`) VALUES
(155857, 175, '2014-12-31', 32000, 15600, 16800),
(155858, 176, '2014-12-31', 12200, 6400, 5600),
(155859, 177, '2014-12-31', 17400, 8600, 8600),
(155860, 178, '2014-12-31', 32000, 16400, 14800),
(155861, 179, '2014-12-31', 240000, 66000, 168000),
(155862, 180, '2014-12-31', 20, 20, 20),
(155863, 181, '2014-12-31', 9000, 4200, 4800),
(155864, 182, '2014-12-31', 200000, 60000, 138000),
(155865, 183, '2014-12-31', 176000, 32000, 146000),
(155866, 184, '2014-12-31', 280000, 82000, 200000),
(155867, 185, '2014-12-31', 7600, 4000, 3400),
(155868, 186, '2014-12-31', 42000, 17800, 24000),
(155869, 187, '2014-12-31', 152000, 72000, 78000),
(155870, 188, '2014-12-31', 560000, 158000, 400000),
(155871, 189, '2014-12-31', 12400, 4400, 8000),
(155872, 190, '2014-12-31', 146000, 44000, 100000),
(155873, 191, '2014-12-31', 64000, 18600, 46000),
(155874, 192, '2014-12-31', 15400, 7200, 8000),
(155875, 193, '2014-12-31', 30000, 14000, 16600),
(155876, 194, '2014-12-31', 56000, 20000, 34000),
(155877, 195, '2014-12-31', 40000, 22000, 18600),
(155878, 196, '2014-12-31', 20, 20, 20),
(155879, 197, '2014-12-31', 2000, 960, 1040),
(155880, 198, '2014-12-31', 50000, 15600, 36000),
(155881, 199, '2014-12-31', 30000, 16400, 13200),
(155882, 200, '2014-12-31', 44000, 16600, 28000),
(155883, 201, '2014-12-31', 6400, 3600, 2600),
(155884, 202, '2014-12-31', 18800, 10200, 8400),
(155885, 203, '2014-12-31', 90000, 34000, 56000),
(155886, 204, '2014-12-31', 300000, 86000, 200000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

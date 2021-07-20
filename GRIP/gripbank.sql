-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2021 at 04:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gripbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `Sr.no` int(10) NOT NULL AUTO_INCREMENT,
  `Sender` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL,
  `Balance` int(100) NOT NULL,
  PRIMARY KEY (`Sr.no`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Sr.no`, `Sender`, `Receiver`, `Balance`) VALUES
(1, 'BALAJI YADAV', 'MURLI SINGH', 1),
(2, 'BALAJI YADAV', 'MURLI SINGH', 4),
(3, 'Ajay shinde', 'Suresh', 10),
(4, 'Vaishnavi ', 'Shruti', 10),
(5, 'MURLI SINGH', 'BALAJI YADAV', 1),
(6, 'Karan Umredkar', 'BALAJI YADAV', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Email ID` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Balance` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`ID`, `Name`, `Email ID`, `Balance`) VALUES
(1, 'BALAJI YADAV', 'yadav.balaji@gmail.com', 100008),
(2, 'MURLI SINGH', 'singh.murli07@gmail.com', 900000),
(3, 'Karan Umredkar', 'akshad.umredkar@gmail.com', 24992),
(4, 'Aditi ', 'aditiyadav01@gmail.com', 10000),
(5, 'Ajay shinde', 'shinde.ajay@gmail.com', 19990),
(6, 'Yadav Priya ', 'priya261112@gmail.com', 30000),
(7, 'Mushahid', 'mushu123@gmail.com', 15000),
(8, 'Suresh', 'suresh27@gmail.com', 12010),
(9, 'Vaishnavi ', 'vaish2812@gmail.com', 12280),
(10, 'Shruti', 'shruti262@gmail.com', 26010);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

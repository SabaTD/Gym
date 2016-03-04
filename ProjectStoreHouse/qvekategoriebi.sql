-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 11:27 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sawyobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `qvekategoriebi`
--

CREATE TABLE IF NOT EXISTS `qvekategoriebi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sawy_id` int(11) NOT NULL,
  `qve_dasaxeleba` varchar(250) NOT NULL,
  `fasi` int(11) NOT NULL,
  `raodenoba` int(11) NOT NULL,
  `statusi` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qvekategoriebi`
--

INSERT INTO `qvekategoriebi` (`ID`, `sawy_id`, `qve_dasaxeleba`, `fasi`, `raodenoba`, `statusi`) VALUES
(2, 1, 'martini123', 100123, 5105, 0),
(3, 2, 'sacivi', 100, 100, 0),
(4, 2, 'puri', 111, 104, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

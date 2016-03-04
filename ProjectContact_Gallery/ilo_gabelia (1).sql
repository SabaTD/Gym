-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2016 at 10:47 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ilo_gabelia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Login`, `Password`) VALUES
(1, 'ilo_gabelia', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `About` text NOT NULL,
  `Address` text NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `About`, `Address`, `Phone`, `Email`) VALUES
(1, 'me var fotografi me var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografime var fotografi', 'edskfjkedwsjmfkedwsmfcvedsmkgf', 'dfgjgfrkerjgtker', 'rejtgkerjgtkerjkgre@');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `img_link` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `img_link`) VALUES
(1, 'images/fulls/f_1456822208.jpg'),
(2, 'images/fulls/f_1456822229.jpg'),
(3, 'images/fulls/f_1456822380.jpg'),
(4, 'images/fulls/f_1456822403.jpg'),
(5, 'images/fulls/f_1456822415.jpg'),
(6, 'images/fulls/f_1456822419.jpg'),
(7, 'images/fulls/f_1456822845.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

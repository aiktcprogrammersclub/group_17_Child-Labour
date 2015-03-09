-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 12:40 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `child_labour`
--
CREATE DATABASE IF NOT EXISTS `child_labour` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `child_labour`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `cpass`) VALUES
(1, 'shamad', 'shamad90@gmail.com', 'qwertyuiop', 'qwertyuiop'),
(2, 'shoeb', 'shaikh16@gmail.com', 'shaikh123', 'shaikh123'),
(3, 'abc', 'abc@gmail.com', 'qwertyu', 'qwertyu');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `post` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `email`, `complaint`, `date`) VALUES
(1, 'Abdul Samad', 'shamad92@gmail.com', 'no complaint!!!', '2015-03-07 01:30:11'),
(2, 'Abdul Samad', 'shamad92@gmail.com', 'no complaint!!!', '2015-03-07 01:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE IF NOT EXISTS `suggestions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `suggest` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `email`, `suggest`, `date`) VALUES
(1, 'shamad92@gmail.com', 'hellow shoeb shaikh!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '2015-03-06 21:00:41'),
(2, 'shamad92@gmail.com', 'hellow shoeb shaikh!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '2015-03-06 21:04:13'),
(3, 'shadab@gmail.com', 'hello', '2015-03-06 21:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `date`) VALUES
(1, '2015-03-06 20:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `cpass`) VALUES
(1, 'abdul shamad', 'shamad921@gmail.com', '1234567', '1234567'),
(2, 'shamad', 'shamad92@gmail.com', '12345678', '12345678'),
(3, 'manzoor', 'manzoor11@gmail.com', 'manzoor123', 'manzoor123'),
(4, 'manzoor', 'manzoor11@gmail.com', 'manzoor123', 'manzoor123'),
(5, 'manzoor', 'manzoor11@gmail.com', 'manzoor123', 'manzoor123'),
(6, 'manzoor', 'manzoor11@gmail.com', 'manzoor123', 'manzoor123'),
(7, 'dddddd', 'abc@gmail.com', 'abc1234', 'abc1234'),
(8, 'dddddd', 'abc@gmail.com', 'qwertyu', 'qwertyu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

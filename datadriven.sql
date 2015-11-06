-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2015 at 08:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datadriven`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `email` varchar(100) DEFAULT NULL,
  `address` text,
  `crimes` text,
  `password` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `picture` text,
  `rank` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `address`, `crimes`, `password`, `dob`, `picture`, `rank`) VALUES
(1, 'Mozammel', 'Haque', 'mzmlhaque61@gmail.com', 'Mymensingh, Dhaka, Bangladesh', 'Marder, Rape', 'This123Pass', '1993-12-08', '12345.jpg', 'admin'),
(2, 'Zahidul Islam', 'Ruhel', 'ziruhel@gmail.com', 'Dhaka, Bangladesh.', 'Marder, Rape', '123456', '1993-12-08', '789456123.jpg', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

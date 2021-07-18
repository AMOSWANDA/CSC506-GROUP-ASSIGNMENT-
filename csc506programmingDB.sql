-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2021 at 04:48 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csc506prammingDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post`, `name`) VALUES
(7, '  CSC506 is really good ', 'Jesse Ayuba'),
;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Jesse', 'jesseayubamalafa@gmail.com', '07062334887', 'Sangere FUTY', '1234'),
;

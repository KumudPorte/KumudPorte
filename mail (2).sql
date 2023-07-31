-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2015 at 04:05 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE IF NOT EXISTS `logintbl` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `mobileno` bigint(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`uname`, `password`, `branch`, `mobileno`, `address`, `image`) VALUES
('cse7', 'cse7', 'CSE', 7, 'Bhilai', '3.jpg'),
('deepancy', 'dimpy', 'cse', 8085570070, 'katghora', '31249poster.jpg'),
('harsha', '1234', 'cse', 8818890909, 'bhilai sector 10', '3 Puppies.jpg'),
('jigyasa', '123', 'cse', 8818895859, 'bhilai', '4.jpg'),
('jigyasa dewangan', '123', 'cse', 8818895859, 'bhilai', 'mobile-wallpapers-nokia-e5-free-s-download-cute-ba'),
('jigyasa1', '123', 'cse7', 8899999908, 'bhilai kohka', '117790_hd-fingers-cute-wallpapers-romantic-romance');

-- --------------------------------------------------------

--
-- Table structure for table `voiechat`
--

CREATE TABLE IF NOT EXISTS `voiechat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mailto` varchar(50) NOT NULL,
  `sendby` varchar(50) NOT NULL,
  `mail` varchar(10000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `voiechat`
--

INSERT INTO `voiechat` (`id`, `mailto`, `sendby`, `mail`, `date`, `subject`, `description`) VALUES
(1, 'CSE7', 'jigyasa	', 'cse', '15:07:22', 'cse rsr 7th sem', 'Hello Brother How Are You'),
(2, '', 'cse7	', '', '15:07:22', '', ''),
(8, 'jigyasa', 'jigyasa1', 'php', '15:07:23', 'php', 'php is loosely type language'),
(9, 'jigyasa', 'cse7', 'cse7 sem  ', '15:07:24', ' php  is server site programming language', 'book is not suficient');

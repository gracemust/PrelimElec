-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 09:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'april', 'april@yahoo.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(4, 'april', 'april@yahoo.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(5, 'april', 'april@yahoo.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(6, 'april', 'april@yahoo.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(7, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'srtyu', 'l', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'nina', 'nina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'nina', 'nina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'ninaq', 'ninaq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'ninaq', 'ninaq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'ninaq', 'ninaq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'aaa', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'dayvie', 'dayvie@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'aaaa', 'a@y.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(23, 'aaaaa', 'aa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(24, 'aaaaa', 'aa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(25, 'aaaaa', 'aa@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(26, 'qwerty', 'a1@g.c', '202cb962ac59075b964b07152d234b70'),
(27, 'baby', 'bb@yahoo.com', '4a7d1ed414474e4033ac29ccb8653d9b'),
(28, 'aprilme', 'q1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(29, '1q', '1q@g.c', '6512bd43d9caa6e02c990b0a82652dca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

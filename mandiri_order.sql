-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 05:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mandiri_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('administrator','adminreporting','operatorbu','supervisorbu','operatorco') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `level`) VALUES
(1123, 'Khairul Fajeri', 'khairul', '8e2d43a3407835dc5d58abb5f71a206f', 'khairul.fajar@gmail.com', 'administrator'),
(2131, 'Abdul Somad', 'adul', '997593f7b7af4fc758127e1dc41e3446', 'adul@gmail.com', 'adminreporting'),
(2341, 'Rudini Nor Habibi', 'rudini', '43a44937b40c12ef8e4973fc3ea602a8', '', 'operatorbu'),
(3454, 'Ahmad Alimsyah', 'alim', '3ea6277babd0570c650fca3d17ec4bc5', '', 'supervisorbu'),
(34992, 'Ahmad Rizal', 'rizal', '150fb021c56c33f82eef99253eb36ee1', '', 'operatorco');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

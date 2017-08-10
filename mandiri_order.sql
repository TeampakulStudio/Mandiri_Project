-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 01:08 PM
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
-- Table structure for table `data_order`
--

CREATE TABLE IF NOT EXISTS `data_order` (
  `id_order` int(11) NOT NULL,
  `nama_debitur` varchar(100) NOT NULL,
  `email_debitur` varchar(100) NOT NULL,
  `limit_kredit` int(11) NOT NULL,
  `segmen_kredit` int(11) NOT NULL,
  `jenis_order` enum('Notaris','Asuransi','KJPP','') NOT NULL,
  `detail_agunan` text NOT NULL,
  `nama_pic_debitur` varchar(100) NOT NULL,
  `telpon_pic_debitur` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `status` enum('Waiting','Outstanding') NOT NULL DEFAULT 'Waiting',
  `waktu_acc` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_order`
--

INSERT INTO `data_order` (`id_order`, `nama_debitur`, `email_debitur`, `limit_kredit`, `segmen_kredit`, `jenis_order`, `detail_agunan`, `nama_pic_debitur`, `telpon_pic_debitur`, `waktu`, `id_user`, `status`, `waktu_acc`) VALUES
(4, 'khairul', 'fajeri@gmail.com', 488, 499, 'Notaris', 'What is Lorem Ipsum?\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nWhy do we use it?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'khkd', '9899', '2017-08-10 01:36:14', 2341, 'Outstanding', '0000-00-00 00:00:00'),
(5, 'rudini', 'rudiin@gmailc.com', 344, 5333, 'Asuransi', 'No Rumah 124', 'adul', '0823', '2017-08-10 07:38:52', 2341, 'Outstanding', '0000-00-00 00:00:00'),
(6, 'ujang', 'ujang@gmial.com', 34, 53, 'Notaris', 'Keren gan', 'Amat', '3533', '2017-08-10 07:49:50', 4533, 'Outstanding', '0000-00-00 00:00:00'),
(9, 'aluh', 'aluh@gmail.com', 34, 35, 'Asuransi', 'gajah', 'khairul', '0988', '2017-08-10 08:57:23', 2341, 'Waiting', '2017-08-10 09:01:00'),
(10, 'amat', 'amat@gmail.com', 33, 55, 'Asuransi', 'detail', 'asah', '089999898', '2017-08-10 08:59:20', 4533, 'Outstanding', '2017-08-10 11:07:42'),
(11, 'ahmad', 'ahmad@gmail.com', 53, 55, 'Asuransi', 'bla hhh', 'khaiurl', '08999', '2017-08-10 09:10:35', 2341, 'Outstanding', NULL);

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
(34992, 'Ahmad Rizal', 'rizal', '150fb021c56c33f82eef99253eb36ee1', '', 'operatorco'),
(4533, 'galuh banjar', 'galuh', '7e67f82b2528050191537b600c15f48e', 'galuh@gmail.com', 'operatorbu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

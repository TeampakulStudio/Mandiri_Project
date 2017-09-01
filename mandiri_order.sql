-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2017 at 07:39 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mandiri_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `agunan`
--

CREATE TABLE IF NOT EXISTS `agunan` (
  `id_agunan` int(11) NOT NULL,
  `no` varchar(250) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agunan`
--

INSERT INTO `agunan` (`id_agunan`, `no`, `alamat`, `nama_pemilik`, `id_order`) VALUES
(1, 'No. SHM/rudini/5499', 'Jl Pemurus', 'Rudini', 1),
(2, 'No. SBMH/rudini5466', 'Jl. Kacak Piring', 'Rudini', 1),
(3, 'No. 5366/ujang/bro', 'Jl Ramayana', 'Ujang', 2),
(4, 'No. 3456/ujang/keren', 'Jl. Tamban Raya', 'Ujang', 2),
(5, 'No. SHGB/bla/ujang', 'Jl. veteran', 'Ujang', 2),
(6, 'No. SHM/kdfk', 'Jl Nagasari', 'Adul', 3),
(7, 'No. SHGM/586/fjdk', 'INdah Permata', 'Rudi', 3),
(8, 'No. 3949', 'Jl Dahlia', 'Joni', 4),
(9, 'No. 3949', 'Jl Raga Buana', 'Ujang', 4),
(10, 'No. 3949', 'Bla', 'Blabal', 5),
(11, 'NO. 3535', 'bla', 'hhh', 5),
(12, 'NO. 3535', 'Iya', 'Mantap', 5),
(13, 'No. 3949', 'BUja', 'Jl. Antar', 6),
(14, 'No. 535/kdfl', 'Jl bujangan', 'Rima', 6),
(15, 'NO. 3535', 'Jl. Kacak Piring', 'Fanta', 6),
(16, 'No. 3456/ujang/keren', 'Brau', 'Ibur', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_order`
--

CREATE TABLE IF NOT EXISTS `data_order` (
  `id_order` int(11) NOT NULL,
  `nama_debitur` varchar(100) NOT NULL,
  `limit_kredit` int(11) NOT NULL,
  `segmen_kredit` varchar(50) NOT NULL,
  `jenis_order` enum('Notaris','Asuransi','KJPP','') NOT NULL,
  `nama_pic_debitur` varchar(100) NOT NULL,
  `telpon_pic_debitur` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `status` enum('Waiting','Approved','Done') NOT NULL DEFAULT 'Waiting',
  `waktu_acc` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_order`
--

INSERT INTO `data_order` (`id_order`, `nama_debitur`, `limit_kredit`, `segmen_kredit`, `jenis_order`, `nama_pic_debitur`, `telpon_pic_debitur`, `waktu`, `id_user`, `status`, `waktu_acc`) VALUES
(1, 'Rudini', 70000, '300', 'Asuransi', 'Khairul', '082254646758', '2017-08-14 04:12:00', 2341, 'Approved', '2017-08-24 06:48:52'),
(2, 'Khairul', 50000, '899', 'Notaris', 'Ujang', '08994858499', '2017-08-14 04:14:22', 4533, 'Approved', '2017-09-01 04:11:13'),
(3, 'Ahmad Saleh', 50000, '50000', 'Notaris', 'Rudini', '08553959358', '2017-08-24 06:47:35', 2341, 'Approved', '2017-09-01 05:12:44'),
(4, 'khairul', 70000000, 'VCC', 'Asuransi', 'Khairul', 'Adam', '2017-09-01 02:24:07', 2341, 'Approved', '2017-09-01 05:09:29'),
(5, 'Khiarul', 788, 'SYC', 'KJPP', 'Khairul', '08449699', '2017-09-01 02:59:17', 2341, 'Approved', '2017-09-01 04:14:12'),
(6, 'Khairul Fajeri', 1200000, 'VCG', 'KJPP', 'Fajar', '0822848284', '2017-09-01 03:17:40', 2341, 'Approved', '2017-09-01 05:15:32'),
(7, 'fajeri', 899, 'HCK', 'Notaris', 'Khairul', '08399859', '2017-09-01 05:33:58', 2341, 'Waiting', NULL);

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
-- Indexes for table `agunan`
--
ALTER TABLE `agunan`
  ADD PRIMARY KEY (`id_agunan`);

--
-- Indexes for table `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agunan`
--
ALTER TABLE `agunan`
  MODIFY `id_agunan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

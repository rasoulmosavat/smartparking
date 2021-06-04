-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2021 at 05:00 PM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saljbjfj_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `camerainfo`
--

CREATE TABLE `camerainfo` (
  `id` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `parkinginfoid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camerainfo`
--

INSERT INTO `camerainfo` (`id`, `address`, `parkinginfoid`) VALUES
(1, '00-20-10-2A-03-0A', 2),
(2, '00-20-10-2A-03-0d', 3),
(3, '00-20-10-2A-03-0c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carowner`
--

CREATE TABLE `carowner` (
  `id` int(10) NOT NULL,
  `name` varchar(19) NOT NULL,
  `family` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `licenseplate` varchar(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carowner`
--

INSERT INTO `carowner` (`id`, `name`, `family`, `email`, `tell`, `licenseplate`, `user`, `pass`) VALUES
(18, 'Alex', 'test', 'abcdata10@gmail.com', '123456', '46517', 'test123', '12345'),
(17, '', '', '', '', '', 't1', '111'),
(16, 'q', 'r', 'rasoulmosavat@gmail.com', '876', '4651788', 'test', '123');

-- --------------------------------------------------------

--
-- Table structure for table `parkduration`
--

CREATE TABLE `parkduration` (
  `id` int(10) NOT NULL,
  `licenseplate` varchar(50) NOT NULL,
  `entertime` varchar(20) NOT NULL,
  `exittime` varchar(20) NOT NULL DEFAULT '0',
  `customerid` int(10) NOT NULL,
  `parkinginfoid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkduration`
--

INSERT INTO `parkduration` (`id`, `licenseplate`, `entertime`, `exittime`, `customerid`, `parkinginfoid`) VALUES
(20, '46517', '2021-06-02 05:44:20', '0', 18, 2),
(19, '46517', '2021-06-02 05:43:47', '.2021-06-02 05:44:06', 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `parkinginfo`
--

CREATE TABLE `parkinginfo` (
  `id` int(10) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `freeloc` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkinginfo`
--

INSERT INTO `parkinginfo` (`id`, `pname`, `address`, `freeloc`) VALUES
(1, 'VaxjoNorth', 'Vaxjo-North', 4),
(2, 'Vaxjosouth', 'Furutavagen 5, 352 54 Vaxja', 2),
(3, 'VaxjoWest', 'P G Vejdes vag 4A, 352 52 Vaxjo', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parkloc`
--

CREATE TABLE `parkloc` (
  `id` int(11) NOT NULL,
  `state` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `parkingid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkloc`
--

INSERT INTO `parkloc` (`id`, `state`, `address`, `parkingid`) VALUES
(1, 0, '11', 1),
(2, 0, '12', 1),
(3, 0, '13', 1),
(4, 0, '14', 1),
(5, 0, '21', 2),
(6, 0, '22', 2),
(7, 0, '23', 2),
(8, 0, '24', 2),
(9, 0, '31', 3),
(10, 0, '32', 3),
(11, 0, '33', 3),
(12, 1, '34', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`) VALUES
(1, 'Dave', 25),
(2, 'Vave', 26),
(3, 'sep', 34),
(4, 'reza', 22),
(5, 'r2', 22),
(6, 'rrr7', 23),
(7, '\"new\"', 33),
(8, '\"new\"', 33),
(9, '\"new\"', 33),
(10, '\"1new\"', 133);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camerainfo`
--
ALTER TABLE `camerainfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carowner`
--
ALTER TABLE `carowner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkduration`
--
ALTER TABLE `parkduration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkinginfo`
--
ALTER TABLE `parkinginfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkloc`
--
ALTER TABLE `parkloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camerainfo`
--
ALTER TABLE `camerainfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carowner`
--
ALTER TABLE `carowner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `parkduration`
--
ALTER TABLE `parkduration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parkinginfo`
--
ALTER TABLE `parkinginfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parkloc`
--
ALTER TABLE `parkloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

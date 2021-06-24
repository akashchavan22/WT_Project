-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 01:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`, `created_date`, `modified_date`) VALUES
(1, 'admin@gmail.com', 'admin123', '2020-04-06 14:35:00', '2021-05-31 16:15:33'),
(2, 'admin1@gmail.com', 'admin1', '2021-05-29 16:01:37', '2021-05-29 16:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

 TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
  `fld_Name` varchar(255) NOT NULL,
  `fld_Address` text NOT NULL,
  `fld_Contact` varchar(255) NOT NULL,
  `fld_Email` varchar(255) NOT NULL,
  `fld_PassworCREATEd` varchar(11) NOT NULL,
  `fld_City` varchar(255) NOT NULL,
  `fld_Gender` varchar(255) NOT NULL,
  `fld_Lang` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fld_Name`, `fld_Address`, `fld_Contact`, `fld_Email`, `fld_Password`, `fld_City`, `fld_Gender`, `fld_Lang`, `Photo`, `created_date`, `modified_date`) VALUES
(1, 'Sonali Gorade', 'Nashik', '8408084888', 'sonaligorade@gmail.com', 'asd123', 'nashik', 'female', 'html,css,javascript', '673911.jpg', '2021-05-29 14:24:31', '2021-05-29 14:24:31'),
(3, 'Prachi', 'Nashik', '9865325689', 'prachi@gmail.com', 'prachi123', 'nashik', 'female', 'html,css,javascript,php', '741165.png', '2021-05-29 16:04:04', '2021-05-29 16:04:04'),
(6, 'shubham', 'nashik', '874512457', 'shubham@gmail.com', 'shubh123', 'delhi', 'male', 'html,css,javascript', '234287.png', '2021-05-31 16:10:04', '2021-05-31 16:10:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

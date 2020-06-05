-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 02:47 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vot`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlog`
--

CREATE TABLE IF NOT EXISTS `adlog` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



INSERT INTO `adlog` (`username`, `password`, `image`, `admin_id`) VALUES
('nishat', '1234', '', 1),
('sinhat', '12345', '', 2),
('himika', '3043', 'ad_image/sinhat.jpg', 3);
-- --------------------------------------------------------


ALTER TABLE `adlog`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `adlog`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;


CREATE TABLE IF NOT EXISTS `candidates` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121213 DEFAULT CHARSET=latin1;



INSERT INTO `candidates` (`name`, `candidate_id`, `image`, `votes`) VALUES
('nishat', 133, 'can_image/nishat.JPG', 0),
('Himika', 122, 'can_image/sinhat.JPG', 0);


CREATE TABLE IF NOT EXISTS `voter` (
  `id` int(11) NOT NULL,
  `voter_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `voter_id` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `choice_btn` tinyint(1) NOT NULL,
  `image` varchar(300) NOT NULL,
  `voted` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO `voter` (`id`, `voter_name`, `user_name`, `password`, `voter_id`, `mobile`, `dob`, `choice_btn`, `image`, `voted`) VALUES
(11, 'nishat', 'nishat 1234', '12345', '123', '01711111111', '1995-09-30', 0, 'voter_image/1.JPG', 0);




ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);


ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);




CREATE TABLE IF NOT EXISTS `voter3` (
  `id` int(11) NOT NULL,
  `voter_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `voter_id` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `choice_btn` tinyint(1) NOT NULL,
  `image` varchar(300) NOT NULL,
  `voted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `voter3`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `voter3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121213;


  ALTER TABLE `voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;


CREATE TABLE IF NOT EXISTS `election` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121213 DEFAULT CHARSET=latin1;



INSERT INTO `election` (`name`, `candidate_id`, `image`, `votes`) VALUES
('nishat', 133, 'elec_image/1.JPG', 0),
('himi', 121212, 'elec_image/2.jpg', 0);


ALTER TABLE `election`
  ADD PRIMARY KEY (`candidate_id`);


ALTER TABLE `election`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121213;

   
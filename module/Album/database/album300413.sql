-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2013 at 02:13 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `title`, `artist`) VALUES
(2, 'cn', 'cn'),
(5, 'my love', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `state` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `display_name`, `password`, `state`) VALUES
(1, NULL, 'chhornnypisit.itc@yahoo.com', NULL, '$2y$14$Lp/C39RqEP5gXgMvt50MeuXLPa/6wwlXvL4extUD4FTxngIlMAN7a', NULL),
(2, NULL, 'thisisemail@mail.com', NULL, '$2y$14$z8.XLbkVHKMjrSMWjp8oMem1QnQBmsvPxBT/Y.z4zdS4tDgaSvp0W', NULL),
(3, 'cnpisit', NULL, 'cnpisit', 'twitterToLocalUser', NULL),
(4, NULL, 'pisit_lovlov@yahoo.com', 'Cn Pisit', 'facebookToLocalUser', NULL),
(5, 'TiTi_Khmer', NULL, 'TiTi', 'twitterToLocalUser', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_provider`
--

CREATE TABLE IF NOT EXISTS `user_provider` (
  `user_id` int(11) NOT NULL,
  `provider_id` varchar(50) NOT NULL,
  `provider` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`,`provider_id`),
  UNIQUE KEY `provider_id` (`provider_id`,`provider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_provider`
--

INSERT INTO `user_provider` (`user_id`, `provider_id`, `provider`) VALUES
(4, '100001181617699', 'facebook'),
(3, '1247842100', 'twitter'),
(5, '1260834990', 'twitter');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_provider`
--
ALTER TABLE `user_provider`
  ADD CONSTRAINT `user_provider_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

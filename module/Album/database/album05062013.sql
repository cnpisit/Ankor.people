-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2013 at 04:31 AM
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
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `title`, `artist`) VALUES
(0, 'cn', 'cn'),
(1, 'first time', 'cnpisit');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `like_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `st_id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`like_id`),
  KEY `user_id` (`user_id`),
  KEY `st_id` (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `st_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `st_com` varchar(200) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`st_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`st_id`, `st_com`, `user_id`) VALUES
(1, 'this is for testing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arts`
--

CREATE TABLE IF NOT EXISTS `tbl_arts` (
  `art_id` int(100) unsigned NOT NULL,
  `art_name` varchar(100) DEFAULT NULL,
  `art_desc` text,
  `art_refid` int(20) unsigned NOT NULL,
  `art_quote` char(1) DEFAULT NULL,
  `art_lasttransaction` text,
  `art_dimh` double(11,6) DEFAULT NULL,
  `art_diml1` double(11,6) DEFAULT NULL,
  `art_diml2` double(11,6) DEFAULT NULL,
  `st_id` int(100) unsigned NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  `tal_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`art_id`),
  KEY `st_id` (`st_id`),
  KEY `sur_id` (`sur_id`),
  KEY `tal_id` (`tal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_art_entiry`
--

CREATE TABLE IF NOT EXISTS `tbl_art_entiry` (
  `ent_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `tal_name` varchar(200) NOT NULL,
  `ent_name` varchar(200) NOT NULL,
  `ent_desc` text,
  `ent_refid` varchar(200) DEFAULT NULL,
  `ent_quote` varchar(200) DEFAULT NULL,
  `show_id` int(100) unsigned NOT NULL,
  `gal_id` int(100) unsigned NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  `gal_price` int(10) DEFAULT NULL,
  PRIMARY KEY (`ent_id`),
  KEY `show_id` (`show_id`),
  KEY `gal_id` (`gal_id`),
  KEY `sur_id` (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `co_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `co_comment` text,
  `sur_id` int(100) unsigned NOT NULL,
  `ent_id` int(100) unsigned NOT NULL,
  `show_id` int(100) unsigned NOT NULL,
  `gal_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`co_id`),
  KEY `sur_id` (`sur_id`),
  KEY `ent_id` (`ent_id`),
  KEY `show_id` (`show_id`),
  KEY `gal_id` (`gal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content_format`
--

CREATE TABLE IF NOT EXISTS `tbl_content_format` (
  `pho_id` int(100) unsigned NOT NULL,
  `pho_name` varchar(100) NOT NULL,
  `pho_desc` text,
  `pho_images` text,
  `pho_url` text,
  `art_id` int(100) unsigned NOT NULL,
  `gal_id` int(100) unsigned NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`pho_id`),
  KEY `art_id` (`art_id`),
  KEY `gal_id` (`gal_id`),
  KEY `sur_id` (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content_format1`
--

CREATE TABLE IF NOT EXISTS `tbl_content_format1` (
  `pho_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `pho_name` varchar(100) NOT NULL,
  `pho_desc` text,
  `pho_images` text,
  `pho_url` text,
  `ent_id` int(100) unsigned NOT NULL,
  `show_id` int(100) unsigned NOT NULL,
  `gal_id` int(100) unsigned NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`pho_id`),
  KEY `ent_id` (`ent_id`),
  KEY `show_id` (`show_id`),
  KEY `gal_id` (`gal_id`),
  KEY `sur_id` (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galleries`
--

CREATE TABLE IF NOT EXISTS `tbl_galleries` (
  `gal_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `gal_name` varchar(100) NOT NULL,
  `gal_statut` text,
  `gal_address1` text,
  `gal_address2` text,
  `gal_zipcode` int(5) DEFAULT NULL,
  `gal_city` varchar(100) DEFAULT NULL,
  `gal_country` varchar(100) DEFAULT NULL,
  `gal_phone_number` int(20) DEFAULT NULL,
  `gal_mail` varchar(100) DEFAULT NULL,
  `gal_website` varchar(100) DEFAULT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`gal_id`),
  KEY `sur_id` (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_art`
--

CREATE TABLE IF NOT EXISTS `tbl_like_art` (
  `la_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `la_value` tinyint(1) DEFAULT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  `ent_id` int(100) unsigned NOT NULL,
  `show_id` int(100) unsigned NOT NULL,
  `gal_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`la_id`),
  KEY `sur_id` (`sur_id`),
  KEY `ent_id` (`ent_id`),
  KEY `show_id` (`show_id`),
  KEY `gal_id` (`gal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_screenuser_talents`
--

CREATE TABLE IF NOT EXISTS `tbl_screenuser_talents` (
  `st_id` int(100) unsigned NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  `tal_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`st_id`),
  KEY `sur_id` (`sur_id`),
  KEY `tal_id` (`tal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_screen_users`
--

CREATE TABLE IF NOT EXISTS `tbl_screen_users` (
  `sur_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sur_function` varchar(100) DEFAULT NULL,
  `sur_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_show_art`
--

CREATE TABLE IF NOT EXISTS `tbl_show_art` (
  `show_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `show_name` varchar(200) NOT NULL,
  `show_category` varchar(200) NOT NULL,
  `show_startdate` date DEFAULT NULL,
  `show_enddate` date DEFAULT NULL,
  `show_createdate` date DEFAULT NULL,
  `show_modifiydate` date DEFAULT NULL,
  `gal_id` int(100) unsigned NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`show_id`),
  KEY `gal_id` (`gal_id`),
  KEY `sur_id` (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_network`
--

CREATE TABLE IF NOT EXISTS `tbl_social_network` (
  `sn_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sn_name` varchar(100) NOT NULL,
  `sn_login` varchar(100) NOT NULL,
  `sn_password` varchar(100) NOT NULL,
  `sur_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`sn_id`),
  KEY `sur_id` (`sur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_talents`
--

CREATE TABLE IF NOT EXISTS `tbl_talents` (
  `tal_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `tal_name` varchar(100) NOT NULL,
  `tal_desc` varchar(100) NOT NULL,
  `tal_quote` char(1) NOT NULL,
  PRIMARY KEY (`tal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `display_name`, `password`, `state`) VALUES
(1, 'daddsfad', 'pisit_lovlov@yahoo.com', 'Cn Pisit', 'facebookToLocalUser', 1),
(2, 'cnpisit', 'sdfa', 'cnpisit', 'twitterToLocalUser', 0);

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
(1, '100001181617699', 'facebook'),
(2, '1247842100', 'twitter');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`st_id`) REFERENCES `status` (`st_id`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `tbl_arts`
--
ALTER TABLE `tbl_arts`
  ADD CONSTRAINT `tbl_arts_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `tbl_screenuser_talents` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_arts_ibfk_2` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_arts_ibfk_3` FOREIGN KEY (`tal_id`) REFERENCES `tbl_talents` (`tal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_art_entiry`
--
ALTER TABLE `tbl_art_entiry`
  ADD CONSTRAINT `tbl_art_entiry_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `tbl_show_art` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_art_entiry_ibfk_2` FOREIGN KEY (`gal_id`) REFERENCES `tbl_galleries` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_art_entiry_ibfk_3` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD CONSTRAINT `tbl_comments_ibfk_1` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comments_ibfk_2` FOREIGN KEY (`ent_id`) REFERENCES `tbl_art_entiry` (`ent_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comments_ibfk_3` FOREIGN KEY (`show_id`) REFERENCES `tbl_show_art` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comments_ibfk_4` FOREIGN KEY (`gal_id`) REFERENCES `tbl_galleries` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_content_format`
--
ALTER TABLE `tbl_content_format`
  ADD CONSTRAINT `tbl_content_format_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `tbl_arts` (`art_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_content_format_ibfk_2` FOREIGN KEY (`gal_id`) REFERENCES `tbl_galleries` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_content_format_ibfk_3` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_content_format1`
--
ALTER TABLE `tbl_content_format1`
  ADD CONSTRAINT `tbl_content_format1_ibfk_1` FOREIGN KEY (`ent_id`) REFERENCES `tbl_art_entiry` (`ent_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_content_format1_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `tbl_show_art` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_content_format1_ibfk_3` FOREIGN KEY (`gal_id`) REFERENCES `tbl_galleries` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_content_format1_ibfk_4` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_galleries`
--
ALTER TABLE `tbl_galleries`
  ADD CONSTRAINT `tbl_galleries_ibfk_1` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_like_art`
--
ALTER TABLE `tbl_like_art`
  ADD CONSTRAINT `tbl_like_art_ibfk_1` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_art_ibfk_2` FOREIGN KEY (`ent_id`) REFERENCES `tbl_art_entiry` (`ent_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_art_ibfk_3` FOREIGN KEY (`show_id`) REFERENCES `tbl_show_art` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_art_ibfk_4` FOREIGN KEY (`gal_id`) REFERENCES `tbl_galleries` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_screenuser_talents`
--
ALTER TABLE `tbl_screenuser_talents`
  ADD CONSTRAINT `tbl_screenuser_talents_ibfk_1` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_screenuser_talents_ibfk_2` FOREIGN KEY (`tal_id`) REFERENCES `tbl_talents` (`tal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_show_art`
--
ALTER TABLE `tbl_show_art`
  ADD CONSTRAINT `tbl_show_art_ibfk_1` FOREIGN KEY (`gal_id`) REFERENCES `tbl_galleries` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_show_art_ibfk_2` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_social_network`
--
ALTER TABLE `tbl_social_network`
  ADD CONSTRAINT `tbl_social_network_ibfk_1` FOREIGN KEY (`sur_id`) REFERENCES `tbl_screen_users` (`sur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_provider`
--
ALTER TABLE `user_provider`
  ADD CONSTRAINT `user_provider_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

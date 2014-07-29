-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2014 at 10:05 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newposly`
--
CREATE DATABASE IF NOT EXISTS `newposly` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `newposly`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `album_name` varchar(255) DEFAULT NULL,
  `album_created_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hashtags`
--

CREATE TABLE IF NOT EXISTS `hashtags` (
  `hashtags_id` int(11) NOT NULL AUTO_INCREMENT,
  `hashtags_name` varchar(255) DEFAULT NULL,
  `hashtags_count` int(11) DEFAULT NULL,
  `hashtags_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`hashtags_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=76 ;

-- --------------------------------------------------------

--
-- Table structure for table `hashtags_category`
--

CREATE TABLE IF NOT EXISTS `hashtags_category` (
  `hashtags_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `hashtags_category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hashtags_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_hashtags`
--

CREATE TABLE IF NOT EXISTS `log_hashtags` (
  `log_hashtags_id` int(11) NOT NULL AUTO_INCREMENT,
  `hashtags_id` int(11) DEFAULT NULL,
  `log_hashtags_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_hashtags_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=102 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_photos_comment`
--

CREATE TABLE IF NOT EXISTS `log_photos_comment` (
  `log_photos_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `photos_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_photos_comment_description` text,
  `log_photos_comment_hide` int(11) DEFAULT NULL,
  `log_photos_comment_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_photos_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_photos_hearts`
--

CREATE TABLE IF NOT EXISTS `log_photos_hearts` (
  `log_photos_hearts_id` int(11) NOT NULL AUTO_INCREMENT,
  `photos_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_photos_hearts_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_photos_hearts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_photos_share`
--

CREATE TABLE IF NOT EXISTS `log_photos_share` (
  `log_photos_share_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_photos_share_media_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `photos_id` int(11) DEFAULT NULL,
  `log_photos_share_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_photos_share_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photos_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL,
  `photos_name` text,
  `photos_hearts_count` int(11) DEFAULT NULL,
  `photos_created_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`photos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photos_hashtags`
--

CREATE TABLE IF NOT EXISTS `photos_hashtags` (
  `photos_hashtags_id` int(11) NOT NULL AUTO_INCREMENT,
  `hashtags_id` int(11) DEFAULT NULL,
  `photos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`photos_hashtags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_details_id` int(11) DEFAULT NULL,
  `user_location_id` int(11) DEFAULT NULL,
  `user_socialmedia_id` int(11) DEFAULT NULL,
  `user_hashtags_id` int(11) DEFAULT NULL,
  `user_notification_id` int(11) DEFAULT NULL,
  `user_language_id` int(11) DEFAULT NULL,
  `user_ethnicity_id` int(11) DEFAULT NULL,
  `user_security_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_details_id` (`user_details_id`),
  KEY `user_location_id` (`user_location_id`),
  KEY `user_socialmedia_id` (`user_socialmedia_id`),
  KEY `user_hashtags_id` (`user_hashtags_id`),
  KEY `user_notification_id` (`user_notification_id`),
  KEY `user_language_id` (`user_language_id`),
  KEY `user_ethnicity_id` (`user_ethnicity_id`),
  KEY `user_security_id` (`user_security_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE IF NOT EXISTS `users_details` (
  `user_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_details_firstname` varchar(255) DEFAULT NULL,
  `user_details_lastname` varchar(255) DEFAULT NULL,
  `user_details_email` varchar(255) DEFAULT NULL,
  `user_details_password` varchar(256) DEFAULT NULL,
  `user_details_avatar` varchar(256) DEFAULT NULL,
  `user_details_dob` date DEFAULT NULL,
  `user_details_gender` enum('1','0') DEFAULT NULL COMMENT '1:male, 0:female',
  `user_details_height` varchar(128) DEFAULT NULL,
  `user_details_weight` varchar(128) DEFAULT NULL,
  `user_details_specification` varchar(128) DEFAULT NULL,
  `user_details_eye_color` varchar(128) DEFAULT NULL,
  `user_details_hair_color` varchar(128) DEFAULT NULL,
  `user_rank_incity` int(11) DEFAULT NULL,
  `user_rank_instate` int(11) DEFAULT NULL,
  `user_rank_inregion` int(11) DEFAULT NULL,
  `user_rank_incountry` int(11) DEFAULT NULL,
  `user_rank_worldwide` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_details_slogan` text NOT NULL,
  `user_details_created_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_ethnicity`
--

CREATE TABLE IF NOT EXISTS `users_ethnicity` (
  `users_ethnicity_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_ethnicity_name` int(11) DEFAULT NULL,
  PRIMARY KEY (`users_ethnicity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_follow`
--

CREATE TABLE IF NOT EXISTS `users_follow` (
  `user_follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `follow_id` int(11) DEFAULT NULL,
  `user_follow_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_follow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_hashtags`
--

CREATE TABLE IF NOT EXISTS `users_hashtags` (
  `users_hashtags_id` int(11) NOT NULL AUTO_INCREMENT,
  `hashtags_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`users_hashtags_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_language`
--

CREATE TABLE IF NOT EXISTS `users_language` (
  `users_language_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_language_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`users_language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_location`
--

CREATE TABLE IF NOT EXISTS `users_location` (
  `user_location_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_location_city` varchar(255) DEFAULT NULL,
  `user_location_state` varchar(255) DEFAULT NULL,
  `user_location_region` varchar(255) DEFAULT NULL,
  `user_location_country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_notification`
--

CREATE TABLE IF NOT EXISTS `users_notification` (
  `user_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_security`
--

CREATE TABLE IF NOT EXISTS `users_security` (
  `users_security_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `users_security_password` varchar(255) DEFAULT NULL,
  `users_security_password_exp` varchar(255) DEFAULT NULL,
  `users_security_secretq1` varchar(255) DEFAULT NULL,
  `users_security_secretq1ans` varchar(255) DEFAULT NULL,
  `users_security_secretq2` varchar(255) DEFAULT NULL,
  `users_security_secretq2ans` varchar(255) DEFAULT NULL,
  `users_security_profile_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`users_security_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_socialmedia`
--

CREATE TABLE IF NOT EXISTS `users_socialmedia` (
  `user_socialmedia_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_socialmedia_provider` varchar(128) DEFAULT NULL,
  `user_socialmedia_identifier` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`user_socialmedia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=13 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

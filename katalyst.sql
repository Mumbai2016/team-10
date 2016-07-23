-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 01:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `katalyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_rate` int(11) NOT NULL,
  `Comments` text NOT NULL,
  `feedback_date` text NOT NULL,
  `feedbcak_time` text NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `meeting_id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_date` text NOT NULL,
  `meeting_time` text NOT NULL,
  `confirmation` text NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  PRIMARY KEY (`meeting_id`),
  KEY `mentor_id` (`mentor_id`,`mentee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menteeinfo`
--

CREATE TABLE IF NOT EXISTS `menteeinfo` (
  `menteeinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `menee_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact_no` int(11) NOT NULL,
  `dob` int(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `family_income` int(20) NOT NULL,
  PRIMARY KEY (`menteeinfo_id`),
  KEY `menet_id` (`menee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mentorinfo`
--

CREATE TABLE IF NOT EXISTS `mentorinfo` (
  `mentorinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `mentor_id` int(11) NOT NULL,
  `ment_fname` text NOT NULL,
  `ment_lname` text NOT NULL,
  `ment_address` text NOT NULL,
  `email_id` text NOT NULL,
  `location` text NOT NULL,
  `experience` text NOT NULL,
  `hobby_id` int(11) NOT NULL,
  `interests` text NOT NULL,
  `mentor_confirm` text NOT NULL,
  PRIMARY KEY (`mentorinfo_id`),
  KEY `mentor_id` (`mentor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_feedback`
--

CREATE TABLE IF NOT EXISTS `mentor_feedback` (
  `feedback_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  KEY `feedback_id` (`feedback_id`,`mentor_id`,`mentee_id`),
  KEY `mentee_id` (`mentee_id`),
  KEY `mentor_id` (`mentor_id`),
  KEY `feedback_id_2` (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pairtable`
--

CREATE TABLE IF NOT EXISTS `pairtable` (
  `pair_id` int(11) NOT NULL AUTO_INCREMENT,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  PRIMARY KEY (`pair_id`),
  KEY `mentor_id` (`mentor_id`),
  KEY `mentee_id` (`mentee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` text NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `roles`) VALUES
(1, 'Admin'),
(2, 'Mentor'),
(3, 'Mentee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role_id` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menteeinfo`
--
ALTER TABLE `menteeinfo`
  ADD CONSTRAINT `mentee_id` FOREIGN KEY (`menee_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mentorinfo`
--
ALTER TABLE `mentorinfo`
  ADD CONSTRAINT `Mentee Info` FOREIGN KEY (`mentor_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mentor_feedback`
--
ALTER TABLE `mentor_feedback`
  ADD CONSTRAINT `mentor_feedback_ibfk_1` FOREIGN KEY (`mentee_id`) REFERENCES `menteeinfo` (`menteeinfo_id`),
  ADD CONSTRAINT `fedback` FOREIGN KEY (`feedback_id`) REFERENCES `feedback` (`feedback_id`),
  ADD CONSTRAINT `mentor` FOREIGN KEY (`mentor_id`) REFERENCES `mentorinfo` (`mentorinfo_id`);

--
-- Constraints for table `pairtable`
--
ALTER TABLE `pairtable`
  ADD CONSTRAINT `pairtable_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentorinfo` (`mentorinfo_id`),
  ADD CONSTRAINT `mentee` FOREIGN KEY (`mentee_id`) REFERENCES `menteeinfo` (`menteeinfo_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `roles` FOREIGN KEY (`user_id`) REFERENCES `roles` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

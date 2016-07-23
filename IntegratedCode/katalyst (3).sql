-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 07:43 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_rate` int(11) NOT NULL,
  `Comments` text NOT NULL,
  `feedback_date` text NOT NULL,
  `feedback_time` text NOT NULL,
  `feedback_duration` text NOT NULL,
  `points_planned` text NOT NULL,
  `feedback_mentor_mentee` text NOT NULL,
  `action_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL,
  `meeting_date` text NOT NULL,
  `meeting_time` text NOT NULL,
  `confirmation` text NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menteeinfo`
--

CREATE TABLE `menteeinfo` (
  `menteeinfo_id` int(11) NOT NULL,
  `menee_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact_no` text NOT NULL,
  `dob` text NOT NULL,
  `family_income` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menteeinfo`
--

INSERT INTO `menteeinfo` (`menteeinfo_id`, `menee_id`, `firstname`, `lastname`, `emailid`, `address`, `contact_no`, `dob`, `family_income`, `location`) VALUES
(1, 3, 'manu', 'vishwakarma', 'vishwakarma.manu28@gmail.com', 'kjbsckjbcs', '8097138537', '2016-07-13', '1000', 'msbdjksb');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_feedback`
--

CREATE TABLE `mentor_feedback` (
  `feedback_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_info`
--

CREATE TABLE `mentor_info` (
  `mentorinfo_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `ment_fname` text NOT NULL,
  `ment_lname` text NOT NULL,
  `ment_address` text NOT NULL,
  `email_id` text NOT NULL,
  `location` text NOT NULL,
  `experience` int(11) NOT NULL,
  `mentor_confirm` varchar(10) NOT NULL,
  `contact` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pairtable`
--

CREATE TABLE `pairtable` (
  `pair_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `roles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `role_id`) VALUES
(1, 'jijinj96@gmail.com', '123456', 3),
(3, 'vishwakarma.manu28@gmail.com', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `mentor_id` (`mentor_id`,`mentee_id`);

--
-- Indexes for table `menteeinfo`
--
ALTER TABLE `menteeinfo`
  ADD PRIMARY KEY (`menteeinfo_id`),
  ADD KEY `menet_id` (`menee_id`);

--
-- Indexes for table `mentor_feedback`
--
ALTER TABLE `mentor_feedback`
  ADD KEY `feedback_id` (`feedback_id`,`mentor_id`,`mentee_id`),
  ADD KEY `mentee_id` (`mentee_id`),
  ADD KEY `mentor_id` (`mentor_id`),
  ADD KEY `feedback_id_2` (`feedback_id`);

--
-- Indexes for table `mentor_info`
--
ALTER TABLE `mentor_info`
  ADD PRIMARY KEY (`mentorinfo_id`),
  ADD KEY `user_id` (`mentor_id`);

--
-- Indexes for table `pairtable`
--
ALTER TABLE `pairtable`
  ADD PRIMARY KEY (`pair_id`),
  ADD KEY `mentor_id` (`mentor_id`),
  ADD KEY `mentee_id` (`mentee_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menteeinfo`
--
ALTER TABLE `menteeinfo`
  MODIFY `menteeinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mentor_info`
--
ALTER TABLE `mentor_info`
  MODIFY `mentorinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pairtable`
--
ALTER TABLE `pairtable`
  MODIFY `pair_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menteeinfo`
--
ALTER TABLE `menteeinfo`
  ADD CONSTRAINT `mentee_id` FOREIGN KEY (`menee_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mentor_feedback`
--
ALTER TABLE `mentor_feedback`
  ADD CONSTRAINT `fedback` FOREIGN KEY (`feedback_id`) REFERENCES `feedback` (`feedback_id`),
  ADD CONSTRAINT `mentor` FOREIGN KEY (`mentor_id`) REFERENCES `mentorinfo` (`mentorinfo_id`),
  ADD CONSTRAINT `mentor_feedback_ibfk_1` FOREIGN KEY (`mentee_id`) REFERENCES `menteeinfo` (`menteeinfo_id`);

--
-- Constraints for table `pairtable`
--
ALTER TABLE `pairtable`
  ADD CONSTRAINT `mentee` FOREIGN KEY (`mentee_id`) REFERENCES `menteeinfo` (`menteeinfo_id`),
  ADD CONSTRAINT `pairtable_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentorinfo` (`mentorinfo_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

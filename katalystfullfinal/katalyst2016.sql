-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 01:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_rate` int(11) NOT NULL,
  `Comments` text NOT NULL,
  `feedback_date` text NOT NULL,
  `feedback_time` text NOT NULL,
  `qinter` text NOT NULL,
  `ginter` text NOT NULL,
  `improvement` text NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL
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
(2, 1, 'jijin', 'jose', 'jijinj96@gmail.com', 'andheri', '9874563211', '18/08/1996', '200000', 'mumbai\r\n'),
(15, 2, 'antara', 'mahimkar', 'antara@gmail.com', 'thane', '1234567890', '01/01/1996', '20000', 'thane'),
(42, 4, 'anurag', 'sinha', 'anurag.sinha@gmail.com', 'thane', '1234567890', '01/01/1996', '20000', 'thane'),
(43, 9, 'sneha', 'patil', 'sneha@gmail.com', 'pune', '1234567890', '01/01/1996', '20000', 'pune'),
(44, 10, 'pravesh', 'mourya', 'pravesh@gmail.com', 'thane', '1234567890', '01/01/1996', '200000', 'thane'),
(45, 11, 'bhagyesh', 'patil', 'bhagyesh@gmail.com', 'nerul', '1234567890', '01/01/1996', '20000', 'delhi'),
(46, 12, 'manish', 'vishwakarma', 'manish@gmail.com', 'thane', '1234567890', '01/01/1996', '2000', 'thane'),
(47, 13, 'pushpa', 'shindhe', 'pushpa@gmail.com', 'nahur', '1234567890', '01/01/1996', '190000', 'bangalore'),
(48, 14, 'robin', 'van-persie', 'robin@gmail.com', 'mumbai', '1234567890', '01/01/1996', '25000', 'mumbai'),
(49, 15, 'nelson', 'nisham', 'nelson@gmail.com', 'bangalore', '1234567890', '01/01/1996', '200000', 'bangalore'),
(50, 16, 'xyz', 'pqr', 'xyz@gmail.com', 'delhi', '1234567890', '01/01/1996', '20000', 'delhi'),
(51, 17, 'nilesh', 'patnakar', 'nilesh@gmail.com', 'delhi', '1234567890', '01/01/1996', '25000', 'delhi'),
(52, 18, 'shailendra', 'sharma', 'antara@gmail.com', 'mumbai', '1234567890', '01/01/1996', '17000', 'mumbai'),
(53, 19, 'thakre', 'akshay', 'thakre@gmail.com', 'thane', '1234567890', '01/01/1996', '10000', 'thane'),
(54, 2, 'antara', 'mahimkar', 'antara@gmail.com', 'thane', '1234567890', '01/01/1996', '20000', 'thane');

-- --------------------------------------------------------

--
-- Table structure for table `mentee_feedback`
--

CREATE TABLE `mentee_feedback` (
  `date` text NOT NULL,
  `time` text NOT NULL,
  `comment` text NOT NULL,
  `goals` text NOT NULL,
  `summary` text NOT NULL,
  `rate` int(11) NOT NULL,
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

--
-- Dumping data for table `mentor_info`
--

INSERT INTO `mentor_info` (`mentorinfo_id`, `mentor_id`, `ment_fname`, `ment_lname`, `ment_address`, `email_id`, `location`, `experience`, `mentor_confirm`, `contact`) VALUES
(2, 3, 'manu', 'vishwakarma', 'thane', 'vishwakarma.manu28@gmail.com', 'thane', 2, 'no', '98971234560'),
(3, 5, 'harsh', 'gupta', 'mulund', 'harsh.gupta@gmail.com', 'mumbai', 2, 'no', '98971234560'),
(4, 6, 'ajay', 'sahu', 'bangalore', 'ajay@gmail.com', 'bangalore', 5, 'no', '98971234560'),
(5, 7, 'nitin', 'sharma', 'delhi', 'sharma@gmail.com', 'delhi', 3, 'no', '98971234560'),
(6, 8, 'mohan', 'jhadav', 'belapur', 'mohan@gmail.com', 'pune', 7, 'no', 'pune');

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
(2, 'antara@gmail.com', '123456', 3),
(3, 'vishwakarma.manu28@gmail.com', '123456', 2),
(4, 'anurag.sinha@gmail.com', '123456', 3),
(5, 'harsh.gupta@gmail.com', '123456', 2),
(6, 'ajay@gmail.com', '123456', 2),
(7, 'sharma@gmail.com', '123456', 2),
(8, 'mohan@gmail.com', '123456', 2),
(9, 'sneha@gmail.com', '123456', 3),
(10, 'pravesh@gmail.com', '123456', 3),
(11, 'bhagyesh@gmail.com', '123456', 3),
(12, 'manish@gmail.com', '123456', 3),
(13, 'pushpa@gmail.com', '123456', 3),
(14, 'robin@gmail.com', '123456', 3),
(15, 'nelson@gmail.com', '123456', 3),
(16, 'xyz@gmail.com', '123456', 3),
(17, 'nilesh@gmail.com', '123456', 3),
(18, 'shailendra@gmail.com', '123456', 3),
(19, 'tambe@gmail.com', '123456', 3),
(20, 'thakre@gmail.com', '123456', 3),
(21, 'prithviraj.patil@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

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
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menteeinfo`
--
ALTER TABLE `menteeinfo`
  MODIFY `menteeinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `mentor_info`
--
ALTER TABLE `mentor_info`
  MODIFY `mentorinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menteeinfo`
--
ALTER TABLE `menteeinfo`
  ADD CONSTRAINT `mentee_id` FOREIGN KEY (`menee_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

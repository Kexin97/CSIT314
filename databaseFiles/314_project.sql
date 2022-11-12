-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 03:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `314_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_ID` int(255) NOT NULL,
  `account_password` varchar(999) NOT NULL,
  `account_fullName` varchar(999) NOT NULL,
  `account_sex` varchar(999) NOT NULL,
  `account_age` varchar(999) NOT NULL,
  `account_contact` varchar(999) NOT NULL,
  `account_email` varchar(999) NOT NULL,
  `account_status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_ID`, `account_password`, `account_fullName`, `account_sex`, `account_age`, `account_contact`, `account_email`, `account_status`) VALUES
(1, 'potatopopcorn', 'potato popcorn', 'F', '99', '98765432', 'potatopopcorn314@gmail.com', 'active'),
(2, 'lucas', 'lucas lee', 'M', '99', '91239122', 'lucasleeht@gmail.com', 'active'),
(3, 'b', 'b', 'M', '23', '91239999', 'assda@gmail.com', 'inactive'),
(4, '123', 'bababa', 'M', '78', '09121290', 'bab@gmail.com', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `account_profile`
--

CREATE TABLE `account_profile` (
  `profile_ID` int(255) NOT NULL,
  `account_email` varchar(999) NOT NULL,
  `reviewer_type` varchar(999) NOT NULL,
  `author_type` varchar(999) NOT NULL,
  `conferenceChair_type` varchar(999) NOT NULL,
  `userAdmin_type` varchar(999) NOT NULL,
  `numOfAllocatedPapers` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_profile`
--

INSERT INTO `account_profile` (`profile_ID`, `account_email`, `reviewer_type`, `author_type`, `conferenceChair_type`, `userAdmin_type`, `numOfAllocatedPapers`) VALUES
(1, 'potatopopcorn314@gmail.com', 'reviewer', '', '', 'userAdmin', 5),
(2, 'lucasleeht@gmail.com', 'reviewer', 'author', 'conferenceChair', 'userAdmin', 4),
(3, 'assda@gmail.com', 'reviewer', 'author', '', '', 1),
(4, 'bab@gmail.com', 'reviewer', 'author', '', 'userAdmin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `paperID` int(255) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `conference` varchar(999) NOT NULL,
  `authorName` varchar(999) NOT NULL,
  `paperRating` varchar(999) NOT NULL,
  `paperReview` varchar(999) NOT NULL,
  `reviewedStatus` varchar(999) NOT NULL,
  `reviewerName` varchar(999) NOT NULL,
  `paperStatus` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paperID`, `paperName`, `conference`, `authorName`, `paperRating`, `paperReview`, `reviewedStatus`, `reviewerName`, `paperStatus`) VALUES
(1, 'Paper Name 1', '', 'Author Name 1', '', '', 'unreviewed', '', ''),
(2, 'Paper Name 2', '', 'Author Name 2', '', '', 'unreviewed', '', ''),
(3, 'Paper Name 3', '', 'Author Name 3', '', '', 'unreviewed', '', ''),
(4, 'Paper Name 4', '', 'Author Name 4', '', '', 'unreviewed', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_ID`);

--
-- Indexes for table `account_profile`
--
ALTER TABLE `account_profile`
  ADD PRIMARY KEY (`profile_ID`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`paperID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `account_profile`
--
ALTER TABLE `account_profile`
  MODIFY `profile_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `paperID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 05:13 PM
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
(1, '12345', 'Peggie Mildred', 'F', '22', '12345678', 'PeggieMildred@potato.com', 'active'),
(2, '12345', 'Sydnie Carlyle', 'M', '23', '98797765', 'SydnieCarlyle@potato.com', 'active'),
(3, '12345', 'a', 'F', '24', '98753457', 'assda@gmail.com', 'active'),
(4, '12345', 'Kassy Elissa', 'F', '53', '35783573', 'KassyElissa@potato.com', 'active'),
(5, '12345', 'lucas lee', 'F', '22', '78432729', 'lucasleeht@gmail.com', 'active');

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
  `maxReviewNumber` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_profile`
--

INSERT INTO `account_profile` (`profile_ID`, `account_email`, `reviewer_type`, `author_type`, `conferenceChair_type`, `userAdmin_type`, `maxReviewNumber`) VALUES
(1, 'assda@gmail.com', 'reviewer', 'author', 'conferenceChair', 'userAdmin', '25'),
(2, 'PeggieMildred@potato.com', 'reviewer', 'author', 'conferenceChair', '', '26'),
(3, 'SydnieCarlyle@potato.com', 'reviewer', 'author', '', '', '20'),
(4, 'KassyElissa@potato.com', '', 'author', 'conferenceChair', '', '12'),
(5, 'lucasleeht@gmail.com', 'reviewer', 'author', 'conferenceChair', 'userAdmin', '125');

-- --------------------------------------------------------

--
-- Table structure for table `bidwinner`
--

CREATE TABLE `bidwinner` (
  `winnerID` int(255) NOT NULL,
  `paperName` varchar(999) DEFAULT NULL,
  `bidWinnerName` varchar(999) DEFAULT NULL,
  `bidWinnerEmail` varchar(999) DEFAULT NULL,
  `bidWinnerRating` int(100) DEFAULT NULL,
  `bidWinnerReview` varchar(999) DEFAULT NULL,
  `author_rating` int(255) NOT NULL DEFAULT 9
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidwinner`
--

INSERT INTO `bidwinner` (`winnerID`, `paperName`, `bidWinnerName`, `bidWinnerEmail`, `bidWinnerRating`, `bidWinnerReview`, `author_rating`) VALUES
(1, 'paper1', 'a', 'assda@gmail.com', NULL, NULL, 9),
(2, 'paper23', 'lucas lee', 'lucasleeht@gmail.com', 1, 'gg', 9),
(3, 'powerpuff girls', 'a', 'assda@gmail.com', 3, 'powerpuff girls is da best', 3),
(4, 'powerpuff girls', 'lucas lee', 'lucasleeht@gmail.com', 1, 'powerpuff girls is not the best', 1),
(5, 'paper25', 'reviewaZXC', 'ZXC@mail.com', NULL, NULL, 9),
(6, 'paper27', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL, 9),
(7, 'paper25', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL, 9),
(8, 'powerpuff girls', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL, 9),
(9, 'paper26', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL, 9),
(10, 'paper1', 'reviewaZXC', 'ZXC@mail.com', NULL, NULL, 9),
(11, 'paper26', 'reviewaZXC', 'ZXC@mail.com', NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `paper_ID` int(255) NOT NULL,
  `paper_name` varchar(999) NOT NULL,
  `author` varchar(999) NOT NULL,
  `paper_file` varchar(999) NOT NULL,
  `paper_status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_ID`, `paper_name`, `author`, `paper_file`, `paper_status`) VALUES
(42, 'test4', 'KassyElissa@potato.com', '../databaseFiles/paper/test4.pdf', ''),
(43, 'test2', 'KassyElissa@potato.com, assda@gmail.com, PeggieMildred@potato.com', '../databaseFiles/paper/test2.pdf', ''),
(44, 'test7', 'KassyElissa@potato.com, PeggieMildred@potato.com', '../databaseFiles/paper/test7.pdf', ''),
(46, 'powerpuff girls', 'assda@gmail.com, SydnieCarlyle@potato.com, lucasleeht@gmail.com', '../databaseFiles/paper/powerpuff girls.pdf', 'rejected'),
(47, 'test1', 'assda@gmail.com, KassyElissa@potato.com', '../databaseFiles/paper/test1.pdf', ''),
(48, 'paper23', 'assda@gmail.com, KassyElissa@potato.com', '../databaseFiles/paper/powerpuff girls.pdf', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `papersbid`
--

CREATE TABLE `papersbid` (
  `paperID` int(11) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `reviewerName` varchar(999) NOT NULL,
  `account_email` varchar(999) NOT NULL,
  `allocationStatus` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papersbid`
--

INSERT INTO `papersbid` (`paperID`, `paperName`, `reviewerName`, `account_email`, `allocationStatus`) VALUES
(1, 'paper23', 'Sydnie Carlyle', 'SydnieCarlyle@potato.com', 'allocated'),
(2, 'paper23', 'lucas lee', 'lucasleeht@gmail.com', 'allocated');

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
-- Indexes for table `bidwinner`
--
ALTER TABLE `bidwinner`
  ADD PRIMARY KEY (`winnerID`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_ID`);

--
-- Indexes for table `papersbid`
--
ALTER TABLE `papersbid`
  ADD PRIMARY KEY (`paperID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `account_profile`
--
ALTER TABLE `account_profile`
  MODIFY `profile_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bidwinner`
--
ALTER TABLE `bidwinner`
  MODIFY `winnerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `papersbid`
--
ALTER TABLE `papersbid`
  MODIFY `paperID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

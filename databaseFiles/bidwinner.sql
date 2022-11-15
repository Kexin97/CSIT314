-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 10:07 AM
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
  `bidWinnerReview` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidwinner`
--

INSERT INTO `bidwinner` (`winnerID`, `paperName`, `bidWinnerName`, `bidWinnerEmail`, `bidWinnerRating`, `bidWinnerReview`) VALUES
(1, 'paper1', 'a', 'assda@gmail.com', NULL, NULL),
(2, 'paper23', 'lucas lee', 'lucasleeht@gmail.com', NULL, NULL),
(3, 'powerpuff girls', 'a', 'assda@gmail.com', 3, 'powerpuff girls is da best'),
(4, 'powerpuff girls', 'lucas lee', 'lucasleeht@gmail.com', 1, 'powerpuff girls is not the best'),
(5, 'paper25', 'reviewaZXC', 'ZXC@mail.com', NULL, NULL),
(6, 'paper27', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL),
(7, 'paper25', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL),
(8, 'powerpuff girls', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL),
(9, 'paper26', 'potato popcorn', 'potatopopcorn314@gmail.com', NULL, NULL),
(10, 'paper1', 'reviewaZXC', 'ZXC@mail.com', NULL, NULL),
(11, 'paper26', 'reviewaZXC', 'ZXC@mail.com', NULL, NULL);


--

--
-- Table structure for table `papersbid`
--

CREATE TABLE `papersbid` (
  `biddingID` int(10) NOT NULL,
  `paperID` int(11) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `reviewerName` varchar(999) NOT NULL,
  `account_email` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papersbid`
--

INSERT INTO `papersbid` (`biddingID`, `paperID`, `paperName`, `reviewerName`, `account_email`) VALUES
(1, 1, 'paper1', 'potato popcorn', 'potatopopcorn314@gmail.com'),
(2, 2, 'paper23', 'potato popcorn', 'potatopopcorn314@gmail.com');

-- --------------------------------------------------------

--

-- Indexes for table `bidwinner`

ALTER TABLE `bidwinner`
  ADD PRIMARY KEY (`winnerID`);

--

-- Indexes for table `papersbid`
--
ALTER TABLE `papersbid`
  ADD PRIMARY KEY (`biddingID`);

--

-- AUTO_INCREMENT for table `bidwinner`
--
ALTER TABLE `bidwinner`
  MODIFY `winnerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

-- AUTO_INCREMENT for table `papersbid`
--
ALTER TABLE `papersbid`
  MODIFY `biddingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

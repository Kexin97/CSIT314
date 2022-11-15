-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 07:08 PM
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
-- Table structure for table `bidwinner`
--

CREATE TABLE `bidwinner` (
  `winnerID` int(255) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `bidWinnerName` varchar(999) NOT NULL,
  `bidWinnerEmail` varchar(999) NOT NULL,
  `bidWinnerRating` varchar(999) NOT NULL,
  `bidWinnerReview` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidwinner`
--

INSERT INTO `bidwinner` (`winnerID`, `paperName`, `bidWinnerName`, `bidWinnerEmail`, `bidWinnerRating`, `bidWinnerReview`) VALUES
(1, 'paper1', 'potato popcorn', 'potatopopcorn314@gmail.com', '3', 'Review rating 3'),
(2, 'paper23', 'potato popcorn', 'potatopopcorn314@gmail.com', '2', 'Review rating 2'),
(3, 'paper1', 'lucas lee', 'lucasleeht@gmail.com', '2', 'Review rating 2'),
(4, 'paper1', 'bababa', 'bab@gmail.com', '1', 'Review rating 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidwinner`
--
ALTER TABLE `bidwinner`
  ADD PRIMARY KEY (`winnerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidwinner`
--
ALTER TABLE `bidwinner`
  MODIFY `winnerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

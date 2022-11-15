-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 06:33 PM
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
-- Table structure for table `papersbid`
--

CREATE TABLE `papersbid` (
  `paperID` int(255) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `reviewerName` varchar(999) NOT NULL,
  `account_email` varchar(999) NOT NULL,
  `allocationStatus` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papersbid`
--

INSERT INTO `papersbid` (`paperID`, `paperName`, `reviewerName`, `account_email`, `allocationStatus`) VALUES
(1, 'paper1', 'potato popcorn', 'potatopopcorn314@gmail.com', 'allocated'),
(2, 'paper23', 'potato popcorn', 'potatopopcorn314@gmail.com', 'allocated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `papersbid`
--
ALTER TABLE `papersbid`
  ADD PRIMARY KEY (`paperID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `papersbid`
--
ALTER TABLE `papersbid`
  MODIFY `paperID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 08:14 PM
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
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `paperID` int(10) UNSIGNED NOT NULL,
  `authorName` varchar(30) NOT NULL,
  `paperTitle` varchar(30) NOT NULL,
  `paperContent` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paperID`, `authorName`, `paperTitle`, `paperContent`) VALUES
(1, 'author1', 'paper1', 'paper1 paper1 paper1 paper1 paper1 paper1 paper1'),
(2, 'author2', 'paper2', 'paper2 paper2 paper2 paper2 paper2 paper2 paper2'),
(3, 'author3', 'paper3', 'paper3 paper3 paper3<br> paper3 paper3 paper3 paper3'),
(5, 'author4', 'paper4', 'paper4 paper4 paper4<br> paper4 paper4 paper4 paper4'),
(6, 'author5', 'paper5', '$lala $lala $lala<br> $lala $lala $lala $lala<br> \r\n						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>\r\n						$lala $lala $lala<br> $lala $lala $lala $lala<br> \r\n						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>\r\n						$lala $lala $lala<br> $lala $lala $lala $lala<br> \r\n						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>'),
(8, 'author3', 'paper6', 'paper6 paper6 paper6<br> paper6 paper6 paper6 paper6<br> \r\n						paper6 paper6 paper6 paper6<br> paper6 paper6 paper6 paper6<br>\r\n						paper6 paper6 paper6<br> paper6 paper6 paper6 paper6<br> \r\n						paper6 paper6 paper6 paper6<br> paper6 paper6 paper6 paper6<br>\r\n						paper6 paper6 paper6<br> paper6 paper6 paper6 paper6<br> \r\n						paper6 paper6 paper6 paper6<br> paper6 paper6 paper6 paper6<br>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userProfile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `userProfile`) VALUES
('Johnny bravo', 'qwerty123', 'SystemAdmin'),
('person2', 'qwert', 'SystemAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`paperID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `paperID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

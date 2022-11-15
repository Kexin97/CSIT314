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
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `paper_ID` int(99) NOT NULL,
  `paper_name` varchar(999) NOT NULL,
  `conference` varchar(999) NOT NULL,
  `author` varchar(999) NOT NULL,
  `paper_file` varchar(999) NOT NULL,
  `paperStatus` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_ID`, `paper_name`, `conference`, `author`, `paper_file`, `paperStatus`) VALUES
(1, 'powerpuff girls', 'Conference 1', 'lucasleeht@gmail.com', '', ''),
(2, 'paper1', 'Conference 2', 'assda@gmail.com', '', ''),
(3, 'paper23', 'Conference 3', 'assda@gmail.com, lucasleeht@gmail.com', '', ''),
(4, 'paper24', 'Conference 2', 'lala@mail', '', ''),
(5, 'paper25', 'Conference 3', 'bab@gmail.com', '', ''),
(6, 'paper26', 'Conference 1', 'bab@gmail.com, lala@mail', '', ''),
(7, 'paper27', 'Conference 1', 'bab@gmail.com, lala@mail, assda@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

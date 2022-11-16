-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-11-16 15:44:13
-- 服务器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `314_project`
--

-- --------------------------------------------------------

--
-- 表的结构 `account`
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
-- 转存表中的数据 `account`
--

INSERT INTO `account` (`account_ID`, `account_password`, `account_fullName`, `account_sex`, `account_age`, `account_contact`, `account_email`, `account_status`) VALUES
(1, '12345', 'Peggie Mildred', 'F', '22', '12345678', 'PeggieMildred@potato.com', 'active'),
(2, '12345', 'Sydnie Carlyle', 'M', '23', '98797765', 'SydnieCarlyle@potato.com', 'active'),
(3, '12345', 'a', 'F', '24', '98753457', 'assda@gmail.com', 'active'),
(4, '12345', 'Kassy Elissa', 'F', '53', '35783573', 'KassyElissa@potato.com', 'active'),
(5, '12345', 'lucas lee', 'F', '22', '78432729', 'lucasleeht@gmail.com', 'active');

-- --------------------------------------------------------

--
-- 表的结构 `account_profile`
--

CREATE TABLE `account_profile` (
  `profile_ID` int(255) NOT NULL,
  `account_email` varchar(999) NOT NULL,
  `reviewer_type` varchar(999) NOT NULL,
  `author_type` varchar(999) NOT NULL,
  `conferenceChair_type` varchar(999) NOT NULL,
  `userAdmin_type` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `account_profile`
--

INSERT INTO `account_profile` (`profile_ID`, `account_email`, `reviewer_type`, `author_type`, `conferenceChair_type`, `userAdmin_type`) VALUES
(1, 'assda@gmail.com', 'reviewer', 'author', 'conferenceChair', 'userAdmin'),
(2, 'PeggieMildred@potato.com', 'reviewer', 'author', 'conferenceChair', ''),
(3, 'SydnieCarlyle@potato.com', 'reviewer', 'author', '', ''),
(4, 'KassyElissa@potato.com', '', 'author', 'conferenceChair', ''),
(5, 'lucasleeht@gmail.com', '', 'author', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `bidwinner`
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
-- 转存表中的数据 `bidwinner`
--

INSERT INTO `bidwinner` (`winnerID`, `paperName`, `bidWinnerName`, `bidWinnerEmail`, `bidWinnerRating`, `bidWinnerReview`, `author_rating`) VALUES
(1, 'paper1', 'a', 'assda@gmail.com', NULL, NULL, 9),
(2, 'paper23', 'lucas lee', 'lucasleeht@gmail.com', NULL, NULL, 9),
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
-- 表的结构 `paper`
--

CREATE TABLE `paper` (
  `paper_ID` int(255) NOT NULL,
  `paper_name` varchar(999) NOT NULL,
  `author` varchar(999) NOT NULL,
  `paper_file` varchar(999) NOT NULL,
  `paper_status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `paper`
--

INSERT INTO `paper` (`paper_ID`, `paper_name`, `author`, `paper_file`, `paper_status`) VALUES
(42, 'test4', 'KassyElissa@potato.com', '../databaseFiles/paper/test4.pdf', ''),
(43, 'test2', 'KassyElissa@potato.com, assda@gmail.com, PeggieMildred@potato.com', '../databaseFiles/paper/test2.pdf', ''),
(44, 'test7', 'KassyElissa@potato.com, PeggieMildred@potato.com', '../databaseFiles/paper/test7.pdf', ''),
(46, 'powerpuff girls', 'assda@gmail.com, SydnieCarlyle@potato.com, lucasleeht@gmail.com', '../databaseFiles/paper/powerpuff girls.pdf', 'reviewed'),
(47, 'test1', 'assda@gmail.com, KassyElissa@potato.com', '../databaseFiles/paper/test1.pdf', '');

-- --------------------------------------------------------

--
-- 表的结构 `papersbid`
--

CREATE TABLE `papersbid` (
  `biddingID` int(10) NOT NULL,
  `paperID` int(11) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `reviewerName` varchar(999) NOT NULL,
  `account_email` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `papersbid`
--

INSERT INTO `papersbid` (`biddingID`, `paperID`, `paperName`, `reviewerName`, `account_email`) VALUES
(1, 1, 'paper1', 'potato popcorn', 'potatopopcorn314@gmail.com'),
(2, 2, 'paper23', 'potato popcorn', 'potatopopcorn314@gmail.com');

--
-- 转储表的索引
--

--
-- 表的索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_ID`);

--
-- 表的索引 `account_profile`
--
ALTER TABLE `account_profile`
  ADD PRIMARY KEY (`profile_ID`);

--
-- 表的索引 `bidwinner`
--
ALTER TABLE `bidwinner`
  ADD PRIMARY KEY (`winnerID`);

--
-- 表的索引 `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_ID`);

--
-- 表的索引 `papersbid`
--
ALTER TABLE `papersbid`
  ADD PRIMARY KEY (`biddingID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `account_profile`
--
ALTER TABLE `account_profile`
  MODIFY `profile_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `bidwinner`
--
ALTER TABLE `bidwinner`
  MODIFY `winnerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- 使用表AUTO_INCREMENT `papersbid`
--
ALTER TABLE `papersbid`
  MODIFY `biddingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

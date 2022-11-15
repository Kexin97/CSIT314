-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-11-14 11:20:12
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
-- 表的结构 `paper`
--

CREATE TABLE `paper` (
  `paper_ID` int(255) NOT NULL,
  `paper_name` varchar(999) NOT NULL,
  `conference` varchar(999) NOT NULL,
  `author` varchar(999) NOT NULL,
  `paper_file` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `paper`
--

INSERT INTO `paper` (`paper_ID`, `paper_name`, `conference`, `author`, `paper_file`) VALUES
(9, 'test7', 'PeggieMildred@potato.com', 'assda@gmail.com', '../databaseFiles/paper/test7.pdf'),
(10, 'test', 'PeggieMildred@potato.com', 'assda@gmail.com,SydnieCarlyle@potato.com', '../databaseFiles/paper/test.pdf');

--
-- 转储表的索引
--

--
-- 表的索引 `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

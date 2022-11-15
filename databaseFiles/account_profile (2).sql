-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-11-14 11:06:05
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
(1, 'ajanson0@homestead.com', '', '', 'conferenceChair', ''),
(2, 'etoyne1@go.com', '', 'author', '', ''),
(3, 'kroddick2@archive.org', '', 'author', '', ''),
(4, 'mtantum3@nih.gov', '', '', 'conferenceChair', ''),
(5, 'esapseed4@webmd.com', '', 'author', '', 'userAdmin'),
(6, 'vjills5@skyrock.com', 'reviewer', 'author', '', ''),
(7, 'lgatenby6@gov.uk', 'reviewer', '', '', ''),
(8, 'zfury7@jiathis.com', 'reviewer', '', '', ''),
(9, 'kberni8@weebly.com', '', 'author', 'conferenceChair', ''),
(10, 'vbeinke9@elpais.com', 'reviewer', 'author', '', 'userAdmin'),
(11, 'hfittisa@amazon.com', '', '', '', 'userAdmin'),
(12, 'zcoolicanb@independent.co.uk', 'reviewer', '', '', ''),
(13, 'eswatec@clickbank.net', 'reviewer', '', '', ''),
(14, 'acosleyd@epa.gov', '', 'author', '', ''),
(15, 'ldunstonee@bandcamp.com', 'reviewer', 'author', '', ''),
(16, 'tplosef@amazonaws.com', '', '', 'conferenceChair', ''),
(17, 'ahuisong@craigslist.org', '', '', 'conferenceChair', ''),
(18, 'fhinerh@google.co.uk', 'reviewer', '', 'conferenceChair', ''),
(19, 'dceaseri@parallels.com', '', 'author', '', ''),
(20, 'fdabournej@mapquest.com', '', 'author', '', ''),
(21, 'ismithsk@apache.org', '', 'author', '', ''),
(22, 'tsherrockl@sfgate.com', 'reviewer', '', '', ''),
(23, 'dkainzm@cmu.edu', '', '', '', 'userAdmin'),
(24, 'dstolworthyn@senate.gov', '', 'author', '', ''),
(25, 'vmcginlyo@bbc.co.uk', '', 'author', '', ''),
(26, 'gmonnellyp@cbsnews.com', '', 'author', '', ''),
(27, 'kgreenrodq@census.gov', 'reviewer', 'author', '', ''),
(28, 'hstangerr@ezinearticles.com', '', '', '', ''),
(29, 'kwallers@skype.com', '', 'author', '', ''),
(30, 'fdellt@tripod.com', '', 'author', '', ''),
(31, 'nmckennanu@army.mil', '', 'author', '', ''),
(32, 'mmccowenv@uiuc.edu', '', 'author', '', ''),
(33, 'mkarshw@phoca.cz', '', '', '', 'userAdmin'),
(34, 'gcammishx@goo.ne.jp', 'reviewer', '', '', ''),
(35, 'banticy@java.com', 'reviewer', '', '', ''),
(36, 'lissacovz@cpanel.net', 'reviewer', '', '', ''),
(37, 'rvasilyevski10@prweb.com', 'reviewer', '', '', ''),
(38, 'africke11@netscape.com', '', 'author', '', ''),
(39, 'aleinweber12@booking.com', '', '', 'conferenceChair', ''),
(40, 'jsimanek13@blogs.com', 'reviewer', '', '', ''),
(41, 'saristide14@delicious.com', '', '', 'conferenceChair', ''),
(42, 'bnias15@123-reg.co.uk', '', '', 'conferenceChair', ''),
(43, 'rnials16@redcross.org', '', 'author', '', ''),
(44, 'hpurchase17@miibeian.gov.cn', '', '', '', 'userAdmin'),
(45, 'cranderson18@bandcamp.com', '', '', 'conferenceChair', ''),
(46, 'mmelendez19@shop-pro.jp', '', 'author', 'conferenceChair', ''),
(47, 'bde1a@addtoany.com', '', 'author', '', ''),
(48, 'sprate1b@reference.com', '', 'author', '', ''),
(49, 'rhrynczyk1c@i2i.jp', '', 'author', '', ''),
(50, 'fworsnup1d@last.fm', '', 'author', '', ''),
(51, 'mmacneilley1e@woothemes.com', 'reviewer', '', '', ''),
(52, 'mwadman1f@shop-pro.jp', '', 'author', '', ''),
(53, 'mfriar1g@weather.com', 'reviewer', '', '', ''),
(54, 'afettes1h@tinyurl.com', 'reviewer', '', '', ''),
(55, 'bknoton1i@is.gd', '', 'author', '', ''),
(56, 'citzhaiek1j@eventbrite.com', 'reviewer', 'author', '', ''),
(57, 'zbilbrooke1k@google.it', '', 'author', '', ''),
(58, 'ocordeix1l@unesco.org', 'reviewer', '', '', 'userAdmin'),
(59, 'ppioch1m@dailymotion.com', '', 'author', '', ''),
(60, 'rhaighton1n@theatlantic.com', 'reviewer', '', '', 'userAdmin'),
(61, 'bbelin1o@issuu.com', '', 'author', '', ''),
(62, 'vmacveigh1p@ning.com', '', 'author', '', ''),
(63, 'jboddice1q@vinaora.com', 'reviewer', '', '', ''),
(64, 'vannies1r@nationalgeographic.com', 'reviewer', '', '', 'userAdmin'),
(65, 'ktayspell1s@patch.com', 'reviewer', '', 'conferenceChair', ''),
(66, 'cboyall1t@usda.gov', '', 'author', '', ''),
(67, 'bmcgorley1u@blog.com', '', 'author', '', ''),
(68, 'wlochhead1v@ustream.tv', 'reviewer', '', 'conferenceChair', ''),
(69, 'bgravener1w@yellowbook.com', '', 'author', '', 'userAdmin'),
(70, 'nstride1x@ocn.ne.jp', '', 'author', '', ''),
(71, 'aspollen1y@smh.com.au', 'reviewer', '', '', ''),
(72, 'omcaline1z@washingtonpost.com', '', 'author', '', 'userAdmin'),
(73, 'ydrawmer20@ovh.net', '', 'author', 'conferenceChair', ''),
(74, 'cdanihelka21@pen.io', '', 'author', '', ''),
(75, 'csnowball22@hibu.com', 'reviewer', '', '', ''),
(76, 'bskottle23@photobucket.com', '', '', 'conferenceChair', ''),
(77, 'msay24@tamu.edu', '', 'author', '', ''),
(78, 'vhoyte25@blogspot.com', 'reviewer', '', '', ''),
(79, 'sniblo26@usatoday.com', 'reviewer', '', '', ''),
(80, 'ainsworth27@tripod.com', '', '', '', ''),
(81, 'asly28@bluehost.com', 'reviewer', '', 'conferenceChair', ''),
(82, 'bberndsen29@msn.com', '', 'author', '', ''),
(83, 'ajanuary2a@bbc.co.uk', '', 'author', '', ''),
(84, 'ldowsing2b@uol.com.br', 'reviewer', '', '', ''),
(85, 'gfirsby2c@cbslocal.com', 'reviewer', '', '', ''),
(86, 'swards2d@weibo.com', 'reviewer', 'author', '', ''),
(87, 'worr2e@ebay.co.uk', '', 'author', 'conferenceChair', 'userAdmin'),
(88, 'jpipping2f@weather.com', 'reviewer', 'author', '', 'userAdmin'),
(89, 'pkillingsworth2g@vistaprint.com', '', 'author', '', ''),
(90, 'oflaxman2h@dmoz.org', '', 'author', '', ''),
(91, 'pshawl2i@addtoany.com', 'reviewer', '', '', ''),
(92, 'fsalzen2j@360.cn', '', 'author', '', ''),
(93, 'eiorizzo2k@free.fr', 'reviewer', 'author', '', ''),
(94, 'mwennington2l@usa.gov', '', 'author', '', ''),
(95, 'smuttock2m@nature.com', '', 'author', '', ''),
(96, 'mwittman2n@hatena.ne.jp', '', '', 'conferenceChair', ''),
(97, 'curian2o@creativecommons.org', '', 'author', '', ''),
(98, 'skarys2p@yolasite.com', 'reviewer', '', 'conferenceChair', ''),
(99, 'mattoe2q@posterous.com', '', 'author', '', ''),
(100, 'cgovenlock2r@meetup.com', '', 'author', '', '');

--
-- 转储表的索引
--

--
-- 表的索引 `account_profile`
--
ALTER TABLE `account_profile`
  ADD PRIMARY KEY (`profile_ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `account_profile`
--
ALTER TABLE `account_profile`
  MODIFY `profile_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

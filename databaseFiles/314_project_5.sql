-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-11-17 16:28:04
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
(1, 'EnSo9ujLoz', 'Anatola Janson', 'M', '77', '99775952', 'ajanson0@homestead.com', 'active'),
(2, 'PjOxGv6qU4x0', 'Eugenio Toyne', 'M', '39', '92885165', 'etoyne1@go.com', 'active'),
(3, 'DnryIQ0', 'Kala Roddick', 'M', '54', '91402607', 'kroddick2@archive.org', 'active'),
(4, '6uw2pYVkDdUM', 'Marieann Tantum', 'F', '23', '97091380', 'mtantum3@nih.gov', 'active'),
(5, 'DnvsDr6IlI', 'Electra Sapseed', 'F', '34', '90381548', 'esapseed4@webmd.com', 'active'),
(6, 'Gue91a9I', 'Violante Jills', 'M', '65', '92568047', 'vjills5@skyrock.com', 'active'),
(7, 'IG7Mvib', 'Loralyn Gatenby', 'F', '46', '98404344', 'lgatenby6@gov.uk', 'active'),
(8, 'oRtWuhflLswq', 'Zita Fury', 'M', '53', '95821182', 'zfury7@jiathis.com', 'active'),
(9, 'lps3WU3IrII', 'Keary Berni', 'F', '68', '92207703', 'kberni8@weebly.com', 'active'),
(10, 'BUt0eoFVmJq', 'Viki Beinke', 'F', '23', '99037924', 'vbeinke9@elpais.com', 'active'),
(11, 'p2bIlLc7ZqC', 'Harlin Fittis', 'F', '21', '95217246', 'hfittisa@amazon.com', 'active'),
(12, 'fHY6eG', 'Zenia Coolican', 'M', '70', '95322036', 'zcoolicanb@independent.co.uk', 'active'),
(13, 'khO8SsOrBWMK', 'Emmy Swate', 'F', '58', '90569747', 'eswatec@clickbank.net', 'active'),
(14, 'ImiWLpb', 'Angil Cosley', 'M', '22', '89465369', 'acosleyd@epa.gov', 'active'),
(15, 'i12wFA0Abn', 'Lek Dunstone', 'M', '75', '98609082', 'ldunstonee@bandcamp.com', 'active'),
(16, 'RnmhqdS7', 'Thornie Plose', 'F', '32', '93899359', 'tplosef@amazonaws.com', 'active'),
(17, 'mg45VTblcDm', 'Adi Huison', 'F', '69', '96525401', 'ahuisong@craigslist.org', 'active'),
(18, '5J99P1QNG', 'Fern Hiner', 'M', '30', '96480368', 'fhinerh@google.co.uk', 'active'),
(19, 'rR4e2wEhD', 'Derick Ceaser', 'M', '34', '99747772', 'dceaseri@parallels.com', 'active'),
(20, 'Wa4xaQd1Fr', 'Fredra Dabourne', 'F', '79', '89800292', 'fdabournej@mapquest.com', 'active'),
(21, 'xZJVoz4lI', 'Ines Smiths', 'F', '57', '97970020', 'ismithsk@apache.org', 'active'),
(22, 'IleDZbJlaXCh', 'Tera Sherrock', 'F', '78', '97905056', 'tsherrockl@sfgate.com', 'active'),
(23, 'mn4bFEDD8NR0', 'Demetra Kainz', 'M', '58', '98049610', 'dkainzm@cmu.edu', 'active'),
(24, '9wLuDr0llf', 'Demetria Stolworthy', 'F', '58', '92896890', 'dstolworthyn@senate.gov', 'active'),
(25, 'Ib11nBX', 'Violette McGinly', 'M', '72', '94556358', 'vmcginlyo@bbc.co.uk', 'active'),
(26, 'KV2IXKlYJsMA', 'Guss Monnelly', 'F', '45', '88423569', 'gmonnellyp@cbsnews.com', 'active'),
(27, 'Ea4frP8Up', 'Kaleena Greenrod', 'F', '27', '91968108', 'kgreenrodq@census.gov', 'active'),
(28, 'mm0d9EiZEHrq', 'Hayes Stanger', 'M', '37', '99641309', 'hstangerr@ezinearticles.com', 'active'),
(29, 'XPmWhPG', 'Kaitlin Waller', 'M', '79', '98091734', 'kwallers@skype.com', 'active'),
(30, 'zWvqG3jc', 'Frederic Dell Casa', 'F', '75', '99781611', 'fdellt@tripod.com', 'active'),
(31, '9ed4lql', 'Neddie McKennan', 'M', '78', '88854392', 'nmckennanu@army.mil', 'active'),
(32, 'UW2Pawi', 'Maddie McCowen', 'F', '64', '88373988', 'mmccowenv@uiuc.edu', 'active'),
(33, 'HG5OPhU8Zp8', 'Miguel Karsh', 'F', '57', '88932133', 'mkarshw@phoca.cz', 'active'),
(34, 'U9mmKXp', 'Giulio Cammish', 'M', '40', '88307510', 'gcammishx@goo.ne.jp', 'active'),
(35, 'mL7Jr38', 'Broderic Antic', 'M', '47', '91376568', 'banticy@java.com', 'active'),
(36, 'kgV7uKAKZnw', 'Loren Issacov', 'M', '20', '88470533', 'lissacovz@cpanel.net', 'active'),
(37, 'tTBRcj', 'Roselin Vasilyevski', 'M', '26', '90552185', 'rvasilyevski10@prweb.com', 'active'),
(38, 'CVHK1u7', 'Ara Fricke', 'M', '47', '88546013', 'africke11@netscape.com', 'active'),
(39, 'QCYRHbT9II', 'Arley Leinweber', 'F', '72', '93043984', 'aleinweber12@booking.com', 'active'),
(40, 'OI402bd', 'Jacintha Simanek', 'F', '58', '96025034', 'jsimanek13@blogs.com', 'active'),
(41, 'qxu8Fv1U', 'Sheree Aristide', 'M', '77', '89907788', 'saristide14@delicious.com', 'active'),
(42, '6ymazHF9iFJ3', 'Burgess Nias', 'F', '77', '99512001', 'bnias15@123-reg.co.uk', 'active'),
(43, '6VDE2uFB', 'Ricardo Nials', 'F', '26', '97485411', 'rnials16@redcross.org', 'active'),
(44, '2maMu6Qc57', 'Harrie Purchase', 'M', '65', '87834729', 'hpurchase17@miibeian.gov.cn', 'active'),
(45, '2MwFSWJ6Y', 'Courtnay Randerson', 'F', '64', '87718420', 'cranderson18@bandcamp.com', 'active'),
(46, 'q1NQNWnY', 'Monique Melendez', 'F', '77', '95284680', 'mmelendez19@shop-pro.jp', 'active'),
(47, 'Zr9c3V6', 'Bridgette de Quincey', 'M', '18', '92387567', 'bde1a@addtoany.com', 'active'),
(48, 'ykEeEAlwLRb', 'Schuyler Prate', 'M', '74', '89035094', 'sprate1b@reference.com', 'active'),
(49, 'KKc0gL2s', 'Rudolfo Hrynczyk', 'M', '70', '88542442', 'rhrynczyk1c@i2i.jp', 'active'),
(50, 'cBi0z7', 'Fransisco Worsnup', 'F', '51', '95523561', 'fworsnup1d@last.fm', 'active'),
(51, 'XB9xBxPcd8d', 'Mikaela MacNeilley', 'M', '73', '93627061', 'mmacneilley1e@woothemes.com', 'active'),
(52, 'HvscNkYTuo', 'Micaela Wadman', 'F', '63', '88645867', 'mwadman1f@shop-pro.jp', 'active'),
(53, '7UuYp1S1fmF', 'Margarete Friar', 'M', '55', '94285419', 'mfriar1g@weather.com', 'active'),
(54, 'sdhGtfit4o', 'Antonetta Fettes', 'M', '25', '89140602', 'afettes1h@tinyurl.com', 'active'),
(55, '3cmQcN', 'Brocky Knoton', 'F', '30', '90541501', 'bknoton1i@is.gd', 'active'),
(56, 'LXe8SIldspy', 'Calv Itzhaiek', 'F', '64', '89323422', 'citzhaiek1j@eventbrite.com', 'active'),
(57, '560T1rnpqOm', 'Zandra Bilbrooke', 'F', '70', '94733168', 'zbilbrooke1k@google.it', 'active'),
(58, 'dSUCCD2WJPV', 'Orton Cordeix', 'F', '33', '87700029', 'ocordeix1l@unesco.org', 'active'),
(59, 'pohbUEfeVJ', 'Penelope Pioch', 'F', '42', '89406577', 'ppioch1m@dailymotion.com', 'active'),
(60, 'la8LZ4SwXy', 'Rawley Haighton', 'M', '37', '92753811', 'rhaighton1n@theatlantic.com', 'active'),
(61, 'b2TdMpfRr6C', 'Beverie Belin', 'M', '52', '95693260', 'bbelin1o@issuu.com', 'active'),
(62, 'jYpj2Ly', 'Vito Macveigh', 'M', '66', '97700223', 'vmacveigh1p@ning.com', 'active'),
(63, '0EfoLcm', 'Jerrome Boddice', 'M', '56', '91263938', 'jboddice1q@vinaora.com', 'active'),
(64, '0NDpAV7', 'Val Annies', 'M', '51', '95009382', 'vannies1r@nationalgeographic.com', 'active'),
(65, '6O88SUCQnE', 'Keeley Tayspell', 'M', '43', '94801766', 'ktayspell1s@patch.com', 'active'),
(66, 'PWoXVxOEg2', 'Christye Boyall', 'M', '72', '95110155', 'cboyall1t@usda.gov', 'active'),
(67, 'eAuPVdk', 'Benton McGorley', 'M', '66', '93219818', 'bmcgorley1u@blog.com', 'active'),
(68, 'f3sdAd', 'Wilbur Lochhead', 'M', '53', '91882012', 'wlochhead1v@ustream.tv', 'active'),
(69, 'PoBSGDZVv', 'Brett Gravener', 'M', '20', '97305280', 'bgravener1w@yellowbook.com', 'active'),
(70, '1phf8Ui', 'Nettie Stride', 'F', '44', '94397257', 'nstride1x@ocn.ne.jp', 'active'),
(71, 'fE3zJqIGGTP', 'Artur Spollen', 'M', '71', '97135257', 'aspollen1y@smh.com.au', 'active'),
(72, '3Uh4YguGYJ', 'Ofilia McAline', 'M', '72', '94309400', 'omcaline1z@washingtonpost.com', 'active'),
(73, 'RfRzGY', 'Yorgo Drawmer', 'F', '40', '93086969', 'ydrawmer20@ovh.net', 'active'),
(74, 'gkvs2GYz', 'Cymbre Danihelka', 'M', '57', '91336755', 'cdanihelka21@pen.io', 'active'),
(75, 'C0d3VLOivjBq', 'Chloe Snowball', 'M', '40', '89134553', 'csnowball22@hibu.com', 'active'),
(76, '7Rc55W', 'Bernardo Skottle', 'F', '26', '96672216', 'bskottle23@photobucket.com', 'active'),
(77, 'PYHncq', 'Mace Say', 'F', '75', '91133517', 'msay24@tamu.edu', 'active'),
(78, 'vjOVvDSwV', 'Valle Hoyte', 'F', '42', '87838354', 'vhoyte25@blogspot.com', 'active'),
(79, '0hxbKtWMFc', 'Sayre Niblo', 'M', '40', '91697970', 'sniblo26@usatoday.com', 'active'),
(80, '12345', 'Abelard Insworth', 'F', '78', '99726992', 'ainsworth27@tripod.com', 'active'),
(81, 'YONWoGRXUIoG', 'Aubine Sly', 'M', '50', '94917240', 'asly28@bluehost.com', 'active'),
(82, 'XineFDgc0ktQ', 'Bernadene Berndsen', 'F', '76', '93804761', 'bberndsen29@msn.com', 'active'),
(83, 'r2NSh0', 'Ailbert January', 'M', '24', '97084076', 'ajanuary2a@bbc.co.uk', 'active'),
(84, 'UMOtqXMNZ', 'Lari Dowsing', 'M', '51', '99517804', 'ldowsing2b@uol.com.br', 'active'),
(85, '0jhkwoME04', 'Graham Firsby', 'F', '69', '89523081', 'gfirsby2c@cbslocal.com', 'active'),
(86, 'HJJ6Bid7b', 'Shae Wards', 'F', '58', '95754931', 'swards2d@weibo.com', 'active'),
(87, '7B4vOeR', 'Ward Orr', 'M', '69', '89883553', 'worr2e@ebay.co.uk', 'active'),
(88, 'LzauoUSQy', 'Jodi Pipping', 'F', '73', '88471176', 'jpipping2f@weather.com', 'active'),
(89, 'T1CQcxo7al', 'Perry Killingsworth', 'M', '72', '90230555', 'pkillingsworth2g@vistaprint.com', 'active'),
(90, 'aHETIDW6R', 'Oliy Flaxman', 'M', '53', '92351257', 'oflaxman2h@dmoz.org', 'active'),
(91, 'LzoRlO', 'Patrick Shawl', 'M', '36', '89547532', 'pshawl2i@addtoany.com', 'active'),
(92, 'BEYeiR9', 'Filippa Salzen', 'M', '79', '96007444', 'fsalzen2j@360.cn', 'active'),
(93, 'ahmJiQM2mO', 'Emery Iorizzo', 'M', '37', '97566629', 'eiorizzo2k@free.fr', 'active'),
(94, '02qEk6vS', 'Maurits Wennington', 'F', '18', '89682898', 'mwennington2l@usa.gov', 'active'),
(95, '9kLxXhh5L8Pt', 'Shela Muttock', 'M', '44', '95340615', 'smuttock2m@nature.com', 'active'),
(96, 'GkE8LYg', 'Marwin Wittman', 'M', '27', '97840245', 'mwittman2n@hatena.ne.jp', 'active'),
(97, 'YMrXiKJQnEUc', 'Cosetta Urian', 'M', '51', '95334764', 'curian2o@creativecommons.org', 'active'),
(98, 'Xbd2jERQ', 'Seana Karys', 'F', '39', '96565855', 'skarys2p@yolasite.com', 'active'),
(99, '97WdAYaKwb', 'Mariquilla Attoe', 'M', '47', '90838342', 'mattoe2q@posterous.com', 'active'),
(100, 'i4bzNQXPHMb', 'Christin Govenlock', 'M', '61', '99285705', 'cgovenlock2r@meetup.com', 'active'),
(101, '12345', 'Kassy Elissa', 'F', '45', '12345678', 'KassyElissa@potato.com', 'active'),
(102, '122345', 'Sydnie Carlyle', 'F', '35', '98765433', 'SydnieCarlyle@potato.com', 'active');

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
  `userAdmin_type` varchar(999) NOT NULL,
  `maxReviewNumber` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `account_profile`
--

INSERT INTO `account_profile` (`profile_ID`, `account_email`, `reviewer_type`, `author_type`, `conferenceChair_type`, `userAdmin_type`, `maxReviewNumber`) VALUES
(1, 'ajanson0@homestead.com', '', '', 'conferenceChair', '', ''),
(2, 'etoyne1@go.com', '', 'author', '', '', ''),
(3, 'kroddick2@archive.org', '', 'author', '', '', ''),
(4, 'mtantum3@nih.gov', '', '', 'conferenceChair', '', ''),
(5, 'esapseed4@webmd.com', '', 'author', '', 'userAdmin', ''),
(6, 'vjills5@skyrock.com', 'reviewer', 'author', '', '', '6'),
(7, 'lgatenby6@gov.uk', 'reviewer', '', '', '', '8'),
(8, 'zfury7@jiathis.com', 'reviewer', '', '', '', '2'),
(9, 'kberni8@weebly.com', '', 'author', 'conferenceChair', '', ''),
(10, 'vbeinke9@elpais.com', 'reviewer', 'author', '', 'userAdmin', '5'),
(11, 'hfittisa@amazon.com', '', '', '', 'userAdmin', ''),
(12, 'zcoolicanb@independent.co.uk', 'reviewer', '', '', '', '7'),
(13, 'eswatec@clickbank.net', 'reviewer', '', '', '', '9'),
(14, 'acosleyd@epa.gov', 'reviewer', 'author', '', '', ''),
(15, 'ldunstonee@bandcamp.com', 'reviewer', 'author', '', '', '10'),
(16, 'tplosef@amazonaws.com', '', '', 'conferenceChair', '', ''),
(17, 'ahuisong@craigslist.org', '', '', 'conferenceChair', '', ''),
(18, 'fhinerh@google.co.uk', 'reviewer', '', 'conferenceChair', '', '4'),
(19, 'dceaseri@parallels.com', '', 'author', '', '', ''),
(20, 'fdabournej@mapquest.com', '', 'author', '', '', ''),
(21, 'ismithsk@apache.org', '', 'author', '', '', ''),
(22, 'tsherrockl@sfgate.com', 'reviewer', '', '', '', '7'),
(23, 'dkainzm@cmu.edu', '', '', '', 'userAdmin', ''),
(24, 'dstolworthyn@senate.gov', '', 'author', '', '', ''),
(25, 'vmcginlyo@bbc.co.uk', '', 'author', '', '', ''),
(26, 'gmonnellyp@cbsnews.com', '', 'author', '', '', ''),
(27, 'kgreenrodq@census.gov', 'reviewer', 'author', '', '', '8'),
(28, 'hstangerr@ezinearticles.com', '', '', '', '', ''),
(29, 'kwallers@skype.com', '', 'author', '', '', ''),
(30, 'fdellt@tripod.com', '', 'author', '', '', ''),
(31, 'nmckennanu@army.mil', '', 'author', '', '', ''),
(32, 'mmccowenv@uiuc.edu', '', 'author', '', '', ''),
(33, 'mkarshw@phoca.cz', '', '', '', 'userAdmin', ''),
(34, 'gcammishx@goo.ne.jp', 'reviewer', '', '', '', '6'),
(35, 'banticy@java.com', 'reviewer', '', '', '', '5'),
(36, 'lissacovz@cpanel.net', 'reviewer', '', '', '', '4'),
(37, 'rvasilyevski10@prweb.com', 'reviewer', '', '', '', '3'),
(38, 'africke11@netscape.com', '', 'author', '', '', ''),
(39, 'aleinweber12@booking.com', '', '', 'conferenceChair', '', ''),
(40, 'jsimanek13@blogs.com', 'reviewer', '', '', '', '10'),
(41, 'saristide14@delicious.com', '', '', 'conferenceChair', '', ''),
(42, 'bnias15@123-reg.co.uk', '', '', 'conferenceChair', '', ''),
(43, 'rnials16@redcross.org', '', 'author', '', '', ''),
(44, 'hpurchase17@miibeian.gov.cn', '', '', '', 'userAdmin', ''),
(45, 'cranderson18@bandcamp.com', '', '', 'conferenceChair', '', ''),
(46, 'mmelendez19@shop-pro.jp', '', 'author', 'conferenceChair', '', ''),
(47, 'bde1a@addtoany.com', '', 'author', '', '', ''),
(48, 'sprate1b@reference.com', '', 'author', '', '', ''),
(49, 'rhrynczyk1c@i2i.jp', '', 'author', '', '', ''),
(50, 'fworsnup1d@last.fm', '', 'author', '', '', ''),
(51, 'mmacneilley1e@woothemes.com', 'reviewer', '', '', '', '3'),
(52, 'mwadman1f@shop-pro.jp', '', 'author', '', '', ''),
(53, 'mfriar1g@weather.com', 'reviewer', '', '', '', '10'),
(54, 'afettes1h@tinyurl.com', 'reviewer', '', '', '', '2'),
(55, 'bknoton1i@is.gd', '', 'author', '', '', ''),
(56, 'citzhaiek1j@eventbrite.com', 'reviewer', 'author', '', '', '7'),
(57, 'zbilbrooke1k@google.it', '', 'author', '', '', ''),
(58, 'ocordeix1l@unesco.org', 'reviewer', '', '', 'userAdmin', '4'),
(59, 'ppioch1m@dailymotion.com', '', 'author', '', '', ''),
(60, 'rhaighton1n@theatlantic.com', 'reviewer', '', '', 'userAdmin', '5'),
(61, 'bbelin1o@issuu.com', '', 'author', '', '', ''),
(62, 'vmacveigh1p@ning.com', '', 'author', '', '', ''),
(63, 'jboddice1q@vinaora.com', 'reviewer', '', '', '', '10'),
(64, 'vannies1r@nationalgeographic.com', 'reviewer', '', '', 'userAdmin', '2'),
(65, 'ktayspell1s@patch.com', 'reviewer', '', 'conferenceChair', '', '6'),
(66, 'cboyall1t@usda.gov', '', 'author', '', '', ''),
(67, 'bmcgorley1u@blog.com', '', 'author', '', '', ''),
(68, 'wlochhead1v@ustream.tv', 'reviewer', '', 'conferenceChair', '', '7'),
(69, 'bgravener1w@yellowbook.com', '', 'author', '', 'userAdmin', ''),
(70, 'nstride1x@ocn.ne.jp', '', 'author', '', '', ''),
(71, 'aspollen1y@smh.com.au', 'reviewer', '', '', '', '4'),
(72, 'omcaline1z@washingtonpost.com', '', 'author', '', 'userAdmin', ''),
(73, 'ydrawmer20@ovh.net', '', 'author', 'conferenceChair', '', ''),
(74, 'cdanihelka21@pen.io', '', 'author', '', '', ''),
(75, 'csnowball22@hibu.com', 'reviewer', '', '', '', '6'),
(76, 'bskottle23@photobucket.com', '', '', 'conferenceChair', '', ''),
(77, 'msay24@tamu.edu', '', 'author', '', '', ''),
(78, 'vhoyte25@blogspot.com', 'reviewer', '', '', '', '3'),
(79, 'sniblo26@usatoday.com', 'reviewer', '', '', '', '1'),
(80, 'ainsworth27@tripod.com', '', '', '', '', ''),
(81, 'asly28@bluehost.com', 'reviewer', '', 'conferenceChair', '', '9'),
(82, 'bberndsen29@msn.com', '', 'author', '', '', ''),
(83, 'ajanuary2a@bbc.co.uk', '', 'author', '', '', ''),
(84, 'ldowsing2b@uol.com.br', 'reviewer', '', '', '', '3'),
(85, 'gfirsby2c@cbslocal.com', 'reviewer', '', '', '', '1'),
(86, 'swards2d@weibo.com', 'reviewer', 'author', '', '', '19'),
(87, 'worr2e@ebay.co.uk', '', 'author', 'conferenceChair', 'userAdmin', ''),
(88, 'jpipping2f@weather.com', 'reviewer', 'author', '', 'userAdmin', '2'),
(89, 'pkillingsworth2g@vistaprint.com', '', 'author', '', '', ''),
(90, 'oflaxman2h@dmoz.org', '', 'author', '', '', ''),
(91, 'pshawl2i@addtoany.com', 'reviewer', '', '', '', '6'),
(92, 'fsalzen2j@360.cn', '', 'author', '', '', ''),
(93, 'eiorizzo2k@free.fr', 'reviewer', 'author', '', '', '1'),
(94, 'mwennington2l@usa.gov', '', 'author', '', '', ''),
(95, 'smuttock2m@nature.com', '', 'author', '', '', ''),
(96, 'mwittman2n@hatena.ne.jp', '', '', 'conferenceChair', '', ''),
(97, 'curian2o@creativecommons.org', '', 'author', '', '', ''),
(98, 'skarys2p@yolasite.com', 'reviewer', '', 'conferenceChair', '', '10'),
(99, 'mattoe2q@posterous.com', '', 'author', '', '', ''),
(100, 'cgovenlock2r@meetup.com', '', 'author', '', '', ''),
(101, 'KassyElissa@potato.com', 'reviewer', '', '', 'userAdmin', ''),
(102, 'SydnieCarlyle@potato.com', 'reviewer', '', '', '', '');

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
(1, 'paper5', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(2, 'paper4', 'Viki Beinke', 'vbeinke9@elpais.com', 2, 'Super good', 9),
(3, 'paper4', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(4, 'paper30', 'Viki Beinke', 'vbeinke9@elpais.com', 0, '', 9),
(5, 'paper30', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 0, '', 9),
(6, 'paper79', 'Zita Fury', 'zfury7@jiathis.com', 0, '', 9),
(7, 'paper1', 'Violante Jills', 'vjills5@skyrock.com', 3, 'Strongly agreee', 9),
(8, 'paper1', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(9, 'paper11', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(10, 'paper11', 'Viki Beinke', 'vbeinke9@elpais.com', 0, '', 9),
(11, 'paper21', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(12, 'paper37', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(13, 'paper37', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(14, 'paper51', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(15, 'paper51', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 0, '', 9),
(16, 'paper71', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(17, 'paper74', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(18, 'paper74', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 0, '', 9),
(19, 'paper68', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(20, 'paper62', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(21, 'paper62', 'Zita Fury', 'zfury7@jiathis.com', 0, '', 9),
(22, 'paper94', 'Violante Jills', 'vjills5@skyrock.com', 0, '', 9),
(23, 'paper6', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(24, 'paper69', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(25, 'paper83', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(26, 'paper83', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 0, '', 9),
(27, 'paper84', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(28, 'paper2', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 0, '', 9),
(29, 'paper7', 'Zita Fury', 'zfury7@jiathis.com', 0, '', 9),
(30, 'paper7', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 0, '', 9),
(31, 'paper29', 'Zita Fury', 'zfury7@jiathis.com', 0, '', 9),
(32, 'paper97', 'Zita Fury', 'zfury7@jiathis.com', 0, '', 9),
(33, 'paper97', 'Emery Iorizzo', 'eiorizzo2k@free.fr', 0, '', 9),
(34, 'paper17', 'Viki Beinke', 'vbeinke9@elpais.com', 0, '', 9),
(35, 'paper48', 'Viki Beinke', 'vbeinke9@elpais.com', 0, '', 9),
(36, 'paper44', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 0, '', 9),
(37, 'paper57', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 0, '', 9),
(38, 'paper57', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 0, '', 9),
(39, 'paper45', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 0, '', 9),
(40, 'paper45', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(41, 'paper45', 'Orton Cordeix', 'ocordeix1l@unesco.org', 0, '', 9),
(42, 'paper45', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', 0, '', 9),
(43, 'paper19', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 0, '', 9),
(44, 'paper19', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 0, '', 9),
(45, 'paper54', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 0, '', 9),
(46, 'paper22', 'Emmy Swate', 'eswatec@clickbank.net', 0, '', 9),
(47, 'paper22', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', 0, '', 9),
(48, 'paper98', 'Emmy Swate', 'eswatec@clickbank.net', 0, '', 9),
(49, 'paper60', 'Emmy Swate', 'eswatec@clickbank.net', 0, '', 9),
(50, 'paper60', 'Tera Sherrock', 'tsherrockl@sfgate.com', 0, '', 9),
(51, 'paper33', 'Emmy Swate', 'eswatec@clickbank.net', 0, '', 9),
(52, 'paper33', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 0, '', 9),
(53, 'paper28', 'Emmy Swate', 'eswatec@clickbank.net', 0, '', 9),
(54, 'paper28', 'Fern Hiner', 'fhinerh@google.co.uk', 0, '', 9),
(55, 'paper28', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 0, '', 9),
(56, 'paper28', 'Sayre Niblo', 'sniblo26@usatoday.com', 0, '', 9),
(57, 'paper28', 'Patrick Shawl', 'pshawl2i@addtoany.com', 0, '', 9),
(58, 'paper55', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 0, '', 9),
(59, 'paper50', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 0, '', 9),
(60, 'paper50', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(61, 'paper58', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 0, '', 9),
(62, 'paper56', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 0, '', 9),
(63, 'paper9', 'Fern Hiner', 'fhinerh@google.co.uk', 0, '', 9),
(64, 'paper81', 'Fern Hiner', 'fhinerh@google.co.uk', 0, '', 9),
(65, 'paper65', 'Fern Hiner', 'fhinerh@google.co.uk', 0, '', 9),
(66, 'paper65', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 0, '', 9),
(67, 'paper65', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', 0, '', 9),
(68, 'paper70', 'Fern Hiner', 'fhinerh@google.co.uk', 0, '', 9),
(69, 'paper70', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 0, '', 9),
(70, 'paper52', 'Tera Sherrock', 'tsherrockl@sfgate.com', 0, '', 9),
(71, 'paper52', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 0, '', 9),
(72, 'paper24', 'Tera Sherrock', 'tsherrockl@sfgate.com', 0, '', 9),
(73, 'paper77', 'Tera Sherrock', 'tsherrockl@sfgate.com', 0, '', 9),
(74, 'paper13', 'Tera Sherrock', 'tsherrockl@sfgate.com', 0, '', 9),
(75, 'paper13', 'Broderic Antic', 'banticy@java.com', 0, '', 9),
(76, 'paper13', 'Loren Issacov', 'lissacovz@cpanel.net', 0, '', 9),
(77, 'paper13', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 0, '', 9),
(78, 'paper13', 'Keeley Tayspell', 'ktayspell1s@patch.com', 0, '', 9),
(79, 'paper13', 'Wilbur Lochhead', 'wlochhead1v@ustream.tv', 0, '', 9),
(80, 'paper13', 'Sayre Niblo', 'sniblo26@usatoday.com', 0, '', 9),
(81, 'paper91', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 0, '', 9),
(82, 'paper25', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 0, '', 9),
(83, 'paper25', 'Wilbur Lochhead', 'wlochhead1v@ustream.tv', 0, '', 9),
(84, 'paper95', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 0, '', 9),
(85, 'paper95', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(86, 'paper95', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 0, '', 9),
(87, 'paper95', 'Lari Dowsing', 'ldowsing2b@uol.com.br', 0, '', 9),
(88, 'paper59', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 0, '', 9),
(89, 'paper59', 'Jacintha Simanek', 'jsimanek13@blogs.com', 0, '', 9),
(90, 'paper89', 'Broderic Antic', 'banticy@java.com', 0, '', 9),
(91, 'paper89', 'Loren Issacov', 'lissacovz@cpanel.net', 0, '', 9),
(92, 'paper31', 'Loren Issacov', 'lissacovz@cpanel.net', 0, '', 9),
(93, 'paper53', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 0, '', 9),
(94, 'paper90', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 0, '', 9),
(95, 'paper61', 'Jacintha Simanek', 'jsimanek13@blogs.com', 0, '', 9),
(96, 'paper64', 'Jacintha Simanek', 'jsimanek13@blogs.com', 0, '', 9),
(97, 'paper87', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(98, 'paper32', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(99, 'paper14', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 0, '', 9),
(100, 'paper46', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 0, '', 9),
(101, 'paper12', 'Orton Cordeix', 'ocordeix1l@unesco.org', 0, '', 9),
(102, 'paper16', 'Orton Cordeix', 'ocordeix1l@unesco.org', 0, '', 9);

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
(1, 'paper1', 'etoyne1@go.com, kroddick2@archive.org, ismithsk@apache.org', '../databaseFiles/paper/paper1.pdf', 'bidded'),
(2, 'paper2', 'nmckennanu@army.mil, ldunstonee@bandcamp.com', '../databaseFiles/paper/paper2.pdf', 'bidded'),
(3, 'paper3', 'vbeinke9@elpais.com, rhrynczyk1c@i2i.jp, oflaxman2h@dmoz.org', '../databaseFiles/paper/paper3.pdf', ''),
(4, 'paper4', 'mmelendez19@shop-pro.jp, gmonnellyp@cbsnews.com', '../databaseFiles/paper/paper4.pdf', 'bidded'),
(5, 'paper5', 'cboyall1t@usda.gov', '../databaseFiles/paper/paper5.pdf', 'bidded'),
(6, 'paper6', 'africke11@netscape.com, acosleyd@epa.gov', '../databaseFiles/paper/paper6.pdf', 'bidded'),
(7, 'paper7', 'oflaxman2h@dmoz.org', '../databaseFiles/paper/paper7.pdf', 'bidded'),
(8, 'paper8', 'fworsnup1d@last.fm', '../databaseFiles/paper/paper8.pdf', ''),
(9, 'paper9', 'mmccowenv@uiuc.edu, kwallers@skype.com', '../databaseFiles/paper/paper9.pdf', 'bidded'),
(10, 'paper10', 'ismithsk@apache.org, mwadman1f@shop-pro.jp, ydrawmer20@ovh.net, mwennington2l@usa.gov, curian2o@creativecommons.org', '../databaseFiles/paper/paper10.pdf', ''),
(11, 'paper11', 'rnials16@redcross.org, kroddick2@archive.org', '../databaseFiles/paper/paper11.pdf', 'bidded'),
(12, 'paper12', 'sprate1b@reference.com, curian2o@creativecommons.org', '../databaseFiles/paper/paper12.pdf', 'bidded'),
(13, 'paper13', 'bknoton1i@is.gd, kroddick2@archive.org', '../databaseFiles/paper/paper13.pdf', 'bidded'),
(14, 'paper14', 'ldunstonee@bandcamp.com', '../databaseFiles/paper/paper14.pdf', 'bidded'),
(15, 'paper15', 'citzhaiek1j@eventbrite.com', '../databaseFiles/paper/paper15.pdf', 'bidded'),
(16, 'paper16', 'ppioch1m@dailymotion.com, rnials16@redcross.org, bgravener1w@yellowbook.com', '../databaseFiles/paper/paper16.pdf', 'bidded'),
(17, 'paper17', 'eiorizzo2k@free.fr', '../databaseFiles/paper/paper17.pdf', 'bidded'),
(18, 'paper18', 'smuttock2m@nature.com', '../databaseFiles/paper/paper18.pdf', ''),
(19, 'paper19', 'dceaseri@parallels.com', '../databaseFiles/paper/paper19.pdf', 'bidded'),
(20, 'paper20', 'vbeinke9@elpais.com', '../databaseFiles/paper/paper20.pdf', ''),
(21, 'paper21', 'sprate1b@reference.com', '../databaseFiles/paper/paper21.pdf', 'bidded'),
(22, 'paper22', 'ldunstonee@bandcamp.com, citzhaiek1j@eventbrite.com', '../databaseFiles/paper/paper22.pdf', 'bidded'),
(23, 'paper23', 'kroddick2@archive.org, kgreenrodq@census.gov', '../databaseFiles/paper/paper23.pdf', ''),
(24, 'paper24', 'etoyne1@go.com, fdellt@tripod.com, msay24@tamu.edu, bberndsen29@msn.com', '../databaseFiles/paper/paper24.pdf', 'bidded'),
(25, 'paper25', 'ismithsk@apache.org, esapseed4@webmd.com', '../databaseFiles/paper/paper25.pdf', 'bidded'),
(26, 'paper26', 'ajanuary2a@bbc.co.uk', '../databaseFiles/paper/paper26.pdf', ''),
(27, 'paper27', 'nstride1x@ocn.ne.jp, cdanihelka21@pen.io', '../databaseFiles/paper/paper27.pdf', ''),
(28, 'paper28', 'vjills5@skyrock.com, citzhaiek1j@eventbrite.com, mattoe2q@posterous.com', '../databaseFiles/paper/paper28.pdf', 'bidded'),
(29, 'paper29', 'africke11@netscape.com, acosleyd@epa.gov', '../databaseFiles/paper/paper29.pdf', 'bidded'),
(30, 'paper30', 'kgreenrodq@census.gov, mmelendez19@shop-pro.jp, bknoton1i@is.gd', '../databaseFiles/paper/paper30.pdf', 'bidded'),
(31, 'paper31', 'rhrynczyk1c@i2i.jp', '../databaseFiles/paper/paper31.pdf', 'bidded'),
(32, 'paper32', 'africke11@netscape.com, cboyall1t@usda.gov', '../databaseFiles/paper/paper32.pdf', 'bidded'),
(33, 'paper33', 'mmelendez19@shop-pro.jp', '../databaseFiles/paper/paper33.pdf', 'bidded'),
(34, 'paper34', 'dstolworthyn@senate.gov, kberni8@weebly.com', '../databaseFiles/paper/paper34.pdf', ''),
(35, 'paper35', 'fdabournej@mapquest.com', '../databaseFiles/paper/paper35.pdf', ''),
(36, 'paper36', 'africke11@netscape.com', '../databaseFiles/paper/paper36.pdf', ''),
(37, 'paper37', 'fdabournej@mapquest.com, esapseed4@webmd.com', '../databaseFiles/paper/paper37.pdf', 'bidded'),
(38, 'paper38', 'mmccowenv@uiuc.edu', '../databaseFiles/paper/paper38.pdf', ''),
(39, 'paper39', 'rnials16@redcross.org, bde1a@addtoany.com, cdanihelka21@pen.io', '../databaseFiles/paper/paper39.pdf', 'bidded'),
(40, 'paper40', 'bde1a@addtoany.com, ismithsk@apache.org', '../databaseFiles/paper/paper40.pdf', ''),
(41, 'paper41', 'bbelin1o@issuu.com, acosleyd@epa.gov', '../databaseFiles/paper/paper41.pdf', 'bidded'),
(42, 'paper42', 'zbilbrooke1k@google.it', '../databaseFiles/paper/paper42.pdf', ''),
(43, 'paper43', 'mmelendez19@shop-pro.jp, etoyne1@go.com', '../databaseFiles/paper/paper43.pdf', 'bidded'),
(44, 'paper44', 'fsalzen2j@360.cn', '../databaseFiles/paper/paper44.pdf', 'bidded'),
(45, 'paper45', 'mmelendez19@shop-pro.jp, kgreenrodq@census.gov, cboyall1t@usda.gov', '../databaseFiles/paper/paper45.pdf', 'bidded'),
(46, 'paper46', 'kwallers@skype.com', '../databaseFiles/paper/paper46.pdf', 'bidded'),
(47, 'paper47', 'cdanihelka21@pen.io, kwallers@skype.com', '../databaseFiles/paper/paper47.pdf', ''),
(48, 'paper48', 'fdellt@tripod.com, msay24@tamu.edu', '../databaseFiles/paper/paper48.pdf', 'bidded'),
(49, 'paper49', 'kberni8@weebly.com, bde1a@addtoany.com, jpipping2f@weather.com', '../databaseFiles/paper/paper49.pdf', ''),
(50, 'paper50', 'fdellt@tripod.com', '../databaseFiles/paper/paper50.pdf', 'bidded'),
(51, 'paper51', 'africke11@netscape.com', '../databaseFiles/paper/paper51.pdf', 'bidded'),
(52, 'paper52', 'rnials16@redcross.org', '../databaseFiles/paper/paper52.pdf', 'bidded'),
(53, 'paper53', 'mmccowenv@uiuc.edu, acosleyd@epa.gov, vmcginlyo@bbc.co.uk', '../databaseFiles/paper/paper53.pdf', 'bidded'),
(54, 'paper54', 'vjills5@skyrock.com, worr2e@ebay.co.uk', '../databaseFiles/paper/paper54.pdf', 'bidded'),
(55, 'paper55', 'kwallers@skype.com, kberni8@weebly.com, dstolworthyn@senate.gov, vmcginlyo@bbc.co.uk, fdellt@tripod.com, africke11@netscape.com', '../databaseFiles/paper/paper55.pdf', 'bidded'),
(56, 'paper56', 'mmelendez19@shop-pro.jp, etoyne1@go.com', '../databaseFiles/paper/paper56.pdf', 'bidded'),
(57, 'paper57', 'africke11@netscape.com, ldunstonee@bandcamp.com, bknoton1i@is.gd', '../databaseFiles/paper/paper57.pdf', 'bidded'),
(58, 'paper58', 'vmcginlyo@bbc.co.uk, dceaseri@parallels.com', '../databaseFiles/paper/paper58.pdf', 'bidded'),
(59, 'paper59', 'dstolworthyn@senate.gov', '../databaseFiles/paper/paper59.pdf', 'bidded'),
(60, 'paper60', 'kgreenrodq@census.gov, gmonnellyp@cbsnews.com, bde1a@addtoany.com', '../databaseFiles/paper/paper60.pdf', 'bidded'),
(61, 'paper61', 'worr2e@ebay.co.uk, sprate1b@reference.com', '../databaseFiles/paper/paper61.pdf', 'bidded'),
(62, 'paper62', 'fdellt@tripod.com, kgreenrodq@census.gov', '../databaseFiles/paper/paper62.pdf', 'bidded'),
(63, 'paper63', 'rnials16@redcross.org, vmcginlyo@bbc.co.uk', '../databaseFiles/paper/paper63.pdf', ''),
(64, 'paper64', 'rnials16@redcross.org, ldunstonee@bandcamp.com', '../databaseFiles/paper/paper64.pdf', 'bidded'),
(65, 'paper65', 'etoyne1@go.com, smuttock2m@nature.com', '../databaseFiles/paper/paper65.pdf', 'bidded'),
(66, 'paper66', 'mmelendez19@shop-pro.jp', '../databaseFiles/paper/paper66.pdf', ''),
(67, 'paper67', 'dceaseri@parallels.com, etoyne1@go.com, kberni8@weebly.com', '../databaseFiles/paper/paper67.pdf', ''),
(68, 'paper68', 'dstolworthyn@senate.gov, acosleyd@epa.gov', '../databaseFiles/paper/paper68.pdf', 'bidded'),
(69, 'paper69', 'cgovenlock2r@meetup.com', '../databaseFiles/paper/paper69.pdf', 'bidded'),
(70, 'paper70', 'vmacveigh1p@ning.com, vmcginlyo@bbc.co.uk', '../databaseFiles/paper/paper70.pdf', 'bidded'),
(71, 'paper71', 'dstolworthyn@senate.gov, kwallers@skype.com', '../databaseFiles/paper/paper71.pdf', 'bidded'),
(72, 'paper72', 'bde1a@addtoany.com, fdellt@tripod.com', '../databaseFiles/paper/paper72.pdf', ''),
(73, 'paper73', 'ldunstonee@bandcamp.com, bberndsen29@msn.com', '../databaseFiles/paper/paper73.pdf', 'bidded'),
(74, 'paper74', 'kwallers@skype.com', '../databaseFiles/paper/paper74.pdf', 'bidded'),
(75, 'paper75', 'acosleyd@epa.gov, bknoton1i@is.gd, mattoe2q@posterous.com', '../databaseFiles/paper/paper75.pdf', ''),
(76, 'paper76', 'nmckennanu@army.mil, etoyne1@go.com', '../databaseFiles/paper/paper76.pdf', ''),
(77, 'paper77', 'bde1a@addtoany.com, sprate1b@reference.com, worr2e@ebay.co.uk', '../databaseFiles/paper/paper77.pdf', 'bidded'),
(78, 'paper78', 'vmcginlyo@bbc.co.uk, rhrynczyk1c@i2i.jp', '../databaseFiles/paper/paper78.pdf', ''),
(79, 'paper79', 'jpipping2f@weather.com, fsalzen2j@360.cn', '../databaseFiles/paper/paper79.pdf', 'bidded'),
(80, 'paper80', 'bgravener1w@yellowbook.com', '../databaseFiles/paper/paper80.pdf', ''),
(81, 'paper81', 'vbeinke9@elpais.com', '../databaseFiles/paper/paper81.pdf', 'bidded'),
(82, 'paper82', 'ldunstonee@bandcamp.com, kroddick2@archive.org, sprate1b@reference.com', '../databaseFiles/paper/paper82.pdf', 'bidded'),
(83, 'paper83', 'kgreenrodq@census.gov, fsalzen2j@360.cn', '../databaseFiles/paper/paper83.pdf', 'bidded'),
(84, 'paper84', 'kwallers@skype.com, vmcginlyo@bbc.co.uk', '../databaseFiles/paper/paper84.pdf', 'bidded'),
(85, 'paper85', 'bde1a@addtoany.com', '../databaseFiles/paper/paper85.pdf', ''),
(86, 'paper86', 'nmckennanu@army.mil', '../databaseFiles/paper/paper86.pdf', ''),
(87, 'paper87', 'vjills5@skyrock.com', '../databaseFiles/paper/paper87.pdf', 'bidded'),
(88, 'paper88', 'gmonnellyp@cbsnews.com', '../databaseFiles/paper/paper88.pdf', ''),
(89, 'paper89', 'bde1a@addtoany.com, dceaseri@parallels.com', '../databaseFiles/paper/paper89.pdf', 'bidded'),
(90, 'paper90', 'kberni8@weebly.com', '../databaseFiles/paper/paper90.pdf', 'bidded'),
(91, 'paper91', 'vmcginlyo@bbc.co.uk', '../databaseFiles/paper/paper91.pdf', 'bidded'),
(92, 'paper92', 'bknoton1i@is.gd, vbeinke9@elpais.com, mwennington2l@usa.gov, mattoe2q@posterous.com', '../databaseFiles/paper/paper92.pdf', ''),
(93, 'paper93', 'swards2d@weibo.com, nstride1x@ocn.ne.jp', '../databaseFiles/paper/paper93.pdf', ''),
(94, 'paper94', 'vmcginlyo@bbc.co.uk, kberni8@weebly.com', '../databaseFiles/paper/paper94.pdf', ''),
(95, 'paper95', 'ismithsk@apache.org, fdellt@tripod.com', '../databaseFiles/paper/paper95.pdf', 'bidded'),
(96, 'paper96', 'ldunstonee@bandcamp.com, nmckennanu@army.mil, bmcgorley1u@blog.com', '../databaseFiles/paper/paper96.pdf', 'bidded'),
(97, 'paper97', 'dceaseri@parallels.com, kroddick2@archive.org, gmonnellyp@cbsnews.com', '../databaseFiles/paper/paper97.pdf', 'bidded'),
(98, 'paper98', 'bde1a@addtoany.com', '../databaseFiles/paper/paper98.pdf', 'bidded'),
(99, 'paper99', 'rnials16@redcross.org, mmccowenv@uiuc.edu', '../databaseFiles/paper/paper99.pdf', 'bidded'),
(100, 'paper100', 'vjills5@skyrock.com, fworsnup1d@last.fm', '../databaseFiles/paper/paper100.pdf', ''),
(101, 'test', 'etoyne1@go.com, kroddick2@archive.org', '../databaseFiles/paper/test.pdf', 'bidded');

-- --------------------------------------------------------

--
-- 表的结构 `papersbid`
--

CREATE TABLE `papersbid` (
  `biddingID` int(10) NOT NULL,
  `paperName` varchar(999) NOT NULL,
  `reviewerName` varchar(999) NOT NULL,
  `account_email` varchar(999) NOT NULL,
  `allocationStatus` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `papersbid`
--

INSERT INTO `papersbid` (`biddingID`, `paperName`, `reviewerName`, `account_email`, `allocationStatus`) VALUES
(1, 'paper4', 'Viki Beinke', 'vbeinke9@elpais.com', 'allocated'),
(2, 'paper30', 'Viki Beinke', 'vbeinke9@elpais.com', 'allocated'),
(3, 'paper79', 'Zita Fury', 'zfury7@jiathis.com', 'allocated'),
(4, 'paper1', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(5, 'paper5', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(6, 'paper11', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(7, 'paper21', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(8, 'paper37', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(9, 'paper51', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(10, 'paper71', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(11, 'paper74', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(12, 'paper68', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(13, 'paper62', 'Violante Jills', 'vjills5@skyrock.com', 'allocated'),
(15, 'paper1', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(16, 'paper6', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(17, 'paper69', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(18, 'paper83', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(19, 'paper84', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(20, 'paper2', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(21, 'paper37', 'Loralyn Gatenby', 'lgatenby6@gov.uk', 'allocated'),
(22, 'paper7', 'Zita Fury', 'zfury7@jiathis.com', 'allocated'),
(23, 'paper29', 'Zita Fury', 'zfury7@jiathis.com', 'allocated'),
(24, 'paper62', 'Zita Fury', 'zfury7@jiathis.com', 'allocated'),
(25, 'paper97', 'Zita Fury', 'zfury7@jiathis.com', 'allocated'),
(29, 'paper17', 'Viki Beinke', 'vbeinke9@elpais.com', 'allocated'),
(30, 'paper11', 'Viki Beinke', 'vbeinke9@elpais.com', 'allocated'),
(31, 'paper48', 'Viki Beinke', 'vbeinke9@elpais.com', 'allocated'),
(32, 'paper44', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 'allocated'),
(33, 'paper45', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 'allocated'),
(34, 'paper57', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 'allocated'),
(35, 'paper54', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 'allocated'),
(36, 'paper19', 'Zenia Coolican', 'zcoolicanb@independent.co.uk', 'allocated'),
(37, 'paper22', 'Emmy Swate', 'eswatec@clickbank.net', 'allocated'),
(38, 'paper98', 'Emmy Swate', 'eswatec@clickbank.net', 'allocated'),
(39, 'paper60', 'Emmy Swate', 'eswatec@clickbank.net', 'allocated'),
(40, 'paper33', 'Emmy Swate', 'eswatec@clickbank.net', 'allocated'),
(41, 'paper28', 'Emmy Swate', 'eswatec@clickbank.net', 'allocated'),
(42, 'paper55', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 'allocated'),
(43, 'paper50', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 'allocated'),
(44, 'paper58', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 'allocated'),
(45, 'paper30', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 'allocated'),
(46, 'paper56', 'Lek Dunstone', 'ldunstonee@bandcamp.com', 'allocated'),
(47, 'paper9', 'Fern Hiner', 'fhinerh@google.co.uk', 'allocated'),
(48, 'paper28', 'Fern Hiner', 'fhinerh@google.co.uk', 'allocated'),
(49, 'paper81', 'Fern Hiner', 'fhinerh@google.co.uk', 'allocated'),
(50, 'paper65', 'Fern Hiner', 'fhinerh@google.co.uk', 'allocated'),
(51, 'paper70', 'Fern Hiner', 'fhinerh@google.co.uk', 'allocated'),
(52, 'paper52', 'Tera Sherrock', 'tsherrockl@sfgate.com', 'allocated'),
(53, 'paper60', 'Tera Sherrock', 'tsherrockl@sfgate.com', 'allocated'),
(54, 'paper24', 'Tera Sherrock', 'tsherrockl@sfgate.com', 'allocated'),
(55, 'paper13', 'Tera Sherrock', 'tsherrockl@sfgate.com', 'allocated'),
(56, 'paper77', 'Tera Sherrock', 'tsherrockl@sfgate.com', 'allocated'),
(57, 'paper91', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 'allocated'),
(58, 'paper52', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 'allocated'),
(59, 'paper65', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 'allocated'),
(60, 'paper25', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 'allocated'),
(61, 'paper51', 'Kaleena Greenrod', 'kgreenrodq@census.gov', 'allocated'),
(62, 'paper57', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 'allocated'),
(63, 'paper70', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 'allocated'),
(64, 'paper59', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 'allocated'),
(65, 'paper95', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 'allocated'),
(66, 'paper28', 'Giulio Cammish', 'gcammishx@goo.ne.jp', 'allocated'),
(67, 'paper13', 'Broderic Antic', 'banticy@java.com', 'allocated'),
(68, 'paper89', 'Broderic Antic', 'banticy@java.com', 'allocated'),
(69, 'paper13', 'Loren Issacov', 'lissacovz@cpanel.net', 'allocated'),
(70, 'paper89', 'Loren Issacov', 'lissacovz@cpanel.net', 'allocated'),
(71, 'paper31', 'Loren Issacov', 'lissacovz@cpanel.net', 'allocated'),
(72, 'paper53', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 'allocated'),
(73, 'paper19', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 'allocated'),
(74, 'paper83', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 'allocated'),
(75, 'paper90', 'Roselin Vasilyevski', 'rvasilyevski10@prweb.com', 'allocated'),
(76, 'paper59', 'Jacintha Simanek', 'jsimanek13@blogs.com', 'allocated'),
(77, 'paper61', 'Jacintha Simanek', 'jsimanek13@blogs.com', 'allocated'),
(78, 'paper64', 'Jacintha Simanek', 'jsimanek13@blogs.com', 'allocated'),
(79, 'paper50', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(80, 'paper95', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(81, 'paper87', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(82, 'paper32', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(83, 'paper4', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(84, 'paper14', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(85, 'paper45', 'Mikaela MacNeilley', 'mmacneilley1e@woothemes.com', 'allocated'),
(86, 'paper74', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 'allocated'),
(87, 'paper13', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 'allocated'),
(88, 'paper7', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 'allocated'),
(89, 'paper46', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 'allocated'),
(90, 'paper33', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 'allocated'),
(91, 'paper95', 'Calv Itzhaiek', 'citzhaiek1j@eventbrite.com', 'allocated'),
(92, 'paper12', 'Orton Cordeix', 'ocordeix1l@unesco.org', 'allocated'),
(93, 'paper16', 'Orton Cordeix', 'ocordeix1l@unesco.org', 'allocated'),
(94, 'paper45', 'Orton Cordeix', 'ocordeix1l@unesco.org', 'allocated'),
(95, 'paper22', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', 'allocated'),
(96, 'paper43', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', ''),
(97, 'paper45', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', 'allocated'),
(98, 'paper65', 'Rawley Haighton', 'rhaighton1n@theatlantic.com', 'allocated'),
(99, 'paper13', 'Keeley Tayspell', 'ktayspell1s@patch.com', 'allocated'),
(100, 'paper41', 'Keeley Tayspell', 'ktayspell1s@patch.com', ''),
(101, 'paper39', 'Keeley Tayspell', 'ktayspell1s@patch.com', ''),
(102, 'paper13', 'Wilbur Lochhead', 'wlochhead1v@ustream.tv', 'allocated'),
(103, 'paper25', 'Wilbur Lochhead', 'wlochhead1v@ustream.tv', 'allocated'),
(104, 'paper73', 'Artur Spollen', 'aspollen1y@smh.com.au', ''),
(105, 'paper96', 'Artur Spollen', 'aspollen1y@smh.com.au', ''),
(106, 'paper13', 'Sayre Niblo', 'sniblo26@usatoday.com', 'allocated'),
(107, 'paper28', 'Sayre Niblo', 'sniblo26@usatoday.com', 'allocated'),
(108, 'paper99', 'Aubine Sly', 'asly28@bluehost.com', ''),
(109, 'paper15', 'Lari Dowsing', 'ldowsing2b@uol.com.br', ''),
(110, 'paper95', 'Lari Dowsing', 'ldowsing2b@uol.com.br', 'allocated'),
(111, 'paper28', 'Patrick Shawl', 'pshawl2i@addtoany.com', 'allocated'),
(112, 'paper82', 'Patrick Shawl', 'pshawl2i@addtoany.com', ''),
(113, 'paper97', 'Emery Iorizzo', 'eiorizzo2k@free.fr', 'allocated'),
(116, 'test', 'Violante Jills', 'vjills5@skyrock.com', '');

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
  MODIFY `account_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- 使用表AUTO_INCREMENT `account_profile`
--
ALTER TABLE `account_profile`
  MODIFY `profile_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- 使用表AUTO_INCREMENT `bidwinner`
--
ALTER TABLE `bidwinner`
  MODIFY `winnerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- 使用表AUTO_INCREMENT `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- 使用表AUTO_INCREMENT `papersbid`
--
ALTER TABLE `papersbid`
  MODIFY `biddingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

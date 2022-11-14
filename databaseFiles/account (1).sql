-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-11-14 11:05:09
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
(80, 'is5NHGy7', 'Abelard Insworth', 'F', '78', '99726992', 'ainsworth27@tripod.com', 'active'),
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
(100, 'i4bzNQXPHMb', 'Christin Govenlock', 'M', '61', '99285705', 'cgovenlock2r@meetup.com', 'active');

--
-- 转储表的索引
--

--
-- 表的索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

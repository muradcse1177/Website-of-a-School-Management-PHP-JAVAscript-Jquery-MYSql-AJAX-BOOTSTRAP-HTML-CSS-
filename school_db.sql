-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2014 at 10:00 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `name`, `post`) VALUES
(1, 'ami', 'lllll'),
(2, 'sir', 'head'),
(3, 'raju', 'kerani'),
(4, 'jjj', 'llll'),
(5, 'kiii', 'llllllllll'),
(6, 'fahim', 'sir'),
(7, 'saffff', 'ttttt');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `brth` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `edu` varchar(15) NOT NULL,
  `pn_num` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cmt` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `st_name`, `brth`, `sex`, `edu`, `pn_num`, `email`, `cmt`, `category`) VALUES
(5, 'gfgfg', 'gfgf', 'gfg', 'gdfgd', 'fgfdgfdg', 'dfgdfgfd', 'fgfdgfd', 'fgdfg', 'parents'),
(31, 'murad', '', '2014-03-10', 'male', 'Graduate', '01929877307', 'ghgh@gmail.com', 'uuuu', 'student'),
(32, 'dgfdtydf', '', '2014-03-03', 'male', 'Graduate', '01828737122', 'fddgdg@gmail.com', 'ggfgdf', 'alumini');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE IF NOT EXISTS `financial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topics` varchar(200) NOT NULL,
  `income` int(20) NOT NULL,
  `expence` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `topics`, `income`, `expence`) VALUES
(2, 'rtrtre', 200, 6000),
(3, 'DSFEFD', 555, 2200);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `link`, `category`) VALUES
(22, 'upload/81396013897Bangla love sex.3gp', 'video'),
(25, 'upload/81396026275IMG_20140105_193358.JPG', 'image'),
(26, 'upload/261396254493Desh (2).mp4', 'video'),
(27, 'upload/261396254517images12.jpg', 'image'),
(28, 'upload/261396254533Capture.PNG', 'image'),
(29, 'upload/261396254553uu.jpg', 'image'),
(30, 'upload/261396254579556217_238575689579223_202483521_n.jpg', 'image'),
(31, 'upload/261396254611images (5).jpg', 'image'),
(32, 'upload/261396254613images (5).jpg', 'image'),
(33, 'upload/81396363294Desh (2).mp4', 'video'),
(34, 'upload/81396363323Bangla love sex.3gp', 'video');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `notice` varchar(400) NOT NULL,
  `file` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `notice`, `file`, `category`) VALUES
(33, 'sdsghdfdghd', 'fdsfsdfa', '', 'st_financial'),
(35, 'hhhhhhhhhhhhhhh', 'iiiiiiiiiiiiiiiiiiiiiiiiiiii', 'http://localhost/MyWebsite/upload/261396253865New Microsoft Word Document.docx', 'notice'),
(36, 'dfgfdgfg', 'gfgfcgf', 'http://localhost/MyWebsite/upload/261396253904New Microsoft Word Document.docx', 'notice'),
(37, 'ffgfh', 'hhjjhj', 'http://localhost/MyWebsite/upload/261396254271Alumini.php', 'notice'),
(38, 'ygujhgj', 'hjjhjh', 'http://localhost/MyWebsite/upload/261396254295Capture.PNG', 'notice'),
(44, 'eee', 'eeee', 'http://localhost/MyWebsite/upload/81396411171New Microsoft Word Document.docx', 'articles'),
(45, 'ALUMINI', 'FDSSSSSSSSSSSSAFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFDFGDSFREFESFDSSSSSSSSSSSSSSS', '', 'alumini'),
(46, 'ERFEF', 'DDSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS VFHTYRTETWERWEDWSDSERT', 'http://localhost/MyWebsite/upload/81396443628internet programming lab project 1107001.docx', 'annual'),
(48, 'REDREREREW', 'RERFGYHTUYYYYYYYYYYYYYYYYUYTRTERTTTTTTTTTTTTTTTTTWETEW', 'http://localhost/MyWebsite/upload/81396443966internet programming lab project 1107001.docx', 'cultural'),
(49, 'DEWSREWREWWEREWR', 'EWFEFDFDFDFRETRETERTERTRE', 'http://localhost/MyWebsite/upload/81396444065internet programming lab project 1107001.docx', 'examination'),
(50, 'WQQQQQQQQQQQQQQQQQQEEEEEEEEEQ', 'QQQQQQEWQQQQQQQQQQQQWEEE', 'http://localhost/MyWebsite/upload/81396444161internet programming lab project 1107001.docx', 'job'),
(51, 'SWASADSADASEDW', 'EDWDDSADSADASDASDASWEWQESA', 'http://localhost/MyWebsite/upload/81396444281internet programming lab project 1107001.docx', 'result'),
(52, 'SADAEDEWAEQWERWQ', 'WEWQEWEEEEEEEDDDDDDDDDDDDDDDDDDDDAAAAAAAAAAAAA', 'http://localhost/MyWebsite/upload/81396444412internet programming lab project 1107001.docx', 'research'),
(53, 'TRRYTRYRTY', 'RYRDDDDDDDDDDDDDDRFGFGDFGDRTGRTRETERTWERQWE', 'http://localhost/MyWebsite/upload/81396444490internet programming lab project 1107001.docx', 'sports'),
(54, 'WQQ', 'SAXADSFSDGREEEESSSSSSSSSSSSS', 'http://localhost/MyWebsite/upload/81396444578~$ternet programming lab project 1107001.docx', 'academic'),
(55, 'notice', ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus', 'http://localhost/MyWebsite/upload/81396459564internet programming lab project 1107001.docx', 'notice');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `marks` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `roll`, `marks`, `category`) VALUES
(4, 'DFSFDG', 10255, 75, 'six'),
(5, 'DFSFDG', 1111, 236, 'six'),
(6, 'DDJDFDUFSDJKUF', 342423, 236, 'seven'),
(7, 'erewrew', 1111, 45, 'eight'),
(8, 'FAHGAYHAG', 12356, 96, 'nine'),
(9, 'DSSFS', 25, 96, 'ten');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `Father` varchar(50) NOT NULL,
  `Mother` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `roll`, `Father`, `Mother`, `village`, `post`, `category`) VALUES
(7, 'DDJDFDUFSDJKUF', 10255, 'DSFFD', 'FDSFDS', 'gfhgfhfgh', 'HDUSIFF', 'six'),
(8, 'DFSFDG', 10255, 'FDDDGD', 'DFGDFGD', 'gfjhyhgf', 'FHDHGFJHFG', 'seven'),
(9, 'DDJDFDUFSDJKUF', 1111, 'FDDDGD', 'DFGDFGD', 'gfhgfhfgh', 'fgffhhhdgdfs', 'eight'),
(10, 'DDJDFDUFSDJKUF', 10255, 'DSFFD', 'DEUY', 'gfhgfhfgh', 'DFDSFD', 'ten'),
(11, 'DDJDFDUFSDJKUF', 10255, 'FDDDGD', 'DFGDFGD', 'gfhgfhfgh', 'fgffhhhdgdfs', 'nine'),
(12, 'SDSFSFDS', 1122, 'HGFDGFDG', 'DFGFDGDF', 'FDGFGFD', 'FDGFDGFD', 'seven');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT '',
  `approve` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `userPassword`, `category`, `approve`) VALUES
(1, 'Admin', 'asdf1234', 'teacher', 1),
(2, 'st_ahmed', '123456789', 'student', 1),
(8, 'raju', '1234', 'teacher', 1),
(15, 'jami', '789456', 'student', 1),
(24, 'sir', '4567', 'teacher', 1),
(26, 'murad', 'murad', 'teacher', 1),
(27, 'fuad', '4567', '', 0),
(28, 'saba', '3214', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

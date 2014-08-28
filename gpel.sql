-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2014 at 07:08 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gpel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplishments`
--

CREATE TABLE IF NOT EXISTS `accomplishments` (
  `sysid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`sysid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `accomplishments`
--

INSERT INTO `accomplishments` (`sysid`, `name`, `heading`, `content`) VALUES
(1, 'lorem1', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet'),
(2, 'lorem2', 'Sit atmet, consectetur lorem', 'Sit atmet, consectetur lorem Sit atmet, consectetur lorem Sit atmet, consectetur lorem Sit atmet, consectetur lorem Sit atmet, consectetur lorem Sit atmet, consectetur lorem Sit atmet, consectetur lorem'),
(3, 'lorem3', 'Consectetur adispicing dolor', 'Consectetur adispicing dolor Consectetur adispicing dolor Consectetur adispicing dolor Consectetur adispicing dolor Consectetur adispicing dolor'),
(4, 'lorem4', 'Lipsuim dolor amet adpispicing', 'Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing'),
(5, 'lorem5', 'Lipsuim dolor amet adpispicing', 'Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing Lipsuim dolor amet adpispicing '),
(6, 'lorem6', 'ipsum ipsum ipsum', 'ipsum anadi  ipsumipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum '),
(7, 'firstplace', 'Second prize in energy conservation', 'Our ED &amp; CEO Mr HS Bhaskara receiving award from Honorable Energy Minister of Govt of Karnataka for best energy conservation in textile sector on 14/12/2011 .\r\n(Secured first prize in energy conservation)');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `sysid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'generates unique id for every upload',
  `name` varchar(100) NOT NULL,
  `areaofinterest` varchar(1000) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `sysid` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobileno` bigint(13) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sysid`, `name`, `mobileno`, `emailid`, `message`) VALUES
(11, 'sir', 2147483647, 'ady.rast@gmail.com', 'jiwdjiw'),
(10, 'sir', 0, 'sir@gmail.com', 'sirji'),
(22, 'ANADI RASTOGI', 8182838485, 'ady.rast@gmail.com', 'jukling'),
(6, 'Anadi Ras', 9090909, 'abc@gmail.com', 'djdnf'),
(21, 'gandhar', 9090909090, 'desai@gmail.com', 'heya '),
(12, 'asj', 2147483647, 'ady.rast@gmail.com', 'sdkdkjs'),
(15, 'sir', 8989891211, 'sir@gmail.com', 'hey '),
(19, 'ANADI RASTOGI', 7070707070, 'ady.rast@gmail.com', 'heya '),
(20, 'nitin', 9090909090, 'hey@gmail.com', 'dafjkdf');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE IF NOT EXISTS `count` (
  `name` varchar(30) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`name`, `hits`) VALUES
('noofvisitors', 735);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `sysid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'generates unique number for every feedback',
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sysid`, `name`, `emailid`, `message`) VALUES
(1, 'heya', 'anadi@gmail.com', 'abcdf'),
(3, 'ANADI RASTOGI', 'ady.rast@gmail.com', 'anqadi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sys_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`sys_id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sys_id`, `user`, `password`) VALUES
(1, 'admin', '$2a$10$1qAz2wSx3eDc4rFv5tGb5esCgDuHHeECLg/wE3TcnvJliPWZGiyae'),
(2, 'monitor', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eoSGjkMjVPZgvygJt6jnrPLd1FZFfDbq'),
(3, 'moderator', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eJVywT9/mKsH5nXp8MQf3nEk2LLDv4t.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `sysid` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `heading` mediumtext NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`sysid`),
  UNIQUE KEY `uniquename` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sysid`, `name`, `heading`, `content`) VALUES
(1, 'news1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis adispicing amet sit vestibulum quis turpis adispicing amet sit .');

-- --------------------------------------------------------

--
-- Table structure for table `searchengine`
--

CREATE TABLE IF NOT EXISTS `searchengine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `searchengine`
--

INSERT INTO `searchengine` (`id`, `title`, `description`, `url`, `keywords`) VALUES
(1, 'GPEL - About Us', 'Gokak Power and Energy Limited(GPEL) is a subsidiary of Gokak Textiles Limited. It is one of the oldest hydroelectric power generating plants in the continent and proudly the first plant to generate hydroelectric power in Asia.', 'aboutus/aboutus.html', 'about us gpel history oldest hydroelectric '),
(2, 'investors', 'Our Investors ', 'investors/investors.html', 'investors promoters collaborators invest promote collaborate'),
(3, 'GPEL-Our Accomplishments', 'First prize in energy conservation\r\n\r\nOur ED & CEO Mr HS Bhaskara receiving award from Honorable Energy Minister of Govt of Karnataka for best energy conservation in textile sector on 14/12/2011 . (Secured first prize in energy conservation)', 'accomplishment/accomplishment.php', 'prize winner award energy minister conservation ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

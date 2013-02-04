-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2013 at 04:53 PM
-- Server version: 5.1.63-0ubuntu0.11.04.1
-- PHP Version: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jatra`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE IF NOT EXISTS `banner_image` (
  `id` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `image`, `create_date`) VALUES
('BN-001', 'BN-001.jpg', '2012-06-17'),
('BN-002', 'BN-002.jpg', '2012-06-17'),
('BN-003', 'BN-003.jpg', '2012-06-17'),
('BN-004', 'BN-004.jpg', '2012-06-17'),
('BN-005', 'BN-005.jpg', '2012-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `data_report`
--

CREATE TABLE IF NOT EXISTS `data_report` (
  `rp_id` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file` varchar(30) NOT NULL,
  `ins_date` date NOT NULL,
  PRIMARY KEY (`rp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventcal`
--

CREATE TABLE IF NOT EXISTS `eventcal` (
  `id` varchar(20) NOT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTitle` varchar(100) DEFAULT NULL,
  `eventContent` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcal`
--

INSERT INTO `eventcal` (`id`, `eventDate`, `eventTitle`, `eventContent`) VALUES
('EV-004', '2010-08-15', 'dfsdg', '<p>sgfsgf</p>'),
('EV-003', '2010-08-22', 'asd', '<p>asd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `global_set`
--

CREATE TABLE IF NOT EXISTS `global_set` (
  `gs_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` varchar(300) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(300) CHARACTER SET utf8 NOT NULL,
  `copyright` varchar(300) CHARACTER SET utf8 NOT NULL,
  `author` varchar(300) CHARACTER SET utf8 NOT NULL,
  `email_m` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Language` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Charset` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`gs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `global_set`
--

INSERT INTO `global_set` (`gs_id`, `title`, `email`, `description`, `keywords`, `copyright`, `author`, `email_m`, `Language`, `Charset`, `date`) VALUES
(1, 'JATRA BANGLADESH', '', 'Jatra Bangladesh', 'Jatra Bangladesh', 'Jatra Bangladesh', 'Jatra Bangladesh', '', 'EN', 'UTF-8', '2013-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` varchar(20) NOT NULL,
  `menu_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `parent_menu_id` varchar(20) NOT NULL,
  `create_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_gallery` tinyint(4) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `content`, `parent_menu_id`, `create_date`, `is_active`, `is_gallery`, `order`) VALUES
('PG-001', 'Home', '<li>\r\n<h3>We believe in bikes            /</h3>\r\n<p>When Trek began in 1976, our mission was simple: Build the   best bikes in the world. Today, we&rsquo;ve added to our mission: Help the   world use the bicycle as a simple solution to complex problems.</p>\r\n</li>\r\n<li>\r\n<h3>Gear            /</h3>\r\n<p>Bontrager has tons of great gear, from helmets to wheels to   water bottle cages, that will make your ride safer, more comfortable,   more convenient, and more fun. Gear up for a better ride!</p>\r\n</li>\r\n<li>\r\n<h3>Register your new Trek            /</h3>\r\n<p>Registration is a quick and easy way to protect your   investment. It serves as proof of ownership for warranty purposes, and   provides a record of the serial number in case your bike is ever lost or   stolen.</p>\r\n</li>\r\n<li>\r\n<h3>Email updates            /</h3>\r\n<p>Sign up for email updates, and we''ll deliver special offers and new product updates straight to your inbox.</p>\r\n</li>', '0', '2012-06-02', 1, 0, 0),
('PG-002', 'Clothing', '<p>asfas fasf a fdsf</p>', '0', '2012-06-02', 1, 1, 1),
('PG-003', 'Accessories', '', '0', '2012-06-02', 1, 1, 2),
('PG-004', 'Parts', '', '0', '2012-06-03', 1, 1, 3),
('PG-005', 'Male', '<p>asd</p>', 'PG-002', '2013-02-04', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` varchar(20) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `create_date`, `is_active`) VALUES
('NW-001', 'Test', '<p>Test News.</p>', '2012-06-02', 0),
('NW-002', 'Test News 2', '<p>dafsdf sdf sd f</p>', '2012-06-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` varchar(20) NOT NULL,
  `album_id` varchar(20) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `pic_dir` varchar(25) NOT NULL,
  `web_url` varchar(200) NOT NULL,
  `ins_date` date NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `album_id`, `title`, `description`, `pic_dir`, `web_url`, `ins_date`) VALUES
('PH-002', 'AL-001', 'Test2', '<p>dsd</p>', 'PH-002.jpg', 'http://www.bokul.com', '2012-06-02'),
('PH-001', 'AL-001', 'Test', '<p>Test</p>', 'PH-001.jpg', 'http://www.google.com', '2012-06-02'),
('PH-003', 'AL-002', 'Test3', '<p>asa</p>', 'PH-003.jpg', 'http://www.google.com', '2012-06-02'),
('PH-004', 'AL-001', 'Test3', '<p>kjnkjf sdf jkdslf lsd gjdfgd fh</p>', 'PH-004.jpg', 'http://www.trek.com', '2012-06-03'),
('PH-005', 'AL-001', 'Top Fual', '<p>dsg fdsh sgfh</p>', 'PH-005.jpg', 'http://www.trekbikes.com/int/en/bikes/mountain/cross_country/top_fuel/top_fuel_9_9_ssl/#', '2012-06-03'),
('PH-006', 'AL-004', 'Test3', '<p>sdg dfg dfg</p>', 'PH-006.jpg', '', '2012-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `photo_album`
--

CREATE TABLE IF NOT EXISTS `photo_album` (
  `album_id` varchar(20) NOT NULL,
  `album_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `menu_id` varchar(20) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_album`
--

INSERT INTO `photo_album` (`album_id`, `album_name`, `menu_id`, `description`, `create_date`, `status`) VALUES
('AL-001', 'Trek', 'PG-002', 'We''re always inspired by what our riders do with their bikes but Pilar at The Tired Press has taken it to the next level. A Trek Belleville outfitted into a mobile printing press?! Pilar, our hats are off to you and if anybody in Portland, Maine can hook us up with some of her postcards, we''ll certainly reciprocate.', '2012-06-02', 0),
('AL-002', 'MERIDA BIKES', 'PG-002', 'Merida was founded in Taiwan in 1972 and is by now well known for its German enigineered high-quality bikes. Merida offers both off- and on-road bikes as well as leisure and urban solutions.', '2012-06-02', 0),
('AL-003', 'Bianchi', 'PG-002', 'Italian bicycle manufacturer celebrating 127 years of cycling history and racing triumphs', '2012-06-02', 0),
('AL-004', 'Test', 'PG-004', 'sdgsdg df', '2012-06-03', 0),
('AL-005', 'test', 'PG-005', 'sdfsdfsdf', '2013-02-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registered_bikes`
--

CREATE TABLE IF NOT EXISTS `registered_bikes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ins_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registered_bikes`
--

INSERT INTO `registered_bikes` (`id`, `name`, `brand`, `sl_no`, `mobile_no`, `email`, `ins_date`) VALUES
(6, '', '', '', '', '', '2012-06-12'),
(5, 'asdasd', 'asdasd', 'asdasd', 'asdasdas', 'dasdasd', '2012-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

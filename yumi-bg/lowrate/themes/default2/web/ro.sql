-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2010 at 12:09 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_content`
--

CREATE TABLE IF NOT EXISTS `admin_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(90) NOT NULL,
  `date` date NOT NULL,
  `subject` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `admin_content`
--

INSERT INTO `admin_content` (`id`, `user_id`, `date`, `subject`, `content`) VALUES
(18, 'Mercurial', '2010-06-13', 'TEST', 'TESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>\r\nTESTTESTTESTTESTTESTTEST<BR>'),
(19, 'Mercurial', '2010-06-13', '', '                hhhhhh'),
(20, 'torp3d0', '2010-06-13', 'Reymark', 'suya'),
(17, 'Mercurial', '2010-06-13', '', 'Server has officialy opened!');

-- --------------------------------------------------------

--
-- Table structure for table `cr_content`
--

CREATE TABLE IF NOT EXISTS `cr_content` (
  `content_id` int(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr_content`
--

INSERT INTO `cr_content` (`content_id`, `content`) VALUES
(1, '&lt;h3&gt;\n	&lt;b&gt;&lt;b&gt;Welcome to Internation Ragnarok Online&lt;/b&gt;&lt;/b&gt;&lt;/h3&gt;\n&lt;p&gt;\n	&lt;b&gt;&lt;b&gt;Welcome to InRO for the most ultimate Ragnarok experience.Every players opinion is apreciated and every suggestion is eagerly heard. To make it more special i have hand picked a experienced and matured Staffs who would be assisting you all the time. Join us and give us your thoughts on all things RO through the forum or in-game. We take every suggestion and idea very seriously. So what are you waiting for ?&lt;/b&gt;&lt;/b&gt;&lt;/p&gt;'),
(2, ''),
(3, ''),
(6, '&lt;div style=&quot;padding-bottom: 20px; width: 402px; float: left; text-align: center;&quot;&gt;\n	&lt;p&gt;\n		&lt;span style=&quot;font-size: 20px; font-weight: bold; margin-bottom: 16px; font-style: italic; font-family: times New Roman ! important;&quot;&gt;&amp;ldquo;The Guest Blogger&amp;rdquo;&lt;/span&gt; &lt;br /&gt;\n		&lt;br /&gt;\n		&lt;span style=&quot;color: rgb(128, 128, 128); font-style: italic; font-weight: bold;&quot;&gt;Cross Promotion with popular Fashion Bloggers&lt;/span&gt;&lt;/p&gt;\n	&lt;p&gt;\n		Bloggers are an integral part of the fashion&lt;br /&gt;\n		industry. They have become platforms for&lt;br /&gt;\n		consumers to see trends executed in unique ways,&lt;br /&gt;\n		as well as receive almost instantaneous industry&lt;br /&gt;\n		news. The Guest Blogger will be a fashion blogger&lt;br /&gt;\n		invited by &lt;span style=&quot;color: rgb(128, 128, 128); font-weight: bold;&quot;&gt;SAINTS + SIRENS.com&lt;/span&gt; to do a&lt;br /&gt;\n		photo shoot for a retail store. For a store to be&lt;br /&gt;\n		considered for this opportunity, they must have&lt;br /&gt;\n		written an order the previous month. The blogger&lt;br /&gt;\n		will choose his/her favorite pieces from the styles&lt;br /&gt;\n		purchased. This will create a unique selling point&lt;br /&gt;\n		for the line as well as generate press towards the&lt;br /&gt;\n		chosen store.&lt;/p&gt;\n&lt;/div&gt;'),
(4, ''),
(5, '&lt;p&gt;\n	As a member of &lt;span style=&quot;color: rgb(128, 128, 128); font-weight: bold;&quot;&gt;SAINTS + SIRENS.com&lt;/span&gt;, the ultimate benefit buyers receive is a customized and convenient wholesale buying experience. In case that isnt enough, the marketing team at &lt;span style=&quot;color: rgb(128, 128, 128); font-weight: bold;&quot;&gt;SAINTS + SIRENS.com&lt;/span&gt; has also designed specific marketing tactics for participating buyers. They will be eligible to receive certain perks aimed and designed to drive more traffic, market their store, and/or create more excitement around the line they purchased. Below are a few of the benefit plans buyers will be eligible to receive through their membership.&lt;/p&gt;'),
(7, '&lt;div style=&quot;padding-bottom: 20px; width: 402px; float: right; text-align: center;&quot;&gt;\n	&lt;span style=&quot;font-size: 20px; font-weight: bold; margin-bottom: 16px; font-style: italic; font-family: times New Roman ! important;&quot;&gt;&amp;ldquo;Ever Heard of Gift with Purchase?&amp;rdquo;&lt;/span&gt; &lt;br /&gt;\n	&lt;br /&gt;\n	&lt;span style=&quot;color: rgb(128, 128, 128); font-style: italic; font-weight: bold;&quot;&gt;Frequent Buyer Appreciation&lt;/span&gt;&lt;br /&gt;\n	&lt;br /&gt;\n	&lt;p&gt;\n		By the fifth re-order of a collection at the&lt;br /&gt;\n		required minimum, buyer receives a gift of their&lt;br /&gt;\n		choice with a max dollar value from the&lt;br /&gt;\n		collection given to them by the designer.&lt;br /&gt;\n		(Time restrictions apply.)&lt;/p&gt;\n	&lt;p&gt;\n		...and there&amp;#39;s more where that came from!&lt;/p&gt;\n&lt;/div&gt;'),
(10, '&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-size: 11px; color: rgb(128, 128, 128);&quot; width=&quot;887&quot;&gt;\n	&lt;tbody&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				March- Spring/ Summer/ intro to Fall 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td width=&quot;140&quot;&gt;\n				19-23&lt;/td&gt;\n			&lt;td width=&quot;179&quot;&gt;\n				Fri-Tues&lt;/td&gt;\n			&lt;td width=&quot;235&quot;&gt;\n				LA Market @ showroom&lt;/td&gt;\n			&lt;td width=&quot;331&quot;&gt;\n				Los Angeles&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				April&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td height=&quot;21&quot;&gt;\n				8-12&lt;/td&gt;\n			&lt;td&gt;\n				Thurs-Mon&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta Market&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				12-14&lt;/td&gt;\n			&lt;td&gt;\n				Mon-Wed&lt;/td&gt;\n			&lt;td&gt;\n				LA Majors Market&lt;/td&gt;\n			&lt;td&gt;\n				Los Angeles&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				May - Spring/ Summer/ intro to Fall 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				2-4&lt;/td&gt;\n			&lt;td&gt;\n				Sun-Tues&lt;/td&gt;\n			&lt;td&gt;\n				Accessories The Show&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				3-5&lt;/td&gt;\n			&lt;td&gt;\n				Mon-Wed&lt;/td&gt;\n			&lt;td&gt;\n				Accessories Circuit&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				3-5&lt;/td&gt;\n			&lt;td&gt;\n				Mon-Wed&lt;/td&gt;\n			&lt;td&gt;\n				Intermezzo&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				June - Summer immediates/ Fall 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				10-13&lt;/td&gt;\n			&lt;td&gt;\n				Thurs-Mon&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta Market&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				14-17&lt;/td&gt;\n			&lt;td&gt;\n				Mon-Thurs&lt;/td&gt;\n			&lt;td&gt;\n				LA Market @ showroom&lt;/td&gt;\n			&lt;td&gt;\n				Los Angeles&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				July - Summer immediates/ Fall 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				27-30&lt;/td&gt;\n			&lt;td&gt;\n				Tues-Fri&lt;/td&gt;\n			&lt;td&gt;\n				LA Market @ showroom&lt;/td&gt;\n			&lt;td&gt;\n				Los Angeles&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				August- Fall 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				1-3&lt;/td&gt;\n			&lt;td&gt;\n				Sun-Tues&lt;/td&gt;\n			&lt;td&gt;\n				Accessories The Show&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				1-3&lt;/td&gt;\n			&lt;td&gt;\n				Sun-Tues&lt;/td&gt;\n			&lt;td&gt;\n				Accessories Circuit&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				1-3&lt;/td&gt;\n			&lt;td&gt;\n				Sun-Tues&lt;/td&gt;\n			&lt;td&gt;\n				Intermezzo&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				19-23&lt;/td&gt;\n			&lt;td&gt;\n				Thurs-Mon&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta Market&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				September - Fall II/ Holiday 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				21-23&lt;/td&gt;\n			&lt;td&gt;\n				Tues-Thurs&lt;/td&gt;\n			&lt;td&gt;\n				Coterie&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				21-23&lt;/td&gt;\n			&lt;td&gt;\n				Tues-Thurs&lt;/td&gt;\n			&lt;td&gt;\n				Sole Commerce&lt;/td&gt;\n			&lt;td&gt;\n				New York&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td class=&quot;bold&quot; colspan=&quot;4&quot; style=&quot;padding-top: 10px; font-size: 14px;&quot;&gt;\n				October - Fall II/ Holiday/ Resort 2010&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				4-6&lt;/td&gt;\n			&lt;td&gt;\n				Mon-Wed&lt;/td&gt;\n			&lt;td&gt;\n				LA Majors Market&lt;/td&gt;\n			&lt;td&gt;\n				Los Angeles&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				14-18&lt;/td&gt;\n			&lt;td&gt;\n				Thurs-Mon&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta Market&lt;/td&gt;\n			&lt;td&gt;\n				Atlanta&lt;/td&gt;\n		&lt;/tr&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n				15-19&lt;/td&gt;\n			&lt;td&gt;\n				Fri-Tues&lt;/td&gt;\n			&lt;td&gt;\n				LA Market @ showroom&lt;/td&gt;\n			&lt;td&gt;\n				Los Angeles&lt;/td&gt;\n		&lt;/tr&gt;\n	&lt;/tbody&gt;\n&lt;/table&gt;'),
(8, '&lt;div style=&quot;padding-bottom: 20px; width: 402px; float: left; text-align: center;&quot;&gt;\n	&lt;span style=&quot;font-size: 20px; font-weight: bold; margin-bottom: 16px; font-style: italic; font-family: times New Roman ! important;&quot;&gt;&amp;ldquo;Can we PLEASE have Seconds?!&amp;rdquo;&lt;/span&gt; &lt;br /&gt;\n	&lt;br /&gt;\n	&lt;span style=&quot;color: rgb(128, 128, 128); font-style: italic; font-weight: bold;&quot;&gt; Rewards for re-ordering a Designer&lt;/span&gt;&lt;br /&gt;\n	&lt;br /&gt;\n	&lt;p&gt;\n		After the first re-order of a line, there will be&lt;br /&gt;\n		online acknowledgement of the consistent buying&lt;br /&gt;\n		that directs consumer traffic towards the store,&lt;br /&gt;\n		either from the designer or from&lt;br /&gt;\n		&lt;span style=&quot;color: rgb(128, 128, 128); font-weight: bold;&quot;&gt;SAINTS + SIRENS.com&lt;/span&gt; . This will be done&lt;br /&gt;\n		via online social media (blog, Twitter,&lt;br /&gt;\n		Facebook, etc).&lt;br /&gt;\n		Ex. &amp;quot;&lt;span style=&quot;text-decoration: underline;&quot;&gt;(store name)&lt;/span&gt; can&amp;#39;t get enough of&lt;br /&gt;\n		Magnes Sisters Handbags! Visit their store at&lt;br /&gt;\n		___________!&amp;quot;&lt;/p&gt;\n&lt;/div&gt;'),
(9, '&lt;div style=&quot;padding-bottom: 20px; width: 402px; float: right; text-align: center;&quot;&gt;\n	&lt;span style=&quot;font-size: 20px; font-weight: bold; margin-bottom: 16px; font-style: italic; font-family: times New Roman ! important;&quot;&gt;&amp;ldquo;In The Trunk&amp;rdquo;&lt;/span&gt; &lt;br /&gt;\n	&lt;br /&gt;\n	&lt;span style=&quot;color: rgb(128, 128, 128); font-style: italic; font-weight: bold;&quot;&gt; Trunk Show for new lines&lt;/span&gt;&lt;br /&gt;\n	&lt;br /&gt;\n	&lt;p&gt;\n		When a new line joins the website, stores will be&lt;br /&gt;\n		alerted to the addition. The first store to purchase&lt;br /&gt;\n		the line at their required minimums will have the&lt;br /&gt;\n		option of using their retail space to host the&lt;br /&gt;\n		line&amp;#39;s trunk show. &lt;span style=&quot;color: rgb(128, 128, 128); font-weight: bold;&quot;&gt;SAINTS + SIRENS.com&lt;/span&gt;&lt;br /&gt;\n		will promote the event and the retail store will&lt;br /&gt;\n		promote to its consumers as well. There will be&lt;br /&gt;\n		different perks offered, depending on the designer,&lt;br /&gt;\n		including, but not limited to, percentage of sales&lt;br /&gt;\n		made during event, merchandise giveaways,&lt;br /&gt;\n		designer appearance, style sessions, etc. This will&lt;br /&gt;\n		direct foot traffic to the retail store and create&lt;br /&gt;\n		excitement around the collection(s) purchased.&lt;/p&gt;\n&lt;/div&gt;'),
(11, '&lt;p&gt;\n	&lt;b&gt;Write to us at:&lt;/b&gt; &lt;br /&gt;\n	CareGiver, Inc.&lt;br /&gt;\n	123 Main St.&lt;br /&gt;\n	Tampa, FL 12345&lt;br /&gt;\n	&lt;br /&gt;\n	&lt;b&gt;Call us:&lt;/b&gt;&lt;br /&gt;\n	(800) 123-45671&lt;/p&gt;'),
(12, '&lt;p&gt;\n	torp3d0@cyber-wizard.com&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `p_administrator`
--

CREATE TABLE IF NOT EXISTS `p_administrator` (
  `administrator_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_administrator`
--

INSERT INTO `p_administrator` (`administrator_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE IF NOT EXISTS `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `part` text NOT NULL,
  `content` text NOT NULL,
  `extra_field` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `part`, `content`, `extra_field`) VALUES
(1, 'Content', '&lt;p&gt;\n	&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;The quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dogThe quick brown fox jump over the lazt dog&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', '&lt;img border=&quot;0&quot; height=&quot;115px&quot; width=&quot;602px&quot; src=&quot;http://localhost/inter-ro/images/pvp.png&quot;&gt;'),
(2, 'welcome', '&lt;h3 style=&quot;&quot;&gt;\n	&lt;b&gt;&lt;b&gt;Welcome to Internation Ragnarok Online&lt;/b&gt;&lt;/b&gt;&lt;/h3&gt;\n&lt;p&gt;\n	&lt;b&gt;&lt;b&gt;Welcome to InRO for the most ultimate Ragnarok experience.Every players opinion is apreciated and every suggestion is eagerly heard. To make it more special i have hand picked a experienced and matured Staffs who would be assisting you all the time. Join us and give us your thoughts on all things RO through the forum or in-game. We take every suggestion and idea very seriously. So what are you waiting for ?&lt;/b&gt;&lt;/b&gt;&lt;/p&gt;', ''),
(3, 'Staff', '&lt;h2 style=&quot;text-align: center;&quot;&gt;\n	&lt;span style=&quot;color: rgb(218, 165, 32);&quot;&gt;Staff&lt;br /&gt;\n	&lt;/span&gt;&lt;/h2&gt;\n&lt;p&gt;\n	Web Programmer :&lt;strong&gt; &lt;span style=&quot;color: rgb(0, 255, 255);&quot;&gt;Torp3d0&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;\n	Game Scripter/Developer: &lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt;&lt;strong&gt;Mercurial&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

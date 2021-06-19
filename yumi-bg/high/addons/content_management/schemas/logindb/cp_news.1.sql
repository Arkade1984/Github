DROP TABLE IF EXISTS `cp_news`;
CREATE TABLE `cp_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) NOT NULL,
  `news_body` text NOT NULL,
  `news_author` varchar(100) NOT NULL,
  `news_dateposted` datetime NOT NULL,
  `news_class` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1
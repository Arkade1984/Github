CREATE TABLE `cp_banners` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `hours` tinyint(2) NOT NULL DEFAULT '1',
  `amount` int(11) NOT NULL DEFAULT '1',
  `vote_url` varchar(255) NOT NULL DEFAULT '',
  `image_url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

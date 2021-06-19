CREATE TABLE IF NOT EXISTS `cp_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_path` varchar(100) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `page_body` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM 
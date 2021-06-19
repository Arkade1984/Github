CREATE TABLE `cp_votelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_id` int(11) NOT NULL DEFAULT '0',
  `account_id` int(11) NOT NULL DEFAULT '0',
  `type` enum('V','I','D','R') NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '1',
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `cp_vpoints` (
  `account_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '1',
  `redeemed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

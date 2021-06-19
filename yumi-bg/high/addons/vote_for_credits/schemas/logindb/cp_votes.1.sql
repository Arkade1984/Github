CREATE TABLE `cp_votes` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`banner_id` INT UNSIGNED NOT NULL ,
`account_id` INT UNSIGNED NOT NULL ,
`credits` INT UNSIGNED NOT NULL ,
`vote_date` DATETIME NOT NULL ,
`vote_ip` VARCHAR( 15 ) NOT NULL ,
INDEX ( `banner_id` , `account_id` )
) ENGINE = MYISAM
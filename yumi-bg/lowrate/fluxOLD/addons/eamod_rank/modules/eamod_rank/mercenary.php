<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Mercenary Ranking';
	
	$sword = "
		SELECT
			`mercenary_owner`.`sword_faith`, `char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`last_map`, `login`.`sex`, `guild`.`name` AS `gname`, `char`.`online`, `guild`.`guild_id`
		FROM
			`mercenary_owner` LEFT JOIN `char` ON `char`.`char_id` = `mercenary_owner`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `mercenary_owner`.`sword_faith` > '0'
		ORDER BY
			`mercenary_owner`.`sword_faith` DESC
		LIMIT 0, 15
	";
	
	$sth  = $server->connection->getStatement( $sword );
	$sth->execute();
	$sword = $sth->fetchAll();
	
	$spear = "
		SELECT
			`mercenary_owner`.`spear_faith`, `char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`last_map`, `login`.`sex`, `guild`.`name` AS `gname`, `char`.`online`, `guild`.`guild_id`
		FROM
			`mercenary_owner` LEFT JOIN `char` ON `char`.`char_id` = `mercenary_owner`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `mercenary_owner`.`spear_faith` > '0'
		ORDER BY
			`mercenary_owner`.`spear_faith` DESC
		LIMIT 0, 15
	";
	
	$sth  = $server->connection->getStatement( $spear );
	$sth->execute();
	$spear = $sth->fetchAll();
	
	$arch = "
		SELECT
			`mercenary_owner`.`arch_faith`, `char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`last_map`, `login`.`sex`, `guild`.`name` AS `gname`, `char`.`online`, `guild`.`guild_id`
		FROM
			`mercenary_owner` LEFT JOIN `char` ON `char`.`char_id` = `mercenary_owner`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `mercenary_owner`.`arch_faith` > '0'
		ORDER BY
			`mercenary_owner`.`arch_faith` DESC
		LIMIT 0, 15
	";
		
	$sth  = $server->connection->getStatement( $arch );
	$sth->execute();
	$arch = $sth->fetchAll();
?>
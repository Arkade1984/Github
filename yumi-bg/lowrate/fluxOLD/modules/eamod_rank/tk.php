<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Class Ranking';
	
	$query = "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`, `char`.`fame`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `char`.`class` = '4046' AND `char`.`fame` > 0
		ORDER BY
			`char`.`fame` DESC,
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	";
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
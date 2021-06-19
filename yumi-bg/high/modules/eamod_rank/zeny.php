<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Zeny Ranking';
	
	$query ="
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`last_map`, `login`.`sex`, `guild`.`name` AS `gname`, `char`.`zeny`, `guild`.`guild_id`
		FROM
			`char` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `char`.`zeny` > 100000
		ORDER BY
			`zeny` DESC
		LIMIT 0, 50
	";
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
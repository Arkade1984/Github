<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'MvP Ranking';
	
	$query = "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`last_map`, `login`.`sex`, `guild`.`name` AS `gname`, `global_reg_value`.`value`, `char`.`online`, `guild`.`guild_id`
		FROM
			`global_reg_value` LEFT JOIN `char` ON `char`.`char_id` = `global_reg_value`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`global_reg_value`.`str` = 'MVPRank' AND `global_reg_value`.`value` > '0' AND `login`.`state` = '0'
		ORDER BY
			`global_reg_value`.`value` + 0 DESC
		LIMIT 0, 30
	";
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
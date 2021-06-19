<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Class Ranking';
	$classes  = Flux::config('JobClasses')->toArray();
	$jobClass = $params->get('opt');
	$bind     = array();
	
	DEFINE('LADDER_ALL', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0'
		ORDER BY
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	");

	DEFINE('LADDER_JOB', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `char`.`class` = '%d'
		ORDER BY
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	");

	DEFINE('LADDER_LKPA', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND (`char`.`class` = '%d' OR `char`.`class` = '%d')
		ORDER BY
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	");
	
	$query = sprintf(LADDER_ALL);
	
	if ( $jobClass > 0 )
	{
		switch ($jobClass)
		{
			case 7:		$query = sprintf(LADDER_LKPA, $jobClass, 13); break;
			case 14:	$query = sprintf(LADDER_LKPA, $jobClass, 21); break;
			case 4008:	$query = sprintf(LADDER_LKPA, $jobClass, 4014); break;
			case 4015:	$query = sprintf(LADDER_LKPA, $jobClass, 4022); break;
			case 4030:	$query = sprintf(LADDER_LKPA, $jobClass, 4036); break;
			case 4037:	$query = sprintf(LADDER_LKPA, $jobClass, 4044); break;
			case 4047:	$query = sprintf(LADDER_LKPA, $jobClass, 4048); break;
			default:	$query = sprintf(LADDER_JOB, $jobClass); break;
		}
	}
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
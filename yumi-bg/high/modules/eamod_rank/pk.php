<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Pk Ranking';
	$option = $params->get('opt');
	$Rank = array(
		"Civilian",
		"Private",
		"Corporal",
		"Sergeant",
		"Master<br>Sergeant",
		"Sergeant<br>Major",
		"Knight",
		"Knight<br>Lieutenant",
		"Knight<br>Captain",
		"Knight<br>Champion",
		"Lieutenant<br>Commander",
		"Commander",
		"Marshal",
		"Field Marshal",
		"Grand Marshal",
	);
	
	function calc_rank($score)
	{
		$result = intval($score / 1000);
		if( $result > 14 )
			$result = 14;
		
		return $result;
	}
	
	DEFINE('PK_LADDER_ALL', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`, `char_pk`.`score`, `char_pk`.`kill_count`, `char_pk`.`death_count`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char_pk` LEFT JOIN `char` ON `char`.`char_id` = `char_pk`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `char_pk`.`score` > 0
		ORDER BY
			`char_pk`.`score` DESC,
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	");

	DEFINE('PK_LADDER_JOB', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`, `char_pk`.`score`, `char_pk`.`kill_count`, `char_pk`.`death_count`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char_pk` LEFT JOIN `char` ON `char`.`char_id` = `char_pk`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND `char`.`class` = '%d' AND `char_pk`.`score` > 0
		ORDER BY
			`char_pk`.`score` DESC,
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	");

	DEFINE('PK_LADDER_LKPA', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `char`.`account_id`, `char`.`last_map`, `char_pk`.`score`, `char_pk`.`kill_count`, `char_pk`.`death_count`,
			`guild`.`name` AS `gname`, `login`.`sex`, `guild`.`guild_id`
		FROM
			`char_pk` LEFT JOIN `char` ON `char`.`char_id` = `char_pk`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`login`.`state` = '0' AND (`char`.`class` = '%d' OR `char`.`class` = '%d') AND `char_pk`.`score` > 0
		ORDER BY
			`char_pk`.`score` DESC,
			`char`.`base_level` DESC,
			`char`.`base_exp` DESC,
			`char`.`job_level` DESC,
			`char`.`job_exp` DESC
		LIMIT 0, 30
	");
	
	$query = sprintf(PK_LADDER_ALL);
	
	if ( $option )
	{
		switch ( $option )
		{
			case 7:		$query = sprintf(PK_LADDER_LKPA, $option, 13); break;
			case 14:	$query = sprintf(PK_LADDER_LKPA, $option, 21); break;
			case 4008:	$query = sprintf(PK_LADDER_LKPA, $option, 4014); break;
			case 4015:	$query = sprintf(PK_LADDER_LKPA, $option, 4022); break;
			case 4030:	$query = sprintf(PK_LADDER_LKPA, $option, 4036); break;
			case 4037:	$query = sprintf(PK_LADDER_LKPA, $option, 4044); break;
			case 4047:	$query = sprintf(PK_LADDER_LKPA, $option, 4048); break;
			default:	$query = sprintf(PK_LADDER_JOB, $option); break;
		}
	}
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
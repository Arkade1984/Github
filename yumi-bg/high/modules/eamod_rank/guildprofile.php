<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Hunting Missions Ranking';
	$guild_id = $params->get('guild_id');
	$castleNames = Flux::config('CastleNames')->toArray();
	$error = false;
	$online = 0;
	$count = 1;
	
	function calc_posesion_time($time)
	{
		$days = intval($time / 86400);
		$time -= $days * 86400;

		$hour = intval($time / 3600);
		$time -= $hour * 3600;

		$minute = intval($time / 60);
		$time -= $minute * 60;

		$second = $time;

		$days = $days > 0 ? $days : 0;
		$hour = $hour > 0 ? $hour : 0;
		$minute = $minute > 0 ? $minute : 0;
		$second = $second > 0 ? $second : 0;

		return sprintf("%02d:%02d:%02d", $hour, $minute, $second);
	}
	
	$query = "
		SELECT
			`guild`.`name`, `guild`.`master`, `guild`.`guild_lv`, `guild`.`max_member`, `guild`.`average_lv`, `guild`.`exp`, `guild`.`next_exp`, `guild`.`emblem_data`,
			`char`.`class`, `char`.`base_level`, `char`.`job_level`
		FROM
			`guild` JOIN `char` ON `guild`.`char_id` = `char`.`char_id`
		WHERE
			`guild`.`guild_id` = '$guild_id'
	";
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$guild = $sth->fetchAll();
	if( !$guild )
		$error = true;
		
	$query = "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`online`, `login`.`sex`, DATEDIFF(NOW(),`login`.`lastlogin`) AS `last_online`, LOWER(`members`.`pais`) AS `lpais`
		FROM
			`char` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `members` ON `members`.`member_id` = `login`.`member_id`
		WHERE
			`char`.`guild_id` = '$guild_id'
		ORDER BY
			`char`.`class`
	";
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$all_members = $sth->fetchAll();
	
	// Diplomacia
	$query = "
		SELECT
			`guild`.`guild_id`, `guild`.`name`, `guild`.`emblem_data`, `guild_alliance`.`opposition`
		FROM
			`guild_alliance` JOIN `guild` ON `guild`.`guild_id` = `guild_alliance`.`alliance_id`
		WHERE
			`guild_alliance`.`guild_id` = '$guild_id'
		ORDER BY
			`guild_alliance`.`opposition`
	";
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$diplomacy = $sth->fetchAll();
	
	// Territorios
	$query = "
		SELECT
			`castle_id`, `economy`, `defense`
		FROM
			`guild_castle`
		WHERE
			`guild_id` = '$guild_id'
	";
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$territory = $sth->fetchAll();
	
	// Castle Details
	$query = "
		SELECT
			`castle_id`, `capture`, `emperium`, `treasure`, `top_eco`, `top_def`, `offensive_score`, `defensive_score`, `posesion_time`,
			`off_kill` + `def_kill` + `ext_kill` + `ali_kill` AS `kills`,
			`off_death` + `def_death` + `ext_death` + `ali_death` AS `deaths`
		FROM
			`guild_rank`
		WHERE
			`guild_id` = '$guild_id' AND `castle_id` IN (24,25,26,29,30,31)
		ORDER BY
			`castle_id`
	";
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$rank = $sth->fetchAll();
?>
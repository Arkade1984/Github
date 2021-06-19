<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Class Ranking';
	$castleNames = Flux::config('CastleNames')->toArray();
	$option = $params->get('opt');
	$myTypeSort = $params->get('ser');
	$ord = $params->get('ord');
	$ser = $myTypeSort;
	
	function playtime($time)
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

		return sprintf("%d days, %02d:%02d:%02d", $days, $hour, $minute, $second);
	}
	
	$SortOrder = array(
		"DESC",
		"ASC",
	);
	
	$SortType = array(
		"`char_wstats`.`score`",
		"`char_wstats`.`kill_count`",
		"`char_wstats`.`death_count`",
		"`char_wstats`.`top_damage`",
		"`char_wstats`.`damage_done`",
		"`char_wstats`.`damage_received`",
		"`char_wstats`.`emperium_damage`",
		"`char_wstats`.`barricade_damage`",
		"`char_wstats`.`gstone_damage`",
		"`char_wstats`.`guardian_damage`",
		"`char_wstats`.`emperium_kill`",
		"`char_wstats`.`barricade_kill`",
		"`char_wstats`.`gstone_kill`",
		"`char_wstats`.`guardian_kill`",
		"`char_wstats`.`support_skills_used`",
		"`char_wstats`.`wrong_support_skills_used`",
		"`char_wstats`.`healing_done`",
		"`char_wstats`.`wrong_healing_done`",
		"`char_wstats`.`hp_heal_potions`",
		"`char_wstats`.`sp_heal_potions`",
		"`char_wstats`.`yellow_gemstones`",
		"`char_wstats`.`red_gemstones`",
		"`char_wstats`.`blue_gemstones`",
		"`char_wstats`.`zeny_used`",
		"`char_wstats`.`ammo_used`",
		"`char_wstats`.`acid_demostration`",
		"`char_wstats`.`poison_bottles`",
	);
	
	DEFINE('PK_LADDER_GUILD', "
		SELECT
			`char`.`char_id`,
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_wstats`.`score`, `char_wstats`.`kill_count`, `char_wstats`.`death_count`,
			`char_wstats`.`top_damage`, `char_wstats`.`damage_done`, `char_wstats`.`damage_received`,
			`char_wstats`.`emperium_damage`, `char_wstats`.`guardian_damage`, `char_wstats`.`barricade_damage`, `char_wstats`.`gstone_damage`,
			`char_wstats`.`emperium_kill`, `char_wstats`.`guardian_kill`, `char_wstats`.`barricade_kill`, `char_wstats`.`gstone_kill`,
			`char_wstats`.`sp_heal_potions`, `char_wstats`.`hp_heal_potions`, `char_wstats`.`yellow_gemstones`, `char_wstats`.`red_gemstones`, `char_wstats`.`blue_gemstones`,
			`char_wstats`.`poison_bottles`, `char_wstats`.`acid_demostration`, `char_wstats`.`acid_demostration_fail`, `char_wstats`.`support_skills_used`, `char_wstats`.`healing_done`, `char_wstats`.`ammo_used`,
			`char_wstats`.`wrong_support_skills_used`, `char_wstats`.`wrong_healing_done`, `char_wstats`.`sp_used`, `char_wstats`.`zeny_used`, `char_wstats`.`spiritb_used`
		FROM
			`char` JOIN `char_wstats` ON `char_wstats`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_wstats`.`char_id` > '0'  AND `login`.`state` = '0' AND `guild`.`name` LIKE '%%%s%%'
		ORDER BY
			`char_wstats`.`score` DESC
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_NAME', "
		SELECT
			`char`.`char_id`,
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_wstats`.`score`, `char_wstats`.`kill_count`, `char_wstats`.`death_count`,
			`char_wstats`.`top_damage`, `char_wstats`.`damage_done`, `char_wstats`.`damage_received`,
			`char_wstats`.`emperium_damage`, `char_wstats`.`guardian_damage`, `char_wstats`.`barricade_damage`, `char_wstats`.`gstone_damage`,
			`char_wstats`.`emperium_kill`, `char_wstats`.`guardian_kill`, `char_wstats`.`barricade_kill`, `char_wstats`.`gstone_kill`,
			`char_wstats`.`sp_heal_potions`, `char_wstats`.`hp_heal_potions`, `char_wstats`.`yellow_gemstones`, `char_wstats`.`red_gemstones`, `char_wstats`.`blue_gemstones`,
			`char_wstats`.`poison_bottles`, `char_wstats`.`acid_demostration`, `char_wstats`.`acid_demostration_fail`, `char_wstats`.`support_skills_used`, `char_wstats`.`healing_done`, `char_wstats`.`ammo_used`,
			`char_wstats`.`wrong_support_skills_used`, `char_wstats`.`wrong_healing_done`, `char_wstats`.`sp_used`, `char_wstats`.`zeny_used`, `char_wstats`.`spiritb_used`
		FROM
			`char` JOIN `char_wstats` ON `char_wstats`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_wstats`.`char_id` > '0'  AND `login`.`state` = '0' AND `char`.`name` LIKE '%%%s%%'
		ORDER BY
			`char_wstats`.`score` DESC
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_ALL', "
		SELECT
			`char`.`char_id`,
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_wstats`.`score`, `char_wstats`.`kill_count`, `char_wstats`.`death_count`,
			`char_wstats`.`top_damage`, `char_wstats`.`damage_done`, `char_wstats`.`damage_received`,
			`char_wstats`.`emperium_damage`, `char_wstats`.`guardian_damage`, `char_wstats`.`barricade_damage`, `char_wstats`.`gstone_damage`,
			`char_wstats`.`emperium_kill`, `char_wstats`.`guardian_kill`, `char_wstats`.`barricade_kill`, `char_wstats`.`gstone_kill`,
			`char_wstats`.`sp_heal_potions`, `char_wstats`.`hp_heal_potions`, `char_wstats`.`yellow_gemstones`, `char_wstats`.`red_gemstones`, `char_wstats`.`blue_gemstones`,
			`char_wstats`.`poison_bottles`, `char_wstats`.`acid_demostration`, `char_wstats`.`acid_demostration_fail`, `char_wstats`.`support_skills_used`, `char_wstats`.`healing_done`, `char_wstats`.`ammo_used`,
			`char_wstats`.`wrong_support_skills_used`, `char_wstats`.`wrong_healing_done`, `char_wstats`.`sp_used`, `char_wstats`.`zeny_used`, `char_wstats`.`spiritb_used`
		FROM
			`char` JOIN `char_wstats` ON `char_wstats`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_wstats`.`char_id` > '0'  AND `login`.`state` = '0'
		ORDER BY
			%s %s
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_JOB', "
		SELECT
			`char`.`char_id`,
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_wstats`.`score`, `char_wstats`.`kill_count`, `char_wstats`.`death_count`,
			`char_wstats`.`top_damage`, `char_wstats`.`damage_done`, `char_wstats`.`damage_received`,
			`char_wstats`.`emperium_damage`, `char_wstats`.`guardian_damage`, `char_wstats`.`barricade_damage`, `char_wstats`.`gstone_damage`,
			`char_wstats`.`emperium_kill`, `char_wstats`.`guardian_kill`, `char_wstats`.`barricade_kill`, `char_wstats`.`gstone_kill`,
			`char_wstats`.`sp_heal_potions`, `char_wstats`.`hp_heal_potions`, `char_wstats`.`yellow_gemstones`, `char_wstats`.`red_gemstones`, `char_wstats`.`blue_gemstones`,
			`char_wstats`.`poison_bottles`, `char_wstats`.`acid_demostration`, `char_wstats`.`acid_demostration_fail`, `char_wstats`.`support_skills_used`, `char_wstats`.`healing_done`, `char_wstats`.`ammo_used`,
			`char_wstats`.`wrong_support_skills_used`, `char_wstats`.`wrong_healing_done`, `char_wstats`.`sp_used`, `char_wstats`.`zeny_used`, `char_wstats`.`spiritb_used`
		FROM
			`char` JOIN `char_wstats` ON `char_wstats`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_wstats`.`char_id` > '0'  AND `login`.`state` = '0' AND `char`.`class` = '%d'
		ORDER BY
			%s %s
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_LKPA', "
		SELECT
			`char`.`char_id`,
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_wstats`.`score`, `char_wstats`.`kill_count`, `char_wstats`.`death_count`,
			`char_wstats`.`top_damage`, `char_wstats`.`damage_done`, `char_wstats`.`damage_received`,
			`char_wstats`.`emperium_damage`, `char_wstats`.`guardian_damage`, `char_wstats`.`barricade_damage`, `char_wstats`.`gstone_damage`,
			`char_wstats`.`emperium_kill`, `char_wstats`.`guardian_kill`, `char_wstats`.`barricade_kill`, `char_wstats`.`gstone_kill`,
			`char_wstats`.`sp_heal_potions`, `char_wstats`.`hp_heal_potions`, `char_wstats`.`yellow_gemstones`, `char_wstats`.`red_gemstones`, `char_wstats`.`blue_gemstones`,
			`char_wstats`.`poison_bottles`, `char_wstats`.`acid_demostration`, `char_wstats`.`acid_demostration_fail`, `char_wstats`.`support_skills_used`, `char_wstats`.`healing_done`, `char_wstats`.`ammo_used`,
			`char_wstats`.`wrong_support_skills_used`, `char_wstats`.`wrong_healing_done`, `char_wstats`.`sp_used`, `char_wstats`.`zeny_used`, `char_wstats`.`spiritb_used`
		FROM
			`char` JOIN `char_wstats` ON `char_wstats`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_wstats`.`char_id` > '0'  AND `login`.`state` = '0' AND (`char`.`class` = '%d' OR `char`.`class` = '%d')
		ORDER BY
			%s %s
		LIMIT 0, 20
	");
	
	if( !isset($ser) )
		$ser = 0;
		
	if( !isset($ord) )
		$ord = 0;

	if( $option == 0 )
	{
		$query = sprintf(PK_LADDER_ALL, $SortType[$ser], $SortOrder[$ord]);
		$string = "All";
	}
	elseif( $option == 100 )
	{
		$name = $mysql->escapestr($_GET['buscar']);
		$query = sprintf(PK_LADDER_NAME, $name);
		$string = "All";
	}
	elseif( $option == 101 )
	{
		$name = $mysql->escapestr($_GET['buscar']);
		$query = sprintf(PK_LADDER_GUILD, $name);
		$string = "All";
	}
	elseif( $option > 0 )
	{
		switch( $option )
		{
		case 7: // Knight
			$query = sprintf(PK_LADDER_LKPA, $option, 13, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 14: // Crusader
			$query = sprintf(PK_LADDER_LKPA, $option, 21, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4008: // Lord Knight
			$query = sprintf(PK_LADDER_LKPA, $option, 4014, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4015: // Paladin
			$query = sprintf(PK_LADDER_LKPA, $option, 4022, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4030: // Baby Knight
			$query = sprintf(PK_LADDER_LKPA, $option, 4036, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4037: // Baby Crusader
			$query = sprintf(PK_LADDER_LKPA, $option, 4044, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4047: // Star Gladiator
			$query = sprintf(PK_LADDER_LKPA, $option, 4048, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4054: // Rune Knight
			$query = sprintf(PK_LADDER_LKPA, $option, 4080, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4060: // Rune Knight T
			$query = sprintf(PK_LADDER_LKPA, $option, 4081, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4066: // Royal Guard
			$query = sprintf(PK_LADDER_LKPA, $option, 4082, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4073: // Royal Guard T
			$query = sprintf(PK_LADDER_LKPA, $option, 4083, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4056: // Ranger
			$query = sprintf(PK_LADDER_LKPA, $option, 4084, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4062: // Ranger T
			$query = sprintf(PK_LADDER_LKPA, $option, 4085, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4058: // Mechanic
			$query = sprintf(PK_LADDER_LKPA, $option, 4086, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4064: // Mechanic T
			$query = sprintf(PK_LADDER_LKPA, $option, 4087, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4096: // Baby Rune Knight
			$query = sprintf(PK_LADDER_LKPA, $option, 4109, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4102: // Baby Royal Guard
			$query = sprintf(PK_LADDER_LKPA, $option, 4110, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4098: // Baby Ranger
			$query = sprintf(PK_LADDER_LKPA, $option, 4111, $SortType[$ser], $SortOrder[$ord]);
			break;
		case 4100: // Baby Mechanic
			$query = sprintf(PK_LADDER_LKPA, $option, 4112, $SortType[$ser], $SortOrder[$ord]);
			break;
		default:
			$query = sprintf(PK_LADDER_JOB, $option, $SortType[$ser], $SortOrder[$ord]);
			break;
		}
	}
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$playerLadder = $sth->fetchAll();
?>
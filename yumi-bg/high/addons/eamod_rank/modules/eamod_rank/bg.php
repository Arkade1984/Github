<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Class Ranking';
	$castleNames = Flux::config('CastleNames')->toArray();
	$option = $params->get('opt');
	$ord = $params->get('ord');
	$ser = $params->get('ser');
	
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
		"Field<br>Marshal",
		"Grand<br>Marshal",
	);
	
	$SortOrder = array(
		"DESC",
		"ASC",
	);

	$SortType = array(
		"`char_bg`.`points`",
		"`char_bg`.`rank_points`",
		"`char`.`bg_gold`",
		"`char`.`bg_silver`",
		"`char`.`bg_bronze`",
		"`char_bg`.`score`",

		"`char_bg`.`win`",
		"`char_bg`.`tie`",
		"`char_bg`.`lost`",
		"`char_bg`.`leader_win`",
		"`char_bg`.`leader_tie`",
		"`char_bg`.`leader_lost`",

		"`char_bg`.`kill_count`",
		"`char_bg`.`death_count`",
		"`char_bg`.`deserter`",

		"`char_bg`.`ctf_taken`",
		"`char_bg`.`ctf_captured`",
		"`char_bg`.`ctf_droped`",
		"`char_bg`.`ctf_wins`",
		"`char_bg`.`ctf_tie`",
		"`char_bg`.`ctf_lost`",

		"`char_bg`.`td_kills`",
		"`char_bg`.`td_deaths`",
		"`char_bg`.`td_wins`",
		"`char_bg`.`td_tie`",
		"`char_bg`.`td_lost`",

		"`char_bg`.`sc_stole`",
		"`char_bg`.`sc_captured`",
		"`char_bg`.`sc_droped`",
		"`char_bg`.`sc_wins`",
		"`char_bg`.`sc_tie`",
		"`char_bg`.`sc_lost`",

		"`char_bg`.`eos_flags`",
		"`char_bg`.`eos_bases`",
		"`char_bg`.`eos_wins`",
		"`char_bg`.`eos_tie`",
		"`char_bg`.`eos_lost`",

		"`char_bg`.`boss_damage`",
		"`char_bg`.`boss_killed`",
		"`char_bg`.`boss_flags`",
		"`char_bg`.`boss_wins`",
		"`char_bg`.`boss_tie`",
		"`char_bg`.`boss_lost`",

		"`char_bg`.`skulls`",
		"`char_bg`.`ti_wins`",
		"`char_bg`.`ti_tie`",
		"`char_bg`.`ti_lost`",

		"`char_bg`.`emperium_kill`",
		"`char_bg`.`barricade_kill`",
		"`char_bg`.`gstone_kill`",
		"`char_bg`.`cq_wins`",
		"`char_bg`.`cq_lost`",

		"`char_bg`.`top_damage`",
		"`char_bg`.`damage_done`",
		"`char_bg`.`damage_received`",
		"`char_bg`.`support_skills_used`",
		"`char_bg`.`wrong_support_skills_used`",
		"`char_bg`.`healing_done`",
		"`char_bg`.`wrong_healing_done`",
		"`char_bg`.`hp_heal_potions`",
		"`char_bg`.`sp_heal_potions`",
		"`char_bg`.`yellow_gemstones`",
		"`char_bg`.`red_gemstones`",
		"`char_bg`.`blue_gemstones`",
		"`char_bg`.`zeny_used`",
		"`char_bg`.`ammo_used`",
		"`char_bg`.`acid_demostration`",
		"`char_bg`.`poison_bottles`",
	);

	function calc_rank($score)
	{
		$result = intval($score / 270);
		if( $result > 14 )
			$result = 14;
		else if( $result < 0 )
			$result = 0;
		return $result;
	}
	
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
	
	if( !isset( $ser ) )
		$ser = 0;
		
	if( !isset( $opt ) )
		$opt = 0;
		
	if( !isset( $ord ) )
		$ord = 0;
	
	DEFINE('PK_LADDER_GUILD', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`bg_gold`, `char`.`bg_silver`, `char`.`bg_bronze`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_bg`.*
		FROM
			`char` JOIN `char_bg` ON `char_bg`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_bg`.`char_id` > '0' AND `login`.`state` = '0' AND `guild`.`name` LIKE '%%%s%%'
		ORDER BY
			`char_bg`.`points` DESC
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_NAME', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`bg_gold`, `char`.`bg_silver`, `char`.`bg_bronze`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_bg`.*
		FROM
			`char` JOIN `char_bg` ON `char_bg`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_bg`.`char_id` > '0' AND `login`.`state` = '0' AND `char`.`name` LIKE '%%%s%%'
		ORDER BY
			`char_bg`.`points` DESC
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_ALL', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`bg_gold`, `char`.`bg_silver`, `char`.`bg_bronze`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_bg`.*
		FROM
			`char` JOIN `char_bg` ON `char_bg`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_bg`.`char_id` > '0' AND `login`.`state` = '0'
		ORDER BY
			%s %s
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_JOB', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`bg_gold`, `char`.`bg_silver`, `char`.`bg_bronze`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_bg`.*
		FROM
			`char` JOIN `char_bg` ON `char_bg`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_bg`.`char_id` > '0' AND `login`.`state` = '0' AND `char`.`class` = '%d'
		ORDER BY
			%s %s
		LIMIT 0, 20
	");

	DEFINE('PK_LADDER_LKPA', "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`bg_gold`, `char`.`bg_silver`, `char`.`bg_bronze`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_bg`.*
		FROM
			`char` JOIN `char_bg` ON `char_bg`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_bg`.`char_id` > '0' AND `login`.`state` = '0' AND (`char`.`class` = '%d' OR `char`.`class` = '%d')
		ORDER BY
			%s %s
		LIMIT 0, 20
	");
	
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
	$result = $sth->fetchAll();
?>
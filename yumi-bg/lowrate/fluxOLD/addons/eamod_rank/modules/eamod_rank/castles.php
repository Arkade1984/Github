<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Class Ranking';
	$castleNames = Flux::config('CastleNames')->toArray();
	$option = $params->get('opt');
	$ser = $params->get('ser');
	
	function calc_rank($score)
	{
		$result = intval($score / 270);
		if( $result > 14 )
			$result = 14;
		else if( $result < 0 )
			$result = 0;
		return $result;
	}

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
	
	$SortType = array(
		"defensive_score",
		"offensive_score",
		"posesion_time",
		"capture",
		"emperium",
		"treasure",
		"top_eco",
		"top_def",
		"invest_eco",
		"invest_def",
		"zeny_eco",
		"zeny_def",
		"skill_battleorder",
		"skill_regeneration",
		"skill_restore",
		"skill_emergencycall",
		"off_kill",
		"off_death",
		"def_kill",
		"def_death",
		"ext_kill",
		"ext_death",
		"ali_kill",
		"ali_death",
	);
	
	if ( !isset( $option ) )
		$option = 0;
		
	if ( !isset( $ser ) )
		$ser = 0;
		
	$castle_id = -1;
	
	if( $option == 0 )
	{ // All Castles
		$query = "
			SELECT
				`g`.`name`, `g`.`master`, `g`.`emblem_data`, `gr`.*
			FROM
				`guild` `g`, `guild_rank` `gr`, (
					SELECT
						`castle_id`, MAX(`" . $SortType[$ser] . "`) AS `t" . $SortType[$ser] . "`
					FROM
						`guild_rank`
					WHERE
						" . ( ( $ser != 1 ) ? "`" . $SortType[$ser] . "` > 0" : "`off_kill` + `def_kill` + `ext_kill` + `ali_kill` > 100" ) . "
					GROUP BY
						`castle_id`
				) `tgr`
			WHERE
				`g`.`guild_id` = `gr`.`guild_id` AND `gr`.`castle_id` = `tgr`.`castle_id` AND `gr`.`" . $SortType[$ser] . "` = `tgr`.`t" . $SortType[$ser] . "`
			ORDER BY
				`gr`.`castle_id` DESC
		";
	}
	else
	{ // Per Castle - Top 25
		$castle_id = $option - 1;
		$query = "
			SELECT
				`guild`.`name`, `guild`.`master`, `guild`.`emblem_data`, `guild_rank`.*
			FROM
				`guild` LEFT JOIN `guild_rank` ON `guild_rank`.`guild_id` = `guild`.`guild_id`
			WHERE
				`guild_rank`.`castle_id` = '$castle_id' AND 
				" . ( ( $ser != 1 ) ? "`guild_rank`.`" . $SortType[$ser] . "` > 0" : "`guild_rank`.`off_kill` + `guild_rank`.`def_kill` + `guild_rank`.`ext_kill` + `guild_rank`.`ali_kill` > 100 " ) . "
			ORDER BY
				`guild_rank`.`" . $SortType[$ser] . "` DESC
			LIMIT 25
		";
	}
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
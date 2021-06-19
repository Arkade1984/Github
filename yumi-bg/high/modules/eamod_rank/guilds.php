<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Guild Ranking';
	$option = $params->get('opt');
	$castleNames = Flux::config('CastleNames')->toArray();
	
	$oclastes = array(
			0 => "aldeg_cas01",
			1 => "aldeg_cas02",
			2 => "aldeg_cas03",
			3 => "aldeg_cas04",
			4 => "aldeg_cas05",
			5 => "gefg_cas01",
			6 => "gefg_cas02",
			7 => "gefg_cas03",
			8 => "gefg_cas04",
			9 => "gefg_cas05",
			10 => "payg_cas01",
			11 => "payg_cas02",
			12 => "payg_cas03",
			13 => "payg_cas04",
			14 => "payg_cas05",
			15 => "prtg_cas01",
			16 => "prtg_cas02",
			17 => "prtg_cas03",
			18 => "prtg_cas04",
			19 => "prtg_cas05",
			20 => "nguild_alde",
			21 => "nguild_gef",
			22 => "nguild_pay",
			23 => "nguild_prt",
			24 => "schg_cas01",
			25 => "schg_cas02",
			26 => "schg_cas03",
			27 => "schg_cas04",
			28 => "schg_cas05",
			29 => "arug_cas01",
			30 => "arug_cas02",
			31 => "arug_cas03",
			32 => "arug_cas04",
			33 => "arug_cas05"
		);
	
	$regions = array(
			1 => 'Prontera, Capital of Rune Midgard',
			7 => 'Payon Town',
			8 => 'Morroc Town',
			9 => 'Wootan Tribe\'s Village, Umbala',
			10 => 'Beach Town, Comodo',
			11 => 'Niflheim, Realm of the Dead',
			12 => 'Aldebaran',
			13 => 'Geffen',
			2 => 'Yuno, Capital of Schwarzwald Republic',
			3 => 'Hugel, the Quaint Garden Village',
			4 => 'Lighthalzen, the City of Prosperity',
			5 => 'Einbroch, the City of Steel',
			6 => 'Einbech, the Mining Village'
		);
	DEFINE('LEVELNEXP', "SELECT `name`, `emblem_data`, `guild_lv`, `exp`, `guild_id`, `average_lv` FROM `guild` WHERE `guild_id` > '1' ORDER BY `guild_lv` DESC, `exp` DESC LIMIT 25" );
	
	DEFINE('CASTLEPPTY', "SELECT
				`guild_castle`.`castle_id`, `guild_castle`.`economy`, `guild_castle`.`defense`,
				`guild`.`guild_id`, `guild`.`name`, `guild`.`emblem_data`
			FROM
				`guild_castle` LEFT JOIN `guild` ON `guild`.`guild_id` = `guild_castle`.`guild_id`
			WHERE
				`guild_castle`.`guild_id` > '0'
			ORDER BY
				`guild_castle`.`castle_id`
			");
			
	DEFINE('WARCONQUEST', "SELECT
				`guild`.`guild_id`, `guild`.`name`, `guild`.`emblem_data`, `guild`.`guild_lv`,
				`mapreg`.`index`
			FROM
				`guild` LEFT JOIN `mapreg` ON `mapreg`.`value` = `guild`.`guild_id`
			WHERE
				`mapreg`.`varname` = '\$Region'
			ORDER BY
				`mapreg`.`index`
			");
	
	switch( $option ) {
		case 0:
			$query = sprintf(LEVELNEXP);
			break;
		case 1:
			$query = sprintf(CASTLEPPTY);
			break;
		case 2:
			$query = sprintf(WARCONQUEST);
			break;
	}
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
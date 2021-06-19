<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Playtime Ranking';
	
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
	
	
	if ( $session->isLoggedIn() )
		$account_id = $session->account->account_id;
	else	
		$account_id = false;
	
	
	$query = "
		SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`last_map`, `login`.`sex`, `guild`.`name` AS `gname`, `char`.`playtime`, `guild`.`guild_id`
		FROM
			`char` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id` ";
			
	if ( $session->isLoggedIn() ) {
		$query .= "
				WHERE
					`char`.`account_id` = '$account_id' 
				";
	}
	
	$query .= "ORDER BY
					`char`.`playtime` DESC 
			LIMIT 0, 20
	";
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
	$title    = 'Homumculus Ranking';
	
	$query = "
		SELECT
			`char`.`name` AS CName, `homunculus`.`name`, `homunculus`.`level`, `homunculus`.`class`
		FROM
			`homunculus` LEFT JOIN `char` ON `char`.`char_id` = `homunculus`.`char_id`
		ORDER BY
			`homunculus`.`level` DESC, `homunculus`.`exp` DESC
		LIMIT 20
	";
		
	$sth  = $server->connection->getStatement( $query );
	$sth->execute();
	$result = $sth->fetchAll();
?>
<?php
$sql = "SELECT value FROM global_reg_value WHERE account_id = ? AND str = '#CASHPOINTS' AND type = 2";
	$value = 0;
	if($server->connection != 0) {
		$sth = $server->connection->getStatement($sql);
		$accountID = 0;
		$sth->execute(array($accountID));
		$values = $sth->fetch();
		if($values === false)
			$value = NULL;
		else
			$value = $values->value;
	}
?>

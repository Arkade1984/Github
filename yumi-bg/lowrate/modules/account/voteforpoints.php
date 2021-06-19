<?php
if (!defined('FLUX_ROOT')) exit;

/*
CREATE TABLE  `ragnarok`.`cp_voteforpoints` (
`id` INT NOT NULL AUTO_INCREMENT ,
`accid` INT NOT NULL ,
`time` INT NOT NULL ,
`site` INT NOT NULL ,
PRIMARY KEY (  `id` )
) ENGINE = MYISAM ;
*/


$links = Flux::config('VoteForPointsLinks')->toArray();
global $v4pBalance;	
$v4pBalance = 0;
$err = 0;
if(count($_GET)) {
	$this->loginRequired();
	
	$accountID = $session->account->account_id;
	$account   = $session->account;
			
	$sql = "SELECT value FROM global_reg_value WHERE account_id = ? AND str = '#CASHPOINTS' AND type = 2";
	$sth = $server->connection->getStatement($sql);
	$sth->execute(array($accountID));
	$v4pBalances = $sth->fetch();
	if($v4pBalances === false)
		$v4pBalance = NULL;
	else
		$v4pBalance = $v4pBalances->value;
	
	//echo "accid: $accountID , value: $v4pBalance <br>";
	
	$out = $params->get('out');
	if($out) {
		$index = intval($out);
		$err++;
		//echo "index: $index <br>";
		if($index >= 0 && $index <= count($links)) {
			$sql  = "SELECT time FROM cp_voteforpoints ";
			$sql .= "WHERE site = ? AND accid = ? LIMIT 1";
			$sth  = $server->connection->getStatement($sql);
			$sth->execute(array($index,$accountID));
			$account = $sth->fetch();
			$lastVoteTime = intval($account->time);
			$now = time();
			$updateCash = false;
			//echo "lastVoteTime: $lastVoteTime <br>";
			if($lastVoteTime == NULL) {
				$sql = "INSERT INTO cp_voteforpoints (accid, time, site) VALUES (?, ?, ?)";
				$sth = $server->connection->getStatement($sql);
				$sth->execute(array($accountID,$now,$index));
				$updateCash = true;
			}
			else if(($lastVoteTime + (60*60*24)) < $now) {
				$sql = "UPDATE cp_voteforpoints SET time = ? WHERE site = ? AND accid = ?";
				$sth = $server->connection->getStatement($sql);
				$sth->execute(array($now,$index,$accountID));
				$updateCash = true;
			}
			
			//echo "updateCash: ".var_dump($updateCash)." <br>";
			if($updateCash) {
				if($v4pBalance == NULL) {
					$v4pBalance = 1;
					$sql = "INSERT INTO global_reg_value (char_id, str, value, type, account_id) VALUES (0, '#CASHPOINTS', 1, 2, ?)";
					$sth = $server->connection->getStatement($sql);
					$sth->execute(array($accountID));
					//echo 
				}
				else {
					$v4pBalance++;
					$sql = "UPDATE global_reg_value SET value = ? WHERE account_id = ? AND str = '#CASHPOINTS' AND type = 2";
					$sth = $server->connection->getStatement($sql);
					$sth->execute(array($v4pBalance,$accountID));
				}
			}
			
			header('Location: '.$links[$index-1][1]);
		}
	}
}

?>

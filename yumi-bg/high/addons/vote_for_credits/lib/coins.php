<?php
class Coins {
	public $server;
	public $coinsID;
	
	public function __construct(Flux_Athena $server, $coinsID)
	{
		$this->server  = $server;
		$this->coinsID = $coinsID;
	}
	
	public function getCoins($accountID)
	{
		$sql = "SELECT amount FROM {$this->server->loginDatabase}.storage WHERE account_id = ? AND nameid = ? LIMIT 1";
		$sth = $this->server->connection->getStatement($sql);
		$sth->execute(array($accountID, $this->coinsID));
		$num = $sth->fetch();
		if ($num) {
			return (int)$num->amount;
		}
		else {
			return 0;
		}
	}
	
	public function setCoins($accountID, $amount)
	{
		$num = $this->getCoins($accountID);
		if (!$num) {
			$sql  = "INSERT INTO {$this->server->loginDatabase}.storage (account_id, nameid, amount) ";
			$sql .= "VALUES (?, ?, ?)";
			$sth  = $this->server->connection->getStatement($sql);
			return $sth->execute(array($accountID, $this->coinsID, $amount));
		}
		else {
			$sql  = "UPDATE {$this->server->loginDatabase}.storage SET amount = ? WHERE account_id = ? AND nameid = ?";
			$sth  = $this->server->connection->getStatement($sql);
			return $sth->execute(array($amount, $accountID, $this->coinsID));
		}
	}
}
?>
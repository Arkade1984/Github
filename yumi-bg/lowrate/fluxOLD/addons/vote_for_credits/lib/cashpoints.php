<?php
class Cashpoints {
	public $server;
	public $cashRecords = array();
	public $pointsType  = '#CASHPOINTS';
	
	public function __construct(Flux_Athena $athenaServer, $kafraPoints=false)
	{
		$this->server = $athenaServer;
		if ($kafraPoints) {
			$this->pointsType = '#KAFRAPOINTS';
		}
	}
	
	public function getCash($accountID)
	{
		$this->initCash($accountID);
		
		$sql  = "SELECT value FROM {$this->server->charMapDatabase}.global_reg_value ";
		$sql .= "WHERE `str` = ? AND account_id = ? LIMIT 1";
		$sth  = $this->server->connection->getStatement($sql);
		$sth->execute(array($this->pointsType, $accountID));
		return (int)$sth->fetch()->value;
	}
	
	public function setCash($accountID, $amount)
	{
		$this->initCash($accountID);
		
		$sql  = "UPDATE {$this->server->charMapDatabase}.global_reg_value ";
		$sql .= "SET value = ? WHERE `str` = ? AND account_id = ?";
		$sth  = $this->server->connection->getStatement($sql);
		
		return $sth->execute(array((int)$amount, $this->pointsType, $accountID));
	}
	
	protected function initCash($accountID)
	{
		if (!array_key_exists($accountID, $this->cashRecords)) {
			$sql  = "SELECT account_id FROM {$this->server->charMapDatabase}.global_reg_value ";
			$sql .= "WHERE `str` = ? AND account_id = ? LIMIT 1";
			$sth  = $this->server->connection->getStatement($sql);
			$sth->execute(array($this->pointsType, $accountID));
			
			if ($sth->fetch()) {
				// Has prior cashpoints record.
				$this->cashRecords[$accountID] = true;
			}
			else {
				// Does not have prior cash points record.
				$this->cashRecords[$accountID] = false;
			}
		}
		
		// Initialize cash points record if it doesn't already exist.
		if (!$this->cashRecords[$accountID]) {
			$sql  = "INSERT INTO {$this->server->charMapDatabase}.global_reg_value ";
			$sql .= "(`str`, value, type, account_id, char_id) ";
			$sql .= "VALUES (?, 0, 2, ?, 0)";
			$sth  = $this->server->connection->getStatement($sql);
			$sth->execute(array($this->pointsType, $accountID));
		}
	}
}
?>
<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired(htmlspecialchars(Flux::message('VoteLogin')));

$id      		= $params->get('id');

$bannersTable	= Flux::config('FluxTables.VoteBannersTable');
$votesTable		= Flux::config('FluxTables.VotePointsTable');
$logsTable		= Flux::config('FluxTables.VoteHistoryTable');

$now = time();

$sql = "SELECT banner_id, hours, amount, vote_url FROM {$server->loginDatabase}.$bannersTable WHERE banner_id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));

$banner = $sth->fetch();
if (!$banner) {
	$this->deny();
}

$sql  = "SELECT log.* FROM {$server->loginDatabase}.$logsTable AS log ";
if (Flux::config('VoteVerifyIP')) {
	$sql .= "WHERE banner_id = ? AND (account_id = ? OR log.ip = ?)";
	$bind = array($id, $session->account->account_id, $_SERVER['REMOTE_ADDR']);
}
else {
	$sql .= "WHERE banner_id = ? AND account_id = ? AND `type` = ?";
	$bind = array($id, $session->account->account_id, 'R');
}
$sql .= "ORDER BY log.time DESC";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$lastVote = $sth->fetch();

if ($lastVote && (strtotime($lastVote->time)+(60*60*$banner->hours)) >= $now) {
	$this->deny();
}

$now  = date('Y-m-d H:i:s');

$sql  = "SELECT vote.* FROM {$server->loginDatabase}.$votesTable AS vote WHERE account_id = ?";
$sth  = $server->connection->getStatement($sql);
$sth->execute(array($session->account->account_id));
$exists = $sth->fetch();

if ($exists) {
	$sql  = "UPDATE {$server->loginDatabase}.$votesTable SET amount = amount + ? WHERE account_id = ?";
	$sth  = $server->connection->getStatement($sql);
	$sth->execute(array($banner->amount, $session->account->account_id));
}
else {
	$sql  = "INSERT INTO {$server->loginDatabase}.$votesTable (account_id, amount, redeemed) VALUES (?, ?, 0)";
	$sth  = $server->connection->getStatement($sql);
	$sth->execute(array($session->account->account_id, $banner->amount));
}

$sql  = "INSERT INTO {$server->loginDatabase}.$logsTable (banner_id, account_id, `type`, amount, `time`, ip) ";
$sql .= "VALUES (?, ?, 'R', ?, ?, ?)";
$sth  = $server->connection->getStatement($sql);
$sth->execute(array($id, $session->account->account_id, $banner->amount, $now, $_SERVER['REMOTE_ADDR']));

$msg = htmlspecialchars(Flux::message('VoteThanks'));
$session->setMessageData($msg);

$this->redirect($banner->vote_url);
?>
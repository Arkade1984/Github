<?php
if (!defined('FLUX_ROOT')) exit;

$title = Flux::message('VoteStatsTitle');
$votes = Flux::config('FluxTables.VotesTable');

// Get total vote count.
$sql   = "SELECT COUNT(*) AS total FROM {$server->loginDatabase}.$votes";
$sth   = $server->connection->getStatement($sql);
$sth->execute();
$total = $sth->fetch()->total;

// Get date since first vote.
$sql   = "SELECT vote_date FROM {$server->loginDatabase}.$votes ORDER BY vote_date ASC LIMIT 1";
$sth   = $server->connection->getStatement($sql);
$sth->execute();
$since = $sth->fetch()->vote_date;

// Fetch top voters.
$sql   = "SELECT COUNT($votes.id) AS total, login.userid, login.account_id ";
$sql  .= "FROM $votes LEFT JOIN login ON $votes.account_id = login.account_id ";
$sql  .= "GROUP BY account_id ORDER BY total DESC ";
if ($limitTopVoters=(int)Flux::config('ShowTopVotes')) {
	$sql .= "LIMIT $limitTopVoters";
}
$sth   = $server->connection->getStatement($sql);
$sth->execute();
$users = $sth->fetchAll();
?>
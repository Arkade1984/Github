<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired(htmlspecialchars(Flux::message('VoteLogin')));

$title = "Vote";

$logsTable		= Flux::config('FluxTables.VoteHistoryTable');
$bannersTable	= Flux::config('FluxTables.VoteBannersTable');

$now = time();

$sql  = "SELECT log.* FROM {$server->loginDatabase}.$logsTable AS log ";
$sql .= "WHERE log.account_id = ? ";
$bind = array($session->account->account_id);
if (Flux::config('VoteVerifyIP')) {
	$sql   .= "OR log.ip = ? ";
	$bind[] = $_SERVER['REMOTE_ADDR'];
}
$sql .= "ORDER BY log.time ASC";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$v = $sth->fetchAll();

$sql  = "SELECT banners.* FROM {$server->loginDatabase}.$bannersTable AS banners";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$b = $sth->fetchAll();

$votes  = array();
foreach ($v as $vote) {
	$votes[$vote->banner_id] = $vote;
}

$banners = array();
foreach ($b as $banner) {
	if (!array_key_exists($banner->banner_id, $votes)) {
		$banners[$banner->banner_id] = array(
			"id"	=> $banner->banner_id,
			"date"	=> "Never",
			"ip"	=> "N/A",
			"amt"	=> $banner->amount,
			"hours"	=> $banner->hours,
			"href"	=> $banner->vote_url,
			"src"	=> $banner->image_url,
			"ready"	=> TRUE
		);
	}
	else if((strtotime($votes[$banner->banner_id]->time) + (60*60*$banner->hours)) < $now) {
		$banners[$banner->banner_id] = array(
			"id"	=> $banner->banner_id,
			"date"	=> $votes[$banner->banner_id]->time,
			"ip"	=> $votes[$banner->banner_id]->ip,
			"amt"	=> $banner->amount,
			"hours"	=> $banner->hours,
			"href"	=> $banner->vote_url,
			"src"	=> $banner->image_url,
			"ready"	=> TRUE
		);
	}
	else {
		$banners[$banner->banner_id] = array(
			"id"	=> $banner->banner_id,
			"date"	=> $votes[$banner->banner_id]->time,
			"ip"	=> $votes[$banner->banner_id]->ip,
			"amt"	=> $banner->amount,
			"hours"	=> $banner->hours,
			"href"	=> $banner->vote_url,
			"src"	=> $banner->image_url,
			"ready"	=> FALSE
		);
	}
}

?>
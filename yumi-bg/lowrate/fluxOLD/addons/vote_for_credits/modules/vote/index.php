<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired(Flux::message('PleaseLoginToVote'));

$title = Flux::message('VoteTitle');

require_once Flux::config('CashpointsLibrary');
require_once Flux::config('CoinsLibrary');

// Find last vote date & time.
$votesTable   = Flux::config('FluxTables.VotesTable');
$bannersTable = Flux::config('FluxTables.BannersTable');

$bind = array($session->account->account_id);
$sql  = "SELECT v.vote_date, v.vote_ip FROM {$server->loginDatabase}.$votesTable AS v ";
$sql .= "WHERE v.account_id = ? ";
if (Flux::config('VerifyIP')) {
	$sql   .= "OR v.vote_ip = ?";
	$bind[] = $_SERVER['REMOTE_ADDR'];
}
$sql .= "ORDER BY v.vote_date DESC LIMIT 1";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);

$lastVote = $sth->fetch();

// Fetch votable banners.
$sql  = "SELECT id, image_url, hours, credits FROM {$server->loginDatabase}.$bannersTable";
$sth  = $server->connection->getStatement($sql);
$sth->execute(array($session->account->account_id));

$banners   = $sth->fetchAll();
$next      = array();
$points    = (int)$server->loginServer->getPref($session->account->account_id, 'FluxVotePoints');
$unclaimed = false;

if (Flux::config('ChangeToCredits')) {
	$needed  = Flux::config('PointsToCredits') - $points;
}
elseif (Flux::config('ChangeToCashPoints')) { 
	$needed  = Flux::config('PointsToCashPoints') - $points;
	$cplib   = new Cashpoints($server, Flux::config('DepositKafraPoints'));
	$cash    = $cplib->getCash($session->account->account_id);
	
	if ($points >= Flux::config('PointsToCashPoints')) {
		$unclaimed = true;
	}
	
	if ($unclaimed && $params->get('claim') && !$server->accountHasOnlineChars($session->account->account_id)) {
		$pointsTo = FLux::config('PointsToCashPoints');
		$rewarded = Flux::config('RewardedCashPoints');
		$rollover = Flux::config('RolloverPoints');
		$reward   = 0;
		
		for (; $points >= $pointsTo; $points -= $pointsTo) {
			$reward += $rewarded;
			if (!$rollover) {
				$points = 0;
				break;
			}
		}
		
		// No longer unclaimed.
		$unclaimed = false;
		
		// Deposit cash points & (re)set vote points.
		$cplib->setCash($session->account->account_id, ($cash=$cash+$reward));
		$server->loginServer->setPref($session->account->account_id, 'FluxVotePoints', $points);
	}
}
elseif (Flux::config('ChangeToCoins')) { 
	$needed  = Flux::config('PointsToCoins') - $points;
	$coins   = new Coins($server, Flux::config('CoinsItemID'));
	$_coins  = $coins->getCoins($session->account->account_id);
	
	// Check storage.
	$sql = "SELECT COUNT(*) AS total FROM {$server->loginDatabase}.storage WHERE account_id = ?";
	$sth = $server->connection->getStatement($sql);
	$sth->execute(array($session->account->account_id));
	$cnt = $sth->fetch()->total;
	
	// Check coin limit.
	$coinsMaxed = $coins->getCoins($session->account->account_id) >= Flux::config('CoinsStackLimit');
	
	// Is storage maxed?
	$storageMaxed = $cnt >= Flux::config('StorageLimit');
	
	// Add coin count from inventory to total.
	$sql  = "SELECT amount FROM {$server->charMapDatabase}.inventory, {$server->charMapDatabase}.`char` AS ch ";
	$sql .= "WHERE inventory.char_id = ch.char_id AND ch.account_id = ? AND inventory.nameid = ?";
	$sth  = $server->connection->getStatement($sql);
	$sth->execute(array($session->account->account_id, Flux::config('CoinsItemID')));
	if ($row=$sth->fetch()) {
		$_coins += $row->amount;
	}
	
	if ($points >= Flux::config('PointsToCoins')) {
		$unclaimed = true;
	}
	
	if ($unclaimed && $params->get('claim') && !$server->accountHasOnlineChars($session->account->account_id) && !$coinsMaxed && !$storageMaxed) {
		$pointsTo = FLux::config('PointsToCoins');
		$rewarded = Flux::config('RewardedCoins');
		$rollover = Flux::config('RolloverPoints');
		$reward   = 0;
		
		for (; $points >= $pointsTo; $points -= $pointsTo) {
			$reward += $rewarded;
			if (!$rollover) {
				$points = 0;
				break;
			}
		}
		
		// No longer unclaimed.
		$unclaimed = false;
		
		// Deposit coins & (re)set vote points.
		$coins->setCoins($session->account->account_id, ($_coins=$_coins+$reward));
		$server->loginServer->setPref($session->account->account_id, 'FluxVotePoints', $points);
	}
}
else {
	$needed = 0;
}

if ($needed < 0) {
	$needed = 0;
}

if ($banners) {
	// Fetch user's previous votes.
	$bind = array($session->account->account_id);
	$sql  = "SELECT banner_id, vote_date FROM ";
	$sql .= "(SELECT banner_id, vote_date FROM {$server->loginDatabase}.$votesTable WHERE account_id = ? ";
	if (Flux::config('VerifyIP')) {
		$sql   .= "OR vote_ip = ?";
		$bind[] = $_SERVER['REMOTE_ADDR'];
	}
	$sql .= "ORDER BY id DESC) AS v GROUP BY banner_id";
	$sth  = $server->connection->getStatement($sql);
	$sth->execute($bind);

	$_votes = $sth->fetchAll();
	$votes  = array();

	foreach ($_votes as $vote) {
		$votes[$vote->banner_id] = $vote;
	}
	
	$now = time();
	foreach ($banners as $key => $banner) {
		if (array_key_exists($banner->id, $votes) && (($voteTime=strtotime($votes[$banner->id]->vote_date))+(60*60*$banner->hours)) > $now) {
			$_banner        = clone $banner;
			$nextVoteHours  = (($voteTime+(60*60*$banner->hours))-$now)/(60*60);
			$_banner->hours = $nextVoteHours < 0 ? ceil(abs($nextVoteHours)) : round(abs($nextVoteHours));
			$next[]         = $_banner;
			unset($banners[$key]);
		}
	}
}
?>
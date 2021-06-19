<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired(Flux::message('PleaseLoginToVote'));

require_once Flux::config('CashpointsLibrary');
require_once Flux::config('CoinsLibrary');

$id      = $params->get('id');
$votes   = Flux::config('FluxTables.VotesTable');
$banners = Flux::config('FluxTables.BannersTable');

$sql = "SELECT id, hours, credits, vote_url FROM {$server->loginDatabase}.$banners WHERE id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));

$banner = $sth->fetch();
if (!$banner) {
	$this->deny();
}

// Find out last vote.
$bind = array($banner->id, $session->account->account_id);
$sql  = "SELECT vote_date FROM {$server->loginDatabase}.$votes WHERE banner_id = ? AND (account_id = ? ";
if (Flux::config('VerifyIP')) {
	$sql   .= "OR vote_ip = ?";
	$bind[] = $_SERVER['REMOTE_ADDR'];
}
$sql .= ") ORDER BY id DESC LIMIT 1";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$lastVote = $sth->fetch();

// Deny if it's still too early for the user to vote.
if ($lastVote && (strtotime($lastVote->vote_date)+(60*60*$banner->hours)) > time()) {
	$this->deny();
}

$now  = date('Y-m-d H:i:s');
$sql  = "INSERT INTO {$server->loginDatabase}.$votes (banner_id, account_id, credits, vote_date, vote_ip) ";
$sql .= "VALUES (?, ?, ?, ?, ?)";
$sth  = $server->connection->getStatement($sql);
$sth->execute(array($banner->id, $session->account->account_id, $banner->credits, $now, $_SERVER['REMOTE_ADDR']));

// Calculate points.
$points   = $server->loginServer->getPref($session->account->account_id, 'FluxVotePoints') + $banner->credits;
$reward   = 0;
$change   = ($changeToCredits=Flux::config('ChangeToCredits')) || ($changeToCashPoints=Flux::config('ChangeToCashPoints')) || ($changeToCoins=Flux::config('ChangeToCoins'));
$carry    = Flux::config('RolloverPoints');

if ($changeToCredits) {
	$pointsTo = Flux::config('PointsToCredits');
}
elseif ($changeToCashPoints) {
	$pointsTo = Flux::config('PointsToCashPoints');
}
else {
	$pointsTo = Flux::config('PointsToCoins');
}

if ($change && $points >= $pointsTo && ((!$changeToCashPoints && !$changeToCoins) || !$server->accountHasOnlineChars($session->account->account_id))) {
	if ($changeToCredits) {
		$rewarded = Flux::config('RewardedCredits');
	}
	elseif ($changeToCashPoints) {
		$rewarded = Flux::config('RewardedCashPoints');
	}
	else {
		$rewarded = Flux::config('RewardedCoins');
	}
	
	if ($changeToCoins) {
		$coins = new Coins($server, Flux::config('CoinsItemID'));
		
		// Check storage.
		$sql = "SELECT COUNT(*) AS total FROM {$server->loginDatabase}.storage WHERE account_id = ?";
		$sth = $server->connection->getStatement($sql);
		$sth->execute(array($session->account->account_id));
		$cnt = $sth->fetch()->total;

		// Check coin limit.
		$coinsMaxed = $coins->getCoins($session->account->account_id) >= Flux::config('CoinsStackLimit');

		// Is storage maxed?
		$storageMaxed = $cnt >= Flux::config('StorageLimit');
		
		if (!$coinsMaxed && !$storageMaxed) {
			for (; $points >= $pointsTo; $points -= $pointsTo) {
				$reward += $rewarded;
				if (!$carry) {
					$points = 0;
					break;
				}
			}
		}
	}
	else {
		for (; $points >= $pointsTo; $points -= $pointsTo) {
			$reward += $rewarded;
			if (!$carry) {
				$points = 0;
				break;
			}
		}
	}
	
	if ($changeToCredits) {
		// Deposit credits.
		$session->loginServer->depositCredits($session->account->account_id, $reward);
	}
	elseif ($changeToCashPoints) {
		// Deposit cash points.
		$cplib = new Cashpoints($server, Flux::config('DepositKafraPoints'));
		$cash  = $cplib->getCash($session->account->account_id);
		$cplib->setCash($session->account->account_id, $cash+$reward);
	}
	else {
		// Deposit coins.
		$orig = $coins->getCoins($session->account->account_id);
		$coins->setCoins($session->account->account_id, $orig+$reward);
	}
}

// (Re)set vote points.
$server->loginServer->setPref($session->account->account_id, 'FluxVotePoints', $points);
$this->redirect($banner->vote_url);
?>
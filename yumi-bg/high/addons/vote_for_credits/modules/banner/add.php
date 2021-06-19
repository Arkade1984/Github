<?php
if (!defined('FLUX_ROOT')) exit;
$title = Flux::message('BannerAddTitle');

// Form values.
$banners  = Flux::config('FluxTables.BannersTable');
$name     = trim($params->get('name'));
$voteURL  = trim($params->get('vote_url'));
$imageURL = trim($params->get('image_url'));
$hours    = trim($params->get('hours'));
$credits  = trim($params->get('credits'));

if (count($_POST)) {
	$credits = round($credits);
	
	if ($name === '') {
		$errorMessage = Flux::message('BannerAddNameError');
	}
	elseif ($voteURL === '') {
		$errorMessage = Flux::message('BannerAddVoteUrlError');
	}
	elseif ($imageURL === '') {
		$errorMessage = Flux::message('BannerAddImageUrlError');
	}
	elseif ($hours < 1 || $hours > 99) {
		$errorMessage = Flux::message('BannerAddHoursError');
	}
	elseif ($credits < 1) {
		$errorMessage = Flux::message('BannerAddCreditsError');
	}
	else {
		if (!preg_match('!^http://!i', $voteURL)) {
			$voteURL = "http://$voteURL";
		}
		if (!preg_match('!^http://!i', $imageURL)) {
			$voteURL = "http://$imageURL";
		}
		
		$sql  = "INSERT INTO {$server->loginDatabase}.$banners (name, vote_url, image_url, hours, credits, created, modified) ";
		$sql .= "VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$sth  = $server->connection->getStatement($sql);
		$sth->execute(array($name, $voteURL, $imageURL, $hours, $credits));
		
		$session->setMessageData(Flux::message('BannerAdded'));
		if ($auth->actionAllowed('banner', 'index')) {
			$this->redirect($this->url('banner', 'index'));
		}
		else {
			$this->redirect();
		}
	}
}
?>
<?php
if (!defined('FLUX_ROOT')) exit;
$title = "Add Voting Banner";

$banners	= Flux::config('FluxTables.VoteBannersTable');
$interval	= trim($params->get('interval'));
$amount		= round(trim($params->get('amount')));
$imageURL	= trim($params->get('image'));
$voteURL	= trim($params->get('vote'));

if (count($_POST)) {
	if (!$interval) {
		$errorMessage = "Please input a valid vote interval.";
	}
	else if (!$amount) {
		$errorMessage = "Please input a valid reward amount.";
	}
	else if (!$imageURL) {
		$errorMessage = "Please input an image URL for this banner.";
	}
	else if (!$voteURL) {
		$errorMessage = "Please input an vote URL for this banner.";
	}
	
	if(!$errorMessage) {
		if (!preg_match('!^http://!i', $imageURL)) {
			$imageURL = "http://$imageURL";
		}
		if (!preg_match('!^http://!i', $voteURL)) {
			$voteURL = "http://$voteURL";
		}
		
		$sql  = "INSERT INTO {$server->loginDatabase}.$banners (hours, amount, vote_url, image_url) ";
		$sql .= "VALUES (?, ?, ?, ?)";
		$sth  = $server->connection->getStatement($sql);
		$sth->execute(array($interval, $amount, $voteURL, $imageURL));
		
		$session->setMessageData("Banner has successfully been added!");
		$redirect = $auth->actionAllowed('banner', 'index') ? $this->url('banner', 'index') : null;
		$this->redirect($redirect);
	}
}
?>
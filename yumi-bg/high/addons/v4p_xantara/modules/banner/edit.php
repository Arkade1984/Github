<?php if (!defined('FLUX_ROOT')) exit;

$title = "Edit Voting Banner";

$bannersTable = Flux::config('FluxTables.VoteBannersTable');

$id = $params->get('id');

if(!$id) {
	$this->deny();
}

$sql = "SELECT * FROM {$server->loginDatabase}.$bannersTable WHERE banner_id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));
$banner = $sth->fetch();

if (count($_POST)) {	
	$interval = trim($params->get('interval'));
	$amount	  = round(trim($params->get('amount')));
	$imageURL = trim($params->get('image'));
	$voteURL  = trim($params->get('vote'));
	
	if (!$interval) {
		$interval = $banner->hours;
	}
	if (!$amount) {
		$amount = $banner->amount;
	}
	if (!$imageURL) {
		$imageURL = $banner->image_url;
	}
	if (!$voteURL) {
		$voteURL = $banner->vote_url;
	}

	if (!preg_match('!^http://!i', $imageURL)) {
		$imageURL = "http://$imageURL";
	}
	if (!preg_match('!^http://!i', $voteURL)) {
		$voteURL = "http://$voteURL";
	}
	
	$sql  = "UPDATE {$server->loginDatabase}.$bannersTable ";
	$sql .= "SET hours = ?, amount = ?, image_url = ?, vote_url = ? ";
	$sql .= "WHERE banner_id = ?";
	$sth  = $server->connection->getStatement($sql);
	$sth->execute(array($interval, $amount, $imageURL, $voteURL, $id));
	
	$session->setMessageData("Banner has successfully been updated!");
	$redirect = $auth->actionAllowed('banner', 'index') ? $this->url('banner', 'index') : null;
	$this->redirect($redirect);
}
?>
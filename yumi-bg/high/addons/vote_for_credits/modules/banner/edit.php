<?php
if (!defined('FLUX_ROOT')) exit;
$title = Flux::message('BannerEditTitle');

$banners  = Flux::config('FluxTables.BannersTable');
$id       = $params->get('id');
$sql      = "SELECT id, name, vote_url, image_url, hours, credits, created, modified FROM {$server->loginDatabase}.$banners WHERE id = ?";
$sth      = $server->connection->getStatement($sql);
$sth->execute(array($id));
$banner   = $sth->fetch();

if ($banner) {
	$name     = $banner->name;
	$voteURL  = $banner->vote_url;
	$imageURL = $banner->image_url;
	$hours    = $banner->hours;
	$credits  = $banner->credits;
	
	if (count($_POST)) {
		$name     = trim($params->get('name'));
		$voteURL  = trim($params->get('vote_url'));
		$imageURL = trim($params->get('image_url'));
		$hours    = trim($params->get('hours'));
		$credits  = round($params->get('credits'));

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

			$sql  = "UPDATE {$server->loginDatabase}.$banners SET ";
			$sql .= "name = ?, vote_url = ?, image_url = ?, hours = ?, credits = ?, modified = NOW() ";
			$sql .= "WHERE id = ?";
			$sth  = $server->connection->getStatement($sql);
			$sth->execute(array($name, $voteURL, $imageURL, $hours, $credits, $id));

			$session->setMessageData(Flux::message('BannerEdited'));
			if ($auth->actionAllowed('banner', 'index')) {
				$this->redirect($this->url('banner', 'index'));
			}
			else {
				$this->redirect();
			}
		}
	}
}
?>
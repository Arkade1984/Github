<?php
if (!defined('FLUX_ROOT')) exit;

$banners  = Flux::config('FluxTables.VoteBannersTable');
$redirect = $auth->actionAllowed('banner', 'index') ? $this->url('banner', 'index') : null;

$id       = $params->get('id');
$sql      = "SELECT banner_id FROM {$server->loginDatabase}.$banners WHERE banner_id = ?";
$sth      = $server->connection->getStatement($sql);

$sth->execute(array($id));
$banner   = $sth->fetch();

if ($banner) {
	$sth = $server->connection->getStatement("DELETE FROM {$server->loginDatabase}.$banners WHERE banner_id = ?");
	$sth->execute(array($id));
	$session->setMessageData("Banner has successfully been deleted!");
}
else {
	$session->setMessageData("Banner to be deleted cannot be found!");
}
$this->redirect($redirect);
?>
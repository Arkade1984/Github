<?php
if (!defined('FLUX_ROOT')) exit;
$banners  = Flux::config('FluxTables.BannersTable');
$id       = $params->get('id');
$sql      = "SELECT name FROM {$server->loginDatabase}.$banners WHERE id = ?";
$sth      = $server->connection->getStatement($sql);
$sth->execute(array($id));
$banner   = $sth->fetch();
$redirect = $auth->actionAllowed('banner', 'index') ? $this->url('banner', 'index') : null;

if ($banner) {
	$sth = $server->connection->getStatement("DELETE FROM {$server->loginDatabase}.$banners WHERE id = ?");
	$sth->execute(array($id));
	$session->setMessageData(sprintf(Flux::message('BannerDeleted'), $banner->name));
}
else {
	$session->setMessageData(Flux::message('BannerNotFound'));
}
$this->redirect($redirect);
?>
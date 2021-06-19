<?php
if (!defined('FLUX_ROOT')) exit;
$title   = Flux::message('BannerListTitle');
$banners = Flux::config('FluxTables.BannersTable');

$sql = "SELECT id, name, vote_url, image_url, hours, credits, created, modified FROM {$server->loginDatabase}.$banners ORDER BY name ASC";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$banners = $sth->fetchAll();
?>
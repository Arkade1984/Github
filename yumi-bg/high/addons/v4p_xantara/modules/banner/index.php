<?php
if (!defined('FLUX_ROOT')) exit;

$title			= "Voting Banners";

$bannersTable	= Flux::config('FluxTables.VoteBannersTable');

$sql = "SELECT * FROM {$server->loginDatabase}.$bannersTable ORDER BY banner_id ASC";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$banners = $sth->fetchAll();
$count = $sth->rowCount();
?>
<?php
if (!defined('FLUX_ROOT')) exit;
$title = 'Content Management System';

$pages = Flux::config('FluxTables.PagesTable');

$sql = "SELECT * FROM {$server->loginDatabase}.$pages";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$pages = $sth->fetchAll();
?>
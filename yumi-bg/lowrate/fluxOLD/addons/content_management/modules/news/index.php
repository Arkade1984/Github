<?php
if (!defined('FLUX_ROOT')) exit;
$title = 'News and Updates';

$news = Flux::config('FluxTables.NewsTable'); 
$sql = "SELECT * FROM {$server->loginDatabase}.$news ORDER BY news_dateposted ASC";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$news = $sth->fetchAll();
?>
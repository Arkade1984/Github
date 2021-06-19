<?php if (!defined('FLUX_ROOT')) exit;

$news = Flux::config('FluxTables.NewsTable'); 
$sql = "SELECT * FROM {$server->loginDatabase}.$news ORDER BY news_id DESC LIMIT 15";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$news = $sth->fetchAll();
?>
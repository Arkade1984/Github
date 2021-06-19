<?php
if (!defined('FLUX_ROOT')) exit;

$pages = Flux::config('FluxTables.PagesTable');
$path = trim($params->get('path'));
$sql = "SELECT * FROM {$server->loginDatabase}.$pages WHERE page_path = ? LIMIT 1";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($path));

$pages = $sth->fetchAll();

if($pages)
{
    foreach($pages as $prow)
    {
        $page_title = $prow->page_title;
        $page_body = $prow->page_body;
    }   
}
else
{
    $this->redirect($this->url('main','index'));
}

$title = $page_title;
?>
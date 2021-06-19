<?php if (!defined('FLUX_ROOT')) exit;  

$newss = Flux::config('FluxTables.NewsTable');
$id = $params->get('id');
$sql = "SELECT * FROM {$server->loginDatabase}.$newss WHERE news_id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));

$news = $sth->fetch();

if($news)
{
    $sth = $server->connection->getStatement("DELETE FROM {$server->loginDatabase}.$newss WHERE news_id = ?");
    $sth->execute(array($id));
    $this->redirect($this->url('news','index'));
} 
$this->redirect($this->url('news','index')); 
?>
<?php if (!defined('FLUX_ROOT')) exit;  
$this->loginRequired();

$pages = Flux::config('FluxTables.PagesTable');
$id = $params->get('id');
$sql = "SELECT * FROM {$server->loginDatabase}.$pages WHERE page_id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));

$page = $sth->fetch();

if($page)
{
    $sth = $server->connection->getStatement("DELETE FROM {$server->loginDatabase}.$pages WHERE page_id = ?");
    $sth->execute(array($id));
    $this->redirect($this->url('pages','index'));
}
$this->redirect($this->url('pages','index'));
?>
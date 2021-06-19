<?php if (!defined('FLUX_ROOT')) exit;

$news_id  = $_POST['news_id'];

$sql = "UPDATE cp_news SET news_title='".$_POST['news_title']."',news_body='".addslashes($_POST['news_body'])."' WHERE news_id=".$news_id;
$sth = $server->connection->getStatement($sql);
$sth->execute();
$this->redirect('?module=news');  
?>
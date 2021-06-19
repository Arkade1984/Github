<?php if (!defined('FLUX_ROOT')) exit;
$page_id  = $_POST['page_id'];

$sql = "UPDATE cp_pages SET page_path='".$_POST['page_path']."',page_title='".$_POST['page_title']."',page_body='".addslashes($_POST['page_body'])."' WHERE page_id=".$page_id;
$sth = $server->connection->getStatement($sql);
$sth->execute();
$this->redirect('?module=pages');
?>
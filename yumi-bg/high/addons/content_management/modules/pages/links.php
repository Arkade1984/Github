<?php if (!defined('FLUX_ROOT')) exit; 

$sql = "SELECT * FROM cp_pages";
$sth = $server->connection->getStatement($sql);
$sth->execute();

$link = $sth->fetchAll(); 
?>

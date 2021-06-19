<?php if (!defined('FLUX_ROOT')) exit;


$bind = array();
$sql  = "SELECT guild_castle.*, guild.name, guild.emblem_len as guild_emblem_len, guild.master FROM {$server->charMapDatabase}.`guild_castle` ";
$sql .= "LEFT JOIN {$server->loginDatabase}.guild ON `guild_castle`.guild_id = guild.guild_id ";
$sql .= "ORDER BY guild_castle.castle_id asc";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$castleflag = $sth->fetchAll();


$bind = array();
$sql  = "SELECT guild_castle.*, guild.name, guild.emblem_len as guild_emblem_len FROM {$server->charMapDatabase}.`guild_castle` ";
$sql .= "LEFT JOIN {$server->loginDatabase}.guild ON `guild_castle`.guild_id = guild.guild_id ";
$sql .= "ORDER BY guild_castle.defense desc, guild_castle.economy desc";
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$castle = $sth->fetchAll();

 ?>


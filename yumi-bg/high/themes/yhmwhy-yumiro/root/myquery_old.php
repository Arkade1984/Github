<?php 
$GOTMid = 3119;


//Do Not Edit Anything Beyond this code

//Guild Agit
	$sql  = "SELECT guild_castle.*, guild.name, guild.emblem_len as guild_emblem_len FROM `guild_castle` ";
	$sql .= "LEFT JOIN guild ON `guild_castle`.guild_id = guild.guild_id ";
	$sql .= "WHERE guild_castle.castle_id in (2,9,15,19,26) order by guild_castle.castle_id asc";
	$castle=mysql_query($sql);
	
	//$sth  = $server->connection->getStatement($sql);
	//$sth->execute($bind);
	//$castle = $sth->fetchAll();


	$sql  = "SELECT guild.*, char.class FROM `guild` ";
	$sql .= "LEFT JOIN char ON `guild`.char_id = char.char_id ";
	$sql .= "WHERE guild.guild_id = " . $GOTMid;
	//$sth  = $server->connection->getStatement($sql);
	//$sth->execute($bind);
	//$GOTM = $sth->fetchAll();
	$castle=mysql_query($sql);
	
	
	$sql  = "SELECT count(*) as mycount from guild_castle where guild_id = " . $GOTMid;
	//$sth  = $server->connection->getStatement($sql);
	//$sth->execute($bind);
	//$AgitCount = $sth->fetchAll();
	$castle=mysql_query($sql);

function getCastleName2($myID){
	if($myID == 2){ $qValue = "Nuenberg";
	} else if($myID == 9){ $qValue = "Mersetzdeitz";
	} else if($myID == 15){ $qValue = "Kriemhild";
	} else if($myID == 19){ $qValue = "Gondul";
	} else if($myID == 26){ $qValue = "Viblainn";
	}
	return $qValue;
}
?>
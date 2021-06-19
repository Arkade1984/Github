<?php 


	class StreamsideHome{
		function connectdatabase(){		
			$DBSETUP 	= 		'local';
			if($DBSETUP == 'local'){
				$DBHOST 	=  		'localhost';
				$DBUSER 	=  		'root';
				$DBPASS 	=  		'patola';
				$DBNAME 	=  		'ragnarok2';

			}else{
				$DBHOST 	=  		'205.185.112.51';
				$DBUSER 	=  		'streamsi';
				$DBPASS 	=  		't2a5y-2_@Lcx';
				$DBNAME 	=  		'streamsi_datab';
			
			}
			
			mysql_connect($DBHOST,$DBUSER,$DBPASS) or die("Cannot Connect");
			mysql_select_db($DBNAME);
		}

		function getAgit(){
				$this->connectdatabase();
			
				$sql  			=		"SELECT guild_castle.*, guild.name, guild.emblem_len as guild_emblem_len FROM `guild_castle` 
										LEFT JOIN guild ON `guild_castle`.guild_id = guild.guild_id 
										WHERE guild_castle.castle_id in (2,9,15,19,26) order by guild_castle.castle_id asc";
				$query			=		mysql_query($sql);
				return $query;						 
		}
		
		
		function GetGOTM($params){
				$this->connectdatabase();
				$sql  			= 		"SELECT `guild`.*, `char`.class, `char`.name as charname FROM `guild` 
										LEFT JOIN `char` ON `guild`.char_id = `char`.char_id 
										WHERE `guild`.guild_id = " . $params;
				$query			=		mysql_query($sql);
				return $query;	
		}
		
		function getAgitCount($params){
				$this->connectdatabase();
				$sql  			= 		"SELECT count(*) as mycount from `guild_castle` where guild_id = " . $params;
				$query			=		mysql_query($sql);
				return $query;	
		}
		
		function QryTips(){
				$this->connectdatabase();
				$sql 		= 		"SELECT * FROM mytip order by RAND() LIMIT 0,1";
				$query	 	=		mysql_query($sql);
				return $query;
		}
		
		function getChar($params){
				$this->connectdatabase();
				$sql 		= 		"SELECT * FROM `char` WHERE char_id = " . $params . " LIMIT 0,1";
				$query	 	=		mysql_query($sql);
				return $query;
		}
		
		function QryItemMall(){
				$this->connectdatabase();
				$sql 		= 		"SELECT * FROM `myitemscroll` WHERE ItemMall = 1";
				$query	 	=		mysql_query($sql);
				return $query;
		}
		
		function QryFeatured(){
				$this->connectdatabase();
				$sql 		= 		"SELECT * FROM `myitemscroll` WHERE Featured = 1";
				$query	 	=		mysql_query($sql);
				return $query;
		}
		
		function QryGetItem($params){
				$this->connectdatabase();
				$sql 		= 		"SELECT * FROM `myitemscroll` WHERE myID = " . $params . " LIMIT 0,1";
				$query	 	=		mysql_query($sql);
				return $query;
		}
		
	}
	
	$database =  new StreamsideHome;


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
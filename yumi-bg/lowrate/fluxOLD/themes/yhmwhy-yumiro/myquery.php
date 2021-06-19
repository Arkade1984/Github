<?php 


	class StreamsideHome{
		function connectdatabase(){		
			$DBSETUP 	= 		'local';
			if($DBSETUP == 'live'){
				$DBHOST 	=  		'localhost';
				$DBUSER 	=  		'root';
				$DBPASS 	=  		'patola';
				$DBNAME 	=  		'ragnarok2';

			}else{
				$DBHOST 	=  		'208.115.234.194';
				$DBUSER 	=  		'root';
				$DBPASS 	=  		'snipergoat';
				$DBNAME 	=  		'yumiro';
			
			}
			
			mysql_connect($DBHOST,$DBUSER,$DBPASS) or die("Cannot Connect");
			mysql_select_db($DBNAME);
		}

		function GetGOTM($params){
				$this->connectdatabase();
				$sql  			= 		"SELECT `guild`.*, `char`.class, `char`.name as charname FROM `guild` 
										LEFT JOIN `char` ON `guild`.char_id = `char`.char_id 
										WHERE `guild`.guild_id = " . $params;
				$query			=		mysql_query($sql);
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
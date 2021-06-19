<?php 


	class StreamsideHome{
		function connectdatabase(){		
			$DBSETUP 	= 		'local';
			if($DBSETUP == 'live'){
				$DBHOST 	=  		'72.46.150.114';
				$DBUSER 	=  		'yumilow';
				$DBPASS 	=  		'A74e_Kc895';
				$DBNAME 	=  		'3ceam_lowrate';

			}else{
				$DBHOST 	=  		'72.46.150.114';
				$DBUSER 	=  		'yumilow';
				$DBPASS 	=  		'A74e_Kc895';
				$DBNAME 	=  		'3ceam_lowrate';
			
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
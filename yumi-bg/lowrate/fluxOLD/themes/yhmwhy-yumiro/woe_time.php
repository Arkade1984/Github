<?php
		//date_default_timezone_set("Africa/Tunis");
		$WOE_DAYS		=	getdate();
		$woe_iconVanquish = 'empoff';
		$woe_iconAncient = 'empoff';
		$woe_iconOrigins = 'empoff';
		switch($WOE_DAYS['wday']){
			case 1: // Monday from 14:00 till 15:00 (GMT+8) 
				if($WOE_DAYS['hours'] == 15){
					$woe_iconVanquish = 'empon';
				}
			break; 
			case 2: // Tuesday from 14:00 till 15:00 (GMT+8) 
				if($WOE_DAYS['hours'] == 14){
					$woe_iconAncient = 'empon';
				}
			break; 
			case 3: // Wednesday from 14:00 till 15:00 (GMT+8) 
				if($WOE_DAYS['hours'] == 14){
					$woe_iconOrigins = 'empon';
				}
			break; 
			default: 	$woe_iconVanquish = 'empoff';
						$woe_iconAncient = 'empoff';
						$woe_iconOrigins = 'empoff';

		}

		//if($WOE_DAYS['hours'] >= 14 && $WOE_DAYS['hours'] <= 16){
		//	$bg_icon = 'bgon';
		//}else{
		//	$bg_icon = 'bgoff';
		//}

?>






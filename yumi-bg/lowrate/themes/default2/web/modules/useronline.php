<?php

#####################################
#  
#    Script By Latheesan - Owner of www.SoulRO.net
#
#####################################

require('connection.php');
$query = "SELECT COUNT(*) as total FROM `char` WHERE online = '1'";
$result = mysql_query($query,$conn) or die(mysql_error());
mysql_close($conn);

$arr = mysql_fetch_array($result);
$usersonline = $arr["total"];

/* Do NOT Edit Above Here */

?>
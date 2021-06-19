<?php

#####################################
#  
#    Script By Latheesan - Owner of www.SoulRO.net
#
#####################################

/* Configurations */
$host         = '127.0.0.1'; 
$acc_port     = '6900'; 
$char_port    = '6121'; 
$map_port     = '5121'; 
$interval     = time()+5; 
$online       = "<font color='yellow'>ONLINE</font>"; 
$offline      = "<font color='white'>OFFLINE</font>"; 

#####################################
#  
#    DO NOT EDIT BELOW HERE
#
#####################################

/* Disable Error Reporting */
error_reporting(0);

/* Check Server Status, If Server Status Was Not Checked In Last $interval seconds */
if($_COOKIE["checked"] != "true")
{
        /* Check Server Status */
        $acc = fsockopen($host, $acc_port, $errno, $errstr, 1);
        $char = fsockopen($host, $char_port, $errno, $errstr, 1);
        $map = fsockopen($host, $map_port, $errno, $errstr, 1);

        /* Workout Server Status & Set Cookie */
        if(!$acc){ $acc_status = $offline; setcookie("acc_status", "offline", $interval); } else { $acc_status = $online; }
        if(!$char){ $char_status = $offline; setcookie("char_status", "offline", $interval); } else { $char_status = $online; }
        if(!$map){ $map_status = $offline; setcookie("map_status", "offline", $interval); } else { $map_status = $online; }

        /* Set Cookie To Let The Script Know, Server Status is Checked */
        setcookie("checked", "true", $interval);
}
else
if($_COOKIE["checked"] == "true")
{
        /* Read Cookie Values */
        if($_COOKIE["acc_status"] == "offline"){ $acc_status = $offline; } else { $acc_status = $online; }
        if($_COOKIE["char_status"] == "offline"){ $char_status = $offline; } else { $char_status = $online; }
        if($_COOKIE["map_status"] == "offline"){ $map_status = $offline; } else { $map_status = $online; }
}

?>
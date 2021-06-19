<?php
$conn=null;
$host="localhost";
$username="web";
$pass="123456";
$db="website";
$conn= mysql_connect($host, $username, $pass) or die(mysql_error());
mysql_select_db($db,$conn) or die(mysql_error());
?>
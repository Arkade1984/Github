<?php 

include('conf_global.php'); 
include_once("dBug.php");
//connect to your database ** EDIT REQUIRED HERE **
mysql_connect($INFO['sql_host'],$INFO['sql_user'],$INFO['sql_pass']); //(host, username, password)

//specify database ** EDIT REQUIRED HERE **
mysql_select_db($INFO['sql_database']) or die("Unable to select database"); //select which database we're using

// Build SQL Query  
//$query = "SELECT DISTINCT TABLE_NAME FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA='" . $INFO['sql_database'] . "';";
//$result = mysql_query($query) or die(mysql_error ());
//new dBug($result);



//$q = GetForum('110,111,112,113');
//new dBug($q);
//while ($row = mysql_fetch_assoc($q)) {
//    echo $row['name'];
//    echo $row['redirect_url'];
//}


//$q = GetNewestUpdates(5);
//new dBug($q);


//while ($row = mysql_fetch_assoc($q)) {
//    echo $row['name'];
//    echo $row['redirect_url'];
//}

//	$query = "SELECT * from	ibf_forums";
//	$result = mysql_query($query) or die(mysql_error ());
//	new dBug($result);


function GetForum($myID){

	$query = "SELECT * from	ibf_forums where id in (" . $myID . ")";
	$result = mysql_query($query) or die(mysql_error ());
	//return $result;
	while ($row = mysql_fetch_assoc($result)) {
		echo "<a href='" . $row['redirect_url'] . "'>" . $row['name'] . "</a><br>";
	}
}

function GetNewestUpdates($myCount){
	$query = "SELECT * from	ibf_topics where forum_id in (5,6,102,103) order by start_date desc limit 0," . $myCount;
	$result = mysql_query($query) or die(mysql_error ());
	return $result;

}


?>
<!--35-->



<?php

/////////////////////////////////////////////////////////
// Copyright 2010~2011 by Latheesan (WildRO.com) Admin //
/////////////////////////////////////////////////////////

// Page Generation Time - Testing Purpose Only
$time = microtime();
$time = explode(" ", $time);
$time = $time[1] + $time[0];
$start = $time;

// Load Server Status Checker Script
include('server_status.php');

// Image Data - Replace These With Your Own Actual Images, For E.g. $server_on = "images/online.jpg";
$server_on = "themes/default/check.png";
$server_off = "themes/default/check2.png";

?>
<style type="text/css">
body,td
{
	font-family: "Verdana";
	font-size: 12px;
	color: #333;
}

.online_counter
{
position: absolute;
top: 0%;
left: 50%;
margin-left: -19px;
margin-top: 18px;
font-size: 15;
color: white;
}

.loginonline
{
position: absolute;
top: 0%;
left: 50%;
margin-left: -248px;
margin-top: 4px;
font-size: 15;
color: white;
}

.charonline
{
position: absolute;
top: 0%;
left: 50%;
margin-left: -185px;
margin-top: 4px;
font-size: 15;
color: white;
}

.maponline
{
position: absolute;
top: 0%;
left: 50%;
margin-left: -123px;
margin-top: 4px;
font-size: 15;
color: white;
}

</style>
<div class="move">

<table border="0" cellspacing="0" cellpadding="5">
	<tr>
	
		<td class="loginonline">
			<?php

			if ($loginOnline) {
				echo '<img src="', $server_on ,'" alt="" border="0" />';
			} else {
				echo '<img src="', $server_off ,'" alt="" border="0" />';
			}

			?>
		</td>
	</tr>
	<tr>
	
		<td class="charonline">
			<?php

			if ($charOnline) {
				echo '<img src="', $server_on ,'" alt="" border="0" />';
			} else {
				echo '<img src="', $server_off ,'" alt="" border="0" />';
			}

			?>
		</td>
	</tr>
	<tr>
	
		<td class="maponline">
			<?php

			if ($mapOnline) {
				echo '<img src="', $server_on ,'" alt="" border="0" />';
			} else {
				echo '<img src="', $server_off ,'" alt="" border="0" />';
			}

			?>
		</td>
	</tr>
	<tr>
	
		<td class="online_counter"><strong><?php echo $onlineNow; ?></strong></td>
	</tr>
	<tr>
	</tr>
</table>
<br />
</div>

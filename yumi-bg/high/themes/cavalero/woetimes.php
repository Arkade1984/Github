<?php
if (!defined('FLUX_ROOT')) exit;

function IsInTimeRange($time_start, $time_end, $time_needle)
{
	$res = false;
	$t1 = strtotime("1970-01-01 {$time_start}:00");
	$t2 = strtotime("1970-01-01 {$time_end}:00");
	$tn = strtotime("1970-01-01 {$time_needle}:00");
	if($t1 >= $t2) 
		$t2 = strtotime('+1 day', $t2);
	return (($tn >= $t1) && ($tn <= $t2)); // or return ($tn > $t1) && ($tn < $t2);
}

$title     = Flux::message('WoeTitle');
$sunday    = date('l', $sun=strtotime('Sunday'));
$monday    = date('l', $mon=($sun+86400));
$tuesday   = date('l', $tue=($mon+86400));
$wednesday = date('l', $wed=($tue+86400));
$thursday  = date('l', $thu=($wed+86400));
$friday    = date('l', $fri=($thu+86400));
$saturday  = date('l', $sat=($fri+86400));
$dayNames  = array($sunday, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday);
$woeTimes  = array();

foreach ($session->loginAthenaGroup->athenaServers as $athenaServer) {
	$times = $athenaServer->woeDayTimes;
	if ($times) {
		$woeTimes[$athenaServer->serverName] = array();
		foreach ($times as $time) {
			$woeTimes[$athenaServer->serverName][] = array(
				'startingDay'  => $time['startingDay'],
				'startingHour' => $time['startingTime'],
				'endingDay'    => $time['endingDay'],
				'endingHour'   => $time['endingTime']
			);
		}
	}
}


$woeIsOn = false;
if ($woeTimes) {
	$now = date('H:i',time());
	foreach($woeTimes['FluxRO'] as $timeSpan) {
		if(IsInTimeRange($timeSpan['startingHour'],$timeSpan['endingHour'],$now) && (strtotime(date("w")) == $timeSpan['startingDay'] || strtotime(date("w")) == $timeSpan['endingDay']))
			$woeIsOn = true;
	}
}
		
?>

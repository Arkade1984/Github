<?php

/////////////////////////////////////////////////////////
// Copyright 2010~2011 by Latheesan (WildRO.com) Admin //
/////////////////////////////////////////////////////////

/*
 * Script Setting
 */
if (!defined('__SERVER_HOST')) {
	define('__SERVER_HOST', ''); // Server IP or Hostname
}
if (!defined('__LOGIN_PORT')) {
	define('__LOGIN_PORT', 6900); // eAthena Login Server Port
}
if (!defined('__CHAR_PORT')) {
	define('__CHAR_PORT', 6121); // eAthena Char Server Port
}
if (!defined('__MAP_PORT')) {
	define('__MAP_PORT', 5121); // eAthena Map Server Port
}
if (!defined('__MYSQL_HOST')) {
	define('__MYSQL_HOST', ''); // MySQL Hostname or IP
}
if (!defined('__MYSQL_USER')) {
	define('__MYSQL_USER', ''); // MySQL Username
}
if (!defined('__MYSQL_PASS')) {
	define('__MYSQL_PASS', ''); // MySQL Password
}
if (!defined('__MYSQL_BASE')) {
	define('__MYSQL_BASE', 'ragnarok'); // MySQL Database Name
}
if (!defined('__SERVER_STATUS_CACHE_FILE')) {
	define('__SERVER_STATUS_CACHE_FILE', 'server_status.cache');
}
if (!defined('__SERVER_STATUS_CACHE_FOR')) {
	define('__SERVER_STATUS_CACHE_FOR', 1); // In Minutes
}
if (!defined('__SERVER_STATUS_CHECK_TIMEOUT')) {
	define('__SERVER_STATUS_CHECK_TIMEOUT', 1); // In Seconds
}

/////////////////////////////////////////////////////////////////
// Do Not Edit Below Here - Unless You Know What You Are Doing //
/////////////////////////////////////////////////////////////////

/*
 * MySQL Connection Helper Class
 */
class MySQL
{
	var $mysql_host = null;
	var $mysql_user = null;
	var $mysql_pass = null;
	var $mysql_base = null;
	var $mysql_link = null;
	var $mysql_result = null;
	var $con_var_set = false;

	function MySQL($_host, $_user, $_pass, $_base)
	{
		if ((isset($_host) && !empty($_host)) &&
			(isset($_user) && !empty($_user)) &&
			(isset($_pass) && !empty($_pass)) &&
			(isset($_base) && !empty($_base)))
		{
			$this->mysql_host = $_host;
			$this->mysql_user = $_user;
			$this->mysql_pass = $_pass;
			$this->mysql_base = $_base;

			$this->con_var_set = true;
		}
	}

	function Connect()
	{
		if ($this->con_var_set)
		{
			$this->mysql_link = @mysql_connect($this->mysql_host, $this->mysql_user, $this->mysql_pass) or trigger_error(mysql_error(), E_USER_ERROR);

			if ($this->mysql_link != null) {
				@mysql_select_db($this->mysql_base, $this->mysql_link) or trigger_error(mysql_error(), E_USER_ERROR);
			}
		}
	}

	function FreeResult()
	{
		if ($this->mysql_result != null && is_resource($this->mysql_result)) {
			@mysql_free_result($this->mysql_result) or trigger_error(mysql_error(), E_USER_ERROR);
		}
	}

	function Query($_query)
	{
		$this->FreeResult();

		if (isset($_query) && !empty($_query)) {
			$this->mysql_result = @mysql_query($_query, $this->mysql_link) or trigger_error(mysql_error(), E_USER_ERROR);
		}
	}

	function FetchAssoc()
	{
		return is_resource($this->mysql_result) ? @mysql_fetch_assoc($this->mysql_result) : array();
	}

	function NumRows()
	{
		return is_resource($this->mysql_result) ? @mysql_num_rows($this->mysql_result) : 0;
	}

	function Close()
	{
		$this->FreeResult();

		if ($this->mysql_link != null && is_resource($this->mysql_link))
		{
			@mysql_close($this->mysql_link) or trigger_error(mysql_error(), E_USER_ERROR);
		}
	}
}

/*
 *  Error Reporting Config
 */
error_reporting(E_USER_ERROR);
@ini_set('display_errors', 1);

/*
 * Create Cache File If It Does Not Exists
 */
if (!file_exists(__SERVER_STATUS_CACHE_FILE))
{
	$default_status = json_encode(array('loginOnline' => 0, 'charOnline' => 0, 'mapOnline' => 0, 'onlineNow' => 0, 'serverPeaked' => 0, 'lastChecked' => 0));
	$handle = @fopen(__SERVER_STATUS_CACHE_FILE, 'w') or trigger_error('Could not create file : '. __SERVER_STATUS_CACHE_FILE, E_USER_ERROR);
	@fwrite($handle, $default_status, strlen($default_status)) or trigger_error('Could not write cache : '. $default_status, E_USER_ERROR);
	@fclose($handle) or trigger_error('Could not close cache file handle', E_USER_ERROR);
}

/*
 * Load Cache File
 */
$cached_data = @file_get_contents(__SERVER_STATUS_CACHE_FILE) or trigger_error('Could not load cached data from file : '. __SERVER_STATUS_CACHE_FILE, E_USER_ERROR);
$cached_status = @json_decode($cached_data) or trigger_error('Could not decode cached data : '. $cached_data, E_USER_ERROR);
if (is_object($cached_status))
{
	// Extract Data
	$cachedLoginOnline  = $cached_status->{'loginOnline'};
	$cachedCharOnline   = $cached_status->{'charOnline'};
	$cachedMapOnline    = $cached_status->{'mapOnline'};
	$cachedLastChecked  = $cached_status->{'lastChecked'};
	$cachedOnlineNow    = $cached_status->{'onlineNow'};
	$cachedServerPeaked = $cached_status->{'serverPeaked'};

	// Update Server Status If Needed
	if (($cachedLastChecked + (60 * intval(__SERVER_STATUS_CACHE_FOR))) < time())
	{
		// Temp Status
		$_temp_loginOnline  = 0;
		$_temp_charOnline   = 0;
		$_temp_mapOnline    = 0;
		$_temp_onlineNow    = 0;
		$_temp_serverPeaked = 0;

		// Check Login Server
		if ($l = @fsockopen(__SERVER_HOST, __LOGIN_PORT, $errno, $errstr, __SERVER_STATUS_CHECK_TIMEOUT)) {
			$_temp_loginOnline = 1;
			@fclose($l);
		}

		// Check Char Server
		if ($c = @fsockopen(__SERVER_HOST, __CHAR_PORT, $errno, $errstr, __SERVER_STATUS_CHECK_TIMEOUT)) {
			$_temp_charOnline = 1;
			@fclose($c);
		}

		// Check Map Server
		if ($m = @fsockopen(__SERVER_HOST, __MAP_PORT, $errno, $errstr, __SERVER_STATUS_CHECK_TIMEOUT)) {
			$_temp_mapOnline = 1;
			@fclose($m);
		}

		// Create MySQL Object
		$mysql = new MySQL(__MYSQL_HOST, __MYSQL_USER, __MYSQL_PASS, __MYSQL_BASE);

		// Connect To MySQL Server
		$mysql->Connect();

		// Check How Many Players Are Online
		$mysql->Query("SELECT COUNT(*) AS `onlineNow` FROM `char` WHERE `online` = 1");
		if ($mysql->NumRows() == 1) {
			$row = $mysql->FetchAssoc();
			$_temp_onlineNow = $row['onlineNow'];
		}

		// Check If Players Online Now Is Greater Than Last Peak
		if ($_temp_onlineNow > $cachedServerPeaked) {
			$_temp_serverPeaked = $_temp_onlineNow;
		} else {
			$_temp_serverPeaked = $cachedServerPeaked;
		}

		// Close MySQL Connection
		$mysql->Close();

		// Store Cached Data
		$server_status = json_encode(array('loginOnline' => $_temp_loginOnline, 'charOnline' => $_temp_charOnline, 'mapOnline' => $_temp_mapOnline, 'onlineNow' => $_temp_onlineNow, 'serverPeaked' => $_temp_serverPeaked, 'lastChecked' => time()));
		$handle = @fopen(__SERVER_STATUS_CACHE_FILE, 'w') or trigger_error('Could not create file : '. __SERVER_STATUS_CACHE_FILE, E_USER_ERROR);
		@fwrite($handle, $server_status, strlen($server_status)) or trigger_error('Could not write cache : '. $server_status, E_USER_ERROR);
		@fclose($handle) or trigger_error('Could not close cache file handle', E_USER_ERROR);

		// Return Server Status From Live Checking
		$loginOnline  = ($_temp_loginOnline == 1 ? true : false);
		$charOnline   = ($_temp_charOnline  == 1 ? true : false);
		$mapOnline    = ($_temp_mapOnline   == 1 ? true : false);
		$onlineNow    = number_format($_temp_onlineNow);
		$serverPeaked = number_format($_temp_serverPeaked);
	}
	else
	{
		// Return Server Status From Cache
		$loginOnline  = ($cachedLoginOnline == 1 ? true : false);
		$charOnline   = ($cachedCharOnline  == 1 ? true : false);
		$mapOnline    = ($cachedMapOnline   == 1 ? true : false);
		$onlineNow    = number_format($cachedOnlineNow);
		$serverPeaked = number_format($cachedServerPeaked);
	}
}
else {
	trigger_error('Could not parse cached status, please delete this file : '. __SERVER_STATUS_CACHE_FILE, E_USER_ERROR);
}

?>
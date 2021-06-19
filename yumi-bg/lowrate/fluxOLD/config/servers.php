<?php
return array(
	// Example server configuration. You may have more arrays like this one to
	// specify multiple server groups (however they should share the same login
	// server whilst they are allowed to have multiple char/map pairs).
	array(
		'ServerName'     => 'YumiRO CP',
		// Global database configuration (excludes logs database configuration).
		'DbConfig'       => array(
			//'Socket'     => '/tmp/mysql.sock',
			//'Port'       => 3306,
			//'Encoding'   => 'utf8', // Connection encoding -- use whatever here your MySQL tables collation is.
			'Convert'    => 'utf8',
				// -- 'Convert' option only works when 'Encoding' option is specified and iconv (http://php.net/iconv) is available.
				// -- It specifies the encoding to convert your MySQL data to on the website (most likely needs to be utf8)
			'Hostname'   => '72.46.150.114',
			'Username'   => 'root',
			'Password'   => 'A74e-Kc895',
			'Database'   => '3ceam_lowrate',
			'Persistent' => true,
			'Timezone'   => null // Example: '+0:00' is UTC.
			// The possible values of 'Timezone' is as documented from the MySQL website:
			// "The value can be given as a string indicating an offset from UTC, such as '+10:00' or '-6:00'."
			// "The value can be given as a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'." (see below continuation!)
			// **"Named time zones can be used only if the time zone information tables in the mysql database have been created and populated."
		),
		// This is kept separate because many people choose to have their logs
		// database accessible under different credentials, and often on a
		// different server entirely to ensure the reliability of the log data.
		'LogsDbConfig'   => array(
			//'Socket'     => '/tmp/mysql.sock',
			//'Port'       => 3306,
			//'Encoding'   => null, // Connection encoding -- use whatever here your MySQL tables collation is.
			'Convert'    => 'utf8',
				// -- 'Convert' option only works when 'Encoding' option is specified and iconv (http://php.net/iconv) is available.
				// -- It specifies the encoding to convert your MySQL data to on the website (most likely needs to be utf8)
			'Hostname'   => '72.46.150.114',
			'Username'   => 'root',
			'Password'   => 'A74e-Kc895',
			'Database'   => '3ceam_lowrate',
			'Persistent' => true,
			'Timezone'   => null // Possible values is as described in the comment in DbConfig.
		),
		// Login server configuration.
		'LoginServer'    => array(
			'Address'  => '72.46.150.114',
			'Port'     => 6901,
			'UseMD5'   => false,
			'NoCase'   => true, // eA account case-sensitivity; Default: Case-INsensitive (true).
			'Level'    => 0,    // Default account level during registration.
			//'Database' => 'ragnarok'
		),
		'CharMapServers' => array(
			array(
				'ServerName'    => 'YumiRO',
				'BaseExpRates'  => 200,
				'JobExpRates'   => 200,
				'MvpExpRates'   => 200,
				'DropRates'     => 25,
				'MvpDropRates'  => 25,
				'CardDropRates' => 25,
				'MaxCharSlots'  => 9,
				'DateTimezone'  => null,       // Specifies game server's timezone for this char/map pair. (See: http://php.net/timezones)
				//'ResetDenyMaps' => 'sec_pri',  // Defaults to 'sec_pri'. This value can be an array of map names.
				//'Database'      => 'ragnarok', // Defaults to DbConfig.Database
				'CharServer'    => array(
					'Address'   => '72.46.150.114',
					'Port'      => 6862
				),
				'MapServer'     => array(
					'Address'   => '72.46.150.114',
					'Port'      => 5862
				),
				// -- WoE days and times --
				// First parameter: Starding day 0=Sunday / 1=Monday / 2=Tuesday / 3=Wednesday / 4=Thursday / 5=Friday / 6=Saturday
				// Second parameter: Starting hour in 24-hr format.
				// Third paramter: Ending day (possible value is same as starting day).
				// Fourth (final) parameter: Ending hour in 24-hr format.
				// ** (Note, invalid times are ignored silently.)
				'WoeDayTimes'   => array(
					//array(0, '12:00', 0, '14:00'), // Example: Starts Sunday 12:00 PM and ends Sunday 2:00 PM
					//array(3, '14:00', 3, '15:00')  // Example: Starts Wednesday 2:00 PM and ends Wednesday 3:00 PM
				),
				// Modules and/or actions to disallow access to during WoE.
				'WoeDisallow'   => array(
					array('module' => 'character', 'action' => 'online'),  // Disallow access to "Who's Online" page during WoE.
					array('module' => 'character', 'action' => 'mapstats') // Disallow access to "Map Statistics" page during WoE.
				)
			)
		)
	)
);
?>
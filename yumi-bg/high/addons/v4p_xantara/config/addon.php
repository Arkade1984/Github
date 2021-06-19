<?php
return array(
	// Reward Type is configured in the in-game script

	// VoteVerifyIP
	// true  -- disallow voting from same IP on multiple accounts.
	// false -- allow voting from the same IP on multiple accounts.
	'VoteVerifyIP'			=> true,
	
	// Menu and sub-menu items
	'MenuItems' => array(
		'Main Menu' => array(
			'Vote' => array('module' => 'vote')
		),
		'Admin' => array(
			'Voting Banners' => array('module' => 'banner')
		)
	),
	'SubMenuItems' => array(
		'banner' => array(
			'index' => 'List Voting Banners',
			'add'   => 'Add Voting Banner'
		)
	),
	
	// Do NOT edit unless you are 100% sure you know what you are doing!
	'FluxTables' => array(
		'VoteBannersTable'	=> 'cp_banners',
		'VotePointsTable'	=> 'cp_vpoints',
		'VoteHistoryTable'	=> 'cp_votelog'
	)
)
?>
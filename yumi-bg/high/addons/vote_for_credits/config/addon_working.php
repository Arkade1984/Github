<?php
return array(
	// - 'VerifyIP':
	// true  -- disallow voting from same IP on multiple accounts.
	// false -- allow voting from the same IP on multiple accounts.
	'VerifyIP'           => false,
	
	// Show top voters in stats page, default is top 20.
	'ShowTopVotes'       => 20,
	
	// Use credits?
	'ChangeToCredits'    => false,  // Set this to true if you would like to change points to credits. (does not work with ChangeToCashPoints or ChangeToCoins)
	'PointsToCredits'    => 5,      // The amount of points needed to earn the rewarded credits. (needs ChangeToCredits to be true)
	'RewardedCredits'    => 1,      // The amount of credits rewarded after accumulating points. (needs ChangeToCredits to be true)
	
	// Use cash points? (or kafra points)
	'ChangeToCashPoints' => true,  // Set this to true if you would like to change points to cash points. (does not work with ChangeToCredts or ChangeToCoins)
	'PointsToCashPoints' => 1,      // The amount of points needed to earn the rewarded cash points. (needs ChangeToCashPoints to be true)
	'RewardedCashPoints' => 2,      // The amount of credits rewarded after accumulating points. (needs ChangeToCashPoints to be true)
	'DepositKafraPoints' => true,  // You may set this to true as well to deposit kafra points instead of cash. (needs ChangeToCashPoints to be true)
	
	// Using coins?
	// To use coins, your coin item MUST be stackable, you must be able to stack coins on top of each other, instead of having
	// a whole bunch of separate coin items they must be able to add to each other.
	// NOTE: Coins will be stored in the user's **storage** because there is no reliable way to store them in the character,
	// since an account can have MULTIPLE characters.
	'ChangeToCoins'      => false,  // Set this to true if you want to change points to coins. (does not work with ChangeToCredits or ChangeToCashPoints)
	'CoinsItemID'        => 7539,   // This is the item ID of your coins, poring coins or whatever coin system you may be using.
	'PointsToCoins'      => 5,      // The amount of points needed to earn the rewarded coins. (needs ChangeToCoins to be true)
	'RewardedCoins'      => 1,      // The amount of coins rewarded after accumulating points. (needs ChangeToCoins to be true)
	'StorageLimit'       => 300,    // This is the limit to an account's storage.
	'CoinsStackLimit'    => 30000,  // This is the limit to how many coins can be stacked on top of each other (this is internally an eA limitation, do not change)
	
	// Works on all points.
	'RolloverPoints'     => true,   // Whether or not to carry on excess points. (needs ChangeToCredits, ChangeToCashPoints or ChangeToCoins to be true)
	
	// - Menu and sub-menu items. (displayed on left nav & content sub menu)
	'MenuItems' => array(
		/*'Main Menu' => array(
			'Vote for Credits!' => array('module' => 'vote')
		),*/
		'Misc. Stuff' => array(
			'Voting Banners' => array('module' => 'banner'),
			'Vote Stats.'    => array('module' => 'vote', 'action' => 'stats')
		)
	),
	'SubMenuItems' => array(
		'banner' => array(
			'index' => 'List Voting Banners',
			'add'   => 'Add Voting Banner'
		)
	),
	
	// Cashpoints library.
	'CashpointsLibrary' => dirname(dirname(__FILE__)).'/lib/cashpoints.php',
	
	// Coins library.
	'CoinsLibrary' => dirname(dirname(__FILE__)).'/lib/coins.php',
	
	// Do not touch this.
	'FluxTables' => array(
		'VotesTable'   => 'cp_votes',
		'BannersTable' => 'cp_banners'
	)
)
?>
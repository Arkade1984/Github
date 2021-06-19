<?php
return array(
	'MenuItems' => array(
		'EAMod Rankings'   => array(
			'Class'          => array('module' => 'eamod_rank', 'action' => 'class'),
			'Guilds'          => array('module' => 'eamod_rank', 'action' => 'guilds'),
			'Castles'          => array('module' => 'eamod_rank', 'action' => 'castles'),
			'WoE'          => array('module' => 'eamod_rank', 'action' => 'woe'),
			'Zeny'          => array('module' => 'eamod_rank', 'action' => 'zeny'),
			'Homumculus'          => array('module' => 'eamod_rank', 'action' => 'homunculus'),
			'Mercenary'          => array('module' => 'eamod_rank', 'action' => 'mercenary'),
			'MvP'          => array('module' => 'eamod_rank', 'action' => 'mvp'),
			'Pk'          => array('module' => 'eamod_rank', 'action' => 'pk'),
			'Tk'          => array('module' => 'eamod_rank', 'action' => 'tk'),
			'PvP'          => array('module' => 'eamod_rank', 'action' => 'pvp'),
			'BG'          => array('module' => 'eamod_rank', 'action' => 'bg'),
			'Playtime'          => array('module' => 'eamod_rank', 'action' => 'playtime'),
			'Mission'          => array('module' => 'eamod_rank', 'action' => 'mission'),
		),
	),
	// Sub-menu items that are displayed for any action belonging to a
	// particular module. The format it simple.
	'SubMenuItems' => array(
		'eamod_rank' => array(
			'class'  => 'Class',
			'guilds'    => 'Guild',
			'castles'=> 'Castles',
			'woe' => 'WoE',
			'zeny'  => 'Zeny',
			'homunculus'  => 'Homunculus',
			'mercenary'  => 'Mercenary',
			'mvp'  => 'MvP',
			'pk'  => 'Pk',
			'tk'  => 'Tk',
			//'forger'  => 'Forger',
			//'brew'  => 'Brew',
			'pvp'  => 'PvP',
			'bg'  => 'BG',
			'playtime'  => 'Playtime',
			'mission'  => 'Mission',
		)
	)
)
?>
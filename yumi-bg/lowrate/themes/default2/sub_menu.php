<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php $subMenuItems = $this->getSubMenuItems(); $menus = array() ?>

<div id="main_menu">
<?php 
	if($title == 'Log Data' || $title == 'List Logins' || $title == 'List Commands' || $title == 'List Item Picks'){
		echo "<a href='?module=logdata&action=command'>Commands</a> | ";
		echo "<a href='?module=logdata&action=login'>Logins</a> | ";
		echo "<a href='?module=logdata&action=pick'>Item Picks</a>";
		
	}else if($title == 'CP Log' || $title == 'CP List Logins' || $title == 'List PayPal Transactions' || $title == 'Password Resets' || $title == 'Viewing PayPal Transaction'){
		echo "<a href='?module=cplog&action=paypal'>PayPal Transaction</a> | ";
		echo "<a href='?module=cplog&action=login'>Logins</a> | ";
		echo "<a href='?module=cplog&action=resetpass'>Password Resets</a>";
		
	}else if($title == 'IP Ban List' || $title == 'Add IP Ban' || $title == 'Modify IP Ban'){
		echo "<a href='?module=ipban'>IP Ban List</a> | ";
		echo "<a href='?module=ipban&action=add'>Add IP Ban</a> ";

	}else if($title == 'Reload Databases' || $title == 'Reload Mob Skills'){
		echo "<a href='?module=reload&action=mobskill'>Mob Skills</a> ";

	}else if($title == 'Content Management System' || $title == 'Edit Page' || $title == 'Add Page'){
		echo "<a href='?module=pages'>Page Content</a> | ";
		echo "<a href='?module=pages&action=add'>Add Content</a> ";

	}else if($title == 'List Voting Banners' || $title == 'Add Voting Banner' || $title == 'Edit Voting Banner'){
		echo "<a href='?module=banner'>List Voting Banners</a> | ";
		echo "<a href='?module=banner&action=add'>Add Voting Banner</a> ";

	}else if($title == 'Server Information (Rates)' || $title == 'Server Information (Commands)' || $title == 'Server Information (Custom NPC)' || $title == 'Server Information (General)' || $title == 'Server Information (WOE)'){
		echo "<a href='?module=pages&action=content&path=rates'>Rates</a> | ";
		echo "<a href='?module=pages&action=content&path=general'>General</a> | ";
		echo "<a href='?module=pages&action=content&path=commands'>Commands</a> | ";
		echo "<a href='?module=pages&action=content&path=woe'>WOE</a> | ";
		echo "<a href='?module=pages&action=content&path=npc'>Custom NPC</a>";

	}else if($title == 'Game (Downloads)' || $title == 'Miscellaneous (Downloads)' || $title == 'Application & Utility (Downloads)' || $title == 'EBooks and More (Downloads)'){
		echo "<a href='?module=pages&action=content&path=gamedl'>Game Downloads</a> | ";
		echo "<a href='?module=pages&action=content&path=misc'>Miscellaneous </a> | ";
		echo "<a href='?module=pages&action=content&path=apps'>Apps & Util</a> | ";
		echo "<a href='?module=pages&action=content&path=ebooks'>EBooks & More</a>";

	}else if($title == 'Top 25 Player Ladder' || $title == 'Top 25 Zenny Ladder' || $title == 'Top 25 Potion Ladder' || $title == 'Top 25 Homunculus Ladder' || $title == 'Top 25 PK Ladder' || $title == 'Top 25 MVP Ladder' || $title == 'Top 25 Play Time Ladder' || $title == 'Top 25 PVP Ladder' || $title == 'Top 25 Forger Ladder' || $title == 'Top 25 Guild Ladder' || $title == 'Top 25 Taekwon Ladder' || $title == 'Top 10 Mercenary Ladder' || $title == 'Top 25 Hunting Ladder' || $title == 'War of Emperium Castle Ranking' || $title == 'Ranking Accumulated in War of Emperium'){
		echo "<a href='?module=custom&action=player'>Player</a> | ";
		echo "<a href='?module=custom&action=guild'>Guild</a> | ";
		echo "<a href='?module=custom&action=zeny'>Zeny</a> | ";
		echo "<a href='?module=custom&action=taek'>Taek</a> | ";
		echo "<a href='?module=custom&action=potion'>Potion</a> | ";
		echo "<a href='?module=custom&action=forge'>Forger</a> | ";
		echo "<a href='?module=custom&action=mvp'>MVP</a> | ";
		echo "<a href='?module=custom&action=pk'>PK</a> | ";
		echo "<a href='?module=custom&action=playtime'>Play Time</a> | ";
		echo "<a href='?module=custom&action=woe'>WoE</a> | ";
		echo "<a href='?module=custom&action=castle'>Castle</a> | ";
		echo "<a href='?module=custom&action=homu'>Homu</a> | ";
		echo "<a href='?module=custom&action=merce'>Merce</a> | ";
		echo "<a href='?module=custom&action=hunting'>Hunting</a> | ";
		echo "<a href='?module=custom&action=pvp'>PVP</a> ";

	}else if($title == 'News and Updates' || $title == 'Edit News' || $title == 'Add News'){
		echo "<a href='?module=news'>Page Content</a> | ";
		echo "<a href='?module=news&action=add'>Add Content</a> ";

	}else if($title == 'Community' || $title == 'World Map' || $title == 'RoChan' || $title == 'Radio' || $title == 'Ventrilo' || $title == 'Videos' || $title == 'Art Works' || $title == 'Screen Shots'){
		echo "<a href='?module=pages&action=content&path=community'>Community</a> | ";
		echo "<a href='worldmap/index.php' target='_blank'>World Map</a> | ";
		echo "<a href='ROChan/random/'>RoChan</a> | ";
		echo "<a href='?module=pages&action=content&path=radio'>Radio</a> | ";
		echo "<a href='?module=pages&action=content&path=ventrilo'>Ventrilo</a> | ";
		echo "<a href='?module=pages&action=content&path=videos'>Videos</a> | ";
		echo "<a href='?module=pages&action=content&path=artworks'>Art Works</a> | ";
		echo "<a href='?module=pages&action=content&path=screenshots'>Screen Shots</a>";

	}else if(isset($qtitle)){
		if($title == 'Viewing Character' || $title = 'Modify Preferences'){
		echo '<a href="' . $this->url('character', 'prefs', array('id' => $char->char_id)) . '">' . htmlspecialchars(Flux::message('CharModifyPrefsLink')) . '</a> | ';
		echo '<a href="' . $this->url('character', 'changeslot', array('id' => $char->char_id)) . '">Change Slot</a> | ';
		echo '<a href="' . $this->url('character', 'resetlook', array('id' => $char->char_id)) . '">Reset Look</a> | ';
		echo '<a href="' . $this->url('character', 'resetpos', array('id' => $char->char_id)) . '">Reset Position</a>';
		}
	}
?>
</div>
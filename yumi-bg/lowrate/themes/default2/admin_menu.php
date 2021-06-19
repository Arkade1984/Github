<?php if ($session->isLoggedIn()){ 
	$adminMenuItems = $this->getAdminMenuItems();
	if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')){
			$mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], $menuItem['name']);
			echo "<div id='main_menu'>";
			echo implode(' | ', $mItems);
			echo "</div>";
	}
}?>
<?php if ($session->isLoggedIn()): 
	$adminMenuItems = $this->getAdminMenuItems();
	$menuItems = $this->getMenuItems();
?>

	<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
	<?php $mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], $menuItem['name']) ?>
		<div class="AdminCP">
			<?php echo implode(' | ', $mItems) ?>
		</div><br />
	<?php endif ?>


	<div class="UserCP">
	
	<a href="?module=account&action=view">View Account</a> | 
	<a href="?module=account&action=changepass">Change Password</a> | 
	<a href="?module=account&action=changemail">Change E-mail</a> | 
	<a href="?module=pages&action=content&path=donate">Donate</a> <br />
	<a href="?module=account&action=transfer">Transfer Credits</a> | 
	<a href="?module=account&action=xferlog">Credit Transfer History</a> | 
	<a href="?module=purchase">Go to Shopping Cart</a>
	</div>
	<br />
<?php endif ?>
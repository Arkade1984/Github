<!--Admin Menu-->
	<?php if ($session->isLoggedIn()): 
		$adminMenuItems = $this->getAdminMenuItems();
		$menuItems = $this->getMenuItems();
	?>

	<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
		<?php $mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], $menuItem['name']) ?>
		<div class="LinkMenu">
			<div class="MenuLinks">
				<?php echo implode(' | ', $mItems) ?>
			</div>
		</div><br />
	<?php endif ?>

<!--Sub Menu-->
	<?php $subMenuItems = $this->getSubMenuItems(); $menus = array() ?>
	<?php if (!empty($subMenuItems)): ?>
		<?php foreach ($subMenuItems as $menuItem): ?>
			<?php $menus[] = sprintf('<a href="%s" class="sub-menu-item%s">%s</a>',
				$this->url($menuItem['module'], $menuItem['action']),
				$params->get('module') == $menuItem['module'] && $params->get('action') == $menuItem['action'] ? ' current-sub-menu' : '',
				htmlspecialchars($menuItem['name'])) ?>
		<?php endforeach ?>
		<div class="LinkMenu">
			<div class="MenuLinks">
				<?php echo implode(' | ', $menus) ?>
			</div>
		</div>
	<?php endif ?>

<!--Page Menu-->
<?php $menus = array() ?>
<?php if (!empty($pageMenuItems)): ?>
	<?php foreach ($pageMenuItems as $menuItemName => $menuItemLink): ?>
		<?php $menus[] = sprintf('<a href="%s" class="page-menu-item">%s</a>', $menuItemLink, htmlspecialchars($menuItemName)) ?>
	<?php endforeach ?>
    <br />
	<?php echo implode(' | ', $menus) ?>
<?php endif ?>

<?php endif ?>
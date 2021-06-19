<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('BannerListHeading')) ?></h2>
<?php if ($banners): ?>
<table class="yhmwhy-table" width="100%"> 
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('BannerBannerLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('BannerNameLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('BannerHoursLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('BannerCreditsLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('BannerDateCreatedLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('BannerDateModifiedLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('BannerActionsLabel')) ?></th>
	</tr>
	<?php foreach ($banners as $banner): ?>
	<?php $actions = array() ?>
	<?php if ($auth->actionAllowed('banner', 'edit'))   $actions[] = sprintf('<a href="%s">%s</a>', $this->url('banner', 'edit', array('id' => $banner->id)), Flux::message('BannerEditLink')); ?>
	<?php if ($auth->actionAllowed('banner', 'delete')) $actions[] = sprintf('<a href="%s" onclick="return confirm(\'%s\')">%s</a>',
		$this->url('banner', 'delete', array('id' => $banner->id)),
		str_replace('"', '\\"', Flux::message('BannerDeleteConfirm')),
		Flux::message('BannerDeleteLink')); ?>
	<tr>
		<td align="center">
			<a href="<?php echo htmlspecialchars($banner->vote_url) ?>" target="_blank">
				<img src="<?php echo htmlspecialchars($banner->image_url) ?>" />
			</a>
		</td>
		<td align="center"><?php echo htmlspecialchars($banner->name) ?></td>
		<td align="center"><?php echo $banner->hours ?></td>
		<td align="center"><?php echo number_format($banner->credits) ?></td>
		<td align="center"><?php echo $this->formatDateTime($banner->created) ?></td>
		<td align="center"><?php echo $this->formatDateTime($banner->modified) ?></td>
		<td align="center"><p class="action"><?php echo implode(' / ', $actions) ?></p></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p>
	<?php echo htmlspecialchars(Flux::message('BannerNotFound')) ?>
	<a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('GoBackLabel')) ?></a>
</p>
<?php endif ?>
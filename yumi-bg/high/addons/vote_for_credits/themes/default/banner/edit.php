<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('BannerEditHeading')) ?></h2>
<?php if (!empty($errorMessage)): ?>
	<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<?php if ($banner): ?>
<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<table class="generic-form-table">
		<tr>
			<th><label for="name"><?php echo htmlspecialchars(Flux::message('BannerNameLabel')) ?></label></th>
			<td><input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name) ?>" /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('BannerAddExampleText')) ?> <strong>GameSites 200</strong></p></td>
		</tr>
		<tr>
			<th><label for="vote_url"><?php echo htmlspecialchars(Flux::message('BannerVoteUrlLabel')) ?></label></th>
			<td><input type="text" name="vote_url" id="vote_url" value="<?php echo htmlspecialchars($voteURL) ?>" /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('BannerAddExampleText')) ?> <strong><?php echo htmlspecialchars('http://www.gamesites200.com/ragnarok/in.php?id=18027') ?></strong></p></td>
		</tr>
		<tr>
			<th><label for="image_url"><?php echo htmlspecialchars(Flux::message('BannerImageUrlLabel')) ?></label></th>
			<td><input type="text" name="image_url" id="image_url" value="<?php echo htmlspecialchars($imageURL) ?>" /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('BannerAddExampleText')) ?> <strong><?php echo htmlspecialchars('http://www.fluxro.com/themes/default/img/topsites/gamesites200.gif') ?></strong></p></td>
		</tr>
		<tr>
			<th><label for="hours"><?php echo htmlspecialchars(Flux::message('BannerHoursLabel')) ?></label></th>
			<td><input type="text" name="hours" id="hours" value="<?php echo htmlspecialchars($hours) ?>" /></td>
			<td><p><em>hour(s)</em></p></td>
		</tr>
		<tr>
			<th><label for="credits"><?php echo htmlspecialchars(Flux::message('BannerCreditsLabel')) ?></label></th>
			<td><input type="text" name="credits" id="credits" value="<?php echo htmlspecialchars($credits) ?>" /></td>
			<td><p><em>point(s)</em></p></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"><input type="submit" value="<?php echo htmlspecialchars(Flux::message('BannerEditButtonLabel')) ?>" /></td>
		</tr>
	</table>
</form>
<?php else: ?>
<p>
	<?php echo htmlspecialchars(Flux::message('BannerNotFound')) ?>
	<a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('GoBackLabel')) ?></a>
</p>
<?php endif ?>
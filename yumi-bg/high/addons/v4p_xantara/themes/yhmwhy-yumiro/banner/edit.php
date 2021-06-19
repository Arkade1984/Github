<?php if (!defined('FLUX_ROOT')) exit; ?>

<h2><?php echo htmlspecialchars(Flux::message('BannerEditHeading')) ?></h2>

<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<table class="generic-form-table">
		<tr>
			<th><label for="interval">Vote Interval (Hours):</label></th>
			<td><input type="number" name="interval" value="<?php echo $banner->hours ?>"/></td>
		</tr>
		<tr>
			<th><label for="amount">Reward Amount:</label></th>
			<td><input type="number" name="amount" value="<?php echo $banner->amount ?>"/></td>
		</tr>
		<tr>
			<th><label for="image">Image URL:</label></th>
			<td><input type="text" name="image" value="<?php echo $banner->image_url ?>"/></td>
		</tr>
		<tr>
			<th></th>
			<td>
				<img src="<?php echo $banner->image_url ?>" alt="Vote Banner"/>
			</td>
		</tr>
		<tr>
			<th><label for="vote">Vote URL:</label></th>
			<td><input type="text" name="vote" value="<?php echo $banner->vote_url ?>"/></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="Update Banner" /></td>
		</tr>
	</table>
</form>
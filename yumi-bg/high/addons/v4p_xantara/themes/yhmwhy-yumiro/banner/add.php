<?php if (!defined('FLUX_ROOT')) exit; ?>

<h2><?php echo htmlspecialchars(Flux::message('BannerAddHeading')) ?></h2>
<?php if (!empty($errorMessage)): ?>
	<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form" name="vote_banner" onSubmit="return validateForm()">
	<table class="generic-form-table">
		<tr>
			<th><label for="interval">Vote Interval (Hours):</label></th>
			<td><input type="number" name="interval" min="1" value="<?php echo ($interval)?$interval:1 ?>"/></td>
		</tr>
		<tr>
			<th><label for="amount">Reward Amount:</label></th>
			<td><input type="number" name="amount" min="1" value="<?php echo ($amount)?$amount:1 ?>"/></td>
		</tr>
		<tr>
			<th><label for="image">Image URL:</label></th>
			<td><input type="text" name="image" value="<?php echo ($imageURL)?$imageURL:'' ?>"/> <i>Follow the form: http://domain/imageURL.jpg</i></td>
		</tr>
		<tr>
			<th><label for="vote">Vote URL:</label></th>
			<td><input type="text" name="vote" value="<?php echo ($voteURL)?$voteURL:'' ?>"/> <i>Follow the form: http://domain/voteURL</i></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"><input type="submit" value="Add Banner" /></td>
		</tr>
	</table>
</form>
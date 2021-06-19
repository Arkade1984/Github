<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if (!empty($errorMessage)): ?>
	<div class="myTextError"><?php echo htmlspecialchars($errorMessage) ?></div>
<?php endif ?>
<form action="<?php echo $this->urlWithQs ?>" method="post">
	<input type="hidden" name="addipban" value="1" />
	<table class="yhmwhy-table">
		<tr>
			<th><label for="list"><?php echo htmlspecialchars(Flux::message('IpbanIpAddressLabel')) ?></label></th>
			<td>
				<input type="text" name="list" id="list" value="<?php echo htmlspecialchars($params->get('list')) ?>" />
				<?php echo htmlspecialchars(Flux::message('IpbanIpAddressInfo')) ?>
			</td>
		</tr>
		<tr>
			<th><label for="reason"><?php echo htmlspecialchars(Flux::message('IpbanReasonLabel')) ?></label></th>
			<td>
				<textarea name="reason" id="reason" class="reason"><?php echo htmlspecialchars($params->get('reason')) ?></textarea>
			</td>
		</tr>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('IpbanUnbanDateLabel')) ?></label></th>
			<td><?php echo $this->dateTimeField('rtime', ($rtime=$params->get('rtime')) ? $rtime : null) ?></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="<?php echo htmlspecialchars(Flux::message('IpbanAddButton')) ?>" /></td>
		</tr>
	</table>
</form>
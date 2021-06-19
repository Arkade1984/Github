<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if ($ipban): ?>
	<?php if (!empty($errorMessage)): ?>
		<div class="myTextError"><?php echo htmlspecialchars($errorMessage) ?></div>
	<?php endif ?>
	<form action="<?php echo $this->urlWithQs ?>" method="post">
		<input type="hidden" name="modipban" value="1" />
		<table class="yhmwhy-table">
			<tr>
				<th><label for="list"><?php echo htmlspecialchars(Flux::message('IpbanIpAddressLabel')) ?></label></th>
				<td><input type="text" name="newlist" id="list"
						value="<?php echo htmlspecialchars(($list=$params->get('newlist')) ? $list : $ipban->list) ?>" />
						<?php echo htmlspecialchars(Flux::message('IpbanIpAddressInfo')) ?>
				</td>
			</tr>
			<tr>
				<th><label for="reason"><?php echo htmlspecialchars(Flux::message('IpbanReasonLabel')) ?></label></th>
				<td>
					<textarea name="reason" id="reason" class="reason">
						<?php echo htmlspecialchars(($reason=$params->get('reason')) ? $reason : $ipban->reason) ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<th><label><?php echo htmlspecialchars(Flux::message('IpbanUnbanDateLabel')) ?></label></th>
				<td><?php echo $this->dateTimeField('rtime', ($rtime=$params->get('rtime')) ? $rtime : $ipban->rtime) ?></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="<?php echo htmlspecialchars(Flux::message('IpbanEditButton')) ?>" /></td>
			</tr>
		</table>
	</form>
<?php else: ?>
<p>No such IP ban. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if (!empty($errorMessage)): ?>
<div class="myTextError"><?php echo htmlspecialchars($errorMessage) ?></div>
<?php endif ?>

<p><?php echo htmlspecialchars(Flux::message('EmailChangeInfo')) ?></p>

<?php if (Flux::config('RequireChangeConfirm')): ?>
<p><?php echo htmlspecialchars(Flux::message('EmailChangeInfo2')) ?></p>
<?php endif ?>

<form action="<?php echo $this->urlWithQs ?>" method="post">
	<table class="yhmwhy-table">
		<tr>
			<th><label for="email"><?php echo htmlspecialchars(Flux::message('EmailChangeLabel')) ?></label></th>
			<td><input type="text" name="email" id="email" /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('EmailChangeInputNote')) ?></p></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="<?php echo htmlspecialchars(Flux::message('EmailChangeButton')) ?>" />
			</td>
			<td></td>
		</tr>
	</table>
</form>
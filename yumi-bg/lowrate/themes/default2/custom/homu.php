<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if ($playerLadder): ?>
	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">
		<tr>
			<th>#</th>
			<th>Owner</th>
			<th>Name</th>
			<th>Class</th>
			<th>Level</th>
		</tr>
		<?php 
			$ctr = 0;
			foreach ($playerLadder as $playerLadder): 
			$ctr = $ctr + 1;
		?>
			<tr>
				<td align="center"><?php echo $ctr; ?></td>
				<td align="center"><?php echo $playerLadder->CName; ?></td>
				<td align="center"><?php echo $playerLadder->name; ?></td>
				<td align="center"><img src="<?php echo $this->themePath('img/') . $playerLadder->class . ".gif" ?>"/></td>
				<td align="center"><?php echo $playerLadder->level; ?></td>
			</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>
<?php endif ?>
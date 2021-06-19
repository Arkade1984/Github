<?php if (!defined('FLUX_ROOT')) exit; ?>
<div style="text-align:center; height:25px;">
	<form action="/beta_flux/" method="get" id="mySelectClass">
		<input type="hidden" id="module" name="module" value="custom" />
		<input type="hidden" id="action" name="action" value="guild" />
		<select name="myClass" id="myClass" onchange="document.getElementById('mySelectClass').submit();">
			<option value="Exp" <?php if($myClass == "Exp") echo "selected"; ?>>Rank By Experience</option>
			<option value="Cas" <?php if($myClass == "Cas") echo "selected"; ?>>Rank By Castle</option>
		</select>
	</form>
</div>

<?php if ($playerLadder): ?>
	<?php if($myClass == "Exp") { ?>
		<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">
			<tr>
				<th>#</th>
				<th>Emblem</th>
				<th>Guild Name</th>
				<th>Level</th>
				<th>Experience</th>
				<th>Average lvl</th>
			</tr>
			<?php 
				$ctr = 0;
				foreach ($playerLadder as $playerLadder): 
				$ctr = $ctr + 1;
			?>
				<tr>
					<td align="center"><?php echo $ctr; ?></td>
					<td align="center"><img src="<?php echo $this->emblem($playerLadder->guild_id) ?>" /></td>
					<td><?php echo $playerLadder->name; ?></td>
					<td align="center"><?php echo $playerLadder->guild_lv; ?></td>
					<td align="right"><?php echo $playerLadder->exp; ?></td>
					<td align="center"><?php echo $playerLadder->average_lv; ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	<?php }else{ ?>
		<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">
			<tr>
				<th>#</th>
				<th>Emblem</th>
				<th>Guild Name</th>
				<th>Castle</th>
				<th>Economy</th>
				<th>Def</th>
			</tr>
			<?php 
				$ctr = 0;
				foreach ($playerLadder as $playerLadder): 
				$ctr = $ctr + 1;
			?>
				<tr>
					<td align="center"><?php echo $ctr; ?></td>
					<td align="center"><img src="<?php echo $this->emblem($playerLadder->guild_id) ?>" /></td>
					<td><?php echo $playerLadder->name; ?></td>
					<td align="center"><?php echo getCastleName($playerLadder->castle_id); ?></td>
					<td align="center"><?php echo $playerLadder->economy; ?></td>
					<td align="center"><?php echo $playerLadder->defense; ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	<?php } ?>

<?php else: ?>
	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>
<?php endif ?>
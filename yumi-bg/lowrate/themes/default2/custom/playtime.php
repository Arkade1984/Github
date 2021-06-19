<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php if ($playerLadder): ?>
	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">
		<tr>
			<th>#</th>
			<th>Player Name</th>
			<th>Class</th>
			<th>Base / Job Level</th>
			<th>Play Time</th>
		</tr>
		<?php 
			$ctr = 0;
			foreach ($playerLadder as $playerLadder): 
			$ctr = $ctr + 1;
		?>
			<tr>
				<td align="center"><?php echo $ctr; ?></td>
				<td>
					<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td rowspan="2"><img src="<?php echo $this->themePath('img/') . $playerLadder->sex . ".gif" ?>"/></td>
							<td><?php echo $playerLadder->name; ?></td>
						</tr>
						<tr>
							<td>
								<?php if($playerLadder->guild_id != 0){
										echo "[ " . $this->linkToGuild($playerLadder->guild_id, $playerLadder->guild_name) . " ]"; 
									}else{
										echo "&nbsp;";
									}
								?>
							</td>
						</tr>
					</table>
				</td>
				<td align="center"><img src="<?php echo $this->themePath('img/class/') . $playerLadder->class . ".gif" ?>"/><br />
					<?php if ($job=$this->jobClassText($playerLadder->class)): ?>
						<?php echo htmlspecialchars($job) ?>
					<?php else: ?>
						<span class="not-applicable">Unknown</span>
					<?php endif ?>				
				</td>
				<td align="center"><?php echo $playerLadder->base_level . " / " . $playerLadder->job_level ; ?></td>
				<td align="center"><?php echo playtime($playerLadder->playtime); ?></td>
			</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>
<?php endif ?>
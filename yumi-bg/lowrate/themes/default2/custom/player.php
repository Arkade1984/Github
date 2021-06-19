<?php if (!defined('FLUX_ROOT')) exit; ?>
<div style="text-align:center; height:25px;">
	<form action="/beta_flux/" method="get" id="mySelectClass">
		<input type="hidden" id="module" name="module" value="custom" />
		<input type="hidden" id="action" name="action" value="player" />
		<select name="myClass" id="myClass" onchange="document.getElementById('mySelectClass').submit();">
			<option value="All">All Jobs</option>
			<?php
			for ($i = 1; $i < 26; $i++) {
				if ($i != 13 && $i != 21 && $i != 22 && $i != 26)
					$mySelect = "";
					if($myClass == $i) $mySelect = "selected";
					echo "<option value=\"$i\" $mySelect>" . $job=$this->jobClassText($i) . "</option>";
			}
			for ($i = 4001; $i < 4050; $i++) {
				if ($i != 4014 && $i != 4022 && $i != 4036 && $i != 4044 && $i != 4048)
					$mySelect = "";
					if($myClass == $i) $mySelect = "selected";
					echo "<option value=\"$i\" $mySelect>" . $job=$this->jobClassText($i) . "</option>";
			} ?>
		</select>
	</form>
</div>

<?php if ($playerLadder): ?>
	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">
		<tr>
			<th>#</th>
			<th>Player Name</th>
			<th>Class</th>
			<th>Base / Job Level</th>
			<th>Map / Status</th>
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
				<td align="center">
					<?php echo $playerLadder->last_map . "<BR>"; 
						if($playerLadder->online == 0){ ?>
							<img src="<?php echo $this->themePath('img/off-oval.png') ?>"/>
						<?php }else{ ?>
							<img src="<?php echo $this->themePath('img/on-oval.png') ?>"/>
						<?php } ?>
					
				</td>
			</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>
<?php endif ?>
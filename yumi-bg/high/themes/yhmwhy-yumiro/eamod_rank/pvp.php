<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>PvP Ranking</h2>
<table width="600">
	<tr>
		<td align="center">
			<form id="ladder" method="post" action="<?php echo $this->url('eamod_rank','pvp'); ?>">
				<label for="opt"><b>Select a Job</b></label>
				<select name="opt">
					<option selected value="0">ALL....</option>
						<?php for ($i = 1; $i < 26; $i++) {
							if ($i != 13 && $i != 21 && $i != 22 && $i != 26)
								echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
						}
						for ($i = 4001; $i < 4050; $i++) {
							if ($i != 4014 && $i != 4022 && $i != 4036 && $i != 4044 && $i != 4048)
								echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
						}
						?>
				</select>
				<input type="submit" value="Submit">
			</form>
		</td>
	</tr>
</table>
<table class="eAModRanking">
	<tr>
		<td align="left" class="head">#</td>
		<td>&nbsp;</td>
		<td align="left" class="head" colspan="2">Character Name</td>
		<td align="center" class="head">Class<br>Base - Job</td>
		<td align="center" class="head">Rank</td>
		<td align="center" class="head">S</td>
		<td align="center" class="head">K</td>
		<td align="center" class="head">D</td>
		<td align="center" class="head">Map<br/>Status</td>
	</tr>
	<?php $i = 0; foreach( $result as $pvp ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $pvp->sex . '.gif'); ?>" alt=""></td>
		<td align="left">
			<?php echo $pvp->name; if( $pvp->gname ): ?><br>
				<span title="View Guild Profile">
					<font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $pvp->guild_id); ?>"><?php echo htmlspecialchars( $pvp->gname); ?></a> ]</b></font>
				</span>
			<?php endif; 
				$post = calc_rank( $pvp->score );
			?>
		</td>
		<td align="center"><b><?php echo $pvp->base_level; ?></b>&nbsp;<img src="<?php echo $this->themePath('img/eamod/imgwm/' . $pvp->class . '.gif'); ?>" alt="">&nbsp;<b><?php echo $pvp->job_level; ?></b><br><?php echo $this->jobClassText($pvp->class); ?></td>
		<td align="center">
			<?php if( $post > 0 ) ?><img src="<?php echo $this->themePath('img/eamod/rank/' . $post . '.png'); ?>" alt="" ><br/> 
			<?php echo $Rank[$post]; ?>
		</td>
		<td align="center"><?php echo $pvp->score; ?></td>
		<td align="center"><?php echo $pvp->kill_count; ?></td>
		<td align="center"><?php echo $pvp->death_count; ?></td>
		<td align="center">
			<?php echo $pvp->last_map; ?><br>
			<?php if ( $pvp->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online">
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Offline">
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
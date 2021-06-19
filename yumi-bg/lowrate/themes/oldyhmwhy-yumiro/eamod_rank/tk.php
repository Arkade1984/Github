<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Taekwon Ranking</h2>
<table class="eAModRanking">
	<tr>
		<th align="left">#</th>
		<th>&nbsp;</th>
		<th align="right">Points</th>
		<th>&nbsp;</th>
		<th align="left" colspan="2">Character Name</th>
		<th align="center">Base / Job Level</th>
		<th align="center">Location</th>
	</tr>
	<?php $i = 0; foreach( $result as $tk ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="right"><?php echo $tk->fame; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $tk->sex . '.gif'); ?>" alt="" /></td>
		<td align="left">
			<?php echo $tk->name; ?>
			<?php if( $tk->gname ): ?><br>
				<span title="View Guild Profile">
					<font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $tk->guild_id); ?>"><?php echo htmlspecialchars($tk->gname); ?></a> ]</b></font>
				</span>
			<?php endif; ?>
		</td>
		<td align="center"><?php echo $tk->base_level; ?> /  <?php echo $tk->job_level; ?></td>
		<td align="center">
			<?php echo $tk->last_map; ?><br>
			<?php if( $tk->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online">
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Online">
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
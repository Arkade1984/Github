<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Zeny Ranking</h2>
<table class="eAModRanking">
	<tr>
		<th align="left" class="head">#</th>
		<th>&nbsp;</th>
		<th align="left" class="head" colspan="2">Character Name</th>
		<th align="center" class="head">Class</th>
		<th align="center" class="head">Base / Job Level</th>
		<th align="right" class="head">Zeny</th>
	</tr>
	<?php $i = 0; foreach( $result as $zeny ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $zeny->sex . '.gif'); ?>" alt="Sex" /></td>
		<td align="left">
			<?php echo htmlspecialchars($zeny->name); ?>
			<?php if( $zeny->gname ): ?><br>
				<span title="View Guild Profile">
					<font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $zeny->guild_id); ?>"><?php echo htmlspecialchars($zeny->gname); ?></a> ] </b></font>
				</span>
			<?php endif; ?>
		</td>
		<td align="center"><img src="<?php echo $this->themePath('img/eamod/imgwm/' . $zeny->class . '.gif'); ?>" alt="Sex" /><br><?php echo $this->jobClassText($zeny->class); ?></td>
		<td align="center"><?php echo htmlspecialchars($zeny->base_level); ?> / <?php echo htmlspecialchars($zeny->job_level); ?></td>
		<td align="right"><?php echo number_format($zeny->zeny); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
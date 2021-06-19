<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>MvP Ranking</h2>
<table class="eAModRanking">
	<tr>
		<th align="left">#</th>
		<th>&nbsp;</th>
		<th align="left" colspan="2">Name of Character</th>
		<th align="center">Class</th>
		<th align="center">Level</th>
		<th align="center" width="100">MVP</th>
		<th align="center">Map</th>
	</tr>
	<?php $mvps = 0; $i = 0; foreach( $result as $mvp ): $i++; $mvps += $mvp->value; ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $mvp->sex . '.gif'); ?>" alt="" /></td>
		<td align="left">
			<?php echo htmlspecialchars($mvp->name); ?>
			<?php if( $mvp->gname ): ?><br>
				<span title="View Guild Profile">
					<font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $mvp->guild_id); ?>"><?php echo $mvp->gname; ?></a> ]</b></font>
				</span>
			<?php endif; ?>
		</td>
		<td align="center">
			<img src="<?php echo $this->themePath('img/eamod/imgwm/' . $mvp->class . '.gif'); ?>" alt="">
			<br/><?php echo $this->jobClassText( $mvp->class ); ?>
		</td>
		<td align="center"><?php echo $mvp->base_level; ?> / <?php echo $mvp->job_level; ?></td>
		<td align="center"><img src="<?php echo $this->iconImage('750'); ?>" alt=""> x <?php echo $mvp->value; ?></td>
		<td align="center">
			<?php echo $mvp->last_map; ?><br>
			<?php if ( $mvp->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="" />
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="" />
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td align="center" colspan="8">Total en Lista : <b><?php echo $i; ?></b> MVPs Eliminados : <b><?php echo $mvps ?></b></td>
	</tr>
</table>
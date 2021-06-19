<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Ranking Hunting Missions</h2>
<table>
	<tr>
		<th align="left" class="head">#</th>
		<th>&nbsp;</th>
		<th align="left" class="head" colspan="2">Character Name</th>
		<th align="center" class="head">Class</th>
		<th align="center" class="head">Level</th>
		<th align="center" class="head" width="100">Missions</th>
		<th align="center" class="head">Map</th>
	</tr>
	<?php $i = 0; foreach( $result as $mission ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $mission->sex . '.gif'); ?>" alt=""></td>
		<td align="left">
			<?php echo htmlspecialchars($mission->name); ?>
			<?php if( $mission->gname ): ?><br>
				<span title="Ver Profile de Guild">
					<font color="Navy"><b><a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $mission->guild_id . ''); ?>">[ <?php echo htmlspecialchars($mission->gname); ?> ]</a></b></font>
				</span>
			<?php endif; ?>
		</td>
		<td align="center"><img src="<?php echo $this->themePath('img/eamod/imgwm/' . $mission->class . '.gif'); ?>" alt=""> <br/><?php echo $this->jobClassText($mission->class); ?></td>
		<td align="center"><?php echo $mission->base_level; ?> / <?php echo $mission->job_level; ?></td>
		<td align="center"><img src="<?php echo $this->iconImage('7773'); ?>" alt="" /> x <?php echo $mission->value; ?></td>
		<td align="center">
			<?php echo $mission->last_map; ?><br/>
			<?php if ( $mission->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online">
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Offline">
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
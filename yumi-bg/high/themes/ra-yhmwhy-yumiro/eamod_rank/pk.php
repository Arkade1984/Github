<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Top Killer</h2>
<table cellspacing="0" cellpadding="0" class="eAModRanking">
	<tr height="40">
		<th align="left" >#</th>
		<th>&nbsp;</th>
		<th align="left"  colspan="2">Nombre de Personaje</th>
		<th align="center" >Profesion<br>Base - Job</th>
		<th align="center" >Rango</th>
		<th align="center" width="60">S</th>
		<th align="center" width="60">K</th>
		<th align="center" width="60">D</th>
		<th align="center" >Map</th>
	</tr>
	<?php $i = 0; foreach( $result as $pk ): $i++; ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $pk->sex . '.gif'); ?>" alt="" /></td>
		<td align="left">
			<?php echo htmlspecialchars($pk->name); ?>
			<?php if( $pk->gname ): ?><br>
					<span title="Ver Profile de Guild">
						<font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $pk->guild_id); ?>"><?php echo htmlspecialchars( $pk->gname ) ?></a> ]</b></font>
					</span>
			<?php endif;
				$post = calc_rank( $pk->score );
			?>
		</td>
		<td align="center" width="150"><b><?php echo $pk->base_level; ?></b>&nbsp;<img src="<?php echo $this->themePath('img/eamod/imgwm/' . $pk->class . '.gif') ?>" alt="" />&nbsp;<b><?php echo $pk->job_level; ?></b><br><?php echo $this->jobClassText($pk->class); ?></td>
		<td align="center"><?php if( $post > 0 ) ?><img src="<?php echo $this->themePath('img/eamod/rank/' . $post . '.png') ?>" alt="" /><br/> <?php echo $Rank[$post]; ?>.</td>
		<td align="center"><?php echo $pk->score; ?></td>
		<td align="center"><?php echo $pk->kill_count; ?></td>
		<td align="center"><?php echo $pk->death_count; ?></td>
		<td align="center">
			<?php echo $pk->last_map; ?><br>
			<?php if ( $pk->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online">
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Offline">
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
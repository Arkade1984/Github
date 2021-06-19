<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Most Addict Player</h2>
<table class="eAModRanking">
	<tr>
		<th align="left" class="head" colspan="2">Character Name</th>
		<th align="center" class="head">Class</th>
		<th align="center" class="head">Base / Job Level</th>
		<th align="center" class="head">Play Time</th>
	</tr>
	<?php $i = 0; $total = 0; foreach( $result as $play ): $i++; ?>
	<tr>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $play->sex . '.gif'); ?>" alt="" /></td>
		<td align="left">
			<?php echo htmlspecialchars( $play->name ); ?>
			<?php if( $play->gname ): ?><br>
			<span title="View Guild Profile">
				<font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $play->guild_id); ?>"><?php echo htmlspecialchars($play->gname) ?></a> ]</b></font>
			</span>
			<?php endif; ?>
		</td>
		<td align="center"><img src="<?php echo $this->themePath('img/eamod/imgwm/' . $play->class . '.gif'); ?>" alt="" /><br/>
		<?php echo $this->jobClassText( $play->class ); ?></td>
		<td align="center"><?php echo $play->base_level; ?> / <?php echo $play->job_level; ?></td>
		<td align="center"><?php echo playtime( $play->playtime ); ?></td>
		<?php $total += $play->playtime; ?>
	<?php endforeach; ?>
	<tr><td colspan="5"><br/><hr/></td></tr>
	<tr>
		<td align="center" class="head" colspan="5">Tiempo total de Juego : <b> <?php echo playtime( $total ); ?></b></td>
	</tr>
</table>
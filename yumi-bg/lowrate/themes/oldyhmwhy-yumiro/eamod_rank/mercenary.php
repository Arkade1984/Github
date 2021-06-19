<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Ranking of Mercenaries</h2>
<table class="eAModRanking">
	<tr><td colspan="8"><hr></td></tr>
	<tr><td colspan="8" align="center"><font color="red"><b>Ranking of Mercenaries - Swordsman Guild</b></font></td></tr>
	<tr>
		<th class="head" align="left">#</th>
		<th>&nbsp;</th>
		<th class="head" align="left" colspan="2">Character</th>
		<th class="head" align="center">Class</th>
		<th class="head" align="center">Level</th>
		<th class="head" align="center">Loyalty</th>
		<th class="head" align="center">Map</th>
	</tr>
	<?php $i = 0; foreach( $sword as $sword ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $sword->sex . '.gif'); ?>" alt=""></td>
		<td align="left">
			<?php echo htmlspecialchars($sword->name); ?>
			<?php if( $sword->gname ): ?><br>
					<span title="Ver Profile de Guild" style="color:#0000FF; cursor:pointer">
						<font color="Navy"><b>[ <?php echo htmlspecialchars($sword->gname); ?> ]</b></font>
					</span>
			<?php endif; ?>
		</td>
		<td align="center"><img src="<?php echo $this->themePath('img/eamod/imgwm/' . $sword->class . '.gif'); ?>" alt="" /><br>
			<?php echo $this->jobClassText($sword->class); ?>
		</td>
		<td align="center"><?php echo $sword->base_level; ?> / <?php echo $sword->job_level; ?></td>
		<td align="center"><?php echo $sword->sword_faith; ?></td>
		<td align="center">
			<?php echo $sword->last_map; ?><br>
			<?php if ( $sword->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online" />
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Online" />
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr><td colspan="8"><hr><br/><br/></td></tr>
	
	<tr><td colspan="8" align="center"><font color="red"><b>Ranking of Mercenaries - Guild Spearman</b></font></td></tr>
	<tr><td colspan="8"><hr></td></tr>
	<tr>
		<th class="head" align="left">#</th>
		<th>&nbsp;</th>
		<th class="head" align="left" colspan="2">Character</th>
		<th class="head" align="center">Class</th>
		<th class="head" align="center">Level</th>
		<th class="head" align="center">Loyalty</th>
		<th class="head" align="center">Map</th>
	</tr>
	<?php $i = 0; foreach( $spear as $sword ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $sword->sex . '.gif'); ?>" alt=""></td>
		<td align="left">
			<?php echo htmlspecialchars($sword->name); ?>
			<?php if( $sword->gname ): ?><br>
					<span title="Ver Profile de Guild" style="color:#0000FF; cursor:pointer">
						<font color="Navy"><b>[ <?php echo htmlspecialchars($sword->gname); ?> ]</b></font>
					</span>
			<?php endif; ?>
		</td>
		<td align="center"><img src="<?php echo $this->themePath('img/eamod/imgwm/' . $sword->class . '.gif'); ?>" alt="" /><br>
			<?php echo $this->jobClassText($sword->class); ?>
		</td>
		<td align="center"><?php echo $sword->base_level; ?> / <?php echo $sword->job_level; ?></td>
		<td align="center"><?php echo $sword->spear_faith; ?></td>
		<td align="center">
			<?php echo $sword->last_map; ?><br>
			<?php if ( $sword->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online" />
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Online" />
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr><td colspan="8"><hr><br/><br/></td></tr>
	
	<tr><td colspan="8" align="center"><font color="red"><b>Ranking of Mercenaries - Archer Guild</b></font></td></tr>
	<tr><td colspan="8"><hr></td></tr>
	<tr>
		<th class="head" align="left">#</th>
		<th>&nbsp;</th>
		<th class="head" align="left" colspan="2">Character</th>
		<th class="head" align="center">Class</th>
		<th class="head" align="center">Level</th>
		<th class="head" align="center">Loyalty</th>
		<th class="head" align="center">Map</th>
	</tr>
	<?php $i = 0; foreach( $arch as $sword ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $sword->sex . '.gif'); ?>" alt=""></td>
		<td align="left">
			<?php echo htmlspecialchars($sword->name); ?>
			<?php if( $sword->gname ): ?><br>
					<span title="Ver Profile de Guild" style="color:#0000FF; cursor:pointer">
						<font color="Navy"><b>[ <?php echo htmlspecialchars($sword->gname); ?> ]</b></font>
					</span>
			<?php endif; ?>
		</td>
		<td align="center"><img src="<?php echo $this->themePath('img/eamod/imgwm/' . $sword->class . '.gif'); ?>" alt="" /><br>
			<?php echo $this->jobClassText($sword->class); ?>
		</td>
		<td align="center"><?php echo $sword->base_level; ?> / <?php echo $sword->job_level; ?></td>
		<td align="center"><?php echo $sword->arch_faith; ?></td>
		<td align="center">
			<?php echo $sword->last_map; ?><br>
			<?php if ( $sword->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online" />
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Online" />
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr><td colspan="8"><hr></td></tr>
</table>
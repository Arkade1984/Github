<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Guild Profile</h2>
<?php if( $error ): ?>

<?php else: ?>
<table border="0" cellpadding="0" cellspacing="0" class="eAModRanking">
	<tr>
		<th height="28" class="title"><font color="blue" size="3"><b><?php echo htmlspecialchars( $guild[0]->name ); ?></b></font></th>
	</tr>
	<tr>
		<td align="center">
			<table width="550">
				<tr><td align="center"><img src="<?php echo $this->emblem( $guild_id ); ?>" alt="" /></td></tr>
				<tr><td align="center"><b><?php echo $guild[0]->master; ?></b> <font color="red"><b>
				<?php echo $this->jobClassText($guild[0]->class); ?></b></font> <?php echo $guild[0]->base_level; ?> / <?php echo $guild[0]->job_level; ?></td></tr>
			</table>
			<table width="550">
				<tr><td align="center" colspan="5" bgcolor="#FFCC00" height="30"><font size="2"><b>General Information</b></font></td></tr>
				<tr>
					<td align="center">&nbsp;</td>
					<td align="left"><b>Guild Level :</b> <?php echo $guild[0]->guild_lv; ?></td>
					<td align="center">&nbsp;</td>
					<td align="right"><b>Current Members :</b> <?php echo $all_members; ?></td>
					<td align="center">&nbsp;</td>
				</tr>
				<tr>
					<td align="center">&nbsp;</td>
					<td align="left"><b>Experience :</b> <?php echo number_format($guild[0]->exp); ?></td>
					<td align="center">&nbsp;</td>
					<td align="right"><b>Total quota :</b> <?php echo $guild[0]->max_member; ?></td>
					<td align="center">&nbsp;</td>
				</tr>
				<tr>
					<td align="center">&nbsp;</td>
					<td align="left"><b>Next Lvl :</b> <?php echo number_format( $guild[0]->next_exp ); ?></td>
					<td align="center">&nbsp;</td>
					<td align="right"><b>Average Level :</b> <?php echo $guild[0]->average_lv; ?></td>
					<td align="center">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php if( $diplomacy ): ?>
<table class="eAModRanking">
	<tr><td align="center" colspan="2" bgcolor="#FFCC00" height="30"><font size="2"><b>Diplomacy</b></font></td></tr>
	<tr>
		<td align="center" width="50%"><font color="blue"><b>Ally</b></font></td>
		<td align="center" width="50%"><font color="red"><b>Enemy</b></font></td>
	</tr>
	<tr>
		<td align="center" colspan="2">&nbsp;</td>
	</tr>
		<?php 
			$ally = '';
			$enemy = '';
				if( $diplomacy[0]->opposition )
				{
					$ally .= '<img src="' . $this->emblem( $diplomacy[0]->guild_id ) . '" alt="" /><br><span title="View Guild Profile">'  . htmlspecialchars( $diplomacy[0]->name ) . '</span><br><br>';
				}
				else
				{
					$enemy .= '<img src="' . $this->emblem( $diplomacy[0]->guild_id ) .'" alt="" /><br><span title="Ver Profile de Guild"><a href="' . $this->url('eamod_rank','guildprofile&amp;guild_id=' . $diplomacy[0]->guild_id . '') . '">[ ' . htmlspecialchars($diplomacy[0]->name) . ' ]</span><br><br>';
				}
		?>
	<tr>
		<td align="center"><?php echo $ally; ?></td>
		<td align="center"><?php echo $enemy; ?></td>
	</tr>
</table>
<?php endif; ?>
<table class="eAModRanking">
	<tr>
		<td align="center" colspan="' . $count . '" bgcolor="#FFCC00" height="30"><font size="2"><b>Castles</b></font></td>
	</tr>
	<?php foreach( $territory as $ter ): ?>
	<tr>
		<td align="center"><?php echo $castleNames[$ter->castle_id]; ?><br/>
		<b>Defense</b> <?php echo $ter->defense; ?><br>
		<b>Economy</b> <?php echo $ter->economy; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<table class="eAModRanking">
	<tr>
		<td align="center" colspan="11" bgcolor="#FFCC00" height="30"><font size="2"><b>Castle Ranking</b></font></td>
	</tr>
	<tr>
		<th align="left"><b>Castle</b></th>
		<th align="right">Taken</th>
		<th align="right"><img src="<?php echo $this->iconImage('714'); ?>"></th>
		<th align="center"><img src="<?php echo $this->iconImage('2717'); ?>"></th>
		<th align="right"><img src="<?php echo $this->iconImage('1214'); ?>"></th>
		<th align="right"><img src="<?php echo $this->iconImage('2108'); ?>"></th>
		<th align="right">T.Eco</th>
		<th align="right">T.Def</th>
		<th align="right"><img src="<?php echo $this->iconImage('74444'); ?>"></th>
		<th align="right">Kills</th>
		<th align="right">Deaths</th>
	</tr>
	<?php foreach( $rank as $rank ): ?>
	<tr>
		<td align="left"><font color="#FFC300"><b><?php echo $castleNames[$rank->castle_id]; ?></b></font></td>
		<td align="right"><?php echo $rank->capture; ?></td>
		<td align="right"><?php echo $rank->emperium; ?></td>
		<td align="center"><?php echo calc_posesion_time($rank->posesion_time); ?></td>
		<td align="right"><?php echo $rank->offensive_score; ?></td>
		<td align="right"><?php echo $rank->defensive_score; ?></td>
		<td align="right"><?php echo $rank->top_eco; ?></td>
		<td align="right"><?php echo $rank->top_def; ?></td>
		<td align="right"><?php echo $rank->treasure; ?></td>
		<td align="right"><font color="#4169E1"><b><?php echo $rank->kills; ?></b></font></td>
		<td align="right"><font color="#4169E1"><b><?php echo $rank->deaths; ?></b></font></td>
	</tr>
	<?php endforeach; ?>
</table>
<table class="eAModRanking">
	<tr><td align="center" bgcolor="#FFCC00" height="30" colspan="5"><font size="2"><b>Members</b></font></td></tr>
	<tr>
		<th align="left"  colspan="2">Name</th>
		<th align="center" >Country</th>
		<th align="center" >Base / Job Level</th>
		<th align="right" >State</th>
	</tr>
	<?php foreach( $all_members as $char ): ?>
	<tr>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $char->sex . '.gif'); ?>"></td>
		<td align="left"><?php echo htmlspecialchars( $char->name ); ?><br><font color="Navy"><b>[ <?php echo $this->jobClassText($char->class); ?> ]</b></font></td>
		<td align="center">
			<?php if (file_exists( $this->themePath('img/eamod/flags/' . $char->lpais . '.png') ) ): ?>
				<img src="<?php echo $this->themePath('img/eamod/flags/' . $char->lpais . '.png'); ?>" alt=""/>
			<?php endif; ?>
		</td>
		<td align="center"><?php echo $char->base_level; ?> / <?php echo $char->job_level; ?></td>
		<td align="right">
			<?php if( $char->online ): ?>
				<font color="orange">Online</font>
			<?php else: 
				echo $char->last_online; 
				endif;
			?>
		</td>
	</tr>
		<?php
			if( $char->online )
				$online++;   
				
				$asistencia = '' . round(($online / $count) * 100,2) . ' %';
		?>
	<?php endforeach; ?>
	<tr>
		<td align="center" colspan="5">
			Members : <b><?php echo $count; ?></b> | Online : <b><?php echo $online; ?></b><br><br>
			Online Rate : <b><?php echo $asistencia; ?></b><br>
		</td>
	</tr>
</table>
<?php endif; ?>
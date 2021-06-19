<?php if (!defined('FLUX_ROOT')) exit; ?>
<table>
	<tr>
		<td align="center">
			<form id="ladder" method="post" action="<?php echo $this->url('eamod_rank','castles'); ?>">
				<label for="opt"><b>War of Emperium - Castle Ranking</b></label>
				<select name="opt">
					<option selected value="0">All Castles</option>
					<?php $i = 0; $j = 1; foreach( $castleNames as $cname ): ?>
						<option value="<?php echo $j; ?>"><?php echo $cname; ?></option>
					<?php $j++; endforeach; ?>
				</select>
				&nbsp;
				<select name="ser">
					<option selected value="0">Defensive</option>
					<option value="1">Ofensive</option>
					<option value="2">Possesion Time</option>
					<option value="3">Final Castle Capture</option>
					<option value="4">Captured Emperiums</option>
					<option value="5">Open Treasures</option>
					<option value="6">Best Economy</option>
					<option value="7">Best Defense</option>
					<option value="8">Total Economy Investment</option>
					<option value="9">Total Defense Investment</option>
					<option value="10">Zeny on Economy</option>
					<option value="11">Zeny on Defense</option>
					<option value="12">Skill BattleOrder</option>
					<option value="13">Skill Regeneration</option>
					<option value="14">Skill Restore</option>
					<option value="15">Skill Emergency Call</option>
					<option value="16">Offensive Kills</option>
					<option value="17">Offensive Deaths</option>
					<option value="18">Defensive Kills</option>
					<option value="19">Defensive Deaths</option>
					<option value="20">Extra Kills</option>
					<option value="21">Extra Deaths</option>
					<option value="22">Alliance Kills</option>
					<option value="23">Alliance Deaths</option>
				</select>
				&nbsp;
				<input type="submit" value="Submit">
			</form>
		</td>
	</tr>
</table>
<table class="eAModRanking">
	<?php $i = 0; foreach( $result as $castle ): $i++ ?>
	<tr>
		<td>
		<?php
			if( $castle_id != $castle->castle_id )
			{ // Post Image
				echo '<center>
							<img src="' . $this->themePath('img/eamod/castle_icon.jpg') . '" alt="Castle Icon"><br/>
							<font size="2" color="#4169E1"><b>~ ' . $castleNames[$castle->castle_id] . ' ~<b></font><br/><br/>
					</center>';
				$castle_id = $castle->castle_id;
			}
		?>
		</td>
	</tr>
	<tr>
		<td>
			<table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#800080">
				<tr>
					<td width="36" height="36" rowspan="2" align="center" valign="middle">
						<img src="<?php echo $this->emblem($castle->guild_id); ?>" alt="" />
					</td>
					<td>
						<font color="#FFFFFF" size="3"><b><?php echo htmlspecialchars($castle->name); ?></b></font>
					</td>
					<td width="300" align="right" valign="middle">
						<font size="2" color="#FFFFFF"><b>
							<?php echo $castleNames[$castle->castle_id]; ?><b></font>&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						<font color="#FFFF00"><b><?php echo htmlspecialchars($castle->master); ?></b></font>
					</td>
					<td align="right">
						<font color="#FFFF00"><b><?php echo calc_posesion_time($castle->posesion_time); ?></b>&nbsp;</font>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="middle">
			<table width="580" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" valign="middle">
						<table width="580" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<table width="580" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="10" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Global Guild Standings</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('13411'); ?>" /></td>
											<td><font color="#800080"><b>Offensive Score</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2122'); ?>" /></td>
											<td><font color="#800080"><b>Defensive Score</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2733'); ?>" /></td>
											<td><font color="#800080"><b>Final Captures</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('714'); ?>" /></td>
											<td><font color="#800080"><b>Emperiums</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7444'); ?>" /></td>
											<td><font color="#800080"><b>Treasures</b></font></td>
										</tr>
										<tr>
											<td><?php if($castle->offensive_score) echo $castle->offensive_score; else echo '0'; ?></td>
											<td><?php if($castle->defensive_score) echo $castle->defensive_score; else echo '0'; ?></td>
											<td><?php if($castle->capture) echo $castle->capture; else echo '0'; ?></td>
											<td><?php if($castle->emperium) echo $castle->emperium; else echo '0'; ?></td>
											<td><?php if($castle->treasure) echo $castle->treasure; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="580" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="4" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Economy Stats</b></font></td>
											<td colspan="4" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Defense Stats</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('670'); ?>" /></td>
											<td><font color="#800080"><b>Top Eco</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('674'); ?>" /></td>
											<td><font color="#800080"><b>Invest Eco</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2125'); ?>" /></td>
											<td><font color="#800080"><b>Top Def</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2107'); ?>" /></td>
											<td><font color="#800080"><b>Invest Def</b></font></td>
										</tr>
										<tr>
											<td><?php if($castle->top_eco) echo $castle->top_eco; else echo '0'; ?></td>
											<td><?php if($castle->invest_eco) echo $castle->invest_eco; else echo '0'; ?></td>
											<td><?php if($castle->top_def) echo $castle->top_def; else echo '0'; ?></td>
											<td><?php if($castle->invest_def) echo $castle->invest_def; else echo '0'; ?></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7338'); ?>" /></td>
											<td colspan="3"><font color="#800080"><b>Total Zeny Eco</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7338'); ?>" /></td>
											<td colspan="3"><font color="#800080"><b>Total Zeny Def</b></font></td>
										</tr>
										<tr>
											<td colspan="3"><?php if($castle->zeny_eco) echo $castle->zeny_eco; else echo '0'; ?></td>
											<td colspan="3"><?php if($castle->zeny_def) echo $castle->zeny_def; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="580" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="8" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Guild Skill Usage</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><<img src="<?php echo $this->iconImage('686'); ?>" /></td>
											<td><font color="#800080"><b>Battle Order</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('688'); ?>" /></td>
											<td><font color="#800080"><b>Regeneration</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><<img src="<?php echo $this->iconImage('690'); ?>" /></td>
											<td><font color="#800080"><b>Restore</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('692'); ?>" /></td>
											<td><font color="#800080"><b>Emergency Call</b></font></td>
										</tr>
										<tr>
											<td><?php if($castle->skill_battleorder) echo $castle->skill_battleorder; else echo '0'; ?></td>
											<td><?php if($castle->skill_regeneration) echo $castle->skill_regeneration; else echo '0'; ?></td>
											<td><?php if($castle->skill_restore) echo $castle->skill_restore; else echo '0'; ?></td>
											<td><?php if($castle->skill_emergencycall) echo $castle->skill_emergencycall; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="580" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="4" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Kill Counter</b></font></td>
											<td colspan="4" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Death Counter</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1213'); ?>" /></td>
											<td><font color="#800080"><b>Offensive</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1213'); ?>" /></td>
											<td><font color="#800080"><b>Defensive</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>" /></td>
											<td><font color="#800080"><b>Offensive</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>" /></td>
											<td><font color="#800080"><b>Defensive</b></font></td>
										</tr>
										<tr>
											<td><?php if($castle->off_kill) echo $castle->off_kill; else echo '0'; ?></td>
											<td><?php if($castle->def_kill) echo $castle->def_kill; else echo '0'; ?></td>
											<td><?php if($castle->off_death) echo $castle->off_death; else echo '0'; ?></td>
											<td><?php if($castle->def_death) echo $castle->def_death; else echo '0'; ?></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1213'); ?>" /></td>
											<td><font color="#800080"><b>Alliance</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1213'); ?>" /></td>
											<td><font color="#800080"><b>Extra</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>" /></td>
											<td><font color="#800080"><b>Alliance</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>" /></td>
											<td><font color="#800080"><b>Extra</b></font></td>
										</tr>
										<tr>
											<td><?php if($castle->ali_kill) echo $castle->ali_kill; else echo '0'; ?></td>
											<td><?php if($castle->ext_kill) echo $castle->ext_kill; else echo '0'; ?></td>
											<td><?php if($castle->ali_death) echo $castle->ali_death; else echo '0'; ?></td>
											<td><?php if($castle->ext_death) echo $castle->ext_death; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
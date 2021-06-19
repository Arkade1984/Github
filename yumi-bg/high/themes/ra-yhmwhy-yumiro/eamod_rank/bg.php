<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Week Ranking - Battleground</h2>
<table class="eAModRanking" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center">
			<hr>
		</td>
	</tr>
	<tr>
		<td align="center">
			<form id="ladder" method="post" action="<?php echo $this->url('eamod_rank','bg'); ?>">
				<select name="opt">
					<option selected value="0">ALL.....</option>
					<?php for( $i = 1; $i <= 26; $i++ )
					{ // First and Second Class - Expanded
						switch( $i )
						{
						// Ignored Classes
						case 13:
						case 21:
						case 22:
						case 26:
							continue;
						default:
							echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
						}
					}

					for( $i = 4001; $i <= 4022; $i++ )
					{ // Advanced Class
						switch( $i )
						{
						// Ignored Classes
						case 4014:
						case 4022:
							continue;
						default:
							echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
						}
					}

					for( $i = 4023; $i <= 4049; $i++ )
					{ // Baby Class - Expanded
						switch( $i )
						{
						// Ignored Classes
						case 4036:
						case 4044:
						case 4048:
							continue;
						default:
							echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
						}
					}

					for( $i = 4054; $i <= 4079; $i++ )
					{ // 3rd Class
						echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
					}

					for( $i = 4096; $i <= 4112; $i++ )
					{ // 3rd Class
						echo "<option value=\"$i\">" . $this->jobClassText($i) . "</option>";
					}
					?>
				</select>
				&nbsp;
				<select name="ser">
					<option selected value="0">Regular Week Points</option>
					<option value="1">Ranked Week Points</option>
					<option value="2">Gold Medals</option>
					<option value="3">Silver Medals</option>
					<option value="4">Bronze Medals</option>
					<option value="5">Offensive</option>
					<option value="6">Game Wins</option>
					<option value="7">Game Tie</option>
					<option value="8">Game Lost</option>
					<option value="9">Leader Game Wins</option>
					<option value="10">Leader Game Tie</option>
					<option value="11">Leader Game Lost</option>
					<option value="12">Kill Counter</option>
					<option value="13">Die Counter</option>
					<option value="14">Deserted Games</option>
					<option value="15">CTF - Flags Taken</option>
					<option value="16">CTF - Flags Captured</option>
					<option value="17">CTF - Flags Droped</option>
					<option value="18">CTF - Game Wins</option>
					<option value="19">CTF - Game Tie</option>
					<option value="20">CTF - Game Lost</option>
					<option value="21">TDM - Kill Counter</option>
					<option value="22">TDM - Die Counter</option>
					<option value="23">TDM - Game Wins</option>
					<option value="24">TDM - Game Tie</option>
					<option value="25">TDM - Game Lost</option>
					<option value="26">SC - Stone Stole</option>
					<option value="27">SC - Stone Captured</option>
					<option value="28">SC - Stone Droped</option>
					<option value="29">SC - Game Wins</option>
					<option value="30">SC - Game Tie</option>
					<option value="31">SC - Game Lost</option>
					<option value="32">EOS - Flags Captured</option>
					<option value="33">EOS - Bases Captured</option>
					<option value="34">EOS - Game Wins</option>
					<option value="35">EOS - Game Tie</option>
					<option value="36">EOS - Game Lost</option>
					<option value="37">BOSS - Guardian Damage</option>
					<option value="38">BOSS - Guardian Killed</option>
					<option value="39">BOSS - Flags Captured</option>
					<option value="40">BOSS - Game Wins</option>
					<option value="41">BOSS - Game Tie</option>
					<option value="42">BOSS - Game Lost</option>
					<option value="43">TI - Skulls Taken</option>
					<option value="44">TI - Game Wins</option>
					<option value="45">TI - Game Tie</option>
					<option value="46">TI - Game Lost</option>
					<option value="47">CON - Emperium Kills</option>
					<option value="48">CON - Barricade Kills</option>
					<option value="49">CON - Guarian Stone Kills</option>
					<option value="50">CON - Game Wins</option>
					<option value="51">CON - Game Lost</option>
					<option value="52">Best Damage</option>
					<option value="53">Total Damage Done</option>
					<option value="54">Total Damage Received</option>
					<option value="55">Good Support Skills</option>
					<option value="56">Wrong Support Skills</option>
					<option value="57">Total Good Healing</option>
					<option value="58">Total Wrong Healing</option>
					<option value="59">HP Potions Used</option>
					<option value="60">SP Potions Used</option>
					<option value="61">Yellow Gems Used</option>
					<option value="62">Red Gems Used</option>
					<option value="63">Blue Gems Used</option>
					<option value="64">Zeny Used</option>
					<option value="65">Arrows Used</option>
					<option value="66">Acid Demonstration Casted</option>
					<option value="67">Enchanted Deadly Poison Casted</option>
				</select>
				&nbsp;
				<select name="ord">
					<option selected value="0">Descending</option>
					<option value="1">Ascending</option>
				</select>
				&nbsp;
				<input type="submit" value="Search">
			</form>
		</td>
	</tr>
	<tr>
		<td align="center">
			<hr>
		</td>
	</tr>
	<?php $i = 0; foreach( $result as $bg ): $i++ ?>
	<?php $post = calc_rank( $bg->score ); ?>
	<tr>
		<td>
			<table width="580" border="0" cellpadding="0" cellspacing="0" bgcolor="#A92207" style="border: 2px solid #FFC300;">
				<tr>
					<td width="36" height="36" rowspan="2" align="center" valign="middle">
						<img src="<?php echo $this->emblem( $bg->guild_id ); ?>" alt=".">
					</td>
					<td>
						<font color="#FFFFFF" size="3"><b><?php echo $bg->name; ?><b></font>
					</td>
					<td width="150" align="right" valign="middle">
						<font size="3" color="#FFFFFF"><b><?php echo $i; ?><b></font>&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						<font color="#FFC300"><b><?php ( $bg->gname ? '-- no Guild --' : htmlspecialchars( $bg->gname ) ) ?></b></font>
					</td>
					<td align="right">
						<font color="#FFC300"><b><?php echo playtime( $bg->playtime ) ?></b>&nbsp;</font>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td align="center" valign="middle">
			<table width="580" border="0" cellpadding="0" cellspacing="0" style="border: 2px solid #FFC300;">
				<tr>
					<td width="110" height="130" align="center" valign="middle">
						<img src="<?php echo $this->themePath('img/eamod/class/' . $bg->sex . '/' . $bg->class . '.gif'); ?>" alt= "" /><br/>
						<font size="2" color="#4169E1"><b><?php echo $this->jobClassText( $bg->class ); ?></b></font><br>
						<font color="#FF0000"><?php echo $bg->max_hp; ?></font> / <font color="#0000FF"><?php echo $bg->max_sp; ?></font><br>
						<a href="profile.php?cid=' . $char['char_id'] . '" target="_blank"><img src="<?php echo $this->themePath('img/eamod/viewprofile.png'); ?>" border="0"></a>
					</td>
					<td rowspan="4" align="center" valign="middle">
						<table width="470" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="6" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>Game Results</b></font></td>
											<td colspan="6" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>As Team Leader</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7517'); ?>"></td>
											<td><font color="#4169E1"><b>Won</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('674'); ?>"></td>
											<td><font color="#4169E1"><b>Tie</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('673'); ?>"></td>
											<td><font color="#4169E1"><b>Lost</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7517'); ?>"></td>
											<td><font color="#4169E1"><b>Won</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('674'); ?>"></td>
											<td><font color="#4169E1"><b>Tie</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('673'); ?>"></td>
											<td><font color="#4169E1"><b>Lost</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->win) echo $bg->win; else echo '0'; ?></td>
											<td><?php if($bg->tie) echo $bg->tie; else echo '0'; ?></td>
											<td><?php if($bg->lost)echo $bg->lost; else echo '0'; ?></td>
											<td><?php if($bg->leader_win) echo $bg->leader_win; else echo '0'; ?></td>
											<td><?php if($bg->leader_tie)echo $bg->leader_tie; else echo '0'; ?></td>
											<td><?php if($bg->leader_lost) echo $bg->leader_lost; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="6" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>General Standings</b></font></td>
											<td colspan="6" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>Damage</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1214'); ?>"></td>
											<td><font color="#4169E1"><b>Kill</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>"></td>
											<td><font color="#4169E1"><b>Death</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2108'); ?>"></td>
											<td><font color="#4169E1"><b>Quits</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1819'); ?>"></td>
											<td><font color="#4169E1"><b>Top</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1259'); ?>"></td>
											<td><font color="#4169E1"><b>Done</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2108'); ?>"></td>
											<td><font color="#4169E1"><b>Recv</b></font></td>
										</tr>
										<tr>
											<td><?php if( $bg->kill_count) echo $bg->kill_count; else echo '0'; ?></td>
											<td><?php if( $bg->death_count) echo $bg->death_count; else echo '0'; ?></td>
											<td><?php if( $bg->deserter) echo $bg->deserter; else echo '0'; ?></td>
											<td><?php if( $bg->top_damage) echo $bg->top_damage; else echo '0'; ?></td>
											<td><?php if( $bg->damage_done) echo $bg->damage_done; else echo '0'; ?></td>
											<td><?php if( $bg->damage_received) echo $bg->damage_received; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="6" bgcolor="#A92207" height="15" align="center" valign="middle"><font color="#FFC300"><b>Tierra EoS</b></font></td>
											<td colspan="4" bgcolor="#A92207" height="15" align="center" valign="middle"><font color="#FFC300"><b>Tierra TI</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7253'); ?>"></td>
											<td><font color="#4169E1"><b>Flags</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7423'); ?>"></td>
											<td><font color="#4169E1"><b>Bases</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>"></td>
											<td><font color="#4169E1"><b>Skulls</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->eos_flags) echo $bg->eos_flags; else echo '0'; ?></td>
											<td><?php if($bg->eos_bases) echo $bg->eos_bases; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->eos_wins) echo $bg->eos_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> <?php if($bg->eos_tie) echo $bg->eos_tie; else echo '0'; ?> <font color="#4169E1"><b>L</b></font> <?php if($bg->eos_lost) echo $bg->eos_lost; else echo '0'; ?></td>
											<td><?php if($bg->skulls) echo $bg->skulls; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->ti_wins) echo $bg->ti_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> <?php if($bg->ti_tie) echo $bg->ti_tie; else echo '0'; ?> <font color="#4169E1"><b>L</b></font> <?php if($bg->ti_lost) echo $bg->ti_lost; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="8" bgcolor="#A92207" height="15" align="center" valign="middle"><font color="#FFC300"><b>Tierra Bossnia</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('750'); ?>"></td>
											<td><font color="#4169E1"><b>Boss Damage</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('751'); ?>"></td>
											<td><font color="#4169E1"><b>Boss Killed</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7253'); ?>"></td>
											<td><font color="#4169E1"><b>Flags</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->boss_damage) echo $bg->boss_damage; else echo '0'; ?></td>
											<td><?php if($bg->boss_killed) echo $bg->boss_killed; else echo '0'; ?></td>
											<td><?php if($bg->boss_flags) echo $bg->boss_flags; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->boss_wins) echo $bg->boss_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> <?php if($bg->boss_tie) echo $bg->boss_tie; else echo '0'; ?> <font color="#4169E1"><b>L</b></font> <?php if($bg->boss_lost) echo $bg->boss_lost; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="6" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#9ACD32"><b>Flavius TDM</b></font></td>
											<td colspan="4" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#9ACD32"><b>Flavius CTF</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>"></td>
											<td><font color="#4169E1"><b>Kills</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7005'); ?>"></td>
											<td><font color="#4169E1"><b>Deaths</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7253'); ?>"></td>
											<td><font color="#4169E1"><b>Flags</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->td_kills) echo $bg->td_kills; else echo '0'; ?></td>
											<td><?php if($bg->td_deaths) echo $bg->td_deaths; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->td_wins) echo $bg->td_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> <?php if($bg->td_tie) echo $bg->td_tie; else echo '0'; ?> <font color="#4169E1"><b>L</b></font> <?php if($bg->td_lost) echo $bg->td_lost; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>T</b></font> <?php if($bg->ctf_taken) echo $bg->ctf_taken; else echo '0'; ?> <font color="#4169E1"><b>C</b></font> <?php if($bg->ctf_captured) echo $bg->ctf_captured; else echo '0'; ?> <font color="#4169E1"><b>D</b></font> <?php if($bg->ctf_droped) echo $bg->ctf_droped; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->ctf_wins) echo $bg->ctf_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> <?php if($bg->ctf_tie) echo $bg->ctf_tie; else echo '0'; ?> <font color="#4169E1"><b>L</b></font> <?php if($bg->ctf_lost) echo $bg->ctf_lost; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="8" bgcolor="#4169E1" height="15" align="center" valign="middle"><font color="#9ACD32"><b>Flavius Stone Control</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('640'); ?>"></td>
											<td><font color="#4169E1"><b>Stole</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('640'); ?>"></td>
											<td><font color="#4169E1"><b>Capture</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('640'); ?>"></td>
											<td><font color="#4169E1"><b>Droped</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->sc_stole) echo $bg->sc_stole; else echo '0'; ?></td>
											<td><?php if($bg->sc_captured) echo $bg->sc_captured; else echo '0'; ?></td>
											<td><?php if($bg->sc_droped) echo $bg->sc_droped; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->sc_wins) echo $bg->sc_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> <?php if($bg->sc_tie) echo $bg->sc_tie; else echo '0'; ?> <font color="#4169E1"><b>L</b></font> <?php if($bg->sc_lost) echo $bg->sc_lost; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="8" bgcolor="#8B0000" height="15" align="center" valign="middle"><font color="#FFFFFF"><b>Castle Conquest</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('714'); ?>"></td>
											<td><font color="#4169E1"><b>Emperium</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1019'); ?>"></td>
											<td><font color="#4169E1"><b>Barricade</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7429'); ?>"></td>
											<td><font color="#4169E1"><b>G.Stone</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('658'); ?>"></td>
											<td><font color="#4169E1"><b>Results</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->emperium_kill) echo $bg->emperium_kill; else echo '0'; ?></td>
											<td><?php if($bg->barricade_kill) echo $bg->barricade_kill; else echo '0'; ?></td>
											<td><?php if($bg->gstone_kill) echo $bg->gstone_kill; else echo '0'; ?></td>
											<td><font color="#4169E1"><b>W</b></font> <?php if($bg->cq_wins) echo $bg->cq_wins; else echo '0'; ?> <font color="#4169E1"><b>T</b></font> 0 <font color="#4169E1"><b>L</b></font> <?php if($bg->cq_lost) echo $bg->cq_lost; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="4" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>Skills Soporte</b></font></td>
											<td colspan="4" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>Total Healing</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2277'); ?>"></td>
											<td><font color="#4169E1"><b>Correcto</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('5203'); ?>"></td>
											<td><font color="#4169E1"><b>Erroneo</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('2277'); ?>"></td>
											<td><font color="#4169E1"><b>Correcto</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('5203'); ?>"></td>
											<td><font color="#4169E1"><b>Erroneo</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->support_skills_used) echo $bg->support_skills_used; else echo '0'; ?></td>
											<td><?php if($bg->wrong_support_skills_used) echo $bg->wrong_support_skills_used; else echo '0'; ?></td>
											<td><?php if($bg->healing_done) echo $bg->healing_done; else echo '0'; ?></td>
											<td><?php if($bg->wrong_healing_done) echo $bg->wrong_healing_done; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table width="470" border="0" cellpadding="0" cellspacing="1">
										<tr>
											<td colspan="10" bgcolor="#FFC300" height="15" align="center" valign="middle"><font color="#A92207"><b>Usable Items</b></font></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('504'); ?>"></td>
											<td><font color="#4169E1"><b>HP</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('505'); ?>"></td>
											<td><font color="#4169E1"><b>SP</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('715'); ?>"></td>
											<td><font color="#4169E1"><b>Gems</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('716'); ?>"></td>
											<td><font color="#4169E1"><b>Gems</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('717'); ?>"></td>
											<td><font color="#4169E1"><b>Gems</b></font></td>
										</tr>
										<tr>
											<td><?php if($bg->hp_heal_potions) echo $bg->hp_heal_potions; else echo '0'; ?></td>
											<td><?php if($bg->sp_heal_potions) echo $bg->sp_heal_potions; else echo '0'; ?></td>
											<td><?php if($bg->yellow_gemstones) echo $bg->yellow_gemstones; else echo '0'; ?></td>
											<td><?php if($bg->red_gemstones) echo $bg->red_gemstones; else echo '0'; ?></td>
											<td><?php if($bg->blue_gemstones) echo $bg->blue_gemstones; else echo '0'; ?></td>
										</tr>
										<tr>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('676'); ?>"></td>
											<td colspan="3"><font color="#4169E1"><b>Total Zeny</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('1752'); ?>"></td>
											<td><font color="#4169E1"><b>Arrow</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('7136'); ?>"></td>
											<td><font color="#4169E1"><b>Bottle</b></font></td>
											<td width="28" rowspan="2" align="center" valign="middle"><img src="<?php echo $this->iconImage('678'); ?>"></td>
											<td><font color="#4169E1"><b>Bottle</b></font></td>
										</tr>
										<tr>
											<td colspan="3"><?php if($bg->zeny_used) echo $bg->zeny_used; else echo '0'; ?></td>
											<td><?php if($bg->ammo_used) echo $bg->ammo_used; else echo '0'; ?></td>
											<td><?php if($bg->acid_demostration) echo $bg->acid_demostration; else echo '0'; ?></td>
											<td><?php if($bg->poison_bottles) echo $bg->poison_bottles; else echo '0'; ?></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td height="90" align="center" valign="middle">
						<img src="<?php echo $this->iconImage('2733'); ?>"><br>
						<font size="1" color="#A0522D"><b>Week Points</b></font><br>
						<font size="1" color="#4169E1"><b>Regular : </b></font><font size="1" color="#FFC300"><b><?php if($bg->points) echo $bg->points; else echo '0'; ?></b></font><br>
						<font size="1" color="#4169E1"><b>Ranked : </b></font><font size="1" color="#FFC300"><b><?php if($bg->rank_points) echo $bg->rank_points; else echo '0'; ?></b></font><br>
						<br>
						<font size="1" color="#A0522D"><b>Played </b></font><font size="1" color="#FFC300"><b><?php if($bg->rank_games) echo $bg->rank_games; else echo '0'; ?></b></font><font size="1" color="#A0522D"><b> Rank Games</b></font>
					</td>
				</tr>
				<tr>
					<td height="50" align="center" valign="middle">
						<?php if($post > 0) ?>
							<img src="<?php echo $this->themePath('img/eamod/rank/' . $post . '.png'); ?>" alt=""><br/>
						<font size="1" color="#FFC300"><b><?php $Rank[$post]; ?></b></font><br>
						<font size="1" color="#4169E1"><b>Elo. Rank</b></font><br>
						<font size="1" color="#FFC300"><b><?php if($bg->score) echo $bg->score; else echo '0'; ?></b></font><br>
					</td>
				</tr>
				<tr>
					<td height="50" align="center" valign="middle">
						<font size="1" color="#4169E1"><b>Medals</b></font><br>
						<font size="1" color="#FFC300"><b><?php if($bg->bg_gold) echo $bg->bg_gold; else echo '0'; ?></b></font> | <font size="1" color="#00BFFF"><b><?php if($bg->bg_silver) echo $bg->bg_silver; else echo '0'; ?></b></font> | <font size="1" color="#A0522D"><b><?php if($bg->bg_bronze) echo $bg->bg_bronze; else echo '0'; ?></b></font><br>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
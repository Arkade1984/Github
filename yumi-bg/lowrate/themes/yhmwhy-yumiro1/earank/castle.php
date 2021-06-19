<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>





<?php foreach ($playerLadder as $playerLadder){ ?>

	<div style="overflow:auto; text-align: center;">

		<img src="<?php echo $this->themePath('img/castle.png'); ?>" align="middle"/><br />

		<strong>~ <?php getCastleName($playerLadder->castle_id); ?> ~</strong><br /><br />

	</div>

	<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0">

		<tr>

			<th style="width:20px;" rowspan="2"><img src="<?php echo $this->emblem($playerLadder->guild_id) ?>" /></th>

			<th align="left"><span style="font-size:15px; font-weight:bold;"><?php echo $playerLadder->name; ?></span></th>

			<th align="right" style="width:100px;"><span style="font-size:15px; font-weight:bold;"><?php getCastleName($playerLadder->castle_id); ?></span></th>							

		</tr>

		<tr style="padding:0;">

			<th align="left"><?php echo $playerLadder->master; ?></th>

			<th align="right" style="width:100px;"><?php echo calc_posesion_time($playerLadder->posesion_time); ?></th>

		</tr>

		<tr>

			<td colspan="3">

				<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

					<tr>

						<th colspan="10" style="color:#FFFFFF; background-color:#f8a459">Global Guild Standings</th>

					</tr>

					<tr>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/13411.png'); ?>"/></td>

						<td><strong>Offensive</strong><br /><?php echo $playerLadder->offensive_score; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/2122.png'); ?>"/></td>

						<td><strong>Defensive</strong><br /><?php echo $playerLadder->defensive_score; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/2733.png'); ?>"/></td>

						<td><strong>Final Captures</strong><br /><?php echo $playerLadder->capture; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/714.png'); ?>"/></td>

						<td><strong>Emperiums</strong><br /><?php echo $playerLadder->emperium; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/7444.png'); ?>"/></td>

						<td><strong>Treasures</strong><br /><?php echo $playerLadder->treasure; ?></td>

					</tr>

				</table>

			</td>

		</tr>

		<tr>

			<td colspan="3">

				<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

					<tr>

						<td>

							<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

								<tr>

									<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Economy Stats</th>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/670.png'); ?>"/></td>

									<td><strong>Top Eco</strong><br /><?php echo $playerLadder->top_eco; ?></td>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/674.png'); ?>"/></td>

									<td><strong>Invest Eco</strong><br /><?php echo $playerLadder->invest_eco; ?></td>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/7338.png'); ?>"/></td>

									<td><strong>Total Zeny Eco</strong><br /><?php echo $playerLadder->zeny_eco; ?></td>

									<td style="width:24px;">&nbsp;</td>

									<td><strong>&nbsp;</td>

								</tr>

							</table>

						</td>

						<td>

							<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" style="margin-bottom:0;">

								<tr>

									<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Economy Stats</th>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/2125.png'); ?>"/></td>

									<td><strong>Top Def</strong><br /><?php echo $playerLadder->top_def; ?></td>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/2107.png'); ?>"/></td>

									<td><strong>Invest Def</strong><br /><?php echo $playerLadder->invest_def; ?></td>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/7338.png'); ?>"/></td>

									<td><strong>Total Zeny Def</strong><br /><?php echo $playerLadder->zeny_def; ?></td>

									<td style="width:24px;">&nbsp;</td>

									<td><strong>&nbsp;</td>

								</tr>

							</table>

						</td>

					</tr>

				</table>

			</td>

		</tr>

		<tr>

			<td colspan="3">

				<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

					<tr>

						<th colspan="8" style="color:#FFFFFF; background-color:#f8a459">Guild Skill Usage</th>

					</tr>

					<tr>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/686.png'); ?>"/></td>

						<td><strong>Battle Order</strong><br /><?php echo $playerLadder->skill_battleorder; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/688.png'); ?>"/></td>

						<td><strong>Regeneration</strong><br /><?php echo $playerLadder->skill_regeneration; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/690.png'); ?>"/></td>

						<td><strong>Final Restore</strong><br /><?php echo $playerLadder->skill_restore; ?></td>

						<td style="width:24px;"><img src="<?php echo $this->themePath('img/692.png'); ?>"/></td>

						<td><strong>Emergency Call</strong><br /><?php echo $playerLadder->skill_emergencycall; ?></td>

					</tr>

				</table>

			</td>

		</tr>

		<tr>

			<td colspan="3">

				<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

					<tr>

						<td>

							<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

								<tr>

									<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Kill Counter</th>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/1213.png'); ?>"/></td>

									<td><strong>Offensive</strong><br /><?php echo $playerLadder->off_kill; ?></td>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/1213.png'); ?>"/></td>

									<td><strong>Defensive</strong><br /><?php echo $playerLadder->def_kill; ?></td>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/1213.png'); ?>"/></td>

									<td><strong>Alliance</strong><br /><?php echo $playerLadder->ali_kill; ?></td>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/1213.png'); ?>"/></td>

									<td><strong>Extra</strong><br /><?php echo $playerLadder->ext_kill; ?></td>

								</tr>

							</table>

						</td>

						<td>

							<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table" border="0" style="margin-bottom:0;">

								<tr>

									<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Death Counter</th>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/7005.png'); ?>"/></td>

									<td><strong>Offensive</strong><br /><?php echo $playerLadder->off_death; ?></td>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/7005.png'); ?>"/></td>

									<td><strong>Defensive</strong><br /><?php echo $playerLadder->def_death; ?></td>

								</tr>

								<tr>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/7005.png'); ?>"/></td>

									<td><strong>Alliance</strong><br /><?php echo $playerLadder->ali_death; ?></td>

									<td style="width:24px;"><img src="<?php echo $this->themePath('img/7005.png'); ?>"/></td>

									<td><strong>Extra</strong><br /><?php echo $playerLadder->ext_death; ?></td>

								</tr>

							</table>

						</td>

					</tr>

				</table>

			</td>

		</tr>

	</table>

<?php } ?>


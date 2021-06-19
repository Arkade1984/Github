<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>



<h3>Mercenary Ranking - Swordman Guild</h3>

<?php if ($SwordmanMerce): ?>

	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">

		<tr>

			<th>#</th>

			<th>Player Name</th>

			<th>Class</th>

			<th>Base / Job Level</th>

			<th>Loyalty</th>

			<th>Map / Status</th>

		</tr>

		<?php 

			$ctr = 0;

			foreach ($SwordmanMerce as $SwordmanMerce): 

			$ctr = $ctr + 1;

		?>

			<tr>

				<td align="center"><?php echo $ctr; ?></td>

				<td>

					<table border="0" cellpadding="0" cellspacing="0">

						<tr>

							<td rowspan="2"><img src="<?php echo $this->themePath('img/') . $SwordmanMerce->sex . ".gif" ?>"/></td>

							<td><?php echo $SwordmanMerce->name; ?></td>

						</tr>

						<tr>

							<td>

								<?php if($SwordmanMerce->guild_id != 0){

										echo "[ " . $this->linkToGuild($SwordmanMerce->guild_id, $SwordmanMerce->gname) . " ]"; 

									}else{

										echo "&nbsp;";

									}

								?>

							</td>

						</tr>

					</table>

				</td>

				<td align="center"><img src="<?php echo $this->themePath('img/class/') . $SwordmanMerce->class . ".gif" ?>"/><br />

					<?php if ($job=$this->jobClassText($SwordmanMerce->class)): ?>

						<?php echo htmlspecialchars($job) ?>

					<?php else: ?>

						<span class="not-applicable">Unknown</span>

					<?php endif ?>				

				</td>

				<td align="center"><?php echo $SwordmanMerce->base_level . " / " . $SwordmanMerce->job_level ; ?></td>

				<td align="center"><?php echo $SwordmanMerce->sword_faith; ?></td>

				<td align="center">

					<?php echo $SwordmanMerce->last_map . "<BR>"; 

						if($SwordmanMerce->online == 0){ ?>

							<img src="<?php echo $this->themePath('img/off-oval.png') ?>"/>

						<?php }else{ ?>

							<img src="<?php echo $this->themePath('img/on-oval.png') ?>"/>

						<?php } ?>

					

				</td>

			</tr>

		<?php endforeach ?>

	</table>

<?php else: ?>

	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>

<?php endif ?>



<h3>Mercenary Ranking - Spearman Guild</h3>

<?php if ($SpearMerce): ?>

	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">

		<tr>

			<th>#</th>

			<th>Player Name</th>

			<th>Class</th>

			<th>Base / Job Level</th>

			<th>Loyalty</th>

			<th>Map / Status</th>

		</tr>

		<?php 

			$ctr = 0;

			foreach ($SpearMerce as $SpearMerce): 

			$ctr = $ctr + 1;

		?>

			<tr>

				<td align="center"><?php echo $ctr; ?></td>

				<td>

					<table border="0" cellpadding="0" cellspacing="0">

						<tr>

							<td rowspan="2"><img src="<?php echo $this->themePath('img/') . $SpearMerce->sex . ".gif" ?>"/></td>

							<td><?php echo $SpearMerce->name; ?></td>

						</tr>

						<tr>

							<td>

								<?php if($SpearMerce->guild_id != 0){

										echo "[ " . $this->linkToGuild($SpearMerce->guild_id, $SpearMerce->gname) . " ]"; 

									}else{

										echo "&nbsp;";

									}

								?>

							</td>

						</tr>

					</table>

				</td>

				<td align="center"><img src="<?php echo $this->themePath('img/class/') . $SpearMerce->class . ".gif" ?>"/><br />

					<?php if ($job=$this->jobClassText($SpearMerce->class)): ?>

						<?php echo htmlspecialchars($job) ?>

					<?php else: ?>

						<span class="not-applicable">Unknown</span>

					<?php endif ?>				

				</td>

				<td align="center"><?php echo $SpearMerce->base_level . " / " . $SpearMerce->job_level ; ?></td>

				<td align="center"><?php echo $SpearMerce->spear_faith; ?></td>

				<td align="center">

					<?php echo $SpearMerce->last_map . "<BR>"; 

						if($SpearMerce->online == 0){ ?>

							<img src="<?php echo $this->themePath('img/off-oval.png') ?>"/>

						<?php }else{ ?>

							<img src="<?php echo $this->themePath('img/on-oval.png') ?>"/>

						<?php } ?>

					

				</td>

			</tr>

		<?php endforeach ?>

	</table>

<?php else: ?>

	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>

<?php endif ?>



<h3>Mercenary Ranking - Archer Guild</h3>

<?php if ($ArcherMerce): ?>

	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">

		<tr>

			<th>#</th>

			<th>Player Name</th>

			<th>Class</th>

			<th>Base / Job Level</th>

			<th>Loyalty</th>

			<th>Map / Status</th>

		</tr>

		<?php 

			$ctr = 0;

			foreach ($ArcherMerce as $ArcherMerce): 

			$ctr = $ctr + 1;

		?>

			<tr>

				<td align="center"><?php echo $ctr; ?></td>

				<td>

					<table border="0" cellpadding="0" cellspacing="0">

						<tr>

							<td rowspan="2"><img src="<?php echo $this->themePath('img/') . $ArcherMerce->sex . ".gif" ?>"/></td>

							<td><?php echo $ArcherMerce->name; ?></td>

						</tr>

						<tr>

							<td>

								<?php if($ArcherMerce->guild_id != 0){

										echo "[ " . $this->linkToGuild($ArcherMerce->guild_id, $ArcherMerce->gname) . " ]"; 

									}else{

										echo "&nbsp;";

									}

								?>

							</td>

						</tr>

					</table>

				</td>

				<td align="center"><img src="<?php echo $this->themePath('img/class/') . $ArcherMerce->class . ".gif" ?>"/><br />

					<?php if ($job=$this->jobClassText($ArcherMerce->class)): ?>

						<?php echo htmlspecialchars($job) ?>

					<?php else: ?>

						<span class="not-applicable">Unknown</span>

					<?php endif ?>				

				</td>

				<td align="center"><?php echo $ArcherMerce->base_level . " / " . $ArcherMerce->job_level ; ?></td>

				<td align="center"><?php echo $ArcherMerce->arch_faith; ?></td>

				<td align="center">

					<?php echo $ArcherMerce->last_map . "<BR>"; 

						if($ArcherMerce->online == 0){ ?>

							<img src="<?php echo $this->themePath('img/off-oval.png') ?>"/>

						<?php }else{ ?>

							<img src="<?php echo $this->themePath('img/on-oval.png') ?>"/>

						<?php } ?>

					

				</td>

			</tr>

		<?php endforeach ?>

	</table>

<?php else: ?>

	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>

<?php endif ?>
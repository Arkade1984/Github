<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php if ($zeny): ?>

	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">

		<tr>

			<th>#</th>

			<th>Player Name</th>

			<th>Class</th>

			<th>Base / Job Level</th>

			<th>Zeny</th>

		</tr>

		<?php 

			$ctr = 0;

			foreach ($zeny as $zeny): 

			$ctr = $ctr + 1;

		?>

			<tr>

				<td align="center"><?php echo $ctr; ?></td>

				<td>

					<table border="0" cellpadding="0" cellspacing="0">

						<tr>

							<td rowspan="2"><img src="<?php echo $this->themePath('img/') . $zeny->sex . ".gif" ?>"/></td>

							<td><?php echo $zeny->name; ?></td>

						</tr>

						<tr>

							<td>

								<?php if($zeny->guild_id != 0){

										echo "[ " . $this->linkToGuild($zeny->guild_id, $zeny->guild_name) . " ]"; 

									}else{

										echo "&nbsp;";

									}

								?>

							</td>

						</tr>

					</table>

				</td>

				<td align="center"><img src="<?php echo $this->themePath('img/class/') . $zeny->class . ".gif" ?>"/><br />

					<?php if ($job=$this->jobClassText($zeny->class)): ?>

						<?php echo htmlspecialchars($job) ?>

					<?php else: ?>

						<span class="not-applicable">Unknown</span>

					<?php endif ?>				

				</td>

				<td align="center"><?php echo $zeny->base_level . " / " . $zeny->job_level ; ?></td>

				<td align="center"><?php echo $zeny->zeny; ?></td>

			</tr>

		<?php endforeach ?>

	</table>

<?php else: ?>

	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>

<?php endif ?>
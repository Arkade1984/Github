<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>



<?php if ($potion): ?>

	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%">

		<tr>

			<th>#</th>

			<th>Points</th>

			<th>Player Name</th>

			<th>Base / Job Level</th>

			<th>Map / Status</th>

		</tr>

		<?php 

			$ctr = 0;

			foreach ($potion as $potion): 

			$ctr = $ctr + 1;

		?>

			<tr>

				<td align="center"><?php echo $ctr; ?></td>

				<td align="center"><?php echo $potion->fame; ?></td>

				<td>

					<table border="0" cellpadding="0" cellspacing="0">

						<tr>

							<td rowspan="2"><img src="<?php echo $this->themePath('img/') . $potion->sex . ".gif" ?>"/></td>

							<td><?php echo $potion->name; ?></td>

						</tr>

						<tr>

							<td>

								<?php if($potion->guild_id != 0){

										echo "[ " . $this->linkToGuild($potion->guild_id, $potion->gname) . " ]"; 

									}else{

										echo "&nbsp;";

									}

								?>

							</td>

						</tr>

					</table>

				</td>

				<td align="center"><?php echo $potion->base_level . " / " . $potion->job_level ; ?></td>

				<td align="center">

					<?php echo $potion->last_map . "<BR>"; 

						if($potion->online == 0){ ?>

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
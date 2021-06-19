<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Guilds General Ranking</h2>
<table class="eAModRanking">
	<tr>
		<td align="center">
			<form id="ladder" method="post" action="<?php echo $this->url('eamod_rank','guilds'); ?>">
				<label for="opt"><b>Guilds General Ranking</b></label>
				<select name="opt">
					<option value="0" <?php if( $option == 0 ) echo 'selected=selected'; ?>>Level and Experience</option>
					<option value="1" <?php if( $option == 1 ) echo 'selected=selected'; ?>>Castles Property</option>
					<option value="2" <?php if( $option == 2 ) echo 'selected=selected'; ?>>World War Conquest</option>
				</select>
				<input type="submit" value="Submit">
			</form>
		</td>
	</tr>
</table>
<?php
	switch( $option ) {
		case 0: ?>
			<table class="eAModRanking">
				<tr>
					<th align="left" class="head">#</th>
					<th align="center" class="head">Emblem</th>
					<th align="left" class="head">Name</th>
					<th align="left" class="head">Level</th>
					<th align="left" class="head">Experience</th>
					<th align="center" class="head">Average Level</th>
				</tr>
				<?php $i = 0; foreach( $result as $guilds ): $i++ ?>
				<tr>
					<td align="left"><?php echo $i; ?></td>
					<td align="center"><img src="<?php echo $this->emblem($guilds->guild_id); ?>" alt="<?php echo $guilds->name; ?>"></td>
					<td align="left">
						<?php echo htmlspecialchars($guilds->name); ?>
					</td>
					<td align="left"><?php echo number_format($guilds->guild_lv); ?></td>
					<td align="left"><?php echo number_format($guilds->exp); ?></td>
					<td align="center"><?php echo number_format($guilds->average_lv); ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php break; 
		case 1: ?>
			<table class="eAModRanking">
				<tr>
					<th align="left" class="head">#</th>
					<th align="center" class="head">Emblem</th>
					<th align="left" class="head">Name</th>
					<th align="center" class="head">Castle</th>
					<th align="center" class="head">Economy</th>
					<th align="center" class="head">Defense</th>
				</tr>
				<?php $i = 0; foreach( $result as $guilds ): $i++ ?>
				<tr>
					<td align="left"><?php echo $i; ?></td>
					<td align="center"><img src="<?php echo $this->emblem($guilds->guild_id); ?>" alt="<?php echo $guilds->name; ?>"></td>
					<td align="left">
						<?php echo htmlspecialchars($guilds->name); ?>
					</td>
					<td align="center"><?php echo $castleNames[$guilds->castle_id]; ?><br><?php echo $oclastes[$guilds->castle_id] ?></td>
					<td align="center"><?php echo htmlspecialchars($guilds->economy); ?></td>
					<td align="center"><?php echo htmlspecialchars($guilds->defense); ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php break;
		case 2: ?>
			<table class="eAModRanking">
				<tr>
					<th align="left" class="head">#</th>
					<th align="center" class="head">Emblema</th>
					<th align="left" class="head">Nombre</th>
					<th align="right" class="head">Conquested Region</th>
				</tr>
				<?php $i = 0; foreach( $result as $guilds ): $i++ ?>
				<tr>
					<td align="left"><?php echo $i; ?></td>
					<td align="center"><img src="<?php echo $this->emblem($guilds->guild_id); ?>" alt="<?php echo $guilds->name; ?>"></td>
					<td align="left">
						<?php echo htmlspecialchars($guilds->name); ?>
					</td>
					<td align="right"><?php echo htmlspecialchars($regions[$guilds->index]); ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php break; 
	}
?>
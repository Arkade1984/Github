<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Ranking of Players </h2>
<table class="eAModRanking">
	<tr>
		<td align="center">
			<form id="ladder" method="post" action="<?php echo $this->url('eamod_rank','class'); ?>">
				<label for="opt"><b>Ranking of Players</b></label>
				<select name="opt" id="jobclass">
				<option value=""<?php if (is_null($jobClass)) echo 'selected="selected"' ?>>All</option>
				<?php foreach ($classes as $jobClassIndex => $jobClassName): ?>
					<option value="<?php echo $jobClassIndex ?>"
						<?php if (!is_null($jobClass) && $jobClass == $jobClassIndex) echo ' selected="selected"' ?>>
						<?php echo htmlspecialchars($jobClassName) ?>
					</option>
				<?php endforeach ?>
				</select>
				<input type="submit" value="Submit">
			</form>
		</td>
	</tr>
</table>
<table class="eAModRanking">
	<tr>
		<th align="left" class="head">#</th>
		<th>&nbsp;</th>
		<th align="left" class="head" colspan="2">Character Name</th>
		<th align="center" class="head">Class</th>
		<th align="center" class="head">Base / Job Level</th>
		<th align="center" class="head">Location</th>
	</tr>
	<?php $i = 0; foreach( $result as $class ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="center" width="30"><img src="<?php echo $this->themePath('img/eamod/' . $class->sex . '.gif'); ?>" alt="<?php echo $class->sex; ?>" /></td>
		<td align="left">
			<?php echo htmlspecialchars($class->name); ?>
			<?php if ( $class->gname ): ?>
				<br/><font color="Navy"><b>[ <a href="<?php echo $this->url('eamod_rank','guildprofile&amp;guild_id=' . $class->guild_id); ?>"><?php echo htmlspecialchars($class->gname); ?></a> ]</b></font>
			<?php endif; ?>
		</td>
		<td align="center">
			<img src="<?php echo $this->themePath('img/eamod/imgwm/' . $class->class . '.gif'); ?>" alt="" /><br/>
			<?php echo $this->jobClassText($class->class); ?>
		</td>
		<td align="center">
			<?php echo $class->base_level; ?> / <?php echo $class->job_level; ?>
		</td>
		<td align="center">
			<?php echo $class->last_map; ?><br/>
			<?php if ( $class->online ): ?>
				<img src="<?php echo $this->themePath('img/eamod/on-oval.png'); ?>" alt="Online" />
			<?php else: ?>
				<img src="<?php echo $this->themePath('img/eamod/off-oval.png'); ?>" alt="Offline" />
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
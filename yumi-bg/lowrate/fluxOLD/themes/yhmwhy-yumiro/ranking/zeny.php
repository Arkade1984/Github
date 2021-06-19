<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Zeny Ranking</h2>
<h3>
	Top <?php echo number_format($limit=(int)Flux::config('CharRankingLimit')) ?> Richest Characters
	<?php if (!is_null($jobClass)): ?>
	(<?php echo htmlspecialchars($className=$this->jobClassText($jobClass)) ?>)
	<?php endif ?>
	on <?php echo htmlspecialchars($server->serverName) ?>
</h3>
<?php if ($chars): ?>
<form action="" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs('ranking', 'zeny') ?>
	<p>
		<label for="jobclass">Filter by job class:</label>
		<select name="jobclass" id="jobclass">
			<option value=""<?php if (is_null($jobClass)) echo 'selected="selected"' ?>>All</option>
		<?php foreach ($classes as $jobClassIndex => $jobClassName): ?>
			<option value="<?php echo $jobClassIndex ?>"
				<?php if (!is_null($jobClass) && $jobClass == $jobClassIndex) echo ' selected="selected"' ?>>
				<?php echo htmlspecialchars($jobClassName) ?>
			</option>
		<?php endforeach ?>
		</select>
		
		<input type="submit" value="Filter" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
	<?php for ($i = 0; $i < $limit; ++$i): ?>
    <table class="yhmwhy-table" width="100%">
        <tr>
            <th width="120" align="left">Character Name</th>
            <td width="150">
                <strong>
                <?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
                    <?php echo $this->linkToCharacter($chars[$i]->char_id, $chars[$i]->char_name) ?>
                <?php else: ?>
                    <?php echo htmlspecialchars($chars[$i]->char_name) ?>
                <?php endif ?>
                </strong>
            </td>
            <th width="80" align="left">Rank</th>
            <td><?php echo number_format($i + 1) ?></td>
        </tr>
        <tr>
            <th align="left">Zeny</th>
            <td><?php echo number_format((int)$chars[$i]->zeny) ?></td>
            <th align="left">Base Level</th>
            <td><?php echo number_format($chars[$i]->base_level) ?></td>
        </tr>
        <tr>
            <th align="left">Job Class</th>
            <td><?php echo $this->jobClassText($chars[$i]->char_class) ?></td>
            <th align="left">Job Level</th>
            <td><?php echo number_format($chars[$i]->job_level) ?></td>
        </tr>
        <tr>
            <th align="left">Guild Name</th>
            <td colspan="3">
                <?php if ($chars[$i]->guild_name): ?>
                    <?php if ($chars[$i]->guild_emblem_len): ?>
                        <img src="<?php echo $this->emblem($chars[$i]->guild_id) ?>" align="absmiddle" />
                    <?php endif ?>
                    <?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
                        <?php echo $this->linkToGuild($chars[$i]->guild_id, $chars[$i]->guild_name) ?>
                    <?php else: ?>
                        <?php echo htmlspecialchars($chars[$i]->guild_name) ?>
                    <?php endif ?>
                <?php else: ?>
                    <span class="not-applicable">None</span>
                <?php endif ?>
            </td>
        </tr>
        </tr>
    </table>
    <?php endfor ?>

<?php else: ?>
<p>There are no characters. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
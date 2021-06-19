<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Guild Ranking</h2>
<h3>
	Top <?php echo number_format($limit=(int)Flux::config('GuildRankingLimit')) ?> Guilds
	on <?php echo htmlspecialchars($server->serverName) ?>
</h3>
<?php if ($guilds): ?>
	<?php for ($i = 0; $i < $limit; ++$i): ?>
        <table class="yhmwhy-table" width="100%">
            <tr>
                <th width="100">Guild</th>
                <td width="150">
					<strong>
					<?php if ($guilds[$i]->emblem_len): ?>
	                    <img src="<?php echo $this->emblem($guilds[$i]->guild_id) ?>" align="absmiddle" />
                    <?php endif ?>

					<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
                        <?php echo $this->linkToGuild($guilds[$i]->guild_id, $guilds[$i]->name) ?>
                    <?php else: ?>
                        <?php echo htmlspecialchars($guilds[$i]->name) ?>
                    <?php endif ?>
                    </strong>
                </td>
                <th width="100">Rank:</th>
                <td><?php echo number_format($i + 1) ?></td>
            </tr>
            <tr>
                <th>Members</th>
                <td><?php echo number_format($guilds[$i]->members) ?></td>
                <th>Guild Level</th>
                <td><?php echo number_format($guilds[$i]->guild_lv) ?></td>
            </tr>
            <tr>
                <th>Experience</th>
                <td><?php echo number_format($guilds[$i]->exp) ?></td>
                <th>Average Level</th>
                <td><?php echo number_format($guilds[$i]->average_lv) ?></td>
            </tr>
        </table>
    <?php endfor ?>
	
<?php else: ?>
<p>No guilds found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
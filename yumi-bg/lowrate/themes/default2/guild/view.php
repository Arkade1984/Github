<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if ($guild): ?>
<h3>Guild Information for “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<table class="yhmwhy-table">
	<tr>
		<th>Guild ID</th>
		<td><?php echo htmlspecialchars($guild->guild_id) ?></td>
		<th>Guild Name</th>
		<td><?php echo htmlspecialchars($guild->name) ?></td>
		<th>Emblem ID</th>
		<td><?php echo number_format($guild->emblem_id) ?></td>
		<td><img src="<?php echo $this->emblem($guild->guild_id) ?>" /></td>
	</tr>
	<tr>
		<th>Leader ID</th>
		<td><?php echo htmlspecialchars($guild->char_id) ?></td>
		<th>Leader Name</th>
		<td>
			<?php if ($auth->allowedToViewCharacter): ?>
				<?php echo $this->linkToCharacter($guild->char_id, $guild->guild_master) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($guild->guild_master) ?>
			<?php endif ?>
		</td>
		<th>Guild Level</th>
		<td colspan="2"><?php echo number_format($guild->guild_lv) ?></td>
	</tr>
	<tr>
		<th>Online Members</th>
		<td><?php echo number_format($guild->connect_member) ?></td>
		<th>Capacity</th>
		<td><?php echo number_format($guild->max_member) ?></td>
		<th>Average Level</th>
		<td colspan="2"><?php echo number_format($guild->average_lv) ?></td>
	</tr>
	<tr>
		<th>Guild EXP</th>
		<td><?php echo number_format($guild->exp) ?></td>
		<th>EXP until Level Up</th>
		<td><?php echo number_format($guild->next_exp) ?></td>
		<th>Skill Point</th>
		<td colspan="2"><?php echo number_format($guild->skill_point) ?></td>
	</tr>
	<tr>
		<th>Guild Notice 1</th>
		<td colspan="6">
			<?php if (trim($guild->mes1)): ?>
				<?php echo htmlspecialchars($guild->mes1) ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Guild Notice 2</th>
		<td colspan="6">
			<?php if (trim($guild->mes2)): ?>
				<?php echo htmlspecialchars($guild->mes2) ?></td>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
</table>
<h3>Alliances of “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($alliances): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> has <?php echo count($alliances) ?> Alliance(s).</p>
	<table class="yhmwhy-table" style="margin-left:0">
		<tr>
			<th>Guild ID</th>
			<th>Guild Name</th>
		</tr>
		<?php foreach ($alliances AS $alliance): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($alliance->alliance_id, $alliance->alliance_id) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($alliance->alliance_id) ?>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($alliance->name) ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p>There are no alliances for this guild.</p>
<?php endif ?>
<h3>Oppositions of “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($oppositions): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> has <?php echo count($oppositions) ?> Opposition(s).</p>
	<table class="yhmwhy-table" style="margin-left:0">
		<tr>
			<th>Guild ID</th>
			<th>Guild Name</th>
		</tr>
		<?php foreach ($oppositions AS $opposition): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($opposition->alliance_id, $opposition->alliance_id) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($opposition->alliance_id) ?>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($opposition->name) ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p>There are no oppositions for this guild.</p>
<?php endif ?>
<h3>Guild Members of “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($members): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> has <?php echo count($members) ?> guild member(s).</p>
	<?php foreach ($members AS $member): ?>
		<table class="yhmwhy-table" width="100%" style="margin-bottom:5px;">
			<tr>
				<th style="width:100px;">Name</th>
				<td style="width:100px;">
					<?php if ($auth->allowedToViewCharacter): ?>
						<?php echo $this->linkToCharacter($member->char_id, $member->name) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($member->name) ?>
					<?php endif ?>
				</td>

				<th style="width:60px;">Job Class</th>
				<td>
					<?php if ($job=$this->jobClassText($member->class)): ?>
						<?php echo htmlspecialchars($job) ?>
					<?php else: ?>
						<span class="not-applicable">Unknown</span>
					<?php endif ?>
				</td>
			</tr>
			<tr>
				<th>Base Level</th>
				<td><?php echo htmlspecialchars($member->base_level) ?></td>

				<th>Job Level</th>
				<td><?php echo htmlspecialchars($member->job_level) ?></td>
			</tr>
			<tr>
				<th>Position ID</th>
				<td><?php echo htmlspecialchars($member->position) ?></td>

				<th>Position Name</th>
				<td><?php echo htmlspecialchars($member->position_name) ?></td>
			</tr>
			<tr>
				<th>Guild Rights</th>
				<td>
					<?php if ($member->mode == 17): ?>
						<?php echo htmlspecialchars("Invite/Expel") ?>
					<?php elseif ($member->mode == 16): ?>
						<?php echo htmlspecialchars("Expel") ?>
					<?php elseif ($member->mode == 1): ?>
						<?php echo htmlspecialchars("Invite") ?>
					<?php elseif ($member->mode == 0): ?>
						<span class="not-applicable">None</span>
					<?php else: ?>
						<span class="not-applicable">Unknown</span>
					<?php endif ?>
				</td>

				<th>Tax</th>
				<td><?php echo number_format($member->exp_mode) ?>%</td>
			</tr>
			<tr>
				<th>EXP Devotion</th>
				<td colspan="3"><?php echo number_format($member->devotion) ?></td>
			</tr>
		</table>	
	<?php endforeach ?>
<?php else: ?>
	<p>There are no members in this guild.</p>
<?php endif ?>
<h3>Member Expulsions of “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($expulsions): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> has <?php echo count($expulsions) ?> member expulsion(s).</p>
	<table class="yhmwhy-table">
		<tr>
			<th>Account ID</th>
			<th>Character Name</th>
			<th>Expulsion Reason</th>
		</tr>
		<?php foreach ($expulsions AS $expulsion): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewAccount): ?>
					<?php echo $this->linkToAccount($expulsion->account_id, $expulsion->account_id) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($expulsion->account_id) ?>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($expulsion->name) ?></td>
			<td><?php echo htmlspecialchars($expulsion->mes) ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p>There are no member expulsions for this guild.</p>
<?php endif ?>
<h3>Guild Storage Items of “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($items): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> has <?php echo count($items) ?> guild storage item(s).</p>
		<?php foreach ($items AS $item): ?>
		<?php $icon = $this->iconImage($item->nameid) ?>
		<table class="yhmwhy-table" width="100%" style="margin-bottom:5px;">
			<tr>
				<th style="width:100px;"><?php echo htmlspecialchars(Flux::message('ItemIdLabel')) ?></th>
				<td style="width:100px;">
					<?php if ($auth->actionAllowed('item', 'view')): ?>
						<?php echo $this->linkToItem($item->nameid, $item->nameid) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($item->nameid) ?>
					<?php endif ?>
				</td>

				<th style="width:60px;"><?php echo htmlspecialchars(Flux::message('ItemNameLabel')) ?></th>
				<td>
					<?php if ($icon): ?><img src="<?php echo htmlspecialchars($icon) ?>" /><?php endif ?>
					<?php if ($item->name_japanese): ?>
						<span class="item_name"><?php echo htmlspecialchars($item->name_japanese) ?></span>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('UnknownLabel')) ?></span>
					<?php endif ?>
				</td>
			</tr>
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('ItemAmountLabel')) ?></th>
				<td style="width:100px;"><?php echo number_format($item->amount) ?></td>

				<th><?php echo htmlspecialchars(Flux::message('ItemIdentifyLabel')) ?></th>
				<td>
					<?php if ($item->identify): ?>
						<span class="identified yes"><?php echo htmlspecialchars(Flux::message('YesLabel')) ?></span>
					<?php else: ?>
						<span class="identified no"><?php echo htmlspecialchars(Flux::message('NoLabel')) ?></span>
					<?php endif ?>
				</td>
			</tr>
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('ItemRefineLabel')) ?></th>
				<td style="width:100px;"><?php echo htmlspecialchars($item->refine) ?></td>

				<th><?php echo htmlspecialchars(Flux::message('ItemBrokenLabel')) ?></th>
				<td>
					<?php if ($item->attribute): ?>
						<span class="offline"><?php echo htmlspecialchars(Flux::message('YesLabel')) ?></span>
					<?php else: ?>
						<span class="online"><?php echo htmlspecialchars(Flux::message('NoLabel')) ?></span>
					<?php endif ?>
				</td>
			</tr>
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('ItemCard0Label')) ?></th>
				<td style="width:100px;">
					<?php if($item->card0 && ($item->type == 4 || $item->type == 5)): ?>
						<?php if (!empty($cards[$item->card0])): ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card0, $cards[$item->card0]) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($cards[$item->card0]) ?>
							<?php endif ?>
						<?php else: ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card0, $item->card0) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($item->card0) ?>
							<?php endif ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
					<?php endif ?>
				</td>

				<th><?php echo htmlspecialchars(Flux::message('ItemCard1Label')) ?></th>
				<td>
					<?php if($item->card1 && ($item->type == 4 || $item->type == 5)): ?>
						<?php if (!empty($cards[$item->card1])): ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card1, $cards[$item->card1]) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($cards[$item->card1]) ?>
							<?php endif ?>
						<?php else: ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card1, $item->card1) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($item->card1) ?>
							<?php endif ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
					<?php endif ?>
				</td>
			</tr>
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('ItemCard2Label')) ?></th>
				<td>
					<?php if($item->card2 && ($item->type == 4 || $item->type == 5)): ?>
						<?php if (!empty($cards[$item->card0])): ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card2, $cards[$item->card2]) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($cards[$item->card2]) ?>
							<?php endif ?>
						<?php else: ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card2, $item->card2) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($item->card2) ?>
							<?php endif ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
					<?php endif ?>
				</td>
				<th><?php echo htmlspecialchars(Flux::message('ItemCard3Label')) ?></th>
				<td>
					<?php if($item->card3 && ($item->type == 4 || $item->type == 5)): ?>
						<?php if (!empty($cards[$item->card0])): ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card3, $cards[$item->card3]) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($cards[$item->card3]) ?>
							<?php endif ?>
						<?php else: ?>
							<?php if ($auth->actionAllowed('item', 'view')): ?>
								<?php echo $this->linkToItem($item->card3, $item->card3) ?>
							<?php else: ?>
								<?php echo htmlspecialchars($item->card3) ?>
							<?php endif ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
					<?php endif ?>
				</td>
			</tr>
		</table>
	<?php endforeach ?>
<?php else: ?>
	<p>There are no guild storage items for this guild.</p>
<?php endif ?>
<?php else: ?>
<p>No such guild was found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
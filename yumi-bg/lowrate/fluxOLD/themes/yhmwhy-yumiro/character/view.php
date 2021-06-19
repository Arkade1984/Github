<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Viewing Character</h2>
<?php if ($char): ?>
<h3>Character Information for <?php echo htmlspecialchars($char->char_name) ?></h3>
<table class="yhmwhy-table" width="100%">
	<tr>
		<th>Character ID</th>
		<td colspan="2"><?php echo htmlspecialchars($char->char_id) ?></td>
		<th>Account ID</th>
		<td>
			<?php if ($auth->allowedToSeeAccountID): ?>
				<?php echo htmlspecialchars($char->char_account_id) ?>
			<?php else: ?>
				<span class="not-applicable">Not Applicable</span>
			<?php endif ?>
		</td>
		<th>Character Slot</th>
		<td><?php echo number_format($char->char_num+1) ?></td>
	</tr>
	<tr>
		<th>Character</th>
		<td colspan="2"><?php echo htmlspecialchars($char->char_name) ?></td>
		<th>Account</th>
		<td>
			<?php if ($isMine): ?>
				<a href="<?php echo $this->url('account', 'view') ?>"><?php echo htmlspecialchars($char->userid) ?></a>
			<?php else: ?>
				<?php echo $this->linkToAccount($char->char_account_id, $char->userid) ?>
			<?php endif ?>
		</td>
		<th>Job Class</th>
		<td>
			<?php if ($job=$this->jobClassText($char->char_class)): ?>
				<?php echo htmlspecialchars($job) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Base Level</th>
		<td colspan="2"><?php echo number_format((int)$char->char_base_level) ?></td>
		<th>B. Experience</th>
		<td><?php echo number_format($char->char_base_exp) ?></td>
		<th>Partner</th>
		<td>
			<?php if ($char->partner_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->partner_id, $char->partner_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->partner_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Job Level</th>
		<td colspan="2"><?php echo number_format((int)$char->char_job_level) ?></td>
		<th>J. Experience</th>
		<td><?php echo number_format($char->char_job_exp) ?></td>
		<th>Child</th>
		<td>
			<?php if ($char->child_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->child_id, $char->child_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->child_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Current HP</th>
		<td colspan="2"><?php echo number_format((int)$char->char_hp) ?></td>
		<th>Max HP</th>
		<td><?php echo number_format((int)$char->char_max_hp) ?></td>
		<th>Mother</th>
		<td>
			<?php if ($char->mother_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->mother_id, $char->mother_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->mother_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Current SP</th>
		<td colspan="2"><?php echo number_format((int)$char->char_sp) ?></td>
		<th>Max SP</th>
		<td><?php echo number_format((int)$char->char_max_sp) ?></td>
		<th>Father</th>
		<td>
			<?php if ($char->father_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->father_id, $char->father_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->father_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Zeny</th>
		<td colspan="2"><?php echo number_format((int)$char->char_zeny) ?></td>
		<th>Status Points</th>
		<td><?php echo number_format((int)$char->char_status_point) ?></td>
		<th>Skill Points</th>
		<td><?php echo number_format((int)$char->char_skill_point) ?></td>
	</tr>
	<tr>
		<th>Guild Name</th>
			<?php if ($char->guild_name): ?>
				<?php if ($char->guild_emblem_len): ?>
				<td><img src="<?php echo $this->emblem($char->guild_id) ?>" /></td>
				<?php endif ?>
				<td<?php if (!$char->guild_emblem_len) echo ' colspan="2"' ?>>
					<?php if ($auth->allowedToViewGuild): ?>
						<?php echo $this->linkToGuild($char->guild_id, $char->guild_name) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($char->guild_name) ?>
					<?php endif ?>
				</td>
			<?php else: ?>	
				<td colspan="2"><span class="not-applicable">None</span></td>
			<?php endif ?>
		<th>Guild Position</th>
		<td>
			<?php if ($char->guild_position): ?>
				<?php echo htmlspecialchars($char->guild_position) ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<th>Tax Level</th>
		<td><?php echo number_format($char->guild_tax) ?>%</td>
	</tr>
	<tr>
		<th>Party Name</th>
		<td colspan="2">
			<?php if ($char->party_name): ?>
				<?php echo htmlspecialchars($char->party_name) ?>
			<?php else: ?>	
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<th>Party Leader</th>
		<td>
			<?php if ($char->party_leader_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->party_leader_id, $char->party_leader_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->party_leader_name) ?>
				<?php endif ?>
			<?php else: ?>	
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<th>Pet</th>
		<td>
			<?php if ($char->pet_name): ?>
				<?php echo htmlspecialchars($char->pet_name) ?>
				(<?php echo htmlspecialchars($char->pet_mob_name) ?>)
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Death Count</th>
		<td colspan="2"><?php echo number_format((int)$char->death_count) ?></td>
		<th>Online Status</th>
		<td>
			<?php if ($char->char_online): ?>
				<span class="online">Online</span>
			<?php else: ?>
				<span class="offline">Offline</span>
			<?php endif ?>
		</td>
		<th>Homunculus</th>
		<td>
			<?php if ($char->homun_name): ?>
				<?php echo htmlspecialchars($char->homun_name) ?>
				(<?php echo htmlspecialchars($this->homunClassText($char->homun_class)) ?>)
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>Character Stats</th>
		<td colspan="6">
			<table class="character-stats">
				<tr>
					<td><span class="stat-name">STR</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_str) ?></span></td>
					<td><span class="stat-name">AGI</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_agi) ?></span></td>
					<td><span class="stat-name">VIT</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_vit) ?></span></td>
				</tr>
				<tr>
					<td><span class="stat-name">INT</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_int) ?></span></td>
					<td><span class="stat-name">DEX</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_dex) ?></span></td>
					<td><span class="stat-name">LUK</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_luk) ?></span></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php if ($char->party_name): ?>
<h3>Other Party Members of <?php echo htmlspecialchars($char->party_name) ?></h3>
	<?php if ($partyMembers): ?>
		<p><?php echo htmlspecialchars($char->party_name) ?> has <?php echo count($partyMembers) ?> other party member(s) besides <?php echo htmlspecialchars($char->char_name) ?>.</p>
		<table class="yhmwhy-table" width="100%">
			<tr>
				<th>Character Name</th>
				<th>Job Class</th>
				<th>Base Level</th>
				<th>Job Level</th>
				<th colspan="2">Guild</th>
				<th>Status</th>
			</tr>
			<?php foreach ($partyMembers as $partyMember): ?>
			<tr>
				<td align="right">
					<?php if ($auth->allowedToViewCharacter): ?>
						<?php echo $this->linkToCharacter($partyMember->char_id, $partyMember->name) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($partyMember->name) ?>
					<?php endif ?>
				</td>
				<td>
					<?php if ($job=$this->jobClassText($partyMember->class)): ?>
						<?php echo htmlspecialchars($job) ?>
					<?php else: ?>
						<span class="not-applicable">Unknown</span>
					<?php endif ?>
				</td>
				<td><?php echo number_format((int)$partyMember->base_level) ?></td>
				<td><?php echo number_format((int)$partyMember->job_level) ?></td>
				<?php if ($partyMember->guild_name): ?>
					<td><img src="<?php echo $this->emblem($partyMember->guild_id) ?>" /></td>
					<td>
						<?php if ($auth->allowedToViewGuild): ?>
							<?php echo $this->linkToGuild($partyMember->guild_id, $partyMember->guild_name) ?>
						<?php else: ?>
							<?php echo htmlspecialchars($partyMember->guild_name) ?>
						<?php endif ?>
					</td>
				<?php else: ?>	
					<td colspan="2" align="center"><span class="not-applicable">None</span></td>
				<?php endif ?>
				<td>
					<?php if ($partyMember->online): ?>
						<span class="online">Online</span>
					<?php else: ?>
						<span class="offline">Offline</span>
					<?php endif ?>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	<?php else: ?>
		<p>There are no other members in this party.</p>
	<?php endif ?>
<?php endif ?>
<h3>Friends of <?php echo htmlspecialchars($char->char_name) ?></h3>
<?php if ($friends): ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> has <?php echo count($friends) ?> friend(s).</p>
	<table class="yhmwhy-table" width="100%">
		<tr>
			<th>Character Name</th>
			<th>Job Class</th>
			<th>Base Level</th>
			<th>Job Level</th>
			<th>Guild</th>
			<th>Status</th>
		</tr>
		<?php foreach ($friends as $friend): ?>
		<tr>
			<td align="left">
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($friend->char_id, $friend->name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($friend->name) ?>
				<?php endif ?>
			</td>
			<td>
				<?php if ($job=$this->jobClassText($friend->class)): ?>
					<?php echo htmlspecialchars($job) ?>
				<?php else: ?>
					<span class="not-applicable">Unknown</span>
				<?php endif ?>
			</td>
			<td><?php echo number_format((int)$friend->base_level) ?></td>
			<td><?php echo number_format((int)$friend->job_level) ?></td>
			<?php if ($friend->guild_name): ?>
				<td>
				<?php if ($friend->guild_emblem_len): ?>
					<img src="<?php echo $this->emblem($friend->guild_id) ?>" />
				<?php endif ?>
				<?php if ($auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($friend->guild_id, $friend->guild_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($friend->guild_name) ?>
				<?php endif ?>
			<?php else: ?>	
				<td><span class="not-applicable">None</span></td>
			<?php endif ?>
			<td>
				<?php if ($friend->online): ?>
					<span class="online">Online</span>
				<?php else: ?>
					<span class="offline">Offline</span>
				<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> has no friends.</p>
<?php endif ?>

<h3>Inventory Items of <?php echo htmlspecialchars($char->char_name) ?></h3>
<?php if ($items): ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> has <?php echo count($items) ?> inventory item(s).</p>
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
	<p>There are no inventory items on this character.</p>
<?php endif ?>

<h3>Cart Inventory Items of <?php echo htmlspecialchars($char->char_name) ?></h3>
<?php if ($cart_items): ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> has <?php echo count($cart_items) ?> cart inventory item(s).</p>
	<table class="yhmwhy-table" width="100%">
		<tr>
			<th>Item ID</th>
			<th colspan="2">Name</th>
			<th>Amount</th>
			<th>Identified</th>
			<th>Refine Level</th>
			<th>Broken</th>
			<th>Card0</th>
			<th>Card1</th>
			<th>Card2</th>
			<th>Card3</th>
			</th>
		</tr>
		<?php foreach ($cart_items AS $cart_item): ?>
		<?php $icon = $this->iconImage($cart_item->nameid) ?>
		<tr>
			<td align="right"><?php echo $this->linkToItem($cart_item->nameid, $cart_item->nameid) ?></td>
			<?php if ($icon): ?>
			<td><img src="<?php echo htmlspecialchars($icon) ?>" /></td>
			<?php endif ?>
			<td<?php if (!$icon) echo ' colspan="2"' ?>>
				<?php if ($cart_item->name_japanese): ?>
					<span class="item_name"><?php echo htmlspecialchars($cart_item->name_japanese) ?></span>
				<?php else: ?>
					<span class="not-applicable">Unknown Item</span>
				<?php endif ?>
			</td>
			<td><?php echo number_format($cart_item->amount) ?></td>
			<td>
				<?php if ($cart_item->identify): ?>
					<span class="identified yes">Yes</span>
				<?php else: ?>
					<span class="identified no">No</span>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($cart_item->refine) ?></td>
			<td>
				<?php if ($cart_item->attribute): ?>
					<span class="broken yes">Yes</span>
				<?php else: ?>
					<span class="broken no">No</span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card0 && ($cart_item->type == 4 || $cart_item->type == 5)): ?>
					<?php if (!empty($cart_cards[$cart_item->card0])): ?>
						<?php echo $this->linkToItem($cart_item->card0, $cart_cards[$cart_item->card0]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card0, $cart_item->card0) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable">None</span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card1 && ($cart_item->type == 4 || $cart_item->type == 5)): ?>
					<?php if (!empty($cart_cards[$cart_item->card1])): ?>
						<?php echo $this->linkToItem($cart_item->card1, $cart_cards[$cart_item->card1]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card1, $cart_item->card1) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable">None</span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card2 && ($cart_item->type == 4 || $cart_item->type == 5)): ?>
					<?php if (!empty($cart_cards[$cart_item->card2])): ?>
						<?php echo $this->linkToItem($cart_item->card2, $cart_cards[$cart_item->card2]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card2, $cart_item->card2) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable">None</span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card3 && ($cart_item->type == 4 || $cart_item->type == 5)): ?>
					<?php if (!empty($cart_cards[$cart_item->card3])): ?>
						<?php echo $this->linkToItem($cart_item->card3, $cart_cards[$cart_item->card3]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card3, $cart_item->card3) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable">None</span>
				<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p>There are no cart inventory items on this character.</p>
<?php endif ?>

<?php else: ?>
<p>No such character was found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
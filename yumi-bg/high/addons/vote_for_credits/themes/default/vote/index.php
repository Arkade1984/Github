<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('VoteHeading')) ?></h2>
<p><a href="javascript:location.href=location.href"><strong><?php echo htmlspecialchars(Flux::message('VoteRefreshLabel')) ?></strong></a></p>
<?php if ($unclaimed): ?>
<p class="important">
	<?php if (Flux::config('ChangeToCashPoints')): ?>
		<?php if (Flux::config('DepositKafraPoints')): ?>
			<strong><?php echo htmlspecialchars(Flux::message('VoteUnclaimedText3')) ?></strong>
			<?php echo sprintf(Flux::message('VoteUnclaimedText4'), $this->url('vote', 'index', array('claim' => 1))) ?>
		<?php else: ?>
			<strong><?php echo htmlspecialchars(Flux::message('VoteUnclaimedText1')) ?></strong>
			<?php echo sprintf(Flux::message('VoteUnclaimedText2'), $this->url('vote', 'index', array('claim' => 1))) ?>
		<?php endif ?>
	<?php elseif (Flux::config('ChangeToCoins')): ?>
		<?php if ($coinsMaxed): ?>
			<p><?php echo htmlspecialchars(Flux::message('VoteUnclaimedMax1')) ?></p>
		<?php elseif ($storageMaxed): ?>
			<p><?php echo htmlspecialchars(Flux::message('VoteUnclaimedMax2')) ?></p>
		<?php else: ?>
			<strong><?php echo htmlspecialchars(Flux::message('VoteUnclaimedText5')) ?></strong>
			<?php echo sprintf(Flux::message('VoteUnclaimedText6'), $this->url('vote', 'index', array('claim' => 1))) ?>
			<br />
			<?php echo htmlspecialchars(Flux::message('VoteUnclaimedText7')) ?>
		<?php endif ?>
	<?php endif ?>
</p>
<?php endif ?>
<div class="generic-form-div">
	<table class="generic-form-table">
		<?php if ($changeToCredits=Flux::config('ChangeToCredits')): ?>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('VoteCurrentBalance')) ?></label></th>
			<td><p><?php echo number_format((int)$session->account->balance) ?></p></td>
		</tr>
		<?php elseif ($changeToCashPoints=Flux::config('ChangeToCashPoints')): ?>
		<?php $_currentBalance = Flux::config('DepositKafraPoints') ? 'VoteCurrentKafraBalance' : 'VoteCurrentCashBalance' ?>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message($_currentBalance)) ?></label></th>
			<td><p><?php echo number_format((int)$cash) ?></p></td>
		</tr>
		<?php elseif ($changeToCoins=Flux::config('ChangeToCoins')): ?>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('VoteCurrentCoins')) ?></label></th>
			<td><p><?php echo number_format((int)$_coins) ?></p></td>
		</tr>
		<?php endif ?>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('VotePointsLabel')) ?></label></th>
			<td>
				<p>
				<strong><?php echo number_format($points) ?></strong>
				<?php if ($needed): ?>
					<?php if ($changeToCredits):  ?>
						<?php echo htmlspecialchars(sprintf(Flux::message('VotePointsText'), number_format($needed), (int)Flux::config('RewardedCredits'))) ?>
					<?php elseif ($changeToCashPoints): ?>
					<?php $_vpText = Flux::config('DepositKafraPoints') ? 'VotePointsText3' : 'VotePointsText2' ?>
						<?php echo htmlspecialchars(sprintf(Flux::message($_vpText), number_format($needed), (int)Flux::config('RewardedCashPoints'))) ?>
					<?php elseif ($changeToCoins): ?>
						<?php echo htmlspecialchars(sprintf(Flux::message('VotePointsText4'), number_format($needed), (int)Flux::config('RewardedCoins'))) ?>
					<?php endif ?>
				<?php endif ?>
				</p>
			</td>
		</tr>
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('VoteLastDateTime')) ?></label></th>
			<td><p>
				<?php if ($lastVote): ?>
					<?php echo $this->formatDateTime($lastVote->vote_date) ?> (IP: <?php echo htmlspecialchars($lastVote->vote_ip) ?>)
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NeverLabel')) ?></span>
				<?php endif ?>
			</p></td>
		</tr>
	</table>
</div>

<h3><?php echo htmlspecialchars(Flux::message('VoteInfoText')) ?></h3>
<?php foreach ($next as $banner): ?>
<div class="generic-form-div" style="float: left; margin: 0 10px 10px 0; cursor: not-allowed" id="banner_<?php echo $banner->id ?>">
	<table class="generic-form-table">
		<tr>
			<td colspan="2" style="opacity: 0.2; filter: alpha(opacity=20)" align="center"><img src="<?php echo htmlspecialchars($banner->image_url) ?>" /></td>
		</tr>
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('VoteInLabel')) ?></th>
			<td><strong><?php echo $banner->hours ?> <?php echo htmlspecialchars(Flux::message('VoteHourLabel')) ?></strong></td>
		</tr>
	</table>
</div>
<?php endforeach ?>
<?php if ($banners): ?>
<?php foreach ($banners as $banner): ?>
	<div class="generic-form-div" style="float: left; margin: 0 10px 10px 0" id="banner_<?php echo $banner->id ?>">
		<table class="generic-form-table">
			<tr>
				<td colspan="2" align="center">
					<a href="<?php echo $this->url('vote', 'out', array('id' => $banner->id)) ?>" target="_blank"
						onclick="document.getElementById('banner_<?php echo $banner->id ?>').style.visibility='hidden'">
						<img src="<?php echo htmlspecialchars($banner->image_url) ?>" />
					</a>
				</td>
			</tr>
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('VoteCreditsLabel')) ?></th>
				<td><strong><?php echo number_format($banner->credits) ?></strong></td>
			</tr>
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('VoteIntervalLabel')) ?></th>
				<td><?php echo $banner->hours ?> <?php echo htmlspecialchars(Flux::message('VoteHourLabel')) ?></td>
			</tr>
		</table>
	</div>
<?php endforeach ?>
<?php else: ?>
<p style="clear: left">
	<?php echo htmlspecialchars(Flux::message('VoteNotYet')) ?>
	<a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('GoBackLabel')) ?></a>
</p>
<?php endif ?>
<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('VoteStatsHeading')) ?></h2>
<?php if ($total && $since): ?>
<p><?php echo htmlspecialchars(sprintf(Flux::message('VoteStatsGrandTotal'), number_format($total), $this->formatDateTime($since))) ?></p>
<?php if ($users): ?>
	<h3><?php echo $limitTopVoters ? sprintf(Flux::message('VoteStatsSubHeading'), $limitTopVoters) : Flux::message('VoteStatsSubHeading2') ?></h3>
	<ol>
	<?php foreach ($users as $user): ?>
		<li><strong>
			<?php if ($auth->allowedToViewAccount): ?>
				<a href="<?php echo $this->url('account', 'view', array('id' => $user->account_id)) ?>"><?php echo htmlspecialchars($user->userid) ?></a>
			<?php else: ?>
				<?php echo htmlspecialchars($user->userid) ?>
			<?php endif ?>
		</strong>
		(<?php echo number_format($user->total) ?>)</li>
	<?php endforeach ?>
	</ol>
<?php endif ?>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('VoteStatsNoVotes')) ?></p>
<?php endif ?>
<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('VoteHeading')) ?></h2>
<p><?php echo htmlspecialchars(Flux::message('VoteShowSupport')) ?></p>
<p><a href="javascript:location.href=location.href"><strong><?php echo htmlspecialchars(Flux::message('VoteRefresh')) ?></strong></a></p>

<br/>

<?php foreach ($banners as $banner): ?>
	<?php
	$b_id = $banner["id"];
	if ($banner["ready"]): ?>
		<div class="generic-form-div" align="center" id="banner_<?php echo $b_id ?>">
			<a href="<?php echo $this->url('vote', 'out', array('id' => $b_id)) ?>" target="_blank"
				onclick="document.getElementById('banner_<?php echo $b_id ?>').style.visibility='hidden'">
				<img src="<?php echo htmlspecialchars($banner["src"]) ?>" />
			</a>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteRewards')) ?>:&nbsp;</strong>
				<?php echo $banner["amt"] ?>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteInterval')) ?>:&nbsp;</strong>
				<?php echo htmlspecialchars(Flux::message('VoteEveryTag')) ?> <?php echo $banner["hours"] ?> <?php echo htmlspecialchars(Flux::message('VoteHourTag')) ?>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteLastVote')) ?>:&nbsp;</strong>
				<?php if ($banner["date"] != "Never"): ?>
					<?php echo date("M j, Y G:s", strtotime($banner["date"])) ?> (IP: <?php echo htmlspecialchars($banner["ip"]) ?>)
				<?php else: ?>
					<?php echo htmlspecialchars(Flux::message('VoteNever')) ?>
				<?php endif ?>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteTimeRemain')) ?>:&nbsp;</strong>
				<?php echo htmlspecialchars(Flux::message('VoteNow')) ?>
		</div>
	<?php else: ?>
		<div class="generic-form-div" style="cursor: not-allowed" align="center" id="banner_<?php echo $b_id ?>">
			<img src="<?php echo htmlspecialchars($banner["src"]) ?>" style="opacity: 0.2; filter: alpha(opacity=20)"/>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteRewards')) ?>:&nbsp;</strong>
				<?php echo $banner["amt"] ?>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteInterval')) ?>:&nbsp;</strong>
				<?php echo htmlspecialchars(Flux::message('VoteEveryTag')) ?> <?php echo $banner["hours"] ?> <?php echo htmlspecialchars(Flux::message('VoteHourTag')) ?>
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteLastVote')) ?>:&nbsp;</strong>
				<?php echo date("M j, Y G:s", strtotime($banner["date"])) ?> (IP: <?php echo htmlspecialchars($banner["ip"]) ?>)
			<br/>
			<strong><?php echo htmlspecialchars(Flux::message('VoteTimeRemain')) ?>:&nbsp;</strong>
				<?php
					$time1 = strtotime("now");
					$time2 = strtotime($banner["date"]) + ($banner["hours"] * 60 * 60);
					
					if($time1 <= $time2) {
						$diff = ($time2-$time1) / 60 /60;
						if($diff <= 1) {
							echo round($diff * 60) ." mins";
						}
						else {
							echo round($diff,2) ." hours";
						}
					}
					else {
						echo htmlspecialchars(Flux::message('VoteNow'));
					}				
				?>
		</div>
	<?php endif ?>
<?php endforeach ?>
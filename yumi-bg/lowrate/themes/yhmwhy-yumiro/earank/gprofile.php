<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php if ($GuildInfo): ?>
	<?php foreach ($GuildInfo as $GuildInfo): ?>
	<table class="yhmwhy-table" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<th align="center">
					<span style="font-size: 15px; font-weight: bold;"><?php echo $GuildInfo->name; ?></span>
					<br /><img src="<?php echo $this->emblem($GuildInfo->guild_id) ?>" /><br />
					<?php if ($job=$this->jobClassText($GuildInfo->class)): ?>
						<?php $myJob = $job; ?>
					<?php else: ?>
						<?php $myJob = "Unknown"; ?>
					<?php endif ?>
					
					<?php echo $GuildInfo->master . " [ " . $myJob . " ] " . $GuildInfo->base_level . " / " . $GuildInfo->job_level; ?>				
				</th>
			</tr>
			<tr>
				<td>
					<table class="yhmwhy-table" style="margin-bottom: 0pt;" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<th style="color: rgb(255, 255, 255); background-color: rgb(248, 164, 89); text-align:center;">
								GENERAL STATUS
							</th>
						</tr>
						<tr>
							<td>
								<table class="yhmwhy-table" style="margin-bottom: 0pt;" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td align="left"><strong>Guild Level : </strong><?php echo $GuildInfo->guild_lv; ?></td>
										<td align="right"><strong>Actual Guild Member : </strong><?php echo $myMemberCount; ?></td>
									</tr>
									<tr>
										<td align="left"><strong>Guild Expirience : </strong><?php echo $GuildInfo->exp; ?></td>
										<td align="right"><strong>Guild Max Member : </strong><?php echo $GuildInfo->max_member; ?></td>
									</tr>
									<tr>
										<td align="left"><strong>Next Level : </strong><?php echo $GuildInfo->next_exp; ?></td>
										<td align="right"><strong>Guild Average Level : </strong><?php echo $GuildInfo->average_lv; ?></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<th style="color: rgb(255, 255, 255); background-color: rgb(248, 164, 89); text-align:center;">
								MEMBERS
							</th>
						</tr>
						<tr>
							<td>
								<table class="yhmwhy-table" style="margin-bottom: 0pt;" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<th align="left">Name</th>
										<th align="center">Base / Job Level</th>
										<th align="center">Status</th>
									</tr>
									<?php foreach ($GuildMemberInfo as $GuildMemberInfo): ?>
											<?php if ($job=$this->jobClassText($GuildMemberInfo->class)): ?>
												<?php $myJob = $job; ?>
											<?php else: ?>
												<?php $myJob = "Unknown"; ?>
											<?php endif ?>										<tr>
											<td align="left"><?php echo $GuildMemberInfo->name; ?><br /><strong>[ <?php echo $myJob; ?> ]</strong></td>
											<td align="center"><?php echo $GuildMemberInfo->base_level; ?> / <?php echo $GuildMemberInfo->job_level; ?></td>
											<td align="center">
												<?php if($GuildMemberInfo->online == 0){ ?>
													<img src="<?php echo $this->themePath('img/off-oval.png') ?>"/>
												<?php }else{ ?>
													<img src="<?php echo $this->themePath('img/on-oval.png') ?>"/>
												<?php } ?>
											</td>
										</tr>
									<?php endforeach ?>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
	<?php endforeach ?>
	
<?php else: ?>
	<span class="myText">No. Current Player. <a href="javascript:history.go(-1)">Go back</a>.</span>
<?php endif ?>
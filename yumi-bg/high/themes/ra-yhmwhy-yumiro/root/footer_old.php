<?php if (!defined('FLUX_ROOT')) exit; ?>
				</div>
                            </div>
                            <div class="MidContentBot"></div>
                        </div>
                    	<div class="RightPannel">
                        	<div class="WOE">
                            	<div class="WOESched">
                                	<div class="WOEDay">Wednesday</div><div class="WOETime">7:00-8:00PM</div>
                                	<div class="WOEDay">Saturaday</div><div class="WOETime">8:00-9:00PM</div>
                                	<div class="WOEDay">Sunday</div><div class="WOETime">6:00-7:00PM</div>
                                </div>
								<div>
									<?php foreach ($castle as $castle): ?>
										<?php if ($castle->guild_emblem_len): ?>
											<?php $mycastlename = getCastleName2($castle->castle_id); ?>
											<img style="margin-left:5px; margin-right:5px;" title="Guild: <?php echo htmlspecialchars(basename($castle->name)) ?> <BR> Castle: <?php echo $mycastlename; ?>" src="<?php echo $this->emblem($castle->guild_id) ?>" />
										<?php endif ?>
									<?php endforeach ?>								
								</div>
                         	</div>
                            <div class="GOTM">
								<?php foreach ($GOTM as $GOTM): ?>
									<div class="GuildName"><?php echo $GOTM->name ?></div>
									<div class="GOTMEmblem">
										<?php if ($GOTM->emblem_len): ?>
											<img src="<?php echo $this->emblem($GOTM->guild_id) ?>" width="57" height="65" />
										<?php endif ?>
									</div>
									<div class="GuildInfo">
										<span class="myfield">GM:</span> <span class="myValue"><?php echo $GOTM->master ?></span><br />
										<span class="myfield">Job:</span> <span class="myValue">
											<?php if ($job=$this->jobClassText($GOTM->class)): ?>
												<?php echo htmlspecialchars($job) ?>
											<?php else: ?>
												<span class="not-applicable">Unknown</span>
											<?php endif ?>
										</span><br />
										<span class="myfield">Members:</span> <span class="myValue"><?php echo $GOTM->connect_member ?></span><br />
										<span class="myfield">Agits:</span> <span class="myValue">
											<?php foreach ($AgitCount as $AgitCount): ?>
												<?php echo $AgitCount->mycount ?>
											<?php endforeach ?>	
										</span><br />
									</div>
								<?php endforeach ?>	
                            </div>
                            <div class="TopPlayer"></div>
                        </div>
                    </div>
                    <div class="myFooter">
                    	<div class="FooterLinks" style="float:left; margin-left:32px;">
                        	<a href="index.php">Home</a>
                            &nbsp;&nbsp;
                            <a href="http://streamside-ro.net/forum" target="_blank">Forum</a>
                            &nbsp;&nbsp;
                            <a href="?module=pages&action=content&path=buy">Buy Items</a>
                            &nbsp;&nbsp;
                            <a href="?module=ranking&action=character">Ranks</a>
                            &nbsp;&nbsp;
                            <a href="?module=pages&action=content&path=rules">Rules</a>
                            &nbsp;&nbsp;
                            <a href="?module=server&action=info">Server Info</a>
                        </div>
                    	<div class="FooterLinks" style="float:right; margin-right:32px;">
                        	<a href="?module=pages&action=content&path=Download">Downloads</a>
                            &nbsp;&nbsp;
                            <a href="?module=pages&action=content&path=guild">Guild Transfer Package</a>
                            &nbsp;&nbsp;
                            <a href="?module=pages&action=content&path=newbie">Newbie Free Package</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>

<!--<?php echo $GOTMsql; ?>-->
<!--Designed By YouHitMeWeHitYou-->


<?php if ($rs['emblem_len']): ?><img src="<?php echo $this->emblem($rs['guild_id']); ?>" width="57" height="65" /><?php endif ?>
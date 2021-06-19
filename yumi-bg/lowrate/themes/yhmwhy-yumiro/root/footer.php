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
								
								<?php
									include('myvar.php'); 
									$rsquery = $database->getAgit();
									while($rs = mysql_fetch_array($rsquery)){ ?>
										<?php if ($rs['guild_emblem_len']): ?>
											<?php $mycastlename = getCastleName2($rs['castle_id']); ?>
											<img style="margin-left:5px; margin-right:5px;" title="Guild: <?php echo htmlspecialchars(basename($rs['name'])) ?> <BR> Castle: <?php echo $mycastlename; ?>" src="<?php echo $this->emblem($rs['guild_id']) ?>" />
										<?php endif ?>
								<?php	} ?>
									
								</div>
                         	</div>
                            <div class="GOTM">
								<?php
									$rsquery = $database->GetGOTM($GOTMid);
									while($rs = mysql_fetch_array($rsquery)){ ?>
										<div class="GuildName">
											<?php echo $rs['name']; ?>
										</div>
										<div class="GOTMEmblem">
											<?php if ($rs['emblem_len']): ?>
												<img src="<?php echo $this->emblem($rs['guild_id']); ?>" align="absmiddle" style="margin-top:15px;"/>
											<?php endif ?>
										</div>
										<div class="GuildInfo">
											<span class="myfield">GM:</span> <span class="myValue">
												<?php //$myArr = str_split($rs['master']); ?>
												<?php 
													$qq = strlen($rs['master']);
													if($qq > 16) {
														$q = substr($rs['master'], 0, 13) . "...";
													}else{
														$q = $rs['master'];
													} 
												?>
												<?php echo $q; ?>
											</span><br />
											<span class="myfield">Job:</span> <span class="myValue">
												<?php if ($job=$this->jobClassText($rs['class'])): ?>
													<?php echo htmlspecialchars($job) ?>
												<?php else: ?>
													<span class="not-applicable">Unknown</span>
												<?php endif ?>
											</span><br />
											<span class="myfield">Members:</span> <span class="myValue"><?php echo $rs['connect_member']; ?></span><br />
											<span class="myfield">Agits:</span> <span class="myValue">
												<?php $rsquery2 = $database->getAgitCount($GOTMid);
												while($rs2 = mysql_fetch_array($rsquery2)){ ?>
													<?php echo $rs2['mycount']; ?>
												<?php	} ?>
											</span><br />
										</div>
								<?php	} ?>
                            </div>
                            <div class="TopPlayer">
								<div style="margin-top:145px; text-align:left;">
									<img src="<?php echo $NormalIMG; ?>" width="34" height="42" style="margin-left:57px;" />
									<img src="<?php echo $NoDonateIMG; ?>" width="34" height="42" style="margin-left:74px;" />
								</div>
								<div style="margin-top:4px; text-align:left;">
									<div class="NormalPVP">
										<?php
											$rsquery = $database->getChar($Normal);
											while($rs = mysql_fetch_array($rsquery)){ 
												$qq = strlen($rs['name']);
												if($qq > 14) {
													$q = substr($rs['name'], 0, 11) . "...";
												}else{
													$q = $rs['name'];
												} 
												echo $q . "<BR>";
												if ($job=$this->jobClassText($rs['class'])){
													echo htmlspecialchars($job);
												}else{
													echo '<span class="not-applicable">Unknown</span>';
												}
											}
										?>
									</div>
									<div class="NoDonate">
										<?php
											$rsquery = $database->getChar($NoDonate);
											while($rs = mysql_fetch_array($rsquery)){ 
												$qq = strlen($rs['name']);
												if($qq > 14) {
													$q = substr($rs['name'], 0, 11) . "...";
												}else{
													$q = $rs['name'];
												} 
												echo $q . "<BR>";
												if ($job=$this->jobClassText($rs['class'])){
													echo htmlspecialchars($job);
												}else{
													echo '<span class="not-applicable">Unknown</span>';
												}
											}
										?>
									</div>
								</div>
								<div style="margin-top:114px; text-align:left; background-color:red; clear:both;">
									<div style="width:34px; height:34px; margin-left:42px; float:left;">
										<img src="<?php echo $EmpBreakIMG; ?>" width="34" height="42"/>
									</div>
									<div style="width:100px; margin-left:50px; float:left; margin-top:2px;">
										<?php
											$rsquery = $database->getChar($EmpBreak);
											while($rs = mysql_fetch_array($rsquery)){ 
												$qq = strlen($rs['name']);
												if($qq > 14) {
													$q = substr($rs['name'], 0, 11) . "...";
												}else{
													$q = $rs['name'];
												} 
												echo $q . "<BR>";
												if ($job=$this->jobClassText($rs['class'])){
													echo htmlspecialchars($job);
												}else{
													echo '<span class="not-applicable">Unknown</span>';
												}
											}
										?>
									</div>
								</div>
							</div>
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
					<div class="copyright">
						Ragnarok Online is a property of Gravity Corporporation&copy; 2002-2010 Gravity & Lee Myoungjin Studios (Studio DTDS) All Rights Reserved.       <strong>FUELED BY:</strong> <a href="http://yhmwhy.com" target="_blank">YouHitMeWeHitYou&reg;</a>

					</div>
                </div>
        </div>
    </div>
</div>
</body>
</html>

<!--Designed By YouHitMeWeHitYou-->
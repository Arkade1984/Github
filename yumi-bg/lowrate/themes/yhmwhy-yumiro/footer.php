<?php if (!defined('FLUX_ROOT')) exit; ?>
				 </div>
            </div>
            <div class="BodyRight">
            	<div class="ServerStatus">
					<div class="LoginServer">
						<?php if (getValueXML('loginServer') == 1){
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
								}else{
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
						} ?>
					</div>
					<div class="CharServer">
						<?php if (getValueXML('charServer') == 1){
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
								}else{
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
						} ?>					<div class="MapServer">						<?php if (getValueXML('mapServer') == 1){									echo '<img src="' . $this->themePath('img/On.png') . '" />';								}else{									echo '<img src="' . $this->themePath('img/On.png') . '" />';						} ?>					</div>
					</div>
					<div class="OnlineCount"><?php echo getValueXML('playersOnline'); ?></div>
                    <div class="ServerTime"><?php echo $myServerDate; ?></div>
                </div>
                <div class="GOTM">
					<?php
                        include('myquery.php');
                        include('myvar.php');
                        $rsquery = $database->GetGOTM($GOTMid);
                        while($rs = mysql_fetch_array($rsquery)){ ?>
                        <div class="Emblem">
                            <?php if ($rs['emblem_len']): ?>
                                <img src="<?php echo $this->emblem($rs['guild_id']); ?>" width="58" height="58"/>
                            <?php endif ?>
                        </div>
                        <div class="GuildLeader">GL: <?php echo $rs['master']; ?></div>
                        <div class="GuildName"><?php echo $rs['name']; ?></div>
                    <?php	} ?>        
                </div>
                <div class="ScreenShots">
                	<div class="SSCont"><img src="<?php echo $this->themePath('img/SS.jpg'); ?>" width="176" height="129"/></div>
                </div>
                <div class="Search">
                	<div class="SearchLabel">
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" align="absmiddle" id="MobName" class="MonsterButton" onClick="SelectSearch(1);"/>
                        <img src="<?php echo $this->themePath('img/Slash.png') ?>" align="absmiddle" />
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" align="absmiddle" id="ItemName" class="ItemButton" onClick="SelectSearch(2);"/>
                    </div>
                    <div class="InpuBox">
                    	<form action="index.php" method="post" id="mySeachForm">
                            <input type="text" name="name" id="name" value="" class="SearchTextBox">
                            <input type="hidden" name="module" id="module" value="monster">
                            <input type="submit" style="display:none;" />
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
        <div class="BodyFoot">
        	<div class="FooterLinks">
            	<a href="index.php">Home</a> |  
                <a href="?module=pages&action=content&path=staff">Staff</a>  |  
                <a href="?module=pages&action=content&path=donate">Donate</a>  |  
                <a href="?module=pages&action=content&path=rules">Rules</a>  |  
                <a href="index.php?module=pages&action=content&path=serverinfo">Server Info</a>  |  
                <a href="http://yumi-ro.com/forum">Forum</a>
			</div>
            <div class="Copyright"></div>
            <div class="YHMWHY" onclick="window.open('http://yhmwhy.com')"></div>
            <div class="Yumi"></div>
        </div>
    </div>
</body>
</html>

<!--Designed By YouHitMeWeHitYou-->
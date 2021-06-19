<?php if (!defined('FLUX_ROOT')) exit; ?>
				 </div>
            </div>
            <div class="BodyRight">
            	<div class="ServerStatus">
                	<div class="MapServer">
						<?php if (getValueXML('mapServer') == 1){
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
								}else{
									echo '<img src="' . $this->themePath('img/Off.png') . '" />';
						} ?>
					</div>
					<div class="LoginServer">
						<?php if (getValueXML('loginServer') == 1){
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
								}else{
									echo '<img src="' . $this->themePath('img/Off.png') . '" />';
						} ?>
					</div>
					<div class="CharServer">
						<?php if (getValueXML('charServer') == 1){
									echo '<img src="' . $this->themePath('img/On.png') . '" />';
								}else{
									echo '<img src="' . $this->themePath('img/Off.png') . '" />';
						} ?>
					</div>
					<div class="OnlineCount"><?php echo getValueXML('playersOnline'); ?></div>
                    <div class="ServerTime"><?php echo $myServerDate; ?></div>
                </div>
                <div class="WOE">
                	<div class="WOEVanquish">
                    	<img src="<?php if($woe_iconVanquish == 'empon'){echo $this->themePath('img/On.png');} else {echo $this->themePath('img/Off.png');} ?>" />
                    </div>
                	<div class="WOEAncient">
                   		<img src="<?php if($woe_iconAncient == 'empon'){echo $this->themePath('img/On.png');} else {echo $this->themePath('img/Off.png');} ?>" />
                    </div>
                	<div class="WOEOrigins">
                    	<img src="<?php if($woe_iconOrigins == 'empon'){echo $this->themePath('img/On.png');} else {echo $this->themePath('img/Off.png');} ?>" />
                    </div>
                </div>
                <div class="ScreenShots"></div>
            </div>
        </div>
        <div class="BodyFoot">
        	<div class="FooterLinks">
            	<a href="index.php">Home</a> |  
                <a href="?module=pages&action=content&path=staff">Staff</a>  |  
                <a href="?module=pages&action=content&path=donate">Donate</a>  |  
                <a href="?module=pages&action=content&path=rules">Rules</a>  |  
                <a href="?module=server&action=info">Server Info</a>  |  
                <a href="?module=forum">Forum</a>
			</div>
            <div class="Copyright"></div>
            <div class="YHMWHY" onclick="window.open('http://yhmwhy.com')"></div>
            <div class="Yumi"></div>
        </div>
    </div>
</body>
</html>

<!--Designed By YouHitMeWeHitYou-->
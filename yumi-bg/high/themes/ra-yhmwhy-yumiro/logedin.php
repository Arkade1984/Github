<!--LOGIN -->
	<div class="AccountLogedin">
		<div class="myUsername">
			<div style="width:100px; margin-left:90px; margin-top:120px; overflow:auto;">
				<a href="<?php echo $this->url('account', 'view') ?>"><?php echo $session->account->userid ?></a>
			</div>
			<div style="width:100px; margin-left:85px; margin-top:50px; overflow:auto; color:#8f6952; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px;">
				<?php echo substr(htmlspecialchars($session->serverName), 8); ?>
				
			</div>			
			
    	</div>
		<div style=" width:76px; margin-left:75px; overflow:auto; margin-top:40px;">
		<img src="<?php echo $this->themePath('img/trans.png') ?>" class="LogoutButton" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" onclick="location.href='?module=account&action=logout'"/>
		</div>
	</div>
<!--END LOGIN -->



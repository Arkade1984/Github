<!--LOGIN -->
<form action="<?php echo $this->url('account', 'login', array('return_url' => '?module=main')) ?>" method="post"  name="frmlogged">
	<div class="AccountLogin">
		<input type="text" name="username" id="login_username" value="[username]" onfocus="focal();" onblur="focal2();">
		<input type="password" name="password" id="login_password" value="[password]" onfocus="focalpass();" onblur="focalpass2();"/>
		<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
		<div class="loginlinks">
			<a href="?module=account&action=resetpass">Forgot password</a>&nbsp;&nbsp;&nbsp;
			<img src="<?php echo $this->themePath('img/trans.png') ?>" class="LoginButton" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle" onclick="document.frmlogged.submit();"/>
		</div>
	</div>

             
</form>                          
                          
                          
<!--END LOGIN -->
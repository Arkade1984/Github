	<form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post"  name="frmlogged">
	<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
		<div class="LogIn" id="LogIn">
			<div style="float:left; overflow:auto;">
			<div class="DivUsername"><input type="text" name="username" id="login_username" value="[username]" onfocus="focal();" onblur="focal2();" class="Username"></div>
			<div class="DivPassword"><input type="password" name="password" id="login_password" value="[password]" onfocus="focalpass();" onblur="focalpass2();" class="Password"/></div>
			</div>
			<div class="DivLoginButton"><img src="<?php echo $this->themePath('img/trans.png') ?>" align="middle" class="myLoginButton" onMouseOver="this.style.backgroundPosition='bottom 

center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" onclick="document.frmlogged.submit();" />
			</div>
			<a href="" onfocus="this.blur();">
				<img src="<?php echo $this->themePath('img/trans.png') ?>" align="middle" class="myForgotPass" onMouseOver="this.style.backgroundPosition='bottom center';" 

onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
			</a>
			
			<a href="" onfocus="this.blur();">
				<img src="<?php echo $this->themePath('img/trans.png') ?>" align="middle" class="myRegister" onMouseOver="this.style.backgroundPosition='bottom center';" 

onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
			</a>
			
		</div>
		<div class="myLogin" id="myLogin" onClick="gologin();" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"></div>
		<input type="submit" name="Submit" value="Submit" style="display:none;" />
	</form>                          
</div>
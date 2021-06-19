<script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>
<div class="loginback">
<?php if (!$session->isLoggedIn()): ?>  
    <form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post">                                                                                                            
       
	<input onfocus="if(this.value == 'username'){this.value = '';}" type="text" name="username" id="login_username" value="[username]" class="txtBox" style="margin: 82px 58px 30px 0">

		<input onfocus="if(this.value == 'password'){this.value = '';}" type="password" name="password" id="login_password" value="[password]" class="txtBox" style="margin: 0 58px 25px 0" >

        
<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>"> 
        <div class="login-part">
  
 <input type="submit" class="loginBtn" value="" style="margin: 13px 135px 0 0" /><br />
            <a href="<?php echo $this->url('account','resetpass')?>" id="forgotPass" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" ></a>
		<a href="?module=account&action=create" id="newAccount" id="newAccount" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" ></a>

        </div> 
    </form>
    <?php else:?>
	<a href="<?php echo $this->url('cpanel')?>"><img src="<?php echo $this->themePath('img/myaccount.png')?>" alt="Register"  style="margin: 70px 6 31px 0"/></a>

    <a href="<?php echo $this->url('account','logout')?>"><img src="<?php echo $this->themePath('img/logout.png')?>" alt="Register"  style="margin: 0 6 31px 0"/></a>

	
    <?php endif?>
</div>
<div>

<div class="QuickLinksleft">
	<a href="?module=woe" onclick="this.blur();">
	<img src="<?php echo $this->themePath('img/trans.png') ?>" align="middle" class="woeleft" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" />
	</a>
	
	<a href="?module=guild" onclick="this.blur();">
	<img src="<?php echo $this->themePath('img/trans.png') ?>" align="middle" class="guild" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" /></a>
	
	<a href="?module=ranking&action=character" onclick="this.blur();">
	<img src="<?php echo $this->themePath('img/trans.png') ?>" align="middle" class="rank" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" /></a>

	

</div>

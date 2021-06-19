<!--LOGIN -->
<div id="ShowWelcome">
	<div class="myWelcome"></div>
	<div class="LogedIn"><a href="<?php echo $this->url('account', 'view') ?>"><?php echo $session->account->userid ?></a></div>
	<div class="myLogout" onClick="location.href='?module=account&action=logout';"></div>
</div>
<!--END LOGIN -->



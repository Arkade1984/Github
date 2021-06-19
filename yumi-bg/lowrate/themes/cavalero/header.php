<?php if (!defined('FLUX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
		<link type="text/css" rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo $this->themePath('css/style.css') ?>" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $this->themePath('rss/mid3rd.php') ?>" />
		<script type="text/javascript">
			var currenttime = '<?php print date("F d, Y H:i:s",time())?>'
		</script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.7.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/scripts.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/fluxcp.js') ?>"></script>
		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
		<script type="text/javascript">
			 var RecaptchaOptions = {
			    theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
			 };
		</script>
		<?php endif ?>
		<?php if (Flux::config('EnableReCaptcha')): ?>
		<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php endif ?>
		<?php include('..'.$this->themePath("serverstatus.php")); ?>
		<?php include('..'.$this->themePath("woetimes.php")); ?>
		<?php // include('..'.$this->themePath("ranking.php")); ?>
		<?php include('..'.$this->themePath("voteforpoints.php")); ?>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<img src="<?php echo ($ss[0]=='up' ? $this->themePath('img/on.png') :  $this->themePath('img/off.png')) ?>" id="login-server-status" />
				<img src="<?php echo ($ss[1]=='up' ? $this->themePath('img/on.png') :  $this->themePath('img/off.png')) ?>" id="char-server-status" />
				<img src="<?php echo ($ss[2]=='up' ? $this->themePath('img/on.png') :  $this->themePath('img/off.png')) ?>" id="map-server-status" />
				<img src="<?php echo $this->themePath('img/'.($woeIsOn ? "online" : "offline").'.png') ?>" id="woe-status" />
				<span id="server-time">asdas</span>
			</div>
			<?php if($session->isLoggedIn()): ?>
			<div id="loggedin">
				<span id="loggedin-user"><?php echo $session->account->userid ?></span>
				<span id="loggedin-balance"><?php echo number_format((int)$session->account->balance) ?></span>
				<span id="loggedin-cashpoints"><?php echo ($value==NULL?0:$value); ?></span>
				<a href="?module=account&action=logout" id="loggedin-logout"></a>
			</div>
			<?php else: ?>
			<div id="login">
				<form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post" class="generic-form">
					<input type="hidden" name="server" value="Cavalero RO">
					<input id="username" class="input-nohover" type="text" name="username" />
					<input id="password" class="input-nohover" type="password" name="password" />
					<input type="submit" id="login-link" name="login" value="" />
				</form>
				<a id="forgot-password-link" href="?module=account&action=resetpass"></a>
			</div>
			<?php endif ?>
			<div id="upper-content">
				<a id="home-link" href="?module=main"></a>
				<a id="forum-link" href="../forumhigh"></a>
				<a id="download-link" href="?module=download"></a>
				<a id="v4p-link" href="?module=vote"></a>
				<a id="rms-link" href="http://ratemyserver.net/index.php?page=detailedlistserver&serid=13652&url_sname=CavaleRO+High+Rate"></a>"></a>
				<a id="donate-link" href="?module=donate"></a>
				<div id="textarea1-container">
					<div id="textarea1">
						<?php if($session->isLoggedIn()): ?>
						<div id="loggedin-nav">	
							<a href="?module=account&action=changepass">Change Password</a> | 
							<a href="?module=account&action=changemail">Change Email</a> | 
							<a href="?module=account&action=transfer">Transfer</a>
						</div><br /><br />
						<?php endif ?>
						<strong>Cavalero High Is Officially Launched!</strong><br /><br />
						<!-- Messages -->
						Officially launched last December 11,2011 . 
With official rates 10000x10000x5000
Max base level and job 255/120
Normal card 50%
MVP Card 3%
Balance and Stable Server
Special Features
WOE 1 and 2
Automated Events
and more....
						<?php if ($message=$session->getMessage()): ?>
							<p class="message"><?php echo htmlspecialchars($message) ?></p>
						<?php endif ?>
					</div>
					<a id="register-link" href="?module=account&action=create"></a>
					<a id="full-client-link" href="http://cavalero.us/high/?module=download"></a>
					<a id="small-client-link" href="http://cavalero.us/high/?module=download"></a>
				</div>
				<div id="of-the-month-sidebar">
					<div id="player-of-the-month-stats">
						<br />
						<br />
						
					</div>
					<span id="player-of-the-month">-</span>
					<span id="guild-of-the-month"><?php echo ($guilds == NULL ? "-" : $guilds[0]['name']) ?></span>
					<div id="guild-of-the-month-stats">
						
					</div>
				</div>
			</div>
			<div id="lower-content">
				<a id="informations-link" href="?module=server&action=info"></a>
				<a id="staffinfo-link" href="?module=server&action=staff"></a>
				<a id="screenshots-link" href="?module=server&action=screenshots"></a>
				
				<?php if (in_array($params->get('module'), array('main'))): ?>
				
				<div id="content-page">
					<div>
				<?php else: ?>
				<div id="content-page2">
					<div class="headline" id="headline-<?php echo $params->get('module').'-'.$params->get('action') ?>"></div>
					<div id="content">
				<?php endif ?>
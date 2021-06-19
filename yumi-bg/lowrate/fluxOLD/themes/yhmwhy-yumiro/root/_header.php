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

		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />

		<?php if (Flux::config('EnableReCaptcha')): ?>
			<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php endif ?>
		<link href="<?php echo $this->themePath('css/main.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />

		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/main.js') ?>"></script>

		<script type="text/javascript">
			/*$(document).ready(function(){
				$('.menuitem a').hover(
					function(){
						$(this).fadeTo(200, 0.85);
						$(this).css('cursor', 'pointer');
					},
					function(){
						$(this).fadeTo(150, 1.00);
						$(this).css('cursor', 'normal');
					}
				);
				// In: js/flux.datefields.js
				processDateFields();
			});*/

			function reload(){
				window.location.href = '<?php echo $this->url ?>';
			}
		</script>

		<script type="text/javascript">
			function updatePreferredServer(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_server_form.preferred_server.value = preferred;
				document.preferred_server_form.submit();
			}

			// Preload spinner image.
			var spinner = new Image();
			spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';

			function refreshSecurityCode(imgSelector){
				$(imgSelector).attr('src', spinner.src);
				// Load image, spinner will be active until loading is complete.
				var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
				var image = new Image();
				image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
				$(imgSelector).attr('src', image.src);
			}
			function toggleSearchForm()
			{
				//$('.search-form').toggle();
				$('.search-form').slideToggle('fast');
			}
		</script>

		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
		<script type="text/javascript">
			 var RecaptchaOptions = {
			    theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
			 };

		</script>

		<?php endif ?>
        <!-- Milkbox JS -->
        <script src="/main/themes/yhmwhy-streamside/milkbox-3.0.2/js/mootools-core.js"></script>
        <script src="/main/themes/yhmwhy-streamside/milkbox-3.0.2/js/mootools-more.js"></script> 
        <script src="/main/themes/yhmwhy-streamside/milkbox-3.0.2/js/milkbox-yc.js"></script>
        
        
        <!--Milkbox CSS-->
        <link rel="stylesheet" href="/main/themes/yhmwhy-streamside/milkbox-3.0.2/css/default.css" />
        <link rel="stylesheet" href="/main/themes/yhmwhy-streamside/milkbox-3.0.2/css/main.css" />
        <link rel="stylesheet" href="/main/themes/yhmwhy-streamside/milkbox-3.0.2/css/milkbox/milkbox.css" />
	</head>

	<body>
		<?php 
			include('myfunction.php');
			//include('server/status.php'); 
			//include('phpScript/data.php'); 
			$myServerDate = date("H:i");   
		?>
<div class="MyMain">
	<div class="StatusBack">
    	<div class="HeaderStatusBack">
        	<div class="ServerStatus">
				<?php if (getValueXML('loginServer') == 1){
                    echo '<img src="' . $this->themePath('img/Status-On.png') . '"/>';
                }else{
                    echo '<img src="' . $this->themePath('img/Status-On.png') . '"/>';
                }
                if (getValueXML('charServer') == 1){
                    echo '<img src="' . $this->themePath('img/Status-On.png') . '" style="margin-left:25px;"/>';
                }else{
                    echo '<img src="' . $this->themePath('img/Status-On.png') . '" style="margin-left:25px;"/>';
                }
                if (getValueXML('mapServer') == 1){
                    echo '<img src="' . $this->themePath('img/Status-On.png') . '" style="margin-left:35px;"/>';
                }else{
                    echo '<img src="' . $this->themePath('img/Status-On.png') . '" style="margin-left:35px;"/>';
                }
                ?>            
            	
			</div>
        	<div class="OnlinePlayers"><?php echo getValueXML('playersOnline'); ?></div>
        	<div class="ServerTime"><?php echo $myServerDate ?></div>
        	<div class="LoginArea">
            	<?php 
					if ($session->isLoggedIn()){
							include('logedin.php');
					}else{
							include('login.php');
					}
                ?>
            	
            </div>
        </div>
    </div>
    <div class="LowerBackground">
        <div class="UpperBackground">
        		<div class="MyMainContent">
                	<div class="myHeader">
                    	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="991" height="531">
				<param name="movie" value="main.swf" />
				<param name="quality" value="high" />
				<param name="wmode" value="transparent" />
				<embed src="main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="991" height="531" wmode = "transparent"></embed></object>
                    </div>
                    <div class="myBody">
                    	<div class="LeftPannel">
                        	<div class="QuickLinksTop"></div>
                        	<div class="QuickLinksMid">
                            	<a href="?module=account&action=create">
                            	<img src="<?php echo $this->themePath('img/trans.png') ?>" class="RegisterNow" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                <a href="?module=vote">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="VoteForPoints" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                <a href="?module=pages&action=content&path=guide">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="WriteReview" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                <a href="?module=pages&action=content&path=staff">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="GameStaffs" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                <a href="?module=ticket&action=support">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="Support" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                 <a href="?module=pages&action=content&path=screenshot">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="ScreenShots" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                 <a href="?module=pages&action=content&path=video">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="Videos" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                                 <a href="?module=pages&action=content&path=guide">
                                <img src="<?php echo $this->themePath('img/trans.png') ?>" class="GameGuides" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';"/>
                                </a>
                            </div>
                        	<div class="QuickLinksBot"></div>
                            <div class="FB">
                            	<iframe class="myFacebook" name="fbfanIFrame_0" allowtransparency="true" src="http://www.connect.facebook.com/widgets/fan.php?id=125624600814851&connections=8&stream=0&logobar=0" class="FB_SERVER_IFRAME" frameborder="0" scrolling="no" height="250" width="235" align="middle"></iframe>
                            </div>
                            <div class="TODD"></div>
                        </div>
                    	<div class="MidPannel">
                        	<div class="MidContentTop"></div>
                            <div class="MidContentMid">
                            	<div class="MainContainer">
                                	<?php include('account_menu.php'); ?>
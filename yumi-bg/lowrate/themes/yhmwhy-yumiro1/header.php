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

		<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<![endif]-->	
		<!--[if lt IE 7]>
		<script src="<?php echo $this->themePath('js/ie7.js') ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitpngfix.js') ?>"></script>
		<![endif]-->

		<!--<script type="text/javascript" src="<?php //echo $this->themePath('js/jquery-1.2.6.min.js') ?>"></script>-->
		<!--<script type="text/javascript" src="<?php //echo $this->themePath('js/jquery.dropshadow.js') ?>"></script>-->
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>


		<script type="text/javascript" src="<?php echo $this->themePath('js/jQuery.js') ?>"></script>

		<!-- LightBox JS -->
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.lightbox-0.5.js') ?>"></script>
        <!-- LightBox CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->themePath('css/jquery.lightbox-0.5.css') ?>" media="screen" />
		<script type="text/javascript">
        $(function() {
            $('#gallery a').lightBox();
        });
		
		
		$(document).ready(function(){
			$("#login_password").keyup(function(event) {
			console.log (event.which);
			  if ( event.which == 13 ) {
				//event.preventDefault();
				document.frmlogged.submit();
			   }
			});
		});
        </script>

		<script type="text/javascript" src="<?php echo $this->themePath('js/sliderman.1.3.7.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/main.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/motiongallery.js') ?>"></script>

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
	</head>

	<body>
		<?php 
			include('myfunction.php');
			//include('phpScript/data.php');
			//include('myquery.php'); 
			include('/nfs/c10/h03/mnt/151079/domains/yumi-ro.net/html/woe_time.php'); 
			$myServerDate = date("H:i");   
		?>
        
        <!--FOR POPUP START-->
            <div id="block_div" onclick="close_message();"></div>
            <div id="popupmess"></div>
        <!--FOR POPUP END-->
        
        
<div class="FlashContainer">
    	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="990" height="340">
				<param name="movie" value="main.swf" />
				<param name="quality" value="high" />
				<param name="wmode" value="transparent" />
				<embed src="main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="990" height="340" wmode = "transparent"></embed></object>
    </div>
    <div class="BodyContainer">
    	<div class="BodyCont">
            <div class="BodyLeft">
            	
				<?php 
					if ($session->isLoggedIn()){
							include('logedin.php');
					}else{
							include('login.php');
					}
                ?>
				
                <div class="QuickLinks">
                	<div class="QuickLinksCont">
						<a href="?module=account&action=create">
	                    	<img src="<?php echo $this->themePath('img/trans.png') ?>" class="Register" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle"/>
						</a>
						<a href="?module=pages&action=content&path=download">
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" class="Downloads" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle"/>
						</a>
						<a href="?module=vote">
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" class="Vote" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle"/>
						</a>
						<a href="?module=earank&action=bg">
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" class="Ranking" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle"/>
						</a>
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" class="WOECastle" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle"/>
						<a href="http://www.facebook.com/yumi.game" target="_blank">
                        <img src="<?php echo $this->themePath('img/trans.png') ?>" class="Facebook" onMouseOver="this.style.backgroundPosition='bottom center';" onMouseOut="javascript:this.style.backgroundPosition='top center';" align="absmiddle"/>
						</a>
                    </div>
                </div>
            </div>
            <div class="BodyMid">
            	<div class="BodyMidCont">
					<?php include('account_menu.php'); ?>
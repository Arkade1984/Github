<?php if (!defined('FLUX_ROOT')) exit; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
		<link rel="stylesheet" href="<?php echo $this->themePath('css/main.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
<!--[if opera]>
<link rel="stylesheet" href="<?php echo $this->themePath('css/main1.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
<![endif]-->
		<link rel="stylesheet" href="<?php echo $this->themePath('img/fullsize/fullsize.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
        <script type="text/javascript" src="<?php echo $this->themePath('js/main.js') ?>"></script>

		<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<![endif]-->	
		<!--[if lt IE 7]>
		<script src="<?php echo $this->themePath('js/ie7.js') ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitpngfix.js') ?>"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.2.6.min.js') ?>"></script>
		<!--<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.dropshadow.js') ?>"></script>-->
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>


		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.fullsize.pack.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.scrollTo-1.4.2-min.js') ?>"></script>
		<script type="text/javascript">
			$(function(){
				$("img").fullsize();
			});
		</script>
		<script type="text/javascript">
		<!--
		jQuery(function( $ ){
				//borrowed from jQuery easing plugin
				//http://gsgd.co.uk/sandbox/jquery.easing.php
				$.scrollTo.defaults.axis = 'xy'; 
				$.easing.elasout = function(x, t, b, c, d) {
					var s=1.70158;var p=0;var a=c;
					if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
					if (a < Math.abs(c)) { a=c; var s=p/4; }
					else var s = p/(2*Math.PI) * Math.asin (c/a);
					return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
				};
				});
		// -->
		</script>



		<script type="text/javascript">
			$(document).ready(function(){
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
			});
			
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
		
		
		<script type="text/javascript" charset="utf-8">
			var headline_count;
			var headline_interval;
			var old_headline = 0;
			var current_headline = 0;

			$(document).ready(function(){
				//alert('asa');
			  headline_count = $("div.headline").size();
			  $("div.headline:eq("+current_headline+")").css('top','5px');
			  
			  headline_interval = setInterval(headline_rotate,2000); //time in milliseconds
			  $('#scrollup').hover(function() {
				clearInterval(headline_interval);
			  }, function() {
				headline_interval = setInterval(headline_rotate,5000); //time in milliseconds
				headline_rotate();
			  });
			});

			function headline_rotate() {
			  current_headline = (old_headline + 1) % headline_count; //remainder will always equal old_headline until it reaches headline_count - at which point it becomes zero. clock arithmetic
			  $("div.headline:eq(" + old_headline + ")").animate({top: -205},"slow", function() {
				$(this).css('top','210px');
				});
			  $("div.headline:eq(" + current_headline + ")").show().animate({top: 5},"slow");  
			  old_headline = current_headline;
			}
		</script>

		
	</head>
	<body onLoad="show5()">
	<?php
		
		include('myheader.php'); 
	?>
		<div class="MainBody">
			<div class="TopBody">
				<div class="BotBody">
					<div class="BodyStyle">
						<div class="HeadBack">
							<div class="BodyCenter">
								<div class="myHeader"><?php include('iheader.php'); ?></div>
								<div class="myBody">
									<div class="HeaderBody">
									</div>


									<div class="MidBody">
									<div class="maintop"></div>
									<div class="mainmid">
										<div class="BodyLeftPanel">
											<?php 
												include('quick_links.php'); 
											 ?>
											 
											 
											<?php 
												include('useful_links.php'); 
											 ?>
										</div>

									<div class="BodyMidPanel">
																			
	 										
<div class="BodyMidHeader">

																							
											</div>
											<div class="myMenu">
												<?php include('sub_menu.php');  ?>
											</div>
											<div class="BodyContent">
											<div class="Content">
										
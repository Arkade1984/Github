<?php if (!defined('FLUX_ROOT')) exit; ?>
<div id="slider_container_2">
	<div id="SliderName_2" class="SliderName_2">
		<img src="<?php echo $this->themePath('img/slideshow/Image1.jpg') ?>" width="403" height="124" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
		<map name="img1map">
			<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
			<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
		</map>
		<div class="SliderName_2Description">Image 1</div>
		<img src="<?php echo $this->themePath('img/slideshow/Image2.jpg') ?>" width="403" height="124" alt="Demo2 second" title="Demo2 second" />
		<div class="SliderName_2Description">Image 2</div>
		<img src="<?php echo $this->themePath('img/slideshow/Image3.jpg') ?>" width="403" height="124" alt="Demo2 third" title="Demo2 third" />
		<div class="SliderName_2Description">Image 3</div>
		<img src="<?php echo $this->themePath('img/slideshow/Image4.jpg') ?>" width="403" height="124" alt="Demo2 fourth" title="Demo2 fourth" />
		<div class="SliderName_2Description">Image 4</div>
	</div>
	<div class="c"></div>
	<div id="SliderNameNavigation_2"></div>
	<div class="c"></div>

	<script type="text/javascript">
		effectsDemo2 = 'rain,stairs,fade';
		var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 403, height: 124, effects: effectsDemo2,
			display: {
				autoplay: 3000,
				loading: {background: '#000000', opacity: 0.5, image: 'img/slideshow/loading.gif'},
				buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
				description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
				navigation: {container: 'SliderNameNavigation_2', label: '<img src="<?php echo $this->themePath('img/slideshow/clear.gif') ?>" />'}
			}
		});
	</script>

	<div class="c"></div>
</div>


    <h2 style="margin-left:10px;">Welcome to Streamside Ragnarok Online</h2>
    <p style=" padding-left:10px; padding-right:10px;">
		Streamside Ragnarok Online is a Private Ragnarok Online Server running on the latest eAthena emulator. We feature rates of 10,000x/10,000x/50% which enable for a great experience. We also feature many custom items, quest, NPCs, StoryLine Quests, Daily Events and we boast a very friendly staff and community. WoE & PvP active, Kind & reachable GM's Balanced Job Classes & Items Lots of custom items, stable economy You won't easily get bored! What are you waiting for, Join us now! 
    </p>
    
    
    <div class="YouTube">
    	<iframe width="391" height="250" src="http://www.youtube.com/embed/tARM_igye20" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="NewsTop"></div>
    <div class="NewsMid">
		<?php $q = GetNewestUpdates(5);
			while ($row = mysql_fetch_assoc($q)) { ?>
			<div class="myNews">
				<div class="NewsTitle">
					<?php echo "<a href='http://www.streamside-ro.net/forum/index.php?showtopic=" . $row['tid'] . "' target='_blank'>" . $row['title'] . "</a>"; ?>
				</div>
				<div class="NewsDate"><?php echo date("M-d-Y", $row['start_date']); ?></div>
				<div class="NewsAuthor">Posted by: <strong><?php echo $row['starter_name']; ?></strong></div>
			</div>
		<?php } ?>
    </div>
    <div class="NewsBot"></div>
    
    <div class="ScrollButton">
		<img src="<?php echo $this->themePath('img/trans.png') ?>" id="ItemMall" onclick="CallMall();"/>
		<img src="<?php echo $this->themePath('img/trans.png') ?>" id="FeaturedItem" onclick="CallFeat();"/>
    </div>
    <div class="ScrollItem">
		<div id="motioncontainer">
			<img src="<?php echo $this->themePath('img/scrollleft.png') ?>" border="0" alt="" class="scrollleftimg" style="z-index:5">
			<div id="motiongallery" style="position:absolute;left:0;;top:0;white-space: nowrap;">
				<nobr id="trueContainer">
					<?php include('MallFeat.php'); ?>
				</nobr>
			</div>
			<img src="<?php echo $this->themePath('img/scrollright.png') ?>" border="0" alt="" class="scrollrightimg" style="z-index:0">
		</div>
	</div>
	
<script>
	CallMall();
</script>

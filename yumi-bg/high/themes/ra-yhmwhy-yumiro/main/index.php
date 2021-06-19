<?php if (!defined('FLUX_ROOT')) exit; ?>
    <div id="slider_container_2">
        <div id="SliderName_2" class="SliderName_2">
            <img src="<?php echo $this->themePath('img/slideshow/Image1.png') ?>" width="474" height="117" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
            <map name="img1map">
                <area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
                <area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
            </map>
            <div class="SliderName_2Description">Image 1</div>
            <img src="<?php echo $this->themePath('img/slideshow/Image2.png') ?>" width="474" height="117" alt="Demo2 second" title="Demo2 second" />
            <div class="SliderName_2Description">Image 2</div>
            <img src="<?php echo $this->themePath('img/slideshow/Image3.png') ?>" width="474" height="117" alt="Demo2 third" title="Demo2 third" />
            <div class="SliderName_2Description">Image 3</div>
            <img src="<?php echo $this->themePath('img/slideshow/Image4.png') ?>" width="474" height="117" alt="Demo2 fourth" title="Demo2 fourth" />
            <div class="SliderName_2Description">Image 4</div>
        </div>
        <div class="c"></div>
        <div id="SliderNameNavigation_2"></div>
        <div class="c"></div>
    
        <script type="text/javascript">
            effectsDemo2 = 'rain,stairs,fade';
            var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 474, height: 117, effects: effectsDemo2,
                display: {
                    autoplay: 3000,
                    loading: {background: '#000000', opacity: 0.5, image: 'img/slideshow/loading.gif'},
                    buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
                    //description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
                    navigation: {container: 'SliderNameNavigation_2', label: '<img src="<?php echo $this->themePath('img/slideshow/clear.gif') ?>" />'}
                }
            });
        </script>
    
        <div class="c"></div>
    </div>
<div class="Welcome">

</div>


<div class="Donations">
	<div id="motioncontainer">
		<img src="<?php echo $this->themePath('img/scrollleft.png') ?>" border="0" alt="" class="scrollleftimg" style="z-index:5">
		<div id="motiongallery" style="position:absolute;left:0;;top:0;white-space: nowrap;">
			<nobr id="trueContainer">
				<img src="<?php echo $this->themePath('img/ItemMall/Cowring_Bag.bmp') ?>" title="Cow Bag<br>$3">
				<img src="<?php echo $this->themePath('img/ItemMall/Cyan_Vesper_Mask.bmp') ?>" title="Cyan Vesper<br>$3">

			</nobr>
		</div>
		<img src="<?php echo $this->themePath('img/scrollright.png') ?>" border="0" alt="" class="scrollrightimg" style="z-index:0">
	</div>
</div>


<div class="Video">
	<div style="margin-left:64px; margin-top:39px; width:337px; height:185px;">
	<<object width="337" height="185"><param name="movie" value="http://www.youtube.com/v/Dcgr-QiBC68?version=3&amp;hl=en_US&amp;rel=0k&autoplay=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Dcgr-QiBC68?version=3&amp;hl=en_US&amp;rel=0&autoplay=1" type="application/x-shockwave-flash" width="337" height="185" allowscriptaccess="always" allowfullscreen="true"></embed></object>
	</div>
</div>
<div class="NewsAndUpdates">
	<div class="News">
		<?php $q = GetNewestUpdates(7);
            while ($row = mysql_fetch_assoc($q)) { ?>
            <div class="myNews">
                <div class="NewsTitle">
                    <?php echo "<a href='http://yumi-ro.com/forum/index.php?showtopic=" . $row['tid'] . "' target='_blank'>" . $row['title'] . "</a>"; ?>
                </div>
                <div class="NewsDate"><?php echo date("M-d-Y", $row['start_date']); ?></div>
                <div class="NewsAuthor">Posted by: <strong><?php echo $row['starter_name']; ?></strong></div>
            </div>
        <?php } ?>

	</div>
</div>
<br/>
<br/>
<div class="Ads"><a href="http://www.celebration.org/new/" target="_blank"><img src="http://yumi-ro.com/cp/flux/themes/yhmwhy-yumiro/img/Ads.png" border="0" alt=" photo LowRate-Yumi_zpsaea053fc.gif"/></a></div>
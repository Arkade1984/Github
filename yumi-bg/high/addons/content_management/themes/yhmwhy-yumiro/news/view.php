<?php if (!defined('FLUX_ROOT')) exit;?>           
<h2>news updates</h2>
<div id="news">
    <?php foreach($news as $nrow):?>
    <div class="news_inner"> 
        <h3><?php echo htmlspecialchars($nrow->news_title)?></h3>
        <div class="ndetails"><b><?php echo $nrow->news_author?></b> - <?php echo date('M d, Y',strtotime($nrow->news_dateposted))?></i></p></div>
        <div class="newsright"><?php echo $nrow->news_body?></div>
    </div>
    <?php endforeach;?>
</div> 

<div class="pagination">
    <div id="pager"></div>
</div>
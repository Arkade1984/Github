<?php if (!defined('FLUX_ROOT')) exit; ?>

<p>Please vote daily to help this server grow! Current Cash Point value <strong><?php echo ($v4pBalance==NULL?0:$v4pBalance); ?></strong></p>
<ul class="votelinks">
<?php $count = 1; ?>
<?php foreach($links as $link): ?>
	<li><a href="?module=account&action=voteforpoints&out=<?php echo $count ?>"><?php echo $link[0] ?></a></li>
<?php $count++; ?>
<?php endforeach; ?>
</ul>

<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Voting Banners</h2>
<?php if ($banners): ?>
<table class="horizontal-table">
<tr>
	<th>#</th>
	<th>Vote Interval</th>
	<th>Reward Amount</th>
	<th>Banner Image and URL</th>
	<th></th>
	<th></th>
</tr>
<?php for ($i = 0; $i < $count; ++$i): ?>
<tr>
	<td style="width:30px;text-align:center"><?php echo $i+1 ?></td>
	<td style="width:90px;text-align:center">Every <?php echo $banners[$i]->hours ?> Hour(s)</td>
	<td style="width:30px;text-align:center"><?php echo $banners[$i]->amount ?></td>
	<td style="overflow-y:auto">
		<a href="<?php echo htmlspecialchars($banners[$i]->vote_url) ?>" target="_blank">
			<img src="<?php echo htmlspecialchars($banners[$i]->image_url) ?>" />
		</a>
	</td>
	<td style="width:10px;text-align:center">
		<a href="<?php echo $this->url('banner', 'delete', array('id' => $banners[$i]->banner_id)) ?>"
		onclick="return confirm('Are you sure you want to delete?');">
			<img src="~x/img/voting_delete.png" alt=""/>
		</a>
	</td>
	<td style="width:10px;text-align:center">
		<a href="<?php echo $this->url('banner', 'edit', array('id' => $banners[$i]->banner_id)) ?>">
			<img src="~x/img/voting_edit.png" alt=""/>
		</a>
	</td>
</tr>
<?php endfor ?>
</table>
<?php else: ?>
<p>
	No voting banners found. <a href="javascript:history.go(-1)">Go back.</a>
</p>
<?php endif ?>
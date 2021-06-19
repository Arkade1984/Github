<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Homunculus Ranking</h2>
<table class="eAModRanking">
	<tr>
		<th align="left">Position</th>
		<th>&nbsp;</th>
		<th align="left">Owner</th>
		<th align="left">Name</th>
		<th align="center">Class</th>
		<th align="center">Level</th>
	</tr>
	<?php $i = 0; foreach( $result as $hom ): $i++ ?>
	<tr>
		<td align="left"><?php echo $i; ?></td>
		<td>&nbsp;</td>
		<td align="left"><?php echo htmlspecialchars($hom->CName); ?></td>
		<td align="left"><b><?php echo htmlspecialchars($hom->name); ?></b></td>
		<td align="left">
			<img src="<?php echo $this->themePath('img/eamod/mob/' . $hom->class . '.gif') ?>" alt="" >
		</td>
		<td align="right"><?php echo $hom->level; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
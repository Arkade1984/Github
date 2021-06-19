<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Castles</h2>

<?php if ($castle): ?>
	<table class="yhmwhy-table" cellspacing="3" cellpadding="2" width="100%" style="border:1px solid #adad66;">
		<tr>
			<th>Rank</th>
			<th>Emblem</th>
			<th>Guild Name</th>
			<th>Agit Name</th>
			<th>Economy</th>
			<th>Times Defend</th>
		</tr>
		<?php $ctr=1; $ctr2 = 0;
			foreach ($castle as $castle):
			if($ctr == 1){$myStyle = 'myStyle1'; $ctr=0;} else{$myStyle = 'myStyle2'; $ctr=1;}
			$ctr2 = $ctr2 + 1;
			$castlename = getCastleName($castle->castle_id);
			?>
			<tr>
				<td><?php echo $ctr2; ?></td>
				<td><?php if ($castle->guild_emblem_len): ?><img src="<?php echo $this->emblem($castle->guild_id) ?>" /><?php endif ?></td>
				<td style="text-align:left;"><?php echo htmlspecialchars(basename($castle->name)) ?></td>
				<td style="text-align:left;"><?php echo $castlename; ?></td>
				<td align="right"><?php echo htmlspecialchars(basename($castle->economy)) ?></td>
				<td><?php echo htmlspecialchars(basename($castle->defense)) ?></td>
			</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<span class="myText">No Castle agit has been occupied. <a href="javascript:history.go(-1)">Go back</a>.</span>
<?php endif ?>

<?php
	function getCastleName($myID){
		if($myID == 4){ $qValue = "Rothenburg";
		} else if($myID == 6){ $qValue = "Eeyolbriggar";
		} else if($myID == 13){ $qValue = "Sacred Altar";
		} else if($myID == 15){ $qValue = "Kriemhild";
		} else if($myID == 16){ $qValue = "Swanhild";
		} else if($myID == 17){ $qValue = "Fadgridh";
		} else if($myID == 18){ $qValue = "Skoegul";
		} else if($myID == 19){ $qValue = "Gondul";
		} else if($myID == 31){ $qValue = "Horn";
		} else if($myID == 33){ $qValue = "33";
		}else{
			$qValue = "1";
		}
		return $qValue;
	}
 ?>
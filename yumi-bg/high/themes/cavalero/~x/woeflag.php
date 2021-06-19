<link rel="stylesheet" href="~x/css/woeflag.css" type="text/css" media="screen" title="" charset="utf-8" />

<!--------------------------------------------------
 _   __  __           _                   	_
|    \ \/ /__ _ _ __ | |_  __ _ _ __ __ _ 	 |
|     \  // _` | '_ \| __|/ _` | '__/ _` |	 |
|     /  \ (_| | | | | |_| (_| | | | (_| |	 |
|_   /_/\_\__,_|_| |_|\__|\__,_|_|  \__,_|	_|
http://x-services.info
----------------------------------------------------->

<?php

$castleNames = Flux::config('CastleNames')->toArray();
$woeFlags1 = Flux::config('WoeFlags1')->toArray();
$woeFlags2 = Flux::config('WoeFlags2')->toArray();

$sql  = "SELECT castles.castle_id, castles.guild_id, guild.name AS guild_name, guild.emblem_len FROM {$server->charMapDatabase}.guild_castle AS castles ";
$sql .= "LEFT JOIN guild ON guild.guild_id = castles.guild_id ORDER BY castles.castle_id ASC";
$sth  = $server->connection->getStatement($sql);
$sth->execute();

$castles = $sth->fetchAll();
?>

<?php if ($castles): ?>
<table cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="center" class="title"><img src="~x/img/woeflag/title_1.png" alt=" "/></td>
		<td align="center" rowspan="2"><img src="~x/img/woeflag/emp.png" alt=" "/></td>
		<td align="center" class="title"><img src="~x/img/woeflag/title_2.png" alt=" "/></td>
	</tr>
	<tr>
		<td width="120px" align="center" valign="top">
			<?php foreach ($castles as $woe1): ?>
				<?php for($i = 1; $i < sizeof($woeFlags1)+1; $i++): ?>
					<?php if ($woe1->castle_id == $woeFlags1[$i]): ?>
						<div class="woeflag">
							<?php
							if ($woe1->emblem_len)	{	$src = $this->emblem($woe1->guild_id);	}
										else	{	$src = "~x/img/woeflag/none.png";		}

							if ($woe1->guild_name)	{	$gname = htmlspecialchars($woe1->guild_name);	}
										else	{	$gname = "N/A";									}
							?>
							<img src="<?php echo $src ?>" alt=" " title="<b>Guild: <?php echo $gname ?></b><br/>Castle: <?php echo htmlspecialchars($castleNames[$woe1->castle_id]) ?>"/>
						</div>
					<?php endif ?>
				<?php endfor ?>
			<?php endforeach ?>
		</td>
		<td width="120px" align="center" valign="top">
			<?php foreach ($castles as $woe2): ?>
				<?php for($i = 1; $i < sizeof($woeFlags2)+1; $i++): ?>
					<?php if ($woe2->castle_id == $woeFlags2[$i]): ?>
						<div class="woeflag">
							<?php
							if ($woe2->emblem_len)	{	$src = $this->emblem($woe2->guild_id);	}
										else	{	$src = "~x/img/woeflag/none.png";		}

							if ($woe2->guild_name)	{	$gname = htmlspecialchars($woe2->guild_name);	}
										else	{	$gname = "N/A";									}
							?>
							<img src="<?php echo $src ?>" alt=" " title="<b>Guild: <?php echo $gname ?></b><br/>Castle: <?php echo htmlspecialchars($castleNames[$woe2->castle_id]) ?>"/>
						</div>
					<?php endif ?>
				<?php endfor ?>
			<?php endforeach ?>
		</td>
	</tr>
</table>
<?php endif ?>

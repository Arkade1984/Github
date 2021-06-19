<?php
return array(
	'modules' => array(
		'vote' => array(
			'index'			=> AccountLevel::ANYONE,
			'out'			=> AccountLevel::NORMAL
		),
		'banner' => array(
			'index'    		=> AccountLevel::ADMIN,
			'add'      		=> AccountLevel::ADMIN,
			'delete'   		=> AccountLevel::ADMIN,
			'edit'   		=> AccountLevel::ADMIN
		)
	)
)
?>

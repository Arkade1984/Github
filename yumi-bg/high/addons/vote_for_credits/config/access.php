<?php
return array(
	'modules' => array(
		// Voting page is accessible to anyone who is logged in.
		'vote' => array(
			'index'    => AccountLevel::ANYONE,
			'out'      => AccountLevel::NORMAL,
			'stats'    => AccountLevel::ADMIN
		),
		
		// Banner management should only be accessible to administrators.
		'banner' => array(
			'index'    => AccountLevel::ADMIN,
			'add'      => AccountLevel::ADMIN,
			'edit'     => AccountLevel::ADMIN,
			'delete'   => AccountLevel::ADMIN
		)
	)
)
?>
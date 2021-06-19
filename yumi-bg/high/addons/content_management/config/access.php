<?php
return array(
	'modules' => array(
		'pages' => array(
            'index' => AccountLevel::ADMIN,
            'add' => AccountLevel::ADMIN,
            'delete' => AccountLevel::ADMIN,
            'edit' => AccountLevel::ADMIN,
			'content' => AccountLevel::ANYONE,
		),
        'news'  => array(
            'index' =>  AccountLevel::ADMIN,
            'add' =>  AccountLevel::ADMIN,
            'edit' =>  AccountLevel::ADMIN,
            'delete' =>  AccountLevel::ADMIN,
            'views' =>  AccountLevel::ANYONE,
        ),
	),
)
?>
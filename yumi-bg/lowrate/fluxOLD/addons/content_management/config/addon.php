<?php
return array(
	'MenuItems' => array(
		'Main Menu' => array(
            //'Downloads' => array('module' => 'pages','action'=>'content&path=downloads'),
            //'Rules' => array('module' => 'pages','action'=>'content&path=rules'),
            //'Features' => array('module' => 'pages','action'=>'content&path=features'),
        ),
    'Misc. Stuff' => array(
        'Pages' => array('module' => 'pages'),
        'News' => array('module' => 'news'),
    )
	),
    'SubMenuItems' => array(
        'pages' => array(
            'index' => 'Page Content',
            'add'   => 'Add Content'
        ),
        'news' =>   array(
            'index' =>  'News View',
            'add'   =>  'Add News'
        ),
    ),
    'FluxTables' => array(
        'NewsTable' => 'cp_news',
        'PagesTable' => 'cp_pages',
    )
)
?>
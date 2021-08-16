<?php

return [
    'name' => 'Feedy', 
    'version' => '1.0.0', 
    'tagline' => 'The easy way to collect feedback.',
	'url' => 'https://feedy.btekno.id', 

    'meta' => [
    	'author' => 'Noviyanto Rahmadi <novay@btekno.id>', 
    	'description' => 'Feedy - The easy way to collect feedback.'
    ], 
	
	'assets' 	=> [
		'favicon' 	 => asset('assets/default/img/logo/bt-feedy.png'),
        'logo'       => asset('assets/default/img/logo/bt-feedy.png'),
		'logo-light' => asset('assets/default/img/logo/bt-feedy.png'),
	], 

    'emoji'    => [
        'amazing'    => asset('assets/v1/img/reactions/loved.gif'),
        'great'      => asset('assets/v1/img/reactions/lol.gif'),
        'ok'         => asset('assets/v1/img/reactions/nice.png'),
        'bad'        => asset('assets/v1/img/reactions/cry.gif'),
        'terrible'   => asset('assets/v1/img/reactions/wow.gif'),
    ], 
];

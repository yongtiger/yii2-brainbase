<?php
return [
    'adminEmail' => 'admin@example.com',

    ///[v0.10.5 (filter theme bootstrap)]
    'theme' => [
    	'themesRootPath' => 'themes',
    	'bootstrapPathFile' => 'src\\Bootstrap',
    	'bootstrapPathPattern' => '{theme-path}\\{bootstrap-path-file}',
	    'themePathMap' => [
	        '@frontend/views' => '{active-theme-path}/views',
	        // more path maps ...
	    ],
    ]

];

<?php
return [
    'adminEmail' => 'admin@example.com',

    ///Clear dirs e.g. frontend/backend assets, data etc. 
    'clearDirs' => [
    	'@backend/web/assets',
    	'@backend/runtime/debug',
    	'@backend/runtime/logs',
    	'@frontend/web/assets',
    	'@frontend/runtime/debug',
    	'@frontend/runtime/logs',
    	// more dirs to clear ...
    ],

];

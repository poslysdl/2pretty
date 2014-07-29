<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'posly.com',

	// preloading 'log' component
	'preload'=>array('log'),
	'import'=>array(
                'application.components.*',
                'application.models.*',
        ),
        'timeZone' => 'Asia/Calcutta',

	// application components
	'components'=>array(
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=newposly',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		  'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                                        'logFile'=>'cron.log',
                    'levels'=>'error, warning',
                ),
                                array(
                                        'class'=>'CFileLogRoute',
                                        'logFile'=>'cron_trace.log',
                                        'levels'=>'trace',
                                ),
            ),
                       
        ),
	),
);
<?php
   mb_internal_encoding('UTF-8');
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Modus — спецмонтаж',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'defaultController'=>'site',
	'language'          =>'uk',
    'modules'=>array(
    	 'gii'=>array(
        	'class'=>'system.gii.GiiModule',
            'password'=>'gulman',
            'ipFilters'=>array('94.244.38.34', '91.214.17.6', '93.126.70.90', '10.1.1.46', '93.126.70.35'),
         ),
	),
	// application components
	'components'=>array(
		'mailer'=>array(
			'class'=>'application.extensions.mailer.EMailer',
			'SMTPAuth'=>true,
			'Host'=>'mail.teedex.net:465',
			'SMTPSecure' => 'ssl',
			'Username'=>'info@modus-sm.kiev.ua',
			'Password'=>'UhZbBAUn',
			'CharSet'=>'utf-8',
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
				'/<static_page:\w+>.html'=>'site/static',
          	  	'' => 'site/index',
          	  	'/<action:(contact|login|logout)>/*' => 'site/<action>',
         	  	'/<controller:\w+>/<id:\d+>'=>'<controller>/view',
          	  	'/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);
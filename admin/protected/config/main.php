<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'E-Alumni',
	'theme'=>'ss',

	'defaultController' => 'alumni/alumni/dashboard',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.admin.models.*',
		'application.modules.alumni.models.*',
		'application.modules.campus.models.*',
		'application.modules.campusFaculty.models.*',
		'application.modules.country.models.*',
		'application.modules.faculty.models.*',
		'application.modules.industrialCategory.models.*',
		'application.modules.level.models.*',
		'application.modules.mode.models.*',
		'application.modules.organization.models.*',
		'application.modules.organizationType.models.*',
		'application.modules.pending.models.*',
		'application.modules.program.models.*',
		'application.modules.race.models.*',
		'application.modules.religion.models.*',
		'application.modules.salaryRange.models.*',
		'application.modules.skill.models.*',
		'application.modules.skillCategory.models.*',
		'application.modules.state.models.*',
		'application.modules.dashboard.models.*',
		'application.modules.professionalism.models.*',
		'application.modules.nonUitmQualification.models.*',
		'application.modules.uitmQualification.models.*',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'alumni',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

		'admin',
		'alumni',
		'campus',
		'campusFaculty',
		'country',
		'faculty',
		'industrialCategory',
		'level',
		'mode',
		'organization',
		'organizationType',
		'pending',
		'program',
		'race',
		'religion',
		'salaryRange',
		'skill',
		'skillCategory',
		'state',
		'dashboard',
		'professionalism',
		'nonUitmQualification',
		'uitmQualification',

	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
	*/
		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);

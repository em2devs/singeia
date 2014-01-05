<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SINGEIA',
        'language'=>'pt_br',
        'theme'=>'twitter_starter',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.user.models.*',
                'application.modules.user.components.*',
                'application.modules.rights.*',
                'application.modules.rights.components.*',
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
                'user'=>array(
                        'tableUsers' => 'tbl_user',
                        'tableProfiles' => 'tbl_user_profiles',
                        'tableProfileFields' => 'tbl_user_profiles_fields',
                        'hash' => 'md5',                                    # encrypting method (php hash function)
                        'sendActivationMail' => true,                       # send activation email
                        'loginNotActiv' => false,                           # allow access for non-activated users
                        'activeAfterRegister' => false,                     # activate user on registration (only sendActivationMail = false)
                        'autoLogin' => true,                                # automatically login from registration
                        'registrationUrl' => array('/user/registration'),   # registration path
                        'recoveryUrl' => array('/user/recovery'),           # recovery password path
                        'loginUrl' => array('/user/login'),                 # login form path
                        'returnUrl' => array('/user/profile'),              # page after login
                        'returnLogoutUrl' => array('/user/login'),          # page after logout
                ),
                'rights'=>array(
                        'superuserName'=>'Admin',                       // Name of the role with super user privileges. 
                        'authenticatedName'=>'Authenticated',           // Name of the authenticated user role. 
                        'userIdColumn'=>'id',                           // Name of the user id column in the database. 
                        'userNameColumn'=>'username',                   // Name of the user name column in the database. 
                        'enableBizRule'=>true,                          // Whether to enable authorization item business rules. 
                        'enableBizRuleData'=>true,                      // Whether to enable data for business rules. 
                        'displayDescription'=>true,                     // Whether to use item description instead of name. 
                        'flashSuccessKey'=>'RightsSuccess',             // Key to use for setting success flash messages. 
                        'flashErrorKey'=>'RightsError',                 // Key to use for setting error flash messages. 
                        'baseUrl'=>'/rights',                           // Base URL for Rights. Change if module is nested. 
                        'layout'=>'rights.views.layouts.main',          // Layout to use for displaying Rights. 
                        'appLayout'=>'//layouts/main',  // Application layout. 
                        //'cssFile'=>'rights.css',                        // Style sheet file to use for Rights. 
                        'install'=>false,                               // Whether to enable installer. 
                        'debug'=>false,                                 // Whether to enable debug mode. 
                ),
	),

	// application components
	'components'=>array(
		'user'=>array(
                        'class'=>'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
//                        'loginUrl'=>array('/user/login'),
		),
                'authManager'=>array(
                        'class'=>'RDbAuthManager',
                        'connectionID'=>'db',
                        'rightsTable' => 'tbl_rights',
                        'assignmentTable' => 'tbl_rights_auth_assignment',
                        'itemTable' => 'tbl_rights_auth_item',
                        'itemChildTable' => 'tbl_rights_auth_item_child',
                        'defaultRoles'=>array('Authenticated'),
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
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;dbname=singeia',
			'emulatePrepare' => true,
			'username' => 'singeia',
			'password' => 'singeia',
			'charset' => 'utf8',
                        'tablePrefix' => 'tbl_',
		),
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
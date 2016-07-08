<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'MTPORTAL',
    'theme'=>'admin',
    'language'=>'fa_ir',
    'aliases' => array(
        'yiistrap' => realpath(__DIR__ . '/../extensions/yiistrap'), // change this if necessary
      //  'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap'),
        'RestfullYii' =>realpath(__DIR__ . '/../extensions/starship/RestfullYii'),

    ),
	// preloading 'log' component
	'preload'=>array('log'),


	// autoloading model and component classes
	'import'=>array(
        'bootstrap.components.Bootstrap',
        'yiistrap.behaviors.*',
        'yiistrap.components.*',
        'yiistrap.form.*',
        'yiistrap.helpers.*',
        'yiistrap.widgets.*',
        'application.helpers.*',
		'application.models.*',
		'application.components.*',
        'application.extensions.*',

        'application.modules.Module.ModuleModule',
        'application.modules.Module.models.*',
        'application.modules.Menu.MenuModule',
        'application.modules.Menu.models.*',
        'application.modules.Contactus.ContactusModule',
        'application.modules.Contactus.models.*',
        'application.modules.Page.PageModule',
        'application.modules.Page.models.*',
        'application.modules.Product.ProductModule',
        'application.modules.Product.models.*',
        'application.modules.Articles.BlogModule',
        'application.modules.Articles.models.*',
        'application.modules.Blog.BlogModule',
        'application.modules.Blog.models.*',
        'application.modules.ProductWarehouse.WarehouseModule',
        'application.modules.ProductWarehouse.models.*',
        'application.modules.ProductSupplier.SupplierModule',
        'application.modules.ProductSupplier.models.*',
        'application.modules.Shop.ShopModule',
        'application.modules.Shop.models.*',
        'application.modules.Adv.AdvModule',
        'application.modules.Adv.models.*',
        'application.modules.Match.MatchModule',
        'application.modules.Match.models.*',
        'application.modules.Hadith.HadithModule',
        'application.modules.Hadith.models.*',
        'application.modules.Price.PriceModule',
        'application.modules.Price.models.*',
        'application.modules.Content.ContentModule',
        'application.modules.Content.models.*',
        'application.modules.Logo.LogoModule',
        'application.modules.Logo.models.*',
        'application.modules.Jobs.JobsModule',
        'application.modules.Jobs.models.*',
        'application.modules.JobsCategory.JobsCategoryModule',
        'application.modules.JobsCategory.models.*',
        'application.modules.Cooking.CookingModule',
        'application.modules.Cooking.models.*',
        'application.modules.Admin.models',
        'application.modules.Admin.AdminModule',
        'application.modules.News.models.*',
        'application.modules.News.NewsModule',
        'application.modules.QuranRecitation.models.*',
        'application.modules.QuranRecitation.QuranRecitationModule',
        'application.modules.Gallery.models.*',
        'application.modules.Gallery.GalleryModule',
        'application.modules.Health.models.*',
        'application.modules.Health.HealthModule',
        'application.modules.Notification.models.*',
        'application.modules.Notification.NotificationModule',
        'application.modules.user.*',
        'application.modules.user.models.*',
        'application.modules.user.controllers.*',
        'application.modules.user.components.*',
        'application.extensions.galleryManager.*',
        'application.extensions.galleryManager.models.*',
	),

	'modules'=>array(
        'Portal',
        'Admin',
        'Module',
        'Contactus',
        'Page',
        'Content',
        'Deals',
        'Language',
        'Logo',
        'Menu',
        'Product',
        'News',
        'Adv',
        'Notification',
        'Blog',
        'Articles',
        'ProductWarehouse',
        'ProductSupplier',
        'Shop',
        'Gallery',
        #...
        'user'=>array(
            # encrypting method (php hash function)
            'hash' => 'md5',

            # send activation email
            'sendActivationMail' => true,

            # allow access for non-activated users
            'loginNotActiv' => false,

            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,

            # automatically login from registration
            'autoLogin' => true,

            # registration path
            'registrationUrl' => array('/user/registration'),

            # recovery password path
            'recoveryUrl' => array('/user/recovery'),

            # login form path
            'loginUrl' => array('/user/login'),

            # page after login
            'returnUrl' => array('/user/profile'),

            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),

		// uncomment the following to enable the Gii tool
		/**/
		'gii'=>array(
            'generatorPaths' => array('bootstrap.gii'),
            'class'=>'system.gii.GiiModule',
			'password'=>'110',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(
        'jdate' => array(
    'class' => 'ext.jdate.JDateTime',
    'convert' => true,
    'jalali' => true,
    'timezone' => 'Asia/Tehran',
),
       'bootstrap' => array(
           'class'=>'bootstrap.components.Bootstrap',
        ),
        'user'=>array(
            // enable cookie-based authentication
            'class' => 'WebUser',
            'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
        ),
        'urlManager'=>array(
            'rules'=>array(
                'page/<name>-<id:\d+>.html'=>'cms/node/page', // clean URLs for pages
            ),

        ),
        'image'=>array(
            'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
            'params'=>array('directory'=>'C:/Program Files (x86)/EasyPHP-12.1/www/mtportal/'),
            //'params'=>array('directory'=>'/opt/local/bin'),
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

		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		*/'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=mtportal',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',			
            'tablePrefix' => 'tbl_'
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
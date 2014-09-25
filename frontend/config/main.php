<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-frontend',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'controllerNamespace' => 'frontend\controllers',
		'layout' => 'main2',
		'components' => [
				'localtime'=>array(
						'class'=>'LocalTime',
				),
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				'db' => [ 
						'class' => 'yii\db\Connection',
						'dsn' => 'mysql:host=localhost;dbname=website', // MySQL, MariaDB
						'username' => 'root',
						'password' => '',
						'charset' => 'utf8',
				],
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error',
												'warning' 
										] 
								] 
						] 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'urlManager' => [ 
						'enablePrettyUrl' => true,
						'rules' => []
						// your rules go here
						 
				// ...
				],
 				'authManager' => [
 					//'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
 					'class' => 'yii\rbac\DbManager',
 					'defaultRoles' => ['admin', 'author'],
 				]
		],
		'modules' => [ 
				'admin' => [ 
						'class' => 'frontend\modules\admin\Module'
						//'class' => 'mdm\admin\Module'
				],
				'rbac' =>[
						'class' => 'mdm\admin\Module'
				]
		],
// 		'as access' => [ 
// 				'class' => 'mdm\admin\components\AccessControl',
// 				'allowActions' => [ 
// 						'admin/*'  // add or remove allowed actions to this list
// 				 ]
// 		],
		'params' => $params 
];

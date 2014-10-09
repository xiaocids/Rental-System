<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-backend',
		'basePath' => dirname ( __DIR__ ),
		'controllerNamespace' => 'backend\controllers',
		'bootstrap' => [ 
				'log' 
		],
		'modules' => [ 
				'm1' => [ 
						'class' => 'app\modules\m1\Module' 
				],
				'gridview' =>  [
			        	'class' => '\kartik\grid\Module'
			    ]
		],
		'layout'=>'dashboard',
		'components' => [ 
				
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => false 
				],
				
				'db' => require (__DIR__ . '/../../common/config/db.php'),
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
				'request' => [
						'cookieValidationKey' => 'Tkasj*^*adiujaslJL57sd',
				],
		],
		'params' => $params 
];



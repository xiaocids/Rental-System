<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace backend\assets;

use yii\web\AssetBundle;

/**
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
			//'css/bootstrap.min.css',
			'css/sb-admin-2.css',
			'css/plugins/metisMenu/metisMenu.min.css' ,
			'font-awesome-4.1.0/css/font-awesome.min.css'
	];
	public $js = [
			'js/sb-admin-2.js',
			//'js/jquery-1.11.0.js',
			'js/jquery-ui.js',
			'js/bootstrap.min.js',
			'js/plugins/metisMenu/metisMenu.min.js'
	];
	public $depends = [			
			'yii\bootstrap\BootstrapAsset',
			'yii\web\YiiAsset',
	];
}

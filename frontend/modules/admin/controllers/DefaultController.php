<?php

namespace frontend\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
	public $layout = 'dashboard';
    public function actionIndex()
    {
    	$this->view->title = 'Dashboard';
        return $this->render('index');
    }
}
